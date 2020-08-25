<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer une structure en C</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre créer une structure en <b>C</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>C </b>est un langage de programmation impératif généraliste, de bas niveau offrant au développeur une marge de contrôle importante sur la machine (notamment sur la gestion de la mémoire) et est de ce fait utilisé pour réaliser les fondations (compilateurs, interpréteurs) des langages plus modernes. <br><br><div class="Img3 GImage"><img src="/data/img/defaults/banner_c.png" alt="/data/img/defaults/banner_c.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Prérequis"><a class="Link3" href="#">Prérequis</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1598229424466"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1598229424466");</script></div><br><h2 class="Title7 GTitle2" id="Prérequis-Objectif"><a class="Link9" href="#Prérequis">Objectif</a></h2><br>$\checkmark$ Créer une structure en C<br><br><h2 class="Title7 GTitle2" id="Prérequis-Plan du projet"><a class="Link9" href="#Prérequis">Plan du projet</a></h2><br>$\checkmark$ Créer une structure<br>$\checkmark$ Créer les méthodes de gestion<br>$\checkmark$ Créer le programme de test<br>$\checkmark$ Présenter les résultats<br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer une structure"><a class="Link3" href="#">Créer une structure</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1598335390353"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1598335390353");</script></div><br><h2 class="Title7 GTitle2" id="Créer une structure-Utilité"><a class="Link9" href="#Créer une structure">Utilité</a></h2><br>$\checkmark$ Créer un type de données composite<br>$\checkmark$ Grouper plusieurs données dans un type<br><br><h2 class="Title7 GTitle2" id="Créer une structure-Ce que nous voulons faire"><a class="Link9" href="#Créer une structure">Ce que nous voulons faire</a></h2><br>$\checkmark$ Créer une structure utilisateur (sGUser)<br>$\checkmark$ Définir les propriétés d'un utilisateur<br>$\checkmark$ Déclarer la structure utilisateur<br>$\checkmark$ Définir la structure utilisateur<br><br><h2 class="Title7 GTitle2" id="Créer une structure-Propriétés d'un utilisateur"><a class="Link9" href="#Créer une structure">Propriétés d'un utilisateur</a></h2><br>$\checkmark$ Nom de l'utilisateur (name)<br>$\checkmark$ Adresse email de l'utilisateur (email)<br>$\checkmark$ Mot de passe de l'utilisateur (password)<br><br><h2 class="Title7 GTitle2" id="Créer une structure-Code de déclaration de la structure"><a class="Link9" href="#Créer une structure">Code de déclaration de la structure</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
typedef struct _sGUser sGUser;
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une structure-Code de définition de la structure"><a class="Link9" href="#Créer une structure">Code de définition de la structure</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
struct _sGUser {
    char* name;
    char* email;
    char* password;
};
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer les méthodes de gestion"><a class="Link3" href="#">Créer les méthodes de gestion</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1598338652910"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1598338652910");</script></div><br><h2 class="Title7 GTitle2" id="Créer les méthodes de gestion-Utilité"><a class="Link9" href="#Créer les méthodes de gestion">Utilité</a></h2><br>$\checkmark$ Manipuler les propriétés de la structure<br><br><h2 class="Title7 GTitle2" id="Créer les méthodes de gestion-Méthodes de gestion"><a class="Link9" href="#Créer les méthodes de gestion">Méthodes de gestion</a></h2><br>$\checkmark$ Méthode de construction statique d'un utilisateur<br>$\checkmark$ Méthode de construction dynamique d'un utilisateur<br>$\checkmark$ Méthode d'affichage d'un utilisateur<br>$\checkmark$ Méthode de destruction d'un utilisateur<br><br><h2 class="Title7 GTitle2" id="Créer les méthodes de gestion-Code de déclaration des méthodes"><a class="Link9" href="#Créer les méthodes de gestion">Code de déclaration des méthodes</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GUser_Create(sGUser* obj, char* name, char* email, char* password);
static sGUser* GUser_New(char* name, char* email, char* password);
static void GUser_Show(sGUser* obj);
static void GUser_Delete(sGUser* obj);
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer les méthodes de gestion-Code de construction statique d'un utilisateur"><a class="Link9" href="#Créer les méthodes de gestion">Code de construction statique d'un utilisateur</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GUser_Create(sGUser* obj, char* name, char* email, char* password) {
    obj-&gt;name = name;
    obj-&gt;email = email;
    obj-&gt;password = password;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer les méthodes de gestion-Code de construction dynamique d'un utilisateur"><a class="Link9" href="#Créer les méthodes de gestion">Code de construction dynamique d'un utilisateur</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static sGUser* GUser_New(char* name, char* email, char* password) {
    sGUser* lObj = (sGUser*)malloc(sizeof(sGUser));
    GUser_Create(lObj, name, email, password);
    return lObj;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer les méthodes de gestion-Code d'affichage d'un utilisateur"><a class="Link9" href="#Créer les méthodes de gestion">Code d'affichage d'un utilisateur</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GUser_Show(sGUser* obj) {
    printf("\n");
    printf("%-20s : %s\n", "Nom", obj-&gt;name);
    printf("%-20s : %s\n", "Email", obj-&gt;email);
    printf("%-20s : %s\n", "Mot de passe", obj-&gt;password);
    printf("\n");
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer les méthodes de gestion-Code de destruction d'un utilisateur"><a class="Link9" href="#Créer les méthodes de gestion">Code de destruction d'un utilisateur</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GUser_Delete(sGUser* obj) {
    free(obj);
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer le programme de test"><a class="Link3" href="#">Créer le programme de test</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1598341586936"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1598341586936");</script></div><br><h2 class="Title7 GTitle2" id="Créer le programme de test-Utilité"><a class="Link9" href="#Créer le programme de test">Utilité</a></h2><br>$\checkmark$ Présenter l'utilisation d'une structure<br><br><h2 class="Title7 GTitle2" id="Créer le programme de test-Plan de test"><a class="Link9" href="#Créer le programme de test">Plan de test</a></h2><br>$\checkmark$ Créer un utilisateur par la méthode dynamique (lUser1)<br>$\checkmark$ Créer un utilisateur par la méthode statique (lUser2)<br>$\checkmark$ Afficher les deux utilisateurs<br><br><h2 class="Title7 GTitle2" id="Créer le programme de test-Programme de test"><a class="Link9" href="#Créer le programme de test">Programme de test</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
int main(int argc, char** argv) {
    // forme dynamique
    sGUser* lUser = GUser_New("Gerard KESSE", "gerard.kesse@readydev.com", "123456");
    GUser_Show(lUser);
    GUser_Delete(lUser);
    // forme statique
    sGUser lUser2;
    GUser_Create(&lUser2, "Jean DUPONT", "jean.dupont@readydev.com", "654321");
    GUser_Show(&lUser2);
    return 0;
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Présenter les résultats de test"><a class="Link3" href="#">Présenter les résultats de test</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1598354134103"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1598354134103");</script></div><br><h2 class="Title7 GTitle2" id="Présenter les résultats de test-Utilité"><a class="Link9" href="#Présenter les résultats de test">Utilité</a></h2><br>$\checkmark$ Observer les résultats de test<br><br><h2 class="Title7 GTitle2" id="Présenter les résultats de test-Plan de test"><a class="Link9" href="#Présenter les résultats de test">Plan de test</a></h2><br>$\checkmark$ Installer les variables d'environnement<br>$\checkmark$ Compiler le projet<br>$\checkmark$ Exécuter le projet<br>$\checkmark$ Observer les résultats de test<br><br><h2 class="Title7 GTitle2" id="Présenter les résultats de test-Installer les variables d'environnement"><a class="Link9" href="#Présenter les résultats de test">Installer les variables d'environnement</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">set "PATH=C:\MinGW\bin;%PATH%"</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Présenter les résultats de test-Compiler le projet"><a class="Link9" href="#Présenter les résultats de test">Compiler le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">del /q build\* bin\*
gcc -c .\main.c -o build\main.o
gcc -o bin\gz_app.exe build\main.o</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Présenter les résultats de test-Exécuter le projet"><a class="Link9" href="#Présenter les résultats de test">Exécuter le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">bin\gz_app.exe</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Présenter les résultats de test-Observer les résultats de test"><a class="Link9" href="#Présenter les résultats de test">Observer les résultats de test</a></h2><br><div class="Img3 GImage"><img src="img/c_struct.png" alt="img/c_struct.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Codes sources"><a class="Link3" href="#">Codes sources</a></h1><div class="Body3"><br><i>ReadyDev met à votre disposition l'ensemble des codes sources publiés sur ce site.<br>Publiés sous licence libre (GNU General Public License v3.0).</i><br><br><h2 class="Title7 GTitle2" id="Codes sources-Programme complet"><a class="Link9" href="#Codes sources">Programme complet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
//===============================================
typedef struct _sGUser sGUser;
//===============================================
struct _sGUser {
    char* name;
    char* email;
    char* password;
};
//===============================================
static void GUser_Create(sGUser* obj, char* name, char* email, char* password);
static sGUser* GUser_New(char* name, char* email, char* password);
static void GUser_Show(sGUser* obj);
static void GUser_Delete(sGUser* obj);
//===============================================
static void GUser_Create(sGUser* obj, char* name, char* email, char* password) {
    obj-&gt;name = name;
    obj-&gt;email = email;
    obj-&gt;password = password;
}
//===============================================
static sGUser* GUser_New(char* name, char* email, char* password) {
    sGUser* lObj = (sGUser*)malloc(sizeof(sGUser));
    GUser_Create(lObj, name, email, password);
    return lObj;
}
//===============================================
static void GUser_Show(sGUser* obj) {
    printf("\n");
    printf("%-20s : %s\n", "Nom", obj-&gt;name);
    printf("%-20s : %s\n", "Email", obj-&gt;email);
    printf("%-20s : %s\n", "Mot de passe", obj-&gt;password);
    printf("\n");
}
//===============================================
static void GUser_Delete(sGUser* obj) {
    free(obj);
}
//===============================================
int main(int argc, char** argv) {
    // forme dynamique
    sGUser* lUser = GUser_New("Gerard KESSE", "gerard.kesse@readydev.com", "123456");
    GUser_Show(lUser);
    GUser_Delete(lUser);
    // forme statique
    sGUser lUser2;
    GUser_Create(&lUser2, "Jean DUPONT", "jean.dupont@readydev.com", "654321");
    GUser_Show(&lUser2);
    return 0;
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base en C</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1594465340717"><div class="Row26">List 1 &gt; C &gt; basics</div></div><script>loadList1("Loader_1594465340717","C","basics");</script></div><br><span class="GColor1" style="color:lime;">Programmation avancée en C</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1594465358756"><div class="Row26">List 1 &gt; C &gt; advanced</div></div><script>loadList1("Loader_1594465358756","C","advanced");</script></div><br></div></div></div></div><br>