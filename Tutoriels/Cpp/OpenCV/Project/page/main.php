<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer un projet OpenCV en C++</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer un projet <b>OpenCV </b>en <b>C++</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>OpenCV </b>est une bibliothèque spécialisée dans le traitement d'images en temps réel. Elle met à disposition de nombreuses fonctionnalités permettant de créer des programmes en partant des données brutes&nbsp; jusqu'à la création d'interfaces graphiques. Elle propose la plupart des opérations en traitement des images, lecture, écriture et affichage d’une image; calcul de l'histogramme de niveaux de gris ou de couleurs; lissage, filtrage, seuillage et segmentation d'image; morphologie mathématique. Elle s'impose aujourd'hui comme un standard dans le domaine de la Vision par Ordinateur.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Cpp/img/b_opencv_project.png" alt="/Tutoriels/Cpp/img/b_opencv_project.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un projet OpenCV en C++"><a class="Link3" href="#">Créer un projet OpenCV en C++</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer un projet OpenCV en C++-Introduction"><a class="Link9" href="#Créer un projet OpenCV en C++">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer un projet qui charge et affiche une image à l'écran (equipe_de_france.png).<br><br><h2 class="Title7 GTitle2" id="Créer un projet OpenCV en C++-Programme principal"><a class="Link9" href="#Créer un projet OpenCV en C++">Programme principal</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;opencv2/opencv.hpp&gt;
//===============================================
int main(int argc, char** argv) {
    cv::Mat lImg = cv::imread("equipe_de_france.png");
    cv::namedWindow("ReadyApp", cv::WINDOW_AUTOSIZE);
    cv::imshow("ReadyApp", lImg);
    cv::waitKey(0);
    cv::destroyAllWindows();
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet OpenCV en C++-Fichier Makefile"><a class="Link9" href="#Créer un projet OpenCV en C++">Fichier Makefile</a></h2><br><h3 class="Title8 GTitle3">Makefile (Windows - MinGW)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GSRC = ..\src
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)\gp_cpp.exe

GINCS = \
    -IC:\Users\Admin\Downloads\Programs\ReadyLib\dev\opencv\2.4.13\mingw\include \
    
GLIBS = \
    -LC:\Users\Admin\Downloads\Programs\ReadyLib\dev\opencv\2.4.13\mingw\lib \
    -lopencv_core2413 -lopencv_highgui2413 -lopencv_imgproc2413 \

GOBJS = \
    $(patsubst $(GSRC)/%.cpp, $(GBUILD)/%.o, $(wildcard $(GSRC)/*.cpp))\

GCFLAGS = \
    -std=gnu++11 \
    
all: clean compile run

compile: $(GOBJS)
	@if not exist $(GBIN) ( mkdir $(GBIN) )
	g++ $(GCFLAGS) -o $(GTARGET) $(GOBJS) $(GLIBS) 
	@echo.
$(GBUILD)/%.o: $(GSRC)/%.cpp
	@if not exist $(GBUILD) ( mkdir $(GBUILD) )
	g++ $(GCFLAGS) -c $&lt; -o $@ $(GINCS)
run:
	@$(GTARGET)
clean_exe: 
	@if not exist $(GBIN) ( mkdir $(GBIN) )
	del /q $(GBIN)\*
clean: 
	@if not exist $(GBIN) ( mkdir $(GBIN) )
	@if not exist $(GBUILD) ( mkdir $(GBUILD) )
	del /q $(GBUILD)\* $(GBIN)\*</xmp></pre></div><br><h3 class="Title8 GTitle3">Makefile (Windows - MSYS)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GSRC = ../src
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/gp_cpp.exe

GINCS = \
    -I/mingw32/include/opencv4 \
    -I/mingw32/include \
    
GLIBS = \
    -L/mingw32/lib \
    -lopencv_core -lopencv_highgui -lopencv_imgcodecs \
    
GOBJS = \
    $(patsubst $(GSRC)/%.cpp, $(GBUILD)/%.o, $(wildcard $(GSRC)/*.cpp)) \

GCFLAGS = \
    -std=gnu++11 \
    
all: clean compile run

compile: $(GOBJS)
	@if ! [ -d $(GBIN) ] ; then mkdir -p $(GBIN) ; fi
	g++ $(GCFLAGS) -o $(GTARGET) $(GOBJS) $(GLIBS) 
	@echo
$(GBUILD)/%.o: $(GSRC)/%.cpp
	@if ! [ -d $(GBUILD) ] ; then mkdir -p $(GBUILD) ; fi
	g++ $(GCFLAGS) -c $&lt; -o $@ $(GINCS)
run:
	@$(GTARGET)
clean_exe: 
	rm -f $(GBIN)/*
clean: 
	rm -f $(GBUILD)/* $(GBIN)/*</xmp></pre></div><br><h3 class="Title8 GTitle3">Makefile (UNIX - make)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GSRC = ../src
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/gp_cpp

GINCS = \
    -I/usr/include/opencv4 \
    
GLIBS = \
    -lopencv_core -lopencv_highgui -lopencv_imgcodecs \

GOBJS = \
    $(patsubst $(GSRC)/%.cpp, $(GBUILD)/%.o, $(wildcard $(GSRC)/*.cpp)) \

GCFLAGS = \
    -std=gnu++11 \
    
all: clean compile run

compile: $(GOBJS)
	@if ! [ -d $(GBIN) ] ; then mkdir -p $(GBIN) ; fi
	g++ $(GCFLAGS) -o $(GTARGET) $(GOBJS) $(GLIBS) 
	@echo
$(GBUILD)/%.o: $(GSRC)/%.cpp
	@if ! [ -d $(GBUILD) ] ; then mkdir -p $(GBUILD) ; fi
	g++ $(GCFLAGS) -c $&lt; -o $@ $(GINCS)
run:
	@$(GTARGET)
clean_exe: 
	rm -f $(GBIN)/*
clean: 
	rm -f $(GBUILD)/* $(GBIN)/*</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet OpenCV en C++-Compilation"><a class="Link9" href="#Créer un projet OpenCV en C++">Compilation</a></h2><br><h3 class="Title8 GTitle3">compile.bat (Windows - MinGW)<br></h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off
::===============================================
set "PATH=C:\MinGW\bin"
set "PATH=C:\Users\Admin\Downloads\Programs\ReadyLib\dev\opencv\2.4.13\mingw\bin;%PATH%"
::===============================================
mingw32-make
::===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">compile (Windows - MSYS)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">make</xmp></pre></div><br><h3 class="Title8 GTitle3">compile (UNIX - make)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">make</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet OpenCV en C++-Résultat"><a class="Link9" href="#Créer un projet OpenCV en C++">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Cpp/img/i_opencv_project.png" alt="/Tutoriels/Cpp/img/i_opencv_project.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Vision par Ordinateur OpenCV</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1601109305589"><div class="Row26">List 1 &gt; Cpp &gt; opencv</div></div><script>loadList1("Loader_1601109305589","Cpp","opencv");</script></div><br></div></div></div></div><br>