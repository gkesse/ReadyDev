//===============================================
class GSitemap extends GObject {
    //===============================================
    constructor() {
		super();
		this.urlCount = 0;
		this.urlMax = 0;
		this.urlList = "";
		this.sitemapCount = 0;
		this.sitemapXml = [];
		this.msg = "";
    }
    //===============================================
	deserialize(data, code = "sitemap") {
		var lData = new GCode();
		lData.loadXml(data);
		this.urlCount = lData.getItem(code, "url_count");
		this.urlMax = lData.getItem(code, "url_max");
		this.urlList = lData.getItem(code, "url_list", true);
		this.sitemapCount = lData.getItem(code, "sitemap_count");
		this.sitemapsXml = lData.getItem(code, "sitemaps_xml", true);
		this.sitemapXml = lData.getListCD(code, "xml");
		this.msg = lData.getItem(code, "msg");
	}
    //===============================================
    onModule(method, obj, data) {
		if(method == "") {
			return false;
		}
    	//===============================================
		// method
    	//===============================================
		else if(method == "get_enum") {
			this.onGetEnum();
		}
		else if(method == "clear_enum") {
			this.onClearEnum();
		}
		else if(method == "get_list") {
			this.onGetList();
		}
		else if(method == "clear_list") {
			this.onClearList();
		}
		else if(method == "get_generate") {
			this.onGetGenerate();
		}
		else if(method == "clear_generate") {
			this.onClearGenerate();
		}
		else if(method == "get_visualize") {
			this.onGetVisualize();
		}
		else if(method == "clear_visualize") {
			this.onClearVisualize();
		}
		else if(method == "open_header") {
			this.onOpenHeader(obj, data);
		}
		else if(method == "open_sitemap") {
			this.onOpenSitemap(obj, data);
		}
    	//===============================================
    	// end
    	//===============================================
		else return false;
		return true;
	}
    //===============================================
    init() {
        var lTabCtn = document.getElementsByClassName("sitemap_tab");
        var lObj = lTabCtn[0];
        this.onOpenHeader(lObj, "sitemap_tab_0");
        lTabCtn = document.getElementsByClassName("sitemap_file_tab");
        lObj = lTabCtn[0];
        this.onOpenSitemap(lObj, "sitemap_file_tab0");
    }
    //===============================================
    onGetEnum() {
		var lAjax = new GAjax();
		lAjax.call("sitemap", "get_enum", "", this.onGetEnumCB);		
    }
    //===============================================
    onGetList() {
		var lAjax = new GAjax();
		lAjax.call("sitemap", "get_list", "", this.onGetListCB);		
    }
    //===============================================
    onGetGenerate() {
		var lAjax = new GAjax();
		lAjax.call("sitemap", "get_generate", "", this.onGetGenerateCB);		
    }
    //===============================================
    onGetVisualize() {
		var lAjax = new GAjax();
		lAjax.call("sitemap", "get_visualize", "", this.onGetVisualizeCB);		
    }
    //===============================================
    onGetEnumCB(data) {
	    var lUrlSite = document.getElementById("sitemap_url_site");
        var lUrlMax = document.getElementById("sitemap_url_max");
        var lsitemap_total = document.getElementById("sitemap_total");
		var lSitemap = new GSitemap();
		lSitemap.deserialize(data);
        lUrlSite.innerHTML = String(lSitemap.urlCount);
        lUrlMax.innerHTML = String(lSitemap.urlMax);
        lsitemap_total.innerHTML = String(lSitemap.sitemapCount);
    }
    //===============================================
    onGetListCB(data) {
        var lListUrl = document.getElementById("sitemap_list_url");
		var lSitemap = new GSitemap();
		lSitemap.deserialize(data);
        lListUrl.innerHTML = lSitemap.urlList;
    }
    //===============================================
    onGetGenerateCB(data) {
        var lGenerateUrl = document.getElementById("SitemapGenerateUrl");
		var lSitemap = new GSitemap();
		lSitemap.deserialize(data);
        lGenerateUrl.innerHTML = lSitemap.msg;
    }
    //===============================================
    onGetVisualizeCB(data) {
        var lVisualizeSite = document.getElementById("SitemapVisualizeSite");
        var lVisualizeUrl = document.getElementById("SitemapVisualizeUrl");
		var lSitemap = new GSitemap();
		lSitemap.deserialize(data);
        lVisualizeSite.innerHTML = lSitemap.sitemapXml[0];
        lVisualizeUrl.innerHTML = lSitemap.sitemapXml[1];
    }
    //===============================================
    onClearEnum() {
        var lUrlSite = document.getElementById("sitemap_url_site");
        var lUrlMax = document.getElementById("sitemap_url_max");
        var lsitemap_total = document.getElementById("sitemap_total");
        lUrlSite.innerHTML = "";
        lUrlMax.innerHTML = "";
        lsitemap_total.innerHTML = "";
    }
    //===============================================
    onClearList() {
        var lListUrl = document.getElementById("sitemap_list_url");
        lListUrl.innerHTML = "";
    }
    //===============================================
    onClearGenerate() {
        var lGenerateUrl = document.getElementById("SitemapGenerateUrl");
        lGenerateUrl.innerHTML = "";
    }
    //===============================================
    onClearVisualize() {
        var lVisualizeSite = document.getElementById("SitemapVisualizeSite");
        var lVisualizeUrl = document.getElementById("SitemapVisualizeUrl");
        lVisualizeSite.innerHTML = "";
        lVisualizeUrl.innerHTML = "";
    }
    //===============================================
    onOpenHeader(obj, name) {
		if(obj === undefined) return;
        var lTab = document.getElementsByClassName("sitemap_tab_");
        for(var i = 0; i < lTab.length; i++) {
            var lTabId = lTab[i];
            lTabId.className = lTabId.className.replace(" Active", "");
        }
        obj.className += " Active";
        var lTabCtn = document.getElementsByClassName("sitemap_tab_ctn");
        for(var i = 0; i < lTabCtn.length; i++) {
            var lTabCtnId = lTabCtn[i];
            lTabCtnId.style.display = "none";
        }
        var lTabId = document.getElementById(name);
        lTabId.style.display = "block";
	}
    //===============================================
    onOpenSitemap(obj, name) {
		if(obj === undefined) return;
        var lTab = document.getElementsByClassName("sitemap_file_tab");
        for(var i = 0; i < lTab.length; i++) {
            var lTabId = lTab[i];
            lTabId.className = lTabId.className.replace(" Active", "");
        }
        obj.className += " Active";
        var lTabCtn = document.getElementsByClassName("sitemap_file_tabCtn");
        for(var i = 0; i < lTabCtn.length; i++) {
            var lTabCtnId = lTabCtn[i];
            lTabCtnId.style.display = "none";
        }
        var lTabId = document.getElementById(name);
        lTabId.style.display = "block";
	}
    //===============================================
}
//===============================================
var lSitemap = new GSitemap();
lSitemap.init();
//===============================================
