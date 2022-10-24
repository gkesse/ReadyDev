<?php   
    class GPath extends GObject {
        //===============================================
        public function __construct() {
            parent::__construct();            
        }
        //===============================================
        public function getPath($_resource, $_filename) {
            $lPath = $_SERVER["DOCUMENT_ROOT"];
            if($_resource != "") {
                if($lPath == "") $lPath = $_resource;
                else $lPath = sprintf("%s/%s", $lPath, $_resource);
            }
            if($_filename != "") {
                if($lPath == "") $lPath = $_filename;
                else $lPath = sprintf("%s/%s", $lPath, $_filename);
            }
            return $lPath;
        }
        //===============================================
    }
?>