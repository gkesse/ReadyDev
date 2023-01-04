//===============================================
class GObjectUi extends GObject {
    //===============================================
    constructor(_codeName = "object") {
        super(_codeName);
        this.m_output = document.getElementById("JsConsole");
    }
    //===============================================
    printData(_data) {
        this.m_output.innerHTML += _data;
    }
    //===============================================
    printXml(_data) {
        this.printData(prettifyXml(_data));
    }
    //===============================================
}
//===============================================
