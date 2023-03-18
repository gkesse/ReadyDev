//===============================================
class GTitle extends GObject {
    //===============================================
    static m_instance = null;
    //===============================================
    constructor() {
        super();
        this.m_title = "";
        this.m_link = "";
    }
    //===============================================
    static Instance() {
        if(this.m_instance == null) {
            this.m_instance = new GTitle();
        }
        return this.m_instance;
    }    
    //===============================================
    clone() {
        var lObj = new GTitle();
        lObj.setObj(this);
        return lObj;
    }
    //===============================================
    setObj(_obj) {
        this.m_title = _obj.m_title;
        this.m_link = _obj.m_link;
    }
    //===============================================
    isEqual(_obj) {
        var lEqualOk = true;
        lEqualOk &= (this.m_title == _obj.m_title);
        lEqualOk &= (this.m_link == _obj.m_link);
        return lEqualOk;
    }
    //===============================================
    loadTitle() {
        this.clearMap();
        var lNodes = document.getElementsByClassName("GTitle1");
        for(var i = 0; i < lNodes.length; i++) {
            var lNode = lNodes[i];
            var lTitle = lNode.firstElementChild.firstElementChild.firstElementChild.firstElementChild;
            var lText = lTitle.innerHTML;
            var lId = lTitle.id;
            
            var lObj = new GTitle();
            lObj.m_title = lText;
            lObj.m_link = lId;
            this.m_map.push(lObj);
        }
    }
    //===============================================
    toForm() {
        var lForm = new GForm();
        for(var i = 0; i < this.m_map.length; i++) {
            var lTitle = this.m_map[i];
            var lObj = new GForm();
            lObj.m_value = lTitle.m_title;
            lForm.m_map.push(lObj);
        }
        var lData = lForm.serialize();
        return lData;
    }
    //===============================================
    serialize(_code = "title") {
        var lDom = new GCode();
        lDom.createDoc();
        lDom.addData(_code, "title", this.m_title);
        lDom.addData(_code, "link", this.m_link);
        lDom.addMap(_code, this.m_map);
        return lDom.toString();
    }
    //===============================================
    deserialize(_data, _code = "title") {
        var lDom = new GCode();
        lDom.loadXml(_data);
        this.m_title = lDom.getItem(_code, "title");
        this.m_link = lDom.getItem(_code, "link");
        lDom.getMap(_code, this.m_map, this);
    }
    //===============================================
}
//===============================================
