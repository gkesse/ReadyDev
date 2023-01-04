//===============================================
class GTest extends GObjectUi {
    //===============================================
    constructor() {
		super();
		this.m_module = "";
		this.m_method = "";
    }
    //===============================================
	serialize(_code = "test") {
		var lDom = new GCode();
		lDom.createDoc();
		lDom.addData(_code, "module", this.m_module);
		lDom.addData(_code, "method", this.m_method);
		return lDom.toString();
	}
    //===============================================
	deserialize(_data, _code = "test") {
		var lDom = new GCode();
		lDom.loadXml(_data);
		this.m_module = lDom.getItem(_code, "module");
		this.m_method = lDom.getItem(_code, "method");
	}
    //===============================================
	setTest(_obj) {
		this.m_module = _obj.m_module;
		this.m_method = _obj.m_method;
	}
    //===============================================
}
//===============================================
