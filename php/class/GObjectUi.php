<?php   
    class GObjectUi extends GObject {
        //===============================================
        protected $m_app;
        protected $m_dom;
        //===============================================
        public function __construct($_codeName = "object") {
            parent::__construct($_codeName);            
            $this->m_app    = GApp::Instance();
            $this->m_dom    = new GCode();
        }
        //===============================================
        public function loadDom($_className) {
            $this->m_dom->loadFile("php/class", "$_className.xml");
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
        public function validate() {
            $lValidate = true;
            if(!isset($_SESSION["login"])) $lValidate = false;
            else if($_SESSION["login"]["group"] != "admin") $lValidate = false;
            
            if(!$lValidate) {
                header("Location: ".$_SESSION["lasturl"]);
            }
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