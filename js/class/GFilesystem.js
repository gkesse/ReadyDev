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
                m_dirRoot += "/code";
            },
            //===============================================
            selectFile: function(dir="") {
				var m_FilesystemMenu = document.getElementById("FilesystemMenu");
				var m_FilesystemList = document.getElementById("FilesystemList");
                var m_xmlhttp = new XMLHttpRequest();
                m_xmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        var m_data = this.responseText;
						var m_dataArr = JSON.parse(m_data);
						m_FilesystemMenu.innerHTML = m_dataArr["menu"];
						m_FilesystemList.innerHTML = m_dataArr["file"];
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
            openFile: function(obj, type) {
                var m_dirName = obj.innerHTML;
				var m_dirPath = m_dirCur + "/" + m_dirName;
				if(type != "dir") {
					this.openContent(m_dirPath, type);
					return;
				}
				this.selectFile(m_dirPath);
            },
            //===============================================
            openContent: function(file, type) {
				if(type == "bin") return;
				var m_FilesystemMenu = document.getElementById("FilesystemMenu");
				var m_FilesystemList = document.getElementById("FilesystemList");
                var m_xmlhttp = new XMLHttpRequest();
                m_xmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        var m_data = this.responseText;
						var m_dataArr = JSON.parse(m_data);
						m_FilesystemMenu.innerHTML = m_dataArr["menu"];
						m_FilesystemList.innerHTML = m_dataArr["content"];
						if(type != "img") {
							PR.prettyPrint();
						}
                    }
                }
                m_xmlhttp.open("POST", "/php/filesystem.php", true);
                m_xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                m_xmlhttp.send(
				"req=" + "GET_CONTENT" +
				"&root=" + m_dirRoot +
				"&file=" + file +
				"&type=" + type
				);
            },
            //===============================================
            openLink: function(obj) {
				var m_FilesystemLink = document.getElementsByClassName("FilesystemLink");
                var m_dirName = obj.innerText;
				var m_dirPath = "";
				for(var i = 0; i < m_FilesystemLink.length; i ++) {
					var m_linkItem = m_FilesystemLink[i];
					var m_linkName = m_linkItem.innerText;
					m_dirPath += "/" + m_linkName;
					if(m_linkName == m_dirName) break;
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
