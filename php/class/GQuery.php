<?php   
    class GQuery extends GModule {
        //===============================================
        private $msg = "";
        private $res = "";
        //===============================================
        public function __construct() {
            parent::__construct();
            $this->createDoms();
        }
        //===============================================
        public function serialize($code = "query") {
            $lData = new GCode();
            $lData->createDoc();
            $lData->addData($code, "msg", $this->msg, true);
            $lData->addData($code, "res", $this->res, true);
            return $lData->toStringData();
        }
        //===============================================
        public function deserialize($data, $code = "query") {
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
            else if($lMethod == "send_query") {
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
            $lId = $this->getItem("query", "id");
            $lTitle = $this->getItem("query", "title");
            
            echo sprintf("<div class='MainBlock'>\n");
            echo sprintf("<div class='Content'>\n");
            echo sprintf("<h1 class='Title2' id='%s'>\n", $lId);
            echo sprintf("<a class='Link3' href='#'>%s</a>\n", $lTitle);
            echo sprintf("</h1>\n");
            echo sprintf("<div class='Body'>\n");
            
            $this->onHeaderUi();            
            $this->onHome();
            $this->onEmission();
            $this->onReception();
            
            echo sprintf("</div>\n");
            echo sprintf("</div>\n");
            echo sprintf("</div>\n");
        }
        //===============================================
        public function onHeaderUi() {
            echo sprintf("<div class='Row10'>\n");
            
            $lCount = $this->countItem("query");
            $lModule = $this->getItemC("query", "header/link", "module");
            $lMethod = $this->getItemC("query", "header/link", "method");
            
            for($i = 0; $i < $lCount; $i++) {
                $lCategory = $this->getItem3("query", "category", $i);
                $lToolTip = $this->getItem3("query", "tooltip", $i);
                $lId = $this->getItem3("query", "id", $i);
                $lName = $this->getItem3("query", "name", $i);
                
                if($lCategory == "header") {
                    echo sprintf("<div class='Col'>\n");
                    echo sprintf("<button class='Button2 QueryTab' title=\"%s\"\n", $lToolTip);
                    echo sprintf("onclick='server_call(\"%s\", \"%s\", this, \"%s\");'>%s</button>\n", $lModule, $lMethod, $lId, $lName);
                    echo sprintf("</div>\n");
                }
            }
            
            echo sprintf("</div>\n");
        }
        //===============================================
        public function onHome() {
            $lId = $this->getItemC("query", "home", "id");
            $lTitle = $this->getItemC("query", "home", "title");
            $lIntro = $this->getItemC("query", "home", "intro");
            
            echo sprintf("<div class='Row Left QueryTabCtn' id='%s'>\n", $lId);
            echo sprintf("<h2 class='Title4'>%s</h2>\n", $lTitle);
            echo sprintf("<div class='Body6'>\n");
            echo sprintf("<div class='Content9'>%s</div>\n", $lIntro);
            echo sprintf("</div>\n");
            echo sprintf("</div>\n");            
        }
        //===============================================
        public function onEmission() {
            $lId = $this->getItemC("query", "emission", "id");
            $lTitle = $this->getItemC("query", "emission", "title");
            $lCount = $this->countItem("query");
            
            echo sprintf("<div class='Row Left QueryTabCtn' id='%s'>\n", $lId);
            echo sprintf("<h2 class='Title4'>%s</h2>\n", $lTitle);
            
            echo sprintf("<div class='Body14'>\n");
            echo sprintf("<div class='Content9'>\n");
            
            for($i = 0; $i < $lCount; $i++) {
                $lCategory = $this->getItem3("query", "category", $i);
                $lId = $this->getItem3("query", "id", $i);
                $lName = $this->getItem3("query", "name", $i);
                $lRows = $this->getItem3("query", "rows", $i);
                $lCols = $this->getItem3("query", "cols", $i);
                $lPlaceholder = $this->getItem3("query", "placeholder", $i);
                
                if($lCategory == "emission/text") {
                    echo sprintf("<textarea class='Border Code3' id='%s' name='%s' rows='%s' cols='%s' placeholder='%s'></textarea>\n"
                        , $lId, $lName, $lRows, $lCols, $lPlaceholder);
                }
            }
            
            echo sprintf("<div class='Row33'>\n");
            for($i = 0; $i < $lCount; $i++) {
                $lCategory = $this->getItem3("query", "category", $i);
                $lId = $this->getItem3("query", "id", $i);
                $lText = $this->getItem3("query", "text", $i);
                $lCheckedOn = ($this->getItem3("query", "checked_on", $i) == "1");
                $lTooltip = $this->getItem3("query", "tooltip", $i);
                
                if($lCategory == "emission/check") {
                    echo sprintf("<input class='Col' type='checkbox' id='%s' name='%s' value='%s' title='%s' checked='%s'><label class='Col' for='%s'> %s</label>"
                        , $lId, $lId, $lId, $lTooltip, $lCheckedOn, $lId, $lText);
                }
            }
            echo sprintf("</div>\n");
            
            for($i = 0; $i < $lCount; $i++) {
                $lCategory = $this->getItem3("query", "category", $i);
                $lName = $this->getItem3("query", "name", $i);
                $lModule = $this->getItem3("query", "module", $i);
                $lMethod = $this->getItem3("query", "method", $i);
                $lTooltip = $this->getItem3("query", "tooltip", $i);
                
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
            $lId = $this->getItemC("query", "reception", "id");
            $lTitle = $this->getItemC("query", "reception", "title");
            $lCount = $this->countItem("query");
            
            echo sprintf("<div class='Row Left QueryTabCtn' id='%s'>\n", $lId);
            echo sprintf("<h2 class='Title4'>%s</h2>\n", $lTitle);
            
            echo sprintf("<div class='Body14'>\n");
            echo sprintf("<div class='Content9'>\n");
            
            for($i = 0; $i < $lCount; $i++) {
                $lCategory = $this->getItem3("query", "category", $i);
                $lId = $this->getItem3("query", "id", $i);
                $lName = $this->getItem3("query", "name", $i);
                $lRows = $this->getItem3("query", "rows", $i);
                $lCols = $this->getItem3("query", "cols", $i);
                $lReadOnly = $this->getItem3("query", "readonly", $i);
                
                if($lCategory == "reception/text") {
                    echo sprintf("<textarea class='Border Code3' id='%s' name='%s' rows='%s' cols='%s' %s></textarea>\n"
                        , $lId, $lName, $lRows, $lCols, $lReadOnly);
                }
            }
            for($i = 0; $i < $lCount; $i++) {
                $lCategory = $this->getItem3("query", "category", $i);
                $lName = $this->getItem3("query", "name", $i);
                $lModule = $this->getItem3("query", "module", $i);
                $lMethod = $this->getItem3("query", "method", $i);
                $lTooltip = $this->getItem3("query", "tooltip", $i);
                
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