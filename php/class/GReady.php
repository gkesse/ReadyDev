<?php
//===============================================
class GReady extends GObject {
    //===============================================
    private $m_lang = "";
    private $m_title = "";
    private $m_logo = "";
    //===============================================
    private $m_id = "";
    private $m_data = "";
    private $m_menu = "";
    private $m_link = "";
    private $m_isActive = false;
    //===============================================
    private $m_admin = null;
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
        $this->m_category = $_obj->m_category;
        $this->m_model = $_obj->m_model;
        $this->m_id = $_obj->m_id;
        $this->m_data = $_obj->m_data;
        $this->m_link = $_obj->m_link;
        $this->m_menu = $_obj->m_menu;
        $this->m_isActive = $_obj->m_isActive;
    }
    //===============================================
    public function isEqual($_obj) {
        $lEqualOk = true;
        $lEqualOk &= ($this->m_category == $_obj->m_category);
        $lEqualOk &= ($this->m_model == $_obj->m_model);
        $lEqualOk &= ($this->m_id == $_obj->m_id);
        $lEqualOk &= ($this->m_data == $_obj->m_data);
        $lEqualOk &= ($this->m_link == $_obj->m_link);
        $lEqualOk &= ($this->m_menu == $_obj->m_menu);
        $lEqualOk &= ($this->m_isActive == $_obj->m_isActive);
        return $lEqualOk;
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
        $lObj = new GReady();
        $lObj->m_category = "font";
        $lObj->m_model = "css";
        $lObj->m_data = $_data;
        $this->m_map[] = $lObj;
    }
    //===============================================
    public function addScriptJs($_data) {
        $lObj = new GReady();
        $lObj->m_category = "script";
        $lObj->m_model = "js";
        $lObj->m_data = $_data;
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
    public function initObj() {
        $this->m_currentMenu = new GReady();
        $this->m_admin = new GAdmin();
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
        for($i = 0; $i < count($this->m_map); $i++) {
            $lObj = $this->m_map[$i];
            if($lObj->m_category == "menu") {
                if($lObj->m_model == "menu") {
                    if($lObj->m_link == $this->m_pageId) {
                        $this->m_currentMenu->setObj($lObj);
                        break;
                    }
                }
            }
        }
    }
    //===============================================
    public function findMenuMap($_parent = null) {
        return $this->findObjMapCM("menu", "menu", $_parent);
    }
    //===============================================
    public function writeMenu($_parent = null) {
        $lMenuI = $this->findMenuMap($_parent);
        for($i = 0; $i < count($lMenuI->m_map); $i++) {
            $lObj = $lMenuI->m_map[$i];
            if($lObj->m_category == "menu") {
                if($lObj->m_model == "menu") {
                    if($lObj->m_isActive) {
                        $lMenuJ = $this->findMenuMap($lObj);
                        
                        $lActive = "";
                        
                        $lActiveOk = false;
                        $lActiveOk |= $lObj->isEqual($this->m_currentMenu);
                        $lActiveOk |= ($lObj->m_menu == $this->m_currentMenu->m_menu && !$lObj->m_parentObj);
                        
                        if($lActiveOk) $lActive = " Active";
                        
                        if(empty($lMenuJ->m_map) && !$_parent) {
                            echo sprintf("<a class='Menu2%s' href='%s'>%s</a>\n", $lActive, $lObj->m_link, $lObj->m_data);
                        }
                        else if(empty($lMenuJ->m_map) && $_parent) {
                            echo sprintf("<div class='Menu10'><a class='Menu8%s' href='%s'>%s</a></div>\n", $lActive, $lObj->m_link, $lObj->m_data);
                        }
                        else {
                            if(!$_parent) {
                                echo sprintf("<div class='Menu6'>\n");
                                echo sprintf("<a class='Menu2%s' href='%s'>%s</a>\n", $lActive, $lObj->m_link, $lObj->m_data);
                            }
                            else if($_parent) {
                                echo sprintf("<div class='Menu9'>\n");
                                echo sprintf("<div class='Menu12'><div class='Menu8'>%s <i class='Menu13 fa fa-caret-down'></i></div></div>\n", $lObj->m_data);
                            }
                            
                            if(!$_parent) {
                                echo sprintf("<div class='Menu7'>\n");
                            }
                            else if($_parent) {
                                echo sprintf("<div class='Menu11'>\n");
                            }
                            
                            $this->writeMenu($lObj);
                            echo sprintf("</div>\n");
                            echo sprintf("</div>\n");
                        }                        
                    }
                }
            }
        }
    }
    //===============================================
    public function serialize($_code = "ready") {
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->addData($_code, "lang", $this->m_lang);
        $lDom->addData($_code, "title", $this->m_title);
        $lDom->addData($_code, "logo", $this->m_logo);
        $lDom->addData($_code, "category", $this->m_category);
        $lDom->addData($_code, "model", $this->m_model);
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
        $this->m_lang = $lDom->getItem($_code, "lang");
        $this->m_title = $lDom->getItem($_code, "title");
        $this->m_logo = $lDom->getItem($_code, "logo");
        $this->m_category = $lDom->getItem($_code, "category");
        $this->m_model = $lDom->getItem($_code, "model");
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
        
        echo sprintf("<!DOCTYPE html>\n");
        echo sprintf("<html lang='%s'>\n", $this->m_lang);
        echo sprintf("<head>\n");
        echo sprintf("<title>%s</title>\n", $this->m_title);
        echo sprintf("<meta charset='UTF-8'/>\n");
        echo sprintf("<link rel='shortcut icon' type='image/png' href='%s'/>\n", $this->m_logo);
        echo sprintf("<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'/>\n");
        echo sprintf("<meta name='viewport' content='width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0, user-scalable=no'/>\n");
        
        //===============================================
        // [info] : on initialise les feuilles de style css
        //===============================================
        
        for($i = 0; $i < count($this->m_map); $i++) {
            $lObj = $this->m_map[$i];
            if($lObj->m_category == "font") {
                if($lObj->m_model == "css") {
                    echo sprintf("<link rel='stylesheet' href='%s'/>\n", $lObj->m_data);
                }
            }
        }
        
        //===============================================
        
        echo sprintf("</head>\n");
        echo sprintf("<body>\n");
        echo sprintf("<div class='Html1'>\n");
        
        //===============================================
        // [info] : on initialise les variables globales
        //===============================================
        
        for($i = 0; $i < count($this->m_map); $i++) {
            $lObj = $this->m_map[$i];
            if($lObj->m_category == "env") {
                if($lObj->m_model == "input") {
                    echo sprintf("<input type='hidden' id='%s' value='%s'/>\n", $lObj->m_id, $lObj->m_data);
                }
                else if($lObj->m_model == "div") {
                    echo sprintf("<div id='%s' hidden>%s</div>\n", $lObj->m_id, $lObj->m_data);
                }
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
        
        require "./php/form/log.php";
        
        //===============================================
        
        echo sprintf("<div class='Html2'>\n");
        
        //===============================================
        // [info] : on crée le menu de navigation
        //===============================================
        
        echo sprintf("<div class='Menu1'>\n");
        echo sprintf("<a class='Menu3' href='%s'>\n", $this->m_homePage);
        echo sprintf("<img class='Menu4' src='%s' alt='logo.png'/>\n", $this->m_logo);
        echo sprintf("<span class='Menu5'>%s</span>\n", $this->m_title);
        echo sprintf("</a>\n");
        $this->writeMenu();
        echo sprintf("</div>\n");
        
        //===============================================
        // [info] : initialise le corps de la page
        //===============================================
        
        $this->m_admin->run();
        $this->addLogs($this->m_admin->getLogs());
        
        //===============================================
        
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        
        //===============================================
        // [info] : on initialise les scripts js
        //===============================================
        
        for($i = 0; $i < count($this->m_map); $i++) {
            $lObj = $this->m_map[$i];
            if($lObj->m_category == "script") {
                if($lObj->m_model == "js") {
                    echo sprintf("<script src='%s'></script>\n", $lObj->m_data);
                }
            }
        }
        
        //===============================================
        
        echo sprintf("</body>\n");
        echo sprintf("</html>\n");
    }
    //===============================================
}
//===============================================
?>
