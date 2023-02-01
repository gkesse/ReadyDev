//===============================================
class GEditorUi extends GObject {
    //===============================================
    constructor() {
        super();
    }
    //===============================================
    onModule(_method, _obj, _data) {
        if(_method == "") {
            this.addError("Erreur la méthode est obligatoire.");
        }
        else if(_method == "open_header") {
            this.onOpenHeader(_obj, _data);
        }
        else {
            this.addError("Erreur la méthode est obligatoire.");            
        }
        return !this.hasErrors();
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
}
//===============================================
var lEditorUi = new GEditorUi();
lEditorUi.init(2);
//===============================================
