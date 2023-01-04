//===============================================
class GObject {
    //===============================================
    constructor(_codeName = "object") {
        this.m_codeName = _codeName;
    }
    //===============================================
    clone() {return new GObject();}
    serialize(_code = "object") {return "";}
    deserialize(_data, _code = "object") {}
    //===============================================
}
//===============================================
