<?php
//===============================================
class GStreamSocket extends GObject {
    //===============================================
    private $m_action = "";
    private $m_hostname = "";
    private $m_startMessage = "";
    private $m_port = 0;
    private $m_socket = 0;
    private $m_timeout = 0;
    private $m_data = "";
    private $m_response = "";
    //===============================================
    private const BUFFER_SIZE = 1024;
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function setAction($_action) {
        $this->m_action = $_action;
    }
    //===============================================
    public function setHostname($_hostname) {
        $this->m_hostname = $_hostname;
    }
    //===============================================
    public function setPort($_port) {
        $this->m_port = $_port;
    }
    //===============================================
    public function setTimeout($_timeout) {
        $this->m_timeout = $_timeout;
    }
    //===============================================
    public function setData($_data) {
        $this->m_data = $_data;
    }
    //===============================================
    public function setStartMessage($_startMessage) {
        $this->m_startMessage = $_startMessage;
    }
    //===============================================
    public function getResponse() {
        return $this->m_response;
    }
    //===============================================
    public function run() {
        if($this->m_action == "") {
            $this->addError("L'action est obligatoire.");
        }
        else if($this->m_action == "server_tcp") {
            $this->runServerTcp();
        }
        else if($this->m_action == "client_tcp") {
            $this->runClientTcp();
        }
        else {
            $this->addError("L'action est inconnue.");
        }
        return !$this->hasErrors();
    }
    //===============================================
    public function runServerTcp() {
        if($this->m_hostname == "") {
            $this->addError("L'adresse est obligatoire.");
            return false;
        }
        if($this->m_port == 0) {
            $this->addError("Le port est obligatoire.");
            return false;
        }
        if($this->m_startMessage == "") {
            $this->addError("Le message de démarrage est obligatoire.");
            return false;
        }
        $lUrl = sprintf("tcp://%s:%d", $this->m_hostname, $this->m_port);
        $lErrno = 0;
        $lErrmsg = "";
        $this->m_socket = stream_socket_server($lUrl, $lErrno, $lErrmsg);
        if(!$this->m_socket) {
            $this->addError("La création du stream socket a échoué.\n[%d] : %s", $lErrno, $lErrmsg);
            return false;
        }
        echo sprintf("\n%s\n\n", $this->m_startMessage);
        while(1) {
            $this->clearLogs();
            $lClient = new GStreamSocket();
            $lClient->m_socket = stream_socket_accept($this->m_socket);
            if($lClient->m_socket === false) {
                $this->addError("L'accepation de la connexion client a échoué.");
                continue;
            }
            $lClient->runServerTcpCB();
        }
        fclose($this->m_socket);
        return !$this->hasErrors();
    }
    //===============================================
    public function runClientTcp() {
        if($this->m_hostname == "") {
            $this->addError("L'adresse est obligatoire.");
            return false;
        }
        if($this->m_port == 0) {
            $this->addError("Le port est obligatoire.");
            return false;
        }
        if($this->m_timeout == 0) {
            $this->addError("Le timeout est obligatoire.");
            return false;
        }
        if($this->m_data == "") {
            $this->addError("La donnée est obligatoire.");
            return false;
        }
        $lUrl = sprintf("tcp://%s:%d", $this->m_hostname, $this->m_port);
        $lErrno = 0;
        $lErrmsg = "";
        $this->m_socket = stream_socket_client($lUrl, $lErrno, $lErrmsg, $this->m_timeout);
        if(!$this->m_socket) {
            $this->addError("La création du stream socket a échoué.\n[%d] : %s", $lErrno, $lErrmsg);
            return false;
        }
        $this->sendData($this->m_data);
        $this->m_response = $this->readData();
        fclose($this->m_socket);
    }
    //===============================================
    public function runServerTcpCB() {
        $lData = $this->readData();
        echo sprintf("\n[RECEPTION] : [%d]\n%s\n", strlen($lData), $lData);
        $this->onServerTcp($lData);
        $this->sendResponse();
    }
    //===============================================
    public function readData() {
        $lData = "";
        $lBytes = self::BUFFER_SIZE;
        while(1) {
            $lBuffer = fread($this->m_socket, $lBytes);
            $lData .= $lBuffer;
            $lStatus = socket_get_status($this->m_socket);
            $lBytes = $lStatus["unread_bytes"];
            if($lBytes > self::BUFFER_SIZE) $lBytes = self::BUFFER_SIZE;
            if(!$lBytes) break;
        }
        return $lData;
    }
    //===============================================
    public function sendData($_data) {
        fwrite($this->m_socket, $_data);
    }
    //===============================================
    public function sendResponse() {
        $this->addResponse($this->loadLogs());
        $lResponse = $this->toResponse();
        echo sprintf("\n[EMISSION] : [%d]\n%s\n", strlen($lResponse), $lResponse);
        $this->sendData($lResponse);
        fclose($this->m_socket);
    }
    //===============================================
    public function onServerTcp($_data) {
        $this->addLog("La requête a été exécutée.");
    }
    //===============================================
};
//===============================================
?>