<?php   
    class GPrint {
        //===============================================
        private static $m_instance = null;
        //===============================================
        private function __construct() {
        
        }
        //===============================================
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GPrint();  
            }
            return self::$m_instance;
        }
        //===============================================
        public function printData($data) {
            echo $data;
        }
        //===============================================
    }
?>