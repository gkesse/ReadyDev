//===============================================
var GParallax = (function() {
    //===============================================
    var m_instance;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            init: function() {
                this.setParallax();
            },
            //===============================================
            Android: function() {
                return navigator.userAgent.match(/Android/i);
            },
            //===============================================
            BlackBerry: function() {
                return navigator.userAgent.match(/BlackBerry/i);
            },
            //===============================================
            iOS: function() {
                return navigator.userAgent.match(/iPhone|iPad|iPod/i);
            },
            Opera: function() {
                return navigator.userAgent.match(/Opera Mini/i);
            },
            //===============================================
            Windows: function() {
                return navigator.userAgent.match(/IEMobile/i);
            },
            //===============================================
            any: function() {
                return (this.Android() || this.BlackBerry() || this.iOS() || this.Opera() || this.Windows());
            },
            //===============================================
            isMobile: function() {
                var lMobile = false;
                if(this.any()) {lMobile = true};
                return lMobile;
            },
            //===============================================
            isDesktop: function() {
                var lDesktop = !this.isMobile();
                return lDesktop;
            },
            //===============================================
            setParallax: function() {
                if(this.isDesktop()) return;
                var lParallaxMap = document.getElementsByClassName("Parallax");
                for(var i = 0; i < lParallaxMap.length; i++) {
                    var lParallax = lParallaxMap[i];
                    var lClassName = lParallax.className;
                    lParallax.className += " Scroll";
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
GParallax.Instance().init();
//===============================================
