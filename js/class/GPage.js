//===============================================
class GPage extends GAjax {
    //===============================================
    constructor() {
        super();
        this.m_name = "home"
        this.m_url = "home";
        this.m_title = "Accueil";
        this.m_path = "/data/cache/page/home.php";
        this.m_map = [];
    }
    //===============================================
	serialize(_code = "page") {
		var lDom = new GCode();
		lDom.createDoc();
		lDom.addData(_code, "name", this.m_name);
		lDom.addData(_code, "url", this.m_url);
		lDom.addData(_code, "title", this.m_title);
		lDom.addData(_code, "path", this.m_path);
		lDom.addMap(_code, this.m_map);
		return lDom.toString();
	}
    //===============================================
	deserialize(_data, _code = "page") {
		var lDom = new GCode();
		lDom.loadXml(_data);
		this.m_name = lDom.getItem(_code, "name");
		this.m_url = lDom.getItem(_code, "url");
		this.m_title = lDom.getItem(_code, "title");
		this.m_path = lDom.getItem(_code, "path");
        lDom.getMap(_code, this.m_map, this);
	}
    //===============================================
    clone() {
        var lObj = new GPage;
        lObj.setPage(this);
        return lObj;
    }
    //===============================================
    setPage(_obj) {
		this.m_name = _obj.m_name;
		this.m_url = _obj.m_url;
		this.m_title = _obj.m_title;
		this.m_path = _obj.m_path;
    }
    //===============================================
    savePage() {
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callLocal("page", "save_page", lData, this.onPage);        
    }
    //===============================================
    searchPage() {
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callLocal("page", "search_page", lData, this.onPage);        
    }
    //===============================================
    deletePage() {
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callLocal("page", "delete_page", lData, this.onPage);        
    }
    //===============================================
    newPage() {
        this.addLog("newPage");
    }
    //===============================================
    onPage(_data) {
        var lPage = new GPage();
        lPage.deserialize(_data);
    }
    //===============================================
}
//===============================================
