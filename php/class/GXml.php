<?php   
//===============================================
class GXml extends GObject {
    //===============================================
    private $doc = null;
    private $node = null;
    private $nodeCopy = null;
    private $nodes = null;
    private $xpath = null;
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->nodeCopy = array();
    }
    //===============================================
    public function createDoc($version = "1.0", $encoding = "UTF-8") {
        $this->doc = new DOMDocument($version, $encoding);
        if(!$this->doc) return false;
        $this->doc->preserveWhiteSpace = false;
        $this->doc->formatOutput = true;
        return true;
    }
    //===============================================
    public function createDocFile($res, $file) {
        $lPathObj = new GPath();
        $this->createDoc();
        $this->loadXmlFile($lPathObj->getPath($res, $file));
        $this->createXPath();
    }
    //===============================================
    public function loadXmlFile($file) {
        if(!$this->doc) return false;
        $this->doc->load($file);
        return true;
    }
    //===============================================
    public function loadNode($data) {
        if(!$this->doc) return $this;
        $lDom = new DOMDocument();
        $lDom->preserveWhiteSpace = false;
        $lDom->formatOutput = true;
        $lDom->loadXML(sprintf("<rdv>%s</rdv>", $data));
        $lChild = $lDom->documentElement->firstChild;
        while($lChild) {
            $lNode = $this->doc->importNode($lChild, true);
            $this->node->appendChild($lNode);
            $lChild = $lChild->nextSibling;
        }
        return $this;
    }
    //===============================================
    public function loadXmlData($xml) {
        if($xml == "") return false;
        if(!$this->doc) return false;
        $this->doc->loadXml($xml);
        return true;
    }
    //===============================================
    public function saveXml($file) {
        $lLog = GLog::Instance();
        if($file == "") return false;
        if(!$this->doc) return false;
        $lOk = $this->doc->save($file);
        if(!$lOk) $lLog->addError(sprintf("Erreur lors de la sauvegarde du fichier."));
        return $lLog->hasErrors();
    }
    //===============================================
    public function saveXmlFile($file) {
        $lOk = true;
        $lPath = $this->getXmlPath($file);
        if($lPath == "") return false;
        if(!$this->doc) return false;
        $lOk &= ($this->doc->save($lPath));
        return $lOk;
    }
    //===============================================
    public function createXPath() {
        if(!$this->doc) return false;
        $this->xpath = new DOMXpath($this->doc);
        return true;
    }
    //===============================================
    public function queryXPath($query, $node = null) {
        if($this->xpath == null) return false;
        $this->nodes = $this->xpath->query($query, $node);
        return true;
    }
    //===============================================
    public function countXPath() {
        if($this->nodes == false) return 0;
        $lCount = $this->nodes->length;
        return $lCount;
    }
    //===============================================
    public function createNode($name) {
        if(!$this->doc) return false;
        $lNode = $this->doc->createElement($name);
        if(!$this->node) {
            $this->doc->appendChild($lNode);
        }
        else {
            $this->node->appendChild($lNode);            
        }
        $this->node = $lNode;
        return true;
    }
    //===============================================
    public function createXNode($path, $value = null, $isCData = false, $isGet = true) {
        $path = trim($path);
        if($path == "") return false;
        $lFirst = substr($path, 0, 1);
        $lRootOn = ($lFirst == "/");
        $lMap = explode("/", $path);
        $lPath = "";
        
        if(!$isGet) $this->saveNode();
        
        for($i = 0; $i < count($lMap); $i++) {
            $lItem = $lMap[$i];
            $lItem = trim($lItem);
            if($lItem == "") continue;
            if($lPath != "" || $lRootOn) $lPath .= "/";
            $lPath .= $lItem;
            $this->getXPath($lPath);
            if($this->countXPath() == 0) {
                $this->createNode($lItem);
            }
        }
        if($value) {
            $this->setNodeValue($value, $isCData);
        }
        
        if(!$isGet) $this->restoreNode();
    }
    //===============================================
    public function createRNode($path, $value = null, $isCData = false) {
        $this->createXNode($path, $value, $isCData, false);
    }
    //===============================================
    public function createXAttribute($path, $name, $value) {
        $this->createXNode($path);
        $this->setAttribute($name, $value);
    }
    //===============================================
    public function getNodeIndex($index) {
        if($this->nodes == false) return false;
        if($this->nodes->length == 0) return false;
        $lCount = 0;
        foreach($this->nodes as $lNode) {
            if($lCount == $index) {
                $this->node = $lNode;
                return true;
            }
            $lCount++;
        }
        return false;
    }
    //===============================================
    public function getXPath($path) {            
        $path = trim($path);
        if($path == "") return false;
        $this->queryXPath($path);
        $this->getNodeIndex(0);
        return true;
    }
    //===============================================
    public function getNodeValue() {
        if(!$this->node) return "";
        $lValue = $this->node->nodeValue;
        return $lValue;
    }
    //===============================================
    public function getNodeCData() {
        if(!$this->node) return "";
        $lValue = $this->node->textContent;
        return $lValue;
    }
    //===============================================
    public function setAttribute($name, $value) {
        if(!$this->node) return false;
        $this->node->setAttribute($name, $value);
        return true;
    }
    //===============================================
    public function setNodeValue($value, $isCData = false) {
        if(!$this->doc) return false;
        if(!$this->node) return false;
        if(!$isCData) {
            $this->node->nodeValue = $value;
        }
        else {
            $lCData = $this->doc->createCDATASection($value);
            $this->node->appendChild($lCData);
        }
        return true;
    }
    //===============================================
    public function restoreNode() {
        $this->node = array_pop($this->nodeCopy);
    }
    //===============================================
    public function saveNode() {
        $this->nodeCopy[] = $this->node;
    }
    //===============================================
    public function toString() {
        return $this->doc->saveXML();
    }
    //===============================================
    public function toStringNode() {
        if(!$this->doc) return "";
        if(!$this->node) return "";
        return $this->doc->saveXML($this->node);
    }
    //===============================================
}
//===============================================
?>
