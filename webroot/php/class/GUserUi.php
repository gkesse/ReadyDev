<?php   
//===============================================
class GUserUi extends GWidget {
    //===============================================
    private $datas = array();
    //===============================================
    public function __construct() {
        $this->datas["code"] = "";
        $this->datas["username"] = "";
        $this->datas["password"] = "";
        $this->datas["confirm"] = "";
    }
    //===============================================
    // method
    //===============================================
    public function run() {
        $lApp = GManager::Instance()->getData()->app;
        $this->request();
        echo sprintf("<form action='' method='post' enctype='multipart/form-data'>\n");
        echo sprintf("<div class='box3'>\n");
        //
        echo sprintf("<div class='body2'>\n");
        echo sprintf("<div class='profile'><i class='fa fa-user'></i></div>\n");
        //
        if($this->datas["code"] != "") {
            echo sprintf("<div class='%s'>\n", $this->datas["class"]);
            echo sprintf("%s\n", $this->datas["msg"]);
            echo sprintf("</div>\n");
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
        echo sprintf("<a class='button' href='/home'><i class='icon fa fa-times'></i> Annuler</a>\n");
        echo sprintf("<button class='button' type='submit' id='req' name='req' value='create'>
        <i class='icon fa fa-user'></i> Créer</button>\n");
        //
        echo sprintf("</div>\n");
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
            if($lReq == "create") {
                GManager::Instance()->loginOn();
                GManager::Instance()->loginRoot();
                $lUsername = $_POST["username"];
                $lPassword = $_POST["password"];
                $lConfirm = $_POST["confirm"];
                //
                $this->datas["username"] = $_POST["username"];
                $this->datas["password"] = $_POST["password"];
                $this->datas["confirm"] = $_POST["confirm"];
                //
                if($lPassword != $lConfirm) {
                    $this->datas["code"] = "msg";
                    $this->datas["class"] = "error";
                    $this->datas["msg"] = "Les mots de passe sont différents";
                }
                else {
                    $lCount = GUser::Instance()->countUser($lUsername);
                    if($lCount > 0) {
                        $this->datas["code"] = "msg";
                        $this->datas["class"] = "error";
                        $this->datas["msg"] = "Ce nom d'utilisateur existe déjà";
                    }
                    else {
                        GUser::Instance()->createUser($lUsername, $lPassword);
                        $this->datas["code"] = "msg";
                        $this->datas["class"] = "success";
                        $this->datas["msg"] = "L'utilisateur a été ajouté avec succès";
                    }
                }
                
            }
        }
    }
    //===============================================
}
//===============================================
?>