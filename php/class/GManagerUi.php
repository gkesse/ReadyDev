<?php   
    class GManagerUi extends GObject {
        //===============================================
        public function __construct() {
            parent::__construct();
            $this->loadDom(__CLASS__);
        }
        //===============================================
        public function run() {
            $lId    = $this->m_dom->getItem("manager", "id");
            $lTitle = $this->m_dom->getItem("manager", "title");
            
            echo sprintf("<div class='MainBlock'>\n");
            echo sprintf("<div class='Content'>\n");
            echo sprintf("<h1 class='Title2' id='%s'>\n", $lId);
            echo sprintf("<a class='Link3' href='#'>%s</a>\n", $lTitle);
            echo sprintf("</h1>\n");
            echo sprintf("<div class='Body'>\n");
            
            $this->onHeader();            
            $this->onHome();
            $this->onCode();
            
            echo sprintf("</div>\n");
            echo sprintf("</div>\n");
            echo sprintf("</div>\n");
        }
        //===============================================
        public function onHeader() {
            echo sprintf("<div class='Row10'>\n");
            
            $lCount     = $this->m_dom->countItem("manager");
            $lModule    = $this->m_dom->getItemC("manager", "header/link", "module");
            $lMethod    = $this->m_dom->getItemC("manager", "header/link", "method");
            
            for($i = 0; $i < $lCount; $i++) {
                $lCategory = $this->m_dom->getItem3("manager", "category", $i);
                $lToolTip = $this->m_dom->getItem3("manager", "tooltip", $i);
                $lId = $this->m_dom->getItem3("manager", "id", $i);
                $lName = $this->m_dom->getItem3("manager", "name", $i);
                
                if($lCategory == "header") {
                    echo sprintf("<div class='Col'>\n");
                    echo sprintf("<button class='Button2 manager_tab' title=\"%s\"\n", $lToolTip);
                    echo sprintf("onclick='call_server(\"%s\", \"%s\", this, \"%s\");'>%s</button>\n", $lModule, $lMethod, $lId, $lName);
                    echo sprintf("</div>\n");
                }
            }
            
            echo sprintf("</div>\n");
        }
        //===============================================
        public function onHome() {
            $lId    = $this->m_dom->getItemC("manager", "home", "id");
            $lTitle = $this->m_dom->getItemC("manager", "home", "title");
            $lIntro = $this->m_dom->getItemC("manager", "home", "intro");
            
            echo sprintf("<div class='Row Left ManagerTabCtn' id='%s'>\n", $lId);
            echo sprintf("<h2 class='Title4'>%s</h2>\n", $lTitle);
            echo sprintf("<div class='Body6'>\n");
            echo sprintf("<div class='Content9'>%s</div>\n", $lIntro);
            echo sprintf("</div>\n");
            echo sprintf("</div>\n");            
        }
        //===============================================
        public function onCode() {
            $lCount = $this->m_dom->countItem("manager");
            $lId    = $this->m_dom->getItemC("manager", "code", "id");
            $lTitle = $this->m_dom->getItemC("manager", "code", "title");
            
            echo sprintf("<div class='Row Left ManagerTabCtn' id='%s'>\n", $lId);
            echo sprintf("<h2 class='Title4'>%s</h2>\n", $lTitle);
            
            echo sprintf("<div class='Body14'>\n");
            echo sprintf("<div class='Content9'>\n");
                   
            echo sprintf("<div class='Border Content14'>\n");
            
            for($i = 0; $i < $lCount; $i++) {
                $lCategory  = $this->m_dom->getItem3("manager", "category", $i);
                $lModel     = $this->m_dom->getItem3("manager", "model", $i);
                $lLabel     = $this->m_dom->getItem3("manager", "label", $i);
                $lId        = $this->m_dom->getItem3("manager", "id", $i);
                $lType      = $this->m_dom->getItem3("manager", "type", $i);
                $lName      = $this->m_dom->getItem3("manager", "name", $i);
                $lValue     = $this->m_dom->getItem3("manager", "value", $i);
                $lLowerOn   = ($this->m_dom->getItem3("manager", "lower_on", $i) == "1");
                
                $lClass = "Input2";
                if($lLowerOn) $lClass = "Input3";
                
                if($lCategory == "code/body") {
                    if($lModel == "label/edit") {
                        echo sprintf("<div class='Row12'>\n");
                        echo sprintf("<label class='Label3' for='%s'>%s</label>\n", $lName, $lLabel);
                        echo sprintf("<div class='Field3'><input id='%s' class='%s' type='%s' name='%s'/></div>\n", $lId, $lClass, $lType, $lName);
                        echo sprintf("</div>\n");
                    }
                    else if($lModel == "hidden") {
                        echo sprintf("<input id='%s' type='hidden' value='%s'/>\n", $lId, $lValue);                        
                    }
                }
            }
            
            echo sprintf("</div>\n");
            echo sprintf("<div class='Row34'>\n");
            
            for($i = 0; $i < $lCount; $i++) {
                $lCategory  = $this->m_dom->getItem3("manager", "category", $i);
                $lId        = $this->m_dom->getItem3("manager", "id", $i);
                $lModule    = $this->m_dom->getItem3("manager", "module", $i);
                $lCallback  = $this->m_dom->getItem3("manager", "callback", $i);
                $lPicto     = $this->m_dom->getItem3("manager", "picto", $i);
                $lText      = $this->m_dom->getItem3("manager", "text", $i);
                
                if($lCategory == "code/button") {
                    echo sprintf("<button type='button' id='%s' class='Button4' onclick='call_server(\"%s\", \"%s\");'><i class='fa fa-%s'></i> %s</button>\n"
                        , $lId, $lModule, $lCallback, $lPicto, $lText);
                }
            }
            
            echo sprintf("</div>\n");
            
            
            echo sprintf("</div>\n");
            echo sprintf("</div>\n");
            echo sprintf("</div>\n");
        }
        //===============================================
    }
?>            