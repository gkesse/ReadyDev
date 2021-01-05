<?php   
//===============================================
class GSQLite {
    //===============================================
    private static $m_instance = null;
    //===============================================
    private function __construct() {

    }
    //===============================================
    public static function Instance() {
        if(is_null(self::$m_instance)) {
            self::$m_instance = new GSQLite();  
        }
        return self::$m_instance;
    }
    //===============================================
    // method
    //===============================================
    public function open() {
        $lApp = GManager::Instance()->getData()->app;
        $lPath = "";
        $lPath .= $_SERVER["DOCUMENT_ROOT"];
        $lPath .= $lApp->sqlite_db_path;
        $lPath = "sqlite:$lPath";
        
        $lPdo = null;
        
        try {
            $lPdo = new PDO($lPath);
            $lPdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $lPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } 
        catch (Exception $e) {
            $lApp->debug .= sprintf("[sqlite] erreur ouverture : %s<br>", $e->getMessage());
        }

        return lPdo;
    }
    //===============================================
}
//===============================================
?>