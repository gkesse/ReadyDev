<?php   
//===============================================
class GSQLite extends GObject {
    //===============================================
    private static $m_instance = null;
    //===============================================
    private $headers;
    private $lPath;
    private $pdo;
    //===============================================
    private $id;
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->createDom();
        
        $lPath = $this->getConfigItem("database");
        $lPath = $this->getRepoPath("data/sqlite/db", $lPath);
        
        $this->headers = array();
        $this->path = $lPath;
        $this->pdo = null;
    }
    //===============================================
    public static function Instance() {
        if(is_null(self::$m_instance)) {
            self::$m_instance = new GSQLite();  
        }
        return self::$m_instance;
    }
    //===============================================
    public function createDom() {
        $this->dom = new GDomXml();
        $this->dom->createDom();
        $this->dom->loadXmlFile("app_process.xml");
        $this->dom->createXPath();
    }
    //===============================================
    public function getConfigItem($data) {
        $this->dom->queryXPath(sprintf("/rdv/datas/data[code='config']/%s", $data));
        $this->dom->getNodeIndex(0);
        $lData = $this->dom->getValue();
        return $lData;
    }
    //===============================================
    public function open() {
        $lPath = sprintf("sqlite:%s", $this->path);
        try {
            $this->pdo = new PDO($lPath);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } 
        catch (Exception $e) {
            GLog::Instance()->addError(sprintf("Erreur l'ouverture de la base de donnée a échoué :<br>%s\n", $e->getMessage()));
        }
    }
    //===============================================
    public function writeQuery($sql) {
        $this->open();
        $this->pdo->exec($sql);
        $this->setId();
        $this->pdo = null;
    }
    //===============================================
    public function readData($sql) {
        $this->open();
        $lStmt = $this->pdo->query($sql);
        $lResultMap = $lStmt->fetchAll();
        
        $lData = "";
        
        for($i = 0; $i < count($lResultMap); $i++) {
            $lResult = $lResultMap[$i];
            foreach($lResult as $lKey => $lValue) {
                array_push($this->headers, $lKey);                
                $lData = $lValue;
                break;
            }
            break;
        }
        
        $this->pdo = null;
        return $lData;
    }
    //===============================================
    public function readCol($sql) {
        $this->open();
        $lStmt = $this->pdo->query($sql);
        $lResultMap = $lStmt->fetchAll();
        
        $lDataMap = array();
        
        $lHeaderOn = true;
        
        for($i = 0; $i < count($lResultMap); $i++) {
            $lResult = $lResultMap[$i];
            foreach($lResult as $lKey => $lValue) {
                if($lHeaderOn) {
                    $lHeaderOn = false;
                    array_push($this->headers, $lKey);                
                }
                array_push($lDataMap, $lValue);
                break;
            }
        }
        
        $this->pdo = null;
        return $lDataMap;
    }
    //===============================================
    public function readRow($sql) {
        $this->open();
        $lStmt = $this->pdo->query($sql);
        $lResultMap = $lStmt->fetchAll();
        
        $lDataMap = array();
        
        for($i = 0; $i < count($lResultMap); $i++) {
            $lResult = $lResultMap[$i];
            foreach($lResult as $lKey => $lValue) {
                array_push($this->headers, $lKey);               
                array_push($lDataMap, $lValue);
            }
            break;
        }
        
        $this->pdo = null;
        return $lDataMap;
    }
    //===============================================
    public function readMap($sql) {
        $this->open();
        $lStmt = $this->pdo->query($sql);
        $lResultMap = $lStmt->fetchAll();
        
        $lDataMap = array();
        
        for($i = 0; $i < count($lResultMap); $i++) {
            $lResult = $lResultMap[$i];
            foreach($lResult as $lKey => $lValue) {
                array_push($this->headers, $lKey);
            }
            break;
        }

        for($i = 0; $i < count($lResultMap); $i++) {
            $lResult = $lResultMap[$i];
            $lDataRow = array();
            foreach($lResult as $lKey => $lValue) {
                array_push($lDataRow, $lValue);
            }
            array_push($lDataMap, $lDataRow);
        }
        
        $this->pdo = null;
        return $lDataMap;
    }
    //===============================================
    public function getHeaders() {
        return $this->headers;
    }
    //===============================================
    public function setId() {
        $lStmt = $this->pdo->query("select last_insert_rowid()");
        $this->id = $lStmt->fetchColumn();
    }
    //===============================================
    public function getId() {
        return $this->id;
    }
    //===============================================
    public function hasTable($table) {
        $lData = $this->readData(sprintf("
            select count(*) from sqlite_master
            where type = 'table'
            and name = '%s'
        ", $table));
        return ($lData != 0);
    }
    //===============================================
    public function deleteTable($table) {
        $this->writeQuery(sprintf("
            drop table if exists %s
        ", $table));
    }
    //===============================================
    public function updateDatabase() {
        $lPath = $this->getRepoPath("data/sqlite", "scripts");
        $lPattern = sprintf("%s/*.{sh}", $lPath);
        $lFiles = glob($lPattern, GLOB_BRACE);
        $this->createScript();
        
        foreach($lFiles as $lFile) {
            $lFilename = basename($lFile);
            $lMap= explode("-", $lFilename);
            $lId = $lMap[0];
            
            $lCount = $this->countScript($lId);
            if($lCount) continue;
            $this->executeScript($lFile, $this->path);
            $this->insertScript($lId, $lFilename);
        }
    }
    //===============================================
    public function runTestProcedure() {
        $lPath = $this->getRepoPath("data/sqlite/packages", "ps_test_procedure.sh");
        $this->executeScript($lPath, $this->path);
    }
    //===============================================
    public function createScript() {
        $this->writeQuery(sprintf("
            create table if not exists scripts (
                id integer primary key autoincrement,
                s_id varchar(12) not null,
                sc_date datetime default current_timestamp,
                s_name varchar(256) not null
            )
        "));
    }
    //===============================================
    public function insertScript($scriptId, $scriptName) {
        $this->writeQuery(sprintf("
            insert into scripts (s_id, s_name)
            values ('%s', '%s')
        ", $scriptId, $scriptName));
    }
    //===============================================
    public function countScript($scriptId) {
        $lData = $this->readData(sprintf("
            select count(*) from scripts
            where s_id = '%s'
        ", $scriptId));
        return intval($lData);
    }
    //===============================================
    public function executeScript($filename, $dbpath) {
        $lCommand = sprintf("bash %s %s 2>&1", $filename, $dbpath);
        $lOutput = shell_exec($lCommand);
        if(1) {
            GLog::Instance()->addLog(sprintf("%s", $lOutput));
        }
        return $lOutput;
    }
    //===============================================
    public function countUser($email, $password) {
        $password = $this->encodePassword($email, $password);
        $lData = $this->readData(sprintf("
            select count(*) from users
            where u_email = '%s'
            and u_password = '%s'
        ", $email, $password));
        return intval($lData);
    }
    //===============================================
    public function createUser($email, $password) {
        $password = $this->encodePassword($email, $password);
        $this->writeQuery(sprintf("
            insert into users (u_email, u_password)
            values ('%s', '%s')
        ", $email, $password));
    }
    //===============================================
    public function hasUser($email) {
        $lData = $this->readData(sprintf("
            select count(*) from users
            where u_email = '%s'
        ", $email));
        return (intval($lData) != 0);
    }
    //===============================================
    public function getUserId($email, $password) {
        $password = $this->encodePassword($email, $password);
        $lData = $this->readData(sprintf("
            select id from users
            where u_email = '%s'
            and u_password = '%s'
        ", $email, $password));
        return intval($lData);
    }
    //===============================================
    public function getUserGroup($id) {
        $lData = $this->readData(sprintf("
            select u_group from users
            where id = %d
        ", $id));
        return $lData;
    }
    //===============================================
}
//===============================================
?>