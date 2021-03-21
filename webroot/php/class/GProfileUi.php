<?php   
//===============================================
class GProfileUi extends GWidget {
    //===============================================
    private $m_msgFlag = "off";
    private $m_msgText = "La création du profil a réussi";
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    // method
    //===============================================
    public function run() {
        $lApp = GManager::Instance()->getData()->app;
        //
        $this->request();
        //
        $lUserFullname = GProfile::Instance()->getData("user_fullname");
        $lUserManager = GProfile::Instance()->getData("user_manager");
        $lClientName = GProfile::Instance()->getData("client_name");
        $lClientAddress = GProfile::Instance()->getData("client_address");
        //
        echo sprintf("<form action='' method='post'>\n");
        echo sprintf("<div class=''>\n");
        echo sprintf("<div class='content2'>\n");
        echo sprintf("<div class='item2 title2'>%s</div>\n", $lApp->user_name);
        echo sprintf("<input type='hidden' id='user_name' name='user_name' value='%s'/>", $lApp->user_name);
        // profile
        echo sprintf("<div class='item2'>\n");
        echo sprintf("<div class='center'>\n");
        echo sprintf("<div class='profile2'><i class='icon3 fa fa-user'></i></div>\n");
        echo sprintf("</div>\n");
        //
        if($this->m_msgFlag == "on") {
            echo sprintf("<div class='success'>%s</div>\n", $this->m_msgText);
        }
        //
        echo sprintf("<div class='row'>\n");
        echo sprintf("<div class='key'><label class='label2' for='user_fullname'>Collaborateur :</label></div>\n");
        echo sprintf("<div class='field2'><input class='input2' type='text' value='%s' id='user_fullname' name='user_fullname' placeholder='Gérard KESSE' required/></div>\n", $lUserFullname);
        echo sprintf("</div>\n");
        //
        echo sprintf("<div class='row'>\n");
        echo sprintf("<div class='key'><label class='label2' for='user_manager'>Manager :</label></div>\n");
        echo sprintf("<div class='field2'><input class='input2' type='text' value='%s' id='user_manager' name='user_manager' placeholder='Yvon MOUTSINGA' required/></div>\n", $lUserManager);
        echo sprintf("</div>\n");
        //
        echo sprintf("<div class='row'>\n");
        echo sprintf("<div class='key'><label class='label2' for='client_name'>Client :</label></div>\n");
        echo sprintf("<div class='field2'><input class='input2' type='text' value='%s' id='client_name' name='client_name' placeholder='PMC Carrus Groupe' required/></div>\n", $lClientName);
        echo sprintf("</div>\n");
        //
        echo sprintf("<div class='row'>\n");
        echo sprintf("<div class='key'><label class='label2' for='client_address'>Adresse :</label></div>\n");
        echo sprintf("<div class='field2'><input class='input2' type='text' value='%s' id='client_address' name='client_address' placeholder='56 Avenue Raspail, 94100 Saint-Maur-des-Fossés' required/></div>\n", $lClientAddress);
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        // button
        echo sprintf("<div class='item2 right'>\n");
        echo sprintf("<a class='button' href='/home'>
        <i class='icon fa fa-times'></i> Annuler</a>\n");
        echo sprintf("<button class='button' type='submit' id='req' name='req' value='save'>
        <i class='icon fa fa-address-book-o'></i> Sauvegarder</button>\n");
        echo sprintf("</div>\n");
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</form>\n");
    }
    //===============================================
    public function request() {
        $lApp = GManager::Instance()->getData()->app;
        if(isset($_POST["req"])) {
            $lReq = $_POST["req"];
            if($lReq == "save") {
                GManager::Instance()->loginOn();
                $lCount = GProfile::Instance()->countProfile();
                $this->m_msgFlag = "on";
                if($lCount > 0) {$this->m_msgText = "La modification du profil a réussi";}
                GProfile::Instance()->createProfile($_POST);
            }
        }
    }
    //===============================================
}
//===============================================
?>