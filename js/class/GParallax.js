//===============================================
class GParallax extends GObject {
    //===============================================
    static m_instance = null;
    //===============================================
    constructor() {
        super();
    }
    //===============================================
    static Instance() {
        if(this.m_instance == null) {
            this.m_instance = new GParallax();
        }
        return this.m_instance;
    }    
    //===============================================
    clone() {
        return new GParallax();
    }
    //===============================================
    init() {
        if(this.isDesktop()) return;
        var lParallaxNs = document.getElementsByClassName("GParallax1");
        for(var i = 0; i < lParallaxNs.length; i++) {
            var lParallax = lParallaxNs[i];
            lParallax.classList.add("NoScroll");
        }
    }
    //===============================================
    isAndroid() {
        return navigator.userAgent.match(/Android/i);
    }
    //===============================================
    isBlackBerry() {
        return navigator.userAgent.match(/BlackBerry/i);
    }
    //===============================================
    isIos() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    }
    //===============================================
    isOpera() {
        return navigator.userAgent.match(/Opera Mini/i);
    }
    //===============================================
    isWindows() {
        return navigator.userAgent.match(/IEMobile/i);
    }
    //===============================================
    isMobile() {
        return (this.isAndroid() || this.isBlackBerry() || this.isIos() || this.isOpera() || this.isWindows());
    }
    //===============================================
    isDesktop() {
        return !this.isMobile();
    }
    //===============================================
}
//===============================================
GParallax.Instance().init();
//===============================================
