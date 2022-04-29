<?php   
    class GRedirect extends GObject {
        //===============================================
        public function __construct() {
            parent::__construct();            
            $this->createDoms();
        }
        //===============================================
        public function redirectUrl($url) {
            header("Location: $url");
        }
        //===============================================
        public function homePage() {
            $lHomePage = $this->getItem("home", "page");
            $this->redirectUrl($lHomePage);
        }
        //===============================================
    }
?>