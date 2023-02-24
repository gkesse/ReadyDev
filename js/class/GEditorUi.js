//===============================================
class GEditorUi extends GObject {
    //===============================================
    static m_instance = null;
    //===============================================
    constructor() {
        super();
    }
    //===============================================
    static Instance() {
        if(this.m_instance == null) {
            this.m_instance = new GEditorUi();
        }
        return this.m_instance;
    }
    //===============================================
    init() {
        var lEditorTabs = document.getElementsByClassName("EditorTab");
        var lEditorTabDefault = document.getElementById("EditorTabDefault");
        if(lEditorTabs.length) {
            var lDefaultId = lEditorTabDefault.innerHTML;
            var lEditorTab = lEditorTabs[lDefaultId];
            this.onOpenHeader(lEditorTab, "EditorTab" + lDefaultId);
        }
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
GEditorUi.Instance().init();
//===============================================
