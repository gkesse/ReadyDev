//===============================================
class GSkill extends GObject {
    //===============================================
    static m_instance = null;
    //===============================================
    constructor() {
        super();
        this.m_icon = "";
        this.m_text = "";
        this.m_number = "";
    }
    //===============================================
    static Instance() {
        if(this.m_instance == null) {
            this.m_instance = new GSkill();
        }
        return this.m_instance;
    }    
    //===============================================
    clone() {
        var lObj = new GSkill();
        return lObj;
    }
    //===============================================
    setObj(_obj) {
        this.m_icon = _obj.m_icon;
        this.m_text = _obj.m_text;
        this.m_number = _obj.m_number;
    }
    //===============================================
    isEqual(_obj) {
        var lEqualOk = true;
        lEqualOk &= (this.m_icon == _obj.m_icon);
        lEqualOk &= (this.m_text == _obj.m_text);
        lEqualOk &= (this.m_number == _obj.m_number);
        return lEqualOk;
    }
    //===============================================
    toSkill() {
        var lHtml = "";
        lHtml += sprintf("<div class='GSkill1 Skill1'>\n");
        lHtml += sprintf("<i class='Skill2 fa fa-%s'></i>\n", this.m_icon);
        lHtml += sprintf("<div class='Skill3'>%s</div>\n", this.m_number);
        lHtml += sprintf("<div class='Skill4'>%s</div>\n", this.m_text);
        lHtml += sprintf("</div>\n");
        return lHtml;
    }
    //===============================================
    serialize(_code = "skill") {
        var lDom = new GCode();
        lDom.createDoc();
        lDom.addData(_code, "icon", this.m_icon);
        lDom.addData(_code, "text", this.m_text);
        lDom.addData(_code, "number", this.m_number);
        lDom.addMap(_code, this.m_map);
        return lDom.toString();
    }
    //===============================================
    deserialize(_data, _code = "skill") {
        var lDom = new GCode();
        lDom.loadXml(_data);
        this.m_icon = lDom.getItem(_code, "icon");
        this.m_text = lDom.getItem(_code, "text");
        this.m_number = lDom.getItem(_code, "number");
        lDom.getMap(_code, this.m_map, this);
    }
    //===============================================
}
//===============================================
