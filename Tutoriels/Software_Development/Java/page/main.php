<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la programmation en Java<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la programmation en <b>Java</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>Java </b>est un langage de programmation orienté objet permettant de créer des logiciels vers une représentation binaire qui peut être exécutée dans une machine virtuelle Java (JVM) en faisant abstraction du système d'exploitation.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Java/img/b_java.png" alt="/Tutoriels/Software_Development/Java/img/b_java.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation"><a class="Link3" href="#">Installation</a></h1><div class="Body3"><br>Installer l'environnement Java.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617087572767"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617087572767");</script></div><br><h2 class="Title7 GTitle2" id="Installation-1 - Installation sous Windows"><a class="Link9" href="#Installation">1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1 - Installation sous JDK"><a class="Link9" href="#Installation">1.1 - Installation sous JDK</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1.1 - Télécharger JDK"><a class="Link9" href="#Installation">1.1.1 - Télécharger JDK</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.oracle.com/fr/java/technologies/oracle-java-archive-downloads.html">https://www.oracle.com/fr/java/technologies/oracle-java-archive-downloads.html</a><br><br><b>jdk-15.0.1_windows-x64_bin.exe</b><br><br><h2 class="Title7 GTitle2" id="Installation-1.1.2 - Installer JDK"><a class="Link9" href="#Installation">1.1.2 - Installer JDK</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">jdk-15.0.1_windows-x64_bin.exe
Next
Installation Folder -&gt; C:\Program Files\Java\jdk-15.0.1\
Next
Close</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-1.1.2 - Vérifier JDK"><a class="Link9" href="#Installation">1.1.2 - Vérifier JDK</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">set "PATH=C:\Program Files\Java\jdk-15.0.1\bin;%PATH%"</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">java -version</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">java version "15.0.1" 2020-10-20
Java(TM) SE Runtime Environment (build 15.0.1+9-18)
Java HotSpot(TM) 64-Bit Server VM (build 15.0.1+9-18, mixed mode, sharing)</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-2 - Installation sous Ubuntu"><a class="Link9" href="#Installation">2 - Installation sous Ubuntu</a></h2><br><h2 class="Title7 GTitle2" id="Installation-2.1 - Installer JDK"><a class="Link9" href="#Installation">2.1 - Installer JDK</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo apt install openjdk-15-jdk</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-2.2 - Choisir une version de JDK"><a class="Link9" href="#Installation">2.2 - Choisir une version de JDK</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo update-alternatives --config java</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Sélection   Chemin                                          Priorité  État
------------------------------------------------------------
  0            /usr/lib/jvm/java-15-openjdk-arm64/bin/java      1511      mode automatique
  1            /usr/lib/jvm/java-11-openjdk-arm64/bin/java      1111      mode manuel
* 2            /usr/lib/jvm/java-15-openjdk-arm64/bin/java      1511      mode manuel
  3            /usr/lib/jvm/java-8-openjdk-arm64/jre/bin/java   1081      mode manuel</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Appuyez sur &lt;Entrée&gt; pour conserver la valeur par défaut[*] 
ou choisissez le numéro sélectionné&nbsp;: -&gt; 2</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tests"><a class="Link3" href="#">Tests</a></h1><div class="Body3"><br>Créer un projet Java.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617087959688"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617087959688");</script></div><br><h2 class="Title7 GTitle2" id="Tests-1 - Test sous Windows"><a class="Link9" href="#Tests">1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.1 - Test sous JDK"><a class="Link9" href="#Tests">1.1 - Test sous JDK</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.1.1 - Editer le programme"><a class="Link9" href="#Tests">1.1.1 - Editer le programme</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
package com.pkg.readyapp;
//===============================================
public class GMain {
    public static void main(String[] args){
        System.out.print("Bonjour tout le monde\n");
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.2 - Compiler le projet"><a class="Link9" href="#Tests">1.1.2 - Compiler le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">set "PATH=C:\Program Files\Java\jdk-15.0.1\bin;%PATH%"</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">javac com\pkg\readyapp\GMain.java</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.3 - Exécuter le projet"><a class="Link9" href="#Tests">1.1.3 - Exécuter le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">java com.pkg.readyapp.GMain</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Bonjour tout le monde</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Patron singleton"><a class="Link3" href="#">Patron singleton</a></h1><div class="Body3"><br>Créer un patron singleton en Java.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617094049187"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617094049187");</script></div><br><h2 class="Title7 GTitle2" id="Patron singleton-Introduction"><a class="Link9" href="#Patron singleton">Introduction</a></h2><br>Le patron singleton est une architecture logicielle utilisée en programmation orientée objet et permettant de créer et d'utiliser un objet unique d'une classe pour coordonnées les opérations dans un système.<br><br><h2 class="Title7 GTitle2" id="Patron singleton-Programme principal"><a class="Link9" href="#Patron singleton">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GMain.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
package com.pkg.readyapp;
//===============================================
import com.pkg.readyapp.manager.*;
//===============================================
public class GMain {
    public static void main(String[] args){
        GProcess.Instance().run(args);
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Patron singleton-Structure du singleton"><a class="Link9" href="#Patron singleton">Structure du singleton</a></h2><br><h3 class="Title8 GTitle3">GProcess.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
package com.pkg.readyapp.manager;
//===============================================
public class GProcess {
    //===============================================
    private static GProcess m_intance = null;
    //===============================================
    private GProcess() {

    }
    //===============================================
    public static synchronized GProcess Instance() {           
        if(m_intance == null) {   
            m_intance = new GProcess(); 
        }
        return m_intance;
    }
    //===============================================
    public void run(String[] args) {
        // code de la methode run
    }        
    //===============================================
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Système d'administration"><a class="Link3" href="#">Système d'administration</a></h1><div class="Body3"><br>Créer un système d'administration en Java.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617089945419"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617089945419");</script></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Introduction"><a class="Link9" href="#Système d'administration">Introduction</a></h2><br>Le système d'administration que nous présentons ici est une interface en ligne de commande permettant d'accéder à toutes les fonctionnalités de notre application.<br><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme principal"><a class="Link9" href="#Système d'administration">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GProcess.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public void runUi(String[] args) {
    GProcessUi.Instance().run(args);
}        
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Système d'administration"><a class="Link9" href="#Système d'administration">Système d'administration</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme d'initialisation"><a class="Link9" href="#Système d'administration">Programme d'initialisation</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public void run_INIT(String[] args) {
    System.out.print(String.format("\n"));
    System.out.print(String.format("JAVA_ADMIN !!!\n"));
    System.out.print(String.format("\t%-2s : %s\n", "q", "quitter l'application"));
    System.out.print(String.format("\n"));
    G_STATE = "S_LOAD";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme de chargement des données"><a class="Link9" href="#Système d'administration">Programme de chargement des données</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.java</h3><br><br><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme des méthodes"><a class="Link9" href="#Système d'administration">Programme des méthodes</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public void run_METHOD(String[] args) {
    System.out.print(String.format("JAVA_ADMIN :\n"));
    System.out.print(String.format("\t%-2s : %s\n", "1", "S_SQLITE"));
    System.out.print(String.format("\n"));
    G_STATE = "S_CHOICE";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme du choix de méthode"><a class="Link9" href="#Système d'administration">Programme du choix de méthode</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public void run_CHOICE(String[] args) {
    String lLast = GConfig.Instance().getData("JAVA_ADMIN_ID");
    String lAnswer = System.console().readLine(String.format("JAVA_ADMIN (%s) ? : ", lLast));
    if(lAnswer.equals("")) lAnswer = lLast;
    if(lAnswer.equals("-q")) G_STATE = "S_END";
    //
    else if(lAnswer.equals("1")) {G_STATE = "S_SQLITE"; GConfig.Instance().setData("JAVA_ADMIN_ID", lAnswer);} 
    //
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme de l'interface SQLite"><a class="Link9" href="#Système d'administration">Programme de l'interface SQLite</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public void run_SQLITE(String[] args) {
    GSQLiteUi.Instance().run(args);
    G_STATE = "S_SAVE";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme de la sauvegarde des données"><a class="Link9" href="#Système d'administration">Programme de la sauvegarde des données</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public void run_SAVE(String[] args) {
    GConfig.Instance().saveData("JAVA_ADMIN_ID");
    G_STATE = "S_END";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Résultat"><a class="Link9" href="#Système d'administration">Résultat</a></h2><br><br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Bibliothèques"><a class="Link3" href="#">Bibliothèques</a></h1><div class="Body3"><br><span class="GColor1" style="color:lime;">Bibliothèques Java</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1617109110967"><div class="Row26">List 1 &gt; Java &gt; libs</div></div><script>loadList1("Loader_1617109110967","Java","libs");</script></div><br></div></div></div></div><br>