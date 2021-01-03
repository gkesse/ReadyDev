<?php   
//===============================================
class GTitleBar extends GWidget {
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    // method
    //===============================================
    public function run() {
        $lApp = GManager::Instance()->getData()->app;
        echo sprintf("<div class='titlebar'>\n");
        echo sprintf("<div class='left'><img src='/webroot/data/img/logo_flat.png'/></div>\n");
        echo sprintf("<div class='left app_name'>%s</div>\n", $lApp->app_name);
        echo sprintf("<div class='right'></div>\n");
        echo sprintf("<div class='center'>%s</div>\n", $lApp->title);
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>