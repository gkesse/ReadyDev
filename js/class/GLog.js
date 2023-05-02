//===============================================
class GLog {
    //===============================================
    constructor() {
        this.m_category = "";
        this.m_model = "";
        this.m_type = "";
        this.m_side = "";
        this.m_msg = "";
        this.m_title = "";
        this.m_intro = "";
        this.m_color = "";
        this.m_data = "";
        this.m_map = [];
    }
    //===============================================
    clone() {
        return new GLog();
    }
    //===============================================
    setObj(_obj) {
        this.m_type = _obj.m_type;
        this.m_side = _obj.m_side;
        this.m_msg = _obj.m_msg;
        this.m_title = _obj.m_title;
        this.m_intro = _obj.m_intro;
        this.m_color = _obj.m_color;
        this.m_data = _obj.m_data;
    }
    //===============================================
    clearLogs() {
        this.m_map = [];
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
    addErrorNS(_msg) {
        var lObj = new GLog();
        lObj.m_type = "error_no_show";
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
        lObj.m_msg =  _msg;
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
    hasErrorsNS() {
        for(var i = 0; i < this.m_map.length; i++) {
            var lObj = this.m_map[i];
            if(lObj.m_type == "error_no_show") return true;
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
            var lData = lObj.m_msg;
            if(i != 0) lDatas += "<br>";
            lData = sprintf("<xmp>%s</xmp>", lData);
            lDatas += lData;
        }
        return lDatas;
    }
    //===============================================
    getColor() {
        var lColorCpp = "#800000";
        var lColorPhp = "#808000";
        var lColorJs = "#008080";
        var lColor = lColorJs;
        if(this.hasServer()) lColor = lColorCpp;
        else if(this.hasServerPhp()) lColor = lColorPhp;
        return lColor;
    }
    //===============================================
    initErrors() {
        this.m_title = "Erreurs";
        this.m_intro = "Consultez les erreurs.";
        this.m_color = this.getColor();
        this.m_data = this.getErrors();
    }
    //===============================================
    initDatas() {
        this.m_title = "Datas";
        this.m_intro = "Consultez les données.";
        this.m_color = this.getColor();
        this.m_data = this.getDatas();
    }
    //===============================================
    initLogs() {
        this.m_title = "Logs";
        this.m_intro = "Consultez les logs.";
        this.m_color = this.getColor();
        this.m_data = this.getLogs();
    }
    //===============================================
    initUi() {
        var lLogTitle = document.getElementById("LogTitle");
        var lLogIntro = document.getElementById("LogIntro");
        var lLogBody = document.getElementById("LogBody");

        lLogTitle.style.color = this.m_color;
        lLogTitle.innerHTML = this.m_title;
        lLogIntro.innerHTML = this.m_intro;
        lLogBody.innerHTML = this.m_data;
    }
    //===============================================
    readLogPhp() {
        var lLogsPhpData = document.getElementById("LogsPhpData");
        this.m_data = lLogsPhpData.innerHTML;
    }
    //===============================================
    serialize(_code = "logs") {
        var lDom = new GCode();
        lDom.createDoc();
        lDom.addData(_code, "type", this.m_type);
        lDom.addData(_code, "side", this.m_side);
        lDom.addData(_code, "msg", utf8_to_b64(this.m_msg));
        lDom.addMap(_code, this.m_map);
        return lDom.toString();
    }
    //===============================================
    deserialize(_data, _code = "logs") {
        var lDom = new GCode();
        lDom.loadXml(_data);
        this.m_type = lDom.getItem(_code, "type");
        this.m_side = lDom.getItem(_code, "side");
        this.m_msg = b64_to_utf8(lDom.getItem(_code, "msg"));
        lDom.getMap(_code, this.m_map, this);
    }
    //===============================================
    showErrors() {
        if(this.hasDatas()) return;
        if(!this.hasErrors()) return;
        
        this.initErrors();
        this.initUi();
        
        var lLogModal = document.getElementById("LogModal");
        var lLogForm = document.getElementById("LogForm");
        
        lLogForm.classList.remove("AnimateHide");
        lLogForm.classList.add("AnimateShow");
        lLogModal.style.display = "block";
    }
    //===============================================
    showLogs() {
        if(this.hasDatas()) return;
        if(this.hasErrors()) return;
        if(!this.hasLogs()) return;
        
        this.initLogs();
        this.initUi();
        
        var lLogModal = document.getElementById("LogModal");
        var lLogForm = document.getElementById("LogForm");
        
        lLogForm.classList.remove("AnimateHide");
        lLogForm.classList.add("AnimateShow");
        lLogModal.style.display = "block";
    }
    //===============================================
    showDatas() {
        if(!this.hasDatas()) return;
        
        this.initDatas();
        this.initUi();
        
        var lLogModal = document.getElementById("LogModal");
        var lLogForm = document.getElementById("LogForm");
        
        lLogForm.classList.remove("AnimateHide");
        lLogForm.classList.add("AnimateShow");
        lLogModal.style.display = "block";
    }
    //===============================================
    showLogsX() {
        this.showDatas();
        this.showErrors();
        this.showLogs();
    }
    //===============================================
    run(_method, _obj, _data) {
        if(_method == "") {
            this.addError("La méthode est obligatoire.");
        }
        //===============================================
        else if(_method == "close_logs") {
            this.onCloseLogs();
        }
        else if(_method == "show_php_logs") {
            this.onShowPhpLogs();
        }
        //===============================================
        else {
            this.addError("La méthode est inconnue.");
        }
    }
    //===============================================
    onCloseLogs() {
        var lLogModal = document.getElementById("LogModal");
        var lLogForm = document.getElementById("LogForm");
        
        lLogForm.classList.remove("AnimateShow");
        lLogForm.classList.add("AnimateHide");

        setTimeout(function() {
            lLogModal.style.display = "none";
        }, 400);
    }
    //===============================================
    onShowPhpLogs() {
        this.readLogPhp();
        this.deserialize(this.m_data);
        this.showLogsX();
    }
    //===============================================
}
//===============================================
