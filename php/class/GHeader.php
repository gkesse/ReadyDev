<?php   
//===============================================
class GHeader extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->createDom();
    }
    //===============================================
    public function createDom() {
        $this->dom = new GDomXml();
        $this->dom->createDoc();
        $this->dom->loadXmlFile($this->getResourcePath("xml", "header.xml"));
        $this->dom->createXPath();
    }
    //===============================================
    public function getHappy() {
        $this->dom->queryXPath(sprintf("/rdv/header/happyyear/text"));
        $this->dom->getNodeXPath();
        $lData = $this->dom->getValue();
        return $lData;
    }
    //===============================================
    public function getHappyYear() {
        $lHappy = $this->getHappy();
        $lYear = date("Y");
        $lData = sprintf("%s %s", $lHappy, $lYear);
        return $lData;
    }
    //===============================================
}
//===============================================
?>
