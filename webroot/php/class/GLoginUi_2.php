<?php   
//===============================================
class GLoginUi extends GWidget {
    //===============================================
    private $m_widgetMap;
    private $m_req;
    //===============================================
    public function __construct() {
        $this->m_widgetMap = GWidget::Create("stackwidget");
        $this->m_widgetMap->addPage("connect_account", "loginpg", "Se Connecter");
        $this->m_widgetMap->addPage("create_account", "account", "Créer un compte");
    }
    //===============================================
    // method
    //===============================================
    public function run() {
        $lApp = GManager::Instance()->getData()->app;
        $this->request();
        // 
        echo sprintf("<div class=''>\n");
        // 
        echo sprintf("<div class='header2 float2'>\n");
        echo sprintf("<div class='float title4'>%s</div>\n", $this->m_title);
        $lMenuId = GManager::Instance()->getId();
        echo sprintf("<div>");
        echo sprintf("<div class='item menu2 float2 closest' id='%s'>\n", $lMenuId);
        echo sprintf("<button class='button' onclick='onItemClick(this, \"menu_click\", \"%s\")'><i class='fa fa-cog'></i> Actions</button>\n", $lMenuId);
        echo sprintf("<div class='menu6' style='min-width: 250px;'>\n");
        //
        echo sprintf("<form class='menu5' action='' method='post'>\n");
        echo sprintf("<button class='button4' type='submit' id='req' name='req' value='connect_account'>
        <i class='icon fa fa-book'></i> Se Connecter</button>\n");
        echo sprintf("</form>\n");
        //
        echo sprintf("<form class='menu5' action='' method='post'>\n");
        echo sprintf("<button class='button4' type='submit' id='req' name='req' value='create_account'>
        <i class='icon fa fa-book'></i> Créer un compte</button>\n");
        echo sprintf("</form>\n");
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        //
        echo sprintf("<form action='' method='post'>\n");
        echo sprintf("<div class='box3'>\n");
        //
        if($lApp->login_on != "on") {
            echo sprintf("<div class='body2'>\n");
            echo sprintf("<div class='profile'><i class='fa fa-user'></i></div>\n");
            //
            if($this->m_error == true) {
                echo sprintf("<div class='error'>\n");
                echo sprintf("Les identifiants sont incorrects\n");
                echo sprintf("</div>\n");
            }
            //
            echo sprintf("<div class='edit'>\n");
            echo sprintf("<label class='label' for='username'><i class='icon2 fa fa-user'></i></label>\n");
            echo sprintf("<div class='field'><input class='input' type='text' id='username' name='username' placeholder='Nom d&#39;utilisateur' required/></div>\n");
            echo sprintf("</div>\n");
            //
            echo sprintf("<div class='edit'>\n");
            echo sprintf("<label class='label' for='password'><i class='icon2 fa fa-key'></i></label>\n");
            echo sprintf("<div class='field'><input class='input' type='password' id='password' name='password' placeholder='Mot de passe' required/></div>\n");
            echo sprintf("</div>\n");
            //
            echo sprintf("<div class='right'>\n");
            echo sprintf("<a class='button' href='%s'><i class='icon fa fa-times'></i> Annuler</a>\n", $lApp->last_url);
            echo sprintf("<button class='button' type='submit' id='req' name='req' value='login'>
            <i class='icon fa fa-sign-in'></i> Se Connecter</button>\n");
            echo sprintf("</div>\n");
            //
            echo sprintf("</div>\n");
        }
        else {
            echo sprintf("<div class='center'>\n");
            echo sprintf("<a class='button' href='%s'><i class='icon fa fa-times'></i> Annuler</a>\n", $lApp->last_url);
            echo sprintf("<button class='button' type='submit' id='req' name='req' value='logout'>
            <i class='icon fa fa-sign-out'></i> Se Déconnecter</button>\n");
            echo sprintf("</div>\n");
        }
        //
        echo sprintf("</div>\n");
        echo sprintf("</form>\n");
    }
    //===============================================
    public function request() {
        $lApp = GManager::Instance()->getData()->app;
        if(isset($_POST["req"])) {
            $lReq = $_POST["req"];
            if($lReq == "login") {
                GLogin::Instance()->login();
                if($lApp->login_on == "off") {$this->m_error = true;}
            }
            else if($lReq == "logout") {
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