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
        $lData = "";
        $lData .= sprintf("<div id='TestData' hidden></div>\n");
        $lData .= sprintf("<script>call_server('test', '%s');</script>\n", $_method);
        $this->m_dataLogs->addData($lData);
    }
    //===============================================
}
//===============================================
?>