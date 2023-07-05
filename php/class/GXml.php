<?php
//===============================================
namespace php\class;
//===============================================
class GXml {
    //===============================================
    protected $m_doc = null;
    protected $m_node = null;
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    public function createDoc() {
        $this->m_doc = new \DOMDocument("1.0", "UTF-8");
        if(!$this->m_doc) return false;
        $this->m_doc->preserveWhiteSpace = false;
        $this->m_doc->formatOutput = true;
        $this->m_node = $this->m_doc->createElement("rdv");
        if(!$this->m_node) return false;
        $this->m_doc->appendChild($this->m_node);
        return true;
    }
    //===============================================
    public function loadXml($_data) {
        $_data = trim($_data);
        if($_data == "") return false;
        $this->m_doc = new \DOMDocument("1.0", "UTF-8");
        if(!$this->m_doc) return false;
        if(!str_starts_with($_data, "<?xml")) {
            $_data = sprintf("<?xml version='1.0' encoding='UTF-8'?>\n%s", $_data);
        }
        $this->m_doc->preserveWhiteSpace = false;
        $this->m_doc->formatOutput = true;
        if(!@$this->m_doc->loadXML($_data)) return false;
        $this->m_node = $this->m_doc->documentElement;
        return true;
    }
    //===============================================
    public function loadNode($_root, $_data) {
        $_data = trim($_data);
        if($_data == "") return false;
        if(!$_root->m_doc) return false;
        if(!$this->m_node) return false;
        $lDom = new \DOMDocument("1.0", "UTF-8");
        $lDom->preserveWhiteSpace = false;
        $lDom->formatOutput = true;
        if(!@$lDom->loadXML($_data)) return false;
        $lChild = $lDom->documentElement->firstElementChild;
        while($lChild) {
            $lNode = $_root->m_doc->importNode($lChild, true);
            $this->m_node->appendChild($lNode);
            $lChild = $lChild->nextElementSibling;
        }
        return true;
    }
    //===============================================
    public function addObj($_root, $_name) {
        $lNode = $_root->m_doc->createElement($_name);
        $this->m_node->appendChild($lNode);
        return $lNode;
    }
    //===============================================
    public function addValue($_root, $_name, $_value, $_isCData = false) {
        $lDom = new GXml();
        $lDom->m_node = $_root->m_doc->createElement($_name);
        $lDom->setValue($_root, $_value, $_isCData);
        $this->m_node->appendChild($lDom->m_node);
        return $this->m_node;
    }
    //===============================================
    public function setNode($_node) {
        $this->m_node = $_node;
    }
    //===============================================
    public function setValue($_root, $_value, $_isCData = false) {
        if(!$_isCData) {
            $this->m_node->nodeValue = $_value;
        }
        else {
            $lCData = $_root->m_doc->createCDATASection($_value);
            $this->m_node->appendChild($lCData);
        }
    }
    //===============================================
    public function getValue($_isCData = false) {
        $lData = "";
        if(!$_isCData) {
            $lData = $this->m_node->nodeValue;
        }
        else {
            $lData = $this->m_node->textContent;
        }
        return $lData;
    }
    //===============================================
    public function existNode($_root, $_path) {
        if(!$_root->m_doc) return false;
        $lXPath = new \DOMXpath($_root->m_doc);
        $lNode = $this->m_node;
        if($_path[0] == "/") $lNode = $_root->m_node;
        $lNodes = $lXPath->query($_path, $lNode);
        if(!$lNodes->length) return false;
        return true;
    }
    //===============================================
    public function getNode($_root, $_path) {
        if(!$_root->m_doc) return null;
        $lXPath = new \DOMXpath($_root->m_doc);
        $lNode = $this->m_node;
        if($_path[0] == "/") $lNode = $_root->m_node;
        $lNodes = $lXPath->query($_path, $lNode);
        if(!$lNodes->length) return null;
        return $lNodes->item(0);
    }
    //===============================================
    public function countNode($_root, $_path) {
        if(!$_root->m_doc) return 0;
        $lXPath = new \DOMXpath($_root->m_doc);
        $lNode = $this->m_node;
        if($_path[0] == "/") $lNode = $_root->m_node;
        $lNodes = $lXPath->query($_path, $lNode);
        return $lNodes->length;
    }
    //===============================================
    public function toString() {
        if(!$this->m_doc) return "";
        $lData = $this->m_doc->saveXML();
        return $lData;
        
    }
    //===============================================
    public function toNode($_root) {
        if(!$_root->m_doc) return "";
        if(!$this->m_node) return "";
        $lData = $_root->m_doc->saveXML($this->m_node);
        return $lData;
    }
    //===============================================
    public function print() {
        echo sprintf("<xmp style='text-align: left;'>%s</xmp>\n", $this->toString());
    }
    //===============================================
}
//===============================================
?>
