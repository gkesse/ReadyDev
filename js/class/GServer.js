//===============================================
class GServer extends GObject {
    //===============================================
    constructor() {
        super();
    }
    //===============================================
    hasErrors() {
        var lErrorOk = false;
        lErrorOk |= super.hasErrors();
        lErrorOk |= super.hasErrorsNS();
        return lErrorOk;
    }
    //===============================================
    run(_module, _method, _obj, _data) {
        if(_module == "") {
            this.addError("Le module est obligatoire.");
        }
        //===============================================
        else if(_module == "logs") {
            this.onLogs(_method, _obj, _data);
        }
        else if(_module == "table") {
            this.onTable(_method, _obj, _data);
        }
        else if(_module == "font_awesome") {
            this.onFontAwesome(_method, _obj, _data);
        }
        else if(_module == "file") {
            this.onFile(_method, _obj, _data);
        }
        else if(_module == "form") {
            this.onForm(_method, _obj, _data);
        }
        else if(_module == "app") {
            this.onApp(_method, _obj, _data);
        }
        else if(_module == "editor") {
            this.onEditor(_method, _obj, _data);
        }
        else if(_module == "page") {
            this.onPage(_method, _obj, _data);
        }
        //===============================================
        else {
            this.addError("Le module est inconnu.");
        }
    }
    //===============================================
    onLogs(_method, _obj, _data) {
        var lObj = new GLog();
        lObj.run(_method, _obj, _data)
    }
    //===============================================
    onTable(_method, _obj, _data) {
        var lObj = new GTable();
        lObj.run(_method, _obj, _data)
        this.addLogs(lObj.getLogs());
    }
    //===============================================
    onFontAwesome(_method, _obj, _data) {
        var lObj = new GFontAwesome();
        lObj.run(_method, _obj, _data)
        this.addLogs(lObj.getLogs());
    }
    //===============================================
    onFile(_method, _obj, _data) {
        var lObj = new GFile();
        lObj.run(_method, _obj, _data)
        this.addLogs(lObj.getLogs());
    }
    //===============================================
    onForm(_method, _obj, _data) {
        var lObj = new GForm();
        lObj.run(_method, _obj, _data)
        this.addLogs(lObj.getLogs());
    }
    //===============================================
    onApp(_method, _obj, _data) {
        var lObj = new GApp();
        lObj.run(_method, _obj, _data)
        this.addLogs(lObj.getLogs());
    }
    //===============================================
    onEditor(_method, _obj, _data) {
        var lObj = new GEditor();
        lObj.run(_method, _obj, _data)
        this.addLogs(lObj.getLogs());
    }
    //===============================================
    onPage(_method, _obj, _data) {
        var lObj = new GPage();
        lObj.run(_method, _obj, _data)
        this.addLogs(lObj.getLogs());
    }
    //===============================================
}
//===============================================
