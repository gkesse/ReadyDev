//===============================================
class GLoader extends GObject {
    //===============================================
    constructor() {
        super();
    }
    //===============================================
    showLoader() {
        this.onOpenLoader();
    }
    //===============================================
    closeLoader() {
        this.onCloseLoader();
    }
    //===============================================
    onModule(_method, _obj, _data) {
        if(_method == "") {
            this.addError("La méthode est obligatoire.");
        }
        else if(_method == "open_loader") {
            this.onOpenLoader(_obj, _data);
        }
        else if(_method == "close_loader") {
            this.onCloseLoader(_obj, _data);
        }
        else {
            this.addError("La méthode est inconnue.");
        }
        return !this.hasErrors();
    }
    //===============================================
    onOpenLoader() {
        var lModalLoader = document.getElementById("ModalLoader");
        var lLoaderBody = document.getElementById("LoaderBody");
        var lClassName = lLoaderBody.className;
        
        lLoaderBody.className = lClassName.replace(" AnimateShow", "");
        lLoaderBody.className = lClassName.replace(" AnimateHide", "");
        lLoaderBody.className += " AnimateShow";
        lModalLoader.style.display = "block";
    }
    //===============================================
    onCloseLoader() {
        var lModalLoader = document.getElementById("ModalLoader");
        var lLoaderBody = document.getElementById("LoaderBody");
        var lClassName = lLoaderBody.className;
        
        lLoaderBody.className = lClassName.replace(" AnimateShow", "");
        lLoaderBody.className = lClassName.replace(" AnimateHide", "");
        lLoaderBody.className += " AnimateHide";
        
        setTimeout(function() {
            lModalLoader.style.display = "none";
        }, 400);
    }
    //===============================================
}
//===============================================
