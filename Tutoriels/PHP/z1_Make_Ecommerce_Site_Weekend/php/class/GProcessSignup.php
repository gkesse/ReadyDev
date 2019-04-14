<?php   
    class GProcessSignup extends GProcess {
        //===============================================
        private static $m_instance = null;
        //===============================================
        private function __construct() {
        
        }
        //===============================================
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GProcessSignup();  
            }
            return self::$m_instance;
        }
        //===============================================
        public function run() {
            GHeader::Instance()->start();
			GSignup::Instance()->include(); 
            GFooter::Instance()->end();
        }
        //===============================================
    }
?>