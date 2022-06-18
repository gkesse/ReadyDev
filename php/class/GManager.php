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
                $lLabel = $this->getItem3("manager", "label", $i);
                $lId = $this->getItem3("manager", "id", $i);
                $lType = $this->getItem3("manager", "type", $i);
                $lName = $this->getItem3("manager", "name", $i);
                
                if($lCategory == "code/body") {
                    echo sprintf("<div class='Row12'>\n");
                    echo sprintf("<label class='Label3' for='%s'>%s</label>\n", $lName, $lLabel);
                    echo sprintf("<div class='Field3'><input id='%s' class='Input2' type='%s' name='%s'/></div>\n", $lId, $lType, $lName);
                    echo sprintf("</div>\n");
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
                $lText = $this->getItem3("manager", "text", $i, true);
                
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