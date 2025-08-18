<div class="GAccess1 Access1">
<a class="GAccess2 Access2" href="/home">Accueil</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels">Tutoriels</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels#vcs">Gestion de versions</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels/vcs/git-pour-les-professionnels">Git pour les Professionnels</a></div><div class="GParallax1 Parallax1">
<div class="Parallax2" style="background-image: url(&quot;/data/img/defaults/binary.png&quot;);">
<div class="Parallax3"><a href="#" class="Parallax4">Git pour les Professionnels</a></div>
</div>
<div class="Parallax5" style="background-color: rgb(128, 51, 0);"><br><b>Git </b>s'impose de plus en plus comme la norme de facto pour la gestion du contrôle de version dans le développement logiciel moderne.
Développé à l'origine par <b>Linus Torvalds</b> comme système de contrôle de version pour le noyau Linux en remplacement du système de contrôle de version propriétaire <b>BitKeeper</b>, Git a depuis conquis la majeure partie du monde open source et est également utilisé par de nombreuses organisations pour leurs projets privés et propriétaires.
Ce tutoriel est pensé pour vous donner des recettes pratiques pour l'utilisation quotidienne de Git. Ces recettes peuvent être utilisées directement ou comme source d'inspiration. Ce tutoriel se veut aborder le modèle de données Git à travers des recettes pratiques et des explications détaillées pour vous permettre de mieux comprendre son fonctionnement interne. Ce tutoriel aborde les sujets suivants :<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Utilisation de l'historique. Avec Git, tout l'historique est stocké localement. Vous pouvez effectuer des recherches dans l'historique, l'afficher, trouver le dernier commit sur une branche donnée, et bien plus encore ;</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Utilisation efficace des branches grâce aux options et stratégies pour les pousser, les tirer et les fusionner ;</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Stockage et extraction de métadonnées supplémentaires dans le dépôt Git.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Reprise après sinistre : locale et globale.</div>
</div><br>Le guide de contrôle de version Git vous fournit des instructions précises, étape par étape, pour diverses opérations Git courantes et moins courantes. Ce tutoriel facilitera votre travail quotidien avec Git en fournissant des solutions aux problèmes courants, des conseils et astuces utiles, ainsi que des explications détaillées sur leur fonctionnement.&nbsp;<br><br><div class="GSummary1"><div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#premiers-pas">Premiers pas</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#bases-de-git">Bases de Git</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#demonstration">Démonstration</a>
</div>
</div><br></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="premiers-pas">Premiers pas</a>
</h1>
<div class="Section6"><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#premiers-pas_installation-de-git--binaires-">Installation de Git (binaires)</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#premiers-pas_installation-de-git--sources-">Installation de Git (sources)</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#premiers-pas_configuration-de-git">Configuration de Git</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#premiers-pas_aide-sur-une-commande-git">Aide sur une commande Git</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="premiers-pas_installation-de-git--binaires-" href="#premiers-pas">Installation de Git (binaires)</a>
</h2><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (yum, install) pour installer Git sous Fedora.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ sudo yum install git
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (apt, install) pour installer Git sous Ubuntu.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ sudo apt install git
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On suit les instructions suivantes pour installer Git sous Mac.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
- On télécharge l'installateur de Git pour Mac,
  A l'adresse (https://git-scm.com/downloads/mac)
- On lance l'installateur de Git sous Mac.
- On suit les instructions pour installer Git sous Mac.
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On suit les instructions suivantes pour installer Git sous Windows.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Il s'agit d'un projet appelé (Git for Windows), également appelé (msysGit), distinct de Git lui-même.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le programme d'installation inclut une version en ligne de commande de Git ainsi que l'interface graphique.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Il fonctionne également bien avec Powershell et configure une mise en cache des identifiants fiable et des paramètres CRLF cohérents.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
- On télécharge l'installateur de Git pour Windows,
  A l'adresse (https://git-scm.com/downloads/win)
- On lance l'installateur de Git sous Windows.
- On suit les instructions pour installer Git sous Windows.
...</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="premiers-pas_installation-de-git--sources-" href="#premiers-pas">Installation de Git (sources)</a>
</h2><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (yum, install) pour installer les dépendances nécessaires à l'installation de Git depuis les sources sous Fedora.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ sudo yum install curl-devel expat-devel gettext-devel \
openssl-devel zlib-devel
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (apt, install) pour installer les dépendances nécessaires à l'installation de Git depuis les sources sous Ubuntu.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ sudo apt install libcurl4-gnutls-dev libexpat1-dev gettext \
libz-dev libssl-dev
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On se rend à l'adresse (<a class="GLink3 Link4" style=" color: lime;" href="https://www.kernel.org/pub/software/scm/git/" target="_blank">https://www.kernel.org/pub/software/scm/git/</a>) pour récupérer le sources de la dernière archive tar étiquetée de la version de Git sur le site (Kernel.org).<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On peut aussi récupérer la dernière archive tar étiquetée de la version de Git sur le site (GitHub.org) à l'adresse (<a class="GLink3 Link4" style=" color: lime;" href="https://github.com/git/git/tags" target="_blank">https://github.com/git/git/tags</a>).</div>
</div><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (tar, zxf) pour décompresser l'archive de Git.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (cd) pour se déplacer dans le dossier Git décompressé.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (make, configure) pour générer le script de configuration (configure) de Git.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute le script (configure, prefix) pour initialiser le répertoire d'installation de Git.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (make, all, doc, info) pour construire les binaires Git et sa documentation.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (make, install) pour installer les binaires Git et sa documentation sur le système.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ tar -zxf git-1.9.1.tar.gz
$ cd git-1.9.1
$ make configure
$ ./configure --prefix=/usr
$ make all doc info
$ sudo make install install-doc install-html install-info
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On peut exécuter la commande (git, clone) pour mettre à jour les sources de Git à partir du dossier Git décompressé.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git clone git://git.kernel.org/pub/scm/git/git.git
...</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="premiers-pas_configuration-de-git" href="#premiers-pas">Configuration de Git</a>
</h2><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, config, global, user.name) pour configurer le nom de l'utilisateur (John Doe) ayant effectué les modifications.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, config, global, user.email) pour configurer l'adresse email de l'utilisateur (johndoe@example.com) ayant effectué les modifications.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">L'option (global) permet d'enregistrer les configurations dans le répertoire d'accueil (HOME) de l'utilisateur courant à l'emplacement (~/.gitconfig) ou (~/.config/git/config) sous Linux.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">L'option (system) permet d'enregistrer les configurations dans le répertoire des configurations système à l'emplacement (/etc/gitconfig) sous Linux.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">L'option (local) permet d'enregistrer les configurations dans le répertoire Git du dépôt courant à l'emplacement (.git/config) sous Linux.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git config --global user.name "John Doe"
$ git config --global user.email johndoe@example.com
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, config, global, core.editor) pour configurer l'éditeur Git pour les messages de commit.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Git utilisera l'éditeur par défaut du système si cette opération n'est pas effectuée.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git config --global core.editor emacs
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, config, list) pour lister les configurations Git.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git config --list
...
user.name=John Doe
user.email=johndoe@example.com
color.status=auto
color.branch=auto
color.interactive=auto
color.diff=auto
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, config, user.name) pour afficher le nom de l'utilisateur Git courant.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On peut procéder de la même façon pour vérifier la valeur d'une clé quelconque.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git config user.name
...
John Doe
...</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="premiers-pas_aide-sur-une-commande-git" href="#premiers-pas">Aide sur une commande Git</a>
</h2><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On peut exécuter la commande (git, help, COMMAND) pour obtenir l'aide sur une commande Git.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On peut exécuter la commande (git, COMMAND, help) pour obtenir l'aide sur une commande Git.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On peut exécuter la commande (man, git, COMMAND) pour obtenir l'aide sur une commande Git sous Linux.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git help &lt;verb&gt;
$ git &lt;verb&gt; --help
$ man git-&lt;verb&gt;
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, help, config) pour obtenir l'aide sur la commande (git, config).</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git help config
...</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="bases-de-git">Bases de Git</a>
</h1>
<div class="Section6"><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#bases-de-git_initialisation-du-repertoire-git">Initialisation du répertoire Git</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#bases-de-git_indexation-de-fichiers">Indexation de fichiers</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#bases-de-git_clonage-de-depot">Clonage de dépôt</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#bases-de-git_affichage-de-l-etat">Affichage de l'état</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#bases-de-git_gestion-de-fichiers-a-ignorer">Gestion de fichiers à ignorer</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#bases-de-git_affichage-des-differences">Affichage des différences</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#bases-de-git_valider-les-modifications">Valider les modifications</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#bases-de-git_suppression-de-fichiers">Suppression de fichiers</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#bases-de-git_renommage-de-fichiers">Renommage de fichiers</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#bases-de-git_affichage-de-l-historique-des-commits">Affichage de l'historique des commits</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#bases-de-git_annulation-du-dernier-commit">Annulation du dernier commit</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#bases-de-git_suppression-d-un-fichier-de-la-zone-d-indexation">Suppression d'un fichier de la zone d'indexation</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#bases-de-git_suppression-des-modifications-locales">Suppression des modifications locales</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#bases-de-git_gestion-des-serveurs-distants">Gestion des serveurs distants</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#bases-de-git_gestion-des-tags">Gestion des tags</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#bases-de-git_gestion-des-alias">Gestion des alias</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="bases-de-git_initialisation-du-repertoire-git" href="#bases-de-git">Initialisation du répertoire Git</a>
</h2><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, init) pour initialiser le répertoire courant comme un répertoire Git afin de pouvoir le suivre dans Git.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Cette commande crée un nouveau sous-répertoire nommé (.git) dans le répertoire courant pour gérer le suivi des fichiers dans Git.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">À ce stade, aucun élément de votre projet n'est encore suivi.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git init
...</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="bases-de-git_indexation-de-fichiers" href="#bases-de-git">Indexation de fichiers</a>
</h2><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, add, REGEX) pour indexer les fichiers selon le modèle (*.c).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, add, FILE) pour indexer le fichier (LICENSE).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, commit, m) pour valider les modifications avec le message de commit (initial project version).<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Les modifications sont validées dans un instantané.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Seuls les modifications indexées par la commande (git, add) seront présentes dans cet instantané.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git add *.c
$ git add LICENSE
$ git commit -m 'initial project version'
...</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="bases-de-git_clonage-de-depot" href="#bases-de-git">Clonage de dépôt</a>
</h2><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, clone) pour cloner le dépôt (libgit2).<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Cela nous permet de pouvoir contribuer au projet (libgit2).<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, clone) fait une copie complète de la quasi-totalité des données du dépôt distant et non une simple copie superficielle comme c'est le cas dans certains contrôleurs de version qui utilise la commande (checkout).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, clone) récupère chaque version de chaque fichier de l'historique du projet. Cela signifie que si le disque de votre serveur est corrompu, vous pouvez souvent utiliser presque n'importe quel clone sur n'importe quel client pour rétablir l'état du serveur lors du clonage (vous risquez de perdre certains hooks côté serveur, mais toutes les données versionnées seront conservées). Ce qui n'est pas possible dans certains contrôleurs de version.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Cela crée un répertoire nommé (libgit2), initialise un répertoire (.git) à l'intérieur, récupère toutes les données de ce dépôt et extrait une copie de travail de la dernière version.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Si vous accédez au nouveau répertoire (libgit2), vous y trouverez les fichiers du projet, prêts à être utilisés.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Il est possible de cloner le dépôt dans un répertoire autre que (libgit2) en spécifiant le (nouveau répertoire) comme option de ligne de commande.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git clone https://github.com/libgit2/libgit2
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, clone) pour cloner le dépôt (libgit2) dans le répertoire (mylibgit).</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git clone https://github.com/libgit2/libgit2 mylibgit
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On jette un coup d'oeil sur la figure suivante pour comprendre le cycle de vie des fichiers suivis dans Git.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, add) sur un fichier à l'état (Untracked, Non suivi) fait passé le fichier à l'état (Staged, Indexé, Suivi, Mise en scène, Préparé).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, commit) sur un fichier à l'état (Staged, Indexé, Suivi, Mise en scène, Préparé) fait passer le fichier à l'état (Unmodified, Non modifié).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">L'opération (Edit the file, édition d'un fichier) sur un fichier à l'état (Unmodified, Non modifié) fait passer le fichier à l'état (Modified, Modifié).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, add) sur un fichier à l'état (Modified, Modifié) fait passer le fichier à l'état (Staged, Indexé, Suivi, Mise en scène, Préparé).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, rm) sur un fichier à l'état (Unmodified, Non modifié) fait passer le fichier à l'état (Untracked, Non suivi).</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="bases-de-git_affichage-de-l-etat" href="#bases-de-git">Affichage de l'état</a>
</h2><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, status) pour afficher l'état du répertoire de travail.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Cela permet de déterminer l'état dans lequel se trouve chaque fichier du répertoire de travail.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">L'expression (On branch master) indique la branche sur laquelle vous vous trouvez et vous informe qu'elle n'a pas divergé de la même branche sur le serveur. Pour l'instant, cette branche est toujours « master », ce qui est la valeur par défaut.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">L'expression (nothing to commit, working directory clean) indique que votre répertoire de travail est propre ; autrement dit, il ne contient aucun fichier suivi ni modifié. Git ne voit aucun fichier non suivi, sinon ils seraient listés ici.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git status
...
On branch master
nothing to commit, working directory clean
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (echo) pour créer un fichier (README) avec le texte (My Project).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, status) pour afficher l'état du répertoire de travail.<br><br>On constate que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le fichier (README) n'est pas suivi, car il se trouve sous la rubrique (Untracked files, Fichiers non suivis) dans la de l'état du répertoire de travail.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Être non suivi signifie que Git voit un fichier que vous n'aviez pas dans l'instantané précédent (commit).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Git ne commencera pas à l'inclure dans vos instantanés de commit tant que vous ne le lui aurez pas explicitement demandé.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Cela permet d'éviter que vous n'incluiez accidentellement des fichiers binaires générés ou d'autres fichiers que vous ne vouliez pas inclure.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ echo 'My Project' &gt; README
$ git status
...
On branch master
Untracked files:
   (use "git add &lt;file&gt;..." to include in what will be committed)
      README
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, add) pour indexer le fichier (README).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, status) pour afficher l'état du répertoire de travail.<br><br>On constate que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le fichier (README) est dans un état intermédiaire car il se trouve sous la rubrique (Changes to be committed, Modifications à valider).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Si vous validez à ce stade, la version du fichier (README) au moment de l'exécution de la commande (git, add) sera celle qui figurera dans l'historique.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git add README
$ git status
...
On branch master
Changes to be committed:
   (use "git reset HEAD &lt;file&gt;..." to unstage)
      new file: README
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (vim) pour modifier le fichier (benchmarks.rb) déjà suivi.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, status) pour afficher l'état du répertoire de travail.<br><br>On constate que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le fichier (benchmarks.rb) apparaît dans une section intitulée (Changes not staged for commit, Modifié mais non soumis à validation), ce qui signifie qu'un fichier suivi a été modifié dans le répertoire de travail, mais pas encore soumis à validation.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ vim benchmarks.rb
$ git status
...
On branch master
Changes to be committed:
   (use "git reset HEAD &lt;file&gt;..." to unstage)
      new file: README
Changes not staged for commit:
   (use "git add &lt;file&gt;..." to update what will be committed)
   (use "git checkout -- &lt;file&gt;..." to discard changes in working directory)
      modified: benchmarks.rb
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, add) pour indexer le fichier (benchmarks.rb).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, status) pour afficher l'état du répertoire de travail.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le fichier (benchmarks.rb) sera ajouté au prochain commit.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, add) est une commande polyvalente : elle permet de suivre les nouveaux fichiers, de les soumettre à validation et, par exemple, de marquer les fichiers en conflit de fusion comme résolus.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Il peut être plus judicieux de considérer la commande (git, add) comme (ajouter ce contenu au prochain commit) plutôt que comme (ajouter ce fichier au projet).<br><br>On constate que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Les deux fichiers (README, benchmarks.rb) sont indexés et seront inclus dans votre prochain commit.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git add benchmarks.rb
$ git status
...
On branch master
Changes to be committed:
   (use "git reset HEAD &lt;file&gt;..." to unstage)
      new file: README
      modified: benchmarks.
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (vim) pour modifier le fichier (benchmarks.rb).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, status) pour afficher l'état du répertoire de travail.<br><br>On suppose que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Vous souveniez d'une petite modification à apporter au fichier (benchmarks.rb) avant de le commiter. Vous l'ouvrez à nouveau, effectuez cette modification et vous êtes prêt à le commiter.<br><br>On constate que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le fichier (benchmarks.rb) est répertorié comme étant à la fois (modifié, indexé) car il se trouve sous la rubrique (Changes to be committed, Modifications à valider) et (modifié, non indexé) car il apparaît dans la section (Changes not staged for commit, Modifié mais non soumis à validation).<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Git indexe un fichier exactement tel qu'il est lorsque vous exécutez la commande (git, add).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Si vous effectuez un commit maintenant, la version de (benchmarks.rb) telle qu'elle était lors de la dernière exécution de la commande (git, add) sera celle qui apparaîtra dans le commit, et non la version du fichier telle qu'elle apparaît dans votre répertoire de travail lorsque vous exécutez la commande (git, commit).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Si vous modifiez un fichier après avoir exécuté la commande (git, add), vous devez relancer la commande (git, add) pour indexer la dernière version du fichier.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ vim benchmarks.rb
$ git status
...
On branch master
Changes to be committed:
   (use "git reset HEAD &lt;file&gt;..." to unstage)
      new file: README
      modified: benchmarks.rb
Changes not staged for commit:
   (use "git add &lt;file&gt;..." to update what will be committed)
   (use "git checkout -- &lt;file&gt;..." to discard changes in working directory)
      modified: benchmarks.rb
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, add) pour indexer le fichier (benchmarks.rb).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, status) pour afficher l'état du répertoire de travail.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, add) indexe la dernière version du fichier (benchmarks.rb).<br><br>On constate que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le fichier (benchmarks.rb) est répertorié comme étant uniquement (modifié, indexé) car il se trouve sous la rubrique (Changes to be committed, Modifications à valider).</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git add benchmarks.rb
$ git status
...
On branch master
Changes to be committed:
   (use "git reset HEAD &lt;file&gt;..." to unstage)
      new file: README
      modified: benchmarks.rb
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, status, s) pour afficher l'état court du répertoire de travail.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, status, s ou short) permet d'afficher l'état du répertoire de travail de manière plus courte et concise afin d'obtenir une sortie beaucoup plus simplifiée.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Une ligne d'information dans la sortie suit la structure (XY FILE).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Les colonnes (XY) indiquent l'état du fichier (FILE).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La colonne de gauche (X) indique l'état du fichier dans la zone d'indexation et la colonne de droite (Y) indique l'état du fichier dans le répertoire de travail.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Les nouveaux fichiers non suivis sont signalés par (?).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Les nouveaux fichiers ajoutés à la zone de préparation sont signalés par (A).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Les fichiers modifiés sont signalés par (M).<br><br>On constate que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le fichier (README, M) est à l'état (modifié, non indexé).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le fichier (Rakefile, MM) est à l'état (modifié, non indexé) et à l'état (modifié, indexé).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le fichier (lib/git.rb, A) est à l'état (nouveau fichier indexé).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le fichier (lib/simplegit.rb, M) est à l'état (modifié, non indexé).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le fichier (LICENSE.txt, ??) est à l'état (fichier non suivi).</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git status -s
$ git status --short
...
 M README
MM Rakefile
 A lib/git.rb
 M lib/simplegit.rb
?? LICENSE.txt
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On jette un coup d'oeil sur le tableau suivant pour comprendre la structure des informations de sortie de la commande (git, status, s).<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Une ligne d'information dans la sortie suit la structure (XY FILE).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Les colonnes (XY) indiquent l'état du fichier (FILE).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La colonne de gauche (X) indique l'état du fichier dans la zone d'indexation et la colonne de droite (Y) indique l'état du fichier dans le répertoire de travail.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
La colonne X ou Y peut prendre une des valeurs suivantes
-------------------------------------------------
[ ] = unmodified
[M] = modified
[T] = file type changed (regular file, symbolic link or submodule)
[A] = added
[D] = deleted
[R] = renamed
[C] = copied (if config option status.renames is set to "copies")
[U] = updated but unmerged
[?] = untracked
=================================================
Les colonnes X et Y peuvent prendre les valeurs suivantes
-------------------------------------------------
X          Y     Meaning
-------------------------------------------------
         [AMD]   not updated
M        [ MTD]  updated in index
T        [ MTD]  type changed in index
A        [ MTD]  added to index
D                deleted from index
R        [ MTD]  renamed in index
C        [ MTD]  copied in index
[MTARC]          index and work tree matches
[ MTARC]    M    work tree changed since index
[ MTARC]    T    type changed in work tree since index
[ MTARC]    D    deleted in work tree
            R    renamed in work tree
            C    copied in work tree
-------------------------------------------------
D           D    unmerged, both deleted
A           U    unmerged, added by us
U           D    unmerged, deleted by them
U           A    unmerged, added by them
D           U    unmerged, deleted by us
A           A    unmerged, both added
U           U    unmerged, both modified
-------------------------------------------------
?           ?    untracked
!           !    ignored
-------------------------------------------------
...</pre><br><br><h2 class="GTitle1 Title1">
<a class="Title2" id="bases-de-git_gestion-de-fichiers-a-ignorer" href="#bases-de-git">Gestion de fichiers à ignorer</a>
</h2><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (cat) pour afficher le contenu du fichier (.gitignore).<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le fichier (.gitignore) sert à configurer les fichiers que Git souhaite ignorer ; c'est-à-dire qu'il ne souhaite pas ajouter automatiquement, ni même afficher comme non suivis. - Il s'agit de fichiers générés automatiquement, tels que des fichiers journaux ou des fichiers produits par votre système de build.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Dans ce cas, vous pouvez créer un fichier (.gitignore) listant les modèles correspondants.<br><br>On constate que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La première ligne (*.[oa]) indique à Git d'ignorer tous les fichiers se terminant par (.o) ou (.a). Il s'agit de fichiers objets et archives pouvant résulter de la compilation de votre code.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La deuxième ligne (*~) indique à Git d'ignorer tous les fichiers se terminant par un tilde (~), utilisé par de nombreux éditeurs de texte comme Emacs pour marquer les fichiers temporaires.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Vous pouvez également inclure un répertoire (log, tmp ou pid) ; une documentation générée automatiquement ; etc.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Il est généralement judicieux de configurer un fichier (.gitignore) avant de commencer le projet afin d'éviter de valider accidentellement des fichiers indésirables dans votre dépôt Git.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ cat .gitignore
...
*.[oa]
*~
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On jette un coup d'oeil sur les instructions (.gitignore) suivantes pour comprendre la structure des règles de configuration du fichier (.gitignore).<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Les lignes (vides) ou commençant par (#) sont ignorées ; elles sont considérées comme des commentaires.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Les motifs (glob) standards fonctionnent.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Vous pouvez terminer les motifs par une barre oblique (/) pour spécifier un répertoire.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Vous pouvez interdire d'ignorer un motif en le commençant par un point d'exclamation (!).<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Les motifs (glob) sont comme des expressions régulières simplifiées utilisées par les shells.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Un astérisque (*) correspond à zéro ou plusieurs caractères.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">[abc] correspond à tout caractère entre crochets (ici a, b ou c).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Un point d'interrogation (?) correspond à un seul caractère.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Les crochets encadrant des caractères séparés par un tiret ([0-9]) correspondent à tout caractère entre eux (ici de 0 à 9).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Vous pouvez également utiliser deux astérisques pour correspondre à des répertoires imbriqués ; (a/**/z) correspond à (a/z), (a/b/z), (a/b/c/z), etc.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">GitHub propose une liste assez complète d'exemples de fichiers (.gitignore) pertinents pour des dizaines de projets et de langages sur (https://github.com/github/gitignore) si vous souhaitez un point de départ pour votre projet.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
# a comment - this is ignored
*.a # no .a files
!lib.a # but do track lib.a, even though you're ignoring .a files above
/TODO # only ignore the root TODO file, not subdir/TODO
build/ # ignore all files in the build/ directory
doc/*.txt # ignore doc/notes.txt, but not doc/server/arch.txt
...</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="bases-de-git_affichage-des-differences" href="#bases-de-git">Affichage des différences</a>
</h2><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (vim) pour modifier le fichier (README).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (vim) pour modifier le fichier (benchmarks.rb).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, add) pour indexer le fichier (README).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, status) pour afficher l'état du répertoire de travail.<br><br>On constate que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le fichier (README, Changes to be committed, new file) est nouveau et indexé.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le fichier (benchmarks.rb, Changes not staged for commit, modified) est modifié, mais pas encore indexé.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ vim README
$ vim benchmarks.rb
$ git add README
$ git status
...
On branch master
Changes to be committed:
   (use "git reset HEAD &lt;file&gt;..." to unstage)
      new file: README
Changes not staged for commit:
   (use "git add &lt;file&gt;..." to update what will be committed)
   (use "git checkout -- &lt;file&gt;..." to discard changes in working directory)
      modified: benchmarks.rb
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, diff) pour voir les modifications présentes dans la zone de travail.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, diff) permet de voir ce qui a été modifié mais pas encore indexé.<br><br>On constate que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le fichier (benchmarks.rb) possède des modifications dans le répertoire de travail.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git diff
...
diff --git a/benchmarks.rb b/benchmarks.rb
index 3cb747f..e445e28 100644
--- a/benchmarks.rb
+++ b/benchmarks.rb
@@ -36,6 +36,10 @@ def main
@commit.parents[0].parents[0].parents[0]
end
+ run_code(x, 'commits 1') do
+ git.commits.size
+ end
+
run_code(x, 'commits 2') do
log = git.commits('master', 15)
log.size
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, diff, staged) pour voir les modifications présentes dans la zone d'indexation par rapport au dernier commit.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, diff, staged) permet de voir ce qui a été indexé et qui sera intégré au prochain commit.<br><br>On constate que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le fichier (README) possède des modifications dans la zone d'indexation.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git diff --staged
...
diff --git a/README b/README
new file mode 100644
index 0000000..03902a1
Chapter 2 - Git Basics
22
--- /dev/null
+++ b/README
@@ -0,0 +1,4 @@
+My Project
+
+ This is my project and it is amazing.
+
...</pre><br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, add) pour indexer le fichier (benchmarks.rb).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (echo) pour modifier le fichier (benchmarks.rb).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, status) pour afficher l'état du répertoire de travail.<br><br>On constate que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le fichier (benchmarks.rb) est à l'état modifié indexé (Changes to be committed, modified) et à l'état modifié non indexé (Changes not staged for commit, modified).</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git add benchmarks.rb
$ echo '# test line' &gt;&gt; benchmarks.rb
$ git status
...
On branch master
Changes to be committed:
   (use "git reset HEAD &lt;file&gt;..." to unstage)
      modified: benchmarks.rb
Changes not staged for commit:
   (use "git add &lt;file&gt;..." to update what will be committed)
   (use "git checkout -- &lt;file&gt;..." to discard changes in working 
   directory)
      modified: benchmarks.rb
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, diff) pour voir les modifications présentes dans la zone de travail.<br><br>On constate que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le fichier (benchmarks.rb) possède des modifications dans la zone de travail.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, diff) renvoie le texte non indexé uniquement (+# test line).<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, diff) n'affiche pas toutes les modifications apportées depuis votre dernier commit, mais uniquement celles qui ne sont pas encore indexées.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Cela peut prêter à confusion, car si vous avez indexé toutes vos modifications, la commande (git, diff) ne vous affichera aucune sortie.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git diff
...
diff --git a/benchmarks.rb b/benchmarks.rb
index e445e28..86b2f7c 100644
--- a/benchmarks.rb
+++ b/benchmarks.rb
@@ -127,3 +127,4 @@ end
main()
##pp Grit::GitRuby.cache_client.stats
+# test line
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, diff, cached) pour voir les modifications présentes dans la zone d'indexation par rapport au répertoire de travail.<br><br>On constate que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le fichier (benchmarks.rb) possède des modifications dans la zone d'indexation.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, diff, cached) renvoie le texte indexé uniquement jusqu'à présent (+ run_code, ..., + end).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le texte non indexé (+# test line) n'est pas renvoyé.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git diff --cached
...
diff --git a/benchmarks.rb b/benchmarks.rb
index 3cb747f..e445e28 100644
--- a/benchmarks.rb
+++ b/benchmarks.rb
@@ -36,6 +36,10 @@ def main
@commit.parents[0].parents[0].parents[0]
end
+ run_code(x, 'commits 1') do
+ git.commits.size
+ end
+
run_code(x, 'commits 2') do
log = git.commits('master', 15)
log.size
...</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="bases-de-git_valider-les-modifications" href="#bases-de-git">Valider les modifications</a>
</h2><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, commit) pour valider les modifications.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Tout ce qui n'est pas encore indexé (c'est-à-dire, les fichiers que vous avez créés ou modifiés et sur lesquels vous n'avez pas exécuté la commande (git, add) depuis leur modification) ne sera pas inclus dans ce commit. Ils resteront comme des fichiers modifiés dans le répertoire de travail.<br><br>On suppose que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La dernière fois que vous avez exécuté la commande (git, status), vous avez constaté que tout était indexé ; vous êtes donc prêt à valider vos modifications.<br><br>On constate que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, commit) lance l'éditeur de votre choix.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le message de validation par défaut contient la dernière sortie de la commande (git, status) commentée, avec une ligne vide au-dessus.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Vous pouvez supprimer ces commentaires et saisir votre message de validation, ou les laisser pour vous aider à mémoriser ce que vous validez.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">L'éditeur lancé par la commande (git, commit) est défini par la variable d'environnement ($EDITOR) de votre shell, généralement vim ou emacs.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Vous pouvez configurer l'éditeur de votre choix avec la commande (git, config, global, core.editor).</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git commit
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On jette un coup d'oeil sur le texte suivant pour visualiser la structure du message de commit par défaut.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
# Please enter the commit message for your changes. Lines starting
# with '#' will be ignored, and an empty message aborts the commit.
# On branch master
# Changes to be committed:
# new file: README
# modified: benchmarks.rb
#
~
~
~
".git/COMMIT_EDITMSG" 9L, 283C
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, commit, m) pour valider les modifications avec le message de commit (Story 182: Fix benchmarks for speed).<br><br>On constate que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le commit vous a fourni des informations sur lui-même : la branche sur laquelle vous avez effectué le commit (master), sa somme de contrôle SHA-1 (463dc4f), le nombre de fichiers modifiés (2 files changed) et des statistiques sur les lignes ajoutées (2 insertions(+)) et supprimées (, 0 deletions(-)).<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le commit enregistre l'instantané que vous avez configuré dans votre zone d'indexation.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Tout ce qui n'a pas indexé reste inchangé. Vous pouvez effectuer un autre commit pour l'ajouter à votre historique.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Chaque commit enregistre un instantané de votre projet que vous pouvez consulter ou comparer ultérieurement.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git commit -m "Story 182: Fix benchmarks for speed"
...
[master 463dc4f] Story 182: Fix benchmarks for speed
   2 files changed, 2 insertions(+), 0 deletions(-)
   create mode 100644 README
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, status) pour afficher l'état du répertoire de travail.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, commit, a, m) pour indexer automatiquement tous les fichiers suivis et valider les modifications avec le message de commit (added new benchmarks). On constate que :</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, status) indique que :</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le fichier (benchmarks.rb) est à l'état modifié non indexé ; il s'agit d'un fichier déjà suivi qui possède des modifications non indexées ; il est le seul fichier dans cet état. On constate que :</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, commit, a, m) indique que :</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Un seul fichier a été automatiquement indexé et validé (1 file changed) à la suite de l'exécution de la commande (git, commit, a, m).</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git status
...
On branch master
Changes not staged for commit:
   (use "git add &lt;file&gt;..." to update what will be committed)
   (use "git checkout -- &lt;file&gt;..." to discard changes in working directory)
      modified: benchmarks.rb
no changes added to commit (use "git add" and/or "git commit -a")
...
$ git commit -a -m 'added new benchmarks'
...
[master 83e38c7] added new benchmarks
   1 file changed, 5 insertions(+), 0 deletions(-)
...</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="bases-de-git_suppression-de-fichiers" href="#bases-de-git">Suppression de fichiers</a>
</h2><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (rm) pour supprimer le fichier (grit.gemspec).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, status) pour afficher l'état du répertoire de travail.<br><br>On constate que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le fichier (grit.gemspec) est à l'état supprimé non indexée.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ rm grit.gemspec
$ git status
...
On branch master
Changes not staged for commit:
   (use "git add/rm &lt;file&gt;..." to update what will be committed)
   (use "git checkout -- &lt;file&gt;..." to discard changes in working directory)
      deleted: grit.gemspec
      no changes added to commit (use "git add" and/or "git commit -a")
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, rm) pour supprimer le fichier (grit.gemspec).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, status) pour afficher l'état du répertoire de travail.<br><br>On constate que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, rm) exécute la commande (rm) en interne.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le fichier (grit.gemspec) est à l'état supprimé indexé.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, rm) supprime le fichier du disque dur ; puis indexe sa suppression dans Git.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Lors de votre prochain commit, le fichier disparaîtra et ne sera plus suivi.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Si vous l'avez déjà modifié et indexé, vous devez forcer sa suppression avec l'option (-f). Il s'agit d'une mesure de sécurité permettant d'éviter la suppression accidentelle de données non encore enregistrées dans un instantané et irrécupérables depuis Git.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git rm grit.gemspec
...
rm 'grit.gemspec'
...
$ git status
...
On branch master
Changes to be committed:
   (use "git reset HEAD &lt;file&gt;..." to unstage)
      deleted: grit.gemspec
...
$ git rm -f grit.gemspec
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, rm, cached) pour supprimer le fichier (README) du suivi tout en le conservant.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Cela conserve le fichier sur le disque dur sans que Git ne le suive.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git rm --cached README
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, rm) pour supprimer les fichiers (*.log ).<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Cette commande supprime tous les fichiers qui se terminent par (.log).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La barre oblique inverse (\) devant le (*) est nécessaire car Git gère sa propre extension de nom de fichier, en plus de celle de votre shell.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Cette commande supprime tous les fichiers portant l'extension (.log) dans le répertoire (log/).</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git rm log/\*.log
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, rm) pour supprimer les fichiers (*~).<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Cette commande supprime tous les fichiers qui se terminent par (~).</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git rm \*~
...</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="bases-de-git_renommage-de-fichiers" href="#bases-de-git">Renommage de fichiers</a>
</h2><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, mv) pour renommer le fichier (file_from) en (file_to).<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Cette commande renomme le fichier sur le disque dur ; puis indexe son renommage dans Git.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Contrairement à certains contrôleurs de version, Git ne suit pas explicitement les déplacements de fichiers.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Si vous renommez un fichier dans Git, aucune métadonnée n'est stockée dans Git pour indiquer que vous avez renommé le fichier ; cependant, Git est assez intelligent pour le détecter a posteriori.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git mv file_from file_to
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, mv) pour renommer le fichier (README.md) en (README).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, status) pour afficher l'état du répertoire de travail.<br><br>On constate que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le fichier (README.md, Changes to be committed, renamed) est à l'état renommé indexé.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git mv README.md README
$ git status
...
On branch master
Changes to be committed:
   (use "git reset HEAD &lt;file&gt;..." to unstage)
      renamed: README.md -&gt; README
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On jette un coup d'oeil sur les commandes suivantes pour comprendre l'équivalence de la commande (git, mv).<br><br>On constate que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute une commande (mv, FILE_1, FILE_2).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute une commande (git, rm, FILE_1).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute une commande (git, add, FILE_2).</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ mv README.md README
$ git rm README.md
$ git add README
...</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="bases-de-git_affichage-de-l-historique-des-commits" href="#bases-de-git">Affichage de l'historique des commits</a>
</h2><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, clone) pour clone le dépôt (simplegit-progit).</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
git clone https://github.com/schacon/simplegit-progit
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, log) pour afficher l'historique des commits dans le dépôt (simplegit-progit) afin de revenir en arrière pour voir ce qui s'est passé.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, log) liste les commits effectués dans ce dépôt par ordre chronologique inverse, c'est-à-dire que les commits les plus récents apparaissent en premier.<br><br>On constate que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, log) liste chaque commit avec : - sa somme de contrôle SHA-1 (ca82a6dff817ec66f44342007202690a93763949), - le nom et l'adresse e-mail de l'auteur (Scott Chacon ), - la date de rédaction (Mon Mar 17 21:52:11 2008 -0700) - et le message de commit (changed the version number).</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git log
...
commit ca82a6dff817ec66f44342007202690a93763949
Author: Scott Chacon &lt;schacon@gee-mail.com&gt;
Date: Mon Mar 17 21:52:11 2008 -0700
   
   changed the version number

commit 085bb3bcb608e1e8451d4b2432f8ecbe6306e7e7
Author: Scott Chacon &lt;schacon@gee-mail.com&gt;
Date: Sat Mar 15 16:40:33 2008 -0700
   
   removed unnecessary test

commit a11bef06a3f659402fe7563abf99ad00de2209e6
Author: Scott Chacon &lt;schacon@gee-mail.com&gt;
Date: Sat Mar 15 10:31:28 2008 -0700
   
   first commit
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, log, p) pour afficher les différences des commits.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On affiche la différence introduite à chaque commit avec l'option (-p).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On limite la sortie aux deux derniers commits avec l'option (-2).<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">L'option (-p) est très utile pour la révision de code ou pour parcourir rapidement le déroulement d'une série de commits ajoutés par un collaborateur.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git log -p -2
commit ca82a6dff817ec66f44342007202690a93763949
Author: Scott Chacon &lt;schacon@gee-mail.com&gt;
Date: Mon Mar 17 21:52:11 2008 -0700

   changed the verison number

diff --git a/Rakefile b/Rakefile
index a874b73..8f94139 100644
--- a/Rakefile
+++ b/Rakefile
@@ -5,7 +5,7 @@ require 'rake/gempackagetask'
spec = Gem::Specification.new do |s|
s.platform = Gem::Platform::RUBY
s.name = "simplegit"
- s.version = "0.1.0"
+ s.version = "0.1.1"
s.author = "Scott Chacon"
s.email = "schacon@gee-mail.com"
s.summary = "A simple gem for using Git in Ruby code."

commit 085bb3bcb608e1e8451d4b2432f8ecbe6306e7e7
Author: Scott Chacon &lt;schacon@gee-mail.com&gt;
Date: Sat Mar 15 16:40:33 2008 -0700

   removed unnecessary test

diff --git a/lib/simplegit.rb b/lib/simplegit.rb
index a0a60ae..47c6340 100644
--- a/lib/simplegit.rb
+++ b/lib/simplegit.rb
@@ -18,8 +18,3 @@ class SimpleGit
end
end
-
-if $0 == __FILE__
- git = SimpleGit.new
- puts git.show
-end
\ No newline at end of file
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, log, stat) pour afficher les statistiques des commits.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, log, stat) permet d'afficher sous chaque entrée de commit la liste des fichiers modifiés, le nombre de fichiers modifiés et le nombre de lignes ajoutées et supprimées.<br><br>On constate que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Pour le commit (ca82a6dff817ec66f44342007202690a93763949) on a :</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La liste des fichiers modifiés (Rakefile). - Le nombre de fichiers modifiés (1 file changed).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le nombre de lignes ajoutées (1 insertion(+)).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le nombre de lignes supprimées (1 deletion(-)).</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git log --stat
commit ca82a6dff817ec66f44342007202690a93763949
Author: Scott Chacon &lt;schacon@gee-mail.com&gt;
Date: Mon Mar 17 21:52:11 2008 -0700

   changed the verison number

Rakefile | 2 +-
1 file changed, 1 insertion(+), 1 deletion(-)

commit 085bb3bcb608e1e8451d4b2432f8ecbe6306e7e7
Author: Scott Chacon &lt;schacon@gee-mail.com&gt;
Date: Sat Mar 15 16:40:33 2008 -0700

   removed unnecessary test

lib/simplegit.rb | 5 -----
1 file changed, 5 deletions(-)

commit a11bef06a3f659402fe7563abf99ad00de2209e6
Author: Scott Chacon &lt;schacon@gee-mail.com&gt;
Date: Sat Mar 15 10:31:28 2008 -0700

   first commit

README | 6 ++++++
Rakefile | 23 +++++++++++++++++++++++
lib/simplegit.rb | 25 +++++++++++++++++++++++++
3 files changed, 54 insertions(+)
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, log, pretty, oneline) pour afficher les commits sur une seule ligne.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Cette option permet d'afficher chaque commit sur une seule ligne.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Cette option est utile si vous traitez de nombreux commits.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git log --pretty=oneline
...
ca82a6dff817ec66f44342007202690a93763949 changed the verison number
085bb3bcb608e1e8451d4b2432f8ecbe6306e7e7 removed unnecessary test
a11bef06a3f659402fe7563abf99ad00de2209e6 first commit
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, log, pretty, format) pour afficher les commits selon le format (%h - %an, %ar : %s).<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Cette option permet de préciser votre propre format de sortie de journal.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Cette option est particulièrement utile lorsque vous générez une sortie pour l'analyse automatique.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Comme vous spécifiez le format, vous savez qu'il ne changera pas avec les mises à jour de Git.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git log --pretty=format:"%h - %an, %ar : %s"
ca82a6d - Scott Chacon, 6 years ago : changed the version number
085bb3b - Scott Chacon, 6 years ago : removed unnecessary test
a11bef0 - Scott Chacon, 6 years ago : first commit
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On jette un coup d'oeil sur le tableau suivant pour comprendre les options de la chaine de format dans la commande (git, log, pretty, format).<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">L'auteur est la personne qui a initialement rédigé le travail (%an).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le validateur (commiter) est la personne qui l'a appliqué en dernier (%cn).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Ainsi, si vous envoyez un correctif à un projet et qu'un des membres principaux l'applique, vous en êtes tous deux crédités : vous en tant qu'auteur, et le membre principal en tant que validateur.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git log --pretty=format:"%h - %an, %ar : %s"
...
ca82a6d - Scott Chacon, 6 years ago : changed the version number
...
=============================================
Option--------Description de la sortie
=============================================
%H------------Hachage de validation
%h------------Hachage de validation abrégé
%T------------Hachage d'arborescence
%t------------Hachage d'arborescence abrégé
%P------------Hachage parent
%p------------Hachage parent abrégé
%an-----------Nom de l'auteur
%ae-----------Email de l'auteur
%ad-----------Date de l'auteur (format respectant l'option -date=)
%ar-----------Date de l'auteur, relative
%cn-----------Nom du commiter
%ce-----------Email du commiter
%cd-----------Date du commiter
%cr-----------Date du commiter, relative
%s------------Sujet
=============================================
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, log, pretty, format, graph) pour afficher les commits avec un graphe de branches et fusions.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">L'option (--graph) permet d'ajouter un joli petit graphique ASCII affichant l'historique de vos branches et de vos fusions.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git log --pretty=format:"%h %s" --graph
...
* 2d3acf9 ignore errors from SIGCHLD on trap
* 5e3ee11 Merge branch 'master' of git://github.com/dustin/grit
|\
| * 420eac9 Added a method for getting the current branch.
* | 30e367c timeout code and tests
* | 5a09431 add timeout protection to grit
* | e1193f8 support for heads with slashes in them
|/
* d6016bc require time for xmlschema
* 11d191e Merge branch 'defunkt' into local
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On jette un coup d'oeil sur le tableau suivant pour résumer quelques options de la commande (git, log).</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
=============================================
Option----------------Description
=============================================
-p--------------------Afficher le correctif appliqué à chaque commit.
--stat----------------Afficher les statistiques des fichiers modifiés à 
                      chaque commit.
--shortstat-----------Afficher uniquement les lignes de 
                      modifications/insertions/suppressions de la 
                      commande --stat.
--name-only-----------Afficher la liste des fichiers modifiés 
                      après le commit.
--name-status---------Afficher également la liste des fichiers concernés, 
                      avec les informations ajoutées/modifiées/supprimées.
--abbrev-commit-------Afficher uniquement les premiers caractères de la 
                      somme de contrôle SHA-1 au lieu des 40.
--relative-date-------Afficher la date au format relatif 
                      (par exemple," 2 weeks ago") au lieu du format complet.
--graph---------------Afficher un graphique ASCII de l'historique des  
                      branches et des fusions à côté 
                      de la sortie du journal.
--pretty--------------Afficher les commits dans un format alternatif. 
                      Les options incluent oneline, short, full, fuller et 
                      format (où vous spécifiez votre propre format).
=============================================
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, log, since) pour afficher la liste des commits effectués depuis les deux dernières semaines (2.weeks).<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Cette commande fonctionne avec de nombreux formats.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Vous pouvez spécifier une date précise, comme (2008-01-15).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Vous pouvez spécifier une date relative, comme (Il y a 2 ans, 1 jour et 3 minutes, 2 years 1 day 3 minutes ago).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Vous pouvez également filtrer la liste pour sélectionner les commits correspondant à certains critères de recherche.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">L'option (--author) vous permet de filtrer sur un auteur spécifique.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">L'option (--grep) vous permet de rechercher des mots-clés dans les messages de commit.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Si vous souhaitez spécifier à la fois les options (--author) et (--grep), vous devez ajouter l'option (--all-match), sinon la commande recherchera les commits utilisant l'une ou l'autre.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git log --since=2.weeks
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, log, S) pour afficher les commits ayant ajouté ou supprimé la chaîne (function_name) dans le code.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">L'option (-S) permet d'afficher uniquement les commits ayant introduit une modification dans le code ayant ajouté ou supprimé la chaîne (function_name).<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Cette commande permet, par exemple, de trouver le dernier commit ayant ajouté ou supprimé une référence à une fonction spécifique.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La dernière option vraiment utile à passer à la commande (git, log) comme filtre est un chemin de fichier (FILE).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">En spécifiant un répertoire ou un nom de fichier, vous pouvez limiter la sortie du journal aux commits ayant introduit une modification dans ces fichiers.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Il s'agit toujours de la dernière option et elle est généralement précédée de deux tirets (--) pour séparer les chemins des options.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git log --Sfunction_name
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On jette un coup d'oeil sur le tableau suivant pour résumer quelques options pour limiter la sortie de la commande (git, log).</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
================================================
Option-----------------Description
=============================================
-N---------------------Afficher uniquement les N derniers commits
--since, --after-------Limiter les commits à ceux effectués 
                       après la date spécifiée
--until, --before------Limiter les commits à ceux effectués 
                       avant la date spécifiée
--author---------------Afficher uniquement les commits dont l'entrée 
                       auteur correspond à la chaîne spécifiée
--committer------------Afficher uniquement les commits dont l'entrée 
                       committer correspond à la chaîne spécifiée
--grep-----------------Afficher uniquement les commits dont le message de 
                       commit contient la chaîne
-S---------------------Afficher uniquement les commits qui ajoutent ou 
                       suppriment du code correspondant à la chaîne
================================================
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, log, pretty, author, since, before, no-merges) pour afficher les commits modifiant les fichiers de test (t/), validés par (Junio C Hamano), n'étant pas des fusions, au mois d'octobre 2008.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">L'auteur (gitster, Junio C Hamano ) correspond à (Junio C Hamano).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Les dates depuis le (01 octobre 2008) et avant le (01 novembre 2008) correspondent à la date (au mois d'octobre 2008).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le répertoire (t/) correspond au répertoire des fichiers de test.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">L'option (--no-merges) correspond à un commit qui n'a pas plusieurs parents ; c'est-à-dire qui n'est pas un point de fusion.<br><br>On constate que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Parmi les près de 40 000 commits dans l'historique du code source de Git, cette commande affiche les 6 qui correspondent à ces critères.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git log --pretty="%h - %s" --author=gitster --since="2008-10-01" \
--before="2008-11-01" --no-merges -- t/
...
5610e3b - Fix testcase failure when extended attributes are in use
acd3b9e - Enhance hold_lock_file_for_{update,append}() API
f563754 - demonstrate breakage of detached checkout with symbolic link HEAD
d1a43f2 - reset --hard/read-tree --reset -u: remove unmerged new paths
51a94af - Fix "checkout --track -b newbranch" on detached HEAD
b0ad11e - pull: allow "git pull origin $something:$current_branch" into 
          an unborn branch
...</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="bases-de-git_annulation-du-dernier-commit" href="#bases-de-git">Annulation du dernier commit</a>
</h2><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, commit, amend) pour annuler et remplacer le dernier commit.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Cette commande utilise votre zone d'indexation pour le commit de remplacement.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Si vous n'avez apporté aucune modification depuis votre dernier commit (par exemple, si vous exécutez cette commande immédiatement après le commit précédent), votre instantané sera identique, et seul votre message de commit sera modifié.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le même éditeur de messages de commit se lance, mais il contient déjà le message de votre commit précédent.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Vous pouvez modifier le message comme d'habitude, mais cela écrase votre commit précédent.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git commit --amend
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, commit, m) pour valider les modifications avec le message (initial commit).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, add) pour indexer le fichier (forgotten_file).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, commit, amend) pour annuler et remplacer le dernier commit.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Vous obtenez un seul commit.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le second commit remplace les résultats du premier.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git commit -m 'initial commit'
$ git add forgotten_file
$ git commit --amend
...</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="bases-de-git_suppression-d-un-fichier-de-la-zone-d-indexation" href="#bases-de-git">Suppression d'un fichier de la zone d'indexation</a>
</h2><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, add, .) pour indexer tous les fichiers modifiés.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, status) pour afficher l'état du répertoire de travail.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, add, .) prend en compte les nouveaux fichiers lors de l'indexation.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, add, .) ne prend pas en compte les fichiers ignorés dans le fichier (.gitignore) lors de l'indexation. Ce qui est tout à fait correct.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, add, .) ne prend pas en compte les fichiers supprimés sans la commande (git, rm) lors de l'indexation dans la version (Git, 1.x).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, add, .) prend en compte les fichiers supprimés sans la commande (git, rm) lors de l'indexation dans la version (Git, 2.x).<br><br>On constate que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le fichier (README.md) est renommé et indexé.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le fichier (benchmarks.rb) est modifié et indexé.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, status) vous rappelle comment annuler l'indexation d'un fichier juste en dessous du texte (Changes to be committed, Modifications à valider).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Il est indiqué d'utiliser la commande (git, reset, HEAD, FILE) pour annuler l'indexation.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git add .
$ git status
...
On branch master
Changes to be committed:
   (use "git reset HEAD &lt;file&gt;..." to unstage)
      renamed: README.md -&gt; README
      modified: benchmarks.rb
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, reset, HEAD) pour annuler l'indexation du fichier (benchmarks.rb).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, status) pour afficher l'état du répertoire de travail.<br><br>On suppose que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Vous aviez saisi accidentellement la commande (git, add, .) précédemment et indexé tous les deux fichiers.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Vous souhaitiez valider les fichiers séparément pour des raisons d'ergonomie.<br><br>On constate que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le fichier (README.md) est renommé et indexé.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le fichier (benchmarks.md) est modifié et non indexé.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le fichier (README.md) est présent dans la zone d'indexation ; il sera pris en compte lors du prochain commit.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Tandis que, le fichier (benchmarks.md) est retiré de la zone d'indexation ; il ne sera pas pris en compte lors du prochain commit.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, reset) peut être dangereuse lorsqu'elle est appelée avec l'option (--hard) ; elle affecte la zone d'indexation et le répertoire de travail.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, reset) sans option n'est pas dangereux ; elle n'affecte que la zone d'indexation.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git reset HEAD benchmarks.rb
...
Unstaged changes after reset:
M benchmarks.rb
...
$ git status
...
On branch master
Changes to be committed:
   (use "git reset HEAD &lt;file&gt;..." to unstage)
      renamed: README.md -&gt; README
Changes not staged for commit:
   (use "git add &lt;file&gt;..." to update what will be committed)
   (use "git checkout -- &lt;file&gt;..." to discard changes in working directory)
      modified: benchmarks.rb
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On jette un coup d'oeil sur une partie de la sortie de la commande (git, status) précédente pour comprendre comment annuler les modifications apportées à un fichier non indexé.<br><br>On suppose que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Vous ne souhaitez pas conserver les modifications apportées au fichier (benchmarks.rb).<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, status) vous indique également comment procéder en dessous du texte (Changes not staged for commit, Modifications non indexées pour la validation).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Il est indiqué d'utiliser la commande (git, checkout, FILE) pour annuler les modifications non indexés.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
Changes not staged for commit:
   (use "git add &lt;file&gt;..." to update what will be committed)
   (use "git checkout -- &lt;file&gt;..." to discard changes in working directory)
      modified: benchmarks.rb
...</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="bases-de-git_suppression-des-modifications-locales" href="#bases-de-git">Suppression des modifications locales</a>
</h2><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, checkout) pour annuler les modifications non indexées du fichier (benchmarks.rb).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, status) pour afficher l'état du répertoire de travail.<br><br>On constate que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le fichier (benchmarks.rb) n'apparaît plus dans la sortie de la commande (git, status).<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, checkout, FILE) est dangereuse ; toutes les modifications apportées à ce fichier sont perdues ; vous avez simplement copié un autre fichier par-dessus ; n'utilisez jamais cette commande, sauf si vous êtes absolument certain de ne pas vouloir conserver ce fichier.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Si vous souhaitez conserver les modifications apportées à ce fichier, mais que vous devez tout de même vous en débarrasser pour l'instant, vous pouvez utiliser le stockage et la création de branches qui sont généralement de meilleures méthodes.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Tout ce qui est validé dans Git peut presque toujours être récupéré. Même les commits qui se trouvaient sur des branches supprimées ou écrasés par la commande (git, commit, amend) peuvent être récupérés.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Cependant, tout ce que vous perdez et qui n'a jamais été validé est susceptible de ne jamais être revu.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git checkout -- benchmarks.rb
$ git status
...
On branch master
Changes to be committed:
   (use "git reset HEAD &lt;file&gt;..." to unstage)
      renamed: README.md -&gt; README
...</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="bases-de-git_gestion-des-serveurs-distants" href="#bases-de-git">Gestion des serveurs distants</a>
</h2><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, clone) pour cloner le dépôt (ticgit).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (cd) pour se déplacer dans le dépôt (ticgit).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, remote) pour afficher les noms des serveurs distants.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, remote) répertorie les noms de chaque serveur distant.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Si vous avez cloné votre dépôt, vous devriez au moins voir (origin), le nom par défaut que Git attribue au serveur du dépôt cloné.<br><br>On constate que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le nom (origin) apparait suite à l'exécution de la commande (git, remote).</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git clone https://github.com/schacon/ticgit
...
Cloning into 'ticgit'...
remote: Reusing existing pack: 1857, done.
remote: Total 1857 (delta 0), reused 0 (delta 0)
Receiving objects: 100% (1857/1857), 374.35 KiB | 268.00 KiB/s, done.
Resolving deltas: 100% (772/772), done.
Checking connectivity... done.
...
$ cd ticgit
$ git remote
...
origin
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, remote, v) pour afficher les noms et les URLs des serveurs distants.<br><br>On constate que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le nom (origin) est utilisé pour récupérer (fetch) des données du dépôt (ticgit, https://github.com/schacon/ticgit).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le nom (origin) est utilisé pour pousser (push) des données sur le dépôt (ticgit, https://github.com/schacon/ticgit).</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git remote -v
...
Origin https://github.com/schacon/ticgit (fetch)
Origin https://github.com/schacon/ticgit (push)
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (cd) pour se déplacer dans le dépôt (grit).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, remote, v) pour afficher les noms et les URLs des serveurs distants.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Si vous possédez plusieurs URLs enregistrées, la commande (git, remote, v) les répertorie toutes.<br><br>Cela signifie que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous pouvons facilement récupérer les contributions de n'importe lequel de ces utilisateurs.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Nous pouvons également être autorisés à envoyer des contributions à un ou plusieurs d'entre eux.<br><br>On constate que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Les utilisateurs distants utilisent divers protocoles (https, git).</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ cd grit
$ git remote -v
...
bakkdoor https://github.com/bakkdoor/grit (fetch)
bakkdoor https://github.com/bakkdoor/grit (push)
cho45 https://github.com/cho45/grit (fetch)
cho45 https://github.com/cho45/grit (push)
defunkt https://github.com/defunkt/grit (fetch)
defunkt https://github.com/defunkt/grit (push)
koke git://github.com/koke/grit.git (fetch)
koke git://github.com/koke/grit.git (push)
origin git@github.com:mojombo/grit.git (fetch)
origin git@github.com:mojombo/grit.git (push)
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, remote) pour afficher les noms des serveurs distants.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, remote, add) pour configurer le nom (pb) associé au dépôt (ticgit, https://github.com/paulboone/ticgit).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, remote, v) pour afficher les noms des serveurs distants.<br><br>On constate que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le nom (origin) pointe vers le dépôt (ticgit, https://github.com/schacon/ticgit).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le nom (pb) pointe vers le dépôt (ticgit, https://github.com/paulboone/ticgit).<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Vous pouvez désormais utiliser la chaîne (pb) en ligne de commande à la place de l'URL complète (https://github.com/paulboone/ticgit).</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git remote
...
origin
...
$ git remote add pb https://github.com/paulboone/ticgit
$ git remote -v
...
origin https://github.com/schacon/ticgit (fetch)
origin https://github.com/schacon/ticgit (push)
pb https://github.com/paulboone/ticgit (fetch)
pb https://github.com/paulboone/ticgit (push)
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, fetch) pour récupérer toutes les informations dont Paul dispose mais qui ne sont pas encore dans votre répertoire de travail.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La branche principale de Paul est désormais accessible localement sous le nom (pb/master).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Vous pouvez la fusionner avec l'une de vos branches ou extraire une branche locale à ce stade pour l'inspecter.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git fetch pb
...
remote: Counting objects: 43, done.
remote: Compressing objects: 100% (36/36), done.
remote: Total 43 (delta 10), reused 31 (delta 5)
Unpacking objects: 100% (43/43), done.
From https://github.com/paulboone/ticgit
* [new branch] master -&gt; pb/master
* [new branch] ticgit -&gt; pb/ticgit
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On jette un coup d'oeil sur la commande (git, fetch) suivante pour comprendre sa structure.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, fetch) permet de récupérer des données à partir d'un dépôt distant (REMOTE_NAME).<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Vous devriez alors disposer de références à toutes les branches de ce projet distant (REMOTE_NAME), que vous pouvez fusionner ou inspecter à tout moment.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Si vous clonez un dépôt (REMOTE_URL), la commande ajoute automatiquement ce dépôt distant sous le nom « origin ».</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Ainsi, la commande (git, fetch, origin) récupère tout nouveau travail envoyé sur ce serveur depuis son clonage (ou sa dernière récupération).<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, fetch) récupère les données vers votre dépôt local.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Elle ne les fusionne pas automatiquement avec votre travail ni ne modifie celui sur lequel vous travaillez actuellement.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Vous devez les fusionner manuellement avec votre travail lorsque vous êtes prêt.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Si vous avez configuré une branche locale pour suivre une branche distante, vous pouvez utiliser la commande (git, pull) pour récupérer automatiquement puis fusionner une branche distante avec votre branche actuelle.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Ce processus peut être plus simple et plus confortable pour vous.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Par défaut, la commande (git, clone) configure automatiquement votre branche (master) locale pour suivre la branche (master) distante, ou le nom de la branche par défaut sur le serveur cloné.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">L'exécution de (git, pull) récupère généralement les données du serveur cloné et tente automatiquement de les intégrer au code en cours.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git fetch REMOTE_NAME
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, push) pour pousser les commits sur la branche (master) du dépôt (origin, ticgit).<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le clonage d'un dépôt configure généralement les deux noms (master, branche principale) et (origin, serveur du dépôt cloné).<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, push) ne fonctionne que si vous avez cloné depuis un serveur auquel vous avez accès en écriture et si personne n'a effectué de commande (git, push) entre-temps.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Si vous et une autre personne clonez simultanément et que cette dernière effectue une commande (git, push) avant, puis que vous effectuez une commande (git, push) après, votre commande (git, push) sera rejetée à juste titre.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Vous devrez d'abord extraire son travail (1) et l'intégrer au vôtre (2) avant de pouvoir effectuer une commande (git, push, 3).</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git push origin master
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, remote, show) pour afficher les informations sur les branches du dépôt (origin, ticgit).<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, remote, show) permet d'afficher l'URL du dépôt distant (ticgit) ainsi que les informations sur les branches de suivi.<br><br>On constate que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, remote, show) vous indique que si vous êtes sur la branche (master, local) et que vous exécutez la commande (git, pull), la fusion sera automatique dans la branche (master, remote) du dépôt distant après avoir récupéré toutes les références distantes.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, remote, show) affiche aussi toutes les références distantes extraites (master, dev-branch).<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">C'est un exemple simple que vous êtes susceptible de rencontrer.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Cependant, si vous utilisez Git plus fréquemment, vous obtiendrez beaucoup plus d'informations grâce à la commande (git, remote, show).</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git remote show origin
...
* remote origin
  Fetch URL: https://github.com/schacon/ticgit
  Push URL: https://github.com/schacon/ticgit
  HEAD branch: master
  Remote branches:
     master          tracked
     dev-branch      tracked
  Local branch configured for 'git pull':
     master merges with remote master
  Local ref configured for 'git push':
     master pushes to master (up to date)
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, remote, show) pour afficher les informations sur les branches du dépôt (origin, complex-project).<br><br>On constate que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, remote, show) indique la branche vers laquelle les modifications sont automatiquement poussées lorsque vous exécutez la commande (git, push) sur certaines branches (dev-branch, markdown-strip, master).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, remote, show) indique aussi les branches distantes du serveur que vous n'avez pas encore (issue-43 new, issue-45 new), celles qui ont été supprimées du serveur (issue-11) et celles qui sont automatiquement fusionnées (dev-branch, master) lorsque vous exécutez la commande (git, pull).</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git remote show origin
...
* remote origin
  URL: https://github.com/my-org/complex-project
  Fetch URL: https://github.com/my-org/complex-project
  Push URL: https://github.com/my-org/complex-project
  HEAD branch: master
  Remote branches:
     master                tracked
     dev-branch            tracked
     markdown-strip        tracked
     issue-43 new (next fetch will store in remotes/origin)
     issue-45 new (next fetch will store in remotes/origin)
     refs/remotes/origin/issue-11 stale (use 'git remote prune' to remove)
  Local branches configured for 'git pull':
     dev-branch            merges with remote dev-branch
     master                merges with remote master
  Local refs configured for 'git push':
     dev-branch            pushes to dev-branch (up to date)
     markdown-strip        pushes to markdown-strip (up to date)
     master                pushes to master (up to date)
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, remote, rename) pour renommer le nom de serveur de (pb, ticgit) à (paul, ticgit).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, remote) pour afficher les noms des serveurs distants.<br><br>On constate que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le nom de serveur (pb) est remplacé par (paul).<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, remote, rename) modifie également les noms de vos branches distantes ; ce qui était auparavant référencé dans (pb/master) est désormais dans (paul/master) ; ce qui est tout à fait correct.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git remote rename pb paul
$ git remote
...
origin
paul
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, remote, rm) pour supprimer le serveur distant (paul, ticgit) du répertoire de travail.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, remote, rm) peut être exécutée pour l'une des raisons suivantes (déplacement du serveur, désactivation d'un miroir particulier, ou encore l'arrêt d'un contributeur).</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git remote rm paul
$ git remote
...
origin
...</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="bases-de-git_gestion-des-tags" href="#bases-de-git">Gestion des tags</a>
</h2><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, tag) pour afficher la liste des tags (balises).<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, tag) liste les tags par ordre alphabétique.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">L'ordre dans lequel les tags apparaissent n'a pas de réelle importance.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git tag
...
v0.1
v1.3
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, tag, l) pour rechercher les tags (v1.8.5*).<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, tag, l) permet de rechercher des tags selon un modèle particulier.<br><br>On constate que :<br><br>Les tags affichés commencent par (v1.8.5).</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git tag -l 'v1.8.5*'
...
v1.8.5
v1.8.5-rc0
v1.8.5-rc1
v1.8.5-rc2
v1.8.5-rc3
v1.8.5.1
v1.8.5.2
v1.8.5.3
v1.8.5.4
v1.8.5.5
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, tag, a, m) pour créer le tag annoté (v1.4) avec l'annotation (my version 1.4).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, tag) pour afficher la liste des tags.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Git utilise deux principaux types de balises : les tags légers et les tags annotés.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Un tag léger ressemble beaucoup à une branche immuable : c'est juste un pointeur vers un commit spécifique.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Les tags annotés, quant à eux, sont stockées sous forme d'objets complets dans la base de données Git. Ils sont soumis à une somme de contrôle ; ils contiennent le nom, l'adresse email et la date du tagueur ; ils comportent un message d'annotation ; et peuvent être signées et vérifiées avec GNU Privacy Guard (GPG).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Il est généralement recommandé de créer des tags annotées pour disposer de toutes ces informations ; mais si vous souhaitez un tag temporaire ou si, pour une raison quelconque, vous ne souhaitez pas conserver les autres informations, des tags légers sont également disponibles.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git tag -a v1.4 -m 'my version 1.4'
$ git tag
...
v0.1
v1.3
v1.4
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, show) pour afficher les informations sur le tag (v1.4).<br><br>On constate que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, show) affiche les informations du tagueur (Ben Straub ), la date à laquelle le commit a été tagué (Sat May 3 20:19:12 2014, Sam. 3 mai 2014 20:19:12) et le message d'annotation (my version 1.4).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, show) affiche aussi les informations du commit (ca82a6dff817ec66f44342007202690a93763949), l'auteur du commit (Scott Chacon schacon@gee-mail.com), la date du commit (Mon Mar 17 21:52:11 2008, Lun. 17 mars 2008 21:52:11) et le message de commit (changed the verison number).</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git show v1.4
...
tag v1.4
Tagger: Ben Straub &lt;ben@straub.cc&gt;
Date: Sat May 3 20:19:12 2014 -0700

my version 1.4

commit ca82a6dff817ec66f44342007202690a93763949
Author: Scott Chacon &lt;schacon@gee-mail.com&gt;
Date: Mon Mar 17 21:52:11 2008 -0700
   changed the verison number
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, tag) pour créer le tag léger (v1.4-1w).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, tag) pour afficher la liste des tags.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Un tag léger est en fait de la somme de contrôle du commit stockée dans un fichier ; aucune autre information n'est conservée.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git tag v1.4-lw
$ git tag
...
v0.1
v1.3
v1.4
v1.4-lw
v1.5
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, show) pour afficher les informations sur le tag (v1.4-lw).<br><br>On constate que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, show) n'affiche aucune information supplémentaire sur le tag léger (v1.4-lw). Elle affiche simplement les informations du commit.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git show v1.4-lw
...
commit ca82a6dff817ec66f44342007202690a93763949
Author: Scott Chacon &lt;schacon@gee-mail.com&gt;
Date: Mon Mar 17 21:52:11 2008 -0700
   changed the verison number
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, log, pretty, oneline) pour afficher l'historique des commits sur une seule ligne.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Vous pouvez aussi taguer les commits après les avoir dépassés.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git log --pretty=oneline
...
15027957951b64cf874c3557a0f3547bd83b3ff6 Merge branch 'experiment'
a6b4c97498bd301d84096da251c98a07c7723e65 beginning write support
0d52aaab4479697da7686c15f77a3d64d9165190 one more thing
6d52a271eda8725415634dd79daabbc4d9b6008e Merge branch 'experiment'
0b7434d86859cc7b8c3d5e1dddfed66ff742fcbc added a commit function
4682c3261057305bdd616e23b64b0857d832627b added a todo file
166ae0c4d3f420721acbb115cc33848dfcc2121a started write support
9fceb02d0ae598e95dc970b74767f19372d61af8 updated rakefile
964f16d36dfccde844893cac5b347e7b3d44abbc commit the todo
8a5cbc430f1a9c3d00faaeffd07798508422908a updated readme
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, tag, a) pour créer le tag (v1.2) à partir du commit (9fceb02, updated rakefile).<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3"></div>
</div>

<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3"></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Vous pouvez spécifiez la somme de contrôle SHA-1 du commit (9fceb02d0ae598e95dc970b74767f19372d61af8, updated rakefile) ou une partie de celle-ci (9fceb02, updated rakefile) à la fin de la commande.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git tag -a v1.2 9fceb02
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, tag) pour afficher la liste des tags.<br><br>On constate que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le tag (v1.2) est créé.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git tag
...
v0.1
v1.2
v1.3
v1.4
v1.4-lw
v1.5
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, show) pour afficher les informations sur le tag (v1.2).<br><br>On constate que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, show) affiche les informations du tag (v1.2) avec le nom du tagueur (Scott Chacon ), la date à laquelle le commit a été tagué (Mon Feb 9 15:32:16 2009, Lun. 9 févr. 2009 15:32:16) et le message d'annotation (version 1.2).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, show) affiche aussi les informations du commit (9fceb02d0ae598e95dc970b74767f19372d61af8), l'auteur du commit (Magnus Chacon ), la date du commit (Sun Apr 27 20:43:35 2008, Dim. 27 avr. 2008 20:43:35) et le message de commit (updated rakefile).</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git show v1.2
...
tag v1.2
Tagger: Scott Chacon &lt;schacon@gee-mail.com&gt;
Date: Mon Feb 9 15:32:16 2009 -0800

version 1.2

commit 9fceb02d0ae598e95dc970b74767f19372d61af8
Author: Magnus Chacon &lt;mchacon@gee-mail.com&gt;
Date: Sun Apr 27 20:43:35 2008 -0700
   updated rakefile
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, push) pour pousser le tag (v1.5) sur le serveur distant (origin).<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, push) ne transfère pas les tags vers des serveurs distants.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Vous devrez pousser les tags vers un serveur distant après les avoir créées.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Ce processus est similaire au partage de branches distantes.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git push origin v1.5
...
Counting objects: 14, done.
Delta compression using up to 8 threads.
Compressing objects: 100% (12/12), done.
Writing objects: 100% (14/14), 2.05 KiB | 0 bytes/s, done.
Total 14 (delta 3), reused 0 (delta 0)
To git@github.com:schacon/simplegit.git
* [new tag] v1.5 -&gt; v1.5
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, push, tags) pour transférer tous les tags manquants vers le serveur distant (origin).<br><br>On constate que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Les tags (v1.4, v1.4-1w) ont été transférés sur le serveur distant (origin).<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Désormais, lorsque quelqu'un d'autre clone ou extrait des données de votre dépôt, il obtiendra également tous vos tags.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git push origin --tags
...
Counting objects: 1, done.
Writing objects: 100% (1/1), 160 bytes | 0 bytes/s, done.
Total 1 (delta 0), reused 0 (delta 0)
To git@github.com:schacon/simplegit.git
* [new tag] v1.4 -&gt; v1.4
* [new tag] v1.4-lw -&gt; v1.4-lw
...</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="bases-de-git_gestion-des-alias" href="#bases-de-git">Gestion des alias</a>
</h2><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, config, global, alias) pour créer l'alias (co) avec la valeur (checkout).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, config, global, alias) pour créer l'alias (br) avec la valeur (branch).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, config, global, alias) pour créer l'alias (ci) avec la valeur (commit).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, config, global, alias) pour créer l'alias (st) avec la valeur (status).<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Les alias évitent de saisir l'intégralité de chaque commande Git. Ils permettent de créer des raccourcis de commandes.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Au lieu de saisir la commande (git, commit), il vous suffit de saisir l'alias (git, ci).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">À mesure que vous utiliserez Git, vous utiliserez probablement d'autres commandes fréquemment ; n'hésitez pas à créer de nouveaux alias.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Cette technique peut également s'avérer très utile pour créer des commandes qui, selon vous, devraient exister.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Par exemple, pour corriger le problème d'ergonomie rencontré lors de la désindexation d'un fichier, vous pouvez ajouter votre propre alias de désindexation à Git.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git config --global alias.co checkout
$ git config --global alias.br branch
$ git config --global alias.ci commit
$ git config --global alias.st status
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, config, global, alias) pour créer l'alias (unstage) avec la valeur (reset HEAD --).<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, unstage) sera désormais présente dans notre environnement Git et nous permettra de supprimer un fichier de la zone d'indexation afin de le valider à partir d'un autre commit pour des raisons d'ergonomie.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git config --global alias.unstage 'reset HEAD --'
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, unstage) pour supprimer le fichier (fileA) de la zone d'indexation.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, reset, HEAD) pour supprimer le fichier (fileA) de la zone d'indexation.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Ces deux commandes sont équivalentes ; elles font exactement la même chose.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, unstage) semble être beaucoup plus claire ; car l'intention est indiquée dans le nom de la commande (unstage, désindexation).</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git unstage fileA
$ git reset HEAD fileA
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, config, global, alias) pour créer l'alias (last) avec la valeur (log -1 HEAD).<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, last) sera désormais présente dans notre environnement Git et nous permettra d'afficher le dernier commit.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git config --global alias.last 'log -1 HEAD'
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, last) pour afficher le dernier commit.<br><br>On constate que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le dernier commit est affiché.<br><br>On constate que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Git remplace simplement la nouvelle commande par l'alias que vous lui avez attribué.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git last
...
commit 66938dae3329c7aebe598c2246a8e6af90d04646
Author: Josh Goebel &lt;dreamer3@example.com&gt;
Date: Tue Aug 26 19:48:51 2008 +0800
   test for current head
   Signed-off-by: Scott Chacon &lt;schacon@example.com&gt;
...</pre><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">On exécute la commande (git, config, global, alias) pour créer l'alias (visual) avec la valeur (!gitk).<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Si vous pouvez souhaiter exécuter une commande externe plutôt qu'une sous-commande Git, commencez la commande par un caractère (!). Ceci est utile si vous souhaitez développer vos propres outils fonctionnant avec un dépôt Git.<br><br>On note que :<br><br></div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">La commande (git, visual) sera désormais présente dans notre environnement Git et nous permettra de lancer l'outil (gitk) depuis notre shell.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
$ git config --global alias.visual "!gitk"
...</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="demonstration">Démonstration</a>
</h1>
<div class="Section6"><br>Voir la démo sur LinkedIn:<br><br><a class="GLink3 Link4" style=" color: lime;" href="https://www.linkedin.com/posts/tia-gerard-kesse_s01-e01-d%C3%A9veloppement-linux-embarqu%C3%A9-projet-activity-7361569186667536384-ce4P?utm_source=share&amp;utm_medium=member_desktop&amp;rcm=ACoAABOftRsB0Rh0MlSyRYweX14f_pNxyDgEm70" target="_blank">https://www.linkedin.com/posts/tia-gerard-kesse_s01-e01-d%C3%A9veloppement-linux-embarqu%C3%A9-projet-activity-7361569186667536384-ce4P?utm_source=share&amp;utm_medium=member_desktop&amp;rcm=ACoAABOftRsB0Rh0MlSyRYweX14f_pNxyDgEm70</a><br><br></div>
</div>
</div>
</div><br>