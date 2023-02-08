<?php   
//===============================================
class GLog {
    //===============================================
    protected $m_type = "";
    protected $m_side = "";
    protected $m_msg = "";
    protected $m_map = array();
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    public function clone() {
        $lObj = new GLog();
        $lObj->setLog($this);
        return $lObj;
    }
    //===============================================
    public function clearMap() {
        $this->m_map = array();
    }
    //===============================================
    public function serialize($_code = "logs") {
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->addData($_code, "type", $this->m_type);
        $lDom->addData($_code, "side", $this->m_side);
        $lDom->addData($_code, "msg", $this->m_msg);
        $lDom->addMap($_code, $this->m_map);
        return $lDom->toString();
    }
    //===============================================
    public function deserialize($_data, $_code = "logs") {
        $lDom = new GCode();
        $lDom->loadXml($_data);
        $this->m_type = $lDom->getItem($_code, "type");
        $this->m_side = $lDom->getItem($_code, "side");
        $this->m_msg = $lDom->getItem($_code, "msg");
        $lDom->getMap($_code, $this->m_map, $this);
    }
    //===============================================
    public function setLog($_obj) {
        $this->m_type = $_obj->m_type;
        $this->m_side = $_obj->m_side;
        $this->m_msg = $_obj->m_msg;       
    }
    //===============================================
    public function addError($_msg) {
        $lObj = new GLog();
        $lObj->m_type = "error";
        $lObj->m_side = "server";
        $lObj->m_msg = $_msg;
        $this->m_map[] = $lObj;
    }
    //===============================================
    public function addLog($_msg) {
        $lObj = new GLog();
        $lObj->m_type = "log";
        $lObj->m_side = "server";
        $lObj->m_msg = $_msg;
        $this->m_map[] = $lObj;
    }
    //===============================================
    public function addData($_msg) {
        $lObj = new GLog();
        $lObj->m_type = "data";
        $lObj->m_side = "server";
        $lObj->m_msg = base64_encode($_msg);
        $this->m_map[] = $lObj;
    }
    //===============================================
    public function addLogs($_logs) {
        for($i = 0; $i < count($_logs->m_map); $i++) {
            $lObj = $_logs->m_map[$i];
            $this->m_map[] = $lObj;
        }
    }
    //===============================================
    public function hasErrors() {
        for ($i = 0; $i < count($this->m_map); $i++) {
            $lObj = $this->m_map[$i];
            if($lObj->m_type == "error") return true;
        }
        return false;
    }
    //===============================================
    public function hasLogs() {
        for ($i = 0; $i < count($this->m_map); $i++) {
            $lObj = $this->m_map[$i];
            if($lObj->m_type == "log") return true;
        }
        return false;
    }
    //===============================================
    public function showLogs() {
        for ($i = 0; $i < count($this->m_map); $i++) {
            $lObj = $this->m_map[$i];
            if($lObj->m_type == "error") {
                echo sprintf("[ERROR] : %s\n", $lObj->m_msg);
            }
            else if($lObj->m_type == "log") {
                echo sprintf("[INFOS] : %s\n", $lObj->m_msg);
            }
            else if($lObj->m_type == "data") {
                echo sprintf("[DATAS] : %s\n", base64_decode($lObj->m_msg));
            }
        }
    }
    //===============================================
}
//===============================================
?>
