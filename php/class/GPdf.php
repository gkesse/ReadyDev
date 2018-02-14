<?php   
    class GPdf {
        //===============================================
        private static $m_instance = null;
        private $m_pdfViewer;
        //===============================================
        private function __construct() {
            $this->m_pdfViewer = "/lib/pdfjs/web/viewer.html";
        }
        //===============================================
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GPdf();  
            }
            return self::$m_instance;
        }
        //===============================================
        public function getUrl($url) {
            $m_url = "";
            $m_url .= $this->m_pdfViewer;
            $m_url .= "?file=";
            $m_url .= $url;
            $m_url .= "#zoom=page-width";
            return $m_url;
        }
        //===============================================
    }
?>