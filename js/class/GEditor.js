//===============================================
var GEditor = (function() {
    //===============================================
    var m_instance;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            init: function() {
                var lTabCtn = document.getElementsByClassName("EditorTab");
				var lFileEdit = document.getElementById("FileEdit");
				var lObj = lTabCtn[2];
				var lEditorDir = GConfig.Instance().getData("EditorDir");
				var lEditorFile = GConfig.Instance().getData("EditorFile");
				this.openEditorTab(lObj, "EditorTab2");
				this.readFile();
				this.selectFile(lEditorDir);
				lFileEdit.innerHTML = lEditorFile;
			},
            //===============================================
            editLink: function(arg) {
				if(arg == "") return;
				var lSelection = document.getSelection();
				if(lSelection == "") return;
                var lHtml = '';
                lHtml += '<a class="hvra" ';
                lHtml += 'href="'+arg+'">';
                lHtml += lSelection;
                lHtml += '</a>';
                document.execCommand("insertHTML", false, lHtml);
            },
            //===============================================
            editImage: function(arg) {
                var lHtml = '';
                lHtml += '<div class="ovfa">';
                lHtml += '<img src="';
                lHtml += arg;
                lHtml += '" alt="'+arg+'" />';
                lHtml += '</div>';
                document.execCommand("insertHTML", false, lHtml);
            },
            //===============================================
            editReadyStyle: function(arg) {
                if(arg == "") return;
                var lSelection = document.getSelection();
                var lStartNode = lSelection.anchorNode;
                var lData = lStartNode.data;
                var lRange = document.createRange();
                                                                
                switch(arg) {
                case 'Title1':
                    if(!lData) return;
                    var lLength = lData.length;
                    var lParentNode = lStartNode.parentNode;
                    if(lParentNode.nodeName == "A") {
                        lParentNode = lParentNode.parentNode;
                        if(lParentNode.nodeName == "H1") {
                            if(lParentNode.className.includes("Title1")) {
                                lParentNode = lParentNode.parentNode.parentNode;
                                lRange.selectNode(lParentNode);
                                lSelection.addRange(lRange);
                                document.execCommand("insertHTML", false, lData);
                                break;
                            }
                        }
                    }
                    lRange.setStart(lStartNode, 0);
                    lRange.setEnd(lStartNode, lLength);
                    lSelection.addRange(lRange);
                    var lHtml = '';
                    lHtml += '<div class="pgCt00">';
                    lHtml += '<div class="bgra">';
                    lHtml += '<h1 class="bgra pgCt20 txac Title1" id="'+lData+'">';
                    lHtml += '<a class="clrb" href="#Sommaire">';
                    lHtml += lData;
                    lHtml += '</a>';
                    lHtml += '</h1>';
                    lHtml += '<div class="txal pgCt10">';
                    lHtml += 'Ajouter un texte ici...';
                    lHtml += '</div>';
                    lHtml += '</div>';
                    lHtml += '</div>';
                    document.execCommand("insertHTML", false, lHtml);
                    break;
                //===============================================
                case 'Title2':
                    if(!lData) return;
                    var lLength = lData.length;
                    var lParentNode = lStartNode.parentNode;
                    if(lParentNode.nodeName == "A") {
                        lParentNode = lParentNode.parentNode;
                        if(lParentNode.nodeName == "H2") {
                            if(lParentNode.className.includes("Title2")) {
                                lRange.selectNode(lParentNode);
                                lSelection.addRange(lRange);
                                document.execCommand("insertHTML", false, lData);
                                break;
                            }
                        }
                    }
                    lParentNode = lStartNode;
                    var lTitle = lParentNode.parentNode.previousSibling.firstChild.innerText;
                    lRange.setStart(lStartNode, 0);
                    lRange.setEnd(lStartNode, lLength);
                    lSelection.addRange(lRange);
                    var lHtml = '';
                    lHtml += '<h2 class="ftwn Title2" id="'+lData+'">';
                    lHtml += '<a class="bgra dibm ftfb ftsg clra pgCt10" href="#'+lTitle+'">';
                    lHtml += lData;
                    lHtml += '</a>';
                    lHtml += '</h2>';
                    document.execCommand("insertHTML", false, lHtml);
                    break;
                //===============================================
                case 'Title3':
                    if(!lData) return;
                    var lLength = lData.length;
                    var lParentNode = lStartNode.parentNode;
                    if(lParentNode.nodeName == "B") {
                        lRange.selectNode(lParentNode);
                        lSelection.addRange(lRange);
                        document.execCommand("insertHTML", false, lData);
                        break;
                    }
                    lRange.setStart(lStartNode, 0);
                    lRange.setEnd(lStartNode, lLength);
                    lSelection.addRange(lRange);
                    var lHtml = '';
                    lHtml += '<b>';
                    lHtml += lData;
                    lHtml += '</b>';
                    document.execCommand("insertHTML", false, lHtml);
                    break;
                //===============================================
                case 'Summary1':
                    var lParentNode = lStartNode;    
                    if(lData) {
                        for(var lParentCount = 0; lParentCount < 3; lParentCount++) {
                            if(!lParentNode.parentNode) break;
                            lParentNode = lParentNode.parentNode;
                        }
                        if(lParentCount == 3) {
                            if(lParentNode.nodeName == "DIV") {
                                if(lParentNode.className) {
                                    if(lParentNode.className.includes("Summary1")) {
                                        lRange.selectNode(lParentNode);
                                        lSelection.addRange(lRange);
                                        document.execCommand("insertHTML", false, "");
                                    }
                                }
                            }
                        }
                        break;
                    }
                    lParentNode = lParentNode.parentNode.parentNode.parentNode;
                    var lChildNodes = lParentNode.childNodes;
                    var lChildTitles = Array.from(lChildNodes).filter(function(n) {
                        if(n.firstChild)  {
                            if(n.firstChild.firstChild)  {
                                if(n.firstChild.firstChild.nodeName == "H1") return true;
                            }
                        }
                        return false;
                    });
                    if(!lChildTitles.length) break;
                    var lHtml = '';
                    lHtml += '<div class="dibm Summary1">';
                    for(var i = 1; i < lChildTitles.length; i++) {
                        var lChild = lChildTitles[i];
                        var lTitle = lChild.firstChild.firstChild.innerText;
                        lHtml += '<div class="pdlb">';
                        lHtml += '<span class="fa fa-book clrg pdra"></span>';
                        lHtml += '<a class="hvra clrg" href="#'+lTitle+'">';
                        lHtml += lTitle;
                        lHtml += '</a>';
                        lHtml += '</div>';
                    }
                    lHtml += '</div>';
                    document.execCommand("insertHTML", false, lHtml);
                    break;
                //===============================================
                case 'Summary2':
                    var lParentNode = lStartNode;    
                    if(lData) {
                        for(var lParentCount = 0; lParentCount < 3; lParentCount++) {
                            if(!lParentNode.parentNode) break;
                            lParentNode = lParentNode.parentNode;
                        }
                        if(lParentCount == 3) {
                            if(lParentNode.nodeName == "DIV") {
                                if(lParentNode.className) {
                                    if(lParentNode.className.includes("Summary2")) {
                                        lRange.selectNode(lParentNode);
                                        lSelection.addRange(lRange);
                                        document.execCommand("insertHTML", false, "");
                                    }
                                }
                            }
                        }
                        break;
                    }
                    var lChildNodes = lParentNode.childNodes;
                    var lChildTitles = Array.from(lChildNodes).filter(function(n) {
                        if(n.nodeName == "H2") return true;
                        return false;
                    });
                    if(!lChildTitles.length) break;
                    var lHtml = '';
                    lHtml += '<div class="dibm Summary2">';
                    for(var i = 0; i < lChildTitles.length; i++) {
                        var lChild = lChildTitles[i];
                        var lTitle = lChild.firstChild.innerText
                        lHtml += '<div class="pdlb">';
                        lHtml += '<span class="fa fa-book clrg pdra"></span>';
                        lHtml += '<a class="hvra clrg" href="#'+lTitle+'">';
                        lHtml += lTitle;
                        lHtml += '</a>';
                        lHtml += '</div>';
                    }
                    lHtml += '</div>';
                    document.execCommand("insertHTML", false, lHtml);
                    break;
                //===============================================
                case 'Summary3':
					var lArg = prompt("Quelle est l'adresse ?");
					var lArgArr = lArg.split(";");
					var lFilename = lArgArr[0];
					var lSummary = lArgArr[1];
                    var lValid = true;
                    lValid &= (typeof(lFilename) == "undefined");
                    lValid &= (typeof(lSummary) == "undefined");
					if(lValid) return;
					var lXmlhttp = new XMLHttpRequest();
					lXmlhttp.onreadystatechange = function() {
						if(this.readyState == 4 && this.status == 200) {
							var lData = this.responseText;
							document.execCommand("insertHTML", false, lData);
						}
					}
					lXmlhttp.open("POST", "/php/editor.php", true);
					lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
					lXmlhttp.send(
					"req=" + "SUMMARY" +
					"&file=" + lFilename +
					"&summary=" + lSummary
					);
                    break;
                //===============================================
                case 'LineBreak1':
                    var lParentNode = lStartNode;
                    if(!lData) {
                        document.execCommand("insertHTML", false, "<br>");
                        break;
                    }
                    
                    while(1) {
                        if(lParentNode.nodeName == "BR") break;
                        if(lParentNode.nextSibling) {
                            lParentNode = lParentNode.nextSibling;
                        }
                        else {
                            lParentNode = lParentNode.parentNode; 
                            lStartNode = lParentNode;
                        }
                    }
                    var lBr = document.createElement("BR");
                    lParentNode.parentNode.insertBefore(lBr, lStartNode.nextSibling);
                    break;
                //===============================================
                case 'LineBreak2':
                    var lParentNode = lStartNode;
                    if(!lData) {
                        document.execCommand("insertHTML", false, "<br>");
                        break;
                    }
                    while(1) {
                        if(lParentNode.nodeName == "BR") break;
                        if(lParentNode.nextSibling) {
                            lParentNode = lParentNode.nextSibling;
                        }
                        else {
                            lParentNode = lParentNode.parentNode; 
                            lStartNode = lParentNode;
                        }
                    }
                    var lBr = document.createElement("BR");
                    lParentNode.parentNode.insertBefore(lBr, lStartNode);
                    break;
                //===============================================
                case 'LineBreak3':
                    var lParentNode = lStartNode;
                    
                    while(1) {
                        if(lParentNode.className) {
                            if(lParentNode.className.includes("EditorPage")) break;
                        }
                        lStartNode = lParentNode;
                        lParentNode = lParentNode.parentNode;
                    }
                    var lBr = document.createElement("BR");
                    lParentNode.insertBefore(lBr, lStartNode.nextSibling);                
                    break;
                //===============================================
                case 'LineBreak4':
                    var lParentNode = lStartNode;
                    
                    while(1) {
                        if(lParentNode.className) {
                            if(lParentNode.className.includes("EditorPage")) break;
                        }
                        lStartNode = lParentNode;
                        lParentNode = lParentNode.parentNode;
                    }
                    var lBr = document.createElement("BR");
                    lParentNode.insertBefore(lBr, lStartNode);                
                    break;
                //===============================================
                case 'Shift1':
                    var lParentNode = lStartNode;
                    var lPosition = this.searchNode(lParentNode, "ShiftB");
                    if(lPosition == -1) {
                        if(lData) {
                            var lLength = lData.length;
                            lRange.setStart(lParentNode, 0);
                            lRange.setEnd(lParentNode, lLength);
                            lSelection.addRange(lRange);
                        }
                        else {
                            lData = 'Ajouter un texte...';
                        }
                        var lHtml = '';
                        lHtml += '<div class="dibm Shift">';
                        lHtml += '<div class="dibm pdld ShiftB">';
                        lHtml += lData;
                        lHtml += '</div>';
                        lHtml += '</div>';
                        document.execCommand("insertHTML", false, lHtml);                
                    }
                    else {
                        for(var i = 0; i < lPosition; i++) {
                            lParentNode = lParentNode.parentNode;
                        }
                        var lChildNode = lParentNode;
                        lParentNode = lParentNode.parentNode;
                        var lCloneNode = lParentNode.cloneNode(true);
                        while(lChildNode.firstChild) {
                            lChildNode.removeChild(lChildNode.firstChild);
                        }
                        lChildNode.appendChild(lCloneNode);
                    }
                    break;
                //===============================================
                case 'Shift2':
                    var lParentNode = lStartNode;
                    var lPosition = this.searchNode(lParentNode, "ShiftB");
                    if(lPosition == -1) break;
                    for(var i = 0; i < lPosition; i++) {
                        lParentNode = lParentNode.parentNode;
                    }
                    var lContentHTML = lParentNode.innerHTML;
                    lParentNode = lParentNode.parentNode;
                    var lChildNode = lParentNode;
                    lRange.selectNode(lChildNode);
                    lSelection.addRange(lRange);
                    document.execCommand("insertHTML", false, lContentHTML);
                    break;
                //===============================================
                case 'Code1':
                    if(lData) {
                        lRange = lSelection.getRangeAt(0);
                        var lFragNode = lRange.extractContents();
                        var lDivNode = document.createElement('DIV');
                        lDivNode.appendChild(lFragNode);
                        lData = lDivNode.innerHTML;
                        lData = this.encodeHtml(lData, false);
                    }
                    else {
                        lData = 'Ajouter un code...';
                    }
                    var lHtml = '';
                    lHtml += '<div class="Code1">';
                    lHtml += '<pre><xmp class="ovfa prettyprint linenums">';
                    lHtml += lData;
                    lHtml += '</xmp></pre>';
                    lHtml += '</div>';
                    document.execCommand("insertHTML", false, lHtml);
                    break;
                //===============================================
                case 'Code2':
                    var lHtml = '';
                    lHtml += '<b>ReadyDev</b> met à votre disposition,<br>';
                    lHtml += 'l\'ensemble des codes sources abordés dans ce tutoriel.';
                    lHtml += '<br><br>';
                    lHtml += '<div class="brda Code2">';
                    lHtml += '<div class="bgra txal pgCt00" id="FilesystemMenu">...</div>';
                    lHtml += '<div class="txal ovfa mxha" id="FilesystemList">...</div>';
                    lHtml += '</div>';
                    lHtml += '<script src="/js/class/GFilesystem.js"></script>';
                    lHtml += '<script src="/js/filesystem.js"></script>';
                    document.execCommand("insertHTML", false, lHtml);
                    break;
                //===============================================
                case 'Parallax1':
                    var lHtml = '';
                    lHtml += '<div class="Parallax Binary">';
                    lHtml += '<div class="Img">';
                    lHtml += '<div class="Caption">';
                    lHtml += '<div class="Text">ReadyDev</div>';
                    lHtml += '</div>';
                    lHtml += '</div>';
                    lHtml += '<div class="Body">';
                    lHtml += '<div><?php echo join(" ", $lData["intro"]) ?></div>';
                    lHtml += '</div>';
                    lHtml += '</div>';
                    document.execCommand("insertHTML", false, lHtml);
                    break;
                }
            },
            //===============================================
            encodeHtml: function(data, type=true) {
                var lEntityMap = {
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
                for(key in lEntityMap) {
                    if(type) {
                        var lVal = lEntityMap[key];
                        var lReg = new RegExp(key, 'g');
                        data = data.replace(lReg, lVal);
                    }
                    else {
                        var lVal = lEntityMap[key];
                        var lReg = new RegExp(lVal, 'g');
                        data = data.replace(lReg, key);
                    }
                }
                return data;
            },
            //===============================================
            searchNode: function(startNode, className) {
                var lParentNode = startNode;
                var lPosition = 0;
                while(1) {
                    if(lParentNode.className) {
                        if(lParentNode.className.includes(className)) break;
                        if(lParentNode.className.includes("EditorPage")) {
                            lPosition = -1;
                            break;
                        }
                    }
                    if(lParentNode.parentNode) {
                        lParentNode = lParentNode.parentNode;
                        lPosition++;
                    }
                    else break;
                }
                return lPosition;
            },
            //===============================================
            pasteText: function(e) {
                e.preventDefault();
                var lClipboardData = e.clipboardData || window.clipboardData;
                var lData = lClipboardData.getData("text");
                lData = this.encodeHtml(lData);
                document.execCommand("insertHTML", false, lData);
            },
            //===============================================
            viewPage: function() {
                var lEditorView = document.getElementById("EditorView");
                var lEditorEdit = document.getElementById("EditorEdit");
                lEditorView.innerHTML = lEditorEdit.innerHTML;

            },
            //===============================================
            viewCode: function() {
                var lEditorHTML = document.getElementById("EditorHTML");
                var lEditorEdit = document.getElementById("EditorEdit");
                lEditorHTML.value = lEditorEdit.innerHTML;
            },
            //===============================================
            openEditorTab: function(obj, name) {
				var lTab = document.getElementsByClassName("EditorTab");
				for(var i = 0; i < lTab.length; i++) {
					var lTabId = lTab[i];
					lTabId.className = lTabId.className.replace(" bgrc", "");
				}
				obj.className += " bgrc";
				var lTabCtn = document.getElementsByClassName("EditorTabCtn");
				for(var i = 0; i < lTabCtn.length; i++) {
					var lTabCtnId = lTabCtn[i];
					lTabCtnId.style.display = "none";
				}
				var lTabId = document.getElementById(name);
				lTabId.style.display = "block";
            },
            //===============================================
            readFile: function() {
                var lEditorEdit = document.getElementById("EditorEdit");
				var lFilename = GConfig.Instance().getData("EditorFile");
				if(lFilename == "") return;
                var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        lEditorEdit.innerHTML = this.responseText;
                    }
                }
                lXmlhttp.open("POST", "/php/editor.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
				"req=" + "READ_FILE" +
				"&file=" + lFilename
				);
            },
            //===============================================
            saveFile: function() {
                var lEditorEdit = document.getElementById("EditorEdit");
				var lFilename = GConfig.Instance().getData("EditorFile");
				if(lFilename == "") return;
                var lData = encodeURIComponent(lEditorEdit.innerHTML);
                var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {

                    }
                }
                lXmlhttp.open("POST", "/php/editor.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
				"req=" + "SAVE_FILE" +
				"&file=" + lFilename +
				"&data=" + lData
				);
            },
            //===============================================
            saveFileText: function() {
                var lRes = confirm("Êtes vous sûr de vouloir enregistrer les modifications ?");
                if(!lRes) return;
                var lEditorHTML = document.getElementById("EditorHTML");
                var lEditorEdit = document.getElementById("EditorEdit");
				var lFilename = GConfig.Instance().getData("EditorFile");
				if(lFilename == "") return;
                lEditorEdit.innerHTML = lEditorHTML.value;
                var lData = encodeURIComponent(lEditorHTML.value);
                var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {

                    }
                }
                lXmlhttp.open("POST", "/php/editor.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
				"req=" + "SAVE_FILE" + 
				"&file=" + lFilename + 
				"&data="+lData
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
                var lEditorFile = document.getElementById("EditorFile");
                var lEditorMenu = document.getElementById("EditorMenu");
				var lMenuHtml = lEditorMenu.innerHTML;
				var lFileEdit = GConfig.Instance().getData("EditorFile");
				if(!lFileEdit) lFileEdit = "";
                var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
						var lData = this.responseText;
						var lDataArr = JSON.parse(lData);
						if(!lData) return;
						lEditorFile.innerHTML = lDataArr["file"];
						lEditorMenu.innerHTML = lDataArr["menu"];
						var lEditorDir = lDataArr["dir"];
						GConfig.Instance().setData("EditorDir", lEditorDir);
                    }
                }
                lXmlhttp.open("POST", "/php/editor.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
				"req=" + "GET_FILE" + 
				"&dir=" + dir +
				"&file=" + lFileEdit
				);
            },
            //===============================================
            openFile: function(obj, dir) {
				var lFileList = document.getElementsByClassName("FileList");
				var lFileEdit = document.getElementById("FileEdit");
                var lDirName = obj.innerHTML;
				var lEditorDir = GConfig.Instance().getData("EditorDir");
				var lDirPath = lEditorDir + "/" + lDirName;
				var lObjParent = obj.parentNode;
				for(var i = 0; i < lFileList.length; i++) {
					var m_node = lFileList[i];
					m_node.className = m_node.className.replace(" bgrc", "");
				}
				if(!dir) {
					var lRes = confirm("Êtes-vous sûr de vouloir sélectionner ce fichier ?");
					if(!lRes) return;
					lObjParent.className += " bgrc";
					var lEditorFile = lDirPath;
					lEditorFile = lEditorFile.replace(/\\/gi, "/");
					lFileEdit.innerHTML = lEditorFile;
					GConfig.Instance().setData("EditorFile", lEditorFile);
					this.readFile();
					return;
				}
				this.selectFile(lDirPath);
            },
            //===============================================
            openLink: function(obj) {
				var lFileLink = document.getElementsByClassName("FileLink");
                var lDirName = obj.innerText;
				var lFilename = "";
				for(var i = 0; i < lFileLink.length; i ++) {
					var lLinkItem = lFileLink[i];
					var lLinkName = lLinkItem.innerText;
					lFilename += "/" + lLinkName;
					if(lLinkName == lDirName) break;
				}
				this.selectFile(lFilename);
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
