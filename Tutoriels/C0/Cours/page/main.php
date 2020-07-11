<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la programmation en C</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre la programmation en <b>C</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>C</b> est un langage de programmation impératif généraliste, de bas niveau offrant au développeur une marge de contrôle importante sur la machine (notamment sur la gestion de la mémoire) et est de ce fait utilisé pour réaliser les fondations (compilateurs, interpréteurs) des langages plus modernes. <br><br><div class="Img3 GImage"><img src="/data/img/defaults/banner_c.png" alt="/data/img/defaults/banner_c.png"></div><br><h2 class="Title7 GTitle2" id="Introduction-Prérequis"><a class="Link9" href="#Introduction">Prérequis</a></h2><br>$\checkmark$ Apprendre la compilation d'un projet C avec MinGW<br><br><h2 class="Title7 GTitle2" id="Introduction-Outils"><a class="Link9" href="#Introduction">Outils</a></h2><br>$\checkmark$ Un éditeur de texte (Notepad++)<br>$\checkmark$ Un compilateur C (MinGW)<br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un projet C"><a class="Link3" href="#">Créer un projet C</a></h1><div class="Body3">Création d'un projet C<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1593248706112"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1593248706112");</script></div><br><h2 class="Title7 GTitle2" id="Créer un projet C-Procédure"><a class="Link9" href="#Créer un projet C">Procédure</a></h2><br>$\checkmark$ Créer un fichier source (main.c)<br>$\checkmark$ Créer un fichier Makefile (Makefile)<br>$\checkmark$ Compiler le projet<br>$\checkmark$ Exécuter le projet<br><br><h2 class="Title7 GTitle2" id="Créer un projet C-Fichier source"><a class="Link9" href="#Créer un projet C">Fichier source</a></h2><br>Le fichier source contient le code C.<br><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
//===============================================
int main(int argc, char** argv) {
    printf("Bonjour tout le monde\n");
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet C-Fichier Makefile"><a class="Link9" href="#Créer un projet C">Fichier Makefile</a></h2><br>Le fichier Makefile contient les règles de compilation.<br><br><h3 class="Title8 GTitle3">Makefile</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GSRC = ../code/GProject/src
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
	del /q $(GBUILD)\*.o $(GBIN)\*.exe</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet C-Compiler le projet"><a class="Link9" href="#Créer un projet C">Compiler le projet</a></h2><br>La compilation du projet génère les fichiers objet, les assemble et produit le fichier exécutable.<br><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">make</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet C-Exécuter le projet"><a class="Link9" href="#Créer un projet C">Exécuter le projet</a></h2><br>L'exécution du projet lance le fichier exécutable.<br><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">make run argv="test"</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet C-Nettoyer le projet"><a class="Link9" href="#Créer un projet C">Nettoyer le projet</a></h2><br>Le nettoyage du projet supprime les fichiers objet et le fichier exécutable.<br><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">make clean</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet C-Résultat"><a class="Link9" href="#Créer un projet C">Résultat</a></h2><br><div class="Img3 GImage"><img src="img/printf.png" alt="img/printf.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Afficher un message"><a class="Link3" href="#">Afficher un message</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1593250659674"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1593250659674");</script></div><br><h2 class="Title7 GTitle2" id="Afficher un message-Afficher un message"><a class="Link9" href="#Afficher un message">Afficher un message</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GTestBasic_Printf(int argc, char** argv) {
    printf("Bonjour tout le monde\n");
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Afficher un message-Résultat"><a class="Link9" href="#Afficher un message">Résultat</a></h2><br><div class="Img3 GImage"><img src="img/printf.png" alt="img/printf.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Afficher le contenu d'une variable"><a class="Link3" href="#">Afficher le contenu d'une variable</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1593368867024"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1593368867024");</script></div><br><h2 class="Title7 GTitle2" id="Afficher le contenu d'une variable-Afficher le contenu d'une variable"><a class="Link9" href="#Afficher le contenu d'une variable">Afficher le contenu d'une variable</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GTestBasic_PrintfVar(int argc, char** argv) {
    char* lString = "Bonjour tout le monde";
    int lInt = 1234;
    float lFoat = 3.14;
    printf("lString: %s\n", lString);
    printf("lInt: %d\n", lInt);
    printf("lFoat: %f\n", lFoat);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Afficher le contenu d'une variable-Résultat"><a class="Link9" href="#Afficher le contenu d'une variable">Résultat</a></h2><br><div class="Img3 GImage"><img src="img/printf_var.png" alt="img/printf_var.png"></div><br><h2 class="Title7 GTitle2" id="Afficher le contenu d'une variable-Problème"><a class="Link9" href="#Afficher le contenu d'une variable">Problème</a></h2><br>✘ L'affichage n'est pas bien structuré<br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Formater l'affichage d'un message"><a class="Link3" href="#">Formater l'affichage d'un message</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1593711824602"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1593711824602");</script></div><br><h2 class="Title7 GTitle2" id="Formater l'affichage d'un message-Formater l'affichage d'un message"><a class="Link9" href="#Formater l'affichage d'un message">Formater l'affichage d'un message</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GTestBasic_PrintfFormat(int argc, char** argv) {
    char* lString = "Bonjour tout le monde";
    int lInt = 1234;
    float lFoat = 3.14;
    printf("%-20s : %s\n", "lString", lString);
    printf("%-20s : %d\n", "lInt", lInt);
    printf("%-20s : %f\n", "lFoat", lFoat);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Formater l'affichage d'un message-Résultat"><a class="Link9" href="#Formater l'affichage d'un message">Résultat</a></h2><br><div class="Img3 GImage"><img src="img/printf_format.png" alt="img/printf_format.png"></div><br><br><h2 class="Title7 GTitle2" id="Formater l'affichage d'un message-Avantage"><a class="Link9" href="#Formater l'affichage d'un message">Avantage</a></h2><br>$\checkmark$ L'affichage est bien structuré<br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Saisir une donnée au clavier"><a class="Link3" href="#">Saisir une donnée au clavier</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1593718225475"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1593718225475");</script></div><br><h2 class="Title7 GTitle2" id="Saisir une donnée au clavier-Saisir une donnée au clavier"><a class="Link9" href="#Saisir une donnée au clavier">Saisir une donnée au clavier</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GTestBasic_Scanf(int argc, char** argv) {
    char lString[256];
    int lInt;
    float lFoat;
    printf("Saisir une chaine ? ");
    scanf("%s", lString);
    printf("Saisir un entier ? ");
    scanf("%d", &lInt);
    printf("Saisir un reel ? ");
    scanf("%f", &lFoat);
    printf("\nVous avez saisi :\n");
    printf("%-20s : %s\n", "lString", lString);
    printf("%-20s : %d\n", "lInt", lInt);
    printf("%-20s : %f\n", "lFoat", lFoat);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Saisir une donnée au clavier-Résultat"><a class="Link9" href="#Saisir une donnée au clavier">Résultat</a></h2><br><div class="Img3 GImage"><img src="img/scanf.png" alt="img/scanf.png"></div><br><h2 class="Title7 GTitle2" id="Saisir une donnée au clavier-Problème"><a class="Link9" href="#Saisir une donnée au clavier">Problème</a></h2><br>✘ On ne peut pas saisir des chaines espacées<br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Saisir des chaines espacées au clavier"><a class="Link3" href="#">Saisir des chaines espacées au clavier</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1593726977044"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1593726977044");</script></div><br><h2 class="Title7 GTitle2" id="Saisir des chaines espacées au clavier-Saisir des chaines espacées au clavier"><a class="Link9" href="#Saisir des chaines espacées au clavier">Saisir des chaines espacées au clavier</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GTestBasic_Fgets(int argc, char** argv) {
    char lString[256];
    printf("Saisir une chaine ? ");
    fgets(lString, 255, stdin);
    printf("\nVous avez saisi :\n");
    printf("%-20s : %s\n", "lString", lString);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Saisir des chaines espacées au clavier-Résultat"><a class="Link9" href="#Saisir des chaines espacées au clavier">Résultat</a></h2><br><div class="Img3 GImage"><img src="img/fgets.png" alt="img/fgets.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Gérer les conditions"><a class="Link3" href="#">Gérer les conditions</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1593755929800"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1593755929800");</script></div><br><h2 class="Title7 GTitle2" id="Gérer les conditions-Gérer les conditions"><a class="Link9" href="#Gérer les conditions">Gérer les conditions</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GTestBasic_IfElse(int argc, char** argv) {
    int lMin = 4000;
    int lMax = 6000;
    int lVal = 0;
    
    for(int i = 0; i &lt; 10; i++) {
        if(lVal &lt; lMin) {
            printf("L'entier (%4d) est inferieur a (%d)\n", lVal, lMin);
        }
        else if(lVal &lt;= lMax) {
            printf("L'entier (%4d) est compris entre (%d) et (%d)\n", lVal, lMin, lMax);
        }
        else {
            printf("L'entier (%4d) est superieur a (%d)\n", lVal, lMax);
        }
        lVal += 1000;
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gérer les conditions-Résultat"><a class="Link9" href="#Gérer les conditions">Résultat</a></h2><br><div class="Img3 GImage"><img src="img/if_else.png" alt="img/if_else.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation en C</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1594465340717"><div class="Row26">List 1 &gt; C &gt; basics</div></div><script>loadList1("Loader_1594465340717","C","basics");</script></div><br><span class="GColor1" style="color:lime;">Programmation avancée en C</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1594465358756"><div class="Row26">List 1 &gt; C &gt; advanced</div></div><script>loadList1("Loader_1594465358756","C","advanced");</script></div><br></div></div></div></div><br>