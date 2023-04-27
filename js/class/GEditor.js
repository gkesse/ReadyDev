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
        else if(_method == "exec_command") {
            this.onExecCommand(_obj, _data);
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
    // template/graduation
    //===============================================
    onAddGraduation(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GGraduation1")) {
            this.addError("Vous êtes dans un effet graduation.");
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
            this.addError("Vous n'êtes pas dans un effet graduation.");
            return false;
        }

        var lNode = this.m_node;
        var lIconId = lNode.firstElementChild;
        var lGradeId = lNode.firstElementChild.nextElementSibling;
        
        var lIcon = lIconId.getAttribute("class").split(" ")[2];
        var lGrade = lGradeId.innerHTML;
        
        var lPeriodT = lGrade.split("<br>")[0];
        var lPeriodR = new RegExp("<b>(.*)</b>");
        var lPeriodS = lPeriodT.match(lPeriodR);
        var lPeriod = lPeriodS[1];
        
        var lGraduation = (lGrade.split("<br>")[1]).split(",")[0];
        var lSchool = (lGrade.split("<br>")[2]).split(".")[0];
        
        var lFont = GFontAwesome.Instance();
        var lIndex = lFont.findFont(lIcon);

        var lForm = GForm.Instance();
        lForm.clearMap();
        lForm.setCallback("editor", "update_graduation_form");
        lForm.addLabelPicto("m_icon", "Icône :", lFont.toForm(), lIndex);
        lForm.addLabelEdit("m_period", "Période :", lPeriod);
        lForm.addLabelEdit("m_graduation", "Diplôme :", lGraduation);
        lForm.addLabelEdit("m_school", "Ecole :", lSchool);
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
            this.addError("Vous n'êtes pas dans un effet parallax.");
            return false;
        }
        
        var lForm = GForm.Instance();
        lForm.readForm();

        var lIcon = lForm.loadFromMap(0).m_value;
        var lPeriod = lForm.loadFromMap(1).m_value;
        var lGraduation = lForm.loadFromMap(2).m_value;
        var lSchool = lForm.loadFromMap(3).m_value;
        
        var lNode = this.m_node;
        var lIconId = lNode.firstElementChild;
        var lGradeId = lNode.firstElementChild.nextElementSibling;
        
        lIcon = sprintf("Graduation2 fa %s", lIcon);
        
        var lHtml = "";
        lHtml += sprintf("<b>%s</b><br/>\n", lPeriod);
        lHtml += sprintf("%s,<br/>\n", lGraduation);
        lHtml += sprintf("%s.<br/>\n", lSchool);

        lIconId.setAttribute("class", lIcon);
        lGradeId.innerHTML = lHtml;
    }
    //===============================================
    onDeleteGraduation(_obj, _data) {
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(!this.hasParent("GGraduation1")) {
            this.addError("Vous n'êtes pas dans un effet lien.");
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
            this.addError("Vous êtes dans un effet link.");
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
            this.addError("Vous n'êtes pas dans un effet link.");
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
            this.addError("Vous n'êtes pas dans un effet parallax.");
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
}
//===============================================
GEditor.Instance().init();
//===============================================
