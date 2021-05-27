//===============================================
var GLoader = (function() {
    //===============================================
    var m_instance;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            init: function() {

            },
            //===============================================
            loadSummary1: function(id) {
                var lObj = document.getElementById(id);
                var lNodeMap = document.getElementsByClassName("GTitle1");
                var lCount = 0;
				//var lTimer = setInterval(function() {
				setTimeout(function() {
                    //if(++lCount > 5) {clearInterval(lTimer);}
                    var lHtml = '';
                    for(var i = 0; i < lNodeMap.length; i++) {
                        var lTitle = lNodeMap[i].firstChild.firstChild.firstChild.innerText;
                        var lHrefUrl = GManager.Instance().getUrl(lTitle);
                        lHtml += '<div class="Item4">';
                        lHtml += '<span class="Icon10 fa fa-book"></span>';
                        lHtml += '<a class="Link4" href="#'+lHrefUrl+'">';
                        lHtml += lTitle;
                        lHtml += '</a>';
                        lHtml += '</div>';
                    }
                    lObj.innerHTML = lHtml;
				}, 50);
            },
            //===============================================
            loadSummary2: function(id) {
                var lObj = document.getElementById(id);
                var lAction = "None";
                var lCurrentNode;
                var lParentNode = lObj.parentNode;
                var lMainTitle = "";
                while(1) {
                    var lClassName = lParentNode.className;
                    if(lClassName.includes("MainPage")) {
                        break;
                    }
                    if(lClassName.includes("GTitle1")) {
                        lAction = "GTitle1";
                        lCurrentNode = lParentNode;
                        lMainTitle = lParentNode.firstChild.firstChild.firstChild.innerText;
                        lMainTitle += '-';
                        break;
                    }
                    lParentNode = lParentNode.parentNode;
                }
                var lNodeMap;
                if(lAction == "None") {
                    lNodeMap = document.getElementsByClassName("GTitle2");
                }
                else if(lAction == "GTitle1") {
                    lNodeMap = lCurrentNode.getElementsByClassName("GTitle2");
                }
                var lCount = 0;
				//var lTimer = setInterval(function() {
				setTimeout(function() {
                    //if(++lCount > 10) {clearInterval(lTimer);}
                    var lHtml = '';
                    for(var i = 0; i < lNodeMap.length; i++) {
                        var lTitle = lNodeMap[i].innerText
                        var lHrefUrl = GManager.Instance().getUrl(lMainTitle+lTitle);
                        lHtml += '<div class="Item4">';
                        lHtml += '<span class="Icon10 fa fa-book"></span>';
                        lHtml += '<a class="Link4" href="#'+lHrefUrl+'">';
                        lHtml += lTitle;
                        lHtml += '</a>';
                        lHtml += '</div>';
                    }
                    lObj.innerHTML = lHtml;
				}, 50);
            },
            //===============================================
            loadList1: function(id, file, key) {
                var lObj = document.getElementById(id);
                var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        var lData = this.responseText;
                        lObj.innerHTML = lData;
                    }
                }
                lXmlhttp.open("POST", "/php/req/loader.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
                "req=" + "LIST_1" +
                "&file=" + file +
                "&key=" + key
                );
            },
            //===============================================
            loadList2: function(id, file, key) {
                var lObj = document.getElementById(id);
                var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        var lData = this.responseText;
                        lObj.innerHTML = lData;
                    }
                }
                lXmlhttp.open("POST", "/php/req/loader.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
                "req=" + "LIST_2" +
                "&file=" + file +
                "&key=" + key
                );
            },
            //===============================================
            loadList3: function(id, file, key) {
                var lObj = document.getElementById(id);
                var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        var lData = this.responseText;
                        lObj.innerHTML = lData;
                    }
                }
                lXmlhttp.open("POST", "/php/req/loader.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
                "req=" + "LIST_3" +
                "&file=" + file +
                "&key=" + key
                );
            },
            //===============================================
            loadList4: function(id, file, key) {
                var lObj = document.getElementById(id);
                var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        var lData = this.responseText;
                        lObj.innerHTML = lData;
                    }
                }
                lXmlhttp.open("POST", "/php/req/loader.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
                "req=" + "LIST_4" +
                "&file=" + file +
                "&key=" + key
                );
            },
            //===============================================
            loadList5: function(id, file, key1, key2) {
                var lObj = document.getElementById(id);
                var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        var lData = this.responseText;
                        lObj.innerHTML = lData;
                    }
                }
                lXmlhttp.open("POST", "/php/req/loader.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
                "req=" + "LIST_5" +
                "&file=" + file +
                "&key1=" + key1 +
                "&key2=" + key2
                );
            },
            //===============================================
            loadList6: function(id, file, key1, key2) {
                var lObj = document.getElementById(id);
                var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        var lData = this.responseText;
                        lObj.innerHTML = lData;
                    }
                }
                lXmlhttp.open("POST", "/php/req/loader.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
                "req=" + "LIST_6" +
                "&file=" + file +
                "&key1=" + key1 +
                "&key2=" + key2
                );
            },
            //===============================================
            loadData1: function(id, file, key) {
                var lObj = document.getElementById(id);
                var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        var lData = this.responseText;
                        var lDataMap = JSON.parse(lData);
                        lObj.innerHTML = lDataMap["data"];
                    }
                }
                lXmlhttp.open("POST", "/php/req/loader.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
                "req=" + "DATA_1" +
                "&file=" + file +
                "&key=" + key
                );
            },
            //===============================================
            loadData2: function(id, file, key1, key2) {
                var lObj = document.getElementById(id);
                var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        var lData = this.responseText;
                        lObj.innerHTML = lData;
                    }
                }
                lXmlhttp.open("POST", "/php/req/loader.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
                "req=" + "DATA_2" +
                "&file=" + file +
                "&key1=" + key1 +
                "&key2=" + key2
                );
            },
            //===============================================
            loadData3: function(id, file, key1, key2) {
                var lObj = document.getElementById(id);
                var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        var lData = this.responseText;
                        lObj.innerHTML = lData;
                    }
                }
                lXmlhttp.open("POST", "/php/req/loader.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
                "req=" + "DATA_3" +
                "&file=" + file +
                "&key1=" + key1 +
                "&key2=" + key2
                );
            },
            //===============================================
            loadPdf1: function(id, file, key) {
                var lObj = document.getElementById(id);
                var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        var lData = this.responseText;
                        lObj.innerHTML = lData;
                    }
                }
                lXmlhttp.open("POST", "/php/req/loader.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
                "req=" + "PDF_1" +
                "&file=" + file +
                "&key=" + key
                );
            },
            //===============================================
            loadFileLink: function(id, file) {
                var lObj = document.getElementById(id);
                var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        var lData = this.responseText;
                        lObj.innerHTML = lData;
                    }
                }
                lXmlhttp.open("POST", "/php/req/loader.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
                "req=" + "FILE_LINK" +
                "&file=" + file
                );
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
GLoader.Instance().init();
//===============================================
