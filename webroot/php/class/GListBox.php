<?php   
//===============================================
class GListBox extends GWidget {
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    // method
    //===============================================
    public function start() {
        echo sprintf("<div class='listbox'>\n");
    }
    //===============================================
    public function end() {
        echo sprintf("</div>\n");
    }
    //===============================================
    public function addItem($key, $text) {
        echo sprintf("<a href='%s'><div class='item'>%s</div></a>\n", $key, $text);
    }
    //===============================================
}
//===============================================
?>