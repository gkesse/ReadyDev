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
        echo sprintf("<div class='login_id'>\n");
        echo sprintf("<div class='body'>\n");
        echo sprintf("<div class='profil'><i class='fa fa-user'></i></div>\n");
        GWidget::Create("spacev")->space(20);
        GWidget::Create("lineedit")->lineEdit8("username", "text", "user", "Nom d&#39;utilisateur", 200, "times");
        GWidget::Create("spacev")->space(20);
        GWidget::Create("lineedit")->setIcon("password", "password", "key", "Mot de passe");
        GWidget::Create("spacev")->space(20);
        echo sprintf("<div class='connect'>\n");
        GWidget::Create("button")->setText2("Annuler", "times", $lApp->last_url);
        GWidget::Create("spaceh")->space(5);
        GWidget::Create("button")->setText2("Se Connecter", "paper-plane-o", "");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>