<?php   
//===============================================
class GHeaderUi extends GObject {
    //===============================================
    protected $m_envUi;
    protected $m_connectUi;
    protected $m_accountUi;
    protected $m_disconnectUi;
    protected $m_confirmUi;
    protected $m_loaderUi;
    protected $m_formUi;
    protected $m_tableUi;
    protected $m_menuUi;
    protected $m_errorUi;
    protected $m_logUi;
    //===============================================
    public function __construct($_codeName = "header") {
        parent::__construct($_codeName);
        $this->loadDom(__CLASS__);
        $this->m_envUi          = new GEnvUi();
        $this->m_connectUi      = new GConnectUi();
        $this->m_disconnectUi   = new GDisconnectUi();
        $this->m_accountUi      = new GAccountUi();
        $this->m_confirmUi      = new GConfirmUi();
        $this->m_loaderUi       = new GLoaderUi();
        $this->m_formUi         = new GFormUi();
        $this->m_tableUi        = new GTableUi();
        $this->m_menuUi         = new GMenuUi();
        $this->m_errorUi        = new GErrorUi();
        $this->m_logUi          = new GLogUi();
    }
    //===============================================
    public function run() {
        $lLang  = $this->m_dom->getItem("header", "lang");
        $lTitle = $this->m_dom->getItem("header", "title");
        $lLogo  = $this->m_dom->getItem("header", "logo");
        
        echo sprintf("<!DOCTYPE html>\n");
        echo sprintf("<html lang='%s'>\n", $lLang);
        echo sprintf("<head>\n");
        echo sprintf("<title>%s</title>\n", $lTitle);
        echo sprintf("<meta charset='UTF-8'/>\n");
        echo sprintf("<link rel='shortcut icon' type='image/png' href='%s'/>\n", $lLogo);
        echo sprintf("<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'/>\n");
        echo sprintf("<meta name='viewport' content='width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0, user-scalable=no'/>\n");
        $this->onFonts();
        echo sprintf("</head>\n");
        echo sprintf("<body>\n");
        echo sprintf("<div class='HtmlPage'>\n");
        
        $this->onEnv();
        $this->onBackground();
        $this->m_connectUi->run();
        $this->m_accountUi->run();
        $this->m_disconnectUi->run();
        $this->m_tableUi->run();
        $this->m_confirmUi->run();
        $this->m_loaderUi->run();
        $this->m_formUi->run();
        $this->m_errorUi->run();
        $this->m_logUi->run();
        
        echo sprintf("<div class='BodyPage'>\n");
        echo sprintf("<div class='MainPage'>\n");
        $this->onHeader();
    }
    //===============================================
    public function onEnv() {
        $this->m_envUi->run();
        $this->m_tableUi->runEnv();
    }
    //===============================================
    public function onHeader() {
        echo sprintf("<header class='Header'>\n");
        
        $this->m_menuUi->run();
        $this->onTitle();
        $this->onLink();
        
        echo sprintf("</header>\n");        
    }
    //===============================================
    public function onFonts() {
        $lCount = $this->m_dom->countItem("fonts");
        for($i = 0; $i < $lCount; $i++) {
            $lFont = $this->m_dom->getItem2("fonts", $i);
            echo sprintf("<link rel='stylesheet' href='%s'/>\n", $lFont);
        }
    }
    //===============================================
    public function onBackground() {
        echo sprintf("<div class='Background Top'></div>\n");
        echo sprintf("<div class='Background Middle'></div>\n");
        echo sprintf("<div class='Background Bottom'></div>\n");
    }
    //===============================================
    public function onTitle() {
        echo sprintf("<div class='MainBlock'>\n");
        echo sprintf("<div class='Content'>\n");
        echo sprintf("<h1 class='Title2'>%s</h1>\n", "Title");
        echo sprintf("<div class='Body'>\n");
        $this->onSite();
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function onSite() {
        echo sprintf("<div class='Row'>\n");
        
        $lCount = $this->m_dom->countItem("header");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory = $this->m_dom->getItem3("header", "category", $i);
            $lLink = $this->m_dom->getItem3("header", "link", $i);
            $lClass = $this->m_dom->getItem3("header", "class", $i);
            $lTitle = $this->m_dom->getItem3("header", "title", $i);
            $lPicto = $this->m_dom->getItem3("header", "picto", $i);
            
            if($lCategory != "site") continue;
            
            echo sprintf("<a href='%s'><div class='%s'><i class='fa fa-%s'></i> %s</div></a>\n"
                , $lLink, $lClass, $lPicto, $lTitle);
        }
        $this->onView();        
        echo sprintf("</div>\n");
        $this->onNetworks();        
    }
    //===============================================
    public function onView() {
        $lViewCount = 30;
        
        echo sprintf("<div class='Form'>\n");
        echo sprintf("<div class='Label'>\n");
        echo sprintf("<i class='Icon fa fa-eye'></i>\n");
        echo sprintf("<span>Vues</span>\n");
        echo sprintf("</div>\n");
        echo sprintf("<div class='Field'>\n");
        echo sprintf("<span>%d</span>\n", $lViewCount);
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function onLink() {
        echo sprintf("<div class='MainBlock0'>");
        echo sprintf("<div class='Content11'>");
        echo sprintf("<div class='Row22'>");
        
        $lCount = 3;
        
        for($i = 0; $i < $lCount; $i++) {
            $lName = "Name";
            $lLink = "Link";
            if($i != 0) {
                echo sprintf("<div class='Col4'><i class='fa fa-chevron-right'></i></div>");                
            }
            echo sprintf("<div class='Col4'><a class='Link8' href='%s'>%s</a></div>"
                , $lLink, $lName);
        }                
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");        
    }
    //===============================================
    public function onNetworks() {
        $lUrl = $this->getUrl();
        
        echo sprintf("<div class='Row22'>\n");
        
        $lCount = $this->m_dom->countItem("header");
        
        for($i = 0; $i < $lCount; $i++) {
            $lCategory  = $this->m_dom->getItem3("header", "category", $i);
            $lLink      = $this->m_dom->getItem3("header", "link", $i);
            $lClass     = $this->m_dom->getItem3("header", "class", $i);
            $lPicto     = $this->m_dom->getItem3("header", "picto", $i);
            
            if($lCategory != "networks") continue;
                
            $lTitle = "Titre";
            $lSummary = "Sommaire";
            
            $lLink = str_replace("{url}", $lUrl, $lLink);
            $lLink = str_replace("{title}", $lTitle, $lLink);
            $lLink = str_replace("{summary}", $lSummary, $lLink);
            
            echo sprintf("<a class='Col' href='%s' target='_blank'>\n", $lLink);
            echo sprintf("<i class='Link2 %s fa fa-%s'></i>\n", $lClass, $lPicto);
            echo sprintf("</a>\n");
        }
        
        echo sprintf("</div>\n");
    }
    //===============================================
    public function getHappyYear() {
        $lHappy = $this->m_dom->getItem("happyyear", "msg");
        $lYear  = date("Y");
        $lData  = sprintf("%s %s", $lHappy, $lYear);
        return $lData;
    }
    //===============================================
}
//===============================================
?>
