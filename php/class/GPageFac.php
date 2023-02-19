<?php
class GPageFac extends GModule {
    //===============================================
    private $m_id = 0;
    private $m_name = "";
    private $m_title = "";
    private $m_url = "";
    private $m_path = "";
    private $m_tree = "";
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function serialize($_code = "page") {
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->addData($_code, "id", $this->m_id);
        $lDom->addData($_code, "name", $this->m_name);
        $lDom->addData($_code, "title", $this->m_title);
        $lDom->addData($_code, "url", $this->m_url);
        $lDom->addData($_code, "path", $this->m_path);
        $lDom->addData($_code, "tree", base64_encode($this->m_tree));
        $lDom->addMap($_code, $this->m_map);
        return $lDom->toString();
    }
    //===============================================
    public function deserialize($_data, $_code = "page") {
        parent::deserialize($_data);
        $lDom = new GCode();
        $lDom->loadXml($_data);
        $this->m_id = $lDom->getItem($_code, "id");
        $this->m_name = $lDom->getItem($_code, "name");
        $this->m_title = $lDom->getItem($_code, "title");
        $this->m_url = $lDom->getItem($_code, "url");
        $this->m_path = $lDom->getItem($_code, "path");
        $this->m_tree = base64_decode($lDom->getItem($_code, "tree"));
        $lDom->getMap($_code, $this->m_map, $this);
    }
    //===============================================
    public function clone() {
        $lObj = new GPageFac();
        $lObj->setPage($this);
        return $lObj;
    }
    //===============================================
    public function setPage($_obj) {
        $this->m_id = $_obj->m_id;
        $this->m_name = $_obj->m_name;
        $this->m_title = $_obj->m_title;
        $this->m_url = $_obj->m_url;
        $this->m_path = $_obj->m_path;
        $this->m_tree = $_obj->m_tree;
    }
    //===============================================
    public function run($_data) {
        $this->deserialize($_data);
        if($this->m_method == "") {
            $this->addError("La méthode est obligatoire.");
        }
        else if($this->m_method == "create_page_tree") {
            $this->onCreatePageTree($_data);
        }
        else {
            $this->addError("La méthode est inconnue.");
        }
    }
    //===============================================
    public function onCreatePageTree(string $_data) {
        $lPage = new GPageFac();
        $lPage->callServer("page", "load_page_tree");
        if(!$lPage->hasErrors()) {
            $lPath = GPath::create("data/cache/page");
            $lPage->createPageTree($lPath);
        }
        $this->addLogs($lPage->getLogs());
        if(!$this->hasErrors()) {
            $this->addLog("L'opération a été bien exécutée.");
        }
    }
    //===============================================
    public function createPageTree(string $_parent) {
        $lDom = new GCode();
        $lDom->loadXml($this->m_tree);
        $lDom->getCode("page");
        $lCountI = $lDom->countXNode("map/data");
        $lDom->getXNode("map/data");
        for($i = 0; $i < $lCountI; $i++) {
            $lName  = $lDom->getXValue("name");
            $lType  = $lDom->getXValue("type_id");
            if($lType != "2") continue;
            $lName = sprintf("%s/%s", $_parent, $lName);
            if(!file_exists($lName)) {
                if(!mkdir($lName, 0777, true)) {
                    $this->addError("La création du dossier a échoué.");
                }
                $this->createIndexFile($lName);
            }
            $this->createPageTreeI($lDom, $lName);            
            $lDom->nextSiblingElement();
        }
    }
    //===============================================
    public function createPageTreeI(GCode $_dom, string $_parent) {
        $_dom->pushNode();
        $lCountI = $_dom->countXNode("map/data");
        $_dom->getXNode("map/data");
        for($i = 0; $i < $lCountI; $i++) {
            $lName  = $_dom->getXValue("name");
            $lType  = $_dom->getXValue("type_id");
            if($lType != "2") continue;
            $lName = sprintf("%s/%s", $_parent, $lName);
            if(!file_exists($lName)) {
                mkdir($lName, 0777, true);
                $this->createIndexFile($lName);
            }
            $this->createPageTreeI($_dom, $lName);
            $_dom->nextSiblingElement();
        }
        $_dom->popNode();
    }
    //===============================================
    public function createIndexFile(string $_parent) {
        $lIndex = "index.php";
        $lIndex = sprintf("%s/%s", $_parent, $lIndex);
        $lFile = fopen($lIndex, "w");
        if(!$lFile) {
            $this->addError("La création du fichier index a échoué.");
        }
        fclose($lFile);
    }
    //===============================================
}
?>
