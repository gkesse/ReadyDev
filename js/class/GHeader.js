//===============================================
class GHeader extends GObject {
    //===============================================
    static m_instance = null;
    //===============================================
    constructor() {
        super();
        this.m_title = "";
        this.m_views = "";
        this.m_facebookUrl = "";
        this.m_linkedinUrl = "";
    }
    //===============================================
    static Instance() {
        if(this.m_instance == null) {
            this.m_instance = new GHeader();
        }
        return this.m_instance;
    }    
    //===============================================
    clone() {
        var lObj = new GHeader();
        return lObj;
    }
    //===============================================
    setObj(_obj) {
        this.m_title = _obj.m_title;
        this.m_views = _obj.m_views;
        this.m_facebookUrl = _obj.m_facebookUrl;
        this.m_linkedinUrl = _obj.m_linkedinUrl;
    }
    //===============================================
    isEqual(_obj) {
        var lEqualOk = true;
        lEqualOk &= (this.m_title == _obj.m_title);
        lEqualOk &= (this.m_views == _obj.m_views);
        lEqualOk &= (this.m_facebookUrl == _obj.m_facebookUrl);
        lEqualOk &= (this.m_linkedinUrl == _obj.m_linkedinUrl);
        return lEqualOk;
    }
    //===============================================
    toHeader() {
        var lHtml = "";
        lHtml += sprintf("<div class='GHeader1 Header1'>\n");
        lHtml += sprintf("<h1 class='Header2'>%s</h1>\n", this.m_title);
        lHtml += sprintf("<div class='Header3'>\n");
        lHtml += sprintf("<div>\n");
        lHtml += sprintf("<div class='Header4'>\n");
        lHtml += sprintf("<div class='Header6'>\n");
        lHtml += sprintf("<i class='fa fa-eye'></i> Vues\n");
        lHtml += sprintf("</div>\n");
        lHtml += sprintf("<div class='Header7'>%s</div>\n", this.m_views);
        lHtml += sprintf("</div>\n");
        lHtml += sprintf("</div>\n");
        lHtml += sprintf("<div>\n");
        lHtml += sprintf("<a href='%s'><i class='Header5 Facebook fa fa-facebook'></i></a>\n", this.m_facebookUrl);
        lHtml += sprintf("<a href='%s'><i class='Header5 Linkedin fa fa-linkedin'></i></a>\n", this.m_linkedinUrl);
        lHtml += sprintf("</div>\n");
        lHtml += sprintf("</div>\n");
        lHtml += sprintf("</div>\n");
        return lHtml;
    }
    //===============================================
    serialize(_code = "header") {
        var lDom = new GCode();
        lDom.createDoc();
        lDom.addData(_code, "title", this.m_title);
        lDom.addData(_code, "views", this.m_views);
        lDom.addData(_code, "facebook_url", this.m_facebookUrl);
        lDom.addData(_code, "linkedin_url", this.m_linkedinUrl);
        lDom.addMap(_code, this.m_map);
        return lDom.toString();
    }
    //===============================================
    deserialize(_data, _code = "header") {
        var lDom = new GCode();
        lDom.loadXml(_data);
        this.m_title = lDom.getItem(_code, "title");
        this.m_views = lDom.getItem(_code, "views");
        this.m_facebookUrl = lDom.getItem(_code, "facebook_url");
        this.m_linkedinUrl = lDom.getItem(_code, "linkedin_url");
        lDom.getMap(_code, this.m_map, this);
    }
    //===============================================
}
//===============================================
