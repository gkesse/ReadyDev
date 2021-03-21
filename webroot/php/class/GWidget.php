<?php   
//===============================================
class GWidget {
    //===============================================
    public function __construct() {

    }
    //===============================================
    public static function Create($key) {
        // widget
        if($key == "widget") {return new GWidget();}
        if($key == "header") {return new GHeader();}
        if($key == "body") {return new GBody();}
        if($key == "footer") {return new GFooter();}
        if($key == "addresskey") {return new GAddressKey();}
        if($key == "stackwidget") {return new GStackWidget();}
        if($key == "titlebar") {return new GTitleBar();}
        if($key == "view") {return new GViewUi();}
        if($key == "network") {return new GNetwork();}
        // page
        if($key == "window") {return new GWindow();}
        if($key == "home") {return new GHome();}
        if($key == "login") {return new GLoginUi();}
        if($key == "user") {return new GUserUi();}
        if($key == "profile") {return new GProfileUi();}
        //
        if($key == "sqlite") {return new GSQLiteUi();}
        if($key == "sqlitetables") {return new GSQLiteTables();}
        if($key == "sqlitetable") {return new GSQLiteTable();}
        if($key == "sqliteschema") {return new GSQLiteSchema();}
        if($key == "sqlitescript") {return new GSQLiteScript();}
        if($key == "sqlitequery") {return new GSQLiteQuery();}
        if($key == "sqliteoutput") {return new GSQLiteOutput();}
        //
        if($key == "timesheet") {return new GTimesheetUi();}
        if($key == "filesystem") {return new GFilesystem();}
        if($key == "debug") {return new GDebug();}
        if($key == "message") {return new GMessage();}
        // default
        return new GError();
    }
    //===============================================
    // method
    //===============================================
    public function getSummary() {
        $lSummary = "Système d'administration produit par Sogetek";
        return $lSummary;
    }
    //===============================================
    public function run() {}
    public function run2($key) {}
    public function addItem($key, $text, $icon) {}
    public function addPage($key, $text, $title) {}
    public function getPage($key) {return null;}
    public function getTitle($key) {return null;}
    public function getSummary2($key) {return null;}
    //===============================================
}
//===============================================
?>