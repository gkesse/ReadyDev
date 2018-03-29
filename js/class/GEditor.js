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
				var m_obj = m_tabCtn[2];
				this.openEditorTab(m_obj, "EditorTab2");
				this.readFile();
            },
            //===============================================
            editCode: function() {
                var m_selection = '';
                m_selection += '<pre><xmp class="ovfa prettyprint linenums">';
                m_selection += document.getSelection();
                m_selection += '</xmp></pre>';
                document.execCommand("insertHTML",false,m_selection);
            },
            //===============================================
            editImage: function(arg) {
                var m_command = '';
                m_command += '<div class="txal ovfa">';
                m_command += '<img src="';
                m_command += arg;
                m_command += '" alt="Image.png" />';
                m_command += '</div>';
                document.execCommand("insertHTML", false, m_command);
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
                    var m_command = '';
                    m_command += '<div class="pgCt00">';
                    m_command += '<div class="bgra">';
                    m_command += '<h1 class="bgra pgCt20 txac Title1" id="'+m_data+'">';
                    m_command += '<a class="clrb" href="#Sommaire">';
                    m_command += m_data;
                    m_command += '</a>';
                    m_command += '</h1>';
                    m_command += '<div class="txal pgCt10">';
                    m_command += 'Ajouter un texte ici...';
                    m_command += '</div>';
                    m_command += '</div>';
                    m_command += '</div>';
                    document.execCommand("insertHTML", false, m_command);
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
                    var m_command = '';
                    m_command += '<h2 class="ftwn Title2" id="'+m_data+'">';
                    m_command += '<a class="bgra dibm ftfb ftsg clra pgCt10" href="#'+m_title+'">';
                    m_command += m_data;
                    m_command += '</a>';
                    m_command += '</h2>';
                    document.execCommand("insertHTML", false, m_command);
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
                    var m_command = '';
                    m_command += '<b>';
                    m_command += m_data;
                    m_command += '</b>';
                    document.execCommand("insertHTML", false, m_command);
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
                    var m_command = '';
                    m_command += '<div class="dibm Summary1">';
                    for(var i = 1; i < m_childTitles.length; i++) {
                        var m_child = m_childTitles[i];
                        var m_title = m_child.firstChild.firstChild.innerText;
                        m_command += '<div class="pdlb">';
                        m_command += '<span class="fa fa-book clrg pdra"></span>';
                        m_command += '<a class="clrg" href="#'+m_title+'">';
                        m_command += m_title;
                        m_command += '</a>';
                        m_command += '</div>';
                    }
                    m_command += '</div>';
                    document.execCommand("insertHTML", false, m_command);
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
                    var m_command = '';
                    m_command += '<div class="dibm Summary2">';
                    for(var i = 0; i < m_childTitles.length; i++) {
                        var m_child = m_childTitles[i];
                        var m_title = m_child.firstChild.innerText
                        m_command += '<div class="pdlb">';
                        m_command += '<span class="fa fa-book clrg pdra"></span>';
                        m_command += '<a class="clrg" href="#'+m_title+'">';
                        m_command += m_title;
                        m_command += '</a>';
                        m_command += '</div>';
                    }
                    m_command += '</div>';
                    document.execCommand("insertHTML", false, m_command);
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
                        var m_command = '';
                        m_command += '<div class="dibm Shift">';
                        m_command += '<div class="dibm pdld ShiftB">';
                        m_command += m_data;
                        m_command += '</div>';
                        m_command += '</div>';
                        document.execCommand("insertHTML", false, m_command);                
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
                    var m_command = '';
                    m_command += '<div class="Code1">';
                    m_command += '<pre><xmp class="ovfa prettyprint linenums">';
                    m_command += m_data;
                    m_command += '</xmp></pre>';
                    m_command += '</div>';
                    document.execCommand("insertHTML", false, m_command);
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
                //var m_res = confirm("Voulez-vous supprimer le style ?");
                //if(!m_res) return;
                e.preventDefault();
                var m_clipboardData = e.clipboardData || window.clipboardData;
                var m_data = m_clipboardData.getData("text");
                m_data = this.encodeHtml(m_data);
                document.execCommand("insertHTML", false, m_data);
            },
            //===============================================
            viewPage: function() {
                var m_EditorView = document.getElementById("EditorView");
                var m_EditorEditId = document.getElementById("EditorEditId");
                m_EditorView.innerHTML = m_EditorEditId.innerHTML;

            },
            //===============================================
            viewCode: function() {
                var m_EditorHTML = document.getElementById("EditorHTML");
                var m_EditorEditId = document.getElementById("EditorEditId");
                m_EditorHTML.value = m_EditorEditId.innerHTML;
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
                m_xmlhttp.send(
				"r=" + "READ_FILE" +
				"&f=" + m_filename
				);
            },
            //===============================================
            saveFile: function() {
                var m_EditorEditId = document.getElementById("EditorEditId");
				var m_filename = "/Tutoriels/Cpp/Apprendre_le_Cpp/page/main.php";
                var m_data = encodeURIComponent(m_EditorEditId.innerHTML);
                var m_xmlhttp = new XMLHttpRequest();
                m_xmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {

                    }
                }
                m_xmlhttp.open("POST", "/php/editor.php", true);
                m_xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                m_xmlhttp.send(
				"r=" + "SAVE_FILE" +
				"&f=" + m_filename +
				"&d=" + m_data
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
            saveFileText: function() {
                var m_res = confirm("Êtes vous sûr de vouloir enregistrer les modifications ?");
                if(!m_res) return;
                var m_EditorHTML = document.getElementById("EditorHTML");
				var m_filename = "/Tutoriels/Cpp/Apprendre_le_Cpp/page/main.php";
                var m_data = encodeURIComponent(m_EditorHTML.value);
                var m_xmlhttp = new XMLHttpRequest();
                m_xmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {

                    }
                }
                m_xmlhttp.open("POST", "/php/editor.php", true);
                m_xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                m_xmlhttp.send(
				"r=" + "SAVE_FILE" + 
				"&f=" + m_filename + 
				"&d="+m_data
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
GEditor.Instance().init();
//===============================================
