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
        echo sprintf("<div class='login_id'>\n");
        echo sprintf("<div class='body'>\n");
        echo sprintf("<div class='profil'><i class='fa fa-user'></i></div>\n");
        GWidget::Create("spacev")->space(20);
        GWidget::Create("lineedit")->setContent5("username", "text", "user", "Nom d&#39;utilisateur", 200, "times", "Nom d&#39;utilisateur");
        GWidget::Create("spacev")->space(20);
        echo sprintf("<div class='connect'>\n");
        GWidget::Create("button")->run();
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>