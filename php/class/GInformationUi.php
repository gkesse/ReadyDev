<?php   
//===============================================
class GInformationUi extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->loadDom(__CLASS__);
    }
    //===============================================
    public function run() {
        $lCount         = $this->m_dom->countItem("information");
        $lTitle         = $this->m_dom->getItem("information", "title");
        $lIntro         = $this->m_dom->getItem("information", "intro");
        $lModalId       = $this->m_dom->getItem("information", "modal_id");
        $lBodyId        = $this->m_dom->getItem("information", "body_id");
        $lFormId        = $this->m_dom->getItem("information", "form_id");
        $lMsgId         = $this->m_dom->getItem("information", "msg_id");
        $lModule        = $this->m_dom->getItem("information", "module");
        $lKeypressCB    = $this->m_dom->getItem("information", "keypress_cb");
        $lCloseCB       = $this->m_dom->getItem("information", "close_cb");
        //
        echo sprintf("<div class='Modal' id='%s' onkeypress='call_server(\"%s\", \"%s\", this, event);'>\n", $lModalId, $lModule, $lKeypressCB);
        echo sprintf("<div class='Content10' id='%s'>\n", $lBodyId);
        echo sprintf("<div class='Button3 Close' onclick='call_server(\"%s\", \"%s\");'><i class='fa fa-close'></i></div>\n", $lModule, $lCloseCB);
        echo sprintf("<div class='Title5'>%s</div>\n", $lTitle);
        echo sprintf("<form class='Body4' id='%s' method='post'>\n", $lFormId);        
        echo sprintf("<div class='Row11'>%s</div>\n", $lIntro);
        echo sprintf("<div class='Content15'>");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory  = $this->m_dom->getItem3("information", "category", $i);
            $lModel     = $this->m_dom->getItem3("information", "model", $i);
            $lId        = $this->m_dom->getItem3("information", "id", $i);
            
            if($lCategory == "confirm/body") {
                if($lModel == "label") {
                    echo sprintf("<div id='%s'></div>\n", $lId);
                }
            }
        }
        
        echo sprintf("</div>");        
        echo sprintf("<div class='Row13'>\n");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory  = $this->m_dom->getItem3("information", "category", $i);
            $lModel     = $this->m_dom->getItem3("information", "model", $i);
            $lId        = $this->m_dom->getItem3("information", "id", $i);
            $lModule    = $this->m_dom->getItem3("information", "module", $i);
            $lMethod    = $this->m_dom->getItem3("information", "method", $i);
            $lPicto     = $this->m_dom->getItem3("information", "picto", $i);
            $lText      = $this->m_dom->getItem3("information", "text", $i);
            
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
}
//===============================================
?>
