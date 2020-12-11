<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer un système d'administration en C#</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer un système d'administration en <b>C#</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>C#</b> est un langage de programmation orientée objet destiné à développer sur la plateforme Microsoft .NET. Il est dérivé du C++ et très proche du Java dont il reprend la syntaxe générale ainsi que les concepts, y ajoutant des notions telles que la surcharge des opérateurs, les indexeurs et les délégués. Il est utilisé notamment pour développer des applications web sur la plateforme ASP.NET.<br><br><div class="Img3 GImage"><img src="/Tutoriels/CSharp/img/b_cours_admin_system.png" alt="/Tutoriels/CSharp/img/b_cours_admin_system.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un système d'administration en C#"><a class="Link3" href="#">Créer un système d'administration en C#</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration en C#-Introduction"><a class="Link9" href="#Créer un système d'administration en C#">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer un système d'administration en C# (GProcessUi).<br><br><h2 class="Title7 GTitle2" id="Créer un système d'administration en C#-Programme principal"><a class="Link9" href="#Créer un système d'administration en C#">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GProcess.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
public void runUi(string[] args) {
    GProcessUi.Instance().run(args);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration en C#-Système d'administration"><a class="Link9" href="#Créer un système d'administration en C#">Système d'administration</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
public void run(string[] args) {
    G_STATE = "S_INIT";
    while(true) {
        if(G_STATE == "S_INIT") {run_INIT(args);}
        else if(G_STATE == "S_METHOD") {run_METHOD(args);}
        else if(G_STATE == "S_CHOICE") {run_CHOICE(args);}
        //
        else if(G_STATE == "S_SQLITE") {run_SQLITE(args);}
        else if(G_STATE == "S_OPENCV") {run_OPENCV(args);}
        //
        else if(G_STATE == "S_SAVE") {run_SAVE(args);}
        else if(G_STATE == "S_LOAD") {run_LOAD(args);}
        else break;
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration en C#-Programme d'initialisation"><a class="Link9" href="#Créer un système d'administration en C#">Programme d'initialisation</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
public void run_INIT(string[] args) {
    Console.Write("\n");
    Console.Write("CSHARP_ADMIN !!!\n");
    Console.Write("\t{0,-2} : {1}\n", "-q", "quitter l'application");
    Console.Write("\n");
    G_STATE = "S_LOAD";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration en C#-Programme de chargement des données"><a class="Link9" href="#Créer un système d'administration en C#">Programme de chargement des données</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
public void run_LOAD(string[] args) {
    GConfig.Instance().loadData("G_CSHARP_ID");
    G_STATE = "S_METHOD";
}
//===============================================
</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration en C#-Programme des méthodes"><a class="Link9" href="#Créer un système d'administration en C#">Programme des méthodes</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
public void run_METHOD(string[] args) {
    Console.Write("CSHARP_ADMIN :\n");
    Console.Write("\t{0,-2} : {1}\n", "1", "S_SQLITE");
    Console.Write("\t{0,-2} : {1}\n", "2", "S_OPENCV");
    Console.Write("\n");
    G_STATE = "S_CHOICE";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration en C#-Programme du choix de méthode"><a class="Link9" href="#Créer un système d'administration en C#">Programme du choix de méthode</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
public void run_CHOICE(string[] args) {
    string lLast = GConfig.Instance().getData("G_CSHARP_ID");
    Console.Write("CSHARP_ADMIN ({0}) ? : ", lLast);
    string lAnswer = Console.ReadLine();
    if(lAnswer == "") lAnswer = lLast;
    if(lAnswer == "-q") G_STATE = "S_END";
    //
    else if(lAnswer == "1") {G_STATE = "S_SQLITE"; GConfig.Instance().setData("G_CSHARP_ID", lAnswer);} 
    else if(lAnswer == "2") {G_STATE = "S_OPENCV"; GConfig.Instance().setData("G_CSHARP_ID", lAnswer);}
    //
}
//===============================================
</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration en C#-Programme de l'interface SQLite"><a class="Link9" href="#Créer un système d'administration en C#">Programme de l'interface SQLite</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
public void run_SQLITE(string[] args) {
    GSQLiteUi.Instance().run(args);
    G_STATE = "S_SAVE";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration en C#-Programme de l'interface OpenCV"><a class="Link9" href="#Créer un système d'administration en C#">Programme de l'interface OpenCV</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
public void run_OPENCV(string[] args) {
    Console.WriteLine("run_OPENCV");
    G_STATE = "S_SAVE";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration en C#-Programme de la sauvegarde des données"><a class="Link9" href="#Créer un système d'administration en C#">Programme de la sauvegarde des données</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
public void run_SAVE(string[] args) {
    GConfig.Instance().saveData("G_CSHARP_ID");
    G_STATE = "S_END";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration en C#-Résultat"><a class="Link9" href="#Créer un système d'administration en C#">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/CSharp/img/i_cours_admin_system.png" alt="/Tutoriels/CSharp/img/i_cours_admin_system.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1600429735365"><div class="Row26">List 1 &gt; CSharp &gt; basics</div></div><script>loadList1("Loader_1600429735365","CSharp","basics");</script></div><br></div></div></div></div><br>