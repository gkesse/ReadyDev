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
        else if(_method == "load_pages") {
            this.onLoadPages(_obj, _data);
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
        var lPage = new GPage();
        lPage.savePage();
        this.addLogs(lPage.getLogs());
    }
    //===============================================
    onSearchPage(_obj, _name) {
        var lPage = new GPage();
        lPage.searchPage();
        this.addLogs(lPage.getLogs());
    }
    //===============================================
    onDeletePage(_obj, _name) {
        var lPage = new GPage();
        lPage.deletePage();
        this.addLogs(lPage.getLogs());
    }
    //===============================================
    onNewPage(_obj, _name) {
        var lPage = new GPage();
        lPage.newPage();
        this.addLogs(lPage.getLogs());
    }
    //===============================================
    onLoadPages(_obj, _name) {
        var lPage = new GPage();
        lPage.loadPages();
        this.addLogs(lPage.getLogs());
    }
    //===============================================
}
//===============================================
var lEditorUi = new GEditorUi();
lEditorUi.init(1);
//===============================================
