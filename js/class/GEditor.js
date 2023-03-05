//===============================================
class GEditor extends GObject {
    //===============================================
    static m_instance = null;
    //===============================================
    constructor() {
        super();
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
        else if(_method == "add_parallax") {
            this.onAddParallax(_obj, _data);
        }
        else if(_method == "add_parallax_form") {
            this.onAddParallaxForm(_obj, _data);
        }
        else if(_method == "delete_parallax") {
            this.onDeleteParallax(_obj, _data);
        }
        else {
            this.addError("Erreur la méthode est obligatoire.");            
        }
        return !this.hasErrors();
    }
    //===============================================
    onOpenHeader(_obj, _data) {
        if(_obj === undefined) return;
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
        lTab.style.display = "block";
    }
    //===============================================
    onAddParallax(_obj, _data) {
        var lImage = GImage.Instance();
        lImage.readData();
        var lForm = new GForm();
        lForm.setCallback("editor", "add_parallax_form");
        lForm.addLabelImage("EditorParallaxImage", "Image :", lImage.getData());
        lForm.showForm();
        this.addLogs(lForm.getLogs());
    }
    //===============================================
    onAddParallaxForm(_obj, _data) {
        var lImage = GImage.Instance();
        lImage.loadData();
        var lForm = new GForm();
        lForm.deserialize(_data);
        var lImgIndex = lForm.loadFromMap(0).getIndex();
        lImage.loadFromMap(lImgIndex);
    }
    //===============================================
}
//===============================================
GEditor.Instance().init();
//===============================================
