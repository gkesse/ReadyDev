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
        this.m_default = 0;
        this.m_name = ""
        this.m_typeName = ""
        this.m_path = "";
        this.m_idPath = "";
        this.m_tree = "";
        this.m_content = "";
    }
    //===============================================
    static Instance() {
        if(this.m_instance == null) {
            this.m_instance = new GPage();
        }
        return this.m_instance;
    }    
    //===============================================
    init() {
        this.updateAddress();
    }    
    //===============================================
    clone() {
        var lObj = new GPage();
        lObj.setPage(this);
        return lObj;
    }
    //===============================================
    setPage(_obj) {
        this.m_id = _obj.m_id;
        this.m_parentId = _obj.m_parentId;
        this.m_typeId = _obj.m_typeId;
        this.m_default = _obj.m_default;
        this.m_name = _obj.m_name;
        this.m_typeName = _obj.m_typeName;
        this.m_path = _obj.m_path;
        this.m_idPath = _obj.m_idPath;
        this.m_tree = _obj.m_tree;
        this.m_content = _obj.m_content;
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
    getAddressActive() {
        var lEditorPageAddressActive = document.getElementsByClassName("EditorPageAddress Active")[0];
        var lData = lEditorPageAddressActive.nextElementSibling.innerHTML;
        return lData;
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
    getPreviousAddress() {
        var lEditorPageAddress = document.getElementById("EditorPageAddress");
        var lNode = lEditorPageAddress.firstElementChild;
        var lHtml = "";
        while(1) {
            if(lNode.classList.contains("Active")) {
                lHtml += lNode.outerHTML + "\n";
                lNode = lNode.nextElementSibling;
                lHtml += lNode.outerHTML + "\n";
                break;
            }
            lHtml += lNode.outerHTML + "\n";
            lNode = lNode.nextElementSibling;
        }
        return lHtml;
    }
    //===============================================
    getContent() {
        var lEditorEditionContent = document.getElementById("EditorEditionContent");
        var lData = lEditorEditionContent.innerHTML;
        return lData;
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
    setDefault(_isDefault) {
        var lValue = (_isDefault ? "1" : "0");
        var lEditorPageDefault = document.getElementById("EditorPageDefault");
        var lRadioButtonInputs = lEditorPageDefault.getElementsByClassName("RadioButtonInput");
        for(var i = 0; i < lRadioButtonInputs.length; i++) {
            var lRadioButtonInput = lRadioButtonInputs[i];
            lRadioButtonInput.checked = false;
            if(lRadioButtonInput.value == lValue) {
                lRadioButtonInput.checked = true;
            }
        }
    }
    //===============================================
    loadFromMap(_index) {
        if(_index < 0 || _index >= this.m_map.length) {
            this.addError("L'index de la donnée est incorrect.");
            return false;
        }
        var lObj = this.m_map[_index];
        this.setPage(lObj);
        return !this.hasErrors();
    }
    //===============================================
    loadToMap(_index) {
        if(_index < 0 || _index >= this.m_map.length) {
            this.addError("L'index de la donnée est incorrect.");
            return false;
        }
        var lObj = this.m_map[_index];
        lObj.setPage(this);
        return !this.hasErrors();
    }
    //===============================================
    enableType() {
        var lEditorPageDefault = document.getElementById("EditorPageDefault");
        var lRadioButtonInputs = lEditorPageDefault.getElementsByClassName("RadioButtonInput");
        for(var i = 0; i < lRadioButtonInputs.length; i++) {
            var lRadioButtonInput = lRadioButtonInputs[i];
            lRadioButtonInput.disabled = false;
        }
    }
    //===============================================
    disableType() {
        var lEditorPageDefault = document.getElementById("EditorPageDefault");
        var lRadioButtonInputs = lEditorPageDefault.getElementsByClassName("RadioButtonInput");
        for(var i = 0; i < lRadioButtonInputs.length; i++) {
            var lRadioButtonInput = lRadioButtonInputs[i];
            lRadioButtonInput.disabled = true;
        }
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
        //
        this.m_id = +lEditorPageId.value;
        this.m_parentId = +lEditorPageParentId.value;
        this.m_path = lEditorPagePath.value;
        this.m_idPath = lEditorPageIdPath.value;
        this.m_name = lEditorPageName.value;
        this.m_typeId = +lEditorPageTypeId.value;
        this.m_default = +lEditorPageDefault.dataset.value;
    }
    //===============================================
    writeUi() {
        if(this.hasErrors()) return;
        var lEditorPageId = document.getElementById("EditorPageId");
        var lEditorPageParentId = document.getElementById("EditorPageParentId");
        var lEditorPagePath = document.getElementById("EditorPagePath");
        var lEditorPageIdPath = document.getElementById("EditorPageIdPath");
        var lEditorPageName = document.getElementById("EditorPageName");
        var lEditorPageTypeId = document.getElementById("EditorPageTypeId");
        var lEditorPageDefault = document.getElementById("EditorPageDefault");
        //
        lEditorPageId.value = +this.m_id;
        lEditorPageParentId.value = +this.m_parentId;
        lEditorPagePath.value = this.m_path;
        lEditorPageIdPath.value = this.m_idPath;
        lEditorPageName.value = this.m_name;
        lEditorPageTypeId.value = this.m_typeId;
        lEditorPageDefault.dataset.value = this.m_default;
        
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
        lDom.addData(_code, "default", ""+this.m_default);
        lDom.addData(_code, "name", this.m_name);
        lDom.addData(_code, "type_name", this.m_typeName);
        lDom.addData(_code, "path", this.m_path);
        lDom.addData(_code, "id_path", this.m_idPath);
        lDom.addData(_code, "tree", utf8_to_b64(this.m_tree));
        lDom.addData(_code, "content", utf8_to_b64(this.m_content));
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
        this.m_default = +lDom.getItem(_code, "default");
        this.m_name = lDom.getItem(_code, "name");
        this.m_typeName = lDom.getItem(_code, "type_name");
        this.m_path = lDom.getItem(_code, "path");
        this.m_idPath = lDom.getItem(_code, "id_path");
        this.m_tree = b64_to_utf8(lDom.getItem(_code, "tree"));
        this.m_content = b64_to_utf8(lDom.getItem(_code, "content"));
        lDom.getMap(_code, this.m_map, this);
        this.loadLogs(_data);
    }
    //===============================================
    onModule(_method, _obj, _data) {
        if(_method == "") {
            this.addError("La méthode est obligatoire.");
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
        else if(_method == "search_page_file_run") {
            this.onSearchPageFileRun(_obj, _data);
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
        else {
            this.addError("Erreur la méthode est inconnue.");            
        }
        return !this.hasErrors();
    }
    //===============================================
    onSelectPageType(_obj, _data) {
        this.readUi();
        if(this.isDir()) {
            this.disableType();
            this.setDefault(false);
        } 
        else {
            this.enableType();
            this.setDefault(true);
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
    onSavePageCB(_data) {
        var lPage = new GPage();
        lPage.deserialize(_data);
        lPage.writeUi();
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
        this.m_content = this.getContent();
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
    onSearchPageCB(_data) {
        var lPage = GPage.Instance();
        lPage.clearMap();
        lPage.deserialize(_data);
        if(!lPage.hasErrors()) {
            if(lPage.m_map.length == 1) {
                lPage.loadFromMap(0);
                lPage.writeUi();
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
            lPage.loadFromMap(lTable.getRow());
            lPage.writeUi();
            lTable.onCloseTable();
       }
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
        this.activeAddress(_obj);
        var lData = _obj.nextElementSibling.innerHTML;
        var lAjax = new GAjax();
        lAjax.callRemote("page", "load_page", lData, this.onLoadPageCB);        
    }
    //===============================================
    onLoadPageCB(_data) {
        var lPage = GPage.Instance();
        lPage.clearMap();
        lPage.deserialize(_data);
        if(!lPage.hasErrors()) {
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
            lPage.updateAddress();
            lTable.onCloseTable();
        }
        else if(lTable.getType() == "header") {
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
    onLoadPageTreeCB(_data) {
        var lPage = new GPage();
        lPage.deserialize(_data);
        lPage.addData(lPage.m_tree);
        lPage.showLogsX();
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
    onSelectAddress(_obj, _data) {
        var lData = _obj.nextElementSibling.nextElementSibling.innerHTML;
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
            if(i == 0) lPath = "<i class='fa fa-folder'></i>";
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
    }
    //===============================================
    loadActiveAddress() {
        var lData = this.getAddressActive();
        var lPage = new GPage();
        lPage.deserialize(lData);
        lPage.updateAddress();
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
        lTable.pushColH("", "répertoire");
        //
        for(var i = 0; i < this.m_map.length; i++) {
            var lObj = this.m_map[i]
            var lIcon = (lObj.m_typeName == "file" ? "file-o" : "folder");
            lTable.pushRow();
            lTable.pushCol("", lObj.m_name, lIcon);
        }
        //
        lTable.showData();
        lTable.scrollBottom();
    }
    //===============================================
}
//===============================================
GPage.Instance().init();
//===============================================
