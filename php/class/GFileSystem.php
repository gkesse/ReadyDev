<?php   
    //===============================================
    class GFileSystem {
        //===============================================
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
        private $m_iconMap = array();
        private $m_binMap = array();
        //===============================================
        private function __construct() {
            $this->m_unused = array(
            "/^index.php$/", 
            "/^build$/", 
            "/debug$/", 
            "/release$/", 
            "/user$/");
            
            $this->m_iconMap = array(
            "file" => array("file-o"),
            "dir" => array("folder"),
            "img" => array("file-image-o", "png", "bmp", "jpeg", "jpg", "gif", "tiff"),
            "txt" => array("file-text-o"),
            "bin" => array("tasks", "exe", "dll", "lib", "so", "a"),
            "bat" => array("cogs", "bat", "sh")
            );
            
            $this->m_binMap = $this->m_iconMap["bin"];
        }
        //===============================================
        public static function Instance() {
            if(is_null(self::$m_instance)) {
            self::$m_instance = new GFileSystem();  
        }
        return self::$m_instance;
        }
        //===============================================
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
                                $m_isDir2 = is_dir($m_fullname) ? 1 : 0;
                                if($m_readdir == "..") $m_url = $this->m_redo;
                                else $m_url = $this->m_link . "/" . $m_readdir;
                                $m_docpath = dirname($_SERVER["PHP_SELF"]);
                                if($m_url != "") {if($m_url[0] != "/") $m_url = "/" . $m_url;}
                                if($m_url != "") $m_docpath = $m_docpath."/doc/path" . $m_url;
                                $m_icon = $this->getIcon($m_fullname);
                                if($this->isBinary($m_fullname)) $m_docpath = "javascript:void(0);";
                                $this->m_directoryMap[] = array($m_isDir2, $m_readdir, $m_docpath, $m_icon);
                                usort($this->m_directoryMap, array("GFileSystem", "SortDirectory"));
                            }
                        }
                        closedir($m_opendir);
                    }
                    $this->m_status = "DIR";
                }
                else {
                    $this->m_status = "FILE";
                    $m_ext = pathinfo($this->m_directory, PATHINFO_EXTENSION);
                    $m_ext = strtolower($m_ext);
                    $m_isImage = in_array($m_ext, $this->m_iconMap["img"]);
                    if($m_isImage == true) $this->m_status = "IMAGE";
                }
            }
            else {
                $this->m_status = "ERROR";
            }
        }
        //===============================================
        public function getDirectory() {
            $this->setDirectory();
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
            $m_docroot = dirname($_SERVER["PHP_SELF"]);
            $this->m_linkMap[] = array("Root", $m_docroot);    
            for($i = 0; $i < count($this->m_links); $i++) {
                $m_path = "";
                for($j = 0; $j <= $i; $j++) {
                    if($j != 0) $m_path .= "/";
                    $m_path .= $this->m_links[$j];
                }
                $m_docpath = $m_docroot."/doc/path/".$m_path;
                $this->m_linkMap[] = array($this->m_links[$i], $m_docpath);
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
        public function setDirectory() {
            $m_file = $_SERVER["DOCUMENT_ROOT"];
            $m_existDir = GConfig::Instance()->existData("dir");
            if($m_existDir == true) $m_file = GConfig::Instance()->getData("dir");
            $this->m_root = dirname($m_file);
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
        public function getIcon($filename) {
            $m_ext = pathinfo($filename, PATHINFO_EXTENSION);
            $m_ext = strtolower($m_ext);
            $m_icon = "file";
            
            if(is_dir($filename)) {$m_icon = "dir";}
            else if(in_array($m_ext, $this->m_iconMap["img"])) {$m_icon = "img";}
            else if(in_array($m_ext, $this->m_iconMap["bin"])) {$m_icon = "bin";}
            else if(in_array($m_ext, $this->m_iconMap["bat"])) {$m_icon = "bat";}
            else if($m_ext != "") {$m_icon = "txt";}
            
            return $this->m_iconMap[$m_icon][0];
        }
        //===============================================
        public function isBinary($filename) {
            $m_ext = pathinfo($filename, PATHINFO_EXTENSION);
            $m_isBinary = false;
            if(in_array($m_ext, $this->m_binMap)) {$m_isBinary = true;}           
            return $m_isBinary;
        }
        //===============================================
        private static function SortDirectory($dataA, $dataB) {
            $m_sort = false;
            if($dataA[0] < $dataB[0]) $m_sort = !$m_sort; 
            else if($dataA[0] == $dataB[0]) {
                $m_strcmp = strcmp(strtolower($dataA[1]), strtolower($dataB[1]));
                if($m_strcmp > 0) $m_sort = !$m_sort;
            }
            return $m_sort;
        }
        //===============================================
    }
?>