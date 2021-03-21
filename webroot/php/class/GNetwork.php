<?php
//===============================================
class GNetwork extends GWidget {
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    // method
    //===============================================
    public function run() {
        $lApp = GManager::Instance()->getData()->app;
        $lSummary = $this->getSummary();
        //
        echo sprintf("<div class='center margin3'>\n");
        //
        echo sprintf("<a href='http://www.facebook.com/sharer.php?u=%s' target='_blank'>\n", $lApp->full_url);
        echo sprintf("<div class='network margin2'><i class='fa fa-facebook'></i></div>\n");
        echo sprintf("</a>\n");
        //
        echo sprintf("<a href='https://www.linkedin.com/shareArticle?mini=true&url=%s&title=%s&summary=%s' target='_blank'>\n", $lApp->full_url, $lApp->title, $lSummary);
        echo sprintf("<div class='network'><i class='fa fa-linkedin'></i></div>\n");
        echo sprintf("</a>\n");
        //
        echo sprintf("</div>\n");
    }
     //===============================================
    public function getSummary() {
        $lApp = GManager::Instance()->getData()->app;
        $lSummary = $lApp->page_map->getSummary2($lApp->page_id);
        return $lSummary;
    }
   //===============================================
}
//===============================================
?>