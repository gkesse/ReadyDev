<?php   
//===============================================
class GMessage extends GWidget {
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
        if($lApp->message == "") {$lApp->message = sprintf("Vous n'êtes pas connectés");}
        echo sprintf("<form action='' method='post'>\n");
        echo sprintf("<div class='box3'>\n");
        echo sprintf("<div class='body2'>\n");
        // profile
        echo sprintf("<div class='profile'><i class='fa fa-comments-o'></i></div>\n");
        // content
        echo sprintf("<div class='content'>\n");
        echo sprintf("%s\n", $lApp->message);
        echo sprintf("</div>\n");
        // button
        echo sprintf("<div class='right'>\n");
        echo sprintf("<a class='button' href='/home'>
        <i class='icon fa fa-comments'></i> Ok</a>\n");
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