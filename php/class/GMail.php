<?php   
    class GMail {
        //===============================================
        // private members
        private static $m_instance = null;
        //===============================================
        // contructor
        private function __construct() {
            
        }
        //===============================================
        // static methods
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GMail();  
            }
            
            return self::$m_instance;
        }
        //===============================================
        // public methods
        public function receiveMail($data) {
            date_default_timezone_set("Etc/UTC");
            require_once $_SERVER["DOCUMENT_ROOT"]."/lib/phpmailer/PHPMailerAutoload.php";
            
            $m_file = $_SERVER["DOCUMENT_ROOT"]."email/contacts/email.php";
            $m_content = GFile::Instance()->getInclude($m_file, $data);
            
            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->SMTPDebug = 0;
            $mail->Debugoutput = "html";
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 587;
            $mail->SMTPSecure = "tls";
            $mail->SMTPAuth = true;
            $mail->CharSet = "UTF-8";
            $mail->Username = "readydevz@gmail.com";
            $mail->Password = "gma17@RDv";
            $mail->setFrom("readydevz@gmail.com", "ReadyDev");
            $mail->addReplyTo($data["emailValue"], $data["nameValue"]);
            $mail->addAddress("readydevz@gmail.com", "ReadyDev");
            $mail->Subject = $data["subjectValue"]." (".$data["nameValue"].")";
            $mail->msgHTML($m_content);
            $mail->AltBody = "This is a plain-text message body";
            $mail->send();
        }
        //===============================================
        public function sendMail($data) {
            date_default_timezone_set("Etc/UTC");
            require_once $_SERVER["DOCUMENT_ROOT"]."/lib/phpmailer/PHPMailerAutoload.php";
            
            $m_file = $_SERVER["DOCUMENT_ROOT"]."email/contacts/email.php";
            $m_content = GFile::Instance()->getInclude($m_file, $data);
            
            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->SMTPDebug = 0;
            $mail->Debugoutput = "html";
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 587;
            $mail->SMTPSecure = "tls";
            $mail->SMTPAuth = true;
            $mail->CharSet = "UTF-8";
            $mail->Username = "readydevz@gmail.com";
            $mail->Password = "gma17@RDv";
            $mail->setFrom("readydevz@gmail.com", "ReadyDev");
            $mail->addAddress($data["emailValue"], $data["nameValue"]);
            $mail->addReplyTo("readydevz@gmail.com", "ReadyDev");
            $mail->Subject = $data["subjectValue"]." (".$data["nameValue"].")";
            $mail->msgHTML($m_content);
            $mail->AltBody = "This is a plain-text message body";
            $mail->send();
        }
        //===============================================
    }
?>