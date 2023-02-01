//===============================================
class GPage extends GObject {
    //===============================================
	static m_instance = null;
    //===============================================
    constructor() {
        super();
        this.m_id = 0;
        this.m_parentId = 0;
        this.m_typeId = 0;
        this.m_name = ""
        this.m_typeName = ""
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
		lDom.addData(_code, "type_id", ""+this.m_typeId);
		lDom.addData(_code, "name", this.m_name);
		lDom.addData(_code, "type_name", this.m_typeName);
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
		this.m_typeId = +lDom.getItem(_code, "type_id");
		this.m_name = lDom.getItem(_code, "name");
		this.m_typeName = lDom.getItem(_code, "type_name");
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
		this.m_parentId = _obj.m_parentId;
		this.m_typeId = _obj.m_typeId;
		this.m_name = _obj.m_name;
		this.m_typeName = _obj.m_typeName;
		this.m_url = _obj.m_url;
		this.m_title = _obj.m_title;
		this.m_path = _obj.m_path;
    }
    //===============================================
    readMap(_index) {
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
        var lEditorPageTypeId = document.getElementById("EditorPageTypeId");
        //
		this.m_id = +lEditorPageId.value;
		this.m_parentId = +lEditorPageParentId.value;
		this.m_name = lEditorPageName.value;
		this.m_typeId = +lEditorPageTypeId.value;
    }
    //===============================================
    writeUi() {
        var lEditorPageId = document.getElementById("EditorPageId");
        var lEditorPageParentId = document.getElementById("EditorPageParentId");
        var lEditorPageName = document.getElementById("EditorPageName");
        var lEditorPageTypeId = document.getElementById("EditorPageTypeId");
        //
		lEditorPageId.value = +this.m_id;
		lEditorPageParentId.value = +this.m_parentId;
		lEditorPageName.value = this.m_name;
		lEditorPageTypeId.value = this.m_typeId;
        
        var lCombo = GComboBox.Instance();
        lCombo.initCombo(lEditorPageTypeId);
    }
    //===============================================
    onModule(_method, _obj, _data) {
        if(_method == "") {
            this.addError("La méthode est obligatoire.");
        }
        else if(_method == "save_page") {
            this.onSavePage(_obj, _data);
        }
        else if(_method == "search_page") {
            this.onSearchPage(_obj, _data);
        }
        else if(_method == "search_page_select") {
            this.onSearchPageSelect(_obj, _data);
        }
        else if(_method == "search_page_next") {
            this.onSearchPageNext(_obj, _data);
        }
        else if(_method == "delete_page") {
            this.onDeletePage(_obj, _data);
        }
        else if(_method == "new_page") {
            this.onNewPage(_obj, _data);
        }
        else if(_method == "load_page") {
            this.onLoadPage(_obj, _data);
        }
        else if(_method == "load_page_select") {
            this.onLoadPageSelect(_obj, _data);
        }
        else if(_method == "load_page_next") {
            this.onLoadPageNext(_obj, _data);
        }
        else if(_method == "select_address") {
            this.onSelectAddress(_obj, _data);
        }
        else {
            this.addError("Erreur la méthode est inconnue.");            
        }
        return !this.hasErrors();
    }
    //===============================================
    onSavePage(_obj, _data) {
        this.readUi();
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callRemote("page", "save_page", lData, this.onSavePageCB);        
    }
    //===============================================
    onSavePageCB(_data) {
        var lPage = new GPage();
        lPage.deserialize(_data);
        lPage.writeUi();
    }
    //===============================================
    onSearchPage(_obj, _data) {
        this.readUi();
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callRemote("page", "search_page", lData, this.onSearchPageCB);        
    }
    //===============================================
    onSearchPageCB(_data) {
        var lLog = new GLog();
        var lPage = GPage.Instance();
        lPage.clearMap();
        lPage.deserialize(_data);
        lLog.deserialize(_data);
        if(!lLog.hasErrors()) {
            if(lPage.m_map.length == 1) {
                lPage.readMap(0);
                lPage.writeUi();
            }
            else if(lPage.m_map.length) {
                lPage.showTable("search_page_select", "search_page_next");
            }
            else {
                lLog.addLog("Le résultat est vide.");
                lLog.showLogs();
            }
        }
    }
    //===============================================
    onSearchPageSelect(_obj, _data) {
        var lPage = GPage.Instance();
        var lTable = new GTable();
        lTable.deserialize(_data);
        if(lTable.getType() == "cell") {
            lPage.readMap(lTable.getRow());
            lPage.writeUi();
            lTable.onCloseTable();
       }
    }
    //===============================================
    onDeletePage(_obj, _data) {
        this.readUi();
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callRemote("page", "delete_page", lData, this.onDeletePageCB);        
    }
    //===============================================
    onDeletePageCB(_data) {
        var lLog = new GLog();
        lLog.deserialize(_data);
        if(!lLog.hasErrors()) {
            var lPage = new GPage();
            lPage.onNewPage();
        }
    }
    //===============================================
    onNewPage(_obj, _data) {
        this.readUi();
        var lPage = new GPage();
        lPage.m_parentId = this.m_parentId;
        lPage.writeUi();
    }
    //===============================================
    onLoadPage(_obj, _data) {
        this.activeAddressBar(_obj);
        var lData = _obj.nextSibling.nextSibling.innerHTML;
        this.updateAddressParent(lData);
        var lAjax = new GAjax();
        lAjax.callRemote("page", "load_page", lData, this.onLoadPageCB);        
    }
    //===============================================
    onLoadPageCB(_data) {
        var lLog = new GLog();
        var lPage = GPage.Instance();
        lPage.clearMap();
        lPage.deserialize(_data);
        lLog.deserialize(_data);
        if(!lLog.hasErrors()) {
            if(lPage.m_map.length) {
                lPage.showTable("load_page_select", "load_page_next");
            }
            else {
                lLog.addLog("Le résultat est vide.");
                lLog.showLogs();
            }
        }
    }
    //===============================================
    onLoadPageSelect(_obj, _data) {
        var lPage = GPage.Instance();
        var lTable = new GTable();
        lTable.deserialize(_data);
        if(lTable.getType() == "cell") {
            lPage.readMap(lTable.getRow());
            lPage.updateAddressBar();
            lTable.onCloseTable();
        }
        else if(lTable.getType() == "header") {
            this.loadAddressParent();
            lTable.onCloseTable();
            this.onNewPage();
        }
        this.onNewPage();
    }
    //===============================================
    onLoadPageNext(_obj, _data) {

    }
    //===============================================
    onSelectAddress(_obj, _data) {
        var lData = _obj.nextSibling.nextSibling.innerHTML;
    }
    //===============================================
    updateAddressBar() {
        var lEditorPageAddress = document.getElementById("EditorPageAddress");
        var lEditorPageParentId = document.getElementById("EditorPageParentId");

        var lPage = new GPage();
        lPage.m_parentId = this.m_id;
        var lData = lPage.serialize();
        
        var lAddress = this.getPreviousAddressBar();
        lAddress += sprintf("<i class='Icon11 fa fa-chevron-right'></i>\n");
        lAddress += sprintf("<span class='Link10 EditorPageAddress' \
        onclick='call_server(\"page\", \"load_page\", this);' \
        ondbclick='call_server(\"page\", \"select_addressbar\", this);' \
        >%s</span>\n", this.m_name);
        lAddress += sprintf("<span hidden='true'>%s</span>\n", lData);

        lEditorPageParentId.value = this.m_id;
        lEditorPageAddress.innerHTML = lAddress;
    }
    //===============================================
    updateAddressParent(_data) {
        var lEditorPageAddressParent = document.getElementById("EditorPageAddressParent");
        lEditorPageAddressParent.innerHTML = _data;
    }
    //===============================================
    loadAddressParent() {
        var lEditorPageAddress = document.getElementById("EditorPageAddress");
        var lEditorPageAddressActive = document.getElementsByClassName("EditorPageAddress Active")[0];
        var lNode = lEditorPageAddressActive;
        var lData = "";
        while(1) {
            lNode = lNode.nextSibling
            if(!lNode) break;
            if(lNode.nodeType == 1) {
                lData = lNode.innerHTML;
                break;
            }
        }
        var lAddress = this.getPreviousAddressBar();
        lEditorPageAddress.innerHTML = lAddress;
        var lPage = new GPage();
        lPage.deserialize(lData);
        lPage.writeUi();
    }
    //===============================================
    getPreviousAddressBar() {
        var lEditorPageAddress = document.getElementById("EditorPageAddress");
        var lNode = lEditorPageAddress.firstChild;
        var lHtml = "";
        while(1) {
            if(lNode.nodeType == 1) {
                if(lNode.classList.contains("Active")) {
                    lHtml += lNode.outerHTML + "\n";
                    while(1) {
                        lNode = lNode.nextSibling;
                        if(lNode.nodeType == 1) {
                            lHtml += lNode.outerHTML + "\n";
                            break;
                        }
                    }
                    break;
                }
                lHtml += lNode.outerHTML + "\n";
            }
            lNode = lNode.nextSibling;
        }
        return lHtml;
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
    showTable(_selectCB, _nextCB) {
        var lTable = new GTable();
        lTable.setCallback("select", "page", _selectCB)
        lTable.setCallback("next", "page", _nextCB)
        lTable.setHeaderVisible(true);
        lTable.setNextEnable(true);
        //
        lTable.pushRowH();
        lTable.pushColH(0, "répertoire");
        //
        for(var i = 0; i < this.m_map.length; i++) {
            var lObj = this.m_map[i]
            var lIcon = (lObj.m_typeName == "file" ? "file-o" : "folder");
            lTable.pushRow();
            lTable.pushCol(0, lObj.m_name, lIcon);
        }
        //
        lTable.showData();
        lTable.scrollBottom();
    }
    //===============================================
}
//===============================================
