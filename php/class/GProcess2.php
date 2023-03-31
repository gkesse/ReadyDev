<?php   
//===============================================
class GProcess2 extends GObject {
    //===============================================
    private static $m_instance = null;
    //===============================================
    private $m_page;
    private $m_env;
    private $m_indexUi;
    //===============================================
    private function __construct() {
        parent::__construct();
        $this->m_page       = new GPage();
        $this->m_env        = new GEnv();
        $this->m_indexUi    = new GIndexUi();
    }
    //===============================================
    public static function Instance() {
        if(GProcess2::$m_instance == null) {
            GProcess2::$m_instance = new GProcess2();
        }
        return GProcess2::$m_instance;
    }
    //===============================================
    public function main() {
        $this->m_indexUi->run();
        $this->m_page->redirectPost();
        $this->run();
        $this->showLogs();
    }
    //===============================================
    public function run() {
        if($this->m_env->isProdEnv()) {
            $this->runProd();
        }
        else {
            $this->runTest();
        }
    }
    //===============================================
    public function runTest() {
        $lObj = new GTestUi();
        $lObj->run();
        $this->addLogs($lObj->getLogs());
    }
    //===============================================
    public function runProd() {
        $lObj = new GReadyUi();
        $lObj->run();
        $this->addLogs($lObj->getLogs());
    }
    //===============================================
 }
//===============================================
?>
