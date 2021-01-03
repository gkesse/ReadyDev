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
        echo sprintf("<div class='item' onclick='onItemClick(this, \"debug_clear\");'>
        <div class='tooltip'><i class='fa fa-trash'></i>
        <span class='tooltiptext'>Nettoyer</span></div>
        </div>\n");
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