<?php   
//===============================================
class GWidget {
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    public static function Create($key) {
        // widget
        if($key == "widget") {return new GWidget();}
        if($key == "header") {return new GHeader();}
        if($key == "body") {return new GBody();}
        if($key == "footer") {return new GFooter();}
        if($key == "listbox") {return new GListBox();}
        if($key == "addresskey") {return new GAddressKey();}
        if($key == "spacev") {return new GSpaceV();}
        if($key == "spaceh") {return new GSpaceH();}
        if($key == "stackwidget") {return new GStackWidget();}
        // page
        if($key == "window") {return new GWindow();}
        if($key == "home") {return new GHome();}
        // default
        return new GWidget();
    }
    //===============================================
    // method
    //===============================================
    public function run() {}
    public function load() {}
    public function start() {}
    public function end() {}
    public function space($size) {}
    //===============================================
    public function addItem($key, $text) {}
    public function addItem2($key, $text, $title) {}
    public function getPage($key) {return null;}
    public function getTitle($key) {return null;}
    //===============================================
}
//===============================================
?>