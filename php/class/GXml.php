<?php   
//===============================================
class GXml extends GObject {
    //===============================================
    private $m_version;
    private $m_encoding;
    //===============================================
    private $m_doc = null;
    private $m_node = null;
    private $m_next = null;
    private $m_nodes = null;
    private $m_xpath = null;
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->m_version = "1.0";
        $this->m_encoding = "UTF-8";
    }
    //===============================================
    public function createDoc() {
        $lLog = GLog::Instance();
        $this->m_doc = new DOMDocument($this->m_version, $this->m_encoding);
        if(!$this->m_doc) {$lLog->addError(sprintf("La création du document a échoué.")); return false;}
        $this->m_doc->preserveWhiteSpace = true;
        $this->m_doc->formatOutput = true;
        $this->m_xpath = new DOMXpath($this->m_doc);
        return false;
    }
    //===============================================
    public function createNode($_name) {
        $lLog = GLog::Instance();
        if(!$this->m_doc) {$lLog->addError(sprintf("Le document doit être créé.")); return false;}
        if(!$this->m_node) {
            $this->m_node = $this->m_doc->createElement($_name);
            $this->m_doc->appendChild($this->m_node);
        }
        else {
            $this->m_next = $this->m_doc->createElement($_name);
            $this->m_node->appendChild($this->m_next);
        }
        return true;
    }
    //===============================================
    public function createNodePath($_path) {
        $lNodes = explode("/", $_path);
        $lPath = "";
        for($i = 0; $i < count($lNodes); $i++) {
            $lItem = $lNodes[$i];
            if($lItem == "") continue;
            $lPath .= "/";
            $lPath .= $lItem;
            if(!$this->getNode($lPath)) {
                $this->createNode($lItem);
                $this->next();
            }
        }
        return true;
    }
    //===============================================
    public function loadFile($_filename) {
        $lLog = GLog::Instance();
        if(trim($_filename) == "") return false;
        $this->m_doc = new DOMDocument();
        if(!$this->m_doc) {$lLog->addError(sprintf("La création du document a échoué.")); return false;}
        if(!file_exists($_filename)) {$lLog->addError(sprintf("Le fichier n'existe pas.")); return false;}
        $this->m_doc->load($_filename);
        if(!$this->m_doc) {$lLog->addError(sprintf("Le chargement du fichier a échoué.")); return false;}
        $this->m_doc->preserveWhiteSpace = true;
        $this->m_doc->formatOutput = true;
        $this->m_xpath = new DOMXpath($this->m_doc);
        if(!$this->m_doc) {$lLog->addError(sprintf("La création du module xpath a échoué.")); return false;}
        return true;
    }
    //===============================================
    public function loadXml($_data) {
        $lLog = GLog::Instance();
        if(trim($_data) == "") {$lLog->addError(sprintf("Le source xml est vide.")); return false;}
        $this->m_doc = new DOMDocument();
        if(!$this->m_doc) {$lLog->addError(sprintf("La création du document a échoué.")); return false;}
        $this->m_doc->loadXml($_data);
        return $this;
    }
    //===============================================
    public function saveFile($_filename) {
        $lLog = GLog::Instance();
        if(!$this->m_doc) {$lLog->addError(sprintf("Le document doit être créé.")); return false;}
        $this->m_doc->save($_filename);
        return $this;
    }
    //===============================================
    public function next() {
        if(!$this->m_next) return false;
        $this->m_node = $this->m_next;
        return true;
    }
    //===============================================
    public function setValue($_value, $_isCData = false) {
        $lLog = GLog::Instance();
        if(!$this->m_doc) {$lLog->addError(sprintf("Le document doit être créé.")); return false;}
        if(!$this->m_node) {$lLog->addError(sprintf("Le noeud doit être chargé.")); return false;}
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
    public function getNode($_path) {
        $lLog = GLog::Instance();
        if(!$this->m_xpath) {$lLog->addError(sprintf("Le module xpath doit être créé.")); return false;}
        $this->m_nodes = $this->m_xpath->query($_path);
        if(!$this->m_nodes->length) return false;
        $this->m_node = $this->m_nodes->item(0);
        return true;
    }
    //===============================================
    public function countNode($name) {
        if(!$this->m_node) {
            GLog::Instance()->addError(sprintf("Erreur la méthode (countNode) a échoué ".
                    "sur le noeud (%s).", $name));
            return 0;
        }
        $lCount = 0;
        $lNodes = $this->m_node->childNodes;
        foreach($lNodes as $lNode) {
            $lNodeName = $lNode->nodeName;
            if($lNodeName == $name) {
                $lCount++;
            }
        }
        return $lCount;
    }
    //===============================================
    public function convertEncode($content, $toEncoding = 'HTML-ENTITIES', $fromEncoding = 'UTF-8') {
        $lContent = mb_convert_encoding($content, $toEncoding, $fromEncoding);
        return $lContent;
    }
    //===============================================
    public function toString() {
        if(!$this->m_doc) return "";
        return $this->m_doc->saveXML();
    }
    //===============================================
    public function toStringNode($xml) {
        if(!$this->m_doc) return "";
        if(!$this->m_node) return "";
        return $this->m_doc->saveXML($xml->node);
    }
    //===============================================
}
//===============================================
?>
