<?php   
//===============================================
class GAccountUi extends GWidget {
    //===============================================
    private $datas = array();
    //===============================================
    public function __construct() {
        $this->datas["username"] = "";
        $this->datas["password"] = "";
        $this->datas["confirm"] = "";
        $this->datas["info"] = false;
        $this->datas["msg"] = "";
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
        echo sprintf("<div class='body2'>\n");
        echo sprintf("<div class='profile'><i class='fa fa-user'></i></div>\n");
        //
        if($this->datas["info"] == true) {
            echo sprintf("%s\n", $this->datas["msg"]);
        }
        //
        echo sprintf("<div class='edit'>\n");
        echo sprintf("<label class='label' for='username'><i class='icon2 fa fa-user'></i></label>\n");
        echo sprintf("<div class='field'><input class='input' type='text' id='username' name='username' placeholder='Nom d&#39;utilisateur' value='%s' required/></div>\n", $this->datas["username"]);
        echo sprintf("</div>\n");
        //
        echo sprintf("<div class='edit'>\n");
        echo sprintf("<label class='label' for='password'><i class='icon2 fa fa-key'></i></label>\n");
        echo sprintf("<div class='field'><input class='input' type='password' id='password' name='password' placeholder='Mot de passe' value='%s' required/></div>\n", $this->datas["password"]);
        echo sprintf("</div>\n");
        //
        echo sprintf("<div class='edit'>\n");
        echo sprintf("<label class='label' for='password'><i class='icon2 fa fa-key'></i></label>\n");
        echo sprintf("<div class='field'><input class='input' type='password' id='confirm' name='confirm' placeholder='Confirmer le mot de passe' value='%s' required/></div>\n", $this->datas["confirm"]);
        echo sprintf("</div>\n");
        //
        echo sprintf("<div class='right'>\n");
        echo sprintf("<a class='button' href='%s'><i class='icon fa fa-times'></i> Annuler</a>\n", $lApp->last_url);
        echo sprintf("<input type='hidden' id='req' name='req' value='create_account'/>");
        echo sprintf("<button class='button' type='submit' id='action' name='action' value='account'>
        <i class='icon fa fa-plus'></i> Créer</button>\n");
        echo sprintf("</div>\n");
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</form>\n");
    }
    //===============================================
    public function request() {
        $lApp = GManager::Instance()->getData()->app;
        if(isset($_POST["action"])) {
            $lAction = $_POST["action"];
            if($lAction == "account") {
                $lUsername = $_POST["username"];
                $lPassword = $_POST["password"];
                $lConfirm = $_POST["confirm"];
                //
                $this->datas["username"] = $_POST["username"];
                $this->datas["password"] = $_POST["password"];
                $this->datas["confirm"] = $_POST["confirm"];
                //
                if($lPassword != $lConfirm) {
                    $this->datas["info"] = true;
                    $this->datas["msg"] .= sprintf("<div class='error'>\n");
                    $this->datas["msg"] .= sprintf("Les mots de passe sont différents\n");
                    $this->datas["msg"] .= sprintf("</div>\n");
                }
                else {
                    $lCount = GAccount::Instance()->countUser($lUsername);
                    if($lCount > 0) {
                        $this->datas["info"] = true;
                        $this->datas["msg"] .= sprintf("<div class='error'>\n");
                        $this->datas["msg"] .= sprintf("Ce nom d'utilisateur existe déjà\n");
                        $this->datas["msg"] .= sprintf("</div>\n");
                    }
                    else {
                        GAccount::Instance()->createUser($lUsername, $lPassword);
                        $this->datas["info"] = true;
                        $this->datas["msg"] .= sprintf("<div class='success'>\n");
                        $this->datas["msg"] .= sprintf("L'utilisateur a été ajouté avec succès\n");
                        $this->datas["msg"] .= sprintf("</div>\n");
                    }
                }
                
            }
        }
    }
    //===============================================
}
//===============================================
?>