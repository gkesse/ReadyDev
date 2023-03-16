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
    encodeHtml(_data, _lang) {
        var lEntityMap = {
            '<': '&lt;|html;ace',
            '>': '&gt;|html;ace',
            '\n': '<br>|html',
            '<br>': '\n|txt',
            '&lt;': '<|txt',
            '&gt;': '>|txt',
            '&amp;': '&|tex;txt'
        };
        for(var lKey in lEntityMap) {
            var lVal = lEntityMap[lKey];
            var lSplit = lVal.split("|");
            var lVal2 = lSplit[0];
            if(lSplit.length > 1) {
                var lVal3 = lSplit[1];
                var lSplit2 = lVal3.split(";");
                var lIncludes = lSplit2.includes(_lang);
                if(!lIncludes) continue;
            }
            var lReg = new RegExp(lKey, 'g');
            _data = _data.replace(lReg, lVal2);
        }
        return _data;
    }    
    //===============================================
    onModule(_method, _obj, _data) {
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
        // [clipboard] : on vérifie si on a un text
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
            this.pasteImage(e, this.pasteImageCB);
        }
    }
    //===============================================
}
//===============================================
