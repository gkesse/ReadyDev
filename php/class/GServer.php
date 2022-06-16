<?php   
//===============================================
class GServer extends GModule {
    //===============================================
    private $res = null;
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->res = new GCode();
        $this->res->createDoc();
    }
    //===============================================
    public function deserialize($data, $code = "server") {
        parent::deserialize($data);
    }
    //===============================================
    public function addResponse($res) {
        $this->res->loadCode($res);
    }
    //===============================================
    public function addError() {
        $lLog = GLog::Instance();
        $lError = $lLog->serialize();
        $this->addResponse($lError);
    }
    //===============================================
    public function getResponse() {
        return $this->res->toString();
    }
    //===============================================
    public function run($data) {
        $this->deserialize($data);
        $lModule = $this->module;
        $lMethod = $this->method;
        //===============================================
        if($lModule == "") {
            return false;
        }
        else if($lMethod == "") {
            return false;
        }
        //===============================================
        // module
        //===============================================
        else if($lModule == "user") {
            $this->onUser($data, $this);
        }
        else if($lModule == "sitemap") {
            $this->onSitemap($data, $this);
        }
        else if($lModule == "query") {
            $this->onQuery($data, $this);
        }
        //===============================================
        // end
        //===============================================
        else return false;
        return true;
    }
    //===============================================
    public function onUser($data, $server) {
        $lUser = new GUser();
        $lUser->onModule($data, $server);
    }
    //===============================================
    public function onSitemap($data, $server) {
        $lSitemap = new GSitemap();
        $lSitemap->onModule($data, $server);
    }
    //===============================================
    public function onQuery($data, $server) {
        $lQuery = new GQuery();
        $lQuery->onModule($data, $server);
    }
    //===============================================
    public function sendResponse() {
        echo $this->res->toString();
    }
    //===============================================
 }
//===============================================
?>
