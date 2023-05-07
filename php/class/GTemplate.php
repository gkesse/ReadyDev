<?php
class GTemplate {
    //===============================================
    private $m_key;
    private $m_value;
    private $m_map = array();
    //===============================================
    public function __construct() {

    }
    //===============================================
    public function clone() {
        return new GTemplate();
    }
    //===============================================
    public function setObj($_obj) {
        $this->m_key = $_obj->m_key;
        $this->m_value = $_obj->m_value;
    }
    //===============================================
    public function size() {
        return count($this->m_map);
    }
    //===============================================
    public function assign($_key, $_value) {
        $lObj = new GTemplate();
        $lObj->m_key = $_key;
        $lObj->m_value = $_value;
        $this->m_map[] = $lObj;
    }
    //===============================================
    public function addTemplate($_obj) {
        for($i = 0; $i < $_obj->size(); $i++) {
            $lObj = $_obj->m_map[$i];
            $lNew = $this->clone();
            $lNew->setObj($lObj);
            $this->m_map[] = $lNew;
        }
    }
    //===============================================
    public function toKeys() {
        $lKeys = array();
        for($i = 0; $i < $this->size(); $i++) {
            $lObj = $this->m_map[$i];
            $lKeys[] = sprintf("{{%s}}", $lObj->m_key);
        }
        return $lKeys;
    }
    //===============================================
    public function toValues() {
        $lValues = array();
        for($i = 0; $i < $this->size(); $i++) {
            $lObj = $this->m_map[$i];
            $lValues[] = $lObj->m_value;
        }
        return $lValues;
    }
    //===============================================
    public function toLib() {
        return "smarty";
    }
    //===============================================
    public function toSmartyCompile() {
        return "tmp/smarty/compile";
    }
    //===============================================
    public function toSmartyCache() {
        return "tmp/smarty/cache";
    }
    //===============================================
    public function toSmartyConfig() {
        return "tmp/smarty/config";
    }
    //===============================================
    public function render($_path) {
        if($this->toLib() == "default") {
            if($this->size()) {
                ob_start();
                include($_path);
                $lHtml = ob_get_contents();
                ob_end_clean();
                $lHtml = str_replace($this->toKeys(), $this->toValues(), $lHtml);
                echo $lHtml;
            }
            else {
                require  $_path;
            }
        }
        else if($this->toLib() == "smarty") {
            if($this->size()) {
                $lSmarty = new Smarty();
                $lSmarty->setCompileDir($this->toSmartyCompile());
                $lSmarty->setCacheDir($this->toSmartyCache());
                $lSmarty->setConfigDir($this->toSmartyConfig());
                
                for($i = 0; $i < $this->size(); $i++) {
                    $lObj = $this->m_map[$i];
                    $lSmarty->assign($lObj->m_key, $lObj->m_value);
                }
                $lSmarty->display($_path);
            }
            else {
                require  $_path;
            }
        }
    }
    //===============================================
    public function serialize($_code = "template") {
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->addData($_code, "key", $this->m_key);
        $lDom->addData($_code, "value", $this->m_value);
        $lDom->addMap($_code, $this->m_map);
        return $lDom->toString();
    }
    //===============================================
    public function deserialize($_data, $_code = "template") {
        $lDom = new GCode();
        $lDom->loadXml($_data);
        $this->m_key = $lDom->getItem($_code, "key");
        $this->m_value = $lDom->getItem($_code, "value");
        $lDom->getMap($_code, $this->m_map, $this);
    }
    //===============================================
}
?>