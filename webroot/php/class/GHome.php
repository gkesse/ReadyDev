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
        GWidget::Create("listbox")->start();
        GWidget::Create("listbox")->addItem("/home/login", "Connexion", "user");
        GWidget::Create("listbox")->addItem("/home/sqlite", "SQLite", "database");
        GWidget::Create("listbox")->addItem("/home/opencv", "OpenCV", "camera");
        GWidget::Create("listbox")->addItem("/home/debug", "Debug", "file-text-o");
        GWidget::Create("listbox")->end();
    }
    //===============================================
}
//===============================================
?>