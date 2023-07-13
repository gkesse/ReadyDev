<?php
//===============================================
namespace php\class;
//===============================================
class GCurl extends GObject {
    //===============================================
    private $m_codeHttp = 0;
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function codeHttp() {
        return $this->m_codeHttp;
    }
    //===============================================
    public function checkErrors($_data) {
        if($this->m_dataLogs->hasErrors()) {
            $this->m_logs->addError(sprintf("Le serveur n'est pas disponible."));
        }
        else if(!empty($_data)) {
            $lDom = new GCode();
            if(!$lDom->loadXml($_data)) {
                $this->m_logs->addError(sprintf("Le serveur n'est pas disponible."));
                $this->m_logs->addData($_data);
            }
        }
    }
    //===============================================
    public function postHttpFacade($_module, $_method, $_params = "") {
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->addData("manager", "module", $_module);
        $lDom->addData("manager", "method", $_method);
        $lDom->loadData($_params);
        $lData = $lDom->toString();
        $lData = $this->postHttp($lData);
        return $lData;
    }
    //===============================================
    public function postHttp($_data) {
        if(empty($_data)) return "";
        
        $lUrl = "http://127.0.0.1:9010";
        $lUsername = "Admin";
        $lPassword = "Admin";
        $lUserAgent = "ReadyApi/1.0";
        $lTimeout = 10;
                
        $lCurl = curl_init();
        curl_setopt($lCurl, CURLOPT_URL, $lUrl);
        curl_setopt($lCurl, CURLOPT_TIMEOUT, $lTimeout);
        
        $lHeaders = array();
        $lHeaders[] = sprintf("Content-Type: application/xml");
        curl_setopt($lCurl, CURLOPT_HTTPHEADER, $lHeaders);
        
        $lUserPass = sprintf("%s:%s", $lUsername, $lPassword);
        curl_setopt($lCurl, CURLOPT_USERPWD, $lUserPass);
        curl_setopt($lCurl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        
        curl_setopt($lCurl, CURLOPT_USERAGENT, $lUserAgent);
        curl_setopt($lCurl, CURLOPT_POST, true);
        curl_setopt($lCurl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($lCurl, CURLOPT_POSTFIELDS, $_data);
                
        $lData = curl_exec($lCurl);
        
        $lError = curl_error($lCurl);
        
        if($lError) {
            $this->m_dataLogs->addError(sprintf("Le serveur n'est pas disponible.\n%s", $lError));
        }
        
        $this->m_codeHttp = curl_getinfo($lCurl, CURLINFO_HTTP_CODE);
        
        curl_close($lCurl);
        
        $this->checkErrors($lData); 
        
        return $lData;
    }
    //===============================================
}
//===============================================
?>
