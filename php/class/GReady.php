<?php
//===============================================
class GReady extends GObject {
    //===============================================
    private $m_id = "";
    private $m_lang = "";
    private $m_title = "";
    private $m_logo = "";
    private $m_module = "";
    private $m_method = "";
    private $m_intro = "";
    private $m_menu = "";
    private $m_link = "";
    private $m_icon = "";
    private $m_label = "";
    private $m_data = "";
    private $m_filename = "";
    private $m_views = "";
    private $m_class = "";
    private $m_startYear = "";
    private $m_endYear = "";
    //===============================================
    private $m_isActive = false;
    private $m_isBlank = false;
    //===============================================
    private $m_admin = null;
    private $m_currentMenu = null;
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
        $this->m_id = $_obj->m_id;
        $this->m_lang = $_obj->m_lang;
        $this->m_title = $_obj->m_title;
        $this->m_logo = $_obj->m_logo;
        $this->m_data = $_obj->m_data;
        $this->m_filename = $_obj->m_filename;
        $this->m_link = $_obj->m_link;
        $this->m_label = $_obj->m_label;
        $this->m_icon = $_obj->m_icon;
        $this->m_module = $_obj->m_module;
        $this->m_method = $_obj->m_method;
        $this->m_intro = $_obj->m_intro;
        $this->m_menu = $_obj->m_menu;
        $this->m_views = $_obj->m_views;
        $this->m_class = $_obj->m_class;
        $this->m_startYear = $_obj->m_startYear;
        $this->m_endYear = $_obj->m_endYear;
        $this->m_isActive = $_obj->m_isActive;
        $this->m_isBlank = $_obj->m_isBlank;
    }
    //===============================================
    public function isEqual($_obj) {
        $lEqualOk = parent::isEqual($_obj);
        $lEqualOk &= ($this->m_id == $_obj->m_id);
        $lEqualOk &= ($this->m_lang == $_obj->m_lang);
        $lEqualOk &= ($this->m_title == $_obj->m_title);
        $lEqualOk &= ($this->m_logo == $_obj->m_logo);
        $lEqualOk &= ($this->m_data == $_obj->m_data);
        $lEqualOk &= ($this->m_filename == $_obj->m_filename);
        $lEqualOk &= ($this->m_link == $_obj->m_link);
        $lEqualOk &= ($this->m_label == $_obj->m_label);
        $lEqualOk &= ($this->m_icon == $_obj->m_icon);
        $lEqualOk &= ($this->m_module == $_obj->m_module);
        $lEqualOk &= ($this->m_method == $_obj->m_method);
        $lEqualOk &= ($this->m_intro == $_obj->m_intro);
        $lEqualOk &= ($this->m_menu == $_obj->m_menu);
        $lEqualOk &= ($this->m_views == $_obj->m_views);
        $lEqualOk &= ($this->m_class == $_obj->m_class);
        $lEqualOk &= ($this->m_startYear == $_obj->m_startYear);
        $lEqualOk &= ($this->m_endYear == $_obj->m_endYear);
        $lEqualOk &= ($this->m_isActive == $_obj->m_isActive);
        $lEqualOk &= ($this->m_isBlank == $_obj->m_isBlank);
        return $lEqualOk;
    }
    //===============================================
    public function addFontCss($_filename) {
        $lObj = new GReady();
        $lObj->m_category = "font";
        $lObj->m_model = "css";
        $lObj->m_filename = $_filename;
        $this->m_map[] = $lObj;
    }
    //===============================================
    public function addScriptJs($_filename) {
        $lObj = new GReady();
        $lObj->m_category = "script";
        $lObj->m_model = "js";
        $lObj->m_filename = $_filename;
        $this->m_map[] = $lObj;
    }
    //===============================================
    public function addFooterNetwork($_data, $_link = "#", $_isBlank = false) {
        $lObj = new GReady();
        $lObj->m_category = "footer";
        $lObj->m_model = "network";
        $lObj->m_data = $_data;
        $lObj->m_link = $_link;
        $lObj->m_isBlank = $_isBlank;
        $this->m_map[] = $lObj;
    }
    //===============================================
    public function addEnvInput($_id, $_data = "") {
        $lObj = new GReady();
        $lObj->m_category = "env";
        $lObj->m_model = "input";
        $lObj->m_id = $_id;
        $lObj->m_data = $_data;
        $this->m_map[] = $lObj;
    }
    //===============================================
    public function addEnvDiv($_id, $_data = "") {
        $lObj = new GReady();
        $lObj->m_category = "env";
        $lObj->m_model = "div";
        $lObj->m_id = $_id;
        $lObj->m_data = $_data;
        $this->m_map[] = $lObj;
    }
    //===============================================
    public function addMenu($_menu, $_data, $_link = "#", $_active = true) {
        $lObj = new GReady();
        $lObj->m_category = "menu";
        $lObj->m_model = "menu";
        $lObj->m_menu = $_menu;
        $lObj->m_data = $_data;
        $lObj->m_link = $_link;
        $lObj->m_isActive = $_active;
        $lObj->m_parentObj = $this->m_parentObj;
        $this->m_map[] = $lObj;
        $this->m_currentObj = $lObj;
    }
    //===============================================
    public function addNetwork($_category, $_model, $_icon, $_link, $_class) {
        $lObj = new GReady();
        $lObj->m_category = $_category;
        $lObj->m_model = $_model;
        $lObj->m_icon = $_icon;
        $lObj->m_link = $_link;
        $lObj->m_class = $_class;
        $this->m_map[] = $lObj;
    }
    //===============================================
    public function initObj() {
        $this->m_currentMenu = new GReady();
        $this->m_admin = new GAdmin();
    }
    //===============================================
    public function initHeader() {
        $lObj = new GReady();
        $lObj->m_category = "header";
        $lObj->m_model = "data";
        $lObj->m_title = "ReadyDev";
        $lObj->m_logo = "/data/img/defaults/readydev.png";
        $this->m_map[] = $lObj;
    }
    //===============================================
    public function initFontCss() {
        $this->addFontCss("/libs/google_fonts/Aclonica/css.css");
        $this->addFontCss("/libs/google_fonts/Akronim/css.css");
        $this->addFontCss("/libs/google_fonts/Allan/css.css");
        $this->addFontCss("/libs/google_fonts/Archivo_Narrow/css.css");
        $this->addFontCss("/libs/google_fonts/Anton/css.css");
        $this->addFontCss("/libs/font_awesome/css/font-awesome.min.css");
        $this->addFontCss("/css/style_v2.css");
    }
    //===============================================
    public function initScriptJs() {
        $this->addScriptJs("/js/functions.js");
        $this->addScriptJs("/js/class/GLog.js");
        $this->addScriptJs("/js/class/GXml.js");
        $this->addScriptJs("/js/class/GCode.js");
        $this->addScriptJs("/js/class/GObject.js");
        $this->addScriptJs("/js/class/GServer.js");
        $this->addScriptJs("/js/script.js");
        $this->addScriptJs("/js/class/GLoader.js");
        $this->addScriptJs("/js/class/GAjax.js");
        $this->addScriptJs("/js/class/GKeyEvent.js");
        $this->addScriptJs("/js/class/GMenu.js");
        $this->addScriptJs("/js/class/GTemplate.js");
        $this->addScriptJs("/js/class/GEditor.js");
        $this->addScriptJs("/js/class/GPage.js");
    }
    //===============================================
    public function initEnv() {
        $this->addEnvInput("TestEnv", $this->m_isTestEnv);
        $this->addEnvInput("EditorClipboardFilter", "filter_text");
        
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
        
        $this->addEnvDiv("ImageData");
    }
    //===============================================
    public function initMenu() {
        $this->addMenu("home", "Accueil", "/home", false);
        $this->addMenu("cv", "CV", "/home/cv");
        
        $this->pushParent();
        $this->initParent();
        $this->addMenu("cv", "CV Simplifié", "/home/cv/simple");
        $this->addMenu("cv", "CV Détaillé", "/home/cv/full");
        $this->popParent();
        
        $this->addMenu("presentation", "Présentation", "/home/presentation");
        $this->addMenu("tutoriels", "Tutoriels", "/home/tutoriels");
        
        $this->addMenu("cours", "Cours", "/home/cours");
        $this->pushParent();
        $this->initParent();
        $this->addMenu("cours", "Mathematiques", "/home/cours/maths");
        
        $this->pushParent();
        $this->initParent();
        $this->addMenu("cours", "Algèbre", "/home/cours/maths/algebra");
        
        $this->pushParent();
        $this->initParent();
        $this->addMenu("cours", "Algèbre booléen", "/home/cours/maths/algebra/boolean");
        $this->addMenu("cours", "Algèbre linéaire", "/home/cours/maths/algebra/linear");
        $this->popParent();
        
        $this->addMenu("cours", "Géométrie", "/home/cours/maths/geometrics");
        $this->popParent();
        
        $this->addMenu("cours", "Physique", "/home/cours/physics");
        $this->addMenu("cours", "Chmie", "/home/cours/chimistry");
        $this->addMenu("cours", "Technologie", "/home/cours/technology");
        $this->popParent();
        
        $this->addMenu("admin", "Admin", "/home/admin");
        $this->addMenu("connection", "Connexion", "/home/connexion");
    }
    //===============================================
    public function initCurrentMenu() {
        $lObj = $this->findObjMapCM("menu", "menu", null, false);
        for($i = 0; $i < $lObj->size(); $i++) {
            $lObj->loadFromMap($i);
            if($lObj->m_link == $this->m_pageId) {
                $this->m_currentMenu->setObj($lObj);
                break;
            }
        }
    }
    //===============================================
    public function initFooter() {
        $lObj = new GReady();
        $lObj->m_category = "footer";
        $lObj->m_model = "data";
        $lObj->m_title = "Réseaux Sociaux - Réjoignez-nous";
        $this->m_map[] = $lObj;
        
        $lObj = new GReady();
        $lObj->m_category = "footer";
        $lObj->m_model = "copyright";
        $lObj->m_title = "ReadDev";
        $lObj->m_startYear = "2017";
        $lObj->m_endYear = date("Y");
        $lObj->m_data = "";
        $lObj->m_data .= "Plateforme de Développement Continu<br/>";
        $lObj->m_data .= "Produit par <b>Gérard KESSE</b><br/>";
        $lObj->m_data .= "Polytech'Montpellier<br/>";
        $this->m_map[] = $lObj;
        
        $lObj = new GReady();
        $lObj->m_category = "footer";
        $lObj->m_model = "copyright_icon";
        $lObj->m_data = "copyright";
        $this->m_map[] = $lObj;
        
        $this->addFooterNetwork("facebook");
        $this->addFooterNetwork("skype");
        $this->addFooterNetwork("github", "https://github.com/gkesse/", true);
        $this->addFooterNetwork("linkedin", "https://www.linkedin.com/in/tia-gerard-kesse/", true);
    }
    //===============================================
    public function initLog() {
        $lObj = new GReady();
        $lObj->m_category = "log";
        $lObj->m_model = "data";
        $lObj->m_id = "LogModal";
        $lObj->m_title = "Logs";
        $lObj->m_intro = "Consultez les logs.";
        $this->m_map[] = $lObj;
        
        $lObj = new GReady();
        $lObj->m_category = "log";
        $lObj->m_model = "form_id";
        $lObj->m_id = "LogForm";
        $this->m_map[] = $lObj;
        
        $lObj = new GReady();
        $lObj->m_category = "log";
        $lObj->m_model = "title_id";
        $lObj->m_id = "LogTitle";
        $this->m_map[] = $lObj;
        
        $lObj = new GReady();
        $lObj->m_category = "log";
        $lObj->m_model = "body_id";
        $lObj->m_id = "LogBody";
        $this->m_map[] = $lObj;
        
        $lObj = new GReady();
        $lObj->m_category = "log";
        $lObj->m_model = "intro_id";
        $lObj->m_id = "LogIntro";
        $this->m_map[] = $lObj;
        
        $lObj = new GReady();
        $lObj->m_category = "log";
        $lObj->m_model = "close_cb";
        $lObj->m_module = "logs";
        $lObj->m_method = "close_logs";
        $lObj->m_icon = "times";
        $this->m_map[] = $lObj;
        
        $lObj = new GReady();
        $lObj->m_category = "log";
        $lObj->m_model = "button_ok";
        $lObj->m_module = "logs";
        $lObj->m_method = "close_logs";
        $lObj->m_data = "OK";
        $this->m_map[] = $lObj;
    }
    //===============================================
    public function initView() {
        $lObj = new GReady();
        $lObj->m_category = "view";
        $lObj->m_model = "data";
        $lObj->m_title = "Tutoriels";
        $lObj->m_icon = "eye";
        $lObj->m_label = "Vues";
        $lObj->m_views = "12345";
        $this->m_map[] = $lObj;
        
        $this->addNetwork("view", "network", "facebook", "#", "Facebook");
        $this->addNetwork("view", "network", "linkedin", "#", "Linkedin");
    }
    //===============================================
    public function writeMenu($_parent = null) {
        $lMenuI = $this->findObjMapCM("menu", "menu", $_parent);
        for($i = 0; $i < $lMenuI->size(); $i++) {
            $lMenuI->loadFromMap($i);
            if($lMenuI->m_isActive) {
                $lMenuJ = $this->findObjMapCM("menu", "menu", $lMenuI->m_currentObj);
                
                $lActive = "";
                
                $lActiveOk = false;
                $lActiveOk |= $lMenuI->isEqual($this->m_currentMenu);
                $lActiveOk |= (($lMenuI->m_menu == $this->m_currentMenu->m_menu) && !$lMenuI->m_parentObj);
                
                if($lActiveOk) $lActive = " Active";
                
                if(!$lMenuJ->size() && !$_parent) {
                    echo sprintf("<a class='Menu2%s' href='%s'>%s</a>\n", $lActive, $lMenuI->m_link, $lMenuI->m_data);
                }
                else if(!$lMenuJ->size() && $_parent) {
                    echo sprintf("<a class='Menu10' href='%s'><div class='Menu8%s'>%s</div></a>\n", $lMenuI->m_link, $lActive, $lMenuI->m_data);
                }
                else {
                    if(!$_parent) {
                        echo sprintf("<div class='Menu6'>\n");
                        echo sprintf("<a class='Menu2%s' href='%s'>%s</a>\n", $lActive, $lMenuI->m_link, $lMenuI->m_data);
                    }
                    else if($_parent) {
                        echo sprintf("<div class='Menu9'>\n");
                        echo sprintf("<div class='Menu12'><div class='Menu8'>%s <i class='Menu13 fa fa-caret-down'></i></div></div>\n", $lMenuI->m_data);
                    }
                    
                    if(!$_parent) {
                        echo sprintf("<div class='Menu7'>\n");
                    }
                    else if($_parent) {
                        echo sprintf("<div class='Menu11'>\n");
                    }
                    
                    $this->writeMenu($lMenuI->m_currentObj);
                    echo sprintf("</div>\n");
                    echo sprintf("</div>\n");
                }
            }
        }
    }
    //===============================================
    public function serialize($_code = "ready") {
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->addData($_code, "category", $this->m_category);
        $lDom->addData($_code, "model", $this->m_model);
        $lDom->addData($_code, "lang", $this->m_lang);
        $lDom->addData($_code, "title", $this->m_title);
        $lDom->addData($_code, "logo", $this->m_logo);
        $lDom->addData($_code, "id", $this->m_id);
        $lDom->addData($_code, "data", $this->m_data);
        $lDom->addData($_code, "link", $this->m_link);
        $lDom->addData($_code, "active", $this->m_isActive);
        $lDom->addData($_code, "m_menu", $this->m_menu);
        $lDom->addMap($_code, $this->m_map);
        return $lDom->toString();
    }
    //===============================================
    public function deserialize($_data, $_code = "ready") {
        $lDom = new GCode();
        $lDom->loadXml($_data);
        $this->m_category = $lDom->getItem($_code, "category");
        $this->m_model = $lDom->getItem($_code, "model");
        $this->m_lang = $lDom->getItem($_code, "lang");
        $this->m_title = $lDom->getItem($_code, "title");
        $this->m_logo = $lDom->getItem($_code, "logo");
        $this->m_id = $lDom->getItem($_code, "id");
        $this->m_data = $lDom->getItem($_code, "data");
        $this->m_link = $lDom->getItem($_code, "link");
        $this->m_isActive = $lDom->getItem($_code, "active");
        $this->m_menu = $lDom->getItem($_code, "menu");
        $lDom->getMap($_code, $this->m_map, $this);
    }
    //===============================================
    public function run() {
        //===============================================
        // [info] : on initialise les données
        //===============================================
        
        $this->initObj();
        $this->initPageId();
        $this->initTestEnv();
        $this->initHeader();
        $this->initFontCss();
        $this->initScriptJs();
        $this->initEnv();
        $this->initMenu();
        $this->initCurrentMenu();
        $this->initHomePage();
        
        //===============================================
        // [info] : on initialise la page
        //===============================================
        
        $lObj = $this->findObjMapCM("header", "data");
        $lObj->loadFromMap(0);
        
        echo sprintf("<!DOCTYPE html>\n");
        echo sprintf("<html lang='%s'>\n", $lObj->m_lang);
        echo sprintf("<head>\n");
        echo sprintf("<title>%s</title>\n", $lObj->m_title);
        echo sprintf("<meta charset='UTF-8'/>\n");
        echo sprintf("<link rel='shortcut icon' type='image/png' href='%s'/>\n", $lObj->m_logo);
        echo sprintf("<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'/>\n");
        echo sprintf("<meta name='viewport' content='width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0, user-scalable=no'/>\n");
        
        //===============================================
        // [info] : on initialise les feuilles de style css
        //===============================================
        
        $lObj = $this->findObjMapCM("font", "css");
        
        for($i = 0; $i < $lObj->size(); $i++) {
            $lObj->loadFromMap($i);
            echo sprintf("<link rel='stylesheet' href='%s'/>\n", $lObj->m_filename);
        }
        
        //===============================================
        
        echo sprintf("</head>\n");
        echo sprintf("<body>\n");
        echo sprintf("<div class='Html1'>\n");
        
        //===============================================
        // [info] : on initialise les variables globales
        //===============================================
        
        $lObj = $this->findObjMapC("env");
        
        for($i = 0; $i < count($this->m_map); $i++) {
            $lObj->loadFromMap($i);
            if($lObj->m_model == "input") {
                echo sprintf("<input type='hidden' id='%s' value='%s'/>\n", $lObj->m_id, $lObj->m_data);
            }
            else if($lObj->m_model == "div") {
                echo sprintf("<div id='%s' hidden>%s</div>\n", $lObj->m_id, $lObj->m_data);
            }
        }
        
        //===============================================
        // [info] : on initialise les fonds d'écran
        //===============================================
        
        echo sprintf("<div class='Background1'></div>\n");
        echo sprintf("<div class='Background2'></div>\n");
        echo sprintf("<div class='Background3'></div>\n");
        
        //===============================================
        // [info] : on initialise les fenêtres modales
        //===============================================
        
        $this->runLog();
        
        //===============================================
        
        echo sprintf("<div class='Html2'>\n");
        
        //===============================================
        // [info] : on crée le menu de navigation
        //===============================================
        
        $lObj = $this->findObjMapCM("header", "data");
        $lObj->loadFromMap(0);
        
        echo sprintf("<div class='Menu1'>\n");
        echo sprintf("<a class='Menu3' href='%s'>\n", $this->m_homePage);
        echo sprintf("<img class='Menu4' src='%s' alt='logo.png'/>\n", $lObj->m_logo);
        echo sprintf("<span class='Menu5'>%s</span>\n", $lObj->m_title);
        echo sprintf("</a>\n");
        $this->writeMenu();
        echo sprintf("</div>\n");
        
        //===============================================
        // [info] : initialise le corps de la page
        //===============================================
        
        $this->runView();
        $this->m_admin->run();
        
        $this->addLogs($this->m_admin->getLogs());
        
        //===============================================
        
        echo sprintf("</div>\n");
        
        $this->runFooter();
        
        echo sprintf("</div>\n");
        
        //===============================================
        // [info] : on initialise les scripts js
        //===============================================
        
        $lObj = $this->findObjMapCM("script", "js");
        
        for($i = 0; $i < count($this->m_map); $i++) {
            $lObj->loadFromMap($i);
            echo sprintf("<script src='%s'></script>\n", $lObj->m_filename);
        }
        
        //===============================================
        
        echo sprintf("</body>\n");
        echo sprintf("</html>\n");
    }
    //===============================================
    public function runFooter() {
        $this->initFooter();
        
        $lData = $this->findObjMapCM("footer", "data");
        $lNetwork = $this->findObjMapCM("footer", "network");
        $lCopyright = $this->findObjMapCM("footer", "copyright");
        $lCopyrightIcon = $this->findObjMapCM("footer", "copyright_icon");
        
        $lData->loadFromMap(0);
        $lCopyright->loadFromMap(0);
        $lCopyrightIcon->loadFromMap(0);
        
        echo sprintf("<footer class='Footer1'>\n");
        echo sprintf("<div>%s</div>\n", $lData->m_title);
        
        echo sprintf("<div>\n");
        for($i = 0; $i < $lNetwork->size(); $i++) {
            $lNetwork->loadFromMap($i);
            if($lNetwork->m_isBlank) {
                echo sprintf("<a href='%s' target='_blank'>\n", $lNetwork->m_link);
            }
            else {
                echo sprintf("<a href='%s'>\n", $lNetwork->m_link);
            }
            echo sprintf("<i class='Footer2 fa fa-%s'></i>\n", $lNetwork->m_data);
            echo sprintf("</a>");
        }
        echo sprintf("</div>\n");
        
        echo sprintf("<div>\n");
        echo sprintf("<i class='fa fa-%s'></i>\n", $lCopyrightIcon->m_data);
        echo sprintf("<span>%s - %s | %s</span>\n", $lCopyright->m_startYear, $lCopyright->m_endYear, $lCopyright->m_title);
        echo sprintf("<div>%s</div>\n", $lCopyright->m_data);
        echo sprintf("</div>\n");
        
        echo sprintf("</footer>\n");
        
    }
    //===============================================
    public function runLog() {
        $this->initLog();
        
        $lData = $this->findObjMapCM("log", "data");
        $lFormId = $this->findObjMapCM("log", "form_id");
        $lTitleId = $this->findObjMapCM("log", "title_id");
        $lIntroId = $this->findObjMapCM("log", "intro_id");
        $lBodyId = $this->findObjMapCM("log", "body_id");
        $lCloseCB = $this->findObjMapCM("log", "close_cb");
        $lButtonOk = $this->findObjMapCM("log", "button_ok");
        
        $lData->loadFromMap(0);
        $lFormId->loadFromMap(0);
        $lTitleId->loadFromMap(0);
        $lIntroId->loadFromMap(0);
        $lBodyId->loadFromMap(0);
        $lCloseCB->loadFromMap(0);
        $lButtonOk->loadFromMap(0);
        
        echo sprintf("<div class='Modal1' id='%s'>\n", $lData->m_id);
        echo sprintf("<div class='Modal2' id='%s'>\n", $lFormId->m_id);
        echo sprintf("<div class='Modal3' onclick='call_server(\"%s\", \"%s\", this)'>\n", $lCloseCB->m_module, $lCloseCB->m_method);
        echo sprintf("<i class='fa fa-%s'></i></div>\n", $lCloseCB->m_icon);
        echo sprintf("<div class='Modal4' id='%s'>%s</div>\n", $lTitleId->m_id, $lData->m_title);
        echo sprintf("<div class='Modal5'>\n");
        echo sprintf("<div class='Modal6' id='%s'>%s</div>\n", $lIntroId->m_id, $lData->m_intro);
        echo sprintf("<div class='Modal7'>\n");
        echo sprintf("<div id='%s'></div>\n", $lBodyId->m_id);
        echo sprintf("</div>\n");
        echo sprintf("<div class='Modal8'>\n");
        echo sprintf("<div class='Modal9' onclick='call_server('%s', '%s', this)'>%s</div>\n", $lButtonOk->m_module, $lButtonOk->m_method, $lButtonOk->m_data);
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function runView() {
        $this->initView();
        $lData = $this->findObjMapCM("view", "data");
        $lNetwork = $this->findObjMapCM("view", "network");
        $lData->loadFromMap(0);
        
        echo sprintf("<div class='View1'>\n");
        echo sprintf("<h1 class='View2'>%s</h1>\n", $lData->m_title);
        echo sprintf("<div class='View3'>\n");
        echo sprintf("<div>\n");
        echo sprintf("<div class='View4'>\n");
        echo sprintf("<div class='View6'>\n");
        echo sprintf("<i class='fa fa-%s'></i> %s\n", $lData->m_icon, $lData->m_label);
        echo sprintf("</div>\n");
        echo sprintf("<div class='View7'>%s</div>\n", $lData->m_views);
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("<div>\n");
        
        for($i = 0; $i < $lNetwork->size(); $i++) {
            $lNetwork->loadFromMap($i);
            echo sprintf("<a href='%s'><i class='View5 %s fa fa-%s'></i></a>\n", $lNetwork->m_link, $lNetwork->m_class, $lNetwork->m_icon);
        }

        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>
