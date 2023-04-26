//===============================================
class GFontAwesome extends GObject {
    //===============================================
    static m_instance = null;
    //===============================================
    constructor() {
        super();
        this.m_name = "";
    }
    //===============================================
    static Instance() {
        if(this.m_instance == null) {
            this.m_instance = new GFontAwesome();
        }
        return this.m_instance;
    }    
    //===============================================
    clone() {
        return new GFontAwesome();
    }
    //===============================================
    setObj(_obj) {
        this.m_name = _obj.m_name;
    }
    //===============================================
    isEqual(_obj) {
        var lEqualOk = true;
        lEqualOk &= (this.m_name == _obj.m_name);
        return lEqualOk;
    }
    //===============================================
    init() {
        if(this.isAdmin()) {
            this.onLoadFontAwesome();
        }
    }
    //===============================================
    findFont(_name) {
        var lObj = new GFontAwesome();
        lObj.m_name = _name;
        var lIndex = this.findObj(lObj);
        return lIndex;
    }
    //===============================================
    toForm() {
        var lForm = new GForm();
        for(var i = 0; i < this.m_map.length; i++) {
            var lFont = this.m_map[i];
            var lObj = new GForm();
            lObj.m_value = lFont.m_name;
            lForm.m_map.push(lObj);
        }
        var lData = lForm.serialize();
        return lData;
    }
    //===============================================
    serialize(_code = "font_awesome") {
        var lDom = new GCode();
        lDom.createDoc();
        lDom.addData(_code, "name", this.m_name);
        lDom.addMap(_code, this.m_map);
        return lDom.toString();
    }
    //===============================================
    deserialize(_data, _code = "font_awesome") {
        var lDom = new GCode();
        lDom.loadXml(_data);
        this.m_name = lDom.getItem(_code, "name");
        lDom.getMap(_code, this.m_map, this);
    }
    //===============================================
    run(_method, _obj, _data) {
        if(_method == "") {
            this.addError("La méthode est obligatoire.");
        }
        //===============================================
        else if(_method == "extract_font_awesome") {
            this.onExtractFontAwesome(_obj, _data);
        }
        //===============================================
        else {
            this.addError("La méthode est inconnue.");
        }
        return !this.hasErrors();
    }
    //===============================================
    onExtractFontAwesome(_obj, _data) {
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callLocal("font_awesome", "extract_font_awesome", lData);        
    }
    //===============================================
    onLoadFontAwesome(_obj, _data) {
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callLocal("font_awesome", "load_font_awesome", lData, this.onLoadFontAwesomeCB);        
    }
    //===============================================
    onLoadFontAwesomeCB(_data, _isOk) {
        if(_isOk) {
            var lFont = GFontAwesome.Instance();
            lFont.deserialize(_data);
        }            
    }
    //===============================================
}
//===============================================
GFontAwesome.Instance().init();
//===============================================
