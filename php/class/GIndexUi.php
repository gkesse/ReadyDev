<?php
//===============================================
class GIndexUi extends GObject {
    //===============================================
    private $m_page;
    private $m_pageId;
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->loadDom(__CLASS__);
        $this->m_page   = new GPage();
        $this->m_pageId = $this->m_page->getPageId();
    }
    //===============================================
    public function run() {
        if($this->m_pageId != "") return;
        $lPage = $this->m_dom->getItem("index", "page");
        $this->m_page->redirectUrl($lPage);
        $this->addLogs($this->m_page->getLogs());
    }
    //===============================================
}
//===============================================
?>