<?php   
    class GContact {
        //===============================================
        // private members
        private static $m_instance = null;
        private $m_data = array();
        //===============================================
        // contructor
        private function __construct() {
            
        }
        //===============================================
        // static methods
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GContact();  
            }
            
            return self::$m_instance;
        }
        //===============================================
        // private methods
        private function reset() {
            $this->m_data["nameValue"] = "";
            $this->m_data["emailValue"] = "";
            $this->m_data["subjectValue"] = "";
            $this->m_data["messageValue"] = "";
        }
        //===============================================
        // public methods
        public function check() {
            $this->m_data["name"] = "";
            $this->m_data["nameError"] = "";
            $this->m_data["nameValue"] = "";
            $this->m_data["email"] = "";
            $this->m_data["emailError"] = "";
            $this->m_data["emailValue"] = "";
            $this->m_data["subject"] = "";
            $this->m_data["subjectError"] = "";
            $this->m_data["subjectValue"] = "";
            $this->m_data["message"] = "";
            $this->m_data["messageError"] = "";
            $this->m_data["messageValue"] = "";
            $m_validate = true;
            $this->m_data["validate"] = "<div class='scca'><i class='fa fa-check-circle'></i> SUCCES : Votre message a bien été envoyé</div>";
            
            if(empty($_POST)) {
                $m_validate = false;
            }
            
            if(isset($_POST["name"])) {
                $this->m_data["nameValue"] = GGlobal::Instance()->getText($_POST["name"]);
                
                if(empty($_POST["name"])) {
                    $this->m_data["name"] = "errc";
                    $this->m_data["nameError"] = "Nom est obligatoire";
                    $m_validate = false;
                }
            }
            
            if(isset($_POST["email"])) {
                $this->m_data["emailValue"] = GGlobal::Instance()->getText($_POST["email"]);
                
                if(empty($_POST["email"])) {
                    $this->m_data["email"] = "errc";
                    $this->m_data["emailError"] = "Email est obligatoire";
                    $m_validate = false;
                }
                else {
                    $m_filer = filter_var($this->m_data["emailValue"], FILTER_VALIDATE_EMAIL);
                    
                    if(!$m_filer) {
                        $this->m_data["email"] = "errc";
                        $this->m_data["emailError"] = "Email est incorrect";
                        $m_validate = false;
                    }
                }
            }
            
            if(isset($_POST["subject"])) {
                $this->m_data["subjectValue"] = GGlobal::Instance()->getText($_POST["subject"]);
                
                if(empty($_POST["subject"])) {
                    $this->m_data["subject"] = "errc";
                    $this->m_data["subjectError"] = "Objet est obligatoire";
                    $m_validate = false;
                }
            }
            
            if(isset($_POST["message"])) {
                $this->m_data["messageValue"] = GGlobal::Instance()->getText($_POST["message"]);
                
                if(empty($_POST["message"])) {
                    $this->m_data["message"] = "errc";
                    $this->m_data["messageError"] = "Message est obligatoire";
                    $m_validate = false;
                }
            }
            
            if(!$m_validate) {
                $this->m_data["validate"] = "<div class='errb'><i class='fa fa-exclamation-triangle'></i> ERREUR : Impossible d'envoyer votre message</div>";
            }
            
            if(!empty($_POST)) {
                if($m_validate) {
                    $this->sendMail();
                    $this->reset();
                }
            }
            else {
                $this->m_data["validate"] = "";
            }
            
            return $this->m_data;
        }
        //===============================================
        public function sendMail() {
            GMessage::Instance()->saveMessage($this->m_data);
            GMail::Instance()->receiveMail($this->m_data);
            GMail::Instance()->sendMail($this->m_data);
        }
        //===============================================
    }
?>