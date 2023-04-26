<?php
class GFontAwesome extends GModule {
    //===============================================
    private $m_name = "";
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function clone() {
        return new GFontAwesome();
    }
    //===============================================
    public function setObj($_obj) {
        $this->m_name = $_obj->m_name;
    }
    //===============================================
    public function isEqual($_obj) {
        $lEqualOk = true;
        $lEqualOk &= ($this->m_name == $_obj->m_name);
        return $lEqualOk;
    }
    //===============================================
    public function toUrl() {
        return "https://fontawesome.com/v4/cheatsheet/";
    }
    //===============================================
    public function toTmpPath() {
        return "/data/tmp/data";
    }
    //===============================================
    public function toTmpFile() {
        return "tmp_load_data_curl.txt";
    }
    //===============================================
    public function toCachePath() {
        return "/data/cache/data";
    }
    //===============================================
    public function toCacheFile() {
        return "cache_font_awesome.xml";
    }
    //===============================================
    public function toFirstElementChild($_node) {
        $lNode = $_node->firstChild;
        while($lNode) {
            if($lNode->nodeType == XML_ELEMENT_NODE) break;
            $lNode = $lNode->nextSibling;
            if(!$lNode) break;
        }
        return $lNode;
    }
    //===============================================
    public function toNextElementSibling($_node) {
        $lNode = $_node;
        while($lNode) {
            $lNode = $lNode->nextSibling;
            if(!$lNode) break;
            if($lNode->nodeType == XML_ELEMENT_NODE) break;
        }
        return $lNode;
    }
    //===============================================
    public function toPreviousElementSibling($_node) {
        $lNode = $_node;
        while($lNode) {
            $lNode = $lNode->previousSibling;
            if(!$lNode) break;
            if($lNode->nodeType == XML_ELEMENT_NODE) break;
        }
        return $lNode;
    }
    //===============================================
    public function serialize($_code = "font_awesome") {
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->addData($_code, "name", $this->m_name);
        $lDom->addMap($_code, $this->m_map);
        return $lDom->toString();
    }
    //===============================================
    public function deserialize($_data, $_code = "font_awesome") {
        parent::deserialize($_data);
        $lDom = new GCode();
        $lDom->loadXml($_data);
        $this->m_name = $lDom->getItem($_code, "name");
        $lDom->getMap($_code, $this->m_map, $this);
    }
    //===============================================
    public function run($_data) {
        $this->deserialize($_data);
        if($this->m_method == "") {
            $this->addError("La méthode est obligatoire.");
        } 
        //===============================================
        else if($this->m_method == "extract_font_awesome") {
            $this->onExtractFontAwesome($_data);
        }
        else if($this->m_method == "load_font_awesome") {
            $this->onLoadFontAwesome($_data);
        }
        //===============================================
        else {
            $this->addError("La méthode est inconnue.");
        }
        return !$this->hasErrors();
    }
    //===============================================
    public function onExtractFontAwesome($_data) {        
        $lReponseText = file_get_contents($this->toUrl());
        libxml_use_internal_errors(true);
        $lDom = new DOMDocument();
        $lDomOk = $lDom->loadHTML($lReponseText);
        if(!$lDomOk) {
            $this->addError("Le chargement du contenu web a échoué.");
        }
        $lXPath = new DOMXPath($lDom);
        $lNodes = $lXPath->query("//i[@class='fa fa-fw']");
        for($i = 0; $i < $lNodes->length; $i++) {
            $lNode = $lNodes[$i];
            $lNode = $lNode->nextSibling;
            $lName = trim($lNode->nodeValue);
            $lObj = $this->clone();
            $lObj->m_name = $lName;
            $this->m_map[] = $lObj;
        }
        $lPath = $this->getPath($this->toCachePath());
        if(!file_exists($lPath)) {
            mkdir($lPath, 0777, true);
        }
        $lPath = sprintf("%s/%s", $lPath, $this->toCacheFile());
        $lData = $this->serialize();
        file_put_contents($lPath, $lData);
        return !$this->hasErrors();
    }
    //===============================================
    public function onLoadFontAwesome($_data) {
        $lPath = $this->getPath($this->toCachePath());
        $lPath = sprintf("%s/%s", $lPath, $this->toCacheFile());
        if(file_exists($lPath)) {
            $lData = file_get_contents($lPath);
            $this->deserialize($lData);
        }
    }
    //===============================================
}
?>
