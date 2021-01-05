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
        echo sprintf("<a href='%s'><div class='icon_id tooltip_id'>
        <i class='fa fa-%s'></i><span class='tooltiptext'>%s</span>
        </div></a>\n", $href, $icon, $tooltip);
    }
    //===============================================
    public function icon2($icon, $action, $req, $tooltip) {
        echo sprintf("<div class='icon_id'>
        <form action='%s' method='post'>
        <input type='hidden' name='req' value='%s'/> 
        <button class='tooltip_id' type='submit'><i class='fa fa-%s'></i>
        <span class='tooltiptext'>%s</span></button>
        </form></div>\n", $action, $req, $icon, $tooltip);
    }
    //===============================================
}
//===============================================
?>