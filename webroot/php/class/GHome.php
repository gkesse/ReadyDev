<?php   
//===============================================
class GHome extends GWidget {
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    // method
    //===============================================
    public function run() {
        $lApp = GManager::Instance()->getData()->app;
        $lApp->filesystem = ".";
        //
        echo sprintf("<div class=''>\n");
        if($lApp->login_on == "on") {$this->addItem("home/logout", "Déconnexion", "power-off");}
        else {$this->addItem("home/login", "Connexion", "user");}
        $this->addItem("/home/users", "Utilisateurs", "users");
        $this->addItem("/home/profile", "Profil", "address-book-o");
        $this->addItem("/home/sqlite", "SQLite", "database");
        $this->addItem("/home/timesheet", "Timesheet", "calendar");
        $this->addItem("/home/filesystem", "Filesystem", "hdd-o");
        //$this->addItem("/home/debug", "Debug", "file-text-o");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function addItem($key, $text, $icon) {
        echo sprintf("<a class='button2' href='%s'><i class='icon fa fa-%s'></i> %s</a>\n",
        $key, $icon, $text);
    }
    //===============================================
}
//===============================================
?>