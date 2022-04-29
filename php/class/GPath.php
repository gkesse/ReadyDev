<?php   
    class GPath extends GObject {
        //===============================================
        public function __construct() {
            parent::__construct();            
        }
        //===============================================
        public function getResourcePath($resource, $filename) {
            $lPath = $_SERVER["DOCUMENT_ROOT"];
            if($resource != "") {
                if($lPath == "") $lPath = $resource;
                else $lPath = sprintf("%s/%s", $lPath, $resource);
            }
            if($filename != "") {
                if($lPath == "") $lPath = $filename;
                else $lPath = sprintf("%s/%s", $lPath, $filename);
            }
            return $lPath;
        }
        //===============================================
    }
?>