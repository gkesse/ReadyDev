//===============================================
class GQuery extends GObject {
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
		else if(method == "send_query") {
			this.onSendQuery(obj, data);
		}
    	//===============================================
		// end
    	//===============================================
		else return false;
		return true;
	}
    //===============================================
    init() {
        var lTabCtn = document.getElementsByClassName("QueryTab");
        var lObj = lTabCtn[0];
        this.onOpenHeader(lObj, "QueryTab0");
    }
    //===============================================
    onOpenHeader(obj, name) {
		if(obj === undefined) return;
        var lTab = document.getElementsByClassName("QueryTab");
        for(var i = 0; i < lTab.length; i++) {
            var lTabId = lTab[i];
            lTabId.className = lTabId.className.replace(" Active", "");
        }
        obj.className += " Active";
        var lTabCtn = document.getElementsByClassName("QueryTabCtn");
        for(var i = 0; i < lTabCtn.length; i++) {
            var lTabCtnId = lTabCtn[i];
            lTabCtnId.style.display = "none";
        }
        var lTabId = document.getElementById(name);
        lTabId.style.display = "block";
    }
    //===============================================
    onSendQuery(obj = null, data = null) {
		var lLog = GLog.Instance();
        var lEmissionTextObj = document.getElementById("QueryEmissionText");
		var lEmissionText = lEmissionTextObj.innerHTML;
		if(lEmissionText == "") {
			lLog.addError(sprintf("Erreur le text est vide."));
			return;
		}
	}
    //===============================================
}
//===============================================
var lQuery = new GQuery();
lQuery.init();
//===============================================
