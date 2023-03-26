//===============================================
class GPage extends GObject {
    //===============================================
    static m_instance = null;
    //===============================================
    constructor() {
        super();
        this.m_id = 0;
        this.m_parentId = 0;
        this.m_siteId = 0;
        this.m_typeId = 0;
        this.m_isDefault = 0;
        this.m_name = ""
        this.m_typeName = ""
        this.m_siteName = ""
        this.m_path = "";
        this.m_idPath = "";
        this.m_tree = "";
        this.m_content = "";
        this.m_defaultAddress = "";
        this.m_defaultPage = "";
        this.m_activeAddress = "";
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
        var lObj = new GPage();
        return lObj;
    }
    //===============================================
    setObj(_obj) {
        this.m_id = _obj.m_id;
        this.m_parentId = _obj.m_parentId;
        this.m_siteId = _obj.m_siteId;
        this.m_typeId = _obj.m_typeId;
        this.m_isDefault = _obj.m_isDefault;
        this.m_name = _obj.m_name;
        this.m_typeName = _obj.m_typeName;
        this.m_path = _obj.m_path;
        this.m_idPath = _obj.m_idPath;
        this.m_tree = _obj.m_tree;
        this.m_content = _obj.m_content;
        this.m_defaultAddress = _obj.m_defaultAddress;
        this.m_defaultPage = _obj.m_defaultPage;
        this.m_activeAddress = _obj.m_activeAddress;
    }
    //===============================================
    init() {
        if(this.isInit()) {
            this.updateAddress();
            this.initType();
            this.loadDefaultPageRun();
        }
    }    
    //===============================================
    isInit() {
        var lObj = document.getElementById("EditorPageParentId");
        if(!lObj) return false;
        return true;
    }    
    //===============================================
    initType() {
        if(!this.m_parentId) {
            this.setType(2);
            this.setDefault(0);
            this.setEnableType(false);
            this.setEnableDefault(false);
        }
        else {
            this.setType(0);
            this.setDefault(0);
            this.setEnableType(true);
            this.setEnableDefault(true);
        }
    }
    //===============================================
    initContent() {
        var lEditorEditionContent = document.getElementById("EditorEditionContent");
        lEditorEditionContent.innerHTML = this.m_content;
    }
    //===============================================
    initCodeText() {
        var lEditorCodeText = document.getElementById("EditorCodeText");
        lEditorCodeText.value = this.m_content;
    }
    //===============================================
    initDefaultAddress() {
        var lEditorPageDefaultAddress = document.getElementById("EditorPageDefaultAddress");
        var lPage = new GPage();
        lPage.setObj(this);
        lEditorPageDefaultAddress.innerHTML = lPage.serialize();
    }
    //===============================================
    initDefaultPage() {
        var lEditorPageDefaultPage = document.getElementById("EditorPageDefaultPage");
        var lPage = new GPage();
        lPage.setObj(this);
        lEditorPageDefaultPage.innerHTML = lPage.serialize();
    }
    //===============================================
    setParentId(_parentId) {
        var lEditorPageParentId = document.getElementById("EditorPageParentId");
        lEditorPageParentId.value = _parentId;
    }
    //===============================================
    setAddress(_address) {
        var lEditorPageAddress = document.getElementById("EditorPageAddress");
        lEditorPageAddress.innerHTML = _address;
    }
    //===============================================
    setType(_type) {
        var lEditorPageTypeId = document.getElementById("EditorPageTypeId");
        lEditorPageTypeId.value = _type;
        var lCombo = GComboBox.Instance();
        lCombo.initCombo(lEditorPageTypeId);
    }
    //===============================================
    setDefault(_isDefault) {
        var lEditorPageDefault = document.getElementById("EditorPageDefault");
        lEditorPageDefault.dataset.value = _isDefault;       
        var lRadio = GRadioButton.Instance();
        lRadio.initRadio(lEditorPageDefault);
    }
    //===============================================
    setEnableType(_isEnable) {
        var lEditorPageTypeId = document.getElementById("EditorPageTypeId");
        lEditorPageTypeId.disabled = !_isEnable;
    }
    //===============================================
    setEnableDefault(_isEnable) {
        var lEditorPageDefault = document.getElementById("EditorPageDefault");
        var lRadioButtonInputs = lEditorPageDefault.getElementsByClassName("RadioButtonInput");
        for(var i = 0; i < lRadioButtonInputs.length; i++) {
            var lRadioButtonInput = lRadioButtonInputs[i];
            lRadioButtonInput.disabled = !_isEnable;
        }
    }
    //===============================================
    setCodeText(_codeText) {
        var lEditorCodeText = document.getElementById("EditorCodeText");
        lEditorCodeText.value = _codeText;
    }
    //===============================================
    isFile() {
        return (this.m_typeId == 1);
    }
    //===============================================
    isDir() {
        return (this.m_typeId == 2);
    }
    //===============================================
    readActiveAddress() {
        var lEditorPageAddressActive = document.getElementsByClassName("EditorPageAddress Active")[0];
        this.m_activeAddress = lEditorPageAddressActive.nextElementSibling.innerHTML;
    }
    //===============================================
    readContent() {
        var lEditorEditionContent = document.getElementById("EditorEditionContent");
        this.m_content = lEditorEditionContent.innerHTML;
    }
    //===============================================
    readCodeText() {
        var lEditorCodeText = document.getElementById("EditorCodeText");
        this.m_content = lEditorCodeText.value;
    }
    //===============================================
    readDefaultAddress() {
        var lEditorPageDefaultAddress = document.getElementById("EditorPageDefaultAddress");
        this.m_defaultAddress = lEditorPageDefaultAddress.innerHTML;
    }
    //===============================================
    readDefaultPage() {
        var lEditorPageDefaultPage = document.getElementById("EditorPageDefaultPage");
        this.m_defaultPage = lEditorPageDefaultPage.innerHTML;
    }
    //===============================================
    readSite() {
        var lEditorSiteId = document.getElementById("EditorSiteId");
        var lEditorSiteName = document.getElementById("EditorSiteName");
        
        this.m_siteId = +lEditorSiteId.value;
        this.m_siteName = lEditorSiteName.value;
    }
    //===============================================
    activeAddress(_obj) {
        var lEditorPageAddresses = document.getElementsByClassName("EditorPageAddress");
        for(var i = 0; i < lEditorPageAddresses.length; i++) {
            var lEditorPageAddress = lEditorPageAddresses[i];
            lEditorPageAddress.classList.remove("Active");
        }
        _obj.classList.add("Active");
    }
    //===============================================
    storeDefaultPage() {
        call_server("page", "store_default_page", this);
    }
    //===============================================
    loadDefaultPageRun() {
        call_server("page", "load_default_page", this);
    }
    //===============================================
    searchPageFile() {
        call_server("page", "search_page_file", this);
    }
    //===============================================
    searchCodeFile() {
        call_server("page", "search_code_file", this);
    }
    //===============================================
    loadDefaultPage() {
        if(this.m_defaultAddress != "") {
            var lPage = new GPage();
            lPage.deserialize(this.m_defaultAddress);
            lPage.initDefaultAddress();
            lPage.updateAddress();
        }
        if(this.m_defaultPage != "") {
            var lPage = new GPage();
            lPage.deserialize(this.m_defaultPage);
            lPage.initDefaultPage();
            lPage.writeUi();
            if(lPage.m_id) {
                lPage.searchPageFile();
            }
        }
    }
    //===============================================
    updateAddress() {
        var lAddress = "";
        var lPaths = this.m_path.split("/");
        var lIdPaths = this.m_idPath.split("/");
        var lPathI = "";
        var lIdPathI = "";
        
        for(var i = 0; i < lPaths.length; i++) {
            var lPath = lPaths[i];
            var lIdPath = lIdPaths[i];
            
            if(i != 0) lPathI += "/";
            if(i != 0) lIdPathI += "/";
            
            lPathI += lPath;
            lIdPathI += lIdPath;
            
            if(i != 0) lAddress += sprintf("<i class='Icon11 fa fa-chevron-right'></i>\n");
            if(i == 0) lPath = sprintf("<i class='fa fa-folder'></i>\n");
            lAddress += sprintf("<span class='Link10 EditorPageAddress' \
            onclick='call_server(\"page\", \"load_page\", this);' \
            ondbclick='call_server(\"page\", \"select_addressbar\", this);' \
            >%s</span>\n", lPath);
            
            var lPage = new GPage();
            lPage.m_id = lIdPath;
            lPage.m_parentId = lIdPath;
            lPage.m_path = lPathI;
            lPage.m_idPath = lIdPathI;
            var lData = lPage.serialize();

            lAddress += sprintf("<span hidden='true'>%s</span>\n", lData);
        }

        this.setParentId(this.m_id);
        this.setAddress(lAddress);
        this.initType();
    }
    //===============================================
    loadActiveAddress() {
        var lPage = new GPage();
        lPage.deserialize(this.m_activeAddress);
        lPage.initDefaultAddress();
        lPage.updateAddress();
    }
    //===============================================
    showTable(_selectCB, _nextCB) {
        var lTable = new GTable();
        lTable.setCallback("select", "page", _selectCB)
        lTable.setCallback("next", "page", _nextCB)
        lTable.setHeaderVisible(true);
        lTable.setNextEnable(true);
        
        lTable.pushRowH();
        lTable.pushColH("", "répertoire");
        
        for(var i = 0; i < this.m_map.length; i++) {
            var lObj = this.m_map[i]
            var lIcon = (lObj.m_typeName == "file" ? "file-o" : "folder");
            lTable.pushRow();
            lTable.pushCol("", lObj.m_name, lIcon);
        }
        
        lTable.showData();
        lTable.scrollBottom();
    }
    //===============================================
    readUi() {
        var lEditorPageId = document.getElementById("EditorPageId");
        var lEditorPageParentId = document.getElementById("EditorPageParentId");
        var lEditorPagePath = document.getElementById("EditorPagePath");
        var lEditorPageIdPath = document.getElementById("EditorPageIdPath");
        var lEditorPageName = document.getElementById("EditorPageName");
        var lEditorPageTypeId = document.getElementById("EditorPageTypeId");
        var lEditorPageDefault = document.getElementById("EditorPageDefault");

        this.m_id = +lEditorPageId.value;
        this.m_parentId = +lEditorPageParentId.value;
        this.m_path = lEditorPagePath.value;
        this.m_idPath = lEditorPageIdPath.value;
        this.m_name = lEditorPageName.value;
        this.m_typeId = +lEditorPageTypeId.value;
        this.m_isDefault = +lEditorPageDefault.dataset.value;
        
        this.readSite();
    }
    //===============================================
    writeUi() {
        var lEditorPageId = document.getElementById("EditorPageId");
        var lEditorPageParentId = document.getElementById("EditorPageParentId");
        var lEditorPagePath = document.getElementById("EditorPagePath");
        var lEditorPageIdPath = document.getElementById("EditorPageIdPath");
        var lEditorPageName = document.getElementById("EditorPageName");
        var lEditorPageTypeId = document.getElementById("EditorPageTypeId");
        var lEditorPageDefault = document.getElementById("EditorPageDefault");

        lEditorPageId.value = +this.m_id;
        lEditorPageParentId.value = +this.m_parentId;
        lEditorPagePath.value = this.m_path;
        lEditorPageIdPath.value = this.m_idPath;
        lEditorPageName.value = this.m_name;
        lEditorPageTypeId.value = +this.m_typeId;
        lEditorPageDefault.dataset.value = +this.m_isDefault;
        
        var lCombo = GComboBox.Instance();
        var lRadio = GRadioButton.Instance();
        lCombo.initCombo(lEditorPageTypeId);
        lRadio.initRadio(lEditorPageDefault);
    }
    //===============================================
    serialize(_code = "page") {
        var lDom = new GCode();
        lDom.createDoc();
        lDom.addData(_code, "id", ""+this.m_id);
        lDom.addData(_code, "parent_id", ""+this.m_parentId);
        lDom.addData(_code, "type_id", ""+this.m_typeId);
        lDom.addData(_code, "type_name", this.m_typeName);
        lDom.addData(_code, "site_id", ""+this.m_siteId);
        lDom.addData(_code, "site_name", this.m_siteName);
        lDom.addData(_code, "is_default", ""+this.m_isDefault);
        lDom.addData(_code, "name", this.m_name);
        lDom.addData(_code, "path", this.m_path);
        lDom.addData(_code, "id_path", this.m_idPath);
        lDom.addData(_code, "tree", utf8_to_b64(this.m_tree));
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
        this.m_id = +lDom.getItem(_code, "id");
        this.m_parentId = +lDom.getItem(_code, "parent_id");
        this.m_typeId = +lDom.getItem(_code, "type_id");
        this.m_typeName = lDom.getItem(_code, "type_name");
        this.m_siteId = +lDom.getItem(_code, "site_id");
        this.m_siteName = lDom.getItem(_code, "site_name");
        this.m_isDefault = +lDom.getItem(_code, "is_default");
        this.m_name = lDom.getItem(_code, "name");
        this.m_path = lDom.getItem(_code, "path");
        this.m_idPath = lDom.getItem(_code, "id_path");
        this.m_tree = b64_to_utf8(lDom.getItem(_code, "tree"));
        this.m_content = b64_to_utf8(lDom.getItem(_code, "content"));
        this.m_defaultAddress = b64_to_utf8(lDom.getItem(_code, "default_address"));
        this.m_defaultPage = b64_to_utf8(lDom.getItem(_code, "default_page"));
        lDom.getMap(_code, this.m_map, this);
    }
    //===============================================
    onModule(_method, _obj, _data) {
        if(_method == "") {
            this.addError("La méthode est obligatoire.");
        }
        else if(_method == "key_down_edition") {
            this.onKeyDownEdition(_obj, _data);
        }
        else if(_method == "key_down_code") {
            this.onKeyDownCode(_obj, _data);
        }
        else if(_method == "select_page_type") {
            this.onSelectPageType(_obj, _data);
        }
        else if(_method == "save_page") {
            this.onSavePage(_obj, _data);
        }
        else if(_method == "save_page_run") {
            this.onSavePageRun(_obj, _data);
        }
        else if(_method == "save_page_file") {
            this.onSavePageFile(_obj, _data);
        }
        else if(_method == "save_page_file_run") {
            this.onSavePageFileRun(_obj, _data);
        }
        else if(_method == "save_code_file") {
            this.onSaveCodeFile(_obj, _data);
        }
        else if(_method == "save_code_file_run") {
            this.onSaveCodeFileRun(_obj, _data);
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
        else if(_method == "search_page_file") {
            this.onSearchPageFile(_obj, _data);
        }
        else if(_method == "search_code_file") {
            this.onSearchCodeFile(_obj, _data);
        }
        else if(_method == "delete_page") {
            this.onDeletePage(_obj, _data);
        }
        else if(_method == "delete_page_run") {
            this.onDeletePageRun(_obj, _data);
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
        else if(_method == "load_page_tree") {
            this.onLoadPageTree(_obj, _data);
        }
        else if(_method == "create_page_tree") {
            this.onCreatePageTree(_obj, _data);
        }
        else if(_method == "create_page_tree") {
            this.onCreatePageTree(_obj, _data);
        }
        else if(_method == "store_default_page") {
            this.onStoreDefaultPage(_obj, _data);
        }
        else if(_method == "load_default_page") {
            this.onLoadDefaultPageRun(_obj, _data);
        }
        else {
            this.addError("Erreur la méthode est inconnue.");            
        }
        return !this.hasErrors();
    }
    //===============================================
    onKeyDownEdition(_obj, _data) {
        var lEvent = _obj || window.event;
        var lKeyCode = lEvent.charCode || lEvent.keyCode;
        if(lKeyCode == 13) {
            document.execCommand("insertLineBreak")
            lEvent.preventDefault();
        }
    }
    //===============================================
    onKeyDownCode(_obj, _data) {
        var lEvent = _obj || window.event;
        var lKeyCode = lEvent.charCode || lEvent.keyCode;
        if(lKeyCode == 13) {
            lEvent.preventDefault();
        }
    }
    //===============================================
    onSelectPageType(_obj, _data) {
        this.readUi();
        if(this.isDir()) {
            this.setDefault(0);
            this.setEnableDefault(false);
        } 
        else {
            this.setDefault(1);
            this.setEnableDefault(true);
        } 
    }
    //===============================================
    onSavePage(_obj, _data) {
        var lConfirm = new GConfirm();
        lConfirm.setCallback("page", "save_page_run");
        lConfirm.showConfirm();
    }
    //===============================================
    onSavePageRun(_obj, _data) {
        this.readUi();
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callLocal("page", "save_page", lData, this.onSavePageCB);        
    }
    //===============================================
    onSavePageCB(_data, _isOk) {
        if(_isOk) {
            var lPage = new GPage();
            lPage.deserialize(_data);
            lPage.writeUi();
        }
    }
    //===============================================
    onSavePageFile(_obj, _data) {
        var lConfirm = new GConfirm();
        lConfirm.setCallback("page", "save_page_file_run");
        lConfirm.showConfirm();
    }
    //===============================================
    onSavePageFileRun(_obj, _data) {
        this.readUi();
        this.readContent();
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callLocal("page", "save_page_file", lData, this.onSavePageFileCB);        
    }
    //===============================================
    onSavePageFileCB(_data) {

    }
    //===============================================
    onSearchPage(_obj, _data) {
        this.readUi();
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callRemote("page", "search_page", lData, this.onSearchPageCB);        
    }
    //===============================================
    onSearchPageCB(_data, _isOk) {
        if(_isOk) {
            var lPage = GPage.Instance();
            lPage.clearMap();
            lPage.deserialize(_data);
            if(lPage.m_map.length == 1) {
                lPage.loadFromMap(0);
                lPage.writeUi();
                lPage.initDefaultPage();
                lPage.storeDefaultPage();
                lPage.initContent();
                lPage.searchPageFile();
            }
            else if(lPage.m_map.length) {
                lPage.showTable("search_page_select", "search_page_next");
            }
            else {
                lPage.addLog("Le résultat est vide.");
                lPage.showLogsX();
            }
        }
    }
    //===============================================
    onSearchPageSelect(_obj, _data) {
        var lPage = GPage.Instance();
        var lTable = new GTable();
        lTable.deserialize(_data);
        if(lTable.getType() == "cell") {
            lTable.onCloseTable();
            lPage.loadFromMap(lTable.getRow());
            lPage.writeUi();
            lPage.initDefaultPage();
            lPage.storeDefaultPage();
            lPage.initContent();
            lPage.searchPageFile();
       }
    }
    //===============================================
    onSearchPageFile(_obj, _data) {
        this.readUi();
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callLocal("page", "search_page_file", lData, this.onSearchPageFileCB);        
    }
    //===============================================
    onSearchPageFileCB(_data, _isOk) {
        if(_isOk) {
            var lPage = new GPage();
            lPage.deserialize(_data);
            lPage.initContent();
        }
    }
    //===============================================
    onSearchCodeFile(_obj, _data) {
        this.readContent();
        this.initCodeText();        
    }
    //===============================================
    onSaveCodeFile(_obj, _data) {
        var lConfirm = new GConfirm();
        lConfirm.setCallback("page", "save_code_file_run");
        lConfirm.showConfirm();
    }
    //===============================================
    onSaveCodeFileRun(_obj, _data) {
        this.readCodeText();
        this.initContent();
    }
    //===============================================
    onDeletePage(_obj, _data) {
        var lConfirm = new GConfirm();
        lConfirm.setCallback("page", "delete_page_run");
        lConfirm.showConfirm();
    }
    //===============================================
    onDeletePageRun(_obj, _data) {
        this.readUi();
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callRemote("page", "delete_page", lData, this.onDeletePageCB);        
    }
    //===============================================
    onDeletePageCB(_data, _isOk) {
        if(_isOk) {
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
        lPage.initContent();
    }
    //===============================================
    onLoadPage(_obj, _data) {
        var lPage = new GPage();
        lPage.activeAddress(_obj);
        var lData = _obj.nextElementSibling.innerHTML;
        lPage.deserialize(lData);
        lPage.readSite();
        lData = lPage.serialize();
        var lAjax = new GAjax();
        lAjax.callRemote("page", "load_page", lData, this.onLoadPageCB);        
    }
    //===============================================
    onLoadPageCB(_data, _isOk) {
        var lPage = GPage.Instance();
        lPage.clearMap();
        lPage.deserialize(_data);
        if(_isOk) {
            if(lPage.m_map.length) {
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
            lPage.loadFromMap(lTable.getRow());
            lPage.initDefaultAddress();
            lPage.updateAddress();
            lTable.onCloseTable();
        }
        else if(lTable.getType() == "header") {
            this.readActiveAddress(); 
            this.loadActiveAddress();
            lTable.onCloseTable();
            this.onNewPage();
        }
        this.onNewPage();
    }
    //===============================================
    onLoadPageNext(_obj, _data) {

    }
    //===============================================
    onLoadPageTree(_obj, _data) {
        this.readUi();
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callRemote("page", "load_page_tree", lData, this.onLoadPageTreeCB);
    }
    //===============================================
    onLoadPageTreeCB(_data, _isOk) {
        if(_isOk) {
            var lPage = new GPage();
            lPage.deserialize(_data);
            lPage.addData(lPage.m_tree);
            lPage.showLogsX();
        }
    }
    //===============================================
    onCreatePageTree(_obj, _data) {
        this.readUi();
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callLocal("page", "create_page_tree", lData, this.onCreatePageTreeCB);        
    }
    //===============================================
    onCreatePageTreeCB(_data) {

    }
    //===============================================
    onStoreDefaultPage(_obj, _data) {
        var lPage = new GPage();
        lPage.readDefaultAddress();
        lPage.readDefaultPage();
        var lAjax = new GAjax();
        var lData = lPage.serialize();
        lAjax.callLocal("page", "store_default_page", lData, this.onStoreDefaultPageCB);        
    }
    //===============================================
    onStoreDefaultPageCB(_data, _isOk) {

    }
    //===============================================
    onLoadDefaultPageRun(_obj, _data) {
        var lAjax = new GAjax();
        lAjax.callLocal("page", "load_default_page", "", this.onLoadDefaultPageRunCB);        
    }
    //===============================================
    onLoadDefaultPageRunCB(_data, _isOk) {
        var lPage = new GPage();
        lPage.deserialize(_data);
        lPage.loadDefaultPage();
    }
    //===============================================
}
//===============================================
GPage.Instance().init();
//===============================================
