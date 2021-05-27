<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer des interfaces homme-machine avec Qt<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre à créer des interfaces homme-machine avec <b>Qt</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>Qt </b>est une API orientée objet et développée en C++ qui offre des composants d'interface graphique (widgets), d'accès aux données, de connexions réseaux, de gestion des fils d'exécution, d'analyse XML, etc. Elle ressemble à un framework lorsqu'on l'utilise pour concevoir des interfaces graphiques ou que l'on conçoit l'architecture de son application en utilisant les mécanismes des signaux et slots par exemple. Qt permet la portabilité des applications qui n'utilisent que ses composants par simple recompilation du code source. Les environnements pris en charge sont les systèmes Linux, le système graphique X Window System ou Wayland, Windows, Mac OS X, Tizen et également Genode. Le fait d'être une bibliothèque logicielle multiplateforme attire un grand nombre de personnes qui ont donc l'occasion de diffuser leurs programmes sur les principaux OS existants. Qt intègre des bindings avec plus d'une dizaine de langages autres que le C++, comme Ada, C#, Java, Python, Ruby, Visual Basic, etc.<br><br><div class="Img3 GImage"><img alt="/Tutoriels/Resources/Qt/img/b_qt.png" class="lazy" data-src="/Tutoriels/Resources/Qt/img/b_qt.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programme-minimal"><a class="Link3" href="#">Programme minimal</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1620559286422"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1620559286422");</script></div><br><h2 class="Title7 GTitle2" id="Programme-minimal-main-cpp"><a class="Link9" href="#Programme-minimal">main.cpp</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Programme-minimal-Resultat"><a class="Link9" href="#Programme-minimal">Résultat</a></h2><br><div class="Img3 GImage"><img alt="/Tutoriels/Resources/Qt/img/i_minimal_program.png" class="lazy" data-src="/Tutoriels/Resources/Qt/img/i_minimal_program.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Creer-une-fenetre-personnalisee"><a class="Link3" href="#">Créer une fenêtre personnalisée</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1620560391393"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1620560391393");</script></div><br><h2 class="Title7 GTitle2" id="Creer-une-fenetre-main-cpp"><a class="Link9" href="#Creer-une-fenetre">main.cpp</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Creer-une-fenetre-GWindow-h"><a class="Link9" href="#Creer-une-fenetre">GWindow.h</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Creer-une-fenetre-GWindow-cpp"><a class="Link9" href="#Creer-une-fenetre">GWindow.cpp</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Creer-une-fenetre-Resulltat"><a class="Link9" href="#Creer-une-fenetre">Résulltat</a></h2><br><div class="Img3 GImage"><img alt="/Tutoriels/Resources/Qt/img/i_custom_widget.png" class="lazy" data-src="/Tutoriels/Resources/Qt/img/i_custom_widget.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Utiliser-le-mecanisme-signal-slot"><a class="Link3" href="#">Utiliser le mécanisme signal-slot</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1620560496027"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1620560496027");</script></div><br><h2 class="Title7 GTitle2" id="Utiliser-le-mecanisme-signal-slot-main-cpp"><a class="Link9" href="#Utiliser-le-mecanisme-signal-slot">main.cpp</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Utiliser-le-mecanisme-signal-slot-GWindow-h"><a class="Link9" href="#Utiliser-le-mecanisme-signal-slot">GWindow.h</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Utiliser-le-mecanisme-signal-slot-GWindow-cpp"><a class="Link9" href="#Utiliser-le-mecanisme-signal-slot">GWindow.cpp</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Utiliser-le-mecanisme-signal-slot-Resulltat"><a class="Link9" href="#Utiliser-le-mecanisme-signal-slot">Résulltat</a></h2><br><div class="Img3 GImage"><img alt="/Tutoriels/Resources/Qt/img/i_signal_slot.gif" class="lazy" data-src="/Tutoriels/Resources/Qt/img/i_signal_slot.gif"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Creer-une-boite-de-dialogue"><a class="Link3" href="#">Créer une boîte de dialogue</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1620566536383"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1620566536383");</script></div><br><h2 class="Title7 GTitle2" id="Creer-une-boite-de-dialogue-main-cpp"><a class="Link9" href="#Creer-une-boite-de-dialogue">main.cpp</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Creer-une-boite-de-dialogue-GWindow-h"><a class="Link9" href="#Creer-une-boite-de-dialogue">GWindow.h</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//================================================
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
    
private:
    QTextEdit* m_textEdit;
};
//================================================
#endif
//================================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Creer-une-boite-de-dialogue-GWindow-cpp"><a class="Link9" href="#Creer-une-boite-de-dialogue">GWindow.cpp</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//================================================
#include "GWindow.h"
#include "GDialog.h"
//================================================
GWindow::GWindow(QWidget* parent) : QWidget(parent) {
    QTextEdit* lTextEdit = new QTextEdit;
    m_textEdit = lTextEdit;
    
    QPushButton* lButton = new QPushButton;
    lButton-&gt;setText("Cliquer");

    QGridLayout* lMainLayout = new QGridLayout;
    lMainLayout-&gt;addWidget(lButton, 0, 0);
    lMainLayout-&gt;addWidget(lTextEdit, 1, 0);
    lMainLayout-&gt;setAlignment(Qt::AlignCenter);
    
    setLayout(lMainLayout);
    
    connect(lButton, SIGNAL(clicked()), this, SLOT(onClick()));
}
//================================================
GWindow::~GWindow() {
    
}
//================================================
void GWindow::onClick() {
    GDialog lDialog;
    int lAnswer = lDialog.exec();
    
    if(lAnswer == QDialog::Accepted) {
        m_textEdit-&gt;append("QDialog::Accepted");
    }
    else if(lAnswer == QDialog::Rejected) {
        m_textEdit-&gt;append("QDialog::Rejected");
    }
}
//================================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Creer-une-boite-de-dialogue-GDialog-h"><a class="Link9" href="#Creer-une-boite-de-dialogue">GDialog.h</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//================================================
#ifndef _GDialog_
#define _GDialog_
//================================================
#include &lt;QtWidgets&gt;
//================================================
class GDialog : public QDialog {
    Q_OBJECT
    
public:
    GDialog(QWidget* parent = 0);
    ~GDialog();
};
//================================================
#endif
//================================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Creer-une-boite-de-dialogue-GDialog-cpp"><a class="Link9" href="#Creer-une-boite-de-dialogue">GDialog.cpp</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//================================================
#include "GDialog.h"
//================================================
GDialog::GDialog(QWidget* parent) : QDialog(parent) {
    QLabel* lLabel = new QLabel;
    lLabel-&gt;setText("Voulez-vous continuer l'opération ?");

    QPushButton* lOk = new QPushButton;
    lOk-&gt;setText("Ok");

    QPushButton* lCancel = new QPushButton;
    lCancel-&gt;setText("Annuler");

    QHBoxLayout* lButtonLayout = new QHBoxLayout;
    lButtonLayout-&gt;addWidget(lCancel);
    lButtonLayout-&gt;addWidget(lOk);
    lButtonLayout-&gt;setAlignment(Qt::AlignRight);
    
    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addWidget(lLabel, 1);
    lMainLayout-&gt;addLayout(lButtonLayout);
    
    setLayout(lMainLayout);
    
    setWindowTitle("ReadyApp");
    
    connect(lOk, SIGNAL(clicked()), this, SLOT(accept()));
    connect(lCancel, SIGNAL(clicked()), this, SLOT(reject()));
}
//================================================
GDialog::~GDialog() {
    
}
//================================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Creer-une-boite-de-dialogue-Resulltat"><a class="Link9" href="#Creer-une-boite-de-dialogue">Résulltat</a></h2><br><div class="Img3 GImage"><img alt="/Tutoriels/Resources/Qt/img/i_dialog.gif" class="lazy" data-src="/Tutoriels/Resources/Qt/img/i_dialog.gif"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Creer-une-fenetre-principale"><a class="Link3" href="#">Créer une fenêtre principale</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1620582036631"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1620582036631");</script></div><br><h2 class="Title7 GTitle2" id="Creer-une-fenetre-principale-main-cpp"><a class="Link9" href="#Creer-une-fenetre-principale">main.cpp</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Creer-une-fenetre-principale-GWindow-h"><a class="Link9" href="#Creer-une-fenetre-principale">GWindow.h</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//================================================
#ifndef _GWindow_
#define _GWindow_
//================================================
#include &lt;QtWidgets&gt;
//================================================
class GWindow : public QMainWindow {
    Q_OBJECT
    
public:
    GWindow(QWidget* parent = 0);
    ~GWindow();
    
public slots:
    void onClick();
    
private:
    QTextEdit* m_textEdit;
};
//================================================
#endif
//================================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Creer-une-fenetre-principale-GWindow-cpp"><a class="Link9" href="#Creer-une-fenetre-principale">GWindow.cpp</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//================================================
#include "GWindow.h"
//================================================
GWindow::GWindow(QWidget* parent) : QMainWindow(parent) {
    QMenu* lMenu;
    QAction* lAction;
        
    lMenu = menuBar()-&gt;addMenu("Fichier");
    //
    lAction = new QAction;
    lAction-&gt;setText("Ouvrir...");
    lMenu-&gt;addAction(lAction);
    connect(lAction, SIGNAL(triggered()), this, SLOT(onClick()));
    //
    lAction = new QAction;
    lAction-&gt;setText("Ouvrir le dossier en tant qu'espace de travail");
    lAction-&gt;setEnabled(false);
    lMenu-&gt;addAction(lAction);
    connect(lAction, SIGNAL(triggered()), this, SLOT(onClick()));
    //
    lMenu-&gt;addSeparator();
    //
    lAction = new QAction;
    lAction-&gt;setText("Quitter");
    lMenu-&gt;addAction(lAction);
    connect(lAction, SIGNAL(triggered()), this, SLOT(onClick()));

    lMenu = menuBar()-&gt;addMenu("Edition");
    //
    lAction = new QAction;
    lAction-&gt;setText("Annuler");
    lMenu-&gt;addAction(lAction);
    connect(lAction, SIGNAL(triggered()), this, SLOT(onClick()));
    //
    lAction = new QAction;
    lAction-&gt;setText("Rétablir");
    lMenu-&gt;addAction(lAction);
    connect(lAction, SIGNAL(triggered()), this, SLOT(onClick()));

    lMenu = menuBar()-&gt;addMenu("Recherche");
    //
    lAction = new QAction;
    lAction-&gt;setText("Rechercher...");
    lMenu-&gt;addAction(lAction);
    connect(lAction, SIGNAL(triggered()), this, SLOT(onClick()));
    //
    lAction = new QAction;
    lAction-&gt;setText("Rechercher dans les sous dossiers");
    lMenu-&gt;addAction(lAction);
    connect(lAction, SIGNAL(triggered()), this, SLOT(onClick()));

    lMenu = menuBar()-&gt;addMenu("Affichage");
    //
    lAction = new QAction;
    lAction-&gt;setText("Toujours devant...");
    lMenu-&gt;addAction(lAction);
    connect(lAction, SIGNAL(triggered()), this, SLOT(onClick()));
    //
    lAction = new QAction;
    lAction-&gt;setText("Activer/désactiver le mode plein écran");
    lMenu-&gt;addAction(lAction);
    connect(lAction, SIGNAL(triggered()), this, SLOT(onClick()));
    
    QTextEdit* lTextEdit = new QTextEdit;
    m_textEdit = lTextEdit;
    lTextEdit-&gt;setReadOnly(true);
    
    setCentralWidget(lTextEdit);
}
//================================================
GWindow::~GWindow() {
    
}
//================================================
void GWindow::onClick() {
    QAction* lAction  = qobject_cast&lt;QAction*&gt;(sender());
    QString lText = lAction-&gt;text();
    m_textEdit-&gt;append(lText);
}
//================================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Creer-une-fenetre-principale-Resulltat"><a class="Link9" href="#Creer-une-fenetre-principale">Résulltat</a></h2><br><div class="Img3 GImage"><img alt="/Tutoriels/Resources/Qt/img/i_mainwindow.gif" class="lazy" data-src="/Tutoriels/Resources/Qt/img/i_mainwindow.gif"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Enregistrer-des-donnees-au-format-binaire"><a class="Link3" href="#">Enregistrer des données au format binaire</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1620598337296"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1620598337296");</script></div><br><h2 class="Title7 GTitle2" id="Enregistrer-des-donnees-au-format-binaire-main-cpp"><a class="Link9" href="#Enregistrer-des-donnees-au-format-binaire">main.cpp</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//================================================
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
//================================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Enregistrer-des-donnees-au-format-binaire-GWindow-h"><a class="Link9" href="#Enregistrer-des-donnees-au-format-binaire">GWindow.h</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//================================================
#ifndef _GWindow_
#define _GWindow_
//================================================
#include &lt;QtWidgets&gt;
//================================================
struct sGUser;
//================================================
class GWindow : public QMainWindow {
    Q_OBJECT
    
public:
    GWindow(QWidget* parent = 0);
    ~GWindow();
    
private:
    void loadData();
    void saveData();
    void showData();
    void addData();

public slots:
    void onClick();
    
private:
    QVector&lt;sGUser&gt; m_userMap;
    QTextEdit* m_textEdit;
    int m_index;
};
//================================================
struct sGUser {
    int id;
    QString name;
    QString email;
};
//================================================
inline QDataStream&amp; operator&lt;&lt;(QDataStream&amp; stream, const sGUser&amp; user) {
    return stream &lt;&lt; user.id &lt;&lt; user.name &lt;&lt; user.email;
}
//================================================
inline QDataStream&amp; operator&gt;&gt;(QDataStream&amp; stream, sGUser&amp; user) {
    return stream &gt;&gt; user.id &gt;&gt; user.name &gt;&gt; user.email;
}
//================================================
#endif
//================================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Enregistrer-des-donnees-au-format-binaire-GWindow-cpp"><a class="Link9" href="#Enregistrer-des-donnees-au-format-binaire">GWindow.cpp</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//================================================
#include "GWindow.h"
//================================================
GWindow::GWindow(QWidget* parent) : QMainWindow(parent) {
    QMenu* lMenu;
    QAction* lAction;
        
    lMenu = menuBar()-&gt;addMenu("Fichier");
    //
    lAction = new QAction;
    lAction-&gt;setText("Ajouter des données");
    lAction-&gt;setData("add_data");
    lMenu-&gt;addAction(lAction);
    connect(lAction, SIGNAL(triggered()), this, SLOT(onClick()));
    //
    lAction = new QAction;
    lAction-&gt;setText("Sauvegarder les données");
    lAction-&gt;setData("save_data");
    lMenu-&gt;addAction(lAction);
    connect(lAction, SIGNAL(triggered()), this, SLOT(onClick()));
    
    QTextEdit* lTextEdit = new QTextEdit;
    m_textEdit = lTextEdit;
    lTextEdit-&gt;setReadOnly(true);
    
    setCentralWidget(lTextEdit);
    
    loadData();
}
//================================================
GWindow::~GWindow() {
    
}
//================================================
void GWindow::onClick() {
    QAction* lAction  = qobject_cast&lt;QAction*&gt;(sender());
    QString lKey = lAction-&gt;data().toString();
    
    if(lKey == "add_data") {
        addData();
    }
    else if(lKey == "save_data") {
        saveData();
    }
}
//================================================
void GWindow::loadData() {
    QFile lFile("user.dat");

    m_index = 0;
    if (!lFile.open(QIODevice::ReadOnly)) {return;}

    QDataStream in(&amp;lFile);
    in &gt;&gt; m_userMap;
    m_index = m_userMap.size();
    showData();
}
//================================================
void GWindow::saveData() {
    QFile lFile("user.dat");

    if (!lFile.open(QIODevice::WriteOnly)) {return;}

    QDataStream out(&amp;lFile);
    out &lt;&lt; m_userMap;
}
//================================================
void GWindow::showData() {
    m_textEdit-&gt;clear();
    for(int i = 0; i &lt; m_userMap.size(); i++) {
        sGUser lUser = m_userMap[i];
        QString lText = QString("%1 ; %2 ; %3"
        ).arg(lUser.id).arg(lUser.name).arg(lUser.email);
        m_textEdit-&gt;append(lText);
    }
}
//================================================
void GWindow::addData() {
    sGUser lUser;
    m_index += 1;
    lUser.id = m_index;
    lUser.name = QString("Gerard KESSE");
    lUser.email = QString("contact@readydev.com");
    m_userMap.push_back(lUser);
    showData();
}
//================================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Enregistrer-des-donnees-au-format-binaire-Resulltat"><a class="Link9" href="#Enregistrer-des-donnees-au-format-binaire">Résulltat</a></h2><br><div class="Img3 GImage"><img alt="/Tutoriels/Resources/Qt/img/i_datastream.gif" class="lazy" data-src="/Tutoriels/Resources/Qt/img/i_datastream.gif"></div><br></div></div></div></div><br>