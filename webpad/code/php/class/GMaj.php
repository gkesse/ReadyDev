<?php
// ===============================================
class GMaj extends GObject {
    // ===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function updateDatabase() {
        $lClient = new GSocket();
        $lRes = $lClient->callServer("maj", "update_database");
        GLog::Instance()->loadErrors($lRes);
        if(GLog::Instance()->hasErrors()) return false;
        return true;
    }
    // ===============================================
}
// ===============================================
?>
