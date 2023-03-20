//===============================================
class GBullet extends GObject {
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
            this.m_instance = new GBullet();
        }
        return this.m_instance;
    }    
    //===============================================
    clone() {
        var lObj = new GBullet();
        return lObj;
    }
    //===============================================
    setObj(_obj) {
        if(!_obj) return;
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
    toBullet() {
        var lHtml = "";
        lHtml += sprintf("<div class=\"GBullet1\">");
        lHtml += sprintf("<div class=\"Bullet1\">");
        lHtml += sprintf("<i class=\"Bullet2 fa fa-%s\"></i>", this.m_icon);
        lHtml += sprintf("<div class=\"Bullet3\">%s</div>", this.m_text);
        lHtml += sprintf("</div>");
        lHtml += sprintf("</div>");
        return lHtml;
    }
    //===============================================
    serialize(_code = "bullet") {
        var lDom = new GCode();
        lDom.createDoc();
        lDom.addData(_code, "icon", this.m_icon);
        lDom.addData(_code, "text", this.m_text);
        lDom.addMap(_code, this.m_map);
        return lDom.toString();
    }
    //===============================================
    deserialize(_data, _code = "bullet") {
        var lDom = new GCode();
        lDom.loadXml(_data);
        this.m_icon = lDom.getItem(_code, "icon");
        this.m_text = lDom.getItem(_code, "text");
        lDom.getMap(_code, this.m_map, this);
    }
    //===============================================
}
//===============================================
