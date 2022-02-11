<?php   
//===============================================
class GMail extends GObject {
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
            self::$m_instance = new GMail();  
        }
        return self::$m_instance;
    }
    //===============================================
    public function createDom() {
        $this->dom = new GDomXml();
        $this->dom->createDom();
        $this->dom->loadXmlFile("app_header.xml");
        $this->dom->createXPath();
    }
    //===============================================
    public function sendMail() {
        $from = "no-reply@readydev.com";
        $to = "pierre.yuri@outlook.fr";
        $subject = "Essai de PHP Mail";
        $message = "PHP Mail fonctionne parfaitement";
        $headers = "De :" . $from;        
        mail($to, $subject, $message, $headers);
    }
    //===============================================
}
//===============================================
?>
