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
		else if(_module == "user") {
			this.onUser(_method, _obj, _data);
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
		else if(_module == "information") {
			this.onInformation(_method, _obj, _data);
		}
		else {
			this.addError("Le module est inconnu.");
		}
	}
    //===============================================
	onTest(_method, _obj, _data) {
		var lTestUi = new GTestUi();
        lTestUi.loadData();
		lTestUi.onModule()
        this.addLogs(lTestUi.getLogs());
	}
    //===============================================
	onLog(_method, _obj, _data) {
		var lLogUi = new GLogUi();
		lLogUi.onModule(_method, _obj, _data)
        this.addLogs(lLogUi.getLogs());
	}
    //===============================================
	onEditor(_method, _obj, _data) {
		var lEditorUi = new GEditorUi();
		lEditorUi.onModule(_method, _obj, _data)
        this.addLogs(lEditorUi.getLogs());
	}
    //===============================================
	onPage(_method, _obj, _data) {
		var lPage = new GPage();
		lPage.onModule(_method, _obj, _data)
        this.addLogs(lPage.getLogs());
	}
    //===============================================
	onCommand(_method, _obj, _data) {
		var lCommand = new GCommand();
		lCommand.onModule(_method, _obj, _data)
        this.addLogs(lCommand.getLogs());
	}
    //===============================================
	onComboBox(_method, _obj, _data) {
		var lComboBox = new GComboBox();
		lComboBox.onModule(_method, _obj, _data)
        this.addLogs(lComboBox.getLogs());
	}
    //===============================================
	onDropDown(_method, _obj, _data) {
		var lDropDown = new GDropDown();
		lDropDown.onModule(_method, _obj, _data)
        this.addLogs(lDropDown.getLogs());
	}
    //===============================================
	onMenu(_method, _obj, _data) {
		var lMenu = new GMenu();
		lMenu.onModule(_method, _obj, _data)
        this.addLogs(lMenu.getLogs());
	}
    //===============================================
	onUser(_method, _obj, _data) {
		var lUser = new GUser();
		lUser.onModule(_method, _obj, _data)
        this.addLogs(lUser.getLogs());
	}
    //===============================================
	onSitemap(_method, _obj, _data) {
		var lSitemap = new GSitemap();
		lSitemap.onModule(_method, _obj, _data)
        this.addLogs(lSitemap.getLogs());
	}
    //===============================================
	onManager(_method, _obj, _data) {
		var lManager = new GManager();
		lManager.onModule(_method, _obj, _data)
        this.addLogs(lManager.getLogs());
	}
    //===============================================
	onQuery(_method, _obj, _data) {
		var lQuery = new GQuery();
		lQuery.onModule(_method, _obj, _data)
        this.addLogs(lQuery.getLogs());
	}
    //===============================================
	onTable(_method, _obj, _data) {
		var lTable = new GTable();
		lTable.onModule(_method, _obj, _data)
        this.addLogs(lTable.getLogs());
	}
    //===============================================
	onConfirm(_method, _obj, _data) {
		var lConfirm = new GConfirm();
		lConfirm.onModule(_method, _obj, _data)
        this.addLogs(lConfirm.getLogs());
	}
    //===============================================
	onInformation(_method, _obj, _data) {
		var lInformation = new GInformation();
		lInformation.onModule(_method, _obj, _data)
        this.addLogs(lInformation.getLogs());
	}
    //===============================================
}
//===============================================
