<?php   
//===============================================
class GError extends GWidget {
    //===============================================
    private $datas = array();
    //===============================================
    public function __construct() {

    }
    //===============================================
    // method
    //===============================================
    public function run() {
        $lApp = GManager::Instance()->getData()->app;
        echo sprintf("<form action='' method='post'>\n");
        echo sprintf("<div class='box3'>\n");
        echo sprintf("<div class='body2'>\n");
        // profile
        echo sprintf("<div class='profile'><i class='fa fa-exclamation'></i></div>\n");
        // content
        echo sprintf("<div class='content'>\n");
        echo sprintf("Page non trouvée\n");
        echo sprintf("</div>\n");
        // button
        echo sprintf("<div class='right'>\n");
        echo sprintf("<a class='button' href='/home'>
        <i class='icon fa fa-home'></i> Accueil</a>\n");
        echo sprintf("</div>\n");
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</form>\n");
    }
    //===============================================
}
//===============================================
?>