<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la programmation en C++</div></a></div></div><div class="Body2 Orange">Le <b>C++</b> est un langage de programmation orienté objet.<br>Le but de ce tutoriel est de vous apprendre la programmation avec le <b>C++</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1590146880268"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1590146880268");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3">Le C++ est un langage de programmation orienté objet.<br><br><div class="Img3 GImage"><img src="/data/img/defaults/banner_cpp.png" alt="/data/img/defaults/banner_cpp.png"></div><br>Dans ce tutoriel, nous utiliserons:<br>- g++, comme compilateur C++.<br><br><h3 class="Title8 GTitle3">Documentation sur C++</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="http://www.cplusplus.com/reference/">http://www.cplusplus.com/reference/</a><br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programme de compilation"><a class="Link3" href="#">Programme de compilation</a></h1><div class="Body3">Le programme de compilation permet de compiler le programme et générer un exécutable.<br>Le fichier Makefile permet de définir les règles de compilation.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1590156374967"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1590156374967");</script></div><br><h2 class="Title7 GTitle2" id="Programme de compilation-Fichier Makefile"><a class="Link9" href="#Programme de compilation">Fichier Makefile</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GSRC = ../code/GProject/src
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
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programme des commandes shell"><a class="Link3" href="#">Programme des commandes shell</a></h1><div class="Body3">Le programme des commandes shell permet d'exécuter des scripts shell ou batch.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1590171231094"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1590171231094");</script></div><br><h2 class="Title7 GTitle2" id="Programme des commandes shell-Résultat du programme des commandes shell"><a class="Link9" href="#Programme des commandes shell">Résultat du programme des commandes shell</a></h2><br><h2 class="Title7 GTitle2" id="Programme des commandes shell-Exécution de commande shell"><a class="Link9" href="#Programme des commandes shell">Exécution de commande shell</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GShell::run(const char* command, char* output, int size, int shift) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    FILE* lpFile = popen(command, "r");
    if(output != 0) {
        int lBytes = fread(output, 1, size, lpFile);
        if(lBytes &gt;= 1) {
            output[lBytes] = 0;
            if(shift == 1) output[lBytes - 1] = 0;
        }
    }
    pclose(lpFile);
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programme sur les chaines"><a class="Link3" href="#">Programme sur les chaines</a></h1><div class="Body3">Le programme sur les chaines permet de gérer les opérations sur les chaines.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1590171157724"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1590171157724");</script></div><br><h2 class="Title7 GTitle2" id="Programme sur les chaines-Suppression des espaces autour d'une chaine"><a class="Link9" href="#Programme sur les chaines">Suppression des espaces autour d'une chaine</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
std::string GString::trim(std::string str) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    return ltrim(rtrim(str));
}
//===============================================
std::string GString::ltrim(std::string str) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    std::string lString = str;
    lString.erase(lString.begin(), std::find_if(lString.begin(), lString.end(), std::not1(std::ptr_fun&lt;int, int&gt;(std::isspace))));
    return lString;
}
//===============================================
std::string GString::rtrim(std::string str) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    std::string lString = str;
    lString.erase(std::find_if(lString.rbegin(), lString.rend(), std::not1(std::ptr_fun&lt;int, int&gt;(std::isspace))).base(), lString.end());
    return lString;
}
//===============================================
</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les chaines-Division d'une chaine"><a class="Link9" href="#Programme sur les chaines">Division d'une chaine</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
std::vector&lt;std::string&gt; GString::split(std::string str, char sep) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    std::istringstream lStream(str);
    std::string lString;    
    std::vector&lt;std::string&gt; lStringMap;
    while(getline(lStream, lString, sep)) {
        lStringMap.push_back(lString);
    }
    return lStringMap;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les chaines-Lecture du nom d'un fichier"><a class="Link9" href="#Programme sur les chaines">Lecture du nom d'un fichier</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
std::string GString::getFilename(std::string path) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    if(path.empty()) {return {};}
    
    int lLength = path.length();
    int lIndex = path.find_last_of("/\\");
    
    if(lIndex == std::string::npos) {return path;}

    if (lIndex + 1 &gt;= lLength) {
        lLength--;
        lIndex = path.substr(0, lLength).find_last_of("/\\");
        if (lLength == 0) {return path;}
        if (lIndex == 0) {return path.substr(1, lLength - 1);}
        if (lIndex == std::string::npos) {return path.substr(0, lLength);}
        return path.substr(lIndex + 1, lLength - lIndex - 1);
    }
    return path.substr(lIndex + 1, lLength - lIndex);
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programme sur l'affichage des données"><a class="Link3" href="#">Programme sur l'affichage des données</a></h1><div class="Body3">Le programme sur l'affichage des données permet de gérer l'affichage des données.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1590190657768"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1590190657768");</script></div><br><h2 class="Title7 GTitle2" id="Programme sur l'affichage des données-Affichage des données au format clé-valeur"><a class="Link9" href="#Programme sur l'affichage des données">Affichage des données au format clé-valeur</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GShow::showData(std::map&lt;std::string, std::string&gt; data) {
	GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    for(std::map&lt;std::string, std::string&gt;::iterator lItem = data.begin(); lItem != data.end(); ++lItem) {
        std::cout &lt;&lt; lItem-&gt;first &lt;&lt; " = " &lt;&lt; lItem-&gt;second &lt;&lt; "\n";
    }
}
//===============================================</xmp></pre></div><br><div class="Img3 GImage"><img src="img/map.png" alt="img/map.png"></div><br><h2 class="Title7 GTitle2" id="Programme sur l'affichage des données-Affichage des données au format CSV"><a class="Link9" href="#Programme sur l'affichage des données">Affichage des données au format CSV</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GShow::showData(std::vector&lt;std::vector&lt;std::string&gt;&gt; data) {
	GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    for(int i = 0; i &lt; data.size(); i++) {
        std::vector&lt;std::string&gt; lDataMap = data.at(i);
        
        for(int j = 0; j &lt; lDataMap.size(); j++) {
            std::string lData = lDataMap.at(j);
            printf("%*s", 20, lData.c_str());
        }
        printf("\n");
    }
}
//===============================================</xmp></pre></div><br><div class="Img3 GImage"><img src="img/csv.png" alt="img/csv.png"></div><br><h2 class="Title7 GTitle2" id="Programme sur l'affichage des données-Affichage de données de types quelconques"><a class="Link9" href="#Programme sur l'affichage des données">Affichage de données de types quelconques</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GShow::showData(int key, ...) {
	GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    char lBuffer[512];
    int lIndex = 0;
    va_list lArgs;
    va_start(lArgs, key);
    int lKey = key;
    while(1) {
        if(lKey == 0) break;
        if(lKey == 1) {
            int lData = va_arg(lArgs, int);
            lIndex += sprintf(&lBuffer[lIndex], "%d", lData);
        }
        else if(lKey == 2) {
            double lData = va_arg(lArgs, double);
            lIndex += sprintf(&lBuffer[lIndex], "%f", lData);
        }
        else if(lKey == 3) {
            char* lData = va_arg(lArgs, char*);
            lIndex += sprintf(&lBuffer[lIndex], "%s", lData);
        }
        lKey = va_arg(lArgs, int);
    }
    va_end(lArgs);
    printf("%s\n", lBuffer);
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programme sur les fichiers"><a class="Link3" href="#">Programme sur les fichiers</a></h1><div class="Body3">Le programme sur les fichiers permet de manipuler les fichiers.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1590171037675"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1590171037675");</script></div><br><h2 class="Title7 GTitle2" id="Programme sur les fichiers-Chargement du contenu"><a class="Link9" href="#Programme sur les fichiers">Chargement du contenu</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
std::string GFile::getData(std::string fileId) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    std::ifstream* lFile = m_ifstreamMap[fileId];
    std::string lData((std::istreambuf_iterator&lt;char&gt;(*lFile)), std::istreambuf_iterator&lt;char&gt;());
    return lData;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les fichiers-Chargement de données de configuration"><a class="Link9" href="#Programme sur les fichiers">Chargement de données de configuration</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
std::map&lt;std::string, std::string&gt; GFile::getDataMap(std::string fileId, char sep) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    std::ifstream* lFile = m_ifstreamMap[fileId];
    std::string lLine;
    std::map&lt;std::string, std::string&gt; lStringsMap;
    while(getline(*lFile, lLine)) {
        lLine = GString::Instance()-&gt;trim(lLine);
        if(lLine == "") continue;
        char lFirst = lLine.at(0);
        if(lFirst == '#') continue;
        std::vector&lt;std::string&gt; lStrings = GString::Instance()-&gt;split(lLine, sep);
        std::string lKey = lStrings.at(0);
        std::string lValue = lStrings.at(1);
        lStringsMap[lKey] = lValue;
    }
    return lStringsMap;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les fichiers-Chargement de données CSV"><a class="Link9" href="#Programme sur les fichiers">Chargement de données CSV</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
std::vector&lt;std::vector&lt;std::string&gt;&gt; GFile::getDataCsv(std::string fileId, char sep) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    std::ifstream* lFile = m_ifstreamMap[fileId];
    std::string lLine;
    std::vector&lt;std::vector&lt;std::string&gt;&gt; lStringsMap;
    while(getline(*lFile, lLine)) {
        lLine = GString::Instance()-&gt;trim(lLine);
        if(lLine == "") continue;
        char lFirst = lLine.at(0);
        if(lFirst == '#') continue;
        std::vector&lt;std::string&gt; lStringMap = GString::Instance()-&gt;split(lLine, sep);
        lStringsMap.push_back(lStringMap);
    }
    return lStringsMap;
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programme sur les répertoires"><a class="Link3" href="#">Programme sur les répertoires</a></h1><div class="Body3">Le programme sur les répertoires permet d'effectuer des opérations sur les répertoires.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1590170976991"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1590170976991");</script></div><br><h2 class="Title7 GTitle2" id="Programme sur les répertoires-Lecture du répertoire HOME"><a class="Link9" href="#Programme sur les répertoires">Lecture du répertoire HOME</a></h2><br><h3 class="Title8 GTitle3">Sous Linux</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#if defined(__unix)
void GDir::initHomePathUnix() {
	GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
	char lCommand[256];
	char lOutput[256];
	sprintf(lCommand, "%s", "echo $HOME");
	GShell::Instance()-&gt;run(lCommand, lOutput, 255, 1);
	m_homePath = std::string(lOutput);
    m_dataPath = m_homePath + GDIR_DATA_PATH;
}
#endif
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les répertoires-Lecture du répertoire des données"><a class="Link9" href="#Programme sur les répertoires">Lecture du répertoire des données</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
std::string GDir::getPath(std::string path) {
	GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    std::string lDataPath = m_dataPath + "/" + path;
	return lDataPath;
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programme sur les données de configuration"><a class="Link3" href="#">Programme sur les données de configuration</a></h1><div class="Body3">Le programme sur les données de configuration permet de manipuler un système de données stocké au format clé-valeur.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1590170829622"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1590170829622");</script></div><br><h2 class="Title7 GTitle2" id="Programme sur les données de configuration-Résulat du programme sur les données de configuration"><a class="Link9" href="#Programme sur les données de configuration">Résulat du programme sur les données de configuration</a></h2><br><div class="Img3 GImage"><img src="img/map.png" alt="img/map.png"></div><br><h2 class="Title7 GTitle2" id="Programme sur les données de configuration-Ajout ou modification d'une donnée"><a class="Link9" href="#Programme sur les données de configuration">Ajout ou modification d'une donnée</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GConfig::setData(std::string key, std::string value) {
	GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    m_dataMap[key] = value;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les données de configuration-Lecture d'une donnée"><a class="Link9" href="#Programme sur les données de configuration">Lecture d'une donnée</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
std::string GConfig::getData(std::string key) {
	GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    return m_dataMap[key];
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les données de configuration-Suppression d'une donnée"><a class="Link9" href="#Programme sur les données de configuration">Suppression d'une donnée</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GConfig::removeData(std::string key) {
	GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    std::map&lt;std::string, std::string&gt;::iterator lItem = m_dataMap.find(key);
    if(lItem != m_dataMap.end()) {
        m_dataMap.erase(lItem);
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les données de configuration-Taille des données"><a class="Link9" href="#Programme sur les données de configuration">Taille des données</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
int GConfig::size() {
	GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    return m_dataMap.size();
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les données de configuration-Affichage des données"><a class="Link9" href="#Programme sur les données de configuration">Affichage des données</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GConfig::showData() {
	GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    GShow::Instance()-&gt;showData(m_dataMap);
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programme sur les données CSV"><a class="Link3" href="#">Programme sur les données CSV</a></h1><div class="Body3">Le programme sur les données CSV permet de manipuler un système de données stocké au format CSV.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1590170599772"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1590170599772");</script></div><br><h2 class="Title7 GTitle2" id="Programme sur les données CSV-Résultat du programme sur les données CSV"><a class="Link9" href="#Programme sur les données CSV">Résultat du programme sur les données CSV</a></h2><br><div class="Img3 GImage"><img src="img/csv.png" alt="img/csv.png"></div><br><h2 class="Title7 GTitle2" id="Programme sur les données CSV-Ajout d'une ligne de données"><a class="Link9" href="#Programme sur les données CSV">Ajout d'une ligne de données</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GCsv::addRow() {
	GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    m_itemMap = new std::vector&lt;std::string&gt;;
    m_dataMap.push_back(m_itemMap);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les données CSV-Ajout d'une données"><a class="Link9" href="#Programme sur les données CSV">Ajout d'une données</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GCsv::addData(std::string data) {
	GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    m_itemMap-&gt;push_back(data);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les données CSV-Modification d'une donnée"><a class="Link9" href="#Programme sur les données CSV">Modification d'une donnée</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GCsv::setData(int row, int col, std::string data) {
	GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    std::vector&lt;std::string&gt;* lItemMap = m_dataMap.at(row);
    lItemMap-&gt;at(col) = data;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les données CSV-Lecture d'une donnée"><a class="Link9" href="#Programme sur les données CSV">Lecture d'une donnée</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
std::string GCsv::getData(int row, int col) {
	GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    std::vector&lt;std::string&gt;* lItemMap = m_dataMap.at(row);
    std::string lData = lItemMap-&gt;at(col);
    return lData;
}
//===============================================
</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les données CSV-Suppression d'une ligne de données"><a class="Link9" href="#Programme sur les données CSV">Suppression d'une ligne de données</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GCsv::removeData(int row) {
	GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    std::vector&lt;std::string&gt;* lItemMap = m_dataMap.at(row);
    lItemMap-&gt;clear();
    delete lItemMap;
    m_dataMap.erase(m_dataMap.begin() + row);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les données CSV-Suppression des données"><a class="Link9" href="#Programme sur les données CSV">Suppression des données</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GCsv::clear() {
	GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    for(int i = 0; i &lt; m_dataMap.size(); i++) {
        std::vector&lt;std::string&gt;* lItemMap = m_dataMap.at(i);
        lItemMap-&gt;clear();
        delete lItemMap;
    }
    m_dataMap.clear();
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les données CSV-Taille des données"><a class="Link9" href="#Programme sur les données CSV">Taille des données</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GCsv::size(int& row, int& col) {
	GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    std::vector&lt;std::string&gt;* lItemMap = m_dataMap.at(0);
    row = m_dataMap.size();
    col = lItemMap-&gt;size();
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme sur les données CSV-Affichage des données"><a class="Link9" href="#Programme sur les données CSV">Affichage des données</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GCsv::showData() {
	GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    GShow::Instance()-&gt;showData(m_dataMap);
}
//===============================================</xmp></pre></div><br></div></div></div></div><br>