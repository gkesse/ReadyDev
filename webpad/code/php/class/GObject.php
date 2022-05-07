<?php   
//===============================================
class GObject {
    //===============================================;
    protected $dom;
    //===============================================;
    private $config;
    private $errors;
    //===============================================
    public function __construct() {
        // config
        $this->config = array(
            "webroot" => "webpad/code",
            "datapath" => "data",
            "webkey" => "readypad",
        );
        // dom
        $this->dom = null;
        // errors
        $this->errors = array();
    }
    //===============================================
    // errors
    //===============================================
    public function addError($error) {
        $this->errors[] = $error;
    }
    //===============================================
    public function loadErrors($xml) {
        $lRes = new GCode();
        $lRes->loadXmlData($xml);
        
        $lCount = $lRes->countCode("error");
        
        for($i = 0; $i < $lCount; $i++) {
            $lError = $lRes->getItem3("error", $i);
            $this->errors[] = $lError;
        }
    }
    //===============================================
    public function hasErrors() {
        return !empty($this->errors);
    }
    //===============================================
    public function getErrors() {
        return implode($this->errors, "<br>");
    }
    //===============================================
    public function clearErrors() {
        $this->errors = array();
    }
    //===============================================
    // config
    //===============================================
    public function getConfig($key) {
        $lData = $this->config[$key];
        return $lData;
    }
    //===============================================
    // dom
    //===============================================
    public function getItem($code, $key) {
        $this->dom->queryXPath(sprintf("/rdv/datas/data[code='%s']/%s", $code, $key));
        $this->dom->getNodeIndex(0);
        $lData = $this->dom->getNodeValue();
        return $lData;
    }
    //===============================================
    public function getItem2($code, $index) {
        $this->dom->queryXPath(sprintf("/rdv/datas/data[code='%s']/map/data[position()=%d]", $code, $index + 1));
        $this->dom->getNodeIndex(0);
        $lData = $this->dom->getNodeValue();
        return $lData;
    }
    //===============================================
    public function getItem3($code, $data, $index) {
        $this->dom->queryXPath(sprintf("/rdv/datas/data[code='%s']/map/data[position()=%d]/%s", $code, $index + 1, $data));
        $this->dom->getNodeIndex(0);
        $lData = $this->dom->getNodeValue();
        return $lData;
    }
    //===============================================
    public function getItem4($code, $idKey, $idValue, $data) {
        $this->dom->queryXPath(sprintf("/rdv/datas/data[code='%s']/map/data[%s='%s']/%s", $code, $idKey, $idValue, $data));
        $this->dom->getNodeIndex(0);
        $lData = $this->dom->getNodeValue();
        return $lData;
    }
    //===============================================
    public function countItem($code) {
        $this->dom->queryXPath(sprintf("/rdv/datas/data[code='%s']/map/data", $code));
        $lData = $this->dom->countXPath();
        return $lData;
    }
    //===============================================
    // translator
    //===============================================
    public function getTranslator($id) {
        $lLang = $this->getItem("translator", "lang");
        $lData = $this->getItem4("translator", "id", $id, $lLang);
        return $lData;
    }
    //===============================================
}
//===============================================
?>
