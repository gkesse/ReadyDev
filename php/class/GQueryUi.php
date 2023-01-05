<?php   
    class GQueryUi extends GObject {
        //===============================================
        public function __construct() {
            parent::__construct();
            $this->loadDom(__CLASS__);
        }
        //===============================================
        public function run() {
            $lId    = $this->m_dom->getItem("query", "id");
            $lTitle = $this->m_dom->getItem("query", "title");
            
            echo sprintf("<div class='MainBlock'>\n");
            echo sprintf("<div class='Content'>\n");
            echo sprintf("<h1 class='Title2' id='%s'>\n", $lId);
            echo sprintf("<a class='Link3' href='#'>%s</a>\n", $lTitle);
            echo sprintf("</h1>\n");
            echo sprintf("<div class='Body'>\n");
            
            $this->onHeader();            
            $this->onHome();
            $this->onEmission();
            $this->onReception();
            
            echo sprintf("</div>\n");
            echo sprintf("</div>\n");
            echo sprintf("</div>\n");
        }
        //===============================================
        public function onHeader() {
            echo sprintf("<div class='Row10'>\n");
            
            $lCount     = $this->m_dom->countItem("query");
            $lModule    = $this->m_dom->getItemC("query", "header/link", "module");
            $lMethod    = $this->m_dom->getItemC("query", "header/link", "method");
            
            for($i = 0; $i < $lCount; $i++) {
                $lCategory = $this->m_dom->getItem3("query", "category", $i);
                $lToolTip = $this->m_dom->getItem3("query", "tooltip", $i);
                $lId = $this->m_dom->getItem3("query", "id", $i);
                $lName = $this->m_dom->getItem3("query", "name", $i);
                
                if($lCategory == "header") {
                    echo sprintf("<div class='Col'>\n");
                    echo sprintf("<button class='Button2 query_tab' title=\"%s\"\n", $lToolTip);
                    echo sprintf("onclick='call_server(\"%s\", \"%s\", this, \"%s\");'>%s</button>\n", $lModule, $lMethod, $lId, $lName);
                    echo sprintf("</div>\n");
                }
            }
            
            echo sprintf("</div>\n");
        }
        //===============================================
        public function onHome() {
            $lId    = $this->m_dom->getItemC("query", "home", "id");
            $lTitle = $this->m_dom->getItemC("query", "home", "title");
            $lIntro = $this->m_dom->getItemC("query", "home", "intro");
            
            echo sprintf("<div class='Row Left query_tab_ctn' id='%s'>\n", $lId);
            echo sprintf("<h2 class='Title4'>%s</h2>\n", $lTitle);
            echo sprintf("<div class='Body6'>\n");
            echo sprintf("<div class='Content9'>%s</div>\n", $lIntro);
            echo sprintf("</div>\n");
            echo sprintf("</div>\n");            
        }
        //===============================================
        public function onEmission() {
            $lId    = $this->m_dom->getItemC("query", "emission", "id");
            $lTitle = $this->m_dom->getItemC("query", "emission", "title");
            $lCount = $this->m_dom->countItem("query");
            
            echo sprintf("<div class='Row Left query_tab_ctn' id='%s'>\n", $lId);
            echo sprintf("<h2 class='Title4'>%s</h2>\n", $lTitle);
            
            echo sprintf("<div class='Body14'>\n");
            echo sprintf("<div class='Content9'>\n");
            
            for($i = 0; $i < $lCount; $i++) {
                $lCategory      = $this->m_dom->getItem3("query", "category", $i);
                $lId            = $this->m_dom->getItem3("query", "id", $i);
                $lName          = $this->m_dom->getItem3("query", "name", $i);
                $lRows          = $this->m_dom->getItem3("query", "rows", $i);
                $lCols          = $this->m_dom->getItem3("query", "cols", $i);
                $lPlaceholder   = $this->m_dom->getItem3("query", "placeholder", $i);
                
                if($lCategory == "emission_text") {
                    echo sprintf("<textarea class='Border Code3' id='%s' name='%s' rows='%s' cols='%s' placeholder='%s'></textarea>\n"
                        , $lId, $lName, $lRows, $lCols, $lPlaceholder);
                }
            }
            
            echo sprintf("<div class='Row33'>\n");
            for($i = 0; $i < $lCount; $i++) {
                $lCategory  = $this->m_dom->getItem3("query", "category", $i);
                $lId        = $this->m_dom->getItem3("query", "id", $i);
                $lText      = $this->m_dom->getItem3("query", "text", $i);
                $lCheckedOn = ($this->m_dom->getItem3("query", "checked_on", $i) == "1");
                $lTooltip   = $this->m_dom->getItem3("query", "tooltip", $i);
                
                if($lCategory == "emission_check") {
                    echo sprintf("<input class='Col' type='checkbox' id='%s' name='%s' value='%s' title='%s' checked='%s'><label class='Col' for='%s'> %s</label>"
                        , $lId, $lId, $lId, $lTooltip, $lCheckedOn, $lId, $lText);
                }
            }
            echo sprintf("</div>\n");
            
            for($i = 0; $i < $lCount; $i++) {
                $lCategory  = $this->m_dom->getItem3("query", "category", $i);
                $lName      = $this->m_dom->getItem3("query", "name", $i);
                $lModule    = $this->m_dom->getItem3("query", "module", $i);
                $lMethod    = $this->m_dom->getItem3("query", "method", $i);
                $lTooltip   = $this->m_dom->getItem3("query", "tooltip", $i);
                
                if($lCategory == "emission_button") {
                    echo sprintf("<div class='Col'>\n");
                    echo sprintf("<button class='Button2' onclick='call_server(\"%s\", \"%s\");' title='%s'>%s</button>"
                        , $lModule, $lMethod, $lTooltip, $lName);
                    echo sprintf("</div>\n");
                }
            }
            
            echo sprintf("</div>\n");
            echo sprintf("</div>\n");
            echo sprintf("</div>\n");
        }
        //===============================================
        public function onReception() {
            $lId = $this->m_dom->getItemC("query", "reception", "id");
            $lTitle = $this->m_dom->getItemC("query", "reception", "title");
            $lCount = $this->m_dom->countItem("query");
            
            echo sprintf("<div class='Row Left query_tab_ctn' id='%s'>\n", $lId);
            echo sprintf("<h2 class='Title4'>%s</h2>\n", $lTitle);
            
            echo sprintf("<div class='Body14'>\n");
            echo sprintf("<div class='Content9'>\n");
            
            for($i = 0; $i < $lCount; $i++) {
                $lCategory = $this->m_dom->getItem3("query", "category", $i);
                $lId        = $this->m_dom->getItem3("query", "id", $i);
                $lName      = $this->m_dom->getItem3("query", "name", $i);
                $lRows      = $this->m_dom->getItem3("query", "rows", $i);
                $lCols      = $this->m_dom->getItem3("query", "cols", $i);
                $lReadOnly = $this->m_dom->getItem3("query", "readonly", $i);
                
                if($lCategory == "reception_text") {
                    echo sprintf("<textarea class='Border Code3' id='%s' name='%s' rows='%s' cols='%s' %s></textarea>\n"
                        , $lId, $lName, $lRows, $lCols, $lReadOnly);
                }
            }
            for($i = 0; $i < $lCount; $i++) {
                $lCategory  = $this->m_dom->getItem3("query", "category", $i);
                $lName      = $this->m_dom->getItem3("query", "name", $i);
                $lModule    = $this->m_dom->getItem3("query", "module", $i);
                $lMethod    = $this->m_dom->getItem3("query", "method", $i);
                $lTooltip   = $this->m_dom->getItem3("query", "tooltip", $i);
                
                if($lCategory == "reception_button") {
                    echo sprintf("<div class='Col'>\n");
                    echo sprintf("<button class='Button2' onclick='call_server(\"%s\", \"%s\");' title='%s'>%s</button>"
                        , $lModule, $lMethod, $lTooltip, $lName);
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