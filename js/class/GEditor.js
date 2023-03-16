//===============================================
class GEditor extends GObject {
    //===============================================
    static m_instance = null;
    //===============================================
    constructor() {
        super();
        this.m_selection = null;
        this.m_node = null;
        this.m_line = "";
        this.m_text = "";
    }
    //===============================================
    static Instance() {
        if(this.m_instance == null) {
            this.m_instance = new GEditor();
        }
        return this.m_instance;
    }
    //===============================================
    init() {
        var lEditorTabs = document.getElementsByClassName("EditorTab");
        var lEditorTabDefault = document.getElementById("EditorTabDefault");
        if(lEditorTabs.length) {
            var lDefaultId = +lEditorTabDefault.value;
            var lEditorTab = lEditorTabs[lDefaultId];
            this.onOpenHeader(lEditorTab, "EditorTab" + lDefaultId);
        }
    }
    //===============================================
    initTab(_index) {
        var lEditorTabs = document.getElementsByClassName("EditorTab");
        if(lEditorTabs.length) {
            var lEditorTab = lEditorTabs[_index];
            this.onOpenHeader(lEditorTab, "EditorTab" + _index);
        }
    }
    //===============================================
    createNode(_data) {
        var lParent = document.createElement('div');
        lParent.innerHTML = _data.trim();
        return lParent.firstElementChild;
    }    
    //===============================================
    removeNode() {
        this.m_node.remove()
        document.execCommand("insertLineBreak")
        return !this.hasErrors();
    }
    //===============================================
    hasParent(_className) {
        this.m_node = this.m_selection;
        while(1) {
            if(!this.m_node) return false;
            this.m_node = this.m_node.parentNode;
            if(this.m_node.matches("." + _className)) return true;
            if(this.m_node.matches(".GEndEditor")) return false;
            if(this.m_node.matches(".HtmlPage")) return false;
        }
        return false;
    }
    //===============================================
    isEditor() {
        return this.hasParent("GEndEditor");
    }
    //===============================================
    isLine() {
        return (!this.m_line);
    }
    //===============================================
    readSelection() {
        var lSelection = document.getSelection();
        this.m_selection = lSelection.anchorNode;
        if(!this.m_selection) {
            this.addError("Aucune donnée n'a été sélectionné.");
            return false;
        }
        this.m_node = this.m_selection;
        this.m_line = this.m_selection.data;
        this.m_text = lSelection.toString();
        return !this.hasErrors();
    }
    //===============================================
    onModule(_method, _obj, _data) {
        if(_method == "") {
            this.addError("Erreur la méthode est obligatoire.");
        }
        else if(_method == "open_header") {
            this.onOpenHeader(_obj, _data);
        }
        //===============================================
        // page
        //===============================================
        else if(_method == "show_code_page") {
            this.onShowCodePage(_obj, _data);
        }
        else if(_method == "show_edition_page") {
            this.onShowEditionPage(_obj, _data);
        }
        //===============================================
        // titres
        //===============================================
        else if(_method == "add_title_1") {
            this.onAddTitle1(_obj, _data);
        }
        else if(_method == "delete_title_1") {
            this.onDeleteTitle1(_obj, _data);
        }
        else if(_method == "delete_title_1_confirm") {
            this.onDeleteTitle1Confirm(_obj, _data);
        }
        //===============================================
        // parallax
        //===============================================
        else if(_method == "add_parallax") {
            this.onAddParallax(_obj, _data);
        }
        else if(_method == "delete_parallax") {
            this.onDeleteParallax(_obj, _data);
        }
        else if(_method == "delete_parallax_confirm") {
            this.onDeleteParallaxConfirm(_obj, _data);
        }
        else if(_method == "update_bg_image_parallax") {
            this.onUpdateBgImageParallax(_obj, _data);
        }
        else if(_method == "update_bg_image_parallax_form") {
            this.onUpdateBgImageParallaxForm(_obj, _data);
        }
        else if(_method == "update_bg_color_parallax") {
            this.onUpdateBgColorParallax(_obj, _data);
        }
        else if(_method == "update_bg_color_parallax_form") {
            this.onUpdateBgColorParallaxForm(_obj, _data);
        }
        //===============================================
        // graduation
        //===============================================
        else if(_method == "add_graduation") {
            this.onAddGraduation(_obj, _data);
        }
        else if(_method == "delete_graduation") {
            this.onDeleteGraduation(_obj, _data);
        }
        else if(_method == "delete_graduation_confirm") {
            this.onDeleteGraduationConfirm(_obj, _data);
        }
        //===============================================
        // textes
        //===============================================
        else if(_method == "add_text_image_left") {
            this.onAddTextImageLeft(_obj, _data);
        }
        else if(_method == "delete_text_image_left") {
            this.onDeleteTextImageLeft(_obj, _data);
        }
        else if(_method == "delete_text_image_left_confirm") {
            this.onDeleteTextImageLeftConfirm(_obj, _data);
        }
        //===============================================
        // end
        //===============================================
        else {
            this.addError("Erreur la méthode est obligatoire.");            
        }
        return !this.hasErrors();
    }
    //===============================================
    onOpenHeader(_obj, _data) {
        if(!_obj) return;
        var lTabs = document.getElementsByClassName("EditorTab");
        for(var i = 0; i < lTabs.length; i++) {
            var lTab = lTabs[i];
            lTab.classList.remove("Active");
        }
        _obj.classList.add("Active");
        var lContents = document.getElementsByClassName("EditorTabCtn");
        for(var i = 0; i < lContents.length; i++) {
            var lContent = lContents[i];
            lContent.style.display = "none";
        }
        var lTab = document.getElementById(_data);
        if(!lTab) return;
        lTab.style.display = "block";
    }
    //===============================================
    onShowCodePage(_obj, _data) {
        this.initTab(4);
        var lPage = new GPage();
        lPage.searchCodeFile();
    }
    //===============================================
    onShowEditionPage(_obj, _data) {
        this.initTab(3);
    }
    //===============================================
    onAddTitle1(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GTitle1")) {
            this.addError("Vous êtes dans un titre 1.");
            return false;
        }
        if(!this.isLine()) {
            this.addError("Vous êtes sur une ligne.");
            return false;
        }

        var lHtml = "";
        lHtml += "<div class='GTitle1 Content2'>";
        lHtml += "<div class='MainBlock2'>";
        lHtml += "<div class='Content'>";
        lHtml += "<h1 class='Title2 Center'>";
        lHtml += "<a class='Link3' href='#'>";
        lHtml += "Ajouter un titre...";
        lHtml += "</a>";
        lHtml += "</h1>";
        lHtml += "<div class='Body3'>";
        lHtml += "Ajouter un texte ici...";
        lHtml += "</div>";
        lHtml += "</div>";
        lHtml += "</div>";
        lHtml += "</div>";

        document.execCommand("insertHTML", false, lHtml);
    }
    //===============================================
    onDeleteTitle1(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GTitle1")) {
            this.addError("Vous n'êtes pas dans un titre 1.");
            return false;
        }
        
        var lConfirm = new GConfirm();
        lConfirm.setCallback("editor", "delete_title_1_confirm");
        lConfirm.showConfirm();
    }
    //===============================================
    onDeleteTitle1Confirm(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.hasParent("GTitle1")) {
            this.addError("Vous n'êtes pas dans un titre 1.");
            return false;
        }
        this.removeNode();
    }
    //===============================================
    onAddParallax(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GParallax1")) {
            this.addError("Vous êtes dans un effet parallax.");
            return false;
        }
        if(!this.isLine()) {
            this.addError("Vous êtes sur une ligne.");
            return false;
        }

        var lHtml = "";
        lHtml += "<div class='GParallax1 Parallax'>\n";
        lHtml += "<div class='Img'>\n";
        lHtml += "<div class='Caption'>\n";
        lHtml += "<a href='#'><div class='Text'>Ajouter un titre...</div></a>\n";
        lHtml += "</div>\n";
        lHtml += "</div>\n";
        lHtml += "<div class='Body2'>\n";
        lHtml += "Ajouter un texte...\n";
        lHtml += "</div>\n";
        lHtml += "</div>\n";

        document.execCommand("insertHTML", false, lHtml);
    }
    //===============================================
    onDeleteParallax(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GParallax1")) {
            this.addError("Vous n'êtes pas dans un effet parallax.");
            return false;
        }
        
        var lConfirm = new GConfirm();
        lConfirm.setCallback("editor", "delete_parallax_confirm");
        lConfirm.showConfirm();
    }
    //===============================================
    onDeleteParallaxConfirm(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.hasParent("GParallax1")) {
            this.addError("Vous n'êtes pas dans un effet parallax.");
            return false;
        }
        this.removeNode();
    }
    //===============================================
    onUpdateBgImageParallax(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GParallax1")) {
            this.addError("Vous n'êtes pas dans un effet parallax.");
            return false;
        }
        
        var lImage = GImage.Instance();
        lImage.readData();
        var lForm = new GForm();
        lForm.setCallback("editor", "update_bg_image_parallax_form");
        lForm.addLabelImage("EditorParallaxImage", "Image :", lImage.m_data);
        lForm.showForm();
        this.addLogs(lForm.getLogs());
    }
    //===============================================
    onUpdateBgImageParallaxForm(_obj, _data) {
        if(!this.readSelection()) return false;
        var lImage = GImage.Instance();
        lImage.loadData();
        var lForm = new GForm();
        lForm.deserialize(_data);
        
        lForm.loadFromMap(0);
        lImage.loadFromMap(lForm.m_index);
        var lBgImg = lImage.m_path;
        
        if(lBgImg == "") {
            this.addError("L'image de fond est obligatoire.");
            return false;
        }

        if(!this.hasParent("GParallax1")) {
            this.addError("Vous n'êtes pas dans un effet parallax.");
            return false;
        }

        var lNode = this.m_node;
        var lBgImgId = lNode.firstElementChild;
        lBgImgId.style.backgroundImage = sprintf("url('%s')", lBgImg);
    }
    //===============================================
    onUpdateBgColorParallax(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GParallax1")) {
            this.addError("Vous n'êtes pas dans un effet parallax.");
            return false;
        }

        var lForm = new GForm();
        lForm.setCallback("editor", "update_bg_color_parallax_form");
        lForm.addLabelColor("EditorParallaxColor", "Couleur :");
        lForm.showForm();
        this.addLogs(lForm.getLogs());
    }
    //===============================================
    onUpdateBgColorParallaxForm(_obj, _data) {
        if(!this.readSelection()) return false;
        var lForm = new GForm();
        lForm.deserialize(_data);
        
        lForm.loadFromMap(0);
        var lBgColor = lForm.m_value;
        
        if(lBgColor == "") {
            this.addError("La couleur de fond est obligatoire.");
            return false;
        }

        if(!this.hasParent("GParallax1")) {
            this.addError("Vous n'êtes pas dans un effet parallax.");
            return false;
        }

        var lNode = this.m_node;
        var lBgColorId = lNode.firstElementChild.nextElementSibling;
        lBgColorId.style.backgroundColor = lBgColor;
    }
    //===============================================
    onAddGraduation(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GGraduation1")) {
            this.addError("Vous êtes dans une formation");
            return false;
        }
        if(!this.isLine()) {
            this.addError("Vous êtes sur une ligne.");
            return false;
        }

        var lHtml = "";
        lHtml += "<div class='GGraduation1 Row3'>\n";
        lHtml += "<div class='Content3'>\n";
        lHtml += "<i class='Icon4 fa fa-graduation-cap'></i>\n";
        lHtml += "</div>\n";
        lHtml += "<div class='Text3'>\n";
        lHtml += "<b>2006 - 2009</b><br>\n";
        lHtml += "DUT Electronique Industrielle,<br>\n";
        lHtml += "Faculté des Sciences de Bizerte, Tunisie.\n";
        lHtml += "</div>\n";
        lHtml += "</div>\n";

        document.execCommand("insertHTML", false, lHtml);
    }
    //===============================================
    onDeleteGraduation(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GGraduation1")) {
            this.addError("Vous n'êtes pas dans une formation");
            return false;
        }
        
        var lConfirm = new GConfirm();
        lConfirm.setCallback("editor", "delete_graduation_confirm");
        lConfirm.showConfirm();
    }
    //===============================================
    onDeleteGraduationConfirm(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.hasParent("GGraduation1")) {
            this.addError("Vous n'êtes pas dans une formation");
            return false;
        }
        this.removeNode();
    }
    //===============================================
    onAddTextImageLeft(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GTextImage1")) {
            this.addError("Vous êtes dans un texte image");
            return false;
        }
        if(!this.isLine()) {
            this.addError("Vous êtes sur une ligne.");
            return false;
        }

        var lHtml = "";
        lHtml += "<div class='GTextImage1'>\n";
        lHtml += "<img class='Img5' src='/data/img/defaults/img_avatar.png' alt='img_avatar.png'/>\n";
        lHtml += "<div class='Text3'>Ajouter un texte...</div>\n";
        lHtml += "</div>\n";

        document.execCommand("insertHTML", false, lHtml);
    }
    //===============================================
    onDeleteTextImageLeft(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GTextImage1")) {
            this.addError("Vous n'êtes pas dans un texte image");
            return false;
        }
        var lConfirm = new GConfirm();
        lConfirm.setCallback("editor", "delete_text_image_left_confirm");
        lConfirm.showConfirm();
    }
    //===============================================
    onDeleteTextImageLeftConfirm(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.hasParent("GTextImage1")) {
            this.addError("Vous n'êtes pas dans un texte image");
            return false;
        }
        this.removeNode();
    }
    //===============================================
}
//===============================================
GEditor.Instance().init();
//===============================================
