<?php
//===============================================
namespace php\class;
//===============================================
class GSocket extends GObject {
    //===============================================
    const BUFFER_SIZE = 1*1024;     // 1Ko
    const BUFFER_MAX = 1*1024*1024; // 1Mo
    //===============================================
    private $m_socket = null;
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function toPort() {
        if($this->isTestEnv()) return 9011;
        return 9010;
    }
    //===============================================
    public function checkErrors($_data) {
        if($this->m_dataLogs->hasErrors()) {
            $this->m_logs->addError("Le serveur n'est pas disponible.");
        }
        else if($_data != "") {
            $lDom = new GCode();
            if(!$lDom->loadXml($_data)) {
                $this->m_logs->addError("Le serveur n'est pas disponible.");
            }
            else {
                $this->m_logs->deserialize($_data);
            }
        }
    }
    //===============================================
    public function sendData($_data) {
        $lBytes = fwrite($this->m_socket, $_data, strlen($_data));
        if(!$lBytes) {
            $this->m_dataLogs->addError("L'émission des données a échoué.");
        }
    }
    //===============================================
    public function readData() {
        $lData = "";
        while(1) {
            $lBuffer = fread($this->m_socket, self::BUFFER_SIZE);
            if(!$lBuffer) {
                $this->m_dataLogs->addError("La reception des données a échoué.");
                break;
            }
            $lData .= $lBuffer;
            if(strlen($lData) >= self::BUFFER_MAX) {
                $this->m_dataLogs->addError("La taille maximale des données est atteinte.");
                break;
            }
            $lStatus = socket_get_status($this->m_socket);
            $lBytes = $lStatus["unread_bytes"];
            if($lBytes <= 0) break;
        }
        return $lData;
    }
    //===============================================
    public function callFacade($_module, $_method, $_params = "") {
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->addData("manager", "module", $_module);
        $lDom->addData("manager", "method", $_method);
        $lDom->addData("facade", "facade", "server_cpp");
        $lDom->loadData($_params);
        $lData = $lDom->toString();
        $lData = $this->callServer($lData);
        return $lData;
    }
    //===============================================
    public function callServer($_data) {
        $lData = $this->callSocket($_data);
        $this->checkErrors($lData);
        return $lData;
    }
    //===============================================
    public function callSocket($_data) {
        $lHostname = "readydev.ovh";
        $lPort = $this->toPort();
        
        $lAddress = sprintf("tcp://%s:%d", $lHostname, $lPort);
        $lErrCode = null;
        $lErrMsg = null;
        
        $this->m_socket = @stream_socket_client($lAddress, $lErrCode, $lErrMsg, 30);
        
        if(!$this->m_socket) {
            $this->m_dataLogs->addError("La création du socket a échoué.");
            return;
        }
        
        $this->sendData($_data);
        $lData = $this->readData();
        
        fclose($this->m_socket);
        return $lData;
    }
    //===============================================
}
//===============================================
?>
