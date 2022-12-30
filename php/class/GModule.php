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
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->addData($code, "module", $this->module);
        $lDom->addData($code, "method", $this->method);
        return $lDom->toStringData();
    }
    //===============================================
    public function deserialize($data, $code = "request") {
        parent::deserialize($data);
        $lDom = new GCode();
        $lDom->loadXml($data);
        $this->module = $lDom->getData($code, "module");
        $this->method = $lDom->getData($code, "method");
    }
    //===============================================
    public function callProxy($server) {
        $lClient = new GSocket();
        $lData = $this->serialize();
        $lData = $lClient->callServer($this->module, $this->method, $lData);
        $this->deserialize($lData);
        $lData = $this->serialize();
        $server->addResponse($lData);
    }
    //===============================================
    public function callProxyTcp($data, $server) {
        $lClient = new GSocket();
        $lData = $lClient->callServerTcp($data);
        $this->deserialize($lData);
        $lData = $this->serialize();
        $server->addResponse($lData);
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
