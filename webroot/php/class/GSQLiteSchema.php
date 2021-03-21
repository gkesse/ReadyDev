<?php   
//===============================================
class GSQLiteSchema extends GWidget {
    //===============================================
    private $m_tableName;
    //===============================================
    public function __construct() {
        $this->m_tableName = &$_SESSION["sqlite_table_table_name"];
    }
    //===============================================
    // method
    //===============================================
    public function run() {
        $this->request();
        //
        $lSchema = "";
        if($this->m_tableName != "") {
            $lSchema = GSQLite::Instance()->queryValue(sprintf("
            select sql from sqlite_master
            where name = '%s'
            ", $this->m_tableName));
        }
        //
        echo sprintf("<div class=''>\n");
        // 
        echo sprintf("<pre class='output'>%s</pre>\n", $lSchema);
        //
        echo sprintf("</div>\n");
    }
    //===============================================
    public function request() {
        $lApp = GManager::Instance()->getData()->app;
        if(isset($_POST["table"])) {
            $this->m_tableName = $_POST["table"];
        }
    }
    //===============================================
}
//===============================================
?>