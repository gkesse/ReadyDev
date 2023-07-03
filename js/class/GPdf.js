//===============================================
class GPdf extends GObject {
    //===============================================
    static m_instance = null;
    //===============================================
    constructor() {
        super();
    }
    //===============================================
    static Instance() {
        if(this.m_instance == null) {
            this.m_instance = new GPdf();
        }
        return this.m_instance;
    }    
    //===============================================
    clone() {
        return new GPdf();
    }
    //===============================================
    init() {
        if(this.isAdmin()) {
            //this.onLoadPdfFile();
        }
    }
    //===============================================
    serialize(_code = "pdf") {
        var lDom = new GCode();
        lDom.createDoc();
        lDom.addMap(_code, this.m_map);
        return lDom.toString();
    }
    //===============================================
    deserialize(_data, _code = "pdf") {
        var lDom = new GCode();
        lDom.loadXml(_data);
        lDom.getMap(_code, this.m_map, this);
    }
    //===============================================
    run(_method, _obj, _data) {
        if(_method == "") {
            this.m_logs.addError("La méthode est obligatoire.");
        }
        //===============================================
        else if(_method == "load_file_file") {
            this.onLoadPdfFile(_obj, _data);
        }
        //===============================================
        else {
            this.m_logs.addError("La méthode est inconnue.");
        }
        return !this.m_logs.hasErrors();
    }
    //===============================================
    onLoadPdfFile(_obj, _data) {
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callLocal("pdf", "load_file_file", lData, this.onLoadImageCB);
    }
    //===============================================
}
//===============================================
GPdf.Instance().init();
//===============================================
