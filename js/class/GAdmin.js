//===============================================
class GAdmin extends GObject {
    //===============================================
    static m_instance = null;
    //===============================================
    constructor() {
        super();
    }
    //===============================================
    static Instance() {
        if(this.m_instance == null) {
            this.m_instance = new GAdmin();
        }
        return this.m_instance;
    }
    //===============================================
    init() {
        this.initTab();
        this.initMenu();
    }
    //===============================================
    initTab() {
        var lEditorTabId = document.getElementById("EditorTab");
        var lEditorTabs = document.getElementsByClassName("EditorTab");
        if(lEditorTabs.length) {
            var lDefaultId = +lEditorTabId.dataset.defaultId;
            var lEditorTab = lEditorTabs[lDefaultId];
            this.onOpenEditorTab(lEditorTab, "EditorTab" + lDefaultId);
        }
    }
    //===============================================
    initMenu() {
        var lMenus = document.getElementsByClassName("Block18");
        for(var i = 0; i < lMenus.length; i++) {
            var lMenu = lMenus[i];
            lMenu.addEventListener("click", function(e) {
                var lContent = this.nextElementSibling;
                if(!lContent) return;
                lContent.classList.toggle("Show");
            });
        }
        
        var lMenus = document.getElementsByClassName("Block20");
        for(var i = 0; i < lMenus.length; i++) {
            var lMenu = lMenus[i];
            lMenu.addEventListener("click", function(e) {
                var lContent = this.nextElementSibling;
                if(!lContent) return;
                lContent.classList.toggle("Show");
            });
        }
    }
    //===============================================
    run(_method, _obj, _data) {
        if(_method == "") {
            this.addError("La méthode est obligatoire.");
        }
        //===============================================
        else if(_method == "open_editor_tab") {
            this.onOpenEditorTab(_obj, _data);
        }
        //===============================================
        // project
        //===============================================
        else if(_method == "save_project") {
            this.onSaveProject(_obj, _data);
        }
        else if(_method == "search_project") {
            this.onSearchProject(_obj, _data);
        }
        else if(_method == "delete_project") {
            this.onDeleteProject(_obj, _data);
        }
        else if(_method == "new_project") {
            this.onNewProject(_obj, _data);
        }
        //===============================================
        else {
            this.addError("La méthode est inconnue.");
        }
    }
    //===============================================
    onOpenEditorTab(_obj, _data) {
        if(!_obj) return;
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
        if(!lTab) return;
        lTab.style.display = "block";
    }
    //===============================================
    // project
    //===============================================
    onSaveProject(_obj, _data) {
        
    }
    //===============================================
    onSearchProject(_obj, _data) {
        
    }
    //===============================================
    onDeleteProject(_obj, _data) {
        
    }
    //===============================================
    onNewProject(_obj, _data) {
        
    }
    //===============================================
    // pa
    //===============================================
    onSaveProject(_obj, _data) {
        
    }
    //===============================================
    onSearchProject(_obj, _data) {
        
    }
    //===============================================
    onDeleteProject(_obj, _data) {
        
    }
    //===============================================
    onNewProject(_obj, _data) {
        
    }
    //===============================================
}
//===============================================
GAdmin.Instance().init();
//===============================================
