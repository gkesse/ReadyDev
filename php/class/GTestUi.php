<?php   
    class GTestUi extends GTest {
        //===============================================
        protected $m_headerUi;
        protected $m_footerUi;
        //===============================================
        public function __construct($_codeName = "test") {
            parent::__construct($_codeName);
            $this->loadDom(__CLASS__);
            
            $this->m_headerUi   = new GHeaderUi();
            $this->m_footerUi   = new GFooterUi();
            
            $this->m_lang       = $this->m_dom->getItem("test", "lang");
            $this->m_module     = $this->m_dom->getItem("test", "module");
            $this->m_method     = $this->m_dom->getItem("test", "method");
        }
        //===============================================
        public function run() {
            if($this->m_lang == "") {
                $this->m_headerUi->run();
                $this->addError("Erreur la langue est obligatoire.");
                $this->m_footerUi->run();
            }
            else if($this->m_lang == "php") {
                $this->runPhp();
            }
            else if($this->m_lang == "js") {
                $this->runJs();
            }
            else {
                $this->m_headerUi->run();
                $this->addError("Erreur la langue est inconnue.");
                $this->m_footerUi->run();
            }
        }
        //===============================================
        public function runPhp() {
            $lPhpTest = new GPhpTest();
            $lPhpTest->run();
            $this->addLogs($lPhpTest->getLogs());
        }
        //===============================================
        public function runJs() {
            $this->m_headerUi->run();
            $lJsTest = new GJsTest();
            $lJsTest->run();
            $this->m_footerUi->run(); 
            $this->addLogs($lJsTest->getLogs());
        }
        //===============================================
    }
?>