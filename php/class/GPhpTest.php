<?php   
    class GPhpTest extends GTest {
        //===============================================
        public function __construct() {
            parent::__construct();
        }
        //===============================================
        public function run() {
            if($this->m_module == "") {
                $this->addError("Le module est obligatoire.");
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
            else if($this->m_module == "sqlite") {
                $this->runSQLite();
            }
            else if($this->m_module == "file") {
                $this->runFile();
            }
            else {
                $this->addError("Le module est inconnu.");
            }
        }
        //===============================================
        public function runProd() {
            $lObj = new GReady();
            $lObj->run();
            $this->addLogs($lObj->getLogs());
        }
        //===============================================
        public function runXml() {
            $lObj = new GXmlTest();
            $lObj->run();
            $this->addLogs($lObj->getLogs());
        }
        //===============================================
        public function runCurl() {
            $lObj = new GCurlTest();
            $lObj->run();
            $this->addLogs($lObj->getLogs());
        }
        //===============================================
        public function runSQLite() {
            $lObj = new GSQLiteTest();
            $lObj->run();
            $this->addLogs($lObj->getLogs());
        }
        //===============================================
        public function runFile() {
            $lObj = new GFileTest();
            $lObj->run();
            $this->addLogs($lObj->getLogs());
        }
        //===============================================
    }
?>