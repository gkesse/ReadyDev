<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Programmation web en PHP<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la programmation web en <b>PHP</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>PHP </b>est un langage de programmation libre, principalement utilisé pour produire des pages Web dynamiques via un serveur HTTP, mais pouvant également fonctionner comme n'importe quel langage interprété de façon locale. PHP est un langage impératif orienté objet. PHP a permis de créer un grand nombre de sites web célèbres, comme Facebook et Wikipédia. Il est considéré comme une des bases de la création de sites web dits dynamiques mais également des applications web. <br><br><div class="Img3 GImage"><img alt="/Tutoriels/Web/PHP/img/b_php.png" class="lazy" data-src="/Tutoriels/Web/PHP/img/b_php.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation"><a class="Link3" href="#">Installation</a></h1><div class="Body3"><br>Installer l'environnement PHP.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617649094292"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617649094292");</script></div><br><h2 class="Title7 GTitle2" id="Installation-Installer-l-environnement-PHP-avec-WampServer-sous-Windows"><a class="Link9" href="#Installation">Installer l'environnement PHP avec WampServer sous Windows</a></h2><br><b>WampServer </b>(anciennement WAMP5) est une plateforme de développement Web de type WAMP, permettant de faire fonctionner localement (sans avoir à se connecter à un serveur externe) des scripts PHP. WampServer n'est pas en soi un logiciel, mais un environnement comprenant trois serveurs (Apache, MySQL et MariaDB), un interpréteur de script (PHP), ainsi que phpMyAdmin pour l'administration Web des bases MySQL. Il dispose d'une interface d'administration permettant de gérer et d'administrer ses serveurs au travers d'un tray icon (icône près de l'horloge de Windows). La grande nouveauté de WampServer 3 réside dans la possibilité d'y installer et d'utiliser n'importe quelle version de PHP, Apache, MySQL ou MariaDB en un clic. Ainsi, chaque développeur peut reproduire fidèlement son serveur de production sur sa machine locale. <br><br><h3 class="Title8 GTitle3">Télécharger WampServer</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.wampserver.com/">https://www.wampserver.com/</a><br><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://sourceforge.net/projects/wampserver/files/">https://sourceforge.net/projects/wampserver/files/</a><br><br><b>wampserver3.2.3_x64.exe</b><br><br><h3 class="Title8 GTitle3">Installer WampServer</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">wampserver3.2.3_x64.exe
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
Terminer</pre></div></div><br><h3 class="Title8 GTitle3">Démarrer le serveur</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="html">Windows
WampServer</pre></div></div><br><h3 class="Title8 GTitle3">Vérifier l'installation</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="http://localhost/">http://localhost/</a><br><br><div class="Img3 GImage"><img alt="/Tutoriels/Web/PHP/img/i_php_test_wampserver.png" class="lazy" data-src="/Tutoriels/Web/PHP/img/i_php_test_wampserver.png"></div><br><h3 class="Title8 GTitle3">Configurer le module CGI<br></h3><br>C:\wamp64\bin\apache\apache2.4.46\conf\httpd.conf<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">LoadModule cgi_module modules/mod_cgi.so</pre></div></div><br><h3 class="Title8 GTitle3">Configurer le module de réécriture d'URL</h3><br>C:\wamp64\bin\apache\apache2.4.46\conf\httpd.conf<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">LoadModule rewrite_module modules/mod_rewrite.so</pre></div></div><br><h3 class="Title8 GTitle3">Configurer le module des machines virtuelles</h3><br>C:\wamp64\bin\apache\apache2.4.46\conf\httpd.conf<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">LoadModule vhost_alias_module modules/mod_vhost_alias.so
Include conf/extra/httpd-vhosts.conf</pre></div></div><br><h3 class="Title8 GTitle3">Configurer les ports du serveur</h3><br>C:\wamp64\bin\apache\apache2.4.46\conf\httpd.conf<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Listen 0.0.0.0:80
Listen [::0]:80
Listen 0.0.0.0:8800
Listen [::0]:8800</pre></div></div><br><h3 class="Title8 GTitle3">Configurer les machines virtuelles</h3><br>C:\wamp64\bin\apache\apache2.4.46\conf\extra\httpd-vhosts.conf<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">#================================================
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
&lt;VirtualHost *:8800&gt;
    ServerName www.readydev.com
    ServerAdmin gerard.kesse@outlook.fr
    DocumentRoot "C:/Users/Admin/Downloads/Programs/ReadyDev"
    
    &lt;Directory "C:/Users/Admin/Downloads/Programs/ReadyDev"&gt;
        Options All
        AllowOverride All
        Order allow,deny
        allow from all
        Require all granted
    &lt;/Directory&gt;
&lt;/VirtualHost&gt;
#================================================</pre></div></div><br><h3 class="Title8 GTitle3">Redémarrer les services</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">WampServer
Clic gauche -&gt; Redémarrer les services</pre></div></div><br><h2 class="Title7 GTitle2" id="Installation-Installer-l-environnement-PHP-avec-MAMP-sous-Mac"><a class="Link9" href="#Installation">Installer l'environnement PHP avec MAMP sous Mac</a></h2><br><b>MAMP </b>est une pile de solutions composée de logiciels commerciaux libres et open-source et propriétaires utilisés ensemble pour développer et exécuter des sites Web dynamiques sur des ordinateurs Apple Macintosh . Le nom MAMP est un acronyme qui provient des noms des composants du système: macOS (le système d'exploitation ); Apache (le serveur Web ); MySQL ou MariaDB (le système de gestion de base de données ); et PHP , Perl ou Python ( langages de programmation utilisés pour le développement Web ). <br><br><h3 class="Title8 GTitle3">Télécharger MAMP</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.mamp.info/en/downloads/">https://www.mamp.info/en/downloads/</a><br><br><b>MAMP_MAMP_PRO_6.3.pkg</b><br><br><h3 class="Title8 GTitle3">Installer MAMP</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">MAMP_MAMP_PRO_6.3.pkg
Continuer
Continuer
Contrat de licence -&gt; English
Continuer
Accepter
Sélectionner une destination -&gt; OS
Continuer
Installer
Nom d'utilisateur -&gt; IMAC
Mot de passe -&gt; ****
Installer le logiciel
Continuer
Fermer
Placer dans la corbeille</pre></div></div><br><h3 class="Title8 GTitle3">Ouvrir MAMP</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">Recherche Spotlight
MAMP
</pre></div></div><br><h3 class="Title8 GTitle3">Démarrer le serveur MAMP</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">MAMP
Start</pre></div></div><br><h3 class="Title8 GTitle3">Arrêter le serveur MAMP</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">MAMP
Stop</pre></div></div><br><h3 class="Title8 GTitle3">Vérifier l'installation</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="http://localhost:8888/MAMP/">http://localhost:8888/MAMP/</a><br><br><h3 class="Title8 GTitle3">Vérifier la page phpinfo</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="http://localhost:8888/MAMP/phpinfo.php">http://localhost:8888/MAMP/phpinfo.php</a><br><br><h3 class="Title8 GTitle3">Configurer la racine du serveur</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">MAMP
Preferences
Server
Document Root -&gt; Choose -&gt; /Users/imac/Desktop/Programs
OK</pre></div></div><br><h3 class="Title8 GTitle3">Configurer le port du serveur</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">MAMP
Preferences
Ports
Apache Port -&gt; 8888
OK</pre></div></div><br><h3 class="Title8 GTitle3">Configurer le module de réécriture d'URL</h3><br>/etc/apache2/httpd.conf<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">LoadModule rewrite_module libexec/apache2/mod_rewrite.so</pre></div></div><br><h3 class="Title8 GTitle3">Configurer le module des machines virtuelles</h3><br>/etc/apache2/httpd.conf<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">LoadModule vhost_alias_module libexec/apache2/mod_vhost_alias.so
Include /private/etc/apache2/extra/httpd-vhosts.conf</pre></div></div><br><h3 class="Title8 GTitle3">Configurer l'affichage des erreurs</h3><br>/Applications/MAMP/bin/php/php7.4.12/conf/php.ini<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">error_reporting  =  E_ALL
display_errors = On</pre></div></div><br><h3 class="Title8 GTitle3">Configurer le module SQLite</h3><br>/Applications/MAMP/bin/php/php7.4.12/conf/php.ini<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">extension=php_pdo.so
extension=php_pdo_sqlite.so
extension=php_sqlite3.so</pre></div></div><br><h2 class="Title7 GTitle2" id="Installation-Installer-l-environnement-PHP-avec-LAMP-sous-Ubuntu"><a class="Link9" href="#Installation">Installer l'environnement PHP avec LAMP sous Ubuntu</a></h2><br><b>LAMP </b>est un acronyme désignant un ensemble de logiciels libres permettant de construire des serveurs de sites web. L'acronyme original se réfère aux logiciels suivants : « Linux », le système d'exploitation ( GNU/Linux ) ; « Apache », le serveur Web ; « MySQL ou MariaDB », le serveur de base de données ; À l'origine, « PHP », « Perl » ou « Python », les langages de script. Même si les auteurs de chacun de ces programmes ne se sont pas coordonnés pour construire des plates-formes LAMP, cette combinaison de logiciels s'est popularisée du fait du faible coût de l'ensemble et de la présence de tous ces composants dans la plupart des distributions GNU/Linux.<br><br><h3 class="Title8 GTitle3">Supprimer un package</h3><br>Cette commande est à utuilser si vous rencontrez un problème avec un package lors de la mise à jour du système.<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">sudo apt remove package_name</pre></div></div><br><h3 class="Title8 GTitle3">Mettre à jour le système<br></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">sudo apt update
sudo apt full-upgrade</pre></div></div><br><h3 class="Title8 GTitle3">Installer Apache</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">sudo apt install -y apache2
sudo apt install -y libapache2-mod-php</pre></div></div><br><h3 class="Title8 GTitle3">Installer MySQL</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">sudo apt install -y mysql-server</pre></div></div><br><h3 class="Title8 GTitle3">Installer PHP</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">sudo apt install -y php
sudo apt install -y php-mysql</pre></div></div><br><h3 class="Title8 GTitle3">Installer les modules les plus utilisés</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">sudo apt install -y php-curl
sudo apt install -y php-gd
sudo apt install -y php-intl
sudo apt install -y php-json
sudo apt install -y php-mbstring
sudo apt install -y php-xml
sudo apt install -y php-zip</pre></div></div><br><h3 class="Title8 GTitle3">Déterminer l'adresse ip</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">ip a s</pre></div></div><br><h3 class="Title8 GTitle3">Vérifier l'installation</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="http://192.168.1.45/">http://192.168.1.45/</a><br><br><div class="Img3 GImage"><img alt="/Tutoriels/Web/PHP/img/i_php_test_ubuntu.png" class="lazy" data-src="/Tutoriels/Web/PHP/img/i_php_test_ubuntu.png"></div><br><h3 class="Title8 GTitle3">Configurer les ports du serveur<br></h3><br>/etc/apache2/ports.conf<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">Listen 80
Listen 8080</pre></div></div><br><h3 class="Title8 GTitle3">Configurer les racines du serveur</h3><br>/etc/apache2/sites-available/000-default.conf<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">#================================================
&lt;VirtualHost *:80&gt;
	ServerAdmin webmaster@localhost
	DocumentRoot /var/www/html
	ErrorLog ${APACHE_LOG_DIR}/error.log
	CustomLog ${APACHE_LOG_DIR}/access.log combined
&lt;/VirtualHost&gt;
#================================================
&lt;VirtualHost *:8080&gt;
    ServerName www.readydev.com
    ServerAdmin gerard.kesse@outlook.fr
    DocumentRoot "/home/rpi4/Programs/ReadyDev/"
    
    &lt;Directory "/home/rpi4/Programs/ReadyDev/"&gt;
        Options All
        AllowOverride All
        Order allow,deny
        allow from all
        Require all granted
    &lt;/Directory&gt;
&lt;/VirtualHost&gt;
#================================================</pre></div></div><br><h3 class="Title8 GTitle3">Configurer l'extension PDO SQLite</h3><br>/etc/php/7.4/apache2/php.ini<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">extension=pdo_sqlite</pre></div></div><br><h3 class="Title8 GTitle3">Configurer l'affichage des erreurs</h3><br>/etc/php/7.4/apache2/php.ini<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">error_reporting = E_ALL
display_errors = On</pre></div></div><br><h3 class="Title8 GTitle3">Redémarrer Apache</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">sudo service apache2 reload</pre></div></div><br><h3 class="Title8 GTitle3">Vérifier l'installation</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="http://192.168.1.45:8080/">http://192.168.1.45:8080/</a><br><br><div class="Img3 GImage"><img alt="/Tutoriels/Web/PHP/img/i_php_test_ubuntu_server.png" class="lazy" data-src="/Tutoriels/Web/PHP/img/i_php_test_ubuntu_server.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tests"><a class="Link3" href="#">Tests</a></h1><div class="Body3"><br>Créer un projet PHP.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617649178149"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617649178149");</script></div><br><h2 class="Title7 GTitle2" id="Tests-Tester-un-projet-PHP-avec-WampServer-sous-Windows"><a class="Link9" href="#Tests">Tester un projet PHP avec WampServer sous Windows</a></h2><br><h3 class="Title8 GTitle3">Editer le programme (index.php)</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">&lt;?php
//===============================================
echo "Bonjour tout le monde";
//===============================================
?&gt;</pre></div></div><br><h3 class="Title8 GTitle3">Vérifier la page web</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="http://localhost:8800/">http://localhost:8800/</a><br><br><div class="Img3 GImage"><img alt="/Tutoriels/Web/PHP/img/i_php_test.png" class="lazy" data-src="/Tutoriels/Web/PHP/img/i_php_test.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Fondamentaux"><a class="Link3" href="#">Fondamentaux</a></h1><div class="Body3"><br>Les fondamentaux de PHP.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1621792429086"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1621792429086");</script></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-passage-par-reference"><a class="Link9" href="#Fondamentaux">Créer un passage par référence</a></h2><br>En programmation, une <b>référence </b>est une valeur qui est un moyen d'accéder en lecture et/ou écriture à une donnée située soit en mémoire principale soit ailleurs. Une référence n'est pas la donnée elle-même mais seulement une information sur sa localisation. Beaucoup de langages de programmation permettent l'utilisation de références, que ce soit de façon explicite ou implicite.<br><br><h3 class="Title8 GTitle3">index.php</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">&lt;?php
//===============================================
function setName(&amp;$nameId, $nameText) {
    $nameId = $nameText;
}
//===============================================
function sayHello($nameId) {
    echo sprintf("Bonjour %s&lt;br&gt;\n", $nameId);
}
//===============================================
$lName = "tout le monde";
sayHello($lName);
setName($lName, "Gerard KESSE");
sayHello($lName);
//===============================================
?&gt;</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">Bonjour tout le monde
Bonjour Gerard KESSE</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Appeler-une-fonction-de-rappel"><a class="Link9" href="#Fondamentaux">Appeler une fonction de rappel</a></h2><br>La méthode <b>call_user_func </b>appelle une fonction de rappel fournie par le premier argument.<br><br><h3 class="Title8 GTitle3">index.php</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">&lt;?php
//===============================================
class GObject {
    public function __construct() {

    }
    public function print() {
        echo sprintf("Je suis un objet de type GObject&lt;br&gt;\n");
    }
}
//===============================================
$lObj = new GObject();
echo sprintf("%d&lt;br&gt;", is_callable(array($lObj, "print")));
echo sprintf("%d&lt;br&gt;", is_callable(array($lObj, "no_print")));
call_user_func(array($lObj, "print"));
//===============================================
?&gt;</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">1
0
Je suis un objet de type GObject</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-reecriture-d-URL"><a class="Link9" href="#Fondamentaux">Créer une réécriture d'URL</a></h2><br>Un moteur de <b>réécriture </b>est un composant logiciel qui effectue la réécriture sur les localisateurs de ressources uniformes, en modifiant leur apparence. Cette modification s'appelle la réécriture d'URL. C'est un moyen d'implémenter le mappage ou le routage d'URL dans une application Web. Le moteur est généralement un composant d'un serveur Web ou d' un cadre d'application Web. Les URLs réécrites (parfois appelées URLs courtes, jolies ou sophistiquées, compatibles avec les moteurs de recherche - URL SEF ou slugs) sont utilisées pour fournir des liens plus courts et plus pertinents vers des pages Web. La technique ajoute une couche d'abstraction entre les fichiers utilisés pour générer une page Web et l'URL présentée au monde extérieur.<br><br><h3 class="Title8 GTitle3">.htaccess</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">#================================================
&lt;IfModule mod_rewrite.c&gt;
#================================================
RewriteEngine on
#================================================
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ /?pageid=$1 [L,QSA]
#================================================
&lt;/IfModule&gt;
#================================================</pre></div></div><br><h3 class="Title8 GTitle3">index.php</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">&lt;?php
//===============================================
echo sprintf("&lt;a href='/'&gt;ReadyDev&lt;/a&gt;\n");
echo sprintf("|\n");
echo sprintf("&lt;a href='/home'&gt;Accueil&lt;/a&gt;\n");
echo sprintf("|\n");
echo sprintf("&lt;a href='/home/login'&gt;Connexion&lt;/a&gt;\n");
var_dump($_REQUEST);
//===============================================
?&gt;</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Web/PHP/img/i_php_rewrite.gif" class="lazy" data-src="/Tutoriels/Web/PHP/img/i_php_rewrite.gif"></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-une-normalisation-unicode"><a class="Link9" href="#Fondamentaux">Créer une normalisation unicode</a></h2><br>La <b>normalisation Unicode</b> est une normalisation de texte qui transforme des caractères ou séquences de caractères équivalents en représentation fondamentale afin que celle-ci puisse être facilement comparée. La décomposition canonique peut être utilisée dans l’échange normalisé de textes. Elle permet d’effectuer une comparaison binaire tout en conservant une équivalence canonique avec le texte non normalisé d’origine. <br><br><h3 class="Title8 GTitle3">Installer le système d'internationalisation sous Ubuntu</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">sudo apt install -y php-intl</pre></div></div><br><h3 class="Title8 GTitle3">Configurer le système d'internationalisation sous Ubuntu</h3><br>/etc/php/7.0/apache2/php.ini<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">extension=php_intl.dll</pre></div></div><br><h3 class="Title8 GTitle3">index.php</h3><br><div class="GCode1"><div class="Code2"><code class="AceCode" data-mode="php">&lt;?php
//===============================================
$lText = "á fête été ère à hôte ça";
$lUnicode = Normalizer::normalize($lText, Normalizer::FORM_D);
$lUnicode = preg_replace('/[\x{0300}-\x{036f}]/u', "", $lUnicode);
echo sprintf("Texte : %s\n&lt;br/&gt;", $lText);
echo sprintf("Unicode : %s\n&lt;br/&gt;", $lUnicode);
//===============================================
?&gt;</code></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="html">Texte : á fête été ère à hôte ça
Unicode : a fete ete ere a hote ca</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Ouvrir-le-debogueur-web-sous-Firefox"><a class="Link9" href="#Fondamentaux">Ouvrir le débogueur web sous Firefox</a></h2><br>Un débugueur (de l'anglais debugger) ou <b>débogueur </b>(de la francisation bogue) est un logiciel qui aide un développeur à analyser les bugs d'un programme. Pour cela, il permet d'exécuter le programme pas-à-pas, c'est-à-dire le plus souvent ligne par ligne, d'afficher la valeur des variables à tout moment et de mettre en place des points d'arrêt sur des conditions ou sur des lignes du programme. Il s'agit de l'application à la programmation informatique du processus de troubleshooting.<br><br><h3 class="Title8 GTitle3">Ouvrir le débogueur</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">Firefox
Menu
Développeur web
Outils de développement web</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Valider-le-balisage-d-une-page-web-avec-validator"><a class="Link9" href="#Fondamentaux">Valider le balisage d'une page web avec validator</a></h2><br>Le Markup <b>Validator </b>est un outil et un service gratuit qui valide le balisage : en d'autres termes, il vérifie la syntaxe des documents Web, écrits dans des formats tels que (X) HTML. Le validateur est un peu comme lint pour C. Il compare votre document HTML à la syntaxe définie du HTML et signale toute divergence.<br><br><h3 class="Title8 GTitle3">Accéder à l'interface de validation</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://validator.w3.org/">https://validator.w3.org/</a><br><br><h3 class="Title8 GTitle3">Valider une page web</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">Address -&gt; https://readydev.ovh/Accueil/
Check</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Web/PHP/img/i_php_validator.png" class="lazy" data-src="/Tutoriels/Web/PHP/img/i_php_validator.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tableaux"><a class="Link3" href="#">Tableaux</a></h1><div class="Body3"><br>En informatique, un <b>tableau </b>est une structure de données représentant une séquence finie d'éléments auxquels on peut accéder efficacement par leur position, ou indice, dans la séquence. C'est un type de conteneur que l'on retrouve dans un grand nombre de langages de programmation. Dans les langages à typage statique (comme C, Java et OCaml), tous les éléments d’un tableau doivent être du même type. Certains langages à typage dynamique (tels APL et Python) permettent des tableaux hétérogènes.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1622009601582"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1622009601582");</script></div><br><h2 class="Title7 GTitle2" id="Tableaux-Creer-un-tableau"><a class="Link9" href="#Tableaux">Créer un tableau</a></h2><br><h3 class="Title8 GTitle3">index.php</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">&lt;?php
//===============================================
function showTab($tab) {
    foreach($tab as $key =&gt; $value) {
        echo sprintf("[%d] : %s&lt;br&gt;\n", $key, $value);
    }
}
//===============================================
$lTab = array("un", "deux", "trois");
showTab($lTab);
//===============================================
?&gt;</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">[0] : un
[1] : deux
[2] : trois</pre></div></div><br><h2 class="Title7 GTitle2" id="Tableaux-Lire-la-valeur-d-un-element"><a class="Link9" href="#Tableaux">Lire la valeur d'un élément</a></h2><br><h3 class="Title8 GTitle3">index.php</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">&lt;?php
//===============================================
function showTab($tab) {
    foreach($tab as $key =&gt; $value) {
        echo sprintf("[%d] : %s&lt;br&gt;\n", $key, $value);
    }
}
//===============================================
$lTab = array("un", "deux", "trois");
$lData = $lTab[0];
echo sprintf("lData : %s&lt;br&gt;\n", $lData);
//===============================================
?&gt;</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">lData : un</pre></div></div><br><h2 class="Title7 GTitle2" id="Tableaux-Modifier-la-valeur-d-un-element"><a class="Link9" href="#Tableaux">Modifier la valeur d'un élément</a></h2><br><h3 class="Title8 GTitle3">index.php</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">&lt;?php
//===============================================
function showTab($tab) {
    foreach($tab as $key =&gt; $value) {
        echo sprintf("[%d] : %s&lt;br&gt;\n", $key, $value);
    }
}
//===============================================
$lTab = array("un", "deux", "trois");
$lTab[0] = "onze";
showTab($lTab);
//===============================================
?&gt;</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">[0] : onze
[1] : deux
[2] : trois</pre></div></div><br><h2 class="Title7 GTitle2" id="Tableaux-Ajouter-un-nouveau-element"><a class="Link9" href="#Tableaux">Ajouter un nouveau élément</a></h2><br><h3 class="Title8 GTitle3">index.php</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">&lt;?php
//===============================================
function showTab($tab) {
    foreach($tab as $key =&gt; $value) {
        echo sprintf("[%d] : %s&lt;br&gt;\n", $key, $value);
    }
}
//===============================================
$lTab = array("un", "deux", "trois");
array_push($lTab, "quatre", "cinq");
showTab($lTab);
//===============================================
?&gt;</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">[0] : un
[1] : deux
[2] : trois
[3] : quatre
[4] : cinq</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tableaux-associatifs"><a class="Link3" href="#">Tableaux associatifs</a></h1><div class="Body3"><br>En informatique, un <b>tableau associatif</b> (aussi appelé dictionnaire ou table d'association) est un type de données associant à un ensemble de clefs, un ensemble correspondant de valeurs. Chaque clef est associée à une seule valeur (au plus) : un tableau associatif correspond donc à une application de domaine fini en mathématiques. Du point de vue du programmeur, le tableau associatif peut être vu comme une généralisation du tableau : alors que le tableau traditionnel associe des entiers consécutifs à des valeurs, le tableau associatif associe des clefs d'un type arbitraire à des valeurs d'un autre type. <br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1622014199442"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1622014199442");</script></div><br><h2 class="Title7 GTitle2" id="Tableaux-associatifs-Creer-un-tableau-associatif"><a class="Link9" href="#Tableaux-associatifs">Créer un tableau associatif</a></h2><br><h3 class="Title8 GTitle3">index.php</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">&lt;?php
//===============================================
function showTab($tab) {
    foreach($tab as $key =&gt; $value) {
        echo sprintf("[%s] : %s&lt;br&gt;\n", $key, $value);
    }
}
//===============================================
$lTab = array(
"name" =&gt; "Gerard KESSE",
"code" =&gt; 123456, 
"coef" =&gt; 3.14
);
showTab($lTab);
//===============================================
?&gt;</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">[name] : Gerard KESSE
[code] : 123456
[coef] : 3.14</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programmation-orientee-objet"><a class="Link3" href="#">Programmation orientée objet</a></h1><div class="Body3"><br>La <b>programmation orientée objet</b> (POO), ou programmation par objet, est un paradigme de programmation informatique. Elle consiste en la définition et l'interaction de briques logicielles appelées objets ; un objet représente un concept, une idée ou toute entité du monde physique, comme une voiture, une personne ou encore une page d'un livre. Il possède une structure interne et un comportement, et il sait interagir avec ses pairs. Il s'agit donc de représenter ces objets et leurs relations ; l'interaction entre les objets via leurs relations permet de concevoir et réaliser les fonctionnalités attendues, de mieux résoudre le ou les problèmes. Dès lors, l'étape de modélisation revêt une importance majeure et nécessaire pour la POO. C'est elle qui permet de transcrire les éléments du réel sous forme virtuelle. La programmation par objet consiste à utiliser des techniques de programmation pour mettre en œuvre une conception basée sur les objets. Celle-ci peut être élaborée en utilisant des méthodologies de développement logiciel objet, dont la plus connue est le processus unifié (« Unified Software Development Process » en anglais), et exprimée à l'aide de langages de modélisation tels que le Unified Modeling Language (UML).<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1621794907558"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1621794907558");</script></div><br><h2 class="Title7 GTitle2" id="Programmation-orientee-objet-Creer-une-classe"><a class="Link9" href="#Programmation-orientee-objet">Créer une classe</a></h2><br>En programmation orientée objet, la déclaration d'une <b>classe </b>regroupe des membres, méthodes et propriétés (attributs) communs à un ensemble d'objets. La classe déclare, d'une part, des attributs représentant l'état des objets et, d'autre part, des méthodes représentant leur comportement. Une classe représente donc une catégorie d'objets. Elle apparaît aussi comme un moule ou une usine à partir de laquelle il est possible de créer des objets ; c'est en quelque sorte une « boîte à outils » qui permet de fabriquer un objet. On parle alors d'un objet en tant qu'instance d'une classe (création d'un objet ayant les propriétés de la classe).<br><br><h3 class="Title8 GTitle3">index.php</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">&lt;?php
//===============================================
require "GPerson.php";
$lPerson = new GPerson("Gerard KESSE", 123456, 3.14);
$lPerson-&gt;print();
//===============================================
?&gt;</pre></div></div><br><h3 class="Title8 GTitle3">GPerson.php</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">&lt;?php
class GPerson {
    //===============================================
    private $name;
    private $code;
    private $coef;
    //===============================================
    public function __construct($name, $code, $coef) {
        $this-&gt;name = $name;
        $this-&gt;code = $code;
        $this-&gt;coef = $coef;
    }
    //===============================================
    public function print() {
        echo sprintf("Person[Nom] : %s&lt;br/&gt;\n", $this-&gt;name);
        echo sprintf("Person[Code] : %d&lt;br/&gt;\n", $this-&gt;code);
        echo sprintf("Person[Coef] : %.2f&lt;br/&gt;\n", $this-&gt;coef);
    }
    //===============================================
}
?&gt;</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="html">Person[Nom] : Gerard KESSE
Person[Code] : 123456
Person[Coef] : 3.14</pre></div></div><br><h2 class="Title7 GTitle2" id="Programmation-orientee-objet-Creer-un-chargement-automatique-des-classes"><a class="Link9" href="#Programmation-orientee-objet">Créer un chargement automatique des classes</a></h2><br>Dans la programmation informatique , le <b>chargement automatique</b> est la capacité de charger et de relier automatiquement des parties d'un programme à partir d' une mémoire de masse lorsque cela est nécessaire, de sorte que le programmeur n'est pas obligé de définir ou d'inclure ces parties du programme explicitement. De nombreux langages de programmation de haut niveau incluent des capacités de chargement automatique, qui sacrifient une certaine vitesse d'exécution pour faciliter le codage et la vitesse de compilation / liaison initiale. Les systèmes de chargement automatique typiques interceptent les appels de procédure à des sous-programmes non définis. Le chargeur automatique recherche dans un chemin de répertoires dans le système de fichiers de l'ordinateur, pour trouver un fichier contenant le code source ou objet qui définit le sous-programme. L'autochargeur charge alors et lie le fichier, et remet le contrôle au programme principal afin que le sous-programme soit exécuté comme s'il avait déjà été défini et lié avant l'appel.<br><br><h3 class="Title8 GTitle3">index.php</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">&lt;?php
//===============================================
require "autoload.php";
$lPerson = new GPerson("Gerard KESSE", 123456, 3.14);
$lPerson-&gt;print();
//===============================================
?&gt;</pre></div></div><br><h3 class="Title8 GTitle3">autoload.php</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">&lt;?php
//===============================================
spl_autoload_register(function($class_name) {
    $lFile = $class_name . ".php";
    require $lFile;
});
//===============================================
?&gt;</pre></div></div><br><h3 class="Title8 GTitle3">GPerson.php</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">&lt;?php
class GPerson {
    //===============================================
    private $name;
    private $code;
    private $coef;
    //===============================================
    public function __construct($name, $code, $coef) {
        $this-&gt;name = $name;
        $this-&gt;code = $code;
        $this-&gt;coef = $coef;
    }
    //===============================================
    public function print() {
        echo sprintf("Person[Nom] : %s&lt;br/&gt;\n", $this-&gt;name);
        echo sprintf("Person[Code] : %d&lt;br/&gt;\n", $this-&gt;code);
        echo sprintf("Person[Coef] : %.2f&lt;br/&gt;\n", $this-&gt;coef);
    }
    //===============================================
}
?&gt;</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">Person[Nom] : Gerard KESSE
Person[Code] : 123456
Person[Coef] : 3.14</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Patrons-de-conception"><a class="Link3" href="#">Patrons de conception</a></h1><div class="Body3"><br>En informatique, et plus particulièrement en développement logiciel, un <b>patron de conception</b> (souvent appelé design pattern) est un arrangement caractéristique de modules, reconnu comme bonne pratique en réponse à un problème de conception d'un logiciel. Il décrit une solution standard, utilisable dans la conception de différents logiciels. Un patron de conception est issu de l'expérience des concepteurs de logiciels. Il décrit un arrangement récurrent de rôles et d'actions joués par des modules d'un logiciel, et le nom du patron sert de vocabulaire commun entre le concepteur et le programmeur. D'une manière analogue à un motif de conception en architecture, le patron de conception décrit les grandes lignes d'une solution, qui peuvent ensuite être modifiées et adaptées en fonction des besoins. Les patrons de conception décrivent des procédés de conception généraux et permettent en conséquence de capitaliser l'expérience appliquée à la conception de logiciel. Ils ont une influence sur l'architecture logicielle d'un système informatique. <br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1621797261800"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1621797261800");</script></div><br><h2 class="Title7 GTitle2" id="Patrons-de-conception-Creer-un-patron-singleton"><a class="Link9" href="#Patrons-de-conception">Créer un patron singleton</a></h2><br>En génie logiciel, le singleton est un patron de conception (design pattern) dont l'objectif est de restreindre l'instanciation d'une classe à un seul objet (ou bien à quelques objets seulement). Il est utilisé lorsqu'on a besoin exactement d'un objet pour coordonner des opérations dans un système. Le modèle est parfois utilisé pour son efficacité, lorsque le système est plus rapide ou occupe moins de mémoire avec peu d'objets qu'avec beaucoup d'objets similaires.<br><br><h3 class="Title8 GTitle3">index.php</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">&lt;?php
//===============================================
require "autoload.php";
GDatabase::Instance()-&gt;open();
GDatabase::Instance()-&gt;load();
GDatabase::Instance()-&gt;update();
GDatabase::Instance()-&gt;save();
GDatabase::Instance()-&gt;close();
//===============================================
?&gt;</pre></div></div><br><h3 class="Title8 GTitle3">GDatabase.php</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">&lt;?php
class GDatabase {
    //===============================================
    private static $instance = null;
    //===============================================
    public function __construct() {

    }
    //===============================================
    public static function Instance() {
        if(is_null(self::$instance)) {
            self::$instance = new GDatabase();  
        }
        return self::$instance;
    }
    //===============================================
    public function open() {
        echo sprintf("on ouvre la base de données&lt;br/&gt;\n");
    }
    //===============================================
    public function load() {
        echo sprintf("on charge la base de données&lt;br/&gt;\n");
    }
    //===============================================
    public function update() {
        echo sprintf("on modifie la base de données&lt;br/&gt;\n");
    }
    //===============================================
    public function save() {
        echo sprintf("on enregistre la base de données&lt;br/&gt;\n");
    }
    //===============================================
    public function close() {
        echo sprintf("on ferme la base de données&lt;br/&gt;\n");
    }
    //===============================================
}
?&gt;</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">on ouvre la base de données
on charge la base de données
on modifie la base de données
on enregistre la base de données
on ferme la base de données</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Methodes-magiques"><a class="Link3" href="#">Méthodes magiques</a></h1><div class="Body3"><br>La <b>surcharge magique</b> en PHP permet de "créer" dynamiquement des propriétés et des méthodes. Ces entités dynamiques sont traitées via des méthodes magiques établies que l'on peut positionner dans une classe pour divers types d'actions. Les méthodes magiques de surcharge sont appelées lors de l'interaction avec des propriétés ou des méthodes qui n'ont pas été déclarées ou ne sont pas visibles dans le contexte courant. Toutes les méthodes magiques de surcharge doivent être définies comme public. Aucun des arguments de ces méthodes magiques ne peut être passé par référence.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1621977314749"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1621977314749");</script></div><br><h2 class="Title7 GTitle2" id="Methodes-magiques-Utiliser-la-methode-magique-__construct"><a class="Link9" href="#Methodes-magiques">Utiliser la méthode magique __construct</a></h2><br>PHP permet aux développeurs de déclarer des <b>constructeurs </b>pour les classes. Les classes qui possèdent une méthode constructeur appellent cette méthode à chaque création d'une nouvelle instance de l'objet, ce qui est intéressant pour toutes les initialisations dont l'objet a besoin avant d'être utilisé. <br><br><h3 class="Title8 GTitle3">index.php</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">&lt;?php
//===============================================
class GObject {
    public function __construct() {
        echo sprintf("on appelle le constructeur&lt;br&gt;\n");
    }
}
//===============================================
$lObj = new GObject();
//===============================================
?&gt;</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">on appelle le constructeur</pre></div></div><br><h2 class="Title7 GTitle2" id="Methodes-magiques-Utiliser-la-methode-magique-__destruct"><a class="Link9" href="#Methodes-magiques">Utiliser la méthode magique __destruct</a></h2><br>PHP possède un concept de <b>destructeur </b>similaire à celui d'autres langages orientés objet, comme le C++. La méthode destructeur est appelée dès qu'il n'y a plus de référence sur un objet donné, ou dans n'importe quel ordre pendant la séquence d'arrêt. <br><br><h3 class="Title8 GTitle3">index.php</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">&lt;?php
//===============================================
class GObject {
    public function __construct() {
        echo sprintf("on appelle le constructeur&lt;br&gt;\n");
    }
    public function __destruct() {
        echo sprintf("on appelle le destructeur&lt;br&gt;\n");
    }
}
//===============================================
$lObj = new GObject();
//===============================================
?&gt;</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">on appelle le constructeur
on appelle le destructeur</pre></div></div><br><h2 class="Title7 GTitle2" id="Methodes-magiques-Utiliser-la-methode-magique-__set"><a class="Link9" href="#Methodes-magiques">Utiliser la méthode magique __set</a></h2><br>La méthode <b>__set()</b> est sollicitée lors de l'écriture de données vers des propriétés inaccessibles (protégées ou privées) ou non existante. <br><br><h3 class="Title8 GTitle3">index.php</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">&lt;?php
//===============================================
class GObject {
    private $private_data;
    protected $protected_data;
    
    public function __construct() {
        echo sprintf("on appelle le constructeur&lt;br&gt;\n");
    }
    public function __destruct() {
        echo sprintf("on appelle le destructeur&lt;br&gt;\n");
    }
    public function __set($key, $name) {
        echo sprintf("on initialise une propriété inexistante : obj-&gt;%s : %s&lt;br&gt;\n", $key, $name);
    }
}
//===============================================
$lObj = new GObject();
$lObj-&gt;no_exist_data = "no_exist_data";
$lObj-&gt;private_data = "private_data";
$lObj-&gt;protected_data = "protected_data";
//===============================================
?&gt;</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">on appelle le constructeur
on initialise une propriété inexistante : obj-&gt;no_exist_data : no_exist_data
on initialise une propriété inexistante : obj-&gt;private_data : private_data
on initialise une propriété inexistante : obj-&gt;protected_data : protected_data
on appelle le destructeur</pre></div></div><br><h2 class="Title7 GTitle2" id="Methodes-magiques-Utiliser-la-methode-magique-__get"><a class="Link9" href="#Methodes-magiques">Utiliser la méthode magique __get</a></h2><br>La méthode <b>__get()</b> est appelée pour lire des données depuis des propriétés inaccessibles (protégées ou privées) ou non existante. <br><br><h3 class="Title8 GTitle3">index.php</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">&lt;?php
//===============================================
class GObject {
    private $private_data;
    protected $protected_data;
    
    public function __construct() {
        echo sprintf("on appelle le constructeur&lt;br&gt;\n");
    }
    public function __destruct() {
        echo sprintf("on appelle le destructeur&lt;br&gt;\n");
    }
    public function __get($name) {
        echo sprintf("on lit une propriété inexistante : %s&lt;br&gt;\n", $name);
    }
}
//===============================================
$lObj = new GObject();
echo $lObj-&gt;no_exist_data;
echo $lObj-&gt;private_data;
echo $lObj-&gt;protected_data;
//===============================================
?&gt;</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">on appelle le constructeur
on lit une propriété inexistante : no_exist_data
on lit une propriété inexistante : private_data
on lit une propriété inexistante : protected_data
on appelle le destructeur</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="LazyLoad"><a class="Link3" href="#">LazyLoad</a></h1><div class="Body3"><br><b>LazyLoad </b>est un script léger et flexible qui accélère votre site Web en reportant le chargement de vos images, arrière-plans, vidéos, iframes et scripts sous le pli au moment où ils entreront dans la fenêtre. Écrit en JavaScript «vanille», il exploite IntersectionObserver, prend en charge les images réactives et permet le chargement paresseux natif.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1622029827337"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1622029827337");</script></div><br><h2 class="Title7 GTitle2" id="LazyLoad-Charger-une-image-par-LazyLoad"><a class="Link9" href="#LazyLoad">Charger une image par LazyLoad</a></h2><br><h3 class="Title8 GTitle3">index.php</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">&lt;?php
//===============================================
echo sprintf("&lt;!DOCTYPE html&gt;\n");
echo sprintf("&lt;html lang='fr'&gt;\n");
echo sprintf("&lt;head&gt;\n");
echo sprintf("&lt;title&gt;ReadyApp&lt;/title&gt;\n");
echo sprintf("&lt;/head&gt;\n");
echo sprintf("&lt;body&gt;\n");
for($i = 0; $i &lt; 100; $i++) {
    echo sprintf("&lt;p&gt;&lt;img alt='A lazy image' class='lazy' data-src='lazy.png'/&gt;&lt;/p&gt;\n");
}
echo sprintf("&lt;script src='https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.3.1/dist/lazyload.min.js'&gt;&lt;/script&gt;\n");
echo sprintf("&lt;script src='/script.js'&gt;&lt;/script&gt;\n");
echo sprintf("&lt;/body&gt;\n");
echo sprintf("&lt;/html&gt;\n");
//===============================================
?&gt;</pre></div></div><br><h3 class="Title8 GTitle3">script.js</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">//===============================================
var lazyLoadInstance = new LazyLoad({
    // presonnalisation
});
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Web/PHP/img/i_lazyload_simple.gif" class="lazy" data-src="/Tutoriels/Web/PHP/img/i_lazyload_simple.gif"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="GTmetrix"><a class="Link3" href="#">GTmetrix</a></h1><div class="Body3"><br><b>GTmetrix </b>est un outil d'analyse des performances web d'un site internet. Il permet de decouvrir à quelle vitesse se charge-t-il ? Pourquoi est-il lent ? et Comment l'optimiser ? Les performances Web font référence à la vitesse à laquelle les pages Web sont téléchargées et affichées sur le navigateur Web de l'utilisateur . L'optimisation des performances Web (WPO) , ou optimisation de sites Web, est le domaine de la connaissance de l'augmentation des performances Web. Il a été démontré que des vitesses de téléchargement de sites Web plus rapides augmentaient la rétention et la fidélité des visiteurs et la satisfaction des utilisateurs, en particulier pour les utilisateurs avec des connexions Internet lentes et ceux sur des appareils mobiles . [3] Les performances Web entraînent également moins de données circulant sur le Web, ce qui réduit à son tour la consommation d'énergie et l'impact environnemental d'un site Web. Certains aspects qui peuvent affecter la vitesse de chargement des pages incluent le cache du navigateur / serveur, l'optimisation de l'image et le cryptage (par exemple SSL), qui peuvent affecter le temps nécessaire au rendu des pages. Les performances de la page Web peuvent être améliorées grâce à des techniques telles que le cache multicouche, la conception légère des composants de la couche de présentation et la communication asynchrone avec les composants côté serveur.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1622050788530"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1622050788530");</script></div><br><h2 class="Title7 GTitle2" id="GTmetrix-Mesurer-les-perfommances-d-une-page-web"><a class="Link9" href="#GTmetrix">Mésurer les perfommances d'une page web</a></h2><br><h3 class="Title8 GTitle3">Accéder à l'interface GTmetrix</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://gtmetrix.com/">https://gtmetrix.com/</a><br><br><h3 class="Title8 GTitle3">Mésurer les perfommances web<br></h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="php">GTmetrix
Enter URL to analyze -&gt; 
https://readydev.ovh/Tutoriels/Software_Development/Cpp/
Test your site</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Web/PHP/img/i_gtmetrix_simple.png" class="lazy" data-src="/Tutoriels/Web/PHP/img/i_gtmetrix_simple.png"></div><br></div></div></div></div><br>