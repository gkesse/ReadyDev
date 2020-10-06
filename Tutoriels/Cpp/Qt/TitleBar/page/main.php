<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer une barre de titre personnalisée Qt en C++</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer une barre de titre personnalisée <b>Qt </b>en <b>C++</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>Qt </b>est une API orientée objet et développée en C++. Qt offre des composants d'interface graphique (widgets), d'accès aux données, de connexions réseaux, de gestion des fils d'exécution, d'analyse XML. Elle utilse le mécanisme des signaux et slots.Qt prend en charge le système graphique X Window System et intègre des bindings avec plusieurs langages.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Cpp/img/b_qt_titlebar.png" alt="/Tutoriels/Cpp/img/b_qt_titlebar.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer une barre de titre personnalisée Qt en C++"><a class="Link3" href="#">Créer une barre de titre personnalisée Qt en C++</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer une barre de titre personnalisée Qt en C++-Introduction"><a class="Link9" href="#Créer une barre de titre personnalisée Qt en C++">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer une barre de titre personnalisée (GTitleBar).<br><br><h2 class="Title7 GTitle2" id="Créer une barre de titre personnalisée Qt en C++-Programme principal"><a class="Link9" href="#Créer une barre de titre personnalisée Qt en C++">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GWindow.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">m_titleBar = new GTitleBar;
m_mainLayout-&gt;addWidget(m_titleBar, 0);</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une barre de titre personnalisée Qt en C++-Structure de la barre de titre"><a class="Link9" href="#Créer une barre de titre personnalisée Qt en C++">Structure de la barre de titre</a></h2><br><h3 class="Title8 GTitle3">GTitleBar.h</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GTitleBar_
#define _GTitleBar_
//===============================================
#include "GInclude.h"
//===============================================
class GTitleBar : public QFrame {
    Q_OBJECT
    
public:
    GTitleBar(QWidget* parent  = 0);
    ~GTitleBar();

public slots:
    void slotTitleClick();
    void slotTitleUpdate();
    
signals:
    void emitTitleClick();
    
private:
    QToolButton* m_icon;
    QLabel* m_appName;
    QLabel* m_title;
    QToolButton* m_fullscreen;
    QToolButton* m_minimize;
    QToolButton* m_maximize;
    QToolButton* m_close;
    QMap&lt;QWidget*, QString&gt; m_widgetId;
    QHBoxLayout* m_mainLayout;
};
//===============================================
#endif
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une barre de titre personnalisée Qt en C++-Constructeur de la barre de titre"><a class="Link9" href="#Créer une barre de titre personnalisée Qt en C++">Constructeur de la barre de titre</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
GTitleBar::GTitleBar(QWidget* parent) : QFrame(parent) {
    setObjectName("GTitleBar");
    sGQt* lQt = GManager::Instance()-&gt;dataGet()-&gt;qt;
    sGTitleBar* lTitleBar = GManager::Instance()-&gt;dataGet()-&gt;title_bar;
    
    m_icon = new QToolButton;  
    m_icon-&gt;setIcon(QIcon(lTitleBar-&gt;icon_file));
    m_icon-&gt;setIconSize(QSize(lTitleBar-&gt;logo_size, lTitleBar-&gt;logo_size));
    m_icon-&gt;setCursor(Qt::PointingHandCursor);
    m_icon-&gt;setObjectName("icon");
    m_widgetId[m_icon] = "icon";
    
    m_appName = new QLabel;    
    m_appName-&gt;setText(lQt-&gt;title);
    m_appName-&gt;setAlignment(Qt::AlignLeft);
    
    m_title = new QLabel;
    m_title-&gt;setObjectName("title");
    m_title-&gt;setText("ACCUEIL");
    m_title-&gt;setAlignment(Qt::AlignCenter);
    
    m_fullscreen = new QToolButton;    
    m_fullscreen-&gt;setIcon(GManager::Instance()-&gt;pictoLoad(fa::arrowsalt, lTitleBar-&gt;color));
    m_fullscreen-&gt;setIconSize(QSize(lTitleBar-&gt;icon_size, lTitleBar-&gt;icon_size));
    m_fullscreen-&gt;setCursor(Qt::PointingHandCursor);
    m_widgetId[m_fullscreen] = "fullscreen";

    m_minimize = new QToolButton;    
    m_minimize-&gt;setIcon(GManager::Instance()-&gt;pictoLoad(fa::windowminimize, lTitleBar-&gt;color));
    m_minimize-&gt;setIconSize(QSize(lTitleBar-&gt;icon_size, lTitleBar-&gt;icon_size));
    m_minimize-&gt;setCursor(Qt::PointingHandCursor);
    m_widgetId[m_minimize] = "minimize";

    m_maximize = new QToolButton;    
    m_maximize-&gt;setIcon(GManager::Instance()-&gt;pictoLoad(fa::windowmaximize, lTitleBar-&gt;color));
    m_maximize-&gt;setIconSize(QSize(lTitleBar-&gt;icon_size, lTitleBar-&gt;icon_size));
    m_maximize-&gt;setCursor(Qt::PointingHandCursor);
    m_widgetId[m_maximize] = "maximize";

    m_close = new QToolButton;    
    m_close-&gt;setIcon(GManager::Instance()-&gt;pictoLoad(fa::times, lTitleBar-&gt;color));                                                             
    m_close-&gt;setIconSize(QSize(lTitleBar-&gt;icon_size, lTitleBar-&gt;icon_size));
    m_close-&gt;setCursor(Qt::PointingHandCursor);
    m_widgetId[m_close] = "close";
    
    m_mainLayout = new QHBoxLayout;    
    m_mainLayout-&gt;addWidget(m_icon, 0);
    m_mainLayout-&gt;addWidget(m_appName, 0);
    m_mainLayout-&gt;addWidget(m_title, 1);
    m_mainLayout-&gt;addWidget(m_fullscreen, 0);
    m_mainLayout-&gt;addWidget(m_minimize, 0);
    m_mainLayout-&gt;addWidget(m_maximize, 0);
    m_mainLayout-&gt;addWidget(m_close, 0);
    m_mainLayout-&gt;setContentsMargins(10, 0, 10, 20);
    m_mainLayout-&gt;setSpacing(2);
    
    setLayout(m_mainLayout);

    connect(m_icon, SIGNAL(clicked()), this, SLOT(slotTitleClick()));
    connect(m_fullscreen, SIGNAL(clicked()), this, SLOT(slotTitleClick()));
    connect(m_minimize, SIGNAL(clicked()), this, SLOT(slotTitleClick()));
    connect(m_maximize, SIGNAL(clicked()), this, SLOT(slotTitleClick()));
    connect(m_close, SIGNAL(clicked()), this, SLOT(slotTitleClick()));
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une barre de titre personnalisée Qt en C++-Réagir au clic d'un bouton sur la barre de titre"><a class="Link9" href="#Créer une barre de titre personnalisée Qt en C++">Réagir au clic d'un bouton sur la barre de titre</a></h2><br><h3 class="Title8 GTitle3">GWindow.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GTitleBar::slotTitleClick() {
    sGTitleBar* lTitleBar = GManager::Instance()-&gt;dataGet()-&gt;title_bar;
    QWidget* lWidget = qobject_cast&lt;QWidget*&gt;(sender());
    lTitleBar-&gt;click_id = m_widgetId[lWidget];
    emit emitTitleClick();
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une barre de titre personnalisée Qt en C++-Mise à jour des composantes de la barre de titre"><a class="Link9" href="#Créer une barre de titre personnalisée Qt en C++">Mise à jour des composantes de la barre de titre</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GTitleBar::slotTitleUpdate() {
    sGTitleBar* lTitleBar = GManager::Instance()-&gt;dataGet()-&gt;title_bar;
    if(lTitleBar-&gt;update == "maximize_fa") {
        m_maximize-&gt;setIcon(GManager::Instance()-&gt;pictoLoad(lTitleBar-&gt;update_fa, lTitleBar-&gt;color));
    }
    else if(lTitleBar-&gt;update == "fullscreen_fa") {
        m_fullscreen-&gt;setIcon(GManager::Instance()-&gt;pictoLoad(lTitleBar-&gt;update_fa, lTitleBar-&gt;color));
    }
    else if(lTitleBar-&gt;update == "fullscreen_img") {
        m_fullscreen-&gt;setIcon(QIcon(lTitleBar-&gt;update_img));
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une barre de titre personnalisée Qt en C++-Résultat"><a class="Link9" href="#Créer une barre de titre personnalisée Qt en C++">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Cpp/img/i_qt_titlebar.png" alt="/Tutoriels/Cpp/img/i_qt_titlebar.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Interface Homme-Machine Qt</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1601149057068"><div class="Row26">List 1 &gt; Cpp &gt; qt</div></div><script>loadList1("Loader_1601149057068","Cpp","qt");</script></div><br></div></div></div></div><br>