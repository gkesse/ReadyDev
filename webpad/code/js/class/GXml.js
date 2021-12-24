//===============================================
class GXml extends GObject {
    //===============================================
    parser = null;
    dom = null;
    //===============================================
    constructor() {
        super();
    }
    //===============================================
    createDom() {
        this.parser = new DOMParser();
        return this;
    }
    //===============================================
    loadXmlData(data) {
        this.dom = this.parser.parseFromString(data,"text/xml");
        return this;
    }
    //===============================================
    loadXmlFile(file) {
        var lXmlHttp = new XMLHttpRequest();
        lXmlHttp.onreadystatechange = function() {
            if(this.readyState == 4 && this.status == 200) {
                var lData = this.responseText;
            }
        }
        lXmlHttp.open("POST", "/webpad/code/php/request.php", true);
        lXmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        lXmlHttp.send(
        "req=" + "LOAD_XML_FILE" +
        "&file=" + file
        );
    }
    //===============================================
}
//===============================================
