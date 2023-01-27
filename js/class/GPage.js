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
		this.m_id = lDom.getItem(_code, "id");
		this.m_parentId = lDom.getItem(_code, "parent_id");
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
        else if(_method == "select_page_table") {
            this.onSelectPageTable(_method, _obj, _data);
        }
        else if(_method == "next_page_table") {
            this.onNextPageTable(_method, _obj, _data);
        }
        else {
            this.addError("Erreur la méthode est obligatoire.");            
        }
    }
    //===============================================
    onLoadPages(_data) {
        var lPage = GPage.Instance();
        lPage.clearMap();
        lPage.deserialize(_data);
        lPage.showTable();
    }
    //===============================================
    onSelectPageTable(_method, _obj, _data) {
        var lPage = GPage.Instance();
        var lTable = new GTable();
        lTable.deserialize(_data);
        lPage.loadData(lTable.getRow());
        lPage.writeUi();
        lTable.onCloseTable();
    }
    //===============================================
    onNextPageTable(_method, _obj, _data) {

    }
    //===============================================
    savePage() {
        this.readUi();
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callRemote("page", "save_page", lData, this.onPage);        
    }
    //===============================================
    searchPage() {
        this.readUi();
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callRemote("page", "search_page", lData, this.onPage);        
    }
    //===============================================
    deletePage() {
        this.readUi();
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callRemote("page", "delete_page", lData, this.onPage);        
    }
    //===============================================
    newPage() {
        var lPage = new GPage();
        lPage.writeUi();
    }
    //===============================================
    loadPages() {
        this.readUi();
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callRemote("page", "load_pages", lData, this.onLoadPages);        
    }
    //===============================================
    onPage(_data) {
        var lPage = new GPage();
        lPage.deserialize(_data);
        lPage.writeUi();
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
