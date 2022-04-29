<?php   
//===============================================
class GProcess extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->createDoms();
    }
    //===============================================
    public function run() {
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
        echo "ooooooooooooooooooo";
    }
    //===============================================
    public function runProd() {
        $lRedirectObj = new GRedirect();
        $lRedirectObj->homePage();
    }
    //===============================================
 }
//===============================================
?>
