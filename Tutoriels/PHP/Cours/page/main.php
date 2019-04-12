<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la programmation web avec le PHP<br></div></a></div></div><div class="Body2 Orange">            Le <b>PHP</b> est un langage de programmation web dynamique orientée objet utilisé côté serveur.<br>			Le but de ce tutoriel est de vous apprendre la programmation web dynamique avec le <b>PHP</b>.<br>            Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1530883768490"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1530883768490");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation sous Windows"><a class="Link3" href="#">Installation sous Windows</a></h1><div class="Body3">Le but de cette section est de vous présenter les différents outils nécessaires pour apprendre la la programmation web dynamique avec le PHP, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>Dans ce tutoriel, nous utiliserons, sous Windows:<br>- WampServer, comme serveur web.<br>- Firefox, comme navigateur web.<br>- Notepad++, comme éditeur de texte.<br><br><h3 class="Title8 GTitle3">Installer WampServer</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="http://www.wampserver.com/">http://www.wampserver.com/</a><br><br><h3 class="Title8 GTitle3">Installer Firefox</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.mozilla.org/fr/firefox/new/">https://www.mozilla.org/fr/firefox/new/</a><br><br><h3 class="Title8 GTitle3">Installer Notepad++</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://notepad-plus-plus.org/fr/">https://notepad-plus-plus.org/fr/</a></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Gestion de configuration"><a class="Link3" href="#">Gestion de configuration</a></h1><div class="Body3">Le but de cette section est de vous apprendre à créer un <span class="GColor1" style="color:lime;">Gestionnaire de configuration</span> avec le C.<br>Produit par <b>Gérard KESSE</b>.<br><br>Le Gestionnaire de configuration proposé ici est basé sur un tableau associatif.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1555049082230"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1555049082230");</script></div><br><h2 class="Title7 GTitle2" id="Gestion de configuration-Structure de données"><a class="Link9" href="#Gestion de configuration">Structure de données</a></h2><br><h3 class="Title8 GTitle3">Structure de données</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="php">&lt;?php
    //===============================================
    private $m_dataMap = array();
    //===============================================
?&gt;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestion de configuration-Ajouter une donnée"><a class="Link9" href="#Gestion de configuration">Ajouter une donnée</a></h2><br><h3 class="Title8 GTitle3">Ajouter une donnée</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="php">&lt;?php
    //===============================================
    public function setData($key, $data) {
        $this-&gt;m_dataMap[$key] = $data;
    }
    //===============================================
?&gt;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestion de configuration-Lire une donnée"><a class="Link9" href="#Gestion de configuration">Lire une donnée</a></h2><br><h3 class="Title8 GTitle3">Lire une donnée</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="php">&lt;?php
    //===============================================
    public function getData($key) {
        return $this-&gt;m_dataMap[$key];
    }
    //===============================================
?&gt;</xmp><br></pre></div><h2 class="Title7 GTitle2" id="Gestion de configuration-Lister les données"><a class="Link9" href="#Gestion de configuration">Lister les données</a></h2><br><h3 class="Title8 GTitle3">Lister les données</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="php">&lt;?php
    //===============================================
    public function showData() {
        foreach($this-&gt;m_dataMap as $key =&gt; $data) {
            echo $key . " = " . $data . "&lt;br&gt;";
        }
        echo "&lt;br&gt;";
    }
    //===============================================
?&gt;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestion de configuration-Programme de Test"><a class="Link9" href="#Gestion de configuration">Programme de Test</a></h2><br><h3 class="Title8 GTitle3">Programme de Test</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="php">&lt;?php
    //===============================================
    public function run() {
        GConfig::Instance()-&gt;setData("Nom", "KESSE");
        GConfig::Instance()-&gt;setData("Prenom", "Gerard");
        GConfig::Instance()-&gt;setData("Email", "gerard.kesse@readydev.com");
        GConfig::Instance()-&gt;setData("Diplome", "Ingenieur");
        GConfig::Instance()-&gt;setData("Formation", "Informatique Industrielle");
        GConfig::Instance()-&gt;setData("Ecole", "Polytech'Montpellier");
        GConfig::Instance()-&gt;showData();
    }
    //===============================================
?&gt;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestion de configuration-Résultat"><a class="Link9" href="#Gestion de configuration">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Config.png" alt="img/Config.png"></div></div></div></div></div><br>