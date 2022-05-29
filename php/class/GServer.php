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
    public function getResponse() {
        return $this->res->toString();
    }
    //===============================================
    public function run($data) {
        $this->deserialize($data, "server");
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
        else if($lModule == "header") {
            $this->onHeader($data, $this);
        }
        else if($lModule == "user") {
            $this->onUser($data, $this);
        }
        else if($lModule == "sitemap") {
            $this->onSitemap($data, $this);
        }
        //===============================================
        // end
        //===============================================
        else return false;
        return true;
    }
    //===============================================
    public function onHeader($data, $server) {
        $lHeader = new GHeader();
        $lHeader->onModule($data, $server);
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
    public function sendResponse() {
        echo $this->res->toString();
    }
    //===============================================
 }
//===============================================
?>
