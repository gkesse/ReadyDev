//===============================================
class GObject {
    //===============================================
    constructor() {
        this.m_logs = new GLog();
        this.m_dataLogs = new GLog();
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
    toPageId() {
        var lPageId = document.getElementById("gPageId");
        return lPageId.value;
    }
    //===============================================
    isLogin() {
        var lLoginOk = document.getElementById("gLoginOk");
        return lLoginOk.value;
    }
    //===============================================
    isAdmin() {
        var lPageId = this.toPageId();
        var lLoginOk = this.isLogin();
        if(lPageId != "/home/admin") return false;
        if(!lLoginOk) return false;
        return true;
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
        this.m_logs.clearMap();
        this.m_dataLogs.clearMap();
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
            if(lNode.nodeType != Node.TEXT_NODE) {
                if(lNode.matches("." + _className)) break;
                if(lNode.matches(".GEndEditor")) return 0;
            }
            lNode = lNode.parentNode;
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
