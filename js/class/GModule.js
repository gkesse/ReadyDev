//===============================================
class GModule extends GObject {
    //===============================================
    constructor() {
		super();
		this.module = "";
		this.method = "";
    }
    //===============================================
	deserialize(data, code = "request") {
		var lData = new GCode();
		lData.loadXml(data);
		this.module = lData.getItem(code, "module");
		this.method = lData.getItem(code, "method");
	}
    //===============================================
}
//===============================================
