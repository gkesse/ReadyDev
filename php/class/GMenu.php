<?php
//===============================================
namespace php\class;
//===============================================
class GMenu extends GObject
{
    //===============================================
    private $m_name = "";
    private $m_label = "";
    private $m_title = "";
    private $m_link = "";
    //===============================================
    public function __construct()
    {
        parent::__construct();
        $this->m_isActive = false;
    }
    //===============================================
    public function clone()
    {
        return new GMenu();
    }
    //===============================================
    public function setObj($_obj)
    {
        $this->m_index = $_obj->m_index;
        $this->m_parentIndex = $_obj->m_parentIndex;
        $this->m_name = $_obj->m_name;
        $this->m_label = $_obj->m_label;
        $this->m_title = $_obj->m_title;
        $this->m_link = $_obj->m_link;
        $this->m_isActive = $_obj->m_isActive;
    }
    //===============================================
    public function isEqual($_obj)
    {
        $lEqualOk = true;
        $lEqualOk &= ($this->m_name == $_obj->m_name);
        $lEqualOk &= ($this->m_label == $_obj->m_label);
        $lEqualOk &= ($this->m_title == $_obj->m_title);
        $lEqualOk &= ($this->m_link == $_obj->m_link);
        $lEqualOk &= ($this->m_isActive == $_obj->m_isActive);
        return $lEqualOk;
    }
    //===============================================
    public function isActive()
    {
        return $this->m_isActive;
    }
    //===============================================
    public function getTitle()
    {
        return $this->m_title;
    }
    //===============================================
    public function getName()
    {
        return $this->m_name;
    }
    //===============================================
    public function getLabel()
    {
        return $this->m_label;
    }
    //===============================================
    public function getLink()
    {
        return $this->m_link;
    }
    //===============================================
    public function addMenu($_name, $_label, $_title, $_link, $_obj, $_isActive = true)
    {
        $lObj = new GMenu();
        $lObj->m_index = $this->size() + 1;
        $lObj->m_parentIndex = $_obj->m_index;
        $lObj->m_name = $_name;
        $lObj->m_label = $_label;
        $lObj->m_title = $_title;
        $lObj->m_link = $_link;
        $lObj->m_isActive = $_isActive;
        $this->m_map[] = $lObj;
        return $lObj;
    }
    //===============================================
    public function init()
    {
        //===============================================
        // home
        //===============================================
        $this->addMenu("home", "Accueil", "Accueil", "/", $this, false);
        $this->addMenu("home", "Accueil", "Accueil", "/home", $this, false);
        //===============================================
        // cv
        //===============================================
        $lObj = $this->addMenu("cv", "CV",  "CV", "/home/cv", $this);
        $this->addMenu("cv", "CV Simplifié", "CV Simplifié", "/home/cv/simple", $lObj);
        $this->addMenu("cv", "CV Détaillé", "CV Détaillé", "/home/cv/full", $lObj);
        //===============================================
        // presentation
        //===============================================
        $this->addMenu("presentation", "Présentation", "Présentation", "/home/presentation", $this);
        //===============================================
        // tutoriels
        //===============================================
        $lObj = $this->addMenu("tutoriels", "Tutoriels", "Tutoriels", "/home/tutoriels", $this);
        // tutoriels/c#
        $lObj2 = $this->addMenu("tutoriels", "C#", "C#", "", $lObj);
        $this->addMenu("tutoriels", "Oscilloscope numérique", "Oscilloscope numérique", "/home/tutoriels/csharp/application/oscilloscope-numerique", $lObj2);
        // tutoriels/php
        $lObj2 = $this->addMenu("tutoriels", "PHP", "PHP", "", $lObj);
        $this->addMenu("tutoriels", "Système CMS", "Système de gestion de contenu web (CMS)", "/home/tutoriels/php/application/systeme-gestion-contenu-web", $lObj2);
        $this->addMenu("tutoriels", "Système CMS", "Système de gestion de contenu web (CMS)", "/home/tutoriels/php/application/systeme-gestion-contenu-web/page-02", $lObj2, false);
        // tutoriels/divers
        $lObj2 = $this->addMenu("tutoriels", "Divers", "Divers", "", $lObj);
        $this->addMenu("tutoriels", "Etudier en France", "Etudier en France", "/home/tutoriels/divers/etudier-en-france", $lObj2);
        $this->addMenu("tutoriels", "Etudier en France", "Etudier en France", "/home/tutoriels/divers/etudier-en-france/page-02", $lObj2, false);
        $this->addMenu("tutoriels", "Etudier en Tunisie", "Etudier en Tunisie", "/home/tutoriels/divers/etudier-en-tunisie", $lObj2);
        //===============================================
        // cours
        //===============================================
        $lObj = $this->addMenu("cours", "Cours", "Cours", "/home/cours", $this);
        // cours/electronique
        $this->addMenu("cours", "Electronique", "Electronique", "/home/cours/electronique", $lObj);
        //===============================================
        // admin
        //===============================================
        $this->addMenu("admin", "Admin", "Admin", "/home/admin", $this);
        //===============================================
        // connection
        //===============================================
        $this->addMenu("connection", "Connexion", "Connexion", "/home/connexion", $this, false);
    }
    //===============================================
    public function toCurrentMenu()
    {
        $lMenu = new GMenu();
        $lPageId = $this->getPageId();
        for ($i = 1; $i <= $this->size(); $i++) {
            $this->loadFromMap($i);
            if ($this->m_link == $lPageId) {
                $lMenu->setObj($this);
                break;
            }
        }
        return $lMenu;
    }
    //===============================================
    public function serialize($_code = "menu")
    {
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->addData($_code, "index", $this->m_index);
        $lDom->addData($_code, "parent_index", $this->m_parentIndex);
        $lDom->addData($_code, "name", $this->m_name);
        $lDom->addData($_code, "label", $this->m_label);
        $lDom->addData($_code, "title", $this->m_title);
        $lDom->addData($_code, "link", $this->m_link);
        $lDom->addData($_code, "active", $this->m_isActive);
        $lDom->addMap($_code, $this->m_map);
        return $lDom->toString();
    }
    //===============================================
    public function deserialize($_data, $_code = "menu")
    {
        $lDom = new GCode();
        $lDom->loadXml($_data);
        $this->m_index = $lDom->getData($_code, "index");
        $this->m_parentIndex = $lDom->getData($_code, "parent_index");
        $this->m_name = $lDom->getData($_code, "name");
        $this->m_label = $lDom->getData($_code, "label");
        $this->m_title = $lDom->getData($_code, "title");
        $this->m_link = $lDom->getData($_code, "link");
        $this->m_isActive = $lDom->getData($_code, "active");
        $lDom->getMap($_code, $this->m_map, $this);
    }
    //===============================================
}
//===============================================
