//===============================================
class GCommand extends GObject {
    //===============================================
    static m_instance = null;
    //===============================================
    constructor() {
        super();
        this.m_id = 0;
        this.m_data = "";
        this.m_selection = null;
        this.m_node = null;
        this.m_line = "";
    }
    //===============================================
    static Instance() {
        if(this.m_instance == null) {
            this.m_instance = new GCommand();
        }
        return this.m_instance;
    }    
    //===============================================
    init() {

    }
    //===============================================
    readUi() {
        var lEditorEditionContent = document.getElementById("EditorEditionContent");
        this.m_data = lEditorEditionContent.innerHTML;
    }
    //===============================================
    writeUi() {
        var lEditorEditionContent = document.getElementById("EditorEditionContent");
        lEditorEditionContent.innerHTML = this.m_data;
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
    selectNode() {
        if(!this.m_node) {
            this.addError("Le noeud n'est pas initialisé.");
            return false;
        }
        var lSelection = document.getSelection();
        var lRange = document.createRange();
        lRange.selectNode(this.m_node);
        lSelection.addRange(lRange);
        return !this.hasErrors();
    }
    //===============================================
    removeNode() {
        if(!this.selectNode()) return false;
        document.execCommand("insertHTML", false, "");
        return !this.hasErrors();
    }
    //===============================================
    removeDiv() {
        this.m_node.remove()
        document.execCommand("insertHTML", false, "<div><br></div>");
        return !this.hasErrors();
    }
    //===============================================
    isNode() {
        return (this.m_node.nodeType == Node.ELEMENT_NODE);
    }
    //===============================================
    isEditor() {
        return this.hasParent("GEndEditor");
    }
    //===============================================
    isLine() {
        return (this.m_line === undefined);
    }
    //===============================================
    isText() {
        return (this.m_text != "");
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
    serialize(_code = "command") {
        var lDom = new GCode();
        lDom.createDoc();
        lDom.addData(_code, "id", ""+this.m_id);
        lDom.addData(_code, "data", utf8_to_b64(this.m_data));
        lDom.addMap(_code, this.m_map);
        return lDom.toString();
    }
    //===============================================
    deserialize(_data, _code = "command") {
        var lDom = new GCode();
        lDom.loadXml(_data);
        this.m_id = +lDom.getItem(_code, "id");
        this.m_data = b64_to_utf8(lDom.getItem(_code, "data"));
        lDom.getMap(_code, this.m_map, this);
    }
    //===============================================
    onModule(_method, _obj, _data) {
        if(_method == "") {
            this.addError("La méthode est obligatoire.");
        }
        else if(_method == "key_down") {
            this.onKeyDown(_obj, _data);
        }
        else if(_method == "selection") {
            this.onSelection(_obj, _data);
        }
        else if(_method == "back_color") {
            this.onBackColor(_obj, _data);
        }
        else if(_method == "parallax") {
            this.onParallax(_obj, _data);
        }
        else if(_method == "store_page_file") {
            this.onStorePageFile(_obj, _data);
        }
        else if(_method == "store_page_file_run") {
            this.onStorePageFileRun(_obj, _data);
        }
        else if(_method == "load_page_file") {
            this.onLoadPageFile(_obj, _data);
        }
        else if(_method == "load_page_file_run") {
            this.onLoadPageFileRun(_obj, _data);
        }
        else if(_method == "new_page") {
            this.onNewPage(_obj, _data);
        }
        else if(_method == "new_page_run") {
            this.onNewPageRun(_obj, _data);
        }
        else if(_method == "show_html") {
            this.onShowHtml(_obj, _data);
        }
        else {
            this.addError("La méthode est inconnue.");
        }
        return !this.hasErrors();
    }
    //===============================================
    onKeyDown(_obj, _data) {
        var lEvent = _obj || window.event;
        var lKeyCode = lEvent.charCode || lEvent.keyCode;
        if(lKeyCode == 13) {
            document.execCommand("insertLineBreak")
            lEvent.preventDefault();
        }
    }
    //===============================================
    onSelection(_obj, _data) {
        document.execCommand(_data, false, null);
    }
    //===============================================
    onBackColor(_obj, _data) {
        document.execCommand(_data, false, "#ffaaaa");
    }
    //===============================================
    onParallax(_obj, _data) {
        if(!this.readSelection()) return false;
        if(!this.isEditor()) {
            this.addError("La sélection est hors du cadre.");
            return false;
        }
        if(this.hasParent("GParallax1")) {
            this.removeDiv();
            return false;
        }
        if(!this.isLine()) {
            this.addError("Vous êtes sur une ligne.");
            return false;
        }
        
        var lHtml = "";
        lHtml += "<div class='Parallax GParallax1'>";
        lHtml += "<div class='Img Binary'>";
        lHtml += "<div class='Caption'>";
        lHtml += "<a href='#'><div class='Text'>Ajouter un titre...</div></a>";
        lHtml += "</div>";
        lHtml += "</div>";
        lHtml += "<div class='Body2 Orange'>";
        lHtml += "Ajouter un texte...";
        lHtml += "</div>";
        lHtml += "</div>";
        
        document.execCommand("insertHTML", false, lHtml);
    }
    //===============================================
    onStorePageFile(_obj, _data) {
        var lConfirm = new GConfirm();
        lConfirm.setCallback("edition_command", "store_page_file_run");
        lConfirm.showConfirm();
    }
    //===============================================
    onStorePageFileRun(_obj, _data) {
        this.readUi();
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callLocal("command", "store_page_file", lData, this.onStorePageFileCB);
        this.addLogs(lAjax.getLogs());
    }
    //===============================================
    onStorePageFileCB(_data, _isOk) {

    }
    //===============================================
    onLoadPageFile(_obj, _data) {
        var lConfirm = new GConfirm();
        lConfirm.setCallback("edition_command", "load_page_file_run");
        lConfirm.showConfirm();
    }
    //===============================================
    onLoadPageFileRun(_obj, _data) {
        this.readUi();
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callLocal("command", "load_page_file", lData, this.onLoadPageFileCB);        
    }
    //===============================================
    onLoadPageFileCB(_data, _isOk) {
        if(_isOk) {
            var lCommand = new GCommand();
            lCommand.deserialize(_data);
            lCommand.writeUi();
        }
    }
    //===============================================
    onNewPage(_obj, _data) {
        var lConfirm = new GConfirm();
        lConfirm.setCallback("edition_command", "new_page_run");
        lConfirm.showConfirm();
    }
    //===============================================
    onNewPageRun(_obj, _data) {
        var lCommand = new GCommand();
        this.writeUi();
    }
    //===============================================
    onShowHtml(_obj, _data) {
        this.readUi();
        this.addData(this.m_data);
    }
    //===============================================
}
//===============================================
GCommand.Instance().init();
//===============================================
