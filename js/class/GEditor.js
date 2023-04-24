//===============================================
class GEditor extends GObject {
    //===============================================
    static m_instance = null;
    //===============================================
    constructor() {
        super();
        this.m_node = null;
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
        lHtml += sprintf("<div class='Parallax5'>\n");
        lHtml += sprintf("Ajouter un texte...\n");
        lHtml += sprintf("</div>\n");
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
        // parallax
        //===============================================
        else if(_method == "add_parallax") {
            this.onAddParallax(_obj, _data);
        }
        else if(_method == "update_parallax") {
            this.onUpdateParallax(_obj, _data);
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
    // parallax
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
