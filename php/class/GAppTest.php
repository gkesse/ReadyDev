<?php
//===============================================
class GAppTest extends GTest {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function run() {
        if($this->m_method == "test") {
            $this->runTest();
        }
        else {
            $this->runDefault();
        }
    }
    //===============================================
    public function runTest() {
        $lApp = GApp::Instance();
        $lData = $lApp->getData("test", "module");
        $this->printData($lData);
        $lData = $lApp->getData("test", "method");
        $this->printData($lData);
    }
    //===============================================
}
//===============================================
?>