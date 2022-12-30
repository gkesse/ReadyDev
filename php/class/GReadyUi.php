<?php   
    class GReadyUi extends GObjectUi {
        //===============================================
        protected  $m_isFound;
        //===============================================
        protected  $m_headerUi;
        protected  $m_footerUi;
        protected  $m_adminUi;
        protected  $m_pageUi;
        protected  $m_page;
        //===============================================
        public function __construct() {
            parent::__construct();
            $this->m_headerUi   = new GHeaderUi();
            $this->m_footerUi   = new GFooterUi();
            $this->m_adminUi    = new GAdminUi();
            $this->m_pageUi     = new GPageUi();
            $this->m_page       = new GPage();
            
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
            $lPage = $this->m_page->getPageId();
            if($lPage != "/home/admin") return;
            $this->m_isFound = true;
            $this->m_adminUi->run();
        }
        //===============================================
        public function onError() {
            if($this->m_isFound) return;
            $this->m_pageUi->notFound();
        }
        //===============================================
    }
?>