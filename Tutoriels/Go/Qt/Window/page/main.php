<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer une fenêtre personnalisée Qt en Go</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer une fenêtre personnalisée Qt en <b>Go</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>Go </b>est un langage de programmation compilé et concurrent inspiré de C et Pascal. Il veut faciliter et accélérer la programmation à grande échelle en raison de sa simplicité. Il peut être utilisé aussi bien pour écrire des applications, des scripts ou de grands systèmes. Il permet d'assurer la maintenance et l'évolution des programmes sur plusieurs générations de développeurs.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Go/img/b_qt_window.png" alt="/Tutoriels/Go/img/b_qt_window.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer une fenêtre personnalisée Qt Go"><a class="Link3" href="#">Créer une fenêtre personnalisée Qt Go</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer une fenêtre personnalisée Qt Go-Introduction"><a class="Link9" href="#Créer une fenêtre personnalisée Qt Go">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer une fenêtre personnalisée Qt en Go (GWindow).<br><br><h2 class="Title7 GTitle2" id="Créer une fenêtre personnalisée Qt Go-Programme principal"><a class="Link9" href="#Créer une fenêtre personnalisée Qt Go">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GWidget.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">if key == "window" {return NewGWindow(parent)}</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une fenêtre personnalisée Qt Go-Structure de la fenêtre personnalisée"><a class="Link9" href="#Créer une fenêtre personnalisée Qt Go">Structure de la fenêtre personnalisée</a></h2><br><h3 class="Title8 GTitle3">GWindow.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">//===============================================
package manager
//===============================================
import "github.com/therecipe/qt/widgets"
import "github.com/therecipe/qt/core"
//===============================================
// struct
//===============================================
type GWindow struct {
    GWidget
}
//===============================================
type GWindow_ITF interface {
    GWidget_ITF
    GWindow_PTR() *GWindow
}
//===============================================
func (obj *GWindow) GWindow_PTR() *GWindow {
    return obj
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une fenêtre personnalisée Qt Go-Constructeur de la fenêtre personnalisée"><a class="Link9" href="#Créer une fenêtre personnalisée Qt Go">Constructeur de la fenêtre personnalisée</a></h2><br><h3 class="Title8 GTitle3">GWindow.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">//===============================================
func NewGWindow(parent widgets.QWidget_ITF) *GWindow {
    lQt := GManager().mgr.qt
    
    lObj := &GWindow {}
    
    lParent := *NewGWidget(parent)
    lObj.GWidget = lParent
    lParent.SetObjectName("GWindow")
    
    lTitleBar := CreateGWidget("titlebar", nil)
    lAddressBar := CreateGWidget("addressbar", nil)
    
    lAddressKey := CreateGWidget("addresskey", nil)
    lQt.address_key = lAddressKey
    
    lWorkspace := widgets.NewQStackedWidget(nil)
    lQt.page_map = lWorkspace
    
    lObj.AddPage(CreateGWidget("home", nil), "home", "Accueil", 1)
    lObj.AddPage(CreateGWidget("qt", nil), "home/qt", "Qt", 0)
    lObj.AddPage(CreateGWidget("sqlite", nil), "home/sqlite", "SQLite", 0)
    lObj.AddPage(CreateGWidget("opencv", nil), "home/opencv", "OpenCV", 0)
    lObj.AddPage(CreateGWidget("builder", nil), "home/builder", "Builder", 0)
    
    lMainLayout := widgets.NewQVBoxLayout()
    lMainLayout.AddWidget(lTitleBar, 0, 0)
    lMainLayout.AddWidget(lAddressBar, 0, 0)
    lMainLayout.AddWidget(lAddressKey, 0, 0)
    lMainLayout.AddWidget(lWorkspace, 1, 0)
    lMainLayout.QLayout_PTR().SetContentsMargins(10, 10, 10, 10)
    lMainLayout.SetSpacing(10)

    lParent.SetLayout(lMainLayout)
    
    lParent.SetWindowFlags(core.Qt__window | core.Qt__FramelessWindowHint)
    lParent.Resize2(640, 480)
    
    return lObj
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une fenêtre personnalisée Qt Go-Résultat"><a class="Link9" href="#Créer une fenêtre personnalisée Qt Go">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Go/img/i_qt_window.png" alt="/Tutoriels/Go/img/i_qt_window.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Interface Homme-Machine Qt</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1605458922954"><div class="Row26">List 1 &gt; Go &gt; qt</div></div><script>loadList1("Loader_1605458922954","Go","qt");</script></div><br></div></div></div></div><br>