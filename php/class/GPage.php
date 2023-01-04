<?php
class GPage extends GObject {
    //===============================================
    protected $m_get;
    protected $m_pageId;
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->m_get    = new GGet();
        $this->m_pageId = $this->m_get->getGet("pageid");
    }
    //===============================================
    public function getPageId() {
        return $this->m_pageId;
    }
    //===============================================
    public function isPage($_page) {
        return ($this->m_pageId == $_page);
    }
    //===============================================
    public function redirectUrl($_url) {
        $lLocation = sprintf("Location: %s", $_url);
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
}
?>
