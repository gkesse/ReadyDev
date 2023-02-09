<?php
class GLocal extends GModule {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function run($_data) {
        if($this->m_module == "") {
            $this->addError("Le module est obligatoire.");
        }
        else if($this->m_module == "command") {
            $this->onCommand($_data);
        }
        else {
            $this->addError("Le module est inconnu.");
        }
    }
    //===============================================
    public function onCommand($_data) {
        $lCommand = new GCommand();
        $lCommand->setModule($this->m_module);
        $lCommand->setMethod($this->m_method);
        $lCommand->run($_data);
        $this->addLogs($lCommand->getLogs());
    }
    //===============================================
}
?>
