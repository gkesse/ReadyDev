<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer un projet Qt en Go</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer un projet Qt en <b>Go</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>Go </b>est un langage de programmation compilé et concurrent inspiré de C et Pascal. Il veut faciliter et accélérer la programmation à grande échelle en raison de sa simplicité. Il peut être utilisé aussi bien pour écrire des applications, des scripts ou de grands systèmes. Il permet d'assurer la maintenance et l'évolution des programmes sur plusieurs générations de développeurs.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Go/img/b_qt_project.png" alt="/Tutoriels/Go/img/b_qt_project.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un projet Qt Go"><a class="Link3" href="#">Créer un projet Qt Go</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer un projet Qt Go-Introduction"><a class="Link9" href="#Créer un projet Qt Go">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer un projet Qt en Go qui affiche le message (Bonjour tout le monde).<br><br><h2 class="Title7 GTitle2" id="Créer un projet Qt Go-Programme principal"><a class="Link9" href="#Créer un projet Qt Go">Programme principal</a></h2><br><h3 class="Title8 GTitle3">main.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">//===============================================
package main
//===============================================
import "os"
import "github.com/therecipe/qt/widgets"
import "github.com/therecipe/qt/core"
//===============================================
func main() {
    lApp := widgets.NewQApplication(len(os.Args), os.Args)
    lLabel := widgets.NewQLabel(nil, 0)
    lLabel.SetText("Bonjour tout le monde")
    lLabel.SetAlignment(core.Qt__AlignCenter)
    lLabel.QWidget_PTR().Resize2(640, 480)
    lLabel.QWidget_PTR().Show()
    lApp.Exec()
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet Qt Go-Fichier Makefile"><a class="Link9" href="#Créer un projet Qt Go">Fichier Makefile</a></h2><br><h3 class="Title8 GTitle3">Makefile</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GSRC = ..\code\GProject\src
GBIN = bin
GTARGET = $(GBIN)\gp_go.exe

all: clean compile run

compile:
	@if not exist $(GBIN) ( @mkdir $(GBIN) )
	go build -o $(GTARGET) $(GSRC)
run: 
	@echo.
	@$(GTARGET) $(args)
	@echo.
clean: 
	@if not exist $(GBIN) ( @mkdir $(GBIN) )
	del /q $(GBIN)\*
</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet Qt Go-Variables d’environnement"><a class="Link9" href="#Créer un projet Qt Go">Variables d’environnement</a></h2><br><h3 class="Title8 GTitle3">env.bat (MinGW - Windows)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off
::=====================================
set "PATH=C:\TDM-GCC-64\bin;%PATH%"
::=====================================
set "GOPATH=C:\Users\Admin\Downloads\Programs\ReadyGo\code\GProject"
::=====================================</xmp></pre></div><br><h3 class="Title8 GTitle3">make.bat (MinGW - Windows)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off
::===============================================
mingw32-make args="%*"
::===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet Qt Go-Compilation manuelle"><a class="Link9" href="#Créer un projet Qt Go">Compilation manuelle</a></h2><br><h3 class="Title8 GTitle3">Terminal</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">make</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet Qt Go-Compilation automatique"><a class="Link9" href="#Créer un projet Qt Go">Compilation automatique</a></h2><br><h3 class="Title8 GTitle3">Terminal</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">del /q bin\*
go build -o bin\gp_go.exe ..\code\GProject\src</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet Qt Go-Résultat"><a class="Link9" href="#Créer un projet Qt Go">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Go/img/i_qt_project.png" alt="/Tutoriels/Go/img/i_qt_project.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Interface Homme-Machine Qt</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1605458922954"><div class="Row26">List 1 &gt; Go &gt; qt</div></div><script>loadList1("Loader_1605458922954","Go","qt");</script></div><br></div></div></div></div><br>