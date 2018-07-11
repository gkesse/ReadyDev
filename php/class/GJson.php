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
            $lFile = $_SERVER["DOCUMENT_ROOT"]."/".$file;
            $lJson = json_encode($data);
            file_put_contents($lFile, $lJson);
        }
        //===============================================
        public function getData($file) {
            $lData = GFile::Instance()->getData($file);
            $lJson = json_decode($lData, true);
            return $lJson;
        }
        //===============================================
    }
?>