<?php   
    class GConfig {
        //===============================================
        private static $m_instance = null;
        private $m_dataMap = array();
        //===============================================
        private function __construct() {
			$this->m_dataMap["CODE_PRETTIFY"] = true;
			$this->m_dataMap["ACE"] = true;
			$this->m_dataMap["MATHJAX"] = true;
			$this->m_dataMap["LOCK_PAGE"] = true;
        }
        //===============================================
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GConfig();  
            }
            return self::$m_instance;
        }
        //===============================================
        public function setData($key, $value) {
            $this->m_dataMap[$key] = $value;        
        }
        //===============================================
        public function getData($key) {
            $lExist = $this->existData($key);
            if($lExist == false) {die("[ GConfig ] Error GConfig::getData: $key<br>");}
            return $this->m_dataMap[$key];        
        }
        //===============================================
        public function existData($key) {
            $lExist = array_key_exists($key, $this->m_dataMap); 
            return $lExist;            
        }
        //===============================================
        public function showData() {
			foreach($this->m_dataMap as $key => $data) {
				echo $key . " = " . $data . "<br>";
			}
			echo "<br>";
        }
        //===============================================
    }
?>        