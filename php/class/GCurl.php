<?php
//===============================================
class GCurl extends GObject {
    //===============================================
    private $m_url = "";
    private $m_filename = "";
    private $m_action = "";
    private $m_httpCode = 0;
    private $m_responseText = 0;
    private $m_timeout = 0;
    private $m_hasUserAgent = false;
    private $m_hasUserPass = false;
    private $m_userAgent = "";
    private $m_username = "";
    private $m_password = "";
    private $m_content = "";
    private $m_contentType = "";
    private $m_headers = array();
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function setUrl($_url) {
        $this->m_url = $_url;
    }
    //===============================================
    public function setFilename($_filename) {
        $this->m_filename = $_filename;
    }
    //===============================================
    public function setAction($_action) {
        $this->m_action = $_action; 
    }
    //===============================================
    public function setTimeout($_timeout) {
        $this->m_timeout = $_timeout;
    }
    //===============================================
    public function setHasUserAgent($_hasUserAgent) {
        $this->m_hasUserAgent = $_hasUserAgent;
    }
    //===============================================
    public function setUserAgent($_userAgent) {
        $this->m_userAgent = $_userAgent;
    }
    //===============================================
    public function setHasUserPass($_hasUserPass) {
        $this->m_hasUserPass = $_hasUserPass;
    }
    //===============================================
    public function setUsername($_username) {
        $this->m_username = $_username;
    }
    //===============================================
    public function setPassword($_password) {
        $this->m_password = $_password;
    }
    //===============================================
    public function setContent($_content) {
        $this->m_content = $_content;
    }
    //===============================================
    public function setContentType($_contentType) {
        $this->m_contentType = $_contentType;
    }
    //===============================================
    public function getHttpCode() {
        return $this->m_httpCode;
    }
    //===============================================
    public function getResponseText() {
        return $this->m_responseText;
    }
    //===============================================
    public function createPath() {
        $this->m_filename = sprintf("examples/%s", $this->m_filename);
        $lPath = dirname($this->m_filename);        
        if(!file_exists($lPath)) {
            mkdir($lPath, 0777, true);
        }
    }
    //===============================================
    public function run() {
        $lFile = null;
        
        $lCurl = curl_init();
        
        curl_setopt($lCurl, CURLOPT_URL, $this->m_url);
        
        if($this->m_timeout > 0) {
            curl_setopt($lCurl, CURLOPT_TIMEOUT, $this->m_timeout);
        }
        if($this->m_contentType != "") {
            $lContentType = sprintf("Content-Type: %s", $this->m_contentType);
            $this->m_headers[] = $lContentType;
        }
        
        if(!empty($this->m_headers)) {
            curl_setopt($lCurl, CURLOPT_HTTPHEADER, $this->m_headers);
        }
        
        if($this->m_hasUserPass) {
            $lUserPass = sprintf("%s:%s", $this->m_username, $this->m_password);
            curl_setopt($lCurl, CURLOPT_USERPWD, $lUserPass);
            curl_setopt($lCurl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        }
        
        if($this->m_action == "load_file") {
            $this->createPath();
            $lFile = fopen($this->m_filename, "w");
            curl_setopt($lCurl, CURLOPT_HEADER, 0);
            curl_setopt($lCurl, CURLOPT_FILE, $lFile);
        }
        else if($this->m_action == "http_get") {
            if($this->m_hasUserAgent) {
                curl_setopt($lCurl, CURLOPT_USERAGENT, $this->m_userAgent);
            }
            curl_setopt($lCurl, CURLOPT_HTTPGET, 1);
            curl_setopt($lCurl, CURLOPT_RETURNTRANSFER, true);
        }
        else if($this->m_action == "http_post") {
            if($this->m_content == "") $this->m_content = "<msg>no_data</msg>";
            if($this->m_hasUserAgent) {
                curl_setopt($lCurl, CURLOPT_USERAGENT, $this->m_userAgent);
            }
            curl_setopt($lCurl, CURLOPT_POST, 1);
            curl_setopt($lCurl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($lCurl, CURLOPT_POSTFIELDS, $this->m_content);
        }
        else if($this->m_action == "https_get") {
            if($this->m_hasUserAgent) {
                curl_setopt($lCurl, CURLOPT_USERAGENT, $this->m_userAgent);
            }
            curl_setopt($lCurl, CURLOPT_HTTPGET, 1);
            curl_setopt($lCurl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($lCurl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($lCurl, CURLOPT_SSL_VERIFYPEER, false);
        }
        else if($this->m_action == "https_post") {
            if($this->m_content == "") $this->m_content = "<msg>no_data</msg>";
            if($this->m_hasUserAgent) {
                curl_setopt($lCurl, CURLOPT_USERAGENT, $this->m_userAgent);
            }
            curl_setopt($lCurl, CURLOPT_POST, 1);
            curl_setopt($lCurl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($lCurl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($lCurl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($lCurl, CURLOPT_POSTFIELDS, $this->m_content);
        }
        
        $this->m_responseText = curl_exec($lCurl);        
        if(curl_error($lCurl)) {
            $this->m_responseText = curl_exec($lCurl);            
            if(curl_error($lCurl)) {
                $this->m_responseText = curl_exec($lCurl);
                if(curl_error($lCurl)) {
                    $this->addError(sprintf("Erreur lors de la connexion au serveur."));
                    //$this->addError(sprintf("Erreur lors de la connexion au serveur.<br>%s", curl_error($lCurl)));
                }
            }
        }
        
        $this->m_httpCode = curl_getinfo($lCurl, CURLINFO_HTTP_CODE);
        
        curl_close($lCurl);
        
        if($lFile) {
            fclose($lFile);
        }
        
        return $this->m_httpCode;
    }
    //===============================================
    public function callServer($_module, $_method, $_data) {
        $lDom = new GCode();
        $lDom->createRequest($_module, $_method);
        $lDom->loadData($_data);
        $this->callPostHttp($lDom->toString());
    }
    //===============================================
    public function callProxy($_data) {
        $this->callPostHttp($_data);
    }
    //===============================================
    public function callPostHttp($_data) {
        $this->setAction("https_post");
        $this->setUrl("https://readydev.ovh:9081/readyapi 1.0");
        $this->setUserAgent("rdvapp/1.0");
        $this->setUsername("admin");
        $this->setPassword("adminpass");
        $this->setContentType("application/xml");
        $this->setContent($_data);
        $this->setTimeout(3);
        $this->setHasUserAgent(true);
        $this->setHasUserPass(true);
        $this->run();
    }
    //===============================================
    public function callPostHttps($_data) {
        $this->setAction("https_post");
        $this->setUrl("https://readydev.ovh:9071/readyapi-1.0");
        $this->setUserAgent("rdvapp/1.0");
        $this->setUsername("admin");
        $this->setPassword("adminpass");
        $this->setContentType("application/xml");
        $this->setContent($_data);
        $this->setTimeout(3);
        $this->setHasUserAgent(true);
        $this->setHasUserPass(true);
        $this->run();
    }
    //===============================================
}
//===============================================
?>
