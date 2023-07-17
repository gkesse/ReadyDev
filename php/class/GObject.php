<?php
//===============================================
namespace php\class;
//===============================================
class GObject {
    //===============================================
    protected $m_index = 0;
    protected $m_parentIndex = 0;
    protected $m_map = array();
    //===============================================
    protected $m_logs = null;
    protected $m_dataLogs = null;
    protected $m_template = null;
    protected $m_resp = null;
    //===============================================
    public function __construct() {
        $this->m_logs = new GLog();
        $this->m_dataLogs = new GLog();
        $this->m_template = new GTemplate();
        $this->m_resp = new GCode();
        $this->m_resp->createDoc();
    }
    //===============================================
    public function clone() {
        return new GObject();
    }
    //===============================================
    public function setObj($_obj) {
        $this->m_index = $_obj->m_index;
        $this->m_parentIndex = $_obj->m_parentIndex;
    }
    //===============================================
    public function clearMap() {
        $this->m_map = array();
        $this->m_logs->clearMap();
        $this->m_dataLogs->clearMap();
    }
    //===============================================
    public function getLogs() {
        return $this->m_logs;
    }
    //===============================================
    public function toResponse() {
        return $this->m_resp->toString();
    }
    //===============================================
    public function getIndex() {
        return $this->m_index;
    }
    //===============================================
    public function getParentIndex() {
        return $this->m_parentIndex;
    }
    //===============================================
    public function toProjectEnv() {
        $lEnv = getenv("GPROJECT_ENV");
        return $lEnv;
    }
    //===============================================
    public function getDataLogs() {
        return $this->m_dataLogs;
    }
    //===============================================
    public function size() {
        return count($this->m_map);
    }
    //===============================================
    public function loadFromMap($_index) {
        if($_index >= 1 && $_index <= $this->size()) {
            $lObj = $this->m_map[$_index - 1];
            $this->setObj($lObj);
        }
    }
    //===============================================
    public function loadToMap($_index) {
        if($_index >= 1 && $_index <= $this->size()) {
            $lObj = $this->m_map[$_index - 1];
            $lObj->setObj($this);
        }
    }
    //===============================================
    public function findObj($_obj) {
        for($i = 0; $i < $this->size(); $i++) {
            $lObj = $this->m_map[$i];
            if($lObj->isEqual($_obj)) {
                return $i + 1;
            }
        }
        return 0;
    }
    //===============================================
    public function findMap($_parentIndex) {
        $lMap = $this->clone();
        for($i = 0; $i < $this->size(); $i++) {
            $lObj = $this->m_map[$i];
            if($lObj->m_parentIndex == $_parentIndex) {
                $lNew = $this->clone();
                $lNew->setObj($lObj);
                $lMap->m_map[] = $lNew;
            }
        }
        return $lMap;
    }
    //===============================================
    public function isAdmin() {
        if($this->getPageId() != "/home/admin") return false;
        return true;
    }
    //===============================================
    public function isLogin() {
        $lLoginOk = false;
        $lLoginOk |= $this->isTestEnv();
        $lLoginOk |= $this->isSession("user_login");
        return $lLoginOk;
    }
    //===============================================
    public function isEmpty() {
        return $this->isEqual($this->clone());
    }
    //===============================================
    public function isTestEnv() {
        return ($this->toProjectEnv() == "TEST");
    }
    //===============================================
    public function toRoot() {
        return "/data/cache/page";
    }
    //===============================================
    public function toProjectName() {
        return "readydev";
    }
    //===============================================
    public function toSiteName() {
        return "ReadyDev";
    }
    //===============================================
    public function toLogo() {
        return "/data/img/defaults/readydev.png";
    }
    //===============================================
    public function toDescription() {
        $lData = "";
        $lData .= sprintf("Avec ReadyDev, apprenez en pratiquant grâce à des cours\n");
        $lData .= sprintf("et tutoriels adaptés aux sciences de l'Ingénieur.\n");
        $lData .= sprintf("Plateforme de Développement Continu.\n");
        $lData .= sprintf("Produit par Gérard KESSE.\n");
        return $lData;
    }
    //===============================================
    public function toPath() {
        $lPath = sprintf("%s/%s%s/main.php", $this->toRoot(), $this->toProjectName(), $this->getPageId());
        $lPath = $this->getPath($lPath);
        return $lPath;
    }
    //===============================================
    public function getHomePage() {
        return "/home";
    }
    //===============================================
    public function getTemplate() {
        return $this->m_template;
    }
     //===============================================
    public function getPageId() {
        $lPageId = $this->getGet("pageid");
        if($lPageId != "") {
            if(substr($lPageId, -1) == "/") {
                $lPageId = substr($lPageId, 0, -1);
            }
        }
        $lPageId = sprintf("/%s", $lPageId);
        return $lPageId;
    }
    //===============================================
    public function getUrl() {
        $lUrl = "";
        $lUrl .= "https://";
        $lUrl .= $_SERVER['HTTP_HOST'];
        $lUrl .=  $_SERVER['REQUEST_URI'];
        return $lUrl;
    }
    //===============================================
    public function getPath($_path) {
        $lPath = "";
        $lPath .= $_SERVER['DOCUMENT_ROOT'];
        $lPath .=  $_path;
        $lPath = str_replace("//", "/", $lPath);
        return $lPath;
    }
    //===============================================
    public function getGet($_key, $_defaultValue = "") {
        if(!isset($_GET[$_key])) return $_defaultValue;
        return $_GET[$_key];
    }
    //===============================================
    public function getEnv($_key, $_defaultValue = "") {
        $lEnv = getenv($_key);
        if(!$lEnv) return $_defaultValue;
        return $lEnv;
    }
    //===============================================
    public function setSession($_key, $_value) {
        $_SESSION[$_key] = $_value;
    }
    //===============================================
    public function usetSession($_key) {
        if(isset($_SESSION[$_key])) unset($_SESSION[$_key]);
    }
    //===============================================
    public function getSession($_key, $_defaultValue = "") {
        if(!isset($_SESSION[$_key])) return $_defaultValue;
        return $_SESSION[$_key];
    }
    //===============================================
    public function isSession($_key) {
        return isset($_SESSION[$_key]);
    }
    //===============================================
    public function redirectUrl($_url) {
        $lLocation = sprintf("Location: %s", $_url);
        header($lLocation);
        exit;
    }
    //===============================================
    public function redirectPost() {
        if(!empty($_POST) OR !empty($_FILES)) {
            $_SESSION["_SAVE_POST_"] = $_POST;
            $_SESSION["_SAVE_FILES_"] = $_FILES;
            $lUrl = $_SERVER["REQUEST_URI"];
            header("Location: " . $lUrl);
            exit;
        }
        if(isset($_SESSION["_SAVE_POST_"])) {
            $_POST = $_SESSION["_SAVE_POST_"];
            $_FILES = $_SESSION["_SAVE_FILES_"];
            unset($_SESSION["_SAVE_POST_"], $_SESSION["_SAVE_FILES_"]);
        }
    }
    //===============================================
    public function redirectHomePage() {
        $lPageId = $this->getPageId();
        $lRedirectOk = false;
        
        if($lPageId == "/") {
            $lRedirectOk = true;
        }
        else if($lPageId == "/home/admin") {
            if(!$this->isLogin()) {
                $lRedirectOk = true;
            }
        }
        else if($lPageId == "/home/connexion") {
            if($this->isLogin()) {
                $lRedirectOk = true;
            }
        }
        else if(!file_exists($this->toPath())) {
            $lRedirectOk = true;
            $this->setSession("page_not_found", true);
        }
        
        if($lRedirectOk) {
            $lHome = $this->getHomePage();
            if($lHome != "" && $lHome != "/") {
                $this->redirectUrl($lHome);
            }
        }
        else {
            if($this->getSession("page_not_found")) {
                $this->m_logs->addError("Page non trouvée !");
            }
        }

        $this->usetSession("page_not_found");
    }
    //===============================================
    public function print() {
        echo sprintf("<xmp style='text-align: left;'>%s</xmp>\n", $this->serialize());
    }
    //===============================================
    public function printData($_data) {
        echo sprintf("<xmp style='text-align: left;'>%s</xmp>\n", $_data);
    }
    //===============================================
    public function isEqual($_obj) {return false;}
    public function serialize($_code = "object") {return "";}
    public function deserialize($_data, $_code = "object") {}
    //===============================================
}
?>