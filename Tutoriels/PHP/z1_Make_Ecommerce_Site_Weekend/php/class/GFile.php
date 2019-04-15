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
        public function realPath($path) {
			$lPath = $_SERVER["DOCUMENT_ROOT"];
			$lPath = realpath($lPath);
			$lPath .= "/".$path;
			$lPath = realpath($lPath);
			return $lPath;
        }
        //===============================================
    }
?>