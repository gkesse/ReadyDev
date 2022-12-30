<?php   
    class GTest extends GObject {
        //===============================================
        protected $m_module;
        protected $m_method;
        //===============================================
        public function __construct() {
            parent::__construct();
            $this->initTest();
        }
        //===============================================
        public function initTest() {
            $lApp = GApp::Instance();
            $this->m_module   = $lApp->getData("test", "module");
            $this->m_method   = $lApp->getData("test", "method");
        }
        //===============================================
        public function setTest($_obj) {
            $this->m_module   = $_obj->m_module;
            $this->m_method   = $_obj->m_method;
        }
        //===============================================
        public function run() {
            if($this->m_module == "prod") {
                $this->runProd();
            }
            else if($this->m_module == "app") {
                $this->runApp();
            }
            else {
                $this->runDefault();
            }
        }
        //===============================================
        public function runDefault() {
            $this->printData("Erreur le processus est inconnu.");
        }
        //===============================================
        public function runProd() {
            $lReady = new GReadyUi();
            $lReady->run();
        }
        //===============================================
        public function runApp() {
            $lApp = new GAppTest();
            $lApp->setTest($this);
            $lApp->run();
        }
        //===============================================
    }
?>