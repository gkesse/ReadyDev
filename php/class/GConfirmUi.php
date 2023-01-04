<?php   
//===============================================
class GConfirmUi extends GObjectUi {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function run() {
        $lCount         = $this->m_app->countItem("confirm");
        $lTitle         = $this->m_app->getItem("confirm", "title");
        $lIntro         = $this->m_app->getItem("confirm", "intro");
        $lModalId       = $this->m_app->getItem("confirm", "modal_id");
        $lBodyId        = $this->m_app->getItem("confirm", "body_id");
        $lFormId        = $this->m_app->getItem("confirm", "form_id");
        $lMsgId         = $this->m_app->getItem("confirm", "msg_id");
        $lModule        = $this->m_app->getItem("confirm", "module");
        $lKeypressCB    = $this->m_app->getItem("confirm", "keypress_cb");
        $lCloseCB       = $this->m_app->getItem("confirm", "close_cb");
        //
        echo sprintf("<div class='Modal' id='%s' onkeypress='call_server(\"%s\", \"%s\", this, event);'>\n", $lModalId, $lModule, $lKeypressCB);
        echo sprintf("<div class='Content10' id='%s'>\n", $lBodyId);
        echo sprintf("<div class='Button3 Close' onclick='call_server(\"%s\", \"%s\");'><i class='fa fa-close'></i></div>\n", $lModule, $lCloseCB);
        echo sprintf("<div class='Title5'>%s</div>\n", $lTitle);
        echo sprintf("<form class='Body4' id='%s' method='post'>\n", $lFormId);        
        echo sprintf("<div class='Row11'>%s</div>\n", $lIntro);
        echo sprintf("<div class='Content15'>");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory = $this->m_app->getItem3("confirm", "category", $i);
            $lModel = $this->m_app->getItem3("confirm", "model", $i);
            $lId = $this->m_app->getItem3("confirm", "id", $i);
            
            if($lCategory == "confirm/body") {
                if($lModel == "label") {
                    echo sprintf("<div id='%s'></div>\n", $lId);
                }
            }
        }
        
        echo sprintf("</div>");        
        echo sprintf("<div class='Row13'>\n");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory  = $this->m_app->getItem3("confirm", "category", $i);
            $lModel     = $this->m_app->getItem3("confirm", "model", $i);
            $lId        = $this->m_app->getItem3("confirm", "id", $i);
            $lModule    = $this->m_app->getItem3("confirm", "module", $i);
            $lCallback  = $this->m_app->getItem3("confirm", "callback", $i);
            $lPicto     = $this->m_app->getItem3("confirm", "picto", $i);
            $lText      = $this->m_app->getItem3("confirm", "text", $i);
            
            if($lCategory == "confirm/button") {
                if($lModel == "button") {
                    echo sprintf("<button type='button' id='%s' class='Button4' onclick='call_server(\"%s\", \"%s\");'><i class='fa fa-%s'></i> %s</button>\n"
                        , $lId, $lModule, $lCallback, $lPicto, $lText);
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
