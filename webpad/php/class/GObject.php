<?php   
//===============================================
class GObject {
    //===============================================
    protected $webroot;
    protected $dataRoot;
    //===============================================
    public function __construct() {
        $this->webroot = "webpad";
    }
    //===============================================
    public function getDataPath($repo, $file) {
        $lPath = "data";
        if($this->webroot != "") {
            $lPath = sprintf("%s/data", $this->webroot);
        }
        $lPath = sprintf("%s/%s/%s/%s", $_SERVER["DOCUMENT_ROOT"], $lPath, $repo, $file);
        if(!file_exists($lPath)) {
            GError::Instance()->addError(sprintf("Error le fichier n'existe pas : %s", $lPath));
            return "";
        }
        return $lPath;
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
}
//===============================================
?>
