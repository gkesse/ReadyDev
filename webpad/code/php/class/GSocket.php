<?php
//===============================================
class GSocket extends GObject {
    //===============================================
    const BUFFER_DATA_SIZE = 1024;
    const BUFFER_NDATA_SIZE = 256;
    //===============================================
    private $socket;
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->createDom();
    }
    //===============================================
    public function createDom() {
        $this->dom = new GDomXml();
        $this->dom->createDoc();
        $this->dom->loadXmlFile("process.xml");
        $this->dom->createXPath();
    }
    //===============================================
    public function loadDomain() {
        $lDomain = AF_INET;
        $lName = $this->getItem("socket", "domain");
        if($lName == "AF_INET") {
            $lDomain = AF_INET;
        }
        return $lDomain;
    }
    //===============================================
    public function loadType() {
        $lType = SOCK_STREAM;
        $lName = $this->getItem("socket", "type");
        if($lName == "SOCK_STREAM") {
            $lType = SOCK_STREAM;
        }
        return $lType;
    }
    //===============================================
    public function loadProtocol() {
        $lProtocol = SOL_TCP;
        $lName = $this->getItem("socket", "protocol");
        if($lName == "SOL_TCP") {
            $lProtocol = SOL_TCP;
        }
        return $lProtocol;
    }
    //===============================================
    public function createSocket($domain, $type, $protocol) {
        $this->socket = socket_create($domain, $type, $protocol);
        if($this->socket === false) {
            GLog::Instance()->addError(sprintf("Erreur la méthode (%s) a échoué<br>
            - error......: %s", __METHOD__, socket_strerror(socket_last_error())));
        }
    }
    //===============================================
    public function bindSocket($address, $port) {
        $lRes = socket_bind($this->socket, $address, $port);
        if($lRes === false) {
            GLog::Instance()->addError(sprintf("Erreur la méthode (%s) a échoué<br>
            - error......: %s", __METHOD__, socket_strerror(socket_last_error())));
        }
    }
    //===============================================
    public function listenSocket($backlog) {
        $lRes = socket_listen($this->socket, $backlog);
        if($lRes === false) {
            GLog::Instance()->addError(sprintf("Erreur la méthode (%s) a échoué<br>
            - error......: %s", __METHOD__, socket_strerror(socket_last_error())));
        }
    }
    //===============================================
    public function acceptSocket(GSocket $socket) {
        $socket->socket = socket_accept($this->socket);
        if($socket->socket === false) {
            GLog::Instance()->addError(sprintf("Erreur la méthode (%s) a échoué<br>
            - error......: %s", __METHOD__, socket_strerror(socket_last_error())));
        }
    }
    //===============================================
    public function connectSocket($address, $port) {
        $lRes = socket_connect($this->socket, $address, $port);
        if($lRes === false) {
            GLog::Instance()->addError(sprintf("Erreur la méthode (%s) a échoué<br>
            - error......: %s", __METHOD__, socket_strerror(socket_last_error())));
        }
    }
    //===============================================
    public function sendData($data) {
        $lBytes = socket_write($this->socket, $data, strlen($data));
        if($lBytes === false) {
            GLog::Instance()->addError(sprintf("Erreur la méthode (%s) a échoué<br>
            - error......: %s", __METHOD__, socket_strerror(socket_last_error())));
        }
        return $lBytes;
    }
    //===============================================
    public function writeData($data) {
        $lLength = strlen($data);
        $lSize = ceil($lLength/self::BUFFER_DATA_SIZE);
        $lData = str_pad($lSize, self::BUFFER_NDATA_SIZE, " ", STR_PAD_LEFT);
        $this->sendData($lData);
        
        $lBytes = 0;
        
        for($i = 0; $i < $lSize; $i++) {
            $lData = substr($data, $lBytes, self::BUFFER_DATA_SIZE);
            $iBytes = $this->sendData($lData);
            if($iBytes === false) {
                GLog::Instance()->addError(sprintf("Erreur la méthode (%s) a échoué<br>
                - error......: %s", __METHOD__, socket_strerror(socket_last_error())));
                break;
            }
            $lBytes += $iBytes;
        }
        return $lBytes;
    }
    //===============================================
    public function recvData() {
        $lBuffer = $this->recvDataSize(self::BUFFER_DATA_SIZE);
        return $lBuffer;
    }
    //===============================================
    public function recvDataSize($size) {
        $lBuffer = socket_read($this->socket, $size, PHP_BINARY_READ);
        return $lBuffer;
    }
    //===============================================
    public function readData() {
        $lBuffer = $this->recvData(self::BUFFER_NDATA_SIZE);
        $lSize = intval(trim($lBuffer));
        $lData = "";
        
        for($i = 0; $i < $lSize; $i++) {
            $lBuffer = $this->recvData();
            if($lBuffer === false) {
                GLog::Instance()->addError(sprintf("Erreur la méthode (%s) a échoué<br>
                - error......: %s", __METHOD__, socket_strerror(socket_last_error())));
                break;
            }
            $lData .= $lBuffer;
        }
        
        return $lData;
    }
    //===============================================
    public function closeSocket() {
        socket_close($this->socket);
    }
    //===============================================
    public function startMessage() {
        echo sprintf("=====><br>");
        echo sprintf("démarrage du serveur...<br>");
    }
    //===============================================
    public function callServer($dataIn) {        
        $lDomain = $this->loadDomain();
        $lType = $this->loadType();
        $lProtocol = $this->loadProtocol();
        $lAddress = gethostbyname($this->getItem("socket", "server_ip"));
        $lPort = intval($this->getItem("socket", "port"));
        
        $this->createSocket($lDomain, $lType, $lProtocol);
        $this->connectSocket($lAddress, $lPort);
        
        $this->writeData($dataIn);
        $lDataOut = $this->readData();
                
        $this->closeSocket();
        
        return $lDataOut;
    }
    //===============================================
}
//===============================================
?>
