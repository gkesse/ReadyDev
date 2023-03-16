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
        $this->onSite();
        $this->onPage();
        $this->onEdition();
        $this->onCode();
        
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function runEnv() {
        $lCount = $this->m_dom->countItem("env");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory  = $this->m_dom->getItem3("env", "category", $i);
            $lId        = $this->m_dom->getItem3("env", "id", $i);
            $lValue     = $this->m_dom->getItem3("env", "value", $i);
            
            if($lCategory == "normal") {
                echo sprintf("<div hidden='true' id='%s'>%s</div>\n", $lId, $lValue);
            }
        }
    }
    //===============================================
    public function onHeader() {
        echo sprintf("<div class='Row10'>\n");
        
        $lCount = $this->m_dom->countItem("header");
        $lModule = $this->m_dom->getItem("header", "module");
        $lMethod = $this->m_dom->getItem("header", "method");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory  = $this->m_dom->getItem3("header", "category", $i);
            $lToolTip   = $this->m_dom->getItem3("header", "tooltip", $i);
            $lId        = $this->m_dom->getItem3("header", "id", $i);
            $lName      = $this->m_dom->getItem3("header", "name", $i);
            
            if($lCategory == "text") {
                echo sprintf("<div class='Col'>\n");
                echo sprintf("<button class='Button2 EditorTab' title=\"%s\"\n", $lToolTip);
                echo sprintf("onclick='call_server(\"%s\", \"%s\", this, \"%s\");'>%s</button>\n", $lModule, $lMethod, $lId, $lName);
                echo sprintf("</div>\n");
            }
            else if($lCategory == "icon") {
                echo sprintf("<div class='Col'>\n");
                echo sprintf("<button class='Button2 EditorTab' title=\"%s\"\n", $lToolTip);
                echo sprintf("onclick='call_server(\"%s\", \"%s\", this, \"%s\");'><i class='fa fa-%s'></i></button>\n", $lModule, $lMethod, $lId, $lName);
                echo sprintf("</div>\n");
            }
        }
        
        echo sprintf("</div>\n");
    }
    //===============================================
    public function onHome() {
        $lId = $this->m_dom->getItem("home", "id");
        $lTitle = $this->m_dom->getItem("home", "title");
        $lIntro = $this->m_dom->getItem("home", "intro");
        
        echo sprintf("<div class='Row Left EditorTabCtn' id='%s'>\n", $lId);
        echo sprintf("<h2 class='Title4'>%s</h2>\n", $lTitle);
        echo sprintf("<div class='Body6'>\n");
        echo sprintf("<div class='Content9'>%s</div>\n", $lIntro);
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function onSite() {
        $lCount = $this->m_dom->countItem("site");
        $lId    = $this->m_dom->getItem("site", "id");
        $lTitle = $this->m_dom->getItem("site", "title");
        
        echo sprintf("<div class='Row Left EditorTabCtn' id='%s'>\n", $lId);
        echo sprintf("<h2 class='Title4'>%s</h2>\n", $lTitle);
        echo sprintf("<div class='Body14'>\n");
        
        echo sprintf("<div class='Content9'>\n");
        echo sprintf("<div class='Border Content14'>\n");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory  = $this->m_dom->getItem3("site", "category", $i);
            $lModel     = $this->m_dom->getItem3("site", "model", $i);
            $lLabel     = $this->m_dom->getItem3("site", "label", $i);
            $lId        = $this->m_dom->getItem3("site", "id", $i);
            $lValue     = $this->m_dom->getItem3("site", "value", $i);
            $lModule    = $this->m_dom->getItem3("site", "module", $i);
            $lMethod    = $this->m_dom->getItem3("site", "method", $i);
                        
            if($lCategory == "body") {
                if($lModel == "label_edit") {
                    echo sprintf("<div class='Row12'>\n");
                    echo sprintf("<label class='Label3' for='%s'>%s</label>\n", $lId, $lLabel);
                    echo sprintf("<div class='Field3'><input id='%s' class='Input2' type='text' name='%s'/></div>\n", $lId, $lId);
                    echo sprintf("</div>\n");
                }
                else if($lModel == "label_edit_lower") {
                    echo sprintf("<div class='Row12'>\n");
                    echo sprintf("<label class='Label3' for='%s'>%s</label>\n", $lId, $lLabel);
                    echo sprintf("<div class='Field3'><input id='%s' class='Input3' type='text' name='%s'/></div>\n", $lId, $lId);
                    echo sprintf("</div>\n");
                }
                else if($lModel == "hidden") {
                    echo sprintf("<input id='%s' type='hidden' value='%s'/>\n", $lId, $lValue);
                }
                else if($lModel == "hidden_div") {
                    echo sprintf("<div id='%s' hidden></div>\n", $lId);
                }
            }
        }
        
        echo sprintf("</div>\n");
        echo sprintf("<div class='Row34'>\n");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory  = $this->m_dom->getItem3("site", "category", $i);
            $lId        = $this->m_dom->getItem3("site", "id", $i);
            $lModule    = $this->m_dom->getItem3("site", "module", $i);
            $lMethod    = $this->m_dom->getItem3("site", "method", $i);
            $lPicto     = $this->m_dom->getItem3("site", "picto", $i);
            $lText      = $this->m_dom->getItem3("site", "text", $i);
            
            if($lCategory == "button") {
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
    public function onPage() {
        $lCount = $this->m_dom->countItem("page");
        $lId    = $this->m_dom->getItem("page", "id");
        $lTitle = $this->m_dom->getItem("page", "title");
        
        echo sprintf("<div class='Row Left EditorTabCtn' id='%s'>\n", $lId);
        echo sprintf("<h2 class='Title4'>%s</h2>\n", $lTitle);
        
        echo sprintf("<div class='Body14'>\n");
        echo sprintf("<div class='Content9'>\n");
        
        echo sprintf("<div class='Border Content14'>\n");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory  = $this->m_dom->getItem3("page", "category", $i);
            $lModel     = $this->m_dom->getItem3("page", "model", $i);
            $lLabel     = $this->m_dom->getItem3("page", "label", $i);
            $lId        = $this->m_dom->getItem3("page", "id", $i);
            $lValue     = $this->m_dom->getItem3("page", "value", $i);
            $lModule    = $this->m_dom->getItem3("page", "module", $i);
            $lMethod    = $this->m_dom->getItem3("page", "method", $i);
            $lDefault   = $this->m_dom->getItem3("page", "default", $i);
                        
            if($lCategory == "body") {
                if($lModel == "label_edit") {
                    echo sprintf("<div class='Row12'>\n");
                    echo sprintf("<label class='Label3' for='%s'>%s</label>\n", $lId, $lLabel);
                    echo sprintf("<div class='Field3'><input id='%s' class='Input2' type='text' name='%s'/></div>\n", $lId, $lId);
                    echo sprintf("</div>\n");
                }
                else if($lModel == "label_edit_lower") {
                    echo sprintf("<div class='Row12'>\n");
                    echo sprintf("<label class='Label3' for='%s'>%s</label>\n", $lId, $lLabel);
                    echo sprintf("<div class='Field3'><input id='%s' class='Input3' type='text' name='%s'/></div>\n", $lId, $lId);
                    echo sprintf("</div>\n");
                }
                else if($lModel == "label_combobox") {
                    echo sprintf("<div class='Row12'>\n");
                    echo sprintf("<label class='Label3' for='%s'>%s</label>\n", $lId, $lLabel);
                    echo sprintf("<div class='Field3'>\n");
                    echo sprintf("<div class='ComboBox'>\n");
                    echo sprintf("<select id='%s' class='ComboBoxSelect' onchange='call_server(\"combobox\", \"select_data\", this);' data-module='%s' data-method='%s'>\n", $lId, $lModule, $lMethod);
                    
                    $lCountJ = $this->m_dom->countNItem3("page", "map/data", $i);
                    $this->m_dom->getNItem3("page", "map/data", $i);
                    
                    for($j = 0; $j < $lCountJ; $j++) {
                        $lKey       = $this->m_dom->getXValue("key");
                        $lValue     = $this->m_dom->getXValue("value");
                        echo sprintf("<option value='%s'>%s</option>\n", $lKey, $lValue);
                        $this->m_dom->nextSiblingElement();
                    }
                    
                    echo sprintf("</select>\n");
                    echo sprintf("</div>\n");
                    echo sprintf("</div>\n");
                    echo sprintf("</div>\n");
                }
                else if($lModel == "label_radiobutton") {
                    echo sprintf("<div class='Row12'>\n");
                    echo sprintf("<label class='Label3' for='%s'>%s</label>\n", $lId, $lLabel);
                    echo sprintf("<div class='Field3' id='%s' data-value='%s'>\n", $lId, $lDefault);
                    
                    $lCountJ = $this->m_dom->countNItem3("page", "map/data", $i);
                    $this->m_dom->getNItem3("page", "map/data", $i);
                    $lName = $lId;
                    
                    for($j = 0; $j < $lCountJ; $j++) {
                        $lId        = $this->m_dom->getXValue("id");
                        $lValue     = $this->m_dom->getXValue("value");
                        $lLabel     = $this->m_dom->getXValue("label");
                        
                        $lChecked = ($lValue == $lDefault ? "checked" : "");
                        
                        echo sprintf("<div class='RadioButton'>\n");
                        echo sprintf("<input class='RadioButtonInput' type='radio' name='%s' id='%s' value='%s' %s/>\n", $lName, $lId, $lValue, $lChecked);
                        echo sprintf("<label class='RadioButtonLabel' for='%s'>%s</label>", $lId, $lLabel);
                        echo sprintf("<div class='RadioButtonCheck'></div>");
                        echo sprintf("</div>\n");
                        $this->m_dom->nextSiblingElement();
                    }
                    
                    echo sprintf("</div>\n");
                    echo sprintf("</div>\n");
                }
                else if($lModel == "addressbar") {
                    echo sprintf("<div class='Row36' id='%s'></div>\n", $lId);
                }
                else if($lModel == "hidden") {
                    echo sprintf("<input id='%s' value='%s' hidden/>\n", $lId, $lValue);
                }
                else if($lModel == "hidden_div") {
                    echo sprintf("<div id='%s' hidden></div>\n", $lId);
                }
            }
        }
        
        echo sprintf("</div>\n");
        echo sprintf("<div class='Row34'>\n");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory  = $this->m_dom->getItem3("page", "category", $i);
            $lId        = $this->m_dom->getItem3("page", "id", $i);
            $lModule    = $this->m_dom->getItem3("page", "module", $i);
            $lMethod    = $this->m_dom->getItem3("page", "method", $i);
            $lPicto     = $this->m_dom->getItem3("page", "picto", $i);
            $lText      = $this->m_dom->getItem3("page", "text", $i);
            
            if($lCategory == "button") {
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
        $lId    = $this->m_dom->getItem("edition", "id");
        $lTitle = $this->m_dom->getItem("edition", "title");
        
        echo sprintf("<div class='Row Left EditorTabCtn' id='%s'>\n", $lId); // start_row_1
        echo sprintf("<h2 class='Title4'>%s</h2>\n", $lTitle);
        
        echo sprintf("<div class='Body14'>\n");     // start_body_1
        echo sprintf("<div class='Content9'>\n");   // start_content_1
        
        $lId = $this->m_dom->getItem("edition_menu", "id");
        $this->m_dom->getCode("edition_menu");
        $lCountI = $this->m_dom->countXNode("map/data");
        $this->m_dom->getXNode("map/data");
        
        //===============================================
        // menu
        //===============================================
        
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
        
        //===============================================
        // body
        //===============================================
        
        echo sprintf("<div>\n");
        
        $lCount = $this->m_dom->countItem("edition");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory          = $this->m_dom->getItem3("edition", "category", $i);
            $lModel             = $this->m_dom->getItem3("edition", "model", $i);
            $lId                = $this->m_dom->getItem3("edition", "id", $i);
            
            if($lCategory == "body") {
                if($lModel == "contenteditable") {
                    echo sprintf("<div class='GEndEditor'>\n");
                    echo sprintf("<div id='%s' class='Border Content14 GEndEditor' contentEditable='true'
                    onkeydown='call_server(\"page\", \"key_down_edition\", event)'
                    onpaste='call_server(\"page\", \"paste_text_edition\", event)'></div>\n", $lId);
                    echo sprintf("</div>\n");
                }
            }
        }
        
        echo sprintf("</div>\n");
                
        //===============================================
        
        echo sprintf("</div>\n"); // end_content_1
        echo sprintf("</div>\n"); // end_body_1
        echo sprintf("</div>\n"); // end_row_1
    }
    //===============================================
    public function onCode() {
        $lId    = $this->m_dom->getItem("code", "id");
        $lTitle = $this->m_dom->getItem("code", "title");
        
        echo sprintf("<div class='Row Left EditorTabCtn' id='%s'>\n", $lId);
        echo sprintf("<h2 class='Title4'>%s</h2>\n", $lTitle);
        
        echo sprintf("<div class='Body14'>\n");
        echo sprintf("<div class='Content9'>\n");
        
        //===============================================
        // menu
        //===============================================
        
        $lId = $this->m_dom->getItem("code_menu", "id");
        $this->m_dom->getCode("code_menu");
        $lCountI = $this->m_dom->countXNode("map/data");
        $this->m_dom->getXNode("map/data");
        
        echo sprintf("<div class='Row9'>\n");
        echo sprintf("<div class='DropDown'>\n");
        echo sprintf("<button class='Button9 DropDownButton'>Menu</button>\n");
        echo sprintf("<div class='DropDownContent'>\n");
        
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
        
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        
        //===============================================
        // corps
        //===============================================
        
        echo sprintf("<div>\n");
        
        $lCount = $this->m_dom->countItem("code");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory  = $this->m_dom->getItem3("code", "category", $i);
            $lModel     = $this->m_dom->getItem3("code", "model", $i);
            $lId        = $this->m_dom->getItem3("code", "id", $i);
            $lPlaceholder       = $this->m_dom->getItem3("code", "placeholder", $i);
            
            if($lCategory == "body") {
                if($lModel == "textarea") {
                    echo sprintf("<textarea id='%s' class='Border Content14' onkeydown='call_server(\"page\", \"key_down_code\", event)'
                    placeholder='%s'></textarea>\n", $lId, $lPlaceholder);
                }
            }
        }
                
        echo sprintf("</div>\n");
        
        //===============================================
        
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
}
?>            