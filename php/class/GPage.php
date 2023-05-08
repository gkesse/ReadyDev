<?php
class GPage extends GModule {
    //===============================================
    private $m_root = "";
    private $m_path = "";
    private $m_name = "";
    private $m_content = "";
    private $m_defaultAddress = "";
    private $m_defaultPage = "";
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function clone() {
        return new GPage();
    }
    //===============================================
    public function setObj($_obj) {
        $this->m_root = $_obj->m_root;
        $this->m_path = $_obj->m_path;
        $this->m_name = $_obj->m_name;
        $this->m_content = $_obj->m_content;
        $this->m_defaultAddress = $_obj->m_defaultAddress;
        $this->m_defaultPage = $_obj->m_defaultPage;
    }
    //===============================================
    public function isEqual($_obj) {
        $lEqualOk = true;
        $lEqualOk &= ($this->m_root == $_obj->m_root);
        $lEqualOk &= ($this->m_path == $_obj->m_path);
        $lEqualOk &= ($this->m_name == $_obj->m_name);
        $lEqualOk &= ($this->m_content == $_obj->m_content);
        $lEqualOk &= ($this->m_defaultAddress == $_obj->m_defaultAddress);
        $lEqualOk &= ($this->m_defaultPage == $_obj->m_defaultPage);
        return $lEqualOk;
    }
    //===============================================
    public function serialize($_code = "page") {
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->addData($_code, "root", $this->m_root);
        $lDom->addData($_code, "path", $this->m_path);
        $lDom->addData($_code, "name", $this->m_name);
        $lDom->addData($_code, "content", utf8_to_b64($this->m_content));
        $lDom->addData($_code, "default_address", utf8_to_b64($this->m_defaultAddress));
        $lDom->addData($_code, "default_page", utf8_to_b64($this->m_defaultPage));
        $lDom->addMap($_code, $this->m_map);
        return $lDom->toString();
    }
    //===============================================
    public function deserialize($_data, $_code = "page") {
        parent::deserialize($_data);
        $lDom = new GCode();
        $lDom->loadXml($_data);
        $this->m_root = $lDom->getItem($_code, "root");
        $this->m_path = $lDom->getItem($_code, "path");
        $this->m_name = $lDom->getItem($_code, "name");
        $this->m_content = b64_to_utf8($lDom->getItem($_code, "content"));
        $this->m_defaultAddress = b64_to_utf8($lDom->getItem($_code, "default_address"));
        $this->m_defaultPage = b64_to_utf8($lDom->getItem($_code, "default_page"));
        $lDom->getMap($_code, $this->m_map, $this);
    }
    //===============================================
    public function run($_data) {
        $this->deserialize($_data);
        if($this->m_method == "") {
            $this->addError("La méthode est obligatoire.");
        }
        //===============================================
        // page
        //===============================================
        else if($this->m_method == "load_page") {
            $this->onLoadPage($_data);
        }
        else if($this->m_method == "load_page_path") {
            $this->onLoadPagePath($_data);
        }
        else if($this->m_method == "create_page") {
            $this->onCreatePage($_data);
        }
        else if($this->m_method == "create_folder") {
            $this->onCreateFolder($_data);
        }
        else if($this->m_method == "store_default_address") {
            $this->onStoreDefaultAddress($_data);
        }
        else if($this->m_method == "load_default_address") {
            $this->onLoadDefaultAddress($_data);
        }
        else if($this->m_method == "store_default_page") {
            $this->onStoreDefaultPage($_data);
        }
        else if($this->m_method == "load_default_page") {
            $this->onLoadDefaultPage($_data);
        }
        //===============================================
        // edition
        //===============================================
        else if($this->m_method == "save_page_edition") {
            $this->onSavePageEdition($_data);
        }
        else if($this->m_method == "load_page_edition") {
            $this->onLoadPageEdition($_data);
        }
        //===============================================
        else {
            $this->addError("La méthode est inconnue.");
        }
        return !$this->hasErrors();
    }
    //===============================================
    // page
    //===============================================
    public function onLoadPage($_data) {
        $lPath = sprintf("%s%s", $this->m_root, $this->m_path);
        $lPath = $this->getPath($lPath);
        $lSize = strlen($lPath);
        $lPattern = sprintf("%s/*", $lPath);
        foreach(glob($lPattern) as $lFile) {
            if(!is_dir($lFile)) {
                $lFile = substr($lFile, $lSize + 1);
                if($lFile == "index.php") continue;
                $lObj = $this->clone();
                $lObj->setObj($this);
                $lObj->m_name = $lFile;
                $this->m_map[] = $lObj;
            }
        }
        return !$this->hasErrors();
    }
    //===============================================
    public function onLoadPagePath($_data) {
        $lPath = sprintf("%s%s", $this->m_root, $this->m_path);
        $lPath = $this->getPath($lPath);
        $lSize = strlen($lPath);
        $lPattern = sprintf("%s/*", $lPath);
        foreach(glob($lPattern) as $lFile) {
            if(is_dir($lFile)) {
                $lFile = substr($lFile, $lSize + 1);
                if($lFile != "cache") {
                    $lObj = $this->clone();
                    $lObj->setObj($this);
                    $lObj->m_name = $lFile;
                    $lObj->m_path = sprintf("%s/%s", $this->m_path, $lFile);
                    $this->m_map[] = $lObj;
                }
            }
        }
        return !$this->hasErrors();
    }
    //===============================================
    public function onCreatePage($_data) {
        if($this->m_path != "") {
            $lPath = sprintf("%s%s", $this->m_root, $this->m_path);
            $lPath = $this->getPath($lPath);
            if($this->m_name == "") {
                if(is_dir($lPath)) {
                    $lFile = sprintf("%s/main.php", $lPath);
                    if(!file_exists($lFile)) {
                        file_put_contents($lFile, "");
                    }
                    else {
                        $this->addError("Le fichier existe déjà.");
                    }
                    $lFile = sprintf("%s/index.php", $lPath);
                    if(!file_exists($lFile)) {
                        file_put_contents($lFile, "");
                    }
                }
                else {
                    $this->addError("Il s'agit d'un fichier.");
                }
            }
            else {
                $this->addError("Il s'agit d'un fichier.");
            }
        }
        else {
            $this->addError("Le chemin du fichier est vide.");
        }
        return !$this->hasErrors();
    }
    //===============================================
    public function onCreateFolder($_data) {
        if($this->m_root == "") {
            $this->addError("Le chemin du répertoire racine est vide.");
            return false;
        }
        if($this->m_path == "") {
            $this->addError("Le chemin du répertoire source est vide.");
            return false;
        }
        if($this->m_name == "") {
            $this->addError("Le nom répertoire est vide.");
            return false;
        }
        
        $lPath = sprintf("%s%s/%s", $this->m_root, $this->m_path, $this->m_name);
        $lPath = $this->getPath($lPath);
        
        $lFile = sprintf("%s/index.php", $lPath);
        
        if(!file_exists($lFile)) {
            file_put_contents($lFile, "");
        }
        
        if(file_exists($lPath)) {
            $this->addError("Le répertoire existe déjà.");
            return false;
        }
        
        mkdir($lPath, 0777, true);
        return !$this->hasErrors();
    }
    //===============================================
    public function onStoreDefaultAddress($_data) {
        $lPath = sprintf("%s%s", $this->m_root, $this->m_path);
        $lPath = $this->getPath($lPath);
        if(!file_exists($lPath)) {
            mkdir($lPath, 0777, true);
        }
        $lPath = sprintf("%s/%s", $lPath, $this->m_name);
        file_put_contents($lPath, $this->m_defaultAddress);
        return !$this->hasErrors();
    }
    //===============================================
    public function onLoadDefaultAddress($_data) {
        $lPath = sprintf("%s%s/%s", $this->m_root, $this->m_path, $this->m_name);
        $lPath = $this->getPath($lPath);
        if(file_exists($lPath)) {
            $this->m_defaultAddress = file_get_contents($lPath);
        }
        return !$this->hasErrors();
    }
    //===============================================
    public function onStoreDefaultPage($_data) {
        $lPath = sprintf("%s%s", $this->m_root, $this->m_path);
        $lPath = $this->getPath($lPath);
        if(!file_exists($lPath)) {
            mkdir($lPath, 0777, true);
        }
        $lPath = sprintf("%s/%s", $lPath, $this->m_name);
        file_put_contents($lPath, $this->m_defaultPage);
        return !$this->hasErrors();
    }
    //===============================================
    public function onLoadDefaultPage($_data) {
        $lPath = sprintf("%s%s/%s", $this->m_root, $this->m_path, $this->m_name);
        $lPath = $this->getPath($lPath);
        if(file_exists($lPath)) {
            $this->m_defaultPage = file_get_contents($lPath);
        }
        return !$this->hasErrors();
    }
    //===============================================
    // edition
    //===============================================
    public function onSavePageEdition($_data) {
        $lPath = sprintf("%s%s/%s", $this->m_root, $this->m_path, $this->m_name);
        $lPath = $this->getPath($lPath);
        if(file_exists($lPath)) {
            if(!is_dir($lPath)) {
                file_put_contents($lPath, $this->m_content);
            }
            else {
                $this->addError("La page est un répertoire.");
            }
        }
        else {
            $this->addError("Le fichier n'existe pas.");
        }
        return !$this->hasErrors();
    }
    //===============================================
    public function onLoadPageEdition($_data) {
        $lPath = sprintf("%s%s/%s", $this->m_root, $this->m_path, $this->m_name);
        $lPath = $this->getPath($lPath);
        if(file_exists($lPath)) {
            $this->m_content = file_get_contents($lPath);
        }
        return !$this->hasErrors();
    }
    //===============================================
}
?>
