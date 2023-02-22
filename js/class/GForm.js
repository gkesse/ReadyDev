//===============================================
class GForm extends GObject {
    //===============================================
    constructor() {
        super();
        
        this.m_title = "";
        this.m_intro = "";
        this.m_method = "";
        this.m_module = "";
        this.m_content = "";
        this.m_model = "";
        this.m_label = "";
        this.m_id = "";
        this.m_value = "";
        this.m_data = "";
                
        this.initUi();
    }
    //===============================================
    clone() {
        var lObj = new GForm();
        lObj.setForm(this);
        return lObj;
    }
    //===============================================
    setForm(_obj) {
        this.m_model = _obj.m_model;
        this.m_label = _obj.m_label;
        this.m_id = _obj.m_id;
        this.m_value = _obj.m_value;
    }
    //===============================================
    initUi(_intro) {
        var lFormTitle = document.getElementById("FormTitle");
        var lFormIntro = document.getElementById("FormIntro");
        this.m_title = lFormTitle.innerHTML;
        this.m_intro = lFormIntro.innerHTML;
    }
    //===============================================
    setTitle(_title) {
        this.m_title = _title;
        this.writeUi();
    }
    //===============================================
    setIntro(_intro) {
        this.m_intro = _intro;
        this.writeUi();
    }
    //===============================================
    setCallback(_module, _method) {
        this.m_module = _module;
        this.m_method = _method;
        this.writeUi();
    }
    //===============================================
    addLabelEdit(_id, _label) {
        var lObj = new GForm();
        lObj.m_model = "label_edit";
        lObj.m_id = _id;
        lObj.m_label = _label;
        this.m_map.push(lObj);
    }
    //===============================================
    addLabelColor(_id, _label) {
        var lObj = new GForm();
        lObj.m_model = "label_color";
        lObj.m_id = _id;
        lObj.m_label = _label;
        this.m_map.push(lObj);
    }
    //===============================================
    getData(_id) {
        var lData = "";
        for(var i = 0; i < this.m_map.length; i++) {
            var lObj = this.m_map[i];
            if(lObj.m_id == _id) {
                lData = lObj.m_value;
            }
        }
        return lData;
    }
    //===============================================
    writeContent() {
        var lContent = "";
        
        for(var i = 0; i < this.m_map.length; i++) {
            var lObj = this.m_map[i];
            var lModel = lObj.m_model;
            var lLabel = lObj.m_label;
            var lId = lObj.m_id;

            if(lModel == "label_edit") {
                lContent += sprintf("<div class='Row12'>\n");
                lContent += sprintf("<label class='Label3' for='%s'>%s</label>\n", lId, lLabel);
                lContent += sprintf("<div class='Field3'><input type='text' class='Input2' id='%s' name='%s'/></div>\n", lId, lId);
                lContent += sprintf("</div>\n");
            }
            else if(lModel == "label_color") {
                lContent += sprintf("<div class='Row12'>\n");
                lContent += sprintf("<label class='Label3' for='%s'>%s</label>\n", lId, lLabel);
                lContent += sprintf("<div class='Field3'><input type='color' class='Input2' id='%s' name='%s'/></div>\n", lId, lId);
                lContent += sprintf("</div>\n");
            }
        }
        
        this.m_content = lContent;
        this.m_data = this.serialize();
        this.writeUi();
    }
    //===============================================
    readContent() {        
        for(var i = 0; i < this.m_map.length; i++) {
            var lObj = this.m_map[i];
            var lInput = document.getElementById(lObj.m_id);
            lObj.m_value = lInput.value;
        }
        
        this.m_data = this.serialize();
        this.writeUi();
    }
    //===============================================
    readUi() {
        var lFormTitle = document.getElementById("FormTitle");
        var lFormIntro = document.getElementById("FormIntro");
        var lFormModule = document.getElementById("FormModule");
        var lFormMethod = document.getElementById("FormMethod");
        var lFormContent = document.getElementById("FormContent");
        var lFormData = document.getElementById("FormData");
        
        this.m_title = lFormTitle.innerHTML;
        this.m_intro = lFormIntro.innerHTML;
        this.m_module = lFormModule.value;
        this.m_method = lFormMethod.value;
        this.m_content = lFormContent.innerHTML;
        this.m_data = lFormData.innerHTML;
    }
    //===============================================
    writeUi() {
        var lFormTitle = document.getElementById("FormTitle");
        var lFormIntro = document.getElementById("FormIntro");
        var lFormModule = document.getElementById("FormModule");
        var lFormMethod = document.getElementById("FormMethod");
        var lFormContent = document.getElementById("FormContent");
        var lFormData = document.getElementById("FormData");

        lFormTitle.innerHTML = this.m_title;
        lFormIntro.innerHTML = this.m_intro;
        lFormModule.value = this.m_module;
        lFormMethod.value = this.m_method;
        lFormContent.innerHTML = this.m_content;
        lFormData.innerHTML = this.m_data;
    }
    //===============================================
    showForm() {
        this.writeContent();
        this.onOpenForm();
    }
    //===============================================
    serialize(_code = "form") {
        var lDom = new GCode();
        lDom.createDoc();
        lDom.addData(_code, "model", this.m_model);
        lDom.addData(_code, "label", this.m_label);
        lDom.addData(_code, "id", this.m_id);
        lDom.addData(_code, "value", utf8_to_b64(this.m_value));
        lDom.addMap(_code, this.m_map);
        return lDom.toString();
    }
    //===============================================
    deserialize(_data, _code = "form") {
        var lDom = new GCode();
        lDom.loadXml(_data);
        this.m_model = lDom.getItem(_code, "model");
        this.m_label = lDom.getItem(_code, "label");
        this.m_id = lDom.getItem(_code, "id");
        this.m_value = b64_to_utf8(lDom.getItem(_code, "value"));
        lDom.getMap(_code, this.m_map, this);
        this.loadLogs(_data);
    }
    //===============================================
    onModule(_method, _obj, _data) {
        if(_method == "") {
            this.addError("La méthode est obligatoire.");
        }
        else if(_method == "open_form") {
            this.onOpenForm(_obj, _data);
        }
        else if(_method == "close_form") {
            this.onCloseForm(_obj, _data);
        }
        else if(_method == "ok_form") {
            this.onOkForm(_obj, _data);
        }
        else if(_method == "test_form") {
            this.onTestForm(_obj, _data);
        }
        else if(_method == "test_form_run") {
            this.onTestFormRun(_obj, _data);
        }
        else {
            this.addError("La méthode est inconnue.");
        }
        return !this.hasErrors();
    }
    //===============================================
    onOpenForm(_obj, _data) {
        var lModalForm = document.getElementById("ModalForm");
        var lFormBody = document.getElementById("FormBody");
        var lFormMsg = document.getElementById("FormMsg");
        var lClassName = lFormBody.className;
        
        lFormMsg.style.display = "none";
        lFormBody.classList.remove("AnimateHide");
        lFormBody.classList.add("AnimateShow");
        lModalForm.style.display = "block";
    }
    //===============================================
    onCloseForm(_obj, _data) {
        var lModalForm = document.getElementById("ModalForm");
        var lFormBody = document.getElementById("FormBody");
        var lClassName = lFormBody.className;
        
        lFormBody.classList.add("AnimateShow");
        lFormBody.classList.add("AnimateHide");
        
        setTimeout(function() {
            lModalForm.style.display = "none";
        }, 400);
    }
    //===============================================
    onOkForm(_obj, _data) {
        this.readUi();
        if(this.m_module == "") return false;
        if(this.m_method == "") return false;
        this.onCloseForm();
        this.deserialize(this.m_data);
        this.readContent();
        call_server(this.m_module, this.m_method, this, this.m_data);
        return !this.hasErrors();
    }
    //===============================================
    onTestForm(_obj, _data) {
        var lForm = new GForm();
        lForm.addLabelEdit("ColorName", "Couleur");
        lForm.addLabelColor("ColorPicker", "Couleur");
        lForm.setCallback("form", "test_form_run");
        lForm.showForm();
    }
    //===============================================
    onTestFormRun(_obj, _data) {
        var lForm = new GForm();
        lForm.deserialize(_data);
        var lName = lForm.getData("ColorName");
        var lPicker = lForm.getData("ColorPicker");
    }
    //===============================================
}
//===============================================
