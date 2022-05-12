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
        $this->dom = new GXml();
        $this->dom->createDocFile("pad.xml");
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
    public function loadPort() {
        $lEnvObj = new GEnv();
        $lPort = $this->loadPortEnv($lEnvObj->isTestEnv());
        return $lPort;
    }
    //===============================================
    public function loadPortEnv($isTestEnv) {
        $lPort = intval($this->getItem("socket", "prod_port"));
        if($isTestEnv) $lPort = intval($this->getItem("socket", "test_port"));
        return $lPort;
    }
    //===============================================
    public function createSocket($domain, $type, $protocol) {
        $this->socket = socket_create($domain, $type, $protocol);
        if($this->socket === false) {
            GLog::Instance()->addError(sprintf(
                "Erreur la creation du socket.<br>
                - error......: (%s)<br>"
                , socket_strerror(socket_last_error())));
        }
    }
    //===============================================
    public function bindSocket($address, $port) {
        $lRes = socket_bind($this->socket, $address, $port);
        if($lRes === false) {
            GLog::Instance()->addError(sprintf(
                "Erreur lors liaison du socket a l'adresse.<br>
                - error......: (%s)<br>"
                , socket_strerror(socket_last_error())));
        }
    }
    //===============================================
    public function listenSocket($backlog) {
        $lRes = socket_listen($this->socket, $backlog);
        if($lRes === false) {
            GLog::Instance()->addError(sprintf(
                "Erreur lors l'initialisation du nombre de connexion a ecouter.<br>
                - error......: (%s)<br>"
                , socket_strerror(socket_last_error())));
        }
    }
    //===============================================
    public function acceptSocket(GSocket $socket) {
        $socket->socket = socket_accept($this->socket);
        if($socket->socket === false) {
            GLog::Instance()->addError(sprintf(
                "Erreur lors de l'acceptation de la connexion d'un client.<br>
                - error......: (%s)<br>"
                , socket_strerror(socket_last_error())));
        }
    }
    //===============================================
    public function connectSocket($address, $port) {
        $lRes = socket_connect($this->socket, $address, $port);
        if($lRes === false) {
            GLog::Instance()->addError(sprintf(
                "Erreur lors de la connexion au serveur.<br>
                - error......: (%s)<br>"
                , socket_strerror(socket_last_error())));
        }
    }
    //===============================================
    public function sendData($data) {
        $lBytes = socket_write($this->socket, $data, strlen($data));
        if($lBytes === false) {
            GLog::Instance()->addError(sprintf(
                "Erreur lors de l'envoi des donnees.<br>
                - error......: (%s)<br>"
                , socket_strerror(socket_last_error())));
        }
        return $lBytes;
    }
    //===============================================
    public function writeData($data) {
        $lSize = strlen($data);
        $lKey = $this->getItem("socket", "api_key");
        $lBuffer = sprintf("%s;%d", $lKey, $lSize);
        $lBuffer = str_pad($lBuffer, self::BUFFER_NDATA_SIZE, " ", STR_PAD_RIGHT);
        $this->sendData($lBuffer);
        
        $lBytes = 0;
        
        while(1) {
            if($lBytes >= $lSize) break;
            $lBuffer = substr($data, $lBytes, self::BUFFER_DATA_SIZE);
            $iBytes = $this->sendData($lBuffer);
            if($iBytes === false) {
                GLog::Instance()->addError(sprintf(
                    "Erreur lors de l'envoi des donnees.<br>
                    error........: (%s)<br>"
                    , socket_strerror(socket_last_error())));
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
        $lSize = strlen($lBuffer);
        if($lSize != self::BUFFER_NDATA_SIZE) return "";
        $lBuffer = trim($lBuffer);
        $lMap = explode(";", $lBuffer);
        if(count($lMap) != 2) return "";
        $lBuffer = $lMap[0];
        $lKey = $this->getItem("socket", "api_key");
        if($lBuffer != $lKey) return "";
        $lBuffer = $lMap[1];
        $lSize = intval($lBuffer);
        $lBytes = 0;
        $lData = "";
        
        while(1) {
            if($lBytes >= $lSize) break;
            $lBuffer = $this->recvData();
            if($lBuffer === false) {
                GLog::Instance()->addError(sprintf(
                    "Erreur lors de la reception des donnees.<br>
                    error........: (%s)<br>"
                    , socket_strerror(socket_last_error())));
                break;
            }
            $lData .= $lBuffer;
            $lBytes += strlen($lBuffer);
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
    public function callServer($module, $method, $params = "") {
        $lReq = new GCode();
        $lReq->createObj();
        $lReq->createRequest($module, $method);
        $lReq->loadCode($params);
        $lReq->addUser();
        $lDataOut = $this->callServerTcp($lReq->toString());
        return $lDataOut;
    }
    //===============================================
    public function callServerTcp($dataIn) {
        $lDomain = $this->loadDomain();
        $lType = $this->loadType();
        $lProtocol = $this->loadProtocol();
        $lAddress = gethostbyname($this->getItem("socket", "server_ip"));
        $lPort = $this->loadPort();
        
        $this->createSocket($lDomain, $lType, $lProtocol);
        $this->connectSocket($lAddress, $lPort);
                
        $this->writeData($dataIn);
        $lDataOut = $this->readData();
        GLog::Instance()->loadErrors($lDataOut);
        
        if(GLog::Instance()->hasErrors()) {
            GLog::Instance()->clearErrors();
            GLog::Instance()->addError(sprintf("Erreur la connexion au serveur a échoué."));
        }
        
        $this->closeSocket();
        
        return $lDataOut;
    }
    //===============================================
}
//===============================================
?>
