<?php   
//===============================================
class GSpaceH extends GWidget {
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    // method
    //===============================================
    public function space($size) {
        echo sprintf("<div class='space_id' style='display:inline-block;padding-left:%dpx;'></div>\n", $size);
    }
    //===============================================
}
//===============================================
?>