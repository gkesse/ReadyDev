<?php   
//===============================================
class GProcess extends GObject {
    //===============================================
    private $m_isTestEnv = false;
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function initTestEnv() {
        $this->m_isTestEnv = ($this->getEnv("GPROJECT_ENV") == "TEST");
    }
    //===============================================
    public function redirectHomePage() {
        if($this->m_pageId == "/") {
            if($this->m_homePage != "") {
                $this->redirectUrl($this->m_homePage);
            }
        }
    }
    //===============================================
    public function main() {
        $this->initPageId();
        $this->initHomePage();
        $this->redirectHomePage();
        $this->initTestEnv();

        if($this->m_isTestEnv) {
            $this->runTest();
        }
        else {
            $this->runProd();
        }
    }
    //===============================================
    public function runTest() {
        $lObj = new GTest();
        $lObj->run();
        $this->addLogs($lObj->getLogs());
    }
    //===============================================
    public function runProd() {
        $lObj = new GReadyUi();
        $lObj->run();
        $this->addLogs($lObj->getLogs());
    }
    //===============================================
    public function serialize($_code = "process") {
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->addData($_code, "page_id", $this->m_pageId);
        $lDom->addData($_code, "home_page", $this->m_homePage);
        $lDom->addData($_code, "is_test_env", $this->m_isTestEnv);
        $lDom->addMap($_code, $this->m_map);
        return $lDom->toString();
    }
    //===============================================
    public function deserialize($_data, $_code = "process") {
        parent::deserialize($_data);
        $lDom = new GCode();
        $lDom->loadXml($_data);
        $this->m_pageId = $lDom->getItem($_code, "page_id");
        $this->m_homePage = $lDom->getItem($_code, "home_page");
        $this->m_homePage = $lDom->getItem($_code, "home_page");
        $lDom->getMap($_code, $this->m_map, $this);
    }
    //===============================================
 }
//===============================================
?>
