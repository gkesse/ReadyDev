<?php   
    class GView {
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
                self::$m_instance = new GView();  
            }
            
            return self::$m_instance;
        }
        //===============================================
        // public methods
        public function getView($page) {
            $m_file = "data/json/views.json";
            $m_data = GJson::Instance()->getData($m_file);
            $m_page = strtolower($page);
            
            if(!isset($m_data[$m_page])) {
                $m_data[$m_page] = 0; 
            }
            
            $m_data[$m_page]++;
            
            GJson::Instance()->saveData($m_file, $m_data);
            return $m_data[$m_page];
        }
        //===============================================
    }
?>