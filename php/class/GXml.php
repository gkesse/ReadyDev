<?php   
//===============================================
class GXml {
    //===============================================
    private $m_doc = null;
    private $m_node = null;
    private $m_nodes = null;
    private $m_xpath = null;
    private $m_next = null;
    private $m_stack = null;
    //===============================================
    public function __construct() {

    }
    //===============================================
    public function createDoc($_version = "1.0", $_encoding = "UTF-8") {
        $this->m_doc = new DOMDocument($_version, $_encoding);
        if(!$this->m_doc) return false;
        $this->m_doc->preserveWhiteSpace = false;
        $this->m_doc->formatOutput = true;
        $this->m_xpath = new DOMXpath($this->m_doc);
        if(!$this->m_xpath) return false;
        return true;
    }
    //===============================================
    public function loadFile($_path, $_file, $_version = "1.0", $_encoding = "UTF-8") {        
        if($_path == "" && $_file == "") return false;
        $lPathObj = new GPath();
        $lFile = $lPathObj->getPath($_path, $_file);
        $this->m_doc = new DOMDocument($_version, $_encoding);
        if(!$this->m_doc) return false;
        $this->m_doc->preserveWhiteSpace = false;
        $this->m_doc->formatOutput = true;
        $this->m_doc->load($lFile);
        $this->m_node = $this->m_doc->documentElement;
        $this->m_xpath = new DOMXpath($this->m_doc);
        if(!$this->m_xpath) return false;
        return true;
    }
    //===============================================
    public function loadNode($_data) {
        $_data = trim($_data);
        if($_data == "") return false;
        if(!$this->m_doc) return false;
        if(!$this->m_node) return false;
        $lDom = new DOMDocument();
        $lDom->preserveWhiteSpace = false;
        $lDom->formatOutput = true;
        $lDom->loadXML($_data);
        $lChild = $lDom->documentElement->firstChild;
        while($lChild) {
            $lNode = $this->m_doc->importNode($lChild, true);
            $this->m_node->appendChild($lNode);
            $lChild = $lChild->nextSibling;
        }
        return true;
    }
    //===============================================
    public function loadXml($_data, $_version = '1.0', $_encoding = 'UTF-8') {
        $_data = trim($_data);
        if($_data == "") return false;
        $_data = utf8_encode($_data);
        $this->m_doc = new DOMDocument($_version, $_encoding);
        if(!$this->m_doc) return false;
        $lXml = "<?xml";
        if(substr($_data, 0, strlen($lXml)) != $lXml) {
            $_data = sprintf("<?xml version='%s' encoding='%s'?>\n%s", $_version, $_encoding, $_data);
        }
        $this->m_doc->preserveWhiteSpace = false;
        $this->m_doc->formatOutput = true;
        $this->m_doc->loadXml($_data);
        $this->m_node = $this->m_doc->documentElement;
        $this->m_xpath = new DOMXpath($this->m_doc);
        if(!$this->m_xpath) return false;
        return true;
    }
    //===============================================
    public function saveXml($_file) {
        $lLog = GLog::Instance();
        if($_file == "") return false;
        if(!$this->m_doc) return false;
        $lOk = $this->m_doc->save($_file);
        if(!$lOk) $lLog->addError(sprintf("Erreur lors de la sauvegarde du fichier."));
        return $lLog->hasErrors();
    }
    //===============================================
    public function queryXPath($_path) {
        $_path = trim($_path);
        if($_path == "") return false;
        if($this->m_xpath == null) return false;
        $lFirst = substr($_path, 0, 1);
        $lNode = null;
        if($lFirst != "/") $lNode = $this->m_node;
        $this->m_nodes = $this->m_xpath->query($_path, $lNode);
        return true;
    }
    //===============================================
    public function countXPath() {
        if($this->m_nodes == false) return 0;
        $lCount = $this->m_nodes->length;
        return $lCount;
    }
    //===============================================
    public function createNode($_name) {
        if(!$this->m_doc) {
            $this->createDoc();
            $this->m_node = $this->m_doc->createElement($_name);
            $this->m_doc->appendChild($this->m_node);
        }
        else if(!$this->m_node) {
            $this->m_node = $this->m_doc->createElement($_name);
            $this->m_doc->appendChild($this->m_node);
        }
        else {
            $this->m_next = $this->m_doc->createElement($_name);
            $this->m_node->appendChild($this->m_next);
        }
    }
    //===============================================
    public function createVNode($_name, $_value, $_isCData = false) {
        $this->pushNode();
        $this->createNode($_name);
        $this->next();
        $this->setValue($_value, $_isCData);
        $this->popNode();
    }
    //===============================================
    public function createXNode($_path, $_value = null, $_isCData = false, $isGet = true) {
        $_path = trim($_path);
        if($_path == "") return false;
        $lPaths = explode("/", $_path);
        $lFirst = substr($_path, 0, 1);        
        $lPath = ($lFirst == "/" ? $lFirst : "");
        for($i = 0, $j = 0; $i < count($lPaths); $i++) {
            $lItem = trim($lPaths[$i]);
            if($lItem == "") continue;
            if($j++ != 0) $lPath .= "/";
            $lPath .= $lItem;
            if(!$this->getXNode($lPath)) {
                $this->createNode($lItem);
                $this->next();
            }
        }
        return true;
    }
    //===============================================
    public function next() {
        if(!$this->m_next) return;
        $this->m_node = $this->m_next;
    }
    //===============================================
    public function createXAttribute($_path, $_name, $_value) {
        $this->createXNode($_path);
        $this->setAttribute($_name, $_value);
    }
    //===============================================
    public function getNodeIndex($_index) {
        if(!$this->m_nodes) return false;
        if(!$this->m_nodes->length) return false;
        $lCount = 0;
        foreach($this->m_nodes as $lNode) {
            if($lCount == $_index) {
                $this->m_node = $lNode;
                break;
            }
            $lCount++;
        }
        return true;
    }
    //===============================================
    public function getXNode($_path) {            
        $_path = trim($_path);
        if($_path == "") return false;
        if(!$this->queryXPath($_path)) return false;
        if(!$this->getNodeIndex(0)) return false;
        return true;
    }
    //===============================================
    public function getValue($_isCData = false) {
        if(!$this->m_nodes) return "";
        if(!$this->m_nodes->length) return "";
        if(!$_isCData) {
            $lValue = $this->m_node->nodeValue;
        }
        else {
            $lValue = $this->m_node->textContent;            
        }
        return $lValue;
    }
    //===============================================
    public function setAttribute($_name, $_value) {
        if(!$this->m_node) return false;
        $this->m_node->setAttribute($_name, $_value);
        return true;
    }
    //===============================================
    public function setValue($_value, $_isCData = false) {
        if(!$this->m_doc) return false;
        if(!$this->m_node) return false;
        if(!$_isCData) {
            $this->m_node->nodeValue = $_value;
        }
        else {
            $lCData = $this->m_doc->createCDATASection($_value);
            $this->m_node->appendChild($lCData);
        }
        return true;
    }
    //===============================================
    public function pushNode() {
        $this->m_stack[] = $this->m_node;
    }
    //===============================================
    public function popNode() {
        $this->m_node = array_pop($this->m_stack);
    }
    //===============================================
    public function toString() {
        if(!$this->m_doc) return "";
        if(!$this->m_node) return "";
        return $this->m_doc->saveXML();
    }
    //===============================================
    public function toStringNode() {
        if(!$this->m_doc) return "";
        if(!$this->m_node) return "";
        return $this->m_doc->saveXML($this->m_node);
    }
    //===============================================
}
//===============================================
?>
