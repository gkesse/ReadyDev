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
        $this->dom = new GXml();
        $this->dom->createDocFile("pad.xml");
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
        // end
        //===============================================
        else {
            $this->runTest();
        }
    }
    //===============================================
    public function runTest() {
        echo sprintf("%s<br>", __METHOD__);
    }
    //===============================================
    public function runServicePort() {
        echo sprintf("%s<br>", __METHOD__);
        $lPort = getservbyname('www', 'tcp');
        echo sprintf("%d<br>", $lPort);
    }
    //===============================================
    public function runServiceIp() {
        echo sprintf("%s<br>", __METHOD__);
        $lAddress = gethostbyname('readydev.ovh');
        echo sprintf("%s<br>", $lAddress);
    }
    //===============================================
    public function runSocketServer() {
        echo sprintf("%s<br>", __METHOD__);
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
        
        GConsole::Instance()->printData($lData);
        
        $lClient->closeSocket();
        $lServer->closeSocket();
    }
    //===============================================
    public function runSocketClient() {
        echo sprintf("%s<br>", __METHOD__);
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
        
        GConsole::Instance()->printData($lData);
        GConsole::Instance()->printData(strlen($lData));
        
        $lClient->closeSocket();
    }
    //===============================================
    public function runSocketClientWrite() {
        echo sprintf("%s<br>", __METHOD__);        
        $lReq = new GCode();
        $lReq->createRequest("test", "get_user");
        
        $lClient = new GSocket();        
        $lData = $lClient->callServerTcp($lReq->toString());
        
        GConsole::Instance()->printCode($lData);        
    }
    //===============================================
    public function runSocketClientHttp() {
        echo sprintf("%s<br>", __METHOD__);
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
        
        echo "=====><br>";
        echo "Sending HTTP HEAD request...<br>";
        $lClient->sendData($lRequest);
        echo "OK.<br><br>";
        
        echo "=====><br>";
        echo "Reading response:<br>";
        while (($lBuffer = $lClient->recvData($lBufferSize))) {
            echo mb_convert_encoding($lBuffer, 'UTF-8');
        }
        
        echo "=====><br>";
        echo "Closing socket...<br>";
        $lClient->closeSocket();
        echo "OK.<br><br>";
    }
    //===============================================
    public function runRequestCreate() {
        echo sprintf("%s<br>", __METHOD__);
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
        
        GConsole::Instance()->printCode($lReq->toString());
    }
    //===============================================
    public function runRequestCode() {
        echo sprintf("%s<br>", __METHOD__);
        $lReq = new GCode();
        $lReq->createObj();
        $lReq->createRequest("user", "get_user");
        $lReq->createCode2("parameters", "firstname", "Gerard");
        $lReq->createCode2("parameters", "lastname", "KESSE");
        $lReq->createCode2("result", "msg", "ok");        
        GConsole::Instance()->printCode($lReq->toString());
    }
    //===============================================
    public function runRequestGetUser() {
        echo sprintf("%s<br>", __METHOD__);
        $lReq = new GCode();
        $lReq->createObj();
        $lReq->createRequest("test", "get_user");
        
        $lClient = new GSocket();
        $lData = $lClient->callServerTcp($lReq->toString());
        
        GConsole::Instance()->printCode($lData);
    }
    //===============================================
    public function runRequestSaveUser() {
        echo sprintf("%s<br>", __METHOD__);
        $lReq = new GCode();
        $lReq->createObj();
        $lReq->createRequest("test", "save_user");
        $lReq->createCode2("parameters", "firstname", "Gerard");
        $lReq->createCode2("parameters", "lastname", "KESSE");
        
        $lClient = new GSocket();
        $lData = $lClient->callServerTcp($lReq->toString());
        
        GConsole::Instance()->printCode($lData);
    }
    //===============================================
    public function runRequestError() {
        echo sprintf("%s<br>", __METHOD__);
        $lReq = new GCode();
        $lReq->createObj();
        $lReq->createRequest("test", "error");
        
        $lClient = new GSocket();
        $lData = $lClient->callServerTcp($lReq->toString());
        GLog::Instance()->loadErrors($lData);
        
        GConsole::Instance()->printCode($lData);
    }
    //===============================================
    public function runEnv() {
        echo sprintf("%s<br>", __METHOD__);
        $lEnvObj = new GEnv();
        $lSocket = new GSocket();
        $lEnv = $lEnvObj->getEnv("GPROJECT_ENV");
        echo sprintf("GPROJECT_ENV......: %s<br>\n", $lEnv);
        echo sprintf("PROD_ENV..........: %s<br>\n", $lEnvObj->isProdEnv());
        echo sprintf("TEST_ENV..........: %s<br>\n", $lEnvObj->isTestEnv());
        echo sprintf("PORT..............: %d<br>\n", $lSocket->loadPort());
    }
    //===============================================
}
//===============================================
?>
