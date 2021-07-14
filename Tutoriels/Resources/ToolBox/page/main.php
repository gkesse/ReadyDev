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
OK</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Oracle-Database"><a class="Link3" href="#">Oracle Database</a></h1><div class="Body3"><br><b>Oracle Database</b> (communément appelé Oracle DBMS ou simplement Oracle ) est un système de gestion de base de données multi-modèle produit et commercialisé par Oracle Corporation . Il s'agit d'une base de données couramment utilisée pour exécuter des charges de travail de base de données de traitement des transactions en ligne (OLTP), d' entreposage de données (DW) et mixtes (OLTP et DW). Oracle Database est disponible par plusieurs fournisseurs de services sur site , sur le cloud ou en tant qu'installation cloud hybride. Il peut être exécuté sur des serveurs tiers ainsi que sur du matériel Oracle ( Exadata on-prem, sur Oracle Cloud ou chez Cloud at Customer).<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Oracle-Database-Documentation-sur-Oracle-PL-SQL"><a class="Link9" href="#Oracle-Database">Documentation sur Oracle PL/SQL</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.techonthenet.com/oracle/index.php">https://www.techonthenet.com/oracle/index.php</a><br><br><h2 class="Title7 GTitle2" id="Oracle-Database-Installer-l-environnement-Oracle-Database-sous-Windonws"><a class="Link9" href="#Oracle-Database">Installer l'environnement Oracle Database sous Windonws</a></h2><br><h3 class="Title8 GTitle3">Télécharger Oracle Database</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.oracle.com/database/technologies/xe-downloads.html">https://www.oracle.com/database/technologies/xe-downloads.html</a><br><br><b>OracleXE184_Win64.zip</b><br><br><h3 class="Title8 GTitle3">Extraire Oracle Database</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">OracleXE184_Win64.zip
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
Finish</pre></div></div><br><h3 class="Title8 GTitle3">Démarrer la connexion</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">sqlplus / as sysdba</pre></div></div><br><h3 class="Title8 GTitle3">Vérifier la version</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">select * from v$version;

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
----------</pre></div></div><br><h3 class="Title8 GTitle3">Vérifier le mode d'ouverture</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">select name, open_mode from v$pdbs;

NAME
--------------------------------------------------------------------------------
OPEN_MODE
----------
PDB$SEED
READ ONLY

XEPDB1
READ WRITE</pre></div></div><br><h3 class="Title8 GTitle3">Quitter</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">exit;</pre></div></div><br><h2 class="Title7 GTitle2" id="Oracle-Database-Executer-une-requete-a-partir-d-un-fichier"><a class="Link9" href="#Oracle-Database">Exécuter une requête à partir d'un fichier</a></h2><br><h3 class="Title8 GTitle3">Créer le script (script.sql)</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">select * from v$version;</pre></div></div><br><h3 class="Title8 GTitle3">Démarrer la connexion</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">sqlplus / as sysdba</pre></div></div><br><h3 class="Title8 GTitle3">Exécuter le script</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">@script.sql</pre></div></div><br><h2 class="Title7 GTitle2" id="Oracle-Database-Afficher-un-message"><a class="Link9" href="#Oracle-Database">Afficher un message</a></h2><br><h3 class="Title8 GTitle3">script.sql</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">set serveroutput on;
declare 
    l_message  varchar2(128) := 'Bonjour tout le monde'; 
begin 
    dbms_output.put_line(l_message); 
end;
/</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">Bonjour tout le monde</pre></div></div><br><h2 class="Title7 GTitle2" id="Oracle-Database-Creer-un-commentaire-simple"><a class="Link9" href="#Oracle-Database">Créer un commentaire simple</a></h2><br><h3 class="Title8 GTitle3">script.sql</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">-- creer un commentaire simple
set serveroutput on;
declare 
    l_message  varchar2(128) := 'Bonjour tout le monde'; 
begin 
    dbms_output.put_line(l_message); 
end;
/</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">Bonjour tout le monde</pre></div></div><br><h2 class="Title7 GTitle2" id="Oracle-Database-Creer-un-commentaire-multiple"><a class="Link9" href="#Oracle-Database">Créer un commentaire multiple</a></h2><br><h3 class="Title8 GTitle3">script.sql</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">/* 
 creer un commentaire multiple
 creer un commentaire multiple
*/
set serveroutput on;
declare 
    l_message  varchar2(128) := 'Bonjour tout le monde'; 
begin 
    dbms_output.put_line(l_message); 
end;
/</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">Bonjour tout le monde</pre></div></div><br><h2 class="Title7 GTitle2" id="Oracle-Database-Declarer-une-variable"><a class="Link9" href="#Oracle-Database">Déclarer une variable</a></h2><br><h3 class="Title8 GTitle3">script.sql</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">-- ==============================================
set serveroutput on;
-- ==============================================
declare 
    l_integer integer; 
begin 
    null; 
end;
/
-- ==============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Oracle-Database-Afficher-une-variable"><a class="Link9" href="#Oracle-Database">Afficher une variable</a></h2><br><h3 class="Title8 GTitle3">script.sql</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">-- ==============================================
set serveroutput on;
-- ==============================================
declare 
    l_integer integer; 
begin
    l_integer := 2021;
    dbms_output.put_line('l_integer : ' || l_integer); 
end;
/
-- ==============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">l_integer : 2021</pre></div></div><br><h2 class="Title7 GTitle2" id="Oracle-Database-Initialiser-une-variable-lors-de-la-declaration--1-"><a class="Link9" href="#Oracle-Database">Initialiser une variable lors de la déclaration (1)</a></h2><br>Chaque fois qu'on déclare une variable, PL/SQL lui attribue une valeur par défaut NULL. Si on souhaite <b>initialiser </b>une variable avec une valeur autre que la valeur NULL, on peut le faire pendant la déclaration.<br><br><h3 class="Title8 GTitle3">script.sql</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">-- ==============================================
set serveroutput on;
-- ==============================================
declare 
    l_string char(32) := 'Bonjour tout le monde'; 
begin
    dbms_output.put_line(l_string); 
end;
/
-- ==============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">Bonjour tout le monde</pre></div></div><br><h2 class="Title7 GTitle2" id="Oracle-Database-Initialiser-une-variable-lors-de-la-declaration--2-"><a class="Link9" href="#Oracle-Database">Initialiser une variable lors de la déclaration (2)</a></h2><br><h3 class="Title8 GTitle3">script.sql</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">-- ==============================================
set serveroutput on;
-- ==============================================
declare 
    l_string char(32) default 'Bonjour tout le monde'; 
begin
    dbms_output.put_line(l_string); 
end;
/
-- ==============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">Bonjour tout le monde</pre></div></div><br><h2 class="Title7 GTitle2" id="Oracle-Database-Creer-une-variable-constante"><a class="Link9" href="#Oracle-Database">Créer une variable constante</a></h2><br><h3 class="Title8 GTitle3">script.sql</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">-- ==============================================
set serveroutput on;
-- ==============================================
declare 
    c_pi constant double precision := 3.14; 
begin
    dbms_output.put_line('c_pi : ' || c_pi); 
end;
/
-- ==============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">c_pi : 3,14</pre></div></div><br><h2 class="Title7 GTitle2" id="Oracle-Database-Creer-un-sous-type"><a class="Link9" href="#Oracle-Database">Créer un sous-type</a></h2><br>Un <b>sous-type</b> est un sous-ensemble d'un autre type de données, appelé son type de base. Un sous-type a les mêmes opérations valides que son type de base, mais seulement un sous-ensemble de ses valeurs valides.<br><br><h3 class="Title8 GTitle3">script.sql</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">-- ==============================================
set serveroutput on;
-- ==============================================
declare
    subtype s_name is char(256);
    l_name s_name;
begin
    l_name := 'Gerard KESSE';
    dbms_output.put_line('Bonjour ' || l_name); 
end;
/
-- ==============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">Bonjour Gerard KESSE</pre></div></div><br><h2 class="Title7 GTitle2" id="Oracle-Database-Creer-une-declaration-contrainte"><a class="Link9" href="#Oracle-Database">Créer une déclaration contrainte</a></h2><br>Une <b>déclaration contrainte</b> est réalisée lorsqu'on fournit une taille, une échelle ou une limite de précision avec le type de données. Les déclarations contraintes nécessitent moins de mémoire que les déclarations non contraintes.<br><br><h3 class="Title8 GTitle3">script.sql</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">-- ==============================================
set serveroutput on;
-- ==============================================
declare 
    l_string char(32) := 'Bonjour tout le monde'; 
begin
    dbms_output.put_line('l_string : ' || l_string); 
end;
/
-- ==============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">l_string : Bonjour tout le monde</pre></div></div><br><h2 class="Title7 GTitle2" id="Oracle-Database-Echapper-un-caractere"><a class="Link9" href="#Oracle-Database">Echapper un caractère</a></h2><br><h3 class="Title8 GTitle3">script.sql</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">-- ==============================================
set serveroutput on;
-- ==============================================
declare 
    l_string char(64) default 'Toute ame qui s''eleve eleve le monde'; 
begin
    dbms_output.put_line(l_string); 
end;
/
-- ==============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">Toute ame qui s'eleve eleve le monde</pre></div></div><br><h2 class="Title7 GTitle2" id="Oracle-Database-Formater-une-chaine"><a class="Link9" href="#Oracle-Database">Formater une chaine</a></h2><br><h3 class="Title8 GTitle3">script.sql</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">-- ==============================================
set serveroutput on;
-- ==============================================
begin
    dbms_output.put_line(utl_lms.format_message('%s : %s', 'Nom', 'Gerard KESSE'));
    dbms_output.put_line(utl_lms.format_message('%s : %d', 'Identifiant', 123456));
end;
/
-- ==============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">Nom : Gerard KESSE
Identifiant : 123456</pre></div></div><br><h2 class="Title7 GTitle2" id="Oracle-Database-Realiser-des-operations-arithmetiques"><a class="Link9" href="#Oracle-Database">Réaliser des opérations arithmétiques</a></h2><br><h3 class="Title8 GTitle3">script.sql</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">-- ==============================================
set serveroutput on;
-- ==============================================
declare
    a integer := 22;
    b integer := 7;
-- ==============================================
begin
    dbms_output.put_line(a || ' + ' || b || ' = ' || (a + b));
    dbms_output.put_line(a || ' - ' || b || ' = ' || (a - b));
    dbms_output.put_line(a || ' * ' || b || ' = ' || (a * b));
    dbms_output.put_line(a || ' / ' || b || ' = ' || (a / b));
    dbms_output.put_line(a || ' % ' || b || ' = ' || mod(a, b));
    dbms_output.put_line(a || ' ^ ' || b || ' = ' || (a ** b));
end;
/
-- ==============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">22 + 7 = 29
22 - 7 = 15
22 * 7 = 154
22 / 7 = 3,14285714285714285714285714285714285714
22 % 7 = 1
22 ^ 7 = 2494357888</pre></div></div><br><h2 class="Title7 GTitle2" id="Oracle-Database-Realiser-des-operations-de-comparaison"><a class="Link9" href="#Oracle-Database">Réaliser des opérations de comparaison</a></h2><br><h3 class="Title8 GTitle3">script.sql</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">-- ==============================================
set serveroutput on;
-- ==============================================
declare
    a integer := 22;
    b integer := 7;
    c varchar(7) := 'Bonjour';
    d varchar(4) := 'jour';
    e varchar(10) := 'two';
    f varchar(10) := 'five';
    g varchar(10) := null;
    h varchar(10);
    i integer := 10;
    j integer := 30;
-- ==============================================
begin
    dbms_output.put_line(a || ' == ' || b || ' = ' || sys.diutil.bool_to_int(a = b));
    dbms_output.put_line(a || ' != ' || b || ' = ' || sys.diutil.bool_to_int(a != b));
    dbms_output.put_line(a || ' != ' || b || ' = ' || sys.diutil.bool_to_int(a ~= b));
    dbms_output.put_line(a || ' != ' || b || ' = ' || sys.diutil.bool_to_int(a &lt;&gt; b));
    dbms_output.put_line(a || ' &gt;  ' || b || ' = ' || sys.diutil.bool_to_int(a &gt; b));
    dbms_output.put_line(a || ' &lt;  ' || b || ' = ' || sys.diutil.bool_to_int(a &lt; b));
    dbms_output.put_line(a || ' &gt;= ' || b || ' = ' || sys.diutil.bool_to_int(a &gt;= b));
    dbms_output.put_line(a || ' &lt;= ' || b || ' = ' || sys.diutil.bool_to_int(a &lt;= b));
    dbms_output.put_line(c || ' like ' || d || ' = ' || sys.diutil.bool_to_int(c like d));
    dbms_output.put_line(d || ' like ' || c || ' = ' || sys.diutil.bool_to_int(d like c));
    dbms_output.put_line(c || ' like ' || '%' || d || ' = ' || sys.diutil.bool_to_int(c like ('%' || d)));
    dbms_output.put_line('%' || d || ' like ' || c || ' = ' || sys.diutil.bool_to_int(('%' || d) like c));
    dbms_output.put_line(e || ' in ' || '(one, two, three)' || ' = ' || sys.diutil.bool_to_int(e in ('one', 'two', 'three')));
    dbms_output.put_line(f || ' in ' || '(one, two, three)' || ' = ' || sys.diutil.bool_to_int(f in ('one', 'two', 'three')));
    dbms_output.put_line(f || ' is null' || ' = ' || sys.diutil.bool_to_int(f is null));
    dbms_output.put_line(g || ' is null' || ' = ' || sys.diutil.bool_to_int(g is null));
    dbms_output.put_line(h || ' is null' || ' = ' || sys.diutil.bool_to_int(h is null));
    dbms_output.put_line(i || ' between ' || a || ' and ' || b || ' = ' || sys.diutil.bool_to_int(i between a and b));
    dbms_output.put_line(i || ' between ' || b || ' and ' || a || ' = ' || sys.diutil.bool_to_int(i between b and a));
    dbms_output.put_line(j || ' between ' || a || ' and ' || b || ' = ' || sys.diutil.bool_to_int(i between j and b));
    dbms_output.put_line(i || ' between ' || b || ' and ' || a || ' = ' || sys.diutil.bool_to_int(i between j and a));
end;
/
-- ==============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">22 == 7 = 0
22 != 7 = 1
22 != 7 = 1
22 != 7 = 1
22 &gt;  7 = 1
22 &lt;  7 = 0
22 &gt;= 7 = 1
22 &lt;= 7 = 0
Bonjour like jour = 0
jour like Bonjour = 0
Bonjour like %jour = 1
%jour like Bonjour = 0
two in (one, two, three) = 1
five in (one, two, three) = 0
five is null = 0
is null = 1
is null = 1
10 between 22 and 7 = 0
10 between 7 and 22 = 1
30 between 22 and 7 = 0
10 between 7 and 22 = 0</pre></div></div><br><h2 class="Title7 GTitle2" id="Oracle-Database-Realiser-des-operations-logiques"><a class="Link9" href="#Oracle-Database">Réaliser des opérations logiques</a></h2><br><h3 class="Title8 GTitle3">script.sql</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">-- ==============================================
set serveroutput on;
-- ==============================================
declare
    a boolean := true;
    b boolean := false;
-- ==============================================
begin
    dbms_output.put_line('!' || sys.diutil.bool_to_int(a) || ' = ' || sys.diutil.bool_to_int(not(a)));
    dbms_output.put_line('!' || sys.diutil.bool_to_int(b) || ' = ' || sys.diutil.bool_to_int(not(b)));
    dbms_output.put_line(sys.diutil.bool_to_int(a) || ' || ' || sys.diutil.bool_to_int(b) || ' = ' || sys.diutil.bool_to_int(a or b));
    dbms_output.put_line(sys.diutil.bool_to_int(a) || ' || ' || sys.diutil.bool_to_int(b) || ' = ' || sys.diutil.bool_to_int(a or b));
    dbms_output.put_line(sys.diutil.bool_to_int(b) || ' || ' || sys.diutil.bool_to_int(b) || ' = ' || sys.diutil.bool_to_int(b or b));
    dbms_output.put_line(sys.diutil.bool_to_int(a) || ' || ' || sys.diutil.bool_to_int(a) || ' = ' || sys.diutil.bool_to_int(a or a));
    dbms_output.put_line(sys.diutil.bool_to_int(a) || ' &amp;&amp; ' || sys.diutil.bool_to_int(b) || ' = ' || sys.diutil.bool_to_int(a and b));
    dbms_output.put_line(sys.diutil.bool_to_int(b) || ' &amp;&amp; ' || sys.diutil.bool_to_int(b) || ' = ' || sys.diutil.bool_to_int(b and b));
    dbms_output.put_line(sys.diutil.bool_to_int(a) || ' &amp;&amp; ' || sys.diutil.bool_to_int(a) || ' = ' || sys.diutil.bool_to_int(a and a));
end;
/
-- ==============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">!1 = 0
!0 = 1
1 || 0 = 1
1 || 0 = 1
0 || 0 = 0
1 || 1 = 1
1 &amp;&amp; 0 = 0
0 &amp;&amp; 0 = 0
1 &amp;&amp; 1 = 1</pre></div></div><br><h2 class="Title7 GTitle2" id="Oracle-Database-Creer-une-condition-if"><a class="Link9" href="#Oracle-Database">Créer une condition if</a></h2><br><h3 class="Title8 GTitle3">script.sql</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">-- ==============================================
set serveroutput on;
-- ==============================================
declare
    a integer := 22;
    b integer := 7;
-- ==============================================
begin
    if (a &gt; b) then
        dbms_output.put_line('a est superieur a b');
    end if;
end;
/
-- ==============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">a est superieur a b</pre></div></div><br><h2 class="Title7 GTitle2" id="Oracle-Database-Creer-une-condition-if-else"><a class="Link9" href="#Oracle-Database">Créer une condition if else</a></h2><br><h3 class="Title8 GTitle3">script.sql</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">-- ==============================================
set serveroutput on;
-- ==============================================
declare
    a integer := 22;
    b integer := 7;
-- ==============================================
begin
    if (a &lt; b) then
        dbms_output.put_line('a est inferieur a b');
    else
        dbms_output.put_line('a est superieur ou egal a b');
    end if;
end;
/
-- ==============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">a est superieur ou egal a b</pre></div></div><br><h2 class="Title7 GTitle2" id="Oracle-Database-Creer-une-condition-else-if"><a class="Link9" href="#Oracle-Database">Créer une condition else if</a></h2><br><h3 class="Title8 GTitle3">script.sql</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">-- ==============================================
set serveroutput on;
-- ==============================================
declare
    a integer := 22;
    b integer := 22;
-- ==============================================
begin
    if (a &lt; b) then
        dbms_output.put_line('a est inferieur a b');
    elsif (a = b) then
        dbms_output.put_line('a est egal a b');
    else
        dbms_output.put_line('a est superieur a b');
    end if;
end;
/
-- ==============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">a est egal a b</pre></div></div><br><h2 class="Title7 GTitle2" id="Oracle-Database-Creer-une-condition-case-when"><a class="Link9" href="#Oracle-Database">Créer une condition case when</a></h2><br><h3 class="Title8 GTitle3">script.sql</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">-- ==============================================
set serveroutput on;
-- ==============================================
declare
    a char(3) := 'yes';
-- ==============================================
begin
    case a
        when 'yes' then dbms_output.put_line('continuer l''opearation'); 
        when 'no' then dbms_output.put_line('annuler l''opearation'); 
        else dbms_output.put_line('lancer l''operation par defaut'); 
    end case;
end;
/
-- ==============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">continuer l'opearation</pre></div></div><br><h2 class="Title7 GTitle2" id="Oracle-Database-Creer-une-boucle-loop"><a class="Link9" href="#Oracle-Database">Créer une boucle loop</a></h2><br><h3 class="Title8 GTitle3">script.sql</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">-- ==============================================
set serveroutput on;
-- ==============================================
declare
    l_count integer := 0;
-- ==============================================
begin
    loop
        if (l_count = 10) then exit; end if;
        dbms_output.put_line(l_count);
        l_count := l_count + 1;
    end loop;
end;
/
-- ==============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">0
1
2
3
4
5
6
7
8
9</pre></div></div><br><h2 class="Title7 GTitle2" id="Oracle-Database-Creer-une-boucle-while"><a class="Link9" href="#Oracle-Database">Créer une boucle while</a></h2><br><h3 class="Title8 GTitle3">script.sql</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">-- ==============================================
set serveroutput on;
-- ==============================================
declare
    l_count integer := 0;
-- ==============================================
begin
    while l_count &lt; 10 loop
        dbms_output.put_line(l_count);
        l_count := l_count + 1;
    end loop;
end;
/
-- ==============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">0
1
2
3
4
5
6
7
8
9</pre></div></div><br><h2 class="Title7 GTitle2" id="Oracle-Database-Creer-une-boucle-for"><a class="Link9" href="#Oracle-Database">Créer une boucle for</a></h2><br><h3 class="Title8 GTitle3">script.sql</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">-- ==============================================
set serveroutput on;
-- ==============================================
begin
    for i in 1..10 loop
        dbms_output.put_line(i);
    end loop;
end;
/
-- ==============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">1
2
3
4
5
6
7
8
9
10</pre></div></div><br><h2 class="Title7 GTitle2" id="Oracle-Database-Creer-une-boucle-for-inverse"><a class="Link9" href="#Oracle-Database">Créer une boucle for inversé</a></h2><br><h3 class="Title8 GTitle3">script.sql</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">-- ==============================================
set serveroutput on;
-- ==============================================
begin
    for i in 1..10 loop
        dbms_output.put_line(i);
    end loop;
end;
/
-- ==============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">10
9
8
7
6
5
4
3
2
1</pre></div></div><br><h2 class="Title7 GTitle2" id="Oracle-Database-Realiser-des-operations-sur-les-chaines"><a class="Link9" href="#Oracle-Database">Réaliser des opérations sur les chaines</a></h2><br><h3 class="Title8 GTitle3">script.sql</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">-- ==============================================
set serveroutput on;
-- ==============================================
declare
    l_string varchar(32) := 'Bonjour tout le monde';
    l_string2 varchar(32) := ' ! Bienvenue sur ReadyDev';
    l_string3 varchar(32) := '    ReadyDev    ';
    l_char char(1) := 'A';
    l_code number(2) := ascii('A');
    l_char2 char(1) := 'o';
-- ==============================================
begin
    dbms_output.put_line('ascii(l_char) = ' || ascii(l_char));
    dbms_output.put_line('chr(l_code) = ' || chr(l_code));
    dbms_output.put_line('initcap(l_string) = ' || initcap(l_string));
    dbms_output.put_line('lower(l_string) = ' || lower(l_string));
    dbms_output.put_line('upper(l_string) = ' || upper(l_string));
    dbms_output.put_line('lpad(l_string, 5) = ' || lpad(l_string, 25));
    dbms_output.put_line('lpad(l_string, 5, *) = ' || lpad(l_string, 25, '*'));
    dbms_output.put_line('rpad(l_string, 5) = ' || rpad(l_string, 25));
    dbms_output.put_line('rpad(l_string, 5, *) = ' || rpad(l_string, 25, '*'));
    dbms_output.put_line('ltrim(l_string3, '' '') = ' || ltrim(l_string3, ' '));
    dbms_output.put_line('rtrim(l_string3, '' '') = ' || rtrim(l_string3, ' '));
    dbms_output.put_line('substr(l_string, 1, 7) = ' || substr(l_string, 1, 7));
    dbms_output.put_line('substr(l_string, 8) = ' || substr(l_string, 8));
    dbms_output.put_line('replace(l_string, Bonjour, Bienvenue) = ' || replace(l_string, 'Bonjour', 'Bienvenue'));
    dbms_output.put_line('instr(l_string, l_char2) = ' || instr(l_string, l_char2));
    dbms_output.put_line('instr(l_string, l_char2, 3) = ' || instr(l_string, l_char2, 3));
    dbms_output.put_line('instr(l_string, l_char2, 1, 2) = ' || instr(l_string, l_char2, 1, 2));
    dbms_output.put_line('instr(l_string, l_char2, 1, 3) = ' || instr(l_string, l_char2, 1, 3));
    dbms_output.put_line('instr(l_string, l_char2, -1, 1) = ' || instr(l_string, l_char2, -1, 1));
    dbms_output.put_line('instrb(l_string, l_char2) = ' || instrb(l_string, l_char2));
    dbms_output.put_line('instrb(l_string, l_char2, 3) = ' || instrb(l_string, l_char2, 3));
    dbms_output.put_line('instrb(l_string, l_char2, 1, 2) = ' || instrb(l_string, l_char2, 1, 2));
    dbms_output.put_line('instrb(l_string, l_char2, 1, 3) = ' || instrb(l_string, l_char2, 1, 3));
    dbms_output.put_line('instrb(l_string, l_char2, -1, 1) = ' || instrb(l_string, l_char2, -1, 1));
    dbms_output.put_line('length(l_string) = ' || length(l_string));
    dbms_output.put_line('lengthb(l_string) = ' || lengthb(l_string));
    dbms_output.put_line('concat(l_string, l_string2) = ' || concat(l_string, l_string2));
end;
/
-- ==============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">ascii(l_char) = 65
chr(l_code) = A
initcap(l_string) = Bonjour Tout Le Monde
lower(l_string) = bonjour tout le monde
upper(l_string) = BONJOUR TOUT LE MONDE
lpad(l_string, 5) =     Bonjour tout le monde
lpad(l_string, 5, *) = ****Bonjour tout le monde
rpad(l_string, 5) = Bonjour tout le monde
rpad(l_string, 5, *) = Bonjour tout le monde****
ltrim(l_string3, ' ') = ReadyDev
rtrim(l_string3, ' ') =     ReadyDev
substr(l_string, 1, 7) = Bonjour
substr(l_string, 8) =  tout le monde
replace(l_string, Bonjour, Bienvenue) = Bienvenue tout le monde
instr(l_string, l_char2) = 2
instr(l_string, l_char2, 3) = 5
instr(l_string, l_char2, 1, 2) = 5
instr(l_string, l_char2, 1, 3) = 10
instr(l_string, l_char2, -1, 1) = 18
instrb(l_string, l_char2) = 2
instrb(l_string, l_char2, 3) = 5
instrb(l_string, l_char2, 1, 2) = 5
instrb(l_string, l_char2, 1, 3) = 10
instrb(l_string, l_char2, -1, 1) = 18
length(l_string) = 21
lengthb(l_string) = 21
concat(l_string, l_string2) = Bonjour tout le monde ! Bienvenue sur ReadyDev</pre></div></div><br><h2 class="Title7 GTitle2" id="Oracle-Database-Creer-un-tableau-varray"><a class="Link9" href="#Oracle-Database">Créer un tableau varray</a></h2><br><b>Varray </b>est une structure de données qui permet de stocker une collection séquentielle de taille fixe d'éléments du même type. Un varray est utilisé pour stocker une collection ordonnée de données. Tous les varrays sont constitués d'emplacements de mémoire contigus. L'adresse la plus basse correspond au premier élément et l'adresse la plus haute au dernier élément.<br><br><h3 class="Title8 GTitle3">script.sql</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">-- ==============================================
set serveroutput on;
-- ==============================================
declare
    type t_stringlist is varray(5) of varchar(10);
    l_digits t_stringlist := t_stringlist('Un', 'Deux', 'Trois', 'Quatre', 'Cinq');
    l_count integer:= l_digits.count;
-- ==============================================
begin
    for i in 1..l_count loop
        dbms_output.put_line(l_digits(i));
    end loop;
end;
/
-- ==============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">Un
Deux
Trois
Quatre
Cinq</pre></div></div><br><h2 class="Title7 GTitle2" id="Oracle-Database-Creer-une-procedure-stockee"><a class="Link9" href="#Oracle-Database">Créer une procédure stockée</a></h2><br>En informatique, dans la technologie des bases de données, une <b>procédure stockée</b> (ou stored procedure en anglais) est un ensemble d'instructions SQL précompilées, stockées dans une base de données et exécutées sur demande par le SGBD qui manipule la base de données. Les procédures stockées peuvent être lancées par un utilisateur, un administrateur DBA ou encore de façon automatique par un événement déclencheur (de l'anglais "trigger"). Il existe des procédures stockées pour ce qui est de la manipulation de données comme pour le 'tuning de base'.<br><br><h3 class="Title8 GTitle3">script.sql</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">-- ==============================================
set serveroutput on;
-- ==============================================
create procedure p_hello as
-- ==============================================
begin
    dbms_output.put_line('Bonjour tout le monde');
end;
/
-- ==============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Oracle-Database-Executer-une-procedure-stockee"><a class="Link9" href="#Oracle-Database">Exécuter une procédure stockée</a></h2><br><h3 class="Title8 GTitle3">script.sql</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">-- ==============================================
execute p_hello;
-- ==============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">Bonjour tout le monde</pre></div></div><br><h2 class="Title7 GTitle2" id="Oracle-Database-Appeler-une-procedure-stockee"><a class="Link9" href="#Oracle-Database">Appeler une procédure stockée</a></h2><br><h3 class="Title8 GTitle3">script.sql</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">-- ==============================================
set serveroutput on;
-- ==============================================
begin
    p_hello;
end;
/
-- ==============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">Bonjour tout le monde</pre></div></div><br><h2 class="Title7 GTitle2" id="Oracle-Database-Supprimer-une-procedure-stockee"><a class="Link9" href="#Oracle-Database">Supprimer une procédure stockée</a></h2><br><h3 class="Title8 GTitle3">script.sql</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">-- ==============================================
drop procedure p_hello;
-- ==============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Oracle-Database-Creer-une-procedure-non-stockee"><a class="Link9" href="#Oracle-Database">Créer une procédure non stockée</a></h2><br><h3 class="Title8 GTitle3">script.sql</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">-- ==============================================
set serveroutput on;
-- ==============================================
declare
-- ==============================================
procedure p_hello is
-- ==============================================
begin
    dbms_output.put_line('Bonjour tout le monde'); 
end;
-- ==============================================
begin 
    p_hello; 
end; 
/
-- ==============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">Bonjour tout le monde</pre></div></div><br><h2 class="Title7 GTitle2" id="Oracle-Database-Creer-une-procedure-avec-des-entrees-et-des-sorties"><a class="Link9" href="#Oracle-Database">Créer une procédure avec des entrées et des sorties</a></h2><br><h3 class="Title8 GTitle3">script.sql</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">-- ==============================================
set serveroutput on;
-- ==============================================
declare
    a number;
    b number;
    c number;
-- ==============================================
procedure p_min(x in number, y in number, z out number) is
-- ==============================================
begin
    if (x &lt; y) then 
        z := x; 
    else 
        z := y; 
    end if;
end;
-- ==============================================
begin 
    a := 23; 
    b := 45; 
    p_min(a, b, c); 
    dbms_output.put_line('p_min(a, b, c) = ' || c); 
end; 
/
-- ==============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">p_min(a, b, c) = 23</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Oracle-SQL-Developer"><a class="Link3" href="#">Oracle SQL Developer</a></h1><div class="Body3"><br><b>Oracle SQL Developer</b> est un environnement de développement intégré gratuit qui simplifie le développement et la gestion d'Oracle Database dans les déploiements traditionnels et cloud. SQL Developer propose un développement complet de bout en bout de vos applications PL/SQL, une feuille de calcul pour exécuter des requêtes et des scripts, une console DBA pour gérer la base de données, une interface de rapports, une solution complète de modélisation de données et une plateforme de migration pour déplacer votre Bases de données tierces vers Oracle.<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Oracle-SQL-Developer-Installer-l-environnement-JDK-8-sous-Windows"><a class="Link9" href="#Oracle-SQL-Developer">Installer l'environnement JDK 8 sous Windows</a></h2><br><h3 class="Title8 GTitle3">Télécharger JDK 8</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.oracle.com/java/technologies/javase/javase-jdk8-downloads.html">https://www.oracle.com/java/technologies/javase/javase-jdk8-downloads.html</a><br><br><b>jdk-8u291-windows-x64.exe</b><br><br><h3 class="Title8 GTitle3">Installer JDK 8</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">jdk-8u291-windows-x64.exe
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
Tester
Connexion</pre></div></div><br><h3 class="Title8 GTitle3">Ouvrir une feuille de calcul SQL</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">Oracle connexions
MY_CONNECTION
Clic droit
Ouvrir une feuille de calcul SQL</pre></div></div><br><h3 class="Title8 GTitle3">Exécuter une requête SQL</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">MY_CONNECTION
Feuille de calcul

select * from v$version;

Clic droit
Exécuter l'instruction (F9)</pre></div></div><br><h2 class="Title7 GTitle2" id="Oracle-SQL-Developer-Executer-un-nouveau-script"><a class="Link9" href="#Oracle-SQL-Developer">Exécuter un nouveau script</a></h2><br><h3 class="Title8 GTitle3">Exécuter un nouveau script</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">Fichier
Ouvrir
Nom du fichier -&gt; script.sql
Ouvrir
Exécuter un script (F5)
Connexion -&gt; MY_CONNEXION
OK</pre></div></div><br><h2 class="Title7 GTitle2" id="Oracle-SQL-Developer-Executer-un-script-existant"><a class="Link9" href="#Oracle-SQL-Developer">Exécuter un script existant</a></h2><br><h3 class="Title8 GTitle3">Exécuter un script existant</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">Fichier
Ouvrir
Nom du fichier -&gt; script.sql
Ouvrir
Exécuter un script (F5)</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="OCILIB"><a class="Link3" href="#">OCILIB</a></h1><div class="Body3"><br><b>OCILIB </b>est un driver C/C++ open source et multiplateforme qui offre un accès efficace aux bases de données Oracle. La bibliothèque OCILIB offre une API riche, complète et facile à utiliser sur toutes les plateformes Oracle. Elle est écrite en code ISO C99 pur avec une prise en charge native ISO C Unicode et fournit également une API C++ écrite en standard C++03. Elle permet une productivité élevée et encapsule OCI (Oracle Call Interface) qui est le wrapper OCI le plus complet disponible. OCILIB est développé par Vincent Rogier.<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="OCILIB-Installer-l-environnement-OCILIB-sous-Windows"><a class="Link9" href="#OCILIB">Installer l'environnement OCILIB sous Windows</a></h2><br><h3 class="Title8 GTitle3">Télécharger OCILIB</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://github.com/vrogier/ocilib/releases">https://github.com/vrogier/ocilib/releases</a><br><br><b>ocilib-4.7.3-windows.zip</b><br><br><h3 class="Title8 GTitle3">Extraire OCILIB</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">ocilib-4.7.3-windows.zip
Clic droit
Extraire vers ocilib-4.7.3-windows\</pre></div></div><br><h2 class="Title7 GTitle2" id="OCILIB-Compiler-un-projet-OCILIB"><a class="Link9" href="#OCILIB">Compiler un projet OCILIB</a></h2><br><h3 class="Title8 GTitle3">Configurer les variables d'environnement</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">::===============================================
set "PATH=winlibs-x86_64-posix-seh-gcc-11.1.0-llvm-12.0.0-mingw-w64-9.0.0-r2\mingw64\bin;%PATH%"
set "PATH=ocilib-4.7.3-windows\lib64;%PATH%"
::===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Compiler le projet</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">g++ -std=gnu++11  -c main.cpp -o main.o -Iocilib-4.7.3-windows\include
g++ -std=gnu++11  -o rdcpp.exe main.o  -Locilib-4.7.3-windows\lib64 -lociliba -locilibw</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Borland-C---Builder"><a class="Link3" href="#">Borland C++ Builder</a></h1><div class="Body3"><br><b>Borland C++Builder</b> est un logiciel de développement rapide d'applications (RAD) conçu par Borland qui reprend les mêmes concepts, la même interface et la même bibliothèque que Delphi en utilisant le langage C++. Il permet de créer rapidement des applications Win32, Win64, MacOS, iOS, Android, ainsi qu'une interface graphique avec son éditeur de ressources. Utilisant en interne le compilateur Clang, ll est compatible avec la version de norme ISO C++ C++17.<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Borland-C---Builder-Installer-l-envrionnement-Borland-C---Builder-sous-Windows"><a class="Link9" href="#Borland-C---Builder">Installer l'envrionnement Borland C++ Builder sous Windows</a></h2><br><h3 class="Title8 GTitle3">Télécharger Borland C++ Builder</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://archive.org/details/BorlandC5.02">https://archive.org/details/BorlandC5.02</a><br><br><b>BORLAND C++.zip</b><br><br><h3 class="Title8 GTitle3">Extraire Borland C++ Builder</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">BORLAND C++.zip
Clic droit
Extraire vers BORLAND C++\</pre></div></div><br><h3 class="Title8 GTitle3">Installer Borland C++</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="batchfile">BORLAND C++
BORLAND C
SETUP.EXE
Borland C++ 5.02
INSTALL.TXT -&gt; Next
Fermer -&gt; Fichier
Cocher -&gt; Typical
Next
Location of Borland C++ -&gt; C:\BC5
Location of Borland C++ Default Desktop -&gt; C:\BC5\BIN
Source Drive -&gt; C
Windows Directory -&gt; C:\WINDOWS
Next
Database Location -&gt; C:\Program Files\Borland\Common Files\BDE
Configuration Location -&gt; C:\Program Files\Borland\Common Files\BDE
Cocher -&gt; Maintain configuration to support existing Win3.1 applications
Next
BDE Location -&gt; C:\BDE32
Next
Install
OK
Reboot -&gt; OK
README.TXT -&gt; Next
Fermer -&gt; Fichier
OK
Registration -&gt; Next
OK</pre></div></div><br></div></div></div></div><br>