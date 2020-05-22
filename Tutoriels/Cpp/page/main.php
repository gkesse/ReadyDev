<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la programmation en C++</div></a></div></div><div class="Body2 Orange">Le <b>C++</b> est un langage de programmation orienté objet.<br>Le but de ce tutoriel est de vous apprendre la programmation avec le <b>C++</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1590146880268"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1590146880268");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3">Le C++ est un langage de programmation orienté objet.<br><br><div class="Img3 GImage"><img src="img/banner_cpp.png" alt="img/banner_cpp.png"></div><br>Dans ce tutoriel, nous utiliserons:<br>- g++, comme compilateur C++.<br><br><h3 class="Title8 GTitle3">Documentation sur C++</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="http://www.cplusplus.com/reference/">http://www.cplusplus.com/reference/</a><br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programme de compilation"><a class="Link3" href="#">Programme de compilation</a></h1><div class="Body3">Le programme de compilation permet de compiler le programme et générer un exécutable.<br>Le fichier Makefile permet de définir les règles de compilation.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1590156374967"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1590156374967");</script></div><br><h2 class="Title7 GTitle2" id="Programme de compilation-Fichier Makefile"><a class="Link9" href="#Programme de compilation">Fichier Makefile</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GSRC = ../code/GProject/src
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/gp_cpp

GINCS = \
    -I$(GSRC)/include \
    
GLIBS = \
    
GOBJS = \
    $(patsubst $(GSRC)/%.cpp, $(GBUILD)/%.o, $(wildcard $(GSRC)/*.cpp)) \
    $(patsubst $(GSRC)/manager/%.cpp, $(GBUILD)/%.o, $(wildcard $(GSRC)/manager/*.cpp)) \

GCFLAGS = \
    -std=gnu++11 \
    
all: compile run

compile: $(GOBJS)
	@if ! [ -d $(GBIN) ] ; then mkdir -p $(GBIN) ; fi
	g++ -o $(GTARGET) $(GOBJS) $(GLIBS) 
$(GBUILD)/%.o: $(GSRC)/%.cpp
	@if ! [ -d $(GBUILD) ] ; then mkdir -p $(GBUILD) ; fi
	g++ $(GCFLAGS) -c $&lt; -o $@ $(GINCS)
$(GBUILD)/%.o: $(GSRC)/manager/%.cpp
	@if ! [ -d $(GBUILD) ] ; then mkdir -p $(GBUILD) ; fi
	g++ $(GCFLAGS) -c $&lt; -o $@ $(GINCS)
run:
	@$(GTARGET) $(args)
clean: 
	rm -f $(GBUILD)/* $(GBIN)/*</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme de compilation-Compilation du projet"><a class="Link9" href="#Programme de compilation">Compilation du projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">make compile</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme de compilation-Exécution du projet"><a class="Link9" href="#Programme de compilation">Exécution du projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">make run argv="MY_PROCESS MY_ARGUMENTS"</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme de compilation-Nettoyage du projet"><a class="Link9" href="#Programme de compilation">Nettoyage du projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">make clean</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programme principal"><a class="Link3" href="#">Programme principal</a></h1><div class="Body3">Le programme principal est le point d'entrée de notre application.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1590156127919"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1590156127919");</script></div><br><h2 class="Title7 GTitle2" id="Programme principal-Programme principal"><a class="Link9" href="#Programme principal">Programme principal</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GProcess.h"
#include "GDebug.h"
//===============================================
int main(int argc, char** argv) {
    GDebug::Instance()-&gt;sep();
    GDebug::Instance()-&gt;write(__FUNCTION__, "()", _EOA_);
    GProcess::Instance()-&gt;process(argc, argv);
    return 0;
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programme de débogage"><a class="Link3" href="#">Programme de débogage</a></h1><div class="Body3">Le programme de débogage permet de tracer des messages dans le fichier log.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1590156849575"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1590156849575");</script></div><br><h2 class="Title7 GTitle2" id="Programme de débogage-Résultat du programme de débogage"><a class="Link9" href="#Programme de débogage">Résultat du programme de débogage</a></h2><br><div class="Img3 GImage"><img src="img/debug.png" alt="img/debug.png"></div><br><h2 class="Title7 GTitle2" id="Programme de débogage-Lecture du fichier log"><a class="Link9" href="#Programme de débogage">Lecture du fichier log</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">tail -f data/debug/debug.txt</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme de débogage-Traçage du séparateur"><a class="Link9" href="#Programme de débogage">Traçage du séparateur</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GDebug::sep() {
    const char* lSep = "=================================================";
    line(lSep);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme de débogage-Traçage des messages"><a class="Link9" href="#Programme de débogage">Traçage des messages</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GDebug::write(const char* key, ...) {
    if(key == 0) return;
    char lBuffer[512];
    char lDate[256];
    int lIndex = 0;
    date(lDate);
    lIndex += sprintf(&lBuffer[lIndex], "%s | ", lDate);
    lIndex += sprintf(&lBuffer[lIndex], "%s", key);
    va_list lArgs;
    va_start(lArgs, key);
    char* lData = 0;
    while(1) {
        std::string lData = va_arg(lArgs, char*);
        if(lData == _EOA_) break;
        lIndex += sprintf(&lBuffer[lIndex], "%s", lData.c_str());
    }
    va_end(lArgs);
    log(lBuffer);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme de débogage-Écriture d'une ligne de message"><a class="Link9" href="#Programme de débogage">Écriture d'une ligne de message</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GDebug::line(const char* data) {
    char lBuffer[512];
    char lDate[256];
    date(lDate);
    sprintf(lBuffer, "%s | %s", lDate, data);
    log(lBuffer);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme de débogage-Lecture de la date courante"><a class="Link9" href="#Programme de débogage">Lecture de la date courante</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GDebug::date(char* buffer) {
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme de débogage-Lecture du chemin du fichier log"><a class="Link9" href="#Programme de débogage">Lecture du chemin du fichier log</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#if defined(__unix)
void GDebug::homePathUnix() {
    char lCommand[256];
    char lHomePath[256];
    char lDebugPath[256];
    sprintf(lCommand, "%s", "echo $HOME");
    FILE* lpFile = popen(lCommand, "r");
    int lBytes = fread(lHomePath, 1, 255, lpFile);
    lHomePath[lBytes - 1] = 0;
    pclose(lpFile);
    sprintf(lDebugPath, "%s%s", lHomePath, GDEBUG_DATA_PATH);
    sprintf(m_filename, "%s%s", lDebugPath, "/debug.txt");
    sprintf(lCommand, "if ! [ -d \"%s\" ] ; then mkdir -p %s ; fi", lDebugPath, lDebugPath);
    lpFile = popen(lCommand, "r");
    pclose(lpFile);
}
#endif
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme de débogage-Écriture dans le fichier log"><a class="Link9" href="#Programme de débogage">Écriture dans le fichier log</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GDebug::log(const char* data) {
    FILE* lpFile = fopen(m_filename, "a+");
    fprintf(lpFile, "%s\n", data);
    fclose(lpFile);
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programme des processus"><a class="Link3" href="#">Programme des processus</a></h1><div class="Body3">Le programme des processus permet de définir la tâche à exécuter.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1590157593666"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1590157593666");</script></div><br><h2 class="Title7 GTitle2" id="Programme des processus-Résultat du programme des processus"><a class="Link9" href="#Programme des processus">Résultat du programme des processus</a></h2><br><div class="Img3 GImage"><img src="img/process.png" alt="img/process.png"></div><br><h2 class="Title7 GTitle2" id="Programme des processus-Choix du processus"><a class="Link9" href="#Programme des processus">Choix du processus</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcess::process(int argc, char** argv) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    bool lRunFlag = 0;
    std::string lKey = "";
    for(int i = 1; i &lt; argc;) {
    	std::string lKey = argv[i++];
        if(lKey == "test") {test(argc, argv); lRunFlag = 1; break;}
        break;
    }
    if(lRunFlag == 0) help(argc, argv);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme des processus-Processus d'aide"><a class="Link9" href="#Programme des processus">Processus d'aide</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcess::help(int argc, char** argv) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    const char* lModule = "gp_cpp";
    printf("\n");
    printf("%s\n", "Description:");
    printf("\t%s\n", "Operations sur le module gp_cpp.");
    printf("\n");
    printf("%s\n", "Utilisation:");
    printf("\t\%s : %s\n", lModule, "afficher aide");
    printf("\t\%s %s : %s\n", lModule, "test", "lancer test");
    printf("\n");
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme des processus-Processus des tests"><a class="Link9" href="#Programme des processus">Processus des tests</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcess::test(int argc, char** argv) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    GFile::Instance()-&gt;test(argc, argv);
}
//===============================================</xmp></pre></div><br></div></div></div></div><br>