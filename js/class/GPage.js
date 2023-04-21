//===============================================
class GPage extends GObject {
    //===============================================
    static m_instance = null;
    //===============================================
    constructor() {
        super();
        this.m_root = "";
        this.m_path = "";
        this.m_name = "";
        this.m_content = "";
        this.m_defaultAddress = "";
        this.m_defaultPage = "";
    }
    //===============================================
    static Instance() {
        if(this.m_instance == null) {
            this.m_instance = new GPage();
        }
        return this.m_instance;
    }    
    //===============================================
    clone() {
        return new GPage();
    }
    //===============================================
    setObj(_obj) {
        this.m_root = _obj.m_root;
        this.m_path = _obj.m_path;
        this.m_name = _obj.m_name;
        this.m_content = _obj.m_content;
        this.m_defaultAddress = _obj.m_defaultAddress;
        this.m_defaultPage = _obj.m_defaultPage;
    }
    //===============================================
    isEqual(_obj) {
        var lEqualOk = true;
        lEqualOk &= (this.m_root == _obj.m_root);
        lEqualOk &= (this.m_path == _obj.m_path);
        lEqualOk &= (this.m_name == _obj.m_name);
        lEqualOk &= (this.m_content == _obj.m_content);
        lEqualOk &= (this.m_defaultAddress == _obj.m_defaultAddress);
        lEqualOk &= (this.m_defaultPage == _obj.m_defaultPage);
        return lEqualOk;
    }
    //===============================================
    init() {
        if(this.isAdmin()) {
            this.onLoadDefaultAddress();
            this.onLoadDefaultPage();
        }
    }    
    //===============================================
    showTable(_selectCB, _nextCB) {
        var lTable = new GTable();
        lTable.setSelectCB("page", _selectCB);
        lTable.setNextCB("page", _nextCB);
        lTable.setHeaderVisible(true);
        lTable.setNextEnable(true);
        
        lTable.pushRowH();
        lTable.pushColH("", "répertoire");
        
        for(var i = 0; i < this.m_map.length; i++) {
            var lObj = this.m_map[i]
            var lIcon = "folder";
            lTable.pushRow();
            lTable.pushCol("", lObj.m_name, lIcon);
        }
        
        lTable.showData();
        lTable.scrollBottom();
    }    
    //===============================================
    updateAddress() {
        var lEditorPageAddress = document.getElementById("EditorPageAddress");
        
        var lHtml = "";
        var lPath = "";
        var lPaths = this.m_path.split("/");
        for(var i = 0; i < lPaths.length; i++) {
            var lPathI = lPaths[i];
            if(i != 0) {
                lPath += "/";
            }
            if(i == 0) {
                lHtml += sprintf("<i class='Form7 fa fa-folder' onclick='call_server(\"page\", \"load_page_path\", this)'></i>\n");
            }
            if(i != 0) {
                lHtml += sprintf("<i class='Form6 fa fa-chevron-right'></i>\n");
            }
            lPath += lPathI;
            if(i != 0) {
                lHtml += sprintf("<span class='Form7' onclick='call_server(\"page\", \"load_page_path\", this)'>%s</span>\n", lPathI);
            }
            lHtml += sprintf("<input type='hidden' value='%s'/>\n", lPath);
        }
        
        lEditorPageAddress.innerHTML = lHtml;
    }
    //===============================================
    readPathObj(_obj) {
        var lPath = _obj.nextElementSibling;
        this.m_path = lPath.value;
    }
    //===============================================
    readRoot() {
        var lEditorPageRoot = document.getElementById("EditorPageRoot");
        this.m_root = lEditorPageRoot.value;
    }
    //===============================================
    readPath() {
        var lEditorPagePath = document.getElementById("EditorPagePath");
        this.m_path = lEditorPagePath.value;
    }
    //===============================================
    readDefaultAddress() {
        var lEditorPageDefaultAddress = document.getElementById("EditorPageDefaultAddress");
        this.m_defaultAddress = lEditorPageDefaultAddress.innerHTML;
    }
    //===============================================
    writeDefaultAddress() {
        var lEditorPageDefaultAddress = document.getElementById("EditorPageDefaultAddress");
        var lPage = new GPage();
        lPage.setObj(this);
        lEditorPageDefaultAddress.innerHTML = lPage.serialize();
    }
    //===============================================
    readDefaultPage() {
        var lEditorPageDefaultPage = document.getElementById("EditorPageDefaultPage");
        this.m_defaultPage = lEditorPageDefaultPage.innerHTML;
    }
    //===============================================
    writeDefaultPage() {
        var lEditorPageDefaultPage = document.getElementById("EditorPageDefaultPage");
        var lPage = new GPage();
        lPage.setObj(this);
        lEditorPageDefaultPage.innerHTML = lPage.serialize();
    }
    //===============================================
    readEditionPage() {
        var lEditorEditionPage = document.getElementById("EditorEditionPage");
        this.m_content = lEditorEditionPage.innerHTML;
    }
    //===============================================
    writeEditionPage() {
        var lEditorEditionPage = document.getElementById("EditorEditionPage");
        lEditorEditionPage.innerHTML = this.m_content;
    }
    //===============================================
    readUi() {
        var lEditorPageRoot = document.getElementById("EditorPageRoot");
        var lEditorPagePath = document.getElementById("EditorPagePath");
        var lEditorPageName = document.getElementById("EditorPageName");
        
        this.m_root = lEditorPageRoot.value;
        this.m_path = lEditorPagePath.value;
        this.m_name = lEditorPageName.value;
    }
    //===============================================
    writeUi() {
        var lEditorPageRoot = document.getElementById("EditorPageRoot");
        var lEditorPagePath = document.getElementById("EditorPagePath");
        var lEditorPageName = document.getElementById("EditorPageName");
        
        lEditorPageRoot.value = this.m_root;
        lEditorPagePath.value = this.m_path;
        lEditorPageName.value = this.m_name;
    }
    //===============================================
    serialize(_code = "page") {
        var lDom = new GCode();
        lDom.createDoc();
        lDom.addData(_code, "root", this.m_root);
        lDom.addData(_code, "path", this.m_path);
        lDom.addData(_code, "name", this.m_name);
        lDom.addData(_code, "content", utf8_to_b64(this.m_content));
        lDom.addData(_code, "default_address", utf8_to_b64(this.m_defaultAddress));
        lDom.addData(_code, "default_page", utf8_to_b64(this.m_defaultPage));
        lDom.addMap(_code, this.m_map);
        return lDom.toString();
    }
    //===============================================
    deserialize(_data, _code = "page") {
        var lDom = new GCode();
        lDom.loadXml(_data);
        this.m_root = lDom.getItem(_code, "root");
        this.m_path = lDom.getItem(_code, "path");
        this.m_name = lDom.getItem(_code, "name");
        this.m_content = b64_to_utf8(lDom.getItem(_code, "content"));
        this.m_defaultAddress = b64_to_utf8(lDom.getItem(_code, "default_address"));
        this.m_defaultPage = b64_to_utf8(lDom.getItem(_code, "default_page"));
        lDom.getMap(_code, this.m_map, this);
    }
    //===============================================
    run(_method, _obj, _data) {
        if(_method == "") {
            this.addError("La méthode est obligatoire.");
        }
        // page
        else if(_method == "load_page") {
            this.onLoadPage(_obj, _data);
        }
        else if(_method == "load_page_select") {
            this.onLoadPageSelect(_obj, _data);
        }
        else if(_method == "load_page_path") {
            this.onLoadPagePath(_obj, _data);
        }
        else if(_method == "load_page_path_select") {
            this.onLoadPagePathSelect(_obj, _data);
        }
        else if(_method == "create_page") {
            this.onCreatePage(_obj, _data);
        }
        else if(_method == "new_page") {
            this.onNewPage(_obj, _data);
        }
        // edition
        else if(_method == "load_page_edition") {
            this.onLoadPageEdition(_obj, _data);
        }
        else if(_method == "save_page_edition") {
            this.onSavePageEdition(_obj, _data);
        }
        //
        else {
            this.addError("Erreur la méthode est inconnue.");            
        }
        return !this.hasErrors();
    }
    //===============================================
    // page
    //===============================================
    onLoadPage(_obj, _data) {
        this.readUi();
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callLocal("page", "load_page", lData, this.onLoadPageCB);        
    }
    //===============================================
    onLoadPageCB(_data, _isOk) {
        if(_isOk) {
            var lPage = GPage.Instance();
            lPage.clearMap();
            lPage.deserialize(_data);
            if(lPage.m_map.length == 1) {
                lPage.loadFromMap(0);
                lPage.writeUi();
                lPage.writeDefaultPage();
                lPage.onStoreDefaultPage();
            }
            else if(lPage.m_map.length) {
                lPage.showTable("load_page_select", "load_page_next");
            }
            else {
                lPage.addLog("Le résultat est vide.");
                lPage.showLogsX();
            }
        }
    }
    //===============================================
    onLoadPageSelect(_obj, _data) {
        var lPage = GPage.Instance();
        var lTable = new GTable();
        lTable.deserialize(_data);
        if(lTable.getType() == "cell") {
            lTable.onCloseTable();
            lPage.loadFromMap(lTable.getRow());
            lPage.writeUi();
            lPage.writeDefaultPage();
            lPage.onStoreDefaultPage();
        }
    }
    //===============================================
    onStoreDefaultPage(_obj, _data) {
        this.readDefaultPage();
        this.m_root = "/data/cache/data";
        this.m_path = "";
        this.m_name = "cache_default_page.xml";
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callLocal("page", "store_default_page", lData, this.onStoreDefaultAddressCB);        
    }
    //===============================================
    onLoadDefaultPage(_obj, _data) {
        this.m_root = "/data/cache/data";
        this.m_name = "cache_default_page.xml";
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callLocal("page", "load_default_page", lData, this.onLoadDefaultPageCB);        
    }
    //===============================================
    onLoadDefaultPageCB(_data, _isOk) {
        if(_isOk) {
            var lDefault = new GPage();
            lDefault.deserialize(_data);
            if(lDefault.m_defaultPage) {
                var lPage = new GPage();
                lPage.deserialize(lDefault.m_defaultPage);
                lPage.writeUi();
                lPage.updateAddress();
                lPage.writeDefaultAddress();
                lPage.onLoadPageEdition();
            }
        }
    }
    //===============================================
    onLoadPagePath(_obj, _data) {
        this.readUi();
        this.readPathObj(_obj);
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callLocal("page", "load_page_path", lData, this.onLoadPagePathCB);        
    }
    //===============================================
    onLoadPagePathCB(_data, _isOk) {
        if(_isOk) {
            var lPage = GPage.Instance();
            lPage.clearMap();
            lPage.deserialize(_data);
            if(lPage.m_map.length == 1) {
                lPage.loadFromMap(0);
                lPage.m_name = "";
                lPage.writeUi();
                lPage.updateAddress();
                lPage.writeDefaultAddress();
                lPage.onStoreDefaultAddress();
            }
            else if(lPage.m_map.length) {
                lPage.showTable("load_page_path_select", "load_page_path_next");
            }
            else {
                lPage.addLog("Le résultat est vide.");
                lPage.showLogsX();
            }
        }
    }
    //===============================================
    onLoadPagePathSelect(_obj, _data) {
        var lPage = GPage.Instance();
        var lTable = new GTable();
        lTable.deserialize(_data);
        if(lTable.getType() == "cell") {
            lPage.loadFromMap(lTable.getRow());
        }
        lTable.onCloseTable();
        lPage.m_name = "";
        lPage.writeUi();
        lPage.updateAddress();
        lPage.writeDefaultAddress();
        lPage.onStoreDefaultAddress();
    }
    //===============================================
    onStoreDefaultAddress(_obj, _data) {
        this.readDefaultAddress();
        this.m_root = "/data/cache/data";
        this.m_path = "";
        this.m_name = "cache_default_address.xml";
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callLocal("page", "store_default_address", lData);        
    }
    //===============================================
    onLoadDefaultAddress(_obj, _data) {
        this.m_root = "/data/cache/data";
        this.m_name = "cache_default_address.xml";
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callLocal("page", "load_default_address", lData, this.onLoadDefaultAddressCB);        
    }
    //===============================================
    onLoadDefaultAddressCB(_data, _isOk) {
        if(_isOk) {
            var lDefault = new GPage();
            lDefault.deserialize(_data);
            if(lDefault.m_defaultAddress) {
                var lPage = new GPage();
                lPage.deserialize(lDefault.m_defaultAddress);
                lPage.writeUi();
                lPage.updateAddress();
                lPage.writeDefaultAddress();
            }
        }
    }
    //===============================================
    onCreatePage(_obj, _data) {
        this.readUi();
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callLocal("page", "create_page", lData, this.onCreatePageCB);        
    }
    //===============================================
    onCreatePageCB(_data, _isOk) {

    }
    //===============================================
    onNewPage(_obj, _data) {
        var lPage = new GPage();
        lPage.readRoot();
        lPage.readPath();
        lPage.writeUi();
    }
    //===============================================
    // edition
    //===============================================
    onLoadPageEdition(_obj, _data) {
        this.readUi();
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callLocal("page", "load_page_edition", lData, this.onLoadPageEditionCB);        
    }
    //===============================================
    onLoadPageEditionCB(_data, _isOk) {
        if(_isOk) {
            var lPage = new GPage();
            lPage.deserialize(_data);
            lPage.writeEditionPage();
        }
    }
    //===============================================
    onSavePageEdition(_obj, _data) {
        this.readUi();
        this.readEditionPage();
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callLocal("page", "save_page_edition", lData);        
    }
    //===============================================
}
//===============================================
GPage.Instance().init();
//===============================================
