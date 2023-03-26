//===============================================
class GGraduation extends GObject {
    //===============================================
    static m_instance = null;
    //===============================================
    constructor() {
        super();
        this.m_icon = "";
        this.m_text = "";
    }
    //===============================================
    static Instance() {
        if(this.m_instance == null) {
            this.m_instance = new GGraduation();
        }
        return this.m_instance;
    }    
    //===============================================
    clone() {
        var lObj = new GGraduation();
        return lObj;
    }
    //===============================================
    setObj(_obj) {
        this.m_icon = _obj.m_icon;
        this.m_text = _obj.m_text;
    }
    //===============================================
    isEqual(_obj) {
        var lEqualOk = true;
        lEqualOk &= (this.m_icon == _obj.m_icon);
        lEqualOk &= (this.m_text == _obj.m_text);
        return lEqualOk;
    }
    //===============================================
    getTextGraduation() {
        var lHtml = "";
        lHtml += sprintf("<b>2006 - 2009</b><br>\n");
        lHtml += sprintf("DUT Electronique Industrielle,<br>\n");
        lHtml += sprintf("Faculté des Sciences de Bizerte, Tunisie.\n");
        return lHtml;
    }
    //===============================================
    toGraduation() {
        var lHtml = "";
        lHtml += sprintf("<div class='GGraduation1 Graduation1'>\n");
        lHtml += sprintf("<i class='Graduation2 fa fa-%s'></i>\n", this.m_icon);
        lHtml += sprintf("<div class='Graduation3'>%s</div>\n", this.m_text);
        lHtml += sprintf("</div>\n");
        return lHtml;
    }
    //===============================================
    serialize(_code = "graduation") {
        var lDom = new GCode();
        lDom.createDoc();
        lDom.addData(_code, "icon", this.m_icon);
        lDom.addData(_code, "text", this.m_text);
        lDom.addMap(_code, this.m_map);
        return lDom.toString();
    }
    //===============================================
    deserialize(_data, _code = "graduation") {
        var lDom = new GCode();
        lDom.loadXml(_data);
        this.m_icon = lDom.getItem(_code, "icon");
        this.m_text = lDom.getItem(_code, "text");
        lDom.getMap(_code, this.m_map, this);
    }
    //===============================================
}
//===============================================
