<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la programmation en C#<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la programmation en <b>C#</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>C#</b> est un langage de programmation orientée objet destiné à développer sur la plateforme Microsoft .NET. Il est dérivé du C++ et très proche du Java dont il reprend la syntaxe générale ainsi que les concepts, y ajoutant des notions telles que la surcharge des opérateurs, les indexeurs et les délégués. Il est utilisé notamment pour développer des applications web sur la plateforme ASP.NET.<br><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/CSharp/img/b_csharp.png" class="lazy" data-src="/Tutoriels/Software_Development/CSharp/img/b_csharp.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation"><a class="Link3" href="#">Installation</a></h1><div class="Body3"><br>Installer l'environnement C#.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616940191704"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616940191704");</script></div><br><h2 class="Title7 GTitle2" id="Installation-1---Installation-sous-Windows"><a class="Link9" href="#Installation">1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1-1---Installation-sous-MSYS2"><a class="Link9" href="#Installation">1.1 - Installation sous MSYS2</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1-1-1---Installer-mono"><a class="Link9" href="#Installation">1.1.1 - Installer mono</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">pacman -S mingw-w64-i686-mono</pre></div></div><br><h2 class="Title7 GTitle2" id="Installation-1-2---Installation-sous-Microsof-NET"><a class="Link9" href="#Installation">1.2 - Installation sous Microsof.NET</a></h2><br>Aucune installation n'est nécessaire.<br><br>Le compilateur est disponible sous le répertoire :<br><br><span class="GColor1" style="color:lime;">C:\Windows\Microsoft.NET\Framework\v4.0.30319</span><br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tests"><a class="Link3" href="#">Tests</a></h1><div class="Body3"><br>Créer un projet C#.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616946812764"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616946812764");</script></div><br><h2 class="Title7 GTitle2" id="Tests-1---Test-sous-Windows"><a class="Link9" href="#Tests">1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1-1---Test-sous-MSYS2"><a class="Link9" href="#Tests">1.1 - Test sous MSYS2</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1-1-1---Editer-le-programme"><a class="Link9" href="#Tests">1.1.1 - Editer le programme</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="csharp">//===============================================
using System;
//===============================================
class GMain {
    //===============================================
    static void Main(string[] args) {
        // on affiche un message a l'ecran
        Console.Write("Bonjour tout le monde\n");
    }
    //===============================================
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Tests-1-1-2---Compiler-le-projet"><a class="Link9" href="#Tests">1.1.2 - Compiler le projet</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">export "PATH=/mingw32/bin:$PATH"</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">csc /out:./rdcsharp.exe ./GMain.cs</pre></div></div><br><h2 class="Title7 GTitle2" id="Tests-1-1-3---Executer-le-projet"><a class="Link9" href="#Tests">1.1.3 - Exécuter le projet</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">./rdcsharp.exe</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">Bonjour tout le monde</pre></div></div><br><h2 class="Title7 GTitle2" id="Tests-1-2---Test-sous-Microsoft-NET"><a class="Link9" href="#Tests">1.2 - Test sous Microsoft.NET</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1-2-1---Editer-le-programme"><a class="Link9" href="#Tests">1.2.1 - Editer le programme</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="csharp">//===============================================
using System;
//===============================================
class GMain {
    //===============================================
    static void Main(string[] args) {
        // on affiche un message a l'ecran
        Console.Write("Bonjour tout le monde\n");
    }
    //===============================================
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Tests-1-2-2---Compiler-le-programme"><a class="Link9" href="#Tests">1.2.2 - Compiler le programme</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">set "PATH=C:\Windows\Microsoft.NET\Framework\v4.0.30319;%PATH%"</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">csc /out:.\rdcsharp.exe .\GMain.cs</pre></div></div><br><h2 class="Title7 GTitle2" id="Tests-1-2-3---Executer-le-projet"><a class="Link9" href="#Tests">1.2.3 - Exécuter le projet</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">.\rdcsharp.exe</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">Bonjour tout le monde</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Patron-singleton"><a class="Link3" href="#">Patron singleton</a></h1><div class="Body3"><br>Créer un patron&nbsp; singleton en C#.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616956220212"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616956220212");</script></div><br><h2 class="Title7 GTitle2" id="Patron-singleton-Introduction"><a class="Link9" href="#Patron-singleton">Introduction</a></h2><br>Le patron singleton est une architecture logicielle utilisée en programmation orientée objet et permettant de créer et d'utiliser un objet unique d'une classe pour coordonnées les opérations dans un système.<br><br><h2 class="Title7 GTitle2" id="Patron-singleton-Programme-principal"><a class="Link9" href="#Patron-singleton">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GMain.cs</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="csharp">//===============================================
using System;
//===============================================
class GMain {
    //===============================================
    [STAThread]
    static void Main(string[] args) {
        // on appelle la methode run() du singleton
        GProcess.Instance().run(args);
    }
    //===============================================
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Patron-singleton-Structure-du-singleton"><a class="Link9" href="#Patron-singleton">Structure du singleton</a></h2><br><h3 class="Title8 GTitle3">GProcess.cs</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="csharp">//===============================================
using System;
//===============================================
public sealed class GProcess {
    //===============================================
    // attributs
    //===============================================
    // on declare le singleton 
    // et on l'initialise a la valeur nulle
    private static GProcess m_instance = null;
    // on declare un objet protege en lecture seule
    private static readonly object padlock = new object();
    //===============================================
    // constructeur
    //===============================================
    GProcess() {

    }
    //===============================================
    // singleton
    //===============================================
    public static GProcess Instance() {
        // on protege la creation de l'instance
        // par un verouillage
        lock (padlock) {
            if (m_instance == null) {
                // on cree l'instance si sa valeur est nulle 
                m_instance = new GProcess();
            }
            return m_instance;
        }
    }
    //===============================================
    // methode
    //===============================================
    public void run(string[] args) {
        // on definit code de la methode run()
    }
    //===============================================
}
//===============================================</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Systeme-d-administration"><a class="Link3" href="#">Système d'administration</a></h1><div class="Body3"><br>Créer un système d'administration en C#.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616949042968"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616949042968");</script></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-Introduction"><a class="Link9" href="#Systeme-d-administration">Introduction</a></h2><br>Le système d'administration que nous présentons ici est une interface en ligne de commande permettant d'accéder à toutes les fonctionnalités de notre application.<br><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-Programme-principal"><a class="Link9" href="#Systeme-d-administration">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GProcess.cs</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="csharp">//===============================================
public void runUi(string[] args) {
    GProcessUi.Instance().run(args);
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-Systeme-d-administration"><a class="Link9" href="#Systeme-d-administration">Système d'administration</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.cs</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="csharp">//===============================================
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
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-Programme-d-initialisation"><a class="Link9" href="#Systeme-d-administration">Programme d'initialisation</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.cs</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="csharp">//===============================================
public void run_INIT(string[] args) {
    Console.Write("\n");
    Console.Write("CSHARP_ADMIN !!!\n");
    Console.Write("\t{0,-2} : {1}\n", "-q", "quitter l'application");
    Console.Write("\n");
    G_STATE = "S_LOAD";
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-Programme-de-chargement-des-donnees"><a class="Link9" href="#Systeme-d-administration">Programme de chargement des données</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.cs</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="csharp">//===============================================
public void run_LOAD(string[] args) {
    GConfig.Instance().loadData("G_CSHARP_ID");
    G_STATE = "S_METHOD";
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-Programme-des-methodes"><a class="Link9" href="#Systeme-d-administration">Programme des méthodes</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.cs</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="csharp">//===============================================
public void run_METHOD(string[] args) {
    Console.Write("CSHARP_ADMIN :\n");
    Console.Write("\t{0,-2} : {1}\n", "1", "S_SQLITE");
    Console.Write("\t{0,-2} : {1}\n", "2", "S_OPENCV");
    Console.Write("\n");
    G_STATE = "S_CHOICE";
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-Programme-du-choix-de-methode"><a class="Link9" href="#Systeme-d-administration">Programme du choix de méthode</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.cs</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="csharp">//===============================================
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
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-Programme-de-l-interface-SQLite"><a class="Link9" href="#Systeme-d-administration">Programme de l'interface SQLite</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.cs</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="csharp">//===============================================
public void run_SQLITE(string[] args) {
    GSQLiteUi.Instance().run(args);
    G_STATE = "S_SAVE";
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-Programme-de-l-interface-OpenCV"><a class="Link9" href="#Systeme-d-administration">Programme de l'interface OpenCV</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.cs</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="csharp">//===============================================
public void run_OPENCV(string[] args) {
    Console.WriteLine("run_OPENCV");
    G_STATE = "S_SAVE";
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-Programme-de-la-sauvegarde-des-donnees"><a class="Link9" href="#Systeme-d-administration">Programme de la sauvegarde des données</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.cs</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="csharp">//===============================================
public void run_SAVE(string[] args) {
    GConfig.Instance().saveData("G_CSHARP_ID");
    G_STATE = "S_END";
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-Resultat"><a class="Link9" href="#Systeme-d-administration">Résultat</a></h2><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/CSharp/img/i_csharp_admin_system.png" class="lazy" data-src="/Tutoriels/Software_Development/CSharp/img/i_csharp_admin_system.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Gestionnaire-de-configuration"><a class="Link3" href="#">Gestionnaire de configuration</a></h1><div class="Body3"><br>Créer un gestionnaire de configuration en C#.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1616953967713"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1616953967713");</script></div><br><h2 class="Title7 GTitle2" id="Gestionnaire-de-configuration-Introduction"><a class="Link9" href="#Gestionnaire-de-configuration">Introduction</a></h2><br>Le gestionnaire de configuration que nous présentons ici est une interface logicielle permettant de sauvegarder et de charger des données enregistrées dans un dictionnaire (map) sous la forme d'un système de clé/valeur.<br><br><h2 class="Title7 GTitle2" id="Gestionnaire-de-configuration-Programme-principal"><a class="Link9" href="#Gestionnaire-de-configuration">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GProcess.cs</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="csharp">//===============================================
string lLast = GConfig.Instance().getData("G_CSHARP_ID");
GConfig.Instance().setData("G_CSHARP_ID", lAnswer);
GConfig.Instance().saveData("G_CSHARP_ID");
GConfig.Instance().loadData("G_CSHARP_ID");
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Gestionnaire-de-configuration-Structure-des-donnees"><a class="Link9" href="#Gestionnaire-de-configuration">Structure des données</a></h2><br><h3 class="Title8 GTitle3">GConfig.cs</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="csharp">//===============================================
private Dictionary&lt;string, string&gt; m_dataMap;
m_dataMap = new Dictionary&lt;string, string&gt;();
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Gestionnaire-de-configuration-Ecriture-des-donnees"><a class="Link9" href="#Gestionnaire-de-configuration">Écriture des données</a></h2><br><h3 class="Title8 GTitle3">GConfig.cs</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="csharp">//===============================================
public void setData(string key, string valueId) {
    m_dataMap[key] = valueId;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Gestionnaire-de-configuration-Lecture-des-donnees"><a class="Link9" href="#Gestionnaire-de-configuration">Lecture des données</a></h2><br><h3 class="Title8 GTitle3">GConfig.cs</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="csharp">//===============================================
public string getData(string key) {
    string lValue = "";
    m_dataMap.TryGetValue(key, out lValue);
    return lValue;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Gestionnaire-de-configuration-Chargement-des-donnees"><a class="Link9" href="#Gestionnaire-de-configuration">Chargement des données</a></h2><br><h3 class="Title8 GTitle3">GConfig.cs</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="csharp">//===============================================
public void loadData(string key) {
    string lQuery = String.Format(@"
    select config_value from config_data
    where config_key = '{0}'
    ", key);
    string lValue = GSQLite.Instance().queryValue(lQuery);
    setData(key, lValue);
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Gestionnaire-de-configuration-Sauvegarde-des-donnees"><a class="Link9" href="#Gestionnaire-de-configuration">Sauvegarde des données</a></h2><br><h3 class="Title8 GTitle3">GConfig.cs</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="csharp">//===============================================
public void saveData(string key) {
    string lValue = getData(key);
    int lCount = countData(key);
    if(lCount == 0) insertData(key, getData(key));
    else updateData(key, getData(key));
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Gestionnaire-de-configuration-Comptage-des-donnees"><a class="Link9" href="#Gestionnaire-de-configuration">Comptage des données</a></h2><br><h3 class="Title8 GTitle3">GConfig.cs</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="csharp">//===============================================
public int countData(string key) {
    string lQuery = String.Format(@"
    select count(*) from config_data
    where config_key = '{0}'
    ", key);
    int lCount = int.Parse(GSQLite.Instance().queryValue(lQuery));
    return lCount;
}
//===============================================</pre></div></div><br><br><h2 class="Title7 GTitle2" id="Gestionnaire-de-configuration-Insertion-des-donnees"><a class="Link9" href="#Gestionnaire-de-configuration">Insertion des données</a></h2><br><h3 class="Title8 GTitle3">GConfig.cs</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="csharp">//===============================================
public void insertData(string key, string valueId) {
    string lQuery = String.Format(@"
    insert into config_data (config_key, config_value)
    values ('{0}', '{1}')
    ", key, valueId);
    GSQLite.Instance().queryWrite(lQuery);
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Gestionnaire-de-configuration-Mise-a-jour-des-donnees"><a class="Link9" href="#Gestionnaire-de-configuration">Mise à jour des données</a></h2><br><h3 class="Title8 GTitle3">GConfig.cs</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="csharp">//===============================================
public void updateData(string key, string valueId) {
    string lQuery = String.Format(@"
    update config_data 
    set config_value = {1}
    where config_key = '{0}'
    ", key, valueId);
    GSQLite.Instance().queryWrite(lQuery);
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Gestionnaire-de-configuration-Resultat"><a class="Link9" href="#Gestionnaire-de-configuration">Résultat</a></h2><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/CSharp/img/i_csharp_config.png" class="lazy" data-src="/Tutoriels/Software_Development/CSharp/img/i_csharp_config.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Interface-Homme-Machine-avec-Qt"><a class="Link3" href="#">Interface Homme-Machine avec Qt</a></h1><div class="Body3"><br><b>Qt </b>est une bibliothèque de composants d'interfaces graphiques (widgets), d'accès aux données, de connexions réseaux, de gestion des fils d'exécution, d'analyse XML, etc, et doté d'un mécanisme de notifications par des signaux et slots.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1618742102353"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1618742102353");</script></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/CSharp/img/b_qt.png" class="lazy" data-src="/Tutoriels/Software_Development/CSharp/img/b_qt.png"></div><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Qt-1---Installation-sous-Windows"><a class="Link9" href="#Interface-Homme-Machine-avec-Qt">1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Qt-1-1---Installation-sous-Microsoft-NET"><a class="Link9" href="#Interface-Homme-Machine-avec-Qt">1.1 - Installation sous Microsoft.NET</a></h2><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Qt-1-1-1---Telecharger-QtSharp"><a class="Link9" href="#Interface-Homme-Machine-avec-Qt">1.1.1 - Télécharger QtSharp</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://gitlab.com/ddobrev/QtSharp/-/releases">https://gitlab.com/ddobrev/QtSharp/-/releases</a><br><br><b>QtSharp-0.7.6-Qt-5.12.4-MinGW.zip</b><br><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Qt-1-1-2---Installer-QtSharp"><a class="Link9" href="#Interface-Homme-Machine-avec-Qt">1.1.2 - Installer QtSharp</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="csharp">Extraire -&gt; QtSharp-0.7.6-Qt-5.12.4-MinGW.zip</pre></div></div><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Qt-2---Tests"><a class="Link9" href="#Interface-Homme-Machine-avec-Qt">2 - Tests</a></h2><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Qt-2-1---Test-sous-Windows"><a class="Link9" href="#Interface-Homme-Machine-avec-Qt">2.1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Qt-2-1-1---Test-sous-Microsoft-NET"><a class="Link9" href="#Interface-Homme-Machine-avec-Qt">2.1.1 - Test sous Microsoft.NET</a></h2><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Qt-2-1-1-1---Editer-le-programme"><a class="Link9" href="#Interface-Homme-Machine-avec-Qt">2.1.1.1 - Editer le programme</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="csharp">//===============================================
using QtGui;
using QtWidgets;
using QtCore.Qt;
//===============================================
class GMain {
    //===============================================
    unsafe static void Main(string[] args) {       
        int argc = 0;
        // on cree l'application
        QApplication lApp = new QApplication (ref argc, null);       
        
        // on cree un label
        QLabel lLabel = new QLabel();
        // on definit le texte du label
        lLabel.Text = "Bonjour tout le monde";
        // on aligne le texte au centre du label
        lLabel.Alignment = AlignmentFlag.AlignCenter;
        
        // on cree un layout vertical
        QVBoxLayout lMainLayout = new QVBoxLayout();
        // on ajoute le label dans le layout
        lMainLayout.AddWidget(lLabel);

        // on cree la fenetre principale
        QWidget lWindow = new QWidget();
        // on definit le layout de la fenetre principale
        lWindow.Layout = lMainLayout;
        // on definit les dimensions de la fenetre principale
        lWindow.Resize(500, 250);
        // on definit le titre de la fenetre principale
        lWindow.WindowTitle = "ReadyApp";
        // on affiche la fenetre principale
        lWindow.Show();
        
        // on rentre dans la boucle de controle
        QApplication.Exec();
    }
    //===============================================
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Qt-2-1-1-2---Compiler-le-projet"><a class="Link9" href="#Interface-Homme-Machine-avec-Qt">2.1.1.2 - Compiler le projet</a></h2><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">
set "PATH=C:\Windows\Microsoft.NET\Framework\v4.0.30319;%PATH%"
set "PATH=C:\Users\Admin\Downloads\Compressed\QtSharp-0.7.6-Qt-5.12.4-MinGW;%PATH%"
set "PATH=C:\Qt\5.15.0\mingw81_64\bin;%PATH%"</pre></div></div>&nbsp;<br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">csc /unsafe /out:rdcsharp.exe ^
/lib:"C:\Users\Admin\Downloads\Compressed\QtSharp-0.7.6-Qt-5.12.4-MinGW" ^
/r:QtWidgets.Sharp.dll ^
/r:QtGui.Sharp.dll ^
/r:QtCore.Sharp.dll ^
GMain.cs</pre></div></div><br><h2 class="Title7 GTitle2" id="Interface-Homme-Machine-avec-Qt-2-1-1-3---Executer-le-projet"><a class="Link9" href="#Interface-Homme-Machine-avec-Qt">2.1.1.3 - Exécuter le projet</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">rdcsharp.exe
QtWidgets.Sharp.dll
QtGui.Sharp.dll
QtCore.Sharp.dll</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/CSharp/img/i_qt_test.png" class="lazy" data-src="/Tutoriels/Software_Development/CSharp/img/i_qt_test.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Vision-par-Ordinateur-avec-OpenCV"><a class="Link3" href="#">Vision par Ordinateur avec OpenCV</a></h1><div class="Body3"><br><b>OpenCV </b>est une bibliothèque de vision par ordinateur spécialisée dans le traitement d'images vidéo en temps réel.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1618743742782"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1618743742782");</script></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/CSharp/img/b_opencv.png" class="lazy" data-src="/Tutoriels/Software_Development/CSharp/img/b_opencv.png"></div><br><h2 class="Title7 GTitle2" id="Vision-par-Ordinateur-avec-OpenCV-1---Installation"><a class="Link9" href="#Vision-par-Ordinateur-avec-OpenCV">1 - Installation</a></h2><br><h2 class="Title7 GTitle2" id="Vision-par-Ordinateur-avec-OpenCV-1-1---Installation-sous-Windows"><a class="Link9" href="#Vision-par-Ordinateur-avec-OpenCV">1.1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Vision-par-Ordinateur-avec-OpenCV-1-1-1---Installation-sous-Microsoft-NET"><a class="Link9" href="#Vision-par-Ordinateur-avec-OpenCV">1.1.1 - Installation sous Microsoft.NET</a></h2><br><h2 class="Title7 GTitle2" id="Vision-par-Ordinateur-avec-OpenCV-1-1-1-1---Telecharger-EmguCV"><a class="Link9" href="#Vision-par-Ordinateur-avec-OpenCV">1.1.1.1 - Télécharger EmguCV</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://sourceforge.net/projects/emgucv/files/emgucv/">https://sourceforge.net/projects/emgucv/files/emgucv/</a><br><br><b>libemgucv-windesktop-3.2.0.2682.exe</b><br><br><h2 class="Title7 GTitle2" id="Vision-par-Ordinateur-avec-OpenCV-1-1-1-2---Installer-EmguCV"><a class="Link9" href="#Vision-par-Ordinateur-avec-OpenCV">1.1.1.2 - Installer EmguCV</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">libemgucv-windesktop-3.2.0.2682.exe
Suivant
J'accepte
Dossier d'installation -&gt; C:\Emgu\emgucv-windesktop 3.2.0.2682
Suivant
Dossier dans le menu Démarrer -&gt; emgucv-windesktop 3.2.0.2682
Suivant
Installer
Fermer</pre></div></div><br><h2 class="Title7 GTitle2" id="Vision-par-Ordinateur-avec-OpenCV-2---Tests"><a class="Link9" href="#Vision-par-Ordinateur-avec-OpenCV">2 - Tests</a></h2><br><h2 class="Title7 GTitle2" id="Vision-par-Ordinateur-avec-OpenCV-2-1---Test-sous-Windows"><a class="Link9" href="#Vision-par-Ordinateur-avec-OpenCV">2.1 - Test sous Windows</a></h2><br><br><h2 class="Title7 GTitle2" id="Vision-par-Ordinateur-avec-OpenCV-2-1-1---Test-sous-Microsoft-NET"><a class="Link9" href="#Vision-par-Ordinateur-avec-OpenCV">2.1.1 - Test sous Microsoft.NET</a></h2><br><h2 class="Title7 GTitle2" id="Vision-par-Ordinateur-avec-OpenCV-2-1-1-1---Editer-le-programme"><a class="Link9" href="#Vision-par-Ordinateur-avec-OpenCV">2.1.1.1 - Editer le programme</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="csharp">//===============================================
using Emgu.CV;
using Emgu.CV.CvEnum;
using Emgu.CV.Structure; 
//===============================================
class GMain {
    //===============================================
    static void Main(string[] args) {
        // on cree la fenetre
        CvInvoke.NamedWindow("ReadyApp");
        // on cree l'image
        Mat lImg = new Mat(250, 500, DepthType.Cv8U, 3); 
        // on definit la couleur de l'image
        lImg.SetTo(new Bgr(0x10, 0x10, 0x30).MCvScalar); 
        // on ecrit un texte dans l'image
        CvInvoke.PutText(lImg, "Bonjour tout le monde", new System.Drawing.Point(10, 80), 
        FontFace.HersheyComplex, 0.8, new Bgr(0xFF, 0xFF, 0xFF).MCvScalar);
        // on affiche l'image
        CvInvoke.Imshow("ReadyApp", lImg);
        // on attend l'appui d'une touche du clavier
        CvInvoke.WaitKey(0);
        // on detruit toutes les fenetres
        CvInvoke.DestroyAllWindows();
    }
    //===============================================
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Vision-par-Ordinateur-avec-OpenCV-2-1-1-2---Compiler-le-projet"><a class="Link9" href="#Vision-par-Ordinateur-avec-OpenCV">2.1.1.2 - Compiler le projet</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">set "PATH=C:\Windows\Microsoft.NET\Framework\v4.0.30319;%PATH%"
set "PATH=C:\Emgu\emgucv-windesktop 3.2.0.2682\bin;%PATH%"
set "PATH=C:\Emgu\emgucv-windesktop 3.2.0.2682\bin\x64;%PATH%"</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">csc /out:rdcsharp.exe ^
/lib:"C:\Emgu\emgucv-windesktop 3.2.0.2682\bin" ^
/r:Emgu.CV.World.dll ^
GMain.cs</pre></div></div><br><h2 class="Title7 GTitle2" id="Vision-par-Ordinateur-avec-OpenCV-2-1-1-3---Executer-le-projet"><a class="Link9" href="#Vision-par-Ordinateur-avec-OpenCV">2.1.1.3 - Exécuter le projet</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">rdcsharp.exe
Emgu.CV.World.dll</pre></div></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/CSharp/img/i_opencv_test.png" class="lazy" data-src="/Tutoriels/Software_Development/CSharp/img/i_opencv_test.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Base-de-donnees-avec-SQLite"><a class="Link3" href="#">Base de données avec SQLite</a></h1><div class="Body3"><br><b>SQLite </b>est un système de gestion de base de données relationnelle accessible par le langage SQL et dont l'intégralité de la base de données (déclarations, tables, index et données) est stockée dans un fichier indépendant de la plateforme. <br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1618745128492"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1618745128492");</script></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/CSharp/img/b_sqlite.png" class="lazy" data-src="/Tutoriels/Software_Development/CSharp/img/b_sqlite.png"></div><br><h2 class="Title7 GTitle2" id="Base-de-donnees-avec-SQLite-1---Installation"><a class="Link9" href="#Base-de-donnees-avec-SQLite">1 - Installation</a></h2><br><h2 class="Title7 GTitle2" id="Base-de-donnees-avec-SQLite-1-1---Installation-sous-Windows"><a class="Link9" href="#Base-de-donnees-avec-SQLite">1.1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Base-de-donnees-avec-SQLite-1-1-1---Installation-sous-Microsoft-NET"><a class="Link9" href="#Base-de-donnees-avec-SQLite">1.1.1 - Installation sous Microsoft.NET</a></h2><br><h2 class="Title7 GTitle2" id="Base-de-donnees-avec-SQLite-1-1-1-1---Telecharger-SQLite-NET"><a class="Link9" href="#Base-de-donnees-avec-SQLite">1.1.1.1 - Télécharger SQLite.NET</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://system.data.sqlite.org/index.html/doc/trunk/www/downloads.wiki">https://system.data.sqlite.org/index.html/doc/trunk/www/downloads.wiki</a><br><br><b>sqlite-netFx40-setup-x64-2010-1.0.113.0.exe</b><br><br><h2 class="Title7 GTitle2" id="Base-de-donnees-avec-SQLite-1-1-1-2---Installer-SQLite-NET"><a class="Link9" href="#Base-de-donnees-avec-SQLite">1.1.1.2 - Installer SQLite.NET</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">sqlite-netFx40-setup-x64-2010-1.0.113.0.exe
Select Destination Location -&gt; C:\Program Files\System.Data.SQLite\2010
Next
Select Components -&gt; Full installation
Next
Select Start Menu Folder -&gt; System.Data.SQLite\2010
Next
Next
Install</pre></div></div><br><h2 class="Title7 GTitle2" id="Base-de-donnees-avec-SQLite-2---Tests"><a class="Link9" href="#Base-de-donnees-avec-SQLite">2 - Tests</a></h2><br><h2 class="Title7 GTitle2" id="Base-de-donnees-avec-SQLite-2-1---Test-sous-Windows"><a class="Link9" href="#Base-de-donnees-avec-SQLite">2.1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Base-de-donnees-avec-SQLite-2-1-1---Test-sous-Microsoft-NET"><a class="Link9" href="#Base-de-donnees-avec-SQLite">2.1.1 - Test sous Microsoft.NET</a></h2><br><h2 class="Title7 GTitle2" id="Base-de-donnees-avec-SQLite-2-1-1-1---Editer-le-programme"><a class="Link9" href="#Base-de-donnees-avec-SQLite">2.1.1.1 - Editer le programme</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="csharp">//===============================================
using System;
using System.Data.SQLite;
//===============================================
class GMain {
    //===============================================
    static void Main(string[] args) {
        // on cree l'objet de connexion
        SQLiteConnection lCon = new SQLiteConnection("Data Source=config.dat");
        // on ouvre la base de donnees
        lCon.Open();
        // on cree l'objet des requetes
        SQLiteCommand lCmd = new SQLiteCommand(lCon);
        // on definit la requete sql
        lCmd.CommandText = String.Format(@"
        select 'Bonjour tout le monde'
        ");
        // on recupere le lecteur des resultats
        SQLiteDataReader lReader = lCmd.ExecuteReader();
        // on demarre la lecture des resultats
        lReader.Read();
        // on recupere le premier resultat
        string lData = lReader[0].ToString();
        // on affiche le resultat
        Console.Write("{0}\n", lData);
    }
    //===============================================
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Base-de-donnees-avec-SQLite-2-1-1-2---Compiler-le-projet"><a class="Link9" href="#Base-de-donnees-avec-SQLite">2.1.1.2 - Compiler le projet</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">set "PATH=C:\Windows\Microsoft.NET\Framework\v4.0.30319;%PATH%"
set "PATH=C:\Program Files\System.Data.SQLite\2010\bin;%PATH%"</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">csc /out:rdcsharp.exe ^
/lib:"C:\Program Files\System.Data.SQLite\2010\bin" ^
/r:System.Data.SQLite.dll ^
GMain.cs</pre></div></div><br><h2 class="Title7 GTitle2" id="Base-de-donnees-avec-SQLite-2-1-1-3---Executer-le-projet"><a class="Link9" href="#Base-de-donnees-avec-SQLite">2.1.1.3 - Exécuter le projet</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">rdcsharp.exe
System.Data.SQLite.dll</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">Bonjour tout le monde</pre></div></div><br></div></div></div></div><br>