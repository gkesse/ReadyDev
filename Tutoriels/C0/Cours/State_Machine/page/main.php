<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer une machine à états finis en C</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer une machine à états finis en <b>C</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>C </b>est un langage de programmation impératif généraliste, de bas niveau offrant au développeur une marge de contrôle importante sur la machine (notamment sur la gestion de la mémoire) et est de ce fait utilisé pour réaliser les fondations (compilateurs, interpréteurs) des langages plus modernes. <br><br><div class="Img3 GImage"><img src="/Tutoriels/C0/img/b_cours_state_machine.png" alt="/Tutoriels/C0/img/b_cours_state_machine.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer une machine à états finis"><a class="Link3" href="#">Créer une machine à états finis</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599411222455"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599411222455");</script></div><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis-Introduction"><a class="Link9" href="#Créer une machine à états finis">Introduction</a></h2><br>Une machine à états finis permet de réaliser un système d'administration complet. Dans la logique, elle associe à chaque tâche un état et avec un système de changement d'états, couplé à une boucle infinie, elle permet de basculer d'une tâche à l'autre.<br><br>Dans l'exemple qui suit, nous essayons de construire une machine à états finis (GProcess) contenant la méthode d'exécution (run) qui encapsule toute la stratégie de la machine. L'état (S_INIT) est associé à la méthode du menu principal (run_INIT). L'état (S_CHOICE) est associé à la méthode du programme des choix (run_CHOICE). L'état (S_SQLITE) est associé à la méthode du programme SQLite (run_SQLITE). L'état (S_GTK) est associé à la méthode du programme GTK (run_GTK).<br>Le programme principal est basé sur une architecture boucle infinie associé à un système de machine à états finis.<br><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis-Programme d'ordonnancement"><a class="Link9" href="#Créer une machine à états finis">Programme d'ordonnancement</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GProcess_Run(int argc, char** argv) {
    m_GProcessO-&gt;G_STATE = "S_INIT";
    while(1) {
        if(!strcmp(m_GProcessO-&gt;G_STATE, "S_INIT")) {GProcess_Run_INIT(argc, argv);}
        else if(!strcmp(m_GProcessO-&gt;G_STATE, "S_CHOICE")) {GProcess_Run_CHOICE(argc, argv);}
        else if(!strcmp(m_GProcessO-&gt;G_STATE, "S_SQLITE")) {GProcess_Run_SQLITE(argc, argv);}
        else if(!strcmp(m_GProcessO-&gt;G_STATE, "S_GTK")) {GProcess_Run_GTK(argc, argv);}
        else break;
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis-Programme du menu principal"><a class="Link9" href="#Créer une machine à états finis">Programme du menu principal</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GProcess_Run_INIT(int argc, char** argv) {
    printf("\n");
    printf("MENU !!!\n");
    printf("\t%-2s : %s\n", "m", "afficher le menu principal");
    printf("\t%-2s : %s\n", "1", "acceder au programme SQLITE");
    printf("\t%-2s : %s\n", "2", "acceder au programme GTK");
    printf("\t%-2s : %s\n", "q", "quitter l'application");
    printf("\n");
    m_GProcessO-&gt;G_STATE = "S_CHOICE";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis-Programme des choix"><a class="Link9" href="#Créer une machine à états finis">Programme des choix</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GProcess_Run_CHOICE(int argc, char** argv) {
    printf("\n");
    printf("CHOIX ? ");
    char lAnswer[B_ANSWER+1]; fgets(lAnswer, B_ANSWER, stdin); lAnswer[strlen(lAnswer)-1] = 0;
    if(!strcmp(lAnswer, "m")) {m_GProcessO-&gt;G_STATE = "S_INIT";}
    else if(!strcmp(lAnswer, "1")) {m_GProcessO-&gt;G_STATE = "S_SQLITE";}
    else if(!strcmp(lAnswer, "2")) {m_GProcessO-&gt;G_STATE = "S_GTK";}
    else if(!strcmp(lAnswer, "q")) {m_GProcessO-&gt;G_STATE = "S_END";}
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis-Programme SQLITE"><a class="Link9" href="#Créer une machine à états finis">Programme SQLITE</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GProcess_Run_SQLITE(int argc, char** argv) {
    printf("\n");
    printf("lancement du programme SQLITE\n");
    m_GProcessO-&gt;G_STATE = "S_CHOICE";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis-Programme GTK"><a class="Link9" href="#Créer une machine à états finis">Programme GTK</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GProcess_Run_GTK(int argc, char** argv) {
    printf("\n");
    printf("lancement du programme GTK\n");
    m_GProcessO-&gt;G_STATE = "S_CHOICE";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis-Programme de test"><a class="Link9" href="#Créer une machine à états finis">Programme de test</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
int main(int argc, char** argv) {
    GProcess()-&gt;Run(argc, argv);
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis-Résultat"><a class="Link9" href="#Créer une machine à états finis">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/C0/img/i_cours_state_machine.png" alt="/Tutoriels/C0/img/i_cours_state_machine.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base en C</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1594465340717"><div class="Row26">List 1 &gt; C &gt; basics</div></div><script>loadList1("Loader_1594465340717","C","basics");</script></div><br></div></div></div></div><br>