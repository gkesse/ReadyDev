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
        $this->dom = new GXml();
        $this->dom->createDocFile("pad.xml");
    }
    //===============================================
    public function sendMail() {
        $from = "paul.dmitri@outlook.fr";
        $to = "pierre.yuri@outlook.fr";
        $subject = "Essai de PHP Mail";
        $message = "PHP Mail fonctionne parfaitement";
        $headers = "De :" . $from;        
        $lOk = mail($to, $subject, $message, $headers);
        if($lOk) {
            GLog::Instance()->addLog(sprintf("Le mail a été envoyé avec susscès"));
        }
        else {
            GLog::Instance()->addLog(sprintf("L'envoi du mail a échoué"));            
        }
    }
    //===============================================
}
//===============================================
?>
