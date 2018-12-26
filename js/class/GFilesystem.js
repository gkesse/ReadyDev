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
				var lFilesystemMenu = document.getElementById("FilesystemMenu");
				var lFilesystemList = document.getElementById("FilesystemList");
                var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        var lData = this.responseText;
						var lDataArr = JSON.parse(lData);
						lFilesystemMenu.innerHTML = lDataArr["menu"];
						lFilesystemList.innerHTML = lDataArr["file"];
						m_dirCur = dir;
                    }
                }
                lXmlhttp.open("POST", "/php/req/filesystem.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
				"req=" + "GET_FILE" +
				"&root=" + m_dirRoot +
				"&dir=" + dir
				);
            },
            //===============================================
            openFile: function(obj, type, lang) {
                var lDirName = obj.innerHTML;
				var lDirPath = m_dirCur + "/" + lDirName;
				if(type != "dir") {
					this.openContent(lDirPath, type, lang);
					return;
				}
				this.selectFile(lDirPath);
            },
            //===============================================
            openContent: function(file, type, lang) {
				if(type == "bin") return;
				var lFilesystemMenu = document.getElementById("FilesystemMenu");
				var lFilesystemList = document.getElementById("FilesystemList");
                var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        var lData = this.responseText;
						var lDataArr = JSON.parse(lData);
						lFilesystemMenu.innerHTML = lDataArr["menu"];
						lFilesystemList.innerHTML = lDataArr["content"];
                        var lNode = document.getElementById("AceCode");
                        GAce.Instance().setSyntaxNode(lNode);
                    }
                }
                lXmlhttp.open("POST", "/php/req/filesystem.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
				"req=" + "GET_CONTENT" +
				"&root=" + m_dirRoot +
				"&file=" + file +
				"&type=" + type +
				"&lang=" + lang
				);
            },
            //===============================================
            openLink: function(obj) {
				var lFilesystemLink = document.getElementsByClassName("FilesystemLink");
                var lDirName = obj.innerText;
				var lDirPath = "";
				for(var i = 0; i < lFilesystemLink.length; i ++) {
					var m_linkItem = lFilesystemLink[i];
					var m_linkName = m_linkItem.innerText;
					lDirPath += "/" + m_linkName;
					if(m_linkName == lDirName) break;
				}
				this.selectFile(lDirPath);
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
GFilesystem.Instance().init();
//===============================================
