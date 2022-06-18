//===============================================
class GManager extends GModule {
    //===============================================
    constructor() {
		super();
		this.code = "";
		this.label = "";
    }
    //===============================================
	serialize(code = "manager") {
		var lData = new GCode();
		lData.createDoc();
		lData.addData(code, "code", this.code);
		lData.addData(code, "label", this.label);
		return lData.toStringData();
	}
    //===============================================
	deserialize(data, code = "manager") {
		super.deserialize(data);
		var lData = new GCode();
		lData.loadXml(data);
		this.code = lData.getItem(code, "code");
		this.label = lData.getItem(code, "label");
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
		else if(method == "create_code") {
			this.onCreateCode(obj, data);
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
    onCreateCode(obj, name) {
		var lLog = GLog.Instance();
        var lCode = document.getElementById("ManagerCodeCode");
        var lLabel = document.getElementById("ManagerCodeLabel");
        var lCreateButton = document.getElementById("ManagerCodeCreate");
        var lMessage = "";

		lCreateButton.disabled = true;

        if(!lCode.value.length) {
            lMessage = "Le code est obligatoire.";
        }
        else if(lCode.value.length < 3) {
            lMessage = "Le code doit faire au minimum 8 caractères.";
        }
        else if(lCode.value.length > 50) {
            lMessage = "Le code doit faire au maximum 50 caractères.";
        }
        else if(lLabel.value.length > 50) {
            lMessage = "Le libellé doit faire au maximum 50 caractères.";
        }
        
        if(lMessage.length) {
            lLog.addError(sprintf("%s", lMessage));
			lCreateButton.disabled = false;
        }
        else {
			this.code = lCode.value;
			this.label = lLabel.value;
            this.onCreateCodeCall();
        }
    }
    //===============================================
    onCreateCodeCall() {
		var lAjax = new GAjax();
		var lData = this.serialize();
		lAjax.call("manager", "create_code", lData, this.onCreateCodeCB);		
    }
    //===============================================
    onCreateCodeCB(data) {
		var lLog = GLog.Instance();
        var lCreateButton = document.getElementById("ManagerCodeCreate");

        var lUser = new GUser();
		lUser.deserialize(data);
		
        if(lLog.hasErrors()) {
            lLog.showErrors();
        }
        else {
            lLog.addLog(sprintf("%s", "La création du code a réussi."));
        }
		lCreateButton.disabled = false;
    }
    //===============================================
}
//===============================================
var lManager = new GManager();
lManager.init(0);
//===============================================
