<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la création de site internet avec Silex<br></div></a></div></div><div class="Body2 Orange"><b>Silex</b> est un outil de création de site internet.<br>Le but de ce tutoriel est de vous apprendre la création de site internet avec <b>Silex</b>.<br>Produit par <b>Gérard KESSE</b>.<br>&nbsp;<br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation sous Windows"><a class="Link3" href="#">Installation sous Windows</a></h1><div class="Body3">Le but de cette section est de vous présenter les différents outils nécessaires pour apprendre la création de site internet avec Silex, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>La création de site internet avec Silex nécessite un gestionnaire de Package PHP pour le téléchargement de Silex, un serveur web Apache pour l'accès à distance à notre site internet à partir d'un navigateur web et un éditeur de texte pour l'édition de nos codes sources.<br><br>Dans ce tutoriel, nous utiliserons, sous Windows:<br>- Composer, comme gestionnaire de package PHP.<br>- WampServer, comme serveur web (Apache + MySQL + PHP).<br>- Firefox, comme navigateur web.<br>- Notepad++, comme éditeur de texte.<br><br><h3 class="Title8 GTitle3">Télécharger Composer</h3><a class="Link7 GLink1" style="color:lime;" href="https://getcomposer.org/">https://getcomposer.org/</a><br><br><h3 class="Title8 GTitle3">Télécharger WampServer</h3><a class="Link7 GLink1" style="color:lime;" href="http://www.wampserver.com/">http://www.wampserver.com/</a><br><br><h3 class="Title8 GTitle3">Télécharger Firefox</h3><a class="Link7 GLink1" style="color:lime;" href="https://www.mozilla.org/fr/firefox/new/">https://www.mozilla.org/fr/firefox/new/</a><br><br><h3 class="Title8 GTitle3">Télécharger Notepad++</h3><a class="Link7 GLink1" style="color:lime;" href="https://notepad-plus-plus.org/fr/">https://notepad-plus-plus.org/fr/</a></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation de Composer"><a class="Link3" href="#">Installation de Composer</a></h1><div class="Body3">Le but de cette section est de vous présenter les étapes d'installation de Composer, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1529513464098"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1529513464098");</script></div><br><h2 class="Title7 GTitle2" id="Installation de Composer-Installation de Composer"><a class="Link9" href="#Installation de Composer">Installation de Composer</a></h2><br><h3 class="Title8 GTitle3">Installer de composer</h3><div class="GCode1"><pre><xmp class="Code2 prettyprint linenums">@echo off

set PATH=C:\wamp\bin\php\php5.6.15

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

pause</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation de Composer-Test de Composer"><a class="Link9" href="#Installation de Composer">Test de Composer</a></h2><br><h3 class="Title8 GTitle3">Tester Composer</h3><div class="GCode1"><pre><xmp class="Code2 prettyprint linenums">@echo off

set PATH=C:\wamp\bin\php\php5.6.15

php composer.phar

pause</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3"><img src="img/Composer_Test.png" alt="img/Composer_Test.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation de Silex"><a class="Link3" href="#">Installation de Silex</a></h1><div class="Body3">Le but de cette section est de vous présenter les étapes d'installation de Silex, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1529514545958"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1529514545958");</script></div><br><h2 class="Title7 GTitle2" id="Installation de Silex-Installation de Silex"><a class="Link9" href="#Installation de Silex">Installation de Silex</a></h2><br><h3 class="Title8 GTitle3">Fichier de configuration (composer.json)</h3><div class="GCode1"><pre><xmp class="Code2 prettyprint linenums">{
    "require": {
        "silex/silex": "1.3.*"
    }
}</xmp></pre></div><br><h3 class="Title8 GTitle3">Installer Silex</h3><div class="GCode1"><pre><xmp class="Code2 prettyprint linenums">@echo off

set PATH=C:\wamp\bin\php\php5.6.15

php composer.phar install

pause</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3"><img src="img/Silex_Installation.png" alt="img/Silex_Installation.png"><br><br><h2 class="Title7 GTitle2" id="Installation de Silex-Dossier projet"><a class="Link9" href="#Installation de Silex">Dossier projet</a></h2><br><h3 class="Title8 GTitle3">Dossier projet</h3><br><div class="Img3"><img src="img/Silex_Installation_02.png" alt="img/Silex_Installation_02.png"></div></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Configuration de WampServer"><a class="Link3" href="#">Configuration de WampServer</a></h1><div class="Body3">Le but de cette section est de vous apprendre à configurer WampServer, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1529521036501"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1529521036501");</script></div><br><h2 class="Title7 GTitle2" id="Configuration de WampServer-Configuration du port"><a class="Link9" href="#Configuration de WampServer">Configuration du port</a></h2><br><h3 class="Title8 GTitle3">Configuration du port (httpd.conf)<br></h3><span class="GColor1" style="color:lime;">C:\wamp\bin\apache\apache2.4.17\conf\httpd.conf</span><br><div class="GCode1"><pre><xmp class="Code2 prettyprint linenums">Listen 0.0.0.0:8800
Listen [::0]:8800</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Configuration de WampServer-Configuration du serveur"><a class="Link9" href="#Configuration de WampServer">Configuration du serveur</a></h2><br><h3 class="Title8 GTitle3">Configuration du serveur (httpd-vhosts.conf)</h3><span class="GColor1" style="color:lime;">C:\wamp\bin\apache\apache2.4.17\conf\extra\httpd-vhosts.conf</span><br><div class="GCode1"><pre><xmp class="Code2 prettyprint linenums"><VirtualHost *:8800>
    ServerName www.readydev.com
    ServerAdmin gerard.kesse@outlook.fr
    DocumentRoot "C:\Users\sabine\Downloads\Gerard\Programs\ReadyDev\Tutoriels\PHP\Silex\root"
        <Directory "C:\Users\sabine\Downloads\Gerard\Programs\ReadyDev\Tutoriels\PHP\Silex\root">
            Options All
            AllowOverride All
            Order allow,deny
            allow from all
            Require all granted
        </Directory>
</VirtualHost></xmp></pre></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Utilisation de Silex"><a class="Link3" href="#">Utilisation de Silex</a></h1><div class="Body3">Le but de cette section est de vous apprendre à utiliser Silex.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1529520962734"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1529520962734");</script></div><br><h2 class="Title7 GTitle2" id="Utilisation de Silex-Code source"><a class="Link9" href="#Utilisation de Silex">Code source</a></h2><br><h3 class="Title8 GTitle3">Code source (index.php)</h3><div class="GCode1"><pre><xmp class="Code2 prettyprint linenums">$lApp = new Silex\Application();

$lApp->get("/", function () {
    $lData = "";
    $lData .= "<br/>### Message<br/><br/>";
    $lData .= "Bonjour tout le monde<br/>";
    return $lData;
});

$lApp->run();        </xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utilisation de Silex-Exécution"><a class="Link9" href="#Utilisation de Silex">Exécution</a></h2><br><h3 class="Title8 GTitle3">Exécution</h3><span class="GColor1" style="color:lime;">http://localhost:8800/index.php</span><br><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3"><img src="img/Silex_Utilisation.png" alt="img/Silex_Utilisation.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Gérer le routage"><a class="Link3" href="#">Gérer le routage</a></h1><div class="Body3">Le but de cette section est de vous apprendre à gérer le routage avec Silex.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1529521789555"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1529521789555");</script></div><br><h2 class="Title7 GTitle2" id="Gérer le routage-Routage simple"><a class="Link9" href="#Gérer le routage">Routage simple</a></h2><br><h3 class="Title8 GTitle3">Routage simple (index.php)<br></h3><div class="GCode1"><pre><xmp class="Code2 prettyprint linenums">$lApp->get("/", function () {
    $lData = "";
    $lData .= "<br/>### Routeur Simple<br/><br/>";
    $lData .= "Bonjour tout le monde<br/>";
    return $lData;
});
</xmp></pre></div><br><h3 class="Title8 GTitle3">Exécution</h3><span class="GColor1" style="color:lime;">http://localhost:8800/index.php</span><br><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3"><img src="img/Routage_Simple.png" alt="img/Routage_Simple.png"><br><br></div><h2 class="Title7 GTitle2" id="Gérer le routage-Routage avec paramètre"><a class="Link9" href="#Gérer le routage">Routage avec paramètre</a></h2><br><h3 class="Title8 GTitle3">Routage avec paramètre (index.php)<br></h3><div class="GCode1"><pre><xmp class="Code2 prettyprint linenums">$lApp->get("/Bonjour/{name}", function($name) use ($lApp) {
    $lData = "";
    $lData .= "<br/>### Routeur Bonjour<br/><br/>";
    $lData .= "Routeur: Bonjour ".$lApp->escape($name)."<br/>";
    return $lData;
});
</xmp></pre></div><br><h3 class="Title8 GTitle3">Exécution</h3><span class="GColor1" style="color:lime;">http://localhost:8833/index.php/Bonjour/Gerard</span><br><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3"><img src="img/Routage_Parametre.png" alt="img/Routage_Parametre.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Gérer la réécriture d'URL"><a class="Link3" href="#">Gérer la réécriture d'URL</a></h1><div class="Body3">Le but de cette section est de vous apprendre à gérer la réécriture d'URL sous Apache.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1529523215626"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1529523215626");</script></div><br><h2 class="Title7 GTitle2" id="Gérer la réécriture d'URL-Code source"><a class="Link9" href="#Gérer la réécriture d'URL-">Code source</a></h2><br><h3 class="Title8 GTitle3">Code source (index.php)</h3><div class="GCode1"><pre><xmp class="Code2 prettyprint linenums">$lApp->get("/", function () {
    $lData = "";
    $lData .= "<br/>### Routeur Simple<br/><br/>";
    $lData .= "Bonjour tout le monde<br/>";
    return $lData;
});

$lApp->get("/Bonjour/{name}", function($name) use ($lApp) {
    $lData = "";
    $lData .= "<br/>### Routeur Bonjour<br/><br/>";
    $lData .= "Routeur: Bonjour ".$lApp->escape($name)."<br/>";
    return $lData;
});</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gérer la réécriture d'URL-Activation"><a class="Link9" href="#Gérer la réécriture d'URL-">Activation</a></h2><br><h3 class="Title8 GTitle3">Activer la réécriture d'URL</h3><div class="Img3"><div class="Img3"><img src="img/URL_Reecriture_Activer.png" alt="img/URL_Reecriture_Activer.png"></div></div><br><div class="Img3"><div class="Img3"><img src="img/URL_Reecriture_Activer_02.png" alt="img/URL_Reecriture_Activer_02.png"></div></div><br><h2 class="Title7 GTitle2" id="Gérer la réécriture d'URL-Configuration"><a class="Link9" href="#Gérer la réécriture d'URL-">Configuration</a></h2><br><h3 class="Title8 GTitle3">Configurer le fichier (.htaccess)</h3><div class="GCode1"><pre><xmp class="Code2 prettyprint linenums">#================================================
<IfModule mod_rewrite.c>
    Options -MultiViews
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [QSA,L]
</IfModule>
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gérer la réécriture d'URL-Test du routage simple"><a class="Link9" href="#Gérer la réécriture d'URL-">Test du routage simple</a></h2><br><h3 class="Title8 GTitle3">Exécution</h3><span class="GColor1" style="color:lime;">http://localhost:8833/</span><br><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3"><img src="img/Routage_Simple.png" alt="img/Routage_Simple.png"><br><br></div><h2 class="Title7 GTitle2" id="Gérer la réécriture d'URL-Test du routage avec paramètre"><a class="Link9" href="#Gérer la réécriture d'URL-">Test du routage avec paramètre</a></h2><br><h3 class="Title8 GTitle3">Exécution</h3><span class="GColor1" style="color:lime;">http://localhost:8833/Bonjour/Gerard</span><br><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3"><img src="img/Routage_Parametre.png" alt="img/Routage_Parametre.png"></div></div></div></div></div><br>