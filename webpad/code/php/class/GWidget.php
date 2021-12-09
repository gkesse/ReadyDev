<?php   
//===============================================
class GWidget extends GObject {
    //===============================================
    private $dom;
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->dom = new GDomXml();
        $this->dom->createDom();
        $this->dom->loadXmlFile("header.xml");
    }
    //===============================================
    public function setPageHeader() {
        echo sprintf("<div class='body_page'>\n");
        echo sprintf("<a class='app_name' href='%s'><i class='fa fa-%s'></i> %s</a>\n", $this->getAppLink(), $this->getAppIcon(), $this->getAppName());
        echo sprintf("<a class='app_ref' href='%s'><i class='fa fa-%s'></i> %s</a>\n", $this->getRefLink(), $this->getRefIcon(), $this->getRefName());
        echo sprintf("<div class='app_title'>\n");
        echo sprintf("<div>%s</div>\n", $this->getObj()->getPageTitle());
        echo sprintf("</div>\n");
    }
    //===============================================
    public function setPageFooter() {
        echo sprintf("</div>\n");
    }
    //===============================================
    public function getAppName() {
        $this->dom->getRoot("rdv")->getNode("header");
        $this->dom->getNode("app")->getNode("name");
        $lData = $this->dom->getValue();
        return $lData;
    }
    //===============================================
    public function getAppLink() {
        $this->dom->getRoot("rdv")->getNode("header");
        $this->dom->getNode("app")->getNode("link");
        $lData = $this->dom->getValue();
        return $lData;
    }
    //===============================================
    public function getAppIcon() {
        $this->dom->getRoot("rdv")->getNode("header");
        $this->dom->getNode("app")->getNode("icon");
        $lData = $this->dom->getValue();
        return $lData;
    }
    //===============================================
    public function getRefName() {
        $this->dom->getRoot("rdv")->getNode("header");
        $this->dom->getNode("ref")->getNode("name");
        $lData = $this->dom->getValue();
        return $lData;
    }
    //===============================================
    public function getRefLink() {
        $this->dom->getRoot("rdv")->getNode("header");
        $this->dom->getNode("ref")->getNode("link");
        $lData = $this->dom->getValue();
        return $lData;
    }
    //===============================================
    public function getRefIcon() {
        $this->dom->getRoot("rdv")->getNode("header");
        $this->dom->getNode("ref")->getNode("icon");
        $lData = $this->dom->getValue();
        return $lData;
    }
    //===============================================
}
//===============================================
?>
