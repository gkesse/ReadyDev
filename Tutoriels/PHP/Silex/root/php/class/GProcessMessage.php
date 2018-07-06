<?php 
    //===============================================
    require "/vendor/autoload.php";
    //===============================================
    class GProcessMessage extends GProcess {
        //===============================================
        private static $m_instance = null;
        //===============================================
        private function __construct() {
        }
        //===============================================
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GProcessMessage();  
            }
            return self::$m_instance;
        }
        //===============================================
        public function run() {
            $lApp = new Silex\Application();
            
            $lApp->get("/", function () {
                $lData = "";
                $lData .= "<br/>### Message<br/><br/>";
                $lData .= "Bonjour tout le monde<br/>";
                return $lData;
            });
            
            $lApp->run();        
        }
        //===============================================
    }
?>        