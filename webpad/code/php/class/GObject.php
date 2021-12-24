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
    protected $domData = null;
    //===============================================
    public function __construct() {
        $this->initObj();
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
    public function getXmlContent($file) {
        return file_get_contents($this->getXmlPath("phone.xml"));
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
    public function getCData() {
        $this->domData->queryXPath(sprintf("/rdv/cdata"));
        $lData = $this->domData->getNodeIndex(0)->getValue();
        return $lData;
    }
    //===============================================
}
//===============================================
?>
