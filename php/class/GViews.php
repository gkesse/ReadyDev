<?php   
//===============================================
class GViews extends GObject {
    //===============================================
    private $m_id = 0;
    private $m_url = "";
    private $m_view = 100;
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->m_url = $this->getPageId();
    }
    //===============================================
    public function loadView() {
        //
        $lSql = "";
        $lSql .= sprintf("select _id, _url, _view\n");
        $lSql .= sprintf("from _views where 1 = 1\n");
        $lSql .= sprintf("and _url = '%s'\n", $this->m_url);
        //
        $lDB = new GSQLite();
        $lRows = $lDB->readMap($lSql);
        //
        $j = 0;
        //
        for($i = 0; $i < count($lRows); $i++) {
            $lRow = $lRows[$i];
            $this->m_id = $lRow[$j++];
            $this->m_url = $lRow[$j++];
            $this->m_view = $lRow[$j++];
            break;
        }
        //
        $this->addLogs($lDB->getLogs());
    }
    //===============================================
    public function insertView() {
        //
        $lSql = "";
        $lSql .= sprintf("insert into _views (_url)\n");
        $lSql .= sprintf("values ('%s')\n", $this->m_url);
        //
        $lDB = new GSQLite();
        if($lDB->execQuery($lSql)) {
            $this->m_id = $lDB->getLastId();
        }
        //
        $this->addLogs($lDB->getLogs());
    }
    //===============================================
    public function updateView() {
        //
        $this->m_view++;
        //
        $lSql = "";
        $lSql .= sprintf("update _views set\n");
        $lSql .= sprintf("_view = %d\n", $this->m_view);
        $lSql .= sprintf("where 1 = 1\n");
        $lSql .= sprintf("and _id = %d\n", $this->m_id);
        //
        $lDB = new GSQLite();
        $lDB->execQuery($lSql);
        //
        $this->addLogs($lDB->getLogs());
    }
    //===============================================
    public function getViews() {
        $this->loadView();
        if(!$this->m_id) {
            $this->insertView();
        }
        $this->updateView();
        return $this->m_view;
    }
    //===============================================
    public function serialize($_code = "views") {
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->addData($_code, "id", $this->m_id);
        $lDom->addData($_code, "url", $this->m_url);
        $lDom->addData($_code, "view", $this->m_view);
        $lDom->addMap($_code, $this->m_map);
        return $lDom->toString();
    }
    //===============================================
    public function deserialize($_data, $_code = "views") {
        $lDom = new GCode();
        $lDom->loadXml($_data);
        $this->m_id = $lDom->getItem($_code, "id");
        $this->m_url = $lDom->getItem($_code, "url");
        $this->m_view = $lDom->getItem($_code, "view");
        $lDom->getMap($_code, $this->m_map, $this);
    }
    //===============================================
}
//===============================================
?>
