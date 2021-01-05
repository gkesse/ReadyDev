<?php   
//===============================================
class GForm extends GWidget {
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    // method
    //===============================================
    public function form($action) {
        echo sprintf("<form action='%s' method='post' enctype='multipart/form-data'>\n", $action);
    }
    //===============================================
    public function end() {
        echo sprintf("</form>\n");
    }
    //===============================================
}
//===============================================
?>