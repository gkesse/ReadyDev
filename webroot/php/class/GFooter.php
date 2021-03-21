<?php   
//===============================================
class GFooter extends GWidget {
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    // method
    //===============================================
    public function run() {
        $lApp = GManager::Instance()->getData()->app;
        //===============================================
        // script
        echo sprintf("<script type='text/javascript' src='%s'></script>\n", $lApp->manager_js);
        echo sprintf("<script type='text/javascript' src='%s'></script>\n", $lApp->request_js);
        //===============================================
        echo sprintf("</body>\n");
        echo sprintf("</html>\n");
    }
    //===============================================
}
//===============================================
?>