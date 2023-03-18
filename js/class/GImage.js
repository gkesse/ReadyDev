//===============================================
class GImage extends GObject {
    //===============================================
    static m_instance = null;
    //===============================================
    constructor() {
        super();
        this.m_mimeType = "";
        this.m_name = "";
        this.m_path = "";
        this.m_img = "";
        this.m_data = "";
    }
    //===============================================
    static Instance() {
        if(this.m_instance == null) {
            this.m_instance = new GImage();
        }
        return this.m_instance;
    }    
    //===============================================
    clone() {
        var lObj = new GImage();
        lObj.setObj(this);
        return lObj;
    }
    //===============================================
    setObj(_obj) {
        this.m_mimeType = _obj.m_mimeType;
        this.m_name = _obj.m_name;
        this.m_path = _obj.m_path;
        this.m_img = _obj.m_img;
    }
    //===============================================
    isEqual(_obj) {
        var lEqualOk = true;
        lEqualOk &= (this.m_path == _obj.m_path);
        return lEqualOk;
    }
    //===============================================
    getImageData() {
        var lData = sprintf("data:%s;base64,%s", this.m_mimeType, this.m_img);
        return lData;
    }
    //===============================================
    loadImage() {
        call_server("image", "load_image", this);
    }
    //===============================================
    loadData() {
        this.readData();
        this.deserialize(this.m_data);
    }
    //===============================================
    toForm() {
        var lForm = new GForm();
        for(var i = 0; i < this.m_map.length; i++) {
            var lImg = this.m_map[i];
            var lObj = new GForm();
            lObj.m_value = lImg.m_name;
            lObj.m_img = lImg.getImageData();
            lForm.m_map.push(lObj);
        }
        var lData = lForm.serialize();
        return lData;
    }
    //===============================================
    readData() {
        var lImageData = document.getElementById("ImageData");
        this.m_data = b64_to_utf8(lImageData.innerHTML);
    }
    //===============================================
    writeData() {
        var lImageData = document.getElementById("ImageData");
        lImageData.innerHTML = utf8_to_b64(this.serialize());
    }
    //===============================================
    serialize(_code = "image") {
        var lDom = new GCode();
        lDom.createDoc();
        lDom.addData(_code, "mime_type", this.m_mimeType);
        lDom.addData(_code, "name", this.m_name);
        lDom.addData(_code, "path", this.m_path);
        lDom.addData(_code, "img", utf8_to_b64(this.m_img));
        lDom.addMap(_code, this.m_map);
        return lDom.toString();
    }
    //===============================================
    deserialize(_data, _code = "image") {
        var lDom = new GCode();
        lDom.loadXml(_data);
        this.m_mimeType = lDom.getItem(_code, "mime_type");
        this.m_name = lDom.getItem(_code, "name");
        this.m_path = lDom.getItem(_code, "path");
        this.m_img = b64_to_utf8(lDom.getItem(_code, "img"));
        lDom.getMap(_code, this.m_map, this);
    }
    //===============================================
    onModule(_method, _obj, _data) {
        if(_method == "") {
            this.addError("La méthode est obligatoire.");
        }
        else if(_method == "load_image") {
            this.onLoadImage(_obj, _data);
        }
        else {
            this.addError("La méthode est inconnue.");
        }
        return !this.hasErrors();
    }
    //===============================================
    onLoadImage(_obj, _data) {
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callLocal("image", "load_image", lData, this.onLoadImageCB);
    }
    //===============================================
    onLoadImageCB(_data, _isOk) {
        if(_isOk) {
            var lImage = GImage.Instance();
            lImage.deserialize(_data);
        }
    }
    //===============================================
}
//===============================================
