<?php   
    class GFile {
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
                self::$m_instance = new GFile();  
            }
            
            return self::$m_instance;
        }
        //===============================================
        // public methods
        public function getData($file) {
            $m_file = $_SERVER["DOCUMENT_ROOT"] . "/" . $file;
            $m_data = file_get_contents($m_file);
            return $m_data;
        }
        //===============================================
        public function getData2($file) {
            $m_data = file_get_contents($file);
            return $m_data;
        }
        //===============================================
        public function getInclude($file, $data) {
            ob_start();                    
            include($file);  
            $m_content = ob_get_contents();
            ob_end_clean();
            return $m_content;
        }
        //===============================================
    }
?>