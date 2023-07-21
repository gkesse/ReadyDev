//===============================================
class GAjax extends GObject {
    //===============================================
    constructor() {
        super();
    }
    //===============================================
    isValid(_data) {
        if(_data != "") {
            var lDom = new GCode();
            if(!lDom.loadXml(_data)) {
                this.m_dataLogs.addError("La réponse n'est pas du XML valide.");
                return false;
            }
            else if(lDom.m_node.nodeName != "rdv") {
                this.m_dataLogs.addError("Le noeud racine de la réponse XML n'est pas valide.");
                return false;
            }
        }
        return true;
    }
    //===============================================
    call(_module, _method, _params, _callback, _type) {
        if(_module == "") {
            this.m_logs.addError("Le module est obligatoire.");            
            return false;
        }
        if(_method == "") {
            this.m_logs.addError("La méthode est obligatoire.");            
            return false;
        }
        var lDom = new GCode();
        lDom.createDoc();
        lDom.addData("manager", "module", _module);
        lDom.addData("manager", "method", _method);
        lDom.addData("server", "type", _type);
        lDom.addData("facade", "facade", "server_cpp");
        lDom.loadData(_params);
        var lData = lDom.toString();
        this.callServer(lData, _callback);
        return !this.m_logs.hasErrors();
    }
    //===============================================
    callLocal(_module, _method, _params, _callback = null) {
        this.call(_module, _method, _params, _callback, "local");
        return !this.m_logs.hasErrors();
    }
    //===============================================
    callRemote(_module, _method, _params, _callback = null) {
        this.call(_module, _method, _params, _callback, "remote");
        return !this.m_logs.hasErrors();
    }
    //===============================================
    callServer(_data, _callback) {
        if(_data == "") {
            this.m_logs.addError("La donnée est obligatoire.");            
            return false;
        }
        var lLoader = new GLoader();
        var lXhttp = new XMLHttpRequest();
        lXhttp.onreadystatechange = function() {
            if(this.readyState == 4 && this.status == 200) {
                var lData = this.responseText;
                var lLog = new GLog();
                var lAjax = new GAjax();
                if(!lAjax.isValid(lData)) {
                    lLog.addDataSrv(lData);
                }
                else {
                    lLog.deserialize(lData);
                }
                if(_callback) _callback(lData, !lLog.hasErrors());
                lLog.showLogsX();
                lLoader.onCloseLoader();
            }
        }
        
        var lMethod = "POST";
        var lUrl = "/php/req/server.php";
        var lAsync = true;
        var lUser = null;
        var lPassword = null;

        lXhttp.open(lMethod, lUrl, lAsync, lUser, lPassword);
        lXhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        var lReq = "";
        lReq += sprintf("req=%s", _data);
        lXhttp.send(lReq);
        lLoader.onOpenLoader();
        return !this.m_logs.hasErrors();
    }
    //===============================================
}
//===============================================
