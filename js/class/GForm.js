//===============================================
class GForm extends GObject {
    //===============================================
    static m_instance = null;
    //===============================================
    constructor() {
        super();
        
        this.m_title = "";
        this.m_intro = "";
        this.m_module = "";
        this.m_method = "";
        this.m_moduleLine = "";
        this.m_methodLine = "";
        this.m_content = "";
        this.m_combo = "";

        this.m_position = -1;
        this.m_model = "";
        this.m_label = "";
        this.m_id = "";
        this.m_value = "";
        this.m_img = "";
        this.m_index = -1;
  
        this.initUi();
    }
    //===============================================
    static Instance() {
        if(this.m_instance == null) {
            this.m_instance = new GForm();
        }
        return this.m_instance;
    }    
    //===============================================
    clone() {
        var lObj = new GForm();
        return lObj;
    }
    //===============================================
    setObj(_obj) {
        this.m_position = _obj.m_position;
        this.m_model = _obj.m_model;
        this.m_label = _obj.m_label;
        this.m_id = _obj.m_id;
        this.m_value = _obj.m_value;
        this.m_img = _obj.m_img;
        this.m_index = _obj.m_index;
    }
    //===============================================
    init() {
        var lInputs = document.getElementsByClassName("Menu2Input");
        
        for(var i = 0; i < lInputs.length; i++) {
            var lInput = lInputs[i];

            lInput.addEventListener("click", function(e) {
                var lType = this.dataset.type;
                var lContent = null;
                if(lType == "combo") {
                    lContent = this.nextElementSibling.nextElementSibling;
                }
                else if(lType == "image") {
                    lContent = this.nextElementSibling.nextElementSibling.nextElementSibling;
                }
                lContent.classList.toggle("Show");
                call_server("form", "change_input_form", this);
            });

            var lCaret = lInput.nextElementSibling;
            
            lCaret.addEventListener("click", function(e) {
                var lType = this.dataset.type;
                var lContent = null;
                if(lType == "combo") {
                    lContent = this.nextElementSibling;
                }
                else if(lType == "image") {
                    lContent = this.nextElementSibling.nextElementSibling;
                }
                lContent.classList.toggle("Show");
            });

            var lType = lInput.dataset.type;
            var lContent = null;
            
            if(lType == "combo") {
                lContent = lInput.nextElementSibling.nextElementSibling;
            }
            else if(lType == "image") {
                lContent = lInput.nextElementSibling.nextElementSibling.nextElementSibling;
            }
            
            var lLines = lContent.getElementsByClassName("Menu2Line");
                                                            
            for(var j = 0; j < lLines.length; j++) {
                var lLine = lLines[j];
                
                lLine.addEventListener("click", function(e) {
                    var lType = this.dataset.type;
                    var lContent = this.parentNode;
                    var lInput = null;
                    if(lType == "combo") {
                        lInput = this.parentNode.previousElementSibling.previousElementSibling;
                    }
                    else if(lType == "image") {
                        lInput = this.parentNode.previousElementSibling.previousElementSibling.previousElementSibling;
                    }
                    lInput.value = this.dataset.value;
                    lInput.dataset.index = this.dataset.index;
                    if(lContent) {
                        lContent.classList.toggle("Show");
                    }
                    call_server("form", "change_line_form", this);
                });

                lLine.addEventListener("mouseover", function(e) {
                    var lType = this.dataset.type;
                    if(lType == "image") {
                        var lZoom = this.parentNode.previousElementSibling;
                        var lImg = this.firstElementChild;
                        lZoom.classList.remove("Show");
                        lZoom.classList.add("Show");
                        lZoom.src = lImg.src;
                        lZoom.alt = lImg.alt;
                    }
                });
                
                lLine.addEventListener("mouseout", function(e) {
                    var lType = this.dataset.type;
                    if(lType == "image") {
                        var lZoom = this.parentNode.previousElementSibling;
                        lZoom.classList.remove("Show");
                    }
                });
            }
        }
        
        var lEdits = document.getElementsByClassName("FormEdit");
        
        for(var i = 0; i < lEdits.length; i++) {
            var lEdit = lEdits[i];
            lEdit.addEventListener("input", function(e) {
                call_server("form", "change_edit_form", this, e);
            });
        }
        
        document.addEventListener("click", function(e) {
            var lForm = document.getElementById("ModalForm");
            var lFormOk = (lForm.style.display != "none");
            var lHideOk = lFormOk 
                       && !e.target.matches(".Menu2Caret")
                       && !e.target.matches(".Menu2Input")
                       
            if(lHideOk) {
                var lInputs = document.getElementsByClassName("Menu2Input");
                
                for(var i = 0; i < lInputs.length; i++) {
                    var lInput = lInputs[i];
                    var lType = lInput.dataset.type;
                    var lContent = null;
                    if(lType == "combo") {
                        lContent = lInput.nextElementSibling.nextElementSibling;
                    }
                    else if(lType == "image") {
                        lContent = lInput.nextElementSibling.nextElementSibling.nextElementSibling;
                    }
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
    setCallbackLine(_module, _method) {
        this.m_moduleLine = _module;
        this.m_methodLine = _method;
        this.writeUi();
    }
    //===============================================
    addLabelEdit(_id, _label, _value = "") {
        var lObj = new GForm();
        lObj.m_position = this.m_map.length;
        lObj.m_model = "label_edit";
        lObj.m_id = _id;
        lObj.m_label = _label;
        lObj.m_value = _value;
        this.m_map.push(lObj);
    }
    //===============================================
    addLabelText(_id, _label, _value = "") {
        var lObj = new GForm();
        lObj.m_position = this.m_map.length;
        lObj.m_model = "label_text";
        lObj.m_id = _id;
        lObj.m_label = _label;
        lObj.m_value = _value;
        this.m_map.push(lObj);
    }
    //===============================================
    addLabelColor(_id, _label, _value = "#800000") {
        var lObj = new GForm();
        lObj.m_position = this.m_map.length;
        lObj.m_model = "label_color";
        lObj.m_id = _id;
        lObj.m_label = _label;
        lObj.m_value = _value;
        this.m_map.push(lObj);
    }
    //===============================================
    addLabelCombo(_id, _label, _combo, _index = -1) {
        var lObj = new GForm();
        lObj.m_position = this.m_map.length;
        lObj.m_model = "label_combo";
        lObj.m_id = _id;
        lObj.m_label = _label;
        lObj.m_index = _index;
        lObj.m_combo = _combo;
        this.m_map.push(lObj);
    }
    //===============================================
    addLabelImage(_id, _label, _combo, _index = -1) {
        var lObj = new GForm();
        lObj.m_position = this.m_map.length;
        lObj.m_model = "label_image";
        lObj.m_id = _id;
        lObj.m_label = _label;
        lObj.m_index = _index;
        lObj.m_combo = _combo;
        this.m_map.push(lObj);
    }
    //===============================================
    writeContent() {
        var lContent = "";
        
        for(var i = 0; i < this.m_map.length; i++) {
            var lObj = this.m_map[i];

            if(!lObj.m_model) {
                this.addError("Le modèle est obligatoire.");
                continue;
            }
            if(!lObj.m_label) {
                this.addError("Le libellé est obligatoire.");
                continue;
            }
            if(!lObj.m_id) {
                this.addError("L'identifiant est obligatoire.");
                continue;
            }

            if(lObj.m_model == "label_edit") {
                lContent += sprintf("<div class='Row12'>\n");
                lContent += sprintf("<label class='Label3' for='%s'>%s</label>\n", lObj.m_id, lObj.m_label);
                lContent += sprintf("<div class='Field3'><input type='text' class='FormEdit Input2' id='%s' value='%s' data-index='%s' data-position='%s'/></div>\n", lObj.m_id, lObj.m_value, lObj.m_index, lObj.m_position);
                lContent += sprintf("</div>\n");
            }
            else if(lObj.m_model == "label_text") {
                lContent += sprintf("<div class='Row12'>\n");
                lContent += sprintf("<label class='Label3' for='%s'>%s</label>\n", lObj.m_id, lObj.m_label);
                lContent += sprintf("<div class='Field3'><input type='text' class='FormReadOnly Input2' id='%s' value='%s' data-index='%s' data-position='%s' readonly/></div>\n", lObj.m_id, lObj.m_value, lObj.m_index, lObj.m_position);
                lContent += sprintf("</div>\n");
            }
            else if(lObj.m_model == "label_color") {
                lContent += sprintf("<div class='Row12'>\n");
                lContent += sprintf("<label class='Label3' for='%s'>%s</label>\n", lObj.m_id, lObj.m_label);
                lContent += sprintf("<div class='Field3'><input type='color' class='FormColor Input2' id='%s' value='%s' data-index='%s' data-position='%s'/></div>\n", lObj.m_id, lObj.m_value, lObj.m_index, lObj.m_position);
                lContent += sprintf("</div>\n");
            }
            else if(lObj.m_model == "label_image") {
                var lForm = new GForm();
                lForm.deserialize(lObj.m_combo);
                lForm.loadFromMap(lObj.m_index);
                
                if(!lForm.m_map.length) {
                    this.addError("La donnée est obligatoire.");
                    continue;
                }

                lContent += sprintf("<div class='Row12'>\n");
                lContent += sprintf("<label class='Label3' for='%s'>%s</label>\n", lObj.m_id, lObj.m_label);
                lContent += sprintf("<div class='Field3 Menu2'>");
                lContent += sprintf("<input type='text' data-type='image' class='Input4 Menu2Input' id='%s' value='%s' data-index='%s' data-position='%s' readonly/>\n", lObj.m_id, lForm.m_value, lObj.m_index, lObj.m_position);
                lContent += sprintf("<i data-type='image' class='Menu2Caret fa fa-caret-down'></i>\n");
                lContent += sprintf("<img class='Menu2Zoom'/>\n");
                lContent += sprintf("<div class='Menu2Content'>\n");
                
                for(var j = 0; j < lForm.m_map.length; j++) {
                    lForm.loadFromMap(j);
                    lContent += sprintf("<div class='Menu2Line' data-type='image' data-index='%s' data-position='%s' data-value='%s'>%s <img class='Menu2Img' src='%s' alt='%s'/></div>\n", j, lObj.m_position, lForm.m_value, lForm.m_value, lForm.m_img, lForm.m_value);
                }
                
                lContent += sprintf("</div>\n");
                lContent += sprintf("</div>\n");
                lContent += sprintf("</div>\n");
            }
            else if(lObj.m_model == "label_combo") {
                var lForm = new GForm();
                lForm.deserialize(lObj.m_combo);
                lForm.loadFromMap(lObj.m_index);
                
                if(!lForm.m_map.length) {
                    this.addError("La donnée est obligatoire.");
                    continue;
                }
                                
                lContent += sprintf("<div class='Row12'>\n");
                lContent += sprintf("<label class='Label3' for='%s'>%s</label>\n", lObj.m_id, lObj.m_label);
                lContent += sprintf("<div class='Field3 Menu2'>");
                lContent += sprintf("<input type='text' data-type='combo' class='Input4 Menu2Input' id='%s' value='%s' data-index='%s' data-position='%s' readonly/>\n", lObj.m_id, lForm.m_value, lObj.m_index, lObj.m_position);
                lContent += sprintf("<i data-type='combo' class='Menu2Caret fa fa-caret-down'></i>\n");
                lContent += sprintf("<div class='Menu2Content'>\n");
                
                for(var j = 0; j < lForm.m_map.length; j++) {
                    lForm.loadFromMap(j);
                    lContent += sprintf("<div class='Menu2Line' data-type='combo' data-index='%s' data-position='%s' data-value='%s'>%s</div>\n", j, lObj.m_position, lForm.m_value, lForm.m_value);
                }
                
                lContent += sprintf("</div>\n");
                lContent += sprintf("</div>\n");
                lContent += sprintf("</div>\n");
            }
        }
        
        this.m_content = lContent;
        this.writeUi();
        this.init();
    }
    //===============================================
    updateForm() {
        for(var i = 0; i < this.m_map.length; i++) {
            var lObj = this.m_map[i];            
            var lInput = document.getElementById(lObj.m_id);
            lInput.value = lObj.m_value;
            lInput.dataset.index = lObj.m_index;
            lInput.dataset.position = lObj.m_position;
        }
    }
    //===============================================
    readForm() {
        for(var i = 0; i < this.m_map.length; i++) {
            var lObj = this.m_map[i];            
            var lInput = document.getElementById(lObj.m_id);
            lObj.m_value = lInput.value;
            lObj.m_index = lInput.dataset.index;
            lObj.m_position = lInput.dataset.position;
        }
    }
    //===============================================
    readUi() {
        var lFormTitle = document.getElementById("FormTitle");
        var lFormIntro = document.getElementById("FormIntro");
        var lFormModule = document.getElementById("FormModule");
        var lFormMethod = document.getElementById("FormMethod");
        var lFormModuleLine = document.getElementById("FormModuleLine");
        var lFormMethodLine = document.getElementById("FormMethodLine");
        var lFormContent = document.getElementById("FormContent");
        
        this.m_title = lFormTitle.innerHTML;
        this.m_intro = lFormIntro.innerHTML;
        this.m_module = lFormModule.value;
        this.m_method = lFormMethod.value;
        this.m_moduleLine = lFormModuleLine.value;
        this.m_methodLine = lFormMethodLine.value;
        this.m_content = lFormContent.innerHTML;
    }
    //===============================================
    writeUi() {
        var lFormTitle = document.getElementById("FormTitle");
        var lFormIntro = document.getElementById("FormIntro");
        var lFormModule = document.getElementById("FormModule");
        var lFormMethod = document.getElementById("FormMethod");
        var lFormModuleLine = document.getElementById("FormModuleLine");
        var lFormMethodLine = document.getElementById("FormMethodLine");
        var lFormContent = document.getElementById("FormContent");

        lFormTitle.innerHTML = this.m_title;
        lFormIntro.innerHTML = this.m_intro;
        lFormModule.value = this.m_module;
        lFormMethod.value = this.m_method;
        lFormModuleLine.value = this.m_moduleLine;
        lFormMethodLine.value = this.m_methodLine;
        lFormContent.innerHTML = this.m_content;
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
        lDom.addData(_code, "position", ""+this.m_position);
        lDom.addData(_code, "model", this.m_model);
        lDom.addData(_code, "label", this.m_label);
        lDom.addData(_code, "id", this.m_id);
        lDom.addData(_code, "img", this.m_img);
        lDom.addData(_code, "value", this.m_value);
        lDom.addData(_code, "index", ""+this.m_index);
        lDom.addMap(_code, this.m_map);
        return lDom.toString();
    }
    //===============================================
    deserialize(_data, _code = "form") {
        var lDom = new GCode();
        lDom.loadXml(_data);
        this.m_position = +lDom.getItem(_code, "position");
        this.m_model = lDom.getItem(_code, "model");
        this.m_label = lDom.getItem(_code, "label");
        this.m_id = lDom.getItem(_code, "id");
        this.m_img = lDom.getItem(_code, "img");
        this.m_value = lDom.getItem(_code, "value");
        this.m_index = +lDom.getItem(_code, "index");
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
        else if(_method == "change_input_form") {
            this.onChangeInputForm(_obj, _data);
        }
        else if(_method == "change_line_form") {
            this.onChangeLineForm(_obj, _data);
        }
        else if(_method == "change_edit_form") {
            this.onChangeEditForm(_obj, _data);
        }
        else {
            this.addError("La méthode est inconnue.");
        }
        return !this.hasErrors();
    }
    //===============================================
    // form
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
        call_server(this.m_module, this.m_method, _obj);
        return !this.hasErrors();
    }
    //===============================================
    onChangeInputForm(_obj, _data) {
        return !this.hasErrors();
    }
    //===============================================
    onChangeLineForm(_obj, _data) {
        if(this.m_moduleLine == "") return;
        if(this.m_methodLine == "") return;
        var lObj = new GForm();
        var lLine = _obj;
        lObj.m_position = lLine.dataset.position;
        lObj.m_index = lLine.dataset.index;
        lObj.m_value = lLine.dataset.value;
        var lData = lObj.serialize();
        call_server(this.m_moduleLine, this.m_methodLine, _obj, lData);
        return !this.hasErrors();
    }
    //===============================================
    onChangeEditForm(_obj, _data) {
        return !this.hasErrors();
    }
    //===============================================
}
//===============================================
