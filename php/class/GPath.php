<?php
class GPath {
    //===============================================
    public function __construct() {

    }
    //===============================================
    public function getPath($path, $file = "") {
        $lPath = $_SERVER["DOCUMENT_ROOT"];
        if($path != "") {
            if($lPath == "") $lPath = $path;
            else $lPath = sprintf("%s/%s", $lPath, $path);
        }
        if($file != "") {
            if($lPath == "") $lPath = $file;
            else $lPath = sprintf("%s/%s", $lPath, $file);
        }
        return $lPath;
    }
    //===============================================
    public function getUrl($data) {
        if($data != "") {
            if($data[0] != "/") {
                $data = "/".$data;
            }
        }
        $lUrl = "https://";
        $lUrl .= $_SERVER['HTTP_HOST'];
        $lUrl .= $data;
        return $lUrl;
    }//===============================================
}
?>