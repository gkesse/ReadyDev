//===============================================
class GImage extends GObject {
    //===============================================
    constructor() {
        super();
        this.m_mimeType = "";
        this.m_path = "";
        this.m_img = "";
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
        this.m_path = _obj.m_path;
        this.m_img = _obj.m_img;
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
    showImage() {
        var lData = this.serialize();
        var lForm = new GForm();
        lForm.addLabelEdit("un", "Un :");
        lForm.addLabelImage("deux", "Deux :", lData);
        lForm.showForm();
    }
    //===============================================
    readUi() {

    }
    //===============================================
    writeUi() {

    }
    //===============================================
    serialize(_code = "image") {
        var lDom = new GCode();
        lDom.createDoc();
        lDom.addData(_code, "mime_type", this.m_mimeType);
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
        this.m_path = lDom.getItem(_code, "path");
        this.m_img = b64_to_utf8(lDom.getItem(_code, "img"));
        lDom.getMap(_code, this.m_map, this);
    }
    //===============================================
    onModule(_method, _obj, _data) {
        if(_method == "") {
            this.addError("La méthode est obligatoire.");
        }
        else if(_method == "test") {
            this.onTest(_obj, _data);
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
    onTest(_obj, _data) {
        var lImage = new GImage();
        lImage.loadImage();
    }
    //===============================================
    onLoadImage(_obj, _data) {
        this.readUi();
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callLocal("image", "load_image", lData, this.onLoadImageCB);
    }
    //===============================================
    onLoadImageCB(_data, _isOk) {
        if(_isOk) {
            var lImage = new GImage();
            lImage.deserialize(_data);
            lImage.loadFromMap(0);
            lImage.showImage();
        }
    }
    //===============================================
}
//===============================================
