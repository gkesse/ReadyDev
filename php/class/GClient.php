<?php   
//===============================================
class GClient extends GSocket {
    //===============================================
    const API_METHOD     = "RDVAPP";
    const API_KEY        = "admin";
    const API_USERNAME   = "admin";
    const API_PASSWORD   = "admin";
    //===============================================
    private $m_method;
    private $m_apiKey;
    private $m_username;
    private $m_password;
    //===============================================
    private $m_request;
    private $m_response;
    //===============================================
    private $m_dataSize;
    private $m_headerSize;
    private $m_diffSize;
    //===============================================
    public function __construct() {
        parent::__construct();
        
        $this->m_method     = self::API_METHOD;
        $this->m_apiKey     = self::API_KEY;
        $this->m_username   = self::API_USERNAME;
        $this->m_password   = self::API_PASSWORD;
        
        $this->m_dataSize   = 0;
        $this->m_headerSize = 0;
        $this->m_diffSize   = 0;
    }
    //===============================================
    public function callServer($_module, $_method, $_data) {
        $lLog = GLog::Instance();
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->createRequest($_module, $_method);
        $lDom->loadData($_data);
        $this->m_request = $lDom->toString();
        $this->callSocket();
        $lLog->deserialize($this->m_response);        
        return $this->m_response;
    }
    //===============================================
    public function createData() {
        if($this->m_request == "") return false;
        if($this->m_method == "") return false;
        if($this->m_apiKey == "") return false;
        if($this->m_username == "") return false;
        if($this->m_password == "") return false;
        
        $lSize = strlen($this->m_request);
        
        $this->m_dataOut = "";
        $this->m_dataOut .= sprintf("%s;", $this->m_method);
        $this->m_dataOut .= sprintf("api_key:%s|", $this->m_apiKey);
        $this->m_dataOut .= sprintf("username:%s|", $this->m_username);
        $this->m_dataOut .= sprintf("password:%s|", $this->m_password);
        $this->m_dataOut .= sprintf("size:%d;", $lSize);
        $this->m_dataOut .= sprintf("%s", $this->m_request);
        
        return true;
    }
    //===============================================
    public function onCallServer() {
        $lString = new GString();
        if($lString->startBy($this->m_dataIn, $this->m_method)) {
            $this->onReadyApp();
        }
        return true;
    }
    //===============================================
    public function onReadyApp() {
        if(!$this->isReadyApp()) return false;
        if(!$this->readData($this->m_diffSize)) return false;
        if(!$this->readResponse()) return false;
        return true;
    }
    //===============================================
    public function isReadyApp() {
        $lString = new GString();
        $lHeader = trim($lString->extract($this->m_dataIn, 1, ";"));
        $lApiKey = ""; $lUsername = ""; $lPassword = ""; $lSize = 0;
        $lCount = $lString->countSep($lHeader, "|");
        
        for($i = 0; $i < $lCount; $i++) {
            $lWord = trim($lString->extract($lHeader, $i, "|"));
            if($lString->startBy($lWord, "api_key")) {
                $lApiKey = trim($lString->extract($lWord, 1, ":"));
            }
            else if($lString->startBy($lWord, "username")) {
                $lUsername = trim($lString->extract($lWord, 1, ":"));
            }
            else if($lString->startBy($lWord, "password")) {
                $lPassword = trim($lString->extract($lWord, 1, ":"));
            }
            else if($lString->startBy($lWord, "size")) {
                $lSize = trim($lString->extract($lWord, 1, ":"));
            }
        }
        
        if($lApiKey != $this->m_apiKey) return false;
        if($lUsername != $this->m_username) return false;
        if($lPassword != $this->m_password) return false;
        $this->m_dataSize = intval($lSize);
        
        $this->m_headerSize = $lString->sepSize($this->m_dataIn, 1, ";");
        $lTotalSize = $this->m_headerSize + $this->m_dataSize;
        $this->m_diffSize = $lTotalSize - strlen($this->m_dataIn);
        if($this->m_diffSize < 0) return false;
        return true;
    }
    //===============================================
    public function readResponse() {
        $this->m_response = substr($this->m_dataIn, $this->m_headerSize);
        if($this->m_response == "") return false;
        return true;
    }
    //===============================================
 }
//===============================================
?>
