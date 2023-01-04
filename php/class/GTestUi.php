<?php   
    class GTestUi extends GTest {
        //===============================================
        protected $m_headerUi;
        protected $m_footerUi;
        //===============================================
        public function __construct($_codeName = "test") {
            parent::__construct($_codeName);
            $this->m_headerUi   = new GHeaderUi();
            $this->m_footerUi   = new GFooterUi();
            
            $this->m_lang       = $this->m_app->getItem("test", "lang");
            $this->m_module     = $this->m_app->getItem("test", "module");
            $this->m_method     = $this->m_app->getItem("test", "method");
        }
        //===============================================
        public function run() {
            $this->m_headerUi->run();
            $this->onBody();
            $this->m_footerUi->run();
        }
        //===============================================
        public function onBody() {
            if($this->m_lang == "php") {
                $this->runPhp();
            }
            else if($this->m_lang == "js") {
                $this->runJs();
            }
            else {
                $this->runDefault();
            }
        }
        //===============================================
        public function runPhp() {
            if($this->m_module == "prod") {
                $this->runProd();
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
            $lReadyUi = new GReadyUi();
            $lReadyUi->run();
        }
        //===============================================
        public function runJs() {
            $lJsTest = new GJsTest();
            $lJsTest->run();
        }
        //===============================================
    }
?>