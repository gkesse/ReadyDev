<?php   
    class GHeaderDefault extends GHeader {
        //===============================================
        private static $m_instance = null;
        //===============================================
        private function __construct() {
        
        }
        //===============================================
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GHeaderDefault();  
            }
            return self::$m_instance;
        }
        //===============================================
        public function load() {
			$lHeader = GFile::Instance()->getInclude("php/tpl/header/default.php"); 
            print_r($lHeader);
        }
        //===============================================
    }
?>