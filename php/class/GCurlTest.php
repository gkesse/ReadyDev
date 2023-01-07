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
            else {
                $this->addError("Erreur la méthode est inconnue.");
            }
        }
        //===============================================
        public function runTest() {
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