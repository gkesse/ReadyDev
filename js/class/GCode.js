//===============================================
class GCode extends GXml {
    //===============================================
    constructor() {
		super();
    }
    //===============================================
    addData(code, key, value, isCData = false) {
        if(code == "") return false;
        if(key == "") return false;
        if(value == "") return false;
        this.createCode(code);
        this.getCode(code);
        this.createNode(key, value, isCData);
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
    getItem2(code, index, isCData = false) {
        this.getNode(sprintf("/rdv/datas/data[code='%s']/map/data[position()=%d]", code, index + 1));
        var lData = this.getNodeValue(isCData);
        return lData;
    }
    //===============================================
    getItem3(code, key, index, isCData = false) {
        this.getNode(sprintf("/rdv/datas/data[code='%s']/map/data[position()=%d]/%s", code, index + 1, key));
        var lData = this.getNodeValue(isCData);
        return lData;
    }
    //===============================================
    getList(code, category = "", isCData = false) {
		var lDatas = [];
		var lCount = this.countItem(code);
		for(var i = 0; i < lCount; i++) {
			if(category == "") {
				var lData = this.getItem2(code, i, isCData);
				lDatas.push(lData);				
			}
			else {
				var lCategory = this.getItem3(code, "category", i);
				var lData = this.getItem3(code, "data", i, isCData);
				if(lCategory == category) {
					lDatas.push(lData);				
				}
			}
		}
        return lDatas;
    }
    //===============================================
    getListCD(code, category = "") {
		return this.getList(code, category, true);
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
