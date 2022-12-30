<?php   
    class GObjectUi extends GObject {
        //===============================================
        protected $m_app;
        //===============================================
        public function __construct() {
            parent::__construct();
            $this->m_app = GApp::Instance();
        }
        //===============================================
        public function getUrl() {
            $lUrl = "";
            $lUrl .= "http://";
            $lUrl .= $_SERVER['HTTP_HOST'];
            $lUrl .=  $_SERVER['REQUEST_URI'];
            return $lUrl;
        }
        //===============================================
        public function printData($data) {
            echo sprintf("<xmp style='
                font-family: courier;
                font-size: 12pt;
            '>%s</xmp>\n", $data);
        }
        //===============================================
    }
?>