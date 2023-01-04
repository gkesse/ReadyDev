//===============================================
class GEditorUi extends GObjectUi {
    //===============================================
    constructor() {
		super();
    }
    //===============================================
    onModule(method, obj, data) {
		if(method == "") {
			return false;
		}
    	//===============================================
		// method
    	//===============================================
		else if(method == "open_header") {
			this.onOpenHeader(obj, data);
		}
		else if(method == "open_editor") {
			this.onOpenEditor(obj, data);
		}
    	//===============================================
    	// end
    	//===============================================
		else return false;
		return true;
	}
    //===============================================
    init() {
        var lTabCtn = document.getElementsByClassName("EditorTab");
        var lObj = lTabCtn[0];
        this.onOpenHeader(lObj, "EditorTab0");
        lTabCtn = document.getElementsByClassName("EditorFileTab");
        lObj = lTabCtn[0];
        this.onOpenEditor(lObj, "EditorFileTab0");
    }
    //===============================================
    onOpenHeader(obj, name) {
		if(obj === undefined) return;
        var lTab = document.getElementsByClassName("EditorTab");
        for(var i = 0; i < lTab.length; i++) {
            var lTabId = lTab[i];
            lTabId.className = lTabId.className.replace(" Active", "");
        }
        obj.className += " Active";
        var lTabCtn = document.getElementsByClassName("EditorTabCtn");
        for(var i = 0; i < lTabCtn.length; i++) {
            var lTabCtnId = lTabCtn[i];
            lTabCtnId.style.display = "none";
        }
        var lTabId = document.getElementById(name);
        lTabId.style.display = "block";
	}
    //===============================================
    onOpenEditor(obj, name) {
		if(obj === undefined) return;
        var lTab = document.getElementsByClassName("EditorFileTab");
        for(var i = 0; i < lTab.length; i++) {
            var lTabId = lTab[i];
            lTabId.className = lTabId.className.replace(" Active", "");
        }
        obj.className += " Active";
        var lTabCtn = document.getElementsByClassName("EditorFileTabCtn");
        for(var i = 0; i < lTabCtn.length; i++) {
            var lTabCtnId = lTabCtn[i];
            lTabCtnId.style.display = "none";
        }
        var lTabId = document.getElementById(name);
        lTabId.style.display = "block";
	}
    //===============================================
}
//===============================================
var lEditorUi = new GEditorUi();
lEditorUi.init();
//===============================================
