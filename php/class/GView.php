<?php   
    class GView {
        private static $m_instance = null;
        //===============================================
        private function __construct() {
            
        }
        //===============================================
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GView();  
            }
            return self::$m_instance;
        }
        //===============================================
        public function getView($page) {
            $m_file = "data/json/views.json";
            $m_data = GJson::Instance()->getData($m_file);
            $m_page = strtolower($page);
            
            if(!isset($m_data[$m_page])) {
                $m_data[$m_page] = 250; 
            }
            else {
                if($m_data[$m_page] < 250) $m_data[$m_page] = 250;
            }
            
            $m_data[$m_page]++;
            ksort($m_data);
            
            GJson::Instance()->saveData($m_file, $m_data);
            return $m_data[$m_page];
        }
        //===============================================
    }
?>