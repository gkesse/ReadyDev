<?php
class GFile extends GObject {
    //===============================================
    private $m_action = "";
    private $m_filename = "";
    private $m_data = "";
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function setAction($_action) {
        $this->m_action = $_action;
    }
    //===============================================
    public function setFilename($_filename) {
        $this->m_filename = $_filename;
    }
    //===============================================
    public function setData($_data) {
        $this->m_data = $_data;
    }
    //===============================================
    public function loadData($_path, $_filename = "") {
        $this->setAction("load_data_file");
        $this->setFilename(GPath::create($_path, $_filename));
        $this->run();
        return $this->m_data;
    }
    //===============================================
    public function saveData($_path, $_filename = "", $_data) {
        $this->setAction("save_data_file");
        $this->setFilename(GPath::create($_path, $_filename));
        $this->setData($_data);
        $this->run();
        return !$this->hasErrors();
    }
    //===============================================
    public function run() {
        if($this->m_action == "") {
            $this->addError("L'action est obligatoire.");
        }
        else if($this->m_action == "load_data_file") {
            $this->runLoadDataFile();
        }
        else if($this->m_action == "save_data_file") {
            $this->runSaveDataFile();
        }
        else if($this->m_action == "create_path_file") {
            $this->runCreateFilePath();
        }
        else {
            $this->addError("L'action est inconnue.");
        }
        return !$this->hasErrors();
    }
    //===============================================
    public function runLoadDataFile() {
        if($this->m_filename == "") {
            $this->addError("Le chemin du fichier est obligatoire.");
            return false;
        }
        $this->m_data = file_get_contents($this->m_filename);
        if($this->m_data === false) {
            $this->addError("La lecture du fichier a échoué.");
        }
        return !$this->hasErrors();
    }
    //===============================================
    public function runSaveDataFile() {
        if($this->m_filename == "") {
            $this->addError("Le chemin du fichier est obligatoire.");
            return false;
        }
        if(!$this->runCreateFilePath()) return false;
        $lOk = file_put_contents($this->m_filename, $this->m_data);
        if($lOk == false) {
            $this->addError("L'enregistrement du fichier a échoué.");
        }
        return !$this->hasErrors();
    }
    //===============================================
    public function runCreateFilePath() {
        if($this->m_filename == "") {
            $this->addError("Le chemin du fichier est obligatoire.");
            return false;
        }
        $lPath = dirname($this->m_filename);
        if(!file_exists($lPath)) {
            mkdir($lPath, 0777, true);
        }
        return !$this->hasErrors();
    }
    //===============================================
}
?>