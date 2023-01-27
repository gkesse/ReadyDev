<?php
//===============================================
class GIndexUi extends GObject {
    //===============================================
    protected $m_page;
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->loadDom(__CLASS__);
        $this->m_page  = new GPage();
    }
    //===============================================
    public function run() {
        if($this->m_page->getPageId() != "") return;
        $lPage = $this->m_dom->getItem("index", "page");
        $this->m_page->redirectUrl($lPage);
    }
    //===============================================
}
//===============================================
?>