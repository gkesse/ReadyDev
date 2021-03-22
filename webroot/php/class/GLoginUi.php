<?php   
//===============================================
class GLoginUi extends GWidget {
    //===============================================
    private $m_widgetMap;
    private $m_req;
    //===============================================
    public function __construct() {
        $lApp = GManager::Instance()->getData()->app;
        $this->m_req = &$_SESSION["req_login"];
        //
        if(!isset($this->m_req)) {$this->m_req = "connect_account";}
        //
        $this->m_widgetMap = GWidget::Create("stackwidget");
        $this->m_widgetMap->addPage("connect_account", "loginpg", "Se connecter à un compte");
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
        $lTitle = $this->m_widgetMap->getTitle($this->m_req);
        echo sprintf("<div class='float title4'>%s</div>\n", $lTitle);
        $lMenuId = GManager::Instance()->getId();
        echo sprintf("<div>");
        echo sprintf("<div class='item menu2 float2 closest' id='%s'>\n", $lMenuId);
        echo sprintf("<button class='button' onclick='onItemClick(this, \"menu_click\", \"%s\")'><i class='fa fa-cog'></i> Actions</button>\n", $lMenuId);
        echo sprintf("<div class='menu6' style='min-width: 250px;'>\n");
        //
        echo sprintf("<form class='menu5' action='' method='post'>\n");
        echo sprintf("<button class='button4' type='submit' id='req' name='req' value='connect_account'>
        <i class='icon fa fa-book'></i> Se connecter à un compte</button>\n");
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
        // body
        echo sprintf("<div class='body4'>\n");
        $this->m_widgetMap->run2($this->m_req);
        echo sprintf("</div>\n");
        //
        echo sprintf("</div>\n");
    }
    //===============================================
    public function request() {
        $lApp = GManager::Instance()->getData()->app;
        if(isset($_POST["req"])) {
            $lReq = $_POST["req"];
            $this->m_req = $lReq;
        }
    }
    //===============================================
}
//===============================================
?>