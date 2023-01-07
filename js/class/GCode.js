//===============================================
class GCode extends GXml {
    //===============================================
    constructor() {
        super();
    }
    //===============================================
    addData(code, key, value, isCData = false) {
        if(code == "") return false;
        if(key == "") return false;
        if(value == "") return false;
        this.createCode(code);
        this.createVNode(key, value, isCData);
        return true;
    }
    //===============================================
    addMap(_code, _map, _obj) {
        if(!_map.length) return false;
        this.createCode(_code);
        this.getCode(_code);
        this.createXNode("map");
        for(var i = 0; i < _map.length; i++) {
            var lObj = _map[i];
            var lData = lObj.serialize(_code);
            var lDom = new GCode();
            lDom.loadXml(lData);
            lData = lDom.toStringData();
            this.loadNode(lData);
        }
        return true;
    }
    //===============================================
    countItem(code) {
        if(code == "") return 0;
        this.queryXPath(sprintf("/rdv/datas/data[code='%s']/map/data", code));
        var lCount = this.countXPath();
        return lCount;
    }
    //===============================================
    createCode(code) {
        if(!this.getCode(code)) {
            this.createXNode("/rdv/datas");
            this.createNode("data");
            this.next();
            this.createVNode("code", code);
        }
    }
    //===============================================
    createDatas() {
        if(!this.hasDatas()) {
            this.createXNode("/rdv/datas");
        }
    }
    //===============================================
    getCode(code) {
        return this.getXNode(sprintf("/rdv/datas/data[code='%s']", code));
    }
    //===============================================
    getDatas() {
        return this.getXNode(sprintf("/rdv/datas"));
    }
    //===============================================
    getItem(code, key, isCData = false) {
        this.getXNode(sprintf("/rdv/datas/data[code='%s']/%s", code, key));
        var lData = this.getValue(isCData);
        return lData;
    }
    //===============================================
    getItem2(code, index, isCData = false) {
        this.getXNode(sprintf("/rdv/datas/data[code='%s']/map/data[position()=%d]", code, index + 1));
        var lData = this.getValue(isCData);
        return lData;
    }
    //===============================================
    getItem3(code, key, index, isCData = false) {
        this.getXNode(sprintf("/rdv/datas/data[code='%s']/map/data[position()=%d]/%s", code, index + 1, key));
        var lData = this.getValue(isCData);
        return lData;
    }
    //===============================================
    getList(code, obj, category = "", isCData = false) {
        var lCount = this.countItem(code);
        for(var i = 0; i < lCount; i++) {
            if(category == "") {
                var lData = this.getItem2(code, i, isCData);
                obj.push(lData);                
            }
            else {
                var lCategory = this.getItem3(code, "category", i);
                var lData = this.getItem3(code, "data", i, isCData);
                if(lCategory == category) {
                    obj.push(lData);                
                }
            }
        }
        return true;
    }
    //===============================================
    getListCD(code, category = "") {
        return this.getList(code, category, true);
    }
    //===============================================
    getMap(_code, _map, _obj) {
        var lCount = this.countItem(_code);
        
        for(var i = 0; i < lCount; i++) {
            var lData = this.getMapItem(_code, i);
            var lObj = _obj.clone();
            lObj.deserialize(lData, _code);
            _map.push(lObj);
        }
        return true;
    }
    //===============================================
    getMapItem(code, index) {
        this.getXNode(sprintf("/rdv/datas/data[code='%s']/map/data[position()=%d]", code, index + 1));
        var lData = this.toStringNode();
        var lDom = new GCode();
        lDom.createDoc();
        lDom.createXNode("/rdv/datas");
        lDom.loadNode(lData);
        return lDom.toString();
    }
    //===============================================
    hasData() {
        this.queryXPath(sprintf("/rdv/datas/data[code]"));
        var lCount = this.countXPath();
        return (lCount != 0);
    }
    //===============================================
    hasCode(code) {
        this.queryXPath(sprintf("/rdv/datas/data[code='%s']", code));
        var lData = this.countXPath();
        return (lData != 0);
    }
    //===============================================
    hasDatas() {
        this.queryXPath(sprintf("/rdv/datas"));
        var lCount = this.countXPath();
        return (lCount != 0);
    }
    //===============================================
    loadCode(data) {
        data = data.trim()
        if(data == "") return false;
        this.createXNode(sprintf("/rdv/datas"));
        this.loadNode(data);
        return true;
    }
    //===============================================
    loadData(_data) {
        _data = _data.trim()
        if(_data == "") return false;
        var lDom = new GCode();
        lDom.loadXml(_data);
        var lData = lDom.toStringData();
        this.createDatas();
        this.loadNode(lData, false);
        return true;
    }
    //===============================================
    toStringCode(code) {
        this.getXNode(sprintf("/rdv/datas/data[code='%s']", code));
        var lData = this.toStringNode();
        return lData;
    }
    //===============================================
    toStringData() {
        var lData = "";
        if(this.getDatas()) {
            lData = this.m_node.innerHTML;
        }
        return lData;
    }
    //===============================================
}
//===============================================
