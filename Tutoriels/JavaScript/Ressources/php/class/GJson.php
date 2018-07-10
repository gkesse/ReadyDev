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
            $lFile = realpath($lFile);
            $lJson = json_encode($data);
            file_put_contents($lFile, $lJson);
        }
        //===============================================
        public function getData($file) {
            $lFile = $_SERVER["DOCUMENT_ROOT"]."/".$file;
            $lFile = realpath($lFile);
            $lData = file_get_contents($lFile);
            $lJson = json_decode($lData, true);
            return $lJson;
        }
        //===============================================
    }
?>