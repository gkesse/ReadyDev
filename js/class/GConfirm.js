//===============================================
class GConfirm extends GModule {
    //===============================================
    constructor() {
        super();
        this.module = "";
        this.method = "";
        this.action = "";
    }
    //===============================================
    onModule(method, obj, data) {
        if(method == "") {
            this.onMethodNone();
            return false;
        }
        //===============================================
        else if(method == "open_confirm") {
            this.onOpenConfirm();
        }
        else if(method == "close_confirm") {
            this.onCloseConfirm();
        }
        else if(method == "ok_confirm") {
            this.onOkConfirm();
        }
        //===============================================
        // end
        //===============================================
        else {
            this.onMethodUnknown();
            return false;        
        }
        //===============================================
        return true;
    }
    //===============================================
    serialize(isDom = false, code = "confirm") {
        var lDom = new GCode();
        lDom.createDoc();
        lDom.addData(code, "action", this.action);
        var lData = lDom.toStringData();
        if(isDom) lData = lDom.toString();
        return lData;
    }
    //===============================================
    deserialize(data, code = "confirm") {
        super.deserialize(data);
        var lDom = new GCode();
        lDom.loadXml(data);
        this.action = lDom.getItem(code, "action");
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
        if(this.module == "") return false;
        if(this.method == "") return false;
        if(this.action == "") return false;
        var lData = this.serialize(true);
        this.buttonOff();
        call_server(this.module, this.method, this, lData);
        return true;
    }
    //===============================================
    setCallback(module, method, action) {
        this.readUi();
        if(module == "") return false;
        if(method == "") return false;
        if(action == "") return false;
        this.module = module;
        this.method = method;
        this.action = action;
        this.writeUi();
        return true;
    }
    //===============================================
    cancel() {
        this.readUi();
        if(this.module == "") return false;
        if(this.method == "") return false;
        this.action = "cancel";
        var lData = this.serialize(true);
        call_server(this.module, this.method, this, lData);
        this.writeUi();
        return true;
    }
    //===============================================
    readUi() {
        var lModule = document.getElementById("ConfirmModule");
        var lMethod = document.getElementById("ConfirmMethod");
        var lAction = document.getElementById("ConfirmAction");
        //
        this.module = lModule.value;
        this.method = lMethod.value;
        this.action = lAction.value;
    }
    //===============================================
    writeUi() {
        var lModule = document.getElementById("ConfirmModule");
        var lMethod = document.getElementById("ConfirmMethod");
        var lAction = document.getElementById("ConfirmAction");
        //
        lModule.value = this.module;
        lMethod.value = this.method;
        lAction.value = this.action;
    }
    //===============================================
    buttonOn() {
        var lOk = document.getElementById("ConfirmOk");
        var lCancel = document.getElementById("ConfirmCancel");
        //
        lOk.disabled = false;
        lCancel.disabled = false;
    }
    //===============================================
    buttonOff() {
        var lOk = document.getElementById("ConfirmOk");
        var lCancel = document.getElementById("ConfirmCancel");
        //
        lOk.disabled = true;
        lCancel.disabled = true;
    }
    //===============================================
}
//===============================================
