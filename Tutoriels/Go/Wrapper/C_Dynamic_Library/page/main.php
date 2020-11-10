<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Utiliser une librairie dynamique C en Go</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à utiliser une librairie dynamique C en <b>Go</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>Go </b>est un langage de programmation compilé et concurrent inspiré de C et Pascal. Il veut faciliter et accélérer la programmation à grande échelle en raison de sa simplicité. Il peut être utilisé aussi bien pour écrire des applications, des scripts ou de grands systèmes. Il permet d'assurer la maintenance et l'évolution des programmes sur plusieurs générations de développeurs.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Go/img/b_wrapper_c_dynamic_library.png" alt="/Tutoriels/Go/img/b_wrapper_c_dynamic_library.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer une librairie dynamique C"><a class="Link3" href="#">Créer une librairie dynamique C</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1604569071531"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1604569071531");</script></div><br><h2 class="Title7 GTitle2" id="Créer une librairie dynamique C-Introduction"><a class="Link9" href="#Créer une librairie dynamique C">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer une librairie dynamique C (libhello.dll).<br><br><h2 class="Title7 GTitle2" id="Créer une librairie dynamique C-Déclaration de la librairie"><a class="Link9" href="#Créer une librairie dynamique C">Déclaration de la librairie</a></h2><br><h3 class="Title8 GTitle3">hello.h</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _hello_
#define _hello_
//===============================================
void sayHello();
//===============================================
#endif
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une librairie dynamique C-Définition de la librairie"><a class="Link9" href="#Créer une librairie dynamique C">Définition de la librairie</a></h2><br><h3 class="Title8 GTitle3">hello.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "hello.h"
//===============================================
#include &lt;stdio.h&gt;
//===============================================
void sayHello() {
    printf("[info] integration d'une librairie dynamique C en Go\n");
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une librairie dynamique C-Fichier Makefile"><a class="Link9" href="#Créer une librairie dynamique C">Fichier Makefile</a></h2><br><h3 class="Title8 GTitle3">Makefile (MinGW - Windows)<br></h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GSRC = .
GLIB = lib
GBUILD = build
GTARGET = $(GLIB)\libhello.dll

GINCS =\
    -I$(GSRC) \

GOBJS =\
    $(patsubst $(GSRC)/%.c, $(GBUILD)/%.o, $(wildcard $(GSRC)/*.c)) \
    
all: clean compile

compile: $(GOBJS)
	@if not exist $(GLIB) ( @mkdir $(GLIB) )
	gcc -shared -o $(GTARGET) $(GOBJS)
$(GBUILD)/%.o: $(GSRC)/%.c
	@if not exist $(GBUILD) ( @mkdir $(GBUILD) )
	gcc -c $&lt; -o $@ $(GINCS)
clean: 
	@if not exist $(GLIB) ( @mkdir $(GLIB) )
	@if not exist $(GBUILD) ( @mkdir $(GBUILD) )
	del /q $(GLIB)\* $(GBUILD)\*</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une librairie dynamique C-Variables d'environnement"><a class="Link9" href="#Créer une librairie dynamique C">Variables d'environnement</a></h2><br><h3 class="Title8 GTitle3">env.bat (Windows)<br></h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off
::===============================================
set "PATH=C:\TDM-GCC-64\bin;%PATH%"
::===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une librairie dynamique C-Compilation automatique"><a class="Link9" href="#Créer une librairie dynamique C">Compilation automatique</a></h2><br><h3 class="Title8 GTitle3">make.bat (Windows)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off
::===============================================
mingw32-make %*
::===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Terminal (Windows)<br></h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">env
make</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une librairie dynamique C-Compilation manuelle"><a class="Link9" href="#Créer une librairie dynamique C">Compilation manuelle</a></h2><br><h3 class="Title8 GTitle3">Terminal (Windows)<br></h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">del /q lib\* build\*
gcc -c hello.c -o build/hello.o -I.
gcc -shared -o lib\libhello.dll  build/hello.o</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une librairie dynamique C-Résultat"><a class="Link9" href="#Créer une librairie dynamique C">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Go/img/i_wrapper_c_dynamic_library.png" alt="/Tutoriels/Go/img/i_wrapper_c_dynamic_library.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Utiliser une librairie dynamique C en Go"><a class="Link3" href="#">Utiliser une librairie dynamique C en Go</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie dynamique C en Go-Introduction"><a class="Link9" href="#Utiliser une librairie dynamique C en Go">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons d'utiliser une librairie dynamique C en Go.<br><br><h2 class="Title7 GTitle2" id="Utiliser une librairie dynamique C en Go-Programme principal"><a class="Link9" href="#Utiliser une librairie dynamique C en Go">Programme principal</a></h2><br><h3 class="Title8 GTitle3">main.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">//===============================================
package main
/*
//===============================================
#cgo CFLAGS: -I../src/lib
//===============================================
#include "hello.h"
//===============================================
*/
import "C"
//===============================================
import "fmt"
//===============================================
func main() {
    fmt.Printf("[info] lancement du programme Go\n")
    C.sayHello()
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie dynamique C en Go-Fichier Makefile"><a class="Link9" href="#Utiliser une librairie dynamique C en Go">Fichier Makefile</a></h2><br><h3 class="Title8 GTitle3">Makefile (MinGW - Windows)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GSRC = ..\src
GBIN = bin
GTARGET = $(GBIN)\gp_go.exe
    
all: lib clean compile run

compile:
	@if not exist $(GBIN) ( @mkdir $(GBIN) )
	go build -o $(GTARGET) $(GSRC)\main.go
run: 
	@echo.
	@$(GTARGET)
	@echo.
clean: 
	@if not exist $(GBIN) ( @mkdir $(GBIN) )
	del /q $(GBIN)\*
lib:
	@make -C $(GSRC)/lib</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie dynamique C en Go-Variables d'environnement"><a class="Link9" href="#Utiliser une librairie dynamique C en Go">Variables d'environnement</a></h2><br><h3 class="Title8 GTitle3">env.bat (Windows)<br></h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off
::===============================================
set "PATH=C:\TDM-GCC-64\bin;%PATH%"
set "PATH=C:\Users\Admin\Downloads\Programs\ReadyTest\go\wrapper\p03\src\lib\lib;%PATH%"
::===============================================
set "GOPATH=C:\Users\Admin\Downloads\Programs\ReadyTest\go\wrapper\p03"
::===============================================
set "CGO_LDFLAGS="
set "CGO_LDFLAGS=%CGO_LDFLAGS% -LC:\Users\Admin\Downloads\Programs\ReadyTest\go\wrapper\p03\src\lib\lib"
::===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser une librairie dynamique C en Go-Résultat"><a class="Link9" href="#Utiliser une librairie dynamique C en Go">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Go/img/i_wrapper_c_dynamic_library_02.png" alt="/Tutoriels/Go/img/i_wrapper_c_dynamic_library_02.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Développement de wrapper</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1604568346809"><div class="Row26">List 1 &gt; Go &gt; wrapper</div></div><script>loadList1("Loader_1604568346809","Go","wrapper");</script></div><br></div></div></div></div><br>