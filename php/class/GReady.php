<?php
//===============================================
class GReady extends GObject {
    //===============================================
    private $m_name = "";
    private $m_label = "";
    private $m_title = "";
    private $m_link = "";
    private $m_isActive = "";
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function clone() {
        return new GReady();
    }
    //===============================================
    public function setObj($_obj) {
        parent::setObj($_obj);
        $this->m_name = $_obj->m_name;
        $this->m_label = $_obj->m_label;
        $this->m_title = $_obj->m_title;
        $this->m_link = $_obj->m_link;
        $this->m_isActive = $_obj->m_isActive;
    }
    //===============================================
    public function isEqual($_obj) {
        $lEqualOk = true;
        $lEqualOk &= ($this->m_name == $_obj->m_name);
        $lEqualOk &= ($this->m_label == $_obj->m_label);
        $lEqualOk &= ($this->m_title == $_obj->m_title);
        $lEqualOk &= ($this->m_link == $_obj->m_link);
        $lEqualOk &= ($this->m_isActive == $_obj->m_isActive);
        return $lEqualOk;
    }
    //===============================================
    public function addMenu($_name, $_label, $_title, $_link = "#", $_obj = null, $_isActive = true) {
        $lObj = new GReady();
        $lObj->m_index = $this->size() + 1;
        $lObj->m_parentIndex = $_obj->m_index;
        $lObj->m_name = $_name;
        $lObj->m_label = $_label;
        $lObj->m_title = $_title;
        $lObj->m_link = $_link;
        $lObj->m_isActive = $_isActive;
        $this->m_map[] = $lObj;
        return $lObj;
    }
    //===============================================
    public function toInitMenu() {
        $lMenu = new GReady();        
        //===============================================
        // home
        //===============================================
        $lMenu->addMenu("home", "Accueil", "Accueil", "/home", $this, false);
        //===============================================
        // cv
        //===============================================
        $lObj = $lMenu->addMenu("cv", "CV",  "CV", "/home/cv", $this);
        $lMenu->addMenu("cv", "CV Simplifié", "CV Simplifié", "/home/cv/simple", $lObj);
        $lMenu->addMenu("cv", "CV Détaillé", "CV Détaillé", "/home/cv/full", $lObj);
        //===============================================
        // presentation
        //===============================================
        $lMenu->addMenu("presentation", "Présentation", "Présentation", "/home/presentation", $this);
        //===============================================
        // tutoriels
        //===============================================
        $lObj = $lMenu->addMenu("tutoriels", "Tutoriels", "Tutoriels", "/home/tutoriels", $this);
        // tutoriels/c
        $lObj2 = $lMenu->addMenu("tutoriels", "C", "C", "", $lObj);
        $lMenu->addMenu("tutoriels", "Cours", "C", "/home/tutoriels/c/cours", $lObj2);
        $lMenu->addMenu("tutoriels", "MinGW", "MinGW", "/home/tutoriels/c/mingw", $lObj2);
        // tutoriels/c++
        $lObj2 = $lMenu->addMenu("tutoriels", "C++", "C++", "", $lObj);
        $lMenu->addMenu("tutoriels", "Cours", "C++", "/home/tutoriels/cpp/cours", $lObj2);
        $lMenu->addMenu("tutoriels", "MinGW", "MinGW", "/home/tutoriels/cpp/mingw", $lObj2);
        // tutoriels/java
        $lObj2 = $lMenu->addMenu("tutoriels", "Java", "Java", "", $lObj);
        $lMenu->addMenu("tutoriels", "Cours", "Java", "/home/tutoriels/java/cours", $lObj2);
        // tutoriels/python
        $lObj2 = $lMenu->addMenu("tutoriels", "Python", "Python", "", $lObj);
        $lMenu->addMenu("tutoriels", "Cours", "Python", "/home/tutoriels/python/cours", $lObj2);
        // tutoriels/javascript
        $lObj2 = $lMenu->addMenu("tutoriels", "JavaScript", "JavaScript", "", $lObj);
        $lMenu->addMenu("tutoriels", "Ace", "Ace", "/home/tutoriels/javascript/ace", $lObj2);
        $lMenu->addMenu("tutoriels", "MathJax", "MathJax", "/home/tutoriels/javascript/mathjax", $lObj2);
        $lMenu->addMenu("tutoriels", "Google Tag Manager", "Google Tag Manager", "/home/tutoriels/javascript/google_tag_manager", $lObj2);
        // tutoriels/php
        $lObj2 = $lMenu->addMenu("tutoriels", "PHP", "PHP", "", $lObj);
        $lMenu->addMenu("tutoriels", "Cours", "PHP", "/home/tutoriels/php/cours", $lObj2);
        $lMenu->addMenu("tutoriels", "Smarty", "Smarty", "/home/tutoriels/php/smarty", $lObj2);
        // tutoriels/css
        $lObj2 = $lMenu->addMenu("tutoriels", "CSS", "CSS", "", $lObj);
        $lMenu->addMenu("tutoriels", "Font Awesome", "Font Awesome", "/home/tutoriels/css/font_awesome", $lObj2);
        $lMenu->addMenu("tutoriels", "Google Fonts", "Google Fonts", "/home/tutoriels/css/google_fonts", $lObj2);
        // tutoriels/database
        $lObj2 = $lMenu->addMenu("tutoriels", "Base de données", "Base de données", "", $lObj);
        $lMenu->addMenu("tutoriels", "SQLite", "SQLite", "/home/tutoriels/database/sqlite", $lObj2);
        // tutoriels/controle_version
        $lObj2 = $lMenu->addMenu("tutoriels", "Contrôle de version", "Contrôle de version", "", $lObj);
        $lMenu->addMenu("tutoriels", "Git", "Git", "/home/tutoriels/controle_version/git", $lObj2);
        //===============================================
        // cours
        //===============================================
        $lMenu->addMenu("cours", "Cours", "Cours", "/home/cours", $this);
        //===============================================
        // admin
        //===============================================
        $lMenu->addMenu("admin", "Admin", "Admin", "/home/admin", $this);
        //===============================================
        // connection
        //===============================================
        $lMenu->addMenu("connection", "Connexion", "Connexion", "/home/connexion", $this);
        //===============================================
        return $lMenu;
    }
    //===============================================
    public function toCurrentMenu() {
        $lMenu = new GReady();
        $lPageId = $this->getPageId();
        for($i = 1; $i <= $this->size(); $i++) {
            $this->loadFromMap($i);
            if($this->m_link == $lPageId) {
                $lMenu->setObj($this);
                break;
            }
        }
        return $lMenu;
    }
    //===============================================
    public function toMenu($_parent, $_currentMenu) {
        $lMenuI = $this->findMap($_parent);
        $lMenuK = null;
        
        for($i = 1; $i <= $lMenuI->size(); $i++) {
            $lMenuI->loadFromMap($i);
            if($lMenuI->m_isActive) {
                $lMenuJ = $this->findMap($lMenuI);
                
                $lActive = "";
                
                $lActiveOk = false;
                $lActiveOk |= $lMenuI->isEqual($_currentMenu);
                $lActiveOk |= (($lMenuI->m_name == $_currentMenu->m_name) && !$lMenuI->m_parentIndex);
                
                if($lActiveOk) $lActive = " Active";
                                
                if(!$lMenuJ->size()) {
                    if(!$lMenuI->m_parentIndex) {
                        echo sprintf("<a class='Menu2%s' href='%s'><div class='Menu14'>%s</div></a>\n", $lActive, $lMenuI->m_link, $lMenuI->m_label);
                    }
                    else if($lMenuI->m_parentIndex) {
                        echo sprintf("<a class='Menu10' href='%s'><div class='Menu8%s'>%s</div></a>\n", $lMenuI->m_link, $lActive, $lMenuI->m_label);
                    }
                }
                else {
                    if(!$lMenuI->m_parentIndex) {
                        echo sprintf("<div class='Menu6'>\n");
                        echo sprintf("<a class='Menu2%s' href='%s' onclick='return call_server(\"app\", \"open_menu_group\", this)'><div class='Menu14'>%s</div><i class='Menu13 fa fa-caret-down'></i></a>\n", $lActive, $lMenuI->m_link, $lMenuI->m_label);
                        $lMenuK = $lMenuI;
                    }
                    else if($lMenuI->m_parentIndex) {
                        echo sprintf("<div class='Menu9'>\n");
                        echo sprintf("<div class='Menu12'><div class='Menu8'>%s <i class='Menu15 fa fa-caret-down'></i></div></div>\n", $lMenuI->m_label);
                    }
                    
                    if(!$lMenuI->m_parentIndex) {
                        echo sprintf("<div class='Menu7'>\n");
                        echo sprintf("<a class='Menu16' href='%s'><div class='Menu8'>%s</div></a>\n", $lMenuK->m_link, $lMenuK->m_label);
                    }
                    else if($lMenuI->m_parentIndex) {
                        echo sprintf("<div class='Menu11'>\n");
                    }
                    
                    $this->toMenu($lMenuI, $_currentMenu);
                    echo sprintf("</div>\n");
                    echo sprintf("</div>\n");
                }
            }
        }
    }
    //===============================================
    public function isPage() {
        if(file_exists($this->toPath())) return true;
        return false;
    }
    //===============================================
    public function isTemplate() {
        return true;
    }
    //===============================================
    public function toPath() {
        $lPath = sprintf("%s/%s%s/main.php", $this->toRoot(), $this->toProjectName(), $this->getPageId());
        $lPath = $this->getPath($lPath);
        return $lPath;
    }
    //===============================================
    public function toAdminIntroPath() {
        $lPath = "/home/admin/intro";
        $lPath = sprintf("%s/%s%s/main.php", $this->toRoot(), $this->toProjectName(), $lPath);
        $lPath = $this->getPath($lPath);
        return $lPath;
    }
    //===============================================
    public function toRoot() {
        return "/data/cache/page";
    }
    //===============================================
    public function toProjectName() {
        return "readydev";
    }
    //===============================================
    public function showPage($_path) {
        if(!file_exists($_path)) {
            $this->addError("Page non trouvée !");
            return false;
        }
        if($this->isTemplate()) {
            $this->getTemplate()->render($_path);
        }
        else {
            require $_path;
        }
        return true;
    }
    //===============================================
    public function toBanner() {
        return "https://raw.githubusercontent.com/gkesse/ReadyDev/2.0/data/img/defaults/b_readydev.png";
    }
    //===============================================
    public function toTitle($_currentMenu) {
        $lTitle = sprintf("%s | %s", $this->toPageTitle($_currentMenu), $this->toSiteName());
        return $lTitle;
    }
    //===============================================
    public function toLogo() {
        return "/data/img/defaults/readydev.png";
    }
    //===============================================
    public function toPageTitle($_currentMenu) {
        return $_currentMenu->m_title;
    }
    //===============================================
    public function toSiteName() {
        return "ReadyDev";
    }
    //===============================================
    public function toStartYear() {
        return "2017";
    }
    //===============================================
    public function toEndYear() {
        return date("Y");
    }
    //===============================================
    public function toVision() {
        $lData = "";
        $lData .= sprintf("Plateforme de Développement Continu<br/>\n");
        $lData .= sprintf("Produit par <b>Gérard KESSE</b><br/>\n");
        $lData .= sprintf("Polytech'Montpellier<br/>\n");
        return $lData;
    }
    //===============================================
    public function toDescription() {
        $lData = "";
        $lData .= sprintf("Avec <b>ReadyDev</b>, montez en compétences en développement informatique\n");
        $lData .= sprintf("et consevez vos propres applications logiciel\n");
        $lData .= sprintf("grâce à des cours et tutoriels adaptés aux sciences de l'Ingénieur.\n");
        $lData .= sprintf("Plateforme de Développement Continu. Produit par Gérard KESSE.\n");
        return $lData;
    }
    //===============================================
    public function toView() {
        $lObj = new GViews();
        $lViews = $lObj->getViews();
        $this->addLogs($lObj->getLogs());
        return $lViews;
    }
    //===============================================
    public function toFacebookUrl() {
        $lUrl = "http://www.facebook.com/sharer.php";
        $lUrl = sprintf("%s?u=%s", $lUrl, $this->getUrl());
        return $lUrl;
    }
    //===============================================
    public function toLinkedInUrl($_currentMenu) {
        $lUrl = "https://www.linkedin.com/shareArticle";
        $lUrl = sprintf("%s?mini=true&url=%s&title=%s&summary=%s", $lUrl, $this->getUrl(), urlencode($this->toTitle($_currentMenu)), urlencode($this->toDescription()));
        return $lUrl;
    }
    //===============================================
    public function toCss() {
        echo sprintf("<link rel='stylesheet' href='/libs/google_fonts/v0.3.8/Aclonica/css.css'/>\n");
        echo sprintf("<link rel='stylesheet' href='/libs/google_fonts/v0.3.8/Akronim/css.css'/>\n");
        echo sprintf("<link rel='stylesheet' href='/libs/google_fonts/v0.3.8/Allan/css.css'/>\n");
        echo sprintf("<link rel='stylesheet' href='/libs/google_fonts/v0.3.8/Archivo_Narrow/css.css'/>\n");
        echo sprintf("<link rel='stylesheet' href='/libs/google_fonts/v0.3.8/Anton/css.css'/>\n");
        echo sprintf("<link rel='stylesheet' href='/libs/google_fonts/v0.3.8/Aclonica/css.css'/>\n");
        //
        echo sprintf("<link rel='stylesheet' href='/libs/font_awesome/v4.7.0/css/font-awesome.min.css'/>\n");
        //
        echo sprintf("<link rel='stylesheet' href='/css/style.css'/>\n");       
    }
    //===============================================
    public function toScriptJs() {
        $this->toScriptJsLib();
        echo sprintf("<script src='/js/functions.js'></script>\n");
        //
        echo sprintf("<script src='/js/class/GLog.js'></script>\n");
        echo sprintf("<script src='/js/class/GXml.js'></script>\n");
        echo sprintf("<script src='/js/class/GCode.js'></script>\n");
        echo sprintf("<script src='/js/class/GObject.js'></script>\n");
        echo sprintf("<script src='/js/class/GLoader.js'></script>\n");
        echo sprintf("<script src='/js/class/GAjax.js'></script>\n");
        echo sprintf("<script src='/js/class/GModule.js'></script>\n");
        echo sprintf("<script src='/js/class/GMenu.js'></script>\n");
        echo sprintf("<script src='/js/class/GImage.js'></script>\n");
        echo sprintf("<script src='/js/class/GFile.js'></script>\n");
        echo sprintf("<script src='/js/class/GTable.js'></script>\n");
        echo sprintf("<script src='/js/class/GFontAwesome.js'></script>\n");
        echo sprintf("<script src='/js/class/GForm.js'></script>\n");
        echo sprintf("<script src='/js/class/GApp.js'></script>\n");
        echo sprintf("<script src='/js/class/GPage.js'></script>\n");
        echo sprintf("<script src='/js/class/GEditor.js'></script>\n");
        echo sprintf("<script src='/js/class/GServer.js'></script>\n");
        //
        echo sprintf("<script src='/js/script.js'></script>\n");
    }
    //===============================================
    public function toScriptJsLib() {
        echo sprintf("<script src='/libs/ace/v1.21.0/src-min-noconflict/ace.js'></script>");
        echo sprintf("<script src='/libs/mathjax/v3.2.2/es5/tex-mml-chtml.js'></script>");
    }
    //===============================================
    public function serialize($_code = "ready") {
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->addData($_code, "category", $this->m_category);
        $lDom->addData($_code, "model", $this->m_model);
        $lDom->addData($_code, "title", $this->m_title);
        $lDom->addData($_code, "link", $this->m_link);
        $lDom->addData($_code, "name", $this->m_name);
        $lDom->addData($_code, "active", $this->m_isActive);
        $lDom->addMap($_code, $this->m_map);
        return $lDom->toString();
    }
    //===============================================
    public function deserialize($_data, $_code = "ready") {
        $lDom = new GCode();
        $lDom->loadXml($_data);
        $this->m_category = $lDom->getItem($_code, "category");
        $this->m_model = $lDom->getItem($_code, "model");
        $this->m_title = $lDom->getItem($_code, "title");
        $this->m_link = $lDom->getItem($_code, "link");
        $this->m_name = $lDom->getItem($_code, "name");
        $this->m_isActive = $lDom->getItem($_code, "active");
        $lDom->getMap($_code, $this->m_map, $this);
    }
    //===============================================
    public function run() {
        $lMenu = $this->toInitMenu();
        $lCurrentMenu = $lMenu->toCurrentMenu();
        
        echo sprintf("<!DOCTYPE html>\n");
        // lang
        echo sprintf("<html lang='fr'>\n");
        //
        echo sprintf("<head>\n");
        // title
        echo sprintf("<title>%s</title>\n", $this->toTitle($lCurrentMenu));
        // charset
        echo sprintf("<meta charset='UTF-8'/>\n");
        // logo
        echo sprintf("<link rel='shortcut icon' type='image/png' href='%s'/>\n", $this->toLogo());
        //
        echo sprintf("<meta name='viewport' content='width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0, user-scalable=no'/>\n");
        // google        
        echo sprintf("<meta name='description' content=\"%s\"/>\n", $this->toDescription());
        // facebook
        echo sprintf("<meta property='og:type' content=\"website\"/>\n");
        echo sprintf("<meta property='og:image' content=\"%s\"/>\n", $this->toBanner());
        echo sprintf("<meta property='og:image:secure_url' content=\"%s\"/>\n", $this->toBanner());
        echo sprintf("<meta property='og:image:type' content=\"image/png\"/>\n");
        echo sprintf("<meta property='og:image:width' content=\"440\"/>\n");
        echo sprintf("<meta property='og:image:height' content=\"440\"/>\n");
        echo sprintf("<meta property='og:locale' content=\"fr_FR\"/>\n");
        echo sprintf("<meta property='og:url' content=\"%s\"/>\n", $this->getUrl());
        echo sprintf("<meta property='og:title' content=\"%s\"/>\n", $this->toTitle($lCurrentMenu));
        echo sprintf("<meta property='og:site_name' content=\"%s\"/>\n", $this->toSiteName());
        echo sprintf("<meta property='og:description' content=\"%s\"/>\n", $this->toDescription());
        // css
        $this->toCss();
        //
        echo sprintf("</head>\n");
        echo sprintf("<body>\n");
        // env_input
        echo sprintf("<input type='hidden' id='gPageId' value='%s'/>\n", $this->getPageId());
        // env_div
        echo sprintf("<div id='gData' hidden='true'></div>\n");
        //
        echo sprintf("<div class='Html1'>\n");
        // background
        echo sprintf("<div class='Background1'></div>\n");
        echo sprintf("<div class='Background2'></div>\n");
        echo sprintf("<div class='Background3'></div>\n");
        // modal
        $this->runLog();
        $this->runTable();
        $this->runLoader();
        $this->runForms();
        //
        echo sprintf("<div class='Html2 HtmlPage'>\n");
        // menu
        echo sprintf("<div class='Menu1' id='HeaderMenu'>\n");
        echo sprintf("<a class='Menu3' href='%s'>\n", $this->getHomePage());
        echo sprintf("<img class='Menu4' src='%s' alt='logo.png'/>\n", $this->toLogo());
        echo sprintf("<span class='Menu5'>%s</span>\n", $this->toSiteName());
        echo sprintf("</a>\n");
        $lMenu->toMenu($this, $lCurrentMenu);
        echo sprintf("<div class='Bars1' onclick='call_server(\"app\", \"open_menu_bars\", this)'><i class='fa fa-bars'></i></div>\n");
        echo sprintf("</div>\n");
        // 
        $this->runView($lCurrentMenu);
        $this->runPage();
        //
        echo sprintf("</div>\n");
        //
        $this->runFooter();
        //
        echo sprintf("</div>\n");
        //
        $this->toScriptJs();
        //
        echo sprintf("</body>\n");
        echo sprintf("</html>\n");
    }
    //===============================================
    public function runFooter() {
        echo sprintf("<footer class='Footer1'>\n");
        // title
        echo sprintf("<div>Réseaux Sociaux - Réjoignez-nous</div>\n");
        //
        echo sprintf("<div>\n");
        // facebook
        echo sprintf("<a href='#'>\n");
        echo sprintf("<i class='Footer2 fa fa-facebook'></i>\n");
        echo sprintf("</a>\n");
        // skype
        echo sprintf("<a href='https://github.com/gkesse/' target='_blank'>\n");
        echo sprintf("<i class='Footer2 fa fa-skype'></i>\n");
        echo sprintf("</a>\n");
        // skype
        echo sprintf("<a href='https://www.linkedin.com/in/tia-gerard-kesse/' target='_blank'>\n");
        echo sprintf("<i class='Footer2 fa fa-skype'></i>\n");
        echo sprintf("</a>\n");
        //
        echo sprintf("</div>\n");
        
        echo sprintf("<div>\n");
        echo sprintf("<i class='fa fa-copyright'></i>\n");
        echo sprintf("<span>%s - %s | %s</span>\n", $this->toStartYear(), $this->toEndYear(), $this->toSiteName());
        echo sprintf("<div>%s</div>\n", $this->toVision());
        echo sprintf("</div>\n");
        
        echo sprintf("</footer>\n");
        
    }
    //===============================================
    public function runLog() {
        echo sprintf("<div class='Log1' id='LogModal'>\n");
        echo sprintf("<div class='Log2' id='LogForm'>\n");
        // close
        echo sprintf("<div class='Log3' onclick='call_server(\"logs\", \"close_logs\", this)'>\n");
        echo sprintf("<i class='fa fa-times'></i></div>\n");
        // title
        echo sprintf("<div class='Log4' id='LogTitle'>Logs</div>\n");
        //
        echo sprintf("<div class='Log5'>\n");
        // intro
        echo sprintf("<div class='Log6' id='LogIntro'>Consultez les logs.</div>\n");
        //
        echo sprintf("<div class='Log7'>\n");
        // body
        echo sprintf("<div id='LogBody'></div>\n");
        //
        echo sprintf("</div>\n");
        echo sprintf("<div class='Log8'>\n");
        // ok
        echo sprintf("<div class='Log9' onclick='call_server(\"logs\", \"close_logs\", this)'>OK</div>\n");
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function runForms() {
        echo sprintf("<div class='Forms1' id='FormModal'>\n");
        echo sprintf("<div class='Forms2' id='FormForm'>\n");
        // close
        echo sprintf("<div class='Forms3' onclick='call_server(\"form\", \"close_form\", this)'>\n");
        echo sprintf("<i class='fa fa-times'></i></div>\n");
        // title
        echo sprintf("<div class='Forms4' id='FormTitle'>Formulaire</div>\n");
        //
        echo sprintf("<div class='Forms5'>\n");
        // intro
        echo sprintf("<div class='Forms6' id='FormIntro'>Saisissez vos données.</div>\n");
        //
        echo sprintf("<div class='Forms7'>\n");
        //
        echo sprintf("<input id='FormModule' type='hidden'/>\n");
        echo sprintf("<input id='FormMethod' type='hidden'/>\n");
        echo sprintf("<input id='FormModuleLine' type='hidden'/>\n");
        echo sprintf("<input id='FormMethodLine' type='hidden'/>\n");
        echo sprintf("<input id='FormModuleEdit' type='hidden'/>\n");
        echo sprintf("<input id='FormMethodEdit' type='hidden'/>\n");
        echo sprintf("<input id='FormModuleInput' type='hidden'/>\n");
        echo sprintf("<input id='FormMethodInput' type='hidden'/>\n");
        // body
        echo sprintf("<div id='FormContent'></div>\n");
        //
        echo sprintf("</div>\n");
        echo sprintf("<div class='Forms8'>\n");
        // ok
        echo sprintf("<div class='Forms9' onclick='call_server(\"form\", \"ok_form\", this)'>Enregistrer</div>\n");
        // cancel
        echo sprintf("<div class='Forms9' onclick='call_server(\"form\", \"close_form\", this)'>Annuler</div>\n");
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function runTable() {
        echo sprintf("<div class='Table1' id='TableModal'>\n");
        echo sprintf("<div class='Table2' id='TableForm'>\n");
        // close
        echo sprintf("<div class='Table3' onclick='call_server(\"table\", \"close_table\", this)'>\n");
        echo sprintf("<i class='fa fa-times'></i></div>\n");
        // title
        echo sprintf("<div class='Table4' id='TableTitle'>Liste des données</div>\n");
        //
        echo sprintf("<div class='Table5'>\n");
        // intro
        echo sprintf("<div class='Table6' id='TableIntro'>Consultez la liste des données.</div>\n");
        //
        echo sprintf("<div class='Table7'>\n");
        // env
        echo sprintf("<input type='hidden' id='TableCurrentData'/>\n");
        echo sprintf("<input type='hidden' id='TableHeaderVisible'/>\n");
        echo sprintf("<input type='hidden' id='TableSelectModule'/>\n");
        echo sprintf("<input type='hidden' id='TableSelectMethod'/>\n");
        echo sprintf("<input type='hidden' id='TableSelectData'/>\n");
        echo sprintf("<input type='hidden' id='TableNextModule'/>\n");
        echo sprintf("<input type='hidden' id='TableNextMethod'/>\n");
        echo sprintf("<input type='hidden' id='TableNextData'/>\n");
        echo sprintf("<input type='hidden' id='TablePage'/>\n");
        // body
        echo sprintf("<table id='TableId'></table>\n");
        //
        echo sprintf("</div>\n");
        echo sprintf("<div class='Table8'>\n");
        // ok
        echo sprintf("<div class='Table9' onclick='call_server(\"table\", \"close_table\", this)'>OK</div>\n");
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function runLoader() {        
        echo sprintf("<div class='Loader1' id='LoaderModal'>\n");
        echo sprintf("<div class='Loader2' id='LoaderBody'>\n");
        echo sprintf("<div class='Loader3'>\n");
        echo sprintf("<div class='Loader4'>\n");
        //
        echo sprintf("<div class='Loader5'></div>\n");
        echo sprintf("<span class='Loader6'>Loading...</span>\n");
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function runView($_currentMenu) {        
        echo sprintf("<div class='View1'>\n");
        // title
        echo sprintf("<h1 class='View2'>%s</h1>\n", $this->toPageTitle($_currentMenu));
        //
        echo sprintf("<div class='View3'>\n");
        echo sprintf("<div>\n");
        echo sprintf("<div class='View4'>\n");
        // label
        echo sprintf("<div class='View6'><i class='fa fa-eye'></i> Vues</div>\n");
        // vues
        echo sprintf("<div class='View7'>%d</div>\n", $this->toView());
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("<div>\n");
        // network
        echo sprintf("<a href=\"%s\" target='_blank'><i class='View5 Facebook fa fa-facebook'></i></a>\n", $this->toFacebookUrl());
        echo sprintf("<a href=\"%s\" target='_blank'><i class='View5 Linkedin fa fa-linkedin'></i></a>\n", $this->toLinkedInUrl($_currentMenu));
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function runPage() {
        if($this->isAdmin()) {
            $this->showPage($this->toAdminIntroPath());
            $lObj = new GAdmin();
            $lObj->run();
            $this->addLogs($lObj->getLogs());
        }
        $this->showPage($this->toPath());
        return !$this->hasErrors();
    }
    //===============================================
}
//===============================================
?>
