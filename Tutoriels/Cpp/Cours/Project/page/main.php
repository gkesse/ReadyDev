<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer un projet en C++</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer un projet en <b>C++</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>C++</b> est un langage de programmation compilé permettant la programmation sous de multiples paradigmes (comme la programmation procédurale, orientée objet ou générique). Ses bonnes performances, et sa compatibilité avec le C en font un des langages de programmation les plus utilisés dans les applications où la performance est critique.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Cpp/img/b_cours_project.png" alt="/Tutoriels/Cpp/img/b_cours_project.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un projet en C++"><a class="Link3" href="#">Créer un projet en C++</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer un projet en C++-Introduction"><a class="Link9" href="#Créer un projet en C++">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer un projet en C++ qui affiche un message à l'écran (Bonjour tout le monde).<br><br><h2 class="Title7 GTitle2" id="Créer un projet en C++-Programme principal"><a class="Link9" href="#Créer un projet en C++">Programme principal</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//================================================
#include &lt;iostream&gt;
//================================================
int main(int argc, char** argv) {
    std::cout &lt;&lt; "Bonjour tout le monde\n";
    return 0;
}
//================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet en C++-Fichier Makefile"><a class="Link9" href="#Créer un projet en C++">Fichier Makefile</a></h2><br><h3 class="Title8 GTitle3">Makefile.cmd.mak</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GSRC = $(GPROJECT_SRC)
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)\rdcpp.exe

GINCS = \
    -I$(GSRC)\include \
    
GLIBS = \

GOBJS = \
    $(patsubst $(GSRC)/%.cpp, $(GBUILD)/%.o, $(wildcard $(GSRC)/*.cpp)) \

GCFLAGS = \
    -std=gnu++11 \
    
#================================================
all: clean_exe compile run
#================================================
# cpp
compile: $(GOBJS)
	@if not exist $(GBIN) ( mkdir $(GBIN) )
	g++ $(GCFLAGS) -o $(GTARGET) $(GOBJS) $(GLIBS) 
$(GBUILD)/%.o: $(GSRC)/%.cpp
	@if not exist $(GBUILD) ( mkdir $(GBUILD) )
	g++ $(GCFLAGS) -c $&lt; -o $@ $(GINCS)
run:
	$(GTARGET)
clean_exe: 
	@if not exist $(GBIN) ( mkdir $(GBIN) )
	del /s /q $(GBIN)\*.exe
clean: 
	@if not exist $(GBIN) ( mkdir $(GBIN) )
	@if not exist $(GBUILD) ( mkdir $(GBUILD) )
	del /s /q $(GBUILD)\*.o $(GBIN)\*.exe
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet en C++-Variables environnement"><a class="Link9" href="#Créer un projet en C++">Variables environnement</a></h2><br><h3 class="Title8 GTitle3">env.bat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off
::===============================================
set "PATH=C:\MinGW\bin;%PATH%"
::===============================================
set "GPROJECT_ROOT=C:\Users\Admin\Downloads\Programs"
set "GPROJECT_PATH=%GPROJECT_ROOT%\ReadyCpp"
set "GPROJECT_SRC=%GPROJECT_PATH%\app\code\readyapp\src"
::===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">make_c.bat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off
::===============================================
set "args=%*"             
setlocal enabledelayedexpansion
set "lArgs=%*"             
set "lArgs=!lArgs:*%1 =!"  
endlocal && ( set "args=%lArgs%" )
::===============================================
mingw32-make -f Makefile.cmd.mak %1 argv=%args%
::===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet en C++-Compilation automatique"><a class="Link9" href="#Créer un projet en C++">Compilation automatique</a></h2><br><h3 class="Title8 GTitle3">Terminal</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">make_c all</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet en C++-Compilation manuelle"><a class="Link9" href="#Créer un projet en C++">Compilation manuelle</a></h2><br><h3 class="Title8 GTitle3">Terminal</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">del /q build\* bin\*
g++ -std=gnu++11 -W -Wall -Wno-unused-parameter  -c src/main.cpp -o build/main.o
g++ -o bin\rdcpp.exe  build/main.o
bin\rdcpp.exe</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet en C++-Résultat"><a class="Link9" href="#Créer un projet en C++">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Cpp/img/i_cours_project.png" alt="/Tutoriels/Cpp/img/i_cours_project.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1600474250946"><div class="Row26">List 1 &gt; Cpp &gt; basics</div></div><script>loadList1("Loader_1600474250946","Cpp","basics");</script></div><br></div></div></div></div><br>