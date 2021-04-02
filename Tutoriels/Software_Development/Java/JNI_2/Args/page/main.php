<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Récupérer les arguments C/C++ JNI en Java</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à récupérer les arguments C/C++ JNI en <b>Java</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>Java </b>est un langage de programmation orienté objet permettant de créer des logiciels vers une représentation binaire qui peut être exécutée dans une machine virtuelle Java (JVM) en faisant abstraction du système d'exploitation.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Java/img/b_jni_args.png" alt="/Tutoriels/Java/img/b_jni_args.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Récupérer les arguments C/C++ JNI en Java"><a class="Link3" href="#">Récupérer les arguments C/C++ JNI en Java</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Récupérer les arguments C/C++ JNI en Java-Introduction"><a class="Link9" href="#Récupérer les arguments C/C++ JNI en Java">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de récupérer les arguments C/C++ JNI en Java.<br><br><h2 class="Title7 GTitle2" id="Récupérer les arguments C/C++ JNI en Java-Programme principal"><a class="Link9" href="#Récupérer les arguments C/C++ JNI en Java">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GMain.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
package com.pkg.readyapp;
//===============================================
public class GMain {
    //===============================================
    static {
        System.loadLibrary("rdcpp");
    }
    //===============================================
    private native void run(String[] args);
    //===============================================
    public static void main(String[] args){
        new GMain().run(args);
    }
    //===============================================
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GMain.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
JNIEXPORT void JNICALL 
Java_com_pkg_readyapp_GMain_run(JNIEnv *env, jobject obj, jobjectArray arr) {
    sGApp* lApp = GManager::Instance()-&gt;getData()-&gt;app;
    GManager::Instance()-&gt;loadArgs(env, arr);
    GProcess::Instance()-&gt;run();
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Récupérer les arguments C/C++ JNI en Java-Récupération des arguments"><a class="Link9" href="#Récupérer les arguments C/C++ JNI en Java">Récupération des arguments</a></h2><br><h3 class="Title8 GTitle3">GManager.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GManager::loadArgs(JNIEnv *env, jobjectArray arr) {
    jsize lArgc = env-&gt;GetArrayLength(arr);
    for(int i = 0; i &lt; lArgc; i++) {
        jstring lData = (jstring)env-&gt;GetObjectArrayElement(arr, i);
        std::string lArgv = env-&gt;GetStringUTFChars(lData, NULL);
        mgr-&gt;app-&gt;args.push_back(lArgv);
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Récupérer les arguments C/C++ JNI en Java-Utilisation des arguments"><a class="Link9" href="#Récupérer les arguments C/C++ JNI en Java">Utilisation des arguments</a></h2><br><h3 class="Title8 GTitle3">GProcess.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcess::run() {
    sGApp* lApp = GManager::Instance()-&gt;getData()-&gt;app;
    std::string lKey = "test";
    int lArgc = lApp-&gt;args.size();
    if(lArgc &gt; 0) {lKey = lApp-&gt;args[0];}
    if(lKey == "test") {runTest(); return;}
    if(lKey == "ui") {runUi(); return;}
    if(lKey == "qt") {runQt(); return;}
    runTest();
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Récupérer les arguments C/C++ JNI en Java-Résultat"><a class="Link9" href="#Récupérer les arguments C/C++ JNI en Java">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Java/img/i_jni_args.png" alt="/Tutoriels/Java/img/i_jni_args.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Java Native Interface</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1608610487380"><div class="Row26">List 1 &gt; Java &gt; jni</div></div><script>loadList1("Loader_1608610487380","Java","jni");</script></div><br></div></div></div></div><br>