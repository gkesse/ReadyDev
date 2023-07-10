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
        else if($lModule == "icamys") {
            $this->onGenerateSitemapIcamys($_data);
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
    public function onGenerateSitemapIcamys($_data) {
        $lSiteUrl = "https://readydev.ovh";
        $lOuputDir = $this->getPath("");
        
        $generator = new \Icamys\SitemapGenerator\SitemapGenerator($lSiteUrl, $lOuputDir);
        
        // Create a compressed sitemap
        $generator->enableCompression();
        
        // Determine how many urls should be put into one file;
        // this feature is useful in case if you have too large urls
        // and your sitemap is out of allowed size (50Mb)
        // according to the standard protocol 50000 urls per sitemap
        // is the maximum allowed value (see http://www.sitemaps.org/protocol.html)
        $generator->setMaxUrlsPerSitemap(50000);
        
        // Set the sitemap file name
        $generator->setSitemapFileName("sitemap.xml");
        
        // Set the sitemap index file name
        $generator->setSitemapIndexFileName("sitemap-index.xml");
        
        // Add alternate languages if needed
        $alternates = [
                ['hreflang' => 'de', 'href' => "http://www.example.com/de"],
                ['hreflang' => 'fr', 'href' => "http://www.example.com/fr"],
        ];
        
        // Add url components: `path`, `lastmodified`, `changefreq`, `priority`, `alternates`
        // Instead of storing all urls in the memory, the generator will flush sets of added urls
        // to the temporary files created on your disk.
        // The file format is 'sm-{index}-{timestamp}.xml'
        $generator->addURL('/path/to/page/', new \DateTime(), 'always', 0.5, $alternates);
        
        // Optional: add sitemap stylesheet. Note that you need to create
        // the file 'sitemap.xsl' beforehand on your own.
        $generator->setSitemapStylesheet('sitemap.xsl');
        
        // Flush all stored urls from memory to the disk and close all necessary tags.
        $generator->flush();
        
        // Move flushed files to their final location. Compress if the option is enabled.
        $generator->finalize();
        
        // Update robots.txt file in output directory or create a new one
        $generator->updateRobots();
        
        // Submit your sitemaps to Google and Yandex.
        //$generator->submitSitemap();
    }
    //===============================================
    public function onVisualizeSitemap($_data) {
        $this->m_logs->addData("onVisualizeSitemap...");
    }
    //===============================================
}
//===============================================
?>
