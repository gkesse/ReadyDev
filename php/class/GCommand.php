<?php
class GCommand extends GModule {
    //===============================================
    private $m_id = 0;
    private $m_data = "";
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function serialize($_code = "command") {
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->addData($_code, "id", $this->m_id);
        $lDom->addData($_code, "data", base64_encode($this->m_data));
        $lDom->addMap($_code, $this->m_map);
        return $lDom->toString();
    }
    //===============================================
    public function deserialize($_data, $_code = "command") {
        parent::deserialize($_data);
        $lDom = new GCode();
        $lDom->loadXml($_data);
        $this->m_id = $lDom->getItem($_code, "id");
        $this->m_data = base64_decode($lDom->getItem($_code, "data"));
        $lDom->getMap($_code, $this->m_map, $this);
    }
    //===============================================
    public function clone() {
        $lObj = new GCommand();
        $lObj->setCommand($this);
        return $lObj;
    }
    //===============================================
    public function setCommand($_obj) {
        $this->m_id = $_obj->m_id;
        $this->m_data = $_obj->m_data;
    }
    //===============================================
    public function run($_data) {
        $this->deserialize($_data);
        if($this->m_method == "") {
            $this->addError("La méthode est obligatoire.");
        }
        else if($this->m_method == "store_page") {
            $this->onStorePage();
        }
        else {
            $this->addError("La méthode est inconnue.");
        }
    }
    //===============================================
    public function onStorePage() {
        $this->addLog("La donnée a été bien enregistrée.");
    }
    //===============================================
}
?>
