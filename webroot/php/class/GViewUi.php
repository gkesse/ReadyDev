<?php
//===============================================
class GViewUi extends GWidget {
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    // method
    //===============================================
    public function run() {
        $lView = GView::Instance()->getView();
        echo sprintf("<div class='box2'>\n");
        echo sprintf("<div id='view_date' class='float date'>29/10/2021</div>\n");
        echo sprintf("<div class='float view'><div class='view2'>$lView</div></div>\n");
        echo sprintf("<div id='view_time' class='float time' onclick='onItemClick(this, \"view_get_datetime\")'>00:00:00</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>