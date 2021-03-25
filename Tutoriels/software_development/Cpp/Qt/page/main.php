<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Création d'interfaces homme-machine avec Qt en C++<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la création d'interfaces homme-machine avec <b>Qt </b>en <b>C++</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>Qt </b>est une bibliothèque de composants d'interfaces graphiques (widgets), d'accès aux données, de connexions réseaux, de gestion des fils d'exécution, d'analyse XML, etc, et doté d'un mécanisme de notifications par des signaux et slots.<br><br><div class="Img3 GImage"><img src="/Tutoriels/software_development/Cpp/img/b_qt.png" alt="/Tutoriels/software_development/Cpp/img/b_qt.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation"><a class="Link3" href="#">Installation</a></h1><div class="Body3"><br>Installer l'environnement Qt.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616688816465"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616688816465");</script></div><br><h2 class="Title7 GTitle2" id="Installation-1 - Installation"><a class="Link9" href="#Installation">1 - Installation</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1 - Installation sous Windows"><a class="Link9" href="#Installation">1.1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1.1 - Installation sous MSYS2"><a class="Link9" href="#Installation">1.1.1 - Installation sous MSYS2</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">pacman -S --needed -y \
mingw-w64-i686-qt5 \
mingw-w64-i686-qt-creator \
mingw-w64-i686-gdb \
mingw-w64-i686-cmake \
mingw-w64-i686-clang \</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tests"><a class="Link3" href="#">Tests</a></h1><div class="Body3"><br>Créer un projet Qt en C++.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616705914360"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616705914360");</script></div><br><h2 class="Title7 GTitle2" id="Tests-1 - Test sous Windows"><a class="Link9" href="#Tests">1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.1 - Test sous MSYS2"><a class="Link9" href="#Tests">1.1 - Test sous MSYS2</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.1.1 - Editer le programme"><a class="Link9" href="#Tests">1.1.1 - Editer le programme</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
//===============================================
int main(int argc, char** argv) {
    QApplication lApp(argc, argv);
    
    QWidget* lWindow = new QWidget;
    
    QLabel* lLabel = new QLabel;
    lLabel-&gt;setText("Bonjour tout le monde");
    lLabel-&gt;setAlignment(Qt::AlignCenter);
    
    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addWidget(lLabel);
    
    lWindow-&gt;setLayout(lMainLayout);
    lWindow-&gt;resize(400, 200);
    lWindow-&gt;setWindowTitle("ReadyApp");
    
    lWindow-&gt;show();
    return lApp.exec();
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.2 - Editer le fichier projet"><a class="Link9" href="#Tests">1.1.2 - Editer le fichier projet</a></h2><br><h3 class="Title8 GTitle3">GProject.pro</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">TEMPLATE = app
TARGET = $$(GPROJECT_EXE)
DESTDIR = bin
OBJECTS_DIR = build
MOC_DIR = build
UI_DIR = build
RCC_DIR = build
CONFIG += console release gnu++11
QT += widgets

QMAKE_CXXFLAGS +=\
    -Wno-unused-parameter \
    -Wno-deprecated-declarations \</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.3 - Configurer le projet"><a class="Link9" href="#Tests">1.1.3 - Configurer le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">qmake</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.4 - Compiler le projet"><a class="Link9" href="#Tests">1.1.4 - Compiler le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">make</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.5 - Exécuter le projet"><a class="Link9" href="#Tests">1.1.5 - Exécuter le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">./bin/rdcpp.exe</xmp></pre></div><br><div class="Img3 GImage"><img src="/Tutoriels/software_development/Cpp/img/i_qt_test.png" alt="/Tutoriels/software_development/Cpp/img/i_qt_test.png"></div><br></div></div></div></div><br><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Notes et références"><a class="Link3" href="#">Notes et références</a></h1><div class="Body3"><br><h2 class="Title7 GTitle2" id="Notes et références-Liens"><a class="Link9" href="#Notes et références">Liens</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://github.com/JesseTG/awesome-qt">Ressources Qt</a><br><br></div></div></div></div><br>