<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer un projet Qt en C++</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer un projet <b>Qt </b>en <b>C++</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>Qt </b>est une API orientée objet et développée en C++. Qt offre des composants d'interface graphique (widgets), d'accès aux données, de connexions réseaux, de gestion des fils d'exécution, d'analyse XML. Elle utilse le mécanisme des signaux et slots.Qt prend en charge le système graphique X Window System et intègre des bindings avec plusieurs langages.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Cpp/img/b_qt_project.png" alt="/Tutoriels/Cpp/img/b_qt_project.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un projet Qt en C++"><a class="Link3" href="#">Créer un projet Qt en C++</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer un projet Qt en C++-Introduction"><a class="Link9" href="#Créer un projet Qt en C++">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer un projet Qt en C++ qui affiche un message à l'écran (Bonjour tout le monde).<br><br><h2 class="Title7 GTitle2" id="Créer un projet Qt en C++-Programme principal"><a class="Link9" href="#Créer un projet Qt en C++">Programme principal</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;QtWidgets&gt;
//===============================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);
    QWidget* lWindow = new QWidget;
    QLabel* lLabel = new QLabel;
    lLabel-&gt;setText("Bonjour tout le monde\n");
    QVBoxLayout* lLayout = new QVBoxLayout;
    lLayout-&gt;addWidget(lLabel);
    lLayout-&gt;setAlignment(Qt::AlignCenter);
    lWindow-&gt;setLayout(lLayout);
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(640, 480);
    lWindow-&gt;show();
    return app.exec();
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet Qt en C++-Fichier projet"><a class="Link9" href="#Créer un projet Qt en C++">Fichier projet</a></h2><br><h3 class="Title8 GTitle3">GProject.pro</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="prolog">TEMPLATE = app
TARGET = rdqt
DESTDIR = bin
OBJECTS_DIR = build
MOC_DIR = build
UI_DIR = build
RCC_DIR = build
CONFIG += console release gnu++11
QT += widgets

SOURCES +=\
    $$PWD/src/main.cpp \</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet Qt en C++-Fichier Makefile"><a class="Link9" href="#Créer un projet Qt en C++">Fichier Makefile</a></h2><br><h3 class="Title8 GTitle3">Makefile.cmd.mak</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/rdqt.exe
#================================================
all: clean_exe qmake compile run
#================================================
# cpp
qmake:
	@qmake
compile:
	@make
run:
	@$(GTARGET) $(argv)
clean_exe: 
	@if ! [ -d $(GBIN) ] ; then mkdir -p $(GBIN) ; fi
	rm -f $(GBIN)/*
clean: 
	@if ! [ -d $(GBIN) ] ; then mkdir -p $(GBIN) ; fi
	@if ! [ -d $(GBUILD) ] ; then mkdir -p $(GBUILD) ; fi
	rm -f $(GBUILD)/* $(GBIN)/*
#================================================</xmp></pre></div>&nbsp;<br><h2 class="Title7 GTitle2" id="Créer un projet Qt en C++-Variables d'environnement"><a class="Link9" href="#Créer un projet Qt en C++">Variables d'environnement</a></h2><br><h3 class="Title8 GTitle3">envs<br></h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">#================================================
export "GPROJECT_ROOT=/c/Users/Admin/Downloads/Programs"
export "GPROJECT_PATH=${GPROJECT_ROOT}/ReadyCpp"
export "GPROJECT_SRC=${GPROJECT_PATH}/app/code/readyapp/src"
#================================================</xmp></pre></div><br><h3 class="Title8 GTitle3">make_c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">#================================================
lArgv="${@:2}"
#================================================
make -f Makefile.cmd.mak $1 "argv=$lArgv"
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet Qt en C++-Compilation automatique"><a class="Link9" href="#Créer un projet Qt en C++">Compilation automatique</a></h2><br><h3 class="Title8 GTitle3">Terminal</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">make_c all</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet Qt en C++-Compilation manuelle"><a class="Link9" href="#Créer un projet Qt en C++">Compilation manuelle</a></h2><br><h3 class="Title8 GTitle3">Terminal</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">rm -f bin/*
qmake
make
bin/rdqt.exe</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet Qt en C++-Résultat"><a class="Link9" href="#Créer un projet Qt en C++">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Cpp/img/i_qt_project.png" alt="/Tutoriels/Cpp/img/i_qt_project.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Interface Homme-Machine Qt</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1601109305589"><div class="Row26">List 1 &gt; Cpp &gt; qt</div></div><script>loadList1("Loader_1601109305589","Cpp","qt");</script></div><br></div></div></div></div><br>