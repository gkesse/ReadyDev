//===============================================
class GEditor extends GObject {
    //===============================================
    static m_instance = null;
    //===============================================
    constructor() {
        super();
        this.m_node = null;
        this.m_range = null;
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
        return new GEditor();
    }
    //===============================================
    setObj(_obj) {
        this.m_node = _obj.m_node;
        this.m_range = _obj.m_range;
    }
    //===============================================
    init() {
        if(this.isAdmin()) {
            this.openDefaultTab();
        }
    }
    //===============================================
    hasParent(_className) {
        this.m_node = this.toNode();
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
        var lNode = this.toNode();
        if(!lNode) return false;
        var lLine = lNode.data;
        return (lLine);
    }
    //===============================================
    isData() {
        var lSelection = document.getSelection();
        var lData = lSelection.toString();
        return (lData);
    }
    //===============================================
    isFilter() {
        return true;
    }
    //===============================================
    toNode() {
        var lSelection = document.getSelection();
        var lNode = lSelection.anchorNode;
        return lNode;
    }
    //===============================================
    toNodeSiblings(_className) {
        var lNodes = [];
        var lStart = this.m_node;
        
        while(1) {
            var lPrevious = lStart.previousElementSibling;
            if(!lPrevious) break;
            if(!lPrevious.matches("." + _className)) break;
            lStart = lPrevious;
        }
        
        var lNode = lStart;
        
        while(1) {
            if(!lNode) break;
            if(!lNode.matches("." + _className)) break;
            lNodes.push(lNode);
            lNode = lNode.nextElementSibling;
        }
        
        return lNodes;
    }
    //===============================================
    toLine() {
        var lSelection = document.getSelection();
        var lNode = lSelection.anchorNode;
        return lNode.data;
    }
    //===============================================
    toData() {
        var lSelection = document.getSelection();
        var lData = lSelection.toString();
        return lData;
    }
    //===============================================
    toRange() {
        var lSelection = document.getSelection();
        var lRange = lSelection.getRangeAt(0);
        return lRange;
    }
    //===============================================
    saveRange() {
        this.m_range = this.toRange();
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
    openDefaultTab() {
        var lEditorDefaultTab = document.getElementById("EditorDefaultTab");
        var lIndex = +lEditorDefaultTab.value;
        var lTab = document.getElementsByClassName("EditorTab")[lIndex];
        this.onOpenEditorTab(lTab);
    }
    //===============================================
    removeNode() {
        this.m_node.remove();
    }
    //===============================================
    selectLine() {
        var lSelection = document.getSelection();
        var lNode = lSelection.anchorNode;
        if(!lNode.data) return false;
        var lLength = lNode.data.length;
        var lRange = document.createRange();
        lRange.setStart(lNode, 0);
        lRange.setEnd(lNode, lLength);
        lSelection.removeAllRanges();
        lSelection.addRange(lRange);
        return true;
    }
    //===============================================
    selectNode() {
        var lSelection = document.getSelection();
        var lRange = document.createRange();
        lRange.selectNode(this.m_node);
        lSelection.removeAllRanges();
        lSelection.addRange(lRange);
        return true;
    }
    //===============================================
    toParallax() {
        var lBgImg = "/data/img/defaults/binary.png";
        var lBgColor = "#803300";
        
        var lHtml = "";
        lHtml += sprintf("<div class='GParallax1 Parallax1'>\n");
        lHtml += sprintf("<div class='Parallax2'>\n");
        lHtml += sprintf("<div class='Parallax3'>\n");
        lHtml += sprintf("<a href='#' class='Parallax4'>Ajouter un titre...</a>\n");
        lHtml += sprintf("</div>\n");
        lHtml += sprintf("</div>\n");
        lHtml += sprintf("<div class='Parallax5'>Ajouter un texte...</div>\n");
        lHtml += sprintf("</div>\n");
                
        var lNode = this.createNode(lHtml);
        var lImgId = lNode.firstElementChild;
        var lBodyId = lNode.firstElementChild.nextElementSibling;
        lImgId.style.backgroundImage = sprintf("url('%s')", lBgImg);
        lBodyId.style.backgroundColor = lBgColor;
        lHtml = lNode.outerHTML;

        return lHtml;
    }
    //===============================================
    toLink() {
        var lHtml = "";
        lHtml += sprintf("<div class='GLink1 Link1'>\n");
        lHtml += sprintf("<i class='Link2 fa fa-book'></i>\n");
        lHtml += sprintf("<a class='Link3' href='#'>Ajouter un lien...</a>\n");
        lHtml += sprintf("</div>\n");
        return lHtml;
    }
    //===============================================
    toGraduation() {
        var lHtml = "";
        lHtml += sprintf("<div class='GGraduation1 Graduation1'>\n");
        lHtml += sprintf("<i class='Graduation2 fa fa-graduation-cap'></i>\n");
        lHtml += sprintf("<div class='Graduation3'>%s</div>\n", this.toGraduationText());
        lHtml += sprintf("</div>\n");
        return lHtml;
    }
    //===============================================
    toGraduationText() {
        var lHtml = "";
        lHtml += sprintf("<b>2006 - 2009</b><br/>\n");
        lHtml += sprintf("DUT Electronique Industrielle,<br/>\n");
        lHtml += sprintf("Faculté des Sciences de Bizerte, Tunisie.<br/>\n");
        return lHtml;
    }
    //===============================================
    toBullet(_data) {
        var lHtml = "";
        lHtml += sprintf("<div class='GBullet1 Bullet1'>\n");
        lHtml += sprintf("<i class='Bullet2 fa fa-check-square-o'></i>\n");
        lHtml += sprintf("<div class='Bullet3'>%s</div>\n", _data);
        lHtml += sprintf("</div>\n");
        return lHtml;
    }
    //===============================================
    toTextImageLeft() {
        var lHtml = "";
        lHtml += sprintf("<div class='GText1 Text1'>\n");
        lHtml += sprintf("<img class='Text2' src='/data/img/defaults/img_avatar.png' alt='image.png'/>\n");
        lHtml += sprintf("<div class='Text3'>Ajouter un texte...</div>\n");
        lHtml += sprintf("</div>\n");
        return lHtml;
    }
    //===============================================
    toSection() {
        var lHtml = "";
        lHtml += sprintf("<div class='GSection1 Section1'>\n");
        lHtml += sprintf("<div class='Section2'>\n");
        lHtml += sprintf("<div class='Section3'>\n");
        lHtml += sprintf("<h1 class='Section4'>\n");
        lHtml += sprintf("<a class='Section5' href='#'>Ajouter un titre...</a>\n");
        lHtml += sprintf("</h1>\n");
        lHtml += sprintf("<div class='Section6'>Ajouter un texte ici...</div>\n");
        lHtml += sprintf("</div>\n");
        lHtml += sprintf("</div>\n");
        lHtml += sprintf("</div>\n");
        return lHtml;
    }
    //===============================================
    toSummaryMain() {
        var lHtml = "";
        lHtml += sprintf("<div class='GSummary1'>\n");
        lHtml += sprintf("<div class='Summary1'>\n");
        lHtml += sprintf("<i class='Summary2 fa fa-book'></i>\n");
        lHtml += sprintf("<a class='Summary3' href='#'>Modifier le titre principal...</a>\n");
        lHtml += sprintf("</div>\n");
        lHtml += sprintf("</div>\n");
        return lHtml;
    }
    //===============================================
    toSkill() {
        var lHtml = "";
        lHtml += sprintf("<div class='GSkill1 Skill1'>\n");
        lHtml += sprintf("<i class='Skill2 fa fa-building-o'></i>\n");
        lHtml += sprintf("<div class='Skill3'>1/7</div>\n");
        lHtml += sprintf("<div class='Skill4'>Ajouter un texte...</div>\n");
        lHtml += sprintf("</div>\n");
        return lHtml;
    }
    //===============================================
    toLineBar() {
        var lHtml = "";
        lHtml += sprintf("<div class='GLine1 Line1'>\n");
        lHtml += sprintf("<hr class='Line2'/>\n");
        lHtml += sprintf("<div class='Line3'>\n");
        lHtml += sprintf("<i class='Line4 fa fa-thumbs-up'></i>\n");
        lHtml += sprintf("</div>\n");
        lHtml += sprintf("</div>\n");
        return lHtml;
    }
    //===============================================
    toTextFgColor(_data) {
        var lHtml = "";
        lHtml += sprintf("<span class='GText2' style='\n");
        lHtml += sprintf("color: #00ff00;\n");
        lHtml += sprintf("'>%s</span>\n", _data);
        return lHtml;
    }
    //===============================================
    run(_method, _obj, _data) {
        if(_method == "") {
            this.addError("La méthode est obligatoire.");
        }
        //===============================================
        // editor
        //===============================================
        else if(_method == "open_editor_tab") {
            this.onOpenEditorTab(_obj, _data);
        }
        //===============================================
        // command
        //===============================================
        else if(_method == "exec_command") {
            this.onExecCommand(_obj, _data);
        }
        //===============================================
        // text
        //===============================================
        else if(_method == "add_text_fg_color") {
            this.onAddTextFgColor(_obj, _data);
        }
        else if(_method == "update_text_fg_color") {
            this.onUpdateTextFgColor(_obj, _data);
        }
        else if(_method == "update_text_fg_color_form") {
            this.onUpdateTextFgColorForm(_obj, _data);
        }
        else if(_method == "delete_text_fg_color") {
            this.onDeleteTextFgColor(_obj, _data);
        }
        //===============================================
        // edition
        //===============================================
        else if(_method == "keydown_event_edition") {
            this.onKeydownEventEdition(_obj, _data);
        }
        else if(_method == "paste_event_edition") {
            this.onPasteEventEdition(_obj, _data);
        }
        else if(_method == "open_edition_tab") {
            this.onOpenEditionTab(_obj, _data);
        }
        //===============================================
        // code
        //===============================================
        else if(_method == "open_code_tab") {
            this.onOpenCodeTab(_obj, _data);
        }
        //===============================================
        // template/skill
        //===============================================
        else if(_method == "add_skill") {
            this.onAddSkill(_obj, _data);
        }
        else if(_method == "update_skill") {
            this.onUpdateSkill(_obj, _data);
        }
        else if(_method == "update_skill_form") {
            this.onUpdateSkillForm(_obj, _data);
        }
        else if(_method == "delete_skill") {
            this.onDeleteSkill(_obj, _data);
        }
        //===============================================
        // template/graduation
        //===============================================
        else if(_method == "add_graduation") {
            this.onAddGraduation(_obj, _data);
        }
        else if(_method == "update_graduation") {
            this.onUpdateGraduation(_obj, _data);
        }
        else if(_method == "update_graduation_form") {
            this.onUpdateGraduationForm(_obj, _data);
        }
        else if(_method == "delete_graduation") {
            this.onDeleteGraduation(_obj, _data);
        }
        //===============================================
        // template/link
        //===============================================
        else if(_method == "add_link") {
            this.onAddLink(_obj, _data);
        }
        else if(_method == "update_link") {
            this.onUpdateLink(_obj, _data);
        }
        else if(_method == "update_link_form") {
            this.onUpdateLinkForm(_obj, _data);
        }
        else if(_method == "delete_link") {
            this.onDeleteLink(_obj, _data);
        }
        //===============================================
        // template/line
        //===============================================
        else if(_method == "add_line") {
            this.onAddLine(_obj, _data);
        }
        else if(_method == "update_line") {
            this.onUpdateLine(_obj, _data);
        }
        else if(_method == "update_line_form") {
            this.onUpdateLineForm(_obj, _data);
        }
        else if(_method == "delete_line") {
            this.onDeleteLine(_obj, _data);
        }
        //===============================================
        // template/parallax
        //===============================================
        else if(_method == "add_parallax") {
            this.onAddParallax(_obj, _data);
        }
        else if(_method == "update_parallax") {
            this.onUpdateParallax(_obj, _data);
        }
        else if(_method == "update_parallax_form") {
            this.onUpdateParallaxForm(_obj, _data);
        }
        else if(_method == "delete_parallax") {
            this.onDeleteParallax(_obj, _data);
        }
        //===============================================
        // template/bullet
        //===============================================
        else if(_method == "add_bullet") {
            this.onAddBullet(_obj, _data);
        }
        else if(_method == "update_bullet") {
            this.onUpdateBullet(_obj, _data);
        }
        else if(_method == "update_bullet_form") {
            this.onUpdateBulletForm(_obj, _data);
        }
        else if(_method == "delete_bullet") {
            this.onDeleteBullet(_obj, _data);
        }
        //===============================================
        // template/section
        //===============================================
        else if(_method == "add_section") {
            this.onAddSection(_obj, _data);
        }
        else if(_method == "update_section") {
            this.onUpdateSection(_obj, _data);
        }
        else if(_method == "update_section_form") {
            this.onUpdateSectionForm(_obj, _data);
        }
        else if(_method == "update_section_form_edit") {
            this.onUpdateSectionFormEdit(_obj, _data);
        }
        else if(_method == "delete_section") {
            this.onDeleteSection(_obj, _data);
        }
        //===============================================
        // template/summary_main
        //===============================================
        else if(_method == "add_summary_main") {
            this.onAddSummaryMain(_obj, _data);
        }
        else if(_method == "update_summary_main") {
            this.onUpdateSummaryMain(_obj, _data);
        }
        else if(_method == "delete_summary_main") {
            this.onDeleteSummaryMain(_obj, _data);
        }
        //===============================================
        // template/text_image_left
        //===============================================
        else if(_method == "add_text_image_left") {
            this.onAddTextImageLeft(_obj, _data);
        }
        else if(_method == "update_text_image_left") {
            this.onUpdateTextImageLeft(_obj, _data);
        }
        else if(_method == "update_text_image_left_form") {
            this.onUpdateTextImageLeftForm(_obj, _data);
        }
        else if(_method == "delete_text_image_left") {
            this.onDeleteTextImageLeft(_obj, _data);
        }
        //===============================================
        else {
            this.addError("La méthode est inconnue.");
        }
    }
    //===============================================
    // editor
    //===============================================
    onOpenEditorTab(_obj, _data) {
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
        var lContentId = _obj.dataset.contentId;
        var lContent = document.getElementById(lContentId);
        lContent.style.display = "block";
    }
    //===============================================
    // command
    //===============================================
    onExecCommand(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.isData()) {
            this.addError("Vous n'avez pas sélectionné de texte.");
            return false;
        }
        document.execCommand(_data, false, null);
    }
    //===============================================
    // text/fg_color
    //===============================================
    onAddTextFgColor(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GText2")) {
            this.addError("Vous êtes dans un effet texte couleur premier plan.");
            return false;
        }
        if(!this.isData()) {
            this.addError("Vous n'avez pas sélectionné de texte.");
            return false;
        }
        document.execCommand("insertHTML", false, this.toTextFgColor(this.toData()));
    }
    //===============================================
    onUpdateTextFgColor(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GText2")) {
            this.addError("Vous n'êtes pas dans un effet texte couleur premier plan.");
            return false;
        }
        
        var lNode = this.m_node;
        var lColor = lNode.style.color.getHexFromRgb();;
        
        var lForm = GForm.Instance();
        lForm.clearMap();
        lForm.setCallback("editor", "update_text_fg_color_form");
        lForm.addLabelColor("m_color", "Couleur :", lColor);
        lForm.showForm();
        this.addLogs(lForm.getLogs());
        
        GEditor.Instance().saveRange();
    }
    //===============================================
    onUpdateTextFgColorForm(_obj, _data) {
        GEditor.Instance().restoreRange();
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GText2")) {
            this.addError("Vous n'êtes pas dans un effet texte couleur premier plan.");
            return false;
        }
        
        var lForm = GForm.Instance();
        lForm.readForm();
        
        var lColor = lForm.loadFromMap(0).m_value;
        
        var lNode = this.m_node;
        
        lNode.style.color = lColor;
    }
    //===============================================
    onDeleteTextFgColor(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GText2")) {
            this.addError("Vous n'êtes pas dans un effet texte couleur premier plan.");
            return false;
        }
        var lNode = this.m_node;
        var lText = lNode.innerHTML;
        lNode.replaceWith(lText);
    }
    //===============================================
    // edition
    //===============================================
    onKeydownEventEdition(_obj, _data) {
        var lEvent = _obj || window.event;
        var lKeyCode = lEvent.charCode || lEvent.keyCode;
        if(lKeyCode == 13) {
            document.execCommand("insertLineBreak")
            lEvent.preventDefault();
        }
    }
    //===============================================
    onPasteEventEdition(_obj, _data) {
        var lEvent = _obj || window.event;
        var lClipboardData = lEvent.clipboardData || window.clipboardData;
        // [info] : on récupère le texte pour vérifier si on a un texte ou une iamge
        var lData = lClipboardData.getData("text");
        // [info] : on vérifie si on a un texte
        if(lData != "") {
            if(this.isFilter()) {
                lEvent.preventDefault();
                document.execCommand("insertHTML", false, lData);
            }
        }
        // [info] : sinon on a une image
        else {
            lEvent.preventDefault();
            this.pasteImage(lEvent, this.pasteImageCB);
        }
    }
    //===============================================
    onOpenEditionTab(_obj, _data) {
        var lTab = document.getElementsByClassName("EditorTab")[2];
        this.onOpenEditorTab(lTab);
    }
    //===============================================
    // code
    //===============================================
    onOpenCodeTab(_obj, _data) {
        var lTab = document.getElementsByClassName("EditorTab")[3];
        this.onOpenEditorTab(lTab);
    }
    //===============================================
    // template/skill
    //===============================================
    onAddSkill(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GSkill1")) {
            this.addError("Vous êtes dans un effet compétence.");
            return false;
        }
        if(this.isLine()) {
            this.addError("Vous êtes sur une ligne.");
            return false;
        }

        document.execCommand("insertHTML", false, this.toSkill());
        return !this.hasErrors();
    }
    //===============================================
    onUpdateSkill(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GSkill1")) {
            this.addError("Vous n'êtes pas dans un effet compétence.");
            return false;
        }

        var lNode = this.m_node;
        var lIconId = lNode.firstElementChild;
        
        var lIcon = lIconId.getAttribute("class").split(" ")[2];
        
        var lFont = GFontAwesome.Instance();
        var lIndex = lFont.findFont(lIcon);

        var lSort = new GForm();
        lSort.addValue("Croissant");
        lSort.addValue("Décroissant");

        var lForm = GForm.Instance();
        lForm.clearMap();
        lForm.setCallback("editor", "update_skill_form");
        lForm.addLabelPicto("m_icon", "Icône :", lFont.toForm(), lIndex);
        lForm.addLabelCombo("m_sort", "Tri :", lSort.serialize(), 1);
        lForm.showForm();
        this.addLogs(lForm.getLogs());
        
        GEditor.Instance().saveRange();
    }
    //===============================================
    onUpdateSkillForm(_obj, _data) {
        GEditor.Instance().restoreRange();
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GSkill1")) {
            this.addError("Vous n'êtes pas dans un effet compétence.");
            return false;
        }
        if(!this.hasParent("GSection1")) {
            this.addError("Vous n'êtes pas dans un effet section.");
            return false;
        }
        
        var lForm = GForm.Instance();
        lForm.readForm();

        var lIcon = lForm.loadFromMap(0).m_value;
        var lSort = lForm.loadFromMap(1).m_index;
        
        lIcon = sprintf("Skill2 fa %s", lIcon);

        var lNode = this.m_node;
        var lNodes = lNode.getElementsByClassName("GSkill1");
        var lSize = lNodes.length;
        
        for(var i = 0; i < lNodes.length; i++) {
            var lNode = lNodes[i];
            var lIconId = lNode.firstElementChild;
            var lNumId = lNode.firstElementChild.nextElementSibling;
            
            var lPos = i + 1;
            if(lSort == "1") lPos = lSize - lPos + 1;
                
            var lNum = sprintf("%s/%s", lPos, lSize);
            
            lIconId.setAttribute("class", lIcon);
            lNumId.innerHTML = lNum;
        }
    }
    //===============================================
    onDeleteSkill(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GSkill1")) {
            this.addError("Vous n'êtes pas dans un effet compétence.");
            return false;
        }
        this.removeNode();
    }
    //===============================================
    // template/graduation
    //===============================================
    onAddGraduation(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GGraduation1")) {
            this.addError("Vous êtes dans un effet formation.");
            return false;
        }
        if(this.isLine()) {
            this.addError("Vous êtes sur une ligne.");
            return false;
        }

        document.execCommand("insertHTML", false, this.toGraduation());
        return !this.hasErrors();
    }
    //===============================================
    onUpdateGraduation(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GGraduation1")) {
            this.addError("Vous n'êtes pas dans un effet formation.");
            return false;
        }

        var lNode = this.m_node;
        var lIconId = lNode.firstElementChild;
        
        var lIcon = lIconId.getAttribute("class").split(" ")[2];
                
        var lFont = GFontAwesome.Instance();
        var lIndex = lFont.findFont(lIcon);

        var lForm = GForm.Instance();
        lForm.clearMap();
        lForm.setCallback("editor", "update_graduation_form");
        lForm.addLabelPicto("m_icon", "Icône :", lFont.toForm(), lIndex);
        lForm.showForm();
        this.addLogs(lForm.getLogs());
        
        GEditor.Instance().saveRange();
    }
    //===============================================
    onUpdateGraduationForm(_obj, _data) {
        GEditor.Instance().restoreRange();
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GGraduation1")) {
            this.addError("Vous n'êtes pas dans un effet formation.");
            return false;
        }
        
        var lForm = GForm.Instance();
        lForm.readForm();

        var lIcon = lForm.loadFromMap(0).m_value;
        
        var lNode = this.m_node;
        var lIconId = lNode.firstElementChild;
        
        lIcon = sprintf("Graduation2 fa %s", lIcon);
        
        lIconId.setAttribute("class", lIcon);
    }
    //===============================================
    onDeleteGraduation(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GGraduation1")) {
            this.addError("Vous n'êtes pas dans un effet formation.");
            return false;
        }
        this.removeNode();
    }
    //===============================================
    // template/link
    //===============================================
    onAddLink(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GLink1")) {
            this.addError("Vous êtes dans un effet lien.");
            return false;
        }
        if(this.isLine()) {
            this.addError("Vous êtes sur une ligne.");
            return false;
        }

        document.execCommand("insertHTML", false, this.toLink());
        return !this.hasErrors();
    }
    //===============================================
    onUpdateLink(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GLink1")) {
            this.addError("Vous n'êtes pas dans un effet lien.");
            return false;
        }

        var lNode = this.m_node;
        var lIconId = lNode.firstElementChild;
        var lLinkId = lNode.firstElementChild.nextElementSibling;
        
        var lIcon = lIconId.getAttribute("class").split(" ")[2];
        var lLink = lLinkId.getAttribute("href");
        var lTitle = lLinkId.innerHTML;

        var lFont = GFontAwesome.Instance();
        var lIndex = lFont.findFont(lIcon);

        var lForm = GForm.Instance();
        lForm.clearMap();
        lForm.setCallback("editor", "update_link_form");
        lForm.addLabelPicto("m_icon", "Icône :", lFont.toForm(), lIndex);
        lForm.addLabelEdit("m_link", "Lien :", lLink);
        lForm.addLabelEdit("m_title", "Titre :", lTitle);
        lForm.showForm();
        this.addLogs(lForm.getLogs());
        
        GEditor.Instance().saveRange();
    }
    //===============================================
    onUpdateLinkForm(_obj, _data) {
        GEditor.Instance().restoreRange();
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GLink1")) {
            this.addError("Vous n'êtes pas dans un effet lien.");
            return false;
        }
        
        var lForm = GForm.Instance();
        lForm.readForm();

        var lIcon = lForm.loadFromMap(0).m_value;
        var lLink = lForm.loadFromMap(1).m_value;
        var lTitle = lForm.loadFromMap(2).m_value;
        
        var lNode = this.m_node;
        var lIconId = lNode.firstElementChild;
        var lLinkId = lNode.firstElementChild.nextElementSibling;
        
        lIcon = sprintf("Link2 fa %s", lIcon);
        
        lIconId.setAttribute("class", lIcon);
        lLinkId.setAttribute("href", lLink);
        lLinkId.innerHTML = lTitle;
    }
    //===============================================
    onDeleteLink(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GLink1")) {
            this.addError("Vous n'êtes pas dans un effet lien.");
            return false;
        }
        this.removeNode();
    }
    //===============================================
    // template/line
    //===============================================
    onAddLine(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GLine1")) {
            this.addError("Vous êtes dans un effet ligne.");
            return false;
        }
        if(this.isLine()) {
            this.addError("Vous êtes sur une ligne.");
            return false;
        }

        document.execCommand("insertHTML", false, this.toLineBar());
        return !this.hasErrors();
    }
    //===============================================
    onUpdateLine(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GLine1")) {
            this.addError("Vous n'êtes pas dans un effet ligne.");
            return false;
        }

        var lNode = this.m_node;
        var lIconId = lNode.firstElementChild;
        var lLineId = lNode.firstElementChild.nextElementSibling;
        
        var lIcon = lIconId.getAttribute("class").split(" ")[2];
        var lLine = lLineId.getAttribute("href");
        var lTitle = lLinkId.innerHTML;

        var lFont = GFontAwesome.Instance();
        var lIndex = lFont.findFont(lIcon);

        var lForm = GForm.Instance();
        lForm.clearMap();
        lForm.setCallback("editor", "update_link_form");
        lForm.addLabelPicto("m_icon", "Icône :", lFont.toForm(), lIndex);
        lForm.addLabelEdit("m_link", "Lien :", lLink);
        lForm.addLabelEdit("m_title", "Titre :", lTitle);
        lForm.showForm();
        this.addLogs(lForm.getLogs());
        
        GEditor.Instance().saveRange();
    }
    //===============================================
    onUpdateLineForm(_obj, _data) {
        GEditor.Instance().restoreRange();
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GLine1")) {
            this.addError("Vous n'êtes pas dans un effet ligne.");
            return false;
        }
        
        var lForm = GForm.Instance();
        lForm.readForm();

        var lIcon = lForm.loadFromMap(0).m_value;
        var lLink = lForm.loadFromMap(1).m_value;
        var lTitle = lForm.loadFromMap(2).m_value;
        
        var lNode = this.m_node;
        var lIconId = lNode.firstElementChild;
        var lLinkId = lNode.firstElementChild.nextElementSibling;
        
        lIcon = sprintf("Link2 fa %s", lIcon);
        
        lIconId.setAttribute("class", lIcon);
        lLinkId.setAttribute("href", lLink);
        lLinkId.innerHTML = lTitle;
    }
    //===============================================
    onDeleteLine(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GLine1")) {
            this.addError("Vous n'êtes pas dans un effet ligne.");
            return false;
        }
        this.removeNode();
    }
    //===============================================
    // template/parallax
    //===============================================
    onAddParallax(_obj, _data) {
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

        document.execCommand("insertHTML", false, this.toParallax());
        return !this.hasErrors();
    }
    //===============================================
    onUpdateParallax(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GParallax1")) {
            this.addError("Vous n'êtes pas dans un effet parallax.");
            return false;
        }

        var lNode = this.m_node;
        var lImgId = lNode.firstElementChild;
        var lBodyId = lNode.firstElementChild.nextElementSibling;
        var lTitleId = lNode.firstElementChild.firstElementChild.firstElementChild;
        var lTitle = lTitleId.innerHTML;
        var lBgImg = lImgId.style.backgroundImage.getPathFromUrl();
        var lBgColor = lBodyId.style.backgroundColor.getHexFromRgb();

        var lImage = GImage.Instance();
        var lIndex = lImage.findImg(lBgImg);

        var lForm = GForm.Instance();
        lForm.clearMap();
        lForm.setCallback("editor", "update_parallax_form");
        lForm.addLabelEdit("m_title", "Titre :", lTitle);
        lForm.addLabelImage("m_bgImg", "Image :", lImage.toForm(), lIndex);
        lForm.addLabelColor("m_bgColor", "Couleur :", lBgColor);
        lForm.showForm();
        this.addLogs(lForm.getLogs());
        
        GEditor.Instance().saveRange();
    }
    //===============================================
    onUpdateParallaxForm(_obj, _data) {
        GEditor.Instance().restoreRange();
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

        var lTitle = lForm.loadFromMap(0).m_value;
        var lBgImg = lImage.loadFromMap(lForm.loadFromMap(1).m_index).m_path;
        var lBgColor = lForm.loadFromMap(2).m_value;
        
        var lNode = this.m_node;
        var lImgId = lNode.firstElementChild;
        var lBodyId = lNode.firstElementChild.nextElementSibling;
        var lTitleId = lNode.firstElementChild.firstElementChild.firstElementChild;
        lTitleId.innerHTML = lTitle;
        lImgId.style.backgroundImage = sprintf("url('%s')", lBgImg);
        lBodyId.style.backgroundColor = lBgColor;
    }
    //===============================================
    onDeleteParallax(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GParallax1")) {
            this.addError("Vous n'êtes pas dans un effet parallax.");
            return false;
        }
        this.removeNode();
    }
    //===============================================
    // template/bullet
    //===============================================
    onAddBullet(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GBullet1")) {
            this.addError("Vous êtes dans un effet puce.");
            return false;
        }
        if(this.isData()) {
            this.addError("Vous avez sélectionné de texte.");
            return false;
        }

        var lText = sprintf("Ajouter un texte...");
        if(this.selectLine()) lText = this.toLine();
        
        document.execCommand("insertHTML", false, this.toBullet(lText));
        return !this.hasErrors();
    }
    //===============================================
    onUpdateBullet(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GBullet1")) {
            this.addError("Vous n'êtes pas dans un effet puce.");
            return false;
        }

        var lNode = this.m_node;
        var lIconId = lNode.firstElementChild;
        
        var lIcon = lIconId.getAttribute("class").split(" ")[2];

        var lFont = GFontAwesome.Instance();
        var lIndex = lFont.findFont(lIcon);

        var lForm = GForm.Instance();
        lForm.clearMap();
        lForm.setCallback("editor", "update_bullet_form");
        lForm.addLabelPicto("m_icon", "Icône :", lFont.toForm(), lIndex);
        lForm.showForm();
        this.addLogs(lForm.getLogs());
        
        GEditor.Instance().saveRange();
    }
    //===============================================
    onUpdateBulletForm(_obj, _data) {
        GEditor.Instance().restoreRange();
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GBullet1")) {
            this.addError("Vous n'êtes pas dans un effet puce.");
            return false;
        }
        
        var lForm = GForm.Instance();
        lForm.readForm();

        var lIcon = lForm.loadFromMap(0).m_value;
        
        lIcon = sprintf("Bullet2 fa %s", lIcon);
        
        var lNodes = this.toNodeSiblings("GBullet1");
        
        for(var i = 0; i < lNodes.length; i++) {
            var lNode = lNodes[i];
            var lIconId = lNode.firstElementChild;
            
            lIconId.setAttribute("class", lIcon);
        }
    }
    //===============================================
    onDeleteBullet(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GBullet1")) {
            this.addError("Vous n'êtes pas dans un effet puce.");
            return false;
        }
        var lNode = this.m_node;
        var lText = sprintf("%s\n", this.toLine());
        lNode.replaceWith(lText);
    }
    //===============================================
    // template/section
    //===============================================
    onAddSection(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GSection1")) {
            this.addError("Vous êtes dans un effet section.");
            return false;
        }
        if(this.isLine()) {
            this.addError("Vous êtes sur une ligne.");
            return false;
        }

        document.execCommand("insertHTML", false, this.toSection());
        return !this.hasErrors();
    }
    //===============================================
    onUpdateSection(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GSection1")) {
            this.addError("Vous n'êtes pas dans un effet section.");
            return false;
        }

        var lNode = this.m_node;
        var lTitleId = lNode.firstElementChild.firstElementChild.firstElementChild.firstElementChild;

        var lTitle = lTitleId.innerHTML;        
        var lId = lTitleId.id;
        
        var lForm = GForm.Instance();
        lForm.clearMap();
        lForm.setCallback("editor", "update_section_form");
        lForm.setCallbackEdit("editor", "update_section_form_edit");
        lForm.addLabelEdit("m_title", "Titre :", lTitle);
        lForm.addLabelText("m_id", "Identifiant :", lId);
        lForm.showForm();
        this.addLogs(lForm.getLogs());
        
        GEditor.Instance().saveRange();
    }
    //===============================================
    onUpdateSectionForm(_obj, _data) {
        GEditor.Instance().restoreRange();
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GSection1")) {
            this.addError("Vous n'êtes pas dans un effet section.");
            return false;
        }

        var lForm = GForm.Instance();
        lForm.readForm();

        var lTitle = lForm.loadFromMap(0).m_value;
        var lId = lTitle.getNormalize();

        var lNode = this.m_node;
        var lTitleId = lNode.firstElementChild.firstElementChild.firstElementChild.firstElementChild;

        lTitleId.innerHTML = lTitle;
        lTitleId.id = lId;
    }
    //===============================================
    onUpdateSectionFormEdit(_obj, _data) {
        var lFormData = new GForm();
        lFormData.deserialize(_data);
        
        var lForm = GForm.Instance();
        lForm.readForm();
        
        if(lFormData.m_position == 0) {
            var lTitle = lFormData.m_value;
            var lId = lTitle.getNormalize();

            lForm.loadFromMap(1);
            lForm.m_value = lId;
            lForm.loadToMap(1);
        }
        
        lForm.updateForm();
    }
    //===============================================
    onDeleteSection(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GSection1")) {
            this.addError("Vous n'êtes pas dans un effet section.");
            return false;
        }
        this.removeNode();
    }
    //===============================================
    // template/summary_main
    //===============================================
    onAddSummaryMain(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GSummary1")) {
            this.addError("Vous êtes dans un effet sommaire principal.");
            return false;
        }
        if(this.isLine()) {
            this.addError("Vous êtes sur une ligne.");
            return false;
        }

        document.execCommand("insertHTML", false, this.toSummaryMain());
        return !this.hasErrors();
    }
    //===============================================
    onUpdateSummaryMain(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GSummary1")) {
            this.addError("Vous n'êtes pas dans un effet sommaire principal.");
            return false;
        }

        var lNodes = document.getElementsByClassName("GSection1");
        
        var lHtml = "";
        lHtml += sprintf("<div class='GSummary1'>\n");

        for(var i = 0; i < lNodes.length; i++) {
            var lNode = lNodes[i];
            var lTitleId = lNode.firstElementChild.firstElementChild.firstElementChild.firstElementChild;

            var lTitle = lTitleId.innerHTML;
            var lId = lTitleId.id;

            lHtml += sprintf("<div class='Summary1'>\n");
            lHtml += sprintf("<i class='Summary2 fa fa-book'></i>\n");
            lHtml += sprintf("<a class='Summary3' href='#%s'>%s</a>\n", lId, lTitle);
            lHtml += sprintf("</div>\n");
        }
        
        lHtml += sprintf("</div>\n");
        
        var lNode = this.m_node;
        lNode.innerHTML = lHtml;
    }
    //===============================================
    onDeleteSummaryMain(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GSummary1")) {
            this.addError("Vous n'êtes pas dans un effet sommaire principal.");
            return false;
        }
        this.removeNode();
    }
    //===============================================
    // template/text_image_left
    //===============================================
    onAddTextImageLeft(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GText1")) {
            this.addError("Vous êtes dans un effet texte image gauche.");
            return false;
        }
        if(this.isLine()) {
            this.addError("Vous êtes sur une ligne.");
            return false;
        }

        document.execCommand("insertHTML", false, this.toTextImageLeft());
        return !this.hasErrors();
    }
    //===============================================
    onUpdateTextImageLeft(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GParallax1")) {
            this.addError("Vous n'êtes pas dans un effet texte image gauche.");
            return false;
        }

        var lNode = this.m_node;
        var lImgId = lNode.firstElementChild;
        var lBodyId = lNode.firstElementChild.nextElementSibling;
        var lTitleId = lNode.firstElementChild.firstElementChild.firstElementChild;
        var lTitle = lTitleId.innerHTML;
        var lBgImg = lImgId.style.backgroundImage.getPathFromUrl();
        var lBgColor = lBodyId.style.backgroundColor.getHexFromRgb();

        var lImage = GImage.Instance();
        var lIndex = lImage.findImg(lBgImg);

        var lForm = GForm.Instance();
        lForm.clearMap();
        lForm.setCallback("editor", "update_parallax_form");
        lForm.addLabelEdit("m_title", "Titre :", lTitle);
        lForm.addLabelImage("m_bgImg", "Image :", lImage.toForm(), lIndex);
        lForm.addLabelColor("m_bgColor", "Couleur :", lBgColor);
        lForm.showForm();
        this.addLogs(lForm.getLogs());
        
        GEditor.Instance().saveRange();
    }
    //===============================================
    onUpdateTextImageLeftForm(_obj, _data) {
        GEditor.Instance().restoreRange();
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

        var lTitle = lForm.loadFromMap(0).m_value;
        var lBgImg = lImage.loadFromMap(lForm.loadFromMap(1).m_index).m_path;
        var lBgColor = lForm.loadFromMap(2).m_value;
        
        var lNode = this.m_node;
        var lImgId = lNode.firstElementChild;
        var lBodyId = lNode.firstElementChild.nextElementSibling;
        var lTitleId = lNode.firstElementChild.firstElementChild.firstElementChild;
        lTitleId.innerHTML = lTitle;
        lImgId.style.backgroundImage = sprintf("url('%s')", lBgImg);
        lBodyId.style.backgroundColor = lBgColor;
    }
    //===============================================
    onDeleteTextImageLeft(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GText1")) {
            this.addError("Vous n'êtes pas dans un effet parallax.");
            return false;
        }
        this.removeNode();
    }
    //===============================================
}
//===============================================
GEditor.Instance().init();
//===============================================
