//===============================================
class GQuery extends GModule {
    //===============================================
    constructor() {
		super();
		this.msg = "";
		this.lastMsg = "";
    }
    //===============================================
	serialize(code = "query") {
		var lData = new GCode();
		lData.createDoc();
		lData.addData(code, "msg", this.msg, true);
		return lData.toStringData();
	}
    //===============================================
	deserialize(data) {
		super.deserialize(data, "request");
		this.msg = data;
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
			this.onSendQuery();
		}
		else if(method == "save_query") {
			this.onSaveQuery();
		}
		else if(method == "copy_query") {
			this.onCopyQuery();
		}
    	//===============================================
		// end
    	//===============================================
		else return false;
		return true;
	}
    //===============================================
    init(id) {
        var lTabCtn = document.getElementsByClassName("QueryTab");
        var lObj = lTabCtn[id];
		var lName = sprintf("QueryTab%s", id);
        this.onOpenHeader(lObj, lName);
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
		this.onHeader(name);
    }
    //===============================================
    onHeader(name) {
		if(name == "QueryTab1") {
			this.onEmission();
		}
	}
    //===============================================
    onEmission() {
		this.restoreEmissionText();
	}
    //===============================================
    onSendQuery() {
		var lLog = GLog.Instance();
        var lEmissionTextObj = document.getElementById("QueryEmissionText");
		var lMsg = lEmissionTextObj.value;
		if(lMsg == "") {
			lLog.addError(sprintf("Erreur le texte est vide."));
			return;
		}
		this.deserialize(lMsg);	
		this.onSendQueryCall();	
	}
    //===============================================
    onSaveQuery() {
		this.saveEmissionText();	
	}
    //===============================================
    onCopyQuery() {
		this.copyReceptionText();	
	}
    //===============================================
    onSendQueryCall() {
		var lAjax = new GAjax();
		lAjax.call(this.module, this.method, this.msg, this.onSendQueryCB);		
    }
    //===============================================
    onSendQueryCB(data) {
		var lQuery = new GQuery();
		lQuery.saveEmissionText();
		lQuery.setReceptionText(data);
		lQuery.init(2);
    }
    //===============================================
    saveEmissionText() {
        var lEmissionTextObj = document.getElementById("QueryEmissionText");
		var lMsg = lEmissionTextObj.value;
		if(lMsg != "") {
			if(this.lastMsg != lMsg) {
				var lStore = new GStore();
				lStore.setLocalData("query/msg", lMsg);
				this.lastMsg = lMsg;
			}
		}
    }
    //===============================================
    restoreEmissionText() {
        var lEmissionTextObj = document.getElementById("QueryEmissionText");
		var lMsg = lEmissionTextObj.value;
		if(lMsg == "") {
			var lStore = new GStore();
			lMsg = lStore.getLocalData("query/msg");
			if(lMsg) {
				lEmissionTextObj.value = lMsg;
			}
		}
    }
    //===============================================
    setReceptionText(data) {
		data = data.trim();
        var lReceptionTextObj = document.getElementById("QueryReceptionText");
		lReceptionTextObj.value = data;
    }
    //===============================================
    copyReceptionText() {
	    var lReceptionTextObj = document.getElementById("QueryReceptionText");
		lReceptionTextObj.select();
		document.execCommand("copy");
    }
    //===============================================
}
//===============================================
var lQuery = new GQuery();
lQuery.init(0);
//===============================================
