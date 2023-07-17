<?php   
//===============================================
namespace php\class;
//===============================================
class GTestPhp extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function run($_module, $_method) {
        if($_method == "") {
            $this->m_logs->addError("La méthode est obligatoire.");
        }
        else if($_method == "prod") {
            $this->runProd($_module, $_method);
        }
        else if($_method == "xml") {
            $this->runXml($_module, $_method);
        }
        else if($_method == "code") {
            $this->runCode($_module, $_method);
        }
        else if($_method == "log") {
            $this->runLog($_module, $_method);
        }
        else if($_method == "socket") {
            $this->runSocket($_module, $_method);
        }
        else if($_method == "curl") {
            $this->runCurl($_module, $_method);
        }
        else if($_method == "connexion") {
            $this->runConnexion($_module, $_method);
        }
        else if($_method == "email") {
            $this->runEmail($_module, $_method);
        }
        else {
            $this->m_logs->addError("La méthode est inconnue.");
        }
    }
    //===============================================
    public function runProd($_module, $_method) {
        $lObj = new GReady();
        $lObj->run();
        $this->m_logs->addLogs($lObj->getLogs());
    }
    //===============================================
    public function runXml($_module, $_method) {
        $lDom = new GXml();
        $lDomC = new GXml();
        
        // createDoc - setNode - addObj - addValue - print
        $lDom->createDoc();
        $lDomC->setNode($lDom->addObj($lDom, "datas"));
        $lDomC->setNode($lDomC->addObj($lDom, "data"));
        $lDomC->addValue($lDom, "code", "logs");
        $lDomC->addValue($lDom, "type", "error");
        $lDomC->addValue($lDom, "side", "server_php");
        $lDomC->addValue($lDom, "msg", "Le serveur n'est pas disponible.");
        $lDom->print();
    }
    //===============================================
    public function runCode($_module, $_method) {
        $lDom = new GCode();
        
        // createDoc - addData - print
        $lDom->createDoc();
        $lDom->addData("logs", "type", "error");
        $lDom->addData("logs", "side", "server_php");
        $lDom->addData("logs", "msg", "Le serveur n'est pas disponible.");
        $lDom->print();
    }
    //===============================================
    public function runLog($_module, $_method) {
        $lLog = new GLog();
        
        // addError - addLog - addData - print
        $lLog->addError("Le serveur n'est pas disponible.");
        $lLog->addLog("La module de communication est chargé.");
        $lLog->addData("La résolution est de 1200 x 796.");
        $lLog->loadFromMap(1);
        $lLog->print();
        $this->m_logs->addLogs($lLog);
    }
    //===============================================
    public function runSocket($_module, $_method) {
        $lClient = new GSocket();
        $lDom = new GCode();
        
        // callFacade
        $lDom->createDoc();
        $lDom->addData("calculator", "expression", utf8_to_b64("22/7"));
        $lDom->addData("facade", "facade", "server_cpp");
        $lData = $lDom->toString();
        $lData = $lClient->callFacade("calculator", "run_calculator", $lData);
        $this->m_logs->addLogs($lClient->getLogs());
        $this->m_logs->deserialize($lData);
        if(!$this->m_logs->hasErrors()) {
            $this->m_logs->addData($lData);
        }
    }
    //===============================================
    public function runCurl($_module, $_method) {
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->addData("calculator", "expression", utf8_to_b64("22/7"));
        $lDom->addData("facade", "facade", "server_cpp");
        
        // postHttpFacade
        $lClient = new GCurl();
        $lData = $lDom->toString();
        $lData = $lClient->postHttp("Boloss Boloss Boloss");
        $this->m_logs->addLogs($lClient->getLogs());
        $this->m_logs->deserialize($lData);
        if(!$this->m_logs->hasErrors()) {
            $this->m_logs->addData($lData);
        }
    }
    //===============================================
    public function runConnexion($_module, $_method) {
        $lAction = "login_user";
        
        if($lAction == "") {
            $this->m_logs->addError("L'action est obligatoire.");
        }
        else if($lAction == "insert") {
            $lUser = new GUser();
            $lUser->setPseudo("gadmin");
            $lUser->setPassword("gadmin");
            $lUser->insertUser();
            $this->m_logs->addLogs($lUser->getLogs());
            if(!$this->m_logs->hasErrors()) {
                $this->m_logs->addData($lUser->serialize());
            }
        }
        else if($lAction == "login_user") {
            $lUser = new GUser();
            $lUser->setPseudo("gadmin");
            $lUser->setPassword("gadmin");
            $lUser->loginUser();
            $this->m_logs->addLogs($lUser->getLogs());
            if(!$this->m_logs->hasErrors()) {
                $this->m_logs->addData($lUser->serialize());
            }
        }
        else if($lAction == "update_user") {
            $lUser = new GUser();
            $lUser->setId(1);
            $lUser->setPseudo("admin");
            $lUser->setPassword("admin");
            $lUser->setEmail("admin@gmail.com");
            $lUser->updateUser();
            $this->m_logs->addLogs($lUser->getLogs());
            if(!$this->m_logs->hasErrors()) {
                $this->m_logs->addData($lUser->serialize());
            }
        }
        else {
            $this->m_logs->addError("L'action est inconnue.");
        }
    }
    //===============================================
    public function runEmail($_module, $_method) {
        $lAction = "no_reply";
        
        if($lAction == "") {
            $this->m_logs->addError("L'action est obligatoire");
        }
        else if($lAction == "reply") {
            $lEmail = new GEmail();
            $lEmail->addTo("kernelly.blavatsky@outlook.fr", "Kernelly BLAVATSKY");
            $lEmail->setSubject("Salutations (Reply)");
            $lEmail->setBody("Bonjour à tout les webmasters.");
            $lEmail->sendEmail();
            $this->m_logs->addLogs($lEmail->getLogs());
        }
        else if($lAction == "no_reply") {
            $lEmail = new GEmail();
            $lEmail->setReply("no-reply@readydev.com", "No-Reply [ReadyDev]");
            $lEmail->addTo("kernelly.blavatsky@outlook.fr", "Kernelly BLAVATSKY");
            $lEmail->setSubject("Salutations (No-Reply)");
            $lEmail->setBody("Bonjour à tout les webmasters.");
            $lEmail->sendEmail();
            $this->m_logs->addLogs($lEmail->getLogs());
        }
        else {
            $this->m_logs->addError("L'action est inconnue.");
        }
    }
    //===============================================
}
//===============================================
?>