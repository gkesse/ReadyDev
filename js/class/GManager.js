//===============================================
class GManager extends GObject {
    //===============================================
    constructor() {
        super();
        this.m_module = "";
        this.m_method = "";
    }
    //===============================================
    serialize(_code = "manager") {
        var lDom = new GCode();
        lDom.createDoc();
        lDom.addData(_code, "module", this.m_module);
        lDom.addData(_code, "method", this.m_method);
        return lDom.toString();
    }
    //===============================================
    deserialize(_data, _code = "manager") {
        var lData = new GCode();
        lData.loadXml(_data);
        this.m_module = lData.getData(_code, "module");
        this.m_method = lData.getData(_code, "method");
    }
    //===============================================
}
//===============================================
