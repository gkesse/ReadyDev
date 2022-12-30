<?php   
    class GTest extends GObject {
        //===============================================
        public function __construct() {
            parent::__construct(); 
            $this->createDoms();
        }
        //===============================================
        public function printData($data) {
            echo sprintf("<xmp class='Code3'>%s</xmp>\n", $data);           
        }
        //===============================================
        public function run() {
            $this->onHeaderUi();
            $this->onBodyUi();
            $this->onFooterUi();
        }
        //===============================================
        public function onBodyUi() {
            $lKey = $this->getItem("test", "dev");
            //===============================================
            // test
            //===============================================
            if($lKey == "test") {
                $this->runTest();
            }
            //===============================================
            // file
            //===============================================
            else if($lKey == "file/glob") {
                $this->runFileGlob();
            }
            else if($lKey == "file/unlink") {
                $this->runFileUnlink();
            }
            //===============================================
            // xml
            //===============================================
            else if($lKey == "xml/code") {
                $this->runXmlCode();
            }
            else if($lKey == "xml/node") {
                $this->runXmlNode();
            }
            else if($lKey == "xml/sitemap") {
                $this->runXmlSitemap();
            }
            else if($lKey == "xml/map") {
                $this->runXmlMap();
            }
            else if($lKey == "xml/data") {
                $this->runXmlData();
            }
            else if($lKey == "xml/manager") {
                $this->runXmlManager();
            }
            else if($lKey == "xml/parent") {
                $this->runXmlParent();
            }
            //===============================================
            // js
            //===============================================
            else if($lKey == "socket") {
                $this->runSocket();
            }
            //===============================================
            // js
            //===============================================
            else if($lKey == "js") {
                $this->runJs();
            }
            //===============================================
            // end
            //===============================================
            else {
                $this->runTest();
            }
        }
        //===============================================
        public function onHeaderUi() {
            $lEnvObj = new GEnv();
            $lEnv = $lEnvObj->getEnvType();
            
            $lLang = $this->getItem("header", "lang");
            $lTitle = $this->getItem("header", "title");
            $lLogo = $this->getItem("header", "logo");
            
            $lJsOn = ($this->getItem("test", "dev") == "js");
            $lJsCB = $this->getItem("test", "js");
            
            $lHeader = new GHeader();
            
            echo sprintf("<!DOCTYPE html>\n");
            echo sprintf("<html lang='%s'>\n", $lLang);
            echo sprintf("<head>\n");
            echo sprintf("<title>%s</title>\n", $lTitle);
            echo sprintf("<meta charset='UTF-8'/>\n");
            echo sprintf("<link rel='shortcut icon' type='image/png' href='%s'/>\n", $lLogo);
            echo sprintf("<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'/>\n");
            echo sprintf("<meta name='viewport' content='width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0, user-scalable=no'/>\n");
            $lHeader->onFontsUi();
            echo sprintf("</head>\n");
            if($lJsOn) {echo sprintf("<body onload='server_call(\"test\", \"%s\")'>\n", $lJsCB);}
            else {echo sprintf("<body>\n");}
            echo sprintf("<div id='EnvType' hidden>%s</div>\n", $lEnv);
        }
        //===============================================
        public function onFooterUi() {
            $lFooter = new GFooterUi();
            $lFooter->loadScripts();
            echo sprintf("</body>\n");
            echo sprintf("</html>\n");
        }
        //===============================================
        public function runTest() {
            $lKey = $this->getItem("test", "dev");
            GLog::Instance()->addError(sprintf(
                "Erreur le test n'est pas implementé.<br>
                test.........: (%s)<br>"
                , $lKey));
        }
        //===============================================
        public function runJs() {
            echo sprintf("<xmp class='Code3' id='test_js_output'></xmp>\n");
        }
        //===============================================
        public function runFileGlob() {
            $lDatas = glob("sitemap*");
            for($i = 0; $i < count($lDatas); $i++) {
                $lData = $lDatas[$i];
                $this->printData($lData);
            }
        }
        //===============================================
        public function runFileUnlink() {
            @unlink("sitemap_00.xml");
        }
        //===============================================
        public function runXmlCode() {
            $lCode = new GCode();
            $lCode->createDoc();
            $lCode->addData("sitemap", "url_count", 1000);
            $lCode->addData("sitemap", "url_number", "200");
            $lData = $lCode->toString();
            $this->printData($lData);
            //
            $lServer = new GServer();
            $lSitemap = new GSitemap();
            $lData = $lSitemap->serialize();
            $lServer->addResponse($lData);
            $lData = $lServer->getResponse();
            $this->printData($lData);
        }
        //===============================================
        public function runXmlNode() {
            $lDom = new GXml();
            $lDom->createDoc();
            $lDom->createXNode("/un/deux/trois", "ooooooo");
            $lDom->createXNode("/un/deux/quatre", "ooooooo");
            $lDom->createXAttribute("", "doto", "ooooooo");
            $lDom->createXAttribute("/un/deux/trois", "doto", "ooooooo");
            $lDom->createXAttribute("/un/deux/trois", "doto", "aaaaaaa");
            $lData = $lDom->toString();
            $this->printData($lData);
        }
        //===============================================
        public function runXmlSitemap() {
            $lSitemap = new GSitemap();
            $lData = $lSitemap->generateRoot();
            $this->printData($lData);
            $lData = $lSitemap->generateItem();
            $this->printData($lData);
        }
        //===============================================
        public function runXmlMap() {
            $lCode = new GCode();
            $lCode->loadFile("data/xml", "app.xml");
            $lCount = $lCode->countItem("sitemap");
            $lObjs = array();
            
            for($i = 0; $i < $lCount; $i++) {
                $lData = $lCode->loadItem("sitemap", $i);
                $lObj = new GSitemap();
                $lObj->deserialize($lData, "sitemap");
                $lObjs[] = $lObj;
            }
            
            $this->printData(count($lObjs));
            $this->printData($lData);
        }
        //===============================================
        public function runXmlData() {
            $lDom = new GCode();
            $lDom->createDoc();
            $lDom->addData("manager", "id", 200);
            $lDom->addData("manager", "num", "100");
            $lDom->addData("manager", "side", "client");
            $lDom->addData("manager", "msg", "Erreur lors de la connexion");
            $lDom->addData("manager", "module", "");
            $lData = $lDom->toStringData();
            $this->printData($lData);
            
            $lData = $lDom->getItem("manager", "id");
            $this->printData($lData);
            $lData = $lDom->getItem("manager", "num");
            $this->printData($lData);
            $lData = $lDom->getItem("manager", "side");
            $this->printData($lData);
            $lData = $lDom->getItem("manager", "msg");
            $this->printData($lData);
            $lData = $lDom->getItem("manager", "module");
            $this->printData($lData);
        }
        //===============================================
        public function runXmlManager() {
            $lDom = new GCode();
            $lDom->createDoc();
            $lDom->createXNode("/rdv/datas");
            $lDom->createXNode("/rdv/datas");
            $lData = $lDom->toString();
            $this->printData($lData);
        }
        //===============================================
        public function runXmlParent() {
            $lManager = new GManager();
            $lServer = new GServer();
            $lClient = new GSocket();
            $lData = $lManager->serialize();
            $lData = $lClient->callServer("manager", "search_code", $lData);
            $lManager->deserialize($lData);
            $lData = $lManager->serialize();
            $lServer->addResponse($lData);
            $this->printData($lData);
        }
        //===============================================
        public function runSocket() {
            $lLog = GLog::Instance();
            $lSocket = new GSocket();
            $lData = "Bonjour tout le monde";
            $lData = $lSocket->callServerTcp($lData);
            $this->printData($lLog->serialize());
            $this->printData($lLog->serialize());
            $this->printData($lData);
        }
        //===============================================
    }
?>