<?php   
    class GReadyUi extends GObject {
        //===============================================
        private $m_headerUi;
        private $m_footerUi;
        private $m_indexUi;
        private $m_homeUi;
        private $m_adminUi;
        private $m_page;
        private $m_pageId;
        private $m_pageCache = "data/cache/page";
        private $m_isFound = false;
        //===============================================
        public function __construct() {
            parent::__construct();
            $this->m_headerUi   = new GHeaderUi();
            $this->m_footerUi   = new GFooterUi();
            $this->m_indexUi    = new GIndexUi();
            $this->m_homeUi     = new GHomeUi();
            $this->m_adminUi    = new GAdminUi();
            $this->m_page       = new GPage();
            $this->m_pageId     = $this->m_page->getPageId();
        }
        //===============================================
        public function run() {
            $this->m_headerUi->run();
            $this->onBody();
            $this->m_footerUi->run();
            return !$this->hasErrors();
        }
        //===============================================
        public function onBody() {
            echo sprintf("<div class='MainBody'>\n");
            $this->onIndex();
            $this->onPage();
            $this->onAdmin();
            $this->onError();
            echo sprintf("</div>\n");
            return !$this->hasErrors();
        }
        //===============================================
        public function onIndex() {
            if($this->m_pageId != "") return;
            $this->m_isFound = true;
            $this->m_indexUi->run();
            $this->addLogs($this->m_indexUi->getLogs());
        }
        //===============================================
        public function onHome() {
            if($this->m_pageId != "home") return;
            $this->m_isFound = true;
            $this->m_homeUi->run();
            $this->addLogs($this->m_homeUi->getLogs());
        }
        //===============================================
        public function onAdmin() {
            if($this->m_pageId != "home/admin") return;
            $this->m_isFound = true;
            $this->m_adminUi->run();
            $this->addLogs($this->m_adminUi->getLogs());
        }
        //===============================================
        public function onPage() {
            if($this->m_pageId != "home") return;
            $this->m_isFound = true;
            $lPage = sprintf("%s/%s", $this->m_pageCache, $this->m_pageId);
            $lPage = GPath::create($lPage, "index.php");
            require $lPage;
        }
        //===============================================
        public function onError() {
            if($this->m_isFound == true) return;
            $this->addError("PAGE NON TROUVEE !");
        }
        //===============================================
    }
?>