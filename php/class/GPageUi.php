<?php
class GPageUi extends GObject {
    //===============================================
    private $m_url;
    private $m_headerUi;
    private $m_footerUi;
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->m_url = "home";
        $this->m_headerUi = new GHeaderUi();
        $this->m_footerUi = new GFooterUi();
    }
    //===============================================
    public function run() {
        $this->m_headerUi->run();
        echo sprintf("<div>\n");
        echo sprintf("<input type='hidden' id='url' name='url' value='%s'/>\n", $this->m_url);
        
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->createRequest("module", "create_module");
        
        echo sprintf("%s<br>\n", $lDom->toString());
        
        echo sprintf("</div>\n");
        $this->m_footerUi->run();
    }
    //===============================================
}
?>
