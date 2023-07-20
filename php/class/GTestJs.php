<?php   
//===============================================
namespace php\class;
//===============================================
class GTestJs extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function run($_module, $_method) {
        echo sprintf("<div id='TestBodyJs'></div>\n");
        $lData = "";
        $lData .= sprintf("<script>call_server('test', '%s');</script>\n", $_method);
        $this->m_dataLogs->addData($lData);
    }
    //===============================================
}
//===============================================
?>