<?php
class GFile extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function getData($path, $filename = "") {
        $lPathObj = new GPath();
        $lFile = $lPathObj->getPath($path, $filename);
        $lData = file_get_contents($lFile);
        return $lData;
    }
    //===============================================
}
?>