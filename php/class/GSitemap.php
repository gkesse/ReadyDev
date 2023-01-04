<?php   
    class GSitemap extends GModule {
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
            $lId = $this->getItem("sitemap", "id");
            $lTitle = $this->getItem("sitemap", "title");
            echo sprintf("<div class='MainBlock'>\n");
            echo sprintf("<div class='Content'>\n");
            echo sprintf("<h1 class='Title2' id='%s'>\n", $lId);
            echo sprintf("<a class='Link3' href='#'>%s</a>\n", $lTitle);
            echo sprintf("</h1>\n");
            echo sprintf("<div class='Body'>\n");
            $this->onHeader();
            $this->onHome();
            $this->onEnum();
            $this->onList();
            $this->onGenerate();
            $this->onVisualize();
            echo sprintf("</div>\n");
            echo sprintf("</div>\n");
            echo sprintf("</div>\n");
        }
        //===============================================
        public function onHeader() {
            echo sprintf("<div class='Row10'>\n");
            
            $lCount = $this->countItem("sitemap");
            $lModule = $this->getItemC("sitemap", "header/link", "module");
            $lMethod = $this->getItemC("sitemap", "header/link", "method");
            
            for($i = 0; $i < $lCount; $i++) {
                $lCategory = $this->getItem3("sitemap", "category", $i);
                $lToolTip = $this->getItem3("sitemap", "tooltip", $i);
                $lId = $this->getItem3("sitemap", "id", $i);
                $lName = $this->getItem3("sitemap", "name", $i);
                
                if($lCategory == "header") {
                    echo sprintf("<div class='Col'>\n");
                    echo sprintf("<button class='Button2 sitemap_tab_' title=\"%s\"\n", $lToolTip);
                    echo sprintf("onclick='call_server(\"%s\", \"%s\", this, \"%s\");'>%s</button>\n", $lModule, $lMethod, $lId, $lName);
                    echo sprintf("</div>\n");
                }
            }
            
            echo sprintf("</div>\n");
        }
        //===============================================
        public function onHome() {
            $lId = $this->getItemC("sitemap", "home", "id");
            $lTitle = $this->getItemC("sitemap", "home", "title");
            $lIntro = $this->getItemC("sitemap", "home", "intro");
            
            echo sprintf("<div class='Row Left sitemap_tab_ctn' id='%s'>\n", $lId);
            echo sprintf("<h2 class='Title4'>%s</h2>\n", $lTitle);
            echo sprintf("<div class='Body6'>\n");
            echo sprintf("<div class='Content9'>%s</div>\n", $lIntro);
            echo sprintf("</div>\n");
            echo sprintf("</div>\n");            
        }
        //===============================================
        public function onEnum() {
            $lId = $this->getItemC("sitemap", "enum", "id");
            $lTitle = $this->getItemC("sitemap", "enum", "title");
            $lCount = $this->countItem("sitemap");
            
            echo sprintf("<div class='Row Left sitemap_tab_ctn' id='%s'\n", $lId);
            echo sprintf("onkeypress='saveFileKey(event);'>\n");
            echo sprintf("<h2 class='Title4'>%s</h2>\n", $lTitle);
            echo sprintf("<div class='Body13 Center'>\n");
            
            for($i = 0; $i < $lCount; $i++) {
                $lCategory = $this->getItem3("sitemap", "category", $i);
                $lName = $this->getItem3("sitemap", "name", $i);
                $lPicto = $this->getItem3("sitemap", "picto", $i);
                $lToolTip = $this->getItem3("sitemap", "tooltip", $i);
                $lModule = $this->getItem3("sitemap", "module", $i);
                $lMethod = $this->getItem3("sitemap", "method", $i);
                
                if($lCategory == "enum_action") {
                    echo sprintf("<button class='Button7' type='button' title=\"%s\"\n", $lToolTip);
                    echo sprintf("onclick='call_server(\"%s\", \"%s\");'><i class='fa fa-%s'></i> %s</button>\n", $lModule, $lMethod, $lPicto, $lName);
                }
            }
            
            echo sprintf("</div>\n");
            echo sprintf("<div class='Body14'>\n");
            echo sprintf("<div class='Content9'>\n");
            
            for($i = 0; $i < $lCount; $i++) {
                $lCategory = $this->getItem3("sitemap", "category", $i);
                $lLabel = $this->getItem3("sitemap", "label", $i);
                $lId = $this->getItem3("sitemap", "id", $i);
                
                if($lCategory == "enum_form") {
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
        public function onList() {
            $lId = $this->getItemC("sitemap", "list", "id");
            $lUrl = $this->getItemC("sitemap", "list", "url");
            $lTitle = $this->getItemC("sitemap", "list", "title");
            $lCount = $this->countItem("sitemap");
            
            echo sprintf("<div class='Row Left sitemap_tab_ctn' id='%s'>\n", $lId);
            echo sprintf("<h2 class='Title4'>%s</h2>\n", $lTitle);
            echo sprintf("<div class='Body13 Center'>\n");
            
            for($i = 0; $i < $lCount; $i++) {
                $lCategory = $this->getItem3("sitemap", "category", $i);
                $lName = $this->getItem3("sitemap", "name", $i);
                $lPicto = $this->getItem3("sitemap", "picto", $i);
                $lToolTip = $this->getItem3("sitemap", "tooltip", $i);
                $lModule = $this->getItem3("sitemap", "module", $i);
                $lMethod = $this->getItem3("sitemap", "method", $i);
                
                if($lCategory == "list_action") {
                    echo sprintf("<button class='Button7' type='button' title=\"%s\"\n", $lToolTip);
                    echo sprintf("onclick='call_server(\"%s\", \"%s\");'><i class='fa fa-%s'></i> %s</button>\n", $lModule, $lMethod, $lPicto, $lName);
                }
            }
            
            echo sprintf("</div>\n");
            echo sprintf("<div class='Body15'>\n");
            echo sprintf("<div class='Row21'>\n");
            echo sprintf("<div class='Content9' id='%s'></div>\n", $lUrl);
            echo sprintf("</div>\n");
            echo sprintf("</div>\n");
            echo sprintf("</div>\n");
        }
        //===============================================
        public function onGenerate() {
            $lId = $this->getItemC("sitemap", "generate", "id");
            $lUrl = $this->getItemC("sitemap", "generate", "url");
            $lTitle = $this->getItemC("sitemap", "generate", "title");
            $lCount = $this->countItem("sitemap");
            
            echo sprintf("<div class='Row Left sitemap_tab_ctn' id='%s'>\n", $lId);
            echo sprintf("<h2 class='Title4'>%s</h2>\n", $lTitle);
            echo sprintf("<div class='Body13 Center'>\n");
            
            for($i = 0; $i < $lCount; $i++) {
                $lCategory = $this->getItem3("sitemap", "category", $i);
                $lName = $this->getItem3("sitemap", "name", $i);
                $lPicto = $this->getItem3("sitemap", "picto", $i);
                $lToolTip = $this->getItem3("sitemap", "tooltip", $i);
                $lModule = $this->getItem3("sitemap", "module", $i);
                $lMethod = $this->getItem3("sitemap", "method", $i);
                
                if($lCategory == "generate_action") {
                    echo sprintf("<button class='Button7' type='button' title=\"%s\"\n", $lToolTip);
                    echo sprintf("onclick='call_server(\"%s\", \"%s\");'><i class='fa fa-%s'></i> %s</button>\n", $lModule, $lMethod, $lPicto, $lName);
                }
            }
            
            echo sprintf("</div>\n");
            echo sprintf("<div class='Body15'>\n");
            echo sprintf("<div class='Row21'>\n");
            echo sprintf("<div class='Content9' id='%s'></div>\n", $lUrl);
            echo sprintf("</div>\n");
            echo sprintf("</div>\n");
            echo sprintf("</div>\n");
        }
        //===============================================
        public function onGetEnum($server) {
            $this->getEnum();
            $lData = $this->serialize();
            $server->addResponse($lData);
        }
        //===============================================
        public function onGetList($server) {
            $this->getEnum();
            $this->getListUrl();
            $lData = $this->serialize();
            $server->addResponse($lData);
        }
        //===============================================
        public function onGetGenerate($server) {
            $this->generate();
            $lData = $this->serialize();
            $server->addResponse($lData);
        }
        //===============================================
        public function onGetVisualize($server) {
            $this->generate();
            $this->getVisualize();
            $lData = $this->serialize();
            $server->addResponse($lData);
        }
        //===============================================
        public function onVisualize() {
            $lId = $this->getItemC("sitemap", "visualize", "id");
            $lTitle = $this->getItemC("sitemap", "visualize", "title");
            $lCount = $this->countItem("sitemap");
            
            echo sprintf("<div class='Row Left sitemap_tab_ctn' id='%s'>\n", $lId);
            echo sprintf("<h2 class='Title4'>%s</h2>\n", $lTitle);
            
            echo sprintf("<div class='Body7 Center'>\n");            
            for($i = 0; $i < $lCount; $i++) {
                $lCategory = $this->getItem3("sitemap", "category", $i);
                $lName = $this->getItem3("sitemap", "name", $i);
                $lPicto = $this->getItem3("sitemap", "picto", $i);
                $lToolTip = $this->getItem3("sitemap", "tooltip", $i);
                $lModule = $this->getItem3("sitemap", "module", $i);
                $lMethod = $this->getItem3("sitemap", "method", $i);
                
                if($lCategory == "visualize_action") {
                    echo sprintf("<button class='Button7' type='button' title=\"%s\"\n", $lToolTip);
                    echo sprintf("onclick='call_server(\"%s\", \"%s\");'><i class='fa fa-%s'></i> %s</button>\n", $lModule, $lMethod, $lPicto, $lName);
                }
            }           
            echo sprintf("</div>\n");
            
            echo sprintf("<div class='Body0 Center'>\n");
            for($i = 0; $i < $lCount; $i++) {
                $lCategory = $this->getItem3("sitemap", "category", $i);
                $lName = $this->getItem3("sitemap", "name", $i);
                $lPicto = $this->getItem3("sitemap", "picto", $i);
                $lToolTip = $this->getItem3("sitemap", "tooltip", $i);
                $lModule = $this->getItem3("sitemap", "module", $i);
                $lMethod = $this->getItem3("sitemap", "method", $i);
                $lId = $this->getItem3("sitemap", "id", $i);
                
                if($lCategory == "visualize_sitemap") {
                    echo sprintf("<button class='Button8 sitemap_file_tab' type='button' title=\"%s\"\n", $lToolTip);
                    echo sprintf("onclick='call_server(\"%s\", \"%s\", this, \"%s\");'><i class='fa fa-%s'></i> %s</button>\n", $lModule, $lMethod, $lId, $lPicto, $lName);
                }
            }
            echo sprintf("</div>\n");            
            
            echo sprintf("<div class='Body14'>\n");
            for($i = 0; $i < $lCount; $i++) {
                $lCategory = $this->getItem3("sitemap", "category", $i);
                $lId = $this->getItem3("sitemap", "id", $i);
                $lTitle = $this->getItem3("sitemap", "title", $i);
                $lContent = $this->getItem3("sitemap", "content", $i);
                
                if($lCategory == "visualize_content") {
                    echo sprintf("<div class='sitemap_file_tabCtn' id='%s'>\n", $lId);
                    echo sprintf("<h3 class='Title6'>%s</h3>\n", $lTitle);
                    echo sprintf("<div class='Content9' id='%s'></div>\n", $lContent);
                    echo sprintf("</div>\n");
                }
            }
            echo sprintf("</div>\n");
        }
        //===============================================
        public function generate() {
            $this->deleteXml();
            $this->generateRoot();
            $this->generateItem();
            $this->msg = "SUCCES: La génération du Sitemap a réussie...";
        }
        //===============================================
        public function generateRoot() {
            $lPathObj = new GPath();            
            $lPath = $this->getItemC("sitemap", "configs", "path");
            $lFile = $this->getItemC("sitemap", "configs", "file");
            $lExt = $this->getItemC("sitemap", "configs", "ext");
            $lXmlns = $this->getItemC("sitemap", "configs", "xmlns");
            $lXsi = $this->getItemC("sitemap", "configs", "xsi");
            $lSchema = $this->getItemC("sitemap", "configs", "schema");
            $lUrlMax = $this->getItemC("sitemap", "configs", "url_max");
            
            $lFilename = sprintf("%s/%s_%02d.%s", $lPath, $lFile, 0, $lExt);
            $lFilename = $lPathObj->getPath($lFilename);
            
            $lDom = new GXml();
            $lDom->createDoc();
            
            $lDom->createXAttribute("/sitemapindex", "xmlns", $lXmlns);
            $lDom->createXAttribute("/sitemapindex", "xmlns:xsi", $lXsi);
            $lDom->createXAttribute("/sitemapindex", "xsi:schemaLocation", $lSchema);
            
            $lUrlCount = $this->countItem("sitemap_urls");
            $lIndexCount = ceil($lUrlCount/$lUrlMax);
            
            for($i = 0; $i < $lIndexCount; $i++) {
                $lLoc = sprintf("%s/%s_%02d.%s", $lPath, $lFile, $i + 1, $lExt);
                $lLoc = $lPathObj->getUrl($lLoc);
                $lLastmod = date("Y-m-d");
                
                $lDom->saveNode();
                $lDom->createNode("sitemap");
                $lDom->createRNode("loc", $lLoc);
                $lDom->createRNode("lastmod", $lLastmod);
                $lDom->restoreNode();
            }
            
            $lDom->saveXml($lFilename);
        }
        //===============================================
        public function generateItem() {
            $lPathObj = new GPath();            
            $lPath = $this->getItemC("sitemap", "configs", "path");
            $lFile = $this->getItemC("sitemap", "configs", "file");
            $lExt = $this->getItemC("sitemap", "configs", "ext");
            $lXmlns = $this->getItemC("sitemap", "configs", "xmlns");
            $lXsi = $this->getItemC("sitemap", "configs", "xsi");
            $lSchema = $this->getItemC("sitemap", "configs", "schema");
            $lUrlMax = $this->getItemC("sitemap", "configs", "url_max");
            
            $lUrlCount = $this->countItem("sitemap_urls");
            $lIndexCount = ceil($lUrlCount/$lUrlMax);
            
            $k = 0;
            
            for($i = 0; $i < $lIndexCount; $i++) {
                $lFilename = sprintf("%s/%s_%02d.%s", $lPath, $lFile, $i + 1, $lExt);
                $lFilename = $lPathObj->getPath($lFilename);
                
                $lDom = new GXml();
                $lDom->createDoc();
                
                $lDom->createXAttribute("/urlset", "xmlns", $lXmlns);
                $lDom->createXAttribute("/urlset", "xmlns:xsi", $lXsi);
                $lDom->createXAttribute("/urlset", "xsi:schemaLocation", $lSchema);                
                                
                for($j = 0; $j < $lUrlMax; $j++) {
                    if($k == $lUrlCount) break;
                    $lLoc = $this->getItem3("sitemap_urls", "loc", $k);
                    $lLastmod = $this->getItem3("sitemap_urls", "lastmod", $k);
                    $lChangefreq = $this->getItem3("sitemap_urls", "changefreq", $k);
                    $lPriority = $this->getItem3("sitemap_urls", "priority", $k);
                    
                    $lLoc = $lPathObj->getUrl($lLoc);
                    
                    $lDom->saveNode();
                    $lDom->createNode("url");
                    $lDom->createRNode("loc", $lLoc);
                    $lDom->createRNode("lastmod", $lLastmod);
                    $lDom->createRNode("changefreq", $lChangefreq);
                    $lDom->createRNode("priority", $lPriority);
                    $lDom->restoreNode();
                    
                    $k++;
                }            
                
                $lDom->saveXml($lFilename);
            }
        }
        //===============================================
        public function getEnum() {
            $lUrlCount = $this->countItem("sitemap_urls");
            $lUrlMax = $this->getItemC("sitemap", "configs", "url_max");
            $this->urlCount = $lUrlCount;
            $this->urlMax = $lUrlMax;
            $this->sitemapCount = ceil($this->urlCount / $this->urlMax);
        }
        //===============================================
        public function getListUrl() {
            $lCount = $this->countItem("sitemap_urls");
            
            $lDataVal = "";
            $lDataVal .= "<ol class='List3'>";
            for($i = 0; $i < $lCount; $i++) {
                $lUrl = $this->getItem3("sitemap_urls", "loc", $i);
                $lDataVal .= "<li>".$lUrl."</li>";
            }
            $lDataVal .= "</ol>";
            $this->urlList = $lDataVal;
        }
        //===============================================
        public function getVisualize() {
            $lPathObj = new GPath();
            $lPath = $this->getItemC("sitemap", "configs", "path");
            $lFile = $this->getItemC("sitemap", "configs", "file");
            $lExt = $this->getItemC("sitemap", "configs", "ext");
            
            $this->getEnum();
            
            for($i = 0; $i <= $this->sitemapCount; $i++) {
                $lFilename = $lPathObj->getPath($lPath, $lFile);                
                $lFilename = sprintf("%s_%02d.%s", $lFilename, $i, $lExt);
                $lData = file_get_contents($lFilename);
                $lData = sprintf("<xmp class='Code'>%s</xmp>", $lData);
                $this->sitemapXml[] = $lData;
            }
        }
        //===============================================
        public function deleteXml() {
            $lPathObj = new GPath();
            $lPath = $this->getItemC("sitemap", "configs", "path");
            $lFile = $this->getItemC("sitemap", "configs", "file");
            $lPath = $lPathObj->getPath($lPath, $lFile);
            $lPattern = sprintf("%s*", $lPath);
            $lFiles = glob($lPattern);
            
            for($i = 0; $i < count($lFiles); $i++) {
                $lFile = $lFiles[$i];
                unlink($lFile);
            }
        }
        //===============================================
    }
?>            