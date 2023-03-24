//===============================================
class GText extends GObject {
    //===============================================
    static m_instance = null;
    //===============================================
    constructor() {
        super();
        this.m_img = "";
        this.m_name = "";
        this.m_text = "";
    }
    //===============================================
    static Instance() {
        if(this.m_instance == null) {
            this.m_instance = new GText();
        }
        return this.m_instance;
    }    
    //===============================================
    clone() {
        var lObj = new GText();
        return lObj;
    }
    //===============================================
    setObj(_obj) {
        this.m_img = _obj.m_img;
        this.m_name = _obj.m_name;
        this.m_text = _obj.m_text;
    }
    //===============================================
    isEqual(_obj) {
        var lEqualOk = true;
        lEqualOk &= (this.m_img == _obj.m_img);
        lEqualOk &= (this.m_name == _obj.m_name);
        lEqualOk &= (this.m_text == _obj.m_text);
        return lEqualOk;
    }
    //===============================================
    toTextImageLeft() {
        var lHtml = "";
        lHtml += sprintf("<div class='GText1 Text13'>\n");
        lHtml += sprintf("<img class='Text14' src='%s' alt='%s'/>\n", this.m_img, this.m_name);
        lHtml += sprintf("<div class='Text15'>%s</div>\n", this.m_text);
        lHtml += sprintf("</div>\n");
        return lHtml;
    }
    //===============================================
    serialize(_code = "text") {
        var lDom = new GCode();
        lDom.createDoc();
        lDom.addData(_code, "img", this.m_img);
        lDom.addData(_code, "name", this.m_name);
        lDom.addData(_code, "text", this.m_text);
        lDom.addMap(_code, this.m_map);
        return lDom.toString();
    }
    //===============================================
    deserialize(_data, _code = "text") {
        var lDom = new GCode();
        lDom.loadXml(_data);
        this.m_img = lDom.getItem(_code, "img");
        this.m_name = lDom.getItem(_code, "name");
        this.m_text = lDom.getItem(_code, "text");
        lDom.getMap(_code, this.m_map, this);
    }
    //===============================================
}
//===============================================
