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
        GWidget::Create("listbox")->addItem("/home/login", "Connexion", "book");
        GWidget::Create("listbox")->addItem("/home/sqlite", "SQLite", "book");
        GWidget::Create("listbox")->addItem("/home/opencv", "OpenCV", "book");
        GWidget::Create("listbox")->addItem("/home/debug", "Debug", "book");
        GWidget::Create("listbox")->end();
    }
    //===============================================
}
//===============================================
?>