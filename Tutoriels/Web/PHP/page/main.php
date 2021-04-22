<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Programmation web en PHP<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la programmation web en <b>PHP</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>PHP</b> est un langage de programmation orientée objet utilisé pour produire des pages Web dynamiques via un serveur HTTP, pouvant également fonctionner comme n'importe quel langage interprété de façon locale.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Web/PHP/img/b_php.png" alt="/Tutoriels/Web/PHP/img/b_php.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation"><a class="Link3" href="#">Installation</a></h1><div class="Body3"><br>Installer l'environnement PHP.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617649094292"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617649094292");</script></div><br><h2 class="Title7 GTitle2" id="Installation-1 - Installation sous Windows"><a class="Link9" href="#Installation">1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1 - Installation sous WampServer"><a class="Link9" href="#Installation">1.1 - Installation sous WampServer</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1.1 - Télécharger WampServer"><a class="Link9" href="#Installation">1.1.1 - Télécharger WampServer</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.wampserver.com/">https://www.wampserver.com/</a><br><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://sourceforge.net/projects/wampserver/files/">https://sourceforge.net/projects/wampserver/files/</a><br><br><b>wampserver3.2.3_x64.exe</b><br><br><h2 class="Title7 GTitle2" id="Installation-1.1.2 - Installer WampServer"><a class="Link9" href="#Installation">1.1.2 - Installer WampServer</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">wampserver3.2.3_x64.exe
Langue de l'assistant d'installation -&gt; Français
OK
Cocher -&gt; Je comprends et J'accepte les termes du contrat de licence
Suivant -&gt; Suivant
Dossier de destination -&gt; c:\wamp64
Suivant
Composants à installer -&gt; Installation par defaut
Suivant
Installer


Choisir un autre navigateur -&gt; Oui -&gt; Firefox
Choisir un autre éditeur de texte -&gt; Oui -&gt; Notepad++

Information

Pour quelques explications sur le fonctionnement de Wampserver
⦁	Voir le fichier : wamp(64)\instructions_utilisation.pdf
Pour l'utilisation de MariaDB et MySQL
⦁	Voir le fichier : wamp(64)\mariadb_mysql.txt

Suivant
Terminer</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-1.1.3 - Démarrer le serveur"><a class="Link9" href="#Installation">1.1.3 - Démarrer le serveur</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Windows
WampServer</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-1.1.4 - Vérifier le serveur"><a class="Link9" href="#Installation">1.1.4 - Vérifier le serveur</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="http://localhost/">http://localhost/</a><br><br><h2 class="Title7 GTitle2" id="Installation-1.1.5 - Configurer le serveur"><a class="Link9" href="#Installation">1.1.5 - Configurer le serveur</a></h2><br><h3 class="Title8 GTitle3">httpd.conf</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh"># on active le module cgi
LoadModule cgi_module modules/mod_cgi.so
# on active le module rewrite
LoadModule rewrite_module modules/mod_rewrite.so
# on active le module vhost
LoadModule vhost_alias_module modules/mod_vhost_alias.so
# on inclut le fichier de configuration
# des machines virtuelles
Include conf/extra/httpd-vhosts.conf
# on configure les ports a ecouter
Listen 0.0.0.0:80
Listen [::0]:80
Listen 0.0.0.0:8800
Listen [::0]:8800</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-1.1.6 - Configurer les machines virtuelles"><a class="Link9" href="#Installation">1.1.6 - Configurer les machines virtuelles</a></h2><br><h3 class="Title8 GTitle3">httpd-vhosts.conf</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">#================================================
# Virtual Hosts
#================================================
# on configure le serveur associe au port 80
&lt;VirtualHost *:80&gt;
    ServerName localhost
    ServerAlias localhost
    DocumentRoot "${INSTALL_DIR}/www"
    &lt;Directory "${INSTALL_DIR}/www/"&gt;
        Options +Indexes +Includes +FollowSymLinks +MultiViews
        AllowOverride All
        Require local
    &lt;/Directory&gt;
&lt;/VirtualHost&gt;
#================================================
# on configure le serveur associe au port 80
&lt;VirtualHost *:8800&gt;
    # on definit le nom du serveur
    ServerName www.readydev.com
    # on definit l'email de l'administrateur
    ServerAdmin gerard.kesse@outlook.fr
    # on definit la racine du serveur
    DocumentRoot "C:/Users/Admin/Downloads/Programs/ReadyDev"
    
    # on definit les directives autorisees sur le serveur
    &lt;Directory "C:/Users/Admin/Downloads/Programs/ReadyDev"&gt;
        # on autorise toutes les options
        # ExecCGI | FollowSymLinks | Includes | Indexes
        # MultiViews | SymLinksIfOwnerMatch
        Options All
        # on autorise la lecture du fichier .htaccess
        AllowOverride All
        # on definit l'ordre de traitement des adresses ip 
        # en optant en premier lieu pour le traitement 
        # des adresses ip autorisees puis en second lieu 
        # pour le traitement des adresses ip interdites
        Order allow,deny
        # on donne l'autorisation d'acces a toutes les adresses ip
        allow from all
        # on autorise tout mode d'acces au serveur sans restriction
        Require all granted
    &lt;/Directory&gt;
&lt;/VirtualHost&gt;
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-1.1.7 - Redémarrer les services"><a class="Link9" href="#Installation">1.1.7 - Redémarrer les services</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">WampServer
Clic gauche -&gt; Redémarrer les services</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tests"><a class="Link3" href="#">Tests</a></h1><div class="Body3"><br>Créer un projet PHP.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617649178149"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617649178149");</script></div><br><h2 class="Title7 GTitle2" id="Tests-1 - Test sous Windows"><a class="Link9" href="#Tests">1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.1 - Test sous WampServer"><a class="Link9" href="#Tests">1.1 - Test sous WampServer</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.1.1 - Éditer le programme"><a class="Link9" href="#Tests">1.1.1 - Éditer le programme</a></h2><br><h3 class="Title8 GTitle3">index.php</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="php">&lt;?php
//===============================================
// on affiche un message a l'ecran
echo "Bonjour tout le monde";
//===============================================
?&gt;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.2 - Afficher la page web"><a class="Link9" href="#Tests">1.1.2 - Afficher la page web</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="http://localhost:8800/">http://localhost:8800/</a><br><br><div class="Img3 GImage"><img src="/Tutoriels/Web/PHP/img/i_php_test.png" alt="/Tutoriels/Web/PHP/img/i_php_test.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Système d'administration"><a class="Link3" href="#">Système d'administration</a></h1><div class="Body3"><br>Créer un système d'administration en PHP.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1619045578000"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1619045578000");</script></div><br><div class="Img3 GImage"><img src="/Tutoriels/Web/PHP/img/b_php_admin_system.png" alt="/Tutoriels/Web/PHP/img/b_php_admin_system.png"></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Introduction"><a class="Link9" href="#Système d'administration">Introduction</a></h2><br>Le système d'administration que nous présentons ici est une interface en ligne de commande permettant d'accéder à toutes les fonctionnalités d'une application.<br><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme principal"><a class="Link9" href="#Système d'administration">Programme principal</a></h2><br><h3 class="Title8 GTitle3">index.php</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="php">&lt;?php   
//===============================================
// on appelle le chargeur automatique de classes
require $_SERVER["DOCUMENT_ROOT"]."/webroot/php/class/GAutoload.php";
//===============================================
// on appelle le patron post-redirect-get 
// afin de resoudre les problemes 
// de soumissions multiples de formulaire
GManager::Instance()-&gt;redirectPost();
// on appelle le system d'aministration
GProcess::Instance()-&gt;run();
//===============================================
?&gt;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Structure du système d'administration"><a class="Link9" href="#Système d'administration">Structure du système d'administration</a></h2><br><h3 class="Title8 GTitle3">GProcess.php</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="php">&lt;?php   
//===============================================
class GProcess {
    //===============================================
    private static $m_instance = null;
    //===============================================
    private function __construct() {
        
    }
    //===============================================
    public static function Instance() {
        if(is_null(self::$m_instance)) {
            self::$m_instance = new GProcess();  
        }
        return self::$m_instance;
    }
    //===============================================
    // on definit le systeme d'administration
    //===============================================
    public function run() {
        // on recupere le manager de donnees
        $lApp = GManager::Instance()-&gt;getData()-&gt;app;
        // on cree le gestionnaire de page web
        $lApp-&gt;win = GWidget::Create("window");
        
        // on cree les base donnees du systeme
        GSQLite::Instance();
        // on charge les donnees du systeme
        GManager::Instance()-&gt;loadData();
        // on incremente le nombre vue de la page courante
        GView::Instance()-&gt;increment();
        // on cree le super-utilisateur root
        GLogin::Instance()-&gt;createRoot();
        
        // on cree l'entete de la page
        GWidget::Create("header")-&gt;run();
        // on cree le corps de la page
        GWidget::Create("body")-&gt;run();
        // on cree le pied de la page
        GWidget::Create("footer")-&gt;run();
    }
    //===============================================
}
//===============================================
?&gt;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Gestionnaire de page web"><a class="Link9" href="#Système d'administration">Gestionnaire de page web</a></h2><br><h3 class="Title8 GTitle3">GWindow.php</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="php">&lt;?php   
//===============================================
class GWindow extends GWidget {
    //===============================================
    // on definit la construction du systeme
    //===============================================
    public function __construct() {
        // on recupere le manager de donnee
        $lApp = GManager::Instance()-&gt;getData()-&gt;app;
        // on cree le systeme
        $lApp-&gt;page_map = GWidget::Create("stackwidget");
        
        // on ajoute des pages dans le systeme
        // on ajoute la page du module accueil
        $lApp-&gt;page_map-&gt;addPage("home", "home", "Accueil");
        // on ajoute la page du module deconnexion
        if($lApp-&gt;login_on == "on") {$lApp-&gt;page_map-&gt;addPage("home/logout", "logout", "Déconnexion");}
        // on ajoute la page du module connexion
        else {$lApp-&gt;page_map-&gt;addPage("home/login", "login", "Connexion");}
        // on ajoute la page du moduleutilisateur
        $lApp-&gt;page_map-&gt;addPage("home/users", "user", "Utilisateurs");
        // on ajoute la page du module profil
        $lApp-&gt;page_map-&gt;addPage("home/profile", "profile", "Profil");
        // on ajoute la page du module sqlite
        $lApp-&gt;page_map-&gt;addPage("home/sqlite", "sqlite", "SQLite");
        // on ajoute la page du module timesheet
        $lApp-&gt;page_map-&gt;addPage("home/timesheet", "timesheet", "Feuille de temps");
        // on ajoute la page du module filesystem
        $lApp-&gt;page_map-&gt;addPage("home/filesystem", "filesystem", "Filesystem");
        // on ajoute la page d'erreur
        $lApp-&gt;page_map-&gt;addPage("home/message", "message", "Message");
    }
    //===============================================
    // on definit la creation d'une page a partir de son id
    //===============================================
    public function run() {
        // on recupere le manager de donnees
        $lApp = GManager::Instance()-&gt;getData()-&gt;app;
        // on encadre la page dans une balise div
        echo sprintf("&lt;div class='window'&gt;\n");
        // on aff
        $lApp-&gt;page_map-&gt;run2($lApp-&gt;page_id);
        echo sprintf("&lt;/div&gt;\n");
    }
    //===============================================
}
//===============================================
?&gt;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Page d'accueil"><a class="Link9" href="#Système d'administration">Page d'accueil</a></h2><br><h3 class="Title8 GTitle3">GHome.php</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="php">&lt;?php   
//===============================================
class GHome extends GWidget {
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    // on definit la construction de la page d'accueil
    //===============================================
    public function run() {
        // on recupere le manager de donnees
        $lApp = GManager::Instance()-&gt;getData()-&gt;app;
        $lApp-&gt;filesystem = ".";
        
        // on ajoute des pages a la page d'accueil
        // en indiquant pour chaque page son adresse,
        // son nom et son icone
        echo sprintf("&lt;div class=''&gt;\n");
        if($lApp-&gt;login_on == "on") {$this-&gt;addItem("home/logout", "Déconnexion", "power-off");}
        else {$this-&gt;addItem("home/login", "Connexion", "user");}
        $this-&gt;addItem("/home/users", "Utilisateurs", "users");
        $this-&gt;addItem("/home/profile", "Profil", "address-book-o");
        $this-&gt;addItem("/home/sqlite", "SQLite", "database");
        $this-&gt;addItem("/home/timesheet", "Timesheet", "calendar");
        $this-&gt;addItem("/home/filesystem", "Filesystem", "hdd-o");
        echo sprintf("&lt;/div&gt;\n");
    }
    //===============================================
    public function addItem($key, $text, $icon) {
        echo sprintf("&lt;a class='button2' href='%s'&gt;&lt;i class='icon fa fa-%s'&gt;&lt;/i&gt; %s&lt;/a&gt;\n",
        $key, $icon, $text);
    }
    //===============================================
}
//===============================================
?&gt;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Résultat des opérations"><a class="Link9" href="#Système d'administration">Résultat des opérations</a></h2><br><h2 class="Title7 GTitle2" id="Système d'administration-1 - Page d'accueil"><a class="Link9" href="#Système d'administration">1 - Page d'accueil</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Web/PHP/img/i_php_admin_system.png" alt="/Tutoriels/Web/PHP/img/i_php_admin_system.png"></div><br><h2 class="Title7 GTitle2" id="Système d'administration-2 - Interface du module Connexion"><a class="Link9" href="#Système d'administration">2 - Interface du module Connexion</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Web/PHP/img/i_php_admin_system_02.png" alt="/Tutoriels/Web/PHP/img/i_php_admin_system_02.png"></div><br><h2 class="Title7 GTitle2" id="Système d'administration-3 - Interface du module SQLite"><a class="Link9" href="#Système d'administration">3 - Interface du module SQLite</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Web/PHP/img/i_php_admin_system_03.png" alt="/Tutoriels/Web/PHP/img/i_php_admin_system_03.png"></div><br><h2 class="Title7 GTitle2" id="Système d'administration-3.1 - Affichage d'une table"><a class="Link9" href="#Système d'administration">3.1 - Affichage d'une table</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Web/PHP/img/i_php_admin_system_04.png" alt="/Tutoriels/Web/PHP/img/i_php_admin_system_04.png"></div><br><h2 class="Title7 GTitle2" id="Système d'administration-4 - Interface du module Filesystem"><a class="Link9" href="#Système d'administration">4 - Interface du module Filesystem</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Web/PHP/img/i_php_admin_system_05.png" alt="/Tutoriels/Web/PHP/img/i_php_admin_system_05.png"></div><br></div></div></div></div><br>