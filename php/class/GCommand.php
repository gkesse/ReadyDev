<?php
class GCommand extends GModule {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function run($_data) {
        if($this->m_method == "") {
            $this->addError("La méthode est obligatoire.");
        }
        else if($this->m_method == "store_page_file") {
            $this->onStorePageFile($_data);
        }
        else if($this->m_method == "store_bin_file") {
            $this->onStoreBinFile($_data);
        }
        else if($this->m_method == "load_page_file") {
            $this->onLoadPageFile($_data);
        }
        else if($this->m_method == "load_bin_file") {
            $this->onLoadBinFile($_data);
        }
        else {
            $this->addError("La méthode est inconnue.");
        }
    }
    //===============================================
    public function onStorePageFile($_data) {
        $lFile = new GFile();
        $lFile->saveData("data/editor/html", "editor.php", $_data);
        $this->addLogs($lFile->getLogs());
        if(!$this->hasErrors()) {
            $this->addLog("Le fichier a été bien enregistrée.");
        }
    }
    //===============================================
    public function onStoreBinFile($_data) {
        $lFile = new GFile();
        $lFile->saveData("data/editor/html", "editor.php", $_data);
        $this->addLogs($lFile->getLogs());
        if(!$this->hasErrors()) {
            $this->addLog("Le fichier a été bien enregistrée.");
        }
    }
    //===============================================
    public function onLoadPageFile($_data) {
        $lFile = new GFile();
        $lData = $lFile->loadData("data/editor/html", "editor.php");
        $this->addLogs($lFile->getLogs());
        if(!$this->hasErrors()) {
            echo $lData; 
        }
    }
    //===============================================
    public function onLoadBinFile($_data) {
        $lFile = new GFile();
        $lData = $lFile->loadBin("data/editor/html", "editor.php");
        $this->addLogs($lFile->getLogs());
        if(!$this->hasErrors()) {
            echo $lData;
        }
    }
    //===============================================
}
?>
