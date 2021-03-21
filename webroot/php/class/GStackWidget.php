 <?php   
//===============================================
class GStackWidget extends GWidget {
    //===============================================
    private $m_pageMap = array();
    private $m_titleMap = array();
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    // method
    //===============================================
    public function addPage($key, $page, $title) {
        $this->m_pageMap[$key] = $page;
        $this->m_titleMap[$key] = $title;
    }
    //===============================================
    public function getPage($key) {
        return GManager::Instance()->getValue($this->m_pageMap, $key, "");
    }
    //===============================================
    public function getTitle($key) {
        return GManager::Instance()->getValue($this->m_titleMap, $key, "");
    }
    //===============================================
    public function run2($key) {
        $lPage = $this->getPage($key);
        GWidget::Create($lPage)->run();
    }
    //===============================================
    public function getSummary2($key) {
        $lPage = $this->getPage($key);
        return GWidget::Create($lPage)->getSummary();
    }
    //===============================================
}
//===============================================
?>