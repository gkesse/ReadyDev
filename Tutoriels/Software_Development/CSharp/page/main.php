<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la programmation en C#<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la programmation en <b>C#</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>C#</b> est un langage de programmation orientée objet destiné à développer sur la plateforme Microsoft .NET. Il est dérivé du C++ et très proche du Java dont il reprend la syntaxe générale ainsi que les concepts, y ajoutant des notions telles que la surcharge des opérateurs, les indexeurs et les délégués. Il est utilisé notamment pour développer des applications web sur la plateforme ASP.NET.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/CSharp/img/b_csharp.png" alt="/Tutoriels/Software_Development/CSharp/img/b_csharp.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation"><a class="Link3" href="#">Installation</a></h1><div class="Body3"><br>Installer l'environnement C#.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616940191704"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616940191704");</script></div><br><h2 class="Title7 GTitle2" id="Installation-1 - Installation sous Windows"><a class="Link9" href="#Installation">1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1 - Installation sous MSYS2"><a class="Link9" href="#Installation">1.1 - Installation sous MSYS2</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1.1 - Installer mono"><a class="Link9" href="#Installation">1.1.1 - Installer mono</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">pacman -S mingw-w64-i686-mono</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-1.2 - Installation sous Microsof.NET"><a class="Link9" href="#Installation">1.2 - Installation sous Microsof.NET</a></h2><br>Aucune installation n'est nécessaire.<br><br>Le compilateur est disponible sous le répertoire :<br><br><span class="GColor1" style="color:lime;">C:\Windows\Microsoft.NET\Framework\v4.0.30319</span><br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tests"><a class="Link3" href="#">Tests</a></h1><div class="Body3"><br>Créer un projet C#.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616946812764"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616946812764");</script></div><br><h2 class="Title7 GTitle2" id="Tests-1 - Test sous Windows"><a class="Link9" href="#Tests">1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.1 - Test sous MSYS2"><a class="Link9" href="#Tests">1.1 - Test sous MSYS2</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.1.1 - Editer le programme"><a class="Link9" href="#Tests">1.1.1 - Editer le programme</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
using System;
//===============================================
class GMain {
    //===============================================
    static void Main(string[] args) {
        Console.Write("Bonjour tout le monde\n");
    }
    //===============================================
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.2 - Compiler le projet"><a class="Link9" href="#Tests">1.1.2 - Compiler le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">export "PATH=/mingw32/bin:$PATH"</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">csc /out:./rdcsharp.exe ./GMain.cs</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.3 - Exécuter le projet"><a class="Link9" href="#Tests">1.1.3 - Exécuter le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">./rdcsharp.exe</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Bonjour tout le monde</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.2 - Test sous Microsoft.NET"><a class="Link9" href="#Tests">1.2 - Test sous Microsoft.NET</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.2.1 - Editer le programme"><a class="Link9" href="#Tests">1.2.1 - Editer le programme</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
using System;
//===============================================
class GMain {
    //===============================================
    static void Main(string[] args) {
        Console.Write("Bonjour tout le monde\n");
    }
    //===============================================
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.2.2 - Compiler le programme"><a class="Link9" href="#Tests">1.2.2 - Compiler le programme</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">set "PATH=C:\Windows\Microsoft.NET\Framework\v4.0.30319;%PATH%"</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">csc /out:.\rdcsharp.exe .\GMain.cs</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.2.3 - Exécuter le projet"><a class="Link9" href="#Tests">1.2.3 - Exécuter le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">.\rdcsharp.exe</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Bonjour tout le monde</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Patron singleton"><a class="Link3" href="#">Patron singleton</a></h1><div class="Body3"><br>Créer un patron&nbsp; singleton en C#.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616956220212"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616956220212");</script></div><br><h2 class="Title7 GTitle2" id="Patron singleton-Introduction"><a class="Link9" href="#Patron singleton">Introduction</a></h2><br>Le patron singleton est une architecture logicielle utilisée en programmation orientée objet et permettant de créer et d'utiliser un objet unique d'une classe pour coordonnées les opérations dans un système.<br><br><h2 class="Title7 GTitle2" id="Patron singleton-Programme principal"><a class="Link9" href="#Patron singleton">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GMain.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
using System;
//===============================================
class GMain {
    //===============================================
    [STAThread]
    static void Main(string[] args) {
        GProcess.Instance().run(args);
    }
    //===============================================
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Patron singleton-Structure du singleton"><a class="Link9" href="#Patron singleton">Structure du singleton</a></h2><br><h3 class="Title8 GTitle3">GProcess.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
using System;
//===============================================
public sealed class GProcess {
    //===============================================
    // property
    //===============================================
    private static GProcess m_instance = null;
    private static readonly object padlock = new object();
    //===============================================
    // constructor
    //===============================================
    GProcess() {

    }
    //===============================================
    public static GProcess Instance() {
        lock (padlock) {
            if (m_instance == null) {
                m_instance = new GProcess();
            }
            return m_instance;
        }
    }
    //===============================================
    // method
    //===============================================
    public void run(string[] args) {
        // code de la methode run()
    }
    //===============================================
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Système d'administration"><a class="Link3" href="#">Système d'administration</a></h1><div class="Body3"><br>Créer un système d'administration en C#.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616949042968"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616949042968");</script></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Introduction"><a class="Link9" href="#Système d'administration">Introduction</a></h2><br>Le système d'administration que nous présentons ici est une interface en ligne de commande permettant d'accéder à toutes les fonctionnalités de notre application.<br><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme principal"><a class="Link9" href="#Système d'administration">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GProcess.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
public void runUi(string[] args) {
    GProcessUi.Instance().run(args);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Système d'administration"><a class="Link9" href="#Système d'administration">Système d'administration</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme d'initialisation"><a class="Link9" href="#Système d'administration">Programme d'initialisation</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
public void run_INIT(string[] args) {
    Console.Write("\n");
    Console.Write("CSHARP_ADMIN !!!\n");
    Console.Write("\t{0,-2} : {1}\n", "-q", "quitter l'application");
    Console.Write("\n");
    G_STATE = "S_LOAD";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme de chargement des données"><a class="Link9" href="#Système d'administration">Programme de chargement des données</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
public void run_LOAD(string[] args) {
    GConfig.Instance().loadData("G_CSHARP_ID");
    G_STATE = "S_METHOD";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme des méthodes"><a class="Link9" href="#Système d'administration">Programme des méthodes</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
public void run_METHOD(string[] args) {
    Console.Write("CSHARP_ADMIN :\n");
    Console.Write("\t{0,-2} : {1}\n", "1", "S_SQLITE");
    Console.Write("\t{0,-2} : {1}\n", "2", "S_OPENCV");
    Console.Write("\n");
    G_STATE = "S_CHOICE";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme du choix de méthode"><a class="Link9" href="#Système d'administration">Programme du choix de méthode</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme de l'interface SQLite"><a class="Link9" href="#Système d'administration">Programme de l'interface SQLite</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
public void run_SQLITE(string[] args) {
    GSQLiteUi.Instance().run(args);
    G_STATE = "S_SAVE";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme de l'interface OpenCV"><a class="Link9" href="#Système d'administration">Programme de l'interface OpenCV</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
public void run_OPENCV(string[] args) {
    Console.WriteLine("run_OPENCV");
    G_STATE = "S_SAVE";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme de la sauvegarde des données"><a class="Link9" href="#Système d'administration">Programme de la sauvegarde des données</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
public void run_SAVE(string[] args) {
    GConfig.Instance().saveData("G_CSHARP_ID");
    G_STATE = "S_END";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Résultat"><a class="Link9" href="#Système d'administration">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/CSharp/img/i_csharp_admin_system.png" alt="/Tutoriels/Software_Development/CSharp/img/i_csharp_admin_system.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Gestionnaire de configuration"><a class="Link3" href="#">Gestionnaire de configuration</a></h1><div class="Body3"><br>Créer un gestionnaire de configuration en C#.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616953967713"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616953967713");</script></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration-Introduction"><a class="Link9" href="#Gestionnaire de configuration">Introduction</a></h2><br>Le gestionnaire de configuration que nous présentons ici est une interface logicielle permettant de sauvegarder et de charger des données enregistrées dans un dictionnaire (map) sous la forme d'un système de clé/valeur.<br><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration-Programme principal"><a class="Link9" href="#Gestionnaire de configuration">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GProcess.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
string lLast = GConfig.Instance().getData("G_CSHARP_ID");
GConfig.Instance().setData("G_CSHARP_ID", lAnswer);
GConfig.Instance().saveData("G_CSHARP_ID");
GConfig.Instance().loadData("G_CSHARP_ID");
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration-Structure des données"><a class="Link9" href="#Gestionnaire de configuration">Structure des données</a></h2><br><h3 class="Title8 GTitle3">GConfig.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
private Dictionary&lt;string, string&gt; m_dataMap;
m_dataMap = new Dictionary&lt;string, string&gt;();
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration-Écriture des données"><a class="Link9" href="#Gestionnaire de configuration">Écriture des données</a></h2><br><h3 class="Title8 GTitle3">GConfig.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
public void setData(string key, string valueId) {
    m_dataMap[key] = valueId;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration-Lecture des données"><a class="Link9" href="#Gestionnaire de configuration">Lecture des données</a></h2><br><h3 class="Title8 GTitle3">GConfig.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
public string getData(string key) {
    string lValue = "";
    m_dataMap.TryGetValue(key, out lValue);
    return lValue;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration-Chargement des données"><a class="Link9" href="#Gestionnaire de configuration">Chargement des données</a></h2><br><h3 class="Title8 GTitle3">GConfig.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
public void loadData(string key) {
    string lQuery = String.Format(@"
    select config_value from config_data
    where config_key = '{0}'
    ", key);
    string lValue = GSQLite.Instance().queryValue(lQuery);
    setData(key, lValue);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration-Sauvegarde des données"><a class="Link9" href="#Gestionnaire de configuration">Sauvegarde des données</a></h2><br><h3 class="Title8 GTitle3">GConfig.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
public void saveData(string key) {
    string lValue = getData(key);
    int lCount = countData(key);
    if(lCount == 0) insertData(key, getData(key));
    else updateData(key, getData(key));
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration-Comptage des données"><a class="Link9" href="#Gestionnaire de configuration">Comptage des données</a></h2><br><h3 class="Title8 GTitle3">GConfig.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
public int countData(string key) {
    string lQuery = String.Format(@"
    select count(*) from config_data
    where config_key = '{0}'
    ", key);
    int lCount = int.Parse(GSQLite.Instance().queryValue(lQuery));
    return lCount;
}
//===============================================</xmp></pre></div><br><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration-Insertion des données"><a class="Link9" href="#Gestionnaire de configuration">Insertion des données</a></h2><br><h3 class="Title8 GTitle3">GConfig.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
public void insertData(string key, string valueId) {
    string lQuery = String.Format(@"
    insert into config_data (config_key, config_value)
    values ('{0}', '{1}')
    ", key, valueId);
    GSQLite.Instance().queryWrite(lQuery);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration-Mise à jour des données"><a class="Link9" href="#Gestionnaire de configuration">Mise à jour des données</a></h2><br><h3 class="Title8 GTitle3">GConfig.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
public void updateData(string key, string valueId) {
    string lQuery = String.Format(@"
    update config_data 
    set config_value = {1}
    where config_key = '{0}'
    ", key, valueId);
    GSQLite.Instance().queryWrite(lQuery);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration-Résultat"><a class="Link9" href="#Gestionnaire de configuration">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/CSharp/img/i_csharp_config.png" alt="/Tutoriels/Software_Development/CSharp/img/i_csharp_config.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Bibliothèques"><a class="Link3" href="#">Bibliothèques</a></h1><div class="Body3"><br><span class="GColor1" style="color:lime;">Bibliothèques C#</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1616964576854"><div class="Row26">List 1 &gt; CSharp &gt; libs</div></div><script>loadList1("Loader_1616964576854","CSharp","libs");</script></div><br></div></div></div></div><br>