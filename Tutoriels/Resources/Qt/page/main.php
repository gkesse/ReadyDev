<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer des interfaces homme-machine avec Qt<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre à créer des interfaces homme-machine avec <b>Qt</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>Qt </b>est une API orientée objet et développée en C++ qui offre des composants d'interface graphique (widgets), d'accès aux données, de connexions réseaux, de gestion des fils d'exécution, d'analyse XML, etc. Elle ressemble à un framework lorsqu'on l'utilise pour concevoir des interfaces graphiques ou que l'on conçoit l'architecture de son application en utilisant les mécanismes des signaux et slots par exemple. Qt permet la portabilité des applications qui n'utilisent que ses composants par simple recompilation du code source. Les environnements pris en charge sont les systèmes Linux, le système graphique X Window System ou Wayland, Windows, Mac OS X, Tizen et également Genode. Le fait d'être une bibliothèque logicielle multiplateforme attire un grand nombre de personnes qui ont donc l'occasion de diffuser leurs programmes sur les principaux OS existants. Qt intègre des bindings avec plus d'une dizaine de langages autres que le C++, comme Ada, C#, Java, Python, Ruby, Visual Basic, etc.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Resources/Qt/img/b_qt.png" alt="/Tutoriels/Resources/Qt/img/b_qt.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programme minimal"><a class="Link3" href="#">Programme minimal</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1620559286422"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1620559286422");</script></div><br><h2 class="Title7 GTitle2" id="Programme minimal-main.cpp"><a class="Link9" href="#Programme minimal">main.cpp</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//================================================
#include &lt;QApplication&gt;
#include &lt;QtWidgets&gt;
//================================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);

    // programme minimal
    QLabel* lLabel = new QLabel;
    lLabel-&gt;setText("programme minimal");
    lLabel-&gt;setAlignment(Qt::AlignCenter);
    
    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addWidget(lLabel);

    QWidget* lWindow = new QWidget;
    lWindow-&gt;setLayout(lMainLayout);
    
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(400, 200);
    lWindow-&gt;show();

    return app.exec();
}
//================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Programme minimal-Résultat"><a class="Link9" href="#Programme minimal">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Resources/Qt/img/i_minimal_program.png" alt="/Tutoriels/Resources/Qt/img/i_minimal_program.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer une fenêtre personnalisée"><a class="Link3" href="#">Créer une fenêtre personnalisée</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1620560391393"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1620560391393");</script></div><br><h2 class="Title7 GTitle2" id="Créer une fenêtre-main.cpp"><a class="Link9" href="#Créer une fenêtre">main.cpp</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//================================================
#include &lt;QApplication&gt;
#include "GWindow.h"
//================================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);

    GWindow* lWindow = new GWindow;    
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(400, 200);
    lWindow-&gt;show();

    return app.exec();
}
//================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une fenêtre-GWindow.h"><a class="Link9" href="#Créer une fenêtre">GWindow.h</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//================================================
#ifndef _GWindow_
#define _GWindow_
//================================================
#include &lt;QtWidgets&gt;
//================================================
class GWindow : public QWidget {
public:
    GWindow(QWidget* parent = 0);
    ~GWindow();
};
//================================================
#endif
//================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une fenêtre-GWindow.cpp"><a class="Link9" href="#Créer une fenêtre">GWindow.cpp</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//================================================
#include "GWindow.h"
//================================================
GWindow::GWindow(QWidget* parent) : QWidget(parent) {
    QLabel* lLabel = new QLabel;
    lLabel-&gt;setText("Fenêtre personnalisée");
    lLabel-&gt;setAlignment(Qt::AlignCenter);
    
    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addWidget(lLabel);

    setLayout(lMainLayout);
}
//================================================
GWindow::~GWindow() {
    
}
//================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une fenêtre-Résulltat"><a class="Link9" href="#Créer une fenêtre">Résulltat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Resources/Qt/img/i_custom_widget.png" alt="/Tutoriels/Resources/Qt/img/i_custom_widget.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Utiliser le mécanisme signal-slot"><a class="Link3" href="#">Utiliser le mécanisme signal-slot</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1620560496027"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1620560496027");</script></div><br><h2 class="Title7 GTitle2" id="Utiliser le mécanisme signal-slot-main.cpp"><a class="Link9" href="#Utiliser le mécanisme signal-slot">main.cpp</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//================================================
#include &lt;QApplication&gt;
#include "GWindow.h"
//================================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);

    GWindow* lWindow = new GWindow;    
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(400, 200);
    lWindow-&gt;show();

    return app.exec();
}
//================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser le mécanisme signal-slot-GWindow.h"><a class="Link9" href="#Utiliser le mécanisme signal-slot">GWindow.h</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//================================================
#ifndef _GWindow_
#define _GWindow_
//================================================
#include &lt;QtWidgets&gt;
//================================================
class GWindow : public QWidget {
    Q_OBJECT
    
public:
    GWindow(QWidget* parent = 0);
    ~GWindow();
    
public slots:
    void onClick();
    void onClear();
    
private:
    QTextEdit* m_textEdit;
};
//================================================
#endif
//================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser le mécanisme signal-slot-GWindow.cpp"><a class="Link9" href="#Utiliser le mécanisme signal-slot">GWindow.cpp</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//================================================
#include "GWindow.h"
//================================================
GWindow::GWindow(QWidget* parent) : QWidget(parent) {
    QPushButton* lClick = new QPushButton;
    lClick-&gt;setText("Cliquer");
    
    QPushButton* lClear = new QPushButton;
    lClear-&gt;setText("Supprimer");
    
    QTextEdit* lTextEdit = new QTextEdit;
    m_textEdit = lTextEdit;
    
    QGridLayout* lMainLayout = new QGridLayout;
    lMainLayout-&gt;addWidget(lClick, 0, 0);
    lMainLayout-&gt;addWidget(lClear, 0, 1);
    lMainLayout-&gt;addWidget(lTextEdit, 1, 0, 1, 2);

    setLayout(lMainLayout);
    
    connect(lClick, SIGNAL(clicked()), this, SLOT(onClick()));
    connect(lClear, SIGNAL(clicked()), this, SLOT(onClear()));
}
//================================================
GWindow::~GWindow() {
    
}
//================================================
void GWindow::onClick() {
    m_textEdit-&gt;append("le bouton clic a été appuyé");
}
//================================================
void GWindow::onClear() {
    m_textEdit-&gt;clear();
}
//================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser le mécanisme signal-slot-Résulltat"><a class="Link9" href="#Utiliser le mécanisme signal-slot">Résulltat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Resources/Qt/img/i_signal_slot.gif" alt="/Tutoriels/Resources/Qt/img/i_signal_slot.gif"></div><br></div></div></div></div><br>