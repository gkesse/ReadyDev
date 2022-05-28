//===============================================
class GCode extends GXml {
    //===============================================
    constructor() {
		super();
    }
    //===============================================
    addData(code, key, value) {
        if(code == "") return false;
        if(key == "") return false;
        if(value == "") return false;
        this.createCode(code);
        this.getCode(code);
        this.createNode(key, value);
		return true;        
    }
    //===============================================
    countItem(code) {
        if(code == "") return 0;
        this.queryXPath(sprintf("/rdv/datas/data[code='%s']/map/data", code));
        var lCount = this.countXPath();
		return lCount;
    }
    //===============================================
    createCode(code) {
        if(!this.hasCode(code)) {
        	this.createNode("/rdv/datas");
            this.appendNode("data", "", true);
            this.appendNode("code", code);
        }
    }
    //===============================================
    getCode(code) {
        this.getNode(sprintf("/rdv/datas/data[code='%s']", code));
    }
    //===============================================
    getItem(code, key, isCData = false) {
        this.getNode(sprintf("/rdv/datas/data[code='%s']/%s", code, key));
        var lData = this.getNodeValue(isCData);
        return lData;
    }
    //===============================================
    getItem2(code, index) {
        this.getNode(sprintf("/rdv/datas/data[code='%s']/map/data[position()=%d]", code, index + 1));
        var lData = this.getNodeValue();
        return lData;
    }
    //===============================================
    getItem3(code, key, index) {
        this.getNode(sprintf("/rdv/datas/data[code='%s']/map/data[position()=%d]/%s", code, index + 1, key));
        lData = this.getNodeValue();
        return lData;
    }
    //===============================================
    hasCode(code) {
        this.queryXPath(sprintf("/rdv/datas/data[code='%s']", code));
        var lData = this.countXPath();
        return (lData != 0);
    }
    //===============================================
    loadCode(data) {
        if(data == "") return false;
        this.getNode(sprintf("/rdv/datas"));
        this.loadNode(data);
        return true;
    }
    //===============================================
    toStringCode(code) {
        this.getNode(sprintf("/rdv/datas/data[code='%s']", code));
        var lData = this.toStringNode();
        return lData;
    }
    //===============================================
}
//===============================================
