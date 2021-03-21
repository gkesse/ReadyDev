<?php   
//===============================================
class GView {
    //===============================================
    private static $m_instance = null;
    //===============================================
    private function __construct() {

    }
    //===============================================
    public static function Instance() {
        if(is_null(self::$m_instance)) {
            self::$m_instance = new GView();  
        }
        return self::$m_instance;
    }
    //===============================================
    // data
    //===============================================
    public function increment() {
        $lCount = $this->countView();
        if($lCount == 0) {$this->insertView();}
        else {$this->updateView();}
    }    
    //===============================================
    public function getView() {
        $lApp = GManager::Instance()->getData()->app;
        $lView = GSQLite::Instance()->queryValue(sprintf("
        select view_value from view_data
        where view_key='%s'
        ", $lApp->page_id));
        return $lView;
    }    
    //===============================================
    public function countView() {
        $lApp = GManager::Instance()->getData()->app;
        $lCount = GSQLite::Instance()->queryValue(sprintf("
        select count(*) from view_data
        where view_key='%s'
        ", $lApp->page_id));
        return intval($lCount);
    }    
    //===============================================
    public function insertView() {
        $lApp = GManager::Instance()->getData()->app;
        GSQLite::Instance()->queryWrite(sprintf("
        insert into view_data (view_key, view_value)
        values ('%s', %d)
        ", $lApp->page_id, $lApp->view_offset));
    }    
    //===============================================
    public function updateView() {
        $lApp = GManager::Instance()->getData()->app;
        GSQLite::Instance()->queryWrite(sprintf("
        update view_data
        set view_value = view_value + 1
        where view_key = '%s'
        ", $lApp->page_id));
    }    
    //===============================================
}
//===============================================
?>