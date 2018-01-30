<?php   
    class GMetaData {
        //===============================================
        private static $m_instance = null;
        //===============================================
        private function __construct() {
            
        }
        //===============================================
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GMetaData();  
            }
            return self::$m_instance;
        }
        //===============================================
        public function getData() {
            if(GConfig::Instance()->existData("view") == true) {
                $m_file = "/data/json/";
                $m_file .= GConfig::Instance()->getData("view"); 
                $m_file .= ".json";
                $m_data = GJson::Instance()->getData($m_file);
                if(isset($m_data["meta_data"])) {
                    $m_metaData = $m_data["meta_data"];
                    
                    foreach($m_metaData as $key => $value) {
                        GConfig::Instance()->setData($key, $value);
                    }
                }
            }
        }
        //===============================================
    }
?>        