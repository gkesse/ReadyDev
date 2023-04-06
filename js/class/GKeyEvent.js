//===============================================
class GKeyEvent extends GObject {
    //===============================================
    static m_instance = null;
    //===============================================
    constructor() {
        super();
        this.m_filter = "";
    }
    //===============================================
    static Instance() {
        if(this.m_instance == null) {
            this.m_instance = new GKeyEvent();
        }
        return this.m_instance;
    }    
    //===============================================
    setFilter(_data) {
        var lEditorClipboardFilter = document.getElementById("EditorClipboardFilter");
        lEditorClipboardFilter.value = _data;
    }
    //===============================================
    readFilter() {
        var lEditorClipboardFilter = document.getElementById("EditorClipboardFilter");
        this.m_filter = lEditorClipboardFilter.value;
    }
    //===============================================
    pasteImage(e, _callback) {
        if(e.clipboardData == false) return;
        var lItems = e.clipboardData.items;
        if(!lItems) return;
        for (var i = 0; i < lItems.length; i++) {
            if(lItems[i].type.indexOf("image") == -1) continue;
            var lBlob = lItems[i].getAsFile();
            _callback(lBlob);
        }
    }
    //===============================================
    pasteImageCB(_imageBlob) {
        var lObj = new GKeyEvent();
        var lEditor = new GEditor();
        lEditor.readSelection();
        
        var lHtml = "";
        lHtml += sprintf("<div class='GImage1 Img1'>\n");
        lHtml += sprintf("<img alt='image.png'/>\n");
        lHtml += sprintf("</div>\n");
        
        var lNode = lObj.createNode(lHtml);
        var lImg = lNode.firstElementChild;
        lEditor.appendNode(lNode);
        
        var lFileReader = new FileReader();
        lFileReader.onload = function(e) {
            lImg.src = e.target.result;
        };
        lFileReader.readAsDataURL(_imageBlob);
    }
    //===============================================
    run(_method, _obj, _data) {
        if(_method == "") {
            this.addError("La méthode est obligatoire.");
        }
        else if(_method == "filter_clipboard_text") {
            this.onFilterClipboardText(_obj, _data);
        }
        else if(_method == "no_filter_clipboard_text") {
            this.onNoFilterClipboardText(_obj, _data);
        }
        else if(_method == "paste_text_edition") {
            this.onPasteTextEdition(_obj, _data);
        }
        else {
            this.addError("La méthode est inconnue.");
        }
        return !this.hasErrors();
    }
    //===============================================
    onFilterClipboardText(_obj, _data) {
        this.setFilter("filter_text");
    }
    //===============================================
    onNoFilterClipboardText(_obj, _data) {
        this.setFilter("no_filter_text");
    }
    //===============================================
    onPasteTextEdition(_obj, _data) {
        var lEvent = _obj || window.event;
        var lClipboardData = lEvent.clipboardData || window.clipboardData;
        // [clipboard] : on récupère le texte pour vérifier si on a un texte ou une iamge
        var lData = lClipboardData.getData("text");
        // [clipboard] : on vérifie si on a un texte
        if(lData != "") {
            this.readFilter();
            if(this.m_filter == "filter_text") {
                lEvent.preventDefault();
                document.execCommand("insertHTML", false, lData);
            }
        }
        // [clipboard] : sinon on a une image
        else {
            lEvent.preventDefault();
            this.pasteImage(lEvent, this.pasteImageCB);
        }
    }
    //===============================================
}
//===============================================
