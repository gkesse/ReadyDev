//===============================================
class GSite extends GObject {
    //===============================================
    static m_instance = null;
    //===============================================
    constructor() {
        super();
        this.m_id = 0;
        this.m_name = "";
        this.m_title = "";
        this.m_label = "";
        this.m_defaultSite = "";
    }
    //===============================================
    static Instance() {
        if(this.m_instance == null) {
            this.m_instance = new GSite();
        }
        return this.m_instance;
    }    
    //===============================================
    clone() {
        var lObj = new GSite();
        return lObj;
    }
    //===============================================
    setObj(_obj) {
        this.m_id = _obj.m_id;
        this.m_name = _obj.m_name;
        this.m_title = _obj.m_title;
        this.m_label = _obj.m_label;
    }
    //===============================================
    init() {
        if(this.isInit()) {
            call_server("site", "load_default_site", this);
        }
    }
    //===============================================
    isInit() {
        var lObj = document.getElementById("EditorSiteDefaultSite");
        if(!lObj) return false;
        return true;
    }    
    //===============================================
    initDefaultSite() {
        var lEditorSiteDefaultSite = document.getElementById("EditorSiteDefaultSite");
        var lSite = new GSite();
        lSite.setObj(this);
        lEditorSiteDefaultSite.innerHTML = lSite.serialize();
    }
    //===============================================
    readDefaultSite() {
        var lEditorSiteDefaultSite = document.getElementById("EditorSiteDefaultSite");
        this.m_defaultSite = lEditorSiteDefaultSite.innerHTML;
    }
    //===============================================
    loadDefaultSite() {
        if(this.m_defaultSite != "") {
            var lSite = new GSite();
            lSite.deserialize(this.m_defaultSite);
            lSite.initDefaultSite();
            lSite.writeUi();
        }
    }
    //===============================================
    showTable(_selectCB, _nextCB) {
        var lTable = new GTable();
        lTable.setCallback("select", "site", _selectCB)
        lTable.setCallback("next", "site", _nextCB)
        lTable.setHeaderVisible(true);
        lTable.setNextEnable(true);
        
        lTable.pushRowH();
        lTable.pushColH("", "nom");
        lTable.pushColH("", "titre");
        lTable.pushColH("", "libellé");
        
        for(var i = 0; i < this.m_map.length; i++) {
            var lObj = this.m_map[i]
            lTable.pushRow();
            lTable.pushCol("", lObj.m_name);
            lTable.pushCol("", lObj.m_title);
            lTable.pushCol("", lObj.m_label);
        }
        
        lTable.showData();
        lTable.scrollBottom();
    }
    //===============================================
    readUi() {
        var lEditorSiteId = document.getElementById("EditorSiteId");
        var lEditorSiteName = document.getElementById("EditorSiteName");
        var lEditorSiteTitle = document.getElementById("EditorSiteTitle");
        var lEditorSiteLabel = document.getElementById("EditorSiteLabel");

        this.m_id = +lEditorSiteId.value;
        this.m_name = lEditorSiteName.value;
        this.m_title = lEditorSiteTitle.value;
        this.m_label = lEditorSiteLabel.value;
    }
    //===============================================
    writeUi() {
        var lEditorSiteId = document.getElementById("EditorSiteId");
        var lEditorSiteName = document.getElementById("EditorSiteName");
        var lEditorSiteTitle = document.getElementById("EditorSiteTitle");
        var lEditorSiteLabel = document.getElementById("EditorSiteLabel");

        lEditorSiteId.value = +this.m_id;
        lEditorSiteName.value = this.m_name;
        lEditorSiteTitle.value = this.m_title;
        lEditorSiteLabel.value = this.m_label;
    }
    //===============================================
    serialize(_code = "site") {
        var lDom = new GCode();
        lDom.createDoc();
        lDom.addData(_code, "id", ""+this.m_id);
        lDom.addData(_code, "name", this.m_name);
        lDom.addData(_code, "title", this.m_title);
        lDom.addData(_code, "label", this.m_label);
        lDom.addData(_code, "default_site", utf8_to_b64(this.m_defaultSite));
        lDom.addMap(_code, this.m_map);
        return lDom.toString();
    }
    //===============================================
    deserialize(_data, _code = "site") {
        var lDom = new GCode();
        lDom.loadXml(_data);
        this.m_id = +lDom.getItem(_code, "id");
        this.m_name = lDom.getItem(_code, "name");
        this.m_title = lDom.getItem(_code, "title");
        this.m_label = lDom.getItem(_code, "label");
        this.m_defaultSite = b64_to_utf8(lDom.getItem(_code, "default_site"));
        lDom.getMap(_code, this.m_map, this);
    }
    //===============================================
    onModule(_method, _obj, _data) {
        if(_method == "") {
            this.addError("La méthode est obligatoire.");
        }
        else if(_method == "save_site") {
            this.onSaveSite(_obj, _data);
        }
        else if(_method == "save_site_confirm") {
            this.onSaveSiteConfirm(_obj, _data);
        }
        else if(_method == "search_site") {
            this.onSearchSite(_obj, _data);
        }
        else if(_method == "search_site_select") {
            this.onSearchSiteSelect(_obj, _data);
        }
        else if(_method == "search_site_next") {
            this.onSearchSiteNext(_obj, _data);
        }
        else if(_method == "delete_site") {
            this.onDeleteSite(_obj, _data);
        }
        else if(_method == "new_site") {
            this.onNewSite(_obj, _data);
        }
        else if(_method == "store_default_site") {
            this.onStoreDefaultSite(_obj, _data);
        }
        else if(_method == "load_default_site") {
            this.onLoadDefaultSite(_obj, _data);
        }
        else {
            this.addError("La méthode est inconnue.");
        }
        return !this.hasErrors();
    }
    //===============================================
    onSaveSite(_obj, _data) {
        var lConfirm = new GConfirm();
        lConfirm.setCallback("site", "save_site_confirm");
        lConfirm.showConfirm();
    }
    //===============================================
    onSaveSiteConfirm(_obj, _data) {
        this.readUi();
        this.initDefaultSite();
        this.readDefaultSite();
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callLocal("site", "save_site", lData, this.onSaveSiteCB);        
    }
    //===============================================
    onSaveSiteCB(_data, _isOk) {

    }
    //===============================================
    onSearchSite(_obj, _data) {
        this.readUi();
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callRemote("site", "search_site", lData, this.onSearchSiteCB);        
    }
    //===============================================
    onSearchSiteCB(_data, _isOk) {
        if(_isOk) {
            var lSite = GSite.Instance();
            lSite.clearMap();
            lSite.deserialize(_data);
            if(lSite.m_map.length == 1) {
                lSite.loadFromMap(0);
                lSite.writeUi();
                lSite.initDefaultSite();
                call_server("site", "store_default_site", this);
            }
            else if(lSite.m_map.length) {
                lSite.showTable("search_site_select", "search_site_next");
            }
            else {
                lSite.addLog("Le résultat est vide.");
                lSite.showLogsX();
            }
        }
    }
    //===============================================
    onSearchSiteSelect(_obj, _data) {
        var lSite = GSite.Instance();
        var lTable = new GTable();
        lTable.deserialize(_data);
        if(lTable.getType() == "cell") {
            lTable.onCloseTable();
            lSite.loadFromMap(lTable.getRow());
            lSite.writeUi();
            lSite.initDefaultSite();
            call_server("site", "store_default_site", this);
       }
    }
    //===============================================
    onSearchSiteNext(_obj, _data) {

    }
    //===============================================
    onDeleteSite(_obj, _data) {

    }
    //===============================================
    onNewSite(_obj, _data) {
        var lSite = new GSite();
        lSite.writeUi();
    }
    //===============================================
    onStoreDefaultSite(_obj, _data) {
        var lSite = new GSite();
        lSite.readDefaultSite();
        var lAjax = new GAjax();
        var lData = lSite.serialize();
        lAjax.callLocal("site", "store_default_site", lData, this.onStoreDefaultSiteCB);        
    }
    //===============================================
    onStoreDefaultSiteCB(_data, _isOk) {
        if(_isOk) {
            call_server("page", "load_default_page", this);
        }
    }
    //===============================================
    onLoadDefaultSite(_obj, _data) {
        var lAjax = new GAjax();
        lAjax.callLocal("site", "load_default_site", "", this.onLoadDefaultSiteCB);        
    }
    //===============================================
    onLoadDefaultSiteCB(_data, _isOk) {
        var lSite = new GSite();
        lSite.deserialize(_data);
        lSite.loadDefaultSite();
    }
    //===============================================
}
//===============================================
GSite.Instance().init();
//===============================================
