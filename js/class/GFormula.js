//===============================================
var GFormula = (function() {
    //===============================================
    var m_instance;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            init: function() {

            },
            //===============================================
            openFormula: function(obj) {
				var lModalFormula = document.getElementById("ModalFormula");
				var lFormulaBody = document.getElementById("FormulaBody");
				var lFormulaMsg = document.getElementById("FormulaMsg");
				var lClassName = lFormulaBody.className;
                lFormulaMsg.style.display = "none";
				lFormulaBody.className = lClassName.replace(" AnimateShow", "");
				lFormulaBody.className = lClassName.replace(" AnimateHide", "");
                lFormulaBody.className += " AnimateShow";
				lModalFormula.style.display = "block";
            },
            //===============================================
            viewFormula: function(obj) {
				var lFormulaText = document.getElementById("FormulaText");
				var lFormulaShow = document.getElementById("FormulaShow");
                var lHtml = '';
                lHtml += lFormulaText.value;
                lHtml += '<script type="text/x-mathjax-config">';
                lHtml += 'MathJax.Hub.Config({';
                lHtml += 'tex2jax: {inlineMath: [["$","$"],["\\(","\\)"]]}';
                lHtml += '});';
                lHtml += '</script>';
                lFormulaShow.innerHTML = lFormulaText.value;
            },
            //===============================================
            connect: function(obj) {
				var lEmail = document.getElementsByName("Email")[0];
				var lPassword = document.getElementsByName("Password")[0];
				var lFormulaMsg = document.getElementById("FormulaMsg");
                var lRegExp = /\S+@\S+\.\S+/;
                var lMessage = "";

                if(!lEmail.value.length) {
                    lMessage = "Email est obligatoire";
                }
                else if(!lRegExp.test(lEmail.value)) {
                    lMessage = "Email est incorrect";
                }
                else if(!lPassword.value.length) {
                    lMessage = "Mot de passe est obligatoire";
                }
                
                if(lMessage.length) {
                    var lHtml = "<i style='color:#ff9933' class='fa fa-exclamation-triangle'></i> "; 
                    lHtml += lMessage; 
                    lFormulaMsg.innerHTML = lHtml;
                    lFormulaMsg.style.display = "block";
                    lFormulaMsg.style.color = "#ff9933";
                }
                else {
                    this.sendFormula(lEmail.value, lPassword.value);
                }
            },
            //===============================================
            closeFormula: function(obj) {
				var lModalFormula = document.getElementById("ModalFormula");
				var lFormulaBody = document.getElementById("FormulaBody");
				var lClassName = lFormulaBody.className;
				lFormulaBody.className = lClassName.replace(" AnimateShow", "");
				lFormulaBody.className = lClassName.replace(" AnimateHide", "");
                lFormulaBody.className += " AnimateHide";
				setTimeout(function() {
					lModalFormula.style.display = "none";
				}, 400);
            },
            //===============================================
            sendFormula: function(email, pass) {
				var lFormulaMsg = document.getElementById("FormulaMsg");
				var lFormulaForm = document.getElementById("FormulaForm");
                lFormulaMsg.style.display = "none";
                var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        var lData = this.responseText;
                        var lDataMap = JSON.parse(lData);
                        if(!lDataMap["status"]) {
                            var lHtml = "<i style='color:#ff9933' class='fa fa-exclamation-triangle'></i> "; 
                            lHtml += lDataMap["msg"]; 
                            lFormulaMsg.innerHTML = lHtml;
                            lFormulaMsg.style.color = "#ff9933";
                            lFormulaMsg.style.display = "block";
                        }
                        else {
                            var lHtml = "<i style='color:#339933' class='fa fa-paper-plane-o'></i> "; 
                            lHtml += lDataMap["msg"]; 
                            lFormulaMsg.innerHTML = lHtml;
                            lFormulaMsg.style.color = "#339933";
                            lFormulaMsg.style.display = "block";
                            lFormulaForm.submit();
                        }
                    }
                }
                lXmlhttp.open("POST", "/php/req/Formula.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
					"req="+"CONNECT"+
					"&email="+email+
					"&password="+pass
                    );            
            },
            //===============================================
            openDisFormula: function(obj) {
				var lModalDisFormula = document.getElementById("ModalDisFormula");
				var lDisFormulaBody = document.getElementById("DisFormulaBody");
				var lClassName = lDisFormulaBody.className;
				lDisFormulaBody.className = lClassName.replace(" AnimateShow", "");
				lDisFormulaBody.className = lClassName.replace(" AnimateHide", "");
                lDisFormulaBody.className += " AnimateShow";
				lModalDisFormula.style.display = "block";
            },
            //===============================================
            disconnect: function(obj) {
				var lDisFormulaMsg = document.getElementById("DisFormulaMsg");
                var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        var lData = this.responseText;
                        var lHtml = "<i style='color:#339933' class='fa fa-power-off'></i> "; 
                        lHtml += lData; 
                        lDisFormulaMsg.innerHTML = lHtml;
                        lDisFormulaMsg.style.color = "#339933";
                        lDisFormulaMsg.style.display = "block";
                        location.reload();
                    }
                }
                lXmlhttp.open("POST", "/php/req/Formula.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
					"req="+"DISCONNECT"
                    );            
            },
            //===============================================
            closeDisFormula: function(obj) {
				var lModalDisFormula = document.getElementById("ModalDisFormula");
				var lDisFormulaBody = document.getElementById("DisFormulaBody");
				var lClassName = lDisFormulaBody.className;
				lDisFormulaBody.className = lClassName.replace(" AnimateShow", "");
				lDisFormulaBody.className = lClassName.replace(" AnimateHide", "");
                lDisFormulaBody.className += " AnimateHide";
				setTimeout(function() {
					lModalDisFormula.style.display = "none";
				}, 400);
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
GFormula.Instance().init();
//===============================================
