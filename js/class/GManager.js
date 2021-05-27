//===============================================
var GManager = (function() {
    //===============================================
    var m_instance;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            init: function() {
                this.updateLazyLoad();
			},
            //===============================================
            getUrl: function(data) {
                var lUrl = data.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
                lUrl = lUrl.replace(/\W/g, '-');
                return lUrl;
            },
            //===============================================
            updateLazyLoad: function() {
                var lLazyLoadInstance = new LazyLoad({
                    
                });
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
GManager.Instance().init();
//===============================================
