<?php
class GPageUi extends GPage {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function notFound() {
        $lMsg = "<i class='NotFoundPicto fa fa-exclamation-triangle'></i> PAGE NON TROUVEE";
        echo sprintf("<div id='NotFoundBox' class='NotFound'>\n");
        echo sprintf("<div class='ErrorsClose' onclick='server_call(\"page\", \"close_notfound\", this);'><i class='ErrorsCloseFa fa fa-times'></i></div>\n");
        echo sprintf("<div class='NotFoundMain'>%s<br>%s</div>\n", $lMsg, $this->m_pageId);
        echo sprintf("</div>\n");        
    }
    //===============================================
}
?>
