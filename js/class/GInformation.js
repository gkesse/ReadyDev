//===============================================
class GInformation extends GModule {
    //===============================================
    constructor() {
        super();
    }
    //===============================================
    onModule(_method, _obj, _data) {
        if(_method == "") {
            this.addError("La méthode est obligatoire.");
        }
        else if(_method == "open_information") {
            this.onOpenInformation(_obj, _data);
        }
        else if(_method == "close_information") {
            this.onCloseInformation(_obj, _data);
        }
        else {
            this.addError("La méthode est inconnue.");
        }
        return !this.hasErrors();
    }
    //===============================================
    onOpenInformation() {
        var lModalInformation = document.getElementById("ModalInformation");
        var lInformationBody = document.getElementById("InformationBody");
        var lInformationMsg = document.getElementById("InformationMsg");
        var lClassName = lInformationBody.className;
        
        lInformationMsg.style.display = "none";
        lInformationBody.className = lClassName.replace(" AnimateShow", "");
        lInformationBody.className = lClassName.replace(" AnimateHide", "");
        lInformationBody.className += " AnimateShow";
        lModalInformation.style.display = "block";
    }
    //===============================================
    onCloseInformation() {
        var lModalInformation = document.getElementById("ModalInformation");
        var lInformationBody = document.getElementById("InformationBody");
        var lClassName = lInformationBody.className;
        
        lInformationBody.className = lClassName.replace(" AnimateShow", "");
        lInformationBody.className = lClassName.replace(" AnimateHide", "");
        lInformationBody.className += " AnimateHide";
        
        setTimeout(function() {
            lModalInformation.style.display = "none";
        }, 400);
    }
    //===============================================
}
//===============================================
