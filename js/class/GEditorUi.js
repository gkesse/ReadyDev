//===============================================
class GEditorUi extends GObject {
    //===============================================
    constructor(_codeName = "editor") {
        super(_codeName);
    }
    //===============================================
    onModule(_method, _obj, _data) {
        if(_method == "") {
            this.addError("Erreur la méthode est obligatoire.");
        }
        else if(_method == "open_header") {
            this.onOpenHeader(_obj, _data);
        }
        else if(_method == "save_page") {
            this.onSavePage(_obj, _data);
        }
        else if(_method == "search_page") {
            this.onSearchPage(_obj, _data);
        }
        else if(_method == "delete_page") {
            this.onDeletePage(_obj, _data);
        }
        else if(_method == "new_page") {
            this.onNewPage(_obj, _data);
        }
        else {
            this.addError("Erreur la méthode est obligatoire.");            
        }
    }
    //===============================================
    init(_id) {
        var lTabCtn = document.getElementsByClassName("EditorTab");
        var lObj = lTabCtn[_id];
        this.onOpenHeader(lObj, "EditorTab" + _id);
    }
    //===============================================
    onOpenHeader(_obj, _name) {
        if(_obj === undefined) return;
        var lTab = document.getElementsByClassName("EditorTab");
        for(var i = 0; i < lTab.length; i++) {
            var lTabId = lTab[i];
            lTabId.className = lTabId.className.replace(" Active", "");
        }
        _obj.className += " Active";
        var lTabCtn = document.getElementsByClassName("EditorTabCtn");
        for(var i = 0; i < lTabCtn.length; i++) {
            var lTabCtnId = lTabCtn[i];
            lTabCtnId.style.display = "none";
        }
        var lTabId = document.getElementById(_name);
        lTabId.style.display = "block";
    }
    //===============================================
    onSavePage(_obj, _name) {
        this.addLog("La donnée a bien été enregistrée.");
    }
    //===============================================
    onSearchPage(_obj, _name) {
        this.addLog("onSearchPage");
    }
    //===============================================
    onDeletePage(_obj, _name) {
        this.addLog("onDeletePage");
    }
    //===============================================
    onNewPage(_obj, _name) {
        this.addLog("onNewPage");
    }
    //===============================================
}
//===============================================
var lEditorUi = new GEditorUi();
lEditorUi.init(1);
//===============================================
