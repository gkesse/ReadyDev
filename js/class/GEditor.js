//===============================================
var GEditor = (function() {
    //===============================================
    var m_instance;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            selectTab: function(obj, name) {
				var m_tab = document.getElementsByClassName("EditorTab");
				for(var i = 0; i < m_tab.length; i++) {
					var m_tabId = m_tab[i];
					m_tabId.className = m_tabId.className.replace(" bgrc", "");
				}
				obj.className += " bgrc";
				var m_tabCtn = document.getElementsByClassName("EditorTabCtn");
				for(var i = 0; i < m_tabCtn.length; i++) {
					var m_tabCtnId = m_tabCtn[i];
					m_tabCtnId.style.display = "none";
				}
				var m_tabId = document.getElementById(name);
				m_tabId.style.display = "block";
            }
            //===============================================
        };
    }
    //===============================================
    return {
        Instance: function() {
            if(!m_instance) {
                m_instance = Container();
            }
            return m_instance;
        }
    };
    //===============================================
})();
//===============================================
var m_tabCtn = document.getElementsByClassName("EditorTab");
var m_obj = m_tabCtn[0];
GEditor.Instance().selectTab(m_obj, "EditorTab0");
//===============================================
