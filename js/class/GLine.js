//===============================================
class GLine extends GObject {
    //===============================================
    static m_instance = null;
    //===============================================
    constructor() {
        super();
        this.m_icon = "";
    }
    //===============================================
    static Instance() {
        if(this.m_instance == null) {
            this.m_instance = new GLine();
        }
        return this.m_instance;
    }    
    //===============================================
    clone() {
        var lObj = new GLine();
        return lObj;
    }
    //===============================================
    setObj(_obj) {
        if(!_obj) return;
        this.m_icon = _obj.m_icon;
    }
    //===============================================
    isEqual(_obj) {
        var lEqualOk = true;
        lEqualOk &= (this.m_icon == _obj.m_icon);
        return lEqualOk;
    }
    //===============================================
    toLine() {
        var lHtml = "";
        lHtml += sprintf("<div class='GLine1 Line1'>");
        lHtml += sprintf("<hr class='Line2'/>");
        lHtml += sprintf("<div class='Line3'>");
        lHtml += sprintf("<i class='Line4 fa fa-%s'></i>", this.m_icon);
        lHtml += sprintf("</div>");
        lHtml += sprintf("</div>");
        return lHtml;
    }
    //===============================================
    serialize(_code = "bullet") {
        var lDom = new GCode();
        lDom.createDoc();
        lDom.addData(_code, "icon", this.m_icon);
        lDom.addMap(_code, this.m_map);
        return lDom.toString();
    }
    //===============================================
    deserialize(_data, _code = "bullet") {
        var lDom = new GCode();
        lDom.loadXml(_data);
        this.m_icon = lDom.getItem(_code, "icon");
        lDom.getMap(_code, this.m_map, this);
    }
    //===============================================
}
//===============================================
