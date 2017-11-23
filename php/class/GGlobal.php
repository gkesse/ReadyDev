<?php   
    class GGlobal {
        //===============================================
        private static $m_instance = null;
        //===============================================
        private function __construct() {

        }
        //===============================================
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GGlobal();  
            }
            return self::$m_instance;
        }
        //===============================================
        public function getText($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;        
        }
        //===============================================
        public function getUrl($data) {
            $m_url = "http://";
            $m_url .= $_SERVER['HTTP_HOST'];
            $m_url .= $data;
            return $m_url;        
        }
        //===============================================
    }
?>        