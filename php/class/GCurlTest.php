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
                $this->addError("La méthode est obligatoire.");
            }
            //===============================================
            else if($this->m_method == "test") {
                $this->runTest();
            }
            else if($this->m_method == "load_file") {
                $this->runLoadFile();
            }
            else if($this->m_method == "http_get") {
                $this->runHttpGet();
            }
            else if($this->m_method == "http_post") {
                $this->runHttpPost();
            }
            else if($this->m_method == "https_get") {
                $this->runHttpsGet();
            }
            else if($this->m_method == "https_post") {
                $this->runHttpsPost();
            }
            //===============================================
            else {
                $this->addError("La méthode est inconnue.");
            }
        }
        //===============================================
        public function runTest() {
            $lCurl = new GCurl();
            $lCurl->callServer("page", "load_page");
            $this->addData($lCurl->getHttpCode());
            $this->addData($lCurl->getResponseText());
            $this->addLogs($lCurl->getLogs());
        }
        //===============================================
        public function runHttpsPost() {
            $lDom = new GCode();
            $lDom->createRequest("page", "load_page");
            
            $lCurl = new GCurl();
            $lCurl->setAction("https_post");
            $lCurl->setUrl("https://readydev.ovh:9071/readyapi-1.0");
            $lCurl->setUserAgent("rdvapp/1.0");
            $lCurl->setUsername("admin");
            $lCurl->setPassword("adminpass");
            $lCurl->setContentType("application/xml");
            $lCurl->setContent($lDom->toString());
            $lCurl->setTimeout(10);
            $lCurl->setHasUserAgent(true);
            $lCurl->setHasUserPass(true);
            $lCurl->run();
            $this->addData($lCurl->getHttpCode());
            $this->addData($lCurl->getResponseText());
            $this->addLogs($lCurl->getLogs());
        }
        //===============================================
        public function runHttpsGet() {
            $lCurl = new GCurl();
            $lCurl->setAction("https_get");
            $lCurl->setUrl("https://192.168.1.45:9071/readyapi-1.0/un/deux");
            $lCurl->setUserAgent("rdvapp/1.0");
            $lCurl->setUsername("admin");
            $lCurl->setPassword("adminpass");
            $lCurl->setContentType("application/xml");
            $lCurl->setTimeout(3);
            $lCurl->setHasUserAgent(true);
            $lCurl->setHasUserPass(true);
            $lCurl->run();
            $this->addData($lCurl->getHttpCode());
            $this->addData($lCurl->getResponseText());
            $this->addLogs($lCurl->getLogs());
        }
        //===============================================
        public function runHttpPost() {
            $lDom = new GCode();
            $lDom->createRequest("page", "load_page");
            
            $lCurl = new GCurl();
            $lCurl->setAction("http_post");
            $lCurl->setUrl("http://192.168.1.45:9071/readyapi-1.0");           $lCurl->setUserAgent("rdvapp/1.0");
            $lCurl->setUsername("admin");
            $lCurl->setPassword("adminpass");
            $lCurl->setContentType("application/xml");
            $lCurl->setContent($lDom->toString());
            $lCurl->setTimeout(3);
            $lCurl->setHasUserAgent(true);
            $lCurl->setHasUserPass(true);
            $lCurl->run();
            $this->addData($lCurl->getHttpCode());
            $this->addData($lCurl->getResponseText());
            $this->addLogs($lCurl->getLogs());            
        }
        //===============================================
        public function runHttpGet() {
            $lCurl = new GCurl();
            $lCurl->setAction("http_get");
            $lCurl->setUrl("http://192.168.1.45:9071/readyapi-1.0/un/deux");
            $lCurl->setUserAgent("rdvapp/1.0");
            $lCurl->setUsername("admin");
            $lCurl->setPassword("adminpass");
            $lCurl->setContentType("application/xml");
            $lCurl->setTimeout(3);
            $lCurl->setHasUserAgent(true);
            $lCurl->setHasUserPass(true);
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