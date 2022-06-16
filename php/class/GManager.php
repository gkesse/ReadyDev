<?php   
    class GManager extends GModule {
        //===============================================
        private $msg = "";
        private $res = "";
        //===============================================
        public function __construct() {
            parent::__construct();
            $this->createDoms();
        }
        //===============================================
        public function serialize($code = "manager") {
            $lData = new GCode();
            $lData->createDoc();
            $lData->addData($code, "msg", $this->msg, true);
            $lData->addData($code, "res", $this->res, true);
            return $lData->toStringData();
        }
        //===============================================
        public function deserialize($data, $code = "manager") {
            parent::deserialize($data);
            $lData = new GCode();
            $lData->loadXml($data);
            $this->msg = $lData->getItem($code, "msg", true);
            $this->res = $lData->getItem($code, "res", true);
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
            else if($lMethod == "send_manager") {
                $this->onSendQuery($server);
            }
            //===============================================
            // end
            //===============================================
            else return false;
            return true;
        }
        //===============================================
        public function onSendQuery($server) {
            $lClient = new GSocket();
            $lData = $this->msg;
            $lData = $lClient->callServerTcp($lData);
            $this->res = $lData;
            $lData = $this->serialize();
            $server->addResponse($lData);
        }
        //===============================================
        public function run() {
            $lId = $this->getItem("manager", "id");
            $lTitle = $this->getItem("manager", "title");
            
            echo sprintf("<div class='MainBlock'>\n");
            echo sprintf("<div class='Content'>\n");
            echo sprintf("<h1 class='Title2' id='%s'>\n", $lId);
            echo sprintf("<a class='Link3' href='#'>%s</a>\n", $lTitle);
            echo sprintf("</h1>\n");
            echo sprintf("<div class='Body'>\n");
            
            $this->onHeader();            
            /*$this->onHome();
            $this->onEmission();
            $this->onReception();*/
            
            echo sprintf("</div>\n");
            echo sprintf("</div>\n");
            echo sprintf("</div>\n");
        }
        //===============================================
        public function onHeader() {
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
        public function onHome() {
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
        public function onEmission() {
            $lId = $this->getItemC("manager", "emission", "id");
            $lTitle = $this->getItemC("manager", "emission", "title");
            $lCount = $this->countItem("manager");
            
            echo sprintf("<div class='Row Left ManagerTabCtn' id='%s'>\n", $lId);
            echo sprintf("<h2 class='Title4'>%s</h2>\n", $lTitle);
            
            echo sprintf("<div class='Body14'>\n");
            echo sprintf("<div class='Content9'>\n");
            
            for($i = 0; $i < $lCount; $i++) {
                $lCategory = $this->getItem3("manager", "category", $i);
                $lId = $this->getItem3("manager", "id", $i);
                $lName = $this->getItem3("manager", "name", $i);
                $lRows = $this->getItem3("manager", "rows", $i);
                $lCols = $this->getItem3("manager", "cols", $i);
                $lPlaceholder = $this->getItem3("manager", "placeholder", $i);
                
                if($lCategory == "emission/text") {
                    echo sprintf("<textarea class='Border Code3' id='%s' name='%s' rows='%s' cols='%s' placeholder='%s'></textarea>\n"
                        , $lId, $lName, $lRows, $lCols, $lPlaceholder);
                }
            }
            
            echo sprintf("<div class='Row33'>\n");
            for($i = 0; $i < $lCount; $i++) {
                $lCategory = $this->getItem3("manager", "category", $i);
                $lId = $this->getItem3("manager", "id", $i);
                $lText = $this->getItem3("manager", "text", $i);
                $lCheckedOn = ($this->getItem3("manager", "checked_on", $i) == "1");
                $lTooltip = $this->getItem3("manager", "tooltip", $i);
                
                if($lCategory == "emission/check") {
                    echo sprintf("<input class='Col' type='checkbox' id='%s' name='%s' value='%s' title='%s' checked='%s'><label class='Col' for='%s'> %s</label>"
                        , $lId, $lId, $lId, $lTooltip, $lCheckedOn, $lId, $lText);
                }
            }
            echo sprintf("</div>\n");
            
            for($i = 0; $i < $lCount; $i++) {
                $lCategory = $this->getItem3("manager", "category", $i);
                $lName = $this->getItem3("manager", "name", $i);
                $lModule = $this->getItem3("manager", "module", $i);
                $lMethod = $this->getItem3("manager", "method", $i);
                $lTooltip = $this->getItem3("manager", "tooltip", $i);
                
                if($lCategory == "emission/button") {
                    echo sprintf("<div class='Col'>\n");
                    echo sprintf("<button class='Button2' onclick='server_call(\"%s\", \"%s\");' title='%s'>%s</button>"
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
            $lId = $this->getItemC("manager", "reception", "id");
            $lTitle = $this->getItemC("manager", "reception", "title");
            $lCount = $this->countItem("manager");
            
            echo sprintf("<div class='Row Left ManagerTabCtn' id='%s'>\n", $lId);
            echo sprintf("<h2 class='Title4'>%s</h2>\n", $lTitle);
            
            echo sprintf("<div class='Body14'>\n");
            echo sprintf("<div class='Content9'>\n");
            
            for($i = 0; $i < $lCount; $i++) {
                $lCategory = $this->getItem3("manager", "category", $i);
                $lId = $this->getItem3("manager", "id", $i);
                $lName = $this->getItem3("manager", "name", $i);
                $lRows = $this->getItem3("manager", "rows", $i);
                $lCols = $this->getItem3("manager", "cols", $i);
                $lReadOnly = $this->getItem3("manager", "readonly", $i);
                
                if($lCategory == "reception/text") {
                    echo sprintf("<textarea class='Border Code3' id='%s' name='%s' rows='%s' cols='%s' %s></textarea>\n"
                        , $lId, $lName, $lRows, $lCols, $lReadOnly);
                }
            }
            for($i = 0; $i < $lCount; $i++) {
                $lCategory = $this->getItem3("manager", "category", $i);
                $lName = $this->getItem3("manager", "name", $i);
                $lModule = $this->getItem3("manager", "module", $i);
                $lMethod = $this->getItem3("manager", "method", $i);
                $lTooltip = $this->getItem3("manager", "tooltip", $i);
                
                if($lCategory == "reception/button") {
                    echo sprintf("<div class='Col'>\n");
                    echo sprintf("<button class='Button2' onclick='server_call(\"%s\", \"%s\");' title='%s'>%s</button>"
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