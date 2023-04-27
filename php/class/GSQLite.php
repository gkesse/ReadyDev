<?php   
//===============================================
class GSQLite extends  GObject {
    //===============================================
    private $m_lastId = 0;
    private $m_cols = array();
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function toRoot() {
        return "/data/sqlite";
    }
    //===============================================
    public function toDatabase() {
        return "database.dat";
    }
    //===============================================
    public function toPath() {
        $lPath = $this->getPath($this->toRoot());
        $lPath = sprintf("sqlite:%s/%s", $lPath, $this->toDatabase());
        return $lPath;
    }
    //===============================================
    public function getCols() {
        $this->m_cols;
    }
    //===============================================
    public function getLastId() {
        return $this->m_lastId;
    }
    //===============================================
    public function toOpen() {
        $lPath = $this->getPath($this->toRoot());
        if(!file_exists($lPath)) {
            mkdir($lPath, 0777, true);
        }
        $lPdo = new PDO($this->toPath());
        $lPdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $lPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        return $lPdo;
    }
    //===============================================
    public function execQuery($_sql) {
        $lPdo = $this->toOpen();
        $Ok = $lPdo->query($_sql);
        if(!$Ok) {
            $this->addError("L'exécution de la requête a échoué.");
            return false;
        }
        $this->m_lastId = $lPdo->lastInsertId();
        $lPdo = null;
        return true;
    }
    //===============================================
    public function readData($_sql) {
        $lPdo = $this->toOpen();
        $lResultat = $lPdo->query($_sql);
        if(!$lResultat) {
            $this->addError("L'exécution de la requête a échoué.");
        }
        $lData = "";
        foreach($lResultat as $lRow) {
            foreach($lRow as $lKey => $lValue) {
                $this->m_cols[] = $lKey;
                $lData = $lValue;
                break;
            }
        }
        $lPdo = null;
        return $lData;
    }
    //===============================================
    public function readMap($_sql) {
        $lPdo = $this->toOpen();
        $lResultat = $lPdo->query($_sql);
        if(!$lResultat) {
            $this->addError("L'exécution de la requête a échoué.");
        }
        $lDataMap = array();
        $lColsOk = true;
        foreach($lResultat as $lRow) {
            $lDataRow = array();
            foreach($lRow as $lKey => $lValue) {
                if($lColsOk) {
                    $this->m_cols[] = $lKey;
                }
                $lDataRow[] = $lValue;
            }
            $lDataMap[] = $lDataRow;
            $lColsOk = false;
        }
        $lPdo = null;
        return $lDataMap;
    }
    //===============================================
}
//===============================================
?>
