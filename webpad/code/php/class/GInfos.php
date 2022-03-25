<?php   
//===============================================
class GInfos extends GObject {
    //===============================================
    static private $m_instance = null;
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->createDom();
    }
    //===============================================
    public static function Instance() {
        if(is_null(self::$m_instance)) {
            self::$m_instance = new GInfos();  
        }
        return self::$m_instance;
    }
    //===============================================
    public function createDom() {
        $this->dom = new GDomXml();
        $this->dom->createDoc();
        $this->dom->loadXmlFile("app_infos.xml");
        $this->dom->createXPath();
        //
        $this->domData = new GDomXml();
        $this->domData->createDoc();
        $this->domData->loadXmlFile("app_data.xml");
        $this->domData->createXPath();
    }
    //===============================================
    public function run() {
        echo sprintf("<div class='infos'>\n");
        for($i = 0; $i < $this->countInfos(); $i++) {
            $lActive = $this->getActive($i);
            if($lActive) {
                $lType = $this->getType($i);
                if($lType == "profil") {
                    $this->showProfil($i);
                }
                else if($lType == "key_value") {
                    $this->showKeyValue($i);
                }
            }
        }
        echo sprintf("</div>\n");
    }
    //===============================================
    public function countInfos() {
        $this->dom->queryXPath(sprintf("/rdv/infos/info"));
        $lData = $this->dom->countXPath();
        return $lData;
    }
    //===============================================
    public function getType($index) {
        $this->dom->queryXPathEmpty(sprintf("/rdv/infos/info[position()=%d]/type", $index + 1));
        $lData = $this->dom->getNodeIndex(0)->getNodeValue();
        return $lData;
    }
    //===============================================
    public function getActive($index) {
        $this->dom->queryXPathEmpty(sprintf("/rdv/infos/info[position()=%d]/active", $index + 1));
        $lData = ($this->dom->getNodeIndex(0)->getNodeValue() == "1");
        return $lData;
    }
    //===============================================
    public function showProfil($index) {
        $lFaOn = $this->getProfilFaOn($index);
        $lFa = $this->getProfilFa($index);
        $lImg = $this->getProfilImg($index);
        echo sprintf("<div class='infos_profil'>\n");
        if($lFaOn) {
            echo sprintf("<i class='infos_profil_fa fa fa-%s'></i>\n", $lFa);
        }
        else {
            echo sprintf("<img class='infos_profil_img' src='%s%s'/>\n", $this->getWebRoot(), $lImg);
        }
        echo sprintf("</div>\n");
    }
    //===============================================
    public function getProfilImg($index) {
        $this->dom->queryXPath(sprintf("/rdv/infos/info[position()=%d]/img", $index + 1));
        $lData = $this->dom->getNodeIndex(0)->getNodeValue();
        return $lData;
    }
    //===============================================
    public function getProfilFa($index) {
        $this->dom->queryXPath(sprintf("/rdv/infos/info[position()=%d]/fa", $index + 1));
        $lData = $this->dom->getNodeIndex(0)->getNodeValue();
        return $lData;
    }
    //===============================================
    public function getProfilFaOn($index) {
        $this->dom->queryXPath(sprintf("/rdv/infos/info[position()=%d]/faon", $index + 1));
        $lData = ($this->dom->getNodeIndex(0)->getNodeValue() == "1");
        return $lData;
    }
    //===============================================
    public function showKeyValue($index) {
        $lKey = $this->getKey($index);
        $lValue = $this->getValue($index);
        echo sprintf("<div class='infos_kv'>\n");
        echo sprintf("<div class='infos_kv_key'>%s</div>\n", $lKey);
        echo sprintf("<div class='infos_kv_value'>%s</div>\n", $lValue);
        echo sprintf("</div>\n");
        
    }
    //===============================================
    public function getKey($index) {
        $this->dom->queryXPath(sprintf("/rdv/infos/info[position()=%d]/key", $index + 1));
        $lData = $this->dom->getNodeIndex(0)->getNodeValue();
        return $lData;
    }
    //===============================================
    public function getValue($index) {
        $this->dom->queryXPath(sprintf("/rdv/infos/info[position()=%d]/value", $index + 1));
        $lData = $this->dom->getNodeIndex(0)->getNodeValue();
        return $lData;
    }
    //===============================================
 }
//===============================================
?>
