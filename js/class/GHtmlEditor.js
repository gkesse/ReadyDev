//===============================================
var GHtmlEditor = (function() {
    //===============================================
    var m_instance;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            init: function() {

            },
            //===============================================
            openHtmlEditor: function() {
				var lModalHtmlEditor = document.getElementById("ModalHtmlEditor");
				var lHtmlEditorMsg = document.getElementById("HtmlEditorMsg");
				var lHtmlEditorData = document.getElementById("HtmlEditorData");
                var lHtmlEditorText = GConfig.Instance().getData("HtmlEditorText");
                lHtmlEditorData.value = lHtmlEditorText;
				lModalHtmlEditor.style.display = "block";	
				lHtmlEditorMsg.style.display = "none";	
            },
            //===============================================
            closeHtmlEditor: function() {
				var lModalHtmlEditor = document.getElementById("ModalHtmlEditor");
				lModalHtmlEditor.style.display = "none";	
            },
            //===============================================
            saveHtmlEditor: function() {
				var lHtmlEditorData = document.getElementById("HtmlEditorData");
				var lHtmlEditorMsg = document.getElementById("HtmlEditorMsg");
                var lHtmlEditorText = lHtmlEditorData.value;
                GConfig.Instance().setData("HtmlEditorText", lHtmlEditorText);
                var lMsg = "<i style='color:#339933;' class='fa fa-check-circle'></i> "; 
                lMsg += "L'enregistrement s'est déroulé avec succès."; 
                lHtmlEditorMsg.innerHTML = lMsg;
                lHtmlEditorMsg.style.display = "block";
                lHtmlEditorMsg.style.color = "#339933";
                //location.reload();
            },
            //===============================================
            keyPressHtmlEditor: function(e) {
                if (e.code == 'KeyS' && (e.shiftKey || e.metaKey)) {
                    e.preventDefault();
                    saveHtmlEditor();
                }
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
GHtmlEditor.Instance().init();
//===============================================
