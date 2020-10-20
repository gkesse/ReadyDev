<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer un système de fichier log en C</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer un système de fichier log en <b>C</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>C </b>est un langage de programmation impératif généraliste, de bas niveau offrant au développeur une marge de contrôle importante sur la machine (notamment sur la gestion de la mémoire) et est de ce fait utilisé pour réaliser les fondations (compilateurs, interpréteurs) des langages plus modernes. <br><br><div class="Img3 GImage"><img src="/Tutoriels/C0/img/b_cours_log.png" alt="/Tutoriels/C0/img/b_cours_log.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un système de fichier log en C"><a class="Link3" href="#">Créer un système de fichier log en C</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599254364774"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599254364774");</script></div><br><h2 class="Title7 GTitle2" id="Créer un système de fichier log en C-Introduction"><a class="Link9" href="#Créer un système de fichier log en C">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer un système de fichier log (GProcess).<br><br><h2 class="Title7 GTitle2" id="Créer un système de fichier log en C-Programme principal"><a class="Link9" href="#Créer un système de fichier log en C">Programme principal</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">GProcess()-&gt;Run(argc, argv);</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système de fichier log en C-Structure du singleton"><a class="Link9" href="#Créer un système de fichier log en C">Structure du singleton</a></h2><br><h3 class="Title8 GTitle3">GProcess.h</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GProcess_
#define _GProcess_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct _GProcessO GProcessO;
//===============================================
struct _GProcessO {
    void (*Run)(int argc, char** argv);
};
//===============================================
GProcessO* GProcess_New();
GProcessO* GProcess();
//===============================================
#endif
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système de fichier log en C-Initialisation du singleton"><a class="Link9" href="#Créer un système de fichier log en C">Initialisation du singleton</a></h2><br><h3 class="Title8 GTitle3">GProcess.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static GProcessO* m_GProcessO = 0;
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système de fichier log en C-Création du singleton"><a class="Link9" href="#Créer un système de fichier log en C">Création du singleton</a></h2><br><h3 class="Title8 GTitle3">&nbsp;GProcess.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
GProcessO* GProcess() {
    if(m_GProcessO == 0) {
        m_GProcessO = GProcess_New();
    }
    return m_GProcessO;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système de fichier log en C-Constructeur du singleton"><a class="Link9" href="#Créer un système de fichier log en C">Constructeur du singleton</a></h2><br><h3 class="Title8 GTitle3">GProcess.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
GProcessO* GProcess_New() {
    GProcessO* lObj = (GProcessO*)malloc(sizeof(GProcessO));
lObj-&gt;Run = GProcess_Run;
    return lObj;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système de fichier log en C-Méthode du singleton"><a class="Link9" href="#Créer un système de fichier log en C">Méthode du singleton</a></h2><br><h3 class="Title8 GTitle3">GProcess.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GProcess_Run(int argc, char** argv) {
   // code de la methode run
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1594465340717"><div class="Row26">List 1 &gt; C &gt; basics</div></div><script>loadList1("Loader_1594465340717","C","basics");</script></div><br></div></div></div></div><br>