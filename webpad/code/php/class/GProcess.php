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
        $this->dom = new GXml();
        $this->dom->createDocFile("pad.xml");
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
        if($lEnvObj->isProdEnv()) {
            $this->runProd();
        }
        else {
            $this->runTest();
        }
    }
    //===============================================
    public function runTest() {
        $lEnv = $this->getItem("test", "env");
        if($lEnv == "prod") {
            $this->runProd();
        }
        else if($lEnv == "dev") {
            $this->runTestDev();
        }
    }
    //===============================================
    public function runTestDev() {
        $lTestObj = new GTest();
        $lTestObj->run();
    }
    //===============================================
    public function runProd() {
        $lPadObj = new GPad();
        $lPadObj->run();
    }
    //===============================================
}
//===============================================
?>
