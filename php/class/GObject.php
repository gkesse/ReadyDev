<?php   
    class GObject {
        //===============================================
        private static $m_instance = null;
        //===============================================
        protected $dom = null;
        //===============================================
        public function __construct() {

        }
        //===============================================
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GObject();  
            }
            return self::$m_instance;
        }
        //===============================================
        public function getDataPath() {
            $lRoot = $_SERVER["DOCUMENT_ROOT"];
            $lData = "data";
            $lPath = sprintf("%s/%s", $lRoot, $lData);
            return $lPath;
        }
        //===============================================
        public function getResourcePath($resource, $filename) {
            $lPath = $filename;
            if($resource != "") {
                $lPath = sprintf("%s/%s", $resource, $lPath);
            }
            if($this->getDataPath() != "") {
                $lPath = sprintf("%s/%s", $this->getDataPath(), $lPath);
            }
            return $lPath;
        }
        //===============================================
    }
?>