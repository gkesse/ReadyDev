<?php   
//===============================================
class GObject {
    //===============================================
    static private $m_instance = null;
    //===============================================
    protected $webroot;
    protected $webkey;
    //===============================================
    protected $dom = null;
    //===============================================
    public function __construct() {
        $this->initObj();
        $this->createDom();
    }
    //===============================================
    public static function Instance() {
        if(is_null(self::$m_instance)) {
            self::$m_instance = new GObject();  
        }
        return self::$m_instance;
    }
    //===============================================
    public function initObj() {
        $this->webroot = "webpad/code";
        $this->webkey = "/readypad";
    }
    //===============================================
    public function createDom() {

    }
    //===============================================
    public function getRepoPath($repo, $file) {
        $lPath = $repo;
        if($this->webroot != "") {
            $lPath = sprintf("%s/%s", $this->webroot, $lPath);
        }
        $lPath = sprintf("%s/%s/%s", $_SERVER["DOCUMENT_ROOT"], $lPath, $file);
        if(!file_exists($lPath)) {
            GError::Instance()->addError(sprintf("Erreur la méthode (getRepoPath) a échoué ".
                    "sur le repo (%s) et le fichier (%s).", $repo, $file));
            return "";
        }
        return $lPath;
    }
    //===============================================
    public function getXmlPath($file) {
        $lPath = $this->getRepoPath("data/xml", $file);
        if($lPath == "") {
            GError::Instance()->addError(sprintf("Erreur la méthode (getXmlPath) a échoué ".
                    "sur le fichier (%s).", $file));
        }
        return $lPath;
    }
    //===============================================
    public function getWebRoot() {
        $lRoot = "";
        if($this->webroot != "") {
            $lRoot = sprintf("/%s", $this->webroot);
        }
        return $lRoot;
    }
    //===============================================
    public function getWebKey() {
        return $this->webkey;
    }
    //===============================================
    public function getObj($key = "") {
        if($key == "") {
            $key = GProcess::Instance()->getProcessName();
        }
        if($key == "process") return GProcess::Instance();
        if($key == "phone") return GPhone::Instance();
        if($key == "cdiscount") return GCDiscount::Instance();
        return GObject::Instance();
    }
    //===============================================
}
//===============================================
?>
