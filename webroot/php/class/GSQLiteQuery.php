<?php   
//===============================================
class GSQLiteQuery extends GWidget {
    //===============================================
    private $m_query;
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
        echo sprintf("<textarea class='textarea' form='run_query' name='query' rows='4' cols='50' maxlength='200' 
        placeholder='Saisir une requête'>%s</textarea>\n", $this->m_query);
        //
        echo sprintf("</div>\n");
    }
    //===============================================
    public function request() {
        $lApp = GManager::Instance()->getData()->app;
        if(isset($_POST["action"])) {
            $lAction = $_POST["action"];
            if($lAction == "") {

            }
        }
    }
    //===============================================
}
//===============================================
?>