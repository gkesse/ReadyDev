//===============================================
class GAjax extends GObject {
    //===============================================
    constructor() {
        super();
        this.m_xhttp = new XMLHttpRequest();
        this.m_method = "POST";
        this.m_url = "/php/req/server.php";
        this.m_async = true;
        this.m_user = null;
        this.m_password = null;
        this.m_headers = {
            "Content-Type" : "application/x-www-form-urlencoded"
        };
    }
    //===============================================
    call(_module, _method, _params, _callback, _type) {
        if(_module == "") {
            this.addError("Le module est obligatoire.");            
            return false;
        }
        if(_method == "") {
            this.addError("La méthode est obligatoire.");            
            return false;
        }
        if(_callback == null) {
            this.addError("La fonction de rappel est obligatoire.");            
            return false;
        }
        var lDom = new GCode();
        lDom.createDoc();
        lDom.addData("manager", "module", _module);
        lDom.addData("manager", "method", _method);
        lDom.addData("server", "type", _type);
        lDom.loadData(_params);
        var lData = lDom.toString();
        this.callServer(lData, _callback);
        return !this.hasErrors();
    }
    //===============================================
    callLocal(_module, _method, _params, _callback) {
        this.call(_module, _method, _params, _callback, "local");
        return !this.hasErrors();
    }
    //===============================================
    callRemote(_module, _method, _params, _callback) {
        this.call(_module, _method, _params, _callback, "remote");
        return !this.hasErrors();
    }
    //===============================================
    callServer(_data, _callback) {
        if(_data == "") {
            this.addError("La donnée est obligatoire.");            
            return false;
        }
        if(_callback == null) {
            this.addError("La fonction de rappel est obligatoire.");            
            return false;
        }
        var lLoader = new GLoader();
        this.m_xhttp.onreadystatechange = function() {
            if(this.readyState == 4 && this.status == 200) {
                var lData = this.responseText;
                var lLog = new GLog();
                lLog.deserialize(lData);
                if(_callback) _callback(lData, !lLog.hasErrors());
                lLog.showLogsX();
                lLoader.closeLoader();
            }
        }
        this.m_xhttp.open(this.m_method, this.m_url, this.m_async, this.m_user, this.m_password);
        for(var lHeader in this.m_headers) {
            var lValue = this.m_headers[lHeader];
            this.m_xhttp.setRequestHeader(lHeader, lValue);
        }
        var lReq = "";
        lReq += sprintf("req=%s", _data);
        this.m_xhttp.send(lReq);
        lLoader.showLoader();
        return !this.hasErrors();
    }
    //===============================================
}
//===============================================
