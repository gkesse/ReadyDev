//===============================================
var GConfig = (function() {
    //===============================================
    var m_instance;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            init: function() {
				var m_EditorDir = localStorage.getItem("EditorDir");
				var m_EditorFile = localStorage.getItem("EditorFile");     
				if(!m_EditorDir || m_EditorDir == "undefined") localStorage.setItem("EditorDir", "");
				if(!m_EditorFile || m_EditorFile == "undefined") localStorage.setItem("EditorFile", "");			
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
            if (!m_instance) {
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
