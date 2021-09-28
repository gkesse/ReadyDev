<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Quelques projets C/C++<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous présenter quelques <b>projets </b>C/C++.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Row26">Summary 1</div></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br>Un <b>projet</b> est un ensemble de processus permettant de répondre à un besoin.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Resources/ProjectBox/img/b_projectbox.png" alt="/Tutoriels/Resources/ProjectBox/img/b_projectbox.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Creer-un-systeme-de-login"><a class="Link3" href="#">Créer un système de login</a></h1><div class="Body3"><br>Dans la sécurité informatique, la connexion (<b>login</b>) est le processus par lequel un individu gagne l'accès à un système informatique en s'identifiant et s'authentifiant. Les informations d'authentification sont constituées généralement d'un nom d'utilisateur et d'un mot de passe. Dans la pratique, les systèmes sécurisés modernes nécessitent souvent un deuxième facteur tel qu'une confirmation par e-mail ou SMS pour plus de sécurité. Lorsque l'accès n'est plus nécessaire, l'utilisateur peut se déconnecter.<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Creer-un-systeme-de-login-Fenetre-de-connexion"><a class="Link9" href="#Creer-un-systeme-de-login">Fenêtre de connexion</a></h2><br>Construction de la fenêtre<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
GUserConnect::GUserConnect(QWidget* parent) :
GProUi(parent) {
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

    // connect
    QPushButton* lConnectButton = new QPushButton;
    lConnectButton-&gt;setText("Connexion");
    m_widgetMap[lConnectButton] = "connect";

    QHBoxLayout* lConnectLayout = new QHBoxLayout;
    lConnectLayout-&gt;addWidget(lConnectButton);
    lConnectLayout-&gt;setAlignment(Qt::AlignRight);
    lConnectLayout-&gt;setMargin(0);

    // layout
    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addLayout(lUsernameLayout);
    lMainLayout-&gt;addLayout(lPasswordLayout);
    lMainLayout-&gt;addLayout(lConnectLayout);
    lMainLayout-&gt;setAlignment(Qt::AlignTop);

    setLayout(lMainLayout);

    connect(lConnectButton, SIGNAL(clicked()), this, SLOT(onEvent()));
}
//===============================================</pre></div></div><br><div class="Img3 GImage"><img src="/Tutoriels/Resources/ProjectBox/img/i_login_user_connect.png" alt="/Tutoriels/Resources/ProjectBox/img/i_login_user_connect.png"></div><br><h2 class="Title7 GTitle2" id="Creer-un-systeme-de-login-Recuperation-des-donnees-de-connexion"><a class="Link9" href="#Creer-un-systeme-de-login">Récupération des données de connexion</a></h2><br>Récupération du signal<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GUserConnect::onEvent() {
    QWidget* lWidget = qobject_cast&lt;QWidget*&gt;(sender());
    QString lWidgetId = m_widgetMap[lWidget];
    onEvent(lWidgetId);
}
//===============================================</pre></div></div><br>Récupération des données<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GUserConnect::onEvent(const QString&amp; text) {
    if(text == "connect") {
        QString lUsername = m_usernameEdit-&gt;text();
        QString lPassword = m_passwordEdit-&gt;text();
    }
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Creer-un-systeme-de-login-Traitement-des-donnees-de-connexion"><a class="Link9" href="#Creer-un-systeme-de-login">Traitement des données de connexion</a></h2><br>Récupération des données<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GUserConnect::onEvent(const QString&amp; text) {
    if(text == "connect") {
        QString lUsername = m_usernameEdit-&gt;text();
        QString lPassword = m_passwordEdit-&gt;text();
        bool lValid = true;
        lValid &amp;= (lUsername != "");
        lValid &amp;= (lPassword != "");
        if(lValid) {
            lValid &amp;= GManager::Instance()-&gt;countUser(lUsername, lPassword);
        }
        if(lValid) {
            GManager::Instance()-&gt;showMessage(this, "Connexion",
                    "La connexion a réussi.");
            close();
        }
        else {
            GManager::Instance()-&gt;showWarning(this, "Connexion",
                    "La connexion a échoué !\n"
                    "Veuillez vérifier les paramètres.");
        }
    }
}
//===============================================</pre></div></div><br>Traitement des données<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
int GManager::countUser(const QString&amp; username, const QString&amp; password) {
    QString lPassword = getPassword(username, password);
    int lCount = GSQLite::Instance()-&gt;readData(QString(""
            "select count(*) from user_data\n"
            "where _username = '%1'\n"
            "and _password = '%2'\n"
            "").arg(username, lPassword)).toInt();
    return lCount;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Creer-un-systeme-de-login-Cryptage-du-mot-de-passe"><a class="Link9" href="#Creer-un-systeme-de-login">Cryptage du mot de passe</a></h2><br>Récupération des données<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
QString GManager::getPassword(const QString&amp; username, const QString&amp; password) {
    QString lData = getMd5(QString("%1|%2").arg(username, password));
    return lData;
}
//===============================================</pre></div></div><br>Cryptage des données<br><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
QString GManager::getMd5(const QString&amp; data) {
    QString lData = QString(QCryptographicHash::hash(data.toLatin1(), QCryptographicHash::Md5).toHex());
    return lData;
}
//===============================================</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Creer-un-nouvel-utilisateur"><a class="Link3" href="#">Créer un nouvel utilisateur</a></h1><div class="Body3"><br>En informatique, le terme <b>utilisateur </b>(anciennement un opérateur ou un informaticien) est employé pour désigner une personne qui utilise un système informatisé (ordinateur ou robot) mais qui n'est pas nécessairement informaticien (par opposition au programmeur par exemple). L'utilisateur peut aussi être une machine automatique (essentiellement représenté par un bot informatique) pouvant disposer de différents degrés d'autonomie. <br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Creer-un-nouvel-utilisateur-Creer-la-fenetre-d-enregistrement"><a class="Link9" href="#Creer-un-nouvel-utilisateur">Créer la fenêtre d'enregistrement</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
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
    
    connect(lCreateButton, SIGNAL(clicked()), this, SLOT(onEvent()));
}
//===============================================
GWindow::~GWindow() {

}
//===============================================
void GWindow::onEvent() {
    QString lUsername = m_usernameEdit-&gt;text();
    QString lPassword = m_passwordEdit-&gt;text();
    QString lConfirm = m_confirmEdit-&gt;text();
    qDebug() &lt;&lt; QString("traiter la connexion : (%1 ; %2 ; %3)")
    .arg(lUsername, lPassword, lConfirm);
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Resources/ProjectBox/img/i_user_create.gif" class="lazy" data-src="/Tutoriels/Resources/ProjectBox/img/i_user_create.gif"></div><br><h2 class="Title7 GTitle2" id="Creer-un-nouvel-utilisateur-Traiter-l-enregistrement"><a class="Link9" href="#Creer-un-nouvel-utilisateur">Traiter l'enregistrement</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
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
#include "GManager.h"
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
    
    // save
    QPushButton* lSaveButton = new QPushButton;
    lSaveButton-&gt;setText("Enregistrer");
    
    QHBoxLayout* lSaveLayout = new QHBoxLayout;
    lSaveLayout-&gt;addWidget(lSaveButton);
    lSaveLayout-&gt;setAlignment(Qt::AlignRight);
    lSaveLayout-&gt;setMargin(0);
   
    // main_layout
    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addLayout(lUsernameLayout);
    lMainLayout-&gt;addLayout(lPasswordLayout);
    lMainLayout-&gt;addLayout(lConfirmLayout);
    lMainLayout-&gt;addLayout(lSaveLayout);
    lMainLayout-&gt;setAlignment(Qt::AlignTop);
    
    setLayout(lMainLayout);
    
    connect(lSaveButton, SIGNAL(clicked()), this, SLOT(onEvent()));
}
//===============================================
GWindow::~GWindow() {

}
//===============================================
void GWindow::onEvent() {
    QString lUsername = m_usernameEdit-&gt;text();
    QString lPassword = m_passwordEdit-&gt;text();
    QString lConfirm = m_confirmEdit-&gt;text();
    bool lValid = true;
    lValid &amp;= (lUsername != "");
    lValid &amp;= (lPassword != "");
    lValid &amp;= (lConfirm != "");
    lValid &amp;= (lPassword == lConfirm);
    if(lValid) {
        GManager::Instance()-&gt;saveUser(lUsername, lPassword);
        m_usernameEdit-&gt;clear();
        m_passwordEdit-&gt;clear();
        m_confirmEdit-&gt;clear();
        GManager::Instance()-&gt;showMessage(this, "Enregistrement",
        "L'enregistrement a réussi.");
    }
    else {
        GManager::Instance()-&gt;showWarning(this, "Enregistrement",
        "L'enregistrement a échoué !\n"
        "Veuillez vérifier les paramètres.");
    }
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">GManager.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
void GManager::saveUser(const QString&amp; username, const QString&amp; password) {
    int lCount = countUser(username);
    if(lCount == 0) {
        insertUser(username, password);
    }
    else {
        updateUser(username, password);
    }
}
//===============================================
int GManager::countUser(const QString&amp; username) {
    int lCount = GSQLite::Instance()-&gt;readData(QString(""
    "select count(*) from users\n"
    "where username = '%1'\n"
    "").arg(username)).toInt();
    return lCount;
}
//===============================================
void GManager::insertUser(const QString&amp; username, const QString&amp; password) {
    QString lPassword = getPassword(username, password);
    GSQLite::Instance()-&gt;writeData(QString(""
    "insert into users (username, password)\n"
    "values ('%1', '%2')\n"
    "").arg(username, lPassword));
}
//===============================================
void GManager::updateUser(const QString&amp; username, const QString&amp; password) {
    QString lPassword = getPassword(username, password);
    GSQLite::Instance()-&gt;writeData(QString(""
    "update users\n"
    "set password = '%2'\n"
    "where username = '%1'\n"
    "").arg(username, lPassword));
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Resources/ProjectBox/img/i_user_create_2.gif" class="lazy" data-src="/Tutoriels/Resources/ProjectBox/img/i_user_create_2.gif"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Gerer-une-base-de-donnees-SQLite"><a class="Link3" href="#">Gérer une base de données SQLite</a></h1><div class="Body3"><br><b>SQLite </b>est un système de gestion de base de données relationnelle accessible par le langage SQL et dont l'intégralité de la base de données (déclarations, tables, index et données) est stockée dans un fichier indépendant de la plateforme.<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Gerer-une-base-de-donnees-SQLite-Executer-une-requete-a-partir-d-un-fichier"><a class="Link9" href="#Gerer-une-base-de-donnees-SQLite">Exécuter une requête à partir d'un fichier</a></h2><br><h3 class="Title8 GTitle3">script.sql</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">select "Bonjour tout le monde";</pre></div></div><br><h3 class="Title8 GTitle3">Terminal</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">sqlite3 database.dat &lt; script.sql</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">Bonjour tout le monde</pre></div></div><br><h2 class="Title7 GTitle2" id="Gerer-une-base-de-donnees-SQLite-Creer-une-table"><a class="Link9" href="#Gerer-une-base-de-donnees-SQLite">Créer une table</a></h2><br><h3 class="Title8 GTitle3">script.sql</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">create table if not exists users (
username text,
password text
);</pre></div></div><br><h2 class="Title7 GTitle2" id="Gerer-une-base-de-donnees-SQLite-Afficher-la-liste-des-tables"><a class="Link9" href="#Gerer-une-base-de-donnees-SQLite">Afficher la liste des tables</a></h2><br><h3 class="Title8 GTitle3">script.sql</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">select name from sqlite_master;</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">users</pre></div></div><br><h2 class="Title7 GTitle2" id="Gerer-une-base-de-donnees-SQLite-Afficher-le-schema-d-une-table"><a class="Link9" href="#Gerer-une-base-de-donnees-SQLite">Afficher le schéma d'une table</a></h2><br><h3 class="Title8 GTitle3">script.sql</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">select sql from sqlite_master
where name = 'users';</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">CREATE TABLE users (
username text,
password text
)</pre></div></div><br><h2 class="Title7 GTitle2" id="Gerer-une-base-de-donnees-SQLite-Inserer-des-donnees-dans-une-table"><a class="Link9" href="#Gerer-une-base-de-donnees-SQLite">Insérer des données dans une table</a></h2><br><h3 class="Title8 GTitle3">script.sql</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">insert into users (username, password) 
values ('gkesse', 'gkessepass');</pre></div></div><br><h2 class="Title7 GTitle2" id="Gerer-une-base-de-donnees-SQLite-Afficher-les-donnees-d-une-table"><a class="Link9" href="#Gerer-une-base-de-donnees-SQLite">Afficher les données d'une table</a></h2><br><h3 class="Title8 GTitle3">script.sql</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">select * from users;</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="sql">gkesse|gkessepass</pre></div></div><br></div></div></div></div><br>