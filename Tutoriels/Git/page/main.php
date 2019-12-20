<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la gestion de version avec Git</div></a></div></div><div class="Body2 Orange"><b>Git</b> est un système de gestion de versions.<br>Le but de ce tutoriel est de vous apprendre la gestion de versions avec <b>Git</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation sous Linux"><a class="Link3" href="#">Installation sous Linux</a></h1><div class="Body3">Le but de cette section est de vous présenter les différents outils nécessaires pour apprendre la gestion de versions avec <span class="GColor1" style="color:lime;">Git</span><span class="GColor1" style="color:lime;"></span>, sous Linux.<br>Produit par <b>Gérard KESSE</b>.<br><br>Dans ce tutoriel, nous utiliserons, sous Linux:<br>- Git, comme système de gestion de versions.<br>- GitHub, comme serveur de données Git.<br>- Notepad++, comme éditeur de texte.<br><br><h3 class="Title8 GTitle3">Télécharger Git</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://git-scm.com/downloads">https://git-scm.com/downloads</a><br><br><h3 class="Title8 GTitle3">Accéder à GitHub</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://github.com/">https://github.com/</a><br><br><h3 class="Title8 GTitle3">Télécharger Notepad++</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://notepad-plus-plus.org/">https://notepad-plus-plus.org/</a><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un dépôt"><a class="Link3" href="#">Créer un dépôt</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Créer un dépôt </span>avec Git.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1576521311119"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1576521311119");</script></div><br><h2 class="Title7 GTitle2" id="Créer un dépôt-Créer le dépôt"><a class="Link9" href="#Créer un dépôt">Créer le dépôt</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GDEPOT=/home/centos/Programs/ReadyGit/depot.git
mkdir -p $GDEPOT
cd $GDEPOT
git init --bare --shared</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Initialiser un projet"><a class="Link3" href="#">Initialiser un projet</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Initialiser un projet </span>avec Git.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1576538715900"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1576538715900");</script></div><br><h2 class="Title7 GTitle2" id="Initialiser un projet-Initialiser le projet"><a class="Link9" href="#Initialiser un projet">Initialiser le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GPROJECT=/home/centos/Programs/ReadyGit/projet
mkdir -p $GPROJECT
cd $GPROJECT
git init</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Ajouter un dépôt"><a class="Link3" href="#">Ajouter un dépôt</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Ajouter un dépôt </span>avec Git.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1576539384551"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1576539384551");</script></div><br><h2 class="Title7 GTitle2" id="Ajouter un dépôt-Ajouter le dépôt"><a class="Link9" href="#Ajouter un dépôt">Ajouter le dépôt</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GPROJECT=/home/centos/Programs/ReadyGit/projet
GDEPOT=file:////home/centos/Programs/ReadyGit/depot.git
cd $GPROJECT
git remote add origin $GDEPOT</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Afficher les dépôts"><a class="Link3" href="#">Afficher les dépôts</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Afficher les dépôts </span>avec Git.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1576540413669"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1576540413669");</script></div><br><h2 class="Title7 GTitle2" id="Afficher les dépôts-Afficher les dépôts"><a class="Link9" href="#Afficher les dépôts">Afficher les dépôts</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GPROJECT=/home/centos/Programs/ReadyGit/projet
cd $GPROJECT
git remote -v</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Ajouter un fichier"><a class="Link3" href="#">Ajouter un fichier</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Ajouter un fichier </span>avec Git.<br><br>On décide de créer un fichier README pour notre projet (<b>README.md</b>).<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1576547735514"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1576547735514");</script></div><br><h2 class="Title7 GTitle2" id="Ajouter un fichier-Ajouter le fichier"><a class="Link9" href="#Ajouter un fichier">Ajouter le fichier</a></h2><br><h3 class="Title8 GTitle3">README.md</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh"># ReadyGit
ReadyGit est un tutoriel pour apprendre à utiliser Git.</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Afficher le status d'un projet"><a class="Link3" href="#">Afficher le status d'un projet</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Afficher le status d'un projet </span>avec Git.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1576548276862"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1576548276862");</script></div><br><h2 class="Title7 GTitle2" id="Afficher le status d'un projet-Afficher le status de projet"><a class="Link9" href="#Afficher le status d'un projet">Afficher le status de projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GPROJECT=/home/centos/Programs/ReadyGit/projet
cd $GPROJECT
git status</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Indexer un fichier"><a class="Link3" href="#">Indexer un fichier</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Indexer un fichier </span>avec Git.<br><br>On décide d'indexer le fichier README de notre projet (<b>README.md</b>).<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1576548534834"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1576548534834");</script></div><br><h2 class="Title7 GTitle2" id="Indexer un fichier-Indexer le fichier"><a class="Link9" href="#Indexer un fichier">Indexer le fichier</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GPROJECT=/home/centos/Programs/ReadyGit/projet
cd $GPROJECT
git add README.md</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Valider les modifications d'un projet"><a class="Link3" href="#">Valider les modifications d'un projet</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Valider les modifications d'un projet </span>avec Git.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1576549101833"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1576549101833");</script></div><br><h2 class="Title7 GTitle2" id="Valider les modifications d'un projet-Valider les modifications du projet"><a class="Link9" href="#Valider les modifications d'un projet">Valider les modifications du projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GPROJECT=/home/centos/Programs/ReadyGit/projet
cd $GPROJECT
git commit -m "Initial Commit"</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Pousser les modifications d'un projet"><a class="Link3" href="#">Pousser les modifications d'un projet</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Pousser les modifications d'un projet </span>avec Git.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1576549269950"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1576549269950");</script></div><br><h2 class="Title7 GTitle2" id="Pousser les modifications d'un projet-Pousser les modifications du projet"><a class="Link9" href="#Pousser les modifications d'un projet">Pousser les modifications du projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GPROJECT=/home/centos/Programs/ReadyGit/projet
cd $GPROJECT
git push origin master</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer une branche"><a class="Link3" href="#">Créer une branche</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Créer une branche </span>avec Git.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1576549801995"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1576549801995");</script></div><br><h2 class="Title7 GTitle2" id="Créer une branche-Créer la branche"><a class="Link9" href="#Créer une branche">Créer la branche</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GPROJECT=/home/centos/Programs/ReadyGit/projet
cd $GPROJECT
git branch develop</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Afficher les branches"><a class="Link3" href="#">Afficher les branches</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Afficher les branches </span>avec Git.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1576550410263"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1576550410263");</script></div><br><h2 class="Title7 GTitle2" id="Afficher les branches-Afficher les branches"><a class="Link9" href="#Afficher les branches">Afficher les branches</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GPROJECT=/home/centos/Programs/ReadyGit/projet
cd $GPROJECT
git branch</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Basculer sur une branche"><a class="Link3" href="#">Basculer sur une branche</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Basculer sur une branche </span>avec Git.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1576550414434"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1576550414434");</script></div><br><h2 class="Title7 GTitle2" id="Basculer sur une branche-Basculer sur la branche"><a class="Link9" href="#Basculer sur une branche">Basculer sur la branche</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GPROJECT=/home/centos/Programs/ReadyGit/projet
cd $GPROJECT
git checkout develop</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Ajouter du contenu"><a class="Link3" href="#">Ajouter du contenu</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Ajouter du contenu </span>avec Git.<br><br>On décide de créer un programme C, avec MinGW, sous Eclipse permettant d'afficher un message de salutation à l'écran (<b>Bonjour tout le monde</b>).<br>On décide de démarrer avec une architecture simple (<b>main.c</b>).<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1576543275809"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1576543275809");</script></div><br><h2 class="Title7 GTitle2" id="Ajouter du contenu-Programme principal"><a class="Link9" href="#Ajouter du contenu">Programme principal</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
//===============================================
int main(int argc, char** argv) {
	printf("Bonjour tout le monde\n");
	return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Ajouter du contenu-Fichier Makefile"><a class="Link9" href="#Ajouter du contenu">Fichier Makefile</a></h2><br><h3 class="Title8 GTitle3">Makefile</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GSRC = ../code/GProject/src
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/GProject.exe 

GINCS = \

GLIBS = \

GOBJS = \
    $(patsubst $(GSRC)/%.c, $(GBUILD)/%.o, $(wildcard $(GSRC)/*.c)) \

GCFLAGS = \
    -std=c11 \
    
all: $(GOBJS)
	@mkdir -p $(GBIN)
	gcc -o $(GTARGET) $(GOBJS) $(GLIBS) 
$(GBUILD)/%.o: $(GSRC)/%.c
	@mkdir -p $(GBUILD)
	gcc $(GCFLAGS) -c $&lt; -o $@ $(GINCS)
clean:
	rm -f $(GBUILD)/*.o $(GBIN)/*.exe</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Ajouter du contenu-Compiler le programme"><a class="Link9" href="#Ajouter du contenu">Compiler le programme</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GPROJECT=/home/centos/Programs/ReadyGit/projet
GUNIX=$GPROJECT/unix
cd $GUNIX
make</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Ajouter du contenu-Exécuter le programme"><a class="Link9" href="#Ajouter du contenu">Exécuter le programme</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GPROJECT=/home/centos/Programs/ReadyGit/projet
GUNIX=$GPROJECT/unix
cd $GUNIX
./bin/GProject.exe</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Ajouter du contenu-Résultat"><a class="Link9" href="#Ajouter du contenu">Résultat</a></h2><br><div class="Img3 GImage"><img src="img/Programme.png" alt="img/Programme.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Indexer tous les fichiers"><a class="Link3" href="#">Indexer tous les fichiers</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Indexer tous les fichiers </span>avec Git.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1576562400049"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1576562400049");</script></div><br><h2 class="Title7 GTitle2" id="Indexer tous les fichiers-Indexer tous les fichiers"><a class="Link9" href="#Indexer tous les fichiers">Indexer tous les fichiers</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GPROJECT=/home/centos/Programs/ReadyGit/projet
cd $GPROJECT
git add --all</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Supprimer des fichiers indexés"><a class="Link3" href="#">Supprimer des fichiers indexés</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Supprimer des fichiers indexés </span>avec Git.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1576564340015"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1576564340015");</script></div><br><h2 class="Title7 GTitle2" id="Supprimer des fichiers indexés-Supprimer les fichiers indexés"><a class="Link9" href="#Supprimer des fichiers indexés">Supprimer les fichiers indexés</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GPROJECT=/home/centos/Programs/ReadyGit/projet
cd $GPROJECT
git rm -f code/.gitignore
git rm -f code/GProject/.gitignore</xmp></pre></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Désindexer des fichiers"><a class="Link3" href="#">Désindexer des fichiers</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Désindexer des fichiers </span>avec Git.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1576563310276"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1576563310276");</script></div><br><h2 class="Title7 GTitle2" id="Désindexer des fichiers-Désindexer les fichiers"><a class="Link9" href="#Désindexer des fichiers">Désindexer les fichiers</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GPROJECT=/home/centos/Programs/ReadyGit/projet
cd $GPROJECT
git reset HEAD code/GProject/.cproject
git reset HEAD code/GProject/.project
git reset HEAD code/GProject/.settings
git reset HEAD unix/bin
git reset HEAD unix/build</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Ignorer des fichiers"><a class="Link3" href="#">Ignorer des fichiers</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Ignorer des fichiers </span>avec Git.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1576564679043"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1576564679043");</script></div><br><h2 class="Title7 GTitle2" id="Ignorer des fichiers-Ignorer les fichiers"><a class="Link9" href="#Ignorer des fichiers">Ignorer les fichiers</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GPROJECT=/home/centos/Programs/ReadyGit/projet
cd $GPROJECT
nano .gitignore</xmp></pre></div><br><h3 class="Title8 GTitle3">.gitignore</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">#================================================
# Makefile
#================================================
/**/bin/
/**/build/

#================================================
# Eclipse
#================================================
/**/Release/
/**/Debug/
/**/.metadata/
/**/.settings/
/**/.project
/**/.cproject</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Pousser des modifications sur une branche"><a class="Link3" href="#">Pousser des modifications sur une branche</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Pousser des modifications sur une branche </span>avec Git.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1576565246829"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1576565246829");</script></div><br><h2 class="Title7 GTitle2" id="Pousser des modifications sur une branche-Basculer sur la branche"><a class="Link9" href="#Pousser des modifications sur une branche">Basculer sur la branche</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GPROJECT=/home/centos/Programs/ReadyGit/projet
cd $GPROJECT
git checkout develop</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Pousser des modifications sur une branche-Indexer toutes les modifications"><a class="Link9" href="#Pousser des modifications sur une branche">Indexer toutes les modifications</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GPROJECT=/home/centos/Programs/ReadyGit/projet
cd $GPROJECT
git add --all</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Pousser des modifications sur une branche-Valider les modifications"><a class="Link9" href="#Pousser des modifications sur une branche">Valider les modifications</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GPROJECT=/home/centos/Programs/ReadyGit/projet
cd $GPROJECT
git commit -m "developpement du systeme d'affichage"</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Pousser des modifications sur une branche-Pousser les modifications sur la branche"><a class="Link9" href="#Pousser des modifications sur une branche">Pousser les modifications sur la branche</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GPROJECT=/home/centos/Programs/ReadyGit/projet
cd $GPROJECT
git push origin develop</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Afficher l'historique des validations"><a class="Link3" href="#">Afficher l'historique des validations</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Afficher l'historique des validations </span>avec Git.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1576567937007"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1576567937007");</script></div><br><h2 class="Title7 GTitle2" id="Afficher l'historique des validations-Afficher l'historique des validations"><a class="Link9" href="#Afficher l'historique des validations">Afficher l'historique des validations</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GPROJECT=/home/centos/Programs/ReadyGit/projet
cd $GPROJECT
git log</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Afficher les dernières validations par branche"><a class="Link3" href="#">Afficher les dernières validations par branche</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Afficher les dernières validations par branche</span> avec Git.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1576568127589"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1576568127589");</script></div><br><h2 class="Title7 GTitle2" id="Afficher les dernières validations par branche-Afficher les dernières validations par branche"><a class="Link9" href="#Afficher les dernières validations par branche">Afficher les dernières validations par branche</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GPROJECT=/home/centos/Programs/ReadyGit/projet
cd $GPROJECT
git branch -v</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Merger deux branches"><a class="Link3" href="#">Merger deux branches</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Merger deux branches </span>avec Git.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1576606013332"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1576606013332");</script></div><br><h2 class="Title7 GTitle2" id="Merger deux branches-Basculer sur la branche master"><a class="Link9" href="#Merger deux branches">Basculer sur la branche master</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GPROJECT=/home/centos/Programs/ReadyGit/gerard/projet
cd $GPROJECT
git checkout master</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Merger deux branches-Merger les deux branches"><a class="Link9" href="#Merger deux branches">Merger les deux branches</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GPROJECT=/home/centos/Programs/ReadyGit/gerard/projet
cd $GPROJECT
git merge develop</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Merger deux branches-Pousser la branche master"><a class="Link9" href="#Merger deux branches">Pousser la branche master</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GPROJECT=/home/centos/Programs/ReadyGit/gerard/projet
cd $GPROJECT
git push origin master</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Cloner un dépôt"><a class="Link3" href="#">Cloner un dépôt</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Cloner un dépôt </span>avec Git.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1576649034788"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1576649034788");</script></div><br><h2 class="Title7 GTitle2" id="Cloner un dépôt-Cloner le dépôt"><a class="Link9" href="#Cloner un dépôt">Cloner le dépôt</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GPROJECT=/home/centos/Programs/ReadyGit/kesse
GDEPOT=file:////home/centos/Programs/ReadyGit/depot.git
GPROJECT_NAME=projet
mkdir -p $GPROJECT
cd $GPROJECT
git clone $GDEPOT $GPROJECT_NAME</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Cloner un dépôt-Afficher les branches"><a class="Link9" href="#Cloner un dépôt">Afficher les branches</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GPROJECT=/home/centos/Programs/ReadyGit/kesse/projet
cd $GPROJECT
git branch --all</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Cloner un dépôt-Afficher les dernières validations"><a class="Link9" href="#Cloner un dépôt">Afficher les dernières validations</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GPROJECT=/home/centos/Programs/ReadyGit/kesse/projet
cd $GPROJECT
git branch --all -v</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Cloner un dépôt-Tirer la branche develop"><a class="Link9" href="#Cloner un dépôt">Tirer la branche develop</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GPROJECT=/home/centos/Programs/ReadyGit/kesse/projet
cd $GPROJECT
git checkout -b develop origin/develop</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Cloner un dépôt-Vérifier les branches"><a class="Link9" href="#Cloner un dépôt">Vérifier les branches</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GPROJECT=/home/centos/Programs/ReadyGit/kesse/projet
cd $GPROJECT
git branch</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Cloner un dépôt-Vérifier les dernières validations"><a class="Link9" href="#Cloner un dépôt">Vérifier les dernières validations</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GPROJECT=/home/centos/Programs/ReadyGit/kesse/projet
cd $GPROJECT
git branch -v</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Apporter des modifications à un projet"><a class="Link3" href="#">Apporter des modifications à un projet</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Apporter des modifications à un projet </span>avec Git.<br><br>On décide d'apporter la notion de structure dans le programme précédent.<br>La nouvelle architecture&nbsp; utilisera les fichiers source (<b>main.c, GHello.c</b>).<br>On décide de créer une nouvelle branche (<b>struct</b>) pour gérer les modifications.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1576781072853"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1576781072853");</script></div><br><h2 class="Title7 GTitle2" id="Apporter des modifications à un projet-Basculer sur la branche master"><a class="Link9" href="#Apporter des modifications à un projet">Basculer sur la branche master</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GPROJECT=/home/centos/Programs/ReadyGit/kesse/projet
cd $GPROJECT
git checkout master</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Apporter des modifications à un projet-Créer la branche struct"><a class="Link9" href="#Apporter des modifications à un projet">Créer la branche struct</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GPROJECT=/home/centos/Programs/ReadyGit/kesse/projet
cd $GPROJECT
git branch struct</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Apporter des modifications à un projet-Basculer sur la branche struct"><a class="Link9" href="#Apporter des modifications à un projet">Basculer sur la branche struct</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GPROJECT=/home/centos/Programs/ReadyGit/kesse/projet
cd $GPROJECT
git checkout struct</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Apporter des modifications à un projet-Programme principal"><a class="Link9" href="#Apporter des modifications à un projet">Programme principal</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GHello.h"
//===============================================
int main(int argc, char** argv) {
	GHello()-&gt;Hello();
	return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Apporter des modifications à un projet-Module de salutation"><a class="Link9" href="#Apporter des modifications à un projet">Module de salutation</a></h2><br><h3 class="Title8 GTitle3">GHello.c</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GHello.h"
//===============================================
static GHelloO* m_GHelloO = 0;
//===============================================
static void GHello_Hello();
//===============================================
GHelloO* GHello_New() {
    GHelloO* lObj = (GHelloO*)malloc(sizeof(GHelloO));
    lObj-&gt;Delete = GHello_Delete;
    lObj-&gt;Hello = GHello_Hello;
    return lObj;
}
//===============================================
void GHello_Delete() {
    GHelloO* lObj = GHello();
    if(lObj != 0) {
        free(lObj);
    }
    m_GHelloO = 0;
}
//===============================================
GHelloO* GHello() {
    if(m_GHelloO == 0) {
        m_GHelloO = GHello_New();
    }
    return m_GHelloO;
}
//===============================================
static void GHello_Hello() {
    printf("Bonjour tout le monde\n");
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GHello.h</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GHello_
#define _GHello_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct _GHelloO GHelloO;
//===============================================
struct _GHelloO {
    void (*Delete)();
    void (*Hello)();
};
//===============================================
GHelloO* GHello_New();
void GHello_Delete();
GHelloO* GHello();
//===============================================
#endif
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Apporter des modifications à un projet-Module des fichiers header"><a class="Link9" href="#Apporter des modifications à un projet">Module des fichiers header</a></h2><br><h3 class="Title8 GTitle3">GInclude.h</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GInclude_
#define _GInclude_
//===============================================
#if defined(__unix)
//===============================================
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
//===============================================
#endif
//===============================================
#endif
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Apporter des modifications à un projet-Fichier Makefile"><a class="Link9" href="#Apporter des modifications à un projet">Fichier Makefile</a></h2><br><h3 class="Title8 GTitle3">Makefile</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GSRC = ../code/GProject/src
GMGR = $(GSRC)/manager

GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/GProject.exe 

GINCS = \
    -I$(GSRC)/include \
    
GLIBS = \

GOBJS = \
    $(patsubst $(GSRC)/%.c, $(GBUILD)/%.o, $(wildcard $(GSRC)/*.c)) \
    $(patsubst $(GMGR)/%.c, $(GBUILD)/%.o, $(wildcard $(GMGR)/*.c)) \

GCFLAGS = \
    -std=c11 \
    
all: $(GOBJS)
	@mkdir -p $(GBIN)
	gcc -o $(GTARGET) $(GOBJS) $(GLIBS) 
$(GBUILD)/%.o: $(GSRC)/%.c
	@mkdir -p $(GBUILD)
	gcc $(GCFLAGS) -c $&lt; -o $@ $(GINCS)
$(GBUILD)/%.o: $(GMGR)/%.c
	@mkdir -p $(GBUILD)
	gcc $(GCFLAGS) -c $&lt; -o $@ $(GINCS)
clean:
	rm -f $(GBUILD)/*.o $(GBIN)/*.exe</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Apporter des modifications à un projet-Compiler le projet"><a class="Link9" href="#Apporter des modifications à un projet">Compiler le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GPROJECT=/home/centos/Programs/ReadyGit/projet
GUNIX=$GPROJECT/unix
cd $GUNIX
make</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Apporter des modifications à un projet-Exécuter le projet"><a class="Link9" href="#Apporter des modifications à un projet">Exécuter le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GPROJECT=/home/centos/Programs/ReadyGit/projet
GUNIX=$GPROJECT/unix
cd $GUNIX
./bin/GProject.exe</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Apporter des modifications à un projet-Résultat"><a class="Link9" href="#Apporter des modifications à un projet">Résultat</a></h2><br><div class="Img3 GImage"><img src="img/Programme.png" alt="img/Programme.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Modifier l'URL d'un dépôt"><a class="Link3" href="#">Modifier l'URL d'un dépôt</a></h1><div class="Body3">Le but de cette section est de vous apprendre à Cloner un dépôt avec Git.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1576651250411"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1576651250411");</script></div><br><h2 class="Title7 GTitle2" id="Modifier l'URL d'un dépôt-Supprimer l'URL du dépôt"><a class="Link9" href="#Modifier l'URL d'un dépôt">Supprimer l'URL du dépôt</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GPROJECT=/home/centos/Programs/ReadyGit/gerard/projet
cd $GPROJECT
git remote rm origin</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Modifier l'URL d'un dépôt-Modifier l'URL du dépôt"><a class="Link9" href="#Modifier l'URL d'un dépôt">Modifier l'URL du dépôt</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GPROJECT=/home/centos/Programs/ReadyGit/gerard/projet
GDEPOT=file:////home/centos/Programs/ReadyGit/depot.git
cd $GPROJECT
git remote add origin $GDEPOT</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Modifier l'URL d'un dépôt-Vérifier l'URL du dépôt"><a class="Link9" href="#Modifier l'URL d'un dépôt">Vérifier l'URL du dépôt</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">GPROJECT=/home/centos/Programs/ReadyGit/gerard/projet
cd $GPROJECT
git remote -v</xmp></pre></div><br></div></div></div></div><br>