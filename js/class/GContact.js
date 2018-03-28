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
                var m_MessageSendRes = document.getElementById("MessageSendRes");
                MessageSendRes.style.display = "none";
				this.messageCount(0);
            },
            //===============================================
            messageCount: function(val) {
                var m_MessageCount = document.getElementById("MessageCount");
                var m_MessageEdit = document.getElementById("MessageEdit");
				m_MessageEdit.maxLength = MESSAGE_MAX;
				m_MessageCount.innerHTML = String(val) + " / " + String(MESSAGE_MAX);
            },
            //===============================================
            messageChange: function() {
                var m_MessageEdit = document.getElementById("MessageEdit");
				var m_message = m_MessageEdit.value;
				var m_length = m_message.length;
				this.messageCount(m_length);
            },
            //===============================================
            messageSend: function() {
                var m_MessageSendRes = document.getElementById("MessageSendRes");
				var m_className = m_MessageSendRes.className;
				var m_valid = true;
				m_MessageSendResVal = "";
				m_MessageSendRes.className = m_className.replace("", "");
				m_MessageSendRes.style.display = "block";
                m_valid &= this.messageNameValid();
                m_valid &= this.messageEmailValid();
                m_valid &= this.messageSubjectValid();
                m_valid &= this.messageEditValid();
				if(m_valid) {
					m_MessageSendResVal += "<div class='scca'>";
					m_MessageSendResVal += "<i class='clrb fa fa-check-circle'></i> ";
					m_MessageSendResVal += "SUCCÈS: Votre message a bien été envoyé";
					m_MessageSendResVal += "</div>";
					
				}
				else {
					m_MessageSendResVal += "<div class='errb'>";
					m_MessageSendResVal += "<i class='clra fa fa-exclamation-triangle'></i> ";
					m_MessageSendResVal += "ERREUR: Impossible d'envoyer votre message";
					m_MessageSendResVal += "</div>";
				}
				m_MessageSendRes.innerHTML = m_MessageSendResVal;
				if(m_valid) {
					this.messageSendMail();
					this.messageClear();
				}
            },
            //===============================================
            messageNameValid: function() {
                var m_MessageName = document.getElementById("MessageName");
				var m_MessageNameMsg = document.getElementById("MessageNameMsg");
				var m_MessageNameBrd = document.getElementById("MessageNameBrd");
				var m_message = m_MessageName.value;
				var m_length = m_message.length;
				var m_className = m_MessageNameBrd.className;
				m_MessageNameMsg.innerHTML = "";
				m_MessageNameBrd.className = m_className.replace(" errc", "");
				if(!m_length) {
					m_MessageNameMsg.innerHTML = "Nom est obligatoire";
					m_MessageNameBrd.className += " errc";
					return false;
				}
				return true;
            },
            //===============================================
            messageEmailValid: function() {
                var m_MessageEmail = document.getElementById("MessageEmail");
				var m_MessageEmailMsg = document.getElementById("MessageEmailMsg");
				var m_MessageEmailBrd = document.getElementById("MessageEmailBrd");
				var m_message = m_MessageEmail.value;
				var m_length = m_message.length;
				var m_className = m_MessageEmailBrd.className;
				var m_regExp = /\S+@\S+\.\S+/;
				var m_valid;
				m_MessageEmailMsg.innerHTML = "";
				m_MessageEmailBrd.className = m_className.replace(" errc", "");
				if(!m_length) {
					m_MessageEmailMsg.innerHTML = "Email est obligatoire";
					m_MessageEmailBrd.className += " errc";
					return false;
				}
				m_valid = m_regExp.test(m_message);
				if(!m_valid) {
					m_MessageEmailMsg.innerHTML = "Email est incorrect";
					m_MessageEmailBrd.className += " errc";
					return false;
				}
				return true;
            },
            //===============================================
            messageSubjectValid: function() {
                var m_MessageSubjectId = document.getElementById("MessageSubject");
				var m_MessageSubjectMsg = document.getElementById("MessageSubjectMsg");
				var m_MessageSubjectBrd = document.getElementById("MessageSubjectBrd");
				var m_message = m_MessageSubjectId.value;
				var m_length = m_message.length;
				var m_className = m_MessageSubjectBrd.className;
				m_MessageSubjectMsg.innerHTML = "";
				m_MessageSubjectBrd.className = m_className.replace(" errc", "");
				if(!m_length) {
					m_MessageSubjectMsg.innerHTML = "Objet est obligatoire";
					m_MessageSubjectBrd.className += " errc";
					return false;
				}
				return true;
            },
            //===============================================
            messageEditValid: function() {
                var m_MessageEdit = document.getElementById("MessageEdit");
				var m_MessageEditMsg = document.getElementById("MessageEditMsg");
				var m_MessageEditBrd = document.getElementById("MessageEditBrd");
				var m_message = m_MessageEdit.value;
				var m_length = m_message.length;
				var m_className = m_MessageEditBrd.className;
				m_MessageEditMsg.innerHTML = "";
				m_MessageEditBrd.className = m_className.replace(" errc", "");
				if(!m_length) {
					m_MessageEditMsg.innerHTML = "Message est obligatoire";
					m_MessageEditBrd.className += " errc";
					return false;
				}
				return true;
            },
            //===============================================
            messageClear: function() {
                var m_MessageName = document.getElementById("MessageName");
                var m_MessageEmail = document.getElementById("MessageEmail");
                var m_MessageSubject = document.getElementById("MessageSubject");
                var m_MessageEdit = document.getElementById("MessageEdit");
				m_MessageName.value = "";
				m_MessageEmail.value = "";
				m_MessageSubject.value = "";
				m_MessageEdit.value = "";
            },
            //===============================================
            messageSendMail: function() {
                var m_MessageName = document.getElementById("MessageName");
                var m_MessageEmail = document.getElementById("MessageEmail");
                var m_MessageSubject = document.getElementById("MessageSubject");
                var m_MessageEdit = document.getElementById("MessageEdit");
				var m_name = m_MessageName.value;
				var m_email = m_MessageEmail.value;
				var m_subject = m_MessageSubject.value;
				var m_message = m_MessageEdit.value;
                //var m_data = encodeURIComponent(m_EditorEditId.innerHTML);
                var m_xmlhttp = new XMLHttpRequest();
                m_xmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {

                    }
                }
                m_xmlhttp.open("POST", "/php/contact.php", true);
                m_xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                m_xmlhttp.send(
					"nameValue="+m_name+
					"&emailValue="+m_email+
					"&subjectValue="+m_subject+
					"&messageValue="+m_message
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
