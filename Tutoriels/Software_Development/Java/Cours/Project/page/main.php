<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer un projet en Java</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer un projet en <b>Java</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>Java </b>est un langage de programmation orienté objet permettant de créer des logiciels vers une représentation binaire qui peut être exécutée dans une machine virtuelle Java (JVM) en faisant abstraction du système d'exploitation.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Java/img/b_cours_project.png" alt="/Tutoriels/Java/img/b_cours_project.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un projet en Java"><a class="Link3" href="#">Créer un projet en Java</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer un projet en Java-Introduction"><a class="Link9" href="#Créer un projet en Java">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer un projet en Java qui affiche un message à l'écran (Bonjour tout le monde).<br><br><h2 class="Title7 GTitle2" id="Créer un projet en Java-Programme principal"><a class="Link9" href="#Créer un projet en Java">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GMain.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
package com.pkg.readyapp;
//===============================================
public class GMain {
    public static void main(String[] args){
        System.out.print("Bonjour tout le monde\n");
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet en Java-Fichier Makefile"><a class="Link9" href="#Créer un projet en Java">Fichier Makefile</a></h2><br><h3 class="Title8 GTitle3">Makefile</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GSRC = ..\..\code\GProject\src
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)\gp_java.jar

GMAINJAVA = $(GSRC)\com\pkg\readyapp\GMain.java
GMAINCLASS = com.pkg.readyapp.GMain
GMANIFEST = MANIFEST

GSRCPATH =\
    $(GSRC) \
    
all: clean compile jar run

compile:
	@if not exist $(GBUILD) @mkdir $(GBUILD)
	@javac $(GMAINJAVA) -d $(GBUILD) -sourcepath $(GSRCPATH)
java:
	@java -cp $(GBUILD) $(GMAINCLASS) $(argv)
jar: 
	@if not exist $(GBIN) @mkdir $(GBIN)
	@jar cfm $(GTARGET) $(GMANIFEST) -C $(GBUILD) .
run: 
	@java -jar $(GTARGET) $(argv)
clean: 
	@if not exist $(GBIN) @mkdir $(GBIN)
	@if not exist $(GBUILD) @mkdir $(GBUILD)
	@del /s /q $(GBUILD)\*.class $(GBIN)\*.jar</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet en Java-Variables d'environnement"><a class="Link9" href="#Créer un projet en Java">Variables d'environnement</a></h2><br><h3 class="Title8 GTitle3">env.bat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off
::===============================================
set "PATH=C:\MinGW\bin;%PATH%"
set "PATH=C:\Program Files\Java\jdk-11.0.1\bin;%PATH%"
::===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">make_j.bat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off
::===============================================
set "args=%*"             
setlocal enabledelayedexpansion
set "lArgs=%*"             
set "lArgs=!lArgs:*%1 =!"  
endlocal && ( set "args=%lArgs%" )
::===============================================
mingw32-make -f Makefile.jdk.mak %1 argv=%args%
::===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet en Java-Compilation automatique"><a class="Link9" href="#Créer un projet en Java">Compilation automatique</a></h2><br><h3 class="Title8 GTitle3">Terminal</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">make_j all</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet en Java-Compilation manuelle"><a class="Link9" href="#Créer un projet en Java">Compilation manuelle</a></h2><br><h3 class="Title8 GTitle3">Terminal</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">del /s /q build\*.class bin\*.jar
javac ..\..\code\GProject\src\com\pkg\readyapp\GMain.java -d build -sourcepath ..\..\code\GProject\src
jar cfm bin\gp_java.jar MANIFEST -C build .
java -jar bin\gp_java.jar</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet en Java-Résultat"><a class="Link9" href="#Créer un projet en Java">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Java/img/i_cours_project.png" alt="/Tutoriels/Java/img/i_cours_project.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1600429735365"><div class="Row26">List 1 &gt; Java &gt; basics</div></div><script>loadList1("Loader_1600429735365","Java","basics");</script></div><br></div></div></div></div><br>