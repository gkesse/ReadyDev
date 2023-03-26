//===============================================
class GTitle extends GObject {
    //===============================================
    static m_instance = null;
    //===============================================
    constructor() {
        super();
        this.m_icon = "";
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
        return lObj;
    }
    //===============================================
    setObj(_obj) {
        this.m_icon = _obj.m_icon;
        this.m_title = _obj.m_title;
        this.m_link = _obj.m_link;
    }
    //===============================================
    isEqual(_obj) {
        var lEqualOk = true;
        lEqualOk &= (this.m_icon == _obj.m_icon);
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
    toLinkTitle() {
        var lHtml = "";
        lHtml += sprintf("<div class='GLink2 Item4'>\n");
        lHtml += sprintf("<i class='Icon10 fa fa-%s'></i>\n", this.m_icon);
        lHtml += sprintf("<a class='Link4' href='#%s'>%s</a>\n", this.m_link, this.m_title);
        lHtml += sprintf("</div>\n");
        return lHtml;
    }
    //===============================================
    toLinkTitleGroup() {
        var lHtml = "";
        lHtml += sprintf("<div class='GLink3'>\n");
        for(var i = 0; i < this.m_map.length; i++) {
            var lObj = this.m_map[i];
            lHtml += sprintf("%s\n", lObj.toLinkTitle());
        }
        lHtml += sprintf("</div>\n");
        return lHtml;
    }
    //===============================================
    serialize(_code = "title") {
        var lDom = new GCode();
        lDom.createDoc();
        lDom.addData(_code, "icon", this.m_icon);
        lDom.addData(_code, "title", this.m_title);
        lDom.addData(_code, "link", this.m_link);
        lDom.addMap(_code, this.m_map);
        return lDom.toString();
    }
    //===============================================
    deserialize(_data, _code = "title") {
        var lDom = new GCode();
        lDom.loadXml(_data);
        this.m_icon = lDom.getItem(_code, "icon");
        this.m_title = lDom.getItem(_code, "title");
        this.m_link = lDom.getItem(_code, "link");
        lDom.getMap(_code, this.m_map, this);
    }
    //===============================================
}
//===============================================
