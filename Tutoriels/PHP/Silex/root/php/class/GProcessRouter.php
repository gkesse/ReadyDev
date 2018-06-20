<?php 
    //===============================================
    require "/vendor/autoload.php";
    //===============================================
    class GProcessRouter extends GProcess {
        //===============================================
        private static $m_instance = null;
        //===============================================
        private function __construct() {
        }
        //===============================================
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GProcessRouter();  
            }
            return self::$m_instance;
        }
        //===============================================
        public function run() {
            $lApp = new Silex\Application();
            
            $lApp->get("/", function () {
                $lData = "";
                $lData .= "<br/>### Routeur Message<br/><br/>";
                $lData .= "Bonjour tout le monde<br/>";
                return $lData;
            });

            $lApp->get("/Bonjour/{name}", function($name) use ($lApp) {
                $lData = "";
                $lData .= "<br/>### Routeur Bonjour<br/><br/>";
                $lData .= "Routeur: Bonjour ".$lApp->escape($name)."<br/>";
                return $lData;
            });
            
            $lApp->run();        
        }
        //===============================================
    }
?>        