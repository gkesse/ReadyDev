<?php   
//===============================================
class GDebug extends GWidget {
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    // method
    //===============================================
    public function run() {
        $lApp = GManager::Instance()->getData()->app;
        GSQLite::Instance()->test();
        $this->request();
        echo sprintf("<div class=''>\n");
        echo sprintf("<div class='header right'>\n");
        //
        echo sprintf("<form class='icon4' action='' method='post'>\n");
        echo sprintf("<input type='hidden' id='req' name='req' value='clear'/>\n"); 
        echo sprintf("<button class='tooltip_id' type='submit' title='Nettoyer'><i class='fa fa-trash-o'></i></button>\n");
        echo sprintf("</form>\n");        
        //
        echo sprintf("</div>\n");
        echo sprintf("<div class='debug'>\n");
        echo sprintf("%s\n", $lApp->debug);
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function request() {
        $lApp = GManager::Instance()->getData()->app;
        if(isset($_POST["req"])) {
            $lReq = $_POST["req"];
            if($lReq == "clear") {
                $lApp->debug = "";
            }
        }
    }
    //===============================================
}
//===============================================
?>