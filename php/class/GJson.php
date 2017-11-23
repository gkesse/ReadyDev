<?php   
    class GJson {
        //===============================================
        private static $m_instance = null;
        //===============================================
        private function __construct() {
        
        }
        //===============================================
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GJson();  
            }
            return self::$m_instance;
        }
        //===============================================
        public function saveData($file, $data) {
            $m_file = $_SERVER["DOCUMENT_ROOT"]."/".$file;
            $m_json = json_encode($data);
            file_put_contents($m_file, $m_json);
        }
        //===============================================
        public function getData($file) {
            $m_data = GFile::Instance()->getData($file);
            $m_json = json_decode($m_data, true);
            return $m_json;
        }
        //===============================================
    }
?>