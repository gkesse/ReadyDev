<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer une machine à états finis en C</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer une machine à états finis en <b>C</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>C </b>est un langage de programmation impératif généraliste, de bas niveau offrant au développeur une marge de contrôle importante sur la machine (notamment sur la gestion de la mémoire) et est de ce fait utilisé pour réaliser les fondations (compilateurs, interpréteurs) des langages plus modernes. <br><br><div class="Img3 GImage"><img src="/Tutoriels/C0/img/b_cours_state_machine.png" alt="/Tutoriels/C0/img/b_cours_state_machine.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer une machine à états finis en C"><a class="Link3" href="#">Créer une machine à états finis en C</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599411222455"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599411222455");</script></div><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis en C-Introduction"><a class="Link9" href="#Créer une machine à états finis en C">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer une machine à états finis (GProcess). <br><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis en C-Programme principal"><a class="Link9" href="#Créer une machine à états finis en C">Programme principal</a></h2><br><h3 class="Title8 GTitle3">main.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">GProcessUi()-&gt;Run(argc, argv);</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis en C-Machine à états finis"><a class="Link9" href="#Créer une machine à états finis en C">Machine à états finis</a></h2><br><h3 class="Title8 GTitle3">GProcess.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GProcessUi_Run(int argc, char** argv) {
    m_GProcessUiO-&gt;G_STATE = "S_INIT";
    while(1) {
        if(!strcmp(m_GProcessUiO-&gt;G_STATE, "S_INIT")) {GProcessUi_Run_INIT(argc, argv);}
        else if(!strcmp(m_GProcessUiO-&gt;G_STATE, "S_METHOD")) {GProcessUi_Run_METHOD(argc, argv);}
        else if(!strcmp(m_GProcessUiO-&gt;G_STATE, "S_CHOICE")) {GProcessUi_Run_CHOICE(argc, argv);}
        else if(!strcmp(m_GProcessUiO-&gt;G_STATE, "S_GTK")) {GProcessUi_Run_GTK(argc, argv);}
        else if(!strcmp(m_GProcessUiO-&gt;G_STATE, "S_OPENCV")) {GProcessUi_Run_OPENCV(argc, argv);}
        else break;
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis en C-Programme d'initialisation"><a class="Link9" href="#Créer une machine à états finis en C">Programme d'initialisation</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GProcessUi_Run_INIT(int argc, char** argv) {
    printf("\n");
    printf("C_ADMIN !!!\n");
    printf("\t%-2s : %s\n", "-q", "quitter l'application");
    printf("\n");
    m_GProcessUiO-&gt;G_STATE = "S_LOAD";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis en C-Programme du menu principal"><a class="Link9" href="#Créer une machine à états finis en C">Programme du menu principal</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GProcessUi_Run_METHOD(int argc, char** argv) {
    printf("\n");
    printf("C_ADMIN :\n");
    printf("\t%-2s : %s\n", "1", "S_GTK");
    printf("\t%-2s : %s\n", "2", "S_OPENCV");
    printf("\n");
    m_GProcessUiO-&gt;G_STATE = "S_CHOICE";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis en C-Programme des choix"><a class="Link9" href="#Créer une machine à états finis en C">Programme des choix</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GProcessUi_Run_CHOICE(int argc, char** argv) {
    char* lLast = GConfig()-&gt;GetData("G_ADMIN_ID");
    printf("C_ADMIN (%s) ? ", lLast);
    char lAnswer[B_ANSWER+1]; GManager()-&gt;ReadLine(lAnswer, B_ANSWER);
    if(!strcmp(lAnswer, "")) {strcpy(lAnswer, lLast);}
    if(!strcmp(lAnswer, "-q")) {m_GProcessUiO-&gt;G_STATE = "S_END";}
    else if(!strcmp(lAnswer, "1")) {m_GProcessUiO-&gt;G_STATE = "S_GTK"; GConfig()-&gt;SetData("G_ADMIN_ID", lAnswer);}
    else if(!strcmp(lAnswer, "2")) {m_GProcessUiO-&gt;G_STATE = "S_OPENCV"; GConfig()-&gt;SetData("G_ADMIN_ID", lAnswer);}
}
//===============================================
</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis en C-Programme GTK"><a class="Link9" href="#Créer une machine à états finis en C">Programme GTK</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GProcessUi_Run_GTK(int argc, char** argv) {
    // code du programme GTK
    m_GProcessUiO-&gt;G_STATE = "S_SAVE";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis en C-Programme OPENCV"><a class="Link9" href="#Créer une machine à états finis en C">Programme OPENCV</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GProcessUi_Run_OPENCV(int argc, char** argv) {
    // code du programme OPENCV
    m_GProcessUiO-&gt;G_STATE = "S_SAVE";
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1594465340717"><div class="Row26">List 1 &gt; C &gt; basics</div></div><script>loadList1("Loader_1594465340717","C","basics");</script></div><br></div></div></div></div><br>