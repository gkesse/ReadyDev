<?php   
    class GReady extends GObject {
        //===============================================
        public function __construct() {
            parent::__construct();            
        }
        //===============================================
        public function run() {
            $this->onHeader();
            $this->onBody();
            $this->onFooter();
        }
        //===============================================
        public function onHeader() {
            $lHeaderObj = new GHeader();
            $lHeaderObj->run();
        }
        //===============================================
        public function onFooter() {
            $lFooterObj = new GFooter();
            $lFooterObj->run();
        }
        //===============================================
        public function onBody() {
            echo sprintf("%s<br>\n", __METHOD__);
            $lPageObj = new GPage();
            $lPage = $lPageObj->getPageId();
            echo sprintf("%s<br>\n", $lPage);
            
        }
        //===============================================
    }
?>