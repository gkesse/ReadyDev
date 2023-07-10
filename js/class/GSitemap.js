//===============================================
class GSitemap extends GObject {
    //===============================================
    static m_instance = null;
    //===============================================
    constructor() {
        super();
    }
    //===============================================
    static Instance() {
        if(this.m_instance == null) {
            this.m_instance = new GSitemap();
        }
        return this.m_instance;
    }    
    //===============================================
    clone() {
        return new GSitemap();
    }
    //===============================================
    setObj(_obj) {
        this.m_root = _obj.m_root;
    }
    //===============================================
    isEqual(_obj) {
        var lEqualOk = true;
        lEqualOk &= (this.m_root == _obj.m_root);
        return lEqualOk;
    }
    //===============================================
    init() {
        if(this.isAdmin()) {

        }
    }    
    //===============================================
    serialize(_code = "sitemap") {
        var lDom = new GCode();
        lDom.createDoc();
        lDom.addData(_code, "root", this.m_root);
        lDom.addMap(_code, this.m_map);
        return lDom.toString();
    }
    //===============================================
    deserialize(_data, _code = "sitemap") {
        var lDom = new GCode();
        lDom.loadXml(_data);
        this.m_root = lDom.getData(_code, "root");
        lDom.getMap(_code, this.m_map, this);
    }
    //===============================================
    run(_method, _obj, _data) {
        if(_method == "") {
            this.m_logs.addError("La méthode est obligatoire.");
        }
        else if(_method == "generate_sitemap") {
            this.onGenerateSitemap(_obj, _data);
        }
        else if(_method == "visualize_sitemap") {
            this.onVisualizeSitemap(_obj, _data);
        }
        else {
            this.m_logs.addError("Erreur la méthode est inconnue.");            
        }
        return !this.m_logs.hasErrors();
    }
    //===============================================
    onGenerateSitemap(_obj, _data) {
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callLocal("sitemap", "generate_sitemap", lData, this.onGenerateSitemapCB);        
    }
    //===============================================
    onGenerateSitemapCB(_data, _isOk) {
        if(_isOk) {

        }
    }
    //===============================================
    onVisualizeSitemap(_obj, _data) {
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callLocal("sitemap", "visualize_sitemap", lData, this.onVisualizeSitemapCB);        
    }
    //===============================================
    onVisualizeSitemapCB(_data, _isOk) {
        if(_isOk) {

        }
    }
    //===============================================
}
//===============================================
GPage.Instance().init();
//===============================================
