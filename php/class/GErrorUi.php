<?php   
//===============================================
class GErrorUi extends GObject {
    //===============================================
    public function __construct($_codeName = "errors") {
        parent::__construct($_codeName);
        $this->loadDom(__CLASS__);
    }
    //===============================================
    public function run() {
        $lCount         = $this->m_dom->countItem("errors");
        $lTitle         = $this->m_dom->getItem("errors", "title");
        $lIntro         = $this->m_dom->getItem("errors", "intro");
        $lModalId       = $this->m_dom->getItem("errors", "modal_id");
        $lBodyId        = $this->m_dom->getItem("errors", "body_id");
        $lTitleId       = $this->m_dom->getItem("errors", "title_id");
        $lFormId        = $this->m_dom->getItem("errors", "form_id");
        $lMsgId         = $this->m_dom->getItem("errors", "msg_id");
        $lModule        = $this->m_dom->getItem("errors", "module");
        $lCloseCB       = $this->m_dom->getItem("errors", "close_cb");
        //
        echo sprintf("<div class='Modal' id='%s'>\n", $lModalId);
        echo sprintf("<div class='Content10' id='%s'>\n", $lBodyId);
        echo sprintf("<div class='Button3 Close' onclick='call_server(\"%s\", \"%s\");'><i class='fa fa-close'></i></div>\n", $lModule, $lCloseCB);
        echo sprintf("<div class='Title5' id='%s'>%s</div>\n", $lTitleId, $lTitle);
        echo sprintf("<form class='Body4' id='%s' method='post'>\n", $lFormId);        
        echo sprintf("<div class='Row11'>%s</div>\n", $lIntro);
        echo sprintf("<div class='Content15'>");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory  = $this->m_dom->getItem3("errors", "category", $i);
            $lModel     = $this->m_dom->getItem3("errors", "model", $i);
            $lId        = $this->m_dom->getItem3("errors", "id", $i);
            
            if($lCategory == "errors/body") {
                if($lModel == "label") {
                    echo sprintf("<div id='%s'></div>\n", $lId);
                }
            }
        }
        
        echo sprintf("</div>\n");
        echo sprintf("<div class='Row13'>\n");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory  = $this->m_dom->getItem3("errors", "category", $i);
            $lModel     = $this->m_dom->getItem3("errors", "model", $i);
            $lId        = $this->m_dom->getItem3("errors", "id", $i);
            $lModule    = $this->m_dom->getItem3("errors", "module", $i);
            $lMethod    = $this->m_dom->getItem3("errors", "method", $i);
            $lPicto     = $this->m_dom->getItem3("errors", "picto", $i);
            $lText      = $this->m_dom->getItem3("errors", "text", $i);
            
            if($lCategory == "errors/button") {
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
