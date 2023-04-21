<?php
//===============================================
class GAdmin extends GObject {
    //===============================================
    private $m_title = "";
    private $m_module = "";
    private $m_method = "";
    private $m_key = "";
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
        $this->m_title = $_obj->m_title;
        $this->m_module = $_obj->m_module;
        $this->m_method = $_obj->m_method;
        $this->m_key = $_obj->m_key;
    }
    //===============================================
    public function isEqual($_obj) {
        $lEqualOk = parent::isEqual($_obj);
        $lEqualOk &= ($this->m_title == $_obj->m_title);
        $lEqualOk &= ($this->m_module == $_obj->m_module);
        $lEqualOk &= ($this->m_method == $_obj->m_method);
        $lEqualOk &= ($this->m_key == $_obj->m_key);
        return $lEqualOk;
    }
    //===============================================
    public function addMenu($_module, $_method, $_title = "", $_key = "") {
        $lObj = new GAdmin();
        $lObj->m_category = "menu";
        $lObj->m_model = "item";
        $lObj->m_module = $_module;
        $lObj->m_method = $_method;
        $lObj->m_title = $_title;
        $lObj->m_key = $_key;
        $lObj->m_parentObj = $this->m_parentObj;
        $this->m_map[] = $lObj;
        $this->m_currentObj = $lObj;
    }
    //===============================================
    public function toMenu() {
        echo sprintf("<div class='Block19'>\n");
        echo $this->toMenuItem();
        echo sprintf("</div>\n");
    }
    //===============================================
    public function toMenuItem($_parent = null) {
        $lMenuI = $this->findObjMapCM("menu", "item", $_parent);
        for($i = 0; $i < $lMenuI->size(); $i++) {
            $lMenuI->loadFromMap($i);
            $lMenuJ = $this->findObjMapCM("menu", "item", $lMenuI->m_currentObj);
            
            if(!$lMenuJ->size()) {
                echo sprintf("<div class='Block20' onclick='call_server(\"%s\", \"%s\", this, \"%s\")'>%s</div>\n",
                        $lMenuI->m_module, $lMenuI->m_method, $lMenuI->m_key, $lMenuI->m_title);
            }
            else {
                echo sprintf("<div class='Block21'>\n");
                echo sprintf("<div class='Block20'>%s <i class='Block25 fa fa-caret-down'></i></div>\n", $lMenuI->m_title);
                echo sprintf("<div class='Block22'>\n");
                $this->toMenuItem($lMenuI->m_currentObj);
                echo sprintf("</div>\n");
                echo sprintf("</div>\n");
            }
        }
    }
    //===============================================
    public function run() {
        $this->runEditor();
    }
    //===============================================
    public function runEditor() {                
        echo sprintf("<div class='Block15'>\n");
        echo sprintf("<div class='Block1'>\n");
        echo sprintf("<div class='Block2'>\n");
        //
        $this->toEditorTitle();
        //
        echo sprintf("<div class='Block5'>\n");
        // default_tab
        echo sprintf("<input type='hidden' id='EditorDefaultTab' value='2'/>\n");
        //
        $this->toEditorTab();
        $this->toEditorHome();
        $this->toEditorPage();
        $this->toEditorEdition();
        $this->toEditorCode();
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        
    }
    //===============================================
    public function toEditorTitle() {
        echo sprintf("<h1 class='Block3' id='editeur_page_html'>\n");
        echo sprintf("<a class='Block4' href='#'>Editeur de page HTML</a>\n");
        echo sprintf("</h1>\n");
    }
    //===============================================
    public function toEditorTab() {
        echo sprintf("<div class='Block6' id='EditorTab'>\n");
        // home
        echo sprintf("<div class='Block7'>\n");
        echo sprintf("<button class='Block8 EditorTab' data-content-id='EditorTab0'\n");
        echo sprintf("onclick='call_server(\"editor\", \"open_editor_tab\", this)'><i class='fa fa-home'></i></button>\n");
        echo sprintf("</div>\n");
        // page
        echo sprintf("<div class='Block7'>\n");
        echo sprintf("<button class='Block8 EditorTab' data-content-id='EditorTab1'\n");
        echo sprintf("onclick='call_server(\"editor\", \"open_editor_tab\", this)'>Page</button>\n");
        echo sprintf("</div>\n");
        // edition
        echo sprintf("<div class='Block7'>\n");
        echo sprintf("<button class='Block8 EditorTab' data-content-id='EditorTab2'\n");
        echo sprintf("onclick='call_server(\"editor\", \"open_editor_tab\", this)'>Edition</button>\n");
        echo sprintf("</div>\n");
        // code
        echo sprintf("<div class='Block7'>\n");
        echo sprintf("<button class='Block8 EditorTab' data-content-id='EditorTab3'\n");
        echo sprintf("onclick='call_server(\"editor\", \"open_editor_tab\", this)'>Code</button>\n");
        echo sprintf("</div>\n");
        //
        echo sprintf("</div>\n");
    }
    //===============================================
    public function toEditorHome() {
        echo sprintf("<div class='Block9 EditorTabCtn' id='EditorTab0'>\n");
        // title
        echo sprintf("<h2 class='Block10'>ReadyHTML</h2>\n");
        //
        echo sprintf("<div class='Block11'>\n");
        echo sprintf("<div class='Block12'>\n");
        //
        $this->toEditorHomeForm();
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function toEditorHomeForm() {
        echo sprintf("<b>ReadyEditor</b> est un éditeur de pages HTML.<br/>\n");
        echo sprintf("Il permet d'éditer les pages HTML du siteweb.\n");
        echo sprintf("Cela accélère l'ajout de nouveaux contenus\n");
        echo sprintf("et évite de passer du temps inutilement à écrire du code\n");
        echo sprintf("dans le but d'ajouter de nouveaux contenus.\n");
        echo sprintf("<br/>Produit par <b>Gérard KESSE</b>.\n");
    }
    //===============================================
    public function toEditorPage() {
        echo sprintf("<div class='Block9 EditorTabCtn' id='EditorTab1'>\n");
        echo sprintf("<div class='Block16'>\n");
        // title
        echo sprintf("<h2 class='Block10'>Page</h2>\n");
        //
        echo sprintf("<div class='Block17'>\n");
        // menu
        echo sprintf("<div class='Block18'>Menu</div>\n");
        $this->toEditorPageMenu();
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("<div class='Block13'>\n");
        echo sprintf("<div class='Block12'>\n");
        echo sprintf("<div class='Block14'>\n");
        // form
        $this->toEditorPageForm();
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function toEditorPageMenu() {
        $lMenu = new GAdmin();
        // page
        $lMenu->addMenu("", "", "Page");
        $lMenu->pushParent();
        $lMenu->initParent();
        $lMenu->addMenu("page", "load_page", "Charger");
        $lMenu->addMenu("page", "create_page", "Créer");
        $lMenu->addMenu("page", "new_page", "Nouveau");
        $lMenu->popParent();
        // folder
        $lMenu->addMenu("", "", "Répertoire");
        $lMenu->pushParent();
        $lMenu->initParent();
        $lMenu->addMenu("page", "create_folder", "Créer");
        $lMenu->popParent();
        //
        $lMenu->toMenu();
    }
    //===============================================
    public function toEditorPageForm() {
        echo sprintf("<div class='Form1'>\n");
        // address
        echo sprintf("<div class='Form2' id='EditorPageAddress'>\n");
        echo sprintf("<i class='Form7 fa fa-folder' onclick='call_server(\"page\", \"load_page_path\", this)'></i>\n");
        echo sprintf("<input type='hidden' value=''/>\n");
        echo sprintf("</div>\n");
        // default_address
        echo sprintf("<div id='EditorPageDefaultAddress' hidden='true'></div>\n");
        // default_page
        echo sprintf("<div id='EditorPageDefaultPage' hidden='true'></div>\n");
        // root
        echo sprintf("<div class='Form2'>\n");
        echo sprintf("<label class='Form3'>Racine :</label>\n");
        echo sprintf("<div class='Form4'><input id='EditorPageRoot' class='Form5' type='text' value='/data/cache/page/readydev' disabled/></div>\n",);
        echo sprintf("</div>\n");
        // path
        echo sprintf("<div class='Form2'>\n");
        echo sprintf("<label class='Form3'>Chemin :</label>\n");
        echo sprintf("<div class='Form4'><input id='EditorPagePath' class='Form5' type='text' disabled/></div>\n",);
        echo sprintf("</div>\n");
        // name
        echo sprintf("<div class='Form2'>\n");
        echo sprintf("<label class='Form3'>Nom :</label>\n");
        echo sprintf("<div class='Form4'><input id='EditorPageName' class='Form5' type='text'/></div>\n",);
        echo sprintf("</div>\n");
        //
        echo sprintf("</div>\n");
    }
    //===============================================
    public function toEditorEdition() {
        echo sprintf("<div class='Block9 EditorTabCtn' id='EditorTab2'>\n");
        echo sprintf("<div class='Block16'>\n");
        // title
        echo sprintf("<h2 class='Block10'>Edition</h2>\n");
        //
        echo sprintf("<div class='Block17'>\n");
        // menu
        echo sprintf("<div class='Block18'>Menu</div>\n");
        $this->toEditorEditionMenu();
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("<div class='Block13'>\n");
        echo sprintf("<div class='Block12'>\n");
        echo sprintf("<div class='Block14'>\n");
        // form
        $this->toEditorEditionForm();
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function toEditorEditionMenu() {
        $lMenu = new GAdmin();
        // template
        $lMenu->addMenu("", "", "Templates");
        $lMenu->pushParent();
        $lMenu->initParent();
        // template/parallax
        $lMenu->addMenu("", "", "Parallax");
        $lMenu->pushParent();
        $lMenu->initParent();
        $lMenu->addMenu("editor", "add_parallax", "Ajouter");
        $lMenu->addMenu("editor", "delete_parallax", "Supprimer");
        $lMenu->popParent();
        //
        $lMenu->popParent();
        // page
        $lMenu->addMenu("", "", "Page");
        $lMenu->pushParent();
        $lMenu->initParent();
        $lMenu->addMenu("page", "save_page_edition", "Enregistrer");
        $lMenu->addMenu("page", "load_page_edition", "Charger");
        $lMenu->popParent();
        // code
        $lMenu->addMenu("", "", "Code");
        $lMenu->pushParent();
        $lMenu->initParent();
        $lMenu->addMenu("page", "show_edition_code", "Afficher");
        $lMenu->popParent();
        //
        $lMenu->toMenu();
    }
    //===============================================
    public function toEditorEditionForm() {
        echo sprintf("<div class='Block24 GEndEditor'>\n");
        echo sprintf("<div id='EditorEditionPage' class='Block23 GEndEditor' contentEditable='true'\n");
        echo sprintf("onkeydown='call_server(\"editor\", \"keydown_event_edition\", event)'\n");
        echo sprintf("onpaste='call_server(\"editor\", \"paste_event_edition\", event)'></div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function toEditorCode() {
        echo sprintf("<div class='Block9 EditorTabCtn' id='EditorTab3'>\n");
        echo sprintf("<div class='Block16'>\n");
        // title
        echo sprintf("<h2 class='Block10'>Code</h2>\n");
        //
        echo sprintf("<div class='Block17'>\n");
        // menu
        echo sprintf("<div class='Block18'>Menu</div>\n");
        $this->toEditorCodeMenu();
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("<div class='Block13'>\n");
        echo sprintf("<div class='Block12'>\n");
        echo sprintf("<div class='Block14'>\n");
        // form
        $this->toEditorCodeForm();
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function toEditorCodeMenu() {
        $lMenu = new GAdmin();
        // code
        $lMenu->addMenu("", "", "Edition");
        $lMenu->pushParent();
        $lMenu->initParent();
        $lMenu->addMenu("page", "show_code_edition", "Afficher");
        $lMenu->addMenu("page", "load_code_edition", "Charger");
        $lMenu->popParent();
        //
        $lMenu->toMenu();
    }
    //===============================================
    public function toEditorCodeForm() {
        echo sprintf("<textarea id='EditorCodePage' class='Block23'\n");
        echo sprintf("placeholder='Code source de la page...'></textarea>\n");
    }
    //===============================================
}
//===============================================
?>