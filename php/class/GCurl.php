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
    private $m_userAgent = "";
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
        $lCurl = curl_init();
        
        curl_setopt($lCurl, CURLOPT_URL, $this->m_url);
        
        if($this->m_timeout) {
            curl_setopt($lCurl, CURLOPT_TIMEOUT, $this->m_timeout);
        }
        
        $lFile = null;
        
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
            curl_setopt($lCurl, CURLOPT_RETURNTRANSFER, true);
        }
        else if($this->m_action == "https_get") {
            curl_setopt($lCurl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($lCurl, CURLOPT_RETURNTRANSFER, true);
        }
        
        $this->m_responseText = utf8_decode(curl_exec($lCurl));
        
        if(curl_error($lCurl)) {
            $this->addError(sprintf("Erreur lors de la connexion au serveur.<br>%s", curl_error($lCurl)));
        }
        
        $this->m_httpCode = curl_getinfo($lCurl, CURLINFO_HTTP_CODE);
        
        curl_close($lCurl);
        
        if($lFile) {
            fclose($lFile);
        }
        
        return $this->m_httpCode;
    }
    //===============================================
}
//===============================================
?>
