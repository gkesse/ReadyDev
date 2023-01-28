//===============================================
class GPage extends GObject {
    //===============================================
	static m_instance = null;
    //===============================================
    constructor() {
        super();
        this.m_id = 0;
        this.m_parentId = 0;
        this.m_name = ""
        this.m_url = "";
        this.m_title = "";
        this.m_path = "";
    }
    //===============================================
	static Instance() {
		if(this.m_instance == null) {
			this.m_instance = new GPage();
		}
		return this.m_instance;
	}	
    //===============================================
	serialize(_code = "page") {
		var lDom = new GCode();
		lDom.createDoc();
		lDom.addData(_code, "id", ""+this.m_id);
		lDom.addData(_code, "parent_id", ""+this.m_parentId);
		lDom.addData(_code, "name", this.m_name);
		lDom.addData(_code, "url", this.m_url);
		lDom.addData(_code, "title", this.m_title);
		lDom.addData(_code, "path", this.m_path);
		lDom.addMap(_code, this.m_map);
		return lDom.toString();
	}
    //===============================================
	deserialize(_data, _code = "page") {
		var lDom = new GCode();
		lDom.loadXml(_data);
		this.m_id = +lDom.getItem(_code, "id");
		this.m_parentId = +lDom.getItem(_code, "parent_id");
		this.m_name = lDom.getItem(_code, "name");
		this.m_url = lDom.getItem(_code, "url");
		this.m_title = lDom.getItem(_code, "title");
		this.m_path = lDom.getItem(_code, "path");
        lDom.getMap(_code, this.m_map, this);
	}
    //===============================================
    clone() {
        var lObj = new GPage;
        lObj.setPage(this);
        return lObj;
    }
    //===============================================
    setPage(_obj) {
		this.m_id = _obj.m_id;
		this.m_name = _obj.m_name;
		this.m_url = _obj.m_url;
		this.m_title = _obj.m_title;
		this.m_path = _obj.m_path;
    }
    //===============================================
    loadData(_index) {
		if(_index < 0 || _index >= this.m_map.length) {
            this.addError("L'index de la donnée est incorrect.");
            return false;
        }
        var lObj = this.m_map[_index];
        this.setPage(lObj);
        return !this.hasErrors();
    }
    //===============================================
    readUi() {
        var lEditorPageId = document.getElementById("EditorPageId");
        var lEditorPageParentId = document.getElementById("EditorPageParentId");
        var lEditorPageName = document.getElementById("EditorPageName");
        //
		this.m_id = lEditorPageId.value;
		this.m_parentId = lEditorPageParentId.value;
		this.m_name = lEditorPageName.value;
    }
    //===============================================
    writeUi() {
        var lEditorPageId = document.getElementById("EditorPageId");
        var lEditorPageParentId = document.getElementById("EditorPageParentId");
        var lEditorPageName = document.getElementById("EditorPageName");
        //
		lEditorPageId.value = +this.m_id;
		lEditorPageParentId.value = +this.m_parentId;
		lEditorPageName.value = this.m_name;
    }
    //===============================================
    onModule(_method, _obj, _data) {
        if(_method == "") {
            this.addError("Erreur la méthode est obligatoire.");
        }
        else if(_method == "save_page") {
            this.onSavePage(_obj, _data);
        }
        else if(_method == "search_page") {
            this.onSearchPage(_obj, _data);
        }
        else if(_method == "delete_page") {
            this.onDeletePage(_obj, _data);
        }
        else if(_method == "new_page") {
            this.onNewPage(_obj, _data);
        }
        else if(_method == "load_pages") {
            this.onLoadPages(_obj, _data);
        }
        else if(_method == "select_page_table") {
            this.onSelectPageTable(_obj, _data);
        }
        else if(_method == "next_page_table") {
            this.onNextPageTable(_obj, _data);
        }
        else {
            this.addError("Erreur la méthode est obligatoire.");            
        }
        return !this.hasErrors();
    }
    //===============================================
    onSavePage(_obj, _data) {
        this.readUi();
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callRemote("page", "save_page", lData, this.onPageCB);        
    }
    //===============================================
    onSearchPage(_obj, _data) {
        this.readUi();
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callRemote("page", "search_page", lData, this.onPageCB);        
    }
    //===============================================
    onDeletePage(_obj, _data) {
        this.readUi();
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callRemote("page", "delete_page", lData, this.onPageCB);        
    }
    //===============================================
    onNewPage(_obj, _data) {
        var lPage = new GPage();
        lPage.writeUi();
    }
    //===============================================
    onLoadPages(_obj, _data) {
        this.activeAddressBar(_obj);
        var lData = _obj.nextSibling.nextSibling.innerHTML;
        var lPage = new GPage();
        var lAjax = new GAjax();
        lAjax.callRemote("page", "load_pages", lData, this.onLoadPagesCB);        
    }
    //===============================================
    onLoadPagesCB(_data) {
        var lPage = GPage.Instance();
        lPage.clearMap();
        lPage.deserialize(_data);
        if(lPage.m_map.length) {
            lPage.showTable();
        }
        else {
            var lLog = new GLog();
            lLog.addLog("Le résultat est vide.");
            lLog.showLogs();
        }
    }
    //===============================================
    onPageCB(_data) {
        var lPage = new GPage();
        lPage.deserialize(_data);
        lPage.writeUi();
    }
    //===============================================
    onSelectPageTable(_obj, _data) {
        var lPage = GPage.Instance();
        var lTable = new GTable();
        lTable.deserialize(_data);
        lPage.loadData(lTable.getRow());
        lPage.cleanAddressBar();
        lPage.updateAddressBar();
        lTable.onCloseTable();
    }
    //===============================================
    onNextPageTable(_obj, _data) {

    }
    //===============================================
    updateAddressBar() {
        var lEditorPageAddress = document.getElementById("EditorPageAddress");
        var lEditorPageParentId = document.getElementById("EditorPageParentId");

        var lPage = new GPage();
        lPage.m_parentId = this.m_id;
        var lData = lPage.serialize();
        
        var lAddress = "";
        lAddress += sprintf("<i class='Icon11 fa fa-chevron-right'></i>\n");
        lAddress += sprintf("<span class='Link10 EditorPageAddress' onclick='call_server(\"page\", \"load_pages\", this);'>%s</span>\n", this.m_name);
        lAddress += sprintf("<div hidden='true'>%s</div>\n", lData);

        lEditorPageParentId.value = this.m_id;
        lEditorPageAddress.innerHTML += lAddress;
    }
    //===============================================
    cleanAddressBar() {
        var lEditorPageAddressActive = document.getElementsByClassName("EditorPageAddress Active")[0];
        var lNode = lEditorPageAddressActive.nextSibling.nextSibling;
        while(1) {
            if(!lNode) break;
            lNode = lNode.nextSibling;
            if(!lNode) break;
            var lNext = lNode.nextSibling;
            lNode.remove();
            lNode = lNext;
        }
    }
    //===============================================
    activeAddressBar(_obj) {
        var lLinks = document.getElementsByClassName("EditorPageAddress");
        for(var i = 0; i < lLinks.length; i++) {
            var lLink = lLinks[i];
            lLink.className = lLink.className.replace(" Active", "");
        }
        _obj.className += " Active";
    }
    //===============================================
    showTable() {
        var lTable = new GTable();
        lTable.setCallback("select", "page", "select_page_table")
        lTable.setCallback("next", "page", "next_page_table")
        lTable.setHeaderVisible(true);
        lTable.setNextEnable(true);
        //
        lTable.pushRowH();
        lTable.pushColH(0, "répertoire");
        //
        for(var i = 0; i < this.m_map.length; i++) {
            var lObj = this.m_map[i]
            lTable.pushRow();
            lTable.pushCol(0, lObj.m_name);
        }
        //
        lTable.showData();
        lTable.scrollBottom();
    }
    //===============================================
}
//===============================================
