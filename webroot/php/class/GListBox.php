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
        echo sprintf("<div class='listbox_id'>\n");
    }
    //===============================================
    public function end() {
        echo sprintf("</div>\n");
    }
    //===============================================
    public function addItem($key, $text, $icon) {
        echo sprintf("<a href='%s'><div class='item'><i class='fa fa-%s'></i>\n", $key, $icon);
        GWidget::Create("spaceh")->space(3);
        echo sprintf("%s</div></a>\n", $text);
    }
    //===============================================
}
//===============================================
?>