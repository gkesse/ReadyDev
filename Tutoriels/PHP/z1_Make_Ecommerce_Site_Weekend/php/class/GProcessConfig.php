<?php   
    class GProcessConfig extends GProcess {
        //===============================================
        private static $m_instance = null;
        //===============================================
        private function __construct() {
        
        }
        //===============================================
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GProcessConfig();  
            }
            return self::$m_instance;
        }
        //===============================================
        public function run() {
            GConfig::Instance()->setData("Nom", "KESSE");
            GConfig::Instance()->setData("Prenom", "Gerard");
            GConfig::Instance()->setData("Email", "gerard.kesse@readydev.com");
            GConfig::Instance()->setData("Diplome", "Ingenieur");
            GConfig::Instance()->setData("Formation", "Informatique Industrielle");
            GConfig::Instance()->setData("Ecole", "Polytech'Montpellier");
            GConfig::Instance()->showData();
        }
        //===============================================
    }
?>