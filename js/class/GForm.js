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
        this.m_cdata = "";
        this.m_index = 0;
                
        this.initUi();
    }
    //===============================================
    clone() {
        var lObj = new GForm();
        lObj.setObj(this);
        return lObj;
    }
    //===============================================
    setObj(_obj) {
        this.m_model = _obj.m_model;
        this.m_label = _obj.m_label;
        this.m_id = _obj.m_id;
        this.m_value = _obj.m_value;
        this.m_index = _obj.m_index;
    }
    //===============================================
    init() {
        var lInputs = document.getElementsByClassName("Menu2Button");
        
        for(var i = 0; i < lInputs.length; i++) {
            var lInput = lInputs[i];
            var lCaret = lInput.nextElementSibling;
            var lContent = lCaret.nextElementSibling;
            var lLines = lContent.getElementsByClassName("Menu2Line");
            
            lInput.addEventListener("click", function(e) {
                var lContent = this.nextElementSibling.nextElementSibling;
                lContent.classList.toggle("Show");
            });
            
            lCaret.addEventListener("click", function(e) {
                var lContent = this.nextElementSibling;
                lContent.classList.toggle("Show");
            });
            
            for(var j = 0; j < lLines.length; j++) {
                var lLine = lLines[j];
                
                lLine.addEventListener("click", function(e) {
                    var lContent = this.parentNode;
                    var lInput = lContent.previousElementSibling.previousElementSibling;
                    lInput.value = this.dataset.key;
                    lInput.dataset.index = this.dataset.index;
                    lContent.classList.toggle("Show");
                });
            }
        }
        
        document.addEventListener("click", function(e) {
            var lHideOk = !e.target.matches(".Menu2Button")
                       && !e.target.matches(".Menu2Caret");
                       
            if(lHideOk) {
                var lInputs = document.getElementsByClassName("Menu2Button");
                
                for(var i = 0; i < lInputs.length; i++) {
                    var lInput = lInputs[i];
                    var lContent = lInput.nextElementSibling.nextElementSibling;
                    lContent.classList.remove("Show");
                }
            }
        });
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
    addLabelImage(_id, _label, _cdata) {
        var lObj = new GForm();
        lObj.m_model = "label_image";
        lObj.m_id = _id;
        lObj.m_label = _label;
        lObj.m_cdata = _cdata;
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
    getIndex(_id) {
        var lData = "";
        for(var i = 0; i < this.m_map.length; i++) {
            var lObj = this.m_map[i];
            if(lObj.m_id == _id) {
                lData = lObj.m_index;
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
            var lCData = lObj.m_cdata;

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
            else if(lModel == "label_image") {
                var lImage = new GImage();
                lImage.deserialize(lCData);
                
                lContent += sprintf("<div class='Row12'>\n");
                lContent += sprintf("<label class='Label3' for='%s'>%s</label>\n", lId, lLabel);
                lContent += sprintf("<div class='Field3 Menu2'>");
                lContent += sprintf("<input type='text' class='Input4 Menu2Button' id='%s' readonly/>\n", lId);
                lContent += sprintf("<i class='Menu2Caret fa fa-caret-down'></i>\n");
                lContent += sprintf("<div class='Menu2Content'>\n");
                
                for(var j = 0; j < lImage.m_map.length; j++) {
                    lImage.loadFromMap(j);
                    lContent += sprintf("<div class='Menu2Line' data-index='%s' data-key='%s'>%s <img class='Menu2Img' src='%s' alt='%s'/></div>\n", j, lImage.m_path, lImage.m_path, lImage.getImageData(), lImage.m_path);
                }
                
                lContent += sprintf("</div>\n");
                lContent += sprintf("</div>\n");
                lContent += sprintf("</div>\n");
            }
        }
        
        this.m_content = lContent;
        this.m_data = this.serialize();
        this.writeUi();
        this.init();
    }
    //===============================================
    readContent() {        
        for(var i = 0; i < this.m_map.length; i++) {
            var lObj = this.m_map[i];
            var lInput = document.getElementById(lObj.m_id);
            lObj.m_value = lInput.value;
            lObj.m_index = lInput.dataset.index;
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
        lDom.addData(_code, "index", ""+this.m_index);
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
        this.m_value = lDom.getItem(_code, "index");
        lDom.getMap(_code, this.m_map, this);
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

//===============================================
