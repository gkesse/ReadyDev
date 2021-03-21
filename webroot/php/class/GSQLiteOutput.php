<?php   
//===============================================
class GSQLiteOutput extends GWidget {
    //===============================================
    private $m_query;
    private $m_output = "Aucun texte n'a été généré en sortie";
    //===============================================
    public function __construct() {
        $this->m_query = &$_SESSION["sqlite_query"];
    }
    //===============================================
    // method
    //===============================================
    public function run() {
        $this->request();
        //
        echo sprintf("<div class=''>\n");
        // 
        echo sprintf("<pre class='output'>%s</pre>\n", $this->m_output);
        //
        echo sprintf("</div>\n");
    }
    //===============================================
    public function request() {
        $lApp = GManager::Instance()->getData()->app;
        if(isset($_POST["action"])) {
            $lAction = $_POST["action"];
            if($lAction == "run_query") {
                GManager::Instance()->loginOn();
                $lOutput = "";
                if(isset($_POST["query"])) {
                    $lQuery = $_POST["query"];
                    if($lQuery != "") {
                        $lFormat = "";
                        $lFormat .= sprintf("%s %s \"%s\"", $lApp->sqlite_bin, $lApp->sqlite_db_path2, $lQuery);
                        $lOutput = shell_exec($lFormat);
                    }
                    $this->m_query = $lQuery;
                }
                if($lOutput != "") {$this->m_output = $lOutput;}
            }
        }
    }
    //===============================================
}
//===============================================
?>