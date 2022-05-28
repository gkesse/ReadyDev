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
            // xml
            //===============================================
            else if($lKey == "xml/code") {
                $this->runXmlCode();
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
    }
?>