//===============================================
class GForm extends GObject {
    //===============================================
    static m_instance = null;
    //===============================================
    constructor() {
        super();
        
        this.m_module = "";
        this.m_method = "";
        this.m_moduleLine = "";
        this.m_methodLine = "";
        this.m_moduleEdit = "";
        this.m_methodEdit = "";
        this.m_moduleInput = "";
        this.m_methodInput = "";
        this.m_content = "";
        this.m_combo = "";

        this.m_position = 0;
        this.m_model = "";
        this.m_label = "";
        this.m_id = "";
        this.m_value = "";
        this.m_img = "";
        this.m_index = 0;
        this.m_parentIndex = 0;
        this.m_isDir = false;
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
        return new GForm();
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
        this.m_parentIndex = _obj.m_parentIndex;
        this.m_isDir = _obj.m_isDir;
    }
    //===============================================
    isEqual(_obj) {
        var lEqualOk = true;
        lEqualOk &= (this.m_parentIndex == _obj.m_parentIndex);
        return lEqualOk;
    }
    //===============================================
    findMap(_parentIndex) {
        var lObj = this.clone();
        lObj.m_parentIndex = _parentIndex;
        var lMap = super.findMap(lObj);
        return lMap;
    }
    //===============================================
    init() {
        //===============================================
        // inputs
        //===============================================
        var lInputs = document.getElementsByClassName("FormInput");
        
        for(var i = 0; i < lInputs.length; i++) {
            var lInput = lInputs[i];

            lInput.addEventListener("click", function(e) {
                var lType = this.dataset.type;
                var lContent = null;
                if(lType == "combo") {
                    lContent = this.nextElementSibling.nextElementSibling;
                }
                else if(lType == "tree") {
                    lContent = this.nextElementSibling.nextElementSibling;
                }
                else if(lType == "image") {
                    lContent = this.nextElementSibling.nextElementSibling.nextElementSibling;
                }
                else if(lType == "picto") {
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
                else if(lType == "tree") {
                    lContent = this.nextElementSibling;
                }
                else if(lType == "image") {
                    lContent = this.nextElementSibling.nextElementSibling;
                }
                else if(lType == "picto") {
                    lContent = this.nextElementSibling.nextElementSibling;
                }
                lContent.classList.toggle("Show");
            });

            var lType = lInput.dataset.type;
            var lContent = null;
            
            if(lType == "combo") {
                lContent = lInput.nextElementSibling.nextElementSibling;
            }
            else if(lType == "tree") {
                lContent = lInput.nextElementSibling.nextElementSibling;
            }
            else if(lType == "image") {
                lContent = lInput.nextElementSibling.nextElementSibling.nextElementSibling;
            }
            else if(lType == "picto") {
                lContent = lInput.nextElementSibling.nextElementSibling.nextElementSibling;
            }
            
            var lLines = lContent.getElementsByClassName("FormLine");
                                                            
            for(var j = 0; j < lLines.length; j++) {
                var lLine = lLines[j];
                
                lLine.addEventListener("click", function(e) {
                    var lType = this.dataset.type;
                    var lContent = this.parentNode;
                    var lInput = null;
                    if(lType == "combo") {
                        lInput = this.parentNode.previousElementSibling.previousElementSibling;
                    }
                    else if(lType == "tree") {
                        var lObj = new GForm();
                        lInput = lObj.toParentNode(this, "FormPopup");
                        lInput = lInput.previousElementSibling.previousElementSibling;
                    }
                    else if(lType == "image") {
                        lInput = this.parentNode.previousElementSibling.previousElementSibling.previousElementSibling;
                    }
                    else if(lType == "picto") {
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
                    else if(lType == "picto") {
                        var lZoom = this.parentNode.previousElementSibling;
                        var lIconId = this;
                        var lIcon = lIconId.dataset.value;
                        lIcon = "Forms22 fa " +  lIcon;
                        lZoom.setAttribute("class", lIcon);
                        lZoom.classList.remove("Show");
                        lZoom.classList.add("Show");
                    }
                });
                
                lLine.addEventListener("mouseout", function(e) {
                    var lType = this.dataset.type;
                    if(lType == "image") {
                        var lZoom = this.parentNode.previousElementSibling;
                        lZoom.classList.remove("Show");
                    }
                    else if(lType == "picto") {
                        var lZoom = this.parentNode.previousElementSibling;
                        lZoom.classList.remove("Show");
                    }
                });
            }
        }
        //===============================================
        // edition
        //===============================================
        var lEdits = document.getElementsByClassName("FormEdit");
        
        for(var i = 0; i < lEdits.length; i++) {
            var lEdit = lEdits[i];
            lEdit.addEventListener("input", function(e) {
                call_server("form", "change_edit_form", this, e);
            });
        }
        //===============================================
        // menu
        //===============================================
        var lMenus = document.getElementsByClassName("FormMenu");
        
        for(var i = 0; i < lMenus.length; i++) {
            var lMenu = lMenus[i];
            lMenu.addEventListener("click", function(e) {
                var lMenu = this;
                var lContents = lMenu.parentNode.getElementsByClassName("FormTree");
                var lContent = lMenu.nextElementSibling;

                for(var i = 0; i < lContents.length; i++) {
                    var lContentI = lContents[i];
                    if(lContentI == lContent) continue;
                    lContentI.classList.remove("Show");
                    var lMenuI = lContentI.previousElementSibling;
                    var lContinue = true
                                 && !lMenuI.matches(".FormMenu")
                                 && !lMenuI.matches(".FormEmpty");
                    if(lContinue) continue;
                    lMenuI.classList.remove("Active");
                }
                
                lContent.classList.toggle("Show");
                lMenu.classList.toggle("Active");
            });
        }
        //===============================================
        // empty
        //===============================================
        var lEmptys = document.getElementsByClassName("FormEmpty");
        
        for(var i = 0; i < lEmptys.length; i++) {
            var lEmpty = lEmptys[i];
            lEmpty.addEventListener("click", function(e) {
                var lEmpty = this;
                lEmpty.classList.remove("Active");
                lEmpty.classList.add("Active");
            });
        }
        //===============================================
        // document
        //===============================================
        document.addEventListener("click", function(e) {
            var lForm = document.getElementById("FormModal");
            var lFormOk = (lForm.style.display != "none");
            var lHideOk = lFormOk 
                       && !e.target.matches(".FormCaret")
                       && !e.target.matches(".FormInput")
                       && !e.target.matches(".FormMenu")
                       && !e.target.matches(".FormEmpty")
                       
            if(lHideOk) {
                //===============================================
                // inputs
                //===============================================
                var lInputs = document.getElementsByClassName("FormInput");
                
                for(var i = 0; i < lInputs.length; i++) {
                    var lInput = lInputs[i];
                    var lType = lInput.dataset.type;
                    var lContent = null;
                    if(lType == "combo") {
                        lContent = lInput.nextElementSibling.nextElementSibling;
                    }
                    else if(lType == "tree") {
                        lContent = lInput.nextElementSibling.nextElementSibling;
                    }
                    else if(lType == "image") {
                        lContent = lInput.nextElementSibling.nextElementSibling.nextElementSibling;
                    }
                    else if(lType == "picto") {
                        lContent = lInput.nextElementSibling.nextElementSibling.nextElementSibling;
                    }
                    lContent.classList.remove("Show");
                }
                //===============================================
                // menu
                //===============================================
                var lContents = document.getElementsByClassName("FormTree");

                for(var i = 0; i < lContents.length; i++) {
                    var lContent = lContents[i];
                    lContent.classList.remove("Show");
                }
            }
        });
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
    setCallbackEdit(_module, _method) {
        this.m_moduleEdit = _module;
        this.m_methodEdit = _method;
        this.writeUi();
    }
    //===============================================
    setCallbackInput(_module, _method) {
        this.m_moduleInput = _module;
        this.m_methodInput = _method;
        this.writeUi();
    }
    //===============================================
    addValue(_value) {
        var lObj = new GForm();
        lObj.m_value = _value;
        this.m_map.push(lObj);
    }
    //===============================================
    addImage(_value, _img) {
        var lObj = new GForm();
        lObj.m_value = _value;
        lObj.m_img = _img;
        this.m_map.push(lObj);
    }
    //===============================================
    addTree(_index, _parentIndex, _value, _isDir) {
        var lObj = new GForm();
        lObj.m_index = _index;
        lObj.m_parentIndex = _parentIndex;
        lObj.m_value = _value;
        lObj.m_isDir = _isDir;
        this.m_map.push(lObj);
    }
    //===============================================
    addLabelEdit(_id, _label, _value = "") {
        var lObj = new GForm();
        lObj.m_position = this.m_map.length + 1;
        lObj.m_model = "label_edit";
        lObj.m_id = _id;
        lObj.m_label = _label;
        lObj.m_value = _value;
        this.m_map.push(lObj);
    }
    //===============================================
    addLabelText(_id, _label, _value = "") {
        var lObj = new GForm();
        lObj.m_position = this.m_map.length + 1;
        lObj.m_model = "label_text";
        lObj.m_id = _id;
        lObj.m_label = _label;
        lObj.m_value = _value;
        this.m_map.push(lObj);
    }
    //===============================================
    addLabelColor(_id, _label, _value = "#800000") {
        var lObj = new GForm();
        lObj.m_position = this.m_map.length + 1;
        lObj.m_model = "label_color";
        lObj.m_id = _id;
        lObj.m_label = _label;
        lObj.m_value = _value;
        this.m_map.push(lObj);
    }
    //===============================================
    addLabelCombo(_id, _label, _combo, _index = 0) {
        var lObj = new GForm();
        lObj.m_position = this.m_map.length + 1;
        lObj.m_model = "label_combo";
        lObj.m_id = _id;
        lObj.m_label = _label;
        lObj.m_index = _index;
        lObj.m_combo = _combo;
        this.m_map.push(lObj);
    }
    //===============================================
    addLabelPicto(_id, _label, _combo, _index = 0) {
        var lObj = new GForm();
        lObj.m_position = this.m_map.length + 1;
        lObj.m_model = "label_picto";
        lObj.m_id = _id;
        lObj.m_label = _label;
        lObj.m_index = _index;
        lObj.m_combo = _combo;
        this.m_map.push(lObj);
    }
    //===============================================
    addLabelImage(_id, _label, _combo, _index = 0) {
        var lObj = new GForm();
        lObj.m_position = this.m_map.length + 1;
        lObj.m_model = "label_image";
        lObj.m_id = _id;
        lObj.m_label = _label;
        lObj.m_index = _index;
        lObj.m_combo = _combo;
        this.m_map.push(lObj);
    }
    //===============================================
    addLabelTree(_id, _label, _combo, _index = 0) {
        var lObj = new GForm();
        lObj.m_position = this.m_map.length + 1;
        lObj.m_model = "label_tree";
        lObj.m_id = _id;
        lObj.m_label = _label;
        lObj.m_index = _index;
        lObj.m_combo = _combo;
        this.m_map.push(lObj);
    }
    //===============================================
    addVariable(_id, _value = "") {
        var lObj = new GForm();
        lObj.m_position = this.m_map.length + 1;
        lObj.m_model = "variable";
        lObj.m_id = _id;
        lObj.m_label = "label";
        lObj.m_value = _value;
        this.m_map.push(lObj);
    }
    //===============================================
    toTree(_obj, _form, _parentIndex) {
        var lFormI = _form.findMap(_parentIndex);
        var lHtml = "";
        for(var j = 1; j <= lFormI.size(); j++) {
            lFormI.loadFromMap(j);
            var lFormJ = _form.findMap(lFormI.m_index);
            
            if(!lFormI.m_isDir) {
                lHtml += sprintf("<div class='Forms18 FormLine' data-type='tree' data-index='%s' data-position='%s' data-value='%s'>%s\n"
                , lFormI.m_index
                , _obj.m_position
                , lFormI.m_value
                , lFormI.m_value
                );
            }
            else {
                if(lFormJ.size() > 0) {
                    lHtml += sprintf("<div class='Forms18 FormMenu' data-type='tree' data-index='%s' data-position='%s' data-value='%s'>%s\n"
                    , lFormI.m_index
                    , _obj.m_position
                    , lFormI.m_value
                    , lFormI.m_value
                    );
                    lHtml += sprintf("<i class='Forms24 fa fa-caret-down'></i>\n");
                }
                else {
                    lHtml += sprintf("<div class='Forms25 FormEmpty' data-type='tree' data-index='%s' data-position='%s' data-value='%s'>%s\n"
                    , lFormI.m_index
                    , _obj.m_position
                    , lFormI.m_value
                    , lFormI.m_value
                    );
                    lHtml += sprintf("<i class='Forms26 fa fa-caret-down'></i>\n");
                }
            }
            
            lHtml += sprintf("</div>\n");
                        
            if(lFormI.m_isDir) {
                lHtml += sprintf("<div class='Forms23 FormTree'>\n");
                lHtml += this.toTree(_obj, _form, lFormI.m_index);
                lHtml += sprintf("</div>\n");
            }
        }
        return lHtml;
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

            //===============================================
            // label_edit
            //===============================================
            if(lObj.m_model == "label_edit") {
                lContent += sprintf("<div class='Forms10'>\n");
                lContent += sprintf("<label class='Forms11' for='%s'>%s</label>\n", lObj.m_id, lObj.m_label);
                lContent += sprintf("<div class='Forms12'><input type='text' class='Forms20 FormEdit' id='%s' value='%s' data-index='%s' data-position='%s'/></div>\n", lObj.m_id, lObj.m_value, lObj.m_index, lObj.m_position);
                lContent += sprintf("</div>\n");
            }
            //===============================================
            // label_text
            //===============================================
            else if(lObj.m_model == "label_text") {
                lContent += sprintf("<div class='Forms10'>\n");
                lContent += sprintf("<label class='Forms11' for='%s'>%s</label>\n", lObj.m_id, lObj.m_label);
                lContent += sprintf("<div class='Forms12'><input type='text' class='Forms20 FormReadOnly' id='%s' value='%s' data-index='%s' data-position='%s' readonly/></div>\n", lObj.m_id, lObj.m_value, lObj.m_index, lObj.m_position);
                lContent += sprintf("</div>\n");
            }
            //===============================================
            // label_color
            //===============================================
            else if(lObj.m_model == "label_color") {
                lContent += sprintf("<div class='Forms10'>\n");
                lContent += sprintf("<label class='Forms11' for='%s'>%s</label>\n", lObj.m_id, lObj.m_label);
                lContent += sprintf("<div class='Forms12'><input type='color' class='Forms20 FormColor' id='%s' value='%s' data-index='%s' data-position='%s'/></div>\n", lObj.m_id, lObj.m_value, lObj.m_index, lObj.m_position);
                lContent += sprintf("</div>\n");
            }
            //===============================================
            // label_image
            //===============================================
            else if(lObj.m_model == "label_image") {
                var lForm = new GForm();
                lForm.deserialize(lObj.m_combo);
                lForm.loadFromMap(lObj.m_index);
                
                if(!lForm.m_map.length) {
                    this.addError("La donnée est obligatoire.");
                    continue;
                }

                lContent += sprintf("<div class='Forms10'>\n");
                lContent += sprintf("<label class='Forms11' for='%s'>%s</label>\n", lObj.m_id, lObj.m_label);
                lContent += sprintf("<div class='Forms13'>\n");
                lContent += sprintf("<input type='text' data-type='image' class='Forms14 FormInput' id='%s' value='%s' data-index='%s' data-position='%s' readonly/>\n", lObj.m_id, lForm.m_value, lObj.m_index, lObj.m_position);
                lContent += sprintf("<i data-type='image' class='Forms15 FormCaret fa fa-caret-down'></i>\n");
                lContent += sprintf("<img class='Forms16'/>\n");
                lContent += sprintf("<div class='Forms17'>\n");
                
                for(var j = 0; j < lForm.m_map.length; j++) {
                    lForm.loadFromMap(j);
                    lContent += sprintf("<div class='Forms18 FormLine' data-type='image' data-index='%s' data-position='%s' data-value='%s'>%s <img class='Forms19' src='%s' alt='%s'/></div>\n", j, lObj.m_position, lForm.m_value, lForm.m_value, lForm.m_img, lForm.m_value);
                }
                
                lContent += sprintf("</div>\n");
                lContent += sprintf("</div>\n");
                lContent += sprintf("</div>\n");
            }
            //===============================================
            // label_combo
            //===============================================
            else if(lObj.m_model == "label_combo") {
                var lForm = new GForm();
                lForm.deserialize(lObj.m_combo);
                lForm.loadFromMap(lObj.m_index);
                
                if(!lForm.m_map.length) {
                    this.addError("La donnée est obligatoire.");
                    continue;
                }
                                
                lContent += sprintf("<div class='Forms10'>\n");
                lContent += sprintf("<label class='Forms11' for='%s'>%s</label>\n", lObj.m_id, lObj.m_label);
                lContent += sprintf("<div class='Forms13'>\n");
                lContent += sprintf("<input type='text' data-type='combo' class='Forms14 FormInput' id='%s' value='%s' data-index='%s' data-position='%s' readonly/>\n", lObj.m_id, lForm.m_value, lObj.m_index, lObj.m_position);
                lContent += sprintf("<i data-type='combo' class='Forms15 FormCaret fa fa-caret-down'></i>\n");
                lContent += sprintf("<div class='Forms17'>\n");
                
                for(var j = 0; j < lForm.m_map.length; j++) {
                    lForm.loadFromMap(j);
                    lContent += sprintf("<div class='Forms18 FormLine' data-type='combo' data-index='%s' data-position='%s' data-value='%s'>%s</div>\n", j, lObj.m_position, lForm.m_value, lForm.m_value);
                }
                
                lContent += sprintf("</div>\n");
                lContent += sprintf("</div>\n");
                lContent += sprintf("</div>\n");
            }
            //===============================================
            // label_picto
            //===============================================
            else if(lObj.m_model == "label_picto") {
                var lForm = new GForm();
                lForm.deserialize(lObj.m_combo);
                lForm.loadFromMap(lObj.m_index);
                
                if(!lForm.m_map.length) {
                    this.addError("La donnée est obligatoire.");
                    continue;
                }
                                
                lContent += sprintf("<div class='Forms10'>\n");
                lContent += sprintf("<label class='Forms11' for='%s'>%s</label>\n", lObj.m_id, lObj.m_label);
                lContent += sprintf("<div class='Forms13'>\n");
                lContent += sprintf("<input type='text' data-type='picto' class='Forms14 FormInput' id='%s' value='%s' data-index='%s' data-position='%s' readonly/>\n", lObj.m_id, lForm.m_value, lObj.m_index, lObj.m_position);
                lContent += sprintf("<i data-type='picto' class='Forms15 FormCaret fa fa-caret-down'></i>\n");
                lContent += sprintf("<i class='Forms22 fa fa-book'></i>\n");
                lContent += sprintf("<div class='Forms17'>\n");
                
                for(var j = 0; j < lForm.m_map.length; j++) {
                    lForm.loadFromMap(j);
                    lContent += sprintf("<div class='Forms18 FormLine' data-type='picto' data-index='%s' data-position='%s' data-value='%s'>%s <i class='Forms21 fa %s'></i></div>\n", j, lObj.m_position, lForm.m_value, lForm.m_value, lForm.m_value);
                }
                
                lContent += sprintf("</div>\n");
                lContent += sprintf("</div>\n");
                lContent += sprintf("</div>\n");
            }
            //===============================================
            // label_tree
            //===============================================
            else if(lObj.m_model == "label_tree") {
                var lForm = new GForm();
                lForm.deserialize(lObj.m_combo);
                lForm.loadFromMap(lObj.m_index);
                
                if(!lForm.m_map.length) {
                    this.addError("La donnée est obligatoire.");
                    continue;
                }
                                
                lContent += sprintf("<div class='Forms10'>\n");
                lContent += sprintf("<label class='Forms11' for='%s'>%s</label>\n", lObj.m_id, lObj.m_label);
                lContent += sprintf("<div class='Forms13'>\n");
                lContent += sprintf("<input type='text' data-type='tree' class='Forms14 FormInput' id='%s' value='%s' data-index='%s' data-position='%s' readonly/>\n", lObj.m_id, lForm.m_value, lObj.m_index, lObj.m_position);
                lContent += sprintf("<i data-type='tree' class='Forms15 FormCaret fa fa-caret-down'></i>\n");
                lContent += sprintf("<div class='Forms17 FormPopup'>\n");
                //
                lContent += this.toTree(lObj, lForm, 0);
                //
                lContent += sprintf("</div>\n");
                lContent += sprintf("</div>\n");
                lContent += sprintf("</div>\n");
            }
            //===============================================
            // variable
            //===============================================
            else if(lObj.m_model == "variable") {
                lContent += sprintf("<input type='hidden' id='%s' value='%s' data-index='%s' data-position='%s'/>\n", lObj.m_id, lObj.m_value, lObj.m_index, lObj.m_position);
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
        var lFormModule = document.getElementById("FormModule");
        var lFormMethod = document.getElementById("FormMethod");
        var lFormModuleLine = document.getElementById("FormModuleLine");
        var lFormMethodLine = document.getElementById("FormMethodLine");
        var lFormModuleEdit = document.getElementById("FormModuleEdit");
        var lFormMethodEdit = document.getElementById("FormMethodEdit");
        var lFormModuleInput = document.getElementById("FormModuleInput");
        var lFormMethodInput = document.getElementById("FormMethodInput");
        var lFormContent = document.getElementById("FormContent");
        
        this.m_module = lFormModule.value;
        this.m_method = lFormMethod.value;
        this.m_moduleLine = lFormModuleLine.value;
        this.m_methodLine = lFormMethodLine.value;
        this.m_moduleEdit = lFormModuleEdit.value;
        this.m_methodEdit = lFormMethodEdit.value;
        this.m_moduleInput = lFormModuleInput.value;
        this.m_methodInput = lFormMethodInput.value;
        this.m_content = lFormContent.innerHTML;
    }
    //===============================================
    writeUi() {
        var lFormModule = document.getElementById("FormModule");
        var lFormMethod = document.getElementById("FormMethod");
        var lFormModuleLine = document.getElementById("FormModuleLine");
        var lFormMethodLine = document.getElementById("FormMethodLine");
        var lFormModuleEdit = document.getElementById("FormModuleEdit");
        var lFormMethodEdit = document.getElementById("FormMethodEdit");
        var lFormModuleInput = document.getElementById("FormMethodInput");
        var lFormMethodInput = document.getElementById("FormMethodInput");
        var lFormContent = document.getElementById("FormContent");

        lFormModule.value = this.m_module;
        lFormMethod.value = this.m_method;
        lFormModuleLine.value = this.m_moduleLine;
        lFormMethodLine.value = this.m_methodLine;
        lFormModuleEdit.value = this.m_moduleEdit;
        lFormMethodEdit.value = this.m_methodEdit;
        lFormModuleInput.value = this.m_moduleInput;
        lFormMethodInput.value = this.m_methodInput;
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
        lDom.addData(_code, "position", this.m_position);
        lDom.addData(_code, "model", this.m_model);
        lDom.addData(_code, "label", this.m_label);
        lDom.addData(_code, "id", this.m_id);
        lDom.addData(_code, "img", this.m_img);
        lDom.addData(_code, "value", this.m_value);
        lDom.addData(_code, "index", this.m_index);
        lDom.addData(_code, "parent_index", this.m_parentIndex);
        lDom.addData(_code, "is_dir", this.m_isDir);
        lDom.addMap(_code, this.m_map);
        return lDom.toString();
    }
    //===============================================
    deserialize(_data, _code = "form") {
        var lDom = new GCode();
        lDom.loadXml(_data);
        this.m_position = lDom.getItem(_code, "position");
        this.m_model = lDom.getItem(_code, "model");
        this.m_label = lDom.getItem(_code, "label");
        this.m_id = lDom.getItem(_code, "id");
        this.m_img = lDom.getItem(_code, "img");
        this.m_value = lDom.getItem(_code, "value");
        this.m_index = lDom.getItem(_code, "index");
        this.m_parentIndex = lDom.getItem(_code, "parent_index");
        this.m_isDir = lDom.getItem(_code, "is_dir");
        lDom.getMap(_code, this.m_map, this);
    }
    //===============================================
    run(_method, _obj, _data) {
        if(_method == "") {
            this.addError("La méthode est obligatoire.");
        }
        //===============================================
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
        //===============================================
        else {
            this.addError("La méthode est inconnue.");
        }
        return !this.hasErrors();
    }
    //===============================================
    onOpenForm(_obj, _data) {
        var lFormModal = document.getElementById("FormModal");
        var lFormForm = document.getElementById("FormForm");
        
        lFormForm.classList.remove("AnimateHide");
        lFormForm.classList.add("AnimateShow");
        lFormModal.style.display = "block";
    }
    //===============================================
    onCloseForm(_obj, _data) {
        var lFormModal = document.getElementById("FormModal");
        var lFormForm = document.getElementById("FormForm");
        
        lFormForm.classList.remove("AnimateShow");
        lFormForm.classList.add("AnimateHide");
        
        setTimeout(function() {
            lFormModal.style.display = "none";
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
        this.readUi();
        if(this.m_moduleInput == "") return;
        if(this.m_methodInput == "") return;
        var lObj = new GForm();
        var lLine = _obj;
        lObj.m_position = lLine.dataset.position;
        lObj.m_index = lLine.dataset.index;
        lObj.m_value = lLine.dataset.value;
        var lData = lObj.serialize();
        call_server(this.m_moduleInput, this.m_methodInput, _obj, lData);
        return !this.hasErrors();
    }
    //===============================================
    onChangeLineForm(_obj, _data) {
        this.readUi();
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
        this.readUi();
        if(this.m_moduleEdit == "") return;
        if(this.m_methodEdit == "") return;
        var lObj = new GForm();
        var lLine = _obj;
        lObj.m_position = lLine.dataset.position;
        lObj.m_index = lLine.dataset.index;
        lObj.m_value = lLine.value;
        var lData = lObj.serialize();
        call_server(this.m_moduleEdit, this.m_methodEdit, _obj, lData);
        return !this.hasErrors();
    }
    //===============================================
}
//===============================================
