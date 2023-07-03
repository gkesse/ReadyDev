//===============================================
class GTable extends GModule {
    //===============================================
    constructor() {
        super();
        this.m_data = "";
        this.m_type = "header";
        this.m_row = 0;
        this.m_col = 0;
        this.m_value = "";

        this.m_currentData = "";
        this.m_selectModule = "";
        this.m_selectMethod = "";
        this.m_headerVisible = false;

        this.m_rowB = null;
        this.m_colB = null;
        this.m_rowH = null;
        this.m_colH = null;

        this.m_tablePage = null;
        this.m_nextData = null;
        this.m_selectData = null;

        var lTable = document.getElementById("TableId");
        this.m_header = lTable.createTHead();
        this.m_body = lTable.createTBody();
    }
    //===============================================
    getRow() {
        return this.m_row;
    }
    //===============================================
    getCol() {
        return this.m_col;
    }
    //===============================================
    getType() {
        return this.m_type;
    }
    //===============================================
    setSelectCB(_module, _method) {
        this.m_selectModule = _module;
        this.m_selectMethod = _method;
        this.writeUi();
    }
    //===============================================
    setNextCB(_module, _method) {
        this.m_nextModule = _module;
        this.m_nextMethod = _method;
        this.writeUi();
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
        if(!this.m_headerVisible) return false;
        this.m_rowH = this.m_header.insertRow();
        this.writeUi();
        return !this.m_logs.hasErrors();
    }
    //===============================================
    pushColH(_data, _value, _icon = "") {
        var lValue = _value;
        if(_icon != "") {
            lValue = sprintf("<i class='fa fa-%s'></i> %s\n", _icon, lValue);
        }
        this.readUi();
        if(!this.m_headerVisible) return false;
        this.m_colH = this.m_rowH.insertCell();
        this.m_colH.innerHTML = lValue;
        var lRow = this.m_rowH.rowIndex;
        var lCol = this.m_colH.cellIndex;

        this.m_colH.addEventListener("click", function(e) {
            var lTable = new GTable();
            lTable.m_data = _data;
            lTable.m_type = "header";
            lTable.m_row = lRow;
            lTable.m_col = lCol;
            lTable.m_value = _value;
            var lData = lTable.serialize();
            call_server("table", "current_data", this, lData);
        });

        this.m_colH.addEventListener("dblclick", function(e) {
            var lTable = new GTable();
            lTable.m_data = _data;
            lTable.m_type = "header";
            lTable.m_row = lRow;
            lTable.m_col = lCol;
            lTable.m_value = _value;
            var lData = lTable.serialize();
            call_server("table", "select_data", this, lData);
        });
        
        this.writeUi();
    }
    //===============================================
    pushRow() {
        this.m_rowB = this.m_body.insertRow();
    }
    //===============================================
    pushCol(_data, _value, _icon = "") {
        var lValue = _value;
        if(_icon != "") {
            lValue = sprintf("<i class='fa fa-%s'></i> %s\n", _icon, lValue);
        }
        this.m_colB = this.m_rowB.insertCell();
        this.m_colB.innerHTML = lValue;        
        var lRow = this.m_rowB.rowIndex;
        var lCol = this.m_colB.cellIndex;
        this.m_rowB.classList.add("Table");
        
        if(this.m_headerVisible) lRow--;

        this.m_colB.addEventListener("click", function(e) {
            var lRowP = this.parentNode;
            var lTable = new GTable();
            lTable.deselectAll("Table", "Active");
            lRowP.classList.add("Active");
            lTable.m_data = _data;
            lTable.m_type = "cell";
            lTable.m_row = lRow + 1;
            lTable.m_col = lCol + 1;
            lTable.m_value = _value;
            var lData = lTable.serialize();
            call_server("table", "current_data", this, lData);
        });

        this.m_colB.addEventListener("dblclick", function(e) {
            var lTable = new GTable();
            lTable.m_data = _data;
            lTable.m_type = "cell";
            lTable.m_row = lRow + 1;
            lTable.m_col = lCol + 1;
            lTable.m_value = _value;
            var lData = lTable.serialize();
            call_server("table", "select_data", this, lData);
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
        this.m_tablePage.scrollTop = this.m_tablePage.scrollHeight;
        this.writeUi();
    }
    //===============================================
    setHeaderVisible(_isVisible) {
        this.m_headerVisible = _isVisible;
        this.writeUi();
    }
    //===============================================
    getHeaderVisible() {
        this.readUi();
        return this.m_headerVisible;
    }
    //===============================================
    setNextEnable(_isEnable) {
        this.readUi();
        this.m_nextData.disabled = !_isEnable;
    }
    //===============================================
    showData() {
        var lTableModal = document.getElementById("TableModal");
        var lTableForm = document.getElementById("TableForm");
        
        lTableForm.classList.remove("AnimateHide");
        lTableForm.classList.add("AnimateShow");
        lTableModal.style.display = "block";
    }
    //===============================================
    readUi() {
        var lHeaderVisible = document.getElementById("TableHeaderVisible");
        var lSelectModule = document.getElementById("TableSelectModule");
        var lSelectMethod = document.getElementById("TableSelectMethod");
        var lNextModule = document.getElementById("TableNextModule");
        var lNextMethod = document.getElementById("TableNextMethod");
        var lCurrentData = document.getElementById("TableCurrentData");

        var lTableId = document.getElementById("TableId");
        var lTablePage = document.getElementById("TablePage");
        var lNextData = document.getElementById("TableNextData");
        var lSelectData = document.getElementById("TableSelectData");

        this.m_headerVisible = stob(lHeaderVisible.value);
        this.m_selectModule = lSelectModule.value;
        this.m_selectMethod = lSelectMethod.value;
        this.m_nextModule = lNextModule.value;
        this.m_nextMethod = lNextMethod.value;
        this.m_currentData = lCurrentData.value;

        this.m_tableId = lTableId;
        this.m_tablePage = lTablePage;
        this.m_nextData = lNextData;
        this.m_selectData = lSelectData;
    }
    //===============================================
    writeUi() {
        var lHeaderVisible = document.getElementById("TableHeaderVisible");
        var lSelectModule = document.getElementById("TableSelectModule");
        var lSelectMethod = document.getElementById("TableSelectMethod");
        var lNextModule = document.getElementById("TableNextModule");
        var lNextMethod = document.getElementById("TableNextMethod");
        var lCurrentData = document.getElementById("TableCurrentData");

        lHeaderVisible.value = this.m_headerVisible;
        lSelectModule.value = this.m_selectModule;
        lSelectMethod.value = this.m_selectMethod;
        lNextModule.value = this.m_nextModule;
        lNextMethod.value = this.m_nextMethod;
        lCurrentData.value = this.m_currentData;
    }
    //===============================================
    serialize(_code = "table") {
        var lDom = new GCode();
        lDom.createDoc();
        lDom.addData(_code, "data", this.m_data.toBase64());
        lDom.addData(_code, "type", this.m_type);
        lDom.addData(_code, "row", this.m_row);
        lDom.addData(_code, "col", this.m_col);
        lDom.addData(_code, "value", this.m_value);
        return lDom.toString();
    }
    //===============================================
    deserialize(_data, _code = "table") {
        super.deserialize(_data);
        var lDom = new GCode();
        lDom.loadXml(_data);
        this.m_data = lDom.getData(_code, "data").fromBase64();
        this.m_type = lDom.getData(_code, "type");
        this.m_row = lDom.getData(_code, "row");
        this.m_col = lDom.getData(_code, "col");
        this.m_value = lDom.getData(_code, "value");
    }
    //===============================================
    run(_method, _obj, _data) {
        if(_method == "") {
            this.m_logs.addError("La méthode est obligatoire.");
        }
        //===============================================
        else if(_method == "close_table") {
            this.onCloseTable(_method, _obj, _data);
        }
        else if(_method == "current_data") {
            this.onCurrentData(_method, _obj, _data);
        }
        else if(_method == "select_data") {
            this.onSelectData(_method, _obj, _data);
        }
        else if(_method == "next_data") {
            this.onNextData(_method, _obj, _data);
        }
        //===============================================
        else {
            this.m_logs.addError("La méthode est inconnue.");
        }
        return !this.m_logs.hasErrors();
    }
    //===============================================
    onCloseTable(_method, _obj, _data) {
        var lTableModal = document.getElementById("TableModal");
        var lTableForm = document.getElementById("TableForm");
        
        lTableForm.classList.add("AnimateHide");

        setTimeout(function() {
            lTableModal.style.display = "none";
        }, 400);
        this.clear();
    }
    //===============================================
    onCurrentData(_method, _obj, _data) {
        this.readUi();
        this.deserialize(_data);
        this.m_currentData = _data;
        this.writeUi();
        return true;
    }
    //===============================================
    onSelectData(_method, _obj, _data) {
        this.readUi();
        if(this.m_selectModule == "") {
            this.m_logs.addError("Le module courant est obligatoire.");
            return false;
        }
        if(this.m_selectMethod == "") {
            this.m_logs.addError("La méthode courant est obligatoire.");
            return false;
        }
        call_server(this.m_selectModule, this.m_selectMethod, this, this.m_currentData);
        this.writeUi();
        return !this.m_logs.hasErrors();
    }
    //===============================================
    onNextData(_method, _obj, _data) {
        this.readUi();
        if(this.m_nextModule == "") {
            this.m_logs.addError("Le module suivant est obligatoire.");
            return false;
        }
        if(this.m_nextMethod == "") {
            this.m_logs.addError("La méthode suivante est obligatoire.");
            return false;
        }
        call_server(this.m_nextModule, this.m_nextMethod);
        this.writeUi();
        return true;
    }
    //===============================================
}
//===============================================
