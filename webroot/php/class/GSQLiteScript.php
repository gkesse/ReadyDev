<?php   
//===============================================
class GSQLiteScript extends GWidget {
    //===============================================
    private $m_widgetMap;
    private $m_req = "execute_sql";
    private $m_action = "write_query";
    //===============================================
    public function __construct() {
        $this->m_widgetMap = GWidget::Create("stackwidget");
        $this->m_widgetMap->addPage("write_query", "sqlitequery", "Saisir une requête");
        $this->m_widgetMap->addPage("run_query", "sqliteoutput", "Résultat de l'exécution");
    }
    //===============================================
    // method
    //===============================================
    public function run() {
        $this->request();
        // header
        echo sprintf("<div class=''>\n");
        // 
        echo sprintf("<div class='header2'>\n");
        echo sprintf("<div class='item menu2 float2'>\n");
        echo sprintf("<button class='button'><i class='fa fa-cog'></i> Paramètres</button>\n");
        echo sprintf("<div class='menu6' style='min-width: 250px;'>\n");
        //
        echo sprintf("<form class='menu5' action='' method='post'>\n");
        echo sprintf("<input type='hidden' id='req' name='req' value='%s'/>\n", $this->m_req);
        echo sprintf("<button class='button4' type='submit' id='action' name='action' value='write_query'>
        <i class='icon fa fa-book'></i> Saisir une requête</button>\n");
        echo sprintf("</form>\n");
        //
        echo sprintf("<form id='run_query' class='menu5' action='' method='post'>\n");
        echo sprintf("<input type='hidden' id='req' name='req' value='%s'/>\n", $this->m_req);
        echo sprintf("<button class='button4' type='submit' id='action' name='action' value='run_query'>
        <i class='icon fa fa-book'></i> Exécuter une requête</button>\n");
        echo sprintf("</form>\n");
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        // body
        echo sprintf("<div class='body4'>\n");
        $this->m_widgetMap->run2($this->m_action);
        echo sprintf("</div>\n");
        //
        echo sprintf("</div>\n");
    }
    //===============================================
    public function request() {
        $lApp = GManager::Instance()->getData()->app;
        if(isset($_POST["action"])) {
            $lAction = $_POST["action"];
            $this->m_action = $lAction;
            if($lAction == "") {

            }
        }
    }
    //===============================================
}
//===============================================
?>