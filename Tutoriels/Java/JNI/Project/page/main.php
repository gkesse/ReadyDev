<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer un projet C/C++ JNI en Java</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer un projet C/C++ JNI en <b>Java</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>Java </b>est un langage de programmation orienté objet permettant de créer des logiciels vers une représentation binaire qui peut être exécutée dans une machine virtuelle Java (JVM) en faisant abstraction du système d'exploitation.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Java/img/b_jni_project.png" alt="/Tutoriels/Java/img/b_jni_project.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un projet C/C++ JNI en Java"><a class="Link3" href="#">Créer un projet C/C++ JNI en Java</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer un projet C/C++ JNI en Java-Introduction"><a class="Link9" href="#Créer un projet C/C++ JNI en Java">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer un projet C/C++ JNI en Java.<br><br><h2 class="Title7 GTitle2" id="Créer un projet C/C++ JNI en Java-Programme principal"><a class="Link9" href="#Créer un projet C/C++ JNI en Java">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GMain.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
package com.pkg.readyapp;
//===============================================
public class GMain {
    //===============================================
    static {
        System.loadLibrary("rdcpp");
    }
    //===============================================
    private native void run();
    //===============================================
    public static void main(String[] args){
        new GMain().run();
    }
    //===============================================
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet C/C++ JNI en Java-Fichier header"><a class="Link9" href="#Créer un projet C/C++ JNI en Java">Fichier header</a></h2><br><h3 class="Title8 GTitle3">com_pkg_readyapp_GMain.h</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">/* DO NOT EDIT THIS FILE - it is machine generated */
#include &lt;jni.h&gt;
/* Header for class com_pkg_readyapp_GMain */

#ifndef _Included_com_pkg_readyapp_GMain
#define _Included_com_pkg_readyapp_GMain
#ifdef __cplusplus
extern "C" {
#endif
/*
 * Class:     com_pkg_readyapp_GMain
 * Method:    run
 * Signature: ()V
 */
JNIEXPORT void JNICALL Java_com_pkg_readyapp_GMain_run
  (JNIEnv *, jobject);

#ifdef __cplusplus
}
#endif
#endif</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet C/C++ JNI en Java-Fichier source"><a class="Link9" href="#Créer un projet C/C++ JNI en Java">Fichier source</a></h2><br><h3 class="Title8 GTitle3">GMain.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "com_pkg_readyapp_GMain.h" 
//===============================================
#include &lt;jni.h&gt; 
#include &lt;stdio.h&gt; 
//===============================================
JNIEXPORT void JNICALL 
Java_com_pkg_readyapp_GMain_run(JNIEnv *env, jobject obj) { 
    printf("Bonjour tout le monde\n");
    return;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet C/C++ JNI en Java-Fichier Manifest"><a class="Link9" href="#Créer un projet C/C++ JNI en Java">Fichier Manifest</a></h2><br><h3 class="Title8 GTitle3">MANIFEST</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="json">Manifest-Version: 1.0
Created-By: Gerard KESSE
Main-Class: com.pkg.readyapp.GMain</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet C/C++ JNI en Java-Fichier Makefile"><a class="Link9" href="#Créer un projet C/C++ JNI en Java">Fichier Makefile</a></h2><br><h3 class="Title8 GTitle3">Makefile.jdk.mak</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GSRC = ../code/readyapp/src
GBIN = bin
GBUILD = build
GGEN = gen
GGEN_CLASS = $(GGEN)/class
GGEN_CPP_SRC = $(GGEN)/cpp/src
GGEN_CPP_INC = $(GGEN)/cpp/include
GGEN_CPP_INC_GEN = $(GGEN)/cpp/include/gen
GGEN_LIB_PATH = $(GGEN)/lib
GGEN_LIB_NAME = $(GGEN_LIB_PATH)/rdcpp.dll
GGEN_BUILD = $(GGEN)/build
GTARGET = $(GMAIN_JAR)

GMAIN_JAVA = $(GSRC)/com/pkg/readyapp/GMain.java
GMAIN_CLASS = com.pkg.readyapp.GMain
GMANIFEST = MANIFEST

GINCS =\
    -I$(GGEN_CPP_INC) \
    -I$(GGEN_CPP_INC_GEN) \
    -I"C:/Program Files/Java/jdk-11.0.1/include" \
    -I"C:/Program Files/Java/jdk-11.0.1/include/win32" \

GOBJS_GEN =\
    $(patsubst $(GGEN_CPP_SRC)/%.cpp, $(GGEN_BUILD)/%.o, $(wildcard $(GGEN_CPP_SRC)/*.cpp)) \

GCFLAGS =\
    -std=gnu++11 \
    
all: cpp compile jar run
cpp: cpp_gen cpp_compile

cpp_gen:
	javac -h $(GGEN_CPP_INC_GEN) -d $(GGEN_CLASS) $(GMAIN_JAVA)
cpp_compile: $(GOBJS_GEN)
	@if ! [ -d $(GGEN_LIB_PATH) ] ; then mkdir -p $(GGEN_LIB_PATH) ; fi
	x86_64-w64-mingw32-g++ -shared -o $(GGEN_LIB_NAME) $(GOBJS_GEN)
$(GGEN_BUILD)/%.o: $(GGEN_CPP_SRC)/%.cpp
	@if ! [ -d $(GGEN_BUILD) ] ; then mkdir -p $(GGEN_BUILD) ; fi
	x86_64-w64-mingw32-g++ $(GCFLAGS) -c $&lt; -o $@ $(GINCS)
cpp_clean: 
	@if ! [ -d $(GGEN) ] ; then mkdir -p $(GGEN) ; fi
	@if ! [ -d $(GGEN_CPP_INC_GEN) ] ; then mkdir -p $(GGEN_CPP_INC_GEN) ; fi
	find $(GGEN_CPP_INC_GEN) -iname *.h -delete
	find $(GGEN) -iname *.o -delete
	find $(GGEN) -iname *.dll -delete
compile:
	@if ! [ -d $(GBUILD) ] ; then mkdir -p $(GGEN) ; fi
	javac $(GMAIN_JAVA) -d $(GBUILD) -sourcepath $(GSRC)
jar: 
	@if ! [ -d $(GBIN) ] ; then mkdir -p $(GBIN) ; fi
	jar cfm $(GTARGET) $(GMANIFEST) -C $(GBUILD) .
run: 
	java $(GMAIN_CLASS) $(argv)
clean: 
	@if ! [ -d $(GBUILD) ] ; then mkdir -p $(GGEN) ; fi
	@if ! [ -d $(GBIN) ] ; then mkdir -p $(GBIN) ; fi
	find $(GBUILD) -iname *.class -delete
	find $(GBIN) -iname *.jar -delete</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet C/C++ JNI en Java-Variables d'environnement"><a class="Link9" href="#Créer un projet C/C++ JNI en Java">Variables d'environnement</a></h2><br><h3 class="Title8 GTitle3">env.bat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off
::===============================================
set "PATH=C:/cygwin64/bin;%PATH%"
set "PATH=C:/cygwin64/usr/local/bin;%PATH%"
set "PATH=C:/cygwin64/usr/x86_64-w64-mingw32/sys-root/mingw/bin;%PATH%"
set "PATH=C:/Program Files/Java/jdk-11.0.1/bin;%PATH%"
set "PATH=C:/Users/Admin/Downloads/Programs/ReadyJava/jni/cyg/gen/lib;%PATH%"
::===============================================
set "GPROJECT_ROOT=C:/Users/Admin/Downloads/Programs"
set "GPROJECT_PATH=%GPROJECT_ROOT%/ReadyJava"
::===============================================
set "GMAIN_JAR=%GPROJECT_PATH%/jni/cyg/bin/rdjava.jar"
::===============================================
set "CLASSPATH=%GMAIN_JAR%"
::===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">make_j.bat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off
::===============================================
set "args=%*"             
setlocal enabledelayedexpansion
set "lArgs=%*"             
set "lArgs=!lArgs:*%1 =!"  
endlocal && ( set "args=%lArgs%" )
::===============================================
mingw32-make -f Makefile.jdk.mak %1 argv="%args%"
::===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet C/C++ JNI en Java-Compilation automatique"><a class="Link9" href="#Créer un projet C/C++ JNI en Java">Compilation automatique</a></h2><br><h3 class="Title8 GTitle3">Terminal</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">make_j all</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet C/C++ JNI en Java-Compilation manuelle"><a class="Link9" href="#Créer un projet C/C++ JNI en Java">Compilation manuelle</a></h2><br><h3 class="Title8 GTitle3">Terminal</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">find gen/cpp/include/gen -iname *.h -delete
find gen -iname *.o -delete
find gen -iname *.dll -delete

javac -h gen/cpp/include/gen -d gen/class PROJRCT_SRC/com/pkg/readyapp/GMain.java

x86_64-w64-mingw32-g++ -std=gnu++11  -c gen/cpp/src/GMain.cpp -o gen/build/GMain.o ^
-Igen/cpp/include -Igen/cpp/include/gen ^
-I"C:/Program Files/Java/jdk-11.0.1/include" ^
-I"C:/Program Files/Java/jdk-11.0.1/include/win32"

x86_64-w64-mingw32-g++ -shared -o gen/lib/rdcpp.dll  gen/build/GMain.o  

find build -iname *.class -delete
find bin -iname *.jar -delete

javac ../code/readyapp/src/com/pkg/readyapp/GMain.java ^
-d build -sourcepath ../code/readyapp/src

jar cfm bin/rdjava.jar MANIFEST -C build .

java com.pkg.readyapp.GMain</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet C/C++ JNI en Java-Résultat"><a class="Link9" href="#Créer un projet C/C++ JNI en Java">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Java/img/i_jni_project.png" alt="/Tutoriels/Java/img/i_jni_project.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Java Native Interface</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1608610487380"><div class="Row26">List 1 &gt; Java &gt; jni</div></div><script>loadList1("Loader_1608610487380","Java","jni");</script></div><br></div></div></div></div><br>