<?php   
//===============================================
class GSQLite {
    //===============================================
    private static $m_instance = null;
    //===============================================
    private function __construct() {
        // config_data
        $lQuery = sprintf("
        create table if not exists config_data (
        config_key text,
        config_value text
        )\n");
        $this->queryWrite($lQuery);
        // config_data
        $lQuery = sprintf("
        select * from sqlite_master
        where type = 'table'
        \n");
        $this->queryShow($lQuery, "20", 20);
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
            $lApp->debug .= sprintf("[sqlite] erreur ouverture : %s<br>\n", $e->getMessage());
        }

        return $lPdo;
    }
    //===============================================
    public function queryShow($sql, $widthMap, $defaultWidth) {
        $lApp = GManager::Instance()->getData()->app;
        $lPdo = $this->open();
        $lStmt = $lPdo->query($sql);
        $lResult = $lStmt->fetchAll();
        
        // header
        for($i = 0; $i < count($lResult); $i++) {
            $lDataMap = $lResult[$i];
            $j = 0;
            foreach($lDataMap as $lKey => $lValue) {
                if($j != 0) {$lApp->debug .= sprintf(" | ");}
                $lWidth = GManager::Instance()->getWidth($widthMap, $j, $defaultWidth);
                $lApp->debug .= sprintf("%20s", $lKey);
                $j++;
            }
        }
        $lApp->debug .= sprintf("<br>");
        
        $lPdo = null;
    }
    //===============================================
    public function queryWrite($sql) {
        $lPdo = $this->open();
        $lPdo->exec($sql);
        $lPdo = null;
    }
    //===============================================
}
//===============================================
?>