<?php
class GFile extends GModule {
    //===============================================
    private $m_id = 0;
    private $m_parentId = 0;
    private $m_name = "";
    private $m_path = "";
    private $m_mimeType = "";
    private $m_isDir = false;
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function clone() {
        return new GFile();
    }
    //===============================================
    public function setObj($_obj) {
        $this->m_id = $_obj->m_id;
        $this->m_parentId = $_obj->m_parentId;
        $this->m_name = $_obj->m_name;
        $this->m_path = $_obj->m_path;
        $this->m_mimeType = $_obj->m_mimeType;
        $this->m_isDir = $_obj->m_isDir;
    }
    //===============================================
    public function isEqual($_obj) {
        $lEqualOk = true;
        $lEqualOk &= ($this->m_id == $_obj->m_id);
        $lEqualOk &= ($this->m_parentId == $_obj->m_parentId);
        $lEqualOk &= ($this->m_name == $_obj->m_name);
        $lEqualOk &= ($this->m_path == $_obj->m_path);
        $lEqualOk &= ($this->m_mimeType == $_obj->m_mimeType);
        $lEqualOk &= ($this->m_isDir == $_obj->m_isDir);
        return $lEqualOk;
    }
    //===============================================
    public function toPath() {
        return "/data";
    }
    //===============================================
    public function toFilter() {
        return "*";
    }
    //===============================================
    public function loadFileTree($_path, $_obj) {
        $lPath = $this->getPath($_path);
        $lPattern = sprintf("%s/%s", $lPath, $this->toFilter());
        $lFilenames = glob($lPattern);
        for($i = 0; $i < count($lFilenames); $i++) {
            $lFilename = $lFilenames[$i];
            $lFile = substr($lFilename, strlen($lPath) + 1);
            $lFilepath = sprintf("%s/%s", $_path, $lFile);
            
            if($lFilepath == "/data/cache") continue;
            if($lFilepath == "/data/sqlite") continue;
            if($lFilepath == "/data/img") continue;
            
            $lDirOk = is_dir($lFilename);
            $lMimeType = "";
            
            if(!$lDirOk) {
                $lMimeType = mime_content_type($lFilename);
            }
            
            $lObj = new GFile();
            $lObj->m_id = $this->size() + 1;
            $lObj->m_parentId = $_obj->m_id;
            $lObj->m_name = $lFile;
            $lObj->m_path = $lFilepath;
            $lObj->m_mimeType = $lMimeType;
            $lObj->m_isDir = $lDirOk;
            $this->m_map[] = $lObj;
            
            if($lDirOk) {
                $this->loadFileTree($lFilepath, $lObj);
            }
        }
    }
    //===============================================
    public function serialize($_code = "file") {
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->addData($_code, "id", $this->m_id);
        $lDom->addData($_code, "parent_id", $this->m_parentId);
        $lDom->addData($_code, "name", $this->m_name);
        $lDom->addData($_code, "path", $this->m_path);
        $lDom->addData($_code, "mime_type", $this->m_mimeType);
        $lDom->addData($_code, "is_dir", $this->m_isDir);
        $lDom->addMap($_code, $this->m_map);
        return $lDom->toString();
    }
    //===============================================
    public function deserialize($_data, $_code = "file") {
        parent::deserialize($_data);
        $lDom = new GCode();
        $lDom->loadXml($_data);
        $this->m_id = $lDom->getItem($_code, "id");
        $this->m_parentId = $lDom->getItem($_code, "parent_id");
        $this->m_name = $lDom->getItem($_code, "name");
        $this->m_path = $lDom->getItem($_code, "path");
        $this->m_mimeType = $lDom->getItem($_code, "mime_type");
        $this->m_isDir = $lDom->getItem($_code, "is_dir");
        $lDom->getMap($_code, $this->m_map, $this);
    }
    //===============================================
    public function run($_data) {
        $this->deserialize($_data);
        if($this->m_method == "") {
            $this->addError("La méthode est obligatoire.");
        }
        //===============================================
        else if($this->m_method == "load_file_tree") {
            $this->onLoadFileTree($_data);
        }
        //===============================================
        else {
            $this->addError("La méthode est inconnue.");
        }
        return !$this->hasErrors();
    }
    //===============================================
    public function onLoadFileTree($_data) {
        $this->loadFileTree($this->toPath(), $this);
    }
    //===============================================
}
?>
