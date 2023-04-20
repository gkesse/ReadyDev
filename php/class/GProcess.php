<?php   
//===============================================
class GProcess extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function redirectHomePage() {
        $lPageId = $this->getPageId();
        if($lPageId == "/") {
            $lHome = $this->getHomePage();
            if($lHome != "" && $lHome != "/") {
                $this->redirectUrl($lHome);
            }
        }
    }
    //===============================================
    public function main() {
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
