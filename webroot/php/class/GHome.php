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
        $this->start();
        GWidget::Create("listbox")->start();
        GWidget::Create("listbox")->addItem("/home/login", "Connexion", "user");
        GWidget::Create("listbox")->addItem("/home/sqlite", "SQLite", "database");
        GWidget::Create("listbox")->addItem("/home/opencv", "OpenCV", "camera");
        GWidget::Create("listbox")->addItem("/home/debug", "Debug", "file-text-o");
        GWidget::Create("listbox")->end();
        $this->end();
    }
    //===============================================
    public function start() {
        echo sprintf("<div class='home_id'>\n");
    }
    //===============================================
    public function end() {
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>