<?php   
//===============================================
class GLogin extends GWidget {
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    // method
    //===============================================
    public function run() {
        $lApp = GManager::Instance()->getData()->app;
        $this->request();
        GWidget::Create("form")->form("");
        echo sprintf("<div class='login_id'>\n");
        echo sprintf("<div class='body'>\n");
        echo sprintf("<div class='profil'><i class='fa fa-user'></i></div>\n");
        GWidget::Create("spacev")->space(20);
        GWidget::Create("lineedit")->lineEdit2("username", "text", "user", "Nom d&#39;utilisateur");
        GWidget::Create("spacev")->space(20);
        GWidget::Create("lineedit")->lineEdit2("password", "password", "key", "Mot de passe");
        GWidget::Create("spacev")->space(20);
        echo sprintf("<div class='connect'>\n");
        GWidget::Create("button")->button2("Annuler", "times", $lApp->last_url);
        GWidget::Create("spaceh")->space(5);
        GWidget::Create("button")->button4("Se Connecter", "sign-in", "login");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        GWidget::Create("form")->end();
    }
    //===============================================
    public function request() {
        $lApp = GManager::Instance()->getData()->app;
        if(isset($_REQUEST["req"])) {
            $lReq = $_REQUEST["req"];
            if($lReq == "login") {
                GManager::Instance()->showData("Analyse de données de connection");
                GManager::Instance()->redirect("/home/debug");
            }
        }
    }
    //===============================================
}
//===============================================
?>