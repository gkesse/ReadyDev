//===============================================
var GSitemap = (function() {
    //===============================================
    var m_instance;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            init: function() {
                var m_tabCtn = document.getElementsByClassName("SitemapTab");
				var m_obj = m_tabCtn[1];
				this.openSitemapTab(m_obj, "SitemapTab1");
            },
            //===============================================
            openSitemapTab: function(obj, name) {
				var m_tab = document.getElementsByClassName("SitemapTab");
				for(var i = 0; i < m_tab.length; i++) {
					var m_tabId = m_tab[i];
					m_tabId.className = m_tabId.className.replace(" bgrc", "");
				}
				obj.className += " bgrc";
				var m_tabCtn = document.getElementsByClassName("SitemapTabCtn");
				for(var i = 0; i < m_tabCtn.length; i++) {
					var m_tabCtnId = m_tabCtn[i];
					m_tabCtnId.style.display = "none";
				}
				var m_tabId = document.getElementById(name);
				m_tabId.style.display = "block";
            },
            //===============================================
            enumerateUrl: function() {
				var m_UrlMax = document.getElementById("UrlMax");
				var m_UrlSite = document.getElementById("UrlSite");
				var m_SitemapTotal = document.getElementById("SitemapTotal");
				m_UrlMax.innerHTML = "50.000";
				m_UrlSite.innerHTML = "50.000";
				m_SitemapTotal.innerHTML = "50.000";
            },
            //===============================================
            enumerateClear: function() {
				var m_UrlMax = document.getElementById("UrlMax");
				var m_UrlSite = document.getElementById("UrlSite");
				var m_SitemapTotal = document.getElementById("SitemapTotal");
				m_UrlMax.innerHTML = "";
				m_UrlSite.innerHTML = "";
				m_SitemapTotal.innerHTML = "";
            },
            //===============================================
            listUrl: function() {
				var m_ListUrl = document.getElementById("ListUrl");
				var m_data = "";
				m_data += "<ol class='pdlc'>";
				m_data += "<li>List URL</li>";
				m_data += "<li>List URL</li>";
				m_data += "<li>List URL</li>";
				m_data += "</ol>";
				m_ListUrl.innerHTML = m_data;
            },
            //===============================================
            listClear: function() {
				var m_ListUrl = document.getElementById("ListUrl");
				m_ListUrl.innerHTML = "";
            },
            //===============================================
            generateUrl: function() {
				var m_GenerateUrl = document.getElementById("GenerateUrl");
				m_GenerateUrl.innerHTML = "Hello World";
            },
            //===============================================
            generateClear: function() {
				var m_GenerateUrl = document.getElementById("GenerateUrl");
				m_GenerateUrl.innerHTML = "";
            },
            //===============================================
            visualizeUrl: function() {
				var m_VisualizeUrl = document.getElementById("VisualizeUrl");
				m_VisualizeUrl.innerHTML = "Hello World";
            },
            //===============================================
            visualizeClear: function() {
				var m_VisualizeUrl = document.getElementById("VisualizeUrl");
				m_VisualizeUrl.innerHTML = "";
            }
            //===============================================
        };
    }
    //===============================================
    return {
        Instance: function() {
            if (!m_instance) {
                m_instance = Container();
            }
            return m_instance;
        }
    };
    //===============================================
})();
//===============================================
GSitemap.Instance().init();
//===============================================
