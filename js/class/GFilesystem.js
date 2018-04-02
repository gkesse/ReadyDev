//===============================================
var GFilesystem = (function() {
    //===============================================
    var m_instance;
	var m_dirRoot;
	var m_dirCur;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            init: function() {
				this.getCurrentDir();
                this.selectFile();
            },
            //===============================================
            getCurrentDir: function() {
                m_dirRoot = window.location.pathname;
            },
            //===============================================
            selectFile: function(dir="") {
				var m_FileList = document.getElementById("FileList");
                var m_xmlhttp = new XMLHttpRequest();
                m_xmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        var m_data = this.responseText;
						var m_dataArr = JSON.parse(m_data);
						m_FileList.innerHTML = m_dataArr["dir"];
						m_dirCur = dir;
                    }
                }
                m_xmlhttp.open("POST", "/php/filesystem.php", true);
                m_xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                m_xmlhttp.send(
				"req=" + "GET_FILE" +
				"&root=" + m_dirRoot +
				"&dir=" + dir
				);
            },
            //===============================================
            openFile: function(obj, dir) {
				//var m_FileItem = document.getElementsByClassName("FileItem");
				//var m_FileEdit = document.getElementById("FileEdit");
                var m_dirName = obj.innerHTML;
				var m_dirPath = m_dirCur + "/" + m_dirName;
				if(!dir) {
					return;
				}
				this.selectFile(m_dirPath);
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
