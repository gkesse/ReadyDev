<?php
//===============================================
namespace php\class;
//===============================================
class GEmail extends GManager {
    //===============================================
    private $m_subject = "";
    private $m_body = "";
    private $m_addrTo = array();
    private $m_addrReply = array();
    private $m_addrCC = array();
    private $m_addrBCC = array();
    private $m_attachFile = array();
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->setReply("readydevz@gmail.com", "ReadyDev");
    }
    //===============================================
    public function clone() {
        return new GEmail();
    }
    //===============================================
    public function setObj($_obj) {
        $this->m_subject = $_obj->m_subject;
        $this->m_body = $_obj->m_body;
    }
    //===============================================
    public function isEqual($_obj) {
        $lEqualOk = true;
        $lEqualOk &= ($this->m_subject == $_obj->m_subject);
        $lEqualOk &= ($this->m_body == $_obj->m_body);
        return $lEqualOk;
    }
    //===============================================
    public function setSubject($_subject) {
        $this->m_subject = $_subject;
    }
    //===============================================
    public function setBody($_body) {
        $this->m_body = $_body;
    }
    //===============================================
    public function addTo($_email, $_name) {
        $this->m_addrTo[] = array($_email, $_name);
    }
    //===============================================
    public function setReply($_email, $_name) {
        $this->m_addrReply = array($_email, $_name);
    }
    //===============================================
    public function addAddrCC($_email, $_name) {
        $this->m_addrCC[] = array($_email, $_name);
    }
    //===============================================
    public function addAddrBCC($_email, $_name) {
        $this->m_addrBCC[] = array($_email, $_name);
    }
    //===============================================
    public function addAttachFile($_file) {
        $this->m_attachFile[] = $_file;
    }
    //===============================================
    public function sendEmail() {
        $lServer = "gmail";
        
        if($lServer == "") {
            $this->m_logs->addError("Le serveur est obligatoire.");
        }
        else if($lServer == "gmail") {
            $this->sendGmail();
        }
        else {
            $this->m_logs->addError("Le serveur est inconnu.");
        }
    }
    //===============================================
    public function sendGmail() {
        if(empty($this->m_addrTo)) {
            $this->m_logs->addError("L'adresse de destination est obligatoire.");
            return;
        }
        if($this->m_subject == "") {
            $this->m_logs->addError("L'objet de l'email est obligatoire.");
            return;
        }
        if($this->m_body == "") {
            $this->m_logs->addError("Le corps de l'email est obligatoire.");
            return;
        }
        
        $lMailer = new \PHPMailer();
        
        $lMailer->isSMTP();
        $lMailer->SMTPDebug = 0;
        $lMailer->Debugoutput = "html";
        $lMailer->Host = "smtp.gmail.com";
        $lMailer->Port = 587;
        $lMailer->SMTPSecure = "tsl";
        $lMailer->SMTPAuth = true;
        $lMailer->CharSet = "UTF-8";
        
        $lMailer->Username = "readydevz@gmail.com";
        $lMailer->Password = "muqdmwufgszeastl";
        
        $lMailer->setFrom("readydevz@gmail.com", "ReadyDev");
        
        $lEmail = $this->m_addrReply[0];
        $lName = $this->m_addrReply[1];
        $lMailer->addReplyTo($lEmail, $lName);
        
        for($i = 0; $i < count($this->m_addrTo); $i++) {
            $lAddr = $this->m_addrTo[$i];
            $lEmail = $lAddr[0];
            $lName = $lAddr[1];
            $lMailer->addAddress($lEmail, $lName);
        }
        
        for($i = 0; $i < count($this->m_addrCC); $i++) {
            $lAddr = $this->m_addrCC[$i];
            $lEmail = $lAddr[0];
            $lName = $lAddr[1];
            $lMailer->addCC($lEmail, $lName);
        }
        
        for($i = 0; $i < count($this->m_addrBCC); $i++) {
            $lAddr = $this->m_addrBCC[$i];
            $lEmail = $lAddr[0];
            $lName = $lAddr[1];
            $lMailer->addBCC($lEmail, $lName);
        }
        
        for($i = 0; $i < count($this->m_attachFile); $i++) {
            $lFile = $this->m_attachFile[$i];
            $lMailer->addAttachment($lFile);
        }
        
        $lMailer->Subject = $this->m_subject;
        $lMailer->msgHTML($this->m_body);
        $lMailer->AltBody = "Ceci est un corps de message en texte brut.";
        
        
        if($lMailer->send()) {
            $this->m_logs->addLog("L'email a été envoyé avec succès.");
        }
        else {
            $this->m_logs->addError("L'envoi de l'email a échoué.");
            $this->m_dataLogs->addError($lMailer->ErrorInfo);
        }
        
        $lMailer->smtpClose();
    }
    //===============================================
    public function serialize($_code = "email") {
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->addData($_code, "root", $this->m_subject);
        $lDom->addMap($_code, $this->m_map);
        return $lDom->toString();
    }
    //===============================================
    public function deserialize($_data, $_code = "email") {
        parent::deserialize($_data);
        $lDom = new GCode();
        $lDom->loadXml($_data);
        $this->m_subject = $lDom->getData($_code, "root");
        $lDom->getMap($_code, $this->m_map, $this);
    }
    //===============================================
    public function run($_data) {
        $this->deserialize($_data);
        if($this->m_method == "") {
            $this->m_logs->addError("La méthode est obligatoire.");
        }
        else if($this->m_method == "send_email") {
            $this->onSendEmail($_data);
        }
        else {
            $this->m_logs->addError("La méthode est inconnue.");
        }
        return !$this->m_logs->hasErrors();
    }
    //===============================================
    public function onSendEmail($_data) {

    }
    //===============================================
}
//===============================================
?>
