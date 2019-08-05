<?php   
    class GProcessReadyWeb extends GProcess {
        //===============================================
        private static $m_instance = null;
        //===============================================
        private function __construct() {
        
        }
        //===============================================
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GProcessReadyWeb();  
            }
            return self::$m_instance;
        }
        //===============================================
        public function run() {
            //=================================================
            $lData = GJson::Instance()->getData("data/json/Accueil.json");
            GConfig::Instance()->setData("TITLE", "Accueil");
            GConfig::Instance()->setData("MENU", "Accueil");
            GConfig::Instance()->setData("VIEW", "Accueil");
            //=================================================
			GHeader::Instance()->load(); 
			GPage::Instance()->load(); 
			GFooter::Instance()->load(); 
            //=================================================
        }
        //===============================================
    }
?>