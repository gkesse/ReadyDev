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
        var lButtons = document.getElementsByClassName("Block18");
        for(var i = 0; i < lButtons.length; i++) {
            var lButton = lButtons[i];
            lButton.addEventListener("click", function(e) {
                var lContent = this.nextElementSibling;
                if(!lContent) return;
                lContent.classList.toggle("Show");
                
                var lContents = document.getElementsByClassName("Block22");
                for(var i = 0; i < lContents.length; i++) {
                    var lContent = lContents[i];
                    var lLine = lContent.parentNode.firstElementChild;
                    lLine.classList.remove("Active");
                    lContent.classList.remove("Show");
                }
            });
            lButton.addEventListener("mousedown", function(e) {
                e.preventDefault();
            });
        }
        
        var lLines = document.getElementsByClassName("Block20");
        for(var i = 0; i < lLines.length; i++) {
            var lLine = lLines[i];
            lLine.addEventListener("click", function(e) {
                var lLines = document.getElementsByClassName("Block20");
                for(var i = 0; i < lLines.length; i++) {
                    var lLine = lLines[i];
                    var lContent = lLine.nextElementSibling;
                    if(!lContent) continue;
                    var lSub = lContent.firstElementChild;
                    if(!lSub) continue;
                    if(lLine == this) continue;
                    lContent.classList.remove("Show");
                    lLine.classList.remove("Active");
                }
                
                var lContent = null;
                var lSub = null;
                
                lContent = this.nextElementSibling;
                if(lContent) lSub = lContent.firstElementChild;
                
                var lParentNode = this;

                if(!lContent || !lSub) {
                    while(1) {
                        var lParentNode = lParentNode.parentNode;
                        if(lParentNode.matches(".Block19")) {
                            lParentNode.classList.remove("Show");
                            return;
                        }
                    }
                }
                
                lContent.classList.toggle("Show");
                this.classList.toggle("Active");
                                
                while(1) {
                    var lParentNode = lParentNode.parentNode;
                    if(lParentNode.matches(".Block19")) break;
                    if(lParentNode.matches(".Block21")) continue;
                    var lContent = lParentNode;
                    var lLine = lContent.previousElementSibling;
                    lLine.classList.toggle("Active");
                    lContent.classList.toggle("Show");
                }
            });
            lLine.addEventListener("mousedown", function(e) {
                e.preventDefault();
            });
        }
        
        document.addEventListener("click", function(e) {
            var lHideOk = true;
            lHideOk &&= !e.target.matches(".Block18");
            lHideOk &&= !e.target.matches(".Block20");
            
            if (lHideOk) {
                var lContents = document.getElementsByClassName("Block19");
                for(var i = 0; i < lContents.length; i++) {
                    var lContent = lContents[i];
                    lContent.classList.remove("Show");
                }
                var lContents = document.getElementsByClassName("Block22");
                for(var i = 0; i < lContents.length; i++) {
                    var lContent = lContents[i];
                    lContent.classList.remove("Show");
                }
            }
        });
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
