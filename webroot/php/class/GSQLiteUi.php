<?php   
//===============================================
class GSQLiteUi extends GWidget {
    //===============================================
    private $m_widgetMap;
    private $m_req;
    //===============================================
    public function __construct() {
        $this->m_req = &$_SESSION["req_sqlite"];
        //
        if(!isset($this->m_req)) {$this->m_req = "show_tables";}
        //
        $this->m_widgetMap = GWidget::Create("stackwidget");
        $this->m_widgetMap->addPage("show_tables", "sqlitetables", "Afficher les tables");
        $this->m_widgetMap->addPage("show_table", "sqlitetable", "Afficher une table");
        $this->m_widgetMap->addPage("show_schema", "sqliteschema", "Afficher une table");
        $this->m_widgetMap->addPage("execute_sql", "sqlitescript", "Exécuter une requête sql");
    }
    //===============================================
    // method
    //===============================================
    public function run() {
        $this->request();
        // 
        echo sprintf("<div class=''>\n");
        // header
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
        echo sprintf("<button class='button4' type='submit' id='req' name='req' value='show_tables'>
        <i class='icon fa fa-book'></i> Afficher les tables</button>\n");
        echo sprintf("</form>\n");
        //
        echo sprintf("<form class='menu5' action='' method='post'>\n");
        echo sprintf("<button class='button4' type='submit' id='req' name='req' value='execute_sql'>
        <i class='icon fa fa-book'></i> Exécuter une requête sql</button>\n");
        echo sprintf("</form>\n");
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
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
            if($lReq == "drop_table") {
                $lTable = $_POST["table"];
                GManager::Instance()->loginRoot();
                GSQLite::Instance()->queryWrite(sprintf("
                drop table if exists %s
                ", $lTable));
                $this->m_req = "show_tables";
            }
        }
    }
    //===============================================
}
//===============================================
?>