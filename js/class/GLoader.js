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
            this.m_logs.addError("La méthode est obligatoire.");
        }
        else if(_method == "open_loader") {
            this.onOpenLoader(_obj, _data);
        }
        else if(_method == "close_loader") {
            this.onCloseLoader(_obj, _data);
        }
        else {
            this.m_logs.addError("La méthode est inconnue.");
        }
        return !this.m_logs.hasErrors();
    }
    //===============================================
    onOpenLoader(_obj, _data) {
        var lLoaderModal = document.getElementById("LoaderModal");
        var lLoaderBody = document.getElementById("LoaderBody");
        var lClassName = lLoaderBody.className;
        
        lLoaderBody.className = lClassName.replace(" AnimateShow", "");
        lLoaderBody.className = lClassName.replace(" AnimateHide", "");
        lLoaderBody.className += " AnimateShow";
        lLoaderModal.style.display = "block";
    }
    //===============================================
    onCloseLoader(_obj, _data) {
        var lLoaderModal = document.getElementById("LoaderModal");
        var lLoaderBody = document.getElementById("LoaderBody");
        var lClassName = lLoaderBody.className;
        
        lLoaderBody.className = lClassName.replace(" AnimateShow", "");
        lLoaderBody.className = lClassName.replace(" AnimateHide", "");
        lLoaderBody.className += " AnimateHide";
        
        setTimeout(function() {
            lLoaderModal.style.display = "none";
        }, 400);
    }
    //===============================================
}
//===============================================
