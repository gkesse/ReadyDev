//===============================================
class GObject {
    //===============================================
    constructor(_codeName = "object") {
        this.m_codeName = _codeName;
        this.m_logs = new GLog();
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
    showDatas() {
        this.m_logs.showDatas();
    }
    //===============================================
    clone() {return new GObject();}
    serialize(_code = "object") {return "";}
    deserialize(_data, _code = "object") {}
    //===============================================
}
//===============================================
