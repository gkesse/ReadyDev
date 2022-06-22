//===============================================
class GTable extends GModule {
    //===============================================
    constructor() {
		super();
		this.data = "";
		this.type = "0";
		this.rows = "0";
		this.cols = "0";
		this.value = "";
		//
		this.currentData = "";
		this.selectModule = "";
		this.selectMethod = "";
		//
		this.row = null;
		this.col = null;
		this.rowH = null;
		this.colH = null;
		//
		var lTable = document.getElementById("TableId");
		this.header = lTable.createTHead();
		this.body = lTable.createTBody();
    }
    //===============================================
	serialize(isDom = false, code = "table") {
		var lDom = new GCode();
		lDom.createDoc();
		lDom.addData(code, "data", this.data, true);
		lDom.addData(code, "type", this.type);
		lDom.addData(code, "rows", this.rows);
		lDom.addData(code, "cols", this.cols);
		lDom.addData(code, "value", this.value, true);
		var lData = lDom.toStringData();
		if(isDom) lData = lDom.toString();
		return lData;
	}
    //===============================================
	deserialize(data, code = "table") {
		super.deserialize(data);
		var lDom = new GCode();
		lDom.loadXml(data);
		this.data = lDom.getItem(code, "data", true);
		this.type = lDom.getItem(code, "type");
		this.rows = lDom.getItem(code, "rows");
		this.cols = lDom.getItem(code, "cols");
		this.value = lDom.getItem(code, "value", true);
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
		else if(method == "close_table") {
			this.onCloseTable();
		}
		else if(method == "current_data") {
			this.onCurrentData(obj, data);
		}
		else if(method == "select_data") {
			this.onSelectData();
		}
		else if(method == "insert_data") {
			this.onInsertData();
		}
    	//===============================================
		// end
    	//===============================================
		else {
			this.onMethodUnknown();
			return false;
		}
    	//===============================================
		return true;
	}
    //===============================================
    showData() {
        var lModalTable = document.getElementById("ModalTable");
        var lTableBody = document.getElementById("TableBody");
        var lTableMsg = document.getElementById("TableMsg");
		var lClassName = lTableBody.className;
        lTableMsg.style.display = "none";
        lTableBody.className = lClassName.replace(" AnimateShow", "");
        lTableBody.className = lClassName.replace(" AnimateHide", "");
        lTableBody.className += " AnimateShow";
        lModalTable.style.display = "block";
    }
    //===============================================
    onCloseTable() {
        var lModalTable = document.getElementById("ModalTable");
        var lTableBody = document.getElementById("TableBody");
        var lClassName = lTableBody.className;
        lTableBody.className = lClassName.replace(" AnimateShow", "");
        lTableBody.className = lClassName.replace(" AnimateHide", "");
        lTableBody.className += " AnimateHide";
        setTimeout(function() {
            lModalTable.style.display = "none";
        }, 400);
		this.clear();
    }
    //===============================================
    onCurrentData(obj, data) {
		var lCurrentData = document.getElementById("TableCurrentData");
		lCurrentData.value = data;
    }
    //===============================================
    onSelectData() {
		var lCurrentData = document.getElementById("TableCurrentData");
		var lSelectModule = document.getElementById("TableSelectModule");
		var lSelectMethod = document.getElementById("TableSelectMethod");
		//
		var lModule = lSelectModule.value;
		var lMethod = lSelectMethod.value;
		var lData = lCurrentData.value;
		//
		if(lModule == "") return false;
		if(lMethod == "") return false;
		if(lData == "") return false;
		server_call(lModule, lMethod, this, lData);
		return true;
    }
    //===============================================
    setCallback(key, module, method) {
		var lSelectModule = document.getElementById("TableSelectModule");
		var lSelectMethod = document.getElementById("TableSelectMethod");
		//
		if(key == "") return false;
		if(module == "") return false;
		if(method == "") return false;
		//
		if(key == "select") {
			lSelectModule.value = module;
			lSelectMethod.value = method;
		}
		return true;
    }
    //===============================================
    onInsertData() {
		this.pushRowH();
		for(var j = 0; j < 3; j++) {
			var lData = sprintf("<strong>Head[%s]</strong>", j);
			this.pushColH(lData, this.onTableCB);
		}
		for(var i = 0; i < 5; i++) {
			this.pushRow();
			for(var j = 0; j < 3; j++) {
				var lData = sprintf("Data[%s ; %s]", i, j);
				this.pushCol(lData, this.onTableCB);
			}
		}
    }
    //===============================================
    clear() {
		var lTable = document.getElementById("TableId");
		lTable.innerHTML = "";
    }
    //===============================================
    pushRowH() {
		this.rowH = this.header.insertRow();
    }
    //===============================================
    pushColH(data, value) {
		this.colH = this.rowH.insertCell();
		this.colH.innerHTML = value;
		var lRows = this.rowH.rowIndex;
		var lCols = this.colH.cellIndex;
		this.colH.addEventListener("click", function(e) {
			var lTable = new GTable();
			lTable.data = data;
			lTable.type = "0";
			lTable.rows = ""+lRows;
			lTable.cols = ""+lCols;
			lTable.value = value;
			var lData = lTable.serialize(true);
			server_call("table", "current_data", this, lData);
		});
    }
    //===============================================
    pushRow() {
		this.row = this.body.insertRow();
    }
    //===============================================
    pushCol(data, value) {
		this.col = this.row.insertCell();
		this.col.innerHTML = value;		
		var lRows = this.row.rowIndex;
		var lCols = this.col.cellIndex;
		this.row.classList.add("Table");
		this.col.addEventListener("click", function(e) {
			var lRow = this.parentNode;
			var lTable = new GTable();
			lTable.deselectAll("Table", "Active");
			lRow.classList.add("Active");
			lTable.data = data;
			lTable.type = "1";
			lTable.rows = ""+lRows;
			lTable.cols = ""+lCols;
			lTable.value = value;
			var lData = lTable.serialize(true);
			server_call("table", "current_data", this, lData);
		});
    }
    //===============================================
    deselectAll(tag, active) {
		var lRows = document.getElementsByClassName(tag);
		for(var i = 0; i < lRows.length; i++) {
			var lRow = lRows[i];
			lRow.classList.remove(active);
		}
	}
    //===============================================
    writeUi() {
		var lCurrentData = document.getElementById("TableCurrentData");
		var lSelectModule = document.getElementById("TableSelectModule");
		var lSelectMethod = document.getElementById("TableSelectMethod");
		//
		lCurrentData.value = this.currentData;
		lSelectModule.value = this.selectModule;
		lSelectMethod.value = this.selectMethod;
	}
    //===============================================
}
//===============================================
