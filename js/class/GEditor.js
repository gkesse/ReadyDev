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
                lHtml += '<a class="Link7" ';
                lHtml += 'href="'+arg+'">';
                lHtml += lSelection;
                lHtml += '</a>';
                document.execCommand("insertHTML", false, lHtml);
            },
            //===============================================
            editImage: function(arg) {
                var lHtml = '';
                lHtml += '<div class="Img3">';
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
                    while(1) {
                        var lClassName = lParentNode.className;
                        if(lClassName.includes("GEndEditor")) {
                            break;
                        }
                        if(lClassName.includes("GTitle1")) {
                            lRange.selectNode(lParentNode);
                            lSelection.addRange(lRange);
                            var lTitle = lParentNode.firstChild.firstChild.firstChild.innerText;
                            document.execCommand("insertHTML", false, lTitle);
                            return;
                        }
                        lParentNode = lParentNode.parentNode;
                    }
                    lRange.setStart(lStartNode, 0);
                    lRange.setEnd(lStartNode, lLength);
                    lSelection.addRange(lRange);
                    var lHtml = '';
                    lHtml += '<div class="Content2 GTitle1">';
                    lHtml += '<div class="MainBlock2">';
                    lHtml += '<div class="Content">';
                    lHtml += '<h1 class="Title2 Center" id="'+lData+'">';
                    lHtml += '<a class="Link3" href="#Sommaire">';
                    lHtml += lData;
                    lHtml += '</a>';
                    lHtml += '</h1>';
                    lHtml += '<div class="Body3">';
                    lHtml += 'Ajouter un texte ici...';
                    lHtml += '</div>';
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
                    while(1) {
                        var lClassName = lParentNode.className;
                        if(lClassName.includes("GEndEditor")) {
                            break;
                        }
                        if(lClassName.includes("GTitle2")) {
                            lRange.selectNode(lParentNode);
                            lSelection.addRange(lRange);
                            document.execCommand("insertHTML", false, lData);
                            return;
                        }
                        lParentNode = lParentNode.parentNode;
                    }
                    lParentNode = lStartNode;
                    var lTitle = lParentNode.parentNode.previousSibling.firstChild.innerText;
                    lRange.setStart(lStartNode, 0);
                    lRange.setEnd(lStartNode, lLength);
                    lSelection.addRange(lRange);
                    var lHtml = '';
                    lHtml += '<h2 class="Title7 GTitle2" id="'+lData+'">';
                    lHtml += '<a class="Link9" href="#'+lTitle+'">';
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
                    while(1) {
                        var lClassName = lParentNode.className;
                        if(lClassName.includes("GEndEditor")) {
                            break;
                        }
                        if(lClassName.includes("GTitle3")) {
                            lRange.selectNode(lParentNode);
                            lSelection.addRange(lRange);
                            document.execCommand("insertHTML", false, lData);
                            return;
                        }
                        lParentNode = lParentNode.parentNode;
                    }
                    lRange.setStart(lStartNode, 0);
                    lRange.setEnd(lStartNode, lLength);
                    lSelection.addRange(lRange);
                    var lHtml = '';
                    lHtml += '<h3 class="Title8 GTitle3">';
                    lHtml += lData;
                    lHtml += '</h3>';
                    document.execCommand("insertHTML", false, lHtml);
                    break;
                //===============================================
                case 'Summary1':
                    var lParentNode = lStartNode.parentNode;    
                    if(lData) {
                        while(1) {
                            var lClassName = lParentNode.className;
                            if(lClassName.includes("GEndEditor")) {
                                return;
                            }
                            if(lClassName.includes("GSummary1")) {
                                lRange.selectNode(lParentNode);
                                lSelection.addRange(lRange);
                                document.execCommand("insertHTML", false, "");
                                return;
                            }
                            lParentNode = lParentNode.parentNode;
                        }
                    }                  
                    var lNodeMap = document.getElementsByClassName("GTitle1");
                    if(lNodeMap.length < 2) break;
                    var lHtml = '';
                    lHtml += '<div class="List4 GSummary1">';
                    for(var i = 1; i < lNodeMap.length; i++) {
                        var lTitle = lNodeMap[i].firstChild.firstChild.firstChild.innerText;
                        lHtml += '<div class="Item4">';
                        lHtml += '<span class="Icon10 fa fa-book"></span>';
                        lHtml += '<a class="Link4" href="#'+lTitle+'">';
                        lHtml += lTitle;
                        lHtml += '</a>';
                        lHtml += '</div>';
                    }
                    lHtml += '</div>';
                    document.execCommand("insertHTML", false, lHtml);
                    break;
                //===============================================
                case 'Summary2':
                    var lParentNode = lStartNode.parentNode;    
                    if(lData) {
                        while(1) {
                            var lClassName = lParentNode.className;
                            if(lClassName.includes("GEndEditor")) {
                                return;
                            }
                            if(lClassName.includes("GSummary2")) {
                                lRange.selectNode(lParentNode);
                                lSelection.addRange(lRange);
                                document.execCommand("insertHTML", false, "");
                                return;
                            }
                            lParentNode = lParentNode.parentNode;
                        }
                    }   
                    lParentNode = lStartNode.parentNode;    
                    while(1) {
                        var lClassName = lParentNode.className;
                        if(lClassName.includes("GEndEditor")) {return;}
                        if(lClassName.includes("GTitle1")) {break;}
                        lParentNode = lParentNode.parentNode;
                    }
                    var lNodeMap = lParentNode.firstChild.firstChild.firstChild.nextSibling.getElementsByClassName("GTitle2");
                    if(!lNodeMap.length) break;
                    var lHtml = '';
                    lHtml += '<div class="List4 GSummary2">';
                    for(var i = 0; i < lNodeMap.length; i++) {
                        var lTitle = lNodeMap[i].innerText
                        lHtml += '<div class="Item4">';
                        lHtml += '<span class="Icon10 fa fa-book"></span>';
                        lHtml += '<a class="Link4" href="#'+lTitle+'">';
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
					lXmlhttp.open("POST", "/php/req/editor.php", true);
					lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
					lXmlhttp.send(
					"req=" + "SUMMARY" +
					"&file=" + lFilename +
					"&summary=" + lSummary
					);
                    break;
                //===============================================
                case 'LineBreak1':
                    var lParentNode = lStartNode.parentNode;
                    while(1) {
                        var lClassName = lParentNode.className;
                        if(lClassName.includes("GEndEditor")) {
                            break;
                        }
                        if(lClassName.includes("GTitle1") ||
                            lClassName.includes("GTitle2") ||
                            lClassName.includes("GTitle3") ||
                            lClassName.includes("GSummary1") ||
                            lClassName.includes("GSummary2") ||
                            lClassName.includes("GSummary3") ||
                            lClassName.includes("GShift0")
                        ) {
                            var lBr = document.createElement("BR");
                            lParentNode.parentNode.insertBefore(lBr, lParentNode);
                            return;
                        }
                        lParentNode = lParentNode.parentNode;
                    }
                    break;
                //===============================================
                case 'LineBreak2':
                    var lParentNode = lStartNode.parentNode;
                    while(1) {
                        var lClassName = lParentNode.className;
                        if(lClassName.includes("GEndEditor")) {
                            break;
                        }
                        if(lClassName.includes("GTitle1") ||
                            lClassName.includes("GTitle2") ||
                            lClassName.includes("GTitle3") ||
                            lClassName.includes("GSummary1") ||
                            lClassName.includes("GSummary2") ||
                            lClassName.includes("GSummary3") ||
                            lClassName.includes("GShift0")
                        ) {
                            var lBr = document.createElement("BR");
                            lParentNode.parentNode.insertBefore(lBr, lParentNode.nextSibling);
                            return;
                        }
                        lParentNode = lParentNode.parentNode;
                    }
                    break;
                //===============================================
                case 'LineBreak3':
                    document.execCommand("delete", null, false);
                    break;
                //===============================================
                case 'Shift1':
                    var lParentNode = lStartNode.parentNode;
                    var lFirstShift = true;
                    if(!lSelection.toString()) {
                        while(1) {
                            var lClassName = lParentNode.className;
                            if(lClassName.includes("GEndEditor")) {
                                break;
                            }
                            if(lClassName.includes("GShift0")) {
                                lRange.selectNode(lParentNode);
                                lSelection.addRange(lRange);
                                lFirstShift = false;
                                break;
                            }
                            lParentNode = lParentNode.parentNode;
                        }
                    }
                    if(!lSelection.toString()) return;
                    var lHtml = '';
                    lHtml += '<div class="Shift1 GShift1 GShift0">';
                    var lFragment = lSelection.getRangeAt(0).cloneContents();
                    var lDiv = document.createElement("DIV");
                    lDiv.appendChild(lFragment);
                    if(!lFirstShift) {
                        var lClassName = lDiv.firstChild.className;
                        lDiv.firstChild.className = lClassName.replace(" GShift0", "");
                    }
                    lHtml += lDiv.innerHTML;
                    lHtml += '</div>';
                    document.execCommand("insertHTML", false, lHtml);
                    break;
                //===============================================
                case 'Shift2':
                    var lParentNode = lStartNode.parentNode;
                    while(1) {
                        var lClassName = lParentNode.className;
                        if(lClassName.includes("GEndEditor")) {
                            break;
                        }
                        if(lClassName.includes("GShift1")) {
                            lRange.selectNode(lParentNode);
                            lSelection.addRange(lRange);
                            var lHtml = lParentNode.innerHTML;
                            document.execCommand("insertHTML", false, lHtml);
                            return;
                        }
                        lParentNode = lParentNode.parentNode;
                    }
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
					lTabId.className = lTabId.className.replace(" Active", "");
				}
				obj.className += " Active";
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
                lXmlhttp.open("POST", "/php/req/editor.php", true);
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
                lXmlhttp.open("POST", "/php/req/editor.php", true);
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
                lXmlhttp.open("POST", "/php/req/editor.php", true);
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
                else if (e.which == 13 || e.keyCode == 13) {
                    e.preventDefault();
                    document.execCommand("insertHTML", false, '<br><br>');
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
                lXmlhttp.open("POST", "/php/req/editor.php", true);
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
					m_node.className = m_node.className.replace(" Active", "");
				}
				if(!dir) {
					var lRes = confirm("Êtes-vous sûr de vouloir sélectionner ce fichier ?");
					if(!lRes) return;
					lObjParent.className += " Active";
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
            if(!m_instance) {
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
