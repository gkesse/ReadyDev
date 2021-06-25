<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Gestion de versions avec Git<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la gestion de verions avec <b>Git</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Introduction">Introduction</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Fondamentaux">Fondamentaux</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Installation">Installation</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Commandes">Commandes</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Indexation">Indexation</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Ignorance">Ignorance</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Historique">Historique</a></div></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>Git </b>est un outil de gestion de versions décentralisé.<br><br><div class="Img3 GImage"><img alt="/Tutoriels/Version_Control/Git/img/b_git.png" class="lazy entered loaded" data-src="/Tutoriels/Version_Control/Git/img/b_git.png" data-ll-status="loaded" src="/Tutoriels/Version_Control/Git/img/b_git.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Fondamentaux"><a class="Link3" href="#">Fondamentaux</a></h1><div class="Body3"><br>Les fondamentaux de Git.<br><br><div class="Content0 GSummary2"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Fondamentaux-Installer-l-environnement-Git-sous-Windows">Installer l'environnement Git sous Windows</a></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Installer-l-environnement-Git-sous-Windows"><a class="Link9" href="#Fondamentaux">Installer l'environnement Git sous Windows</a></h2><br><h3 class="Title8 GTitle3">Installer Git</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">sudo apt install git</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">Lecture des listes de paquets... Fait
Construction de l'arbre des dépendances
Lecture des informations d'état... Fait
...
git est déjà la version la plus récente (1:2.27.0-1ubuntu1.1).
0 mis à jour, 0 nouvellement installés, 0 à enlever et 0 non mis à jour.</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Afficher-l-aide-sur-toutes-les-commandes"><a class="Link9" href="#Fondamentaux">Afficher l'aide sur toutes les commandes</a></h2><br>Cette étape permet d'afficher une <b>aide rapide</b> sur toutes les commandes dispnibles sous Git.<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">git --help</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">usage: git [--version] [--help] [-C &lt;path&gt;] [-c &lt;name&gt;=&lt;value&gt;]
           [--exec-path[=&lt;path&gt;]] [--html-path] [--man-path] [--info-path]
           [-p | --paginate | -P | --no-pager] [--no-replace-objects] [--bare]
           [--git-dir=&lt;path&gt;] [--work-tree=&lt;path&gt;] [--namespace=&lt;name&gt;]
           &lt;command&gt; [&lt;args&gt;]

These are common Git commands used in various situations:

start a working area (see also: git help tutorial)
   clone             Clone a repository into a new directory
   init              Create an empty Git repository or reinitialize an existing one
...</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Afficher-l-aide-sur-une-commande-specifique"><a class="Link9" href="#Fondamentaux">Afficher l'aide sur une commande spécifique</a></h2><br>Cette étape permet d'afficher une <b>aide complète</b> sur une commande spécifique sous Git.<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sh">git help init

GIT-INIT(1)                     Git Manual                     GIT-INIT(1)

NAME
       git-init - Create an empty Git repository or reinitialize an
       existing one

SYNOPSIS
       git init [-q | --quiet] [--bare] [--template=&lt;template_directory&gt;]
                 [--separate-git-dir &lt;git dir&gt;] [--object-format=&lt;format]
                 [--shared[=&lt;permissions&gt;]] [directory]
...</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Initialiser-un-depot"><a class="Link9" href="#Fondamentaux">Initialiser un dépôt</a></h2><br>Cette étape permet de <b>transformer un répertoire local</b> en un dépôt Git. Suite à cela, Git crée un sous répertoire (.git) dans lequel il stocke l'historique des modifications.<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">git init</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">Initialized empty Git repository in /home/rpi4/Programs/ReadyTest/git/p01/.git/</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Configurer-le-nom-d-utilisateur"><a class="Link9" href="#Fondamentaux">Configurer le nom d'utilisateur</a></h2><br>Chaque modification Git est associée à un utilisateur. Cette étape permet de définir le <b>nom de l'utilisateur</b> sous Git.<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">git config --global user.name "Gerard KESSE"</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Configurer-l-email-d-utilisateur"><a class="Link9" href="#Fondamentaux">Configurer l'email d'utilisateur</a></h2><br>Git gère l'envoi de notifiactions vers une adresse email. Cette étape permet de définir l'<b>email de l'utilisateur</b> sous Git.<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">git config --global user.email "gerard.kesse@readydev.com"</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Configurer-l-editeur-par-defaut"><a class="Link9" href="#Fondamentaux">Configurer l'éditeur par défaut</a></h2><br>Git associe à chaque modification un commentaire. Cette étape permet de définir l'<b>éditeur de texte par défaut</b> sous Git.<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">git config --global core.editor "nano"</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Configurer-la-coloration"><a class="Link9" href="#Fondamentaux">Configurer la coloration</a></h2><br>Git produit une sortie pour chaque commande saisie. Cette étape permet d'autoriser la <b>coloration</b> lors de l'affichage de la sortie afin d'avoir un bon visuel.<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">git config --global color.ui "true"</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Configurer-la-sauvegarde-des-identifiants"><a class="Link9" href="#Fondamentaux">Configurer la sauvegarde des identifiants</a></h2><br>Git demande une authenfication pour certaines commandes saisies. Cette étape permet de <b>sauvegarder les identifiants</b> d'authentification sur la machine locale afin d'éviter la procédure d'authentification.<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">git config credential.helper store</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Lister-les-configurations"><a class="Link9" href="#Fondamentaux">Lister les configurations</a></h2><br>Cette étape permet d'afficher la <b>liste des configurations</b>.<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">git config --list</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">user.name=Gerard KESSE
user.email=gerard.kesse@readydev.com
core.editor=nano
color.ui=true
core.repositoryformatversion=0
core.filemode=true
core.bare=false
core.logallrefupdates=true</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Afficher-l-etat-du-depot"><a class="Link9" href="#Fondamentaux">Afficher l'état du dépôt</a></h2><br>Cette étape permet d'<b>afficher l'état</b> du dépôt Git<br><br><h3 class="Title8 GTitle3">Afficher l'état initial</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">git status</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">On branch master

No commits yet

nothing to commit (create/copy files and use "git add" to track)</pre></div></div><br><h3 class="Title8 GTitle3">Ajouter un nouveau fichier</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sh">README.md

Apprendre à utiliser Git.</pre></div></div><br><h3 class="Title8 GTitle3">Afficher le nouveau état</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">On branch master

No commits yet

Untracked files:
  (use "git add &lt;file&gt;..." to include in what will be committed)
        README.md

nothing added to commit but untracked files present (use "git add" to track)</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Indexer-un-fichier"><a class="Link9" href="#Fondamentaux">Indexer un fichier</a></h2><br>Cette étape permet de <b>pointer un fichier</b> dont les modifications devront être enregistrées.<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">git add README.md</pre></div></div><br><h3 class="Title8 GTitle3">Afficher l'état du dépôt</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">git status</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">On branch master

No commits yet

Changes to be committed:
  (use "git rm --cached &lt;file&gt;..." to unstage)
        new file:   README.md</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Commiter-les-modifications"><a class="Link9" href="#Fondamentaux">Commiter les modifications</a></h2><br>Cette étape permet de <b>valider les modifications</b> qui devront être poussées vers le dépôt Git.<br><br><h3 class="Title8 GTitle3">Commiter les modifications</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">git commit -m "Initial Commit"</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">[master (root-commit) ba7f121] Initial Commit
 1 file changed, 2 insertions(+)
 create mode 100644 README.md</pre></div></div><br><h3 class="Title8 GTitle3">Afficher l'état du dépôt</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sh">git status
<br>On branch master
nothing to commit, working tree clean</pre></div></div><br><h3 class="Title8 GTitle3">Modifier le fichier</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sh">README.md

Apprendre à utiliser Git.
Configurations de l'environnement de développement.</pre></div></div><br><h3 class="Title8 GTitle3">Afficher l'état du dépôt</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">git status</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">On branch master
Changes not staged for commit:
  (use "git add &lt;file&gt;..." to update what will be committed)
  (use "git restore &lt;file&gt;..." to discard changes in working directory)
        modified:   README.md

no changes added to commit (use "git add" and/or "git commit -a")</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Indexer-et-commiter-un-fichier"><a class="Link9" href="#Fondamentaux">Indexer et commiter un fichier</a></h2><br>Cette étape permet de <b>combiner 2 commandes en 1</b>, en commençant<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">git commit -a -m "Configuration de l'environnement de developpement"</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">[master b905c91] Configuration de l'environnement de developpement
 1 file changed, 1 insertion(+), 1 deletion(-)</pre></div></div><br><h3 class="Title8 GTitle3">Afficher l'état du dépôt</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">git status</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">On branch master
nothing to commit, working tree clean</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Indexation"><a class="Link3" href="#">Indexation</a></h1><div class="Body3"><br>L'indexation est l'action d'indiquer à Git les fichiers qu'il doit considérer lors de l'enregistrement des modifications.<br><br><div class="Content0 GSummary2"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Indexation-1---Indexer-un-fichier">1 - Indexer un fichier</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Indexation-2---Indexer-une-liste-de-fichiers">2 - Indexer une liste de fichiers</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Indexation-3---Indexer-un-groupe-de-fichiers">3 - Indexer un groupe de fichiers</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Indexation-4---Indexer-tous-les-fichiers">4 - Indexer tous les fichiers</a></div></div><br><h2 class="Title7 GTitle2" id="Indexation-1---Indexer-un-fichier"><a class="Link9" href="#Indexation">1 - Indexer un fichier</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">git add index.php</pre></div></div><br><h2 class="Title7 GTitle2" id="Indexation-2---Indexer-une-liste-de-fichiers"><a class="Link9" href="#Indexation">2 - Indexer une liste de fichiers</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">git add index.php styles.css</pre></div></div><br><h2 class="Title7 GTitle2" id="Indexation-3---Indexer-un-groupe-de-fichiers"><a class="Link9" href="#Indexation">3 - Indexer un groupe de fichiers</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">git add *.php</pre></div></div><br><h2 class="Title7 GTitle2" id="Indexation-4---Indexer-tous-les-fichiers"><a class="Link9" href="#Indexation">4 - Indexer tous les fichiers</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">git add --all</pre></div></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Ignorance"><a class="Link3" href="#">Ignorance</a></h1><div class="Body3"><br>L'ignorance est l'action d'indiquer à Git les fichiers qu'il doit ignorer lors de l'enregistrement des modifications.<br><br><div class="Content0 GSummary2"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Ignorance-1---Ignorer-un-fichier">1 - Ignorer un fichier</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Ignorance-1-1---Creer-un-fichier-log">1.1 - Créer un fichier log</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Ignorance-1-2---Afficher-l-etat-du-depot">1.2 - Afficher l'état du dépôt</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Ignorance-1-3---Ignorer-un-fichier">1.3 - Ignorer un fichier</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Ignorance-1-4---Afficher-l-etat-du-depot">1.4 - Afficher l'état du dépôt</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Ignorance-1-5---Indexer-tous-les-fichiers">1.5 - Indexer tous les fichiers</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Ignorance-1-6---Commiter-les-modifications">1.6 - Commiter les modifications</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Ignorance-1-7---Afficher-l-etat-du-depot">1.7 - Afficher l'état du dépôt</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Ignorance-2---Ignorer-un-dossier">2 - Ignorer un dossier</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Ignorance-2-1---Creer-un-repertoire-temporaire">2.1 - Créer un répertoire temporaire</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Ignorance-2-2---Afficher-l-etat-du-depot">2.2 - Afficher l'état du dépôt</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Ignorance-2-3---Ignorer-un-dossier">2.3 - Ignorer un dossier</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Ignorance-2-4---Afficher-l-etat-du-depot">2.4 - Afficher l'état du dépôt</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Ignorance-2-5---Commiter-les-modifications">2.5 - Commiter les modifications</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Ignorance-2-6---Afficher-l-etat-du-depot">2.6 - Afficher l'état du dépôt</a></div></div><br><h2 class="Title7 GTitle2" id="Ignorance-1---Ignorer-un-fichier"><a class="Link9" href="#Ignorance">1 - Ignorer un fichier</a></h2><br><h2 class="Title7 GTitle2" id="Ignorance-1-1---Creer-un-fichier-log"><a class="Link9" href="#Ignorance">1.1 - Créer un fichier log</a></h2><br><h3 class="Title8 GTitle3">log.txt</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">Création de fichier log.</pre></div></div><br><h2 class="Title7 GTitle2" id="Ignorance-1-2---Afficher-l-etat-du-depot"><a class="Link9" href="#Ignorance">1.2 - Afficher l'état du dépôt</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">git status</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">On branch master
Untracked files:
  (use "git add &lt;file&gt;..." to include in what will be committed)
        log.txt

nothing added to commit but untracked files present (use "git add" to track)</pre></div></div><br><h2 class="Title7 GTitle2" id="Ignorance-1-3---Ignorer-un-fichier"><a class="Link9" href="#Ignorance">1.3 - Ignorer un fichier</a></h2><br><h3 class="Title8 GTitle3">.gitignore</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">log.txt</pre></div></div><br><h2 class="Title7 GTitle2" id="Ignorance-1-4---Afficher-l-etat-du-depot"><a class="Link9" href="#Ignorance">1.4 - Afficher l'état du dépôt</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">git status</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">Untracked files:
  (use "git add &lt;file&gt;..." to include in what will be committed)
        .gitignore

nothing added to commit but untracked files present (use "git add" to track)</pre></div></div><br><h2 class="Title7 GTitle2" id="Ignorance-1-5---Indexer-tous-les-fichiers"><a class="Link9" href="#Ignorance">1.5 - Indexer tous les fichiers</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">git add --all</pre></div></div><br><h2 class="Title7 GTitle2" id="Ignorance-1-6---Commiter-les-modifications"><a class="Link9" href="#Ignorance">1.6 - Commiter les modifications</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">git commit -m "Creation du fichier .gitignore"</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">[master 70b8d8e] Creation du fichier .gitignore
 1 file changed, 1 insertion(+)
 create mode 100644 .gitignore</pre></div></div><br><h2 class="Title7 GTitle2" id="Ignorance-1-7---Afficher-l-etat-du-depot"><a class="Link9" href="#Ignorance">1.7 - Afficher l'état du dépôt</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">git status</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">On branch master
nothing to commit, working tree clean</pre></div></div><br><h2 class="Title7 GTitle2" id="Ignorance-2---Ignorer-un-dossier"><a class="Link9" href="#Ignorance">2 - Ignorer un dossier</a></h2><br><h2 class="Title7 GTitle2" id="Ignorance-2-1---Creer-un-repertoire-temporaire"><a class="Link9" href="#Ignorance">2.1 - Créer un répertoire temporaire</a></h2><br><h3 class="Title8 GTitle3">tmp/cache.txt</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">Creation du répertoire des fichiers temporaires.</pre></div></div><br><h2 class="Title7 GTitle2" id="Ignorance-2-2---Afficher-l-etat-du-depot"><a class="Link9" href="#Ignorance">2.2 - Afficher l'état du dépôt</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">git status</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">On branch master
Untracked files:
  (use "git add &lt;file&gt;..." to include in what will be committed)
        tmp/

nothing added to commit but untracked files present (use "git add" to track)</pre></div></div><br><h2 class="Title7 GTitle2" id="Ignorance-2-3---Ignorer-un-dossier"><a class="Link9" href="#Ignorance">2.3 - Ignorer un dossier</a></h2><br><h3 class="Title8 GTitle3">.gitignore</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">log.txt
tmp/</pre></div></div><br><h2 class="Title7 GTitle2" id="Ignorance-2-4---Afficher-l-etat-du-depot"><a class="Link9" href="#Ignorance">2.4 - Afficher l'état du dépôt</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">git status</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">On branch master
Changes not staged for commit:
  (use "git add &lt;file&gt;..." to update what will be committed)
  (use "git restore &lt;file&gt;..." to discard changes in working directory)
        modified:   .gitignore

no changes added to commit (use "git add" and/or "git commit -a")</pre></div></div><br><h2 class="Title7 GTitle2" id="Ignorance-2-5---Commiter-les-modifications"><a class="Link9" href="#Ignorance">2.5 - Commiter les modifications</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">git commit -a -m "Creation du repertoire des fichiers temporaires"</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">[master b50fc64] Creation du repertoire des fichiers temporaires
 1 file changed, 1 insertion(+)</pre></div></div><br><br><h2 class="Title7 GTitle2" id="Ignorance-2-6---Afficher-l-etat-du-depot"><a class="Link9" href="#Ignorance">2.6 - Afficher l'état du dépôt</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">git status</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">On branch master
nothing to commit, working tree clean</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Historique"><a class="Link3" href="#">Historique</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Historique-1---Afficher-l-historique-des-commits">1 - Afficher l'historique des commits</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Historique-2---Afficher-l-historique-des-n-derniers-commits">2 - Afficher l'historique des n derniers commits</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Historique-3---Afficher-l-historique-simplifie-des-commits">3 - Afficher l'historique simplifié des commits</a></div><div class="Item4"><i class="Icon10 fa fa-book"></i><a class="Link4" href="#Historique-4---Afficher-l-historique-des-commits-associes-a-un-fichier">4 - Afficher l'historique des commits associés à un fichier</a></div></div><br><h2 class="Title7 GTitle2" id="Historique-1---Afficher-l-historique-des-commits"><a class="Link9" href="#Historique">1 - Afficher l'historique des commits</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">git log</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">commit b50fc6466021f71aa05485035b8c01af274ff383 (HEAD -&gt; master)
Author: Gerard KESSE &lt;gerard.kesse@readydev.com&gt;
Date:   Thu Mar 18 15:11:07 2021 +0100

    Creation du répertoire des fichiers temporaires

commit 70b8d8e4dafc004d7597012b6783ecd3ac3bd637
Author: Gerard KESSE &lt;gerard.kesse@readydev.com&gt;
Date:   Thu Mar 18 14:50:57 2021 +0100

    Creation du fichier .gitignore

commit b905c916fde777d227fe52fbc0baa011aa93eec1
Author: Gerard KESSE &lt;gerard.kesse@readydev.com&gt;
Date:   Thu Mar 18 14:17:55 2021 +0100

    Configuration de l environnement de developpement

commit ba7f121faf665120e8cba071c993ca21a5007dd5
Author: Gerard KESSE &lt;gerard.kesse@readydev.com&gt;
Date:   Thu Mar 18 12:57:55 2021 +0100

    Initial Commit</pre></div></div><br><h2 class="Title7 GTitle2" id="Historique-2---Afficher-l-historique-des-n-derniers-commits"><a class="Link9" href="#Historique">2 - Afficher l'historique des n derniers commits</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">git log -n 2</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">commit b50fc6466021f71aa05485035b8c01af274ff383 (HEAD -&gt; master)
Author: Gerard KESSE &lt;gerard.kesse@readydev.com&gt;
Date:   Thu Mar 18 15:11:07 2021 +0100

    Creation du répertoire des fichiers temporaires

commit 70b8d8e4dafc004d7597012b6783ecd3ac3bd637
Author: Gerard KESSE &lt;gerard.kesse@readydev.com&gt;
Date:   Thu Mar 18 14:50:57 2021 +0100

    Creation du fichier .gitignore</pre></div></div><br><h2 class="Title7 GTitle2" id="Historique-3---Afficher-l-historique-simplifie-des-commits"><a class="Link9" href="#Historique">3 - Afficher l'historique simplifié des commits</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">git log --oneline</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">b50fc64 (HEAD -&gt; master) Creation du répertoire des fichiers temporaires
70b8d8e Creation du fichier .gitignore
b905c91 Configuration de l'environnement de developpement
ba7f121 Initial Commit</pre></div></div><br><h2 class="Title7 GTitle2" id="Historique-4---Afficher-l-historique-des-commits-associes-a-un-fichier"><a class="Link9" href="#Historique">4 - Afficher l'historique des commits associés à un fichier</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">git log -p README.md</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">commit b905c916fde777d227fe52fbc0baa011aa93eec1
Author: Gerard KESSE &lt;gerard.kesse@readydev.com&gt;
Date:   Thu Mar 18 14:17:55 2021 +0100

    Configuration de l environnement de developpement

diff --git a/README.md b/README.md
index f72891d..ebe034b 100644
--- a/README.md
+++ b/README.md
@@ -1,2 +1,2 @@
 Apprendre à utiliser Git.
-
+Configurations de l environnement de développement.

commit ba7f121faf665120e8cba071c993ca21a5007dd5
Author: Gerard KESSE &lt;gerard.kesse@readydev.com&gt;
Date:   Thu Mar 18 12:57:55 2021 +0100

    Initial Commit

diff --git a/README.md b/README.md
new file mode 100644
index 0000000..f72891d
--- /dev/null
+++ b/README.md
@@ -0,0 +1,2 @@
+Apprendre à utiliser Git.
+</pre></div></div><br></div></div></div></div><br>