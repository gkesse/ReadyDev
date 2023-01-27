<?php   
//===============================================
class GSQLite extends  GObject {
    //===============================================
    private $m_action = "";
    private $m_path = "";
    private $m_sql = "";
    private $m_datas = array();
    private $m_cols = array();
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function setPath($_path) {
        $this->m_path = $_path;
    }
    //===============================================
    public function setAction($_action) {
        $this->m_action = $_action;
    }
    //===============================================
    public function run() {        
        $lPdo = new PDO($this->m_path);
        if(!$lPdo) {
            $this->addError("Erreur lors de l'initialisation du pdo.");
            return false;
        }
        
        $lOk = $lPdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        if(!$lOk) {
            $this->addError("Erreur lors de l'initialisation des attributs.");
        }
        
        $lOk = $lPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if(!$lOk) {
            $this->addError("Erreur lors de l'initialisation des attributs.");
        }
        
        if($this->m_action == "") {
            $this->addError("Erreur laction est obligatoire.");
        }
        else if($this->m_action == "write") {
            $lPdo->query($this->m_sql);
        }
        else if($this->m_action == "read") {
            $lResult = $lPdo->query($this->m_sql);
            $lIsReadCol = false;
            foreach($lResult as $lRow) {
                $lData = array();
                foreach($lRow as $lKey => $lValue) {
                    if($lIsReadCol) {
                        array_push($this->m_cols, $lKey);
                    }
                    array_push($lData, $lValue);
                }
                array_push($this->m_datas, $lData);
                $lIsReadCol = true;
            }
        }
        else {
            $this->addError("Erreur l'action est inconnue.");
        }
        
        $lPdo = null;        
    }
    //===============================================
}
//===============================================
?>
