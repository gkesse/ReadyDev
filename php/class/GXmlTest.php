<?php   
    class GXmlTest extends GTestUi {
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
            else if($this->m_method == "node") {
                $this->runNode();
            }
            else {
                $this->addError("Erreur la méthode est inconnue.");
            }
        }
        //===============================================
        public function runTest() {
            $lXml = new GXml();
            
            $lXml->createXNode("/rdv/datas/data");
            $lXml->createXNode("/rdv/datas/data");
            
            $lXml->createVNode("code", "page");
            $lXml->createVNode("name", "admin");
            $lXml->createVNode("title", "Administration");
            $lXml->createVNode("url", "home/admin");
            $lXml->createVNode("path", "/path/home/admin.php");
            
            $this->addData($lXml->toString());
        }
        //===============================================
        public function runNode() {
            $lXml = new GXml();
            
            $lXml->createNode("rdv");
            $lXml->next();
            $lXml->createNode("datas");
            $lXml->next();
            $lXml->createNode("data");
            $lXml->next();
            
            $lXml->pushNode();
            $lXml->createNode("code");
            $lXml->next();
            $lXml->setValue("page");
            $lXml->popNode();
            
            $lXml->pushNode();
            $lXml->createNode("name");
            $lXml->next();
            $lXml->setValue("admin");
            $lXml->popNode();
            
            $lXml->pushNode();
            $lXml->createNode("url");
            $lXml->next();
            $lXml->setValue("home/admin");
            $lXml->popNode();
            
            $lXml->pushNode();
            $lXml->createNode("path");
            $lXml->next();
            $lXml->setValue("/path/home/admin.php");
            $lXml->popNode();
            
            $this->addData($lXml->toString());
        }
        //===============================================
    }
?>