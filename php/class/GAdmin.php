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
    public function addMenu($_module, $_method, $_title, $_obj) {
        $lObj = new GAdmin();
        $lObj->m_index = $this->size() + 1;
        $lObj->m_parentIndex = $_obj->m_index;
        $lObj->m_module = $_module;
        $lObj->m_method = $_method;
        $lObj->m_title = $_title;
        $this->m_map[] = $lObj;
        return $lObj;
    }
    //===============================================
    public function toMenum() {
        echo sprintf("<div class='Block19'>\n");
        echo $this->toMenuItemm($this->m_index);
        echo sprintf("</div>\n");
    }
    //===============================================
    public function toMenuItemm($_parentIndex) {
        $lMenuI = $this->findMapm($_parentIndex);
        for($i = 1; $i <= $lMenuI->size(); $i++) {
            $lMenuI->loadFromMapm($i);
            $lMenuJ = $this->findMap($lMenuI->m_index);
            
            if(!$lMenuJ->size()) {
                echo sprintf("<div class='Block20' onclick='call_server(\"%s\", \"%s\", this, \"%s\")'>%s</div>\n",
                        $lMenuI->m_module, $lMenuI->m_method, $lMenuI->m_key, $lMenuI->m_title);
            }
            else {
                echo sprintf("<div class='Block21'>\n");
                echo sprintf("<div class='Block20'>%s <i class='Block25 fa fa-caret-down'></i></div>\n", $lMenuI->m_title);
                echo sprintf("<div class='Block22'>\n");
                $this->toMenuItem($lMenuI->m_index);
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
        //===============================================
        // actions
        //===============================================
        $lObj = $lMenu->addMenu("", "", "Actions", $this);
        // actions/page
        $lObj2 = $lMenu->addMenu("", "", "Page", $lObj);
        $lMenu->addMenu("page", "load_page", "Charger", $lObj2);
        $lMenu->addMenu("page", "create_page", "Créer", $lObj2);
        $lMenu->addMenu("page", "new_page", "Nouveau", $lObj2);
        // actions/repertoire
        $lObj2 = $lMenu->addMenu("", "", "Répertoire", $lObj);
        $lMenu->addMenu("page", "create_folder", "Créer", $lObj2);
        //===============================================
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
        //===============================================
        // texte
        //===============================================
        // texte/couleur/premier_plan
        $lObj = $lMenu->addMenu("", "", "Texte", $this);
        $lObj2 = $lMenu->addMenu("", "", "Couleur", $lObj);
        $lObj3 = $lMenu->addMenu("", "", "Premier plan", $lObj2);
        $lMenu->addMenu("editor", "add_text_color_1", "Ajouter", $lObj3);
        $lMenu->addMenu("editor", "update_text_color_1", "Modifier", $lObj3);
        $lMenu->addMenu("editor", "delete_text_color_1", "Supprimer", $lObj3);
        // texte/icone/horizontale/bas
        $lObj2 = $lMenu->addMenu("", "", "Icône", $lObj);
        $lObj3 = $lMenu->addMenu("", "", "Horizontale", $lObj2);
        $lObj4 = $lMenu->addMenu("", "", "Bas", $lObj3);
        $lMenu->addMenu("editor", "add_text_3", "Ajouter", $lObj4);
        $lObj5 = $lMenu->addMenu("", "", "Insérer", $lObj4);
        $lMenu->addMenu("editor", "insert_text_3_left", "Gauche", $lObj5);
        $lMenu->addMenu("editor", "insert_text_3_right", "Droite", $lObj5);
        $lMenu->addMenu("editor", "update_text_3", "Modifier", $lObj4);
        $lObj5 = $lMenu->addMenu("", "", "Supprimer", $lObj4);
        $lMenu->addMenu("editor", "delete_text_3_simple", "Simple", $lObj5);
        $lMenu->addMenu("editor", "delete_text_3_group", "Groupe", $lObj5);
        // texte/image/gauche
        $lObj2 = $lMenu->addMenu("", "", "Image", $lObj);
        $lObj3 = $lMenu->addMenu("", "", "Gauche", $lObj2);
        $lMenu->addMenu("editor", "add_text_image_left", "Ajouter", $lObj3);
        $lMenu->addMenu("editor", "update_text_image_left", "Modifier", $lObj3);
        $lMenu->addMenu("editor", "delete_text_image_left", "Supprimer", $lObj3);
        // texte/style
        $lObj2 = $lMenu->addMenu("", "", "Style", $lObj);
        $lMenu->addMenu("editor", "add_text_bold", "Gras", $lObj2);
        $lMenu->addMenu("editor", "add_text_italic", "Italic", $lObj2);
        $lMenu->addMenu("editor", "add_text_underline", "Souligné", $lObj2);
        //===============================================
        // image
        //===============================================
        $lObj = $lMenu->addMenu("", "", "Image", $this);
        $lMenu->addMenu("editor", "delete_image_1", "Supprimer", $lObj);
        //===============================================
        // fichier
        //===============================================
        // fichier/pdf
        $lObj = $lMenu->addMenu("", "", "Fichier", $this);
        $lObj2 = $lMenu->addMenu("", "", "Pdf", $lObj);
        $lMenu->addMenu("editor", "add_pdf_1", "Ajouter", $lObj2);
        $lMenu->addMenu("editor", "update_pdf_1", "Modifier", $lObj2);
        $lMenu->addMenu("editor", "delete_pdf_1", "Supprimer", $lObj2);
        //===============================================
        // tutoriels
        //===============================================
        $lObj = $lMenu->addMenu("", "", "Tutoriels", $this);
        $lMenu->addMenu("editor", "add_tuto_1", "Ajouter", $lObj);
        $lObj2 = $lMenu->addMenu("", "", "Insérer", $lObj);
        $lMenu->addMenu("editor", "insert_tuto_1_left", "Gauche", $lObj2);
        $lMenu->addMenu("editor", "insert_tuto_1_right", "Droite", $lObj2);
        $lMenu->addMenu("editor", "update_tuto_1", "Modifier", $lObj);
        $lObj2 = $lMenu->addMenu("", "", "Supprimer", $lObj);
        $lMenu->addMenu("editor", "delete_tuto_1_simple", "Simple", $lObj2);
        $lMenu->addMenu("editor", "delete_tuto_1_group", "Groupe", $lObj2);
        //===============================================
        // template
        //===============================================
        // template/barre/acces_rapide
        $lObj = $lMenu->addMenu("", "", "Templates", $this);
        $lObj2 = $lMenu->addMenu("", "", "Barre", $lObj);
        $lObj3 = $lMenu->addMenu("", "", "Accès rapide", $lObj2);
        $lMenu->addMenu("editor", "add_access_1", "Ajouter", $lObj3);
        $lObj4 = $lMenu->addMenu("", "", "Insérer", $lObj3);
        $lMenu->addMenu("editor", "insert_access_1_left", "Gauche", $lObj4);
        $lMenu->addMenu("editor", "insert_access_1_right", "Droite", $lObj4);
        $lObj4 = $lMenu->addMenu("", "", "Dupliquer", $lObj3);
        $lMenu->addMenu("editor", "copy_access_1", "Copier", $lObj4);
        $lMenu->addMenu("editor", "paste_access_1", "Coller", $lObj4);
        $lMenu->addMenu("editor", "update_access_1", "Modifier", $lObj3);
        $lObj4 = $lMenu->addMenu("", "", "Supprimer", $lObj3);
        $lMenu->addMenu("editor", "delete_access_1_simple", "Simple", $lObj4);
        $lMenu->addMenu("editor", "delete_access_1_group", "Groupe", $lObj4);
        // template/competence
        $lObj2 = $lMenu->addMenu("", "", "Compétence", $lObj);
        $lMenu->addMenu("editor", "add_skill", "Ajouter", $lObj2);
        $lObj3 = $lMenu->addMenu("", "", "Dupliquer", $lObj2);
        $lMenu->addMenu("editor", "copy_skill", "Copier", $lObj3);
        $lMenu->addMenu("editor", "paste_skill", "Coller", $lObj3);
        $lMenu->addMenu("editor", "update_skill", "Modifier", $lObj2);
        $lMenu->addMenu("editor", "delete_skill", "Supprimer", $lObj2);
        // template/graduation
        $lObj2 = $lMenu->addMenu("", "", "Formations", $lObj);
        $lMenu->addMenu("editor", "add_graduation", "Ajouter", $lObj2);
        $lObj3 = $lMenu->addMenu("", "", "Dupliquer", $lObj2);
        $lMenu->addMenu("editor", "copy_graduation", "Copier", $lObj3);
        $lMenu->addMenu("editor", "paste_graduation", "Coller", $lObj3);
        $lMenu->addMenu("editor", "update_graduation", "Modifier", $lObj2);
        $lMenu->addMenu("editor", "delete_graduation", "Supprimer", $lObj2);
        // template/lien
        $lObj2 = $lMenu->addMenu("", "", "Liens", $lObj);
        $lMenu->addMenu("editor", "add_link", "Ajouter", $lObj2);
        $lMenu->addMenu("editor", "update_link", "Modifier", $lObj2);
        $lMenu->addMenu("editor", "delete_link", "Supprimer", $lObj2);
        // template/ligne
        $lObj2 = $lMenu->addMenu("", "", "Lignes", $lObj);
        $lMenu->addMenu("editor", "add_line", "Ajouter", $lObj2);
        $lMenu->addMenu("editor", "update_line", "Modifier", $lObj2);
        $lMenu->addMenu("editor", "delete_line", "Supprimer", $lObj2);
        // template/parallax
        $lObj2 = $lMenu->addMenu("", "", "Parallax", $lObj);
        $lMenu->addMenu("editor", "add_parallax", "Ajouter", $lObj2);
        $lMenu->addMenu("editor", "update_parallax", "Modifier", $lObj2);
        $lMenu->addMenu("editor", "delete_parallax", "Supprimer", $lObj2);
        // template/puce
        $lObj2 = $lMenu->addMenu("", "", "Puce", $lObj);
        $lObj3 = $lMenu->addMenu("", "", "Ajouter", $lObj2);
        $lMenu->addMenu("editor", "add_bullet", "Simple", $lObj3);
        $lMenu->addMenu("editor", "add_bullet_group", "Groupe", $lObj3);
        $lObj3 = $lMenu->addMenu("", "", "Insérer", $lObj2);
        $lMenu->addMenu("editor", "insert_bullet_before", "Avant", $lObj3);
        $lMenu->addMenu("editor", "insert_bullet_after", "Après", $lObj3);
        $lMenu->addMenu("editor", "update_bullet", "Modifier", $lObj2);
        $lObj3 = $lMenu->addMenu("", "", "Supprimer", $lObj2);
        $lMenu->addMenu("editor", "cancel_bullet", "Annuler", $lObj3);
        $lMenu->addMenu("editor", "delete_bullet", "Supprimer", $lObj3);
        // template/section
        $lObj2 = $lMenu->addMenu("", "", "Section", $lObj);
        $lMenu->addMenu("editor", "add_section", "Ajouter", $lObj2);
        $lObj3 = $lMenu->addMenu("", "", "Dupliquer", $lObj2);
        $lMenu->addMenu("editor", "copy_section", "Copier", $lObj3);
        $lMenu->addMenu("editor", "paste_section", "Coller", $lObj3);
        $lMenu->addMenu("editor", "update_section", "Modifier", $lObj2);
        $lMenu->addMenu("editor", "delete_section", "Supprimer", $lObj2);
        // template/sommaire
        $lObj2 = $lMenu->addMenu("", "", "Sommaire", $lObj);
        $lObj3 = $lMenu->addMenu("", "", "Principal", $lObj2);
        $lMenu->addMenu("editor", "add_summary_1", "Ajouter", $lObj3);
        $lMenu->addMenu("editor", "update_summary_1", "Modifier", $lObj3);
        $lMenu->addMenu("editor", "delete_summary_1", "Supprimer", $lObj3);
        $lObj3 = $lMenu->addMenu("", "", "Secondaire", $lObj2);
        $lMenu->addMenu("editor", "add_summary_2", "Ajouter", $lObj3);
        $lMenu->addMenu("editor", "update_summary_2", "Modifier", $lObj3);
        $lMenu->addMenu("editor", "delete_summary_2", "Supprimer", $lObj3);
        //===============================================
        // actions
        //===============================================
        $lObj = $lMenu->addMenu("", "", "Actions", $this);
        // actions/font_awesome
        $lObj2 = $lMenu->addMenu("", "", "Font Awesome", $lObj);
        $lMenu->addMenu("font_awesome", "extract_font_awesome", "Extraire", $lObj2);
        // actions/page
        $lObj2 = $lMenu->addMenu("", "", "Page", $lObj);
        $lMenu->addMenu("page", "save_page_edition", "Enregistrer", $lObj2);
        $lMenu->addMenu("page", "load_page_edition", "Charger", $lObj2);
        // actions/code
        $lObj2 = $lMenu->addMenu("", "", "Code", $lObj);
        $lMenu->addMenu("page", "show_edition_code", "Afficher", $lObj2);
        //===============================================
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
        //===============================================
        // actions
        $lObj = $lMenu->addMenu("", "", "Actions", $this);
        $lObj2 = $lMenu->addMenu("", "", "Code", $lObj);
        $lMenu->addMenu("page", "store_code_edition", "Sauvegarder", $lObj2);
        $lMenu->addMenu("page", "load_code_edition", "Charger", $lObj2);
        $lObj2 = $lMenu->addMenu("", "", "Edition", $lObj);
        $lMenu->addMenu("page", "show_code_edition", "Afficher", $lObj2);
        //===============================================
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