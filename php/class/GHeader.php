<?php   
//===============================================
class GHeader extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->createDoms();
    }
    //===============================================
    public function getHappyYear() {
        $lHappy = $this->getItem("happyyear", "msg");        
        $lYear = date("Y");
        $lData = sprintf("%s %s", $lHappy, $lYear);
        return $lData;
    }
    //===============================================
    public function countItem($code) {
        $this->dom->queryXPath(sprintf("/rdv/datas/data[code='%s']/map/data", $code));
        $lData = $this->dom->countXPath();
        return $lData;
    }
    //===============================================
}
//===============================================
?>
