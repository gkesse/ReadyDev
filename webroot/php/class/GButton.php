<?php   
//===============================================
class GButton extends GWidget {
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    // method
    //===============================================
    public function setText($text, $onClick) {
        echo sprintf("<div class='button_id'>\n");
        echo sprintf("<button type='button' onclick='%s'>%s</button>\n", $onClick, $text);
        echo sprintf("</div>\n");
    }
    //===============================================
    public function setText2($text, $icon, $callback) {
        echo sprintf("<a href='%s'><div class='button_id'>\n", $callback);
        echo sprintf("<button type='button'><i class='fa fa-%s'></i> %s</button>\n", $icon, $text);
        echo sprintf("</div></a>\n");
    }
    //===============================================
    public function setIcon3($icon, $onClick) {
        echo sprintf("<div class='button_id'>\n");
        echo sprintf("<button type='button' onclick='%s'><i class='fa fa-%s'></i></button>\n", $onClick, $icon);
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>