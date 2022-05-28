<?php   
//===============================================
class GXml extends GObject {
    //===============================================
    private $doc = null;
    private $node = null;
    private $nodes = null;
    private $xpath = null;
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function createDoc($version = "1.0", $encoding = "UTF-8") {
        $this->doc = new DOMDocument($version, $encoding);
        if(!$this->doc) return false;
        $this->doc->preserveWhiteSpace = true;
        $this->doc->formatOutput = true;
        return true;
    }
    //===============================================
    public function createDocFile($res, $file) {
        $lPathObj = new GPath();
        $this->createDoc();
        $this->loadXmlFile($lPathObj->getResourcePath($res, $file));
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
    public function queryXPath($query) {
        if(!$this->xpath) return false;
        $this->nodes = $this->xpath->query($query);
        return true;
    }
    //===============================================
    public function countXPath() {
        if(!$this->nodes) return 0;
        $lCount = $this->nodes->length;
        return $lCount;
    }
    //===============================================
    public function createRoot($name) {
        if(!$this->doc) {
            GLog::Instance()->addError(sprintf("Erreur la méthode (%s) a échoué.<br>
            - noeud......: %s", __METHOD__, $name));
            return $this;
        }
        $this->node = $this->doc->createElement($name);
        $this->doc->appendChild($this->node);
        return $this;
    }
    //===============================================
    public function getRoot($name) {
        if(!$this->doc) {
            GLog::Instance()->addError(sprintf("Erreur la méthode (%s) a échoué.<br>
            - noeud......: %s", __METHOD__, $name));
            return $this;
        }
        $lNodes = $this->doc->childNodes;
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
        if(!$xml->doc) return false;
        $this->node = $xml->doc->createElement($name, $value);
        return true;
    }
    //===============================================
    public function createNode2($path, $value = "", $root = "rdv") {
        $path = trim($path);
        $lFirst = substr($path, 0, 1);
        
        if($lFirst == "/") {
            $this->getRoot($root);
        }
        
        $lMap = explode("/", $path);
                
        for($i = 0, $j = 0; $i < count($lMap); $i++) {
            $lItem = $lMap[$i];
            $lItem = trim($lItem);
            if($lItem == "") continue;
            $j++;
            
            if($j == 1) {
                if($lFirst == "/") {
                    $lName = $this->getNodeName();
                    if($lName != $lItem) {
                        GLog::Instance()->addError(sprintf("Erreur la méthode (%s) a échoué.<br>
                        - root......: %s<br>
                        - noeud.....: %s", __METHOD__, $lName, $lItem));
                        break;
                    }
                    continue;
                }
            }
            
            $lCount = $this->countNode($lItem);
            
            if(!$lCount) {
                $this->appendNode4($lItem);
            }
            else {
                $this->getNode($lItem);
            }
        }
        if($value != "") {
            $this->setNodeValue($value);
        }        
    }
    //===============================================
    public function createNode3($path, $value = "", $root = "rdv") {
        $path = trim($path);
        $lFirst = substr($path, 0, 1);
        
        if($lFirst == "/") {
            $this->getRoot($root);
        }
        
        $lMap = explode("/", $path);
                
        for($i = 0, $j = 0; $i < count($lMap); $i++) {
            $lItem = $lMap[$i];
            $lItem = trim($lItem);
            if($lItem == "") continue;
            $j++;
            
            if($j == 1) {
                if($lFirst == "/") {
                    $lName = $this->getNodeName();
                    if($lName != $lItem) {
                        GLog::Instance()->addError(sprintf("Erreur la méthode (%s) a échoué.<br>
                        - root......: %s<br>
                        - noeud.....: %s", __METHOD__, $lName, $lItem));
                        break;
                    }
                    continue;
                }
            }
            
            $lCount = $this->countNode($lItem);
            
            if(!$lCount || $j == 1) {
                $this->appendNode4($lItem);
            }
            else {
                $this->getNode($lItem);
            }
        }
        if($value != "") {
            $this->setNodeValue($value);
        }        
    }
    //===============================================
    public function createNode4($path, $value = "", $root = "rdv", $isCData = false) {
        $path = trim($path);
        if($path == "") return false;
        $lFirst = substr($path, 0, 1);
        
        if($lFirst == "/") {
            $this->getRoot($root);
        }
        
        $lMap = explode("/", $path);
        
        $lCurrentNode = $this->node;
        
        for($i = 0, $j = 0; $i < count($lMap); $i++) {
            $lItem = $lMap[$i];
            $lItem = trim($lItem);
            if($lItem == "") continue;
            $j++;
            
            if($j == 1) {
                if($lFirst == "/") {
                    $lName = $this->getNodeName();
                    if($lName != $lItem) return false;
                    continue;
                }
            }
            
            $lCount = $this->countNode($lItem);
            
            if(!$lCount) {
                $this->appendNode4($lItem);
            }
            else {
                $this->getNode($lItem);
            }
        }
        if($value != "") {
            $this->setNodeValue($value, $isCData);
        }
        
        $this->node = $lCurrentNode;
    }
    //===============================================
    public function getNode($name) {
        if(!$this->node) {
            GLog::Instance()->addError(sprintf("Erreur la méthode (%s) a échoué.<br>
            - noeud......: %s", __METHOD__, $name));
            return $this;
        }
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
    public function getNodeName() {
        if(!$this->node) {
            GLog::Instance()->addError(sprintf("Erreur la méthode (%s) a échoué.<br>
            ", __METHOD__));
            return "";
        }
        return $this->node->nodeName;
    }
    //===============================================
    public function getNodeItem($name, $index) {
        if(!$this->node) {
            GLog::Instance()->addError(sprintf("Erreur la méthode (%s) a échoué.<br>
            - noeud......: %s<br>
            - index......: %d", __METHOD__, $name, $index));
            return $this;
        }
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
    public function getNodeIndex($index) {
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
    public function countNode($name) {
        if(!$this->node) {
            GLog::Instance()->addError(sprintf("Erreur la méthode (countNode) a échoué ".
                    "sur le noeud (%s).", $name));
            return 0;
        }
        $lCount = 0;
        $lNodes = $this->node->childNodes;
        foreach($lNodes as $lNode) {
            $lNodeName = $lNode->nodeName;
            if($lNodeName == $name) {
                $lCount++;
            }
        }
        return $lCount;
    }
    //===============================================
    public function getNodeValue() {
        if(!$this->node) {
            return "";
        }
        $lValue = $this->node->nodeValue;
        return $lValue;
    }
    //===============================================
    public function getNodeCData() {
        if(!$this->node) {
            return "";
        }
        $lValue = $this->node->textContent;
        return $lValue;
    }
    //===============================================
    public function setAttribute($name, $value) {
        if(!$this->node) {
            GLog::Instance()->addError(sprintf("Erreur la méthode (%s) a échoué.<br>
            - noeud......: %s<br>
            - valeur.....: %s", __METHOD__, $name, $value));
            return "";
        }
        $this->node->setAttribute($name, $value);
    }
    //===============================================
    public function setNodeValue($value, $isCData = false) {
        if($this->doc == null) return false;
        if($this->node == null) return false;
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
    public function getAttribute($name) {
        if(!$this->node) {
            GLog::Instance()->addError(sprintf("Erreur la méthode (%s) a échoué.<br>
            - noeud......: %s", __METHOD__, $name));
            return "";
        }
        return $this->node->setAttribute($name);
    }
    //===============================================
    public function appendNode($xml) {
        $this->node->appendChild($xml->node);
    }
    //===============================================
    public function appendNode2($name, $value = "") {
        $lNode = new GXml();
        $lNode->createNode($this, $name, $value);
        $this->appendNode($lNode);
    }
    //===============================================
    public function appendNode3($xml) {
        $this->node->appendChild($xml->node);
        $this->node = $xml->node;
    }
    //===============================================
    public function appendNode4($name, $value = "") {
        $lNode = new GXml();
        $lNode->createNode($this, $name, $value);
        $this->appendNode3($lNode);
    }
    //===============================================
    public function convertEncode($content, $toEncoding = 'HTML-ENTITIES', $fromEncoding = 'UTF-8') {
        $lContent = mb_convert_encoding($content, $toEncoding, $fromEncoding);
        return $lContent;
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
