<?php   
    class GSignupNormal extends GSignup {
        //===============================================
        private static $m_instance = null;
        //===============================================
        private function __construct() {
        
        }
        //===============================================
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GSignupNormal();  
            }
            return self::$m_instance;
        }
        //===============================================
        public function include() {
            ?>
                <div style="
                    padding: 100px 0px;
                ">
                    <form action="php/req/signup.php" method="post" onsubmit="return validate(this);">
                        <div style="
                            background-color: #336363;
                            max-width: 600px;
                            color: white;
                            margin: auto;
                            padding: 10px;
                            text-align: left;
                        ">
                            <div style="
                                color: white;
                                font-family: arial;
                                font-size: 25px;
                                font-weight: bold;
                                padding: 20px;
                                text-align: center;
                            ">Entrez vos informations</div>
                            <?php GForm::Instance()->input("Nom", "text", "lastname"); ?>
                            <?php GForm::Instance()->input("Prénom(s)", "text", "firstname"); ?>
                            <?php GForm::Instance()->input("Email", "text", "email"); ?>
                            <?php GForm::Instance()->input("Mot de passe", "password", "password"); ?>
                            <?php GForm::Instance()->input("Confirmation", "password", "password2"); ?>
                            <?php GForm::Instance()->input("Adresse", "text", "address"); ?>
                            <?php GForm::Instance()->input("Complément", "text", "address2"); ?>
                            <?php GForm::Instance()->input("Code postal", "text", "zip_code"); ?>
                            <?php GForm::Instance()->input("Ville", "text", "city"); ?>
                            <?php GForm::Instance()->input("Pays", "text", "country"); ?>
                            <?php GForm::Instance()->input("Téléphone", "text", "phone"); ?>
                            <div style="
                                background-color: transparent;
                                margin: 10px 0px 0px 0px;
                                font-size: 0px;
                                word-spacing: 10px;
                                text-align: right;
                            ">
                                <?php GForm::Instance()->button("Envoyer", "submit", "submit"); ?>
                                <?php GForm::Instance()->button("Annuler", "reset", "reset"); ?>
                            </div>
                        </div>
                        <script src="/js/class/GSignup.js"></script>
                        <script src="/js/signup.js"></script>
                    </form>
                </div>
            <?php
        }
        //===============================================
        public function save() {
            $lLastnane = $_POST['lastname'];
            $lFirstname = $_POST['firstname'];
            $lEmail = $_POST['email'];
            $lPassword = $_POST['password'];
            $lAddress = $_POST['address'];
            $lAddress2 = $_POST['address2'];
            $lZipcode = $_POST['zip_code'];
            $lCity = $_POST['city'];
            $lCountry = $_POST['country'];
            $lPhone = $_POST['phone'];
            
            $lPassword = $lEmail . "|" . $lPassword;
            $lPassword = md5($lPassword);
            
            echo $lPassword . "<br>";
        }
        //===============================================
    }
?>