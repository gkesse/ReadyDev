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
        // default
        return new GWidget();
    }
    //===============================================
    // method
    //===============================================
    public function run() {
        echo sprintf("<h1>GWidget</h1>");
    }
    //===============================================
}
//===============================================
?>