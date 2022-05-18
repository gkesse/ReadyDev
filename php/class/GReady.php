<?php   
    class GReady extends GObject {
        //===============================================
        private $foundOn;
        //===============================================
        public function __construct() {
            parent::__construct();
            $this->createDoms();
            $this->foundOn = false;
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
            echo sprintf("<div class='MainBody'>\n");
            $this->onAdmin();
            $this->onError();
            echo sprintf("</div>\n");
        }
        //===============================================
        public function onAdmin() {
            $lPageObj = new GPage();
            $lPage = $lPageObj->getPageId();
            if($lPage != "/home/admin") return;
            $this->foundOn = true;
            echo sprintf("<div>\n");
            echo sprintf("<div>ADMIN</div>\n");
            echo sprintf("</div>\n");
        }
        //===============================================
        public function onError() {
            if($this->foundOn) return;
            $lPageObj = new GPage();
            $lPage = $lPageObj->getPageId();
            GLog::Instance()->addError(sprintf(
                "<i class='fa fa-exclamation-triangle'></i> PAGE NON TROUVEE", $lPage));
        }
        //===============================================
    }
?>