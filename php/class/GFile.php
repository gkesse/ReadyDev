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
        public function getData($file) {
            $lFile = $this->getRealPath($file);
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
            $lFile = $this->getRealPath($root."/".$file);
            $lData = file_get_contents($lFile);
            $lData = trim($lData);
            return $lData;
        }
        //===============================================
        public function saveData($file, $data) {
            $lFile = $this->getRealPath($file);
            file_put_contents($lFile, $data);
        }
        //===============================================
        public function getInclude($file, $params=array()) {
            ob_start();                    
            include($file);  
            $lContent = ob_get_contents();
            ob_end_clean();
            return $lContent;
        }
        //===============================================
        public function getDateTime($file) {
            $lFile = $this->getRealPath($file."/index.php");
            $lDate = filemtime($lFile);
            $lDate = date("Y-m-d", $lDate);
            return $lDate;
        }
        //===============================================
        public function getRealPath($path) {
			$lPath = $_SERVER["DOCUMENT_ROOT"];
			$lPath = realpath($lPath);
			$lPath .= "/".$path;
			$lPath = realpath($lPath);
			return $lPath;
        }
        //===============================================
        public function existData($file) {
            $lFile = $this->getRealPath($file);
			$lExist = file_exists($lFile);
            if($lExist == false) {GPrint::Instance()->printData("[ GFile ] Error GFile::exist: $file"); exit;}
        }
        //===============================================
    }
?>