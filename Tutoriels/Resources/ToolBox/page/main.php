<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Quelques outils utiles<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous présenter quelques <b>outils </b>utiles.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br>Un <b>outil</b> est un logiciel destiné à réaliser une tâche.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Resources/ToolBox/img/b_toolbox.png" alt="/Tutoriels/Resources/ToolBox/img/b_toolbox.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Keepass"><a class="Link3" href="#">Keepass</a></h1><div class="Body3"><br><b>KeePass Password Safe </b>est un gestionnaire de mots de passe gratuit et open source principalement pour Windows . Il prend officiellement en charge les systèmes d'exploitation macOS et Linux via l'utilisation de Mono . De plus, il existe plusieurs ports non officiels pour les appareils Windows Phone , Android , iOS et BlackBerry . KeePass stocke les noms d'utilisateur, les mots de passe et d'autres champs, y compris les notes de forme libre et les pièces jointes, dans un fichier crypté . Ce fichier peut être protégé par n'importe quelle combinaison d'un mot de passe principal, d'un fichier de clé et des détails du compte Windows actuel. Par défaut, la base de données KeePass est stockée sur un système de fichiers local (par opposition au stockage en nuage ). KeePass prend en charge un certain nombre de plugins . Il dispose d'un générateur de mot de passe et d'une fonction de synchronisation, prend en charge l'authentification à deux facteurs et dispose d'un mode Secure Desktop . Il peut utiliser une fonction d'obscurcissement de type automatique à deux canaux pour offrir une protection supplémentaire contre les enregistreurs de frappe . KeePass peut importer à partir de plus de 30 autres gestionnaires de mots de passe les plus couramment utilisés.<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Keepass-Installer-l-environnement-Keepass-sous-Windows"><a class="Link9" href="#Keepass">Installer l'environnement Keepass sous Windows</a></h2><br><h3 class="Title8 GTitle3">Télécharger Keepass</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://keepass.info/download.html">https://keepass.info/download.html</a><br><br><b>KeePass-2.48.1-Setup.exe</b><br><br><h3 class="Title8 GTitle3">Installer Keepass</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">KeePass-2.48.1-Setup.exe
Langue -&gt; Française
OK
Cocher -&gt; Je comprends et j'accepte les termes du contrat de licence
Suivant
Destination -&gt; C:\Program Files\KeePass Password Safe 2
Suivant
Suivant
Cocher -&gt; Associer Keepass avec l'extension de fichier .kdbx
Suivant
Installer
Cocher -&gt; Exécuter Keepass
Terminer
Check for Updates -&gt; Enable</pre></div></div><br><h2 class="Title7 GTitle2" id="Keepass-Installer-une-nouvelle-langue"><a class="Link9" href="#Keepass">Installer une nouvelle langue</a></h2><br><h3 class="Title8 GTitle3">Télécharger le traducteur Français</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">View
Change Language
Get More Languages</pre></div></div><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://keepass.info/translations.html">https://keepass.info/translations.html</a><br><br>French<br>Ronan Plantec<br>v2.48+<br><br><b>KeePass-2.48-French-b.zip</b><br><br><h3 class="Title8 GTitle3">Extraire le traducteur Français</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">KeePass-2.48-French-b.zip
Clic droit
Extraire vers KeePass-2.48-French-b\</pre></div></div><br><h3 class="Title8 GTitle3">Installer le traducteur Français</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">Copier -&gt; KeePass-2.48-French-b\French.lngx
Coller -&gt; C:\Program Files\KeePass Password Safe 2\Languages</pre></div></div><br><h2 class="Title7 GTitle2" id="Keepass-Modifier-la-langue"><a class="Link9" href="#Keepass">Modifier la langue</a></h2><br><h3 class="Title8 GTitle3">Choisir la langue Française</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">Keepass
View
Change Language
Installed Languages
French (Français)
Restart -&gt; Oui</pre></div></div><br><h2 class="Title7 GTitle2" id="Keepass-Modifier-les-options"><a class="Link9" href="#Keepass">Modifier les options</a></h2><br><h3 class="Title8 GTitle3">Modifier les options</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">Keepass
Outils
Options
Cocher/Décocher -&gt; Verrouiller. 
Cocher/Décocher -&gt; Quitter...
Cocher/Décocher -&gt; Effacer...</pre></div></div><br><h2 class="Title7 GTitle2" id="Keepass-Creer-le-mot-de-passe-maitre"><a class="Link9" href="#Keepass">Créer le mot de passe maître</a></h2><br><h3 class="Title8 GTitle3">Créer le mot de passe maître</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">Keepass
Fichier
Nouveau
Nouvelle base de données
OK
Nom du fichier -&gt; C:\Users\Admin\Documents\keepass_bdd.kdbx
Cocher -&gt; Mot de passe maître -&gt; xxxxxxxxxxxxxxxxxxxxx
Répéter -&gt; xxxxxxxxxxxxxxxxxxxxx
OK
Nom de la base de données -&gt; bdd_keepass
Nom de l'utilisateur par défaut -&gt; xxxxxx
OK
Feuille de secours -&gt; Imprimer</pre></div></div><br><h2 class="Title7 GTitle2" id="Keepass-Demarrer-Keepass"><a class="Link9" href="#Keepass">Démarrer Keepass</a></h2><br><h3 class="Title8 GTitle3">Démarrer Keepass</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">Keepass
Cocher -&gt; Mot de passe maître -&gt; xxxxxx (produitpargerardkesse)
OK</pre></div></div><br><h2 class="Title7 GTitle2" id="Keepass-Generer-un-mot-de-passe"><a class="Link9" href="#Keepass">Générer un mot de passe</a></h2><br><h3 class="Title8 GTitle3">Générer un mot de passe</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">Keepass
Entrée
Ajouter une entrée
Général
Titre -&gt; Votre titre
Nom d'utilisateur -&gt; xxxxxxxxxx
Générer un mot de passe
Ouvrir le générateur de mot de passe
Cocher -&gt; Générer en utilisant un jeu de caractères
Longueur dun mot de passe généré -&gt; Votre longueur (30)
Cocher -&gt; Vos choix
Inclure également les caractères suivants -&gt; Vos caractères
OK</pre></div></div><br><br><h2 class="Title7 GTitle2" id="Keepass-Enregistrer-un-mot-de-passe-existant"><a class="Link9" href="#Keepass">Enregistrer un mot de passe existant</a></h2><br><h3 class="Title8 GTitle3">Enregistrer un mot de passe existant</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">Keepass
Entrée
Ajouter une entrée
Général
Titre -&gt; xxxxxx (ReadyDev)
Nom d'utilisateur -&gt; xxxxxx
Générer un mot de passe
Ouvrir le générateur de mot de passe
Cocher -&gt; Générer en utilisant un jeu de caractères
Longueur dun mot de passe généré -&gt; Votre longueur (30)
Cocher -&gt; Vos choix
Inclure également les caractères suivants -&gt; Vos caractères
OK</pre></div></div><br><h2 class="Title7 GTitle2" id="Keepass-Exporter-les-mots-de-passe"><a class="Link9" href="#Keepass">Exporter les mots de passe</a></h2><br><h3 class="Title8 GTitle3">Exporter les mots de passe</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">Keepass
Fichier
Enregistrer sous
Enregistrer sous le fichier
Nom du fichier -&gt; C:\Users\Admin\Documents\keepass_bdd.kdbx
Enregistrer</pre></div></div><br><h2 class="Title7 GTitle2" id="Keepass-Importer-les-mots-de-passe"><a class="Link9" href="#Keepass">Importer les mots de passe</a></h2><br><h3 class="Title8 GTitle3">Importer les mots de passe</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">Keepass
Fichier
Ouvrir
Ouvrir un fichier
Nom du fichier -&gt; C:\Users\Admin\Documents\keepass_bdd.kdbx
Ouvrir
Cocher -&gt; Mot de passe maître -&gt; xxxxxx (produitpargerardkesse)
OK</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Oracle-Database"><a class="Link3" href="#">Oracle Database</a></h1><div class="Body3"><br><b>Oracle Database</b> (communément appelé Oracle DBMS ou simplement Oracle ) est un système de gestion de base de données multi-modèle produit et commercialisé par Oracle Corporation . Il s'agit d'une base de données couramment utilisée pour exécuter des charges de travail de base de données de traitement des transactions en ligne (OLTP), d' entreposage de données (DW) et mixtes (OLTP et DW). Oracle Database est disponible par plusieurs fournisseurs de services sur site , sur le cloud ou en tant qu'installation cloud hybride. Il peut être exécuté sur des serveurs tiers ainsi que sur du matériel Oracle ( Exadata on-prem, sur Oracle Cloud ou chez Cloud at Customer).<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Oracle-Database-Installer-l-environnement-Oracle-Database-sous-Windonws"><a class="Link9" href="#Oracle-Database">Installer l'environnement Oracle Database sous Windonws</a></h2><br><h3 class="Title8 GTitle3">Télécharger Oracle Database</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.oracle.com/database/technologies/xe-downloads.html">https://www.oracle.com/database/technologies/xe-downloads.html</a><br><br><b>OracleXE184_Win64.zip</b><br><br><h3 class="Title8 GTitle3">Extraire Oracle Database</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">OracleXE184_Win64.zip
Clic droit
Extraire vers OracleXE184_Win64\</pre></div></div><br><h3 class="Title8 GTitle3">Installer Oracle Database</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">OracleXE184_Win64
Setup.exe
Next
Cocher -&gt; I accept the terms in the license agreement
Next
Install Oracle Database -&gt; C:\app\Admin\product\18.0.0\
Next
Database Password -&gt; xxxxxxxxxx
Confirm Database Password -&gt; xxxxxxxxxx
Next
Destination Folder -&gt; C:\app\Admin\product\18.0.0\
Oracle Home -&gt; C:\app\Admin\product\18.0.0\dbhomeXE\
Oracle Base -&gt; C:\app\Admin\product\18.0.0\
Install
Multitenant container database -&gt; localhost:1521
Pluggable database -&gt; localhost:1521/XEPDB1
EM Express URL -&gt; https://localhost:5500/em
Finish</pre></div></div><br><h3 class="Title8 GTitle3">Démarrer la connexion</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">sqlplus / as sysdba</pre></div></div><br><h3 class="Title8 GTitle3">Vérifier la version</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">select * from v$version;

BANNER
--------------------------------------------------------------------------------
BANNER_FULL
--------------------------------------------------------------------------------
BANNER_LEGACY
--------------------------------------------------------------------------------
    CON_ID
----------
Oracle Database 18c Express Edition Release 18.0.0.0.0 - Production
Oracle Database 18c Express Edition Release 18.0.0.0.0 - Production
Version 18.4.0.0.0
Oracle Database 18c Express Edition Release 18.0.0.0.0 - Production
         0

BANNER
--------------------------------------------------------------------------------
BANNER_FULL
--------------------------------------------------------------------------------
BANNER_LEGACY
--------------------------------------------------------------------------------
    CON_ID
----------</pre></div></div><br><h3 class="Title8 GTitle3">Vérifier le mode d'ouverture</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">select name, open_mode from v$pdbs;

NAME
--------------------------------------------------------------------------------
OPEN_MODE
----------
PDB$SEED
READ ONLY

XEPDB1
READ WRITE</pre></div></div><br><h3 class="Title8 GTitle3">Quitter</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">exit;</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Oracle-SQL-Developer"><a class="Link3" href="#">Oracle SQL Developer</a></h1><div class="Body3"><br><b>Oracle SQL Developer</b> est un environnement de développement intégré gratuit qui simplifie le développement et la gestion d'Oracle Database dans les déploiements traditionnels et cloud. SQL Developer propose un développement complet de bout en bout de vos applications PL/SQL, une feuille de calcul pour exécuter des requêtes et des scripts, une console DBA pour gérer la base de données, une interface de rapports, une solution complète de modélisation de données et une plateforme de migration pour déplacer votre Bases de données tierces vers Oracle.<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Oracle-SQL-Developer-Installer-l-environnement-JDK-8-sous-Windows"><a class="Link9" href="#Oracle-SQL-Developer">Installer l'environnement JDK 8 sous Windows</a></h2><br><h3 class="Title8 GTitle3">Télécharger JDK 8</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.oracle.com/java/technologies/javase/javase-jdk8-downloads.html">https://www.oracle.com/java/technologies/javase/javase-jdk8-downloads.html</a><br><br><b>jdk-8u291-windows-x64.exe</b><br><br><h3 class="Title8 GTitle3">Installer JDK 8</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">jdk-8u291-windows-x64.exe
Next
Install To -&gt; C:\Program Files\Java\jdk1.8.0_291\
Next
Installer dans -&gt; C:\Program Files\Java\jre1.8.0_291\
Suivant
Close</pre></div></div><br><h2 class="Title7 GTitle2" id="Oracle-SQL-Developer-Installer-l-environnement-Oracle-SQL-Developer-sous-Windows"><a class="Link9" href="#Oracle-SQL-Developer">Installer l'environnement Oracle SQL Developer sous Windows</a></h2><br><h3 class="Title8 GTitle3">Télécharger Oracle SQL Developer</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.oracle.com/tools/downloads/sqldev-downloads.html">https://www.oracle.com/tools/downloads/sqldev-downloads.html</a><br><br><b>sqldeveloper-20.4.1.407.0006-no-jre.zip</b><br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">sqldeveloper-20.4.1.407.0006-no-jre.zip
Clic droit
Extraire vers sqldeveloper-20.4.1.407.0006-no-jre\</pre></div></div><br><h3 class="Title8 GTitle3">Installer Oracle SQL Developer</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">sqldeveloper-20.4.1.407.0006-no-jre
sqldeveloper.exe
Java JDK Home -&gt; C:\Program Files\Java\jdk1.8.0_291
OK
Importer une installation SQL ? -&gt; Non
Cocher -&gt; Autoriser l'envoi de rapports d'utilisation à Oracle
OK</pre></div></div><br><h2 class="Title7 GTitle2" id="Oracle-SQL-Developer-Demarrer-une-nouvelle-connexion"><a class="Link9" href="#Oracle-SQL-Developer">Démarrer une nouvelle connexion</a></h2><br><h3 class="Title8 GTitle3">Démarrer une nouvelle connexion</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">Oracle connexions
Clic droit
Nouvelle connexion
Name -&gt; MY_CONNEXION
Type de base de données -&gt; Oracle
Informations utilisateur
Type d'authentification -&gt; Par défaut
Nom d'utilisateur -&gt; sys
Rôle -&gt; SYSDBA
Mot de passe -&gt; xxxxxxxxxx
Type de connexion -&gt; De base
Détails
Nom de l'hôte -&gt; localhost
Port -&gt; 1521
Cocher -&gt; SID -&gt; xe
Tester</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Borland-C---Builder"><a class="Link3" href="#">Borland C++ Builder</a></h1><div class="Body3"><br><b>Borland C++Builder</b> est un logiciel de développement rapide d'applications (RAD) conçu par Borland qui reprend les mêmes concepts, la même interface et la même bibliothèque que Delphi en utilisant le langage C++. Il permet de créer rapidement des applications Win32, Win64, MacOS, iOS, Android, ainsi qu'une interface graphique avec son éditeur de ressources. Utilisant en interne le compilateur Clang, ll est compatible avec la version de norme ISO C++ C++17.<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Borland-C---Builder-Installer-l-envrionnement-Borland-C---Builder-sous-Windows"><a class="Link9" href="#Borland-C---Builder">Installer l'envrionnement Borland C++ Builder sous Windows</a></h2><br><h3 class="Title8 GTitle3">Télécharger Borland C++ Builder</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://archive.org/details/BorlandC5.02">https://archive.org/details/BorlandC5.02</a><br><br><b>BORLAND C++.zip</b><br><br><h3 class="Title8 GTitle3">Installer Borland C++</h3><br>BORLAND C++<br>BORLAND C<br>SETUP.EXE<br><br><br></div></div></div></div><br>