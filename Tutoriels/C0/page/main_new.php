<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la programmation en C</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre la programmation en <b>C</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3">L'homme a de plus en plus besoin de technologie pour faciliter son quotidien. Pour cela, il utilise des machines. La plus part de ces machines utilisent une intelligence embarquée. Cette intelligence est élaborée par un programme informatique et enregistrée dans la mémoire du calculateur qui coordonne toutes les opérations du système.Le <b>C </b>est un langage de programmation accessible à plusieurs niveaux. Utilisé dans le domaine de l'embarqué, il permet la programmation des microcontrôleurs. Il peut être aussi utilisé pour réaliser des applications de réseaux ou de gestion de bases de données ou plein d'autres encore. Connaître son formalisme pour mieux explorer son univers s'avère donc nécessaire <br><br><div class="Img3 GImage"><img src="/data/img/defaults/banner_c.png" alt="/data/img/defaults/banner_c.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un projet C"><a class="Link3" href="#">Créer un projet C</a></h1><div class="Body3">Un projet C a besoin d'un éditeur de texte pour éditer les programmes du projet&nbsp; (<b>Notepad++</b>) et un compilateur pour compiler les programmes associés au projet (<b>MinGW</b>). Les règles de compilation sont définies dans un fichier de description (<b>Makefile</b>) et la compilation du projet génère un fichier exécutable compréhensible par la mchine (<b>binaire</b>).<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1593248706112"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1593248706112");</script></div><br><h2 class="Title7 GTitle2" id="Créer un projet C-Créer le programme principal"><a class="Link9" href="#Créer un projet C">Créer le programme principal</a></h2><br>Le programme principal contient le point d'entrée du projet.<br><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
//===============================================
int main(int argc, char** argv) {
    printf("Bonjour tout le monde\n");
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet C-Créer le fichier de construction"><a class="Link9" href="#Créer un projet C">Créer le fichier de construction</a></h2><br>Le fichier de construction contient les règles de compilation.<br><br><h3 class="Title8 GTitle3">Makefile</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GSRC = ../code/GProject/src
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/gp_c.exe

GINCS = \

GLIBS = \

GOBJS = \
    $(patsubst $(GSRC)/%.c, $(GBUILD)/%.o, $(wildcard $(GSRC)/*.c)) \

GCFLAGS = \
    -std=gnu18 \
    -W -Wall \
    -Wno-unused-parameter \
    -Wno-format-overflow \
    -Wno-unused-function \

all: clean_exe compile run

compile: $(GOBJS)
	@if not exist "$(GBIN)" @mkdir $(GBIN)
	gcc -o $(GTARGET) $(GOBJS) $(GLIBS) 
$(GBUILD)/%.o: $(GSRC)/%.c
	@if not exist "$(GBUILD)" @mkdir $(GBUILD)
	gcc $(GCFLAGS) -c $&lt; -o $@ $(GINCS)
run:
	@echo.
	@$(GTARGET) $(argv)
	@echo.
clean_exe:
	del /q $(GBIN)\*.exe
clean:
	del /q $(GBUILD)\*.o $(GBIN)\*.exe</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet C-Compiler le projet"><a class="Link9" href="#Créer un projet C">Compiler le projet</a></h2><br>La compilation du projet génère les fichiers objet et l'assemblage des fichiers objet produit le fichier exécutable.<br><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">make</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet C-Exécuter le projet"><a class="Link9" href="#Créer un projet C">Exécuter le projet</a></h2><br>L'exécution du projet lance le fichier exécutable.<br><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">make run</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet C-Nettoyer le projet"><a class="Link9" href="#Créer un projet C">Nettoyer le projet</a></h2><br>Le nettoyage du projet supprime les fichiers objet.<br><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">make clean</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Afficher un message"><a class="Link3" href="#">Afficher un message</a></h1><div class="Body3">Dans un programme informatique, on a souvent besoin d'afficher un message pour informer l'utilisateur sur le déroulement du programme.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1593250659674"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1593250659674");</script></div><br><h2 class="Title7 GTitle2" id="Afficher un message-Afficher un message"><a class="Link9" href="#Afficher un message">Afficher un message</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GTestBasic_Printf(int argc, char** argv) {
    printf("Bonjour tout le monde\n");
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Afficher un message-Résultat"><a class="Link9" href="#Afficher un message">Résultat</a></h2><br><div class="Img3 GImage"><img src="img/printf.png" alt="img/printf.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Afficher le contenu d'une variable"><a class="Link3" href="#">Afficher le contenu d'une variable</a></h1><div class="Body3">Dans une application logicielle, on a souvent besoin d'afficher le contenu d'une variable. C'est d'ailleurs le meilleur de déboguer un programme informatique.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1593368867024"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1593368867024");</script></div><br><h2 class="Title7 GTitle2" id="Afficher le contenu d'une variable-Afficher le contenu d'une variable"><a class="Link9" href="#Afficher le contenu d'une variable">Afficher le contenu d'une variable</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GTestBasic_PrintfVar(int argc, char** argv) {
    char* lString = "Bonjour tout le monde";
    int lInt = 1234;
    double lDouble = 3.14;
    printf("lString: %s\n", lString);
    printf("lInt: %d\n", lInt);
    printf("lDouble: %f\n", lDouble);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Afficher le contenu d'une variable-Résultat"><a class="Link9" href="#Afficher le contenu d'une variable">Résultat</a></h2><br><div class="Img3 GImage"><img src="img/printf_var.png" alt="img/printf_var.png"></div><br></div></div></div></div><br>