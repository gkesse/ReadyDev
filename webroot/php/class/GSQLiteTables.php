<?php   
//===============================================
class GSQLiteTables extends GWidget {
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    // method
    //===============================================
    public function run() {
        $this->request();
        //
        $lTables = gSQLite::Instance()->queryCol("
        select name from sqlite_master
        where type='table'
        order by name
        ");
        echo sprintf("<div class=''>\n");
        for($i = 0; $i < count($lTables); $i++) {
            $lTable = $lTables[$i];
            $lTableUpper = strtoupper($lTable);
            $lTableLower = strtolower($lTable);
            //
            echo sprintf("<div class='button2 float2 row2'>\n");
            //
            echo sprintf("<div class='menu'>\n");
            echo sprintf("<div class='menu2'>\n");
            echo sprintf("<i class='menu3 fa fa-cog'></i>\n");
            echo sprintf("<div class='menu4'>\n");
            //
            echo sprintf("<form class='menu5' action='' method='post'>\n");
            echo sprintf("<input type='hidden' name='table' value='%s'/>\n", $lTableLower);
            echo sprintf("<button class='button4' type='submit' name='req' value='show_table'>
            <i class='icon fa fa-book'></i> Afficher les données</button>\n", $lTableLower);
            echo sprintf("</form>\n");
            //
            echo sprintf("<form class='menu5' action='' method='post'>\n");
            echo sprintf("<input type='hidden' name='table' value='%s'/>\n", $lTableLower);
            echo sprintf("<button class='button4' type='submit' name='req' value='show_schema'>
            <i class='icon fa fa-book'></i> Afficher le schema</button>\n", $lTableLower);
            echo sprintf("</form>\n");
            //
            echo sprintf("<form class='menu5' action='' method='post'>\n");
            echo sprintf("<input type='hidden' name='table' value='%s'/>\n", $lTableLower);
            echo sprintf("<button class='button4' type='submit' name='req' value='drop_table'>
            <i class='icon fa fa-book'></i> Supprimer la table</button>\n", $lTableLower);
            echo sprintf("</form>\n");
            //
            echo sprintf("</div>\n");
            echo sprintf("</div>\n");
            echo sprintf("</div>\n");
            //
            echo sprintf("<form class='float button3' action='' method='post'>\n");
            echo sprintf("<input type='hidden' name='table' value='%s'/>\n", $lTableLower);
            echo sprintf("<button class='button4' type='submit' name='req' value='show_table'>
            <i class='icon fa fa-database'></i> %s</button>\n", $lTableLower);
            echo sprintf("</form>\n");
            //
            echo sprintf("</div>\n");
        }
        echo sprintf("</div>\n");
    }
    //===============================================
    public function request() {
        $lApp = GManager::Instance()->getData()->app;
        if(isset($_POST["req"])) {
            $lReq = $_POST["req"];
            if($lReq == "") {

            }
        }
    }
    //===============================================
}
//===============================================
?>