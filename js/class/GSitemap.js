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
				var m_obj = m_tabCtn[0];
				this.openSitemapTab(m_obj, "SitemapTab0");
                m_tabCtn = document.getElementsByClassName("SitemapFileTab");
				m_obj = m_tabCtn[0];
				this.openSitemapFileTab(m_obj, "SitemapFileTab0");
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
            openSitemapFileTab: function(obj, name) {
				var m_tab = document.getElementsByClassName("SitemapFileTab");
				for(var i = 0; i < m_tab.length; i++) {
					var m_tabId = m_tab[i];
					m_tabId.className = m_tabId.className.replace(" bgrc", "");
				}
				obj.className += " bgrc";
				var m_tabCtn = document.getElementsByClassName("SitemapFileTabCtn");
				for(var i = 0; i < m_tabCtn.length; i++) {
					var m_tabCtnId = m_tabCtn[i];
					m_tabCtnId.style.display = "none";
				}
				var m_tabId = document.getElementById(name);
				m_tabId.style.display = "block";
            },
            //===============================================
            enumerateUrl: function() {
				var m_UrlSite = document.getElementById("UrlSite");
				var m_UrlMax = document.getElementById("UrlMax");
				var m_SitemapTotal = document.getElementById("SitemapTotal");
				var m_xmlhttp = new XMLHttpRequest();
                m_xmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
						var m_res = this.responseText;
						var m_data = JSON.parse(m_res);
						m_UrlSite.innerHTML = String(m_data["url_number"]);
						m_UrlMax.innerHTML = String(50000);
						m_SitemapTotal.innerHTML = String(m_data["sitemap_number"]);
                    }
                }
                m_xmlhttp.open("POST", "/php/sitemap.php", true);
                m_xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                m_xmlhttp.send(
				"req=" + "ENUMERATE"
				);
            },
            //===============================================
            enumerateClear: function() {
				var m_UrlSite = document.getElementById("UrlSite");
				var m_UrlMax = document.getElementById("UrlMax");
				var m_SitemapTotal = document.getElementById("SitemapTotal");
				m_UrlSite.innerHTML = "";
				m_UrlMax.innerHTML = "";
				m_SitemapTotal.innerHTML = "";
            },
            //===============================================
            listUrl: function() {
				var m_ListUrl = document.getElementById("ListUrl");
				var m_xmlhttp = new XMLHttpRequest();
                m_xmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
						var m_data = this.responseText;
						m_ListUrl.innerHTML = m_data;
                    }
                }
                m_xmlhttp.open("POST", "/php/sitemap.php", true);
                m_xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                m_xmlhttp.send(
				"req=" + "LIST"
				);
            },
            //===============================================
            listClear: function() {
				var m_ListUrl = document.getElementById("ListUrl");
				m_ListUrl.innerHTML = "";
            },
            //===============================================
            generateUrl: function() {
				var m_GenerateUrl = document.getElementById("GenerateUrl");
				var m_xmlhttp = new XMLHttpRequest();
                m_xmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
						var m_res = this.responseText;
						m_GenerateUrl.innerHTML = m_res;
                    }
                }
                m_xmlhttp.open("POST", "/php/sitemap.php", true);
                m_xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                m_xmlhttp.send(
				"req=" + "GENERATE"
				);
            },
            //===============================================
            generateClear: function() {
				var m_GenerateUrl = document.getElementById("GenerateUrl");
				m_GenerateUrl.innerHTML = "";
            },
            //===============================================
            visualizeUrl: function() {
				var m_VisualizeSite = document.getElementById("VisualizeSite");
				var m_VisualizeUrl = document.getElementById("VisualizeUrl");
				var m_xmlhttp = new XMLHttpRequest();
                m_xmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
						var m_data = this.responseText;
						var m_dataArr = JSON.parse(m_data);
						m_VisualizeSite.innerHTML = m_dataArr["sitemaps"];
						m_VisualizeUrl.innerHTML = m_dataArr["sitemap"];
						PR.prettyPrint();
                    }
                }
                m_xmlhttp.open("POST", "/php/sitemap.php", true);
                m_xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                m_xmlhttp.send(
				"req=" + "VISUALIZE"
				);
            },
            //===============================================
            visualizeClear: function() {
				var m_VisualizeSite = document.getElementById("VisualizeSite");
				var m_VisualizeUrl = document.getElementById("VisualizeUrl");
				m_VisualizeSite.innerHTML = "";
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
