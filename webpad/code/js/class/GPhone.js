//===============================================
class GPhone extends GObject {
    //===============================================
    static m_instance = null;
    //===============================================
    static slideIndex;
    //===============================================
    constructor() {
        super();
    }
    //===============================================
    static Instance() {
        if(this.m_instance == null) {
            this.m_instance = new GPhone();
        }
        return this.m_instance;
    }
    //===============================================
    showSlide(index) {
        var i;
        var slides = document.getElementsByClassName("phone_slide");
        var dots = document.getElementsByClassName("phone_slide_bar_dot");
        this.slideIndex = index;
        if (index > slides.length) {this.slideIndex = 1}    
        if (index < 1) {this.slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[this.slideIndex-1].style.display = "block";  
        dots[this.slideIndex-1].className += " active";
    }
    //===============================================
    prevSlide() {
        this.slideIndex -= 1;
        this.showSlide(this.slideIndex);
    }
    //===============================================
    nextSlide() {
        this.slideIndex += 1;
        this.showSlide(this.slideIndex);
    }
    //===============================================
}
//===============================================
GPhone.Instance().showSlide(1);
//===============================================
