//===============================================
class GTest extends GObject {
    //===============================================
    constructor() {
        super();
    }
    //===============================================
    run(_method, _obj, _data) {
        if(_method == "") {
            this.m_logs.addError("La méthode est obligatoire.");
        }
        else if(_method == "xml") {
            this.onXml();
        }
        else if(_method == "code") {
            this.onCode();
        }
        else if(_method == "log") {
            this.onLog();
        }
        else {
            this.m_logs.addError("La méthode est inconnue.");
        }
    }
    //===============================================
    onXml() {
        var lDom = new GXml();
        var lDomC = new GXml();
        
        // createDoc - toString
        lDom.createDoc();
        lDomC.m_node = lDom.addObj(lDom, "datas");
        lDomC.m_node = lDomC.addObj(lDom, "data");
        lDomC.addValue(lDom, "code", "logs");
        this.m_logs.addData(lDom.toString());
    }
    //===============================================
    onCode() {
        var lDom = new GCode();
        var lDomC = new GCode();
        
        // createDoc - addData
        lDom.createDoc();
        lDom.addData("logs", "type", "error");
        lDom.addData("logs", "side", "client_js");
        lDom.addData("logs", "msg", "La connexion au serveur a échoué.");
        this.m_logs.addData(lDom.toString());
    }
    //===============================================
    onLog() {
        var lLog = new GLog();
        var lLogC = new GLog();
        
        // addError - serialize
        lLog.addError("La connexion au serveur a échoué.");
        lLog.addLog("Le module de traitement a été chargé.");
        lLog.addData("La résolution de l'écran est de 1200 x 976.");
        lLog.loadFromMap(3);
        this.m_logs.addData(lLog.serialize());
        
        //
        lLogC.deserialize(lLog.serialize());
        this.m_logs.addData(lLogC.serialize());
    }
    //===============================================
}
//===============================================
