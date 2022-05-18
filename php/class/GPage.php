<?php
class GPage extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->createDoms();
    }
    //===============================================
    public function getPageId() {
        $lGetObj = new GGet();
        $lPageId = $lGetObj->getGet("pageid");
        $lPageId = sprintf("/home/%s", $lPageId);
        if(substr($lPageId, -1) == '/') {
            $lPageId = substr($lPageId, 0, -1);
        }
        return $lPageId;
    }
    //===============================================
    public function isPage($page) {
        $lPageId = $this->getPageId();
        return ($lPageId == $page);
    }
    //===============================================
    public function redirectUrl($url) {
        $lLocation = sprintf("Location: %s", $url);
        header($lLocation);
        exit;
    }
    //===============================================
    public function redirectPost() {
        if(!empty($_POST) OR !empty($_FILES)) {
            $_SESSION["_SAVE_POST_"] = $_POST;
            $_SESSION["_SAVE_FILES_"] = $_FILES;
            $lUrl = $_SERVER["REQUEST_URI"];
            header("Location: " . $lUrl);
            exit;
        }
        if(isset($_SESSION["_SAVE_POST_"])) {
            $_POST = $_SESSION["_SAVE_POST_"];
            $_FILES = $_SESSION["_SAVE_FILES_"];
            unset($_SESSION["_SAVE_POST_"], $_SESSION["_SAVE_FILES_"]);
        }
    }
    //===============================================
    public function homePage() {
        $lHomePage = $this->getItem("home", "page");
        $this->redirectUrl($lHomePage);
    }
    //===============================================
}
?>
