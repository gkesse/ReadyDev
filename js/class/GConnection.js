//===============================================
class GConnection {
    //===============================================
    constructor() {

    }
    //===============================================
    openConnection(obj) {
        var lModalConnection = document.getElementById("ModalConnection");
        var lConnectionBody = document.getElementById("ConnectionBody");
        var lConnectionMsg = document.getElementById("ConnectionMsg");
        var lClassName = lConnectionBody.className;
        lConnectionMsg.style.display = "none";
        lConnectionBody.className = lClassName.replace(" AnimateShow", "");
        lConnectionBody.className = lClassName.replace(" AnimateHide", "");
        lConnectionBody.className += " AnimateShow";
        lModalConnection.style.display = "block";
    }
    //===============================================
    connect(obj) {
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
    }
    //===============================================
    closeConnection(obj) {
        var lModalConnection = document.getElementById("ModalConnection");
        var lConnectionBody = document.getElementById("ConnectionBody");
        var lClassName = lConnectionBody.className;
        lConnectionBody.className = lClassName.replace(" AnimateShow", "");
        lConnectionBody.className = lClassName.replace(" AnimateHide", "");
        lConnectionBody.className += " AnimateHide";
        setTimeout(function() {
            lModalConnection.style.display = "none";
        }, 400);
    }
    //===============================================
    sendConnection(email, pass) {
        var lConnectionMsg = document.getElementById("ConnectionMsg");
        var lConnectionForm = document.getElementById("ConnectionForm");
        lConnectionMsg.style.display = "none";
        var lXmlhttp = new XMLHttpRequest();
        lXmlhttp.onreadystatechange = function() {
            if(this.readyState == 4 && this.status == 200) {
                var lData = this.responseText;
                var lDataMap = JSON.parse(lData);
                if(!lDataMap["status"]) {
                    var lHtml = "<i style='color:#ff9933' class='fa fa-exclamation-triangle'></i> "; 
                    lHtml += lDataMap["msg"]; 
                    lConnectionMsg.innerHTML = lHtml;
                    lConnectionMsg.style.color = "#ff9933";
                    lConnectionMsg.style.display = "block";
                }
                else {
                    var lHtml = "<i style='color:#339933' class='fa fa-paper-plane-o'></i> "; 
                    lHtml += lDataMap["msg"]; 
                    lConnectionMsg.innerHTML = lHtml;
                    lConnectionMsg.style.color = "#339933";
                    lConnectionMsg.style.display = "block";
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
    }
    //===============================================
    openDisconnection(obj) {
        var lModalDisconnection = document.getElementById("ModalDisconnection");
        var lDisconnectionBody = document.getElementById("DisconnectionBody");
        var lClassName = lDisconnectionBody.className;
        lDisconnectionBody.className = lClassName.replace(" AnimateShow", "");
        lDisconnectionBody.className = lClassName.replace(" AnimateHide", "");
        lDisconnectionBody.className += " AnimateShow";
        lModalDisconnection.style.display = "block";
    }
    //===============================================
    disconnect(obj) {
        var lDisconnectionMsg = document.getElementById("DisconnectionMsg");
        var lXmlhttp = new XMLHttpRequest();
        lXmlhttp.onreadystatechange = function() {
            if(this.readyState == 4 && this.status == 200) {
                var lData = this.responseText;
                var lHtml = "<i style='color:#339933' class='fa fa-power-off'></i> "; 
                lHtml += lData; 
                lDisconnectionMsg.innerHTML = lHtml;
                lDisconnectionMsg.style.color = "#339933";
                lDisconnectionMsg.style.display = "block";
                location.reload();
            }
        }
        lXmlhttp.open("POST", "/php/req/connection.php", true);
        lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        lXmlhttp.send(
            "req="+"DISCONNECT"
            );            
    }
    //===============================================
    closeDisconnection(obj) {
        var lModalDisconnection = document.getElementById("ModalDisconnection");
        var lDisconnectionBody = document.getElementById("DisconnectionBody");
        var lClassName = lDisconnectionBody.className;
        lDisconnectionBody.className = lClassName.replace(" AnimateShow", "");
        lDisconnectionBody.className = lClassName.replace(" AnimateHide", "");
        lDisconnectionBody.className += " AnimateHide";
        setTimeout(function() {
            lModalDisconnection.style.display = "none";
        }, 400);
    }
    //===============================================
}
//===============================================
