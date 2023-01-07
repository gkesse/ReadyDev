<?php   
    class GPhpTest extends GTestUi {
        //===============================================
        public function __construct() {
            parent::__construct();
        }
        //===============================================
        public function run() {
            if($this->m_module == "") {
                $this->m_headerUi->run();
                $this->addError("Erreur le module est obligatoire.");
                $this->m_footerUi->run();
            }
            else if($this->m_module == "prod") {
                $this->runProd();
            }
            else if($this->m_module == "xml") {
                $this->runXml();
            }
            else if($this->m_module == "curl") {
                $this->runCurl();
            }
            else {
                $this->m_headerUi->run();
                $this->addError("Erreur le module est inconnu.");
                $this->m_footerUi->run();
            }
        }
        //===============================================
        public function runProd() {
            $lReadyUi = new GReadyUi();
            $lReadyUi->run();
            $this->addLogs($lReadyUi->getLogs());
        }
        //===============================================
        public function runXml() {
            $lXmlTest = new GXmlTest();
            $lXmlTest->run();
            $this->addLogs($lXmlTest->getLogs());
        }
        //===============================================
        public function runCurl() {
            $CurlTest = new GCurlTest();
            $CurlTest->run();
            $this->addLogs($CurlTest->getLogs());
        }
        //===============================================
    }
?>