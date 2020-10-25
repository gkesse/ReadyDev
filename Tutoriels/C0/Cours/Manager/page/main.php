<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer un manager de données en C</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer un manager de données en <b>C</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>C </b>est un langage de programmation impératif généraliste, de bas niveau offrant au développeur une marge de contrôle importante sur la machine (notamment sur la gestion de la mémoire) et est de ce fait utilisé pour réaliser les fondations (compilateurs, interpréteurs) des langages plus modernes. <br><br><div class="Img3 GImage"><img src="/Tutoriels/C0/img/b_cours_manager.png" alt="/Tutoriels/C0/img/b_cours_manager.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un manager de données en C"><a class="Link3" href="#">Créer un manager de données en C</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599254364774"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599254364774");</script></div><br><h2 class="Title7 GTitle2" id="Créer un manager de données en C-Introduction"><a class="Link9" href="#Créer un manager de données en C">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer un manager de données (GManager).<br><br><h2 class="Title7 GTitle2" id="Créer un manager de données en C-Programme principal"><a class="Link9" href="#Créer un manager de données en C">Programme principal</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">sGSQLite* lSQLite = GManager()-&gt;m_mgr-&gt;sqlite;
sqlite3_open(lSQLite-&gt;db_path, &lDb);</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un manager de données en C-Structure du manager de données"><a class="Link9" href="#Créer un manager de données en C">Structure du manager de données</a></h2><br><h3 class="Title8 GTitle3">GManager.h</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GManager_
#define _GManager_
//===============================================
#include "GInclude.h"
//===============================================
#define B_SQLITE_DB (256)
//===============================================
typedef struct _GManagerO GManagerO;
//===============================================
typedef struct _sGManager sGManager;
typedef struct _sGSQLite sGSQLite;
//===============================================
struct _GManagerO {
    // data
    sGManager* m_mgr;
};
//===============================================
struct _sGManager {
    sGSQLite* sqlite;
};
//===============================================
struct _sGSQLite {
    char db_path[B_SQLITE_DB+1];
};
//===============================================
#endif
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un manager de données en C-Initialisation du manager de données"><a class="Link9" href="#Créer un manager de données en C">Initialisation du manager de données</a></h2><br><h3 class="Title8 GTitle3">GManager.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GManager_Init(GManagerO* obj) {
    // manager
    obj-&gt;m_mgr = (sGManager*)malloc(sizeof(sGManager));
    // sqlite
    obj-&gt;m_mgr-&gt;sqlite = (sGSQLite*)malloc(sizeof(sGSQLite));
    strcpy(obj-&gt;m_mgr-&gt;sqlite-&gt;db_path, "UNKNOWN");
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1594465340717"><div class="Row26">List 1 &gt; C &gt; basics</div></div><script>loadList1("Loader_1594465340717","C","basics");</script></div><br></div></div></div></div><br>