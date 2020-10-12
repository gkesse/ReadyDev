<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer un patron stratégie en C++</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer un patron stratégie en <b>C++</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>C++</b> est un langage de programmation compilé permettant la programmation sous de multiples paradigmes (comme la programmation procédurale, orientée objet ou générique). Ses bonnes performances, et sa compatibilité avec le C en font un des langages de programmation les plus utilisés dans les applications où la performance est critique.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Cpp/img/b_cours_strategy.png" alt="/Tutoriels/Cpp/img/b_cours_strategy.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un patron stratégie C++"><a class="Link3" href="#">Créer un patron stratégie C++</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer un patron stratégie C++-Introduction"><a class="Link9" href="#Créer un patron stratégie C++">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer un patron stratégie (GOpenCV).<br><br><h2 class="Title7 GTitle2" id="Créer un patron stratégie C++-Programme principal"><a class="Link9" href="#Créer un patron stratégie C++">Programme principal</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">GOpenCV::Instance()-&gt;open();</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un patron stratégie C++-Structure de l'interface de la stratégie"><a class="Link9" href="#Créer un patron stratégie C++">Structure de l'interface de la stratégie</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GOpenCV_
#define _GOpenCV_
//===============================================
#include "GInclude.h"
//===============================================
class GOpenCV { 
protected:
    GOpenCV();
   
public:
    virtual ~GOpenCV();
    static GOpenCV* Instance();

public:
    virtual void open() = 0;
};
//===============================================
#endif
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un patron stratégie C++-Structure de la stratégie Windows"><a class="Link9" href="#Créer un patron stratégie C++">Structure de la stratégie Windows</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GOpenCVWin_
#define _GOpenCVWin_
//===============================================
#include "GInclude.h"
#include "GOpenCV.h"
//===============================================
#if defined (__WIN32)
//===============================================
class GOpenCVWin : public GOpenCV {
private:
    GOpenCVWin();
    
public:
    ~GOpenCVWin();
    static GOpenCVWin* Instance();
    void open();

public:
    static GOpenCVWin* m_instance;
};
//===============================================
#endif
//===============================================
#endif
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un patron stratégie C++-Structure de la stratégie UNIX"><a class="Link9" href="#Créer un patron stratégie C++">Structure de la stratégie UNIX</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GOpenCVUnix_
#define _GOpenCVUnix_
//===============================================
#include "GInclude.h"
#include "GOpenCV.h"
//===============================================
#if defined (__unix)
//===============================================
class GOpenCVUnix : public GOpenCV {
private:
    GOpenCVUnix();
    
public:
    ~GOpenCVUnix();
    static GOpenCVUnix* Instance();
    void open();
    
public:
    static GOpenCVUnix* m_instance;
};
//===============================================
#endif
//===============================================
#endif
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un patron stratégie C++-Définition de l'interface de la stratégie"><a class="Link9" href="#Créer un patron stratégie C++">Définition de l'interface de la stratégie</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GOpenCV.h"
#include "GOpenCVWin.h"
#include "GOpenCVUnix.h"
//===============================================
GOpenCV::GOpenCV() {

}
//===============================================
GOpenCV::~GOpenCV() {
    
}
//===============================================
GOpenCV* GOpenCV::Instance() {
#if defined(__unix) 
    return GOpenCVUnix::Instance();
#elif defined(__WIN32) 
    return GOpenCVWin::Instance();
#endif
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un patron stratégie C++-Définition de la stratégie Windows"><a class="Link9" href="#Créer un patron stratégie C++">Définition de la stratégie Windows</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GOpenCVWin.h"
//===============================================
#if defined (__WIN32)
//===============================================
GOpenCVWin* GOpenCVWin::m_instance = 0;
//===============================================
GOpenCVWin::GOpenCVWin() {

}
//===============================================
GOpenCVWin::~GOpenCVWin() {
    
}
//===============================================
GOpenCVWin* GOpenCVWin::Instance() {
    if(m_instance == 0) {
        m_instance = new GOpenCVWin;
    }
    return m_instance;
}
//===============================================
void GOpenCVWin::open() {
    // code de la stratégie Windows
}
//===============================================
#endif
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un patron stratégie C++-Définition de la stratégie UNIX"><a class="Link9" href="#Créer un patron stratégie C++">Définition de la stratégie UNIX</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GOpenCVUnix.h"
//===============================================
#if defined (__unix)
//===============================================
GOpenCVUnix* GOpenCVUnix::m_instance = 0;
//===============================================
GOpenCVUnix::GOpenCVUnix() {

}
//===============================================
GOpenCVUnix::~GOpenCVUnix() {
    
}
//===============================================
GOpenCVUnix* GOpenCVUnix::Instance() {
    if(m_instance == 0) {
        m_instance = new GOpenCVUnix;
    }
    return m_instance;
}
//===============================================
void GOpenCVUnix::open() {
    // code la stratégie UNIX
}
//===============================================
#endif
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1600474250946"><div class="Row26">List 1 &gt; Cpp &gt; basics</div></div><script>loadList1("Loader_1600474250946","Cpp","basics");</script></div><br></div></div></div></div><br>