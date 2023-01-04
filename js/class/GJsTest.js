//===============================================
class GJsTest extends GModule {
    //===============================================
    constructor() {
		super();
    }
    //===============================================
	serialize(code = "js_test") {
		return "";
	}
    //===============================================
	deserialize(data, code = "js_test") {
		super.deserialize(data);
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
        var lTabCtn = document.getElementsByClassName("query_tab");
        var lObj = lTabCtn[id];
		var lName = sprintf("query_tab_%s", id);
        this.onOpenHeader(lObj, lName);
    }
    //===============================================
    onOpenHeader(obj, name) {
		if(obj === undefined) return;
        var lTab = document.getElementsByClassName("query_tab");
        for(var i = 0; i < lTab.length; i++) {
            var lTabId = lTab[i];
            lTabId.className = lTabId.className.replace(" Active", "");
        }
        obj.className += " Active";
        var lTabCtn = document.getElementsByClassName("query_tab_ctn");
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
		if(name == "query_tab_1") {
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
        var lEmissionTextObj = document.getElementById("query_emission_text");
        var lEmissionServerObj = document.getElementById("query_emission_server");
		var lServerOn = lEmissionServerObj.checked;
		var lMsg = lEmissionTextObj.value;
		if(lMsg == "") {
			lLog.addError(sprintf("Erreur le texte est vide."));
			return;
		}
		this.msg = lMsg;	
		this.onSendQueryCall(lServerOn);	
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
    onSendQueryCall(serverOn = false) {
		var lAjax = new GAjax();
		if(!serverOn) {
			lAjax.call(this.module, this.method, this.msg, this.onSendQueryCB);					
		}
		else {
			var lData = this.serialize();
			lAjax.call("query", "send_query", lData, this.onSendQueryCB);		
		}
    }
    //===============================================
    onSendQueryCB(data) {
		var lQuery = new GQuery();
		lQuery.deserialize(data);
		lQuery.saveEmissionText();
		lQuery.setReceptionText(lQuery.res);
		lQuery.init(2);
    }
    //===============================================
    saveEmissionText() {
        var lEmissionTextObj = document.getElementById("query_emission_text");
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
        var lEmissionTextObj = document.getElementById("query_emission_text");
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
        var lReceptionTextObj = document.getElementById("query_reception_text");
		lReceptionTextObj.value = data;
    }
    //===============================================
    copyReceptionText() {
	    var lReceptionTextObj = document.getElementById("query_reception_text");
		lReceptionTextObj.select();
		document.execCommand("copy");
    }
    //===============================================
}
//===============================================
var lQuery = new GQuery();
lQuery.init(0);
//===============================================
