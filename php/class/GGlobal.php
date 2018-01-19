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
            if(empty($data) == false) {
                if($data[0] != "/") $data = "/".$data;
            }
            $m_url = "http://";
            $m_url .= $_SERVER['HTTP_HOST'];
            $m_url .= $data;
            return $m_url;        
        }
        //===============================================
        public function getPath($data) {
            if(empty($data) == false) {
                if($data[0] != "/") $data = "/".$data;
            }
            $m_url = $_SERVER['DOCUMENT_ROOT'];
            $m_url .= $data;
            return $m_url;        
        }
        //===============================================
        public function search($arrayMap, $field, $value) {
            $m_dataMap = array();
            foreach($arrayMap as $key => $dataMap) {
                if($dataMap[$field] == $value) {
                    $m_dataMap = $dataMap;
                }
            }
            return $m_dataMap;
        }
        //===============================================
    }
?>        