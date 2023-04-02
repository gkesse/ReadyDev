<?php
//===============================================
class GAdmin extends GObject {
    //===============================================
    private $m_id = "";
    private $m_tabId = "";
    private $m_contentId = "";
    private $m_defaultId = "";
    private $m_editorId = "";
    private $m_title = "";
    private $m_link = "";
    private $m_module = "";
    private $m_method = "";
    private $m_moduleKeydown = "";
    private $m_methodKeydown = "";
    private $m_modulePaste = "";
    private $m_methodPaste = "";
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
        $this->m_placeholder = $_obj->m_placeholder;
    }
    //===============================================
    public function setId($_id) {
        $this->m_id = $_id;
    }
    //===============================================
    public function setTabId($_tabId) {
        $this->m_tabId = $_tabId;
    }
    //===============================================
    public function setContentId($_contentId) {
        $this->m_contentId = $_contentId;
    }
    //===============================================
    public function setDefaultId($_defaultId) {
        $this->m_defaultId = $_defaultId;
    }
    //===============================================
    public function setEditorId($_editorId) {
        $this->m_editorId = $_editorId;
    }
    //===============================================
    public function setTitle($_title) {
        $this->m_title = $_title;
    }
    //===============================================
    public function setLink($_link) {
        $this->m_link = $_link;
    }
    //===============================================
    public function setMenu($_menu) {
        $this->m_menu = $_menu;
    }
    //===============================================
    public function setPlaceholder($_placeholder) {
        $this->m_placeholder = $_placeholder;
    }
    //===============================================
    public function setModule($_module) {
        $this->m_module = $_module;
    }
    //===============================================
    public function setMethod($_method) {
        $this->m_method = $_method;
    }
    //===============================================
    public function setKeydownCB($_module, $_method) {
        $this->m_moduleKeydown = $_module;
        $this->m_methodKeydown = $_method;
    }
    //===============================================
    public function setPasteCB($_module, $_method) {
        $this->m_modulePaste = $_module;
        $this->m_methodPaste = $_method;
    }
    //===============================================
    public function addHeaderButton($_data) {
        $lObj = new GAdmin();
        $lObj->m_category = "header";
        $lObj->m_model = "button";
        $lObj->m_id = sprintf("%s%s", $this->m_tabId, $this->countHeaderButton());
        $lObj->m_data = $_data;
        $this->m_map[] = $lObj;
    }
    //===============================================
    public function addContentText($_title, $_data = "") {
        $lObj = new GAdmin();
        $lObj->m_category = "content";
        $lObj->m_model = "text";
        $lObj->m_id = sprintf("%s%s", $this->m_tabId, $this->countContent());
        $lObj->m_title = $_title;
        $lObj->m_data = $_data;
        $this->m_map[] = $lObj;
    }
    //===============================================
    public function addContentForm($_title, $_menu = "", $_data = "") {
        $lObj = new GAdmin();
        $lObj->m_category = "content";
        $lObj->m_model = "form";
        $lObj->m_id = sprintf("%s%s", $this->m_tabId, $this->countContent());
        $lObj->m_title = $_title;
        $lObj->m_data = $_data;
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
    public function addMenuProject($_module, $_method, $_data = "", $_key = "") {
        $this->addMenu("menu", "project", $_module, $_method, $_data, $_key);
    }
    //===============================================
    public function addMenuPage($_module, $_method, $_data = "", $_key = "") {
        $this->addMenu("menu", "page", $_module, $_method, $_data, $_key);
    }
    //===============================================
    public function addMenuEdition($_module, $_method, $_data = "", $_key = "") {
        $this->addMenu("menu", "edition", $_module, $_method, $_data, $_key);
    }
    //===============================================
    public function countHeaderButton() {
        $lCount = 0;
        for($i = 0; $i < count($this->m_map); $i++) {
            $lObj = $this->m_map[$i];
            if($lObj->m_category == "header") {
                if($lObj->m_model == "button") {
                    $lCount++;
                }
            }
        }
        return $lCount;
    }
    //===============================================
    public function countContent() {
        $lCount = 0;
        for($i = 0; $i < count($this->m_map); $i++) {
            $lObj = $this->m_map[$i];
            if($lObj->m_category == "content") {
                $lCount++;
            }
        }
        return $lCount;
    }
    //===============================================
    public function toHome() {
        $lData = "
        <b>ReadyEditor</b> est un éditeur de pages HTML.<br>
        Il permet d'éditer les pages HTML du siteweb.
        Cela accélère l'ajout de nouveaux contenus
        et évite de passer du temps inutilement à écrire du code
        dans le but d'ajouter de nouveaux contenus.
        <br>Produit par <b>Gérard KESSE</b>.
        ";
        return $lData;
    }
    //===============================================
    public function writeMenu($_category, $_model, $_parent = null) {
        $lMenu = "";
        $lMenuI = $this->findObjMapCM($_category, $_model, $_parent);
        for($i = 0; $i < count($lMenuI->m_map); $i++) {
            $lObj = $lMenuI->m_map[$i];
            if($lObj->m_category == $_category) {
                if($lObj->m_model == $_model) {
                    $lMenuJ = $this->findObjMapCM($_category, $_model, $lObj);

                    if(empty($lMenuJ->m_map)) {
                        $lMenu .= sprintf("<div class='Block20' onclick='call_server(\"%s\", \"%s\", this, \"%s\")'>%s</div>\n",
                            $lObj->m_module, $lObj->m_method, $lObj->m_key, $lObj->m_data);
                    }
                    else {
                        $lMenu .= sprintf("<div class='Block21'>\n");
                        $lMenu .= sprintf("<div class='Block20'>%s <i class='Block24 fa fa-caret-down'></i></div>\n", $lObj->m_data);
                        $lMenu .= sprintf("<div class='Block22'>\n");
                        $lMenu .= $this->writeMenu($_category, $_model, $lObj);
                        $lMenu .= sprintf("</div>\n");
                        $lMenu .= sprintf("</div>\n");
                    }
                }
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
    public function toMenuProject() {
        return $this->toMenu("menu", "project");
    }
    //===============================================
    public function toMenuEdition() {
        return $this->toMenu("menu", "edition");
    }
    //===============================================
    public function toContentEdition() {
        $lHtml = "";
        $lHtml .= sprintf("<div class='Block24 %s'>\n", $this->m_editorId);
        $lHtml .= sprintf("<div id='%s' class='Block23 %s' contentEditable='true'\n", $this->m_editorId, $this->m_editorId);
        $lHtml .= sprintf("onkeydown='call_server(\"%s\", \"%s\", event)'\n", $this->m_moduleKeydown, $this->m_methodKeydown);
        $lHtml .= sprintf("onpaste='call_server(\"%s\", \"%s\", event)'></div>\n", $this->m_modulePaste, $this->m_methodPaste);
        $lHtml .= sprintf("</div>\n");
        return $lHtml;
    }
    //===============================================
    public function toContentCode() {
        $lObj = $this->findObjMapCM("tab", "code");
        $lObj->loadFromMap(0);
        $this->setPlaceholder("Code source de la page...");
        $lHtml = "";
        $lHtml .= sprintf("<textarea id='%s' class='Block23' placeholder='%s'></textarea>\n", $lObj->m_id, $lObj->m_placeholder);
        return $lHtml;
    }
    //===============================================
    public function initTabCode() {
        $lObj = new GAdmin();
        $lObj->m_category = "tab";
        $lObj->m_model = "code";
        $lObj->m_id = "EditorCodeSource";
        $lObj->m_placeholder = "Code source de la page...";
        $this->m_map[] = $lObj;
    }
    //===============================================
    public function initEditor() {
        $this->setId("editeur_page_html");
        $this->setTabId("EditorTab");
        $this->setContentId("EditorTabCtn");
        $this->setDefaultId("3");
        $this->setEditorId("GEndEditor");
        $this->setModule("admin");
        $this->setMethod("open_editor_tab");
        $this->setTitle("Editeur de page HTML");
        $this->setLink("#");
        $this->setMenu("Menu");
        $this->setKeydownCB("admin", "keydown_event_editor");
        $this->setPasteCB("admin", "paste_event_editor");
        
        $this->addHeaderButton("<i class='fa fa-home'></i>");
        $this->addHeaderButton("Projet");
        $this->addHeaderButton("Page");
        $this->addHeaderButton("Edition");
        $this->addHeaderButton("Code");
        
        //===============================================
        // [info] : on initialise le menu projet
        //===============================================
        
        $this->addMenuProject("admin", "save_project", "Enregistrer");
        $this->addMenuProject("admin", "search_project", "Rechercher");
        $this->addMenuProject("admin", "delete_project", "Supprimer");
        $this->addMenuProject("admin", "new_project", "Nouveau");
        
        //===============================================
        // [info] : on initialise le menu edition
        //===============================================
        
        $this->addMenuEdition("", "", "Styles personnalisées");
        $this->pushParent();
        $this->initParent();
        $this->addMenuEdition("", "", "Parallax");
        $this->pushParent();
        $this->initParent();
        $this->addMenuEdition("admin", "add_parallax", "Ajouter effet parallax");
        $this->addMenuEdition("admin", "update_parallax", "Modifier effet parallax");
        $this->addMenuEdition("admin", "delete_parallax", "Modifier effet parallax");
        $this->popParent();
        $this->popParent();
        
        $this->addMenuEdition("", "", "Formulaires");
        $this->pushParent();
        $this->initParent();
        $this->addMenuEdition("admin", "create_log_form", "Log");
        $this->popParent();
        
        $this->addMenuEdition("", "", "Actions");
        
        $this->pushParent();
        $this->initParent();
        
        $this->addMenuEdition("admin", "save_edition", "Enregistrer");
        $this->addMenuEdition("admin", "search_edition", "Rechercher");
        $this->addMenuEdition("admin", "delete_edition", "Supprimer");
        $this->addMenuEdition("admin", "new_edition", "Nouveau");
        $this->addMenuEdition("admin", "go_to_code", "Voir le code");
        $this->addMenuEdition("admin", "store_edition", "Sauvegarder");
        $this->addMenuEdition("admin", "load_edition", "Charger");
        
        $this->popParent();
        
        
        //===============================================
        // [info] : on initialise l'onglet code
        //===============================================
        
        $this->initTabCode();
        
        //===============================================
        // [info] : on écrit les contenus des onglets
        //===============================================
        
        $this->addContentText("ReadyHTML", $this->toHome());
        $this->addContentForm("Projet", $this->toMenuProject());
        $this->addContentForm("Page");
        $this->addContentForm("Edition", $this->toMenuEdition(), $this->toContentEdition());
        $this->addContentForm("Code", "", $this->toContentCode());
    }
    //===============================================
    public function run() {
        $this->initEditor();
        
        echo sprintf("<div class='Block15'>\n");
        echo sprintf("<div class='Block1'>\n");
        echo sprintf("<div class='Block2'>\n");
        echo sprintf("<h1 class='Block3' id='%s'>\n", $this->m_id);
        echo sprintf("<a class='Block4' href='%s'>%s</a>\n", $this->m_link, $this->m_title);
        echo sprintf("</h1>\n");
        echo sprintf("<div class='Block5'>\n");
        
        //===============================================
        // [info] : on initailise les onglets
        //===============================================
        
        echo sprintf("<div class='Block6' id='%s' data-default-id='%s'>\n", $this->m_tabId, $this->m_defaultId);       
        for($i = 0; $i < count($this->m_map); $i++) {
            $lObj = $this->m_map[$i];
            if($lObj->m_category == "header") {
                if($lObj->m_model == "button") {
                    echo sprintf("<div class='Block7'>\n");
                    echo sprintf("<button class='Block8 %s'\n", $this->m_tabId);
                    echo sprintf("onclick='call_server(\"%s\", \"%s\", this, \"%s\")'>%s</button>\n", $this->m_module, $this->m_method, $lObj->m_id, $lObj->m_data);
                    echo sprintf("</div>\n");
                }
            }
        }
        echo sprintf("</div>\n");
        
        //===============================================
        // [info] : on initailise les contenus
        //===============================================
        
        for($i = 0; $i < count($this->m_map); $i++) {
            $lObj = $this->m_map[$i];
            if($lObj->m_category == "content") {
                if($lObj->m_model == "text") {
                    echo sprintf("<div class='Block9 %s' id='%s'>\n", $this->m_contentId, $lObj->m_id);
                    echo sprintf("<h2 class='Block10'>%s</h2>\n", $lObj->m_title);
                    echo sprintf("<div class='Block11'>\n");
                    echo sprintf("<div class='Block12'>%s</div>\n", $lObj->m_data);
                    echo sprintf("</div>\n");
                    echo sprintf("</div>\n");
                }
                else if($lObj->m_model == "form") {
                    echo sprintf("<div class='Block9 %s' id='%s'>\n", $this->m_contentId, $lObj->m_id);
                    echo sprintf("<div class='Block16'>\n");
                    echo sprintf("<h2 class='Block10'>%s</h2>\n", $lObj->m_title);
                    echo sprintf("<div class='Block17'>\n");
                    echo sprintf("<div class='Block18'>%s</div>\n%s\n", $this->m_menu, $lObj->m_menu);
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