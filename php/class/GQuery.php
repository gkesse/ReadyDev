<?php   
    class GQuery extends GModule {
        //===============================================
        private $urlCount = 0;
        private $urlMax = 0;
        private $urlList = "";
        private $sitemapCount = 0;
        private $sitemapXml = array();
        private $msg = "";
        //===============================================
        public function __construct() {
            parent::__construct();
            $this->createDoms();
        }
        //===============================================
        public function serialize($code = "sitemap") {
            $lData = new GCode();
            $lData->createDoc();
            $lData->addData($code, "url_count", $this->urlCount);
            $lData->addData($code, "url_max", $this->urlMax);
            $lData->addData($code, "url_list", $this->urlList, true);
            $lData->addData($code, "sitemap_count", $this->sitemapCount);
            $lData->addData($code, "msg", $this->msg);
            $lData->addListCD($code, $this->sitemapXml, "xml");
            return $lData->toStringData();
        }
        //===============================================
        public function deserialize($data, $code = "sitemap") {
            parent::deserialize($data);
        }
        //===============================================
        public function onModule($data, $server) {
            $this->deserialize($data);
            $lMethod = $this->method;
            //===============================================
            if($lMethod == "") {
                return false;
            }
            //===============================================
            // method
            //===============================================
            else if($lMethod == "get_enum") {
                $this->onGetEnum($server);
            }
            else if($lMethod == "get_list") {
                $this->onGetList($server);
            }
            else if($lMethod == "get_generate") {
                $this->onGetGenerate($server);
            }
            else if($lMethod == "get_visualize") {
                $this->onGetVisualize($server);
            }
            //===============================================
            // end
            //===============================================
            else return false;
            return true;
        }
        //===============================================
        public function run() {
            $lId = $this->getItem("query", "id");
            $lTitle = $this->getItem("query", "title");
            
            echo sprintf("<div class='MainBlock'>\n");
            echo sprintf("<div class='Content'>\n");
            echo sprintf("<h1 class='Title2' id='%s'>\n", $lId);
            echo sprintf("<a class='Link3' href='#'>%s</a>\n", $lTitle);
            echo sprintf("</h1>\n");
            echo sprintf("<div class='Body'>\n");
            
            $this->onHeader();            
            $this->onHome();
            $this->onEnum();
            
            echo sprintf("</div>\n");
            echo sprintf("</div>\n");
            echo sprintf("</div>\n");
        }
        //===============================================
        public function onHeader() {
            echo sprintf("<div class='Row10'>\n");
            
            $lCount = $this->countItem("query");
            $lModule = $this->getItemC("query", "header/link", "module");
            $lMethod = $this->getItemC("query", "header/link", "method");
            
            for($i = 0; $i < $lCount; $i++) {
                $lCategory = $this->getItem3("query", "category", $i);
                $lToolTip = $this->getItem3("query", "tooltip", $i);
                $lId = $this->getItem3("query", "id", $i);
                $lName = $this->getItem3("query", "name", $i);
                
                if($lCategory == "header") {
                    echo sprintf("<div class='Col'>\n");
                    echo sprintf("<button class='Button2 QueryTab' title=\"%s\"\n", $lToolTip);
                    echo sprintf("onclick='server_call(\"%s\", \"%s\", this, \"%s\");'>%s</button>\n", $lModule, $lMethod, $lId, $lName);
                    echo sprintf("</div>\n");
                }
            }
            
            echo sprintf("</div>\n");
        }
        //===============================================
        public function onHome() {
            $lId = $this->getItemC("query", "home", "id");
            $lTitle = $this->getItemC("query", "home", "title");
            $lIntro = $this->getItemC("query", "home", "intro");
            
            echo sprintf("<div class='Row Left QueryTabCtn' id='%s'>\n", $lId);
            echo sprintf("<h2 class='Title4'>%s</h2>\n", $lTitle);
            echo sprintf("<div class='Body6'>\n");
            echo sprintf("<div class='Content9'>%s</div>\n", $lIntro);
            echo sprintf("</div>\n");
            echo sprintf("</div>\n");            
        }
        //===============================================
        public function onEnum() {
            $lId = $this->getItem("sitemap/enum", "id");
            $lTitle = $this->getItem("sitemap/enum", "title");
            $lCount = $this->countItem("sitemap/enum");
            
            echo sprintf("<div class='Row Left QueryTabCtn' id='%s'\n", $lId);
            echo sprintf("onkeypress='saveFileKey(event);'>\n");
            echo sprintf("<h2 class='Title4'>%s</h2>\n", $lTitle);
            echo sprintf("<div class='Body13 Center'>\n");
            
            for($i = 0; $i < $lCount; $i++) {
                $lCategory = $this->getItem3("sitemap/enum", "category", $i);
                $lName = $this->getItem3("sitemap/enum", "name", $i);
                $lPicto = $this->getItem3("sitemap/enum", "picto", $i);
                $lToolTip = $this->getItem3("sitemap/enum", "tooltip", $i);
                $lModule = $this->getItem3("sitemap/enum", "module", $i);
                $lMethod = $this->getItem3("sitemap/enum", "method", $i);
                
                if($lCategory == "action") {
                    echo sprintf("<button class='Button7' type='button' title=\"%s\"\n", $lToolTip);
                    echo sprintf("onclick='server_call(\"%s\", \"%s\");'><i class='fa fa-%s'></i> %s</button>\n", $lModule, $lMethod, $lPicto, $lName);
                }
            }
            
            echo sprintf("</div>\n");
            echo sprintf("<div class='Body14'>\n");
            echo sprintf("<div class='Content9'>\n");
            
            for($i = 0; $i < $lCount; $i++) {
                $lCategory = $this->getItem3("sitemap/enum", "category", $i);
                $lLabel = $this->getItem3("sitemap/enum", "label", $i);
                $lId = $this->getItem3("sitemap/enum", "id", $i);
                if($lCategory == "form") {
                    echo sprintf("<div class='Row9'>\n");
                    echo sprintf("<span class='Label4'>%s</span>\n", $lLabel);
                    echo sprintf("<span class='Field5' id='%s'></span>\n", $lId);
                    echo sprintf("</div>\n");
                }
            }          
            
            echo sprintf("</div>\n");
            echo sprintf("</div>\n");
            echo sprintf("</div>\n");
        }
        //===============================================
    }
?>            