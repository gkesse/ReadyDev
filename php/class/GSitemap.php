<?php   
    class GSitemap extends GModule {
        //===============================================
        private $change = array();
        private $xml = null;
        private $filename;
        private $file;
        private $urls = array();
        private $urlMap = array();
        private $compiler = array();
        private $sitemaps = array();
        private $urlCount = 0;
        private $urlList = "";
        private $sitemapCount = 0;
        private $sitemapsXml = "";
        private $sitemapXml = "";
        private $msg = "";
        //===============================================
        const URL_MAX = 50000;
        //===============================================
        public function __construct() {
            parent::__construct();
            $this->createDoms();
            
            $this->change = array(
                'always', 
                'hourly', 
                'daily', 
                'weekly', 
                'monthly', 
                'yearly', 
                'never'                
            );
            
            $this->compiler = array(
                "/NMake/", 
                "/MinGW/", 
                "/Cygwin/", 
                "/Make/", 
                "/CMake/NMake/", 
                "/QMake/NMake/"               
            );
            
            $this->urlMap[] = array(
                "link" => "/",
                "freq" => "daily",
                "prio" => "1.0"                
            );
        }
        //===============================================
        public function serialize($code = "sitemap") {
            $lData = new GCode();
            $lData->createDoc();
            $lData->addData($code, "url_count", $this->urlCount);
            $lData->addData($code, "url_list", $this->urlList, true);
            $lData->addData($code, "sitemap_count", $this->sitemapCount);
            $lData->addData($code, "sitemaps_xml", $this->sitemapsXml, true);
            $lData->addData($code, "sitemap_xml", $this->sitemapXml, true);
            $lData->addData($code, "msg", $this->msg);
            return $lData->toStringCode($code);
        }
        //===============================================
        public function deserialize($data, $code = "sitemap") {
            parent::deserialize($data);
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
            
            for($i = 0; $i < $lCount; $i++) {
                $lCategory = $this->getItem3("sitemap", "category", $i);
                $lToolTip = $this->getItem3("sitemap", "tooltip", $i);
                $lId = $this->getItem3("sitemap", "id", $i);
                $lName = $this->getItem3("sitemap", "name", $i);
                if($lCategory != "header") continue;
                echo sprintf("<div class='Col'>\n");
                echo sprintf("<button class='Button2 SitemapTab' title=\"%s\"\n", $lToolTip);
                echo sprintf("onclick='openSitemapTab(this, \"%s\");'>%s</button>\n", $lId, $lName);
                echo sprintf("</div>\n");
            }
            
            echo sprintf("</div>\n");
        }
        //===============================================
        public function onHome() {
            $lId = $this->getItem("sitemap/home", "id");
            $lTitle = $this->getItem("sitemap/home", "title");
            $lIntro = $this->getItem("sitemap/home", "intro");
            echo sprintf("<div class='Row Left SitemapTabCtn' id='%s'>\n", $lId);
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
            
            echo sprintf("<div class='Row Left SitemapTabCtn' id='%s'\n", $lId);
            echo sprintf("onkeypress='saveFileKey(event);'>\n");
            echo sprintf("<h2 class='Title4'>%s</h2>\n", $lTitle);
            echo sprintf("<div class='Body13 Center'>\n");
            
            for($i = 0; $i < $lCount; $i++) {
                $lCategory = $this->getItem3("sitemap/enum", "category", $i);
                $lName = $this->getItem3("sitemap/enum", "name", $i);
                $lPicto = $this->getItem3("sitemap/enum", "picto", $i);
                $lToolTip = $this->getItem3("sitemap/enum", "tooltip", $i);
                $lOnClick = $this->getItem3("sitemap/enum", "onclick", $i);
                $lModule = $this->getItem3("sitemap/enum", "module", $i);
                $lMethod = $this->getItem3("sitemap/enum", "method", $i);
                
                if($lCategory == "action") {
                    echo sprintf("<button class='Button7' type='button' title=\"%s\"\n", $lToolTip);
                    echo sprintf("onclick='%s'><i class='fa fa-%s'></i> %s</button>\n", $lOnClick, $lPicto, $lName);
                }
                else if($lCategory == "action/server") {
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
                if($lCategory != "form") continue;
                echo sprintf("<div class='Row9'>\n");
                echo sprintf("<span class='Label4'>%s</span>\n", $lLabel);
                echo sprintf("<span class='Field5' id='%s'></span>\n", $lId);
                echo sprintf("</div>\n");
            }          
            
            echo sprintf("</div>\n");
            echo sprintf("</div>\n");
            echo sprintf("</div>\n");
        }
        //===============================================
        public function onList() {
            $lId = $this->getItem("sitemap/list", "id");
            $lUrl = $this->getItem("sitemap/list", "url");
            $lTitle = $this->getItem("sitemap/list", "title");
            $lCount = $this->countItem("sitemap/list");
            
            echo sprintf("<div class='Row Left SitemapTabCtn' id='%s'>\n", $lId);
            echo sprintf("<h2 class='Title4'>%s</h2>\n", $lTitle);
            echo sprintf("<div class='Body13 Center'>\n");
            
            for($i = 0; $i < $lCount; $i++) {
                $lCategory = $this->getItem3("sitemap/list", "category", $i);
                $lName = $this->getItem3("sitemap/list", "name", $i);
                $lPicto = $this->getItem3("sitemap/list", "picto", $i);
                $lToolTip = $this->getItem3("sitemap/list", "tooltip", $i);
                $lOnClick = $this->getItem3("sitemap/list", "onclick", $i);
                $lModule = $this->getItem3("sitemap/list", "module", $i);
                $lMethod = $this->getItem3("sitemap/list", "method", $i);
                
                if($lCategory == "action") {
                    echo sprintf("<button class='Button7' type='button' title=\"%s\"\n", $lToolTip);
                    echo sprintf("onclick='%s'><i class='fa fa-%s'></i> %s</button>\n", $lOnClick, $lPicto, $lName);
                }
                else if($lCategory == "action/server") {
                    echo sprintf("<button class='Button7' type='button' title=\"%s\"\n", $lToolTip);
                    echo sprintf("onclick='server_call(\"%s\", \"%s\");'><i class='fa fa-%s'></i> %s</button>\n", $lModule, $lMethod, $lPicto, $lName);
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
        public function onGenerate() {
            $lId = $this->getItem("sitemap/generate", "id");
            $lUrl = $this->getItem("sitemap/generate", "url");
            $lTitle = $this->getItem("sitemap/generate", "title");
            $lCount = $this->countItem("sitemap/generate");
            
            echo sprintf("<div class='Row Left SitemapTabCtn' id='%s'>\n", $lId);
            echo sprintf("<h2 class='Title4'>%s</h2>\n", $lTitle);
            echo sprintf("<div class='Body13 Center'>\n");
            
            for($i = 0; $i < $lCount; $i++) {
                $lCategory = $this->getItem3("sitemap/generate", "category", $i);
                $lName = $this->getItem3("sitemap/generate", "name", $i);
                $lPicto = $this->getItem3("sitemap/generate", "picto", $i);
                $lToolTip = $this->getItem3("sitemap/generate", "tooltip", $i);
                $lOnClick = $this->getItem3("sitemap/generate", "onclick", $i);
                $lModule = $this->getItem3("sitemap/generate", "module", $i);
                $lMethod = $this->getItem3("sitemap/generate", "method", $i);
                
                if($lCategory == "action") {
                    echo sprintf("<button class='Button7' type='button' title=\"%s\"\n", $lToolTip);
                    echo sprintf("onclick='%s'><i class='fa fa-%s'></i> %s</button>\n", $lOnClick, $lPicto, $lName);
                }
                else if($lCategory == "action/server") {
                    echo sprintf("<button class='Button7' type='button' title=\"%s\"\n", $lToolTip);
                    echo sprintf("onclick='server_call(\"%s\", \"%s\");'><i class='fa fa-%s'></i> %s</button>\n", $lModule, $lMethod, $lPicto, $lName);
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
            $this->getInfos();
            $lData = $this->serialize();
            $server->addResponse($lData);
        }
        //===============================================
        public function onGetList($server) {
            $this->getInfos();
            $this->getList();
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
            $lId = $this->getItem("sitemap/visualize", "id");
            $lTitle = $this->getItem("sitemap/visualize", "title");
            $lCount = $this->countItem("sitemap/visualize");
            
            echo sprintf("<div class='Row Left SitemapTabCtn' id='%s'>\n", $lId);
            echo sprintf("<h2 class='Title4'>%s</h2>\n", $lTitle);
            
            echo sprintf("<div class='Body7 Center'>\n");            
            for($i = 0; $i < $lCount; $i++) {
                $lCategory = $this->getItem3("sitemap/visualize", "category", $i);
                $lName = $this->getItem3("sitemap/visualize", "name", $i);
                $lPicto = $this->getItem3("sitemap/visualize", "picto", $i);
                $lToolTip = $this->getItem3("sitemap/visualize", "tooltip", $i);
                $lOnClick = $this->getItem3("sitemap/visualize", "onclick", $i);
                $lModule = $this->getItem3("sitemap/visualize", "module", $i);
                $lMethod = $this->getItem3("sitemap/visualize", "method", $i);
                
                if($lCategory == "action") {
                    echo sprintf("<button class='Button7' type='button' title=\"%s\"\n", $lToolTip);
                    echo sprintf("onclick='%s'><i class='fa fa-%s'></i> %s</button>\n", $lOnClick, $lPicto, $lName);
                }
                else if($lCategory == "action/server") {
                    echo sprintf("<button class='Button7' type='button' title=\"%s\"\n", $lToolTip);
                    echo sprintf("onclick='server_call(\"%s\", \"%s\");'><i class='fa fa-%s'></i> %s</button>\n", $lModule, $lMethod, $lPicto, $lName);
                }
            }           
            echo sprintf("</div>\n");
            
            echo sprintf("<div class='Body0 Center'>\n");
            for($i = 0; $i < $lCount; $i++) {
                $lCategory = $this->getItem3("sitemap/visualize", "category", $i);
                $lName = $this->getItem3("sitemap/visualize", "name", $i);
                $lPicto = $this->getItem3("sitemap/visualize", "picto", $i);
                $lToolTip = $this->getItem3("sitemap/visualize", "tooltip", $i);
                $lOnClick = $this->getItem3("sitemap/visualize", "onclick", $i);
                if($lCategory != "sitemap") continue;
                echo sprintf("<button class='Button8 SitemapFileTab' type='button' title=\"%s\"\n", $lToolTip);
                echo sprintf("onclick='openSitemapFileTab(this, \"%s\");'><i class='fa fa-%s'></i> %s</button>\n", $lOnClick, $lPicto, $lName);
            }
            echo sprintf("</div>\n");            
            
            echo sprintf("<div class='Body14'>\n");
            for($i = 0; $i < $lCount; $i++) {
                $lCategory = $this->getItem3("sitemap/visualize", "category", $i);
                $lId = $this->getItem3("sitemap/visualize", "id", $i);
                $lTitle = $this->getItem3("sitemap/visualize", "title", $i);
                $lContent = $this->getItem3("sitemap/visualize", "content", $i);
                if($lCategory != "content") continue;
                echo sprintf("<div class='SitemapFileTabCtn' id='%s'>\n", $lId);
                echo sprintf("<h3 class='Title6'>%s</h3>\n", $lTitle);
                echo sprintf("<div class='Content9' id='%s'></div>\n", $lContent);
                echo sprintf("</div>\n");
            }
            echo sprintf("</div>\n");
        }
        //===============================================
        public function generate() {            
            $this->getUrls();
            $this->addUrls();
            $this->deleteXml();
            
             foreach($this->urls as $m_url) {
                if($this->urlCount % self::URL_MAX == 0) {
                    $this->closeXml();
                    $this->openXml();
                }
                $this->xml->startElement("url");
                foreach($m_url as $key => $value) {
                    if(isset($m_url[$key]) == true) $this->xml->writeElement($key, $value);
                }
                $this->xml->endElement();
                $this->urlCount++;
            }
            
            $this->closeXml();
            $this->sitemap();
            $this->msg = "SUCCES: La génération du Sitemap a réussie...";           
        }
        //===============================================
        public function getUrls() {
            $lRoot = "/data/json/";
            $lPath = GGlobal::Instance()->getPath($lRoot);
            $lHandle = opendir($lPath);
            if($lHandle == true) { 
                while(1) {
                    $lDoc = readdir($lHandle);
                    if($lDoc == false) break;
                    if($lDoc == "." || $lDoc == "..") continue;
                    $lExt = pathinfo($lDoc, PATHINFO_EXTENSION);
                    if($lExt != "json") continue; 
                    $lPath = $lRoot.$lDoc;
                    $lData = GJson::Instance()->getData($lPath);
                    if(isset($lData["sitemap"])) {
                        if($lData["sitemap"] == "yes") {
                            $this->getData($lData);
                        }
                    }
                }
            }
			$lUrlCol = array();
			foreach ($this->urlMap as $lKey => $lRow) {
			    $lUrlCol[$lKey]  = $lRow['link'];
			}
			array_multisort($lUrlCol, SORT_ASC, $this->urlMap);
        }
        //===============================================
        public function getUrls2() {
            $m_root = "/data/json/";
            $m_path = GGlobal::Instance()->getPath($m_root);
            $m_handle = opendir($m_path);
            if($m_handle == true) { 
                while(1) {
                    $m_doc = readdir($m_handle);
                    if($m_doc == false) break;
                    if($m_doc == "." || $m_doc == "..") continue;
                    $m_ext = pathinfo($m_doc, PATHINFO_EXTENSION);
                    if($m_ext != "json") continue; 
                    $m_path = $m_root.$m_doc;
                    $m_data = GJson::Instance()->getData($m_path);
                    if(isset($m_data["sitemap"])) {
                        if($m_data["sitemap"] == "yes") {
                            $this->getData($m_data);
                        }
                    }
                }
            }
        }
        //===============================================
        public function getData($data) {
            if(is_array($data)) {
                foreach($data as $key => $value) {
                    if(is_array($value)) {
                        $this->getData($value);
                    }
                    else {
                        if(!is_numeric($key) && $key == "follow") {
                            if($value == "yes") {
								$m_search = GGlobal::Instance()->searchData($this->urlMap, "link", $data["link"]);
								if(empty($m_search)) {
									$m_isCompiler = preg_match("#.*/NMake/.*#", $value);
									if($m_isCompiler == true) {
										foreach($this->compiler as $m_item) {
											$m_result = str_replace("/NMake/", $m_item, $value);
											$data["link"] = $m_result;
											$this->urlMap[] = $data;
										}
									}
									else {
										$this->urlMap[] = $data;
									}
								}
                            }
                        }
                    }
                }
            }
        }
        //===============================================
        public function getData2($data) {
            if(is_array($data)) {
                foreach($data as $key => $value) {
                    if(is_array($value)) {
                        $this->getData($value);
                    }
                    else {
                        if(!is_numeric($key) && $key == "link") {
                            if($value != "") {
                                if($value[0] != "#") {
                                    $m_search = GGlobal::Instance()->search($this->urlMap, "link", $value);
                                    if(empty($m_search)) {
                                        $m_isCompiler = preg_match("#.*/NMake/.*#", $value);
                                        if($m_isCompiler == true) {
                                            foreach($this->compiler as $m_item) {
                                                $m_result = str_replace("/NMake/", $m_item, $value);
                                                $data["link"] = $m_result;
                                                $this->urlMap[] = $data;
                                            }
                                        }
                                        else {
                                            $this->urlMap[] = $data;
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        //===============================================
        public function addUrls() {
            foreach($this->urlMap as $lLink) {
                $lUrl = array();
                if(isset($lLink["link"])) $lUrl["loc"] = GGlobal::Instance()->getUrl($lLink["link"]);
                if(isset($lLink["link"])) $lUrl["lastmod"] = GFile::Instance()->getDateTime($lLink["link"]);
                $lUrl["changefreq"] = "weekly";
                if(isset($lLink["freq"])) $lUrl["changefreq"] = $lLink["freq"];
                $lUrl["priority"] = "0.8";
                if(isset($lLink["prio"])) $lUrl["priority"] = $lLink["prio"];
                $this->urls[] = $lUrl;
            }
        }
        //===============================================
        public function openXml($openId = 0) {
            $this->xml = new xmlwriter();
            $this->xml->openMemory();
            $this->xml->setIndent(TRUE);
            $this->xml->setIndentString('    ');
            $this->xml->startDocument('1.0', 'UTF-8');
            
            if($openId == 0) {
                $m_index = $this->urlCount / self::URL_MAX;
                $m_index = ($m_index == 0) ? "" : ($m_index + 1);
                $m_path = "data/sitemaps/sitemap".$m_index.".xml";
                $this->sitemaps[] = GGlobal::Instance()->getUrl($m_path);
                $this->xml->startElement("urlset");
            }
            else if($openId == 1) {
                $m_path = "data/sitemaps/sitemaps.xml";
                $this->xml->startElement("sitemapindex");
            }
            
            $this->filename = GGlobal::Instance()->getPath2($m_path);
            $this->file = fopen($this->filename, "w");
            
            $this->xml->writeAttribute("xmlns", 
            "http://www.sitemaps.org/schemas/sitemap/0.9");
            $this->xml->writeAttribute("xmlns:xsi", 
            "http://www.w3.org/2001/XMLSchema-instance");
            $this->xml->writeAttribute("xsi:schemaLocation", 
            "http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd");
        }
        //===============================================
        public function closeXml() {
            if(is_null($this->xml)) return;
            $this->xml->endElement();
            fwrite($this->file, $this->xml->flush());
            fclose($this->file);
        }
        //===============================================
        public function deleteXml() {
            $m_root = "/data/sitemaps/";
            $m_path = GGlobal::Instance()->getPath($m_root);
            $m_handle = opendir($m_path);
            if($m_handle == true) {
                while(1) {
                    $m_doc = readdir($m_handle);
                    if($m_doc == false) break;
                    if($m_doc == "." || $m_doc == ".." || $m_doc == "index.php") continue;
                    $m_fullname = $m_path."/".$m_doc;
                    $m_fullname = realpath($m_fullname);
                    unlink($m_fullname);
                }
            }
        }
        //===============================================
        public function sitemap() {
            $this->openXml(1);
            foreach($this->sitemaps as $lSitemap) {
                $this->xml->startElement("sitemap");
                $this->xml->writeElement("loc", $lSitemap);
                $this->xml->writeElement("lastmod", date("Y-m-d"));
                $this->xml->endElement();
            }
            $this->closeXml();
        }
        //===============================================
        public function getInfos() {
            $this->getUrls();
            $this->urlCount = count($this->urlMap);
            $this->sitemapCount = ceil($this->urlCount / 50000);
        }
        //===============================================
        public function getList() {
            $lData = array_column($this->urlMap, "link");
            $lDataVal = "";
            $lDataVal .= "<ol class='List3'>";
            for($i = 0; $i < count($lData); $i++) {
                $lDataVal .= "<li>".$lData[$i]."</li>";
            }
            $lDataVal .= "</ol>";
            $this->urlList = $lDataVal;
        }
        //===============================================
        public function getVisualize() {
            $lFileObj = new GFile();
            $lFileArr = array("sitemaps", "sitemap");
            $lDataArr = array();
            for($i = 0; $i < count($lFileArr); $i++) {
                $lFile = "/data/sitemaps/".$lFileArr[$i].".xml";
                $lData = $lFileObj->getData($lFile);
                $lDataVal = '';
                $lDataVal .= '<pre>';
                $lDataVal .= '<xmp class="Code prettyprint linenums">';
                $lDataVal .= $lData;
                $lDataVal .= '</xmp>';
                $lDataVal .= '</pre>';
                $lDataArr[$lFileArr[$i]] = $lDataVal;
            }
            $this->sitemapsXml = $lDataArr["sitemaps"];
            $this->sitemapXml = $lDataArr["sitemap"];
        }
        //===============================================
    }
?>            