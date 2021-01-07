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
        echo sprintf("<a href='/'><div class='logo'><img src='%s'/></div>\n", $lApp->logo_flat);
        echo sprintf("<div class='app_name'>%s</div></a>\n", $lApp->app_name);
        echo sprintf("<div class='title'>%s</div>\n", $lApp->title);
        echo sprintf("<a href='/home/login'><div class='login' title='Connexion'>
        <i class='fa fa-user'></i></div></a>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>