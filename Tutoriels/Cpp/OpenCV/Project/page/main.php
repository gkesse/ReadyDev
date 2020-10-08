<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer un projet OpenCV en C++</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer un projet <b>OpenCV </b>en <b>C++</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>OpenCV </b>est une bibliothèque spécialisée dans le traitement d'images en temps réel. Elle met à disposition de nombreuses fonctionnalités permettant de créer des programmes en partant des données brutes&nbsp; jusqu'à la création d'interfaces graphiques. Elle propose la plupart des opérations en traitement des images, lecture, écriture et affichage d’une image; calcul de l'histogramme de niveaux de gris ou de couleurs; lissage, filtrage, seuillage et segmentation d'image; morphologie mathématique. Elle s'impose aujourd'hui comme un standard dans le domaine de la Vision par Ordinateur.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Cpp/img/b_opencv_project.png" alt="/Tutoriels/Cpp/img/b_opencv_project.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un projet OpenCV en C++"><a class="Link3" href="#">Créer un projet OpenCV en C++</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer un projet OpenCV en C++-Introduction"><a class="Link9" href="#Créer un projet OpenCV en C++">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer un projet qui affiche un message à l'écran (Bonjour tout le monde).<br><br><h2 class="Title7 GTitle2" id="Créer un projet OpenCV en C++-Programme principal"><a class="Link9" href="#Créer un projet OpenCV en C++">Programme principal</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;OpenCVWidgets&gt;
//===============================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);
    QWidget* lWindow = new QWidget;
    QLabel* lLabel = new QLabel;
    lLabel-&gt;setText("Bonjour tout le monde\n");
    QVBoxLayout* lLayout = new QVBoxLayout;
    lLayout-&gt;addWidget(lLabel);
    lLayout-&gt;setAlignment(OpenCV::AlignCenter);
    lWindow-&gt;setLayout(lLayout);
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(640, 480);
    lWindow-&gt;show();
    return app.exec();
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet OpenCV en C++-Fichier projet"><a class="Link9" href="#Créer un projet OpenCV en C++">Fichier projet</a></h2><br><h3 class="Title8 GTitle3">GProject.pro</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="prolog">TEMPLATE = app
TARGET = gp_opencv
DESTDIR = bin
OBJECTS_DIR = build
MOC_DIR = build
UI_DIR = build
RCC_DIR = build
CONFIG += console release gnu++11
QT += widgets
RESOURCES += resources.qrc

SOURCES +=\
    $$PWD/src/main.cpp \</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet OpenCV en C++-Compilation"><a class="Link9" href="#Créer un projet OpenCV en C++">Compilation</a></h2><br><h3 class="Title8 GTitle3">compile.bat (Windows - MinGW)<br></h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off
::===============================================
set "PATH=C:\OpenCV\OpenCV5.8.0\5.8\mingw53_32\bin;%PATH%"
set "PATH=C:\OpenCV\OpenCV5.8.0\Tools\mingw530_32\bin;%PATH%"
::===============================================
set "PATH=bin;%PATH%"
::===============================================
qmake
mingw32-make
gp_opencv
::===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet OpenCV en C++-Résultat"><a class="Link9" href="#Créer un projet OpenCV en C++">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Cpp/img/i_opencv_project.png" alt="/Tutoriels/Cpp/img/i_opencv_project.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Interface Homme-Machine OpenCV</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1601109305589"><div class="Row26">List 1 &gt; Cpp &gt; opencv</div></div><script>loadList1("Loader_1601109305589","Cpp","opencv");</script></div><br></div></div></div></div><br>