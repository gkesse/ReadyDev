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
Feuille de secours -&gt; Imprimer</pre></div></div><br></div></div></div></div><br>