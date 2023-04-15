<?php
//===============================================
class GReady extends GObject {
    //===============================================
    private $m_id = "";
    private $m_lang = "";
    private $m_title = "";
    private $m_charset = "";
    private $m_logo = "";
    private $m_module = "";
    private $m_method = "";
    private $m_intro = "";
    private $m_name = "";
    private $m_root = "";
    private $m_link = "";
    private $m_icon = "";
    private $m_label = "";
    private $m_text = "";
    private $m_data = "";
    private $m_value = "";
    private $m_filename = "";
    private $m_path = "";
    private $m_views = "";
    private $m_class = "";
    private $m_startYear = "";
    private $m_endYear = "";
    //===============================================
    private $m_isActive = false;
    private $m_isBlank = false;
    //===============================================
    private $m_admin = null;
    private $m_menu = null;
    private $m_header = null;
    private $m_project = null;
    private $m_page = null;
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
        $this->m_name = $_obj->m_name;
        $this->m_root = $_obj->m_root;
        $this->m_filename = $_obj->m_filename;
        $this->m_path = $_obj->m_path;
        $this->m_link = $_obj->m_link;
        $this->m_label = $_obj->m_label;
        $this->m_text = $_obj->m_text;
        $this->m_data = $_obj->m_data;
        $this->m_value = $_obj->m_value;
        $this->m_icon = $_obj->m_icon;
        $this->m_module = $_obj->m_module;
        $this->m_method = $_obj->m_method;
        $this->m_intro = $_obj->m_intro;
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
        $lEqualOk &= ($this->m_name == $_obj->m_name);
        $lEqualOk &= ($this->m_root == $_obj->m_root);
        $lEqualOk &= ($this->m_filename == $_obj->m_filename);
        $lEqualOk &= ($this->m_path == $_obj->m_path);
        $lEqualOk &= ($this->m_link == $_obj->m_link);
        $lEqualOk &= ($this->m_label == $_obj->m_label);
        $lEqualOk &= ($this->m_text == $_obj->m_text);
        $lEqualOk &= ($this->m_data == $_obj->m_data);
        $lEqualOk &= ($this->m_value == $_obj->m_value);
        $lEqualOk &= ($this->m_icon == $_obj->m_icon);
        $lEqualOk &= ($this->m_module == $_obj->m_module);
        $lEqualOk &= ($this->m_method == $_obj->m_method);
        $lEqualOk &= ($this->m_intro == $_obj->m_intro);
        $lEqualOk &= ($this->m_views == $_obj->m_views);
        $lEqualOk &= ($this->m_class == $_obj->m_class);
        $lEqualOk &= ($this->m_startYear == $_obj->m_startYear);
        $lEqualOk &= ($this->m_endYear == $_obj->m_endYear);
        $lEqualOk &= ($this->m_isActive == $_obj->m_isActive);
        $lEqualOk &= ($this->m_isBlank == $_obj->m_isBlank);
        return $lEqualOk;
    }
    //===============================================
    public function addFile($_category, $_model, $_filename) {
        $lObj = new GReady();
        $lObj->m_category = $_category;
        $lObj->m_model = $_model;
        $lObj->m_filename = $_filename;
        $this->m_map[] = $lObj;
    }
    //===============================================
    public function addFooterNetwork($_name, $_link = "#", $_isBlank = false) {
        $lObj = new GReady();
        $lObj->m_category = "footer";
        $lObj->m_model = "network";
        $lObj->m_name = $_name;
        $lObj->m_link = $_link;
        $lObj->m_isBlank = $_isBlank;
        $this->m_map[] = $lObj;
    }
    //===============================================
    public function addEnv($_model, $_id, $_value = "") {
        $lObj = new GReady();
        $lObj->m_category = "env";
        $lObj->m_model = $_model;
        $lObj->m_id = $_id;
        $lObj->m_value = $_value;
        $this->m_map[] = $lObj;
    }
    //===============================================
    public function addMenu($_name, $_data, $_link = "#", $_active = true) {
        $lObj = new GReady();
        $lObj->m_category = "menu";
        $lObj->m_model = "menu";
        $lObj->m_name = $_name;
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
    public function addMetadata($_model, $_name, $_data) {
        $lObj = new GReady();
        $lObj->m_category = "metadata";
        $lObj->m_model = $_model;
        $lObj->m_name = $_name;
        $lObj->m_data = $_data;
        $this->m_map[] = $lObj;
    }
    //===============================================
    public function initReady() {
        $this->initPageId();
        $this->initTestEnv();
        $this->initHomePage();
        
        $this->m_menu = new GReady();
        $this->m_admin = new GAdmin();

        $lObj = new GReady();
        $lObj->m_category = "header";
        $lObj->m_model = "config";
        $lObj->m_title = "ReadyDev";
        $lObj->m_charset = "UTF-8";
        $lObj->m_logo = "/data/img/defaults/readydev.png";
        $this->m_map[] = $lObj;
        $this->m_header = $lObj;

        $lObj = new GReady();
        $lObj->m_category = "project";
        $lObj->m_model = "config";
        $lObj->m_name = "readydev";
        $this->m_map[] = $lObj;
        $this->m_project = $lObj;

        $lObj = new GReady();
        $lObj->m_category = "page";
        $lObj->m_model = "config";
        $lObj->m_root = "/data/cache/page";
        $lObj->m_id = $this->m_pageId;
        $lObj->m_filename = "main.php";
        $this->m_map[] = $lObj;
        $this->m_page = $lObj;
        
        //===============================================
        // [info] : on initialise les feuilles de style
        //===============================================
        
        $this->addFile("font", "css", "/libs/google_fonts/Aclonica/css.css");
        $this->addFile("font", "css", "/libs/google_fonts/Akronim/css.css");
        $this->addFile("font", "css", "/libs/google_fonts/Allan/css.css");
        $this->addFile("font", "css", "/libs/google_fonts/Archivo_Narrow/css.css");
        $this->addFile("font", "css", "/libs/google_fonts/Anton/css.css");
        $this->addFile("font", "css", "/libs/font_awesome/css/font-awesome.min.css");
        $this->addFile("font", "css", "/css/style_v2.css");

        //===============================================
        // [info] : on initialise les scripts js
        //===============================================
        
        $this->addFile("script", "js", "/js/functions.js");
        $this->addFile("script", "js", "/js/class/GLog.js");
        $this->addFile("script", "js", "/js/class/GXml.js");
        $this->addFile("script", "js", "/js/class/GCode.js");
        $this->addFile("script", "js", "/js/class/GObject.js");
        $this->addFile("script", "js", "/js/class/GLoader.js");
        $this->addFile("script", "js", "/js/class/GAjax.js");
        $this->addFile("script", "js", "/js/class/GKeyEvent.js");
        $this->addFile("script", "js", "/js/class/GMenu.js");
        $this->addFile("script", "js", "/js/class/GTemplate.js");
        $this->addFile("script", "js", "/js/class/GEditor.js");
        $this->addFile("script", "js", "/js/class/GPage.js");
        $this->addFile("script", "js", "/js/class/GServer.js");
        $this->addFile("script", "js", "/js/script.js");

        //===============================================
        // [info] : on initialise les variables globales
        //===============================================
        
        $this->addEnv("input", "TestEnv", $this->m_isTestEnv);
        $this->addEnv("input", "gPageId", $this->m_pageId);
        $this->addEnv("input", "EditorClipboardFilter", "filter_text");
        
        $this->addEnv("input", "SearchDataSize", "8");
        $this->addEnv("input", "SearchDataCount", "0");
        $this->addEnv("input", "SearchDataOffset", "0");
        $this->addEnv("input", "SearchLastId", "-1");
        
        $this->addEnv("input", "TableCurrentData");
        $this->addEnv("input", "TableHeaderVisible");
        $this->addEnv("input", "TableSelectModule");
        $this->addEnv("input", "TableSelectMethod");
        $this->addEnv("input", "TableNextModule");
        $this->addEnv("input", "TableNextMethod");
        
        $this->addEnv("div", "ImageData");
        
        //===============================================
        // [info] : on initialise le menu de navigation
        //===============================================
        
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
        
        //===============================================
        // [info] : on initialise le menu courant
        //===============================================
        
        $lObj = $this->findObjMapCM("menu", "menu", null, false);
        for($i = 0; $i < $lObj->size(); $i++) {
            $lObj->loadFromMap($i);
            if($lObj->m_link == $this->m_pageId) {
                $this->m_menu->setObj($lObj);
                break;
            }
        }
        
        //===============================================
        // [info] : on initialise le pied de la page
        //===============================================
        
        $lTitle = sprintf("%s | %s", $this->m_menu->m_data, $this->m_header->m_title);
        
        $lObj = new GReady();
        $lObj->m_category = "metadata";
        $lObj->m_model = "canonical";
        $lObj->m_data = $this->getUrl();
        $this->m_map[] = $lObj;
        
        $this->addMetadata("google", "description", $this->toDescription());
        
        $this->addMetadata("facebook", "og:type", "website");
        $this->addMetadata("facebook", "og:image", "https://raw.githubusercontent.com/gkesse/ReadyDev/2.0/data/img/defaults/b_readydev.png");
        $this->addMetadata("facebook", "og:image:secure_url", "https://raw.githubusercontent.com/gkesse/ReadyDev/2.0/data/img/defaults/b_readydev.png");
        $this->addMetadata("facebook", "og:image:type", "image/png");
        $this->addMetadata("facebook", "og:image:width", "440");
        $this->addMetadata("facebook", "og:image:height", "440");
        $this->addMetadata("facebook", "og:locale", "fr_FR");
        $this->addMetadata("facebook", "og:url", $this->getUrl());
        $this->addMetadata("facebook", "og:title", $lTitle);
        $this->addMetadata("facebook", "og:site_name", $this->m_header->m_title);
        $this->addMetadata("facebook", "og:description", $this->toDescription());
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
        $lObj->m_text = "OK";
        $this->m_map[] = $lObj;
    }
    //===============================================
    public function initView() {
        $lObj = new GReady();
        $lObj->m_category = "view";
        $lObj->m_model = "data";
        $lObj->m_title = $this->m_menu->m_data;
        $lObj->m_icon = "eye";
        $lObj->m_label = "Vues";
        $lObj->m_views = "12345";
        $this->m_map[] = $lObj;
                
        $this->addNetwork("view", "network", "facebook", $this->toFacebookUrl(), "Facebook");
        $this->addNetwork("view", "network", "linkedin", $this->toLinkedInUrl(), "Linkedin");
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
        $lObj->m_text = "";
        $lObj->m_text .= sprintf("Plateforme de Développement Continu<br/>\n");
        $lObj->m_text .= sprintf("Produit par <b>Gérard KESSE</b><br/>\n");
        $lObj->m_text .= sprintf("Polytech'Montpellier<br/>\n");
        $this->m_map[] = $lObj;
        
        $lObj = new GReady();
        $lObj->m_category = "footer";
        $lObj->m_model = "copyright_icon";
        $lObj->m_icon = "copyright";
        $this->m_map[] = $lObj;
        
        $this->addFooterNetwork("facebook");
        $this->addFooterNetwork("skype");
        $this->addFooterNetwork("github", "https://github.com/gkesse/", true);
        $this->addFooterNetwork("linkedin", "https://www.linkedin.com/in/tia-gerard-kesse/", true);
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
                $lActiveOk |= $lMenuI->isEqual($this->m_menu);
                $lActiveOk |= (($lMenuI->m_name == $this->m_menu->m_name) && !$lMenuI->m_parentObj);
                
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
    public function toDescription() {
        $lData = "";
        $lData .= sprintf("Avec <b>ReadyDev</b>, montez en compétences en développement informatique\n");
        $lData .= sprintf("et consevez vos propres applications logiciel\n");
        $lData .= sprintf("grâce à des cours et tutoriels adaptés aux sciences de l'Ingénieur.\n");
        $lData .= sprintf("Plateforme de Développement Continu. Produit par Gérard KESSE.\n");
        return $lData;
    }
    //===============================================
    public function toFacebookUrl() {
        $lUrl = "http://www.facebook.com/sharer.php";
        $lUrl = sprintf("%s?u=%s", $lUrl, $this->getUrl());
        return $lUrl;
    }
    //===============================================
    public function toLinkedInUrl() {
        $lUrl = "https://www.linkedin.com/shareArticle";
        $lTitle = sprintf("%s | %s", $this->m_menu->m_data, $this->m_header->m_title);
        $lUrl = sprintf("%s?mini=true&url=%s&title=%s&summary=%s", $lUrl, $this->getUrl(), urlencode($lTitle), urlencode($this->toDescription()));
        return $lUrl;
    }
    //===============================================
    public function readPagePath() {
        $lProject = $this->m_project;
        $lPage = $this->m_page;
        $lPath = sprintf("%s/%s%s/%s", $lPage->m_root, $lProject->m_name, $lPage->m_id, $lPage->m_filename);
        $lPath = $this->getPath($lPath);
        $lPage->m_path = $lPath;
    }
    //===============================================
    public function isPage() {
        $lPage = $this->m_page;
        if(file_exists($lPage->m_path)) return true;
        return false;
    }
    //===============================================
    public function showPage() {
        $lPage = $this->m_page;
        require $lPage->m_path;
    }
    //===============================================
    public function serialize($_code = "ready") {
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->addData($_code, "category", $this->m_category);
        $lDom->addData($_code, "model", $this->m_model);
        $lDom->addData($_code, "id", $this->m_id);
        $lDom->addData($_code, "lang", $this->m_lang);
        $lDom->addData($_code, "title", $this->m_title);
        $lDom->addData($_code, "logo", $this->m_logo);
        $lDom->addData($_code, "link", $this->m_link);
        $lDom->addData($_code, "active", $this->m_isActive);
        $lDom->addData($_code, "name", $this->m_name);
        $lDom->addData($_code, "data", $this->m_data);
        $lDom->addMap($_code, $this->m_map);
        return $lDom->toString();
    }
    //===============================================
    public function deserialize($_data, $_code = "ready") {
        $lDom = new GCode();
        $lDom->loadXml($_data);
        $this->m_category = $lDom->getItem($_code, "category");
        $this->m_model = $lDom->getItem($_code, "model");
        $this->m_id = $lDom->getItem($_code, "id");
        $this->m_lang = $lDom->getItem($_code, "lang");
        $this->m_title = $lDom->getItem($_code, "title");
        $this->m_logo = $lDom->getItem($_code, "logo");
        $this->m_link = $lDom->getItem($_code, "link");
        $this->m_isActive = $lDom->getItem($_code, "active");
        $this->m_name = $lDom->getItem($_code, "name");
        $this->m_data = $lDom->getItem($_code, "data");
        $lDom->getMap($_code, $this->m_map, $this);
    }
    //===============================================
    public function run() {
        //===============================================
        // [info] : on initialise les données
        //===============================================
        
        $this->initReady();
        
        //===============================================
        // [info] : on initialise la page
        //===============================================

        echo sprintf("<!DOCTYPE html>\n");
        echo sprintf("<html lang='%s'>\n", $this->m_header->m_lang);
        echo sprintf("<head>\n");
        echo sprintf("<title>%s | %s</title>\n", $this->m_menu->m_data, $this->m_header->m_title);
        echo sprintf("<meta charset='%s'/>\n", $this->m_header->m_charset);
        echo sprintf("<link rel='shortcut icon' type='image/png' href='%s'/>\n", $this->m_header->m_logo);
        echo sprintf("<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'/>\n");
        echo sprintf("<meta name='viewport' content='width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0, user-scalable=no'/>\n");
        
        //===============================================
        // [info] : on initialise l'url canonique
        //===============================================
        
        $lObj = $this->findObjMapCM("metadata", "canonical");
        $lObj->loadFromMap(0);
        echo sprintf("<link rel='canonical' href='%s'/>\n", $lObj->m_data);
        
        //===============================================
        // [info] : on initialise les metadata google
        //===============================================
        
        $lObj = $this->findObjMapCM("metadata", "google");
        
        for($i = 0; $i < $lObj->size(); $i++) {
            $lObj->loadFromMap($i);
            echo sprintf("<meta name='%s' content=\"%s\"/>\n", $lObj->m_name, $lObj->m_data);
        }
        
        //===============================================
        // [info] : on initialise les metadata facebook
        //===============================================
        
        $lObj = $this->findObjMapCM("metadata", "facebook");
        
        for($i = 0; $i < $lObj->size(); $i++) {
            $lObj->loadFromMap($i);
            echo sprintf("<meta property='%s' content=\"%s\"/>\n", $lObj->m_name, $lObj->m_data);
        }
        
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
        
        for($i = 0; $i < $lObj->size(); $i++) {
            $lObj->loadFromMap($i);
            if($lObj->m_model == "input") {
                echo sprintf("<input type='hidden' id='%s' value='%s'/>\n", $lObj->m_id, $lObj->m_value);
            }
            else if($lObj->m_model == "div") {
                echo sprintf("<div id='%s' hidden>%s</div>\n", $lObj->m_id, $lObj->m_value);
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
                
        echo sprintf("<div class='Menu1'>\n");
        echo sprintf("<a class='Menu3' href='%s'>\n", $this->m_homePage);
        echo sprintf("<img class='Menu4' src='%s' alt='logo.png'/>\n", $this->m_header->m_logo);
        echo sprintf("<span class='Menu5'>%s</span>\n", $this->m_header->m_title);
        echo sprintf("</a>\n");
        $this->writeMenu();
        echo sprintf("</div>\n");
        
        //===============================================
        // [info] : initialise le nombre de vues
        //===============================================
        
        $this->runView();
        
        //===============================================
        // [info] : initialise le corps de la page
        //===============================================
        
        $this->runPage();
        
        //===============================================
        
        echo sprintf("</div>\n");
        
        $this->runFooter();
        
        echo sprintf("</div>\n");
        
        //===============================================
        // [info] : on initialise les scripts js
        //===============================================
        
        $lObj = $this->findObjMapCM("script", "js");
        
        for($i = 0; $i < $lObj->size(); $i++) {
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
            echo sprintf("<i class='Footer2 fa fa-%s'></i>\n", $lNetwork->m_name);
            echo sprintf("</a>");
        }
        echo sprintf("</div>\n");
        
        echo sprintf("<div>\n");
        echo sprintf("<i class='fa fa-%s'></i>\n", $lCopyrightIcon->m_icon);
        echo sprintf("<span>%s - %s | %s</span>\n", $lCopyright->m_startYear, $lCopyright->m_endYear, $lCopyright->m_title);
        echo sprintf("<div>%s</div>\n", $lCopyright->m_text);
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
        echo sprintf("<div class='Modal9' onclick='call_server(\"%s\", \"%s\", this)'>%s</div>\n", $lButtonOk->m_module, $lButtonOk->m_method, $lButtonOk->m_text);
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
            echo sprintf("<a href=\"%s\" target='_blank'><i class='View5 %s fa fa-%s'></i></a>\n", $lNetwork->m_link, $lNetwork->m_class, $lNetwork->m_icon);
        }

        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function runPage() {
        $this->readPagePath();
        if($this->isAdmin()) {
            $this->m_admin->run();
            $this->addLogs($this->m_admin->getLogs());
        }
        else if($this->isPage()) {
            $this->showPage();
        }
        else {
            $this->addError("Page non trouvée !");
        }
        return !$this->hasErrors();
    }
    //===============================================
}
//===============================================
?>
