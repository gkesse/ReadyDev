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
            $lKey = $this->getItem("test", "js");
            $this->onHeader($lKey);
            $this->onBody();
            $this->onFooter();
        }
        //===============================================
        public function onBody() {
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
        public function onHeader($key) {
            $lEnvObj = new GEnv();
            $lEnv = $lEnvObj->getEnvType();
            
            $lLang = $this->getItem("header", "lang");
            $lTitle = $this->getItem("header", "title");
            $lLogo = $this->getItem("header", "logo");
            
            $lHeader = new GHeader();
            
            echo sprintf("<!DOCTYPE html>\n");
            echo sprintf("<html lang='%s'>\n", $lLang);
            echo sprintf("<head>\n");
            echo sprintf("<title>%s</title>\n", $lTitle);
            echo sprintf("<meta charset='UTF-8'/>\n");
            echo sprintf("<link rel='shortcut icon' type='image/png' href='%s'/>\n", $lLogo);
            echo sprintf("<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'/>\n");
            echo sprintf("<meta name='viewport' content='width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0, user-scalable=no'/>\n");
            $lHeader->onFonts();
            echo sprintf("</head>\n");
            echo sprintf("<body onload='server_call(\"test\", \"%s\")'>\n", $key);            
            echo sprintf("<div id='EnvType' hidden>%s</div>\n", $lEnv);
        }
        //===============================================
        public function onFooter() {
            $lFooter = new GFooter();
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
            $lDom->createXPath();
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
            $lCode->createDocFile("data/xml", "app.xml");
            $lCount = $lCode->countItem("sitemap");
            $lObjs = array();
            
            for($i = 0; $i < $lCount; $i++) {
                $lData = $lCode->loadItem("sitemap", $i);                
                $lObj = new GSitemap();
                $lObj->deserialize($lData, "sitemap");
                $lObjs[] = $lObj;
            }

            $this->printData($lData);
        }
        //===============================================
    }
?>