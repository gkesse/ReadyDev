//===============================================
var GContact = (function() {
    //===============================================
    var m_instance;
	var MESSAGE_MAX = 1000;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            init: function() {
                var lMessageSendRes = document.getElementById("MessageSendRes");
                lMessageSendRes.style.display = "none";
				this.messageCount(0);
            },
            //===============================================
            messageCount: function(val) {
                var lMessageCount = document.getElementById("MessageCount");
                var lMessageEdit = document.getElementById("MessageEdit");
				lMessageEdit.maxLength = MESSAGE_MAX;
				lMessageCount.innerHTML = String(val) + " / " + String(MESSAGE_MAX);
            },
            //===============================================
            messageChange: function() {
                var lMessageEdit = document.getElementById("MessageEdit");
				var lMessage = lMessageEdit.value;
				var lLength = lMessage.length;
				this.messageCount(lLength);
            },
            //===============================================
            messageSend: function() {
                var lMessageSendRes = document.getElementById("MessageSendRes");
				var lClassName = lMessageSendRes.className;
				var lValid = true;
				lMessageSendResVal = "";
				lMessageSendRes.style.display = "block";
                lValid &= this.messageNameValid();
                lValid &= this.messageEmailValid();
                lValid &= this.messageSubjectValid();
                lValid &= this.messageEditValid();
				if(lValid) {
					lMessageSendResVal += "<div class='Succes'>";
					lMessageSendResVal += "<i class='Icon8 fa fa-check-circle'></i> ";
					lMessageSendResVal += "SUCCÈS: Votre message a bien été envoyé";
					lMessageSendResVal += "</div>";
				}
				else {
					lMessageSendResVal += "<div class='Error2'>";
					lMessageSendResVal += "<i class='Icon9 fa fa-exclamation-triangle'></i> ";
					lMessageSendResVal += "ERREUR: Impossible d'envoyer votre message";
					lMessageSendResVal += "</div>";
				}
				lMessageSendRes.innerHTML = lMessageSendResVal;
				if(lValid) {
					this.messageSendMail();
					this.messageClear();
				}
            },
            //===============================================
            messageNameValid: function() {
                var lMessageName = document.getElementById("MessageName");
				var lMessageNameMsg = document.getElementById("MessageNameMsg");
				var lMessageNameBrd = document.getElementById("MessageNameBrd");
				var lMessage = lMessageName.value;
				var lLength = lMessage.length;
				var lClassName = lMessageNameBrd.className;
				lMessageNameMsg.innerHTML = "";
				lMessageNameBrd.className = lClassName.replace(" Error", "");
				if(!lLength) {
					lMessageNameMsg.innerHTML = "Nom est obligatoire";
					lMessageNameBrd.className += " Error";
					return false;
				}
				return true;
            },
            //===============================================
            messageEmailValid: function() {
                var lMessageEmail = document.getElementById("MessageEmail");
				var lMessageEmailMsg = document.getElementById("MessageEmailMsg");
				var lMessageEmailBrd = document.getElementById("MessageEmailBrd");
				var lMessage = lMessageEmail.value;
				var lLength = lMessage.length;
				var lClassName = lMessageEmailBrd.className;
				var m_regExp = /\S+@\S+\.\S+/;
				var lValid;
				lMessageEmailMsg.innerHTML = "";
				lMessageEmailBrd.className = lClassName.replace(" Error", "");
				if(!lLength) {
					lMessageEmailMsg.innerHTML = "Email est obligatoire";
					lMessageEmailBrd.className += " Error";
					return false;
				}
				lValid = m_regExp.test(lMessage);
				if(!lValid) {
					lMessageEmailMsg.innerHTML = "Email est incorrect";
					lMessageEmailBrd.className += " Error";
					return false;
				}
				return true;
            },
            //===============================================
            messageSubjectValid: function() {
                var lMessageSubjectId = document.getElementById("MessageSubject");
				var lMessageSubjectMsg = document.getElementById("MessageSubjectMsg");
				var lMessageSubjectBrd = document.getElementById("MessageSubjectBrd");
				var lMessage = lMessageSubjectId.value;
				var lLength = lMessage.length;
				var lClassName = lMessageSubjectBrd.className;
				lMessageSubjectMsg.innerHTML = "";
				lMessageSubjectBrd.className = lClassName.replace(" Error", "");
				if(!lLength) {
					lMessageSubjectMsg.innerHTML = "Objet est obligatoire";
					lMessageSubjectBrd.className += " Error";
					return false;
				}
				return true;
            },
            //===============================================
            messageEditValid: function() {
                var lMessageEdit = document.getElementById("MessageEdit");
				var lMessageEditMsg = document.getElementById("MessageEditMsg");
				var lMessageEditBrd = document.getElementById("MessageEditBrd");
				var lMessage = lMessageEdit.value;
				var lLength = lMessage.length;
				var lClassName = lMessageEditBrd.className;
				lMessageEditMsg.innerHTML = "";
				lMessageEditBrd.className = lClassName.replace(" Error", "");
				if(!lLength) {
					lMessageEditMsg.innerHTML = "Message est obligatoire";
					lMessageEditBrd.className += " Error";
					return false;
				}
				return true;
            },
            //===============================================
            messageClear: function() {
                var lMessageName = document.getElementById("MessageName");
                var lMessageEmail = document.getElementById("MessageEmail");
                var lMessageSubject = document.getElementById("MessageSubject");
                var lMessageEdit = document.getElementById("MessageEdit");
				lMessageName.value = "";
				lMessageEmail.value = "";
				lMessageSubject.value = "";
				lMessageEdit.value = "";
            },
            //===============================================
            messageSendMail: function() {
                var lMessageName = document.getElementById("MessageName");
                var lMessageEmail = document.getElementById("MessageEmail");
                var lMessageSubject = document.getElementById("MessageSubject");
                var lMessageEdit = document.getElementById("MessageEdit");
				var lName = lMessageName.value;
				var lEmail = lMessageEmail.value;
				var lSubject = lMessageSubject.value;
				var lMessage = lMessageEdit.value;
                var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {

                    }
                }
                lXmlhttp.open("POST", "/php/req/contact.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
					"nameValue="+lName+
					"&emailValue="+lEmail+
					"&subjectValue="+lSubject+
					"&messageValue="+lMessage
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
GContact.Instance().init();
//===============================================
