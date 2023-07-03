//===============================================
class GFile extends GObject {
    //===============================================
    static m_instance = null;
    //===============================================
    constructor() {
        super();
        this.m_id = 0;
        this.m_parentId = 0;
        this.m_name = "";
        this.m_path = "";
        this.m_mimeType = "";
        this.m_isDir = false;
    }
    //===============================================
    static Instance() {
        if(this.m_instance == null) {
            this.m_instance = new GFile();
        }
        return this.m_instance;
    }    
    //===============================================
    clone() {
        return new GFile();
    }
    //===============================================
    setObj(_obj) {
        this.m_id = _obj.m_id;
        this.m_parentId = _obj.m_parentId;
        this.m_name = _obj.m_name;
        this.m_path = _obj.m_path;
        this.m_mimeType = _obj.m_mimeType;
        this.m_isDir = _obj.m_isDir;
    }
    //===============================================
    isEqual(_obj) {
        var lEqualOk = true;
        lEqualOk &= (this.m_path == _obj.m_path);
        return lEqualOk;
    }
    //===============================================
    findObj(_path) {
        var lObj = this.clone();
        lObj.m_path = _path;
        var lIndex = super.findObj(lObj);
        return lIndex;
    }
    //===============================================
    init() {
        if(this.isAdmin()) {
            this.onLoadFileTree();
        }
    }
    //===============================================
    toForm() {
        var lForm = new GForm();
        for(var i = 0; i < this.m_map.length; i++) {
            var lObj = this.m_map[i];
            lForm.addTree(lObj.m_id, lObj.m_parentId, lObj.m_name, lObj.m_isDir);
        }
        var lData = lForm.serialize();
        return lData;
    }
    //===============================================
    serialize(_code = "file") {
        var lDom = new GCode();
        lDom.createDoc();
        lDom.addData(_code, "id", this.m_id);
        lDom.addData(_code, "parent_id", this.m_parentId);
        lDom.addData(_code, "name", this.m_name);
        lDom.addData(_code, "path", this.m_path);
        lDom.addData(_code, "mime_type", this.m_mimeType);
        lDom.addData(_code, "is_dir", this.m_isDir);
        lDom.addMap(_code, this.m_map);
        return lDom.toString();
    }
    //===============================================
    deserialize(_data, _code = "file") {
        var lDom = new GCode();
        lDom.loadXml(_data);
        this.m_id = lDom.getData(_code, "id");
        this.m_parentId = lDom.getData(_code, "parent_id");
        this.m_name = lDom.getData(_code, "name");
        this.m_path = lDom.getData(_code, "path");
        this.m_mimeType = lDom.getData(_code, "mime_type");
        this.m_isDir = lDom.getData(_code, "is_dir");
        lDom.getMap(_code, this.m_map, this);
    }
    //===============================================
    run(_method, _obj, _data) {
        if(_method == "") {
            this.m_logs.addError("La méthode est obligatoire.");
        }
        //===============================================
        else if(_method == "load_file_tree") {
            this.onLoadFileTree(_obj, _data);
        }
        //===============================================
        else {
            this.m_logs.addError("La méthode est inconnue.");
        }
        return !this.m_logs.hasErrors();
    }
    //===============================================
    onLoadFileTree(_obj, _data) {
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callLocal("file", "load_file_tree", lData, this.onLoadFileTreeCB);
    }
    //===============================================
    onLoadFileTreeCB(_data, _isOk) {
        if(_isOk) {
            var lObj = GFile.Instance();
            lObj.deserialize(_data);
        }
    }
    //===============================================
}
//===============================================
GFile.Instance().init();
//===============================================
