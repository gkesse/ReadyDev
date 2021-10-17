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
            editLink: function() {
                var lArg = prompt("Couleur ? Lien ?", "lime;");
                if(!lArg) return;
                var lArgMap = lArg.split(";");
                if(lArgMap.length < 2) return;
                var lColor = lArgMap[0].trim();
                var lLink = lArgMap[1].trim();
                if(!lColor || !lLink) return;
				var lSelection = document.getSelection();
				if(!lSelection.toString()) return;
                var lHtml = '';
                if(lArgMap.length == 2) {lHtml += '<a class="Link7 GLink1" style="color:'+lColor+';" target="_blank"';}
                else if(lArgMap.length == 3) {lHtml += '<a class="Link7 GLink1" style="color:'+lColor+';"';}
                lHtml += 'href="'+lLink+'">';
                lHtml += lSelection;
                lHtml += '</a>';
                document.execCommand("insertHTML", false, lHtml);
			},
            //===============================================
            editUnLink: function() {
                var lSelection = document.getSelection();
                var lStartNode = lSelection.anchorNode;
                var lData = lStartNode.data;
                var lRange = document.createRange();
                if(!lData) return;
                var lParentNode = lStartNode.parentNode;
                while(1) {
                    var lClassName = lParentNode.className;
                    if(lClassName.includes("GEndEditor")) {
                        break;
                    }
                    if(lClassName.includes("GLink1")) {
                        lRange.selectNode(lParentNode);
                        lSelection.addRange(lRange);
                        var lHtml = lData;
                        document.execCommand("insertHTML", false, lData);
                        return;
                    }

                    lParentNode = lParentNode.parentNode;
                }
            },
            //===============================================
            editImage: function(arg) {
                var lSelection = document.getSelection();
                var lStartNode = lSelection.anchorNode;
                var lData = lStartNode.data;
                var lRange = document.createRange();
                var lParentNode = lStartNode;
                while(1) {
                    var lClassName = lParentNode.className;
                    if(lClassName.includes("GEndEditor")) {
                        break;
                    }
                    if(lClassName.includes("GImage")) {
                        lRange.selectNode(lParentNode);
                        lSelection.addRange(lRange);
                        var lHtml = "";
                        document.execCommand("insertHTML", false, lHtml);
                        return;
                    }
                    lParentNode = lParentNode.parentNode;
                }
                if(!lData) {
                    var lArg = prompt("Image ?");
                    if(!lArg) return;
                    var lHtml = '';
                    lHtml += '<div class="Img3 GImage">';
                    lHtml += '<img src="';
                    lHtml += lArg;
                    lHtml += '" alt="'+lArg+'" />';
                    lHtml += '</div>';
                    document.execCommand("insertHTML", false, lHtml);
                    return;
                }
            },
            //===============================================
            editReadyStyle: function(arg, combo) {
                if(arg == "") return;
                
                if(combo == true) {
                    GSelection.Instance().load();
                }

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
                    var lIdUrl = GManager.Instance().getUrl(lData);
                    var lHtml = '';
                    lHtml += '<div class="Content2 GTitle1">';
                    lHtml += '<div class="MainBlock2">';
                    lHtml += '<div class="Content">';
                    lHtml += '<h1 class="Title2 Center" id="'+lIdUrl+'">';
                    lHtml += '<a class="Link3" href="#">';
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
                    var lControl = new GControl();
                    lControl.selection();
                    if(!lControl.data()) return;
                    if(lControl.remove("GTitle2")) return;
                    if(!lControl.title2()) return;
                    lControl.title22();
                    break;
                //===============================================
                case 'Title3':
                    var lControl = new GControl();
                    lControl.selection();
                    if(!lControl.data()) return;
                    if(lControl.remove("GTitle3")) return;
                    if(!lControl.title3()) return;
                    lControl.title32();
                    break;
                //===============================================
                case 'File_Content':
                    var lFilename = GConfig.Instance().getData("G_FILE_PATH");
                    lFilename = prompt("Chemin ?", lFilename);
                    if(!lFilename) return;
                    GConfig.Instance().setData("G_FILE_PATH", lFilename);
					var lXmlhttp = new XMLHttpRequest();
					lXmlhttp.onreadystatechange = function() {
						if(this.readyState == 4 && this.status == 200) {
							var lHtml = this.responseText;
							document.execCommand("insertHTML", false, lHtml);
						}
					}
					lXmlhttp.open("POST", "/php/req/editor.php", true);
					lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
					lXmlhttp.send(
					"req=" + "FILE_CONTENT" +
					"&file=" + lFilename
					);
                    break;
                //===============================================
                case 'File_Link':
                    var lParentNode = lStartNode.parentNode;
                    if(!lSelection.toString()) {
                        while(1) {
                            var lClassName = lParentNode.className;
                            if(lClassName.includes("GEndEditor")) {
                                break;
                            }
                            if(lClassName.includes("GFileLink")) {
                                lRange.selectNode(lParentNode);
                                lSelection.addRange(lRange);
                                document.execCommand("insertHTML", false, "");
                                return;
                            }
                            lParentNode = lParentNode.parentNode;
                        }
                    }
                    if(lData) return;
                    var lFilename = GConfig.Instance().getData("G_FILE_PATH");
                    lFilename = prompt("Chemin ?", lFilename);
                    if(!lFilename) return;
                    GConfig.Instance().setData("G_FILE_PATH", lFilename);
                    var lHtml = '';
                    lHtml += '<div class="Content0 GFileLink">';
                    lHtml += '<div class="Row26">';
                    lHtml += '<div>';
                    lHtml += 'File Link > ' + lFilename;
                    lHtml += '</div>';
                    lHtml += '</div>';
                    lHtml += '</div>';
                    document.execCommand("insertHTML", false, lHtml);
                    break;
                //===============================================
                case 'Summary1':
                    var lParentNode = lStartNode.parentNode;    
                    if(!lSelection.toString()) {
                        while(1) {
                            var lClassName = lParentNode.className;
                            if(lClassName.includes("GEndEditor")) {
                                break;
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
                    if(lData) return;
                    var lHtml = '';
                    lHtml += '<div class="Content0 GSummary1">';
                    lHtml += '<div class="Row26">';
                    lHtml += 'Summary 1';
                    lHtml += '</div>';
                    lHtml += '</div>';
                    document.execCommand("insertHTML", false, lHtml);
                    break;
                //===============================================
                case 'Summary2':
                    var lParentNode = lStartNode.parentNode;    
                    if(!lSelection.toString()) {
                        while(1) {
                            var lClassName = lParentNode.className;
                            if(lClassName.includes("GEndEditor")) {
                                break;
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
                    if(lData) return;
                    var lHtml = '';
                    lHtml += '<div class="Content0 GSummary2">';
                    lHtml += '<div class="Row26">';
                    lHtml += 'Summary 2';
                    lHtml += '</div>';
                    lHtml += '</div>';
                    document.execCommand("insertHTML", false, lHtml);                
                    break;
                //===============================================
                case 'List1':
                    var lParentNode = lStartNode.parentNode;
                    if(!lSelection.toString()) {
                        while(1) {
                            var lClassName = lParentNode.className;
                            if(lClassName.includes("GEndEditor")) {
                                break;
                            }
                            if(lClassName.includes("GList1")) {
                                lRange.selectNode(lParentNode);
                                lSelection.addRange(lRange);
                                document.execCommand("insertHTML", false, "");
                                return;
                            }
                            lParentNode = lParentNode.parentNode;
                        }
                    }
                    if(lData) return;
                	var lArg = prompt("Fichier ? Clé ?");
                    if(!lArg) return;
					var lArgMap = lArg.split(";");
                    if(lArgMap.length < 2) return;
					var lFilename = lArgMap[0].trim();
					var lKey = lArgMap[1].trim();
                    if(!lFilename || !lKey) return;
                    var lHtml = '';
                    lHtml += '<div class="Content0 GList1">';
                    lHtml += '<div class="Row26">';
                    lHtml += '<div>';
                    lHtml += 'List 1 > ' + lFilename + ' > ' + lKey;
                    lHtml += '</div>';
                    lHtml += '</div>';
                    lHtml += '</div>';
                    document.execCommand("insertHTML", false, lHtml);
                    break;
                //===============================================
                case 'List2':
                    var lParentNode = lStartNode.parentNode;
                    if(!lSelection.toString()) {
                        while(1) {
                            var lClassName = lParentNode.className;
                            if(lClassName.includes("GEndEditor")) {
                                break;
                            }
                            if(lClassName.includes("GList2")) {
                                lRange.selectNode(lParentNode);
                                lSelection.addRange(lRange);
                                document.execCommand("insertHTML", false, "");
                                return;
                            }
                            lParentNode = lParentNode.parentNode;
                        }
                    }
                    if(lData) return;
                	var lArg = prompt("Fichier ? Clé ?");
                    if(!lArg) return;
					var lArgMap = lArg.split(";");
                    if(lArgMap.length < 2) return;
					var lFilename = lArgMap[0].trim();
					var lKey = lArgMap[1].trim();
                    if(!lFilename || !lKey) return;
                    var lHtml = '';
                    lHtml += '<div class="Content0 Center GList2">';
                    lHtml += '<div class="Row26">';
                    lHtml += '<div>';
                    lHtml += 'List 2 > ' + lFilename + ' > ' + lKey;
                    lHtml += '</div>';
                    lHtml += '</div>';
                    lHtml += '</div>';
                    document.execCommand("insertHTML", false, lHtml);
                    break;
                //===============================================
                case 'List3':
                    var lParentNode = lStartNode.parentNode;
                    if(!lSelection.toString()) {
                        while(1) {
                            var lClassName = lParentNode.className;
                            if(lClassName.includes("GEndEditor")) {
                                break;
                            }
                            if(lClassName.includes("GList3")) {
                                lRange.selectNode(lParentNode);
                                lSelection.addRange(lRange);
                                document.execCommand("insertHTML", false, "");
                                return;
                            }
                            lParentNode = lParentNode.parentNode;
                        }
                    }
                    if(lData) return;
                	var lArg = prompt("Fichier ? Clé ?");
                    if(!lArg) return;
					var lArgMap = lArg.split(";");
                    if(lArgMap.length < 2) return;
					var lFilename = lArgMap[0].trim();
					var lKey = lArgMap[1].trim();
                    if(!lFilename || !lKey) return;
                    var lHtml = '';
                    lHtml += '<div class="Content0 GList3">';
                    lHtml += '<div class="Row26">';
                    lHtml += '<div>';
                    lHtml += 'List 3 > ' + lFilename + ' > ' + lKey;
                    lHtml += '</div>';
                    lHtml += '</div>';
                    lHtml += '</div>';
                    document.execCommand("insertHTML", false, lHtml);
                    break;
                //===============================================
                case 'List4':
                    var lParentNode = lStartNode.parentNode;
                    if(!lSelection.toString()) {
                        while(1) {
                            var lClassName = lParentNode.className;
                            if(lClassName.includes("GEndEditor")) {
                                break;
                            }
                            if(lClassName.includes("GList4")) {
                                lRange.selectNode(lParentNode);
                                lSelection.addRange(lRange);
                                document.execCommand("insertHTML", false, "");
                                return;
                            }
                            lParentNode = lParentNode.parentNode;
                        }
                    }
                    if(lData) return;
                	var lArg = prompt("Fichier ? Clé ?");
                    if(!lArg) return;
					var lArgMap = lArg.split(";");
                    if(lArgMap.length < 2) return;
					var lFilename = lArgMap[0].trim();
					var lKey = lArgMap[1].trim();
                    if(!lFilename || !lKey) return;
                    var lHtml = '';
                    lHtml += '<div class="Content0 GList4">';
                    lHtml += '<div class="Row26">';
                    lHtml += '<div>';
                    lHtml += 'List 4 > ' + lFilename + ' > ' + lKey;
                    lHtml += '</div>';
                    lHtml += '</div>';
                    lHtml += '</div>';
                    document.execCommand("insertHTML", false, lHtml);
                    break;
                //===============================================
                case 'List5':
                    var lParentNode = lStartNode.parentNode;
                    if(!lSelection.toString()) {
                        while(1) {
                            var lClassName = lParentNode.className;
                            if(lClassName.includes("GEndEditor")) {
                                break;
                            }
                            if(lClassName.includes("GList5")) {
                                lRange.selectNode(lParentNode);
                                lSelection.addRange(lRange);
                                document.execCommand("insertHTML", false, "");
                                return;
                            }
                            lParentNode = lParentNode.parentNode;
                        }
                    }
                    if(lData) return;
                	var lArg = prompt("Fichier ? Clé 1 ? Clé 2 ?");
                    if(!lArg) return;
					var lArgMap = lArg.split(";");
                    if(lArgMap.length < 3) return;
					var lFilename = lArgMap[0].trim();
					var lKey1 = lArgMap[1].trim();
					var lKey2 = lArgMap[2].trim();
                    if(!lFilename || !lKey1 || !lKey2) return;
                    var lHtml = '';
                    lHtml += '<div class="Content0 GList5">';
                    lHtml += '<div class="Row26">';
                    lHtml += '<div>';
                    lHtml += 'List 5 > ' + lFilename + ' > ' + lKey1 + ' > ' + lKey2;
                    lHtml += '</div>';
                    lHtml += '</div>';
                    lHtml += '</div>';
                    document.execCommand("insertHTML", false, lHtml);
                    break;
                //===============================================
                case 'List6':
                    var lParentNode = lStartNode.parentNode;
                    if(!lSelection.toString()) {
                        while(1) {
                            var lClassName = lParentNode.className;
                            if(lClassName.includes("GEndEditor")) {
                                break;
                            }
                            if(lClassName.includes("GList6")) {
                                lRange.selectNode(lParentNode);
                                lSelection.addRange(lRange);
                                document.execCommand("insertHTML", false, "");
                                return;
                            }
                            lParentNode = lParentNode.parentNode;
                        }
                    }
                    if(lData) return;
                	var lArg = prompt("Fichier ? Clé 1 ? Clé 2 ?");
                    if(!lArg) return;
					var lArgMap = lArg.split(";");
                    if(lArgMap.length < 3) return;
					var lFilename = lArgMap[0].trim();
					var lKey1 = lArgMap[1].trim();
					var lKey2 = lArgMap[2].trim();
                    if(!lFilename || !lKey1 || !lKey2) return;
                    var lHtml = '';
                    lHtml += '<div class="Content0 GList6">';
                    lHtml += '<div class="Row26">';
                    lHtml += '<div>';
                    lHtml += 'List 6 > ' + lFilename + ' > ' + lKey1 + ' > ' + lKey2;
                    lHtml += '</div>';
                    lHtml += '</div>';
                    lHtml += '</div>';
                    document.execCommand("insertHTML", false, lHtml);
                    break;
                //===============================================
                case 'Data1':
                    var lParentNode = lStartNode.parentNode;
                    if(!lSelection.toString()) {
                        while(1) {
                            var lClassName = lParentNode.className;
                            if(lClassName.includes("GEndEditor")) {
                                break;
                            }
                            if(lClassName.includes("GData1")) {
                                lRange.selectNode(lParentNode);
                                lSelection.addRange(lRange);
                                document.execCommand("insertHTML", false, "");
                                return;
                            }
                            lParentNode = lParentNode.parentNode;
                        }
                    }
                    if(lData) return;
                	var lArg = prompt("Fichier ? Clé ?");
                    if(!lArg) return;
					var lArgMap = lArg.split(";");
                    if(lArgMap.length < 2) return;
					var lFilename = lArgMap[0].trim();
					var lKey = lArgMap[1].trim();
                    if(!lFilename || !lKey) return;
                    var lHtml = '';
                    lHtml += '<div class="Content0 GData1">';
                    lHtml += '<div class="Row26">';
                    lHtml += '<div>';
                    lHtml += 'Data 1 > ' + lFilename + ' > ' + lKey;
                    lHtml += '</div>';
                    lHtml += '</div>';
                    lHtml += '</div>';
                    document.execCommand("insertHTML", false, lHtml);
                    break;
                //===============================================
                case 'Data2':
                    var lParentNode = lStartNode.parentNode;
                    if(!lSelection.toString()) {
                        while(1) {
                            var lClassName = lParentNode.className;
                            if(lClassName.includes("GEndEditor")) {
                                break;
                            }
                            if(lClassName.includes("GData2")) {
                                lRange.selectNode(lParentNode);
                                lSelection.addRange(lRange);
                                document.execCommand("insertHTML", false, "");
                                return;
                            }
                            lParentNode = lParentNode.parentNode;
                        }
                    }
                    if(lData) return;
                	var lArg = prompt("Fichier ? Clé 1 ? Clé 2 ?");
                    if(!lArg) return;
					var lArgMap = lArg.split(";");
                    if(lArgMap.length < 3) return;
					var lFilename = lArgMap[0].trim();
					var lKey1 = lArgMap[1].trim();
					var lKey2 = lArgMap[2].trim();
                    if(!lFilename || !lKey1 || !lKey2) return;
                    var lHtml = '';
                    lHtml += '<div class="Content0 GData2">';
                    lHtml += '<div class="Row26">';
                    lHtml += '<div>';
                    lHtml += 'Data 2 > ' + lFilename + ' > ' + lKey1 + ' > ' + lKey2;
                    lHtml += '</div>';
                    lHtml += '</div>';
                    lHtml += '</div>';
                    document.execCommand("insertHTML", false, lHtml);
                    break;
                //===============================================
                case 'Data3':
                    var lParentNode = lStartNode.parentNode;
                    if(!lSelection.toString()) {
                        while(1) {
                            var lClassName = lParentNode.className;
                            if(lClassName.includes("GEndEditor")) {
                                break;
                            }
                            if(lClassName.includes("GData3")) {
                                lRange.selectNode(lParentNode);
                                lSelection.addRange(lRange);
                                document.execCommand("insertHTML", false, "");
                                return;
                            }
                            lParentNode = lParentNode.parentNode;
                        }
                    }
                    if(lData) return;
                	var lArg = prompt("Fichier ? Clé 1 ? Clé 2 ?");
                    if(!lArg) return;
					var lArgMap = lArg.split(";");
                    if(lArgMap.length < 3) return;
					var lFilename = lArgMap[0].trim();
					var lKey1 = lArgMap[1].trim();
					var lKey2 = lArgMap[2].trim();
                    if(!lFilename || !lKey1 || !lKey2) return;
                    var lHtml = '';
                    lHtml += '<div class="Content0 GData3">';
                    lHtml += '<div class="Row26">';
                    lHtml += '<div>';
                    lHtml += 'Data 3 > ' + lFilename + ' > ' + lKey1 + ' > ' + lKey2;
                    lHtml += '</div>';
                    lHtml += '</div>';
                    lHtml += '</div>';
                    document.execCommand("insertHTML", false, lHtml);
                    break;
                //===============================================
                case 'Pdf1':
                    var lParentNode = lStartNode.parentNode;
                    if(!lSelection.toString()) {
                        while(1) {
                            var lClassName = lParentNode.className;
                            if(lClassName.includes("GEndEditor")) {
                                break;
                            }
                            if(lClassName.includes("GPdf1")) {
                                lRange.selectNode(lParentNode);
                                lSelection.addRange(lRange);
                                document.execCommand("insertHTML", false, "");
                                return;
                            }
                            lParentNode = lParentNode.parentNode;
                        }
                    }
                    if(lData) return;
                	var lArg = prompt("Fichier ? Clé ?");
                    if(!lArg) return;
					var lArgMap = lArg.split(";");
                    if(lArgMap.length < 2) return;
					var lFilename = lArgMap[0].trim();
					var lKey = lArgMap[1].trim();
                    if(!lFilename || !lKey) return;
                    var lHtml = '';
                    lHtml += '<div class="Content0 GPdf1">';
                    lHtml += '<div class="Row26">';
                    lHtml += '<div>';
                    lHtml += 'Pdf 1 > ' + lFilename + ' > ' + lKey;
                    lHtml += '</div>';
                    lHtml += '</div>';
                    lHtml += '</div>';
                    document.execCommand("insertHTML", false, lHtml);
                    break;
                //===============================================
                case 'LineBreak1':
                    var lParentNode = lStartNode.parentNode;
                    if(lStartNode.nodeName != "#text") lParentNode = lStartNode;
                    while(1) {
                        var lClassName = lParentNode.className;
                        if(lClassName.includes("GEndEditor")) {
                            break;
                        }
                        if(lClassName.includes("GTitle1") ||
                            lClassName.includes("GTitle2") ||
                            lClassName.includes("GTitle3") ||
                            lClassName.includes("GImage") ||
                            lClassName.includes("GSummary1") ||
                            lClassName.includes("GSummary2") ||
                            lClassName.includes("GList1") ||
                            lClassName.includes("GList2") ||
                            lClassName.includes("GList3") ||
                            lClassName.includes("GList4") ||
                            lClassName.includes("GList5") ||
                            lClassName.includes("GList6") ||
                            lClassName.includes("GData1") ||
                            lClassName.includes("GData2") ||
                            lClassName.includes("GData3") ||
                            lClassName.includes("GPdf1") ||
                            lClassName.includes("GCode1") ||
                            lClassName.includes("GCode2") ||
                            lClassName.includes("GLink1") ||
                            lClassName.includes("GParallax1") ||
                            lClassName.includes("GColor1") ||
                            lClassName.includes("GStyle1") ||
                            lClassName.includes("GFormula1") ||
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
                    if(lStartNode.nodeName != "#text") lParentNode = lStartNode;
                    while(1) {
                        var lClassName = lParentNode.className;
                        if(lClassName.includes("GEndEditor")) {
                            break;
                        }
                        if(lClassName.includes("GTitle1") ||
                            lClassName.includes("GTitle2") ||
                            lClassName.includes("GTitle3") ||
                            lClassName.includes("GImage") ||
                            lClassName.includes("GSummary1") ||
                            lClassName.includes("GSummary2") ||
                            lClassName.includes("GList1") ||
                            lClassName.includes("GList2") ||
                            lClassName.includes("GList3") ||
                            lClassName.includes("GList4") ||
                            lClassName.includes("GList5") ||
                            lClassName.includes("GList6") ||
                            lClassName.includes("GData1") ||
                            lClassName.includes("GData2") ||
                            lClassName.includes("GData3") ||
                            lClassName.includes("GPdf1") ||
                            lClassName.includes("GCode1") ||
                            lClassName.includes("GCode2") ||
                            lClassName.includes("GLink1") ||
                            lClassName.includes("GParallax1") ||
                            lClassName.includes("GColor1") ||
                            lClassName.includes("GStyle1") ||
                            lClassName.includes("GFormula1") ||
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
                    var lParentNode = lStartNode.parentNode;
                    if(!lSelection.toString()) {
                        while(1) {
                            var lClassName = lParentNode.className;
                            if(lClassName.includes("GEndEditor")) {
                                break;
                            }
                            if(lClassName.includes("GCode1")) {
                                lRange.selectNode(lParentNode);
                                lSelection.addRange(lRange);
                                var lFragment = lSelection.getRangeAt(0).cloneContents();
                                var lDiv = document.createElement('DIV');
                                lDiv.appendChild(lFragment);
                                var lHtml = lDiv.firstChild.firstChild.firstChild.innerHTML;
                                lHtml = this.encodeHtml(lHtml, "html");
                                document.execCommand("insertHTML", false, lHtml);
                                return;
                            }
                            lParentNode = lParentNode.parentNode;
                        }
                    }
                    if(!lSelection.toString()) return;
                    var lLang = GConfig.Instance().getData("LANGAUGE");
                	var lArg = prompt("Langage ?", lLang);
                    if(!lArg) return;
					var lArgMap = lArg.split(";");
                    if(lArgMap.length < 1) return;
					var lLanguage = lArgMap[0].trim();
                    if(!lLanguage) return;
                    var lFragment = lSelection.getRangeAt(0).cloneContents();
                    var lDiv = document.createElement('DIV');
                    lDiv.appendChild(lFragment);
                    lData = lDiv.innerHTML;
                    lData = this.encodeHtml(lData, "txt");
                    lData = this.encodeHtml(lData, "ace");
                    var lHtml = '';
                    lHtml += '<div class="GCode1">';
                    lHtml += '<div class="Code2"><pre class="AceCode" data-state="off" data-mode="'+lLanguage+'">';
                    lHtml += lData;
                    lHtml += '</pre></div>';
                    lHtml += '</div>';
                    document.execCommand("insertHTML", false, lHtml);
                    if(lLang != lLanguage) {
                        GConfig.Instance().setData("LANGAUGE", lLanguage);
                    }
                    break;
                //===============================================
                case 'Code2':
                    var lParentNode = lStartNode.parentNode;
                    if(!lSelection.toString()) {
                        while(1) {
                            var lClassName = lParentNode.className;
                            if(lClassName.includes("GEndEditor")) {
                                break;
                            }
                            if(lClassName.includes("GCode2")) {
                                lRange.selectNode(lParentNode);
                                lSelection.addRange(lRange);
                                document.execCommand("insertHTML", false, "");
                                return;
                            }
                            lParentNode = lParentNode.parentNode;
                        }
                    }
                    var lHtml = '';
                    lHtml += '<div class="Content0 GCode2">';
                    lHtml += '<div class="Body0">';
                    lHtml += '<b>ReadyDev</b> met à votre disposition,<br>';
                    lHtml += 'l\'ensemble des codes sources abordés dans ce tutoriel.<br><br>';
                    lHtml += '</div>';
                    lHtml += '<div class="Body16">';
                    lHtml += '<div class="Row23" id="FilesystemMenu"><div class="Row">Menu</div></div>';
                    lHtml += '<div class="Row24" id="FilesystemList"><div class="Row">File</div></div>';
                    lHtml += '</div>';
                    lHtml += '<script src="/js/class/GFilesystem.js"></script>';
                    lHtml += '<script src="/js/filesystem.js"></script>';
                    lHtml += '</div>';
                    document.execCommand("insertHTML", false, lHtml);
                    break;
                //===============================================
                case 'Code3':
                    var lParentNode = lStartNode.parentNode;
                    if(!lSelection.toString()) {
                        while(1) {
                            var lClassName = lParentNode.className;
                            if(lClassName.includes("GEndEditor")) {
                                break;
                            }
                            if(lClassName.includes("GCode3")) {
                                lRange.selectNode(lParentNode);
                                lSelection.addRange(lRange);
                                var lFragment = lSelection.getRangeAt(0).cloneContents();
                                var lDiv = document.createElement('DIV');
                                lDiv.appendChild(lFragment);
                                var lHtml = lDiv.firstChild.firstChild.innerHTML;
                                document.execCommand("insertHTML", false, lHtml);
                                return;
                            }
                            lParentNode = lParentNode.parentNode;
                        }
                    }
                    if(!lSelection.toString()) return;
                    var lColor = GConfig.Instance().getData("CODE_COLOR");
                	var lArg = prompt("Color ?", lColor);
                    if(!lArg) return;
					var lArgMap = lArg.split(";");
                    if(lArgMap.length < 1) return;
					var lColor = lArgMap[0].trim();
                    if(!lColor) return;
                    var lFragment = lSelection.getRangeAt(0).cloneContents();
                    var lDiv = document.createElement('DIV');
                    lDiv.appendChild(lFragment);
                    lData = lDiv.innerHTML;
                    lData = this.encodeHtml(lData, "txt");
                    lData = this.encodeHtml(lData, "ace");
                    var lHtml = '';
                    lHtml += '<span class="GCode3">';
                    lHtml += '<code style="color:'+lColor+';">';
                    lHtml += lData;
                    lHtml += '</code>';
                    lHtml += '</span>';
                    document.execCommand("insertHTML", false, lHtml);
                    GConfig.Instance().setData("CODE_COLOR", lColor);
                    break;
                //===============================================
                case 'Parallax1':
                    var lParentNode = lStartNode.parentNode;
                    if(!lSelection.toString()) {
                        while(1) {
                            var lClassName = lParentNode.className;
                            if(lClassName.includes("GEndEditor")) {
                                break;
                            }
                            if(lClassName.includes("GParallax1")) {
                                lRange.selectNode(lParentNode);
                                lSelection.addRange(lRange);
                                document.execCommand("insertHTML", false, "");
                                return;
                            }
                            lParentNode = lParentNode.parentNode;
                        }
                    }
                    var lHtml = '';
                    lHtml += '<div class="Parallax GParallax1">';
                    lHtml += '<div class="Img Binary">';
                    lHtml += '<div class="Caption">';
                    lHtml += '<a href="#"><div class="Text">Ajouter un titre...</div></a>';
                    lHtml += '</div>';
                    lHtml += '</div>';
                    lHtml += '<div class="Body2 Orange">';
                    lHtml += 'Ajouter un texte...';
                    lHtml += '</div>';
                    lHtml += '</div>';
                    document.execCommand("insertHTML", false, lHtml);
                    break;
                //===============================================
                case 'Color1':
                    var lParentNode = lStartNode.parentNode;
                    if(!lSelection.toString()) {
                        while(1) {
                            var lClassName = lParentNode.className;
                            if(lClassName.includes("GEndEditor")) {
                                break;
                            }
                            if(lClassName.includes("GColor1")) {
                                lRange.selectNode(lParentNode);
                                lSelection.addRange(lRange);
                                var lHtml = lParentNode.innerHTML;
                                document.execCommand("insertHTML", false, lHtml);
                                return;
                            }
                            lParentNode = lParentNode.parentNode;
                        }
                    }
                    if(!lSelection.toString()) return;
                	var lArg = prompt("Color ?","lime");
                    if(!lArg) return;
                    var lHtml = '';
                    lHtml += '<span class="GColor1" style="color:'+lArg+';">';
                    lHtml += lSelection;
                    lHtml += '</span>';
                    document.execCommand("insertHTML", false, lHtml);
                    break;
                //===============================================
                case 'Border1':
                    var lParentNode = lStartNode.parentNode;
                    if(!lSelection.toString()) {
                        while(1) {
                            var lClassName = lParentNode.className;
                            if(lClassName.includes("GEndEditor")) {
                                break;
                            }
                            if(lClassName.includes("GBorder1")) {
                                lRange.selectNode(lParentNode);
                                lSelection.addRange(lRange);
                                var lHtml = lParentNode.innerHTML;
                                document.execCommand("insertHTML", false, lHtml);
                                return;
                            }
                            lParentNode = lParentNode.parentNode;
                        }
                    }
                    if(!lSelection.toString()) return;
                	var lArg = prompt("Border ? Padding ?", "1px solid rgba(255,255,255,0.2);5px 10px;transparent");
                    if(!lArg) return;
					var lArgMap = lArg.split(";");
                    if(lArgMap.length < 3) return;
					var lBorder = lArgMap[0].trim();
					var lPadding = lArgMap[1].trim();
					var lBackground = lArgMap[2].trim();
                    if(!lBorder || !lPadding || !lBackground) return;
                    var lHtml = '';
                    lHtml += '<div class="GBorder1" style="border:'+lBorder+';padding:'+lPadding+';background-color:'+lBackground+';">';
                    var lParentNode = lStartNode.parentNode;
                    var lClassName = lParentNode.className;
                    if(lClassName.includes("Body3")) {
                        var lFragment = lSelection.getRangeAt(0).cloneContents();
                        var lElement = document.createElement("DIV");
                        lElement.appendChild(lFragment);
                        lHtml += lElement.innerHTML;
                    }
                    else {
                        lElement.appendChild(lStartNode.parentNode);
                        lHtml += lElement.innerHTML;
                    }
                    lHtml += '</div>';
                    document.execCommand("insertHTML", false, lHtml);
                    break;
                //===============================================
                case 'Style1':
                    var lAction = "None";
                    var lCurrentNode;
                    if(!lSelection.toString()) {
                        var lParentNode = lStartNode.parentNode;
                        while(1) {
                            var lClassName = lParentNode.className;
                            if(lClassName.includes("GEndEditor")) {
                                break;
                            }
                            if(lClassName.includes("GStyle1")) {
                                lAction = "Modify";
                                lCurrentNode = lParentNode;
                                break;
                            }
                            lParentNode = lParentNode.parentNode;
                        }
                    } 
                    else {
                        var lParentNode = lStartNode.parentNode;
                        while(1) {
                            var lClassName = lParentNode.className;
                            if(lClassName.includes("GEndEditor")) {
                                break;
                            }
                            if(lClassName.includes("GStyle1")) {
                                lAction = "Add";
                                lCurrentNode = lParentNode;
                                break;
                            }
                            lParentNode = lParentNode.parentNode;
                        }
                        if(lAction == "None") lAction = "New";
                    } 
                    if(lAction == "None") return;
                    var lArg = prompt("Style ?");
                    if(!lArg) return;
                    var lHtml = '';
                    if(lAction == "Modify") {
                        var lStyle = this.mergeMap([lCurrentNode.style.cssText,lArg]);
                        lCurrentNode.setAttribute("style", lStyle);
                        var lElement = document.createElement("DIV");
                        lElement.appendChild(lCurrentNode);
                        lHtml += lElement.innerHTML;
                    }
                    else {
                        lHtml += '<span class="GStyle1" style="'+lArg+'">';
                        if(lAction == "New") {
                            var lFragment = lSelection.getRangeAt(0).cloneContents();
                            var lElement = document.createElement("DIV");
                            lElement.appendChild(lFragment);
                            lHtml += lElement.innerHTML;
                        }
                        else if(lAction == "Add") {
                            var lElement = document.createElement("DIV");
                            lElement.appendChild(lCurrentNode);
                            lHtml += lElement.innerHTML;
                        }
                        lHtml += '</span>';
                    }
                    document.execCommand("insertHTML", false, lHtml);
                    break;
                //===============================================
                case 'Style2':
                    var lParentNode = lStartNode.parentNode;
                    if(!lSelection.toString()) {
                        while(1) {
                            var lClassName = lParentNode.className;
                            if(lClassName.includes("GEndEditor")) {
                                break;
                            }
                            if(lClassName.includes("GStyle1")) {
                                lRange.selectNode(lParentNode);
                                lSelection.addRange(lRange);
                                var lHtml = lParentNode.innerHTML;
                                document.execCommand("insertHTML", false, lHtml);
                                return;
                            }
                            lParentNode = lParentNode.parentNode;
                        }
                    }
                    break;
                //===============================================
                case 'Style3':
                    var lParentNode = lStartNode.parentNode;
                    if(!lSelection.toString()) {
                        while(1) {
                            var lClassName = lParentNode.className;
                            if(lClassName.includes("GEndEditor")) {
                                break;
                            }
                            if(lClassName.includes("GStyle1")) {
                                var lStyle = lParentNode.style.cssText;
                                alert(lStyle);
                                return;
                            }
                            lParentNode = lParentNode.parentNode;
                        }
                    }
                    break;
                //===============================================
                case 'Formula10':
                    GFormula.Instance().openFormulaEditor();
                    break;
                //===============================================
                case 'Formula1':
                    var lParentNode = lStartNode.parentNode;
                    while(1) {
                        var lClassName = lParentNode.className;
                        if(lClassName.includes("GEndEditor")) {
                            break;
                        }
                        if(lClassName.includes("GFormula1")) {
                            lRange.selectNode(lParentNode);
                            lSelection.addRange(lRange);
                            break;
                        }
                        lParentNode = lParentNode.parentNode;
                    }
                    var lFormulaText = GConfig.Instance().getData("FormulaText");
                    var lHtml = '';
                    lHtml += '<div class="Formula GFormula1">';
                    lHtml += '<div class="Formula2">';
                    lHtml += lFormulaText;
                    lHtml += '</div>';
                    lHtml += '</div>';
                    document.execCommand("insertHTML", false, lHtml);
                    break;
                //===============================================
                case 'Formula_Color':
                    var lParentNode = lStartNode.parentNode;
                    while(1) {
                        var lClassName = lParentNode.className;
                        if(lClassName.includes("GEndEditor")) {
                            break;
                        }
                        if(lClassName.includes("GFormula1")) {
                            lRange.selectNode(lParentNode);
                            lSelection.addRange(lRange);
                            break;
                        }
                        lParentNode = lParentNode.parentNode;
                    }
                    var lFormulaText = GConfig.Instance().getData("FormulaText");
                    var lHtml = '';
                    lHtml += '<div class="Formula GFormula1">';
                    lHtml += '<div class="Formula5">';
                    lHtml += lFormulaText;
                    lHtml += '</div>';
                    lHtml += '</div>';
                    document.execCommand("insertHTML", false, lHtml);
                    break;
                //===============================================
                case 'Formula2':
                    var lParentNode = lStartNode.parentNode;
                    while(1) {
                        var lClassName = lParentNode.className;
                        if(lClassName.includes("GEndEditor")) {
                            break;
                        }
                        if(lClassName.includes("GFormula1")) {
                            lParentNode = lParentNode.firstChild;
                            var lHtml = lParentNode.innerHTML;
                            lHtml = this.encodeHtml(lHtml, "tex");
                            GConfig.Instance().setData("FormulaText", lHtml);
                            break;
                        }
                        lParentNode = lParentNode.parentNode;
                    }
                    break;
                //===============================================
                case 'Formula3':
                    var lParentNode = lStartNode.parentNode;
                    while(1) {
                        var lClassName = lParentNode.className;
                        if(lClassName.includes("GEndEditor")) {
                            break;
                        }
                        if(lClassName.includes("GFormula1")) {
                            lRange.selectNode(lParentNode);
                            lSelection.addRange(lRange);
                            var lHtml = "";
                            document.execCommand("insertHTML", false, lHtml);
                            return;
                        }
                        lParentNode = lParentNode.parentNode;
                    }
                    break;
                //===============================================
                case 'Html1':
                    GHtmlEditor.Instance().openHtmlEditor();
                    break;
                //===============================================
                case 'Html2':
                    var lParentNode = lStartNode.parentNode;
                    if(!lSelection.toString()) {
                        while(1) {
                            var lClassName = lParentNode.className;
                            if(lClassName.includes("GEndEditor")) {
                                break;
                            }
                            lParentNode = lParentNode.parentNode;
                        }
                    }
                    var lHtmlEditorText = GConfig.Instance().getData("HtmlEditorText");
                    var lHtml = '';
                    lHtml += '<div class="Content0 GHtml1">';
                    lHtml += lHtmlEditorText;
                    lHtml += '</div>';
                    document.execCommand("insertHTML", false, lHtml);
                    break;
                //===============================================
                case 'Html3':
                    var lParentNode = lStartNode.parentNode;
                    if(!lSelection.toString()) {
                        while(1) {
                            var lClassName = lParentNode.className;
                            if(lClassName.includes("GEndEditor")) {
                                break;
                            }
                            if(lClassName.includes("GHtml1")) {
                                var lHtmlEditorText = GConfig.Instance().getData("HtmlEditorText");
                                lParentNode.innerHTML = lHtmlEditorText;
                                break;
                            }
                            lParentNode = lParentNode.parentNode;
                        }
                    }
                    break;
                //===============================================
                case 'Html4':
                    var lParentNode = lStartNode.parentNode;
                    if(!lSelection.toString()) {
                        while(1) {
                            var lClassName = lParentNode.className;
                            if(lClassName.includes("GEndEditor")) {
                                break;
                            }
                            if(lClassName.includes("GHtml1")) {
                                var lHtml = lParentNode.innerHTML;
                                GConfig.Instance().setData("HtmlEditorText", lHtml);
                                break;
                            }
                            lParentNode = lParentNode.parentNode;
                        }
                    }
                    break;
                //===============================================
                case 'Html5':
                    var lParentNode = lStartNode.parentNode;
                    if(!lSelection.toString()) {
                        while(1) {
                            var lClassName = lParentNode.className;
                            if(lClassName.includes("GEndEditor")) {
                                break;
                            }
                            if(lClassName.includes("GHtml1")) {
                                lRange.selectNode(lParentNode);
                                lSelection.addRange(lRange);
                                var lHtml = "";
                                document.execCommand("insertHTML", false, lHtml);
                                break;
                            }
                            lParentNode = lParentNode.parentNode;
                        }
                    }
                    break;
                //===============================================
                case 'Update1_All':
                    this.editReadyStyle("Summary2_Load", false);
                    this.editReadyStyle("Title1_ID", false);
                    this.editReadyStyle("Title2_ID", false);
                    this.editReadyStyle("Title3_ID", false);
                    this.editReadyStyle("Code1_XMP", false);
                    this.editReadyStyle("Img1_Lazy", false);
                    alert("La mise à jour est terminée !");
                    break;
                //===============================================
                case 'Summary2_Load':
                    var lNodeMap = document.getElementsByClassName("GSummary2");
                    var lHtml = '';
                    lHtml += '<div class="Row26">';
                    lHtml += 'Summary 2';
                        lHtml += '</div>';
                    for(var i = 0; i < lNodeMap.length; i++) {
                        var lSummary2_Node = lNodeMap[i];
                        lSummary2_Node.innerHTML = lHtml;
                    }
                    //alert("La mise à jour est terminée !");
                    break;
                //===============================================
                case 'Title1_ID':
                    var lNodeMap = document.getElementsByClassName("GTitle1");
                    for(var i = 0; i < lNodeMap.length; i++) {
                        var lTitleNode = lNodeMap[i].firstChild.firstChild.firstChild;
                        var lId = lTitleNode.getAttribute("id");
                        var lIdUpdate = GManager.Instance().getUrl(lId);
                        lTitleNode.setAttribute("id", lIdUpdate);
                    }
                    //alert("La mise à jour est terminée !");
                    break;
                //===============================================
                case 'Title2_ID':
                    var lNodeMap = document.getElementsByClassName("GTitle1");
                    for(var i = 0; i < lNodeMap.length; i++) {
                        var lTitleNode = lNodeMap[i].firstChild.firstChild.firstChild;
                        var lTitleParent = lTitleNode.parentNode;
                        var lTitleMap = lTitleParent.getElementsByClassName("GTitle2");
                        for(var j = 0; j < lTitleMap.length; j++) {
                            var lTitle = lTitleMap[j];
                            var lId = lTitleNode.innerText+"-"+lTitle.innerText;
                            var lIdUpdate = GManager.Instance().getUrl(lId);
                            lTitle.setAttribute("id", lIdUpdate);
                            var lHrefNode = lTitle.firstChild;
                            var lHref = lTitleNode.innerText;
                            var lHrefUpdate = GManager.Instance().getUrl(lHref);
                            lHrefUpdate = "#" + lHrefUpdate;
                            lHrefNode.setAttribute("href", lHrefUpdate);
                        }
                    }
                    //alert("La mise à jour est terminée !");
                    break;
                //===============================================
                case 'Title3_ID':
                    var lControl = new GControl();
                    lControl.title33();
                    break;
                //===============================================
                case 'Code1_XMP':
                    var lPreMap = document.getElementsByTagName("pre");
                    for(var i = 0; i < lPreMap.length; i++) {
                        var lPreNode = lPreMap[i];
                        if(lPreNode.firstChild.nodeType == Node.TEXT_NODE) {continue;}
                        if(lPreNode.firstChild.className.includes("AceCode") == false) {continue;}
                        var lNewDiv = document.createElement('DIV');

                        for(var j = 0; j < lPreNode.attributes.length; j++){
                            var lNodeName  = lPreNode.attributes.item(j).nodeName;
                            var lNodeValue = lPreNode.attributes.item(j).nodeValue;
                            lNewDiv.setAttribute(lNodeName, lNodeValue);
                        }
                        
                        lNewDiv.innerHTML = lPreNode.innerHTML;
                        lXmpMap = lNewDiv.firstChild;
                        
                        var lNewPre = document.createElement('PRE');

                        for(var j = 0; j < lXmpMap.attributes.length; j++){
                            var lNodeName  = lXmpMap.attributes.item(j).nodeName;
                            var lNodeValue = lXmpMap.attributes.item(j).nodeValue;
                            lNewPre.setAttribute(lNodeName, lNodeValue);
                        }
                        
                        lNewPre.innerHTML = lXmpMap.innerHTML;
                        lXmpMap.parentNode.replaceChild(lNewPre, lXmpMap);
                        lPreNode.parentNode.replaceChild(lNewDiv, lPreNode);
                    }
                    //alert("La mise à jour est terminée !");
                    break;
                //===============================================
                case 'Img1_Lazy':
                    var lImgMap = document.getElementsByTagName("img");
                    for(var i = 0; i < lImgMap.length; i++) {
                        var lImgNode = lImgMap[i];
                        var lSrcCheck = lImgNode.hasAttribute("src");
                        if(lSrcCheck == false) {continue;}
                        if(lImgNode.parentNode.className.includes("GImage") == false) {continue;}
                        var lImgSrc = lImgNode.getAttribute("src");
                        var lNewImg = document.createElement("IMG");
                        lNewImg.setAttribute("alt", lImgSrc);
                        lNewImg.setAttribute("class", "lazy");
                        lNewImg.setAttribute("data-src", lImgSrc);
                        lImgNode.parentNode.replaceChild(lNewImg, lImgNode);
                    }
                    //alert("La mise à jour est terminée !");
                    break;
                //===============================================
                }
            },
            //===============================================
            encodeHtml: function(data, lang) {
                var lEntityMap = {
                    '<': '&lt;|html;ace',
                    '>': '&gt;|html;ace',
                    '\n': '<br>|html',
                    '<br>': '\n|txt',
                    '&lt;': '<|txt',
                    '&gt;': '>|txt',
                    '&amp;': '&|tex;txt'
                };
                for(key in lEntityMap) {
                    var lVal = lEntityMap[key];
                    var lSplit = lVal.split("|");
                    var lVal2 = lSplit[0];
                    if(lSplit.length > 1) {
                        var lVal3 = lSplit[1];
                        var lSplit2 = lVal3.split(";");
                        var lIncludes = lSplit2.includes(lang);
                        if(!lIncludes) continue;
                    }
                    var lReg = new RegExp(key, 'g');
                    data = data.replace(lReg, lVal2);
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
                lData = this.encodeHtml(lData, "html");
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
            },
            //===============================================
            mergeMap: function(strMap){
                var lMap = {};
                for(var i in strMap){
                    var lKeyValueMap = this.createMap(strMap[i]);
                    for(var attr in  lKeyValueMap) {
                        lMap[attr] = lKeyValueMap[attr];
                    }
                }
                var lMerge = '';
                for(var attr in lMap){
                    lMerge += attr + ':' + ' ' + lMap[attr] + '; ';
                }
                return lMerge.trim();
            },
            //===============================================
            createMap: function(strKeyValue){
                var lMap = {};
                var lKeyValueMap = strKeyValue.split(';');
                for(var i = 0; i < lKeyValueMap.length; i++){
                    var lKeyValue = lKeyValueMap[i].split(':');
                    if(lKeyValue.length == 2){
                        lMap[lKeyValue[0].trim()] = lKeyValue[1].trim();
                    }
                }
                return lMap;
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
