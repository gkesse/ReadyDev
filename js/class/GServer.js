//===============================================
class GServer extends GObject {
    //===============================================
    constructor() {
        super();
    }
    //===============================================
    run(_module, _method, _obj, _data) {
        if(_module == "") {
            this.addError("Le module est obligatoire.");
        }
        else if(_module == "test") {
            this.onTest(_method, _obj, _data);
        }
        else if(_module == "logs") {
            this.onLog(_method, _obj, _data);
        }
        else if(_module == "editor") {
            this.onEditor(_method, _obj, _data);
        }
        else if(_module == "page") {
            this.onPage(_method, _obj, _data);
        }
        else if(_module == "edition_command") {
            this.onCommand(_method, _obj, _data);
        }
        else if(_module == "combobox") {
            this.onComboBox(_method, _obj, _data);
        }
        else if(_module == "dropdown") {
            this.onDropDown(_method, _obj, _data);
        }
        else if(_module == "menu") {
            this.onMenu(_method, _obj, _data);
        }
        else if(_module == "sitemap") {
            this.onSitemap(_method, _obj, _data);
        }
        else if(_module == "manager") {
            this.onManager(_method, _obj, _data);
        }
        else if(_module == "query") {
            this.onQuery(_method, _obj, _data);
        }
        else if(_module == "table") {
            this.onTable(_method, _obj, _data);
        }
        else if(_module == "confirm") {
            this.onConfirm(_method, _obj, _data);
        }
        else if(_module == "form") {
            this.onForm(_method, _obj, _data);
        }
        else if(_module == "loader") {
            this.onLoader(_method, _obj, _data);
        }
        else {
            this.addError("Le module est inconnu.");
        }
    }
    //===============================================
    onTest(_method, _obj, _data) {
        var lObj = new GTestUi();
        lObj.loadData();
        lObj.onModule()
        this.addLogs(lObj.getLogs());
    }
    //===============================================
    onLog(_method, _obj, _data) {
        var lObj = new GLogUi();
        lObj.onModule(_method, _obj, _data)
        this.addLogs(lObj.getLogs());
    }
    //===============================================
    onEditor(_method, _obj, _data) {
        var lObj = new GEditorUi();
        lObj.onModule(_method, _obj, _data)
        this.addLogs(lObj.getLogs());
    }
    //===============================================
    onPage(_method, _obj, _data) {
        var lObj = new GPage();
        lObj.onModule(_method, _obj, _data)
        this.addLogs(lObj.getLogs());
    }
    //===============================================
    onCommand(_method, _obj, _data) {
        var lObj = new GCommand();
        lObj.onModule(_method, _obj, _data)
        this.addLogs(lObj.getLogs());
    }
    //===============================================
    onComboBox(_method, _obj, _data) {
        var lObj = new GComboBox();
        lObj.onModule(_method, _obj, _data)
        this.addLogs(lObj.getLogs());
    }
    //===============================================
    onDropDown(_method, _obj, _data) {
        var lObj = new GDropDown();
        lObj.onModule(_method, _obj, _data)
        this.addLogs(lObj.getLogs());
    }
    //===============================================
    onMenu(_method, _obj, _data) {
        var lObj = new GMenu();
        lObj.onModule(_method, _obj, _data)
        this.addLogs(lObj.getLogs());
    }
    //===============================================
    onSitemap(_method, _obj, _data) {
        var lObj = new GSitemap();
        lObj.onModule(_method, _obj, _data)
        this.addLogs(lObj.getLogs());
    }
    //===============================================
    onManager(_method, _obj, _data) {
        var lObj = new GManager();
        lObj.onModule(_method, _obj, _data)
        this.addLogs(lObj.getLogs());
    }
    //===============================================
    onQuery(_method, _obj, _data) {
        var lObj = new GQuery();
        lObj.onModule(_method, _obj, _data)
        this.addLogs(lObj.getLogs());
    }
    //===============================================
    onTable(_method, _obj, _data) {
        var lObj = new GTable();
        lObj.onModule(_method, _obj, _data)
        this.addLogs(lObj.getLogs());
    }
    //===============================================
    onConfirm(_method, _obj, _data) {
        var lObj = new GConfirm();
        lObj.onModule(_method, _obj, _data)
        this.addLogs(lObj.getLogs());
    }
    //===============================================
    onForm(_method, _obj, _data) {
        var lObj = new GForm();
        lObj.onModule(_method, _obj, _data)
        this.addLogs(lObj.getLogs());
    }
    //===============================================
    onLoader(_method, _obj, _data) {
        var lObj = new GLoader();
        lObj.onModule(_method, _obj, _data)
        this.addLogs(lObj.getLogs());
    }
    //===============================================
}
//===============================================
