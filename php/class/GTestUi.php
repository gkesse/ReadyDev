<?php   
    class GTestUi extends GTest {
        //===============================================
        public function __construct($_codeName = "test") {
            parent::__construct($_codeName);
            $this->m_lang = $this->m_app->getItem("test", "lang");
            $this->m_module = $this->m_app->getItem("test", "module");
            $this->m_method = $this->m_app->getItem("test", "method");
        }
        //===============================================
        public function run() {
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