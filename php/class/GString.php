<?php   
    class GString {
        //===============================================
        private static $m_instance = null;
        //===============================================
        private function __construct() {
        
        }
        //===============================================
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GString();  
            }
            return self::$m_instance;
        }
        //===============================================
        public function length($str) {
			$lLength = strlen($str);
			return $lLength;
        }
        //===============================================
        public function trimData($str) {
			$lTrim = trim($str);
			return $lTrim;
        }
        //===============================================
        public function splitData($str) {
			$lSplit = preg_split("/[\s]+=[\s]+/", $str);
			return $lSplit;
        }
        //===============================================
        public function explodeData($str, $sep) {
			$lExplode = explode($sep, $str);
			return $lExplode;
        }
        //===============================================
    }
?>