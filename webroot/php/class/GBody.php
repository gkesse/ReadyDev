<?php   
//===============================================
class GBody extends GWidget {
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    // method
    //===============================================
    public function run() {
        $lApp = GManager::Instance()->getData()->app;
        // body
        echo sprintf("<div class='html'>\n");
        echo sprintf("<div class='body'>\n");
        echo sprintf("<div class='main'>\n");
        //
        GWidget::Create("titlebar")->run();
        GWidget::Create("view")->run();
        //GWidget::Create("network")->run();
        GWidget::Create("addresskey")->run();
        $lApp->win->run();
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>