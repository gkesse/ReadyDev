<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Gestion de versions avec Git<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la gestion de verions avec <b>Git</b>.<br>Produit par Gérard KESSE.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1598599958873"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1598599958873");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>Git </b>est un outil de gestion de versions décentralisé.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Version_Control/Git/img/b_git.png" alt="/Tutoriels/Version_Control/Git/img/b_git.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation"><a class="Link3" href="#">Installation</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616060314619"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616060314619");</script></div><br><h2 class="Title7 GTitle2" id="Installation-1 - Installation sous Ubuntu"><a class="Link9" href="#Installation">1 - Installation sous Ubuntu</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1 - Installer Git"><a class="Link9" href="#Installation">1.1 - Installer Git</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo apt install git</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Lecture des listes de paquets... Fait
Construction de l'arbre des dépendances
Lecture des informations d'état... Fait
...
git est déjà la version la plus récente (1:2.27.0-1ubuntu1.1).
0 mis à jour, 0 nouvellement installés, 0 à enlever et 0 non mis à jour.</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-1.2 - Afficher l'aide"><a class="Link9" href="#Installation">1.2 - Afficher l'aide</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">git --help</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">usage: git [--version] [--help] [-C &lt;path&gt;] [-c &lt;name&gt;=&lt;value&gt;]
           [--exec-path[=&lt;path&gt;]] [--html-path] [--man-path] [--info-path]
           [-p | --paginate | -P | --no-pager] [--no-replace-objects] [--bare]
           [--git-dir=&lt;path&gt;] [--work-tree=&lt;path&gt;] [--namespace=&lt;name&gt;]
           &lt;command&gt; [&lt;args&gt;]

These are common Git commands used in various situations:

start a working area (see also: git help tutorial)
   clone             Clone a repository into a new directory
   init              Create an empty Git repository or reinitialize an existing one
...</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Commandes"><a class="Link3" href="#">Commandes</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616508901735"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616508901735");</script></div><br><h2 class="Title7 GTitle2" id="Commandes-1 - Initialiser un dépôt"><a class="Link9" href="#Commandes">1 - Initialiser un dépôt</a></h2><br>Cette commande permet de transformer un répertoire local en un dépôt Git.<br><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">git init</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Initialized empty Git repository in /home/rpi4/Programs/ReadyTest/git/p01/.git/</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Commandes-2 - Afficher l'aide d'une commande"><a class="Link9" href="#Commandes">2 - Afficher l'aide d'une commande</a></h2><br>Cette commande permet d'afficher l'aide associée à une commande Git.<br><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">git help init</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GIT-INIT(1)                     Git Manual                     GIT-INIT(1)

NAME
       git-init - Create an empty Git repository or reinitialize an
       existing one

SYNOPSIS
       git init [-q | --quiet] [--bare] [--template=&lt;template_directory&gt;]
                 [--separate-git-dir &lt;git dir&gt;] [--object-format=&lt;format]
                 [--shared[=&lt;permissions&gt;]] [directory]
...</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Commandes-3 - Configurer l'environnement de l'utilisateur"><a class="Link9" href="#Commandes">3 - Configurer l'environnement de l'utilisateur</a></h2><br><h2 class="Title7 GTitle2" id="Commandes-3.1 - Configurer le nom d'utilisateur"><a class="Link9" href="#Commandes">3.1 - Configurer le nom d'utilisateur</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">git config --global user.name "Gerard KESSE"</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Commandes-3.2 - Configurer l'email d'utilisateur"><a class="Link9" href="#Commandes">3.2 - Configurer l'email d'utilisateur</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">git config --global user.email "gerard.kesse@readydev.com"</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Commandes-3.3 - Configurer l'éditeur par défaut"><a class="Link9" href="#Commandes">3.3 - Configurer l'éditeur par défaut</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">git config --global core.editor "nano"</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Commandes-3.4 - Configurer la coloration"><a class="Link9" href="#Commandes">3.4 - Configurer la coloration</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">git config --global color.ui "true"</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Commandes-4 - Lister les configurations"><a class="Link9" href="#Commandes">4 - Lister les configurations</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">git config --list</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">user.name=Gerard KESSE
user.email=gerard.kesse@readydev.com
core.editor=nano
color.ui=true
core.repositoryformatversion=0
core.filemode=true
core.bare=false
core.logallrefupdates=true</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Commandes-5 - Afficher l'état du dépôt"><a class="Link9" href="#Commandes">5 - Afficher l'état du dépôt</a></h2><br><h2 class="Title7 GTitle2" id="Commandes-5.1 - Afficher l'état initial"><a class="Link9" href="#Commandes">5.1 - Afficher l'état initial</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">git status</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">On branch master

No commits yet

nothing to commit (create/copy files and use "git add" to track)</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Commandes-5.2 - Ajouter un nouveau fichier"><a class="Link9" href="#Commandes">5.2 - Ajouter un nouveau fichier</a></h2><br><h3 class="Title8 GTitle3">README.md</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Apprendre à utiliser Git.</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Commandes-5.3 - Affichier le nouveau état"><a class="Link9" href="#Commandes">5.3 - Affichier le nouveau état</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">On branch master

No commits yet

Untracked files:
  (use "git add &lt;file&gt;..." to include in what will be committed)
        README.md

nothing added to commit but untracked files present (use "git add" to track)</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Commandes-6 - Indexer un fichier"><a class="Link9" href="#Commandes">6 - Indexer un fichier</a></h2><br><h2 class="Title7 GTitle2" id="Commandes-6.1 - Indexer le ficher"><a class="Link9" href="#Commandes">6.1 - Indexer le ficher</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">git add README.md</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Commandes-6.2 - Afficher l'état du dépôt"><a class="Link9" href="#Commandes">6.2 - Afficher l'état du dépôt</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">git status</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">On branch master

No commits yet

Changes to be committed:
  (use "git rm --cached &lt;file&gt;..." to unstage)
        new file:   README.md</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Commandes-7 - Commiter un fichier"><a class="Link9" href="#Commandes">7 - Commiter un fichier</a></h2><br><h2 class="Title7 GTitle2" id="Commandes-7.1 - Commiter le fichier"><a class="Link9" href="#Commandes">7.1 - Commiter le fichier</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">git commit -m "Initial Commit"</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">[master (root-commit) ba7f121] Initial Commit
 1 file changed, 2 insertions(+)
 create mode 100644 README.md</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Commandes-7.2 - Afficher l'état du dépôt"><a class="Link9" href="#Commandes">7.2 - Afficher l'état du dépôt</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">On branch master
nothing to commit, working tree clean</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Commandes-7.3 - Modifier le fichier"><a class="Link9" href="#Commandes">7.3 - Modifier le fichier</a></h2><br><h3 class="Title8 GTitle3">README.md</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Apprendre à utiliser Git.
Configurations de l'environnement de développement.</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Commandes-7.4 - Afficher l'état du dépôt"><a class="Link9" href="#Commandes">7.4 - Afficher l'état du dépôt</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">git status</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">On branch master
Changes not staged for commit:
  (use "git add &lt;file&gt;..." to update what will be committed)
  (use "git restore &lt;file&gt;..." to discard changes in working directory)
        modified:   README.md

no changes added to commit (use "git add" and/or "git commit -a")</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Commandes-7.5 - Indexer et commiter un fichier"><a class="Link9" href="#Commandes">7.5 - Indexer et commiter un fichier</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">git commit -a -m "Configuration de l'environnement de developpement"</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">[master b905c91] Configuration de l'environnement de developpement
 1 file changed, 1 insertion(+), 1 deletion(-)</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Commandes-7.6 - Afficher l'état du dépôt"><a class="Link9" href="#Commandes">7.6 - Afficher l'état du dépôt</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">git status</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">On branch master
nothing to commit, working tree clean</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Indexation"><a class="Link3" href="#">Indexation</a></h1><div class="Body3"><br>L'indexation est l'action d'indiquer à Git les fichiers qu'il doit considérer lors de l'enregistrement des modifications.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616509818279"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616509818279");</script></div><br><h2 class="Title7 GTitle2" id="Indexation-1 - Indexer un fichier"><a class="Link9" href="#Indexation">1 - Indexer un fichier</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">git add index.php</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Indexation-2 - Indexer une liste de fichiers"><a class="Link9" href="#Indexation">2 - Indexer une liste de fichiers</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">git add index.php styles.css</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Indexation-3 - Indexer un groupe de fichiers"><a class="Link9" href="#Indexation">3 - Indexer un groupe de fichiers</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">git add *.php</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Indexation-4 - Indexer tous les fichiers"><a class="Link9" href="#Indexation">4 - Indexer tous les fichiers</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">git add --all</xmp></pre></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Ignorance"><a class="Link3" href="#">Ignorance</a></h1><div class="Body3"><br>L'ignorance est l'action d'indiquer à Git les fichiers qu'il doit ignorer lors de l'enregistrement des modifications.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616510459160"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616510459160");</script></div><br><h2 class="Title7 GTitle2" id="Ignorance-1 - Ignorer un fichier"><a class="Link9" href="#Ignorance">1 - Ignorer un fichier</a></h2><br><h2 class="Title7 GTitle2" id="Ignorance-1.1 - Créer un fichier log"><a class="Link9" href="#Ignorance">1.1 - Créer un fichier log</a></h2><br><h3 class="Title8 GTitle3">log.txt</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Création de fichier log.</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Ignorance-1.2 - Afficher l'état du dépôt"><a class="Link9" href="#Ignorance">1.2 - Afficher l'état du dépôt</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">git status</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">On branch master
Untracked files:
  (use "git add &lt;file&gt;..." to include in what will be committed)
        log.txt

nothing added to commit but untracked files present (use "git add" to track)</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Ignorance-1.3 - Ignorer un fichier"><a class="Link9" href="#Ignorance">1.3 - Ignorer un fichier</a></h2><br><h3 class="Title8 GTitle3">.gitignore</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">log.txt</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Ignorance-1.4 - Afficher l'état du dépôt"><a class="Link9" href="#Ignorance">1.4 - Afficher l'état du dépôt</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">git status</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Untracked files:
  (use "git add &lt;file&gt;..." to include in what will be committed)
        .gitignore

nothing added to commit but untracked files present (use "git add" to track)</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Ignorance-1.5 - Indexer tous les fichiers"><a class="Link9" href="#Ignorance">1.5 - Indexer tous les fichiers</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">git add --all</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Ignorance-1.6 - Commiter les modifications"><a class="Link9" href="#Ignorance">1.6 - Commiter les modifications</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">git commit -m "Creation du fichier .gitignore"</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">[master 70b8d8e] Creation du fichier .gitignore
 1 file changed, 1 insertion(+)
 create mode 100644 .gitignore</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Ignorance-1.7 - Afficher l'état du dépôt"><a class="Link9" href="#Ignorance">1.7 - Afficher l'état du dépôt</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">git status</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">On branch master
nothing to commit, working tree clean</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Ignorance-2 - Ignorer un dossier"><a class="Link9" href="#Ignorance">2 - Ignorer un dossier</a></h2><br><h2 class="Title7 GTitle2" id="Ignorance-2.1 - Créer un répertoire temporaire"><a class="Link9" href="#Ignorance">2.1 - Créer un répertoire temporaire</a></h2><br><h3 class="Title8 GTitle3">tmp/cache.txt</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Creation du répertoire des fichiers temporaires.</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Ignorance-2.2 - Afficher l'état du dépôt"><a class="Link9" href="#Ignorance">2.2 - Afficher l'état du dépôt</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">git status</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">On branch master
Untracked files:
  (use "git add &lt;file&gt;..." to include in what will be committed)
        tmp/

nothing added to commit but untracked files present (use "git add" to track)</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Ignorance-2.3 - Ignorer un dossier"><a class="Link9" href="#Ignorance">2.3 - Ignorer un dossier</a></h2><br><h3 class="Title8 GTitle3">.gitignore</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">log.txt
tmp/</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Ignorance-2.4 - Afficher l'état du dépôt"><a class="Link9" href="#Ignorance">2.4 - Afficher l'état du dépôt</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">git status</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">On branch master
Changes not staged for commit:
  (use "git add &lt;file&gt;..." to update what will be committed)
  (use "git restore &lt;file&gt;..." to discard changes in working directory)
        modified:   .gitignore

no changes added to commit (use "git add" and/or "git commit -a")</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Ignorance-2.5 - Commiter les modifications"><a class="Link9" href="#Ignorance">2.5 - Commiter les modifications</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">git commit -a -m "Creation du repertoire des fichiers temporaires"</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">[master b50fc64] Creation du repertoire des fichiers temporaires
 1 file changed, 1 insertion(+)</xmp></pre></div><br><br><h2 class="Title7 GTitle2" id="Ignorance-2.6 - Afficher l'état du dépôt"><a class="Link9" href="#Ignorance">2.6 - Afficher l'état du dépôt</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">git status</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">On branch master
nothing to commit, working tree clean</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Historique"><a class="Link3" href="#">Historique</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616511871470"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616511871470");</script></div><br><h2 class="Title7 GTitle2" id="Historique-1 - Afficher l'historique des commits"><a class="Link9" href="#Historique">1 - Afficher l'historique des commits</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">git log</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">commit b50fc6466021f71aa05485035b8c01af274ff383 (HEAD -&gt; master)
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

    Initial Commit</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Historique-2 - Afficher l'historique des n derniers commits"><a class="Link9" href="#Historique">2 - Afficher l'historique des n derniers commits</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">git log -n 2</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">commit b50fc6466021f71aa05485035b8c01af274ff383 (HEAD -&gt; master)
Author: Gerard KESSE &lt;gerard.kesse@readydev.com&gt;
Date:   Thu Mar 18 15:11:07 2021 +0100

    Creation du répertoire des fichiers temporaires

commit 70b8d8e4dafc004d7597012b6783ecd3ac3bd637
Author: Gerard KESSE &lt;gerard.kesse@readydev.com&gt;
Date:   Thu Mar 18 14:50:57 2021 +0100

    Creation du fichier .gitignore</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Historique-3 - Afficher l'historique simplifié des commits"><a class="Link9" href="#Historique">3 - Afficher l'historique simplifié des commits</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">git log --oneline</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">b50fc64 (HEAD -&gt; master) Creation du répertoire des fichiers temporaires
70b8d8e Creation du fichier .gitignore
b905c91 Configuration de l'environnement de developpement
ba7f121 Initial Commit</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Historique-4 - Afficher l'historique des commits associés à un fichier"><a class="Link9" href="#Historique">4 - Afficher l'historique des commits associés à un fichier</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">git log -p README.md</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">commit b905c916fde777d227fe52fbc0baa011aa93eec1
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
+</xmp></pre></div><br></div></div></div></div><br>