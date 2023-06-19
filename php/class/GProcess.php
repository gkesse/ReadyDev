<?php   
//===============================================
class GProcess extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function run() {
        $this->redirectHomePage();

        if($this->isTestEnv()) {
            $this->runTest();
        }
        else {
            $this->runProd();
        }
    }
    //===============================================
    public function runTest() {
        $lObj = new GTest();
        $lObj->run();
        $this->addLogs($lObj->getLogs());
    }
    //===============================================
    public function runProd() {
        $lObj = new GReady();
        $lObj->run();
        $this->addLogs($lObj->getLogs());
    }
    //===============================================
 }
//===============================================
?>
