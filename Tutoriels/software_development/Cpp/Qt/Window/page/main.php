<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer une fenêtre personnalisée Qt en C++</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer une fenêtre personnalisée <b>Qt </b>en <b>C++</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>Qt </b>est une API orientée objet et développée en C++. Qt offre des composants d'interface graphique (widgets), d'accès aux données, de connexions réseaux, de gestion des fils d'exécution, d'analyse XML. Elle utilse le mécanisme des signaux et slots.Qt prend en charge le système graphique X Window System et intègre des bindings avec plusieurs langages.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Cpp/img/b_qt_window.png" alt="/Tutoriels/Cpp/img/b_qt_window.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer une fenêtre personnalisée Qt en C++"><a class="Link3" href="#">Créer une fenêtre personnalisée Qt en C++</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer une fenêtre personnalisée Qt en C++-Introduction"><a class="Link9" href="#Créer une fenêtre personnalisée Qt en C++">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer une fenêtre personnalisée (GWindow).<br><br><h2 class="Title7 GTitle2" id="Créer une fenêtre personnalisée Qt en C++-Programme principal"><a class="Link9" href="#Créer une fenêtre personnalisée Qt en C++">Programme principal</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">GWindow* lWindow = new GWindow;
lWindow-&gt;show();</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une fenêtre personnalisée Qt en C++-Structure de la fenêtre"><a class="Link9" href="#Créer une fenêtre personnalisée Qt en C++">Structure de la fenêtre</a></h2><br><h3 class="Title8 GTitle3">GWindow.h</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GWindow_
#define _GWindow_
//===============================================
#include "GInclude.h"
//===============================================
class GWindow : public QFrame {
    Q_OBJECT
    
public:
    GWindow(QWidget* parent  = 0);
    ~GWindow();

private:
    // proprietes
};
//===============================================
#endif
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une fenêtre personnalisée Qt en C++-Constructeur de la fenêtre"><a class="Link9" href="#Créer une fenêtre personnalisée Qt en C++">Constructeur de la fenêtre</a></h2><br><h3 class="Title8 GTitle3">GWindow.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
GWindow::GWindow(QWidget* parent) : QFrame(parent) {
    // code du constructeur de la fenetre
    setLayout(m_mainLayout);
    setWindowTitle(lQt-&gt;title);
    setWindowIcon(QIcon(lTitleBar-&gt;icon_file));
    resize(lQt-&gt;width, lQt-&gt;height);
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Interface Homme-Machine Qt</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1601151341115"><div class="Row26">List 1 &gt; Cpp &gt; qt</div></div><script>loadList1("Loader_1601151341115","Cpp","qt");</script></div><br></div></div></div></div><br>