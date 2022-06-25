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
		this.headerVisible = 0;
		//
		this.row = null;
		this.col = null;
		this.rowH = null;
		this.colH = null;
		//
		this.tablePage = null;
		this.nextData = null;
		this.selectData = null;
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
		else if(method == "next_data") {
			this.onNextData();
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
		this.readUi();
		this.deserialize(data);
		if(this.type == "0") return false;
		this.currentData = data;
		this.writeUi();
		return true;
    }
    //===============================================
    onSelectData() {
		this.readUi();
		if(this.currentData == "") return false;
		if(this.selectModule == "") return false;
		if(this.selectMethod == "") return false;
		server_call(this.selectModule, this.selectMethod, this, this.currentData);
		this.writeUi();
		return true;
    }
    //===============================================
    onNextData() {
		this.readUi();
		if(this.nextModule == "") return false;
		if(this.nextMethod == "") return false;
		server_call(this.nextModule, this.nextMethod);
		this.writeUi();
		return true;
	}
    //===============================================
    setCallback(key, module, method) {
		this.readUi();
		if(key == "") return false;
		if(module == "") return false;
		if(method == "") return false;
		//
		if(key == "select") {
			this.selectModule = module;
			this.selectMethod = method;
		}
		else if(key == "next") {
			this.nextModule = module;
			this.nextMethod = method;
		}
		this.writeUi();
		return true;
    }
    //===============================================
    clear() {
		var lTable = document.getElementById("TableId");
		var lCurrentData = document.getElementById("TableCurrentData");
		lTable.innerHTML = "";
		lCurrentData.value = "";
    }
    //===============================================
    pushRowH() {
		this.readUi();
		if(this.headerVisible) return false;
		this.rowH = this.header.insertRow();
		this.writeUi();
		return true;
    }
    //===============================================
    pushColH(data, value) {
		this.readUi();
		if(this.headerVisible) return false;
		this.colH = this.rowH.insertCell();
		this.colH.innerHTML = value;
		var lRows = this.rowH.rowIndex;
		var lCols = this.colH.cellIndex;
		//
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
		//
		this.colH.addEventListener("dblclick", function(e) {
			var lTable = new GTable();
			lTable.data = data;
			lTable.type = "0";
			lTable.rows = ""+lRows;
			lTable.cols = ""+lCols;
			lTable.value = value;
			var lData = lTable.serialize(true);
			server_call("table", "select_data", this, lData);
		});
		this.writeUi();
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
		//
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
		//
		this.col.addEventListener("dblclick", function(e) {
			var lTable = new GTable();
			lTable.data = data;
			lTable.type = "0";
			lTable.rows = ""+lRows;
			lTable.cols = ""+lCols;
			lTable.value = value;
			var lData = lTable.serialize(true);
			server_call("table", "select_data", this, lData);
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
	scrollBottom() {
		this.readUi();
		this.tablePage.scrollTop = this.tablePage.scrollHeight;
		this.writeUi();
	}
    //===============================================
	setHeaderVisible(isVisible) {
		this.readUi();
		this.headerVisible = isVisible;
		this.writeUi();
	}
    //===============================================
	getHeaderVisible() {
		this.readUi();
		return this.headerVisible;
	}
    //===============================================
	readUi() {
		var lHeaderVisible = document.getElementById("TableHeaderVisible");
		var lSelectModule = document.getElementById("TableSelectModule");
		var lSelectMethod = document.getElementById("TableSelectMethod");
		var lNextModule = document.getElementById("TableNextModule");
		var lNextMethod = document.getElementById("TableNextMethod");
		//
		var lTableId = document.getElementById("TableId");
		var lTablePage = document.getElementById("TablePage");
        var lNextData = document.getElementById("TableNextData");
        var lSelectData = document.getElementById("TableSelectData");
		//
		this.headerVisible = +lHeaderVisible.value;
		this.selectModule = lSelectModule.value;
		this.selectMethod = lSelectMethod.value;
		this.nextModule = lNextModule.value;
		this.nextMethod = lNextMethod.value;
		//
		this.tableId = lTableId;
		this.tablePage = lTablePage;
		this.nextData = lNextData;
		this.selectData = lSelectData;
	}
    //===============================================
	writeUi() {
		var lHeaderVisible = document.getElementById("TableHeaderVisible");
		var lSelectModule = document.getElementById("TableSelectModule");
		var lSelectMethod = document.getElementById("TableSelectMethod");
		var lNextModule = document.getElementById("TableNextModule");
		var lNextMethod = document.getElementById("TableNextMethod");
		//
		lHeaderVisible.value = this.headerVisible;
		lSelectModule.value = this.selectModule;
		lSelectMethod.value = this.selectMethod;
		lNextModule.value = this.nextModule;
		lNextMethod.value = this.nextMethod;
	}
    //===============================================
    buttonOn() {
        var lPrevious = document.getElementById("TablePreviousData");
        var lSelect = document.getElementById("TableSelectData");
        var lNext = document.getElementById("TableNextData");
		//
		lPrevious.disabled = false;
		lSelect.disabled = false;
		lNext.disabled = false;
    }
    //===============================================
    buttonOff() {
        var lPrevious = document.getElementById("TablePreviousData");
        var lSelect = document.getElementById("TableSelectData");
        var lNext = document.getElementById("TableNextData");
		//
		lPrevious.disabled = true;
		lSelect.disabled = true;
		lNext.disabled = true;
    }
    //===============================================
    updateButton() {
		//
		var lSearch = new Gsearch();
		lSearch.onReadUi();
		var lOffsetNext = lSearch.dataOffset + lSearch.dataSize;
		var lOffsetPrev = lSearch.dataOffset - lSearch.dataSize;
		
		if(lOffsetNext >= lSearch.dataCount) {
			lNext.disabled = true;			
		}
		else {
			lNext.disabled = false;			
		}
		//
		if(lOffsetPrev < 0) {
			lPrevious.disabled = true;			
		}
		else {
			lPrevious.disabled = false;			
		}
    }
    //===============================================
}
//===============================================
