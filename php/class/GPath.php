<?php
class GPath {
    //===============================================
    public function __construct() {

    }
    //===============================================
    public static function create($_path, $_file = "") {
        $lPath = new GPath();
        $lFile = $lPath->getPath($_path, $_file);
        return $lFile;
    }
    //===============================================
    public function getPath($_path, $_file = "") {
        $lPath = $_SERVER["DOCUMENT_ROOT"];
        if($_path != "") {
            if($lPath == "") $lPath = $_path;
            else $lPath = sprintf("%s/%s", $lPath, $_path);
        }
        if($_file != "") {
            if($lPath == "") $lPath = $_file;
            else $lPath = sprintf("%s/%s", $lPath, $_file);
        }
        return $lPath;
    }
    //===============================================
    public function getUrl($_data) {
        if($_data != "") {
            if($_data[0] != "/") {
                $_data = "/".$_data;
            }
        }
        $lUrl = "https://";
        $lUrl .= $_SERVER['HTTP_HOST'];
        $lUrl .= $_data;
        return $lUrl;
    }//===============================================
}
?>