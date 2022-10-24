<?php   
//===============================================
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//===============================================
class GMail extends GObject {
    //===============================================
    private $mail = null;
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->createDom();
        $this->mail = new PHPMailer(true);
    }
    //===============================================
    public function createDom() {
        $this->m_dom = new GXml();
        $this->m_dom->createDocFile("pad.xml");
    }
    //===============================================
    public function configMail() {        
        $lHost = $this->getItem("mail", "host");
        $lPort = intval($this->getItem("mail", "port"));
        $lSmtpSecure = $this->getItem("mail", "smtp_secure");
        $lSmtpAuthOn = ($this->getItem("mail", "smtp_auth_on") == "1");
        $lCharset = $this->getItem("mail", "charset");
        $lSmtpDebug = intval($this->getItem("mail", "smtp_debug"));
        $lDebugOutput = intval($this->getItem("mail", "debug_output"));
        $lUsername = $this->getItem("mail", "username");
        $lPassword = $this->getItem("mail", "password");
        $lFromEmail = $this->getItem("mail", "from");
        $lFromName = $this->getItem("mail", "from_name");
        $lWordWrap = intval($this->getItem("mail", "word_wrap"));
        $lHtmlOn = ($this->getItem("mail", "html_on") == "1");
        $lSubject = $this->getItem("mail", "subject");
        $lBody = $this->getItem("mail", "body");
        $lAltBody = $this->getItem("mail", "alt_body");
        
        if(trim($lFromEmail) == "") return false;
        if(trim($lSubject) == "") return false;
        if(trim($lBody) == "") return false;
        
        $lDstOn = false;
        
        $this->mail->isSMTP();                                      
        $this->mail->Host = $lHost;
        $this->mail->Port = $lPort;
        $this->mail->SMTPSecure = $lSmtpSecure;
        $this->mail->SMTPAuth = $lSmtpAuthOn;
        $this->mail->CharSet = $lCharset;
        $this->mail->SMTPDebug = $lSmtpDebug;
        $this->mail->Debugoutput = $lDebugOutput;
        $this->mail->Username = $lUsername;
        $this->mail->Password = $lPassword;
        $this->mail->From = $lFromEmail;
        $this->mail->FromName = $lFromName;        
        $this->mail->WordWrap = $lWordWrap;
        $this->mail->isHTML($lHtmlOn);
        $this->mail->Subject = $lSubject;
        $this->mail->Body = $lBody;
        $this->mail->AltBody = $lAltBody;
        
        $lCount = $this->countItem("mail");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory = $this->getItem3("mail", "category", $i);
            $lName = $this->getItem3("mail", "name", $i);
            $lEmail = $this->getItem3("mail", "email", $i);
            $lFile = $this->getItem3("mail", "file", $i);
            
            if($lCategory == "dst") {
                if(trim($lEmail) == "") continue;
                $this->mail->addAddress($lEmail, $lName);
                $lDstOn = true;
            }
            else if($lCategory == "cc") {
                if(trim($lEmail) == "") continue;
                $this->mail->addCC($lEmail, $lName);
            }
            else if($lCategory == "bcc") {
                if(trim($lEmail) == "") continue;
                $this->mail->addBCC($lEmail, $lName);
            }
            else if($lCategory == "reply") {
                if(trim($lEmail) == "") continue;
                $this->mail->addReplyTo($lEmail, $lName);
            }
            else if($lCategory == "attach") {
                if(trim($lFile) == "") continue;
                $lPathObj = new GPath();
                $lFile = $lPathObj->getPath("", $lFile);
                $this->mail->addAttachment($lFile, $lName);
            }
        }
        
        if(!$lDstOn) return false;
        return true;
    }
    //===============================================
    public function sendMail() {
        $lOk = $this->configMail();
        if(!$lOk) return;
        $lOk = $this->mail->send();
        if(!$lOk) {
            GLog::Instance()->addError(sprintf(
                "Erreur lors de l'envoi du mail."));
        }
        else {
            GLog::Instance()->addError(sprintf(
                "OK : l'envoi du mail a réussi."));            
        }
    }
    //===============================================
}
//===============================================
?>
