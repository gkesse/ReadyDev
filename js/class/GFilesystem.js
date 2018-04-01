//===============================================
var GFilesystem = (function() {
    //===============================================
    var m_instance;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            init: function() {
                this.selectFile();
            },
            //===============================================
            getCurrentDir: function() {
                var m_dirPath = window.location.pathname;
				return m_dirPath;
            },
            //===============================================
            selectFile: function() {
				var m_Filesystem = document.getElementById("Filesystem");
				var m_dirPath = this.getCurrentDir();
                var m_xmlhttp = new XMLHttpRequest();
                m_xmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        var m_data = this.responseText;
						var m_dataArr = JSON.parse(m_data);
						m_Filesystem.innerHTML = m_dataArr["dir"];
                    }
                }
                m_xmlhttp.open("POST", "/php/filesystem.php", true);
                m_xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                m_xmlhttp.send(
				"req=" + "GET_FILE" +
				"&dir=" + m_dirPath
				);
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
GFilesystem.Instance().init();
//===============================================
