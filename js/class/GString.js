//===============================================
class GString {
    //===============================================
    constructor() {
        this.m_data = null;
    }
    //===============================================
    data(_data) {
        this.m_data = _data;
    }
    //===============================================
    length() {
        return this.m_data.length;
    }
    //===============================================
    url(_data) {
        var lUrl = _data.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
        lUrl = lUrl.replace(/\W/g, '-');
        return lUrl;
    }
    //===============================================
}
//===============================================
