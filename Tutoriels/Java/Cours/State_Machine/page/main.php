<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer une machine à états finis en Java</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer une machine à états finis en <b>Java</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>Java </b>est un langage de programmation orienté objet permettant de créer des logiciels vers une représentation binaire qui peut être exécutée dans une machine virtuelle Java (JVM) en faisant abstraction du système d'exploitation.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Java/img/b_cours_state_machine.png" alt="/Tutoriels/Java/img/b_cours_state_machine.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer une machine à états finis en Java"><a class="Link3" href="#">Créer une machine à états finis en Java</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis en Java-Introduction"><a class="Link9" href="#Créer une machine à états finis en Java">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer une machine à états finis (GProcessUi).<br><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis en Java-Programme principal"><a class="Link9" href="#Créer une machine à états finis en Java">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GProcess.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public void runUi(String[] args) {
    GProcessUi.Instance().run(args);
}        
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis en Java-Machine à états finis"><a class="Link9" href="#Créer une machine à états finis en Java">Machine à états finis</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public void run(String[] args) {
    G_STATE = "S_INIT";
    while(true) {
        if(G_STATE == "S_INIT") {run_INIT(args);}
        else if(G_STATE == "S_METHOD") {run_METHOD(args);}
        else if(G_STATE == "S_CHOICE") {run_CHOICE(args);}
        //
        else if(G_STATE == "S_SQLITE") {run_SQLITE(args);}
        //
        else if(G_STATE == "S_SAVE") {run_SAVE(args);}
        else if(G_STATE == "S_LOAD") {run_LOAD(args);}
        else break;
    }
}        
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis en Java-Programme d'initialisation"><a class="Link9" href="#Créer une machine à états finis en Java">Programme d'initialisation</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public void run_INIT(String[] args) {
    System.out.print(String.format("\n"));
    System.out.print(String.format("JAVA_ADMIN !!!\n"));
    System.out.print(String.format("\t%-2s : %s\n", "q", "quitter l'application"));
    System.out.print(String.format("\n"));
    G_STATE = "S_LOAD";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis en Java-Programme de chargement des données"><a class="Link9" href="#Créer une machine à états finis en Java">Programme de chargement des données</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.java</h3><br><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis en Java-Programme des méthodes"><a class="Link9" href="#Créer une machine à états finis en Java">Programme des méthodes</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public void run_METHOD(String[] args) {
    System.out.print(String.format("JAVA_ADMIN :\n"));
    System.out.print(String.format("\t%-2s : %s\n", "1", "S_SQLITE"));
    System.out.print(String.format("\n"));
    G_STATE = "S_CHOICE";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis en Java-Programme du choix de méthode"><a class="Link9" href="#Créer une machine à états finis en Java">Programme du choix de méthode</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public void run_CHOICE(String[] args) {
    String lLast = GConfig.Instance().getData("JAVA_ADMIN_ID");
    String lAnswer = System.console().readLine(String.format("JAVA_ADMIN (%s) ? : ", lLast));
    if(lAnswer.equals("")) lAnswer = lLast;
    if(lAnswer.equals("-q")) G_STATE = "S_END";
    //
    else if(lAnswer.equals("1")) {G_STATE = "S_SQLITE"; GConfig.Instance().setData("JAVA_ADMIN_ID", lAnswer);} 
    //
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis en Java-Programme de l'interface SQLite"><a class="Link9" href="#Créer une machine à états finis en Java">Programme de l'interface SQLite</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public void run_SQLITE(String[] args) {
    GSQLiteUi.Instance().run(args);
    G_STATE = "S_SAVE";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis en Java-Programme de la sauvegarde des données"><a class="Link9" href="#Créer une machine à états finis en Java">Programme de la sauvegarde des données</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public void run_SAVE(String[] args) {
    GConfig.Instance().saveData("JAVA_ADMIN_ID");
    G_STATE = "S_END";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une machine à états finis en Java-Résultat"><a class="Link9" href="#Créer une machine à états finis en Java">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Java/img/i_cours_state_machine.png" alt="/Tutoriels/Java/img/i_cours_state_machine.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1600429735365"><div class="Row26">List 1 &gt; Java &gt; basics</div></div><script>loadList1("Loader_1600429735365","Java","basics");</script></div><br></div></div></div></div><br>