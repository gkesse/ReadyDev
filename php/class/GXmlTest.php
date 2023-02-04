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
                $this->addError("La méthode est obligatoire.");
            }
            else if($this->m_method == "test") {
                $this->runTest();
            }
            else if($this->m_method == "node") {
                $this->runNode();
            }
            else if($this->m_method == "xnode") {
                $this->runXNode();
            }
            else if($this->m_method == "code") {
                $this->runCode();
            }
            else if($this->m_method == "serialize") {
                $this->runCode();
            }
            else if($this->m_method == "load_data") {
                $this->runLoadData();
            }
            else if($this->m_method == "loop_node") {
                $this->runLoopNode();
            }
            else {
                $this->addError("La méthode est inconnue.");
            }
        }
        //===============================================
        public function runTest() {
            $lDom = new GCode();
            $lDom->loadFile("php/class", "GEditorUi.xml");
            $lDom->getCode("edition_command");
            $lCountI = $lDom->countXNode("map/data");
            $lDom->getXNode("map/data");
            for($i = 0; $i < $lCountI; $i++) {
                $lLabel = $lDom->getXValue("label");
                $this->addData($lLabel);
                if($lDom->hasNode("map")) {
                    $lDom->pushNode();
                    $lCountJ = $lDom->countXNode("map/data");
                    $lDom->getXNode("map/data");
                    for($j = 0; $j < $lCountJ; $j++) {
                        $lLabel = $lDom->getXValue("label");
                        $this->addData($lLabel);
                        $lDom->nextSiblingElement();
                    }
                    $lDom->popNode();
                }
                $lDom->nextSiblingElement();
            }
        }
        //===============================================
        public function runLoopNode() {
            $lDom = new GCode();
            $lDom->loadFile("php/class", "GEditorUi.xml");
            $lDom->getCode("edition_command");
            $lDom->getXNode("map");
            $lCountI = $lDom->countChild();
            $lDom->firstChildElement();
            for($i = 0; $i < $lCountI; $i++) {
                $lDom->pushNode();
                $lCountJ = $lDom->countChild();
                $lDom->firstChildElement();
                for($j = 0; $j < $lCountJ; $j++) {
                    $this->addData($lDom->toStringNode());
                    $lDom->nextSiblingElement();
                }
                $lDom->popNode();
                $lDom->nextSiblingElement();
            }
        }
        //===============================================
        public function runLoadData() {
            $lCode = new GCode();
            $lCode->addData("page", "name", "admin");
            $lCode->addData("page", "title", "Administration");
            $lCode->addData("page", "url", "home/admin");
            $lCode->addData("page", "path", "/path/home/admin.php");
            
            $lCode->createXNode("map");
            
            for($i = 0; $i < 2; $i++) {
                $lCode->pushNode();
                $lCode->createNode("data");
                $lCode->next();
                $lCode->createVNode("code", "page");
                $lCode->createVNode("id", $i + 1);
                $lCode->createVNode("name", "admin");
                $lCode->createVNode("title", "Administration");
                $lCode->createVNode("url", "home/admin");
                $lCode->createVNode("path", "/path/home/admin.php");
                $lCode->popNode();
            }
            
            $lDom = new GCode();
            $lDom->addData("logs", "type", "error");
            $lDom->addData("logs", "side", "server");
            $lDom->addData("logs", "msg", "Erreur lors de la lecture de l'ID.");
            
            $lCode->loadData($lDom->toString());
            $this->addData($lCode->toString());
        }
        //===============================================
        public function runSerialize() {
            $lCode = new GCode();
            $lCode->createDoc();
            
            $lCode->addData("page", "name", "admin");
            $lCode->addData("page", "title", "Administration");
            $lCode->addData("page", "url", "home/admin");
            $lCode->addData("page", "path", "/path/home/admin.php");
            
            $lCode->createXNode("map");
            
            for($i = 0; $i < 2; $i++) {
                $lCode->pushNode();
                $lCode->createNode("data");
                $lCode->next();
                $lCode->createVNode("code", "page");
                $lCode->createVNode("id", $i + 1);
                $lCode->createVNode("name", "admin");
                $lCode->createVNode("title", "Administration");
                $lCode->createVNode("url", "home/admin");
                $lCode->createVNode("path", "/path/home/admin.php");
                $lCode->popNode();
            }
            
            $lPage = new GPageFac();
            $lPage->deserialize($lCode->toString());
            $this->addData($lPage->serialize());
        }
        //===============================================
        public function runCode() {
            $lCode = new GCode();
            $lCode->createDoc();
            
            $lCode->addData("page", "name", "admin");
            $lCode->addData("page", "title", "Administration");
            $lCode->addData("page", "url", "home/admin");
            $lCode->addData("page", "path", "/path/home/admin.php");
            
            $lName = $lCode->getItem("page", "name");
            $lTitle = $lCode->getItem("page", "title");
            $lUrl = $lCode->getItem("page", "url");
            $lPath = $lCode->getItem("page", "path");
            
            $lCode->addData("editor", "name", $lName);
            $lCode->addData("editor", "title", $lTitle);
            $lCode->addData("editor", "url", $lUrl);
            $lCode->addData("editor", "path", $lPath);
            
            $this->addData($lCode->toString());
        }
        //===============================================
        public function runXNode() {
            $lXml = new GXml();
            
            $lXml->createXNode("/rdv/datas/data");
            
            $lXml->createVNode("code", "page");
            $lXml->createVNode("name", "admin");
            $lXml->createVNode("title", "Administration");
            $lXml->createVNode("url", "home/admin");
            $lXml->createVNode("path", "/path/home/admin.php");
            
            $lXml->createNode("map");
            $lXml->next();
            
            $lXml->pushNode();
            $lXml->createNode("data");
            $lXml->next();
            $lXml->createVNode("code", "page");
            $lXml->createVNode("name", "admin");
            $lXml->createVNode("title", "Administration");
            $lXml->createVNode("url", "home/admin");
            $lXml->createVNode("path", "/path/home/admin.php");
            $lXml->popNode();
            
            $lXml->pushNode();
            $lXml->createNode("data");
            $lXml->next();
            $lXml->createVNode("code", "page");
            $lXml->createVNode("name", "admin");
            $lXml->createVNode("title", "Administration");
            $lXml->createVNode("url", "home/admin");
            $lXml->createVNode("path", "/path/home/admin.php");
            $lXml->popNode();
            
            $lXml->pushNode();
            $lXml->createNode("data");
            $lXml->next();
            $lXml->createVNode("code", "page");
            $lXml->createVNode("name", "admin");
            $lXml->createVNode("title", "Administration");
            $lXml->createVNode("url", "home/admin");
            $lXml->createVNode("path", "/path/home/admin.php");
            $lXml->popNode();
            
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