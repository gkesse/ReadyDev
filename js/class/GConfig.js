//===============================================
var GConfig = (function() {
    //===============================================
    var m_instance;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            init: function() {
				var lEditorDir = localStorage.getItem("EditorDir");
				var lEditorFile = localStorage.getItem("EditorFile");     
				if(!lEditorDir || lEditorDir == "undefined") localStorage.setItem("EditorDir", "");
				if(!lEditorFile || lEditorFile == "undefined") localStorage.setItem("EditorFile", "");			
			},
            //===============================================
            setData: function(key, value) {
                localStorage.setItem(key, value);
            },
            //===============================================
            getData: function(key) {
                return localStorage.getItem(key);
            },
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
GConfig.Instance().init();
//===============================================
