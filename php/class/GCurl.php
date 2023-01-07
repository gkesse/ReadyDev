<?php
//===============================================
class GCurl extends GObject {
    //===============================================
    private $m_url = "http://www.example.com/";
    private $m_filename = "example_homepage.txt";
    private $m_action = "load_file";
    private $m_httpCode = 0;
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
    public function getHttpCode() {
        return $this->m_httpCode;
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
        $lCurl = curl_init($this->m_url);
        $lFile = null;
        
        if($this->m_action == "load_file") {
            $this->createPath();
            $lFile = fopen($this->m_filename, "w");
            curl_setopt($lCurl, CURLOPT_FILE, $lFile);            
        }
        
        curl_setopt($lCurl, CURLOPT_HEADER, 0);
        
        curl_exec($lCurl);
        
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
