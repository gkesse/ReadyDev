<?php   
    class GPostRedirectGet {
        //===============================================
        // private members
        private static $m_instance = null;
        //===============================================
        // contructor
        private function __construct() {
            
        }
        //===============================================
        // static methods
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GPostRedirectGet();  
            }
            
            return self::$m_instance;
        }
        //===============================================
        // public methods
        public function redirect() {
            if(!empty($_POST) OR !empty($_FILES))
            {
                $_SESSION["savePOST"] = $_POST ;
                $_SESSION["saveFILES"] = $_FILES ;
                
                $url = $_SERVER["PHP_SELF"] ;
                
                if(!empty($_SERVER["QUERY_STRING"]))
                {
                    $url .= "?" . $_SERVER["QUERY_STRING"] ;
                }
                
                header("Location: " . $url);
                exit;
            }
            
            if(isset($_SESSION["savePOST"]))
            {
                $_POST = $_SESSION["savePOST"] ;
                $_FILES = $_SESSION["saveFILES"] ;
                
                unset($_SESSION["savePOST"], $_SESSION["saveFILES"]);
            }
        }
        //===============================================
    }
?>