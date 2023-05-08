//===============================================
class GObject {
    //===============================================
    constructor() {
        this.m_pageId = "";
        this.m_logs = new GLog();
        this.m_map = [];
    }
    //===============================================
    toWidth() {
        var lWidth = window.innerWidth
        || document.documentElement.clientWidth
        || document.body.clientWidth;
        return lWidth;
    }
    //===============================================
    toHeight() {
        var lHeight = window.innerHeight
        || document.documentElement.clientHeight
        || document.body.clientHeight;
        return lHeight;
    }
    //===============================================
    toWidthRWD() {
        return 960;
    }
    //===============================================
    readPageId() {
        var lPageId = document.getElementById("gPageId");
        this.m_pageId = lPageId.value;
    }
    //===============================================
    isAdmin() {
        this.readPageId();
        if(this.m_pageId == "/home/admin") return true;
        return false;
    }
    //===============================================
    loadFromMap(_index) {
        if(_index >= 1 && _index <= this.m_map.length) {
            var lObj = this.m_map[_index - 1];
            this.setObj(lObj);
        }
        return this;
    }
    //===============================================
    loadToMap(_index) {
        if(_index >= 1 && _index <= this.m_map.length) {
            var lObj = this.m_map[_index - 1];
            lObj.setObj(this);
        }
    }
    //===============================================
    size() {
        return this.m_map.length;
    }
    //===============================================
    findObj(_obj) {
        for(var i = 0; i < this.size(); i++) {
            var lObj = this.m_map[i];
            if(lObj.isEqual(_obj)) return i + 1;
        }
        return 0;
    }
    //===============================================
    findMap(_obj) {
        var lMap = this.clone();
        for(var i = 0; i < this.size(); i++) {
            var lObj = this.m_map[i];
            if(lObj.isEqual(_obj)) {
                lMap.addObj(lObj);
            }
        }
        return lMap;
    }
    //===============================================
    addObj(_obj) {
        var lObj = this.clone();
        lObj.setObj(_obj);
        this.m_map.push(lObj);
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
    addErrorNS(_error) {
        this.m_logs.addErrorNS(_error);
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
    hasErrorsNS() {
        return this.m_logs.hasErrorsNS();
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
    createNode(_data) {
        var lParent = document.createElement('div');
        lParent.innerHTML = _data.trim();
        return lParent.firstElementChild;
    }
    //===============================================
    toParentNode(_node, _className) {
        var lNode = _node;
        while(1) {
            if(!lNode) break;
            if(lNode.matches("." + _className)) break;
            var lNode = lNode.parentNode;
        }
        return lNode;
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
