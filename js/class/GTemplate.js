//===============================================
class GTemplate extends GObject {
    //===============================================
    static m_instance = null;
    //===============================================
    constructor() {
        super();
        this.m_category = "";
        this.m_model = "";
        this.m_id = "";
        this.m_module = "";
        this.m_method = "";
        this.m_picto = "";
        this.m_label = "";
        this.m_text = "";
    }
    //===============================================
    static Instance() {
        if(this.m_instance == null) {
            this.m_instance = new GTemplate();
        }
        return this.m_instance;
    }    
    //===============================================
    clone() {
        var lObj = new GTemplate();
        return lObj;
    }
    //===============================================
    setObj(_obj) {
        this.m_category = _obj.m_category;
        this.m_model = _obj.m_model;
        this.m_id = _obj.m_id;
        this.m_module = _obj.m_module;
        this.m_method = _obj.m_method;
        this.m_picto = _obj.m_picto;
        this.m_label = _obj.m_label;
        this.m_text = _obj.m_text;
    }
    //===============================================
    isEqual(_obj) {
        var lEqualOk = true;
        lEqualOk &= (this.m_category == _obj.m_category);
        lEqualOk &= (this.m_model == _obj.m_model);
        lEqualOk &= (this.m_id == _obj.m_id);
        lEqualOk &= (this.m_module == _obj.m_module);
        lEqualOk &= (this.m_method == _obj.m_method);
        lEqualOk &= (this.m_picto == _obj.m_picto);
        lEqualOk &= (this.m_label == _obj.m_label);
        lEqualOk &= (this.m_text == _obj.m_text);
        return lEqualOk;
    }
    //===============================================
    addLabelEdit(_id, _label, _text = "") {
        var lObj = new GTemplate();
        lObj.m_category = "body";
        lObj.m_model = "label_edit";
        lObj.m_id = _id;
        lObj.m_label = _label;
        lObj.m_text = _text;
        this.m_map.push(lObj);
    }
    //===============================================
    addButton(_module, _method, _picto, _text) {
        var lObj = new GTemplate();
        lObj.m_category = "footer";
        lObj.m_model = "button";
        lObj.m_module = _module;
        lObj.m_method = _method;
        lObj.m_picto = _picto;
        lObj.m_text = _text;
        this.m_map.push(lObj);
    }
    //===============================================
    toHtml() {
        var lHtml = "";
        lHtml += sprintf("<div class='GTemplate1 Template1'>\n");
        lHtml += sprintf("<div class='Template2'>\n");
        
        for(var i = 0; i < this.m_map.length; i++) {
            var lObj = this.m_map[i];
            if(lObj.m_category == "body") {
                if(lObj.m_model == "label_edit") {
                    lHtml += sprintf("<div class='Template5'>\n");
                    lHtml += sprintf("<label class='Template6'>%s</label>\n", lObj.m_label);
                    lHtml += sprintf("<div class='Template7'><input class='Template8' id='%s' value='%s'/></div>\n", lObj.m_id, lObj.m_text);
                    lHtml += sprintf("</div>\n");
                }
            }
        }
                
        lHtml += sprintf("</div>\n");
        lHtml += sprintf("<div class='Template3'>\n");
        
        for(var i = 0; i < this.m_map.length; i++) {
            var lObj = this.m_map[i];
            if(lObj.m_category == "footer") {
                if(lObj.m_model == "button") {
                    lHtml += sprintf("<button type='button' class='Template4' onclick='call_server(\"%s\", \"%s\", this)'><i class='fa fa-%s'></i> %s</button>\n"
                    , lObj.m_module, lObj.m_method, lObj.m_picto, lObj.m_text);
                }
            }
        }
        
        lHtml += sprintf("</div>\n");
        lHtml += sprintf("</div>\n");
        return lHtml;
    }
    //===============================================
    serialize(_code = "template") {
        var lDom = new GCode();
        lDom.createDoc();
        lDom.addData(_code, "category", this.m_category);
        lDom.addData(_code, "model", this.m_model);
        lDom.addData(_code, "id", this.m_id);
        lDom.addData(_code, "module", this.m_module);
        lDom.addData(_code, "method", this.m_method);
        lDom.addData(_code, "picto", this.m_picto);
        lDom.addData(_code, "label", this.m_label);
        lDom.addData(_code, "text", this.m_text);
        lDom.addMap(_code, this.m_map);
        return lDom.toString();
    }
    //===============================================
    deserialize(_data, _code = "template") {
        var lDom = new GCode();
        lDom.loadXml(_data);
        this.m_category = lDom.getItem(_code, "category");
        this.m_model = lDom.getItem(_code, "model");
        this.m_id = lDom.getItem(_code, "id");
        this.m_module = lDom.getItem(_code, "module");
        this.m_method = lDom.getItem(_code, "method");
        this.m_picto = lDom.getItem(_code, "picto");
        this.m_label = lDom.getItem(_code, "label");
        this.m_text = lDom.getItem(_code, "text");
        lDom.getMap(_code, this.m_map, this);
    }
    //===============================================
}
//===============================================
