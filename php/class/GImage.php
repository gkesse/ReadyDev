<?php
class GImage extends GModule {
    //===============================================
    private $m_mimeType = "";
    private $m_path = "";
    private $m_img = "";
    //===============================================
    private $m_imgPath = "data/img/defaults";
    private $m_imgWidth = 256;
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function clone() {
        $lObj = new GImage();
        $lObj->setObj($this);
        return $lObj;
    }
    //===============================================
    public function setObj($_obj) {
        $this->m_mimeType = $_obj->m_mimeType;
        $this->m_path = $_obj->m_path;
        $this->m_img = $_obj->m_tree;
    }
    //===============================================
    public function loadImagePng() {
        $lPath = GPath::create($this->m_imgPath);
        foreach(glob($lPath . "/*.png") as $lFilename) {
            $lMimeType = mime_content_type($lFilename);
            
            $lSize = getimagesize($lFilename);
            $lWidthSrc = $lSize[0];
            $lHeightSrc = $lSize[1];
            $lRatio = $lWidthSrc / $lHeightSrc;
            
            $lWidthDst = $this->m_imgWidth;
            $lHeightDst = $lWidthDst / $lRatio;
            
            
            $lImgSrc = @imagecreatefrompng($lFilename);
            $lImgDst = imagecreatetruecolor($lWidthDst, $lHeightDst);
            imagecopyresized($lImgDst, $lImgSrc, 0, 0, 0, 0, $lWidthDst, $lHeightDst, $lWidthSrc, $lHeightSrc);
            
            ob_start();
            imagepng($lImgDst);
            $lImgData = ob_get_contents();
            ob_end_clean ();
            $lImgData64 = base64_encode($lImgData);
            
            $lFile = substr($lFilename, strlen($lPath) + 1);
            
            $lObj = new GImage();
            $lObj->m_mimeType = $lMimeType;
            $lObj->m_path = $lFile;
            $lObj->m_img = $lImgData64;
            array_push($this->m_map, $lObj);
            
            imagedestroy($lImgSrc);
            imagedestroy($lImgDst);
        }
    }
    //===============================================
    public function loadImageJpg() {
        $lPath = GPath::create($this->m_imgPath);
        foreach(glob($lPath . "/*.jpg") as $lFilename) {
            $lMimeType = mime_content_type($lFilename);
            
            $lSize = getimagesize($lFilename);
            $lWidthSrc = $lSize[0];
            $lHeightSrc = $lSize[1];
            $lRatio = $lWidthSrc / $lHeightSrc;
            
            $lWidthDst = $this->m_imgWidth;
            $lHeightDst = $lWidthDst / $lRatio;
            
            
            $lImgSrc = @imagecreatefromjpeg($lFilename);
            $lImgDst = imagecreatetruecolor($lWidthDst, $lHeightDst);
            imagecopyresized($lImgDst, $lImgSrc, 0, 0, 0, 0, $lWidthDst, $lHeightDst, $lWidthSrc, $lHeightSrc);
            
            ob_start();
            imagejpeg($lImgDst);
            $lImgData = ob_get_contents();
            ob_end_clean ();
            $lImgData64 = base64_encode($lImgData);
            
            $lFile = substr($lFilename, strlen($lPath) + 1);
            
            $lObj = new GImage();
            $lObj->m_mimeType = $lMimeType;
            $lObj->m_path = $lFile;
            $lObj->m_img = $lImgData64;
            array_push($this->m_map, $lObj);
            
            imagedestroy($lImgSrc);
            imagedestroy($lImgDst);
        }
    }
    //===============================================
    public function loadImageGif() {
        $lPath = GPath::create($this->m_imgPath);
        foreach(glob($lPath . "/*.gif") as $lFilename) {
            $lMimeType = mime_content_type($lFilename);
            
            $lSize = getimagesize($lFilename);
            $lWidthSrc = $lSize[0];
            $lHeightSrc = $lSize[1];
            $lRatio = $lWidthSrc / $lHeightSrc;
            
            $lWidthDst = $this->m_imgWidth;
            $lHeightDst = $lWidthDst / $lRatio;
            
            
            $lImgSrc = @imagecreatefromgif($lFilename);
            $lImgDst = imagecreatetruecolor($lWidthDst, $lHeightDst);
            imagecopyresized($lImgDst, $lImgSrc, 0, 0, 0, 0, $lWidthDst, $lHeightDst, $lWidthSrc, $lHeightSrc);
            
            ob_start();
            imagegif($lImgDst);
            $lImgData = ob_get_contents();
            ob_end_clean ();
            $lImgData64 = base64_encode($lImgData);
            
            $lFile = substr($lFilename, strlen($lPath) + 1);
            
            $lObj = new GImage();
            $lObj->m_mimeType = $lMimeType;
            $lObj->m_path = $lFile;
            $lObj->m_img = $lImgData64;
            array_push($this->m_map, $lObj);
            
            imagedestroy($lImgSrc);
            imagedestroy($lImgDst);
        }
    }
    //===============================================
    public function serialize($_code = "image") {
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->addData($_code, "mime_type", $this->m_mimeType);
        $lDom->addData($_code, "path", $this->m_path);
        $lDom->addData($_code, "img", base64_encode($this->m_img));
        $lDom->addMap($_code, $this->m_map);
        return $lDom->toString();
    }
    //===============================================
    public function deserialize($_data, $_code = "image") {
        parent::deserialize($_data);
        $lDom = new GCode();
        $lDom->loadXml($_data);
        $this->m_mimeType = $lDom->getItem($_code, "mime_type");
        $this->m_path = $lDom->getItem($_code, "path");
        $this->m_img = base64_decode($lDom->getItem($_code, "img"));
        $lDom->getMap($_code, $this->m_map, $this);
    }
    //===============================================
    public function run($_data) {
        $this->deserialize($_data);
        if($this->m_method == "") {
            $this->addError("La méthode est obligatoire.");
        }
        else if($this->m_method == "load_image") {
            $this->onLoadImage($_data);
        }
        else {
            $this->addError("La méthode est inconnue.");
        }
    }
    //===============================================
    public function onLoadImage($_data) {
        $this->loadImagePng();
        $this->loadImageJpg();
        $this->loadImageGif();
    }
    //===============================================
}
?>
