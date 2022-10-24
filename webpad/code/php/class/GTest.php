<?php   
//===============================================
class GTest extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->createDom();
    }
    //===============================================
    public function createDom() {
        $this->m_dom = new GXml();
        $this->m_dom->createDocFile("pad.xml");
    }
    //===============================================
    public function run() {
        $lKey = $this->getItem("test", "name");
        //===============================================
        // test
        //===============================================
        if($lKey == "test") {
            $this->runTest();
        }
        //===============================================
        // service
        //===============================================
        else if($lKey == "service/port") {
            $this->runServicePort();
        }
        else if($lKey == "service/ip") {
            $this->runServiceIp();
        }
        //===============================================
        // socket
        //===============================================
        else if($lKey == "socket/server") {
            $this->runSocketServer();
        }
        else if($lKey == "socket/client") {
            $this->runSocketClient();
        }
        else if($lKey == "socket/client/write") {
            $this->runSocketClientWrite();
        }
        else if($lKey == "socket/client/http") {
            $this->runSocketClientHttp();
        }
        //===============================================
        // request
        //===============================================
        else if($lKey == "request/create") {
            $this->runRequestCreate();
        }
        else if($lKey == "request/code") {
            $this->runRequestCode();
        }
        else if($lKey == "request/get_user") {
            $this->runRequestGetUser();
        }
        else if($lKey == "request/save_user") {
            $this->runRequestSaveUser();
        }
        else if($lKey == "request/error") {
            $this->runRequestError();
        }
        //===============================================
        // env
        //===============================================
        else if($lKey == "env") {
            $this->runEnv();
        }
        //===============================================
        // mail
        //===============================================
        else if($lKey == "mail") {
            $this->runMail();
        }
        //===============================================
        // end
        //===============================================
        else {
            $this->runTest();
        }
    }
    //===============================================
    public function runTest() {
        $lKey = $this->getItem("test", "name");
        GLog::Instance()->addLog($lKey);
    }
    //===============================================
    public function runServicePort() {
        $lPort = getservbyname('www', 'tcp');
        GLog::Instance()->addLog($lPort);
    }
    //===============================================
    public function runServiceIp() {
        $lAddress = gethostbyname('readydev.ovh');
        GLog::Instance()->addLog($lAddress);
    }
    //===============================================
    public function runSocketServer() {
        $lServer = new GSocket();
        $lClient = new GSocket();

        $lDomain = $lServer->loadDomain();
        $lType = $lServer->loadType();
        $lProtocol = $lServer->loadProtocol();
        $lAddress = $this->getItem("socket", "client_ip");
        $lPort = intval($this->getItem("socket", "port"));
        $lBacklog = intval($this->getItem("socket", "backlog"));
        
        $lServer->createSocket($lDomain, $lType, $lProtocol);
        $lServer->bindSocket($lAddress, $lPort);
        $lServer->listenSocket($lBacklog);
        
        $lServer->startMessage();
        $lServer->acceptSocket($lClient);
        
        $lData = $lClient->recvData();
        $lClient->sendData("<result>ok</result>");
        
        GLog::Instance()->addLog($lData);
        
        $lClient->closeSocket();
        $lServer->closeSocket();
    }
    //===============================================
    public function runSocketClient() {
        $lClient = new GSocket();
        
        $lDomain = $lClient->loadDomain();
        $lType = $lClient->loadType();
        $lProtocol = $lClient->loadProtocol();
        $lAddress = gethostbyname($this->getItem("socket", "server_ip"));
        $lPort = intval($this->getItem("socket", "port"));
        
        $lClient->createSocket($lDomain, $lType, $lProtocol);
        $lClient->connectSocket($lAddress, $lPort);
        
        $lClient->sendData("[php] : Bonjour tout le monde");
        $lData = $lClient->recvData();
        
        GLog::Instance()->addLog($lData);
        GLog::Instance()->addLog(strlen($lData));
        
        $lClient->closeSocket();
    }
    //===============================================
    public function runSocketClientWrite() {
        $lReq = new GCode();
        $lReq->createRequest("test", "get_user");
        
        $lClient = new GSocket();        
        $lData = $lClient->callServerTcp($lReq->toString());
        
        GLog::Instance()->addLog($lData);        
    }
    //===============================================
    public function runSocketClientHttp() {
        $lClient = new GSocket();
        
        $lDomain = $lClient->loadDomain();
        $lType = $lClient->loadType();
        $lProtocol = $lClient->loadProtocol();
        $lAddress = gethostbyname('readydev.ovh');
        $lPort = 80;
        $lBufferSize = intval($this->getItem("socket", "buffer_size"));
        
        $lRequest = "";
        $lRequest .= "GET / HTTP/1.1\r\n";
        $lRequest .= "Host: readydev.ovh\r\n";
        $lRequest .= "\r\n";
        $lBuffer = "";
        
        $lClient->createSocket($lDomain, $lType, $lProtocol);
        $lClient->connectSocket($lAddress, $lPort);
        
        GLog::Instance()->addLog(sprintf(
            "Sending HTTP HEAD request..."));
        $lClient->sendData($lRequest);
        GLog::Instance()->addLog(sprintf(
            "OK..."));
        
        GLog::Instance()->addLog(sprintf(
            "Reading response..."));
        while (($lBuffer = $lClient->recvData($lBufferSize))) {
            echo mb_convert_encoding($lBuffer, 'UTF-8');
        }
        
        GLog::Instance()->addLog(sprintf(
            "Closing socket..."));
        $lClient->closeSocket();
        GLog::Instance()->addLog(sprintf(
            "OK..."));
    }
    //===============================================
    public function runRequestCreate() {
        $lReq = new GXml();
        $lReq->createDoc();
        $lReq->createRoot("rdv");
        $lReq->createXPath();
        
        $lReq->createNode2("/rdv/datas");
        $lReq->createNode3("data");
        $lReq->createNode4("code", "request");
        $lReq->createNode4("module", "user");
        $lReq->createNode4("method", "save_user");
        $lReq->createNode2("/rdv/datas");
        $lReq->createNode3("data");
        $lReq->createNode4("code", "result");
        $lReq->createNode4("msg", "ok");
        
        GLog::Instance()->addLog($lReq->toString());
    }
    //===============================================
    public function runRequestCode() {
        $lReq = new GCode();
        $lReq->createObj();
        $lReq->createRequest("user", "get_user");
        $lReq->createCode2("parameters", "firstname", "Gerard");
        $lReq->createCode2("parameters", "lastname", "KESSE");
        $lReq->createCode2("result", "msg", "ok");
        GLog::Instance()->addLog($lReq->toString());
    }
    //===============================================
    public function runRequestGetUser() {
        $lReq = new GCode();
        $lReq->createObj();
        $lReq->createRequest("test", "get_user");
        
        $lClient = new GSocket();
        $lData = $lClient->callServerTcp($lReq->toString());
        
        GLog::Instance()->addLog($lData);
    }
    //===============================================
    public function runRequestSaveUser() {
        $lReq = new GCode();
        $lReq->createObj();
        $lReq->createRequest("test", "save_user");
        $lReq->createCode2("parameters", "firstname", "Gerard");
        $lReq->createCode2("parameters", "lastname", "KESSE");
        
        $lClient = new GSocket();
        $lData = $lClient->callServerTcp($lReq->toString());
        
        GLog::Instance()->addLog($lData);
    }
    //===============================================
    public function runRequestError() {
        $lReq = new GCode();
        $lReq->createObj();
        $lReq->createRequest("test", "error");
        
        $lClient = new GSocket();
        $lData = $lClient->callServerTcp($lReq->toString());
        GLog::Instance()->loadErrors($lData);
        
        GLog::Instance()->addLog($lData);
    }
    //===============================================
    public function runEnv() {
        $lEnvObj = new GEnv();
        $lSocket = new GSocket();
        $lEnv = $lEnvObj->getEnv("GPROJECT_ENV");
        GLog::Instance()->addLog(sprintf("GPROJECT_ENV......: %s\n", $lEnv));
        GLog::Instance()->addLog(sprintf("PROD_ENV..........: %s\n", $lEnvObj->isProdEnv()));
        GLog::Instance()->addLog(sprintf("TEST_ENV..........: %s\n", $lEnvObj->isTestEnv()));
        GLog::Instance()->addLog(sprintf("PORT..............: %d\n", $lSocket->loadPort()));
    }
    //===============================================
    public function runMail() {
        $lMailObj = new GMail();
        $lMailObj->sendMail();
    }
    //===============================================
}
//===============================================
?>
