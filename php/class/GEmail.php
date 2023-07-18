<?php
//===============================================
namespace php\class;
//===============================================
class GEmail extends GManager {
    //===============================================
    private $m_subject = "";
    private $m_body = "";
    private $m_addrTo = null;
    private $m_addrReply = null;
    private $m_addrCC = null;
    private $m_addrBCC = null;
    private $m_attachFile = null;
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->m_addrTo = new GEmailAddr();
        $this->m_addrReply = new GEmailAddr();
        $this->m_addrCC = new GEmailAddr();
        $this->m_addrBCC = new GEmailAddr();
        $this->m_attachFile= new GEmailFile();
        $this->m_addrReply->setAddr("readydevz@gmail.com", "ReadyDev");
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
    public function setSubject($_subject) {
        $this->m_subject = $_subject;
    }
    //===============================================
    public function setBody($_body) {
        $this->m_body = $_body;
    }
    //===============================================
    public function getTo() {
        return $this->m_addrTo;
    }
    //===============================================
    public function getReply() {
        return $this->m_addrReply;
    }
    //===============================================
    public function getCC() {
        return $this->m_addrCC;
    }
    //===============================================
    public function getBCC() {
        return $this->m_addrBCC;
    }
    //===============================================
    public function getAttach() {
        return $this->m_attachFile;
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
        if(!$this->m_addrTo->size()) {
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
        
        $lEmail = $this->m_addrReply->getEmail();
        $lName = $this->m_addrReply->getName();
        $lMailer->addReplyTo($lEmail, $lName);
        
        for($i = 1; $i <= $this->m_addrTo->size(); $i++) {
            $this->m_addrTo->loadFromMap($i);
            $lEmail = $this->m_addrTo->getEmail();
            $lName = $this->m_addrTo->getName();
            $lMailer->addAddress($lEmail, $lName);
        }
        
        for($i = 1; $i <= $this->m_addrCC->size(); $i++) {
            $this->m_addrCC->loadFromMap($i);
            $lEmail = $this->m_addrCC->getEmail();
            $lName = $this->m_addrCC->getName();
            $lMailer->addCC($lEmail, $lName);
        }
        
        for($i = 1; $i <= $this->m_addrBCC->size(); $i++) {
            $this->m_addrBCC->loadFromMap($i);
            $lEmail = $this->m_addrBCC->getEmail();
            $lName = $this->m_addrBCC->getName();
            $lMailer->addBCC($lEmail, $lName);
        }
        
        for($i = 1; $i <= $this->m_attachFile->size(); $i++) {
            $this->m_attachFile->loadFromMap($i);
            $lFile = $this->m_attachFile->getFile();
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
        $lDom->addData($_code, "subject", $this->m_subject);
        $lDom->addData($_code, "body", utf8_to_b64($this->m_body));
        $lDom->addData($_code, "addr_to", utf8_to_b64($this->m_addrTo->serialize()));
        $lDom->addData($_code, "addr_reply", utf8_to_b64($this->m_addrReply->serialize()));
        $lDom->addData($_code, "addr_cc", utf8_to_b64($this->m_addrCC->serialize()));
        $lDom->addData($_code, "addr_bcc", utf8_to_b64($this->m_addrBCC->serialize()));
        $lDom->addData($_code, "attach_file", utf8_to_b64($this->m_attachFile->serialize()));
        $lDom->addMap($_code, $this->m_map);
        return $lDom->toString();
    }
    //===============================================
    public function deserialize($_data, $_code = "email") {
        parent::deserialize($_data);
        $lDom = new GCode();
        $lDom->loadXml($_data);
        $this->m_subject = $lDom->getData($_code, "subject");
        $this->m_body = b64_to_utf8($lDom->getData($_code, "body"));
        $this->m_addrTo->deserialize(b64_to_utf8($lDom->getData($_code, "addr_to")));
        $this->m_addrReply->deserialize(b64_to_utf8($lDom->getData($_code, "addr_reply")));
        $this->m_addrCC->deserialize(b64_to_utf8($lDom->getData($_code, "addr_cc")));
        $this->m_addrBCC->deserialize(b64_to_utf8($lDom->getData($_code, "addr_bcc")));
        $this->m_attachFile->deserialize(b64_to_utf8($lDom->getData($_code, "attach_file")));
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
        $this->sendEmail();
    }
    //===============================================
}
//===============================================
?>
