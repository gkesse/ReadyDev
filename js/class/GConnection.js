//===============================================
var GConnection = (function() {
    //===============================================
    var m_instance;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            init: function() {

            },
            //===============================================
            openConnection: function(obj) {
				var lModalConnection = document.getElementById("ModalConnection");
				var lConnectionBody = document.getElementById("ConnectionBody");
				var lConnectionMsg = document.getElementById("ConnectionMsg");
				var lClassName = lConnectionBody.className;
                lConnectionMsg.style.display = "none";
				lConnectionBody.className = lClassName.replace(" AnimateShow", "");
				lConnectionBody.className = lClassName.replace(" AnimateHide", "");
                lConnectionBody.className += " AnimateShow";
				lModalConnection.style.display = "block";
            },
            //===============================================
            connect: function(obj) {
				var lEmail = document.getElementsByName("Email")[0];
				var lPassword = document.getElementsByName("Password")[0];
				var lConnectionMsg = document.getElementById("ConnectionMsg");
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
                    lConnectionMsg.innerHTML = lHtml;
                    lConnectionMsg.style.display = "block";
                    lConnectionMsg.style.color = "#ff9933";
                }
                else {
                    this.sendConnection(lEmail.value, lPassword.value);
                }
            },
            //===============================================
            closeConnection: function(obj) {
				var lModalConnection = document.getElementById("ModalConnection");
				var lConnectionBody = document.getElementById("ConnectionBody");
				var lClassName = lConnectionBody.className;
				lConnectionBody.className = lClassName.replace(" AnimateShow", "");
				lConnectionBody.className = lClassName.replace(" AnimateHide", "");
                lConnectionBody.className += " AnimateHide";
				setTimeout(function() {
					lModalConnection.style.display = "none";
				}, 400);
            },
            //===============================================
            sendConnection: function(email, pass) {
				var lConnectionMsg = document.getElementById("ConnectionMsg");
				var lConnectionForm = document.getElementById("ConnectionForm");
                lConnectionMsg.style.display = "none";
                var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        var lData = this.responseText;
                        var lDataMap = JSON.parse(lData);
                        if(!lDataMap["status"]) {
                            var lHtml = "<i class='fa fa-exclamation-triangle'></i> "; 
                            lHtml += lDataMap["msg"]; 
                            lConnectionMsg.innerHTML = lHtml;
                            lConnectionMsg.style.color = "#ff9933";
                            lConnectionMsg.style.display = "block";
                        }
                        else {
                            var lHtml = "<i class='fa fa-check-circle'></i> "; 
                            lHtml += lDataMap["msg"]; 
                            lConnectionMsg.innerHTML = lHtml;
                            lConnectionMsg.style.display = "block";
                            lConnectionMsg.style.color = "#339933";
                            lConnectionForm.submit();
                        }
                    }
                }
                lXmlhttp.open("POST", "/php/req/connection.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
					"req="+"CONNECT"+
					"&email="+email+
					"&password="+pass
                    );            
            },
            //===============================================
            openDisconnection: function(obj) {
				var lModalDisconnection = document.getElementById("ModalDisconnection");
				//var lModalDisconnectionCtn = document.getElementById("ModalDisconnectionCtn");
				//var lClassName = lModalDisconnectionCtn.className;
				//lModalDisconnectionCtn.className = lClassName.replace(" ModalAnimHide", " ModalAnimShow");
				lModalDisconnection.style.display = "block";
            },
            //===============================================
            closeDisconnection: function(obj) {
				var lModalDisconnection = document.getElementById("ModalDisconnection");
				var lModalDisconnectionCtn = document.getElementById("ModalDisconnectionCtn");
				var lClassName = lModalDisconnectionCtn.className;
				lModalDisconnectionCtn.className = lClassName.replace(" ModalAnimShow", " ModalAnimHide");
				setTimeout(function() {
					lModalDisconnection.style.display = "none";
				}, 400);
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
GConnection.Instance().init();
//===============================================
