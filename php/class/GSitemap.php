<?php
//===============================================
namespace php\class;
//===============================================
class GSitemap extends GManager {
    //===============================================
    private $m_root = "";
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function clone() {
        return new GSitemap();
    }
    //===============================================
    public function setObj($_obj) {
        $this->m_root = $_obj->m_root;
    }
    //===============================================
    public function isEqual($_obj) {
        $lEqualOk = true;
        $lEqualOk &= ($this->m_root == $_obj->m_root);
        return $lEqualOk;
    }
    //===============================================
    public function serialize($_code = "sitemap") {
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->addData($_code, "root", $this->m_root);
        $lDom->addMap($_code, $this->m_map);
        return $lDom->toString();
    }
    //===============================================
    public function deserialize($_data, $_code = "sitemap") {
        parent::deserialize($_data);
        $lDom = new GCode();
        $lDom->loadXml($_data);
        $this->m_root = $lDom->getData($_code, "root");
        $lDom->getMap($_code, $this->m_map, $this);
    }
    //===============================================
    public function run($_data) {
        $this->deserialize($_data);
        if($this->m_method == "") {
            $this->m_logs->addError("La méthode est obligatoire.");
        }
        else if($this->m_method == "generate_sitemap") {
            $this->onGenerateSitemap($_data);
        }
        else if($this->m_method == "visualize_sitemap") {
            $this->onVisualizeSitemap($_data);
        }
        else {
            $this->m_logs->addError("La méthode est inconnue.");
        }
        return !$this->m_logs->hasErrors();
    }
    //===============================================
    public function onGenerateSitemap($_data) {
        $lModule = "readydev";
        if($lModule == "") {
            $this->m_logs->addError("Le module sitemap est obligatoire.");
        }
        else if($lModule == "readydev") {
            $this->onGenerateSitemapReadydev($_data);
        }
        else {
            $this->m_logs->addError("Le module sitemap est inconnu.");
        }
    }
    //===============================================
    public function onGenerateSitemapReadydev($_data) {
        $lSiteUrl = "https://readydev.ovh";
        $lSitemapFile = "sitemap.xml";
        $lRobotFile = "robots.txt";
        
        $lDom = new GXml();
        $lObj = new GXml();
        $lDom->createRoot("urlset");
        $lDom->createAttr($lDom, "xmlns:xsi", "http://www.w3.org/2001/XMLSchema-instance");
        $lDom->createAttr($lDom, "xsi:schemaLocation", "http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd");
        $lDom->createAttr($lDom, "xmlns", "http://www.sitemaps.org/schemas/sitemap/0.9");
        
        $lDate = new \DateTime();
        $lDate->setTimezone(new \DateTimeZone('Europe/Paris'));
        
        $lMenu = new GMenu();
        $lMenu->init();

        $lSitemapCount = 0;
        
        for($i = 1; $i <= $lMenu->size(); $i++) {
            $lMenu->loadFromMap($i);
            $lLink = $lMenu->getLink();
            if($lLink == "") continue;
            $lSitemapCount++;
            
            $lLink = sprintf("%s%s", $lSiteUrl, $lLink);
            
            $lObj->setNode($lDom->addObj($lDom, "url"));
            
            $lObj->addValue($lDom, "loc", $lLink);
            $lObj->addValue($lDom, "lastmod", $lDate->format("Y-m-d\TH:i:sP"));
            $lObj->addValue($lDom, "changefreq", "daily");
            $lObj->addValue($lDom, "priority", "1.0");
        }
        
        $lSitemapXml = $lDom->toString();
        $lSitemapFileX = $this->getPath($lSitemapFile);
        
        file_put_contents($lSitemapFileX, $lSitemapXml);
        
        $lRobotTxt = "";
        
        $lRobotTxt .= sprintf("# Allow All\n");
        $lRobotTxt .= sprintf("User-agent: *\n");
        $lRobotTxt .= sprintf("Allow: /\n");
        $lRobotTxt .= sprintf("\n");
        $lRobotTxt .= sprintf("# Sitemaps\n");
        $lRobotTxt .= sprintf("Sitemap: %s/%s\n", $lSiteUrl, $lSitemapFile);
        
        $lRobotFileX = $this->getPath($lRobotFile);
                
        file_put_contents($lRobotFileX, $lRobotTxt);
        
        $this->m_logs->addData(sprintf("SitemapCount : %d", $lSitemapCount));
        $this->m_logs->addData($lSitemapXml);
        $this->m_logs->addData($lRobotTxt);
    }
    //===============================================
    public function onVisualizeSitemap($_data) {
        $lSitemapFile = "sitemap.xml";
        $lRobotFile = "robots.txt";
        
        $lSitemapFile = $this->getPath($lSitemapFile);
        
        if(!file_exists($lSitemapFile)) {
            $this->m_logs->addError("Le fichier sitemap.xml n'existe pas.");
            return;
        }
        
        $lRobotFile = $this->getPath($lRobotFile);
        
        if(!file_exists($lRobotFile)) {
            $this->m_logs->addError("Le fichier robot.txt n'existe pas.");
            return;
        }
        
        $lSitemapTxt = file_get_contents($lSitemapFile);
        $lRobotTxt = file_get_contents($lRobotFile);
        
        $this->m_logs->addData($lSitemapTxt);
        $this->m_logs->addData($lRobotTxt);
    }
    //===============================================
}
//===============================================
?>
