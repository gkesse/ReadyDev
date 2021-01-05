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
        $this->request();
        echo sprintf("<div class='debug_id'>\n");
        echo sprintf("<div class='header'>\n");
        echo sprintf("<div class='item'>
        <form action='' method='post'>
        <input type='hidden' name='req' value='clear'/> 
        <button type='submit'><i class='fa fa-trash'></i></button>
        </form></div>\n");
        echo sprintf("<div class='item'>
        <form action='' method='post'>
        <input type='hidden' name='req' value='clear'/> 
        <button type='submit'><i class='fa fa-trash'></i></button>
        </form></div>\n");
        echo sprintf("</div>\n");
        echo sprintf("<div id='debug' class='body'>\n");
        echo sprintf("%s\n", $lApp->debug);
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function request() {
        $lApp = GManager::Instance()->getData()->app;
        if(isset($_REQUEST["req"])) {
            $lReq = $_REQUEST["req"];
            if($lReq = "clear") {
                $lApp->debug = "";
            }
        }
    }
    //===============================================
}
//===============================================
?>