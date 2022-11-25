<?php
//===============================================
class GSocket extends GObject {
    //===============================================
    const BUFFER_SIZE = 1024;
    const METHOD_SIZE = 1024;
    //===============================================
    private $m_domain;
    private $m_type;
    private $m_protocol;
    private $m_address;
    private $m_port;
    private $m_socket;
    //===============================================
    protected $m_dataIn;
    protected $m_dataOut;
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->m_domain = AF_INET;
        $this->m_type = SOCK_STREAM;
        $this->m_protocol = SOL_TCP;
        $this->m_address = "192.168.1.45";
        $this->m_port = 9001;
        $this->m_backlog = 5;
        $this->m_dataIn = "";
        $this->m_dataOut = "";
    }
    //===============================================
    public function runServer() {
        $lLog = GLog::Instance();
        $lSocket = socket_create($this->m_domain, $this->m_type, $this->m_protocol);
        if(!$lSocket) {$lLog->addError(sprintf("La création du point de connexion a échoué.")); return false;}
        $lBind = socket_bind($this->m_socket, $this->m_address, $this->m_port);
        if(!$lBind) {$lLog->addError(sprintf("La liaison du point de connexion a échoué.")); return false;}
        $lListen = socket_listen($this->m_socket, $this->m_backlog);
        if(!$lListen) {$lLog->addError(sprintf("L'initialisation du nombre de d'écoute a échoué.")); return false;}
        $lSocket2 = socket_accept($lSocket);
        if(!$lSocket2) {$lLog->addError(sprintf("L'acceptation de la connexion client a échoué.")); return false;}
        socket_close($lSocket2);
        socket_close($lSocket);
        return true;
    }
    //===============================================
    public function callSocket() {
        $lLog = GLog::Instance();
        $this->m_socket = @socket_create($this->m_domain, $this->m_type, $this->m_protocol);
        if(!$this->m_socket) {$lLog->addError(sprintf("La création du point de connexion a échoué.")); return false;}
        $lConnect = @socket_connect($this->m_socket, $this->m_address, $this->m_port);
        if(!$lConnect) {$lLog->addError(sprintf("La connexion au serveur a échoué.")); return false;}
        
        $this->m_dataOut = "";
        $this->m_dataIn = "";
        
        if($this->createData()) {
            if($this->sendData()) {
                if($this->readMethod()) {
                    $this->onCallServer();
                }
            }
        }
        
        socket_close($this->m_socket);
        return true;
    }
    //===============================================
    public function sendData() {
        if($this->m_dataOut == "") return false;
        $lIndex = 0;
        $lSize = strlen($this->m_dataOut);        
        while(1) {
            $lBuffer = substr($this->m_dataOut, $lIndex, self::BUFFER_SIZE);            
            $lBytes = socket_write($this->m_socket, $lBuffer, strlen($lBuffer));
            if($lBytes <= 0) return false;
            $lIndex += $lBytes;
            if($lIndex >= $lSize) break;
        }        
        return true;
    }
    //===============================================
    public function readData($_diffSize) {
        if($_diffSize < 0) return false;
        if($_diffSize == 0) return true;
        $lSize = 0;
        while(1) {
            $lData = socket_read($this->m_socket, self::BUFFER_SIZE, PHP_BINARY_READ);
            if(!$lData) return false;
            $this->m_dataIn .= $lData;
            $lSize += strlen($lData);
            if($lSize >= $_diffSize) return true;
        }
        return true;
    }
    //===============================================
    public function readMethod() {
        $lData = socket_read($this->m_socket, self::METHOD_SIZE, PHP_BINARY_READ);
        if(!$lData) return false;
        $this->m_dataIn .= $lData;
        return true;
    }
    //===============================================
    public function createData() {}
    public function onCallServer() {}
    //===============================================
}
//===============================================
?>
