<?php
//===============================================
class GProcess extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->createDom();
    }
    //===============================================
    public function createDom() {
        $this->dom = new GDomXml();
        $this->dom->createDom();
        $this->dom->loadXmlFile("pad.xml");
        $this->dom->createXPath();
    }
    //===============================================
    public function run() {
        $lHeader = new GHeader();
        $lFooter = new GFooter();
        $lHeader->run();
        $this->runProcess();
        $lFooter->run();
    }
    //===============================================
    public function runProcess() {
        $lKey = $this->getItem("process", "name");
        //
        if($lKey == "test") {
            $this->runTest();
        }
        else if($lKey == "studio") {
            $this->runStudio();
        }
    }
    //===============================================
    public function runTest() {
        
    }
    //===============================================
    public function runStudio() {
        $lStudio = new GStudio();
        $lStudio->run();
    }
    //===============================================
}
//===============================================
?>
