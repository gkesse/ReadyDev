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
        GWidget::Create("listbox")->addItem("/home/sqlite", "SQLite");
        GWidget::Create("listbox")->addItem("/home/opencv", "OpenCV");
        GWidget::Create("listbox")->addItem("/home/debug", "Debug");
        GWidget::Create("listbox")->end();
    }
    //===============================================
}
//===============================================
?>