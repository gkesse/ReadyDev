<?php
//===============================================
class GProcess extends GObject {
    //===============================================
    static private $m_instance = null;
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->createDom();
    }
    //===============================================
    public static function Instance() {
        if(is_null(self::$m_instance)) {
            self::$m_instance = new GProcess();
        }
        return self::$m_instance;
    }
    //===============================================
    public function createDom() {
        $this->dom = new GDomXml();
        $this->dom->createDom();
        $this->dom->loadXmlFile("process.xml");
    }
    //===============================================
    public function show() {
        $lProcess = $this->getProcessName();
        GHeader::Instance()->show();
        $this->getObj()->show();
        GFooter::Instance()->show();
    }
    //===============================================
    public function getProcessName() {
        $this->dom->getRoot("rdv")->getNode("process");
        $this->dom->getNode("name");
        $lData = $this->dom->getValue();
        return $lData;
    }
    //===============================================
}
//===============================================
?>
