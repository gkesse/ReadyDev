<?php   
//===============================================
class GTableUi extends GObjectUi {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function run() {
        $lCount         = $this->m_app->countItem("table");
        $lTitle         = $this->m_app->getItem("table", "title");
        $lIntro         = $this->m_app->getItem("table", "intro");
        $lModalId       = $this->m_app->getItem("table", "modal_id");
        $lBodyId        = $this->m_app->getItem("table", "body_id");
        $lFormId        = $this->m_app->getItem("table", "form_id");
        $lMsgId         = $this->m_app->getItem("table", "msg_id");
        $lModule        = $this->m_app->getItem("table", "module");
        $lKeypressCB    = $this->m_app->getItem("table", "keypress_cb");
        $lCloseCB       = $this->m_app->getItem("table", "close_cb");
        //
        echo sprintf("<div class='Modal' id='%s' onkeypress='server_call(\"%s\", \"%s\", this, event);'>\n", $lModalId, $lModule, $lKeypressCB);
        echo sprintf("<div class='Content10' id='%s'>\n", $lBodyId);
        echo sprintf("<div class='Button3 Close' onclick='server_call(\"%s\", \"%s\");'><i class='fa fa-close'></i></div>\n", $lModule, $lCloseCB);
        echo sprintf("<div class='Title5'>%s</div>\n", $lTitle);
        echo sprintf("<form class='Body4' id='%s' method='post'>\n", $lFormId);
        echo sprintf("<div class='Row11'>%s</div>\n", $lIntro);
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory = $this->m_app->getItem3("table", "category", $i);
            $lModel = $this->m_app->getItem3("table", "model", $i);
            $lId = $this->m_app->getItem3("table", "id", $i);
            $lPageId = $this->m_app->getItem3("table", "page_id", $i);
            
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
            $lCategory  = $this->m_app->getItem3("table", "category", $i);
            $lModel     = $this->m_app->getItem3("table", "model", $i);
            $lId        = $this->m_app->getItem3("table", "id", $i);
            $lModule    = $this->m_app->getItem3("table", "module", $i);
            $lCallback  = $this->m_app->getItem3("table", "callback", $i);
            $lPicto     = $this->m_app->getItem3("table", "picto", $i);
            $lText      = $this->m_app->getItem3("table", "text", $i, true);
            $lOff       = ($this->m_app->getItem3("table", "off", $i) == "1");
            
            if($lOff) continue;
            
            if($lCategory == "table/button") {
                if($lModel == "button") {
                    echo sprintf("<button type='button' id='%s' class='Button4' onclick='server_call(\"%s\", \"%s\");'><i class='fa fa-%s'></i> %s</button>\n"
                        , $lId, $lModule, $lCallback, $lPicto, $lText);
                }
                if($lModel == "button/icon") {
                    echo sprintf("<button type='button' id='%s' class='Button4' onclick='server_call(\"%s\", \"%s\");'>%s <i class='fa fa-%s'></i></button>\n"
                        , $lId, $lModule, $lCallback, $lText, $lPicto);
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
