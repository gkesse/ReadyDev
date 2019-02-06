<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la programmation avec le C</div></a></div></div><div class="Body2 Orange">Le <b>C</b> est un langage de programmation.<br>Le but de ce tutoriel est de vous apprendre la programmation avec le <b>C</b>.<br>Produit par <b>Gérard KESSE</b>.<br>&nbsp;<br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation sous Windows"><a class="Link3" href="#">Installation sous Windows</a></h1><div class="Body3">Le but de cette section est de vous présenter les différents outils nécessaires pour apprendre la programmation avec le <span class="GColor1" style="color:lime;">C</span>, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>Dans ce tutoriel, nous utiliserons, sous Windows:<br>-    MinGW, comme compilateur.<br>-    Notepad++, comme éditeur de texte.<br><br><h3 class="Title8 GTitle3">Télécharger MinGW</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="http://www.mingw.org/">http://www.mingw.org/</a><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://sourceforge.net/projects/mingw-w64/files/">https://sourceforge.net/projects/mingw-w64/files/</a><br><br><h3 class="Title8 GTitle3">Télécharger Notepad++</h3><a class="Link7 GLink1" style="color:lime;" href="https://notepad-plus-plus.org/fr/">https://notepad-plus-plus.org/fr/</a></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Gestionnaire de configuration"><a class="Link3" href="#">Gestionnaire de configuration</a></h1><div class="Body3">Le but de cette section est de vous apprendre à créer un <span class="GColor1" style="color:lime;">Gestionnaire de configuration </span>avec le C.<br>Produit par <b>Gérard KESSE</b>.<br><br><h3 class="Title8 GTitle3">Structures de données</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
typedef struct _GConfigNormalO GConfigNormalO;
typedef struct _GNodeO GNodeO;
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Nœud de données</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
struct _GNodeO {
    int m_index;
    char* m_key;
    char* m_value;
    GNodeO* m_next;
};
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Liste de données</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
struct _GConfigNormalO {
    GConfigO* m_parent;
    GNodeO* m_start;
    int m_size;
};
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Ajouter une donnée</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GConfigNormal_Set_Data(const char* key, const char* value) {
    GConfigNormalO* lConfigNormal = m_GConfigNormalO->m_child;
    int lExist = FALSE;
    GNodeO* lNode = lConfigNormal->m_start;
    while(lNode != 0) {
        int lStrcmp = strcmp(lNode->m_key, key);
        if(lStrcmp == 0) {
            sprintf(lNode->m_value, "%s", value);
            lExist = TRUE;
            break;
        }
        lNode = lNode->m_next;
    }

    if(lExist == FALSE) {
        lNode = (GNodeO*)malloc(sizeof(GNodeO));
        int lKey = strlen(key) + 1;
        int lValue = strlen(value) + 1;
        lNode->m_key = (char*)malloc(sizeof(char)*lKey);
        lNode->m_value = (char*)malloc(sizeof(char)*lValue);
        sprintf(lNode->m_key, "%s", key);
        sprintf(lNode->m_value, "%s", value);
        lNode->m_next = 0;
        lNode->m_index = lConfigNormal->m_size;
        if(lConfigNormal->m_start == 0) {
            lConfigNormal->m_start = lNode;
            lConfigNormal->m_size += 1;
            return;
        }

        GNodeO* lNode2 = lConfigNormal->m_start;
        while(lNode2->m_next != 0) {
            lNode2 = lNode2->m_next;
        }
        lNode2->m_next = lNode;
        lConfigNormal->m_size += 1;
    }
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Lire une donnée</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
char* GConfigNormal_Get_Data(const char* key) {
    GConfigNormalO* lConfigNormal = m_GConfigNormalO->m_child;
    GNodeO* lNode = lConfigNormal->m_start;
    while(lNode != 0) {
        int lStrcmp = strcmp(lNode->m_key, key);
        if(lStrcmp == 0) {
            return lNode->m_value;
        }
        lNode = lNode->m_next;
    }
    return "_NONE_";
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Lister les données</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GConfigNormal_Show() {
    GConfigNormalO* lConfigNormal = m_GConfigNormalO->m_child;
    GNodeO* lNode = lConfigNormal->m_start;
    while(lNode != 0) {
        char* lKey = lNode->m_key;
        char* lValue = lNode->m_value;
        printf("%s = %s\n", lKey, lValue);
        lNode = lNode->m_next;
    }
}
//===============================================</xmp></pre></div><br><br><br><br><br><br></div></div></div></div><br><br><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Utilisation de MinGW"><a class="Link3" href="#">Utilisation de MinGW</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">utiliser MinGW</span>, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>MinGW permet de compiler des projets développés en C.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1536327105034"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1536327105034");</script></div><br><h2 class="Title7 GTitle2" id="Utilisation de MinGW-Installer MinGW"><a class="Link9" href="#Utilisation de MinGW">Installer MinGW</a></h2><br><h3 class="Title8 GTitle3">Lancer MinGW</h3><div class="Img3 GImage"><img src="img/MinGW.png" alt="img/MinGW.png"></div><br><h3 class="Title8 GTitle3">Démarrer l'installation</h3><div class="Img3 GImage"><img src="img/MinGW_02.png" alt="img/MinGW_02.png"></div><br><h3 class="Title8 GTitle3">Définir le répertoire d'installation</h3><div class="Img3 GImage"><img src="img/MinGW_03.png" alt="img/MinGW_03.png"></div><br><h3 class="Title8 GTitle3">Continuer</h3><div class="Img3 GImage"><img src="img/MinGW_04.png" alt="img/MinGW_04.png"></div><br><h3 class="Title8 GTitle3">Sélectionner les packages à installer</h3><div class="Img3 GImage"><img src="img/MinGW_05.png" alt="img/MinGW_05.png"></div><br><h3 class="Title8 GTitle3">Installer les packages</h3><div class="Img3 GImage"><img src="img/MinGW_06.png" alt="img/MinGW_06.png"></div><br><h3 class="Title8 GTitle3">Appliquer</h3><div class="Img3 GImage"><img src="img/MinGW_07.png" alt="img/MinGW_07.png"></div><br><h3 class="Title8 GTitle3">Fermer</h3><div class="Img3 GImage"><img src="img/MinGW_08.png" alt="img/MinGW_08.png"></div><br><h3 class="Title8 GTitle3">Outil Make</h3><div class="Img3 GImage"><img src="img/MinGW_09.png" alt="img/MinGW_09.png"></div><br><h3 class="Title8 GTitle3">Compilateur C</h3><div class="Img3 GImage"><img src="img/MinGW_10.png" alt="img/MinGW_10.png"></div><br><h2 class="Title7 GTitle2" id="Utilisation de MinGW-Compiler un fichier source"><a class="Link9" href="#Utilisation de MinGW">Compiler un fichier source</a></h2><br><h3 class="Title8 GTitle3">Programme principal (main.c)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include <stdio.h>
//===============================================
int main(int argc, char** argv) {
    printf("\n### Fichier Source Unique\n\n");
    printf("Bonjour tout le monde\n");
    return 0;
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Fichier Makefile</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GSRC = ../src
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/GProject.exe

GOBJS = \
    $(GBUILD)/main.o
    
all: $(GOBJS)
	gcc -o $(GTARGET) $(GOBJS)
$(GBUILD)/main.o: $(GSRC)/main.c
	gcc -c $(GSRC)/main.c -o $(GBUILD)/main.o
clean:
	del /q $(GBUILD)\* $(GBIN)\*</xmp></pre></div><br><h3 class="Title8 GTitle3">Nettoyer le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\MinGW\bin

mingw32-make clean</xmp></pre></div><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\MinGW\bin

mingw32-make</xmp></pre></div><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\MinGW\bin

echo.
bin\GProject.exe
echo.

pause</xmp></pre></div><br><h3 class="Title8 GTitle3">Construire le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

call cmd_clean.bat
call cmd_compile.bat
call cmd_run.bat</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/MinGW_11.png" alt="img/MinGW_11.png"></div></div></div></div></div><br>