<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer un singleton en C</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer un singleton en <b>C</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>C </b>est un langage de programmation impératif généraliste, de bas niveau offrant au développeur une marge de contrôle importante sur la machine (notamment sur la gestion de la mémoire) et est de ce fait utilisé pour réaliser les fondations (compilateurs, interpréteurs) des langages plus modernes. <br><br><div class="Img3 GImage"><img src="/Tutoriels/C0/img/b_cours_singleton.png" alt="/Tutoriels/C0/img/b_cours_singleton.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un singleton en C"><a class="Link3" href="#">Créer un singleton en C</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599254364774"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599254364774");</script></div><br><h2 class="Title7 GTitle2" id="Créer un singleton en C-Introduction"><a class="Link9" href="#Créer un singleton en C">Introduction</a></h2><br>Un singleton permet créer et d'avoir uniquement une instance d'un objet durant le cycle de vie de tout le programme.<br><br>Dans l'exemple qui suit, nous essayons de construire un singleton (GProcess) contenant la méthode exécution (run) qui affiche un message à l'écran (lancement de la méthode exécution).<br><br><h2 class="Title7 GTitle2" id="Créer un singleton en C-Structure du singleton"><a class="Link9" href="#Créer un singleton en C">Structure du singleton</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
struct _GProcessO {
    void (*Run)(int argc, char** argv);
};
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un singleton en C-Initialisation du singleton"><a class="Link9" href="#Créer un singleton en C">Initialisation du singleton</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static GProcessO* m_GProcessO = 0;
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un singleton en C-Création du singleton"><a class="Link9" href="#Créer un singleton en C">Création du singleton</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
GProcessO* GProcess() {
    if(m_GProcessO == 0) {
        m_GProcessO = GProcess_New();
    }
    return m_GProcessO;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un singleton en C-Constructeur du singleton"><a class="Link9" href="#Créer un singleton en C">Constructeur du singleton</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
GProcessO* GProcess_New() {
    printf("creation du singleton...\n");
    GProcessO* lObj = (GProcessO*)malloc(sizeof(GProcessO));
    lObj-&gt;Run = GProcess_Run;
    return lObj;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un singleton en C-Programme de test"><a class="Link9" href="#Créer un singleton en C">Programme de test</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
int main(int argc, char** argv) {
    GProcess()-&gt;Run(argc, argv);
    GProcess()-&gt;Run(argc, argv);
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un singleton en C-Résultat"><a class="Link9" href="#Créer un singleton en C">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/C0/img/i_cours_singleton.png" alt="/Tutoriels/C0/img/i_cours_singleton.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Codes sources"><a class="Link3" href="#">Codes sources</a></h1><div class="Body3"><br><i>ReadyDev met à votre disposition l'ensemble des codes sources publiés sur ce site.<br>Publiés sous licence libre (GNU General Public License v3.0).</i><br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1600229654848"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1600229654848");</script></div><br><h2 class="Title7 GTitle2" id="Codes sources-GProcess.h"><a class="Link9" href="#Codes sources">GProcess.h</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
GProcessO* GProcess();
//===============================================
#endif
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Codes sources-GProcess.c"><a class="Link9" href="#Codes sources">GProcess.c</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GProcess.h"
//===============================================
static GProcessO* m_GProcessO = 0;
//===============================================
static GProcessO* GProcess_New();
static void GProcess_Run(int argc, char** argv);
//===============================================
GProcessO* GProcess_New() {
    printf("creation du singleton...\n");
    GProcessO* lObj = (GProcessO*)malloc(sizeof(GProcessO));
    lObj-&gt;Run = GProcess_Run;
    return lObj;
}
//===============================================
GProcessO* GProcess() {
    if(m_GProcessO == 0) {
        m_GProcessO = GProcess_New();
    }
    return m_GProcessO;
}
//===============================================
static void GProcess_Run(int argc, char** argv) {
    printf("lancement de la methode execution\n");
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Codes sources-main.c"><a class="Link9" href="#Codes sources">main.c</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GProcess.h"
//===============================================
int main(int argc, char** argv) {
    GProcess()-&gt;Run(argc, argv);
    GProcess()-&gt;Run(argc, argv);
    return 0;
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base en C</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1594465340717"><div class="Row26">List 1 &gt; C &gt; basics</div></div><script>loadList1("Loader_1594465340717","C","basics");</script></div><br></div></div></div></div><br>