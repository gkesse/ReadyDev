<?php   
    class GFileSystem {
        //===============================================
        // private members
        private static $m_instance = null;
        private $m_directoryMap = array();
        private $m_unused;
        private $m_directory;
        private $m_root;
        private $m_length;
        private $m_link;
        private $m_redo;
        private $m_links = array();
        private $m_linkMap = array();
        private $m_status;
        private $m_isValid;
        //===============================================
        // contructor
        private function __construct() {
            $this->m_linkMap[] = array("Root", ".");
            $this->m_unused = array(
            "/^index.php$/", 
            "/^build$/", 
            "/^bin$/", 
            "/debug$/", 
            "/release$/", 
            "/user$/");
            $this->setDirectory($_SERVER["DOCUMENT_ROOT"]);
        }
        //===============================================
        // static methods
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GFileSystem();  
            }
            return self::$m_instance;
        }
        //===============================================
        // public methods
        public function run() {
            $this->getDirectory();
            $m_fileExists = file_exists($this->m_directory);
            
            if($m_fileExists == true && $this->m_isValid == true) {
                $m_isDir = is_dir($this->m_directory);
                
                if($m_isDir == true) {
                    $m_opendir = opendir($this->m_directory);
                    
                    if($m_opendir == true) { 
                        while(1) {
                            $m_readdir = readdir($m_opendir);
                            if($m_readdir == false) break;
                            $m_isUnused = $this->isFound($m_readdir, $this->m_unused);
                            if($m_readdir != "." && $m_isUnused == false) {
                                if($m_readdir == ".." && $this->m_link == "") continue;
                                $m_fullname = $this->m_directory . "/" . $m_readdir;
                                $m_isDir2 = is_dir($m_fullname);
                                if($m_readdir == "..") $m_url = $this->m_redo;
                                else $m_url = $this->m_link . "/" . $m_readdir;
                                $this->m_directoryMap[] = array($m_isDir2, $m_readdir, $m_url);
                            }
                        }
                        closedir($m_opendir);
                    }
                    $this->m_status = "DIR";
                }
                else {
                    $this->m_status = "FILE";
                    $m_isImage = exif_imagetype($this->m_directory);
                    if($m_isImage != false) $this->m_status = "IMAGE";
                }
            }
            else {
                $this->m_status = "ERROR";
            }
        }
        //===============================================
        public function getDirectory() {
            if(isset($_GET["doc"]) == true) {
                $this->m_directory .= "/" . htmlspecialchars($_GET["doc"]);
                $this->m_directory = realpath($this->m_directory);
                $this->m_link = substr($this->m_directory, $this->m_length + 1);
                $this->m_link = str_replace("\\", "/", $this->m_link);
                $this->m_redo = realpath($this->m_directory . "/..");
                $this->m_redo = substr($this->m_redo, $this->m_length + 1);
                $this->m_redo = str_replace("\\", "/", $this->m_redo);
                if($this->m_link != "") $this->m_links = explode("/", $this->m_link);
            }
            $m_rootDir = substr($this->m_directory, 0, $this->m_length);
            $this->m_isValid = ($m_rootDir == $this->m_root);
        }
        //===============================================
        public function getDirectoryMap() {
            return $this->m_directoryMap;
        }
        //===============================================
        public function getLinks() {
            for($i = 0; $i < count($this->m_links); $i++) {
                $m_path = "";
                for($j = 0; $j <= $i; $j++) {
                    if($j != 0) $m_path .= "/";
                    $m_path .= $this->m_links[$j];
                }
                $this->m_linkMap[] = array($this->m_links[$i], $m_path);
            }
            return $this->m_linkMap;
        }
        //===============================================
        public function getStatus() {
            return $this->m_status;
        }
        //===============================================
        public function getFileName() {
            return $this->m_link;
        }
        //===============================================
        public function setDirectory($file) {
            $this->m_root = dirname($file);
            $this->m_directory = $this->m_root;
            $this->m_length = strlen($this->m_directory);
        }
        //===============================================
        public function isFound($data, $dataMap) {
            foreach($dataMap as $pattern) {
                $m_isFound = preg_match(strtolower($pattern), strtolower($data));
                if($m_isFound == 1) return true;
            }
            return false;
        }
        //===============================================
    }
?>