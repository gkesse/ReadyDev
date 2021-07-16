<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Quelques projets C/C++<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous présenter quelques <b>projets </b>C/C++.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Introduction">Introduction</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Creer-un-systeme-de-login">Créer un système de login</a></div></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br>Un <b>projet</b> est un ensemble de processus permettant de répondre à un besoin.<br><br><div class="Img3 GImage"><img alt="/Tutoriels/Resources/ProjectBox/img/b_projectbox.png" class="lazy" data-src="/Tutoriels/Resources/ProjectBox/img/b_projectbox.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Creer-un-systeme-de-login"><a class="Link3" href="#">Créer un système de login</a></h1><div class="Body3"><br>Dans la sécurité informatique, la connexion (<b>login</b>) est le processus par lequel un individu gagne l'accès à un système informatique en s'identifiant et s'authentifiant. Les informations d'authentification sont constituées généralement d'un nom d'utilisateur et d'un mot de passe. Dans la pratique, les systèmes sécurisés modernes nécessitent souvent un deuxième facteur tel qu'une confirmation par e-mail ou SMS pour plus de sécurité. Lorsque l'accès n'est plus nécessaire, l'utilisateur peut se déconnecter.<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Creer-un-systeme-de-login-Creer-une-fenetre-vide"><a class="Link9" href="#Creer-un-systeme-de-login">Créer une fenêtre vide</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GInclude.h"
//===============================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);
    QWidget* lWindow = new QWidget;
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(400, 200);
    lWindow-&gt;show();
    return app.exec();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Resources/ProjectBox/img/i_login_empty.png" class="lazy" data-src="/Tutoriels/Resources/ProjectBox/img/i_login_empty.png"></div><br><h2 class="Title7 GTitle2" id="Creer-un-systeme-de-login-Creer-la-fenetre-de-connexion"><a class="Link9" href="#Creer-un-systeme-de-login">Créer la fenêtre de connexion</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GInclude.h"
//===============================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);
    QWidget* lWindow = new QWidget;
    
    QLabel* lUsernameLabel = new QLabel;
    lUsernameLabel-&gt;setText("Nom d'utilisateur :");
    lUsernameLabel-&gt;setMinimumWidth(100);
    
    QLineEdit* lUsernameEdit = new QLineEdit;
    
    QHBoxLayout* lUsernameLayout = new QHBoxLayout;
    lUsernameLayout-&gt;addWidget(lUsernameLabel);
    lUsernameLayout-&gt;addWidget(lUsernameEdit);
    lUsernameLayout-&gt;setMargin(0);
    
    QLabel* lPasswordLabel = new QLabel;
    lPasswordLabel-&gt;setText("Mot de passe :");
    lPasswordLabel-&gt;setMinimumWidth(100);
    
    QLineEdit* lPasswordEdit = new QLineEdit;
    lPasswordEdit-&gt;setEchoMode(QLineEdit::Password);
    
    QHBoxLayout* lPasswordLayout = new QHBoxLayout;
    lPasswordLayout-&gt;addWidget(lPasswordLabel);
    lPasswordLayout-&gt;addWidget(lPasswordEdit);
    lPasswordLayout-&gt;setMargin(0);
    
    QPushButton* lConnectButton = new QPushButton;
    lConnectButton-&gt;setText("Connexion");
    
    QHBoxLayout* lConnectLayout = new QHBoxLayout;
    lConnectLayout-&gt;addWidget(lConnectButton);
    lConnectLayout-&gt;setAlignment(Qt::AlignRight);
    lConnectLayout-&gt;setMargin(0);
   
    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addLayout(lUsernameLayout);
    lMainLayout-&gt;addLayout(lPasswordLayout);
    lMainLayout-&gt;addLayout(lConnectLayout);
    lMainLayout-&gt;setAlignment(Qt::AlignTop);
    
    lWindow-&gt;setLayout(lMainLayout);
    
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(400, 10);
    lWindow-&gt;show();
    return app.exec();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Resources/ProjectBox/img/i_login_window.png" class="lazy" data-src="/Tutoriels/Resources/ProjectBox/img/i_login_window.png"></div><br><h2 class="Title7 GTitle2" id="Creer-un-systeme-de-login-Traiter-la-connexion"><a class="Link9" href="#Creer-un-systeme-de-login">Traiter la connexion</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GWindow.h"
//===============================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);
    GWindow* lWindow = new GWindow;    
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(400, 10);
    lWindow-&gt;show();
    return app.exec();
}
//===============================================</pre></div></div><br><br><h3 class="Title8 GTitle3">GWindow.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GWindow.h"
//===============================================
GWindow::GWindow(QWidget* parent) : QWidget(parent) {    
    QLabel* lUsernameLabel = new QLabel;
    lUsernameLabel-&gt;setText("Nom d'utilisateur :");
    lUsernameLabel-&gt;setMinimumWidth(100);
    
    QLineEdit* lUsernameEdit = new QLineEdit;
    m_usernameEdit = lUsernameEdit;
    
    QHBoxLayout* lUsernameLayout = new QHBoxLayout;
    lUsernameLayout-&gt;addWidget(lUsernameLabel);
    lUsernameLayout-&gt;addWidget(lUsernameEdit);
    lUsernameLayout-&gt;setMargin(0);
    
    QLabel* lPasswordLabel = new QLabel;
    lPasswordLabel-&gt;setText("Mot de passe :");
    lPasswordLabel-&gt;setMinimumWidth(100);
    
    QLineEdit* lPasswordEdit = new QLineEdit;
    m_passwordEdit = lPasswordEdit;
    lPasswordEdit-&gt;setEchoMode(QLineEdit::Password);
    
    QHBoxLayout* lPasswordLayout = new QHBoxLayout;
    lPasswordLayout-&gt;addWidget(lPasswordLabel);
    lPasswordLayout-&gt;addWidget(lPasswordEdit);
    lPasswordLayout-&gt;setMargin(0);
    
    QPushButton* lConnectButton = new QPushButton;
    lConnectButton-&gt;setText("Connexion");
    
    QHBoxLayout* lConnectLayout = new QHBoxLayout;
    lConnectLayout-&gt;addWidget(lConnectButton);
    lConnectLayout-&gt;setAlignment(Qt::AlignRight);
    lConnectLayout-&gt;setMargin(0);
   
    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addLayout(lUsernameLayout);
    lMainLayout-&gt;addLayout(lPasswordLayout);
    lMainLayout-&gt;addLayout(lConnectLayout);
    lMainLayout-&gt;setAlignment(Qt::AlignTop);
    
    setLayout(lMainLayout);
    
    connect(lConnectButton, SIGNAL(clicked()), this, SLOT(slotConnect()));
}
//===============================================
GWindow::~GWindow() {

}
//===============================================
void GWindow::slotConnect() {
    QString lUsername = m_usernameEdit-&gt;text();
    QString lPassword = m_passwordEdit-&gt;text();
    qDebug() &lt;&lt; QString("traiter la connexion : (%1 ; %2)")
    .arg(lUsername, lPassword);
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Resources/ProjectBox/img/i_login_connect.gif" class="lazy" data-src="/Tutoriels/Resources/ProjectBox/img/i_login_connect.gif"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Creer-un-nouvel-utilisateur"><a class="Link3" href="#">Créer un nouvel utilisateur</a></h1><div class="Body3"><br>En informatique, le terme <b>utilisateur </b>(anciennement un opérateur ou un informaticien) est employé pour désigner une personne qui utilise un système informatisé (ordinateur ou robot) mais qui n'est pas nécessairement informaticien (par opposition au programmeur par exemple). L'utilisateur peut aussi être une machine automatique (essentiellement représenté par un bot informatique) pouvant disposer de différents degrés d'autonomie. <br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Creer-un-nouvel-utilisateur-Creer-la-fenetre-de-d-ajout"><a class="Link9" href="#Creer-un-nouvel-utilisateur">Créer la fenêtre de d'ajout</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GWindow.h"
//===============================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);
    GWindow* lWindow = new GWindow;    
    lWindow-&gt;setWindowTitle("ReadyApp");
    lWindow-&gt;resize(400, 10);
    lWindow-&gt;show();
    return app.exec();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GWindow.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GWindow.h"
//===============================================
GWindow::GWindow(QWidget* parent) : QWidget(parent) {
    // username
    QLabel* lUsernameLabel = new QLabel;
    lUsernameLabel-&gt;setText("Nom d'utilisateur :");
    lUsernameLabel-&gt;setMinimumWidth(100);
    
    QLineEdit* lUsernameEdit = new QLineEdit;
    m_usernameEdit = lUsernameEdit;
    
    QHBoxLayout* lUsernameLayout = new QHBoxLayout;
    lUsernameLayout-&gt;addWidget(lUsernameLabel);
    lUsernameLayout-&gt;addWidget(lUsernameEdit);
    lUsernameLayout-&gt;setMargin(0);
    
    // password
    QLabel* lPasswordLabel = new QLabel;
    lPasswordLabel-&gt;setText("Mot de passe :");
    lPasswordLabel-&gt;setMinimumWidth(100);
    
    QLineEdit* lPasswordEdit = new QLineEdit;
    m_passwordEdit = lPasswordEdit;
    lPasswordEdit-&gt;setEchoMode(QLineEdit::Password);
    
    QHBoxLayout* lPasswordLayout = new QHBoxLayout;
    lPasswordLayout-&gt;addWidget(lPasswordLabel);
    lPasswordLayout-&gt;addWidget(lPasswordEdit);
    lPasswordLayout-&gt;setMargin(0);

    // confirm
    QLabel* lConfirmLabel = new QLabel;
    lConfirmLabel-&gt;setText("Confirmer :");
    lConfirmLabel-&gt;setMinimumWidth(100);
    
    QLineEdit* lConfirmEdit = new QLineEdit;
    m_confirmEdit = lConfirmEdit;
    lConfirmEdit-&gt;setEchoMode(QLineEdit::Password);
    
    QHBoxLayout* lConfirmLayout = new QHBoxLayout;
    lConfirmLayout-&gt;addWidget(lConfirmLabel);
    lConfirmLayout-&gt;addWidget(lConfirmEdit);
    lConfirmLayout-&gt;setMargin(0);
    
    // create
    QPushButton* lCreateButton = new QPushButton;
    lCreateButton-&gt;setText("Créer");
    
    QHBoxLayout* lCreateLayout = new QHBoxLayout;
    lCreateLayout-&gt;addWidget(lCreateButton);
    lCreateLayout-&gt;setAlignment(Qt::AlignRight);
    lCreateLayout-&gt;setMargin(0);
   
    // main_layout
    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addLayout(lUsernameLayout);
    lMainLayout-&gt;addLayout(lPasswordLayout);
    lMainLayout-&gt;addLayout(lConfirmLayout);
    lMainLayout-&gt;addLayout(lCreateLayout);
    lMainLayout-&gt;setAlignment(Qt::AlignTop);
    
    setLayout(lMainLayout);
    
    connect(lCreateButton, SIGNAL(clicked()), this, SLOT(slotConnect()));
}
//===============================================
GWindow::~GWindow() {

}
//===============================================
void GWindow::slotConnect() {
    QString lUsername = m_usernameEdit-&gt;text();
    QString lPassword = m_passwordEdit-&gt;text();
    QString lConfirm = m_confirmEdit-&gt;text();
    qDebug() &lt;&lt; QString("traiter la connexion : (%1 ; %2 ; %3)")
    .arg(lUsername, lPassword, lConfirm);
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Resources/ProjectBox/img/i_user_create.gif" alt="/Tutoriels/Resources/ProjectBox/img/i_user_create.gif"></div><br></div></div></div></div><br>