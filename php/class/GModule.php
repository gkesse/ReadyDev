<?php   
//===============================================
class GModule extends GObject {
    //===============================================
    protected $module = "";
    protected $method = "";
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function deserialize($data, $code = "request") {
        $lData = new GCode();
        $lData->loadXmlData($data);
        $this->module = $lData->getItem($code, "module");
        $this->method = $lData->getItem($code, "method");
    }
    //===============================================
    public function serialize($code) {
        $lData = new GCode();
        $lData->createDoc();
        $lData->addData($code, "module", $this->module);
        $lData->addData($code, "method", $this->method);
        return $lData->toStringCode($code);
    }
    //===============================================
 }
//===============================================
?>
