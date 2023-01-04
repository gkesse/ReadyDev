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
    onModuleNone() {
        var lLog = GLog.Instance();
        lLog.addError(sprintf("Le module est obligatoire."))
    }
    //===============================================
    onMethodNone() {
        var lLog = GLog.Instance();
        lLog.addError(sprintf("La méthode est obligatoire."))
    }
    //===============================================
    onModuleUnknown() {
        var lLog = GLog.Instance();
        lLog.addError(sprintf("Le module n'existe pas."))
    }
    //===============================================
    onMethodUnknown() {
        var lLog = GLog.Instance();
        lLog.addError(sprintf("Le méthode n'existe pas."))
    }
    //===============================================
}
//===============================================
