<?php
//===============================================
namespace php\class;
//===============================================
class GMenuJs extends GObject {
    //===============================================
    private $m_title = "";
    private $m_module = "";
    private $m_method = "";
    private $m_data = "";
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function clone() {
        return new GMenuJs();
    }
    //===============================================
    public function setObj($_obj) {
        parent::setObj($_obj);
        $this->m_title = $_obj->m_title;
        $this->m_module = $_obj->m_module;
        $this->m_method = $_obj->m_method;
        $this->m_data = $_obj->m_data;
    }
    //===============================================
    public function isEqual($_obj) {
        $lEqualOk = true;
        $lEqualOk &= ($this->m_title == $_obj->m_title);
        $lEqualOk &= ($this->m_module == $_obj->m_module);
        $lEqualOk &= ($this->m_method == $_obj->m_method);
        $lEqualOk &= ($this->m_data == $_obj->m_data);
        return $lEqualOk;
    }
    //===============================================
    public function getTitle() {
        return $this->m_title;
    }
    //===============================================
    public function getModule() {
        return $this->m_module;
    }
    //===============================================
    public function getMethod() {
        return $this->m_method;
    }
    //===============================================
    public function getData() {
        return $this->m_data;
    }
    //===============================================
    public function addMenu($_module, $_method, $_title, $_obj, $_data = "") {
        $lObj = new GMenuJs();
        $lObj->m_index = $this->size() + 1;
        $lObj->m_parentIndex = $_obj->m_index;
        $lObj->m_module = $_module;
        $lObj->m_method = $_method;
        $lObj->m_title = $_title;
        $lObj->m_data = $_data;
        $this->m_map[] = $lObj;
        return $lObj;
    }
    //===============================================
}
//===============================================
?>