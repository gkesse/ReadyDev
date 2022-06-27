//===============================================
class GManager extends GSearch {
    //===============================================
    constructor() {
		super();
		this.id = 0;
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
		lDom.addData(code, "id", ""+this.id);
		lDom.addData(code, "code_id", this.code);
		lDom.addData(code, "label", this.label);
		lDom.addMap(code, this.map, this);
		lDom.loadCode(super.serialize());
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
			this.onNewCode();
		}
		else if(method == "select_data") {
			this.onSelectData(obj, data);
		}
		else if(method == "next_data") {
			this.onNextData();
		}
		else if(method == "confirm") {
			this.onConfirm(obj, data);
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
    onConfirm(obj, data) {
		var lConfirm = new GConfirm();
		lConfirm.deserialize(data);
		var lAction = lConfirm.action;
		//
		if(lAction == "create_code") {
			this.onCreateCodeCall();
		}
		else if(lAction == "update_code") {
            this.onUpdateCodeCall();
		}
		else if(lAction == "delete_code") {
            this.onDeleteCodeCall();
		}
		else if(lAction == "cancel") {
			this.buttonOn();
		}
    }
    //===============================================
    initTab(id) {
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
		this.readUi();
		var lLog = GLog.Instance();
        var lMessage = "";
		this.buttonOff();
		
        if(this.id != 0) {
            lMessage = "L'identifiant existe déjà.";
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
        
        if(lMessage.length) {
            lLog.addError(sprintf("%s", lMessage));
			this.buttonOn();
        }
        else {
			var lConfirm = new GConfirm();
			lConfirm.setCallback("manager", "confirm", "create_code");
			lConfirm.onOpenConfirm();
        }
		this.writeUi();
    }
    //===============================================
    onCreateCodeCall() {
		var lAjax = new GAjax();
		this.readUi();
		var lData = this.serialize();
		lAjax.call("manager", "create_code", lData, this.onCreateCodeCB);		
    }
    //===============================================
    onCreateCodeCB(data) {
		var lLog = GLog.Instance();
        var lManager = new GManager();
		var lConfirm = new GConfirm();

        if(lLog.hasErrors()) {
            lLog.showErrors();
        }
        else {
			lManager.deserialize(data);
			lManager.writeUi();
            lLog.addLog(sprintf("%s", "La création du code a réussi."));
			lConfirm.onCloseConfirm();
        }
		lManager.buttonOn();
		lConfirm.buttonOn();
    }
    //===============================================
    onSearchCode(obj, name) {
		this.buttonOff();
		this.initSearch();
	   	this.onSearchCodeCall();	
    }
    //===============================================
    onSearchCodeCall() {
		var lAjax = new GAjax();
		this.readUi();
		var lData = this.serialize();
		lAjax.call("manager", "search_code", lData, this.onSearchCodeCB);		
    }
    //===============================================
    onSearchCodeCB(data) {
		var lLog = GLog.Instance();
        var lManager = new GManager();
		
        if(!lLog.hasErrors()) {
			lManager.deserialize(data);
			lManager.writeUi();
			var lTable = new GTable();
			lTable.setHeaderVisible(false);
			lManager.showData();
        }
		lManager.buttonOn();
    }
    //===============================================
    showData() {
		this.readUi();
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
		this.writeUi();
	}
    //===============================================
	showList() {
		this.readUi();
		var lTable = new GTable();
		lTable.setCallback("select", "manager", "select_data")
		lTable.setCallback("next", "manager", "next_data")
		lTable.setNextEnable(true);
		//
		lTable.pushRowH();
		lTable.pushColH(0, "code");
		lTable.pushColH(0, "description");
		lTable.setHeaderVisible(true);
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
		lTable.scrollBottom();
		this.writeUi();
		if(this.dataOffset >= this.dataCount) {
			lTable.setNextEnable(false);			
		}
	}
    //===============================================
    onUpdateCode(obj, name) {
		this.readUi();
		var lLog = GLog.Instance();
        var lMessage = "";

		this.buttonOff();

        if(this.id == 0) {
            lMessage = "L'identifiant n'existe pas.";
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
        
        if(lMessage.length) {
            lLog.addError(sprintf("%s", lMessage));
			this.buttonOn();
        }
        else {
			var lConfirm = new GConfirm();
			lConfirm.setCallback("manager", "confirm", "update_code");
			lConfirm.onOpenConfirm();
        }
		this.writeUi();
    }
    //===============================================
    onUpdateCodeCall() {
		var lAjax = new GAjax();
		this.readUi();
		var lData = this.serialize();
		lAjax.call("manager", "update_code", lData, this.onUpdateCodeCB);		
    }
    //===============================================
    onUpdateCodeCB(data) {
		var lLog = GLog.Instance();
        var lManager = new GManager();
		var lConfirm = new GConfirm();
		
        if(lLog.hasErrors()) {
            lLog.showErrors();
        }
        else {
			lManager.deserialize(data);
			lManager.writeUi();
            lLog.addLog(sprintf("%s", "La mise à jour du code a réussi."));
        	lConfirm.onCloseConfirm();
		}
		lManager.buttonOn();
		lConfirm.buttonOn();
    }
    //===============================================
    onDeleteCode(obj, name) {
		this.readUi();
		var lLog = GLog.Instance();
        var lMessage = "";

		this.buttonOff();

        if(this.id == 0) {
            lMessage = "L'identifiant n'existe pas.";
        }
        
        if(lMessage.length) {
            lLog.addError(sprintf("%s", lMessage));
			this.buttonOn();
        }
        else {;
			var lConfirm = new GConfirm();
			lConfirm.setCallback("manager", "confirm", "delete_code");
			lConfirm.onOpenConfirm();
        }
		this.writeUi();
    }
    //===============================================
    onDeleteCodeCall() {
		var lAjax = new GAjax();
		this.readUi();
		var lData = this.serialize();
		lAjax.call("manager", "delete_code", lData, this.onDeleteCodeCB);		
    }
    //===============================================
    onDeleteCodeCB(data) {
		var lLog = GLog.Instance();
		var lManager = new GManager();
		var lConfirm = new GConfirm();
		
        if(lLog.hasErrors()) {
            lLog.showErrors();
        }
        else {
            lLog.addLog(sprintf("%s", "La suppression du code a réussi."));
			lManager.onNewCode();
			lConfirm.onCloseConfirm();
        }
		lManager.buttonOn();
		lConfirm.buttonOn();
    }
    //===============================================
    onNewCode() {
		var lTable = new GTable();
		lTable.clear();
		this.writeUi();
    }
    //===============================================
    onSelectData(obj, data) {
		var lTable = new GTable();
		lTable.deserialize(data);
		lTable.writeUi();
		var lData = lTable.data;
		this.deserialize(lData);
		this.writeUi();
		lTable.onCloseTable();
		lTable.clear();
	}
    //===============================================
    onNextData() {
		this.readUi();
		var lTable = new GTable();
		if(this.dataOffset < this.dataCount) {
			lTable.buttonOff();
			this.onNextDataCall();
		}
	}
    //===============================================
    onNextDataCall() {
		var lAjax = new GAjax();
		this.readUi();
		var lData = this.serialize();
		lAjax.call("manager", "next_code", lData, this.onNextDataCB);		
    }
    //===============================================
    onNextDataCB(data) {
		var lLog = GLog.Instance();
        var lManager = new GManager();
		var lTable = new GTable();

        if(!lLog.hasErrors()) {
			lManager.deserialize(data);
			lManager.writeUi();
			lManager.showList();
        }
		lManager.buttonOn();
		lTable.buttonOn();
		if(lManager.dataOffset >= lManager.dataCount) {
			lTable.setNextEnable(false);			
		}
    }
    //===============================================
    readUi() {
        var lId = document.getElementById("ManagerCodeId");
        var lCode = document.getElementById("ManagerCodeCode");
        var lLabel = document.getElementById("ManagerCodeLabel");
		//
		this.id = +lId.value;
		this.code = lCode.value;
		this.label = lLabel.value;
		super.readUi();
    }
    //===============================================
    writeUi() {
        var lId = document.getElementById("ManagerCodeId");
        var lCode = document.getElementById("ManagerCodeCode");
        var lLabel = document.getElementById("ManagerCodeLabel");
		//
		lId.value = this.id;
		lCode.value = this.code;
		lLabel.value = this.label;
		super.writeUi();
    }
    //===============================================
    buttonOn() {
        var lCreate = document.getElementById("ManagerCodeCreate");
        var lSearch = document.getElementById("ManagerCodeSearch");
        var lUpdate = document.getElementById("ManagerCodeUpdate");
        var lDelete = document.getElementById("ManagerCodeDelete");
        var lNew = document.getElementById("ManagerCodeNew");
		//
		lCreate.disabled = false;
		lSearch.disabled = false;
		lUpdate.disabled = false;
		lDelete.disabled = false;
		lNew.disabled = false;
    }
    //===============================================
    buttonOff() {
        var lCreate = document.getElementById("ManagerCodeCreate");
        var lSearch = document.getElementById("ManagerCodeSearch");
        var lUpdate = document.getElementById("ManagerCodeUpdate");
        var lDelete = document.getElementById("ManagerCodeDelete");
        var lNew = document.getElementById("ManagerCodeNew");
		//
		lCreate.disabled = true;
		lSearch.disabled = true;
		lUpdate.disabled = true;
		lDelete.disabled = true;
		lNew.disabled = true;
    }
    //===============================================
}
//===============================================
var lManager = new GManager();
lManager.initTab(0);
//===============================================
