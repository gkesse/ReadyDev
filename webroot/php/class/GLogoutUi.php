<?php   
//===============================================
class GLogoutUi extends GWidget {
    //===============================================
    public function __construct() {

    }
    //===============================================
    // method
    //===============================================
    public function run() {
        $lApp = GManager::Instance()->getData()->app;
        $this->request();
        // 
        echo sprintf("<form action='' method='post'>\n");
        echo sprintf("<div class='box3'>\n");
        //
        echo sprintf("<div class='center'>\n");
        echo sprintf("<a class='button' href='%s'><i class='icon fa fa-times'></i> Annuler</a>\n", $lApp->last_url);
        echo sprintf("<button class='button' type='submit' id='req' name='req' value='disconnect_account'>
        <i class='icon fa fa-power-off'></i> Se Déconnecter</button>\n");
        echo sprintf("</div>\n");
        //
        echo sprintf("</div>\n");
        echo sprintf("</form>\n");
    }
    //===============================================
    public function request() {
        $lApp = GManager::Instance()->getData()->app;
        if(isset($_POST["req"])) {
            $lReq = $_POST["req"];
            if($lReq == "disconnect_account") {
                $lApp->login_on = "off";
                GManager::Instance()->clearSession();
                GManager::Instance()->redirect($lApp->last_url);
            }
        }
    }
    //===============================================
}
//===============================================
?>