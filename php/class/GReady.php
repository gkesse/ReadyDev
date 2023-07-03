<?php
//===============================================
namespace php\class;
//===============================================
class GReady extends GObject {
    //===============================================
    private $m_menu = null;
    private $m_currentMenu = null;
    //===============================================
    public function __construct() {
        parent::__construct();
        $this->m_menu = new GMenu();
    }
    //===============================================
    public function run() {
        $this->init();
        $this->runMenu();
        $this->runView();
        $this->runPage();
    }
    //===============================================
    public function init() {
        $this->m_menu->init();
        $this->m_currentMenu = $this->m_menu->toCurrentMenu();
    }
    //===============================================
    public function isTemplate() {
        return true;
    }
    //===============================================
    public function toPageTitle() {
        return $this->m_currentMenu->getTitle();
    }
    //===============================================
    public function toView() {
        $lObj = new GViews();
        $lViews = $lObj->getViews();
        $this->m_logs->addLogs($lObj->getLogs());
        return $lViews;
    }
    //===============================================
    public function toFacebookUrl() {
        $lUrl = "http://www.facebook.com/sharer.php";
        $lUrl = sprintf("%s?u=%s", $lUrl, $this->getUrl());
        return $lUrl;
    }
    //===============================================
    public function toLinkedInUrl() {
        $lUrl = "https://www.linkedin.com/shareArticle";
        $lUrl = sprintf("%s?mini=true&url=%s&title=%s&summary=%s", $lUrl, $this->getUrl(), urlencode($this->toTitle()), urlencode($this->toDescription()));
        return $lUrl;
    }
    //===============================================
    public function toTitle() {
        $lTitle = sprintf("%s | %s", $this->toPageTitle(), $this->toSiteName());
        return $lTitle;
    }
    //===============================================
    public function toAdminIntroPath() {
        $lPath = "/home/admin/intro";
        $lPath = sprintf("%s/%s%s/main.php", $this->toRoot(), $this->toProjectName(), $lPath);
        $lPath = $this->getPath($lPath);
        return $lPath;
    }
    //===============================================
    public function toAdminFooterPath() {
        $lPath = "/home/admin/footer";
        $lPath = sprintf("%s/%s%s/main.php", $this->toRoot(), $this->toProjectName(), $lPath);
        $lPath = $this->getPath($lPath);
        return $lPath;
    }
    //===============================================
    public function toMenu($_parentIndex, $_currentMenu) {
        $lMenuI = $this->m_menu->findMap($_parentIndex);
        $lMenuK = null;
        
        for($i = 1; $i <= $lMenuI->size(); $i++) {
            $lMenuI->loadFromMap($i);
            if($lMenuI->isActive()) {
                $lMenuJ = $this->m_menu->findMap($lMenuI->getIndex());
                
                $lActive = "";
                
                $lActiveOk = false;
                $lActiveOk |= $lMenuI->isEqual($_currentMenu);
                $lActiveOk |= (($lMenuI->getName() == $_currentMenu->getName()) && !$lMenuI->getParentIndex());
                
                if($lActiveOk) $lActive = " Active";
                
                if(!$lMenuJ->size()) {
                    if(!$lMenuI->getParentIndex()) {
                        echo sprintf("<a class='Menu2%s' href='%s'><div class='Menu14'>%s</div></a>\n", $lActive, $lMenuI->getLink(), $lMenuI->getLabel());
                    }
                    else if($lMenuI->getParentIndex()) {
                        echo sprintf("<a class='Menu10' href='%s'><div class='Menu8%s'>%s</div></a>\n", $lMenuI->getLink(), $lActive, $lMenuI->getLabel());
                    }
                }
                else {
                    if(!$lMenuI->getParentIndex()) {
                        echo sprintf("<div class='Menu6'>\n");
                        echo sprintf("<a class='Menu2%s' href='%s' onclick='return call_server(\"app\", \"open_menu_group\", this)'><div class='Menu14'>%s</div><i class='Menu13 fa fa-caret-down'></i></a>\n", $lActive, $lMenuI->getLink(), $lMenuI->getLabel());
                        $lMenuK = $lMenuI;
                    }
                    else if($lMenuI->getParentIndex()) {
                        echo sprintf("<div class='Menu9'>\n");
                        echo sprintf("<div class='Menu12'><div class='Menu8'>%s <i class='Menu15 fa fa-caret-down'></i></div></div>\n", $lMenuI->getLabel());
                    }
                    
                    if(!$lMenuI->getParentIndex()) {
                        echo sprintf("<div class='Menu7'>\n");
                        echo sprintf("<a class='Menu16' href='%s'><div class='Menu8'>%s</div></a>\n", $lMenuK->getLink(), $lMenuK->getLabel());
                    }
                    else if($lMenuI->getParentIndex()) {
                        echo sprintf("<div class='Menu11'>\n");
                    }
                    
                    $this->toMenu($lMenuI->getIndex(), $_currentMenu);
                    echo sprintf("</div>\n");
                    echo sprintf("</div>\n");
                }
            }
        }
    }
    //===============================================
    public function runMenu() {
        echo sprintf("<div class='Menu1' id='HeaderMenu'>\n");
        echo sprintf("<a class='Menu3' href='%s'>\n", $this->getHomePage());
        echo sprintf("<img class='Menu4' src='%s' alt='logo.png'/>\n", $this->toLogo());
        echo sprintf("<span class='Menu5'>%s</span>\n", $this->toSiteName());
        echo sprintf("</a>\n");
        $this->toMenu(0, $this->m_currentMenu);
        echo sprintf("<div class='Bars1' onclick='call_server(\"app\", \"open_menu_bars\", this)'><i class='fa fa-bars'></i></div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function runView() {
        echo sprintf("<div class='View1'>\n");
        // title
        echo sprintf("<h1 class='View2'>%s</h1>\n", $this->toPageTitle());
        //
        echo sprintf("<div class='View3'>\n");
        echo sprintf("<div>\n");
        echo sprintf("<div class='View4'>\n");
        // label
        echo sprintf("<div class='View6'><i class='fa fa-eye'></i> Vues</div>\n");
        // vues
        echo sprintf("<div class='View7'>%d</div>\n", $this->toView());
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("<div>\n");
        // network
        echo sprintf("<a href=\"%s\" target='_blank'><i class='View5 Facebook fa fa-facebook'></i></a>\n", $this->toFacebookUrl());
        echo sprintf("<a href=\"%s\" target='_blank'><i class='View5 Linkedin fa fa-linkedin'></i></a>\n", $this->toLinkedInUrl());
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function runPage() {
        if($this->isAdmin()) {
            if($this->isLogin()) {
                $this->showPage($this->toAdminIntroPath());
                $lObj = new GAdmin();
                $lObj->run();
                $this->m_logs->addLogs($lObj->getLogs());
                $this->showPage($this->toAdminFooterPath());
            }
        }
        else {
            $this->showPage($this->toPath());
        }
        return !$this->m_logs->hasErrors();
    }
    //===============================================
    public function showPage($_path) {
        if(!file_exists($_path)) {
            $this->m_logs->addError("Page non trouvée !");
            return false;
        }
        if($this->isTemplate()) {
            $this->getTemplate()->render($_path);
        }
        else {
            require $_path;
        }
        return true;
    }
    //===============================================
}
//===============================================
?>
