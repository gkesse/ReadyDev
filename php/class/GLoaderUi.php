<?php   
//===============================================
class GLoaderUi extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->loadDom(__CLASS__);
    }
    //===============================================
    public function run() {
        $lModalId       = $this->m_dom->getItem("loader", "modal_id");
        $lTitle         = $this->m_dom->getItem("loader", "title");
        $lBodyId        = $this->m_dom->getItem("loader", "body_id");
        $lFormId        = $this->m_dom->getItem("loader", "form_id");
        //
        echo sprintf("<div class='Modal' id='%s'>\n", $lModalId);
        echo sprintf("<div class='Content10' id='%s'>\n", $lBodyId);
        echo sprintf("<div class='Title5' hidden='true'>%s</div>\n", $lTitle);
        echo sprintf("<form class='Body4' id='%s' method='post'>\n", $lFormId);        
        echo sprintf("<div class='Content15'>");

        echo sprintf("<div class='Loader'>");
        echo sprintf("<div class='LoaderBody'>");
        echo sprintf("<div class='LoaderRing'></div>");
        echo sprintf("<span class='LoaderMsg'>Loading...</span>");
        echo sprintf("</div>");
        echo sprintf("</div>");
        
        echo sprintf("</div>");        
        echo sprintf("</form>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>
