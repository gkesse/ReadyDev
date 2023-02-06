<?php
class GEditorUi extends GObject {
    //===============================================
    public function __construct($_codeName = "editor") {
        parent::__construct($_codeName);
        $this->loadDom(__CLASS__);
    }
    //===============================================
    public function run() {
        $this->runEnv();
        $lId    = $this->m_dom->getItem("editor", "id");
        $lTitle = $this->m_dom->getItem("editor", "title");
        echo sprintf("<div class='MainBlock'>\n");
        echo sprintf("<div class='Content'>\n");
        echo sprintf("<h1 class='Title2' id='%s'>\n", $lId);
        echo sprintf("<a class='Link3' href='#'>%s</a>\n", $lTitle);
        echo sprintf("</h1>\n");
        echo sprintf("<div class='Body'>\n");
        
        $this->onHeader();
        $this->onHome();
        $this->onPage();
        $this->onEdition();
        
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function runEnv() {
        $lCount = $this->m_dom->countItem("editor");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory  = $this->m_dom->getItem3("editor", "category", $i);
            $lModel     = $this->m_dom->getItem3("editor", "model", $i);
            $lId        = $this->m_dom->getItem3("editor", "id", $i);
            
            if($lCategory == "env") {
                if($lModel == "data") {
                    echo sprintf("<div hidden='true' id='%s'></div>\n", $lId);
                }
            }
        }
    }
    //===============================================
    public function onHeader() {
        echo sprintf("<div class='Row10'>\n");
        
        $lCount = $this->m_dom->countItem("editor");
        $lModule = $this->m_dom->getItemC("editor", "header/link", "module");
        $lMethod = $this->m_dom->getItemC("editor", "header/link", "method");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory = $this->m_dom->getItem3("editor", "category", $i);
            $lToolTip = $this->m_dom->getItem3("editor", "tooltip", $i);
            $lId = $this->m_dom->getItem3("editor", "id", $i);
            $lName = $this->m_dom->getItem3("editor", "name", $i);
            
            if($lCategory == "header") {
                echo sprintf("<div class='Col'>\n");
                echo sprintf("<button class='Button2 EditorTab' title=\"%s\"\n", $lToolTip);
                echo sprintf("onclick='call_server(\"%s\", \"%s\", this, \"%s\");'>%s</button>\n", $lModule, $lMethod, $lId, $lName);
                echo sprintf("</div>\n");
            }
        }
        
        echo sprintf("</div>\n");
    }
    //===============================================
    public function onHome() {
        $lId = $this->m_dom->getItemC("editor", "home", "id");
        $lTitle = $this->m_dom->getItemC("editor", "home", "title");
        $lIntro = $this->m_dom->getItemC("editor", "home", "intro");
        
        echo sprintf("<div class='Row Left EditorTabCtn' id='%s'>\n", $lId);
        echo sprintf("<h2 class='Title4'>%s</h2>\n", $lTitle);
        echo sprintf("<div class='Body6'>\n");
        echo sprintf("<div class='Content9'>%s</div>\n", $lIntro);
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function onPage() {
        $lCount = $this->m_dom->countItem("editor");
        $lId    = $this->m_dom->getItemC("editor", "page", "id");
        $lTitle = $this->m_dom->getItemC("editor", "page", "title");
        
        echo sprintf("<div class='Row Left EditorTabCtn' id='%s'>\n", $lId);
        echo sprintf("<h2 class='Title4'>%s</h2>\n", $lTitle);
        
        echo sprintf("<div class='Body14'>\n");
        echo sprintf("<div class='Content9'>\n");
        
        echo sprintf("<div class='Border Content14'>\n");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory  = $this->m_dom->getItem3("editor", "category", $i);
            $lModel     = $this->m_dom->getItem3("editor", "model", $i);
            $lLabel     = $this->m_dom->getItem3("editor", "label", $i);
            $lId        = $this->m_dom->getItem3("editor", "id", $i);
            $lType      = $this->m_dom->getItem3("editor", "type", $i);
            $lValue     = $this->m_dom->getItem3("editor", "value", $i);
            $lModule    = $this->m_dom->getItem3("editor", "module", $i);
            $lMethod    = $this->m_dom->getItem3("editor", "method", $i);
            $lLowerOn   = ($this->m_dom->getItem3("editor", "lower_on", $i) == "1");
            
            $lClass = "Input2";
            if($lLowerOn) $lClass = "Input3";
            
            if($lCategory == "page/body") {
                if($lModel == "label/edit") {
                    echo sprintf("<div class='Row12'>\n");
                    echo sprintf("<label class='Label3' for='%s'>%s</label>\n", $lId, $lLabel);
                    echo sprintf("<div class='Field3'><input id='%s' class='%s' type='%s' name='%s'/></div>\n", $lId, $lClass, $lType, $lId);
                    echo sprintf("</div>\n");
                }
                else if($lModel == "combobox") {
                    echo sprintf("<div class='Row12'>\n");
                    echo sprintf("<label class='Label3' for='%s'>%s</label>\n", $lId, $lLabel);
                    echo sprintf("<div class='Field3'>\n");
                    echo sprintf("<div class='ComboBox'>\n");
                    echo sprintf("<select id='%s' onchange='call_server(\"combobox\", \"select_data\", this);' data-module='%s' data-method='%s'>\n", $lId, $lModule, $lMethod);
                    echo sprintf("<option value='0'>Sélectionner un type...</option>\n");
                    echo sprintf("<option value='1'>Fichier</option>\n");
                    echo sprintf("<option value='2'>Répertoire</option>\n");
                    echo sprintf("</select>\n");
                    echo sprintf("</div>\n");
                    echo sprintf("</div>\n");
                    echo sprintf("</div>\n");
                }
                else if($lModel == "addressbar") {
                    echo sprintf("<div class='Row36' id='%s'>\n", $lId);
                    echo sprintf("<i class='Link10 fa fa-folder %s' onclick='call_server(\"%s\", \"%s\", this);'></i>\n", $lId, $lModule, $lMethod);
                    echo sprintf("<span hidden='true'></span>\n");
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
            $lCategory  = $this->m_dom->getItem3("editor", "category", $i);
            $lId        = $this->m_dom->getItem3("editor", "id", $i);
            $lModule    = $this->m_dom->getItem3("editor", "module", $i);
            $lMethod    = $this->m_dom->getItem3("editor", "method", $i);
            $lPicto     = $this->m_dom->getItem3("editor", "picto", $i);
            $lText      = $this->m_dom->getItem3("editor", "text", $i);
            
            if($lCategory == "page/button") {
                echo sprintf("<button type='button' id='%s' class='Button4' onclick='call_server(\"%s\", \"%s\");'><i class='fa fa-%s'></i> %s</button>\n"
                    , $lId, $lModule, $lMethod, $lPicto, $lText);
            }
        }
        
        echo sprintf("</div>\n");
        
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function onEdition() {
        $lId    = $this->m_dom->getItemC("editor", "edition", "id");
        $lTitle = $this->m_dom->getItemC("editor", "edition", "title");
        echo sprintf("<div class='Row Left EditorTabCtn' id='%s'>\n", $lId); // start_row_1
        echo sprintf("<h2 class='Title4'>%s</h2>\n", $lTitle);
        
        echo sprintf("<div class='Body14'>\n");     // start_body_1
        echo sprintf("<div class='Content9'>\n");   // start_content_1
        
        $lId = $this->m_dom->getItem("edition_command", "id");
        $this->m_dom->getCode("edition_command");
        $lCountI = $this->m_dom->countXNode("map/data");
        $this->m_dom->getXNode("map/data");
            
        echo sprintf("<div class='Row9'>\n");       // start_dropdown
        echo sprintf("<div class='DropDown'>\n");   // start_dropdown
        echo sprintf("<button class='Button9 DropDownButton'>Menu</button>\n");
        echo sprintf("<div class='DropDownContent'>\n"); // start_dropdown
        for($i = 0; $i < $lCountI; $i++) {
            $lCategory  = $this->m_dom->getXValue("category");
            $lModule    = $this->m_dom->getXValue("module");
            $lMethod    = $this->m_dom->getXValue("method");
            $lKey       = $this->m_dom->getXValue("key");
            $lLabel     = $this->m_dom->getXValue("label");
            $lMapOk     = $this->m_dom->hasNode("map");
            
            if($lMapOk) {
                $this->m_dom->pushNode();
                $lCountJ = $this->m_dom->countXNode("map/data");
                $this->m_dom->getXNode("map/data");
                echo sprintf("<div class='DropDownSub'>%s <i class='DropDownCaret fa fa-caret-down'></i></div>\n", $lLabel);
                echo sprintf("<div class='DropDownContainer'>\n");
                for($j = 0; $j < $lCountJ; $j++) {
                    $lCategory  = $this->m_dom->getXValue("category");
                    $lModule    = $this->m_dom->getXValue("module");
                    $lMethod    = $this->m_dom->getXValue("method");
                    $lKey       = $this->m_dom->getXValue("key");
                    $lLabel     = $this->m_dom->getXValue("label");
                    $lMapOk     = $this->m_dom->hasNode("map");
                    
                    if($lMapOk) {
                        $this->m_dom->pushNode();
                        $lCountK = $this->m_dom->countXNode("map/data");
                        $this->m_dom->getXNode("map/data");
                        echo sprintf("<div class='DropDownSub'>%s <i class='DropDownCaret fa fa-caret-down'></i></div>\n", $lLabel);
                        echo sprintf("<div class='DropDownContainer'>\n");
                        for($k = 0; $k < $lCountK; $k++) {
                            $lCategory  = $this->m_dom->getXValue("category");
                            $lModule    = $this->m_dom->getXValue("module");
                            $lMethod    = $this->m_dom->getXValue("method");
                            $lKey       = $this->m_dom->getXValue("key");
                            $lLabel     = $this->m_dom->getXValue("label");
                            $lMapOk     = $this->m_dom->hasNode("map");
                            
                            if($lCategory == "text") {
                                echo sprintf("<div class='DropDownLine' onclick='call_server(\"%s\", \"%s\", this, \"%s\");'>%s</div>\n", $lModule, $lMethod, $lKey, $lLabel);
                            }
                            
                            $this->m_dom->nextSiblingElement();
                        }
                        echo sprintf("</div>\n");
                        $this->m_dom->popNode();
                    }
                    else if($lCategory == "text") {
                        echo sprintf("<div class='DropDownLine' onclick='call_server(\"%s\", \"%s\", this, \"%s\");'>%s</div>\n", $lModule, $lMethod, $lKey, $lLabel);
                    }
                    
                    $this->m_dom->nextSiblingElement();
                }
                echo sprintf("</div>\n");
                $this->m_dom->popNode();
            }
            else if($lCategory == "text") {
                echo sprintf("<div class='DropDownLine' onclick='call_server(\"%s\", \"%s\", this, \"%s\");'>%s</div>\n", $lModule, $lMethod, $lKey, $lLabel);
            }
            
            $this->m_dom->nextSiblingElement();
        }
        
        echo sprintf("</div>\n"); // end_dropdown        
        echo sprintf("</div>\n"); // end_dropdown
        echo sprintf("</div>\n"); // end_dropdown
        
        echo sprintf("<div id='%s' class='Border Content14 GEndEditor' contentEditable='true'></div>\n", $lId);
        
        echo sprintf("</div>\n"); // end_content_1
        echo sprintf("</div>\n"); // end_body_1
        echo sprintf("</div>\n"); // end_row_1        
    }
    //===============================================
}
?>            