<?php   
//===============================================
class GHeader extends GObject {
    //===============================================
    private $m_lang;
    private $m_title;
    private $m_logo;
    //===============================================
    private $m_category;
    private $m_model;
    private $m_id;
    private $m_data;
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function setLang($_lang) {
        $this->m_lang = $_lang;
    }
    //===============================================
    public function setTitle($_title) {
        $this->m_title = $_title;
    }
    //===============================================
    public function setLogo($_logo) {
        $this->m_logo = $_logo;
    }
    //===============================================
    public function addFontCss($_data) {
        $lObj = new GHeader();
        $this->m_category = "font";
        $this->m_model = "css";
        $this->m_data = $_data;
        $this->m_map[] = $lObj;
    }
    //===============================================
    public function addEnvInput($_id, $_data = "") {
        $lObj = new GHeader();
        $this->m_category = "env";
        $this->m_model = "input";
        $this->m_id = $_id;
        $this->m_data = $_data;
        $this->m_map[] = $lObj;
    }
    //===============================================
    public function addEnvDiv($_id, $_data = "") {
        $lObj = new GHeader();
        $this->m_category = "env";
        $this->m_model = "div";
        $this->m_id = $_id;
        $this->m_data = $_data;
        $this->m_map[] = $lObj;
    }
    //===============================================
    public function initHeader() {
        $this->setLang("fr");
        $this->setTitle("ReadyDev");
        $this->setLogo("/data/img/defaults/readydev.png");
    }
    //===============================================
    public function initFontCss() {
        $this->addFontCss("/libs/google_fonts/Aclonica/css.css");
        $this->addFontCss("/libs/google_fonts/Akronim/css.css");
        $this->addFontCss("/libs/google_fonts/Allan/css.css");
        $this->addFontCss("/libs/google_fonts/Archivo_Narrow/css.css");
        $this->addFontCss("/libs/google_fonts/Anton/css.css");
        $this->addFontCss("/libs/font_awesome/css/font-awesome.min.css");
        $this->addFontCss("/css/style.css");
    }
    //===============================================
    public function initEnvInput() {
        $this->addEnvInput("EnvProdOn", "1");
        $this->addEnvInput("EnvType");
        
        $this->addEnvInput("SearchDataSize", "8");
        $this->addEnvInput("SearchDataCount", "0");
        $this->addEnvInput("SearchDataOffset", "0");
        $this->addEnvInput("SearchLastId", "-1");
        
        $this->addEnvInput("TableCurrentData");
        $this->addEnvInput("TableHeaderVisible");
        $this->addEnvInput("TableSelectModule");
        $this->addEnvInput("TableSelectMethod");
        $this->addEnvInput("TableNextModule");
        $this->addEnvInput("TableNextMethod");        
    }
    //===============================================
    public function initEnvDiv() {
        $this->addEnvDiv("ImageData");
    }
    //===============================================
    public function run() {
        $this->initHeader();
        $this->initFontCss();
        $this->initEnvInput();
        $this->initEnvDiv();
        
        echo sprintf("<!DOCTYPE html>\n");
        echo sprintf("<html lang='%s'>\n", $this->m_lang);
        echo sprintf("<head>\n");
        echo sprintf("<title>%s</title>\n", $this->m_title);
        echo sprintf("<meta charset='UTF-8'/>\n");
        echo sprintf("<link rel='shortcut icon' type='image/png' href='%s'/>\n", $this->m_logo);
        echo sprintf("<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'/>\n");
        echo sprintf("<meta name='viewport' content='width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0, user-scalable=no'/>\n");

        for($i = 0; $i < count($this->m_map); $i++) {
            $lObj = $this->m_map[$i];
            if($lObj->m_model == "font") {
                if($lObj->m_model == "css") {
                    echo sprintf("<link rel='stylesheet' href='%s'/>\n", $lObj->m_data);
                }
            }
        }
        
        echo sprintf("</head>\n");
        echo sprintf("<body>\n");
        echo sprintf("<div class='HtmlPage'>\n");
        
        for($i = 0; $i < count($this->m_map); $i++) {
            $lObj = $this->m_map[$i];
            if($lObj->m_model == "env") {
                if($lObj->m_model == "input") {
                    echo sprintf("<input type='hidden' id='%s' value='%s'/>\n", $lObj->m_id, $lObj->m_data);
                }
                else if($lObj->m_model == "div") {
                    echo sprintf("<div id='%s' hidden>%s</div>", $lObj->m_id, $lObj->m_data);
                }
            }
        }
        
        echo sprintf("<div class='Background Top'></div>\n");
        echo sprintf("<div class='Background Middle'></div>\n");
        echo sprintf("<div class='Background Bottom'></div>\n");
        
        echo sprintf("<div class='BodyPage'>\n");
        echo sprintf("<div class='MainPage'>\n");
        
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</body>\n");
        echo sprintf("</html>\n");
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
