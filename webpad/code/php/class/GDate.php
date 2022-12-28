<?php
//===============================================
class GDate extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
        date_default_timezone_set('Europe/Paris');
    }
    //===============================================
    public function getCurrentDate() {
        $lDate = date('H:i:s');
        return $lDate;
    }
    //===============================================
    public function getCurrentDateTime() {
        $lDate = date('d/m/Y H:i:s');
        return $lDate;
    }
    //===============================================
}
//===============================================
?>
