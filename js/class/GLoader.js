//===============================================
var GLoader = (function() {
    //===============================================
    var m_instance;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            init: function() {
                this.loadSummary1();
                this.loadSummary2();
                this.loadList1();
                this.loadList3();
            },
            //===============================================
            loadSummary1: function() {
                var lSummary1 = document.getElementsByClassName("GSummary1")[0];
                var lTitle1_Map = document.getElementsByClassName("GTitle1");
                var lHtml = '';
                for(var i = 0; i < lTitle1_Map.length; i++) {
                    var lTitle1 = lTitle1_Map[i].firstChild.firstChild.firstChild.innerText;
                    var lTitle1_Href = GManager.Instance().getUrl(lTitle1);
                    lHtml += '<div class="Item4">';
                    lHtml += '<span class="Icon10 fa fa-book"></span>';
                    lHtml += '<a class="Link4" href="#'+lTitle1_Href+'">';
                    lHtml += lTitle1;
                    lHtml += '</a>';
                    lHtml += '</div>';
                }
                lSummary1.innerHTML = lHtml;
            },
            //===============================================
            loadSummary2: function() {
                var lSummary2_Map = document.getElementsByClassName("GSummary2");
                for(var i = 0; i < lSummary2_Map.length; i++) {
                    var lSummary2 = lSummary2_Map[i];
                    var lTitle2_Map = lSummary2.parentNode.getElementsByClassName("GTitle2");
                    var lHtml = '';
                    for(var j = 0; j < lSummary2_Map.length; j++) {
                        var lTitle2_Node = lTitle2_Map[j];
                        var lTitle2 = lTitle2_Node.firstChild.innerText;
                        var lTitle2_Href = GManager.Instance().getUrl(lTitle2);
                        lHtml += '<div class="Item4">';
                        lHtml += '<i class="Icon10 fa fa-book"></i>';
                        lHtml += '<a class="Link4" href="#'+lTitle2_Href+'">';
                        lHtml += lTitle2;
                        lHtml += '</a>';
                        lHtml += '</div>';
                    }
                    lSummary2.innerHTML = lHtml;
                }
            },
            //===============================================
            loadList1: function() {
                var lList1_Map = document.getElementsByClassName("GList1");
                for(var i = 0; i < lList1_Map.length; i++) {
                    var lList1_Node = lList1_Map[i];
                    var lList1_Url = lList1_Node.firstChild.firstChild.innerText;
                    var lList1_Item = lList1_Url.split(">");
                    var lList1_File = lList1_Item[1].trim();
                    var lList1_Key = lList1_Item[2].trim();

                    var lXmlhttp = new XMLHttpRequest();
                    lXmlhttp.onreadystatechange = function() {
                        if(this.readyState == 4 && this.status == 200) {
                            var lData = this.responseText;
                            lList1_Node.innerHTML = lData;
                        }
                    }
                    
                    lXmlhttp.open("POST", "/php/req/loader.php", true);
                    lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    lXmlhttp.send(
                    "req=" + "LIST_1" +
                    "&file=" + lList1_File +
                    "&key=" + lList1_Key
                    );
                }
            },
            //===============================================
            loadList2: function(id, file, key) {
				setTimeout(function() {
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
                }, 2);
            },
            //===============================================
            loadList3: function() {
                    var lList3_Map = document.getElementsByClassName("GList3");
                    for(var i = 0; i < lList3_Map.length; i++) {
                        (function () {
                            var lList3_Node = lList3_Map[i];
                            var lList3_Url = lList3_Node.firstChild.firstChild.innerText;
                            var lList3_Item = lList3_Url.split(">");
                            var lList3_File = lList3_Item[1].trim();
                            var lList3_Key = lList3_Item[2].trim();

                            var lXmlhttp = new XMLHttpRequest();
                            lXmlhttp.onreadystatechange = function() {
                                if(this.readyState == 4 && this.status == 200) {
                                    var lData = this.responseText;
                                    lList3_Node.innerHTML = lData;
                                }
                            }
                            
                            lXmlhttp.open("POST", "/php/req/loader.php", true);
                            lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                            lXmlhttp.send(
                            "req=" + "LIST_3" +
                            "&file=" + lList3_File +
                            "&key=" + lList3_Key
                            );
                        })();
                    }
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
