<?php   
    class GCurlTest extends GTestUi {
        //===============================================
        public function __construct() {
            parent::__construct();
        }
        //===============================================
        public function run() {
            $this->m_headerUi->run();
            $this->runMain();
            $this->m_footerUi->run();
        }
        //===============================================
        public function runMain() {
            if($this->m_method == "") {
                $this->addError("Erreur la méthode est obligatoire.");
            }
            else if($this->m_method == "test") {
                $this->runTest();
            }
            else if($this->m_method == "load_file") {
                $this->runLoadFile();
            }
            else if($this->m_method == "http_get") {
                $this->runHttpGet();
            }
            else if($this->m_method == "https_get") {
                $this->runHttpsGet();
            }
            else {
                $this->addError("Erreur la méthode est inconnue.");
            }
        }
        //===============================================
        public function runTest() {
            $lCurl = new GCurl();
            $lCurl->setAction("http_get");
            $lCurl->setUrl("http://192.168.1.45:9071/readyapi-1.0/deux/trois");
            $lCurl->setHasUserAgent(true);
            $lCurl->setUserAgent("rdvapp/1.0");
            $lCurl->setTimeout(3);
            $lCurl->run();
            $this->addData($lCurl->getHttpCode());
            $this->addData($lCurl->getResponseText());
            $this->addLogs($lCurl->getLogs());
        }
        //===============================================
        public function runHttpsGet() {
            $lCurl = new GCurl();
            $lCurl->setAction("https_get");
            $lCurl->setUrl("https://readydev.ovh:9071/");
            $lCurl->run();
            $this->addData($lCurl->getHttpCode());
            $this->addData($lCurl->getResponseText());
            $this->addLogs($lCurl->getLogs());
        }
        //===============================================
        public function runHttpGet() {
            $lCurl = new GCurl();
            $lCurl->setAction("http_get");
            $lCurl->setUrl("http://readydev.ovh:9071/home/admin");
            $lCurl->run();
            $this->addData($lCurl->getHttpCode());
            $this->addData($lCurl->getResponseText());
            $this->addLogs($lCurl->getLogs());
        }
        //===============================================
        public function runLoadFile() {
            $lCurl = new GCurl();
            $lCurl->setAction("load_file");
            $lCurl->setUrl("http://www.example.com/");
            $lCurl->setFilename("example_homepage.txt");
            $lCurl->run();
            $this->addData($lCurl->getHttpCode());
            $this->addLogs($lCurl->getLogs());
        }
        //===============================================
    }
?>