<?php
//===============================================
class GAdmin extends GObject {
    //===============================================
    private $m_id = "";
    private $m_tabId = "";
    private $m_contentId = "";
    private $m_defaultId = "";
    private $m_editorId = "";
    private $m_name = "";
    private $m_title = "";
    private $m_link = "";
    private $m_module = "";
    private $m_method = "";
    private $m_label = "";
    private $m_data = "";
    private $m_key = "";
    private $m_menu = "";
    private $m_placeholder = "";
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function clone() {
        return new GAdmin();
    }
    //===============================================
    public function setObj($_obj) {
        parent::setObj($_obj);
        $this->m_id = $_obj->m_id;
        $this->m_tabId = $_obj->m_tabId;
        $this->m_contentId = $_obj->m_contentId;
        $this->m_defaultId = $_obj->m_defaultId;
        $this->m_editorId = $_obj->m_editorId;
        $this->m_name = $_obj->m_name;
        $this->m_title = $_obj->m_title;
        $this->m_link = $_obj->m_link;
        $this->m_module = $_obj->m_module;
        $this->m_method = $_obj->m_method;
        $this->m_key = $_obj->m_key;
        $this->m_label = $_obj->m_label;
        $this->m_data = $_obj->m_data;
        $this->m_menu = $_obj->m_menu;
        $this->m_placeholder = $_obj->m_placeholder;
    }
    //===============================================
    public function addButtonTab($_category, $_model, $_tabId, $_module, $_method, $_data) {
        $lObj = new GAdmin();
        $lObj->m_category = $_category;
        $lObj->m_model = $_model;
        $lObj->m_id = sprintf("%s%s", $_tabId, $this->countCM($_category, $_model));
        $lObj->m_tabId = $_tabId;
        $lObj->m_data = $_data;
        $lObj->m_module = $_module;
        $lObj->m_method = $_method;
        $this->m_map[] = $lObj;
    }
    //===============================================
    public function addContentText($_category, $_contentId, $_tabId, $_title, $_data = "") {
        $lObj = new GAdmin();
        $lObj->m_category = $_category;
        $lObj->m_model = "text";
        $lObj->m_id = sprintf("%s%s", $_tabId, $this->countC($_category));
        $lObj->m_contentId = $_contentId;
        $lObj->m_title = $_title;
        $lObj->m_data = $_data;
        $this->m_map[] = $lObj;
    }
    //===============================================
    public function addContentForm($_category, $_contentId, $_tabId, $_title, $_data = "", $_label = "", $_menu = "") {
        $lObj = new GAdmin();
        $lObj->m_category = $_category;
        $lObj->m_model = "form";
        $lObj->m_id = sprintf("%s%s", $_tabId, $this->countC($_category));
        $lObj->m_contentId = $_contentId;
        $lObj->m_title = $_title;
        $lObj->m_data = $_data;
        $lObj->m_label = $_label;
        $lObj->m_menu = $_menu;
        $this->m_map[] = $lObj;
    }
    //===============================================
    public function addMenu($_category, $_model, $_module, $_method, $_data = "", $_key = "") {
        $lObj = new GAdmin();
        $lObj->m_category = $_category;
        $lObj->m_model = $_model;
        $lObj->m_module = $_module;
        $lObj->m_method = $_method;
        $lObj->m_data = $_data;
        $lObj->m_key = $_key;
        $lObj->m_parentObj = $this->m_parentObj;
        $this->m_map[] = $lObj;
        $this->m_currentObj = $lObj;
    }
    //===============================================
    public function addLabelEdit($_category, $_id, $_label, $_data = "") {
        $lObj = new GAdmin();
        $lObj->m_category = $_category;
        $lObj->m_model = "label_edit";
        $lObj->m_id = $_id;
        $lObj->m_label = $_label;
        $lObj->m_data = $_data;
        $this->m_map[] = $lObj;
    }
    //===============================================
    public function addLabelPassord($_category, $_id, $_label, $_data = "") {
        $lObj = new GAdmin();
        $lObj->m_category = $_category;
        $lObj->m_model = "label_password";
        $lObj->m_id = $_id;
        $lObj->m_label = $_label;
        $lObj->m_data = $_data;
        $this->m_map[] = $lObj;
    }
    //===============================================
    public function toEditorHome() {
        $lData = "";
        $lData .= sprintf("<b>ReadyEditor</b> est un éditeur de pages HTML.<br>\n");
        $lData .= sprintf("Il permet d'éditer les pages HTML du siteweb.\n");
        $lData .= sprintf("Cela accélère l'ajout de nouveaux contenus\n");
        $lData .= sprintf("et évite de passer du temps inutilement à écrire du code\n");
        $lData .= sprintf("dans le but d'ajouter de nouveaux contenus.\n");
        $lData .= sprintf("<br>Produit par <b>Gérard KESSE</b>.\n");
        return $lData;
    }
    //===============================================
    public function writeMenu($_category, $_model, $_parent = null) {
        $lMenu = "";
        $lMenuI = $this->findObjMapCM($_category, $_model, $_parent);
        for($i = 0; $i < $lMenuI->size(); $i++) {
            $lMenuI->loadFromMap($i);
            $lMenuJ = $this->findObjMapCM($_category, $_model, $lMenuI->m_currentObj);
            
            if(!$lMenuJ->size()) {
                $lMenu .= sprintf("<div class='Block20' onclick='call_server(\"%s\", \"%s\", this, \"%s\")'>%s</div>\n",
                        $lMenuI->m_module, $lMenuI->m_method, $lMenuI->m_key, $lMenuI->m_data);
            }
            else {
                $lMenu .= sprintf("<div class='Block21'>\n");
                $lMenu .= sprintf("<div class='Block20'>%s <i class='Block25 fa fa-caret-down'></i></div>\n", $lMenuI->m_data);
                $lMenu .= sprintf("<div class='Block22'>\n");
                $lMenu .= $this->writeMenu($_category, $_model, $lMenuI->m_currentObj);
                $lMenu .= sprintf("</div>\n");
                $lMenu .= sprintf("</div>\n");
            }
        }
        return $lMenu;
    }
    //===============================================
    public function toMenu($_category, $_model) {
        $lMenu = "";
        $lMenu .= sprintf("<div class='Block19'>\n");
        $lMenu .= $this->writeMenu($_category, $_model);
        $lMenu .= sprintf("</div>\n");
        return $lMenu;
    }
    //===============================================
    public function toEditorProject() {
        $lHtml = "";
        $lHtml .= sprintf("<div class='Form1'>\n");
        
        $lObj = $this->findObjMapC("editor_tab_project");
        
        for($i = 0; $i < $lObj->size(); $i++) {
            $lObj->loadFromMap($i);
            
            if($lObj->m_model == "label_edit") {
                $lHtml .= sprintf("<div class='Form2'>\n");
                $lHtml .= sprintf("<label class='Form3'>%s</label>\n", $lObj->m_label);
                $lHtml .= sprintf("<div class='Form4'><input id='%s' class='Form5' type='text' value='%s'/></div>\n", $lObj->m_id, $lObj->m_data);
                $lHtml .= sprintf("</div>\n");
            }
            else if($lObj->m_model == "label_password") {
                $lHtml .= sprintf("<div class='Form2'>\n");
                $lHtml .= sprintf("<label class='Form3'>%s</label>\n", $lObj->m_label);
                $lHtml .= sprintf("<div class='Form4'><input id='%s' class='Form5' type='password' value='%s'/></div>\n", $lObj->m_id, $lObj->m_data);
                $lHtml .= sprintf("</div>\n");
            }
            else if($lObj->m_model == "input_hidden") {
                $lHtml .= sprintf("<input id='%s' type='hidden' value='%s'/>\n", $lObj->m_id, $lObj->m_data);
            }
            else if($lObj->m_model == "div_hidden") {
                $lHtml .= sprintf("<div id='%s'>%s</div>\n", $lObj->m_id, $lObj->m_data);
            }
        }
        
        $lHtml .= sprintf("</div>\n");
        return $lHtml;
    }
    //===============================================
    public function toEditorPage() {
        $lHtml = "";
        $lHtml .= sprintf("<div class='Form1'>\n");
        $lHtml .= sprintf("</div>\n");
        return $lHtml;
    }
    //===============================================
    public function toEditorEdition() {
        $lHtml = "";
        $lHtml .= sprintf("<div class='Block24 %s'>\n", $this->m_editorId);
        $lHtml .= sprintf("<div id='%s' class='Block23 %s' contentEditable='true'\n", $this->m_editorId, $this->m_editorId);
        $lHtml .= sprintf("onkeydown='call_server(\"%s\", \"%s\", event)'\n", $this->m_module, $this->m_method);
        $lHtml .= sprintf("onpaste='call_server(\"%s\", \"%s\", event)'></div>\n", $this->m_module, $this->m_method);
        $lHtml .= sprintf("</div>\n");
        return $lHtml;
    }
    //===============================================
    public function toEditorCode() {
        $lObj = $this->findObjMapC("editor_tab_code");
        $lObj->loadFromMap(0);
        $lHtml = "";
        $lHtml .= sprintf("<textarea id='%s' class='Block23' placeholder='%s'></textarea>\n", $lObj->m_id, $lObj->m_placeholder);
        return $lHtml;
    }
    //===============================================
    public function initEditor() {
        $lObj = new GAdmin();
        $lObj->m_category = "editor";
        $lObj->m_model = "config";
        $lObj->m_id = "editeur_page_html";
        $lObj->m_tabId = "EditorTab";
        $lObj->m_defaultId = "1";
        $lObj->m_title = "Editeur de page HTML";
        $lObj->m_link = "#";
        $this->m_map[] = $lObj;
        
        $lObj = new GAdmin();
        $lObj->m_category = "editor";
        $lObj->m_model = "key_down_edition";
        $lObj->m_module = "page";
        $lObj->m_method = "key_down_edition";
        $this->m_map[] = $lObj;
        
        $lObj = new GAdmin();
        $lObj->m_category = "editor";
        $lObj->m_model = "paste_text_edition";
        $lObj->m_module = "keyevent";
        $lObj->m_method = "paste_text_edition";
        $this->m_map[] = $lObj;
        
        $this->addButtonTab("editor", "tab", "EditorTab", "editor", "open_editor_tab", "<i class='fa fa-home'></i>");
        $this->addButtonTab("editor", "tab", "EditorTab", "editor", "open_editor_tab", "Projet");
        $this->addButtonTab("editor", "tab", "EditorTab", "editor", "open_editor_tab", "Page");
        $this->addButtonTab("editor", "tab", "EditorTab", "editor", "open_editor_tab", "Edition");
        $this->addButtonTab("editor", "tab", "EditorTab", "editor", "open_editor_tab", "Code");
        
        //===============================================
        // [info] : on initialise le menu projet
        //===============================================
        
        $this->addMenu("editor_menu", "project", "admin", "save_project", "Enregistrer");
        $this->addMenu("editor_menu", "project", "admin", "search_project", "Rechercher");
        $this->addMenu("editor_menu", "project", "admin", "delete_project", "Supprimer");
        $this->addMenu("editor_menu", "project", "admin", "new_project", "Nouveau");
        
        //===============================================
        // [info] : on initialise le menu edition
        //===============================================
        
        $this->addMenu("editor_menu", "edition", "", "", "Styles personnalisées");
        $this->pushParent();
        $this->initParent();
        $this->addMenu("editor_menu", "edition", "", "", "Parallax");
        $this->pushParent();
        $this->initParent();
        $this->addMenu("editor_menu", "edition", "admin", "add_parallax", "Ajouter effet parallax");
        $this->addMenu("editor_menu", "edition", "admin", "update_parallax", "Modifier effet parallax");
        $this->addMenu("editor_menu", "edition", "admin", "delete_parallax", "Modifier effet parallax");
        $this->popParent();
        $this->popParent();
        
        $this->addMenu("editor_menu", "edition", "", "", "Templates");
        $this->pushParent();
        $this->initParent();
        $this->addMenu("editor_menu", "edition", "editor", "create_log_form", "Log");
        $this->popParent();
        
        $this->addMenu("editor_menu", "edition", "", "", "Actions");
        
        $this->pushParent();
        $this->initParent();
        
        $this->addMenu("editor_menu", "edition", "editor", "save_edition", "Enregistrer");
        $this->addMenu("editor_menu", "edition", "editor", "search_edition", "Rechercher");
        $this->addMenu("editor_menu", "edition", "editor", "delete_edition", "Supprimer");
        $this->addMenu("editor_menu", "edition", "editor", "new_edition", "Nouveau");
        $this->addMenu("editor_menu", "edition", "editor", "go_to_code", "Voir le code");
        $this->addMenu("editor_menu", "edition", "editor", "store_edition", "Sauvegarder");
        $this->addMenu("editor_menu", "edition", "editor", "load_edition", "Charger");
        
        $this->popParent();
        
        //===============================================
        // [info] : on initialise le contenu des onglets
        //===============================================

        $lObj = new GAdmin();
        $lObj->m_category = "editor_tab_code";
        $lObj->m_model = "textarea";
        $lObj->m_id = "EditorCodeSource";
        $lObj->m_placeholder = "Code source de la page...";
        $this->m_map[] = $lObj;
        
        $this->addLabelEdit("editor_tab_project", "EditorProjectName", "Nom : ");
        $this->addLabelEdit("editor_tab_project", "EditorProjectLabel", "Libellé : ", "MON PROJECT");
        $this->addLabelPassord("editor_tab_project", "EditorProjectType", "Type : ", "MES TYPES");
        
        //===============================================
        // [info] : on écrit les contenus des onglets
        //===============================================
        
        $this->addContentText("editor_content", "EditorTabCtn", "EditorTab", "ReadyHTML", $this->toEditorHome());
        $this->addContentForm("editor_content", "EditorTabCtn", "EditorTab", "Projet", $this->toEditorProject(), "Menu", $this->toMenu("editor_menu", "project"));
        $this->addContentForm("editor_content", "EditorTabCtn", "EditorTab", "Page", $this->toEditorPage(), "Menu");
        $this->addContentForm("editor_content", "EditorTabCtn", "EditorTab", "Edition", $this->toEditorEdition(), "Menu", $this->toMenu("editor_menu", "edition"));
        $this->addContentForm("editor_content", "EditorTabCtn", "EditorTab", "Code", $this->toEditorCode(), "Menu");
    }
    //===============================================
    public function run() {
        $this->runEditor();
    }
    //===============================================
    public function runEditor() {        
        $this->initEditor();
        
        $lObj = $this->findObjMapCM("editor", "config");
        $lObj->loadFromMap(0);
        
        echo sprintf("<div class='Block15'>\n");
        echo sprintf("<div class='Block1'>\n");
        echo sprintf("<div class='Block2'>\n");
        echo sprintf("<h1 class='Block3' id='%s'>\n", $lObj->m_id);
        echo sprintf("<a class='Block4' href='%s'>%s</a>\n", $lObj->m_link, $lObj->m_title);
        echo sprintf("</h1>\n");
        echo sprintf("<div class='Block5'>\n");
        
        //===============================================
        // [info] : on initailise les onglets
        //===============================================
        
        echo sprintf("<div class='Block6' id='%s' data-default-id='%s'>\n", $lObj->m_tabId, $lObj->m_defaultId);
        
        $lObj = $this->findObjMapCM("editor", "tab");
        
        for($i = 0; $i < $lObj->size(); $i++) {
            $lObj->loadFromMap($i);
            echo sprintf("<div class='Block7'>\n");
            echo sprintf("<button class='Block8 %s'\n", $lObj->m_tabId);
            echo sprintf("onclick='call_server(\"%s\", \"%s\", this, \"%s\")'>%s</button>\n", $lObj->m_module, $lObj->m_method, $lObj->m_id, $lObj->m_data);
            echo sprintf("</div>\n");
        }
        
        echo sprintf("</div>\n");
        
        //===============================================
        // [info] : on initailise les contenus
        //===============================================
        
        $lObj = $this->findObjMapC("editor_content");
        
        for($i = 0; $i < $lObj->size(); $i++) {
            $lObj->loadFromMap($i);
            if($lObj->m_model == "text") {
                echo sprintf("<div class='Block9 %s' id='%s'>\n", $lObj->m_contentId, $lObj->m_id);
                echo sprintf("<h2 class='Block10'>%s</h2>\n", $lObj->m_title);
                echo sprintf("<div class='Block11'>\n");
                echo sprintf("<div class='Block12'>%s</div>\n", $lObj->m_data);
                echo sprintf("</div>\n");
                echo sprintf("</div>\n");
            }
            else if($lObj->m_model == "form") {
                echo sprintf("<div class='Block9 %s' id='%s'>\n", $lObj->m_contentId, $lObj->m_id);
                echo sprintf("<div class='Block16'>\n");
                echo sprintf("<h2 class='Block10'>%s</h2>\n", $lObj->m_title);
                echo sprintf("<div class='Block17'>\n");
                echo sprintf("<div class='Block18'>%s</div>\n%s\n", $lObj->m_label, $lObj->m_menu);
                echo sprintf("</div>\n");
                echo sprintf("</div>\n");
                echo sprintf("<div class='Block13'>\n");
                echo sprintf("<div class='Block12'>\n");
                echo sprintf("<div class='Block14'>%s</div>\n", $lObj->m_data);
                echo sprintf("</div>\n");
                echo sprintf("</div>\n");
                echo sprintf("</div>\n");
            }
        }
        
        //===============================================
        
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        
    }
    //===============================================
}
//===============================================
?>