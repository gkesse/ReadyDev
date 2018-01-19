<?php   
    class GAdmin {
        //===============================================
        private static $m_instance = null;
        private $m_data = array();
        //===============================================
        private function __construct() {
            
        }
        //===============================================
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GAdmin();  
            }
            return self::$m_instance;
        }
        //===============================================
        private function reset() {
            $this->m_data["emailValue"] = "";
            $this->m_data["passwordValue"] = "";
        }
        //===============================================
        public function check() {
            $this->validateLogin();
            $this->m_data["email"] = "";
            $this->m_data["emailError"] = "";
            $this->m_data["emailValue"] = "";
            $this->m_data["password"] = "";
            $this->m_data["passwordError"] = "";
            $this->m_data["passwordValue"] = "";
            $m_validate = true;
            $this->m_data["validate"] = "<div class='scca'><i class='clrb fa fa-check-circle'></i> SUCCES : La connexion a réussi</div>";
            
            if(empty($_POST)) {
                $m_validate = false;
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
            
            if(isset($_POST["password"])) {
                $this->m_data["passwordValue"] = GGlobal::Instance()->getText($_POST["password"]);
                
                if(empty($_POST["password"])) {
                    $this->m_data["password"] = "errc";
                    $this->m_data["passwordError"] = "Mot de passe est obligatoire";
                    $m_validate = false;
                }
            }
            
            if(!$m_validate) {
                $this->m_data["validate"] = "<div class='errb'><i class='clra fa fa-exclamation-triangle'></i> ERREUR : Les informations saisies sont incorrectes</div>";
            }
            else {
                $this->login();
            }           
            
            $this->disconnect();
            return $this->m_data;
        }
        //===============================================
        public function login() {
            $m_loginMap = GConfig::Instance()->getData("login");
            $m_email = $this->m_data["emailValue"];
            $m_password = $this->m_data["passwordValue"];
            $m_loginIn = md5($m_email."|".$m_password);
            $m_search = GGlobal::Instance()->search($m_loginMap, "pass", $m_loginIn);
            if(empty($m_search)) {
                $this->m_data["validate"] = "<div class='errb'><i class='clra fa fa-exclamation-triangle'></i> ERREUR : Les informations saisies sont incorrectes</div>";
            }
            else {
                $this->reset();
                $this->connect($m_search["email"], $m_search["group"]);
            }
        }
        //===============================================
        public function connect($email, $group) {
            if(!isset($_SESSION["login"])) {
                $_SESSION["login"] = array(
                "email" => $email,
                "group" => $group);
                header("Location: ".$_SESSION["lasturl"]);
            }
        }
        //===============================================
        public function disconnect() {
            if(isset($_GET["action"]) && $_GET["action"] == "Deconnexion") { 
                if(isset($_SESSION["login"])) {
                    unset($_SESSION["login"]);
                }
                header("Location: ".$_SESSION["lasturl"]);
            }
        }
        //===============================================
        public function validateLogin() {
            $m_validate = true;
            if(isset($_SESSION["login"])) $m_validate = false;
            
            if(!$m_validate) {
                header("Location: ".$_SESSION["lasturl"]);
            }
        }
        //===============================================
        public function validateAdmin() {
            $m_validate = true;
            if(!isset($_SESSION["login"])) $m_validate = false;
            else if($_SESSION["login"]["group"] != "admin") $m_validate = false;
            
            if(!$m_validate) {
                header("Location: ".$_SESSION["lasturl"]);
            }
        }
        //===============================================
    }
?>