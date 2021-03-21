<?php   
//===============================================
class GProfile {
    //===============================================
    private static $m_instance = null;
    //===============================================
    private function __construct() {

    }
    //===============================================
    public static function Instance() {
        if(is_null(self::$m_instance)) {
            self::$m_instance = new GProfile();  
        }
        return self::$m_instance;
    }
    //===============================================
    // method
    //===============================================
    public function createProfile($datas) {
        $lCount = $this->countProfile();
        if($lCount == 0) {$this->insertProfile($datas);}
        else {$this->updateProfile($datas);}
    }    
    //===============================================
    public function countProfile() {
        $lApp = GManager::Instance()->getData()->app;
        $lCount = GSQLite::Instance()->queryValue(sprintf("
        select count(*) from profile_data
        where user_name = '%s'
        ", $lApp->user_name));
        return intval($lCount);
    }    
    //===============================================
    public function insertProfile($datas) {
        $lApp = GManager::Instance()->getData()->app;
        $lUserFullname = $datas["user_fullname"];
        $lUserManager = $datas["user_manager"];
        $lClientName = $datas["client_name"];
        $lClientAddress = $datas["client_address"];
        GSQLite::Instance()->queryWrite(sprintf("
        insert into profile_data (user_name, user_fullname, user_manager, client_name, client_address)
        values ('%s', '%s', '%s', '%s', '%s')
        ", $lApp->user_name, $lUserFullname, $lUserManager, $lClientName, $lClientAddress));
    }    
    //===============================================
    public function updateProfile($datas) {
        $lApp = GManager::Instance()->getData()->app;
        $lUserFullname = $datas["user_fullname"];
        $lUserManager = $datas["user_manager"];
        $lClientName = $datas["client_name"];
        $lClientAddress = $datas["client_address"];
        GSQLite::Instance()->queryWrite(sprintf("
        update profile_data 
        set user_fullname = '%s', user_manager = '%s', client_name = '%s', client_address = '%s'
        where user_name = '%s'
        ", $lUserFullname, $lUserManager, $lClientName, $lClientAddress, $lApp->user_name));
    }    
    //===============================================
    public function getData($colName) {
        $lApp = GManager::Instance()->getData()->app;
        $lData = GSQLite::Instance()->queryValue(sprintf("
        select %s from profile_data
        where user_name = '%s'
        ", $colName, $lApp->user_name));
        return $lData;
    }    
    //===============================================
}
//===============================================
?>