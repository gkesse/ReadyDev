<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer un projet en Go</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer un projet en <b>Go</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>Go </b>est un langage de programmation compilé et concurrent inspiré de C et Pascal. Il veut faciliter et accélérer la programmation à grande échelle en raison de sa simplicité. Il peut être utilisé aussi bien pour écrire des applications, des scripts ou de grands systèmes. Il permet d'assurer la maintenance et l'évolution des programmes sur plusieurs générations de développeurs.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Go/img/b_cours_project.png" alt="/Tutoriels/Go/img/b_cours_project.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un projet Go"><a class="Link3" href="#">Créer un projet Go</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer un projet Go-Introduction"><a class="Link9" href="#Créer un projet Go">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer un projet Go qui affiche un message à l'écran (Bonjour tout le monde).<br><br><h2 class="Title7 GTitle2" id="Créer un projet Go-Programme principal"><a class="Link9" href="#Créer un projet Go">Programme principal</a></h2><br><h3 class="Title8 GTitle3">main.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">//===============================================
package main
//===============================================
import "fmt"
//===============================================
func main() {
	fmt.Printf("Bonjour tout le monde\n")
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet Go-Fichier Makefile"><a class="Link9" href="#Créer un projet Go">Fichier Makefile</a></h2><br><h3 class="Title8 GTitle3">Makefile.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GSRC = ..\code\GProject\src
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)\gp_go.exe

all: clean compile run

compile:
	@if not exist $(GBIN) ( @mkdir $(GBIN) )
	go build -o $(GTARGET) $(GSRC)
run: 
	@echo.
	@$(GTARGET)
	@echo.
clean: 
	@if not exist $(GBIN) ( @mkdir $(GBIN) )
	del /q $(GBIN)\*</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet Go-Variables d'environnement"><a class="Link9" href="#Créer un projet Go">Variables d'environnement</a></h2><br><h3 class="Title8 GTitle3">env.bat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off
::=====================================
set "PATH=C:\MinGW\bin;%PATH%"
::=====================================
set "GOPATH=C:\Users\Admin\Downloads\Programs\ReadyGo\code\GProject;%GOPATH%"
::=====================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet Go-Compilation automatique"><a class="Link9" href="#Créer un projet Go">Compilation automatique</a></h2><br><h3 class="Title8 GTitle3">make.bat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off
::=====================================
mingw32-make -f Makefile.go %1
::=====================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet Go-Compilation manuelle"><a class="Link9" href="#Créer un projet Go">Compilation manuelle</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">del /q bin\*
go build -o bin\gp_go.exe ..\code\GProject\src</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet Go-Résultat"><a class="Link9" href="#Créer un projet Go">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Go/img/i_cours_project.png" alt="/Tutoriels/Go/img/i_cours_project.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1600429735365"><div class="Row26">List 1 &gt; Go &gt; basics</div></div><script>loadList1("Loader_1600429735365","Go","basics");</script></div><br></div></div></div></div><br>