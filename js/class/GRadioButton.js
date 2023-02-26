//===============================================
class GRadioButton extends GObject {
    //===============================================
    static m_instance = null;
    //===============================================
    constructor() {
        super();
    }
    //===============================================
    static Instance() {
        if(this.m_instance == null) {
            this.m_instance = new GRadioButton();
        }
        return this.m_instance;
    }    
    //===============================================
    init() {
        var lRadioButtons = document.getElementsByClassName("RadioButton");
        for(var i = 0; i < lRadioButtons.length; i++) {
            var lRadioButton = lRadioButtons[i];
            lRadioButton.addEventListener("click", function(e) {
                var lRadioButtonData = this.parentNode;
                var lRadioButtonValue = this.firstElementChild;
                lRadioButtonData.dataset.value = lRadioButtonValue.value;
            });
        }
    }
    //===============================================
    initRadio(_obj) {
        var lRadioButtons = _obj.getElementsByClassName("RadioButtonInput");
        var lValue = _obj.dataset.value;
        for(var i = 0; i < lRadioButtons.length; i++) {
            var lRadioButton = lRadioButtons[i];
            lRadioButton.checked = false;
            if(lRadioButton.value == _obj.dataset.value) {
                lRadioButton.checked = true;
            }
        }
    }
    //===============================================
}
//===============================================
GRadioButton.Instance().init();
//===============================================
