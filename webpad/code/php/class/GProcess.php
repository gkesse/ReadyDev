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
        $this->dom->loadXmlFile("app_process.xml");
        $this->dom->createXPath();
    }
    //===============================================
    public function getConfigItem($data) {
        $this->dom->queryXPath(sprintf("/rdv/datas/data[code='config']/%s", $data));
        $this->dom->getNodeIndex(0);
        $lData = $this->dom->getValue();
        return $lData;
    }
    //===============================================
    public function run() {
        GHeader::Instance()->run();
        $this->runProcess();
        GFooter::Instance()->run();
    }
    //===============================================
    public function runProcess() {
        $lKey = $this->getConfigItem("process");
        if($lKey == "studio") {
            $this->runStudio();
        }
    }
    //===============================================
    public function runStudio() {
        GStudio::Instance()->run();
    }
    //===============================================
}
//===============================================
?>
