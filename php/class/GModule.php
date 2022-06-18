<?php   
//===============================================
class GModule extends GSession {
    //===============================================
    protected $module = "";
    protected $method = "";
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function serialize($code = "request") {
        $lData = new GCode();
        $lData->createDoc();
        $lData->addData($code, "module", $this->module);
        $lData->addData($code, "method", $this->method);
        return $lData->toStringCode($code);
    }
    //===============================================
    public function deserialize($data, $code = "request") {
        parent::deserialize($data);
        $lData = new GCode();
        $lData->loadXml($data);
        $this->module = $lData->getItem($code, "module");
        $this->method = $lData->getItem($code, "method");
    }
    //===============================================
    public function onModuleNone() {
        $lLog = GLog::Instance();
        $lLog->addError(sprintf("Le module est obligatoire."));
    }
    //===============================================
    public function onModuleUnknown() {
        $lLog = GLog::Instance();
        $lLog->addError(sprintf("Le module n'existe pas."));
    }
    //===============================================
    public function onMethodNone() {
        $lLog = GLog::Instance();
        $lLog->addError(sprintf("Le méthode est obligatoire."));
    }
    //===============================================
    public function onMethodUnknown() {
        $lLog = GLog::Instance();
        $lLog->addError(sprintf("Le méthode n'existe pas."));
    }
    //===============================================
 }
//===============================================
?>
