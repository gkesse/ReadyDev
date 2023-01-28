//===============================================
class GConfirm extends GModule {
    //===============================================
    constructor() {
        super();
        this.m_module = "";
        this.m_method = "";
        this.m_action = "";
    }
    //===============================================
    onModule(_method, _obj, _data) {
        if(_method == "") {
            this.addError("Erreur la méthode est obligatoire.");
        }
        else if(_method == "open_confirm") {
            this.onOpenConfirm(_obj, _data);
        }
        else if(_method == "close_confirm") {
            this.onCloseConfirm(_obj, _data);
        }
        else if(_method == "ok_confirm") {
            this.onOkConfirm(_obj, _data);
        }
        else {
            this.addError("Erreur la méthode est inconnue.");
        }
        return !this.hasErrors();
    }
    //===============================================
    serialize(_code = "confirm") {
        var lDom = new GCode();
        lDom.createDoc();
        lDom.addData(_code, "action", this.m_action);
        return lDom.toString();
    }
    //===============================================
    deserialize(_data, _code = "confirm") {
        super.deserialize(_data);
        var lDom = new GCode();
        lDom.loadXml(_data);
        this.m_action = lDom.getItem(_code, "action");
    }
    //===============================================
    onOpenConfirm() {
        var lModalConfirm = document.getElementById("ModalConfirm");
        var lConfirmBody = document.getElementById("ConfirmBody");
        var lConfirmMsg = document.getElementById("ConfirmMsg");
        var lClassName = lConfirmBody.className;
        
        lConfirmMsg.style.display = "none";
        lConfirmBody.className = lClassName.replace(" AnimateShow", "");
        lConfirmBody.className = lClassName.replace(" AnimateHide", "");
        lConfirmBody.className += " AnimateShow";
        lModalConfirm.style.display = "block";
    }
    //===============================================
    onCloseConfirm() {
        var lModalConfirm = document.getElementById("ModalConfirm");
        var lConfirmBody = document.getElementById("ConfirmBody");
        var lClassName = lConfirmBody.className;
        
        lConfirmBody.className = lClassName.replace(" AnimateShow", "");
        lConfirmBody.className = lClassName.replace(" AnimateHide", "");
        lConfirmBody.className += " AnimateHide";
        
        setTimeout(function() {
            lModalConfirm.style.display = "none";
        }, 400);
        
        this.cancel();
    }
    //===============================================
    onOkConfirm() {
        this.readUi();
        if(this.m_module == "") return false;
        if(this.m_method == "") return false;
        if(this.m_action == "") return false;
        var lData = this.serialize();
        this.buttonOff();
        call_server(this.m_module, this.m_method, this, lData);
        return !this.hasErrors();
    }
    //===============================================
    setCallback(_module, _method, _action) {
        this.readUi();
        if(this.m_module == "") return false;
        if(this.m_method == "") return false;
        if(this.m_action == "") return false;
        this.m_module = _module;
        this.m_method = _method;
        this.m_action = _action;
        this.writeUi();
        return !this.hasErrors();
    }
    //===============================================
    cancel() {
        this.readUi();
        if(this.m_module == "") return false;
        if(this.m_method == "") return false;
        this.m_action = "cancel";
        var lData = this.serialize();
        call_server(this.m_module, this.m_method, this, lData);
        this.writeUi();
        return !this.hasErrors();
    }
    //===============================================
    readUi() {
        var lModule = document.getElementById("ConfirmModule");
        var lMethod = document.getElementById("ConfirmMethod");
        var lAction = document.getElementById("ConfirmAction");

        this.m_module = lModule.value;
        this.m_method = lMethod.value;
        this.m_action = lAction.value;
    }
    //===============================================
    writeUi() {
        var lModule = document.getElementById("ConfirmModule");
        var lMethod = document.getElementById("ConfirmMethod");
        var lAction = document.getElementById("ConfirmAction");

        lModule.value = this.m_module;
        lMethod.value = this.m_method;
        lAction.value = this.m_action;
    }
    //===============================================
    buttonOn() {
        var lOk = document.getElementById("ConfirmOk");
        var lCancel = document.getElementById("ConfirmCancel");

        lOk.disabled = false;
        lCancel.disabled = false;
    }
    //===============================================
    buttonOff() {
        var lOk = document.getElementById("ConfirmOk");
        var lCancel = document.getElementById("ConfirmCancel");

        lOk.disabled = true;
        lCancel.disabled = true;
    }
    //===============================================
}
//===============================================
