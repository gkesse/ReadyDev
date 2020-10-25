<?php   
    class GFile {
        //===============================================
        private static $m_instance = null;
        //===============================================
        private function __construct() {
        
        }
        //===============================================
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GFile();  
            }
            return self::$m_instance;
        }
        //===============================================
        public function getPath($file) {
            $lSep = DIRECTORY_SEPARATOR;
            $lFile = realpath($_SERVER["DOCUMENT_ROOT"]).$lSep.$file;
            return $lFile;
        }
        //===============================================
        public function getData($file) {
            $lSep = DIRECTORY_SEPARATOR;
            $lFile = $_SERVER["DOCUMENT_ROOT"];
			$lFile = realpath($lFile);
			$lFile .= $lSep.$file;
			$lFile = realpath($lFile);
            $lData = file_get_contents($lFile);
            return $lData;
        }
        //===============================================
        public function getData2($file) {
            $lData = file_get_contents($file);
            return $lData;
        }
        //===============================================
        public function getData3($root, $file) {
            $lSep = DIRECTORY_SEPARATOR;
            $lFile = $_SERVER["DOCUMENT_ROOT"];
			$lFile = realpath($lFile);
			$lFile .= $lSep.$root;
			$lFile = realpath($lFile);
			$lFile .= $lSep.$file;
			$lFile = realpath($lFile);
            $lData = file_get_contents($lFile);
            $lData = trim($lData);
            return $lData;
        }
        //===============================================
        public function saveData($file, $data) {
            $lSep = DIRECTORY_SEPARATOR;
            $lFile = $_SERVER["DOCUMENT_ROOT"];
			$lFile = realpath($lFile);
            $lFile .= $lSep.$file;
            file_put_contents($lFile, $data);
        }
        //===============================================
        public function getInclude($file, $data) {
            ob_start();                    
            include($file);  
            $lContent = ob_get_contents();
            ob_end_clean();
            return $lContent;
        }
        //===============================================
        public function getDateTime($file) {
            $lSep = DIRECTORY_SEPARATOR;
            $lFile = $_SERVER["DOCUMENT_ROOT"];
			$lFile = realpath($lFile);
            $lFile .= $lSep.$file;
			$lFile = realpath($lFile);
            $lFile .= $lSep."index.php";
            $lDate = filemtime($lFile);
            $lDate = date ("Y-m-d", $lDate);
            $lDate = date ("Y-m-d");
            return $lDate;
        }
        //===============================================
    }
?>