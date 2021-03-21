<?php   
//===============================================
class GWindow extends GWidget {
    //===============================================
    public function __construct() {
        $lApp = GManager::Instance()->getData()->app;
        //
        $lApp->page_map = GWidget::Create("stackwidget");
        //
        $lLogin = "Connexion";
        $lLoginUrl = "home/login";
        if($lApp->login_on == "on") {
            $lLogin = "Déconnexion";
            $lLoginUrl = "home/logout";
        }
        //
        $lApp->page_map->addPage("home", "home", "Accueil");
        $lApp->page_map->addPage($lLoginUrl, "login", $lLogin);
        $lApp->page_map->addPage("home/users", "user", "Utilisateurs");
        $lApp->page_map->addPage("home/profile", "profile", "Profil");
        //
        $lApp->page_map->addPage("home/sqlite", "sqlite", "SQLite");
        //
        $lApp->page_map->addPage("home/timesheet", "timesheet", "Feuille de temps");
        $lApp->page_map->addPage("home/filesystem", "filesystem", "Filesystem");
        //
        $lApp->page_map->addPage("home/debug", "debug", "Debug");
        $lApp->page_map->addPage("home/message", "message", "Message");
    }
    //===============================================
    // method
    //===============================================
    public function run() {
        $lApp = GManager::Instance()->getData()->app;
        echo sprintf("<div class='window'>\n");
        $lApp->page_map->run2($lApp->page_id);
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>