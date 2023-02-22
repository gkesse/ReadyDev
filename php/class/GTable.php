<?php   
//===============================================
class GTable extends GModule {
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->createDoms();
    }
    //===============================================
    public function serialize($code = "user") {
        $lData = new GCode();
        $lData->createDoc();
        $lData->addData($code, "pseudo", $this->pseudo);
        return $lData->toStringData();
    }
    //===============================================
    public function deserialize($data, $code = "user") {
        parent::deserialize($data);
        $lData = new GCode();
        $lData->loadXml($data);
        $this->pseudo = $lData->getData($code, "pseudo");
    }
    //===============================================
    public function onModule($data, $server) {
        $this->deserialize($data);
        $lMethod = $this->m_method;
        //===============================================
        if($lMethod == "") {
            $this->onMethodNone();
            return false;
        }
        //===============================================
        // method
        //===============================================
        else if($lMethod == "run_connection") {
            $this->onRunConnection($server);
        }
        //===============================================
        // end
        //===============================================
        else {
            $this->onMethodUnknown();
            return false;
        }
        return true;
    }
    //===============================================
    public function onTableUi() {
        $lCount = $this->countItem("table");
        $lTitle = $this->getItem("table", "title");
        $lIntro = $this->getItem("table", "intro");
        $lModalId = $this->getItem("table", "modal_id");
        $lBodyId = $this->getItem("table", "body_id");
        $lFormId = $this->getItem("table", "form_id");
        $lMsgId = $this->getItem("table", "msg_id");
        $lModule = $this->getItem("table", "module");
        $lCloseCB = $this->getItem("table", "close_cb");
        //
        echo sprintf("<div class='Modal' id='%s'>\n", $lModalId);
        echo sprintf("<div class='Content10' id='%s'>\n", $lBodyId);
        echo sprintf("<div class='Button3 Close' onclick='call_server(\"%s\", \"%s\");'><i class='fa fa-close'></i></div>\n", $lModule, $lCloseCB);
        echo sprintf("<div class='Title5'>%s</div>\n", $lTitle);
        echo sprintf("<form class='Body4' id='%s' method='post'>\n", $lFormId);
        echo sprintf("<div class='Row11'>%s</div>\n", $lIntro);
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory = $this->getItem3("table", "category", $i);
            $lModel = $this->getItem3("table", "model", $i);
            $lId = $this->getItem3("table", "id", $i);
            $lPageId = $this->getItem3("table", "page_id", $i);
            
            if($lCategory == "table/body") {
                if($lModel == "table") {
                    echo sprintf("<div class='Modal3' id='%s'>\n", $lPageId);
                    echo sprintf("<table id='%s'>\n", $lId);
                    echo sprintf("</table>\n");
                    echo sprintf("</div>\n");
                }
            }
        }
        
        echo sprintf("<div class='Row35'>\n");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory = $this->getItem3("table", "category", $i);
            $lModel = $this->getItem3("table", "model", $i);
            $lId = $this->getItem3("table", "id", $i);
            $lModule = $this->getItem3("table", "module", $i);
            $lMethod = $this->getItem3("table", "method", $i);
            $lPicto = $this->getItem3("table", "picto", $i);
            $lText = $this->getItem3("table", "text", $i, true);
            $lOff = ($this->getItem3("table", "off", $i) == "1");
            
            if($lOff) continue;
            
            if($lCategory == "table/button") {
                if($lModel == "button") {
                    echo sprintf("<button type='button' id='%s' class='Button4' onclick='call_server(\"%s\", \"%s\");'><i class='fa fa-%s'></i> %s</button>\n"
                        , $lId, $lModule, $lMethod, $lPicto, $lText);
                }
                if($lModel == "button/icon") {
                    echo sprintf("<button type='button' id='%s' class='Button4' onclick='call_server(\"%s\", \"%s\");'>%s <i class='fa fa-%s'></i></button>\n"
                        , $lId, $lModule, $lMethod, $lText, $lPicto);
                }
            }
        }
        
        echo sprintf("</div>\n");
        echo sprintf("</form>\n");
        echo sprintf("<div class='Row14' id='%s'></div>\n", $lMsgId);
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>
