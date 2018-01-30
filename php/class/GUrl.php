<?php   
    class GUrl {
        //===============================================
        private static $m_instance = null;
        //===============================================
        private function __construct() {
            if(!isset($_SESSION["lasturl"])) {
                $_SESSION["lasturl"] = "/";
            }
        }
        //===============================================
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GUrl();  
            }
            return self::$m_instance;
        }
        //===============================================
        public function lastUrl() {
            if(!GConfig::Instance()->existData("title")) return; 
            $m_title = GConfig::Instance()->getData("title"); 
            if($m_title == "Connexion" || $m_title == "Administration" || $m_title == "ERREUR") return;
            $_SESSION["lasturl"] = dirname($_SERVER["PHP_SELF"])."/";
        }
        //===============================================
    }
?>