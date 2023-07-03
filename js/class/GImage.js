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
        //
        this.m_parallaxImg = null
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
        return new GImage();
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
    init() {
        if(this.isAdmin()) {
            this.initObj();
            this.onLoadImage();
            //this.onLoadParallaxImage();
        }
    }
    //===============================================
    initObj() {
        this.m_parallaxImg = new GImage();
        this.setParallaxImg("/data/img/defaults/binary.png");
    }
    //===============================================
    setParallaxImg(_parallaxImg) {
        var lImg = this.m_parallaxImg;
        lImg.m_path = _parallaxImg;
    }
    //===============================================
    getImageData() {
        var lData = sprintf("data:%s;base64,%s", this.m_mimeType, this.m_img);
        return lData;
    }
    //===============================================
    getParallaxImg() {
        var lImg = this.m_parallaxImg;
        var lData = sprintf("data:%s;base64,%s", lImg.m_mimeType, lImg.m_img);
        return lData;
    }
    //===============================================
    findImg(_imgPath) {
        var lObj = this.clone();
        lObj.m_path = _imgPath;
        var lIndex = this.findObj(lObj);
        return lIndex;
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
            lForm.addImage(lImg.m_name, lImg.getImageData());
        }
        var lData = lForm.serialize();
        return lData;
    }
    //===============================================
    readData() {
        var lImageData = document.getElementById("ImageData");
        this.m_data = lImageData.innerHTML.fromBase64();
    }
    //===============================================
    writeData() {
        var lImageData = document.getElementById("ImageData");
        lImageData.innerHTML = this.serialize().toBase64();
    }
    //===============================================
    serialize(_code = "image") {
        var lDom = new GCode();
        lDom.createDoc();
        lDom.addData(_code, "mime_type", this.m_mimeType);
        lDom.addData(_code, "name", this.m_name);
        lDom.addData(_code, "path", this.m_path);
        lDom.addData(_code, "img", this.m_img.toBase64());
        lDom.addMap(_code, this.m_map);
        return lDom.toString();
    }
    //===============================================
    deserialize(_data, _code = "image") {
        var lDom = new GCode();
        lDom.loadXml(_data);
        this.m_mimeType = lDom.getData(_code, "mime_type");
        this.m_name = lDom.getData(_code, "name");
        this.m_path = lDom.getData(_code, "path");
        this.m_img = lDom.getData(_code, "img").fromBase64();
        lDom.getMap(_code, this.m_map, this);
    }
    //===============================================
    onModule(_method, _obj, _data) {
        if(_method == "") {
            this.m_logs.addError("La méthode est obligatoire.");
        }
        else if(_method == "load_image") {
            this.onLoadImage(_obj, _data);
        }
        else {
            this.m_logs.addError("La méthode est inconnue.");
        }
        return !this.m_logs.hasErrors();
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
            var lObj = GImage.Instance();
            lObj.deserialize(_data);
        }
    }
    //===============================================
    onLoadParallaxImage(_obj, _data) {
        var lImg = this.m_parallaxImg;
        var lAjax = new GAjax();
        var lData = lImg.serialize();
        lAjax.callLocal("image", "load_parallax_image", lData, this.onLoadParallaxImageCB);
    }
    //===============================================
    onLoadParallaxImageCB(_data, _isOk) {
        if(_isOk) {
            var lObj = GImage.Instance();
            var lImg = lObj.m_parallaxImg;
            lImg.deserialize(_data);
        }
    }
    //===============================================
}
//===============================================
GImage.Instance().init();
//===============================================
