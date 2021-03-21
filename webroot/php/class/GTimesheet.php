<?php   
//===============================================
class GTimesheet {
    //===============================================
    private static $m_instance = null;
    private $m_rows = 5;
    private $m_cols = 7;
    private $m_pattern = "/[0]{2,3}h[0]{2}/i";
    //===============================================
    private function __construct() {

    }
    //===============================================
    public static function Instance() {
        if(is_null(self::$m_instance)) {
            self::$m_instance = new GTimesheet();  
        }
        return self::$m_instance;
    }
    //===============================================
    // method
    //===============================================
    public function saveData($datas) {
        $lApp = GManager::Instance()->getData()->app;
        for($lRow = 0; $lRow < $this->m_rows; $lRow++) {
            for($lCol = 0; $lCol < $this->m_cols; $lCol++) {
                $lKey = sprintf("data_%d_%d", $lRow, $lCol);
                $lData = $datas[$lKey];
                if($lCol == 5) {if($lData == 0) {continue;}}
                else {if(preg_match($this->m_pattern, $lData)) {continue;}}
                //
                $lDatas = array(
                "user_fullname" => $datas["user_fullname"],
                "user_manager" => $datas["user_manager"],
                "client_name" => $datas["client_name"],
                "client_address" => $datas["client_address"],
                "month" => $datas["month"],
                "year" => $datas["year"],
                "row" => $lRow,
                "col" => $lCol,
                "data" => $lData,
                );
                //
                $lCount = $this->countData($lDatas);
                if($lCount == 0) {$this->insertData($lDatas);}
                else {$this->updateData($lDatas);}
            }
        }
    }    
    //===============================================
    public function countData($datas) {
        $lApp = GManager::Instance()->getData()->app;
        $lMonth = $datas["month"];
        $lYear = $datas["year"];
        $lRow = $datas["row"];
        $lCol = $datas["col"];
        $lCount = GSQLite::Instance()->queryValue(sprintf("
        select count(*) from timesheet_data
        where user_name = '%s'
        and month = %d
        and year = %d
        and row = %d
        and col = %d
        ", $lApp->user_name, $lMonth, $lYear, $lRow, $lCol));
        return intval($lCount);
    }    
    //===============================================
    public function insertData($datas) {
        $lApp = GManager::Instance()->getData()->app;
        $lUserFullname = $datas["user_fullname"];
        $lUserManager = $datas["user_manager"];
        $lClientName = $datas["client_name"];
        $lClientAddress = $datas["client_address"];
        $lMonth = $datas["month"];
        $lYear = $datas["year"];
        $lRow = $datas["row"];
        $lCol = $datas["col"];
        $lData = $datas["data"];
        GSQLite::Instance()->queryWrite(sprintf("
        insert into timesheet_data (user_name, user_fullname, user_manager, client_name, client_address, month, year, row, col, data)
        values ('%s', '%s', '%s', '%s', '%s', %d, %d, '%s', '%s', '%s')
        ", $lApp->user_name, $lUserFullname, $lUserManager, $lClientName, $lClientAddress, $lMonth, $lYear, $lRow, $lCol, $lData));
    }    
    //===============================================
    public function updateData($datas) {
        $lApp = GManager::Instance()->getData()->app;
        $lUserFullname = $datas["user_fullname"];
        $lUserManager = $datas["user_manager"];
        $lClientName = $datas["client_name"];
        $lClientAddress = $datas["client_address"];
        $lMonth = $datas["month"];
        $lYear = $datas["year"];
        $lRow = $datas["row"];
        $lCol = $datas["col"];
        $lData = $datas["data"];
        GSQLite::Instance()->queryWrite(sprintf("
        update timesheet_data
        set user_name = '%s', user_fullname = '%s', user_manager = '%s', client_name = '%s', client_address = '%s', month = %d, year = %d, row = '%s', col = '%s', data = '%s'
        where user_name = '%s'
        and month = %d
        and year = %d
        and row = %d
        and col = %d
        ", $lApp->user_name, $lUserFullname, $lUserManager, $lClientName, $lClientAddress, $lMonth, $lYear, $lRow, $lCol, $lData, $lApp->user_name, $lMonth, $lYear, $lRow, $lCol));
    }    
    //===============================================
    public function getData($datas) {
        $lApp = GManager::Instance()->getData()->app;
        $lMonth = $datas["month"];
        $lYear = $datas["year"];
        $lRow = $datas["row"];
        $lCol = $datas["col"];
        $lData = GSQLite::Instance()->queryValue(sprintf("
        select data from timesheet_data
        where user_name = '%s'
        and month = %d
        and year = %d
        and row = %d
        and col = %d
        ", $lApp->user_name, $lMonth, $lYear, $lRow, $lCol));
        return $lData;
    }    
    //===============================================
    public function getUserFullname($datas) {
        $lApp = GManager::Instance()->getData()->app;
        $lMonth = $datas["month"];
        $lYear = $datas["year"];
        $lData = GSQLite::Instance()->queryValue(sprintf("
        select distinct user_fullname from timesheet_data
        where user_name = '%s'
        and month = %d
        and year = %d
        ", $lApp->user_name, $lMonth, $lYear));
        if($lData == "") {$lData = GProfile::Instance()->getData("user_fullname");}
        return $lData;
    }    
    //===============================================
    public function getUserManager($datas) {
        $lApp = GManager::Instance()->getData()->app;
        $lMonth = $datas["month"];
        $lYear = $datas["year"];
        $lData = GSQLite::Instance()->queryValue(sprintf("
        select distinct user_manager from timesheet_data
        where user_name = '%s'
        and month = %d
        and year = %d
        ", $lApp->user_name, $lMonth, $lYear));
        if($lData == "") {$lData = GProfile::Instance()->getData("user_manager");}
        return $lData;
    }    
    //===============================================
    public function getClientName($datas) {
        $lApp = GManager::Instance()->getData()->app;
        $lMonth = $datas["month"];
        $lYear = $datas["year"];
        $lData = GSQLite::Instance()->queryValue(sprintf("
        select distinct client_name from timesheet_data
        where user_name = '%s'
        and month = %d
        and year = %d
        ", $lApp->user_name, $lMonth, $lYear));
        if($lData == "") {$lData = GProfile::Instance()->getData("client_name");}
        return $lData;
    }    
    //===============================================
    public function getClientAddress($datas) {
        $lApp = GManager::Instance()->getData()->app;
        $lMonth = $datas["month"];
        $lYear = $datas["year"];
        $lData = GSQLite::Instance()->queryValue(sprintf("
        select distinct client_address from timesheet_data
        where user_name = '%s'
        and month = %d
        and year = %d
        ", $lApp->user_name, $lMonth, $lYear));
        if($lData == "") {$lData = GProfile::Instance()->getData("client_address");}
        return $lData;
    }    
    //===============================================
}
//===============================================
?>