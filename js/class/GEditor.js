//===============================================
var GEditor = (function() {
    //===============================================
    var m_instance;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            init: function() {
                var m_tabCtn = document.getElementsByClassName("EditorTab");
				var m_FileEdit = document.getElementById("FileEdit");
				var m_obj = m_tabCtn[2];
				var m_EditorDir = GConfig.Instance().getData("EditorDir");
				var m_EditorFile = GConfig.Instance().getData("EditorFile");
				this.openEditorTab(m_obj, "EditorTab2");
				this.readFile();
				this.selectFile(m_EditorDir);
				m_FileEdit.innerHTML = m_EditorFile;
			},
            //===============================================
            editLink: function(arg) {
				if(arg == "") return;
				var m_selection = document.getSelection();
				if(m_selection == "") return;
                var m_html = '';
                m_html += '<a class="hvra" ';
                m_html += 'href="'+arg+'">';
                m_html += m_selection;
                m_html += '</a>';
                document.execCommand("insertHTML", false, m_html);
            },
            //===============================================
            editImage: function(arg) {
                var m_html = '';
                m_html += '<div class="ovfa">';
                m_html += '<img src="';
                m_html += arg;
                m_html += '" alt="'+arg+'" />';
                m_html += '</div>';
                document.execCommand("insertHTML", false, m_html);
            },
            //===============================================
            editReadyStyle: function(arg) {
                if(arg == "") return;
                var m_selection = document.getSelection();
                var m_startNode = m_selection.anchorNode;
                var m_data = m_startNode.data;
                var m_range = document.createRange();
                                                                
                switch(arg) {
                case 'Title1':
                    if(!m_data) return;
                    var m_length = m_data.length;
                    var m_parentNode = m_startNode.parentNode;
                    if(m_parentNode.nodeName == "A") {
                        m_parentNode = m_parentNode.parentNode;
                        if(m_parentNode.nodeName == "H1") {
                            if(m_parentNode.className.includes("Title1")) {
                                m_parentNode = m_parentNode.parentNode.parentNode;
                                m_range.selectNode(m_parentNode);
                                m_selection.addRange(m_range);
                                document.execCommand("insertHTML", false, m_data);
                                break;
                            }
                        }
                    }
                    m_range.setStart(m_startNode, 0);
                    m_range.setEnd(m_startNode, m_length);
                    m_selection.addRange(m_range);
                    var m_html = '';
                    m_html += '<div class="pgCt00">';
                    m_html += '<div class="bgra">';
                    m_html += '<h1 class="bgra pgCt20 txac Title1" id="'+m_data+'">';
                    m_html += '<a class="clrb" href="#Sommaire">';
                    m_html += m_data;
                    m_html += '</a>';
                    m_html += '</h1>';
                    m_html += '<div class="txal pgCt10">';
                    m_html += 'Ajouter un texte ici...';
                    m_html += '</div>';
                    m_html += '</div>';
                    m_html += '</div>';
                    document.execCommand("insertHTML", false, m_html);
                    break;
                //===============================================
                case 'Title2':
                    if(!m_data) return;
                    var m_length = m_data.length;
                    var m_parentNode = m_startNode.parentNode;
                    if(m_parentNode.nodeName == "A") {
                        m_parentNode = m_parentNode.parentNode;
                        if(m_parentNode.nodeName == "H2") {
                            if(m_parentNode.className.includes("Title2")) {
                                m_range.selectNode(m_parentNode);
                                m_selection.addRange(m_range);
                                document.execCommand("insertHTML", false, m_data);
                                break;
                            }
                        }
                    }
                    m_parentNode = m_startNode;
                    var m_title = m_parentNode.parentNode.previousSibling.firstChild.innerText;
                    m_range.setStart(m_startNode, 0);
                    m_range.setEnd(m_startNode, m_length);
                    m_selection.addRange(m_range);
                    var m_html = '';
                    m_html += '<h2 class="ftwn Title2" id="'+m_data+'">';
                    m_html += '<a class="bgra dibm ftfb ftsg clra pgCt10" href="#'+m_title+'">';
                    m_html += m_data;
                    m_html += '</a>';
                    m_html += '</h2>';
                    document.execCommand("insertHTML", false, m_html);
                    break;
                //===============================================
                case 'Title3':
                    if(!m_data) return;
                    var m_length = m_data.length;
                    var m_parentNode = m_startNode.parentNode;
                    if(m_parentNode.nodeName == "B") {
                        m_range.selectNode(m_parentNode);
                        m_selection.addRange(m_range);
                        document.execCommand("insertHTML", false, m_data);
                        break;
                    }
                    m_range.setStart(m_startNode, 0);
                    m_range.setEnd(m_startNode, m_length);
                    m_selection.addRange(m_range);
                    var m_html = '';
                    m_html += '<b>';
                    m_html += m_data;
                    m_html += '</b>';
                    document.execCommand("insertHTML", false, m_html);
                    break;
                //===============================================
                case 'Summary1':
                    var m_parentNode = m_startNode;    
                    if(m_data) {
                        for(var m_parentCount = 0; m_parentCount < 3; m_parentCount++) {
                            if(!m_parentNode.parentNode) break;
                            m_parentNode = m_parentNode.parentNode;
                        }
                        if(m_parentCount == 3) {
                            if(m_parentNode.nodeName == "DIV") {
                                if(m_parentNode.className) {
                                    if(m_parentNode.className.includes("Summary1")) {
                                        m_range.selectNode(m_parentNode);
                                        m_selection.addRange(m_range);
                                        document.execCommand("insertHTML", false, "");
                                    }
                                }
                            }
                        }
                        break;
                    }
                    m_parentNode = m_parentNode.parentNode.parentNode.parentNode;
                    var m_childNodes = m_parentNode.childNodes;
                    var m_childTitles = Array.from(m_childNodes).filter(function(n) {
                        if(n.firstChild)  {
                            if(n.firstChild.firstChild)  {
                                if(n.firstChild.firstChild.nodeName == "H1") return true;
                            }
                        }
                        return false;
                    });
                    if(!m_childTitles.length) break;
                    var m_html = '';
                    m_html += '<div class="dibm Summary1">';
                    for(var i = 1; i < m_childTitles.length; i++) {
                        var m_child = m_childTitles[i];
                        var m_title = m_child.firstChild.firstChild.innerText;
                        m_html += '<div class="pdlb">';
                        m_html += '<span class="fa fa-book clrg pdra"></span>';
                        m_html += '<a class="hvra clrg" href="#'+m_title+'">';
                        m_html += m_title;
                        m_html += '</a>';
                        m_html += '</div>';
                    }
                    m_html += '</div>';
                    document.execCommand("insertHTML", false, m_html);
                    break;
                //===============================================
                case 'Summary2':
                    var m_parentNode = m_startNode;    
                    if(m_data) {
                        for(var m_parentCount = 0; m_parentCount < 3; m_parentCount++) {
                            if(!m_parentNode.parentNode) break;
                            m_parentNode = m_parentNode.parentNode;
                        }
                        if(m_parentCount == 3) {
                            if(m_parentNode.nodeName == "DIV") {
                                if(m_parentNode.className) {
                                    if(m_parentNode.className.includes("Summary2")) {
                                        m_range.selectNode(m_parentNode);
                                        m_selection.addRange(m_range);
                                        document.execCommand("insertHTML", false, "");
                                    }
                                }
                            }
                        }
                        break;
                    }
                    var m_childNodes = m_parentNode.childNodes;
                    var m_childTitles = Array.from(m_childNodes).filter(function(n) {
                        if(n.nodeName == "H2") return true;
                        return false;
                    });
                    if(!m_childTitles.length) break;
                    var m_html = '';
                    m_html += '<div class="dibm Summary2">';
                    for(var i = 0; i < m_childTitles.length; i++) {
                        var m_child = m_childTitles[i];
                        var m_title = m_child.firstChild.innerText
                        m_html += '<div class="pdlb">';
                        m_html += '<span class="fa fa-book clrg pdra"></span>';
                        m_html += '<a class="hvra clrg" href="#'+m_title+'">';
                        m_html += m_title;
                        m_html += '</a>';
                        m_html += '</div>';
                    }
                    m_html += '</div>';
                    document.execCommand("insertHTML", false, m_html);
                    break;
                //===============================================
                case 'Summary3':
					var m_arg = prompt("Quelle est l'adresse ?");
					var m_argArr = m_arg.split(";");
					var m_filename = m_argArr[0];
					var m_summary = m_argArr[1];
                    var m_valid = true;
                    m_valid &= (typeof(m_filename) == "undefined");
                    m_valid &= (typeof(m_summary) == "undefined");
					if(m_valid) return;
					var m_xmlhttp = new XMLHttpRequest();
					m_xmlhttp.onreadystatechange = function() {
						if(this.readyState == 4 && this.status == 200) {
							var m_data = this.responseText;
							document.execCommand("insertHTML", false, m_data);
						}
					}
					m_xmlhttp.open("POST", "/php/editor.php", true);
					m_xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
					m_xmlhttp.send(
					"req=" + "SUMMARY" +
					"&file=" + m_filename +
					"&summary=" + m_summary
					);
                    break;
                //===============================================
                case 'LineBreak1':
                    var m_parentNode = m_startNode;
                    if(!m_data) {
                        document.execCommand("insertHTML", false, "<br>");
                        break;
                    }
                    
                    while(1) {
                        if(m_parentNode.nodeName == "BR") break;
                        if(m_parentNode.nextSibling) {
                            m_parentNode = m_parentNode.nextSibling;
                        }
                        else {
                            m_parentNode = m_parentNode.parentNode; 
                            m_startNode = m_parentNode;
                        }
                    }
                    var m_br = document.createElement("BR");
                    m_parentNode.parentNode.insertBefore(m_br, m_startNode.nextSibling);
                    break;
                //===============================================
                case 'LineBreak2':
                    var m_parentNode = m_startNode;
                    if(!m_data) {
                        document.execCommand("insertHTML", false, "<br>");
                        break;
                    }
                    while(1) {
                        if(m_parentNode.nodeName == "BR") break;
                        if(m_parentNode.nextSibling) {
                            m_parentNode = m_parentNode.nextSibling;
                        }
                        else {
                            m_parentNode = m_parentNode.parentNode; 
                            m_startNode = m_parentNode;
                        }
                    }
                    var m_br = document.createElement("BR");
                    m_parentNode.parentNode.insertBefore(m_br, m_startNode);
                    break;
                //===============================================
                case 'LineBreak3':
                    var m_parentNode = m_startNode;
                    
                    while(1) {
                        if(m_parentNode.className) {
                            if(m_parentNode.className.includes("EditorPage")) break;
                        }
                        m_startNode = m_parentNode;
                        m_parentNode = m_parentNode.parentNode;
                    }
                    var m_br = document.createElement("BR");
                    m_parentNode.insertBefore(m_br, m_startNode.nextSibling);                
                    break;
                //===============================================
                case 'LineBreak4':
                    var m_parentNode = m_startNode;
                    
                    while(1) {
                        if(m_parentNode.className) {
                            if(m_parentNode.className.includes("EditorPage")) break;
                        }
                        m_startNode = m_parentNode;
                        m_parentNode = m_parentNode.parentNode;
                    }
                    var m_br = document.createElement("BR");
                    m_parentNode.insertBefore(m_br, m_startNode);                
                    break;
                //===============================================
                case 'Shift1':
                    var m_parentNode = m_startNode;
                    var m_position = this.searchNode(m_parentNode, "ShiftB");
                    if(m_position == -1) {
                        if(m_data) {
                            var m_length = m_data.length;
                            m_range.setStart(m_parentNode, 0);
                            m_range.setEnd(m_parentNode, m_length);
                            m_selection.addRange(m_range);
                        }
                        else {
                            m_data = 'Ajouter un texte...';
                        }
                        var m_html = '';
                        m_html += '<div class="dibm Shift">';
                        m_html += '<div class="dibm pdld ShiftB">';
                        m_html += m_data;
                        m_html += '</div>';
                        m_html += '</div>';
                        document.execCommand("insertHTML", false, m_html);                
                    }
                    else {
                        for(var i = 0; i < m_position; i++) {
                            m_parentNode = m_parentNode.parentNode;
                        }
                        var m_childNode = m_parentNode;
                        m_parentNode = m_parentNode.parentNode;
                        var m_cloneNode = m_parentNode.cloneNode(true);
                        while(m_childNode.firstChild) {
                            m_childNode.removeChild(m_childNode.firstChild);
                        }
                        m_childNode.appendChild(m_cloneNode);
                    }
                    break;
                //===============================================
                case 'Shift2':
                    var m_parentNode = m_startNode;
                    var m_position = this.searchNode(m_parentNode, "ShiftB");
                    if(m_position == -1) break;
                    for(var i = 0; i < m_position; i++) {
                        m_parentNode = m_parentNode.parentNode;
                    }
                    var m_contentHTML = m_parentNode.innerHTML;
                    m_parentNode = m_parentNode.parentNode;
                    var m_childNode = m_parentNode;
                    m_range.selectNode(m_childNode);
                    m_selection.addRange(m_range);
                    document.execCommand("insertHTML", false, m_contentHTML);
                    break;
                //===============================================
                case 'Code1':
                    if(m_data) {
                        m_range = m_selection.getRangeAt(0);
                        var m_fragNode = m_range.extractContents();
                        var m_divNode = document.createElement('DIV');
                        m_divNode.appendChild(m_fragNode);
                        m_data = m_divNode.innerHTML;
                        m_data = this.encodeHtml(m_data, false);
                    }
                    else {
                        m_data = 'Ajouter un code...';
                    }
                    var m_html = '';
                    m_html += '<div class="Code1">';
                    m_html += '<pre><xmp class="ovfa prettyprint linenums">';
                    m_html += m_data;
                    m_html += '</xmp></pre>';
                    m_html += '</div>';
                    document.execCommand("insertHTML", false, m_html);
                    break;
                //===============================================
                case 'Code2':
                    var m_html = '';
                    m_html += '<b>ReadyDev</b> met à votre disposition,<br>';
                    m_html += 'l\'ensemble des codes sources abordés dans ce tutoriel.';
                    m_html += '<br><br>';
                    m_html += '<div class="brda Code2">';
                    m_html += '<div class="bgra txal pgCt00" id="FilesystemMenu">...</div>';
                    m_html += '<div class="txal ovfa mxha" id="FilesystemList">...</div>';
                    m_html += '</div>';
                    m_html += '<script src="/js/class/GFilesystem.js"></script>';
                    m_html += '<script src="/js/filesystem.js"></script>';
                    document.execCommand("insertHTML", false, m_html);
                    break;
                }
            },
            //===============================================
            encodeHtml: function(data, type=true) {
                var m_entityMap = {
                    '&': '&amp;',
                    '<': '&lt;',
                    '>': '&gt;',
                    '"': '&quot;',
                    "'": '&#39;',
                    '/': '&#x2F;',
                    '`': '&#x60;',
                    '=': '&#x3D;',
                    '\n': '<br>'
                };
                for(key in m_entityMap) {
                    if(type) {
                        var m_val = m_entityMap[key];
                        var m_reg = new RegExp(key, 'g');
                        data = data.replace(m_reg, m_val);
                    }
                    else {
                        var m_val = m_entityMap[key];
                        var m_reg = new RegExp(m_val, 'g');
                        data = data.replace(m_reg, key);
                    }
                }
                return data;
            },
            //===============================================
            searchNode: function(startNode, className) {
                var m_parentNode = startNode;
                var m_position = 0;
                while(1) {
                    if(m_parentNode.className) {
                        if(m_parentNode.className.includes(className)) break;
                        if(m_parentNode.className.includes("EditorPage")) {
                            m_position = -1;
                            break;
                        }
                    }
                    if(m_parentNode.parentNode) {
                        m_parentNode = m_parentNode.parentNode;
                        m_position++;
                    }
                    else break;
                }
                return m_position;
            },
            //===============================================
            pasteText: function(e) {
                e.preventDefault();
                var m_clipboardData = e.clipboardData || window.clipboardData;
                var m_data = m_clipboardData.getData("text");
                m_data = this.encodeHtml(m_data);
                document.execCommand("insertHTML", false, m_data);
            },
            //===============================================
            viewPage: function() {
                var m_EditorView = document.getElementById("EditorView");
                var m_EditorEdit = document.getElementById("EditorEdit");
                m_EditorView.innerHTML = m_EditorEdit.innerHTML;

            },
            //===============================================
            viewCode: function() {
                var m_EditorHTML = document.getElementById("EditorHTML");
                var m_EditorEdit = document.getElementById("EditorEdit");
                m_EditorHTML.value = m_EditorEdit.innerHTML;
            },
            //===============================================
            openEditorTab: function(obj, name) {
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
                var m_EditorEdit = document.getElementById("EditorEdit");
				var m_filename = GConfig.Instance().getData("EditorFile");
				if(m_filename == "") return;
                var m_xmlhttp = new XMLHttpRequest();
                m_xmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        m_EditorEdit.innerHTML = this.responseText;
                    }
                }
                m_xmlhttp.open("POST", "/php/editor.php", true);
                m_xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                m_xmlhttp.send(
				"req=" + "READ_FILE" +
				"&file=" + m_filename
				);
            },
            //===============================================
            saveFile: function() {
                var m_EditorEdit = document.getElementById("EditorEdit");
				var m_filename = GConfig.Instance().getData("EditorFile");
				if(m_filename == "") return;
                var m_data = encodeURIComponent(m_EditorEdit.innerHTML);
                var m_xmlhttp = new XMLHttpRequest();
                m_xmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {

                    }
                }
                m_xmlhttp.open("POST", "/php/editor.php", true);
                m_xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                m_xmlhttp.send(
				"req=" + "SAVE_FILE" +
				"&file=" + m_filename +
				"&data=" + m_data
				);
            },
            //===============================================
            saveFileText: function() {
                var m_res = confirm("Êtes vous sûr de vouloir enregistrer les modifications ?");
                if(!m_res) return;
                var m_EditorHTML = document.getElementById("EditorHTML");
                var m_EditorEdit = document.getElementById("EditorEdit");
				var m_filename = GConfig.Instance().getData("EditorFile");
				if(m_filename == "") return;
                m_EditorEdit.innerHTML = m_EditorHTML.value;
                var m_data = encodeURIComponent(m_EditorHTML.value);
                var m_xmlhttp = new XMLHttpRequest();
                m_xmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {

                    }
                }
                m_xmlhttp.open("POST", "/php/editor.php", true);
                m_xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                m_xmlhttp.send(
				"req=" + "SAVE_FILE" + 
				"&file=" + m_filename + 
				"&data="+m_data
				);
            },
            //===============================================
            saveFileKey: function(e) {
                if (e.code == 'KeyS' && (e.ctrlKey || e.metaKey)) {
                    e.preventDefault();
                    saveFile();
                }
            },
            //===============================================
            saveFileTextKey: function(e) {
                if (e.code == 'KeyS' && (e.ctrlKey || e.metaKey)) {
                    e.preventDefault();
                    saveFileText();
                }
            },
            //===============================================
            selectFile: function(dir="") {
                var m_EditorFile = document.getElementById("EditorFile");
                var m_EditorMenu = document.getElementById("EditorMenu");
				var m_menuHtml = m_EditorMenu.innerHTML;
				var m_FileEdit = GConfig.Instance().getData("EditorFile");
				if(!m_FileEdit) m_FileEdit = "";
                var m_xmlhttp = new XMLHttpRequest();
                m_xmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
						var m_data = this.responseText;
						var m_dataArr = JSON.parse(m_data);
						if(!m_data) return;
						m_EditorFile.innerHTML = m_dataArr["file"];
						m_EditorMenu.innerHTML = m_dataArr["menu"];
						var m_EditorDir = m_dataArr["dir"];
						GConfig.Instance().setData("EditorDir", m_EditorDir);
                    }
                }
                m_xmlhttp.open("POST", "/php/editor.php", true);
                m_xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                m_xmlhttp.send(
				"req=" + "GET_FILE" + 
				"&dir=" + dir +
				"&file=" + m_FileEdit
				);
            },
            //===============================================
            openFile: function(obj, dir) {
				var m_FileList = document.getElementsByClassName("FileList");
				var m_FileEdit = document.getElementById("FileEdit");
                var m_dirName = obj.innerHTML;
				var m_EditorDir = GConfig.Instance().getData("EditorDir");
				var m_dirPath = m_EditorDir + "/" + m_dirName;
				var m_objParent = obj.parentNode;
				for(var i = 0; i < m_FileList.length; i++) {
					var m_node = m_FileList[i];
					m_node.className = m_node.className.replace(" bgrc", "");
				}
				if(!dir) {
					var m_res = confirm("Êtes-vous sûr de vouloir sélectionner ce fichier ?");
					if(!m_res) return;
					m_objParent.className += " bgrc";
					var m_EditorFile = m_dirPath;
					m_EditorFile = m_EditorFile.replace(/\\/gi, "/");
					m_FileEdit.innerHTML = m_EditorFile;
					GConfig.Instance().setData("EditorFile", m_EditorFile);
					this.readFile();
					return;
				}
				this.selectFile(m_dirPath);
            },
            //===============================================
            openLink: function(obj) {
				var m_FileLink = document.getElementsByClassName("FileLink");
                var m_dirName = obj.innerText;
				var m_filename = "";
				for(var i = 0; i < m_FileLink.length; i ++) {
					var m_linkItem = m_FileLink[i];
					var m_linkName = m_linkItem.innerText;
					m_filename += "/" + m_linkName;
					if(m_linkName == m_dirName) break;
				}
				this.selectFile(m_filename);
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
GEditor.Instance().init();
//===============================================