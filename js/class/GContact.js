//===============================================
var GContact = (function() {
    //===============================================
    var m_instance;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            init: function() {
                $.getJSON("/data/json/Contacts.json", function(data) {
                    var m_data = data["message"]["max"];
                    GSetting.Instance().setData("ContactMax", m_data);
                    $(".contacts .message").trigger("propertychange");
                });
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
