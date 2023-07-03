//===============================================
class GCode extends GXml {
    //===============================================
    constructor() {
        super();
    }   
    //===============================================
    createDatas() {
        var lDom = new GXml();
        lDom.m_node = this.getNode(this, sprintf("/rdv/datas"));
        if(!lDom.m_node) {
            lDom.m_node = this.createNode(this, "/rdv/datas");
        }
        return lDom.m_node;
    }
    //===============================================
    createCode(_code) {
        var lDom = new GXml();
        lDom.m_node = this.getNode(this, sprintf("/rdv/datas/data[code='%s']", _code));
        if(!lDom.m_node) {
            lDom.m_node = this.createDatas();
            lDom.m_node = lDom.addObj(this, "data");
            lDom.addValue(this, "code", _code);
        }
        return lDom.m_node;
    }
    //===============================================
    addData(_code, _name, _value, _isCData) {
        if(_value == 0) return;
        if(_value == "") return;
        var lDom = new GXml();
        lDom.m_node = this.getNode(this, sprintf("/rdv/datas/data[code='%s']/%s", _code, _name));
        if(!lDom.m_node) {
            lDom.m_node = this.createCode(_code);
            lDom.addValue(this, _name, _value, _isCData);
        }
        else {
            lDom.setValue(this, _value, _isCData);
        }
        return lDom.m_node;
    }
    //===============================================
    addMap(_code, _map) {
        if(_map.length == 0) return;
        
        var lDom = new GXml();
        lDom.m_node = this.getNode(this, sprintf("/rdv/datas/data[code='%s']/map", _code));
        
        if(!lDom.m_node) {
            lDom.m_node = this.createCode(_code);
            lDom.m_node = lDom.addObj(this, "map");
        }
        
        for(var i = 0; i < _map.length; i++) {
            var lObj = _map[i];
            var lData = lObj.serialize(_code);
            lData = this.toDatas(lData);
            lDom.loadNode(this, lData);
        }
    }
    //===============================================
    getData(_code, _name, _isCData) {
        var lDom = new GXml();
        lDom.m_node = this.getNode(this, sprintf("/rdv/datas/data[code='%s']/%s", _code, _name));
        if(!lDom.m_node) return "";
        var lData = lDom.getValue();
        return lData;
    }
    //===============================================
    getMap(_code, _map, _obj) {        
        var lSize = this.countNode(this, sprintf("/rdv/datas/data[code='%s']/map/data", _code));
        if(!lSize) return;
        
        for(var i = 0; i < lSize; i++) {
            var lDom = new GXml();
            lDom.m_node = this.getNode(this, sprintf("/rdv/datas/data[code='%s']/map/data[position()=%s]", _code, i + 1));
            var lData = lDom.toNode(this);
            lData = this.toCode(lData);
            var lObj = _obj.clone();
            lObj.deserialize(lData, _code);
            _map.push(lObj);
        }
    }
    //===============================================
    loadData(_data) {
        if(_data == "") return;
        var lData = this.toDatas(_data);
        if(lData != "") {
            var lDom = new GCode();
            lDom.m_node = this.getNode(this, sprintf("/rdv/datas"));
            lDom.loadNode(this, lData);
        }
    }
    //===============================================
    toDatas(_data) {
        _data = _data.trim();
        if(_data == "") return "";
        var lDom = new GXml();
        var lDomC = new GXml();
        lDom.loadXml(_data);
        lDomC.m_node = lDom.getNode(lDom, sprintf("/rdv/datas/data"));
        if(!lDomC.m_node) return "";
        var lData = lDomC.toNode(lDom);
        return lData;
    }
    //===============================================
    toCode(_data) {
        _data = _data.trim();
        if(_data == "") return "";
        var lDom = new GCode();
        var lDomC = new GCode();
        lDom.createDoc();
        lDomC.m_node = lDom.createDatas();
        lDomC.loadNode(lDom, _data);
        var lData = lDom.toString();
        return lData;
    }
    //===============================================
}
//===============================================
