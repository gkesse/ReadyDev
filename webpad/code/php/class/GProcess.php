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
        $this->dom->createDoc();
        $this->dom->loadXmlFile("process.xml");
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
        $lEnvObj = new GEnv();
        $this->runProcessEnv($lEnvObj->isTestEnv());
    }
    //===============================================
    public function runProcessEnv($isTestEnv) {
        $lKey = "pad";
        if($isTestEnv) $lKey = $this->getItem("process", "name");
        
        if($lKey == "test") {
            $this->runTest();
        }
        // pad
        else if($lKey == "pad") {
            $this->runPad();
        }
        // end
        else {
            $this->runDefault($lKey);
        }
    }
    //===============================================
    public function runDefault($key) {
        $this->unknownProcess(__METHOD__, $key);
    }
    //===============================================
    public function runTest() {
        $lModule = new GTest();
        $lModule->run();
    }
    //===============================================
    public function runPad() {
        $lModule = new GPad();
        $lModule->run();
    }
    //===============================================
    public function unknownProcess($method, $key) {
        echo sprintf("<div class='padding'>");
        echo sprintf("<div class='border padding'>");
        echo sprintf("%s : process inconnu : (%s)<br>", $method, $key);
        echo sprintf("</div>");
        echo sprintf("</div>");
    }
    //===============================================
}
//===============================================
?>
