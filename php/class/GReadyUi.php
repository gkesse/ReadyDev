<?php   
    class GReadyUi extends GObjectUi {
        //===============================================
        protected $m_isFound;
        protected $m_headerUi;
        protected $m_footerUi;
        //===============================================
        public function __construct() {
            parent::__construct();
            $this->m_headerUi   = new GHeaderUi();
            $this->m_footerUi   = new GFooterUi();
            $this->m_isFound    = false;
        }
        //===============================================
        public function run() {
            $this->m_headerUi->run();
            $this->onBody();
            $this->m_footerUi->run();
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
            $this->m_isFound = true;
            $lAdminObj = new GAdmin();
            $lAdminObj->run();
        }
        //===============================================
        public function onError() {
            if($this->m_isFound) return;
            $lPageObj = new GPage();
            $lPageObj->notFound();
        }
        //===============================================
    }
?>