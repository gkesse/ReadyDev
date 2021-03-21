<?php   
//===============================================
class GAddressKey extends GWidget {
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    // method
    //===============================================
    public function run() {
        $lApp = GManager::Instance()->getData()->app;
        $lMap = explode("/", $lApp->page_id);
        $lHref = "/";
        
        echo sprintf("<div class='addresskey_id'>\n");
        
        for($i = 0; $i < count($lMap); $i++) {
            if($i != 0) {
                echo sprintf("<i class='fa fa-chevron-right' style='font-size:16px;padding:0px 5px;'></i>\n");
            }
            $lKey = $lMap[$i];
            if($i != 0) {$lHref .= "/";}
            $lHref .= $lKey;
            echo sprintf("<a href='%s'><div style='display: inline-block;'>%s</div></a>\n", $lHref, $lKey);
        }
        
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>