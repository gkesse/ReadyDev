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
		this.row = null;
		this.col = null;
		//
		this.rowH = null;
		this.colH = null;
		//
        this.table = document.getElementById("TableId");
		this.header = this.table.createTHead();
		this.body = this.table.createTBody();
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
		var lTableCurrentData = document.getElementById("TableCurrentData");
		lTableCurrentData.value = data;
    }
    //===============================================
    onSelectData() {
        var lTableCurrentData = document.getElementById("TableCurrentData");
		var lData = lTableCurrentData.value;
		server_call("manager", "select_data", this, lData);
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
    clear() {
		this.table.innerHTML = "";
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
}
//===============================================
