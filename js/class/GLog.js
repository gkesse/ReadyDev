//===============================================
class GLog {
    //===============================================
    constructor() {
        this.m_type = "type";
        this.m_side = "side";
        this.m_msg = "msg";
        this.m_map = [];
        
        this.m_clientColor = "#aaaafa";
        this.m_serverColor = "#faaaaa";
        this.m_serverPhpColor = "#aafaaa";
    }
    //===============================================
    clone() {
        var lObj = new GLog();
        lObj.setObj(this);
        return lObj;
    }
    //===============================================
    clearLogs() {
        this.m_map = [];
    }
    //===============================================
    serialize(_code = "logs") {
        var lDom = new GCode();
        lDom.createDoc();
        lDom.addData(_code, "type", this.m_type);
        lDom.addData(_code, "side", this.m_side);
        lDom.addData(_code, "msg", this.m_msg);
        lDom.addMap(_code, this.m_map);
        return lDom.toString();
    }
    //===============================================
    deserialize(_data, _code = "logs") {
        var lDom = new GCode();
        lDom.loadXml(_data);
        this.m_type = lDom.getItem(_code, "type");
        this.m_side = lDom.getItem(_code, "side");
        this.m_msg = lDom.getItem(_code, "msg");
        lDom.getMap(_code, this.m_map, this);
    }
    //===============================================
    setObj(_obj) {
        this.m_type = _obj.m_type;
        this.m_side = _obj.m_side;
        this.m_msg = _obj.m_msg;
    }
    //===============================================
    addError(_msg) {
        var lObj = new GLog();
        lObj.m_type = "error";
        lObj.m_side = "client";
        lObj.m_msg = _msg;
        this.m_map.push(lObj);
    }
    //===============================================
    addLog(_msg) {
        var lObj = new GLog();
        lObj.m_type = "log";
        lObj.m_side = "client";
        lObj.m_msg = _msg;
        this.m_map.push(lObj);
    }
    //===============================================
    addData(_msg) {
        var lObj = new GLog();
        lObj.m_type = "data";
        lObj.m_side = "client";
        lObj.m_msg =  btoa(_msg);
        this.m_map.push(lObj);
    }
    //===============================================
    addXml(_msg) {
        var lObj = new GLog();
        lObj.m_type = "data";
        lObj.m_side = "client";
        lObj.m_msg =  btoa(sprintfXml(_msg));
        this.m_map.push(lObj);
    }
    //===============================================
    addLogs(_logs) {
        for(var i = 0; i < _logs.m_map.length; i++) {
            var lObj = _logs.m_map[i];
            this.m_map.push(lObj);
        }
    }
    //===============================================
    hasErrors() {
        for(var i = 0; i < this.m_map.length; i++) {
            var lObj = this.m_map[i];
            if(lObj.m_type == "error") return true;
        }
        return false;
    }
    //===============================================
    hasLogs() {
        for(var i = 0; i < this.m_map.length; i++) {
            var lObj = this.m_map[i];
            if(lObj.m_type == "log") return true;
        }
        return false;
    }
    //===============================================
    hasDatas() {
        for(var i = 0; i < this.m_map.length; i++) {
            var lObj = this.m_map[i];
            if(lObj.m_type == "data") return true;
        }
        return false;
    }
    //===============================================
    hasServer() {
        for(var i = 0; i < this.m_map.length; i++) {
            var lObj = this.m_map[i];
            if(lObj.m_side == "server") return true;
        }
        return false;
    }
    //===============================================
    hasServerPhp() {
        for(var i = 0; i < this.m_map.length; i++) {
            var lObj = this.m_map[i];
            if(lObj.m_side == "server_php") return true;
        }
        return false;
    }
    //===============================================
    getErrors() {
        var lErrors = "";
        for(var i = 0; i < this.m_map.length; i++) {
            var lObj = this.m_map[i];
            if(lObj.m_type != "error") continue;
            var lError = lObj.m_msg;
            if(i != 0) lErrors += "<br>";
            lError = sprintf("<i class='fa fa-chevron-right'></i> %s", lError);
            lErrors += lError;
        }
        return lErrors;
    }
    //===============================================
    getLogs() {
        var lLogs = "";
        for(var i = 0; i < this.m_map.length; i++) {
            var lObj = this.m_map[i];
            if(lObj.m_type != "log") continue;
            var lLog = lObj.m_msg;
            if(i != 0) lLogs += "<br>";
            lLog = sprintf("<i class='fa fa-chevron-right'></i> %s", lLog);
            lLogs += lLog;
        }
        return lLogs;
    }
    //===============================================
    getDatas() {
        var lDatas = "";
        for(var i = 0; i < this.m_map.length; i++) {
            var lObj = this.m_map[i];
            if(lObj.m_type != "data") continue;
            var lData = atob(lObj.m_msg);
            if(i != 0) lDatas += "<br>";
            lData = sprintf("<xmp>%s</xmp>", lData);
            lDatas += lData;
        }
        return lDatas;
    }
    //===============================================
    showErrors() {
        if(this.hasDatas()) return;
        if(!this.hasErrors()) return;
        
        var lTitleColor = this.m_clientColor;
        if(this.hasServer()) lTitleColor = this.m_serverColor;
        else if(this.hasServerPhp()) lTitleColor = this.m_serverPhpColor;
        
        var lModalErrors = document.getElementById("ModalErrors");
        var lErrorsBody = document.getElementById("ErrorsBody");
        var lErrorsTitle = document.getElementById("ErrorsTitle");
        var lErrorsLabel = document.getElementById("ErrorsLabel");
        var lClassName = lErrorsBody.className;
        
        lErrorsBody.className = lClassName.replace(" AnimateShow", "");
        lErrorsBody.className = lClassName.replace(" AnimateHide", "");
        lErrorsBody.className += " AnimateShow";
        lModalErrors.style.display = "block";
        lErrorsLabel.innerHTML = this.getErrors();
        lErrorsTitle.style.color = lTitleColor;
    }
    //===============================================
    showLogs() {
        if(this.hasDatas()) return;
        if(this.hasErrors()) return;
        if(!this.hasLogs()) return;
        
        var lTitleColor = this.m_clientColor;
        if(this.hasServer()) lTitleColor = this.m_serverColor;
        else if(this.hasServerPhp()) lTitleColor = this.m_serverPhpColor;

        var lModalLogs = document.getElementById("ModalLogs");
        var lLogsBody = document.getElementById("LogsBody");
        var lLogsTitle = document.getElementById("LogsTitle");
        var lLogsLabel = document.getElementById("LogsLabel");
        var lClassName = lLogsBody.className;
        
        lLogsBody.className = lClassName.replace(" AnimateShow", "");
        lLogsBody.className = lClassName.replace(" AnimateHide", "");
        lLogsBody.className += " AnimateShow";
        lModalLogs.style.display = "block";
        lLogsLabel.innerHTML = this.getLogs();
        lLogsTitle.style.color = lTitleColor;
        lLogsTitle.innerHTML = "Informations";
    }
    //===============================================
    showDatas() {
        if(!this.hasDatas()) return;
        
        var lTitleColor = this.m_clientColor;        
        if(this.hasServer()) lTitleColor = this.m_serverColor;
        else if(this.hasServerPhp()) lTitleColor = this.m_serverPhpColor;

        var lModalLogs = document.getElementById("ModalLogs");
        var lLogsBody = document.getElementById("LogsBody");
        var lLogsTitle = document.getElementById("LogsTitle");
        var lLogsLabel = document.getElementById("LogsLabel");
        var lClassName = lLogsBody.className;
        
        lLogsBody.className = lClassName.replace(" AnimateShow", "");
        lLogsBody.className = lClassName.replace(" AnimateHide", "");
        lLogsBody.className += " AnimateShow";
        lModalLogs.style.display = "block";
        lLogsLabel.innerHTML = this.getDatas();
        lLogsTitle.style.color = lTitleColor;
        lLogsTitle.innerHTML = "Datas";
    }
    //===============================================
    showLogsX() {
        this.showDatas();
        this.showErrors();
        this.showLogs();
    }
    //===============================================
}
//===============================================
