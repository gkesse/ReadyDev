//===============================================
class GAdmin extends GObject {
    //===============================================
    static m_instance = null;
    //===============================================
    constructor() {
        super();
        this.m_codeSource = "";
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
        var lIndex = +lEditorTabId.dataset.defaultId;
        this.initTabIndex(lIndex);
    }
    //===============================================
    initTabIndex(_index) {
        var lEditorTabs = document.getElementsByClassName("EditorTab");
        if(_index >= 0 && _index < lEditorTabs.length) {
            var lEditorTab = lEditorTabs[_index];
            this.onOpenEditorTab(lEditorTab, "EditorTab" + _index);
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
                var lContentOk = false;
                
                lContent = this.nextElementSibling;
                if(lContent) lSub = lContent.firstElementChild;
                if(lContent) lContentOk = lContent.matches(".Block22");
                
                var lParentNode = this;

                if(!lContent || !lSub || !lContentOk) {
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
            lHideOk &&= !e.target.matches(".Block24");
            
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
    readCodeEdition() {
        var lEditor = document.getElementById("GEndEditor");
        this.m_codeSource = lEditor.innerHTML;
    }
    //===============================================
    writeCodeEdition() {
        var lEditor = document.getElementById("GEndEditor");
        lEditor.innerHTML = this.m_codeSource;
    }
    //===============================================
    readCodeSource() {
        var lEditorCodeSource = document.getElementById("EditorCodeSource");
        this.m_codeSource = lEditorCodeSource.innerHTML;
    }
    //===============================================
    writeCodeSource() {
        var lEditorCodeSource = document.getElementById("EditorCodeSource");
        lEditorCodeSource.innerHTML = this.m_codeSource;
    }
    //===============================================
    serialize(_code = "admin") {
        var lDom = new GCode();
        lDom.createDoc();
        lDom.addData(_code, "code_source", utf8_to_b64(this.m_codeSource));
        lDom.addMap(_code, this.m_map);
        return lDom.toString();
    }
    //===============================================
    deserialize(_data, _code = "admin") {
        var lDom = new GCode();
        lDom.loadXml(_data);
        this.m_codeSource = b64_to_utf8(lDom.getItem(_code, "code_source"));
        lDom.getMap(_code, this.m_map, this);
    }
    //===============================================
    run(_method, _obj, _data) {
        if(_method == "") {
            this.addError("La méthode est obligatoire.");
        }
        //===============================================
        // tabs
        //===============================================
        else if(_method == "copen_editor_tab") {
            this.onOpenEditorTab(_obj, _data);
        }
        //===============================================
        // keyevent
        //===============================================
        else if(_method == "ckeydown_event_editor") {
            this.onKeydownEventEditor(_obj, _data);
        }
        //===============================================
        // actions
        //===============================================
        else if(_method == "cgo_to_code") {
            this.onGoToCode(_obj, _data);
        }
        //===============================================
        // edition
        //===============================================
        else if(_method == "cstore_edition") {
            this.onStoreEdition(_obj, _data);
        }
        //===============================================
        else {
            this.addError("La méthode est inconnue.");
        }
    }
    //===============================================
    // tabs
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
    // keyevent
    //===============================================
    onKeydownEventEditor(_obj, _data) {

    }
    //===============================================
    // actions
    //===============================================
    onGoToCode(_obj, _data) {
        this.readCodeEdition();
        this.writeCodeSource();
        this.initTabIndex(4);
    }
    //===============================================
    // edition
    //===============================================
    onStoreEdition(_obj, _data) {
        this.readCodeEdition();
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callRemote("admin", "store_edition", lData, this.onStoreEditionCB);        
    }
    //===============================================
    onStoreEditionCB(_data, _isOk) {

    }
    //===============================================
}
//===============================================
