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
        //
        $lLogin = "Connexion";
        $lLoginUrl = "/home/login";
        if($lApp->login_on == "on") {
            $lLogin = "Déconnexion";
            $lLoginUrl = "/home/logout";
        }
        //
        $lTitle = $lApp->page_map->getTitle($lApp->page_id);
        //
        echo sprintf("<div class='box margin'>\n");
        echo sprintf("<a href='/'><img class='float logo' src='%s'/>\n", $lApp->logo_flat);
        echo sprintf("<div class='float app_name'>%s</div></a>\n", $lApp->app_name);
        echo sprintf("<div class='float title'>%s</div>\n", $lTitle);
        echo sprintf("<a href='%s'><div class='float login' title='%s'>
        <i class='fa fa-user'></i></div></a>\n", $lLoginUrl, $lLogin);
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>