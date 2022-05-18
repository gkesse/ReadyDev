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
            $lPageObj = new GPage();
            $lPage = $lPageObj->getPageId();
            $lContent = $lPage;
            echo sprintf("<div class='MainBody'>");
            echo $lContent;
            echo sprintf("</div>");            
        }
        //===============================================
    }
?>