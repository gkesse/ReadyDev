<?php
class GImage extends GModule {
    //===============================================
    private $m_mimeType = "";
    private $m_name = "";
    private $m_path = "";
    private $m_img = "";
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
        $this->m_name = $_obj->m_path;
        $this->m_path = $_obj->m_path;
        $this->m_img = $_obj->m_img;
    }
    //===============================================
    public function toImageWidth() {
        return 256;
    }
    //===============================================
    public function toImagePath() {
        return "/data/img/defaults";
    }
    //===============================================
    public function toImageCachePng() {
        return "/data/cache/data/cache_image_png.xml";
    }
    //===============================================
    public function toImageCacheJpg() {
        return "/data/cache/data/cache_image_jpg.xml";
    }
    //===============================================
    public function toImageCacheGif() {
        return "/data/cache/data/cache_image_gif.xml";
    }
    //===============================================
    public function countImageCachePng() {
        $lFilename = $this->getPath($this->toImageCachePng());
        $lData = file_get_contents($lFilename);
        $lImage = new GImage();
        $lImage->deserialize($lData);
        return $lImage->size();
    }
    //===============================================
    public function countImageCacheJpg() {
        $lFilename = $this->getPath($this->toImageCacheJpg());
        $lData = file_get_contents($lFilename);
        $lImage = new GImage();
        $lImage->deserialize($lData);
        return $lImage->size();
    }
    //===============================================
    public function countImageCacheGif() {
        $lFilename = $this->getPath($this->toImageCacheJpg());
        $lData = file_get_contents($lFilename);
        $lImage = new GImage();
        $lImage->deserialize($lData);
        return $lImage->size();
    }
    //===============================================
    public function countImagePng() {
        $lPath = $this->getPath($this->toImagePath());
        $lCount = count(glob($lPath . "/*.png"));
        return $lCount;
    }
    //===============================================
    public function countImageJpg() {
        $lPath = $this->getPath($this->toImagePath());
        $lCount = count(glob($lPath . "/*.jpg"));
        return $lCount;
    }
    //===============================================
    public function countImageGif() {
        $lPath = $this->getPath($this->toImagePath());
        $lCount = count(glob($lPath . "/*.gif"));
        return $lCount;
    }
    //===============================================
    public function isLoadImagePng() {
        $lFilename = $this->getPath($this->toImageCachePng());
        if(file_exists($lFilename)) {
            $lCountI = $this->countImageCachePng();
            $lCountJ = $this->countImagePng();
            if($lCountI == $lCountJ) return false;
        }
        return true;
    }
    //===============================================
    public function isLoadImageJpg() {
        $lFilename = $this->getPath($this->toImageCacheJpg());
        if(file_exists($lFilename)) {
            $lCountI = $this->countImageCacheJpg();
            $lCountJ = $this->countImageJpg();
            if($lCountI == $lCountJ) return false;
        }
        return true;
    }
    //===============================================
    public function isLoadImageGif() {
        $lFilename = $this->getPath($this->toImageCacheGif());
        if(file_exists($lFilename)) {
            $lCountI = $this->countImageCacheGif();
            $lCountJ = $this->countImageGif();
            if($lCountI == $lCountJ) return false;
        }
        return true;
    }
    //===============================================
    public function storeImagePng() {
        $lData = $this->serialize();
        $lFilename = $this->getPath($this->toImageCachePng());
        file_put_contents($lFilename, $lData);
    }
    //===============================================
    public function storeImageJpg() {
        $lData = $this->serialize();
        $lFilename = $this->getPath($this->toImageCacheJpg());
        file_put_contents($lFilename, $lData);
    }
    //===============================================
    public function storeImageGif() {
        $lData = $this->serialize();
        $lFilename = $this->getPath($this->toImageCacheGif());
        file_put_contents($lFilename, $lData);
    }
    //===============================================
    public function loadImagePng() {
        if($this->isLoadImagePng()) {
            $lPath = $this->getPath($this->toImagePath());
            foreach(glob($lPath . "/*.png") as $lFilename) {
                $lMimeType = mime_content_type($lFilename);
                
                $lSize = getimagesize($lFilename);
                $lWidthSrc = $lSize[0];
                $lHeightSrc = $lSize[1];
                $lRatio = $lWidthSrc / $lHeightSrc;
                
                $lWidthDst = $this->toImageWidth();
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
                $lFilelPath = sprintf("%s/%s", $this->toImagePath(), $lFile);
                
                $lObj = new GImage();
                $lObj->m_mimeType = $lMimeType;
                $lObj->m_name = $lFile;
                $lObj->m_path = $lFilelPath;
                $lObj->m_img = $lImgData64;
                $this->m_map[] = $lObj;
                
                imagedestroy($lImgSrc);
                imagedestroy($lImgDst);
            }
            $this->storeImagePng();
        }
        else {
            $lFilename = $this->getPath($this->toImageCachePng());
            $lData = file_get_contents($lFilename);
            $this->deserialize($lData);
        }
    }
    //===============================================
    public function loadImageJpg() {
        if($this->isLoadImageJpg()) {
            $lPath = $this->getPath($this->toImagePath());
            foreach(glob($lPath . "/*.jpg") as $lFilename) {
                $lMimeType = mime_content_type($lFilename);
                
                $lSize = getimagesize($lFilename);
                $lWidthSrc = $lSize[0];
                $lHeightSrc = $lSize[1];
                $lRatio = $lWidthSrc / $lHeightSrc;
                
                $lWidthDst = $this->toImageWidth();
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
                $lFilelPath = sprintf("%s/%s", $this->toImagePath(), $lFile);
                
                $lObj = new GImage();
                $lObj->m_mimeType = $lMimeType;
                $lObj->m_name = $lFile;
                $lObj->m_path = $lFilelPath;
                $lObj->m_img = $lImgData64;
                $this->m_map[] = $lObj;
                
                imagedestroy($lImgSrc);
                imagedestroy($lImgDst);
            }
            $this->storeImageJpg();
        }
        else {
            $lFilename = $this->getPath($this->toImageCacheJpg());
            $lData = file_get_contents($lFilename);
            $this->deserialize($lData);
        }
    }
    //===============================================
    public function loadImageGif() {
        if($this->isLoadImageGif()) {
            $lPath = $this->getPath($this->toImagePath());
            foreach(glob($lPath . "/*.gif") as $lFilename) {
                $lMimeType = mime_content_type($lFilename);
                
                $lSize = getimagesize($lFilename);
                $lWidthSrc = $lSize[0];
                $lHeightSrc = $lSize[1];
                $lRatio = $lWidthSrc / $lHeightSrc;
                
                $lWidthDst = $this->toImageWidth();
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
                $lFilelPath = sprintf("%s/%s", $this->toImagePath(), $lFile);
                
                $lObj = new GImage();
                $lObj->m_mimeType = $lMimeType;
                $lObj->m_name = $lFile;
                $lObj->m_path = $lFilelPath;
                $lObj->m_img = $lImgData64;
                $this->m_map[] = $lObj;
                
                imagedestroy($lImgSrc);
                imagedestroy($lImgDst);
            }
            $this->storeImageGif();
        }
        else {
            $lFilename = $this->getPath($this->toImageCacheGif());
            $lData = file_get_contents($lFilename);
            $this->deserialize($lData);
        }
    }
    //===============================================
    public function serialize($_code = "image") {
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->addData($_code, "mime_type", $this->m_mimeType);
        $lDom->addData($_code, "name", $this->m_name);
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
        $this->m_name = $lDom->getItem($_code, "name");
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
        //===============================================
        else if($this->m_method == "load_image") {
            $this->onLoadImage($_data);
        }
        //===============================================
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
