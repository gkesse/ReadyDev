<?php   
//===============================================
class GDomXml extends GObject {
    //===============================================
    protected $dom = null;
    protected $node = null;
    protected $nodes = null;
    protected $xpath = null;
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function createDom($version = "1.0", $encoding = "UTF-8") {
        $this->dom = new DOMDocument($version, $encoding);
        $this->dom->preserveWhiteSpace = false;
    }
    //===============================================
    public function loadXmlFile($file) {
        $lPath = $this->getXmlPath($file);
        if($lPath == "") return;
        $this->dom->load($lPath);
    }
    //===============================================
    public function loadXmlData($xml) {
        $this->dom->loadXml($xml);
    }
    //===============================================
    public function saveXmlFile($file) {
        $lPath = $this->getXmlPath($file);
        if($lPath == "") return;
        $this->dom->save($lPath);
    }
    //===============================================
    public function getDomXml() {
        return $this->dom->saveXML();
    }
    //===============================================
    public function getNodeXml($xml) {
        return $this->dom->saveXML($xml->node);
    }
    //===============================================
    public function createXPath() {
        if(!$this->validateDom()) return $this;
        $this->xpath = new DOMXpath($this->dom);
        return $this;
    }
    //===============================================
    public function queryXPath($query) {
        if(!$this->validateXPath()) return $this;
        $this->nodes = $this->xpath->query($query);
        return $this;
    }
    //===============================================
    public function getXPathNode($index) {
        if(!$this->validateNodes()) return $this;
        $lCount = 0;
        foreach($this->nodes as $lNode) {
            if($lCount == $index) {
                $this->node = $lNode;
                return $this;
            }
            $lCount++;
        }
        $this->node = null;
        return $this;
    }
    //===============================================
    public function createRoot($name) {
        $this->node = $this->dom->createElement($name);
        $this->dom->appendChild($this->node);
    }
    //===============================================
    public function getRoot($name) {
        if(!$this->validateDom()) return $this;
        $lNodes = $this->dom->childNodes;
        foreach($lNodes as $lNode) {
            $lNodeName = $lNode->nodeName;
            if($lNodeName == $name) {
                $this->node = $lNode;
                break;
            }
        }
        return $this;
    }
    //===============================================
    public function createNode($xml, $name, $value = "") {
        $this->node = $xml->dom->createElement($name, $value);
    }
    //===============================================
    public function getNode($name) {
        if(!$this->validateNode()) return $this;
        $lNodes = $this->node->childNodes;
        foreach($lNodes as $lNode) {
            $lNodeName = $lNode->nodeName;
            if($lNodeName == $name) {
                $this->node = $lNode;
                $this->nodes = $lNode;
                return $this;
            }
        }
        $this->node = null;
        return $this;
    }
    //===============================================
    public function getNodeItem($name, $index) {
        if(!$this->validateNode()) return $this;
        $lNodes = $this->nodes->childNodes;
        $lCount = 0;
        foreach($lNodes as $lNode) {
            $lNodeName = $lNode->nodeName;
            if($lNodeName == $name) {
                if($lCount == $index) {
                    $this->node = $lNode;
                    return $this;
                }
                $lCount++;
            }
        }
        $this->node = null;
        return $this;
    }
    //===============================================
    public function countNode() {
        if(!$this->validateNode()) return 0;
        $lCount = $this->node->childNodes->length;
        return $lCount;
    }
    //===============================================
    public function getValue() {
        if(!$this->validateNode()) return "";
        $lValue = $this->node->nodeValue;
        return $lValue;
    }
    //===============================================
    public function setAttribute($name, $value) {
        $this->node->setAttribute($name, $value);
    }
    //===============================================
    public function getAttribute($name) {
        return $this->node->setAttribute($name);
    }
    //===============================================
    public function appendChild($xml) {
        $this->node->appendChild($xml->node);
    }
    //===============================================
    public function convertEncode($content, $toEncoding = 'HTML-ENTITIES', $fromEncoding = 'UTF-8') {
        $lContent = mb_convert_encoding($content, $toEncoding, $fromEncoding);
        return $lContent;
    }
    //===============================================
    public function validateDom() {
        if($this->dom == null) {
            GError::Instance()->addError("Error le (dom) est null");
            return false;
        }
        return true;
    }
    //===============================================
    public function validateNode() {
        if($this->node == null) {
            GError::Instance()->addError("Error le (noeud) est null");
            return false;
        }
        return true;
    }
    //===============================================
    public function validateNodes() {
        if($this->nodes == null) {
            GError::Instance()->addError("Error le (noeuds) est null");
            return false;
        }
        return true;
    }
    //===============================================
    public function validateXPath() {
        if($this->xpath == null) {
            GError::Instance()->addError("Error le (xpath) est null");
            return false;
        }
        return true;
    }
    //===============================================
}
//===============================================
?>
