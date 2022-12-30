<?php   
//===============================================
class GProcess extends GObject {
    //===============================================
    protected $m_isTestEnv;
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->initProcess();
    }
    //===============================================
    public function initProcess() {
        $lEnv = new GEnv();       
        $this->m_isTestEnv  = $lEnv->isTestEnv();
    }
    //===============================================
    public function run() {
        if(!$this->m_isTestEnv) {
            $this->runProd();
        }
        else {
            $this->runTest();
        }
    }
    //===============================================
    public function runTest() {
        $lTest = new GTest();
        $lTest->run();
    }
    //===============================================
    public function runProd() {
        $lReadyUi = new GReadyUi();
        $lReadyUi->run();
    }
    //===============================================
 }
//===============================================
?>
