<?php   
    class GGlobal {
        //===============================================
        // private members
        private static $m_instance = null;
        private $m_title;
        //===============================================
        // contructor
        private function __construct() {
            $this->m_title = "";
        }
        //===============================================
        // static methods
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GGlobal();  
            }
            
            return self::$m_instance;
        }
        //===============================================
        // public methods
        public function getText($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            //$data = nl2br($data);
            return $data;        
        }
        //===============================================
    }
?>        