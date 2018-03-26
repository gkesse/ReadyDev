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
            },
            //===============================================
            readFile: function() {
                var m_EditorEditId = document.getElementById("EditorEditId");
				var m_filename = "/Tutoriels/Cpp/Apprendre_le_Cpp/page/main.php";
                var m_xmlhttp = new XMLHttpRequest();
                m_xmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        m_EditorEditId.innerHTML = this.responseText;
                    }
                }
                m_xmlhttp.open("POST", "/php/editor.php", true);
                m_xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                m_xmlhttp.send("r="+"READ_FILE"+"&f="+m_filename);
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
var m_obj = m_tabCtn[2];
GEditor.Instance().selectTab(m_obj, "EditorTabEdit");
//===============================================
GEditor.Instance().readFile();
//===============================================
