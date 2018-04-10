<?php   
    class GFile {
        //===============================================
        private static $m_instance = null;
        //===============================================
        private function __construct() {
        
        }
        //===============================================
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GFile();  
            }
            return self::$m_instance;
        }
        //===============================================
        public function getData($file) {
            $m_file = $_SERVER["DOCUMENT_ROOT"];
			$m_file = realpath($m_file);
			$m_file .= "/".$file;
			$m_file = realpath($m_file);
            $m_data = file_get_contents($m_file);
            return $m_data;
        }
        //===============================================
        public function getData2($file) {
            $m_data = file_get_contents($file);
            return $m_data;
        }
        //===============================================
        public function getData3($root, $file) {
            $m_file = $_SERVER["DOCUMENT_ROOT"];
			$m_file = realpath($m_file);
			$m_file .= "/".$root;
			$m_file = realpath($m_file);
			$m_file .= "/".$file;
			$m_file = realpath($m_file);
            $m_data = file_get_contents($m_file);
            return $m_data;
        }
        //===============================================
        public function saveData($file, $data) {
            $m_file = $_SERVER["DOCUMENT_ROOT"];
			$m_file = realpath($m_file);
            $m_file .= "/".$file;
            file_put_contents($m_file, $data);
        }
        //===============================================
        public function getInclude($file, $data) {
            ob_start();                    
            include($file);  
            $m_content = ob_get_contents();
            ob_end_clean();
            return $m_content;
        }
        //===============================================
        public function getDateTime($file) {
            $m_file = $_SERVER["DOCUMENT_ROOT"];
			$m_file = realpath($m_file);
            $m_file .= "/".$file;
			$m_file = realpath($m_file);
            $m_file .= "/"."index.php";
            $m_date = filemtime($m_file);
            $m_date = date ("Y-m-d", $m_date);
            return $m_date;
        }
        //===============================================
    }
?>