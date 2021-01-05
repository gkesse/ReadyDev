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
        if($key == "titlebar") {return new GTitleBar();}
        if($key == "lineedit") {return new GLineEdit();}
        if($key == "button") {return new GButton();}
        if($key == "icon") {return new GIcon();}
        if($key == "form") {return new GForm();}
        // page
        if($key == "window") {return new GWindow();}
        if($key == "home") {return new GHome();}
        if($key == "login") {return new GLogin();}
        if($key == "sqlite") {return new GSQLiteUi();}
        if($key == "opencv") {return new GOpenCVUi();}
        if($key == "debug") {return new GDebug();}
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
    public function addItem($key, $text, $icon) {}
    public function addItem2($key, $text, $title) {}
    public function getPage($key) {return null;}
    public function getTitle($key) {return null;}
    public function lineEdit($id, $type, $holder) {}
    public function lineEdit2($id, $type, $icon, $holder) {}
    public function lineEdit3($id, $type, $icon, $goto, $holder) {}
    public function lineEdit4($id, $type, $icon, $goto, $holder) {}
    public function lineEdit5($id, $type, $label, $width) {}
    public function lineEdit6($id, $type, $icon, $label, $width) {}
    public function lineEdit7($id, $type, $icon, $label, $width, $goto) {}
    public function lineEdit8($id, $type, $icon, $label, $width, $goto) {}
    public function button($text, $href) {}
    public function button2($text, $icon, $href) {}
    public function button3($text, $req) {}
    public function button4($text, $icon, $req) {}
    public function icon($icon, $href, $tooltip) {}
    public function icon2($icon, $action, $req, $tooltip) {}
    public function form($action) {}
    //===============================================
}
//===============================================
?>