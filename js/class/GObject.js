//===============================================
class GObject {
    //===============================================
    constructor() {
        this.m_logs = new GLog();
        this.m_map = [];
    }
    //===============================================
    loadFromMap(_index) {
        if(_index < 0 || _index >= this.m_map.length) {
            this.addError("L'index de la donnée est incorrect.");
            this.setObj(this.clone());
            return this;
        }
        var lObj = this.m_map[_index];
        this.setObj(lObj);
        return this;
    }
    //===============================================
    loadToMap(_index) {
        if(_index < 0 || _index >= this.m_map.length) {
            this.addError("L'index de la donnée est incorrect.");
            return false;
        }
        var lObj = this.m_map[_index];
        lObj.setObj(this);
        return true;
    }
    //===============================================
    findObj(_obj) {
        for(var i = 0; i < this.m_map.length; i++) {
            var lObj = this.m_map[i];
            if(lObj.isEqual(_obj)) return i;
        }
        return -1;
    }
    //===============================================
    isNull() {
        return this.isEqual(this.clone());
    }
    //===============================================
    clearMap() {
        this.m_map = [];
        this.m_logs.clearLogs();
    }
    //===============================================
    clearLogs() {
        this.m_logs.clearLogs();
    }
    //===============================================
    addError(_error) {
        this.m_logs.addError(_error);
    }
    //===============================================
    addLog(_log) {
        this.m_logs.addLog(_log);
    }
    //===============================================
    addData(_data) {
        this.m_logs.addData(_data);
    }
    //===============================================
    addXml(_data) {
        this.m_logs.addXml(_data);
    }
    //===============================================
    addLogs(_logs) {
        this.m_logs.addLogs(_logs);
    }
    //===============================================
    loadLogs(_data) {
        this.m_logs.deserialize(_data);
    }
    //===============================================
    getLogs() {
        return this.m_logs;
    }
    //===============================================
    hasErrors() {
        return this.m_logs.hasErrors();
    }
    //===============================================
    showErrors() {
        this.m_logs.showErrors();
    }
    //===============================================
    showLogs() {
        this.m_logs.showLogs();
    }
    //===============================================
    showLogsX() {
        this.m_logs.showLogsX();
    }
    //===============================================
    showDatas() {
        this.m_logs.showDatas();
    }
    //===============================================
    clone() {return new GObject();}
    setObj(_obj) {}
    isEqual(_obj) {return false;}
    serialize(_code = "object") {return "";}
    deserialize(_data, _code = "object") {}
    //===============================================
}
//===============================================
