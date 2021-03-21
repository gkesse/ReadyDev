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
        
        echo sprintf("<div class='margin'>\n");
        
        for($i = 0; $i < count($lMap); $i++) {
            if($i != 0) {
                echo sprintf("<i class='sep fa fa-chevron-right'></i>\n");
            }
            $lKey = $lMap[$i];
            if($i != 0) {$lHref .= "/";}
            $lHref .= $lKey;
            echo sprintf("<a class='' href='%s'>%s</a>\n", $lHref, $lKey);
        }
        
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>