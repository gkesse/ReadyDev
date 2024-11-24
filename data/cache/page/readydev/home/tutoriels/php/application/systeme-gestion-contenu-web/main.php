<div class="GAccess1 Access1">
<a class="GAccess2 Access2" href="/home">Accueil</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels">Tutoriels</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels#php">PHP</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels/php/application/systeme_covoiturage">CMS</a></div><div class="GParallax1 Parallax1">
<div class="Parallax2" style="background-image: url(&quot;/data/img/defaults/binary.png&quot;);">
<div class="Parallax3"><a href="#" class="Parallax4">Conception d'un système de gestion de contenu web (CMS)</a></div>
</div>
<div class="Parallax5" style="background-color: rgb(128, 51, 0);"><br>Bienvenue dans ce tutoriel consacré à la conception d'un <b>système de gestion de contenu web (CMS)</b> en <b>PHP</b> sous le système Windows avec l'utilisation de l'outil <b>WampServer</b> (Windows Apache MySQL PHP).<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="GSummary1"><div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#introduction">Introduction</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#configuration-du-serveur-php-sous-wampserver">Configuration du serveur PHP sous WampServer</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#configuration-du-chargement-automatique-de-classe">Configuration du chargement automatique de classe</a>
</div>
</div><br></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="introduction">Introduction</a>
</h1>
<div class="Section6"><br>Un <b>CMS</b> (Content Management System) est un système de gestion de contenu. Il aide les entreprises à gérer leur contenu numérique. Il permet de créer, de gérer et de modifier facilement un site web, sans avoir besoin de connaissances techniques en langage informatique.&nbsp;Des équipes entières peuvent utiliser ce système pour créer, modifier, organiser et publier du contenu. Dans un CMS,&nbsp;le fond et la forme sont dissociés, ce qui simplifie la création de site web. Il vous suffit par exemple de copier le texte dans le champ prévu à cet effet et de cliquer sur le bouton "Publier" pour mettre ce contenu en ligne. C'est bien sûr la même chose pour des photos ou des vidéos.<br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="configuration-du-serveur-php-sous-wampserver">Configuration du serveur PHP sous WampServer</a>
</h1>
<div class="Section6"><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#configuration-du-serveur-php-sous-wampserver_demarrage-du-serveur">Démarrage du serveur</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#configuration-du-serveur-php-sous-wampserver_erreurs-de-demarrage-du-serveur">Erreurs de démarrage du serveur</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="configuration-du-serveur-php-sous-wampserver_demarrage-du-serveur" href="#configuration-du-serveur-php-sous-wampserver">Démarrage du serveur</a>
</h2><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous éditons les fichiers (httpd.conf), (httpd-vhosts.conf), (index.php) pour afficher un message à l'écran.</div>
</div><br><span class="GText2" style="
color: #00ff00;
">// C:\wamp64\bin\apache\apache2.4.54.2\conf\httpd.conf</span>&nbsp;&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
LoadModule vhost_alias_module modules/mod_vhost_alias.so
...
Include conf/extra/httpd-vhosts.conf
...</pre><br><span class="GText2" style="
color: #00ff00;
">// C:\wamp64\bin\apache\apache2.4.54.2\conf\httpd.conf</span><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
Listen 0.0.0.0:8000
Listen [::0]:8000
...</pre><br><span class="GText2" style="
color: #00ff00;
">// C:\wamp64\bin\apache\apache2.4.54.2\conf\extra\httpd-vhosts.conf</span><br><pre class="GCode1 Code1 AceCode" data-mode="xml" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
&lt;VirtualHost *:80&gt;
    ServerName localhost
    ServerAlias localhost
    DocumentRoot "${INSTALL_DIR}/www"
    ...
    &lt;Directory "${INSTALL_DIR}/www/"&gt;
        Options +Indexes +Includes +FollowSymLinks +MultiViews
        AllowOverride All
        Require local
    &lt;/Directory&gt;
&lt;/VirtualHost&gt;
...</pre><br><span class="GText2" style="
color: #00ff00;
">// C:\wamp64\bin\apache\apache2.4.54.2\conf\extra\httpd-vhosts.conf</span><br><pre class="GCode1 Code1 AceCode" data-mode="xml" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
&lt;VirtualHost *:8000&gt;
    ServerName readycms.com
    ServerAlias www.readycms.com 
    ServerAdmin readyteam@readycms.com
    DocumentRoot "C:/.../readycms"
    ...
    &lt;Directory "C:/.../readycms"&gt;
        Options All
        AllowOverride All
        Order allow,deny
        allow from all
        Require all granted
    &lt;/Directory&gt;
&lt;/VirtualHost&gt;
...</pre><br><span class="GText2" style="
color: #00ff00;
">// WampServer (Tray Icon)</span><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">WampServer &gt; Clic droit &gt; Redémarrer les services</pre><br><span class="GText2" style="
color: #00ff00;
">// index.php</span><br><pre class="GCode1 Code1 AceCode" data-mode="php" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">&lt;?php
echo "Démarrage de l'application...";</pre><br><span class="GText2" style="
color: #00ff00;
">// Chrome</span><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">http://localhost:8000/
...
La page web s'affiche avec le message à l'écran</pre><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,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"></div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="configuration-du-serveur-php-sous-wampserver_erreurs-de-demarrage-du-serveur" href="#configuration-du-serveur-php-sous-wampserver">Erreurs de démarrage du serveur</a>
</h2><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous utilisons la commande (httpd) pour visualiser les logs en cas d'erreurs lors du démarrage des services WampServer.
Ajouter un texte.</div>
</div><br><span class="GText2" style="
color: #00ff00;
">// Terminal</span><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">"C:\wamp64\bin\apache\apache2.4.54.2\bin\httpd.exe" -t
...
AH00526: Syntax error on line 38 of C:/wamp64/bin/apache/apache2.4.54.2/conf/extra/httpd-vhosts.conf:
DocumentRoot must be a directory
...
La ligne (38) du fichier (httpd-vhosts.conf) est en erreur</pre><br><span class="GText2" style="
color: #00ff00;
">// Terminal</span><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">"C:\wamp64\bin\apache\apache2.4.54.2\bin\httpd.exe" -t
...
Syntax OK</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="configuration-du-chargement-automatique-de-classe">Configuration du chargement automatique de classe</a>
</h1>
<div class="Section6"><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#configuration-du-chargement-automatique-de-classe_chargement-automatique">Chargement automatique</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="configuration-du-chargement-automatique-de-classe_chargement-automatique" href="#configuration-du-chargement-automatique-de-classe">Chargement automatique</a>
</h2><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous éditons les fichiers (index.php), (GProcess.php), (GObject.php), (GInclude.php), (GAutoload.php) pour configurer le chargement automatique de classe.</div>
</div><br><span class="GText2" style="
color: #00ff00;
">// index.php</span><br><pre class="GCode1 Code1 AceCode" data-mode="php" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">&lt;?php
require $_SERVER["DOCUMENT_ROOT"] . "/php/class/GInclude.php";
...
use php\class\GProcess;
...
$lProcess = new GProcess();
...</pre><br><span class="GText2" style="
color: #00ff00;
">// GProcess.php</span><br><pre class="GCode1 Code1 AceCode" data-mode="php" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">&lt;?php
...
namespace php\class;
...
class GProcess extends GObject
{
    public function __construct()
    {
        echo "Démarrage de l'application...";
    }
}</pre><br><span class="GText2" style="
color: #00ff00;
">// GObject.php</span><br><pre class="GCode1 Code1 AceCode" data-mode="php" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">&lt;?php
...
namespace php\class;
...
class GObject
{
    public function __construct() {}
}</pre><br><span class="GText2" style="
color: #00ff00;
">// GInclude.php</span><br><pre class="GCode1 Code1 AceCode" data-mode="php" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">&lt;?php
require $_SERVER["DOCUMENT_ROOT"] . "/php/class/GAutoload.php";
...</pre><br><span class="GText2" style="
color: #00ff00;
">// GAutoload.php</span><br><pre class="GCode1 Code1 AceCode" data-mode="php" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">&lt;?php
...
namespace php\class;
...
function GAutoloadRegister($_className)
{
    $lFilename = $_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR . $_className . ".php";
    $lFilename = str_replace("\\", "/", $lFilename);

    if (is_readable($lFilename)) {
        require $lFilename;
    }
}
...
if (version_compare(PHP_VERSION, "5.1.2", "&gt;=")) {
    if (version_compare(PHP_VERSION, "5.3.0", "&gt;=")) {
        spl_autoload_register("php\class\GAutoloadRegister", true, true);
    } else {
        spl_autoload_register("php\class\GAutoloadRegister");
    }
} else {
    function spl_autoload_register($_className)
    {
        GAutoloadRegister($_className);
    }
}</pre><br><span class="GText2" style="
color: #00ff00;
">// Chrome</span><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">http://localhost:8000/
...
La page web s'affiche avec le message à l'écran</pre><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,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"></div><br></div>
</div>
</div>
</div><br>