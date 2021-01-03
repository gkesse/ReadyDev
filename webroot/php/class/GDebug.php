<?php   
//===============================================
class GDebug extends GWidget {
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    // method
    //===============================================
    public function run() {
        $lApp = GManager::Instance()->getData()->app;
        echo sprintf("<div class='debug'>\n");
        echo sprintf("<div class='header'>\n");
        //echo sprintf("<div class='item'>Clear</div>\n");
        //GWidget::Create("spaceh")->space(10);
        echo sprintf("<div class='item' onclick='onItemClick(this, \"debug_clear\");'>Clear</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("<div id='debug' class='body'>\n");
        echo sprintf("%s\n", $lApp->debug);
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>