<?php   
//===============================================
class GIcon extends GWidget {
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    // method
    //===============================================
    public function icon($icon, $href, $tooltip) {
        echo sprintf("<a href='%s'><div class='icon_id' title='%s'>
        <i class='fa fa-%s'></i>
        </div></a>\n", $href, $tooltip, $icon);
    }
    //===============================================
    public function icon2($icon, $action, $req, $tooltip) {
        echo sprintf("<div class='icon_id'>
        <form action='%s' method='post'>
        <input type='hidden' id='req' name='req' value='%s'/> 
        <button class='tooltip_id' type='submit' title='%s'><i class='fa fa-%s'></i></button>
        </form></div>\n", $action, $req, $tooltip, $icon);
    }
    //===============================================
}
//===============================================
?>