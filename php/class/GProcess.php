<?php   
//===============================================
class GProcess extends GObjectUi {
    //===============================================
    private static $m_instance = null;
    //===============================================
    protected $m_page;
    protected $m_env;
    protected $m_indexUi;
    //===============================================
    private function __construct() {
        parent::__construct();
        $this->m_page       = new GPage();
        $this->m_env        = new GEnv();
        $this->m_indexUi    = new GIndexUi();
    }
    //===============================================
    public static function Instance() {
        if(self::$m_instance == null) {
            self::$m_instance = new GProcess();
        }
        return self::$m_instance;
    }
    //===============================================
    public function main() {
        $this->m_indexUi->run();
        $this->m_page->redirectPost();
        $this->run();
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
        $lTestUi = new GTestUi();
        $lTestUi->run();
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
