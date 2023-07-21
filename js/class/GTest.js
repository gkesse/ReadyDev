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
        else if(_method == "string") {
            this.onString(_method, _obj, _data);
        }
        else if(_method == "xml") {
            this.onXml(_method, _obj, _data);
        }
        else if(_method == "code") {
            this.onCode(_method, _obj, _data);
        }
        else if(_method == "log") {
            this.onLog(_method, _obj, _data);
        }
        else if(_method == "file") {
            this.onFile(_method, _obj, _data);
        }
        else {
            this.m_logs.addError("La méthode est inconnue.");
        }
    }
    //===============================================
    onString(_method, _obj, _data) {        
        // substr
        var lData = "Bonjour tout le monde.";
        var lData2 = lData.substr(3, 4);
        var lData3 = lData.substr(3);
        this.m_logs.addData(lData);
        this.m_logs.addData(lData2);
        this.m_logs.addData(lData3);
        
        // indexOf
        var lData = "Bonjour tout le monde.";
        var lData2 = lData.indexOf("le");
        this.m_logs.addData(lData2);
        
        // extractData
        var lData = "Bonjour tout le monde.";
        var lData2 = lData.extractData("Bonjour", "le");
        this.m_logs.addData(lData2);
        
        // extractFrom
        var lData = "Bonjour tout le monde.";
        var lData2 = lData.extractFrom("Bonjour");
        this.m_logs.addData(lData2);
    }
    //===============================================
    onXml(_method, _obj, _data) {
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
    onCode(_method, _obj, _data) {
        var lDom = new GCode();
        var lDomC = new GCode();
        
        // createDoc - addData
        lDom.createDoc();
        lDom.addData("logs", "type", "error");
        lDom.addData("logs", "side", "client_js");
        lDom.addData("logs", "msg", "Le serveur n'est pas disponible.");
        this.m_logs.addData(lDom.toString());
    }
    //===============================================
    onLog(_method, _obj, _data) {
        var lLog = new GLog();
        var lLogC = new GLog();
        
        // addError - serialize
        lLog.addError("Le serveur n'est pas disponible.");
        lLog.addLog("Le module de traitement a été chargé.");
        lLog.addData("La résolution de l'écran est de 1200 x 976.");
        lLog.loadFromMap(3);
        this.m_logs.addData(lLog.serialize());
        
        //
        lLogC.deserialize(lLog.serialize());
        this.m_logs.addData(lLogC.serialize());
    }
    //===============================================
    onFile(_method, _obj, _data) {
        var lAction = "load_file";
        
        if(!_obj) {
            if(lAction == "") {
                this.m_logs.addError("L'action est obligatoire.");
            }
            else if(lAction == "load_file") {
                var lBody = document.getElementById("TestBodyJs");
                var lHtml = "";
                lHtml += sprintf("<input id='TestEmailLoadFile' type='file' name='fileupload'/>\n");
                lHtml += sprintf("<button onclick='call_server(\"test\", \"file\", this)'>Charger</button>\n");
                lBody.innerHTML = lHtml;
            }
            else {
                this.m_logs.addError("L'action est inconnue.");
            }
        }
        else {
            if(lAction == "") {
                this.m_logs.addError("L'action est obligatoire.");
            }
            else if(lAction == "load_file") {
                var lUploadFile = document.getElementById("TestEmailLoadFile").files;

                if(lUploadFile.length) {
                    var lFileI = lUploadFile[0];
                    var lReader = new FileReader();
                    lReader.onload = function(e) {
                        var lData = e.target.result;
                        lData = lData.extractFrom(",");
                        var lFile = new GFile();
                        lFile.m_name = lFileI.name;
                        lFile.m_mimeType = lFileI.type;
                        lFile.m_size = lFileI.size;
                        lFile.m_data = lData;
                        lFile.onSaveFile();
                    };
                    lReader.readAsDataURL(lFileI);
                }
            }
            else {
                this.m_logs.addError("L'action est inconnue.");
            }
        }
    }
    //===============================================
}
//===============================================
