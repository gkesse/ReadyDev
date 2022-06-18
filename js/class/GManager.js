//===============================================
class GManager extends GModule {
    //===============================================
    constructor() {
		super();
		this.msg = "";
    }
    //===============================================
	serialize(code = "manager") {
		var lData = new GCode();
		lData.createDoc();
		lData.addData(code, "msg", this.msg, true);
		return lData.toStringData();
	}
    //===============================================
	deserialize(data, code = "manager") {
		super.deserialize(data);
		var lData = new GCode();
		lData.loadXml(data);
		this.msg = lData.getItem(code, "msg", true);
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
    	//===============================================
		// end
    	//===============================================
		else return false;
		return true;
	}
    //===============================================
    init(id) {
        var lTabCtn = document.getElementsByClassName("ManagerTab");
        var lObj = lTabCtn[id];
		var lName = sprintf("ManagerTab%s", id);
        this.onOpenHeader(lObj, lName);
    }
    //===============================================
    onOpenHeader(obj, name) {
		if(obj === undefined) return;
        var lTab = document.getElementsByClassName("ManagerTab");
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
lManager.init(0);
//===============================================
