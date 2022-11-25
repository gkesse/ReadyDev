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
        $lEnv = new GEnv();
        if($lEnv->isProdEnv()) {
            $this->runProd();
        }
        else {
            $this->runProdTest();
        }
    }
    //===============================================
    public function runProdTest() {
        $lFont = new GFont();
        $lFont->loadFont();
    }
    //===============================================
    public function runProd() {
        $lPageObj = new GPage();
        $lPageObj->homePage();
    }
    //===============================================
 }
//===============================================
?>
