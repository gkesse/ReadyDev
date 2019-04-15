<?php   
    class GConfig {
        //===============================================
        private static $m_instance = null;
		private $m_dataMap = array();
        //===============================================
        private function __construct() {
        
        }
        //===============================================
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GConfig();  
            }
            return self::$m_instance;
        }
        //===============================================
        public function setData($key, $data) {
            $this->m_dataMap[$key] = $data;
        }
        //===============================================
        public function getData($key) {
            return $this->m_dataMap[$key];
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