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
        echo sprintf("<div class='login'>\n");
        echo sprintf("<div class='content'>\n");
        echo sprintf("<div class='profil'><i class='fa fa-user'></i></div>\n");
        GWidget::Create("spacev")->space(20);
        GWidget::Create("lineedit")->setContent();
        echo sprintf("<div class='password'>password</div>\n");
        echo sprintf("<div class='connect'>connect</div>\n");
        echo sprintf("<div class='account'>account</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>