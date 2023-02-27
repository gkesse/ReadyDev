<?php
class GPageFac extends GModule {
    //===============================================
    private $m_id = 0;
    private $m_parentId = 0;
    private $m_typeId = 0;
    private $m_isDefault = false;
    private $m_name = "";
    private $m_path = "";
    private $m_tree = "";
    private $m_content = "";
    private $m_defaultAddress = "";
    private $m_defaultPage = "";
    //===============================================
    private $m_cachePagePath = "data/cache/page";
    private $m_defaultPagePath = "data/xml/default_page.xml";
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function serialize($_code = "page") {
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->addData($_code, "id", $this->m_id);
        $lDom->addData($_code, "parent_id", $this->m_parentId);
        $lDom->addData($_code, "type_id", $this->m_typeId);
        $lDom->addData($_code, "default", $this->m_isDefault);
        $lDom->addData($_code, "name", $this->m_name);
        $lDom->addData($_code, "path", $this->m_path);
        $lDom->addData($_code, "tree", base64_encode($this->m_tree));
        $lDom->addData($_code, "content", base64_encode($this->m_content));
        $lDom->addData($_code, "default_address", base64_encode($this->m_defaultAddress));
        $lDom->addData($_code, "default_page", base64_encode($this->m_defaultPage));
        $lDom->addMap($_code, $this->m_map);
        return $lDom->toString();
    }
    //===============================================
    public function deserialize($_data, $_code = "page") {
        parent::deserialize($_data);
        $lDom = new GCode();
        $lDom->loadXml($_data);
        $this->m_id = $lDom->getItem($_code, "id");
        $this->m_parentId = $lDom->getItem($_code, "parent_id");
        $this->m_typeId = $lDom->getItem($_code, "type_id");
        $this->m_isDefault = $lDom->getItem($_code, "default");
        $this->m_name = $lDom->getItem($_code, "name");
        $this->m_path = $lDom->getItem($_code, "path");
        $this->m_tree = base64_decode($lDom->getItem($_code, "tree"));
        $this->m_content = base64_decode($lDom->getItem($_code, "content"));
        $this->m_defaultAddress = base64_decode($lDom->getItem($_code, "default_address"));
        $this->m_defaultPage = base64_decode($lDom->getItem($_code, "default_page"));
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
        $this->m_parentId = $_obj->m_parentId;
        $this->m_typeId = $_obj->m_typeId;
        $this->m_isDefault = $_obj->m_isDefault;
        $this->m_name = $_obj->m_name;
        $this->m_path = $_obj->m_path;
        $this->m_tree = $_obj->m_tree;
        $this->m_content = $_obj->m_content;
    }
    //===============================================
    public function isFile() {
        return ($this->m_typeId == 1);
    }
    //===============================================
    public function isDir() {
        return ($this->m_typeId == 2);
    }
    //===============================================
    public function run($_data) {
        $this->deserialize($_data);
        if($this->m_method == "") {
            $this->addError("La méthode est obligatoire.");
        }
        else if($this->m_method == "save_page") {
            $this->onSavePage($_data);
        }
        else if($this->m_method == "save_page_file") {
            $this->onSavePageFile($_data);
        }
        else if($this->m_method == "search_page_file") {
            $this->onSearchPageFile($_data);
        }
        else if($this->m_method == "create_page_tree") {
            $this->onCreatePageTree($_data);
        }
        else if($this->m_method == "store_default_page") {
            $this->onStoreDefaultPage($_data);
        }
        else if($this->m_method == "load_default_page") {
            $this->onLoadDefaultPage($_data);
        }
        else {
            $this->addError("La méthode est inconnue.");
        }
    }
    //===============================================
    public function onCreatePageTree($_data) {
        $lPage = new GPageFac();
        $lPage->callServer("page", "load_page_tree");
        if(!$lPage->hasErrors()) {
            $lPath = GPath::create($this->m_cachePagePath);
            $lPage->createPageTree($lPath);
        }
        $this->addLogs($lPage->getLogs());
        if(!$this->hasErrors()) {
            $this->addLog("L'opération a été bien exécutée.");
        }
    }
    //===============================================
    public function onStoreDefaultPage($_data) {
        if($this->m_defaultPage == "") {
            $this->addError("Les données de la page par défaut sont vides.");
            return  false;
        }
        $lData = $this->serialize();
        $lFile = new GFile();
        $lFile->saveData($this->m_cachePagePath, $this->m_defaultPagePath, $lData);
        $this->addLogs($lFile->getLogs());
        return !$this->hasErrors();
    }
    //===============================================
    public function onLoadDefaultPage($_data) {
        $lFile = new GFile();
        $lData = $lFile->loadData($this->m_cachePagePath, $this->m_defaultPagePath);
        if(!$lFile->hasErrors()) {
            $this->deserialize($lData);
        }
        return !$this->hasErrors();
    }
    //===============================================
    public function onSavePage($_data) {
        $this->callProxy($_data);
        if(!$this->hasErrors()) {
            $lPath = GPath::create($this->m_cachePagePath);
            $this->createPage($lPath);
        }
    }
    //===============================================
    public function onSavePageFile($_data) {
        $this->callProxy($_data);
        if(!$this->hasErrors()) {
            if($this->m_content == "") {
                $this->addError("La contenu de la page est vide.");
                return false;
            }
            $lFile = new GFile();
            $lFile->saveData($this->m_cachePagePath, $this->m_path, $this->m_content);
            $this->addLogs($lFile->getLogs());
            if(!$this->hasErrors()) {
                $this->addLog("La donnée a bien été enregistrée.");
            }
        }
    }
    //===============================================
    public function onSearchPageFile($_data) {
        $this->callProxy($_data);
        if(!$this->hasErrors()) {
            $lFile = new GFile();
            $this->m_content = $lFile->loadData($this->m_cachePagePath, $this->m_path);
            $this->addLogs($lFile->getLogs());
        }
    }
    //===============================================
    public function createPage($_parent) {
        $lPath = sprintf("%s%s", $_parent, $this->m_path);
        if($this->isFile()) {
            if(!file_exists($lPath)) {
                $lDir = dirname($lPath);
                if(!file_exists($lDir)) {
                    if(!mkdir($lDir, 0777, true)) {
                        $this->addError("La création du dossier a échoué.");
                        return false;
                    }
                }
                $this->createFile($lPath);
                $this->createIndexFile($lDir);
            }
        }
        else if($this->isDir()) {
            if(!file_exists($lPath)) {
                if(!mkdir($lPath, 0777, true)) {
                    $this->addError("La création du dossier a échoué.");
                    return false;
                }
                $this->createIndexFile($lPath);
            }
        }
    }
    //===============================================
    public function createPageTree($_parent) {
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
                    return false;
                }
                $this->createIndexFile($lName);
            }
            $this->createPageTreeI($lDom, $lName);
            $lDom->nextSiblingElement();
        }
    }
    //===============================================
    public function createPageTreeI(GCode $_dom, $_parent) {
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
    public function createFile($_filename) {
        if(!file_exists($_filename)) {
            $lFile = fopen($_filename, "w");
            if(!$lFile) {
                $this->addError("La création du fichier a échoué.");
                return false;
            }
            fclose($lFile);
        }
        return !$this->hasErrors();
    }
    //===============================================
    public function createIndexFile($_parent) {
        $lPath = "index.php";
        $lPath = sprintf("%s/%s", $_parent, $lPath);
        if(!file_exists($lPath)) {
            $lFile = fopen($lPath, "w");
            if(!$lFile) {
                $this->addError("La création du fichier index a échoué.");
                return false;
            }
            fclose($lFile);
        }
        return !$this->hasErrors();
    }
    //===============================================
}
?>
