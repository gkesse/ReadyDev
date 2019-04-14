<?php   
    class GProcessEcommerce extends GProcess {
        //===============================================
        private static $m_instance = null;
        //===============================================
        private function __construct() {
        
        }
        //===============================================
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GProcessEcommerce();  
            }
            return self::$m_instance;
        }
        //===============================================
        public function run() {
            GHeader::Instance()->include();
            GBody::Instance()->include();
            GFooter::Instance()->include();
        }
        //===============================================
    }
?>