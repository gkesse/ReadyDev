//===============================================
class GEditor extends GObject {
    //===============================================
    static m_instance = null;
    //===============================================
    constructor() {
        super();
        this.m_selection = null;
        this.m_range = null;
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
    clone() {
        var lObj = new GEditor();
        return lObj;
    }
    //===============================================
    setObj(_obj) {
        this.m_selection = _obj.m_selection;
        this.m_range = _obj.m_range;
        this.m_node = _obj.m_node;
        this.m_line = _obj.m_line;
        this.m_text = _obj.m_text;
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
    appendNode(_data) {
        this.m_node.appendChild(this.createNode(_data));
    }
    //===============================================
    removeNode() {
        this.m_node.remove()
        //document.execCommand("insertLineBreak");
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
        return (this.m_line);
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
        this.m_range = lSelection.getRangeAt(0);
        return !this.hasErrors();
    }
    //===============================================
    selectLine() {
        var lSelection = document.getSelection();
        var lNode = lSelection.anchorNode;
        var lLength = lNode.data.length;
        var lRange = document.createRange();
        lRange.setStart(lNode, 0);
        lRange.setEnd(lNode, lLength);
        lSelection.removeAllRanges();
        lSelection.addRange(lRange);
        return !this.hasErrors();
    }
    //===============================================
    focusContent() {
        var lEditorEditionContent = document.getElementById("EditorEditionContent");
        lEditorEditionContent.focus();
    }
    //===============================================
    restoreRange() {
        if(this.m_range) {
            var lSelection = document.getSelection();
            lSelection.removeAllRanges();
            lSelection.addRange(this.m_range);
        }
    }
    //===============================================
    run(_method, _obj, _data) {
        if(_method == "") {
            this.addError("Erreur la méthode est obligatoire.");
        }
        else if(_method == "open_header") {
            this.onOpenHeader(_obj, _data);
        }
        //===============================================
        // command_no_argument
        //===============================================
        else if(_method == "command_no_argument") {
            this.onCommandNoArgument(_obj, _data);
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
        // bullet
        //===============================================
        else if(_method == "add_bullet") {
            this.onAddBullet(_obj, _data);
        }
        else if(_method == "update_bullet") {
            this.onUpdateBullet(_obj, _data);
        }
        else if(_method == "delete_bullet") {
            this.onDeleteBullet(_obj, _data);
        }
        else if(_method == "delete_bullet_confirm") {
            this.onDeleteBulletConfirm(_obj, _data);
        }
        //===============================================
        // bullet_text
        //===============================================
        else if(_method == "add_bullet_text") {
            this.onAddBulletText(_obj, _data);
        }
        else if(_method == "update_bullet_text") {
            this.onUpdateBulletText(_obj, _data);
        }
        else if(_method == "delete_bullet_text") {
            this.onDeleteBulletText(_obj, _data);
        }
        else if(_method == "delete_bullet_text_confirm") {
            this.onDeleteBulletTextConfirm(_obj, _data);
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
        // header
        //===============================================
        else if(_method == "add_header") {
            this.onAddHeader(_obj, _data);
        }
        //===============================================
        // line_icon
        //===============================================
        else if(_method == "add_line_icon") {
            this.onAddLineIcon(_obj, _data);
        }
        else if(_method == "delete_line_icon") {
            this.onDeleteLineIcon(_obj, _data);
        }
        else if(_method == "delete_line_icon_confirm") {
            this.onDeleteLineIconConfirm(_obj, _data);
        }
        //===============================================
        // link_icon
        //===============================================
        else if(_method == "add_link_icon") {
            this.onAddLinkIcon(_obj, _data);
        }
        else if(_method == "update_link_icon") {
            this.onUpdateLinkIcon(_obj, _data);
        }
        else if(_method == "update_link_icon_form") {
            this.onUpdateLinkIconForm(_obj, _data);
        }
        else if(_method == "delete_link_icon") {
            this.onDeleteLinkIcon(_obj, _data);
        }
        else if(_method == "delete_link_icon_confirm") {
            this.onDeleteLinkIconConfirm(_obj, _data);
        }
        //===============================================
        // link_title
        //===============================================
        else if(_method == "add_link_title") {
            this.onAddLinkTitle(_obj, _data);
        }
        else if(_method == "update_link_title") {
            this.onUpdateLinkTitle(_obj, _data);
        }
        else if(_method == "update_link_title_form") {
            this.onUpdateLinkTitleForm(_obj, _data);
        }
        else if(_method == "update_link_title_form_line") {
            this.onUpdateLinkTitleFormLine(_obj, _data);
        }
        else if(_method == "delete_link_title") {
            this.onDeleteLinkTitle(_obj, _data);
        }
        else if(_method == "delete_link_title_confirm") {
            this.onDeleteLinkTitleConfirm(_obj, _data);
        }
        //===============================================
        // link_title_group
        //===============================================
        else if(_method == "add_link_title_group") {
            this.onAddLinkTitleGroup(_obj, _data);
        }
        else if(_method == "delete_link_title_group") {
            this.onDeleteLinkTitleGroup(_obj, _data);
        }
        else if(_method == "delete_link_title_group_confirm") {
            this.onDeleteLinkTitleGroupConfirm(_obj, _data);
        }
        //===============================================
        // navigation
        //===============================================
        else if(_method == "add_navigation") {
            this.onAddNavigation(_obj, _data);
        }
        //===============================================
        else if(_method == "delete_navigation") {
            this.onDeleteNavigation(_obj, _data);
        }
        //===============================================
        else if(_method == "delete_navigation_confirm") {
            this.onDeleteNavigationConfirm(_obj, _data);
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
        else if(_method == "update_parallax") {
            this.onUpdateParallax(_obj, _data);
        }
        else if(_method == "update_parallax_form") {
            this.onUpdateParallaxForm(_obj, _data);
        }
        //===============================================
        // path
        //===============================================
        else if(_method == "add_path") {
            this.onAddPath(_obj, _data);
        }
        else if(_method == "delete_path") {
            this.onDeletePath(_obj, _data);
        }
        else if(_method == "delete_path_confirm") {
            this.onDeletePathConfirm(_obj, _data);
        }
        //===============================================
        // path_link
        //===============================================
        else if(_method == "add_path_link") {
            this.onAddPathLink(_obj, _data);
        }
        else if(_method == "update_path_link") {
            this.onUpdatePathLink(_obj, _data);
        }
        else if(_method == "update_path_link_form") {
            this.onUpdatePathLinkForm(_obj, _data);
        }
        else if(_method == "delete_path_link") {
            this.onDeletePathLink(_obj, _data);
        }
        else if(_method == "delete_path_link_confirm") {
            this.onDeletePathLinkConfirm(_obj, _data);
        }
        //===============================================
        // skill
        //===============================================
        else if(_method == "add_skill") {
            this.onAddSkill(_obj, _data);
        }
        else if(_method == "delete_skill") {
            this.onDeleteSkill(_obj, _data);
        }
        else if(_method == "delete_skill_confirm") {
            this.onDeleteSkillConfirm(_obj, _data);
        }
        //===============================================
        // text
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
        // template
        //===============================================
        else if(_method == "create_log_form") {
            this.onCreateLogForm(_obj, _data);
        }
        else if(_method == "create_main_form") {
            this.onCreateMainForm(_obj, _data);
        }
        else if(_method == "create_menu_form") {
            this.onCreateMenuForm(_obj, _data);
        }
        //===============================================
        // title_section
        //===============================================
        else if(_method == "add_title_section") {
            this.onAddTitleSection(_obj, _data);
        }
        else if(_method == "update_title_section") {
            this.onUpdateTitleSection(_obj, _data);
        }
        else if(_method == "update_title_section_form") {
            this.onUpdateTitleSectionForm(_obj, _data);
        }
        else if(_method == "delete_title_section") {
            this.onDeleteTitleSection(_obj, _data);
        }
        else if(_method == "delete_title_section_confirm") {
            this.onDeleteTitleSectionConfirm(_obj, _data);
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
    // command_no_argument
    //===============================================
    onCommandNoArgument(_obj, _data) {
        document.execCommand(_data, false, null);
    }
    //===============================================
    // page
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
    // bullet
    //===============================================
    onAddBullet(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GBullet1")) {
            this.addError("Vous êtes dans une puce");
            return false;
        }
        if(this.isLine()) {
            this.addError("Vous êtes sur une ligne.");
            return false;
        }
        
        var lBullet = new GBullet();
        lBullet.m_icon = "check";
        lBullet.m_text = "Ajouter un texte...";
        document.execCommand("insertHTML", false, lBullet.toBullet());
    }
    //===============================================
    onDeleteBullet(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GBullet1")) {
            this.addError("Vous n'êtes pas dans une puce");
            return false;
        }
        var lConfirm = new GConfirm();
        lConfirm.setCallback("editor", "delete_bullet_confirm");
        lConfirm.showConfirm();
    }
    //===============================================
    onDeleteBulletConfirm(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GBullet1")) {
            this.addError("Vous n'êtes pas dans une puce");
            return false;
        }
        this.removeNode();
    }
    //===============================================
    // bullet_text
    //===============================================
    onAddBulletText(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GBullet2")) {
            this.addError("Vous êtes dans une puce texte");
            return false;
        }
        if(!this.isLine()) {
            this.addError("Vous n'êtes pas sur une ligne.");
            return false;
        }
        this.selectLine();
        
        var lBullet = new GBullet();
        lBullet.m_icon = "check";
        lBullet.m_text = this.m_line;
        document.execCommand("insertHTML", false, lBullet.toBullet());
    }
    //===============================================
    // graduation
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
        if(this.isLine()) {
            this.addError("Vous êtes sur une ligne.");
            return false;
        }

        var lGrade = new GGraduation();
        lGrade.m_icon = "graduation-cap";
        lGrade.m_text = lGrade.getTextGraduation();

        document.execCommand("insertHTML", false, lGrade.toGraduation());
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
    // header
    //===============================================
    onAddHeader(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GHeader1")) {
            this.addError("Vous êtes dans une entête.");
            return false;
        }
        if(this.isLine()) {
            this.addError("Vous êtes sur une ligne.");
            return false;
        }

        var lHeader = new GHeader();
        lHeader.m_title = "Titre";
        lHeader.m_views = 123456;
        lHeader.m_facebookUrl = "#";
        lHeader.m_linkedinUrl = "#";
        
        document.execCommand("insertHTML", false, lHeader.toHeader());
    }
    //===============================================
    // line_icon
    //===============================================
    onAddLineIcon(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GLine1")) {
            this.addError("Vous êtes dans une ligne icône");
            return false;
        }
        if(this.isLine()) {
            this.addError("Vous êtes sur une ligne.");
            return false;
        }
        
        var lLine = new GLine();
        lLine.m_icon = "thumbs-up";
        
        document.execCommand("insertHTML", false, lLine.toLine());
    }
    //===============================================
    onDeleteLineIcon(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GLine1")) {
            this.addError("Vous n'êtes pas dans une ligne icône");
            return false;
        }
        
        var lConfirm = new GConfirm();
        lConfirm.setCallback("editor", "delete_line_icon_confirm");
        lConfirm.showConfirm();
    }
    //===============================================
    onDeleteLineIconConfirm(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GLine1")) {
            this.addError("Vous êtes dans une ligne icône");
            return false;
        }
        
        this.removeNode();
    }
    //===============================================
    // link_icon
    //===============================================
    onAddLinkIcon(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GLink1")) {
            this.addError("Vous êtes dans un lien icône.");
            return false;
        }

        var lHtml = "";
        lHtml += "<div class='GLink1 Item4'>";
        lHtml += "<i class='Icon10 fa fa-book'></i>";
        lHtml += "<a class='Link4' href='#'>Ajouter un lien...</a>";
        lHtml += "</div>";

        document.execCommand("insertHTML", false, lHtml);
    }
    //===============================================
    onUpdateLinkIcon(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GLink1")) {
            this.addError("Vous n'êtes pas dans un lien icône.");
            return false;
        }

        var lEditor = GEditor.Instance();
        lEditor.setObj(this);

        var lNode = this.m_node;
        var lLink = lNode.firstElementChild.nextElementSibling;
        var lHref = lLink.getAttribute("href");
        
        var lForm = new GForm();
        lForm.setCallback("editor", "update_link_icon_form");
        lForm.addLabelEdit("EditorLinkHref", "Lien :", lHref);
        lForm.showForm();
        this.addLogs(lForm.getLogs());
    }
    //===============================================
    onUpdateLinkIconForm(_obj, _data) {
        var lEditor = GEditor.Instance();
        this.setObj(lEditor);
        this.restoreRange();
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GLink1")) {
            this.addError("Vous n'êtes pas dans un lien icône.");
            return false;
        }
        
        var lForm = new GForm();
        lForm.deserialize(_data);
        var lHref = lForm.loadFromMap(0).m_value;
        
        var lNode = this.m_node;
        var lLink = lNode.firstElementChild.nextElementSibling;
        lLink.href = lHref;
    }
    //===============================================
    onDeleteLinkIcon(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GLink1")) {
            this.addError("Vous n'êtes pas dans un lien icône.");
            return false;
        }
        
        var lConfirm = new GConfirm();
        lConfirm.setCallback("editor", "delete_link_icon_confirm");
        lConfirm.showConfirm();
    }
    //===============================================
    onDeleteLinkIconConfirm(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GLink1")) {
            this.addError("Vous n'êtes pas dans un lien icône.");
            return false;
        }
        
        this.removeNode();
    }
    //===============================================
    // link_title
    //===============================================
    onAddLinkTitle(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GLink2")) {
            this.addError("Vous êtes dans un lien titre.");
            return false;
        }

        var lTitle = new GTitle();
        lTitle.m_icon = "book";
        lTitle.m_title = "Ajouter un lien..."; 
        
        document.execCommand("insertHTML", false, lTitle.toLinkTitle());
    }
    //===============================================
    onUpdateLinkTitle(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GLink2")) {
            this.addError("Vous n'êtes pas dans un lien titre.");
            return false;
        }

        var lEditor = GEditor.Instance();
        lEditor.setObj(this);

        var lTitle = GTitle.Instance();
        lTitle.loadTitle();

        var lNode = this.m_node;
        var lLink = lNode.firstElementChild.nextElementSibling;
        lTitle.m_title = lLink.innerHTML;
        lTitle.m_link = lLink.getAttribute("href").removeCharAt(0);
        var lIndex = lTitle.findObj(lTitle);

        var lForm = GForm.Instance();
        lForm.clearMap();
        lForm.setCallback("editor", "update_link_title_form");
        lForm.setCallbackLine("editor", "update_link_title_form_line");
        lForm.addLabelCombo("EditorTitleName", "Titre :", lTitle.toForm(), lIndex);
        lForm.addLabelText("EditorTitleId", "Identifiant :", lTitle.m_link);
        lForm.showForm();
        this.addLogs(lForm.getLogs());
    }
    //===============================================
    onUpdateLinkTitleForm(_obj, _data) {
        var lEditor = GEditor.Instance();
        this.setObj(lEditor);
        this.restoreRange();
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GLink2")) {
            this.addError("Vous n'êtes pas dans un lien titre.");
            return false;
        }
        
        var lTitle = GTitle.Instance();
        var lForm = GForm.Instance();
        lForm.readForm();
        lTitle.loadFromMap(lForm.loadFromMap(0).m_index);
        
        if(lTitle.isNull()) {
            this.addError("Les données sont vides.");
            return false;
        }
        
        var lNode = this.m_node;
        var lLink = lNode.firstElementChild.nextElementSibling;
        lLink.innerHTML = lTitle.m_title;
        lLink.href = sprintf("#%s", lTitle.m_link);
    }
    //===============================================
    onUpdateLinkTitleFormLine(_obj, _data) {
        var lData = new GForm();
        lData.deserialize(_data);
        var lTitle = GTitle.Instance();
        lTitle.loadFromMap(lData.m_index);
        var lForm = GForm.Instance();
        lForm.readForm();
        lForm.loadFromMap(1);
        lForm.m_value = lTitle.m_link;
        lForm.loadToMap(1);
        lForm.updateForm();
        return !this.hasErrors();
    }
    //===============================================
    onDeleteLinkTitle(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GLink2")) {
            this.addError("Vous n'êtes pas dans un lien titre.");
            return false;
        }
        
        var lConfirm = new GConfirm();
        lConfirm.setCallback("editor", "delete_link_title_confirm");
        lConfirm.showConfirm();
    }
    //===============================================
    onDeleteLinkTitleConfirm(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GLink2")) {
            this.addError("Vous n'êtes pas dans un lien titre.");
            return false;
        }
        this.removeNode();
    }
    //===============================================
    // link_title_group
    //===============================================
    onAddLinkTitleGroup(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GLink3")) {
            this.addError("Vous êtes dans un lien titre groupe.");
            return false;
        }
        
        var lTitle = new GTitle();
        var lTitles = document.getElementsByClassName("GTitle1");
        
        for(var i = 0; i < lTitles.length; i++) {
            var lNode = lTitles[i];
            var lLink = lNode.firstElementChild.firstElementChild.firstElementChild.firstElementChild;
            lTitle.m_title = lLink.innerHTML;
            lTitle.m_link = lLink.innerHTML.getNormalize();
            lTitle.addObj(lTitle);
        }

        document.execCommand("insertHTML", false, lTitle.toLinkTitleGroup());
    }
    //===============================================
    onDeleteLinkTitleGroup(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GLink3")) {
            this.addError("Vous n'êtes pas dans un lien titre groupe.");
            return false;
        }
        var lConfirm = new GConfirm();
        lConfirm.setCallback("editor", "delete_link_title_group_confirm");
        lConfirm.showConfirm();
    }
    //===============================================
    onDeleteLinkTitleGroupConfirm(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GLink3")) {
            this.addError("Vous n'êtes pas dans un lien titre groupe.");
            return false;
        }
        this.removeNode();
    }
    //===============================================
    // navigation
    //===============================================
    onAddNavigation(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GNavigation1")) {
            this.addError("Vous êtes dans une navigation.");
            return false;
        }
        if(this.isLine()) {
            this.addError("Vous êtes sur une ligne.");
            return false;
        }

        var lNav = new GNavigation();

        document.execCommand("insertHTML", false, lNav.toNavigation());
    }
    //===============================================
    onDeleteNavigation(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GNavigation1")) {
            this.addError("Vous n'êtes pas dans une navigation.");
            return false;
        }
        
        var lConfirm = new GConfirm();
        lConfirm.setCallback("editor", "delete_navigation_confirm");
        lConfirm.showConfirm();
    }
    //===============================================
    onDeleteNavigationConfirm(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.hasParent("GNavigation1")) {
            this.addError("Vous n'êtes pas dans une navigation.");
            return false;
        }
        this.removeNode();
    }
    //===============================================
    // parallax
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
        if(this.isLine()) {
            this.addError("Vous êtes sur une ligne.");
            return false;
        }

        var lParallax = new GParallax();

        document.execCommand("insertHTML", false, lParallax.toParallax());
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
    onUpdateParallax(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GParallax1")) {
            this.addError("Vous n'êtes pas dans un effet parallax.");
            return false;
        }
        
        var lEditor = GEditor.Instance();
        lEditor.setObj(this);

        var lParallax = new GParallax();
        var lNode = this.m_node;
        var lImg = lNode.firstElementChild;
        var lBody = lNode.firstElementChild.nextElementSibling;
        var lTitle = lNode.firstElementChild.firstElementChild.firstElementChild;
        lParallax.m_title = lTitle.innerHTML;
        lParallax.m_bgImg = lImg.style.backgroundImage.getPathFromUrl();
        lParallax.m_bgColor = lBody.style.backgroundColor.getHexFromRgb();

        var lImage = GImage.Instance();
        var lIndex = lImage.findImg(lParallax.m_bgImg);
        
        var lForm = GForm.Instance();
        lForm.clearMap();
        lForm.setCallback("editor", "update_parallax_form");
        lForm.addLabelEdit("m_title", "Titre :", lParallax.m_title);
        lForm.addLabelImage("m_bgImg", "Image :", lImage.toForm(), lIndex);
        lForm.addLabelColor("m_bgColor", "Couleur :", lParallax.m_bgColor);
        lForm.showForm();
        this.addLogs(lForm.getLogs());
    }
    //===============================================
    onUpdateParallaxForm(_obj, _data) {
        var lEditor = GEditor.Instance();
        this.setObj(lEditor);
        this.restoreRange();
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GParallax1")) {
            this.addError("Vous n'êtes pas dans un effet parallax.");
            return false;
        }

        var lImage = GImage.Instance();
        var lForm = GForm.Instance();
        lForm.readForm();

        var lParallax = new GParallax();
        lParallax.m_title = lForm.loadFromMap(0).m_value;
        lParallax.m_bgImg = lImage.loadFromMap(lForm.loadFromMap(1).m_index).m_path;
        lParallax.m_bgColor = lForm.loadFromMap(2).m_value;
                
        if(lParallax.m_title == "") {
            this.addError("Le titre est obligatoire.");
            return false;
        }
        if(lParallax.m_bgImg == "") {
            this.addError("L'image de fond est obligatoire.");
            return false;
        }
        if(lParallax.m_bgColor == "") {
            this.addError("La couleur de fond est obligatoire.");
            return false;
        }

        var lNode = this.m_node;
        var lImg = lNode.firstElementChild;
        var lBody = lNode.firstElementChild.nextElementSibling;
        var lTitle = lNode.firstElementChild.firstElementChild.firstElementChild;
        lTitle.innerHTML = lParallax.m_title;
        lImg.style.backgroundImage = sprintf("url('%s')", lParallax.m_bgImg);
        lBody.style.backgroundColor = lParallax.m_bgColor;
    }
    //===============================================
    // path
    //===============================================
    onAddPath(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GPath1")) {
            this.addError("Vous êtes dans un chemin.");
            return false;
        }
        if(this.isLine()) {
            this.addError("Vous êtes sur une ligne.");
            return false;
        }

        var lPath = new GPath();
        lPath.m_name = "home";
        lPath.m_link = "#";
        
        document.execCommand("insertHTML", false, lPath.toPath());
    }
    //===============================================
    onDeletePath(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GPath1")) {
            this.addError("Vous n'êtes pas dans un chemin.");
            return false;
        }
        var lConfirm = new GConfirm();
        lConfirm.setCallback("editor", "delete_path_c");
        lConfirm.showConfirm();
    }
    //===============================================
    onDeletePathConfirm(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GPath1")) {
            this.addError("Vous n'êtes pas dans un chemin.");
            return false;
        }
        this.removeNode();
    }
    //===============================================
    // path_link
    //===============================================
    onAddPathLink(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GPath1")) {
            this.addError("Vous n'êtes pas dans un chemin.");
            return false;
        }

        var lPath = new GPath();
        lPath.m_name = "home";
        lPath.m_link = "#";
        lPath.m_arrow = "chevron-right";
        
        this.appendNode(lPath.toArrow());
        this.appendNode(lPath.toLink());
    }
    //===============================================
    onUpdatePathLink(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GPath2")) {
            this.addError("Vous n'êtes pas dans un chemin lien.");
            return false;
        }

        var lEditor = GEditor.Instance();
        lEditor.setObj(this);

        var lNode = this.m_node;
        var lPath = new GPath();
        lPath.m_name = lNode.innerHTML;
        lPath.m_link = lNode.getAttribute("href");
        
        var lForm = GForm.Instance();
        lForm.clearMap();
        lForm.setCallback("editor", "update_path_link_form");
        lForm.addLabelEdit("m_name", "Nom :", lPath.m_name);
        lForm.addLabelEdit("m_link", "Lien :", lPath.m_link);
        lForm.showForm();
        this.addLogs(lForm.getLogs());
    }
    //===============================================
    onUpdatePathLinkForm(_obj, _data) {
        var lEditor = GEditor.Instance();
        this.setObj(lEditor);
        this.restoreRange();
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GPath2")) {
            this.addError("Vous n'êtes pas dans un chemin lien.");
            return false;
        }

        var lForm = GForm.Instance();
        lForm.readForm();
        var lPath = new GPath();
        lPath.m_name = lForm.loadFromMap(0).m_value;
        lPath.m_link = lForm.loadFromMap(1).m_value;
        lPath.writeNode(this.m_node);
    }
    //===============================================
    onDeletePathLink(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GPath2")) {
            this.addError("Vous n'êtes pas dans un chemin lien.");
            return false;
        }
        var lConfirm = new GConfirm();
        lConfirm.setCallback("editor", "delete_path_link_confirm");
        lConfirm.showConfirm();
    }
    //===============================================
    onDeletePathLinkConfirm(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GPath2")) {
            this.addError("Vous n'êtes pas dans un chemin lien.");
            return false;
        }
        var lNode = this.m_node.previousElementSibling;
        this.removeNode();
        if(lNode) lNode.remove();
    }
    //===============================================
    // skill
    //===============================================
    onAddSkill(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GSkill1")) {
            this.addError("Vous êtes dans une compétence.");
            return false;
        }
        if(this.isLine()) {
            this.addError("Vous êtes sur une ligne.");
            return false;
        }
        
        var lSkill = new GSkill();
        lSkill.m_icon = "building-o";
        lSkill.m_text = "Ajouter un texte...";
        lSkill.m_number = "1/7";
        
        document.execCommand("insertHTML", false, lSkill.toSkill());
    }
    //===============================================
    // text
    //===============================================
    onAddTextImageLeft(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GText1")) {
            this.addError("Vous êtes dans un texte image");
            return false;
        }
        if(this.isLine()) {
            this.addError("Vous êtes sur une ligne.");
            return false;
        }

        var lText = new GText();
        lText.m_img = "/data/img/defaults/img_avatar.png";
        lText.m_name = "img_avatar.png";
        lText.m_text = "Ajouter un texte...";

        document.execCommand("insertHTML", false, lText.toTextImageLeft());
    }
    //===============================================
    onDeleteTextImageLeft(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GText1")) {
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
        if(!this.hasParent("GText1")) {
            this.addError("Vous n'êtes pas dans un texte image");
            return false;
        }
        this.removeNode();
    }
    //===============================================
    // template
    //===============================================
    onCreateLogForm(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GLog1")) {
            this.addError("Vous êtes dans un log.");
            return false;
        }
        if(this.isLine()) {
            this.addError("Vous êtes sur une ligne.");
            return false;
        }
        
        var lTemplate = new GTemplate();
        document.execCommand("insertHTML", false, lTemplate.toLog());
    }
    //===============================================
    onCreateMainForm(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GMain1")) {
            this.addError("Vous êtes dans un template.");
            return false;
        }
        if(this.isLine()) {
            this.addError("Vous êtes sur une ligne.");
            return false;
        }
        
        var lTemplate = new GTemplate();
        document.execCommand("insertHTML", false, lTemplate.toMain());
    }
    //===============================================
    onCreateMenuForm(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GTemplate1")) {
            this.addError("Vous êtes dans un template.");
            return false;
        }
        if(this.isLine()) {
            this.addError("Vous êtes sur une ligne.");
            return false;
        }
        
        var lTemplate = new GTemplate();
        lTemplate.addLabelEdit("EditorMenuId", "Id :");
        lTemplate.addLabelEdit("EditorMenuName", "Nom :");
        lTemplate.addLabelEdit("EditorMenuLink", "Lien :", "/home/cv");
        lTemplate.addButton("editor", "save_menu_site", "save", "Enregistrer");
        lTemplate.addButton("editor", "search_menu_site", "search", "Rechercher");
        lTemplate.addButton("editor", "delete_menu_site", "trash", "Supprimer");
        lTemplate.addButton("editor", "new_menu_site", "file", "Nouveau");
        
        document.execCommand("insertHTML", false, lTemplate.toHtml());
    }
    //===============================================
    // title_section
    //===============================================
    onAddTitleSection(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GTitle1")) {
            this.addError("Vous êtes dans un titre section.");
            return false;
        }
        if(this.isLine()) {
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
    onUpdateTitleSection(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GTitle1")) {
            this.addError("Vous n'êtes pas dans un titre section.");
            return false;
        }

        var lEditor = GEditor.Instance();
        lEditor.setObj(this);

        var lNode = this.m_node;
        var lTitle = lNode.firstElementChild.firstElementChild.firstElementChild.firstElementChild;
        var lText = lTitle.innerHTML;
        var lId = lTitle.id;
        
        var lForm = new GForm();
        lForm.setCallback("editor", "update_title_section_form");
        lForm.addLabelEdit("EditorTitleName", "Titre :", lText);
        lForm.addLabelText("EditorTitleId", "Identifiant :", lId);
        lForm.showForm();
        this.addLogs(lForm.getLogs());
    }
    //===============================================
    onUpdateTitleSectionForm(_obj, _data) {
        var lEditor = GEditor.Instance();
        this.setObj(lEditor);
        this.restoreRange();
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GTitle1")) {
            this.addError("Vous n'êtes pas dans un titre section.");
            return false;
        }
        
        var lForm = new GForm();
        lForm.deserialize(_data);
        var lText = lForm.loadFromMap(0).m_value;
        var lId = lText.getNormalize();
        
        var lNode = this.m_node;
        var lTitle = lNode.firstElementChild.firstElementChild.firstElementChild.firstElementChild;
        lTitle.innerHTML = lText;
        lTitle.id = lId;
    }
    //===============================================
    onDeleteTitleSection(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GTitle1")) {
            this.addError("Vous n'êtes pas dans un titre section.");
            return false;
        }
        
        var lConfirm = new GConfirm();
        lConfirm.setCallback("editor", "delete_title_section_confirm");
        lConfirm.showConfirm();
    }
    //===============================================
    onDeleteTitleSectionConfirm(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.hasParent("GTitle1")) {
            this.addError("Vous n'êtes pas dans un titre section.");
            return false;
        }
        this.removeNode();
    }
    //===============================================
}
//===============================================
