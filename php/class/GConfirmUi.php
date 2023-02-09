<?php   
//===============================================
class GConfirmUi extends GObject {
    //===============================================
    public function __construct($_codeName = "confirm") {
        parent::__construct($_codeName);
        $this->loadDom(__CLASS__);
    }
    //===============================================
    public function run() {
        $this->runEnv();
        
        $lCount         = $this->m_dom->countItem("confirm");
        $lTitle         = $this->m_dom->getItem("confirm", "title");
        $lIntro         = $this->m_dom->getItem("confirm", "intro");
        $lModalId       = $this->m_dom->getItem("confirm", "modal_id");
        $lIntroId       = $this->m_dom->getItem("confirm", "intro_id");
        $lBodyId        = $this->m_dom->getItem("confirm", "body_id");
        $lFormId        = $this->m_dom->getItem("confirm", "form_id");
        $lMsgId         = $this->m_dom->getItem("confirm", "msg_id");
        $lModule        = $this->m_dom->getItem("confirm", "module");
        $lKeypressCB    = $this->m_dom->getItem("confirm", "keypress_cb");
        $lCloseCB       = $this->m_dom->getItem("confirm", "close_cb");
        
        echo sprintf("<div class='Modal' id='%s' onkeypress='call_server(\"%s\", \"%s\", this, event);'>\n", $lModalId, $lModule, $lKeypressCB);
        echo sprintf("<div class='Content10' id='%s'>\n", $lBodyId);
        echo sprintf("<div class='Button3 Close' onclick='call_server(\"%s\", \"%s\");'><i class='fa fa-close'></i></div>\n", $lModule, $lCloseCB);
        echo sprintf("<div class='Title5'>%s</div>\n", $lTitle);
        echo sprintf("<form class='Body4' id='%s' method='post'>\n", $lFormId);        
        echo sprintf("<div id='%s' class='Row11'>%s</div>\n", $lIntroId, $lIntro);
        echo sprintf("<div class='Content15'>");        
        echo sprintf("</div>");        
        echo sprintf("<div class='Row13'>\n");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory  = $this->m_dom->getItem3("confirm", "category", $i);
            $lModel     = $this->m_dom->getItem3("confirm", "model", $i);
            $lId        = $this->m_dom->getItem3("confirm", "id", $i);
            $lModule    = $this->m_dom->getItem3("confirm", "module", $i);
            $lMethod    = $this->m_dom->getItem3("confirm", "method", $i);
            $lPicto     = $this->m_dom->getItem3("confirm", "picto", $i);
            $lText      = $this->m_dom->getItem3("confirm", "text", $i);
            
            if($lCategory == "button") {
                if($lModel == "button") {
                    echo sprintf("<button type='button' id='%s' class='Button4' onclick='call_server(\"%s\", \"%s\");'><i class='fa fa-%s'></i> %s</button>\n"
                        , $lId, $lModule, $lMethod, $lPicto, $lText);
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
    public function runEnv() {
        $lCount = $this->m_dom->countItem("confirm");
        
        for($i = 0; $i < $lCount; $i++) {
            $lModel = $this->m_dom->getItem3("env", "model", $i);
            $lId    = $this->m_dom->getItem3("env", "id", $i);
            $lValue = $this->m_dom->getItem3("env", "value", $i);
            if($lModel == "normal") {
                echo sprintf("<input type='hidden' id='%s' value='%s'/>\n", $lId, $lValue);
            }
        }
    }
    //===============================================
}
//===============================================
?>
