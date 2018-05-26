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
        public function getTextTrim($data) {
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
        public function getLink($data, $charset="UTF-8") {
            $m_link = htmlentities($data, ENT_NOQUOTES, $charset);
			$m_link = preg_replace('#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $m_link);
			$m_link = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $m_link);
			$m_link = preg_replace('#&[^;]+;#', '', $m_link);
			$m_link = preg_replace('#[ \']#', '-', $m_link);
            return $m_link;        
        }
        //===============================================
        public function getPath($data) {
            $m_url = $_SERVER['DOCUMENT_ROOT'];
			$m_url = realpath($m_url);
            $m_url .= "/".$data;
			$m_url = realpath($m_url);
            return $m_url;        
        }
        //===============================================
        public function getPath2($data) {
            $m_url = $_SERVER['DOCUMENT_ROOT'];
			$m_url = realpath($m_url);
            $m_url .= "/".$data;
            return $m_url;        
        }
        //===============================================
        public function searchData($arrayMap, $field, $value) {
            $m_dataMap = array();
            foreach($arrayMap as $key => $dataMap) {
                if($dataMap[$field] == $value) {
                    $m_dataMap = $dataMap;
                }
            }
            return $m_dataMap;
        }
        //===============================================
        public function existData($dataMap, $field, $value) {
            foreach($dataMap as $key => $lDataMap) {
                if($lDataMap[$field] == $value) {
                    return true;
                }
            }
            return false;
        }
        //===============================================
        public function getData($dataMap, $field, $value, $field2) {
            foreach($dataMap as $key => $lDataMap) {
                if($lDataMap[$field] == $value) {
                    return $lDataMap[$field2];
                }
            }
            return "";
        }
        //===============================================
    }
?>        