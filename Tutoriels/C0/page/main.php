<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la programmation en C</div></a></div></div><div class="Body2 Orange"><b>C</b> est un langage de programmation.<br>Le but de ce tutoriel est de vous apprendre la programmation en <b>C</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3">Le but de cette section est de vous présenter les outils nécessaires pour apprendre la programmation en C.<br><br>Dans ce tutoriel, nous utiliserons:<br>- gcc, comme compilateur C.<br><br><h3 class="Title8 GTitle3">Documentation sur C</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="http://www.cplusplus.com/reference/">http://www.cplusplus.com/reference/</a><br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programme de compilation"><a class="Link3" href="#">Programme de compilation</a></h1><div class="Body3">Le but de cette section est de vous présenter la <span class="GColor1" style="color:lime;">Programme de compilation</span> C.<br><br>Le fichier Makefile permet de définir les règles de compilation.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1589848653356"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1589848653356");</script></div><br><h2 class="Title7 GTitle2" id="Programme de compilation-Fichier Makefile"><a class="Link9" href="#Programme de compilation">Fichier Makefile</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GSRC = ../code/GProject/src
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/gp_c

GINCS = \
    -I$(GSRC)/include \

GLIBS = \

GOBJS = \
    $(patsubst $(GSRC)/%.c, $(GBUILD)/%.o, $(wildcard $(GSRC)/*.c)) \
    $(patsubst $(GSRC)/manager/%.c, $(GBUILD)/%.o, $(wildcard $(GSRC)/manager/*.c)) \

GCFLAGS = \
    -std=gnu11 \

all: compile run
 
compile: $(GOBJS)
	@if ! [ -d "$(GBIN)" ] ; then mkdir $(GBIN) ; fi
	gcc -o $(GTARGET) $(GOBJS) $(GLIBS) 
$(GBUILD)/%.o: $(GSRC)/%.c
	@if ! [ -d "$(GBUILD)" ] ; then mkdir $(GBUILD) ; fi
	gcc $(GCFLAGS) -c $&lt; -o $@ $(GINCS)
$(GBUILD)/%.o: $(GSRC)/manager/%.c
	@if ! [ -d "$(GBUILD)" ] ; then mkdir $(GBUILD) ; fi
	gcc $(GCFLAGS) -c $&lt; -o $@ $(GINCS)
run:
	@echo
	@./bin/gp_c $(argv)
	@echo
clean:
	rm -f $(GBUILD)/* $(GBIN)/*</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme de compilation-Compilation du projet"><a class="Link9" href="#Programme de compilation">Compilation du projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">make compile</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme de compilation-Exécution du projet"><a class="Link9" href="#Programme de compilation">Exécution du projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">make run argv="MY_PROCESS MY_ARGUMENTS"</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme de compilation-Nettoyage du projet"><a class="Link9" href="#Programme de compilation">Nettoyage du projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">make clean</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programme principal"><a class="Link3" href="#">Programme principal</a></h1><div class="Body3">Le but de cette section est de vous présenter le <span class="GColor1" style="color:lime;">Programme principal </span>en C.<br><br>Le programme principal est le point d'entrée de notre application.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1589805039324"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1589805039324");</script></div><br><h2 class="Title7 GTitle2" id="Programme principal-Programme principal"><a class="Link9" href="#Programme principal">Programme principal</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GProcess.h"
#include "GDebug.h"
//===============================================
int main(int argc, char** argv) {
    GDebug()-&gt;Sep();
    GDebug()-&gt;Write(__FUNCTION__, "()", _EOA_);
    GProcess()-&gt;Run(argc, argv);
    return 0;
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programme de débogage"><a class="Link3" href="#">Programme de débogage</a></h1><div class="Body3">Le but de cette section est de vous présenter le <span class="GColor1" style="color:lime;">Programme de débogage</span> en C.<br><br>Le programme de débogage permet de tracer des messages dans le fichier log.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1589852610186"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1589852610186");</script></div><br><h2 class="Title7 GTitle2" id="Programme de débogage-Résultat du programme de débogage"><a class="Link9" href="#Programme de débogage">Résultat du programme de débogage</a></h2><br><div class="Img3 GImage"><img src="img/debug.png" alt="img/debug.png"></div><br><h2 class="Title7 GTitle2" id="Programme de débogage-Lecture du fichier log"><a class="Link9" href="#Programme de débogage">Lecture du fichier log</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">tail -f .readydev/readyc/data/debug/debug.txt</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme de débogage-Traçage du séparateur"><a class="Link9" href="#Programme de débogage">Traçage du séparateur</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GDebug_Sep() {
    const char* lSep = "=================================================";
    GDebug_Line(lSep);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme de débogage-Traçage des messages"><a class="Link9" href="#Programme de débogage">Traçage des messages</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GDebug_Write(const char* key, ...) {
    if(key == 0) return;
    char lBuffer[256];
    char lDate[256];
    int lIndex = 0;
    GDebug_Date(lDate);
    lIndex += sprintf(&lBuffer[lIndex], "%s | ", lDate);
    lIndex += sprintf(&lBuffer[lIndex], "%s", key);
    va_list lArgs;
    va_start(lArgs, key);
    while(1) {
        char* lData = va_arg(lArgs, char*);
        if(!strcmp(lData, _EOA_)) break;
        lIndex += sprintf(&lBuffer[lIndex], "%s", lData);
    }
    va_end(lArgs);
    GDebug_Log(lBuffer);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme de débogage-Écriture du ligne de message"><a class="Link9" href="#Programme de débogage">Écriture du ligne de message</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GDebug_Line(const char* data) {
    char lBuffer[512];
    char lDate[256];
    GDebug_Date(lDate);
    sprintf(lBuffer, "%s | %s", lDate, data);
    GDebug_Log(lBuffer);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme de débogage-Lecture de la date courante"><a class="Link9" href="#Programme de débogage">Lecture de la date courante</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GDebug_Date(char* buffer) {
    time_t lRawTime;
    time(&lRawTime);
    struct tm* lTimeInfo = localtime(&lRawTime);
    int lDay = lTimeInfo-&gt;tm_mday;
    int lMonth = lTimeInfo-&gt;tm_mon + 1;
    int lYear = lTimeInfo-&gt;tm_year + 1900;
    int lHour = lTimeInfo-&gt;tm_hour;
    int lMin = lTimeInfo-&gt;tm_min;
    int lSec = lTimeInfo-&gt;tm_sec;
    if(lTimeInfo-&gt;tm_isdst == 1) lHour++;
    sprintf(buffer, "%02d/%02d/%04d %02d:%02d:%02d", lDay, lMonth, lYear, lHour, lMin, lSec);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme de débogage-Écriture dans le fichier log"><a class="Link9" href="#Programme de débogage">Écriture dans le fichier log</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GDebug_Log(char* data) {
    FILE* lpFile = fopen(m_GDebugO-&gt;filename, "a+");
    fprintf(lpFile, "%s\n", data);
    fclose(lpFile);
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programme des processus"><a class="Link3" href="#">Programme des processus</a></h1><div class="Body3">Le but de cette section est de vous présenter le <span class="GColor1" style="color:lime;">Programme des processus </span>en C.<br><br>Le programme des processus permet de définir la tâche à exécuter.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1589874219385"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1589874219385");</script></div><br><h2 class="Title7 GTitle2" id="Programme des processus-Résultat du programme des processus"><a class="Link9" href="#Programme des processus">Résultat du programme des processus</a></h2><br><div class="Img3 GImage"><img src="img/process.png" alt="img/process.png"></div><br><h2 class="Title7 GTitle2" id="Programme des processus-Choix du processus"><a class="Link9" href="#Programme des processus">Choix du processus</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GProcess_Run(int argc, char** argv) {
    GDebug()-&gt;Write(__FUNCTION__, "()", _EOA_);
    int lRunFlag = 0;
    for(int i = 1; i &lt; argc; i++) {
        char* lKey = argv[i];
        if(!strcmp(lKey, "test")) {GProcess_Test(argc, argv); lRunFlag = 1; break;}
    }
    if(lRunFlag == 0) {GProcess_Help(argc, argv);}
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme des processus-Processus d'aide"><a class="Link9" href="#Programme des processus">Processus d'aide</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GProcess_Help(int argc, char** argv) {
    GDebug()-&gt;Write(__FUNCTION__, "()", _EOA_);
    const char* lModule = "gp_c";
    printf("\n");
    printf("%s\n", "Description:");
    printf("\t%s\n", "Operations sur le module gp_c.");
    printf("\n");
    printf("%s\n", "Utilisation:");
    printf("\t\%s : %s\n", lModule, "afficher aide");
    printf("\t\%s %s : %s\n", lModule, "test", "lancer test");
    printf("\n");
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme des processus-Processus des tests"><a class="Link9" href="#Programme des processus">Processus des tests</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GProcess_Test(int argc, char** argv) {
    GDebug()-&gt;Write(__FUNCTION__, "()", _EOA_);
    GDebug()-&gt;Test(argc, argv);
}
//===============================================</xmp></pre></div><br></div></div></div></div><br>