<?php   
    class GManager extends GModule {
        //===============================================
        private $id = 0;
        private $code = "";
        private $label = "";
        //===============================================
        public function __construct() {
            parent::__construct();
            $this->createDoms();
        }
        //===============================================
        public function serialize($code = "manager") {
            $lDom = new GCode();
            $lDom->createDoc();
            $lDom->addData($code, "id", $this->id);
            $lDom->addData($code, "code_id", $this->code);
            $lDom->addData($code, "label", $this->label);
            return $lDom->toStringData();
        }
        //===============================================
        public function deserialize($data, $code = "manager") {
            parent::deserialize($data);
            $lDom = new GCode();
            $lDom->loadXml($data);
            $this->id = $lDom->getItem($code, "id");
            $this->code = $lDom->getItem($code, "code_id");
            $this->label = $lDom->getItem($code, "label");
        }
        //===============================================
        public function onModule($data, $server) {
            $this->deserialize($data);
            $lMethod = $this->method;
            //===============================================
            if($lMethod == "") {
                $this->onMethodNone();
                return false;
            }
            //===============================================
            // method
            //===============================================
            else if($lMethod == "create_code") {
                $this->onCreateCode($data, $server);
            }
            else if($lMethod == "search_code") {
                $this->onSearchCode($data, $server);
            }
            else if($lMethod == "update_code") {
                $this->onUpdateCode($data, $server);
            }
            else if($lMethod == "delete_code") {
                $this->onDeleteCode($data, $server);
            }
            //===============================================
            // end
            //===============================================
            else {
                $this->onMethodUnknown();
                return false;
            }
            //===============================================
            return true;
        }
        //===============================================
        public function onCreateCode($data, $server) {
            $this->callProxy($server);
        }
        //===============================================
        public function onSearchCode($data, $server) {
            $this->callProxy($server);
        }
        //===============================================
        public function onUpdateCode($data, $server) {
            $this->callProxy($server);            
        }
        //===============================================
        public function onDeleteCode($data, $server) {
            $this->callProxy($server);           
        }
        //===============================================
        public function runUi() {
            $lId = $this->getItem("manager", "id");
            $lTitle = $this->getItem("manager", "title");
            
            echo sprintf("<div class='MainBlock'>\n");
            echo sprintf("<div class='Content'>\n");
            echo sprintf("<h1 class='Title2' id='%s'>\n", $lId);
            echo sprintf("<a class='Link3' href='#'>%s</a>\n", $lTitle);
            echo sprintf("</h1>\n");
            echo sprintf("<div class='Body'>\n");
            
            $this->onHeaderUi();            
            $this->onHomeUi();
            $this->onCodeUi();
            
            echo sprintf("</div>\n");
            echo sprintf("</div>\n");
            echo sprintf("</div>\n");
        }
        //===============================================
        public function onHeaderUi() {
            echo sprintf("<div class='Row10'>\n");
            
            $lCount = $this->countItem("manager");
            $lModule = $this->getItemC("manager", "header/link", "module");
            $lMethod = $this->getItemC("manager", "header/link", "method");
            
            for($i = 0; $i < $lCount; $i++) {
                $lCategory = $this->getItem3("manager", "category", $i);
                $lToolTip = $this->getItem3("manager", "tooltip", $i);
                $lId = $this->getItem3("manager", "id", $i);
                $lName = $this->getItem3("manager", "name", $i);
                
                if($lCategory == "header") {
                    echo sprintf("<div class='Col'>\n");
                    echo sprintf("<button class='Button2 ManagerTab' title=\"%s\"\n", $lToolTip);
                    echo sprintf("onclick='server_call(\"%s\", \"%s\", this, \"%s\");'>%s</button>\n", $lModule, $lMethod, $lId, $lName);
                    echo sprintf("</div>\n");
                }
            }
            
            echo sprintf("</div>\n");
        }
        //===============================================
        public function onHomeUi() {
            $lId = $this->getItemC("manager", "home", "id");
            $lTitle = $this->getItemC("manager", "home", "title");
            $lIntro = $this->getItemC("manager", "home", "intro");
            
            echo sprintf("<div class='Row Left ManagerTabCtn' id='%s'>\n", $lId);
            echo sprintf("<h2 class='Title4'>%s</h2>\n", $lTitle);
            echo sprintf("<div class='Body6'>\n");
            echo sprintf("<div class='Content9'>%s</div>\n", $lIntro);
            echo sprintf("</div>\n");
            echo sprintf("</div>\n");            
        }
        //===============================================
        public function onCodeUi() {
            $lCount = $this->countItem("manager");
            $lId = $this->getItemC("manager", "code", "id");
            $lTitle = $this->getItemC("manager", "code", "title");
            
            echo sprintf("<div class='Row Left ManagerTabCtn' id='%s'>\n", $lId);
            echo sprintf("<h2 class='Title4'>%s</h2>\n", $lTitle);
            
            echo sprintf("<div class='Body14'>\n");
            echo sprintf("<div class='Content9'>\n");
                   
            echo sprintf("<div class='Border Content14'>\n");
            
            for($i = 0; $i < $lCount; $i++) {
                $lCategory = $this->getItem3("manager", "category", $i);
                $lModel = $this->getItem3("manager", "model", $i);
                $lLabel = $this->getItem3("manager", "label", $i);
                $lId = $this->getItem3("manager", "id", $i);
                $lType = $this->getItem3("manager", "type", $i);
                $lName = $this->getItem3("manager", "name", $i);
                $lValue = $this->getItem3("manager", "value", $i);
                $lLowerOn = ($this->getItem3("manager", "lower_on", $i) == "1");
                
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
                $lCategory = $this->getItem3("manager", "category", $i);
                $lId = $this->getItem3("manager", "id", $i);
                $lModule = $this->getItem3("manager", "module", $i);
                $lCallback = $this->getItem3("manager", "callback", $i);
                $lPicto = $this->getItem3("manager", "picto", $i);
                $lText = $this->getItem3("manager", "text", $i);
                
                if($lCategory == "code/button") {
                    echo sprintf("<button type='button' id='%s' class='Button4' onclick='server_call(\"%s\", \"%s\");'><i class='fa fa-%s'></i> %s</button>\n"
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