<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la programmation en Java<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la programmation en <b>Java</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>Java </b>est un langage de programmation orienté objet permettant de créer des logiciels vers une représentation binaire qui peut être exécutée dans une machine virtuelle Java (JVM) en faisant abstraction du système d'exploitation.<br><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Java/img/b_java.png" class="lazy" data-src="/Tutoriels/Software_Development/Java/img/b_java.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation"><a class="Link3" href="#">Installation</a></h1><div class="Body3"><br>Installer l'environnement Java.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617087572767"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617087572767");</script></div><br><h2 class="Title7 GTitle2" id="Installation-1---Installation-sous-Windows"><a class="Link9" href="#Installation">1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1-1---Installation-sous-JDK"><a class="Link9" href="#Installation">1.1 - Installation sous JDK</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1-1-1---Telecharger-JDK"><a class="Link9" href="#Installation">1.1.1 - Télécharger JDK</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.oracle.com/fr/java/technologies/oracle-java-archive-downloads.html">https://www.oracle.com/fr/java/technologies/oracle-java-archive-downloads.html</a><br><br><b>jdk-15.0.1_windows-x64_bin.exe</b><br><br><h2 class="Title7 GTitle2" id="Installation-1-1-2---Installer-JDK"><a class="Link9" href="#Installation">1.1.2 - Installer JDK</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">jdk-15.0.1_windows-x64_bin.exe
Next
Installation Folder -&gt; C:\Program Files\Java\jdk-15.0.1\
Next
Close</pre></div></div><br><h2 class="Title7 GTitle2" id="Installation-1-1-2---Verifier-JDK"><a class="Link9" href="#Installation">1.1.2 - Vérifier JDK</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">set "PATH=C:\Program Files\Java\jdk-15.0.1\bin;%PATH%"</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">java -version</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">java version "15.0.1" 2020-10-20
Java(TM) SE Runtime Environment (build 15.0.1+9-18)
Java HotSpot(TM) 64-Bit Server VM (build 15.0.1+9-18, mixed mode, sharing)</pre></div></div><br><h2 class="Title7 GTitle2" id="Installation-2---Installation-sous-Ubuntu"><a class="Link9" href="#Installation">2 - Installation sous Ubuntu</a></h2><br><h2 class="Title7 GTitle2" id="Installation-2-1---Installer-JDK"><a class="Link9" href="#Installation">2.1 - Installer JDK</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">sudo apt install openjdk-15-jdk</pre></div></div><br><h2 class="Title7 GTitle2" id="Installation-2-2---Choisir-une-version-de-JDK"><a class="Link9" href="#Installation">2.2 - Choisir une version de JDK</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">sudo update-alternatives --config java</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">Sélection   Chemin                                          Priorité  État
------------------------------------------------------------
  0            /usr/lib/jvm/java-15-openjdk-arm64/bin/java      1511      mode automatique
  1            /usr/lib/jvm/java-11-openjdk-arm64/bin/java      1111      mode manuel
* 2            /usr/lib/jvm/java-15-openjdk-arm64/bin/java      1511      mode manuel
  3            /usr/lib/jvm/java-8-openjdk-arm64/jre/bin/java   1081      mode manuel</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">Appuyez sur &lt;Entrée&gt; pour conserver la valeur par défaut[*] 
ou choisissez le numéro sélectionné&nbsp;: -&gt; 2</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tests"><a class="Link3" href="#">Tests</a></h1><div class="Body3"><br>Créer un projet Java.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617087959688"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617087959688");</script></div><br><h2 class="Title7 GTitle2" id="Tests-1---Test-sous-Windows"><a class="Link9" href="#Tests">1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1-1---Test-sous-JDK"><a class="Link9" href="#Tests">1.1 - Test sous JDK</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1-1-1---Editer-le-programme"><a class="Link9" href="#Tests">1.1.1 - Editer le programme</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="java">//===============================================
package com.pkg.readyapp;
//===============================================
public class GMain {
    public static void main(String[] args){
        System.out.print("Bonjour tout le monde\n");
    }
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Tests-1-1-2---Compiler-le-projet"><a class="Link9" href="#Tests">1.1.2 - Compiler le projet</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">set "PATH=C:\Program Files\Java\jdk-15.0.1\bin;%PATH%"</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">javac com\pkg\readyapp\GMain.java</pre></div></div><br><h2 class="Title7 GTitle2" id="Tests-1-1-3---Executer-le-projet"><a class="Link9" href="#Tests">1.1.3 - Exécuter le projet</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">java com.pkg.readyapp.GMain</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">Bonjour tout le monde</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Patron-singleton"><a class="Link3" href="#">Patron singleton</a></h1><div class="Body3"><br>Créer un patron singleton en Java.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617094049187"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617094049187");</script></div><br><h2 class="Title7 GTitle2" id="Patron-singleton-Introduction"><a class="Link9" href="#Patron-singleton">Introduction</a></h2><br>Le patron singleton est une architecture logicielle utilisée en programmation orientée objet et permettant de créer et d'utiliser un objet unique d'une classe pour coordonnées les opérations dans un système.<br><br><h2 class="Title7 GTitle2" id="Patron-singleton-Programme-principal"><a class="Link9" href="#Patron-singleton">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GMain.java</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="java">//===============================================
package com.pkg.readyapp;
//===============================================
import com.pkg.readyapp.manager.*;
//===============================================
public class GMain {
    public static void main(String[] args){
        GProcess.Instance().run(args);
    }
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Patron-singleton-Structure-du-singleton"><a class="Link9" href="#Patron-singleton">Structure du singleton</a></h2><br><h3 class="Title8 GTitle3">GProcess.java</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="java">//===============================================
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
//===============================================</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Systeme-d-administration"><a class="Link3" href="#">Système d'administration</a></h1><div class="Body3"><br>Créer un système d'administration en Java.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617089945419"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617089945419");</script></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-Introduction"><a class="Link9" href="#Systeme-d-administration">Introduction</a></h2><br>Le système d'administration que nous présentons ici est une interface en ligne de commande permettant d'accéder à toutes les fonctionnalités de notre application.<br><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-Programme-principal"><a class="Link9" href="#Systeme-d-administration">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GProcess.java</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="java">//===============================================
public void runUi(String[] args) {
    GProcessUi.Instance().run(args);
}        
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-Systeme-d-administration"><a class="Link9" href="#Systeme-d-administration">Système d'administration</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.java</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="java">//===============================================
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
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-Programme-d-initialisation"><a class="Link9" href="#Systeme-d-administration">Programme d'initialisation</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.java</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="java">//===============================================
public void run_INIT(String[] args) {
    System.out.print(String.format("\n"));
    System.out.print(String.format("JAVA_ADMIN !!!\n"));
    System.out.print(String.format("\t%-2s : %s\n", "q", "quitter l'application"));
    System.out.print(String.format("\n"));
    G_STATE = "S_LOAD";
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-Programme-de-chargement-des-donnees"><a class="Link9" href="#Systeme-d-administration">Programme de chargement des données</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.java</h3><br><br><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-Programme-des-methodes"><a class="Link9" href="#Systeme-d-administration">Programme des méthodes</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.java</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="java">//===============================================
public void run_METHOD(String[] args) {
    System.out.print(String.format("JAVA_ADMIN :\n"));
    System.out.print(String.format("\t%-2s : %s\n", "1", "S_SQLITE"));
    System.out.print(String.format("\n"));
    G_STATE = "S_CHOICE";
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-Programme-du-choix-de-methode"><a class="Link9" href="#Systeme-d-administration">Programme du choix de méthode</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.java</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="java">//===============================================
public void run_CHOICE(String[] args) {
    String lLast = GConfig.Instance().getData("JAVA_ADMIN_ID");
    String lAnswer = System.console().readLine(String.format("JAVA_ADMIN (%s) ? : ", lLast));
    if(lAnswer.equals("")) lAnswer = lLast;
    if(lAnswer.equals("-q")) G_STATE = "S_END";
    //
    else if(lAnswer.equals("1")) {G_STATE = "S_SQLITE"; GConfig.Instance().setData("JAVA_ADMIN_ID", lAnswer);} 
    //
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-Programme-de-l-interface-SQLite"><a class="Link9" href="#Systeme-d-administration">Programme de l'interface SQLite</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.java</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="java">//===============================================
public void run_SQLITE(String[] args) {
    GSQLiteUi.Instance().run(args);
    G_STATE = "S_SAVE";
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-Programme-de-la-sauvegarde-des-donnees"><a class="Link9" href="#Systeme-d-administration">Programme de la sauvegarde des données</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.java</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="java">//===============================================
public void run_SAVE(String[] args) {
    GConfig.Instance().saveData("JAVA_ADMIN_ID");
    G_STATE = "S_END";
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Systeme-d-administration-Resultat"><a class="Link9" href="#Systeme-d-administration">Résultat</a></h2><br><br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Java-Native-Interface-JNI"><a class="Link3" href="#">Java Native Interface JNI</a></h1><div class="Body3"><br><b>JNI </b>est une bibliothèque logicielle d'interfaçage, intégrée nativement au JDK de Java, qui permet au code Java s'exécutant à l'intérieur de la JVM d'appeler et d'être appelé par des applications natives basées sur des langages tels que le C, C++.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1618859642247"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1618859642247");</script></div><br><div class="Img3 GImage"><img alt="/Tutoriels/Software_Development/Java/img/b_jni.png" class="lazy" data-src="/Tutoriels/Software_Development/Java/img/b_jni.png"></div><br><h2 class="Title7 GTitle2" id="Java-Native-Interface-JNI-1---Installation"><a class="Link9" href="#Java-Native-Interface-JNI">1 - Installation</a></h2><br>Aucune installation n'est nécessaire.<br><br><h2 class="Title7 GTitle2" id="Java-Native-Interface-JNI-2---Tests"><a class="Link9" href="#Java-Native-Interface-JNI">2 - Tests</a></h2><br><h2 class="Title7 GTitle2" id="Java-Native-Interface-JNI-2-1---Test-sous-Ubuntu"><a class="Link9" href="#Java-Native-Interface-JNI">2.1 - Test sous Ubuntu</a></h2><br><h2 class="Title7 GTitle2" id="Java-Native-Interface-JNI-2-1-1---Test-sous-C"><a class="Link9" href="#Java-Native-Interface-JNI">2.1.1 - Test sous C</a></h2><br><h2 class="Title7 GTitle2" id="Java-Native-Interface-JNI-2-1-1-1---Editer-le-programme-Java"><a class="Link9" href="#Java-Native-Interface-JNI">2.1.1.1 - Editer le programme Java</a></h2><br><h3 class="Title8 GTitle3">GMain.java</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="java">//===============================================
package com.pkg.readyc;
//===============================================
public class GMain {
    //===============================================
    static {
        // on charge la librairie c (librdc.so)
        System.loadLibrary("rdc");
    }
    //===============================================
    public static void main(String[] args){
        // on appelle la methode native sayHello()
        // definie dans la librairie c (librdc.so)
        new GMain().sayHello();
    }
    //===============================================
    // on declare la methode native sayHello()
    private native void sayHello();
    //===============================================
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Java-Native-Interface-JNI-2-1-1-2---Generer-le-fichier-header"><a class="Link9" href="#Java-Native-Interface-JNI">2.1.1.2 - Générer le fichier header</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">javac -h . com/pkg/readyc/GMain.java</pre></div></div><br><h3 class="Title8 GTitle3">com_pkg_readyc_GMain.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">/* DO NOT EDIT THIS FILE - it is machine generated */
#include &lt;jni.h&gt;
/* Header for class com_pkg_readyc_GMain */

#ifndef _Included_com_pkg_readyc_GMain
#define _Included_com_pkg_readyc_GMain
#ifdef __cplusplus
extern "C" {
#endif
/*
 * Class:     com_pkg_readyc_GMain
 * Method:    sayHello
 * Signature: ()V
 */
JNIEXPORT void JNICALL Java_com_pkg_readyc_GMain_sayHello
  (JNIEnv *, jobject);

#ifdef __cplusplus
}
#endif
#endif</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">cp -f com_pkg_readyc_GMain.h com_pkg_readyc_GMain.c</pre></div></div><br><h2 class="Title7 GTitle2" id="Java-Native-Interface-JNI-2-1-1-3---Editer-le-programme-C"><a class="Link9" href="#Java-Native-Interface-JNI">2.1.1.3 - Editer le programme C</a></h2><br><h3 class="Title8 GTitle3">com_pkg_readyc_GMain.c</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "com_pkg_readyc_GMain.h"
//===============================================
#include &lt;stdio.h&gt;
//===============================================
JNIEXPORT void JNICALL 
Java_com_pkg_readyc_GMain_sayHello(JNIEnv *env, jobject obj) {
    // on affiche un message a l'ecran
    printf("[C] Bonjour tout le monde\n");
    return;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Java-Native-Interface-JNI-2-1-1-4---Compiler-le-programme-C"><a class="Link9" href="#Java-Native-Interface-JNI">2.1.1.4 - Compiler le programme C</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">gcc -std=gnu11 \
-c com_pkg_readyc_GMain.c \
-o com_pkg_readyc_GMain.o \
-I/usr/lib/jvm/java-15-openjdk-arm64/include \
-I/usr/lib/jvm/java-15-openjdk-arm64/include/linux</pre></div></div><br><h2 class="Title7 GTitle2" id="Java-Native-Interface-JNI-2-1-1-5---Creer-la-librairie-dynamique-C"><a class="Link9" href="#Java-Native-Interface-JNI">2.1.1.5 - Créer la librairie dynamique C</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">gcc -shared -fPIC -o librdc.so \
com_pkg_readyc_GMain.o</pre></div></div><br><h2 class="Title7 GTitle2" id="Java-Native-Interface-JNI-2-1-1-6---Executer-le-projet"><a class="Link9" href="#Java-Native-Interface-JNI">2.1.1.6 - Exécuter le projet</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">java com.pkg.readyc.GMain</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="sh">[C] Bonjour tout le monde</pre></div></div><br><h2 class="Title7 GTitle2" id="Java-Native-Interface-JNI-2-1-2---Test-sous-C--"><a class="Link9" href="#Java-Native-Interface-JNI">2.1.2 - Test sous C++</a></h2><br><h2 class="Title7 GTitle2" id="Java-Native-Interface-JNI-2-1-2-1---Editer-le-programme-Java"><a class="Link9" href="#Java-Native-Interface-JNI">2.1.2.1 - Éditer le programme Java</a></h2><br><h3 class="Title8 GTitle3">GMain.java</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
package com.pkg.readycpp;
//===============================================
public class GMain {
    //===============================================
    static {
        // on charge la librairie c++ (librdcpp.so)
        System.loadLibrary("rdcpp");
    }
    //===============================================
    public static void main(String[] args){
        // on appelle la methode native sayHello()
        // definie dans la librairie c++ (librdcpp.so)
        new GMain().sayHello();
    }
    //===============================================
    // on declare la methode native sayHello()
    private native void sayHello();
    //===============================================
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Java-Native-Interface-JNI-2-1-2-2---Generer-le-fichier-header"><a class="Link9" href="#Java-Native-Interface-JNI">2.1.2.2 - Générer le fichier header</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">javac -h . com/pkg/readycpp/GMain.java</pre></div></div><br><h3 class="Title8 GTitle3">com_pkg_readycpp_GMain.h</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">/* DO NOT EDIT THIS FILE - it is machine generated */
#include &lt;jni.h&gt;
/* Header for class com_pkg_readycpp_GMain */

#ifndef _Included_com_pkg_readycpp_GMain
#define _Included_com_pkg_readycpp_GMain
#ifdef __cplusplus
extern "C" {
#endif
/*
 * Class:     com_pkg_readycpp_GMain
 * Method:    sayHello
 * Signature: ()V
 */
JNIEXPORT void JNICALL Java_com_pkg_readycpp_GMain_sayHello
  (JNIEnv *, jobject);

#ifdef __cplusplus
}
#endif
#endif</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">cp -f com_pkg_readycpp_GMain.h com_pkg_readycpp_GMain.cpp</pre></div></div><br><h2 class="Title7 GTitle2" id="Java-Native-Interface-JNI-2-1-2-3---Editer-le-programme-C--"><a class="Link9" href="#Java-Native-Interface-JNI">2.1.2.3 - Editer le programme C++</a></h2><br><h3 class="Title8 GTitle3">com_pkg_readycpp_GMain.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="c_cpp">//===============================================
#include "com_pkg_readycpp_GMain.h"
//===============================================
#include &lt;iostream&gt;
//===============================================
JNIEXPORT void JNICALL 
Java_com_pkg_readycpp_GMain_sayHello(JNIEnv *env, jobject obj) {
    // on affiche un message a l'ecran
    std::cout &lt;&lt; "[C++] Bonjour tout le monde\n";
    return;
}
//===============================================</pre></div></div><br><h2 class="Title7 GTitle2" id="Java-Native-Interface-JNI-2-1-2-4---Compiler-le-programme-C--"><a class="Link9" href="#Java-Native-Interface-JNI">2.1.2.4 - Compiler le programme C++</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">g++ -std=gnu++11 \
-c com_pkg_readycpp_GMain.cpp \
-o com_pkg_readycpp_GMain.o \
-I/usr/lib/jvm/java-15-openjdk-arm64/include \
-I/usr/lib/jvm/java-15-openjdk-arm64/include/linux</pre></div></div><br><h2 class="Title7 GTitle2" id="Java-Native-Interface-JNI-2-1-2-5---Creer-la-librairie-dynamique-C--"><a class="Link9" href="#Java-Native-Interface-JNI">2.1.2.5 - Créer la librairie dynamique C++</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">g++ -shared -fPIC -o librdcpp.so \
com_pkg_readycpp_GMain.o</pre></div></div><br><h2 class="Title7 GTitle2" id="Java-Native-Interface-JNI-2-1-2-6---Executer-le-projet"><a class="Link9" href="#Java-Native-Interface-JNI">2.1.2.6 - Exécuter le projet</a></h2><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="batchfile">java com.pkg.readycpp.GMain</pre></div></div><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="txt">[C++] Bonjour tout le monde</pre></div></div><br></div></div></div></div><br>