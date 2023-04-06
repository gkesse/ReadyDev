//===============================================
class GTemplate extends GObject {
    //===============================================
    static m_instance = null;
    //===============================================
    constructor() {
        super();
        this.m_id = "";
        this.m_formId = "";
        this.m_titleId = "";
        this.m_introId = "";
        this.m_bodyId = "";
        this.m_module = "";
        this.m_method = "";
        this.m_picto = "";
        this.m_label = "";
        this.m_data = "";
        this.m_title = "";
        this.m_intro = "";
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
        super.setObj(_obj);
        this.m_id = _obj.m_id;
        this.m_formId = _obj.m_formId;
        this.m_titleId = _obj.m_titleId;
        this.m_introId = _obj.m_introId;
        this.m_bodyId = _obj.m_bodyId;
        this.m_module = _obj.m_module;
        this.m_method = _obj.m_method;
        this.m_picto = _obj.m_picto;
        this.m_label = _obj.m_label;
        this.m_data = _obj.m_data;
        this.m_title = _obj.m_title;
        this.m_intro = _obj.m_intro;
    }
    //===============================================
    isEqual(_obj) {
        var lEqualOk = super.isEqual(_obj);
        lEqualOk &= (this.m_id == _obj.m_id);
        lEqualOk &= (this.m_formId == _obj.m_formId);
        lEqualOk &= (this.m_titleId == _obj.m_titleId);
        lEqualOk &= (this.m_introId == _obj.m_introId);
        lEqualOk &= (this.m_bodyId == _obj.m_bodyId);
        lEqualOk &= (this.m_module == _obj.m_module);
        lEqualOk &= (this.m_method == _obj.m_method);
        lEqualOk &= (this.m_picto == _obj.m_picto);
        lEqualOk &= (this.m_label == _obj.m_label);
        lEqualOk &= (this.m_data == _obj.m_data);
        lEqualOk &= (this.m_title == _obj.m_title);
        lEqualOk &= (this.m_intro == _obj.m_intro);
        return lEqualOk;
    }
    //===============================================
    addLabelEdit(_id, _label, _text = "") {
        var lObj = new GTemplate();
        lObj.m_category = "body";
        lObj.m_model = "label_edit";
        lObj.m_id = _id;
        lObj.m_label = _label;
        lObj.m_data = _text;
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
        lObj.m_data = _text;
        this.m_map.push(lObj);
    }
    //===============================================
    initLog() {
        var lObj = new GTemplate();
        lObj.m_category = "log";
        lObj.m_model = "log";
        lObj.m_id = "LogModal";
        lObj.m_formId = "LogForm";
        lObj.m_titleId = "LogTitle";
        lObj.m_introId = "LogIntro";
        lObj.m_bodyId = "LogBody";
        lObj.m_title = "Logs";
        lObj.m_module = "logs";
        lObj.m_method = "close_logs";
        lObj.m_data = "OK";
        lObj.m_intro = "Consultez les logs.";
        this.m_map.push(lObj);
    }
    //===============================================
    toLog() {
        this.initLog();
        var lObj = this.findObjMapCM("log", "log");
        lObj.loadFromMap(0);
        
        var lHtml = "";
        lHtml += sprintf("<div class='Modal1' id='%s'>\n", lObj.m_id);
        lHtml += sprintf("<div class='Modal2' id='%s'>\n", lObj.m_formId);
        lHtml += sprintf('<div class="Modal3" onclick="call_server(\'%s\', \'%s\', this)"><i class="fa fa-close"></i></div>\n', lObj.m_module, lObj.m_method);
        lHtml += sprintf("<div class='Modal4' id='%s'>%s</div>\n", lObj.m_titleId, lObj.m_title);
        lHtml += sprintf("<div class='Modal5'>\n");
        lHtml += sprintf("<div class='Modal6' id='%s'>%s</div>\n", lObj.m_introId, lObj.m_intro);
        lHtml += sprintf("<div class='Modal7'>\n");
        lHtml += sprintf("<div id='%s'></div>\n", lObj.m_bodyId);
        lHtml += sprintf("</div>\n");
        lHtml += sprintf("<div class='Modal8'>\n");
        lHtml += sprintf('<div class="Modal9" onclick="call_server(\'%s\', \'%s\', this)">%s</div>\n', lObj.m_module, lObj.m_method, lObj.m_data);
        lHtml += sprintf("</div>\n");
        lHtml += sprintf("</div>\n");
        lHtml += sprintf("</div>\n");
        lHtml += sprintf("</div>\n");
        return lHtml;
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
                    lHtml += sprintf("<div class='Template7'><input class='Template8' id='%s' value='%s'/></div>\n", lObj.m_id, lObj.m_data);
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
                    , lObj.m_module, lObj.m_method, lObj.m_picto, lObj.m_data);
                }
            }
        }
        
        lHtml += sprintf("</div>\n");
        lHtml += sprintf("</div>\n");
        return lHtml;
    }
    //===============================================
}
//===============================================
