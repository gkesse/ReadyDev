//===============================================
class GConfirm extends GModule {
    //===============================================
    constructor() {
        super();
    }
    //===============================================
    setCallback(_module, _method) {
        this.m_module = _module;
        this.m_method = _method;
        this.writeUi();
    }
    //===============================================
    readUi() {
        var lModule = document.getElementById("ConfirmModule");
        var lMethod = document.getElementById("ConfirmMethod");
        
        this.m_module = lModule.value;
        this.m_method = lMethod.value;
    }
    //===============================================
    writeUi() {
        var lModule = document.getElementById("ConfirmModule");
        var lMethod = document.getElementById("ConfirmMethod");

        lModule.value = this.m_module;
        lMethod.value = this.m_method;
    }
    //===============================================
    buttonOn() {
        var lConfirmOk = document.getElementById("ConfirmOk");
        var lConfirmCancel = document.getElementById("ConfirmCancel");

        lConfirmOk.disabled = false;
        lConfirmCancel.disabled = false;
    }
    //===============================================
    buttonOff() {
        var lConfirmOk = document.getElementById("ConfirmOk");
        var lConfirmCancel = document.getElementById("ConfirmCancel");

        lConfirmOk.disabled = true;
        lConfirmCancel.disabled = true;
    }
    //===============================================
    showConfirm() {
        this.onOpenConfirm();
    }
    //===============================================
    onModule(_method, _obj, _data) {
        if(_method == "") {
            this.addError("La méthode est obligatoire.");
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
            this.addError("La méthode est inconnue.");
        }
        return !this.hasErrors();
    }
    //===============================================
    onOpenConfirm(_obj, _data) {
        var lModalConfirm = document.getElementById("ModalConfirm");
        var lConfirmBody = document.getElementById("ConfirmBody");
        var lConfirmMsg = document.getElementById("ConfirmMsg");
        var lClassName = lConfirmBody.className;
        
        lConfirmMsg.style.display = "none";
        lConfirmBody.classList.remove("AnimateHide");
        lConfirmBody.classList.add("AnimateShow");
        lModalConfirm.style.display = "block";
    }
    //===============================================
    onCloseConfirm(_obj, _data) {
        var lModalConfirm = document.getElementById("ModalConfirm");
        var lConfirmBody = document.getElementById("ConfirmBody");
        var lClassName = lConfirmBody.className;
        
        lConfirmBody.classList.add("AnimateShow");
        lConfirmBody.classList.add("AnimateHide");
        
        setTimeout(function() {
            lModalConfirm.style.display = "none";
        }, 400);
    }
    //===============================================
    onOkConfirm(_obj, _data) {
        this.readUi();
        if(this.m_module == "") return false;
        if(this.m_method == "") return false;
        this.onCloseConfirm();
        call_server(this.m_module, this.m_method, this);
        return !this.hasErrors();
    }
    //===============================================
}
//===============================================
