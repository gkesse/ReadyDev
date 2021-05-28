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
                //
                this.loadList1();
                this.loadList2();
                this.loadList3();
                this.loadList4();
                this.loadList5();
                this.loadList6();
                //
                this.loadData1();
                this.loadData2();
                this.loadData3();
            },
            //===============================================
            loadSummary1: function() {
                var lSummary1_Map = document.getElementsByClassName("GSummary1");
                if(lSummary1_Map.length == 0) {return;}
                lSummary1_Node = lSummary1_Map[0];
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
                lSummary1_Node.innerHTML = lHtml;
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
            loadList2: function() {
                var lList2_Map = document.getElementsByClassName("GList2");
                for(var i = 0; i < lList2_Map.length; i++) {
                    (function(){
                        var lList2_Node = lList2_Map[i];
                        var lList2_Url = lList2_Node.firstChild.firstChild.innerText;
                        var lList2_Item = lList2_Url.split(">");
                        var lList2_File = lList2_Item[1].trim();
                        var lList2_Key = lList2_Item[2].trim();

                        var lXmlhttp = new XMLHttpRequest();
                        lXmlhttp.onreadystatechange = function() {
                            if(this.readyState == 4 && this.status == 200) {
                                var lData = this.responseText;
                                lList2_Node.innerHTML = lData;
                            }
                        }
                                
                        lXmlhttp.open("POST", "/php/req/loader.php", true);
                        lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                        lXmlhttp.send(
                        "req=" + "LIST_2" +
                        "&file=" + lList2_File +
                        "&key=" + lList2_Key
                        );
                    })();
                }                    
            },
            //===============================================
            loadList3: function() {
                var lList3_Map = document.getElementsByClassName("GList3");
                for(var i = 0; i < lList3_Map.length; i++) {
                    (function(){
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
            loadList4: function() {
                var lList4_Map = document.getElementsByClassName("GList4");
                for(var i = 0; i < lList4_Map.length; i++) {
                    (function(){
                        var lList4_Node = lList4_Map[i];
                        var lList4_Url = lList4_Node.firstChild.firstChild.innerText;
                        var lList4_Item = lList4_Url.split(">");
                        var lList4_File = lList4_Item[1].trim();
                        var lList4_Key = lList4_Item[2].trim();

                        var lXmlhttp = new XMLHttpRequest();
                        lXmlhttp.onreadystatechange = function() {
                            if(this.readyState == 4 && this.status == 200) {
                                var lData = this.responseText;
                                lList4_Node.innerHTML = lData;
                            }
                        }
                        
                        lXmlhttp.open("POST", "/php/req/loader.php", true);
                        lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                        lXmlhttp.send(
                        "req=" + "LIST_4" +
                        "&file=" + lList4_File +
                        "&key=" + lList4_Key
                        );
                    })();
                }
            },
            //===============================================
            loadList5: function() {
                var lList5_Map = document.getElementsByClassName("GList5");
                for(var i = 0; i < lList5_Map.length; i++) {
                    (function(){
                        var lList5_Node = lList5_Map[i];
                        var lList5_Url = lList5_Node.firstChild.firstChild.innerText;
                        var lList5_Item = lList5_Url.split(">");
                        var lList5_File = lList5_Item[1].trim();
                        var lList5_Key1 = lList5_Item[2].trim();
                        var lList5_Key2 = lList5_Item[3].trim();

                        var lXmlhttp = new XMLHttpRequest();
                        lXmlhttp.onreadystatechange = function() {
                            if(this.readyState == 4 && this.status == 200) {
                                var lData = this.responseText;
                                lList5_Node.innerHTML = lData;
                            }
                        }
                        
                        lXmlhttp.open("POST", "/php/req/loader.php", true);
                        lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                        lXmlhttp.send(
                        "req=" + "LIST_5" +
                        "&file=" + lList5_File +
                        "&key1=" + lList5_Key1 +
                        "&key2=" + lList5_Key2
                        );
                    })();
                }
            },
            //===============================================
            loadList6: function() {
                var lList6_Map = document.getElementsByClassName("GList6");
                for(var i = 0; i < lList6_Map.length; i++) {
                    (function(){
                        var lList6_Node = lList6_Map[i];
                        var lList6_Url = lList6_Node.firstChild.firstChild.innerText;
                        var lList6_Item = lList6_Url.split(">");
                        var lList6_File = lList6_Item[1].trim();
                        var lList6_Key1 = lList6_Item[2].trim();
                        var lList6_Key2 = lList6_Item[3].trim();

                        var lXmlhttp = new XMLHttpRequest();
                        lXmlhttp.onreadystatechange = function() {
                            if(this.readyState == 4 && this.status == 200) {
                                var lData = this.responseText;
                                lList6_Node.innerHTML = lData;
                            }
                        }
                        
                        lXmlhttp.open("POST", "/php/req/loader.php", true);
                        lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                        lXmlhttp.send(
                        "req=" + "LIST_6" +
                        "&file=" + lList6_File +
                        "&key1=" + lList6_Key1 +
                        "&key2=" + lList6_Key2
                        );
                    })();
                }
            },
            //===============================================
            loadData1: function(id, file, key) {
                var lData1_Map = document.getElementsByClassName("GData1");
                for(var i = 0; i < lData1_Map.length; i++) {
                    var lData1_Node = lData1_Map[i];
                    var lData1_Url = lData1_Node.firstChild.firstChild.innerText;
                    var lData1_Item = lData1_Url.split(">");
                    var lData1_File = lData1_Item[1].trim();
                    var lData1_Key = lData1_Item[2].trim();

                    var lXmlhttp = new XMLHttpRequest();
                    lXmlhttp.onreadystatechange = function() {
                        if(this.readyState == 4 && this.status == 200) {
                            var lData = this.responseText;
                            lData1_Node.innerHTML = lData;
                        }
                    }
                    
                    lXmlhttp.open("POST", "/php/req/loader.php", true);
                    lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    lXmlhttp.send(
                    "req=" + "DATA_1" +
                    "&file=" + lData1_File +
                    "&key=" + lData1_Key
                    );
                }
            },
            //===============================================
            loadData2: function() {
                var lData2_Map = document.getElementsByClassName("GData2");
                for(var i = 0; i < lData2_Map.length; i++) {
                    (function(){
                        var lData2_Node = lData2_Map[i];
                        var lData2_Url = lData2_Node.firstChild.firstChild.innerText;
                        var lData2_Item = lData2_Url.split(">");
                        var lData2_File = lData2_Item[1].trim();
                        var lData2_Key1 = lData2_Item[2].trim();
                        var lData2_Key2 = lData2_Item[3].trim();

                        var lXmlhttp = new XMLHttpRequest();
                        lXmlhttp.onreadystatechange = function() {
                            if(this.readyState == 4 && this.status == 200) {
                                var lData = this.responseText;
                                lData2_Node.innerHTML = lData;
                            }
                        }
                        
                        lXmlhttp.open("POST", "/php/req/loader.php", true);
                        lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                        lXmlhttp.send(
                        "req=" + "DATA_2" +
                        "&file=" + lData2_File +
                        "&key1=" + lData2_Key1 +
                        "&key2=" + lData2_Key2
                        );
                    })();
                }
            },
            //===============================================
            loadData3: function() {
                var lData3_Map = document.getElementsByClassName("GData3");
                for(var i = 0; i < lData3_Map.length; i++) {
                    (function(){
                        var lData3_Node = lData3_Map[i];
                        var lData3_Url = lData3_Node.firstChild.firstChild.innerText;
                        var lData3_Item = lData3_Url.split(">");
                        var lData3_File = lData3_Item[1].trim();
                        var lData3_Key1 = lData3_Item[2].trim();
                        var lData3_Key2 = lData3_Item[3].trim();

                        var lXmlhttp = new XMLHttpRequest();
                        lXmlhttp.onreadystatechange = function() {
                            if(this.readyState == 4 && this.status == 200) {
                                var lData = this.responseText;
                                lData3_Node.innerHTML = lData;
                            }
                        }
                        
                        lXmlhttp.open("POST", "/php/req/loader.php", true);
                        lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                        lXmlhttp.send(
                        "req=" + "DATA_3" +
                        "&file=" + lData3_File +
                        "&key1=" + lData3_Key1 +
                        "&key2=" + lData3_Key2
                        );
                    })();
                }
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
