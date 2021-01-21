<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer un système d'administration en C++</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer un système d'administration en <b>C++</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>C++</b> est un langage de programmation compilé permettant la programmation sous de multiples paradigmes (comme la programmation procédurale, orientée objet ou générique). Ses bonnes performances, et sa compatibilité avec le C en font un des langages de programmation les plus utilisés dans les applications où la performance est critique.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Cpp/img/b_cours_admin_system.png" alt="/Tutoriels/Cpp/img/b_cours_admin_system.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un système d'administration en C++"><a class="Link3" href="#">Créer un système d'administration en C++</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration en C++-Introduction"><a class="Link9" href="#Créer un système d'administration en C++">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer un système d'administration en C++ (GProcessUi).<br><br><h2 class="Title7 GTitle2" id="Créer un système d'administration en C++-Programme principal"><a class="Link9" href="#Créer un système d'administration en C++">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GProcess.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcess::runUi(int argc, char** argv) {
    GProcessUi::Instance()-&gt;run(argc, argv);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration en C++-Système d'administration"><a class="Link9" href="#Créer un système d'administration en C++">Système d'administration</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessUi::run(int argc, char** argv) {
    G_STATE = "S_INIT";
    while(1) {
        if(G_STATE == "S_INIT") run_INIT(argc, argv);
        else if(G_STATE == "S_METHOD") run_METHOD(argc, argv);
        else if(G_STATE == "S_CHOICE") run_CHOICE(argc, argv);
        //
        else if(G_STATE == "S_SQLITE") run_SQLITE(argc, argv);
        else if(G_STATE == "S_OPENCV") run_OPENCV(argc, argv);
        //
        else if(G_STATE == "S_SAVE") run_SAVE(argc, argv);
        else if(G_STATE == "S_LOAD") run_LOAD(argc, argv);
        else break;
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration en C++-Programme d'initialisation"><a class="Link9" href="#Créer un système d'administration en C++">Programme d'initialisation</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessUi::run_INIT(int argc, char** argv) {
    printf("\n");
    printf("%s\n", "CPP_ADMIN !!!");
    printf("\t%-2s : %s\n", "-q", "quitter l'application");
    G_STATE = "S_LOAD";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration en C++-Programme de chargement des données"><a class="Link9" href="#Créer un système d'administration en C++">Programme de chargement des données</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessUi::run_LOAD(int argc, char** argv) {
    GConfig::Instance()-&gt;loadData("G_ADMIN_ID");
    G_STATE = "S_METHOD";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration en C++-Programme des méthodes"><a class="Link9" href="#Créer un système d'administration en C++">Programme des méthodes</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessUi::run_METHOD(int argc, char** argv) {
    printf("\n");
    printf("%s\n", "CPP_ADMIN :");
    printf("\t%-2s : %s\n", "1", "S_SQLITE");
    printf("\t%-2s : %s\n", "2", "S_OPENCV");
    printf("\n");
    G_STATE = "S_CHOICE";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration en C++-Programme du choix d'une méthode"><a class="Link9" href="#Créer un système d'administration en C++">Programme du choix d'une méthode</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessUi::run_CHOICE(int argc, char** argv) {
    std::string lLast = GConfig::Instance()-&gt;getData("G_ADMIN_ID").toStdString();
    printf("CPP_ADMIN (%s) ? : ", lLast.c_str());
    std::string lAnswer; std::getline(std::cin, lAnswer);
    if(lAnswer == "") lAnswer = lLast;
    if(lAnswer == "-q") G_STATE = "S_END";
    //
    else if(lAnswer == "1") {G_STATE = "S_SQLITE"; GConfig::Instance()-&gt;setData("G_ADMIN_ID", lAnswer.c_str());} 
    else if(lAnswer == "2") {G_STATE = "S_OPENCV"; GConfig::Instance()-&gt;setData("G_ADMIN_ID", lAnswer.c_str());}
    //
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration en C++-Programme du module SQLite"><a class="Link9" href="#Créer un système d'administration en C++">Programme du module SQLite</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessUi::run_SQLITE(int argc, char** argv) {
    GSQLiteUi::Instance()-&gt;run(argc, argv);
    G_STATE = "S_SAVE";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration en C++-Programme du module OpenCV"><a class="Link9" href="#Créer un système d'administration en C++">Programme du module OpenCV</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessUi::run_OPENCV(int argc, char** argv) {
    GOpenCVUi::Instance()-&gt;run(argc, argv);
    G_STATE = "S_SAVE";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration en C++-Programme de sauvegarde des données"><a class="Link9" href="#Créer un système d'administration en C++">Programme de sauvegarde des données</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessUi::run_SAVE(int argc, char** argv) {
    GConfig::Instance()-&gt;saveData("G_ADMIN_ID");
    G_STATE = "S_END";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration en C++-Résultat"><a class="Link9" href="#Créer un système d'administration en C++">Résultat</a></h2><br><h3 class="Title8 GTitle3">Menu principal</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Cpp/img/i_cours_admin_system.png" alt="/Tutoriels/Cpp/img/i_cours_admin_system.png"></div><br><h3 class="Title8 GTitle3">Menu du module SQLite</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Cpp/img/i_cours_admin_system_02.png" alt="/Tutoriels/Cpp/img/i_cours_admin_system_02.png"></div><br><h3 class="Title8 GTitle3">Affichage des tables</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Cpp/img/i_cours_admin_system_03.png" alt="/Tutoriels/Cpp/img/i_cours_admin_system_03.png"></div><br><h3 class="Title8 GTitle3">Affichage de la table CONFIG_DATA</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Cpp/img/i_cours_admin_system_04.png" alt="/Tutoriels/Cpp/img/i_cours_admin_system_04.png"></div><br><h3 class="Title8 GTitle3">Menu du module OpenCV</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Cpp/img/i_cours_admin_system_05.png" alt="/Tutoriels/Cpp/img/i_cours_admin_system_05.png"></div><br><h3 class="Title8 GTitle3">Chargement d'une image</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Cpp/img/i_cours_admin_system_06.png" alt="/Tutoriels/Cpp/img/i_cours_admin_system_06.png"></div><br><div class="Img3 GImage"><img src="/Tutoriels/Cpp/img/i_cours_admin_system_07.png" alt="/Tutoriels/Cpp/img/i_cours_admin_system_07.png"></div><br><h3 class="Title8 GTitle3">Inversion des couleurs d'une image</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Cpp/img/i_cours_admin_system_08.png" alt="/Tutoriels/Cpp/img/i_cours_admin_system_08.png"></div><br><div class="Img3 GImage"><img src="/Tutoriels/Cpp/img/i_cours_admin_system_09.png" alt="/Tutoriels/Cpp/img/i_cours_admin_system_09.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1600474250946"><div class="Row26">List 1 &gt; Cpp &gt; basics</div></div><script>loadList1("Loader_1600474250946","Cpp","basics");</script></div><br></div></div></div></div><br>