<?php
class GPath extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function getPath($path, $filename = "") {
        $lPath = $_SERVER["DOCUMENT_ROOT"];
        if($path != "") {
            if($lPath == "") $lPath = $path;
            else $lPath = sprintf("%s/%s", $lPath, $path);
        }
        if($filename != "") {
            if($lPath == "") $lPath = $filename;
            else $lPath = sprintf("%s/%s", $lPath, $filename);
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