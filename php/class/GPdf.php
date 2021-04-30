<?php   
    class GPdf {
        //===============================================
        private static $m_instance = null;
        //===============================================
        private function __construct() {

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
            $lApp = GManager::Instance()->getData()->app;
            $lUrl = "";
            $lUrl .= $lApp->cv_path;
            $lUrl .= "/";
            $lUrl .= $url;
            return $lUrl;
        }
        //===============================================
    }
?>
