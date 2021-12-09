<?php   
//===============================================
class GObject {
    //===============================================
    static private $m_instance = null;
    //===============================================
    private $webroot;
    private $webkey;
    private $appname = "phone";
    //===============================================
    public function __construct() {
        $this->webroot = "webpad/code";
        $this->webkey = "/readypad";
    }
    //===============================================
    public static function Instance() {
        if(is_null(self::$m_instance)) {
            self::$m_instance = new GObject();  
        }
        return self::$m_instance;
    }
    //===============================================
    public function getRepoPath($repo, $file) {
        $lPath = $repo;
        if($this->webroot != "") {
            $lPath = sprintf("%s/%s", $this->webroot, $lPath);
        }
        $lPath = sprintf("%s/%s/%s", $_SERVER["DOCUMENT_ROOT"], $lPath, $file);
        if(!file_exists($lPath)) {
            GError::Instance()->addError(sprintf("Error le fichier n'existe pas : %s", $lPath));
            return "";
        }
        return $lPath;
    }
    //===============================================
    public function getXmlPath($file) {
        return $this->getRepoPath("data/xml", $file);
    }
    //===============================================
    public function getRootPath() {
        $lRoot = "";
        if($this->webroot != "") {
            $lRoot = sprintf("/%s", $this->webroot);
        }
        return $lRoot;
    }
    //===============================================
    public function getPageId() {
        $lPageId = $_GET["pageid"];
        if($lPageId == "") {
            $lPageId = "home";
        }
        if(substr($lPageId, -1) == '/') {
            $lPageId = substr($lPageId, 0, -1);
        }
        return $lPageId;
    }
    //===============================================
    public function getObj() {
        if($this->appname == "phone") return GPhone::Instance();
        return GObject::Instance();
    }
    //===============================================
    public function getPageTitle() {
        return "";
    }
    //===============================================
    public function getWebKey() {
        return $this->webkey;
    }
    //===============================================
}
//===============================================
?>
