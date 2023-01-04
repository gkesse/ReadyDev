//===============================================
class GSearch extends GModule {
    //===============================================
    constructor() {
        super();
        this.lastId = 0;
        this.dataCount = 0;
        this.dataOffset = 0;
        this.dataSize = 0;
    }
    //===============================================
    serialize(isDom = false, code = "search") {
        var lDom = new GCode();
        lDom.createDoc();
        lDom.addData(code, "last_id", ""+this.lastId);
        lDom.addData(code, "data_count", ""+this.dataCount);
        lDom.addData(code, "data_size", ""+this.dataSize);
        lDom.addData(code, "data_offset", ""+this.dataOffset);
        var lData = lDom.toStringData();
        if(isDom) lData = lDom.toString();
        return lData;
    }
    //===============================================
    deserialize(data, code = "search") {
        super.deserialize(data);
        var lDom = new GCode();
        lDom.loadXml(data);
        this.lastId = lDom.getItem(code, "last_id");
        this.dataCount = lDom.getItem(code, "data_count");
        this.dataSize = lDom.getItem(code, "data_size");
        this.dataOffset = lDom.getItem(code, "data_offset");
    }
    //===============================================
    initSearch() {
        this.readUi();
        this.dataCount = 0;
        this.dataOffset = 0;
        this.lastId = -1;
        this.dataSize = 8;
        this.writeUi();
    }
    //===============================================
    readUi() {
        var lDataSize = document.getElementById("SearchDataSize");
        var lDataCount = document.getElementById("SearchDataCount");
        var lDataOffset = document.getElementById("SearchDataOffset");
        var lLastId = document.getElementById("SearchLastId");
        //
        this.dataSize = +lDataSize.value;
        this.dataCount = +lDataCount.value;
        this.dataOffset = +lDataOffset.value;
        this.lastId = +lLastId.value;
    }
    //===============================================
    writeUi() {
        var lDataSize = document.getElementById("SearchDataSize");
        var lDataCount = document.getElementById("SearchDataCount");
        var lDataOffset = document.getElementById("SearchDataOffset");
        var lLastId = document.getElementById("SearchLastId");
        //
        lDataSize.value = this.dataSize;
        lDataCount.value = this.dataCount;
        lDataOffset.value = this.dataOffset;
        lLastId.value = this.lastId;
    }
    //===============================================
}
//===============================================
