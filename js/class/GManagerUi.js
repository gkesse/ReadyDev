//===============================================
class GManagerUi extends GObjectUi {
    //===============================================
    constructor() {
        super();
    }
    //===============================================
    onModule(method, obj, data) {
        if(method == "") {
            this.onMethodNone();
            return false;
        }
        //===============================================
        // method
        //===============================================
        else if(method == "open_header") {
            this.onOpenHeader(obj, data);
        }
        //===============================================
        // end
        //===============================================
        else {
            this.onMethodUnknown();
            return false;    
        }
        return true;
    }
    //===============================================
    initTab(id) {
        var lTabCtn = document.getElementsByClassName("manager_tab");
        var lObj = lTabCtn[id];
        var lName = sprintf("ManagerTab%s", id);
        this.onOpenHeader(lObj, lName);
    }
    //===============================================
    onOpenHeader(obj, name) {
        if(obj === undefined) return;
        var lTab = document.getElementsByClassName("manager_tab");
        for(var i = 0; i < lTab.length; i++) {
            var lTabId = lTab[i];
            lTabId.className = lTabId.className.replace(" Active", "");
        }
        obj.className += " Active";
        var lTabCtn = document.getElementsByClassName("ManagerTabCtn");
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
var lManager = new GManager();
lManager.initTab(0);
//===============================================
