<?php
class GLocal extends GModule {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function run($_data) {
        parent::deserialize($_data);
        if($this->m_module == "") {
            $this->addError("Le module est obligatoire.");
        }
        else if($this->m_module == "page") {
            $this->onPage($_data);
        }
        else if($this->m_module == "command") {
            $this->onCommand($_data);
        }
        else {
            $this->addError("Le module est inconnu.");
        }
    }
    //===============================================
    public function onPage($_data) {
        $lPage = new GPageFac();
        $lPage->onModule($_data);
        $this->addLogs($lPage->getLogs());
        $this->addResponse($lPage->serialize());
    }
    //===============================================
    public function onCommand($_data) {
        $lCommand = new GCommand();
        $lCommand->run($_data);
        $this->addLogs($lCommand->getLogs());
        $this->addResponse($lCommand->serialize());
    }
    //===============================================
}
?>
