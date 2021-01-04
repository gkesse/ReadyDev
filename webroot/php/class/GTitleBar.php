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
        echo sprintf("<div class='titlebar_id'>\n");
        echo sprintf("<div class='logo'><img src='/webroot/data/img/logo_flat.png'/></div>\n");
        echo sprintf("<div class='app_name'>%s</div>\n", $lApp->app_name);
        echo sprintf("<div class='title'>%s</div>\n", $lApp->title);
        echo sprintf("<div class='login tooltip_id'><i class='fa fa-user'></i>
        <span class='tooltiptext'>Connexion</span></div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>