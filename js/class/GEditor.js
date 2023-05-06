//===============================================
class GEditor extends GObject {
    //===============================================
    static m_instance = null;
    //===============================================
    constructor() {
        super();
        this.m_node = null;
        this.m_range = null;
        this.m_copy = null;
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
                if(this.m_node.nodeType != Node.TEXT_NODE) {
                if(this.m_node.matches("." + _className)) return true;
                if(this.m_node.matches(".GEndEditor")) return false;
                if(this.m_node.matches(".HtmlPage")) return false;
            }
            this.m_node = this.m_node.parentNode;
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
    isNode(_className) {
        if(!this.m_node) return false;
        if(!this.m_node.matches("." + _className)) return false;
        return true;
    }
    //===============================================
    countNode(_className) {
        var lNode = this.m_node.parentNode;
        var lNodes = lNode.getElementsByClassName(_className);
        return lNodes.length;
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
    toLines() {
        var lSelection = document.getSelection();
        return lSelection.toString();
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
    copyNode() {
        var lObj = GEditor.Instance();
        lObj.m_copy = this.m_node;
    }
    //===============================================
    restoreCopy() {
        var lObj = GEditor.Instance();
        this.m_node = lObj.m_copy;
        if(!this.m_node) return false;
        return true;
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
    toText3Group() {
        var lHtml = "";
        lHtml += sprintf("<div class='GText3 Text4'>\n");
        lHtml += this.toText3Simple();
        lHtml += sprintf("</div>\n");
        return lHtml;
    }
    //===============================================
    toText3Simple() {
        var lHtml = "";
        lHtml += sprintf("<a href='#'>\n");
        lHtml += sprintf("<div class='GText4 Text5'>\n");
        lHtml += sprintf("<i class='Text6 fa fa-file-pdf-o'></i>\n");
        lHtml += sprintf("<div class='Text7'>CV<br>Simplifié</div>\n");
        lHtml += sprintf("</div>\n");
        lHtml += sprintf("</a>\n");
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
    toAccess1() {
        var lHtml = "";
        lHtml += sprintf("<div class='GAccess1 Access1'>\n");
        lHtml += this.toAccess2();
        lHtml += sprintf("</div>\n");
        return lHtml;
    }
    //===============================================
    toAccess2() {
        var lHtml = "";
        lHtml += sprintf("<a class='GAccess2 Access2' href='/home'>Accueil</a>\n");
        return lHtml;
    }
    //===============================================
    toAccess3() {
        var lHtml = "";
        lHtml += sprintf("<i class='Access3 fa fa-chevron-right'></i>\n");
        return lHtml;
    }
    //===============================================
    toPdfFile() {
        return "/data/file/cv/KESSE_Gerard_CV_Simplifie.pdf";
    }
    //===============================================
    toPdf1() {
        var lFile = this.toPdfFile();
        var lHtml = "";
        lHtml += sprintf("<div class='GPdf1 Pdf1'>\n");
        lHtml += sprintf("<object data='%s#navpanes=0' class='Pdf2' type='application/pdf'>\n", lFile);
        lHtml += sprintf("</object>\n");
        lHtml += sprintf("</div>\n");
        return lHtml;
    }
    //===============================================
    toTuto1() {
        var lHtml = "";
        lHtml += sprintf("<div class='GTuto1 Tuto1'>\n");
        lHtml += this.toTuto2();
        lHtml += sprintf("</div>\n");
        return lHtml;
    }
    //===============================================
    toTuto2() {
        var lHtml = "";
        lHtml += sprintf("<a class='GTuto2 Tuto2' href='#'>\n");
        lHtml += sprintf("<div class='Tuto3'><i class='Tuto6 fa fa-book'></i></div>\n");
        lHtml += sprintf("<div class='Tuto4'><div class='Tuto7'>C++</div></div>\n");
        lHtml += sprintf("<div class='Tuto5'><div class='Tuto8'>Programmez en<br>C++</div></div>\n");
        lHtml += sprintf("</a>\n");
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
        // text/fg_color
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
        // text/icon_bottom_horizontal
        //===============================================
        else if(_method == "add_text_3") {
            this.onAddText3(_obj, _data);
        }
        else if(_method == "insert_text_3_left") {
            this.onInsertText3Left(_obj, _data);
        }
        else if(_method == "insert_text_3_right") {
            this.onInsertText3Right(_obj, _data);
        }
        else if(_method == "update_text_3") {
            this.onUpdateText3(_obj, _data);
        }
        else if(_method == "update_text_3_form") {
            this.onUpdateText3Form(_obj, _data);
        }
        else if(_method == "delete_text_3_simple") {
            this.onDeleteText3Simple(_obj, _data);
        }
        else if(_method == "delete_text_3_group") {
            this.onDeleteText3Group(_obj, _data);
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
        // edition/fichier/pdf
        //===============================================
        else if(_method == "add_pdf_1") {
            this.onAddPdf1(_obj, _data);
        }
        else if(_method == "update_pdf_1") {
            this.onUpdatePdf1(_obj, _data);
        }
        else if(_method == "update_pdf_1_form") {
            this.onUpdatePdf1Form(_obj, _data);
        }
        else if(_method == "delete_pdf_1") {
            this.onDeletePdf1(_obj, _data);
        }
        //===============================================
        // edition/tutoriels
        //===============================================
        else if(_method == "add_tuto_1") {
            this.onAddTuto1(_obj, _data);
        }
        else if(_method == "insert_tuto_1_left") {
            this.onInsertTuto1Left(_obj, _data);
        }
        else if(_method == "insert_tuto_1_right") {
            this.onInsertTuto1Right(_obj, _data);
        }
        else if(_method == "update_tuto_1") {
            this.onUpdateTuto1(_obj, _data);
        }
        else if(_method == "update_tuto_1_form") {
            this.onUpdateTuto1Form(_obj, _data);
        }
        else if(_method == "delete_tuto_1_simple") {
            this.onDeleteTuto1Simple(_obj, _data);
        }
        else if(_method == "delete_tuto_1_group") {
            this.onDeleteTuto1Group(_obj, _data);
        }
        //===============================================
        // edition/template/barre_acces_rapide
        //===============================================
        else if(_method == "add_access_1") {
            this.onAddAcess1(_obj, _data);
        }
        else if(_method == "insert_access_1_left") {
            this.onInsertAcess1Left(_obj, _data);
        }
        else if(_method == "insert_access_1_right") {
            this.onInsertAcess1Right(_obj, _data);
        }
        else if(_method == "copy_access_1") {
            this.onCopyAccess1(_obj, _data);
        }
        else if(_method == "paste_access_1") {
            this.onPasteAccess1(_obj, _data);
        }
        else if(_method == "update_access_1") {
            this.onUpdateAcess1(_obj, _data);
        }
        else if(_method == "update_access_1_form") {
            this.onUpdateAcess1Form(_obj, _data);
        }
        else if(_method == "delete_access_1_simple") {
            this.onDeleteAcess1Simple(_obj, _data);
        }
        else if(_method == "delete_access_1_group") {
            this.onDeleteAcess1Group(_obj, _data);
        }
        //===============================================
        // template/skill
        //===============================================
        else if(_method == "add_skill") {
            this.onAddSkill(_obj, _data);
        }
        else if(_method == "copy_skill") {
            this.onCopySkill(_obj, _data);
        }
        else if(_method == "paste_skill") {
            this.onPasteSkill(_obj, _data);
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
        else if(_method == "copy_graduation") {
            this.onCopyGraduation(_obj, _data);
        }
        else if(_method == "paste_graduation") {
            this.onPasteGraduation(_obj, _data);
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
        else if(_method == "add_bullet_group") {
            this.onAddBulletGroup(_obj, _data);
        }
        else if(_method == "insert_bullet_before") {
            this.onInsertBulletBefore(_obj, _data);
        }
        else if(_method == "insert_bullet_after") {
            this.onInsertBulletAfter(_obj, _data);
        }
        else if(_method == "update_bullet") {
            this.onUpdateBullet(_obj, _data);
        }
        else if(_method == "update_bullet_form") {
            this.onUpdateBulletForm(_obj, _data);
        }
        else if(_method == "cancel_bullet") {
            this.onCancelBullet(_obj, _data);
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
        else if(_method == "copy_section") {
            this.onCopySection(_obj, _data);
        }
        else if(_method == "paste_section") {
            this.onPasteSection(_obj, _data);
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
        var lColor = lNode.style.color.getHexFromRgb();
        
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
        
        var lColor = lForm.loadFromMap(1).m_value;
        
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
    // text/icon_bottom_horizontal
    //===============================================
    onAddText3(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GText3")) {
            this.addError("Vous êtes dans un effet texte icône bas horizontale.");
            return false;
        }
        if(this.isLine()) {
            this.addError("Vous êtes sur une ligne.");
            return false;
        }
        document.execCommand("insertHTML", false, this.toText3Group());
    }
    //===============================================
    onInsertText3Left(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GText4")) {
            this.addError("Vous n'êtes pas dans un effet texte icône bas horizontale.");
            return false;
        }
        
        var lNode = this.m_node;
        var lNew = this.createNode(this.toText3Simple());
        lNode.appendBefore(lNew);
    }
    //===============================================
    onInsertText3Right(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GText4")) {
            this.addError("Vous n'êtes pas dans un effet texte icône bas horizontale.");
            return false;
        }
        
        var lNode = this.m_node;
        var lNew = this.createNode(this.toText3Simple());
        lNode.appendAfter(lNew);
    }
    //===============================================
    onUpdateText3(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GText4")) {
            this.addError("Vous n'êtes pas dans un effet texte icône bas horizontale.");
            return false;
        }
        
        var lNode = this.m_node;
        var lLinkId = lNode.parentNode;
        var lIconId = lNode.firstElementChild;
        
        var lLink = lLinkId.getAttribute("href");
        var lIcon = lIconId.getAttribute("class").split(" ")[2];
                
        var lFont = GFontAwesome.Instance();
        var lIndex = lFont.findFont(lIcon);
        
        var lForm = GForm.Instance();
        lForm.clearMap();
        lForm.setCallback("editor", "update_text_3_form");
        lForm.addLabelPicto("m_icon", "Icône :", lFont.toForm(), lIndex);
        lForm.addLabelEdit("m_link", "Lien :", lLink);
        lForm.showForm();
        this.addLogs(lForm.getLogs());
        
        GEditor.Instance().saveRange();
    }
    //===============================================
    onUpdateText3Form(_obj, _data) {
        GEditor.Instance().restoreRange();
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GText4")) {
            this.addError("Vous n'êtes pas dans un effet texte icône bas horizontale.");
            return false;
        }
        
        var lForm = GForm.Instance();
        lForm.readForm();
        
        var lIcon = lForm.loadFromMap(1).m_value;
        var lLink = lForm.loadFromMap(2).m_value;
        
        lIcon = sprintf("Text6 fa %s", lIcon);
        
        var lNode = this.m_node;
        var lLinkId = lNode.parentNode;
        var lIconId = lNode.firstElementChild;
        
        lLinkId.setAttribute("href", lLink);
        lIconId.setAttribute("class", lIcon);
    }
    //===============================================
    onDeleteText3Simple(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GText3")) {
            this.addError("Vous n'êtes pas dans un effet texte icône bas horizontale groupe.");
            return false;
        }
        if(!this.hasParent("GText4")) {
            this.addError("Vous n'êtes pas dans un effet texte icône bas horizontale simple.");
            return false;
        }
        if(this.countNode("GText4") <= 1) {
            this.addError("Vous voulez supprimer le parent.");
            return false;
        }
        this.removeNode();
    }
    //===============================================
    onDeleteText3Group(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GText3")) {
            this.addError("Vous n'êtes pas dans un effet texte icône bas horizontale groupe.");
            return false;
        }
        this.removeNode();
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
    // edition/fichier/pdf
    //===============================================
    onAddPdf1(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GPdf1")) {
            this.addError("Vous êtes dans un effet pdf.");
            return false;
        }
        if(this.isLine()) {
            this.addError("Vous êtes sur une ligne.");
            return false;
        }

        document.execCommand("insertHTML", false, this.toPdf1());
    }
    //===============================================
    onUpdatePdf1(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GPdf1")) {
            this.addError("Vous n'êtes pas dans un effet pdf.");
            return false;
        }

        var lNode = this.m_node;
        var lObject = lNode.firstElementChild;
        
        var lFilename = lObject.getAttribute("data").split("#")[0];
        
        var lFile = GFile.Instance();
        var lIndex = lFile.findObj(lFilename);
        
        var lForm = GForm.Instance();
        lForm.clearMap();
        lForm.setCallback("editor", "update_pdf_1_form");
        lForm.addLabelTree("m_filename", "Fichier :", lFile.toForm(), lIndex);
        lForm.showForm();
        this.addLogs(lForm.getLogs());
        
        GEditor.Instance().saveRange();
    }
    //===============================================
    onUpdatePdf1Form(_obj, _data) {
        GEditor.Instance().restoreRange();
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GPdf1")) {
            this.addError("Vous n'êtes pas dans un effet pdf.");
            return false;
        }
        
        var lFile = GFile.Instance();
        var lForm = GForm.Instance();
        lForm.readForm();
        
        var lFilenameI = lForm.loadFromMap(1).m_index;
        var lFilename = lFile.loadFromMap(lFilenameI).m_path;
        var lMimeType = lFile.loadFromMap(lFilenameI).m_mimeType;
        
        if(lMimeType != "application/pdf") {
            this.addError("Le fichier n'est pas un pdf.");
            return false;
        }
        
        lFilename = sprintf("%s#navpanes=0", lFilename);
        
        var lNode = this.m_node;
        var lObject = lNode.firstElementChild;

        lObject.setAttribute("data", lFilename);
    }
    //===============================================
    onDeletePdf1(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GPdf1")) {
            this.addError("Vous n'êtes pas dans un effet pdf.");
            return false;
        }
        
        this.removeNode();
    }
    //===============================================
    // edition/tutoriels
    //===============================================
    onAddTuto1(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GTuto1")) {
            this.addError("Vous êtes dans un effet tutoriel.");
            return false;
        }
        if(this.isLine()) {
            this.addError("Vous êtes sur une ligne.");
            return false;
        }
        
        document.execCommand("insertHTML", false, this.toTuto1());
    }
    //===============================================
    onInsertTuto1Left(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GTuto2")) {
            this.addError("Vous n'êtes pas dans un effet tutoriel.");
            return false;
        }
        var lNode = this.m_node;
        var lNew = this.createNode(this.toTuto2());
        lNode.appendBefore(lNew);
    }
    //===============================================
    onInsertTuto1Right(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GTuto2")) {
            this.addError("Vous n'êtes pas dans un effet tutoriel.");
            return false;
        }
        var lNode = this.m_node;
        var lNew = this.createNode(this.toTuto2());
        lNode.appendAfter(lNew);
    }
    //===============================================
    onDeleteTuto1Simple(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GTuto2")) {
            this.addError("Vous n'êtes pas dans un effet tutoriel.");
            return false;
        }
        if(this.countNode("GTuto2") <= 1) {
            this.addError("Vous voulez supprimer le parent.");
            return false;
        }
        this.removeNode();
    }
    //===============================================
    onUpdateTuto1(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GTuto2")) {
            this.addError("Vous n'êtes pas dans un effet tutoriel.");
            return false;
        }

        var lFont = GFontAwesome.Instance();

        var lNode = this.m_node;
        var lLinkId = lNode;
        var lIconId = lNode.firstElementChild.firstElementChild;
        
        var lLink = lLinkId.getAttribute("href");
        var lIcon = lIconId.getAttribute("class").split(" ")[2];
        
        var lIconI = lFont.findFont(lIcon);
        
        var lForm = GForm.Instance();
        lForm.clearMap();
        lForm.setCallback("editor", "update_tuto_1_form");
        lForm.addLabelPicto("m_icon", "Icône :", lFont.toForm(), lIconI);
        lForm.addLabelEdit("m_link", "Lien :", lLink);
        lForm.showForm();
        this.addLogs(lForm.getLogs());
        
        GEditor.Instance().saveRange();
    }
    //===============================================
    onUpdateTuto1Form(_obj, _data) {
        GEditor.Instance().restoreRange();
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GTuto2")) {
            this.addError("Vous n'êtes pas dans un effet tutoriel.");
            return false;
        }

        var lForm = GForm.Instance();
        lForm.readForm();
        
        var lIcon = lForm.loadFromMap(1).m_value;
        var lLink = lForm.loadFromMap(2).m_value;
        
        lIcon = sprintf("Tuto6 fa %s", lIcon);
        
        var lNode = this.m_node;
        var lLinkId = lNode;
        var lIconId = lNode.firstElementChild.firstElementChild;
        
        lLinkId.setAttribute("href", lLink);
        lIconId.setAttribute("class", lIcon);
    }
    //===============================================
    onDeleteTuto1Group(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GTuto1")) {
            this.addError("Vous n'êtes pas dans un effet tutoriel.");
            return false;
        }
        this.removeNode();
    }
    //===============================================
    // template/barre_acces_rapide
    //===============================================
    onAddAcess1(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GAccess1")) {
            this.addError("Vous êtes dans un effet barre d'accès rapide.");
            return false;
        }
        if(this.isLine()) {
            this.addError("Vous êtes sur une ligne.");
            return false;
        }
        
        document.execCommand("insertHTML", false, this.toAccess1());
    }
    //===============================================
    onInsertAcess1Left(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GAccess2")) {
            this.addError("Vous n'êtes pas dans un effet barre d'accès rapide.");
            return false;
        }
        
        var lNode = this.m_node;
        var lNewLink = this.createNode(this.toAccess2());
        var lNewChevron = this.createNode(this.toAccess3());
        lNode.appendBefore(lNewLink);
        lNode.appendBefore(lNewChevron);
    }
    //===============================================
    onInsertAcess1Right(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GAccess2")) {
            this.addError("Vous n'êtes pas dans un effet barre d'accès rapide.");
            return false;
        }
        
        var lNode = this.m_node;
        var lNewLink = this.createNode(this.toAccess2());
        var lNewChevron = this.createNode(this.toAccess3());
        lNode.appendAfter(lNewLink);
        lNode.appendAfter(lNewChevron);
    }
    //===============================================
    onCopyAccess1(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GAccess1")) {
            this.addError("Vous n'êtes pas dans un effet barre d'accès rapide.");
            return false;
        }
        
        this.copyNode();
    }
    //===============================================
    onPasteAccess1(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GAccess1")) {
            this.addError("Vous n'êtes pas dans un effet barre d'accès rapide.");
            return false;
        }
        if(this.isLine()) {
            this.addError("Vous êtes sur une ligne.");
            return false;
        }
        if(!this.restoreCopy()) {
            this.addError("Aucun noeud n'a été copié.");
            return false;
        }
        if(!this.isNode("GAccess1")) {
            this.addError("Le noeud copié n'est pas un effet barre d'accès rapide.");
            return false;
        }

        var lNode = this.m_node;
        document.execCommand("insertHTML", false, lNode.outerHTML);
    }
    //===============================================
    onUpdateAcess1(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GAccess2")) {
            this.addError("Vous n'êtes pas dans un effet barre d'accès rapide.");
            return false;
        }
        
        var lNode = this.m_node;
        
        var lLink = lNode.getAttribute("href");
        var lText = lNode.innerHTML;
        
        var lForm = GForm.Instance();
        lForm.clearMap();
        lForm.setCallback("editor", "update_access_1_form");
        lForm.addLabelEdit("m_text", "Texte :", lText);
        lForm.addLabelEdit("m_link", "Lien :", lLink);
        lForm.showForm();
        this.addLogs(lForm.getLogs());
        
        GEditor.Instance().saveRange();
    }
    //===============================================
    onUpdateAcess1Form(_obj, _data) {
        GEditor.Instance().restoreRange();
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GAccess2")) {
            this.addError("Vous n'êtes pas dans un effet barre d'accès rapide.");
            return false;
        }
        
        var lForm = GForm.Instance();
        lForm.readForm();
        
        var lText = lForm.loadFromMap(1).m_value;
        var lLink = lForm.loadFromMap(2).m_value;
                
        var lNode = this.m_node;
        
        lNode.setAttribute("href", lLink);
        lNode.innerHTML = lText;
    }
    //===============================================
    onDeleteAcess1Simple(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GAccess2")) {
            this.addError("Vous n'êtes pas dans un effet barre d'accès rapide.");
            return false;
        }
        
        var lNode = this.m_node;
        var lChevron = lNode.previousElementSibling;
        
        if(!lChevron) {
            this.addError("Vous voulez supprimer le parent.");
            return false;
        }
        
        lChevron.remove();
        lNode.remove();
    }
    //===============================================
    onDeleteAcess1Group(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GAccess1")) {
            this.addError("Vous n'êtes pas dans un effet barre d'accès rapide.");
            return false;
        }
        this.removeNode();
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
    onCopySkill(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GSkill1")) {
            this.addError("Vous n'êtes pas dans un effet compétence.");
            return false;
        }
        
        this.copyNode();
        return !this.hasErrors();
    }
    //===============================================
    onPasteSkill(_obj, _data) {
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
        if(!this.restoreCopy()) {
            this.addError("Aucun noeud n'a été copié.");
            return false;
        }
        if(!this.isNode("GSkill1")) {
            this.addError("Le noeud copié n'est pas un effet compétence.");
            return false;
        }

        var lNode = this.m_node;
        document.execCommand("insertHTML", false, lNode.outerHTML);
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

        var lIcon = lForm.loadFromMap(1).m_value;
        var lSort = lForm.loadFromMap(2).m_index;
        
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
    onCopyGraduation(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GGraduation1")) {
            this.addError("Vous n'êtes pas dans un effet formation.");
            return false;
        }
        
        this.copyNode();
        return !this.hasErrors();
    }
    //===============================================
    onPasteGraduation(_obj, _data) {
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
        if(!this.restoreCopy()) {
            this.addError("Aucun noeud n'a été copié.");
            return false;
        }
        if(!this.isNode("GGraduation1")) {
            this.addError("Le noeud copié n'est pas un effet formation.");
            return false;
        }

        var lNode = this.m_node;
        document.execCommand("insertHTML", false, lNode.outerHTML);
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

        var lIcon = lForm.loadFromMap(1).m_value;
        
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

        var lIcon = lForm.loadFromMap(1).m_value;
        var lLink = lForm.loadFromMap(2).m_value;
        var lTitle = lForm.loadFromMap(3).m_value;
        
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

        var lIcon = lForm.loadFromMap(1).m_value;
        var lLink = lForm.loadFromMap(2).m_value;
        var lTitle = lForm.loadFromMap(3).m_value;
        
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

        var lTitle = lForm.loadFromMap(1).m_value;
        var lBgImgI = lForm.loadFromMap(2).m_index;
        var lBgColor = lForm.loadFromMap(3).m_value;
        
        var lBgImg = lImage.loadFromMap(lBgImgI).m_path;

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

        var lText = "Ajouter un texte...";
        if(this.selectLine()) lText = this.toLine();
        
        document.execCommand("insertHTML", false, this.toBullet(lText));
        return !this.hasErrors();
    }
    //===============================================
    onAddBulletGroup(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GBullet1")) {
            this.addError("Vous êtes dans un effet puce.");
            return false;
        }
        if(!this.isData()) {
            this.addError("Vous n'avez pas sélectionné de texte.");
            return false;
        }

        var lText = this.toLines();
        var lLines = lText.split("\n");
        
        var lHtml = "";

        for(var i = 0; i < lLines.length; i++) {
            var lLine = lLines[i];
            lHtml += this.toBullet(lLine);
        }
        
        document.execCommand("insertHTML", false, lHtml);
        return !this.hasErrors();
    }
    //===============================================
    onInsertBulletBefore(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GBullet1")) {
            this.addError("Vous n'êtes pas dans un effet puce.");
            return false;
        }

        var lNode = this.m_node;
        var lText = "Ajouter un texte...";
        var lNew = this.createNode(this.toBullet(lText));
        lNode.appendBefore(lNew);
        return !this.hasErrors();
    }
    //===============================================
    onInsertBulletAfter(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GBullet1")) {
            this.addError("Vous n'êtes pas dans un effet puce.");
            return false;
        }

        var lNode = this.m_node;
        var lText = "Ajouter un texte...";
        var lNew = this.createNode(this.toBullet(lText));
        lNode.appendAfter(lNew);
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

        var lIcon = lForm.loadFromMap(1).m_value;
        
        lIcon = sprintf("Bullet2 fa %s", lIcon);
        
        var lNodes = this.toNodeSiblings("GBullet1");
        
        for(var i = 0; i < lNodes.length; i++) {
            var lNode = lNodes[i];
            var lIconId = lNode.firstElementChild;
            
            lIconId.setAttribute("class", lIcon);
        }
    }
    //===============================================
    onCancelBullet(_obj, _data) {
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
    onDeleteBullet(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GBullet1")) {
            this.addError("Vous n'êtes pas dans un effet puce.");
            return false;
        }
        this.removeNode();
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
    onCopySection(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GSection1")) {
            this.addError("Vous n'êtes pas dans un effet section.");
            return false;
        }
        
        this.copyNode();
        return !this.hasErrors();
    }
    //===============================================
    onPasteSection(_obj, _data) {
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
        if(!this.restoreCopy()) {
            this.addError("Aucun noeud n'a été copié.");
            return false;
        }
        if(!this.isNode("GSection1")) {
            this.addError("Le noeud copié n'est pas un effet compétence.");
            return false;
        }

        var lNode = this.m_node;
        document.execCommand("insertHTML", false, lNode.outerHTML);
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

        var lTitle = lForm.loadFromMap(1).m_value;
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
        
        if(lFormData.m_position == 1) {
            var lTitle = lFormData.m_value;
            var lId = lTitle.getNormalize();

            lForm.loadFromMap(2);
            lForm.m_value = lId;
            lForm.loadToMap(2);
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

        var lTitle = lForm.loadFromMap(1).m_value;
        var lBgImgI = lForm.loadFromMap(2).m_index;
        var lBgColor = lForm.loadFromMap(3).m_value;
        
        var lBgImg = lImage.loadFromMap(lBgImgI).m_path;
        
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
