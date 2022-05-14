<?php
//===============================================
class GPath extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function getPath($repo, $file) {
        $lPath = "";
        $lServerRoot = $_SERVER["DOCUMENT_ROOT"];
        $lWebRoot = $this->getConfig("webroot");
        // server_root
        if($lServerRoot != "") {$lPath .= $lServerRoot;}
        // web_root
        if($lWebRoot != "") {
            if($lPath == "") {
                $lPath .= $lWebRoot;
            }
            else {
                $lPath .= "/" . $lWebRoot;
            }
        }
        // repo
        if($repo != "") {
            if($lPath == "") {$lPath .= $repo;}
            else {$lPath .= "/" . $repo;}
        }
        // file
        if($file != "") {
            if($lPath == "") {$lPath .= $file;}
            else {$lPath .= "/" . $file;}
        }
        //
        return $lPath;
    }
    //===============================================
}
//===============================================
?>
