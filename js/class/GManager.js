//===============================================
class GManager extends GModule {
    //===============================================
    constructor() {
		super();
		this.id = "0";
		this.code = "";
		this.label = "";
    }
    //===============================================
    clone() {
		return new GManager();
    }
    //===============================================
    copy(obj) {
		this.id = obj.id;
		this.code = obj.code;
		this.label = obj.label;
    }
    //===============================================
	serialize(isDom = false, code = "manager") {
		var lDom = new GCode();
		lDom.createDoc();
		lDom.addData(code, "id", this.id);
		lDom.addData(code, "code_id", this.code);
		lDom.addData(code, "label", this.label);
		lDom.addMap(code, this.map, this);
		var lData = lDom.toStringData();
		if(isDom) lData = lDom.toString();
		return lData;
	}
    //===============================================
	deserialize(data, code = "manager") {
		super.deserialize(data);
		var lDom = new GCode();
		lDom.loadXml(data);
		this.id = lDom.getItem(code, "id");
		this.code = lDom.getItem(code, "code_id");
		this.label = lDom.getItem(code, "label");
		lDom.getMap(code, this.map, this);
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
		else if(method == "create_code") {
			this.onCreateCode(obj, data);
		}
		else if(method == "search_code") {
			this.onSearchCode(obj, data);
		}
		else if(method == "update_code") {
			this.onUpdateCode(obj, data);
		}
		else if(method == "delete_code") {
			this.onDeleteCode(obj, data);
		}
		else if(method == "new_code") {
			this.onNewCode(obj, data);
		}
		else if(method == "select_data") {
			this.onSelectData(obj, data);
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
        var lMessage = "";

		this.onReadUi();
		this.onButtonOff();
		
        if(this.id != "0") {
            lMessage = "Le code existe déjà.";
        }
        else if(!this.code.length) {
            lMessage = "Le code est obligatoire.";
        }
        else if(this.code.length < 3) {
            lMessage = "Le code doit faire au minimum 8 caractères.";
        }
        else if(this.code.length > 50) {
            lMessage = "Le code doit faire au maximum 50 caractères.";
        }
        else if(this.label.length > 50) {
            lMessage = "Le libellé doit faire au maximum 50 caractères.";
        }
		else {
			// confirmer ici
		}
        
        if(lMessage.length) {
            lLog.addError(sprintf("%s", lMessage));
			this.onButtonOn();
        }
        else {
            this.onCreateCodeCall();
        }
    }
    //===============================================
    onSearchCode(obj, name) {
		var lLog = GLog.Instance();
		var lMessage = "";
		
		this.onReadUi();
		this.onButtonOff();
		
        // confirmer ici
        
        if(lMessage.length) {
            lLog.addError(sprintf("%s", lMessage));
			this.onButtonOn();
        }
		else {
	        this.onSearchCodeCall();	
		}		
    }
    //===============================================
    onUpdateCode(obj, name) {
		var lLog = GLog.Instance();
        var lMessage = "";

		this.onReadUi();
		this.onButtonOff();

        if(this.id == "0") {
            lMessage = "Le code n'existe pas.";
        }
        else if(!this.code.length) {
            lMessage = "Le code est obligatoire.";
        }
        else if(this.code.length < 3) {
            lMessage = "Le code doit faire au minimum 8 caractères.";
        }
        else if(this.code.length > 50) {
            lMessage = "Le code doit faire au maximum 50 caractères.";
        }
        else if(this.label.length > 50) {
            lMessage = "Le libellé doit faire au maximum 50 caractères.";
        }
		else {
			
		}
        
        if(lMessage.length) {
            lLog.addError(sprintf("%s", lMessage));
			this.onButtonOn();
        }
        else {
            this.onUpdateCodeCall();
        }
    }
    //===============================================
    onDeleteCode(obj, name) {
		var lLog = GLog.Instance();
        var lMessage = "";

		this.onReadUi();
		this.onButtonOff();

        if(this.id == "0") {
            lMessage = "Le code n'existe pas.";
        }
		else {
			// confirmer ici
		}
        
        if(lMessage.length) {
            lLog.addError(sprintf("%s", lMessage));
			this.onButtonOn();
        }
        else {;
            this.onDeleteCodeCall();
        }
    }
    //===============================================
    onNewCode(obj, name) {
		this.onWriteUi();
    }
    //===============================================
    onSelectData(obj, data) {
		var lTable = new GTable();
		lTable.deserialize(data);
		var lData = lTable.data;
		this.deserialize(lData);
		this.onWriteUi();
		lTable.onCloseTable();
	}
    //===============================================
    onCreateCodeCall() {
		var lAjax = new GAjax();
		var lData = this.serialize();
		lAjax.call("manager", "create_code", lData, this.onCreateCodeCB);		
    }
    //===============================================
    onSearchCodeCall() {
		var lAjax = new GAjax();
		var lData = this.serialize();
		lAjax.call("manager", "search_code", lData, this.onSearchCodeCB);		
    }
    //===============================================
    onUpdateCodeCall() {
		var lAjax = new GAjax();
		var lData = this.serialize();
		lAjax.call("manager", "update_code", lData, this.onUpdateCodeCB);		
    }
    //===============================================
    onDeleteCodeCall() {
		var lAjax = new GAjax();
		var lData = this.serialize();
		lAjax.call("manager", "delete_code", lData, this.onDeleteCodeCB);		
    }
    //===============================================
    onCreateCodeCB(data) {
		var lLog = GLog.Instance();
		var lManager = new GManager();

        if(lLog.hasErrors()) {
            lLog.showErrors();
        }
        else {
			lManager.deserialize(data);
			lManager.onWriteUi();
            lLog.addLog(sprintf("%s", "La création du code a réussi."));
        }
		lManager.onButtonOn();
    }
    //===============================================
    onSearchCodeCB(data) {
		var lLog = GLog.Instance();
        var lManager = new GManager();
		
        if(!lLog.hasErrors()) {
			lManager.deserialize(data);
			lManager.showData();
			lManager.onWriteUi();
        }
		lManager.onButtonOn();
    }
    //===============================================
    onUpdateCodeCB(data) {
		var lLog = GLog.Instance();
        var lManager = new GManager();
		
        if(lLog.hasErrors()) {
            lLog.showErrors();
        }
        else {
			lManager.deserialize(data);
			lManager.onWriteUi();
            lLog.addLog(sprintf("%s", "La mise à jour du code a réussi."));
        }
		lManager.onButtonOn();
    }
    //===============================================
    onDeleteCodeCB(data) {
		var lLog = GLog.Instance();
		var lManager = new GManager();
		
        if(lLog.hasErrors()) {
            lLog.showErrors();
        }
        else {
			lManager.onWriteUi();
            lLog.addLog(sprintf("%s", "La suppression du code a réussi."));
        }
		lManager.onButtonOn();
    }
    //===============================================
    showData() {
		var lLog = GLog.Instance();
		if(this.map.length == 0) {
			lLog.addLog(sprintf("Auncun résultat n'a été trouvé."))
		}
		else if(this.map.length == 1) {
			this.copy(this.map[0]);		
		}
		else {
			this.showList();
		}
	}
    //===============================================
	showList() {
		var lTable = new GTable();
		lTable.setCallback("select", "manager", "select_data")
		//
		lTable.pushRowH();
		lTable.pushColH(0, "code");
		lTable.pushColH(0, "description");
		//
		for(var i = 0; i < this.map.length; i++) {
			var lManager = this.map[i];
			var lData = lManager.serialize(true);
			lTable.pushRow();
			lTable.pushCol(lData, lManager.code);
			lTable.pushCol(lData, lManager.label);
		}
		//
		lTable.showData();
	}
    //===============================================
    onWriteUi() {
        var lId = document.getElementById("ManagerCodeId");
        var lCode = document.getElementById("ManagerCodeCode");
        var lLabel = document.getElementById("ManagerCodeLabel");
		//
		lId.value = this.id;
		lCode.value = this.code;
		lLabel.value = this.label;
    }
    //===============================================
    onReadUi() {
        var lId = document.getElementById("ManagerCodeId");
        var lCode = document.getElementById("ManagerCodeCode");
        var lLabel = document.getElementById("ManagerCodeLabel");
		//
		this.id = lId.value;
		this.code = lCode.value;
		this.label = lLabel.value;
    }
    //===============================================
    onButtonOn() {
        var lCreate = document.getElementById("ManagerCodeCreate");
        var lSearch = document.getElementById("ManagerCodeSearch");
        var lUpdate = document.getElementById("ManagerCodeUpdate");
        var lDelete = document.getElementById("ManagerCodeDelete");
		//
		lCreate.disabled = false;
		lSearch.disabled = false;
		lUpdate.disabled = false;
		lDelete.disabled = false;
    }
    //===============================================
    onButtonOff() {
        var lCreate = document.getElementById("ManagerCodeCreate");
        var lSearch = document.getElementById("ManagerCodeSearch");
        var lUpdate = document.getElementById("ManagerCodeUpdate");
        var lDelete = document.getElementById("ManagerCodeDelete");
		//
		lCreate.disabled = true;
		lSearch.disabled = true;
		lUpdate.disabled = true;
		lDelete.disabled = true;
    }
    //===============================================
}
//===============================================
var lManager = new GManager();
lManager.init(0);
//===============================================
