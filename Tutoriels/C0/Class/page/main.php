<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer une structure en C</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer une classe en <b>C</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>C </b>est un langage de programmation impératif généraliste, de bas niveau offrant au développeur une marge de contrôle importante sur la machine (notamment sur la gestion de la mémoire) et est de ce fait utilisé pour réaliser les fondations (compilateurs, interpréteurs) des langages plus modernes. <br><br><div class="Img3 GImage"><img src="/Tutoriels/C0/img/b_class.png" alt="/Tutoriels/C0/img/b_class.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer une classe"><a class="Link3" href="#">Créer une classe</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599257181217"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599257181217");</script></div><br><h2 class="Title7 GTitle2" id="Créer une classe-Introduction"><a class="Link9" href="#Créer une classe">Introduction</a></h2><br>La notion de classe ici est un concept emprunté du monde de la programmation orientée objet.<br>Les classes permettent de mieux réorganiser le concept des structures en regroupant à la fois les propriétés et les méthodes associées à un objet dans un même ensemble.<br><br>Dans l'exemple qui suit, nous essaye$ons de réaliser une classe permettant de modéliser un utilisateur (sGUser). On définit un utilisateur par son nom (name), son adresse email (email) et son mot de passe (password).<br><br><h2 class="Title7 GTitle2" id="Créer une classe-Définition de la classe"><a class="Link9" href="#Créer une classe">Définition de la classe</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
struct _sGUser {
    //-----------------------------------------------
    // methodes
    void (*Delete)(sGUser* obj);
    void (*Show)(sGUser* obj);
    //-----------------------------------------------
    // proprietes
    char* name;
    char* email;
    char* password;
    //-----------------------------------------------
};
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une classe-Constructeur de la classe"><a class="Link9" href="#Créer une classe">Constructeur de la classe</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static sGUser* GUser_New(char* name, char* email, char* password) {
    sGUser* lObj = (sGUser*)malloc(sizeof(sGUser));
    //-----------------------------------------------
    lObj-&gt;name = name;
    lObj-&gt;email = email;
    lObj-&gt;password = password;
    //-----------------------------------------------
    lObj-&gt;Delete = GUser_Delete;
    lObj-&gt;Show = GUser_Show;
    //-----------------------------------------------
    return lObj;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une classe-Destructeur de la classe"><a class="Link9" href="#Créer une classe">Destructeur de la classe</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GUser_Delete(sGUser* obj) {
    free(obj);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une classe-Affichage de la classe"><a class="Link9" href="#Créer une classe">Affichage de la classe</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GUser_Show(sGUser* obj) {
    printf("\n");
    printf("%-20s : %s\n", "Nom", obj-&gt;name);
    printf("%-20s : %s\n", "Email", obj-&gt;email);
    printf("%-20s : %s\n", "Mot de passe", obj-&gt;password);
    printf("\n");
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une classe-Programme de test"><a class="Link9" href="#Créer une classe">Programme de test</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
int main(int argc, char** argv) {
    sGUser* lUser = GUser_New("Gerard KESSE", "gerard.kesse@readydev.com", "123456");
    lUser-&gt;Show(lUser);
    lUser-&gt;Delete(lUser);
    return 0;
}
//===============================================</xmp></pre></div><br><br><h2 class="Title7 GTitle2" id="Créer une classe-Résultat"><a class="Link9" href="#Créer une classe">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/C0/img/i_class.png" alt="/Tutoriels/C0/img/i_class.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base en C</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1594465340717"><div class="Row26">List 1 &gt; C &gt; basics</div></div><script>loadList1("Loader_1594465340717","C","basics");</script></div><br><span class="GColor1" style="color:lime;">Programmation avancée en C</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1594465358756"><div class="Row26">List 1 &gt; C &gt; advanced</div></div><script>loadList1("Loader_1594465358756","C","advanced");</script></div><br></div></div></div></div><br>