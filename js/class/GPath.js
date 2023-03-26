//===============================================
class GPath extends GObject {
    //===============================================
    static m_instance = null;
    //===============================================
    constructor() {
        super();
        this.m_name = "";
        this.m_link = "";
        this.m_arrow = "";
    }
    //===============================================
    static Instance() {
        if(this.m_instance == null) {
            this.m_instance = new GPath();
        }
        return this.m_instance;
    }    
    //===============================================
    clone() {
        var lObj = new GPath();
        return lObj;
    }
    //===============================================
    setObj(_obj) {
        this.m_name = _obj.m_name;
        this.m_link = _obj.m_link;
        this.m_arrow = _obj.m_arrow;
    }
    //===============================================
    isEqual(_obj) {
        var lEqualOk = true;
        lEqualOk &= (this.m_name == _obj.m_name);
        lEqualOk &= (this.m_link == _obj.m_link);
        lEqualOk &= (this.m_arrow == _obj.m_arrow);
        return lEqualOk;
    }
    //===============================================
    toPath() {
        var lHtml = "";
        lHtml += sprintf("<div class='GPath1 Path1'>\n");
        lHtml += sprintf("<a class='GPath2 Path2' href='%s'>%s</a>\n", this.m_link, this.m_name);
        lHtml += sprintf("</div>\n");
        return lHtml;
    }
    //===============================================
    toArrow() {
        var lHtml = "";
        lHtml += sprintf("<i class='GPath3 Path3 fa fa-%s'></i>\n", this.m_arrow);
        return lHtml;
    }
    //===============================================
    toLink() {
        var lHtml = "";
        lHtml += sprintf("<a class='GPath2 Path2' href='%s'>%s</a>\n", this.m_link, this.m_name);
        return lHtml;
    }
    //===============================================
    writeNode(_node) {
        _node.innerHTML = this.m_name;
        _node.href = this.m_link;
    }
    //===============================================
    serialize(_code = "path") {
        var lDom = new GCode();
        lDom.createDoc();
        lDom.addData(_code, "icon", this.m_name);
        lDom.addData(_code, "text", this.m_link);
        lDom.addData(_code, "number", this.m_arrow);
        lDom.addMap(_code, this.m_map);
        return lDom.toString();
    }
    //===============================================
    deserialize(_data, _code = "path") {
        var lDom = new GCode();
        lDom.loadXml(_data);
        this.m_name = lDom.getItem(_code, "icon");
        this.m_link = lDom.getItem(_code, "text");
        this.m_arrow = lDom.getItem(_code, "number");
        lDom.getMap(_code, this.m_map, this);
    }
    //===============================================
}
//===============================================
