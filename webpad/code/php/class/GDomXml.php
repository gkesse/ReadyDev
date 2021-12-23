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
        if(!$this->dom) {
            GError::Instance()->addError(sprintf("Erreur la méthode (createDom) a échoué ".
                    "sur la version (%s) et l'encodage (%s).", $version, $encoding));
            return false;
        }$this->dom->preserveWhiteSpace = false;
    }
    //===============================================
    public function loadXmlFile($file) {
        $lPath = $this->getXmlPath($file);
        if($lPath == "") return;
        if(!$this->dom) {
            GError::Instance()->addError(sprintf("Erreur la méthode (loadXmlFile) a échoué ".
                    "sur le fichier (%s).", $file));
            return false;
        }
        $this->dom->load($lPath);
    }
    //===============================================
    public function loadXmlData($xml) {
        $this->dom->loadXml($xml);
        return $this;
    }
    //===============================================
    public function saveXmlFile($file) {
        $lPath = $this->getXmlPath($file);
        if($lPath == "") {
            GError::Instance()->addError(sprintf("Erreur la méthode (saveXmlFile) a échoué ".
                    "sur le fichier (%s).", $file));            
            return $this;
        }
        $this->dom->save($lPath);
        return $this;
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
        if(!$this->dom) {
            GError::Instance()->addError(sprintf("Erreur la méthode (createXPath) a échoué."));
            return $this;
        }
        $this->xpath = new DOMXpath($this->dom);
        return $this;
    }
    //===============================================
    public function queryXPath($query) {
        if(!$this->xpath) {
            GError::Instance()->addError(sprintf("Erreur la méthode (queryXPath) a échoué ".
                    "sur la requête (%s) (1).", $query));
            return $this;
        }
        $this->nodes = $this->xpath->query($query);
        if(!$this->nodes) {
            GError::Instance()->addError(sprintf("Erreur la méthode (queryXPath) a échoué ".
                    "sur la requête (%s) (2).", $query));
            return $this;
        }
        return $this;
    }
    //===============================================
    public function countXPath() {
        if(!$this->nodes) {
            GError::Instance()->addError(sprintf("Erreur la méthode (countXPath) a échoué."));
            return 0;
        }
        $lCount = $this->nodes->length;
        return $lCount;
    }
    //===============================================
    public function createRoot($name) {
        if(!$this->dom) {
            GError::Instance()->addError(sprintf("Erreur la méthode (createRoot) a échoué ".
                    "sur le noeud (%s).", $name));
            return $this;
        }
        $this->node = $this->dom->createElement($name);
        $this->dom->appendChild($this->node);
    }
    //===============================================
    public function getRoot($name) {
        if(!$this->dom) {
            GError::Instance()->addError(sprintf("Erreur la méthode (getRoot) a échoué ".
                    "sur le noeud (%s).", $name));
            return $this;
        }
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
        if(!$xml->dom) {
            GError::Instance()->addError(sprintf("Erreur la méthode (createNode) a échoué ".
                    "sur le noeud (%s) et la valeur (%s).", $name, $value));
            return $this;
        }
        $this->node = $xml->dom->createElement($name, $value);
        return $this;
    }
    //===============================================
    public function getNode($name) {
        if(!$this->node) {
            GError::Instance()->addError(sprintf("Erreur la méthode (getNode) a échoué ".
                    "sur le noeud (%s).", $name));
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
    public function getNodeItem($name, $index) {
        if(!$this->node) {
            GError::Instance()->addError(sprintf("Erreur la méthode (getNodeItem) a échoué ".
                    "sur le noeud (%s) et l'index (%d).", $name, $index));
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
        if(!$this->checkNodes()) {
            GError::Instance()->addError(sprintf("Erreur la méthode (getNodeIndex) a échoué ".
                    "sur l'index (%d).", $index));
            return $this;
        }
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
    public function checkNodes() {
        if(!$this->nodes) {
            $this->node = null;
            return false;
        }
        return true;
    }
    //===============================================
    public function countNode($name) {
        if(!$this->node) {
            GError::Instance()->addError(sprintf("Erreur la méthode (countNode) a échoué ".
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
    public function getValue() {
        if(!$this->node) {
            // GError::Instance()->addError(sprintf("Erreur la méthode (getValue) a échoué."));
            return "";
        }
        $lValue = $this->node->nodeValue;
        return $lValue;
    }
    //===============================================
    public function setAttribute($name, $value) {
        if(!$this->node) {
            GError::Instance()->addError(sprintf("Erreur la méthode (setAttribute) a échoué ".
                    "sur le noeud (%s) et la valeur (%s).", $name, $value));
            return "";
        }
        $this->node->setAttribute($name, $value);
    }
    //===============================================
    public function getAttribute($name) {
        if(!$this->node) {
            GError::Instance()->addError(sprintf("Erreur la méthode (setAttribute) a échoué ".
                    "sur le noeud (%s).", $name));
            return "";
        }
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
}
//===============================================
?>
