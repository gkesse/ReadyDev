//===============================================
// struct
//===============================================
function sGManager() {
    this.app = null;
}
//===============================================
function sGApp() {
    // app
    this.app_name = null;
    // view
    this.view_timer = null;
}
//===============================================
// manager
//===============================================
var GManager = (function() {
    //===============================================
    var m_instance;
    //===============================================
    var mgr;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            init: function() {
                this.construct();
                this.setTime();
                this.onClosest();
            },
            //===============================================
            construct: function() {
                // manager
                this.mgr = new sGManager();
                // app
                this.mgr.app = new sGApp();
                this.mgr.app.app_name = "ReadyApp";
            },
            //===============================================
            // request
            //===============================================
            run: function(obj, req, params) {
                if(req == "menu_click") {this.menu_click(obj, req, params); return;}
                if(req == "sqlite_table_page_number") {this.sqlite_table_page_number(obj, req, params); return;}
                if(req == "sqlite_table_col_max") {this.sqlite_table_col_max(obj, req, params); return;}
            },
            //===============================================
            // document
            //===============================================
            onClosest: function() {
                document.addEventListener('click', function (event) {
                    if(event.target.closest('.closest')) return;
                    var lClosest = document.getElementsByClassName("closest");
                    for(var i = 0; i < lClosest.length; i++) {
                        var lItem = lClosest[i];
                        var lContains = lItem.classList.contains("click");
                        if(lContains == true) {
                            lItem.className = lItem.className.replace(" click", "");
                        }
                    }
                }, false);
            },
            //===============================================
            // menu
            //===============================================
            menu_click: function(obj, req, params) {
                var lMenu = document.getElementById(params);
                var lContains = lMenu.classList.contains("click");
                if(lContains == false) {
                    lMenu.className += " click";
                }
                else {
					lMenu.className = lMenu.className.replace(" click", "");
                }
            },
            //===============================================
            // sqlite
            //===============================================
            sqlite_table_page_number: function(obj, req, params) {
                var lForm = document.getElementById("sqlite_table_page_number_form");
                lForm.submit();
            },
            //===============================================
            sqlite_table_col_max: function(obj, req, params) {
                var lForm = document.getElementById("sqlite_table_col_max_form");
                lForm.submit();
            },
            //===============================================
            // view
            //===============================================
            setTime: function() {
                var lApp = GManager.Instance().mgr.app;
                this.countTime();
                lApp.view_timer = setInterval(this.countTime, 1000);
            },
            //===============================================
            countTime: function() {
                var lViewDate = document.getElementById("view_date");
                var lViewTime = document.getElementById("view_time");
                var lDate = new Date();
                var lDay = lDate.getDate();
                var lMonth = lDate.getMonth() + 1;
                var lYear = lDate.getFullYear();
                lDay = (lDay < 10) ? "0" + lDay : lDay;
                lMonth = (lMonth < 10) ? "0" + lMonth : lMonth;
                var lDateFormat = lDay + "/" + lMonth + "/" + lYear;
                lViewDate.innerHTML = lDateFormat;
                lViewTime.innerHTML = lDate.toLocaleTimeString();
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
GManager.Instance().init();
//===============================================
