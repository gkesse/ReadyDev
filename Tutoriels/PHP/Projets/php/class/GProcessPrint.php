<?php   
    class GProcessPrint extends GProcess {
        //===============================================
        private static $m_instance = null;
        //===============================================
        private function __construct() {
        
        }
        //===============================================
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GProcessPrint();  
            }
            return self::$m_instance;
        }
        //===============================================
        public function run() {
			GPrint::Instance()->show("Bonjour tout le monde"); 
        }
        //===============================================
    }
?>