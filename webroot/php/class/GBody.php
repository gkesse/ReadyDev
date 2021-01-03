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
        $lWindow = GWidget::Create("window");
        $lWindow->load();
        $lWindow->start();
        // body
        $this->start();
        GWidget::Create("titlebar")->run();
        GWidget::Create("spacev")->space(10);
        GWidget::Create("addresskey")->run();
        GWidget::Create("spacev")->space(10);
        $lWindow->run();
        $this->end();
    }
    //===============================================
    public function start() {
        echo sprintf("<div class='body'>\n");
    }
    //===============================================
    public function end() {
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>