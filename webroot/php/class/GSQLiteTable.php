<?php   
//===============================================
class GSQLiteTable extends GWidget {
    //===============================================
    private $m_req = "show_table";
    private $m_tableName;
    private $m_pageNumber;
    private $m_colMax;
    //===============================================
    public function __construct() {
        $this->m_tableName = &$_SESSION["sqlite_table_table_name"];
        $this->m_pageNumber = &$_SESSION["sqlite_table_page_number"];
        $this->m_colMax = &$_SESSION["sqlite_table_col_max"];
        //
        if(!isset($this->m_pageNumber)) {$this->m_pageNumber = 1;}
        if(!isset($this->m_colMax)) {$this->m_colMax = 20;}
    }
    //===============================================
    // method
    //===============================================
    public function run() {
        $lApp = GManager::Instance()->getData()->app;
        //
        $this->request();
        //
        $lDataMap = array();
        $lHeaders = array();
        //
        if($this->m_tableName != "") {
            $lOrder = $this->getOrder($this->m_tableName);
            $lDataMap = GSQLite::Instance()->queryMap(sprintf("
            select * from %s %s
            ", $this->m_tableName, $lOrder));
            $lHeaders = GSQLite::Instance()->getHeaders();
        }
        //
        $lTotal = count($lDataMap);
        $lMax = $this->m_colMax;
        $lPageMax = ceil($lTotal/$lMax);
        $lPage = $this->m_pageNumber;
        //
        if($lPage > $lPageMax) {$lPage = 1;}
        //
        echo sprintf("<div class='header2 left overflow'>\n");
        //
        echo sprintf("<div class='item7 margin2'>\n");
        echo sprintf("<div class='item'>Total : </div>\n");
        echo sprintf("<div class='item'>%d</div>\n", $lTotal);
        echo sprintf("</div>\n");
        //
        echo sprintf("<form id='sqlite_table_page_number_form' class='item7 margin2' action='' method='post'>\n");
        echo sprintf("<div class='item'>Page : </div>\n");
        echo sprintf("<input type='hidden' name='req' value='%s'/>\n", $this->m_req);
        echo sprintf("<input type='hidden' name='action' value='page_number'/>\n");
        echo sprintf("<input style='min-width: 30px;' class='item' type='number' name='page' value='%d' min='1' max='%d' maxlength='6' size='6' 
        onchange='onItemClick(this, \"sqlite_table_page_number\")'/>\n", $lPage, $lPageMax);
        echo sprintf("<div class='item'> / %d</div>\n", $lPageMax);
        echo sprintf("</form>\n");
        //
        echo sprintf("<form id='sqlite_table_col_max_form' class='item7' action='' method='post'>\n");
        echo sprintf("<div class='item'>Max : </div>\n");
        echo sprintf("<input type='hidden' name='req' value='%s'/>\n", $this->m_req);
        echo sprintf("<input type='hidden' name='action' value='col_max'/>\n");
        echo sprintf("<input style='min-width: 30px;' class='item' type='number' name='page' value='%d' min='10' max='50' maxlength='6' size='6' step='10'
        onchange='onItemClick(this, \"sqlite_table_col_max\")'/>\n", $lMax);
        echo sprintf("</form>\n");
        //
        echo sprintf("</div>\n");
        //
        echo sprintf("<div class='overflow left'>\n");
        echo sprintf("<div class='box5'>\n");
        echo sprintf("<div class='title3'>%s</div>\n", $this->m_tableName);
        echo sprintf("<table>\n");
        echo sprintf("<thead>\n");
        echo sprintf("<tr>\n");
        for($i = 0; $i < count($lHeaders); $i++) {
            $lHeader = $lHeaders[$i];
            echo sprintf("<th>%s</th>\n", $lHeader);
        }
        echo sprintf("</tr>\n");
        echo sprintf("</thead>\n");
        echo sprintf("<tbody>\n");
        for($i = 0; $i < $lMax; $i++) {
            $lIndex = ($lPage - 1)*$lMax + $i;
            if($lIndex >= $lTotal) {break;}
            $lDataRow = $lDataMap[$lIndex];
            echo sprintf("<tr>\n");
            for($j = 0; $j < count($lDataRow); $j++) {
                $lData = $lDataRow[$j];
                echo sprintf("<td>%s</td>\n", $lData);
            }
            echo sprintf("</tr>\n");
        }
        echo sprintf("</tbody>\n");
        echo sprintf("</table>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function request() {
        $lApp = GManager::Instance()->getData()->app;
        if(isset($_POST["action"])) {
            $lAction = $_POST["action"];
            if($lAction == "page_number") {
                $this->m_pageNumber = $_POST["page"];
            }
            else if($lAction == "col_max") {
                $this->m_colMax = $_POST["page"];
            }
        }
        if(isset($_POST["table"])) {
            $this->m_tableName = $_POST["table"];
        }
    }
    //===============================================
    public function getOrder($table) {
        if($table == "view_data") {return "order by view_key";}
        if($table == "user_data") {return "order by user_name";}
        return "";
    }
    //===============================================
}
//===============================================
?>