<?php   
    class GSitemapUi extends GObjectUi {
        //===============================================
        public function __construct($_codeName = "sitemap") {
            parent::__construct($_codeName);
            $this->loadDom(__CLASS__);
        }
        //===============================================
        public function run() {
            $lId = $this->m_dom->getItem($this->m_codeName, "id");
            $lTitle = $this->m_dom->getItem($this->m_codeName, "title");
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
            
            $lCount = $this->m_dom->countItem($this->m_codeName);
            $lModule = $this->m_dom->getItemC($this->m_codeName, "header/link", "module");
            $lMethod = $this->m_dom->getItemC($this->m_codeName, "header/link", "method");
            
            for($i = 0; $i < $lCount; $i++) {
                $lCategory = $this->m_dom->getItem3($this->m_codeName, "category", $i);
                $lToolTip = $this->m_dom->getItem3($this->m_codeName, "tooltip", $i);
                $lId = $this->m_dom->getItem3($this->m_codeName, "id", $i);
                $lName = $this->m_dom->getItem3($this->m_codeName, "name", $i);
                
                if($lCategory == "header") {
                    echo sprintf("<div class='Col'>\n");
                    echo sprintf("<button class='Button2 sitemap_tab' title=\"%s\"\n", $lToolTip);
                    echo sprintf("onclick='call_server(\"%s\", \"%s\", this, \"%s\");'>%s</button>\n", $lModule, $lMethod, $lId, $lName);
                    echo sprintf("</div>\n");
                }
            }
            
            echo sprintf("</div>\n");
        }
        //===============================================
        public function onHome() {
            $lId = $this->m_dom->getItemC($this->m_codeName, "home", "id");
            $lTitle = $this->m_dom->getItemC($this->m_codeName, "home", "title");
            $lIntro = $this->m_dom->getItemC($this->m_codeName, "home", "intro");
            
            echo sprintf("<div class='Row Left sitemap_tab_ctn' id='%s'>\n", $lId);
            echo sprintf("<h2 class='Title4'>%s</h2>\n", $lTitle);
            echo sprintf("<div class='Body6'>\n");
            echo sprintf("<div class='Content9'>%s</div>\n", $lIntro);
            echo sprintf("</div>\n");
            echo sprintf("</div>\n");            
        }
        //===============================================
        public function onEnum() {
            $lId = $this->m_dom->getItemC($this->m_codeName, "enum", "id");
            $lTitle = $this->m_dom->getItemC($this->m_codeName, "enum", "title");
            $lCount = $this->m_dom->countItem($this->m_codeName);
            
            echo sprintf("<div class='Row Left sitemap_tab_ctn' id='%s'\n", $lId);
            echo sprintf("onkeypress='saveFileKey(event);'>\n");
            echo sprintf("<h2 class='Title4'>%s</h2>\n", $lTitle);
            echo sprintf("<div class='Body13 Center'>\n");
            
            for($i = 0; $i < $lCount; $i++) {
                $lCategory = $this->m_dom->getItem3($this->m_codeName, "category", $i);
                $lName = $this->m_dom->getItem3($this->m_codeName, "name", $i);
                $lPicto = $this->m_dom->getItem3($this->m_codeName, "picto", $i);
                $lToolTip = $this->m_dom->getItem3($this->m_codeName, "tooltip", $i);
                $lModule = $this->m_dom->getItem3($this->m_codeName, "module", $i);
                $lMethod = $this->m_dom->getItem3($this->m_codeName, "method", $i);
                
                if($lCategory == "enum_action") {
                    echo sprintf("<button class='Button7' type='button' title=\"%s\"\n", $lToolTip);
                    echo sprintf("onclick='call_server(\"%s\", \"%s\");'><i class='fa fa-%s'></i> %s</button>\n", $lModule, $lMethod, $lPicto, $lName);
                }
            }
            
            echo sprintf("</div>\n");
            echo sprintf("<div class='Body14'>\n");
            echo sprintf("<div class='Content9'>\n");
            
            for($i = 0; $i < $lCount; $i++) {
                $lCategory = $this->m_dom->getItem3($this->m_codeName, "category", $i);
                $lLabel = $this->m_dom->getItem3($this->m_codeName, "label", $i);
                $lId = $this->m_dom->getItem3($this->m_codeName, "id", $i);
                
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
            $lId = $this->m_dom->getItemC($this->m_codeName, "list", "id");
            $lUrl = $this->m_dom->getItemC($this->m_codeName, "list", "url");
            $lTitle = $this->m_dom->getItemC($this->m_codeName, "list", "title");
            $lCount = $this->m_dom->countItem($this->m_codeName);
            
            echo sprintf("<div class='Row Left sitemap_tab_ctn' id='%s'>\n", $lId);
            echo sprintf("<h2 class='Title4'>%s</h2>\n", $lTitle);
            echo sprintf("<div class='Body13 Center'>\n");
            
            for($i = 0; $i < $lCount; $i++) {
                $lCategory = $this->m_dom->getItem3($this->m_codeName, "category", $i);
                $lName = $this->m_dom->getItem3($this->m_codeName, "name", $i);
                $lPicto = $this->m_dom->getItem3($this->m_codeName, "picto", $i);
                $lToolTip = $this->m_dom->getItem3($this->m_codeName, "tooltip", $i);
                $lModule = $this->m_dom->getItem3($this->m_codeName, "module", $i);
                $lMethod = $this->m_dom->getItem3($this->m_codeName, "method", $i);
                
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
            $lId = $this->m_dom->getItemC($this->m_codeName, "generate", "id");
            $lUrl = $this->m_dom->getItemC($this->m_codeName, "generate", "url");
            $lTitle = $this->m_dom->getItemC($this->m_codeName, "generate", "title");
            $lCount = $this->m_dom->countItem($this->m_codeName);
            
            echo sprintf("<div class='Row Left sitemap_tab_ctn' id='%s'>\n", $lId);
            echo sprintf("<h2 class='Title4'>%s</h2>\n", $lTitle);
            echo sprintf("<div class='Body13 Center'>\n");
            
            for($i = 0; $i < $lCount; $i++) {
                $lCategory = $this->m_dom->getItem3($this->m_codeName, "category", $i);
                $lName = $this->m_dom->getItem3($this->m_codeName, "name", $i);
                $lPicto = $this->m_dom->getItem3($this->m_codeName, "picto", $i);
                $lToolTip = $this->m_dom->getItem3($this->m_codeName, "tooltip", $i);
                $lModule = $this->m_dom->getItem3($this->m_codeName, "module", $i);
                $lMethod = $this->m_dom->getItem3($this->m_codeName, "method", $i);
                
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
        public function onVisualize() {
            $lId    = $this->m_dom->getItemC($this->m_codeName, "visualize", "id");
            $lTitle = $this->m_dom->getItemC($this->m_codeName, "visualize", "title");
            $lCount = $this->m_dom->countItem($this->m_codeName);
            
            echo sprintf("<div class='Row Left sitemap_tab_ctn' id='%s'>\n", $lId);
            echo sprintf("<h2 class='Title4'>%s</h2>\n", $lTitle);
            
            echo sprintf("<div class='Body7 Center'>\n");            
            for($i = 0; $i < $lCount; $i++) {
                $lCategory  = $this->m_dom->getItem3($this->m_codeName, "category", $i);
                $lName      = $this->m_dom->getItem3($this->m_codeName, "name", $i);
                $lPicto     = $this->m_dom->getItem3($this->m_codeName, "picto", $i);
                $lToolTip   = $this->m_dom->getItem3($this->m_codeName, "tooltip", $i);
                $lModule    = $this->m_dom->getItem3($this->m_codeName, "module", $i);
                $lMethod    = $this->m_dom->getItem3($this->m_codeName, "method", $i);
                
                if($lCategory == "visualize_action") {
                    echo sprintf("<button class='Button7' type='button' title=\"%s\"\n", $lToolTip);
                    echo sprintf("onclick='call_server(\"%s\", \"%s\");'><i class='fa fa-%s'></i> %s</button>\n", $lModule, $lMethod, $lPicto, $lName);
                }
            }           
            echo sprintf("</div>\n");
            
            echo sprintf("<div class='Body0 Center'>\n");
            for($i = 0; $i < $lCount; $i++) {
                $lCategory  = $this->m_dom->getItem3($this->m_codeName, "category", $i);
                $lName      = $this->m_dom->getItem3($this->m_codeName, "name", $i);
                $lPicto     = $this->m_dom->getItem3($this->m_codeName, "picto", $i);
                $lToolTip   = $this->m_dom->getItem3($this->m_codeName, "tooltip", $i);
                $lModule    = $this->m_dom->getItem3($this->m_codeName, "module", $i);
                $lMethod    = $this->m_dom->getItem3($this->m_codeName, "method", $i);
                $lId        = $this->m_dom->getItem3($this->m_codeName, "id", $i);
                
                if($lCategory == "visualize_sitemap") {
                    echo sprintf("<button class='Button8 sitemap_file_tab' type='button' title=\"%s\"\n", $lToolTip);
                    echo sprintf("onclick='call_server(\"%s\", \"%s\", this, \"%s\");'><i class='fa fa-%s'></i> %s</button>\n", $lModule, $lMethod, $lId, $lPicto, $lName);
                }
            }
            echo sprintf("</div>\n");            
            
            echo sprintf("<div class='Body14'>\n");
            for($i = 0; $i < $lCount; $i++) {
                $lCategory  = $this->m_dom->getItem3($this->m_codeName, "category", $i);
                $lId        = $this->m_dom->getItem3($this->m_codeName, "id", $i);
                $lTitle     = $this->m_dom->getItem3($this->m_codeName, "title", $i);
                $lContent   = $this->m_dom->getItem3($this->m_codeName, "content", $i);
                
                if($lCategory == "visualize_content") {
                    echo sprintf("<div class='sitemap_file_tabCtn' id='%s'>\n", $lId);
                    echo sprintf("<h3 class='Title6'>%s</h3>\n", $lTitle);
                    echo sprintf("<div class='Content9' id='%s'></div>\n", $lContent);
                    echo sprintf("</div>\n");
                }
            }
            echo sprintf("</div>\n");
            
            echo sprintf("</div>\n");
        }
        //===============================================
    }
?>            