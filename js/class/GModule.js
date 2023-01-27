//===============================================
class GModule extends GObject {
    //===============================================
    constructor() {
        super();
        this.m_module = "";
        this.m_method = "";
    }
    //===============================================
    serialize(_code = "request") {
        var lDom = new GCode();
        lDom.createDoc();
        lDom.addData(_code, "module", this.m_module);
        lDom.addData(_code, "method", this.m_method);
        return lDom.toString();
    }
    //===============================================
    deserialize(_data, _code = "request") {
        var lData = new GCode();
        lData.loadXml(_data);
        this.m_module = lData.getItem(_code, "module");
        this.m_method = lData.getItem(_code, "method");
    }
    //===============================================
}
//===============================================
