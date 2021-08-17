<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la programmation en Go<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la programmation en <b>Go</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>Go </b>est un langage de programmation compilé et concurrent inspiré de C et Pascal qui se veut faciliter et accélérer la programmation à grande échelle en raison de sa simplicité. Il peut être utilisé aussi bien pour écrire des applications, des scripts ou de grands systèmes. Il permet d'assurer la maintenance et l'évolution des programmes sur plusieurs générations de développeurs.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Go/img/b_go.png" alt="/Tutoriels/Software_Development/Go/img/b_go.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation"><a class="Link3" href="#">Installation</a></h1><div class="Body3"><br>Installer l'environnement Go.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617370085586"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617370085586");</script></div><br><h2 class="Title7 GTitle2" id="Installation-1 - Installation sous Windows"><a class="Link9" href="#Installation">1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1 - Télécharger Go"><a class="Link9" href="#Installation">1.1 - Télécharger Go</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://dl.google.com/go/go1.16.3.windows-amd64.msi">https://dl.google.com/go/go1.16.3.windows-amd64.msi</a><br><br><h2 class="Title7 GTitle2" id="Installation-1.2 - Installer Go"><a class="Link9" href="#Installation">1.2 - Installer Go</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">go1.16.3.windows-amd64.msi
Next
Cocher -&gt; I accept the terms in the License Agreement
Destination Folder -&gt; C:\Program Files\Go\
Next
Install
Finish</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-2 - Installation sous Ubuntu"><a class="Link9" href="#Installation">2 - Installation sous Ubuntu</a></h2><br><h2 class="Title7 GTitle2" id="Installation-2.1 - Télécharger Go"><a class="Link9" href="#Installation">2.1 - Télécharger Go</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">wget https://gomirrors.org/dl/go/go1.16.3.linux-arm64.tar.gz</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-2.2 - Extraire Go"><a class="Link9" href="#Installation">2.2 - Extraire Go</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">tar xzfv go1.16.3.linux-arm64.tar.gz</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-2.3 - Installer Go"><a class="Link9" href="#Installation">2.3 - Installer Go</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">export "PATH=/home/rpi4/opt/go/bin:$PATH"</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tests"><a class="Link3" href="#">Tests</a></h1><div class="Body3"><br>Créer un projet Go.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617383655488"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617383655488");</script></div><br><h2 class="Title7 GTitle2" id="Tests-1 - Test sous Windows"><a class="Link9" href="#Tests">1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.1 - Éditer le programme"><a class="Link9" href="#Tests">1.1 - Éditer le programme</a></h2><br><h3 class="Title8 GTitle3">main.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">//===============================================
package main
//===============================================
import "fmt"
//===============================================
func main() {
    fmt.Printf("Bonjour tout le monde\n")
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.2 - Compiler le projet"><a class="Link9" href="#Tests">1.2 - Compiler le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">go build -o rdgo.exe main.go</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.3 - Exécuter le projet"><a class="Link9" href="#Tests">1.3 - Exécuter le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">rdgo.exe</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Bonjour tout le monde</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Patron singleton"><a class="Link3" href="#">Patron singleton</a></h1><div class="Body3"><br>Créer un patron singleton en Go.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617384022515"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617384022515");</script></div><br><h2 class="Title7 GTitle2" id="Patron singleton-Introduction"><a class="Link9" href="#Patron singleton">Introduction</a></h2><br>Le patron singleton est une architecture logicielle utilisée en programmation orientée objet et permettant de créer et d'utiliser un objet unique d'une classe pour coordonnées les opérations dans un système.<br><br><h2 class="Title7 GTitle2" id="Patron singleton-Programme principal"><a class="Link9" href="#Patron singleton">Programme principal</a></h2><br><h3 class="Title8 GTitle3">main.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">//===============================================
package main
//===============================================
import "manager"
//===============================================
func main() {
    manager.GProcess().Run();
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Patron singleton-Structure du singleton"><a class="Link9" href="#Patron singleton">Structure du singleton</a></h2><br><h3 class="Title8 GTitle3">GProcess.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">//===============================================
type GProcessO struct {
    G_STATE string
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Patron singleton-Déclaration du singleton"><a class="Link9" href="#Patron singleton">Déclaration du singleton</a></h2><br><h3 class="Title8 GTitle3">GProcess.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">//===============================================
var m_GProcessLock = &sync.Mutex{}
var m_GProcessO *GProcessO
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Patron singleton-Constructeur du singleton"><a class="Link9" href="#Patron singleton">Constructeur du singleton</a></h2><br><h3 class="Title8 GTitle3">GProcess.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">//===============================================
func GProcess() *GProcessO {
    if m_GProcessO == nil {
        m_GProcessLock.Lock()
        defer m_GProcessLock.Unlock()
        if m_GProcessO == nil {
            m_GProcessO = newGProcess()
        }
    }
    return m_GProcessO
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Patron singleton-Méthode du singleton"><a class="Link9" href="#Patron singleton">Méthode du singleton</a></h2><br><h3 class="Title8 GTitle3">GProcess.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">//===============================================
func (obj *GProcessO) Run() {
    // code de la methode Run
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Système d'administration"><a class="Link3" href="#">Système d'administration</a></h1><div class="Body3"><br>Créer un système d'administration en Go.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617387647845"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617387647845");</script></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Introduction"><a class="Link9" href="#Système d'administration">Introduction</a></h2><br>Le système d'administration que nous présentons ici est une interface en ligne de commande permettant d'accéder à toutes les fonctionnalités de notre application.<br><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme principal"><a class="Link9" href="#Système d'administration">Programme principal</a></h2><br><h3 class="Title8 GTitle3">main.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">GProcessUi().Run();</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Système d'administration"><a class="Link9" href="#Système d'administration">Système d'administration</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">//===============================================
func (obj *GProcessUiO) Run() {
    obj.G_STATE = "S_INIT"
    for {
        if obj.G_STATE == "S_INIT" { obj.run_INIT()
        } else if obj.G_STATE == "S_METHOD" { obj.run_METHOD()
        } else if obj.G_STATE == "S_CHOICE" { obj.run_CHOICE()
        //
        } else if obj.G_STATE == "S_SQLITE" { obj.run_SQLITE()
        } else if obj.G_STATE == "S_QT" { obj.run_QT()
        //
        } else if obj.G_STATE == "S_SAVE" { obj.run_SAVE()
        } else if obj.G_STATE == "S_LOAD" { obj.run_LOAD()
        } else { break }
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme d'initialisation"><a class="Link9" href="#Système d'administration">Programme d'initialisation</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">//===============================================
func (obj *GProcessUiO) run_INIT() {
    fmt.Printf("\n")
    fmt.Printf("GO_ADMIN !!!\n")
    fmt.Printf("\t%-2s : %s\n", "-q", "quitter l'application")
    fmt.Printf("\n")
    obj.G_STATE = "S_LOAD"
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme de chargement des données"><a class="Link9" href="#Système d'administration">Programme de chargement des données</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">//===============================================
func (obj *GProcessUiO) run_LOAD() {
    obj.G_STATE = "S_METHOD"
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme des méthodes"><a class="Link9" href="#Système d'administration">Programme des méthodes</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">//===============================================
func (obj *GProcessUiO) run_METHOD() {
    fmt.Printf("GO_ADMIN :\n")
    fmt.Printf("\t%-2s : %s\n", "1", "S_SQLITE")
    fmt.Printf("\t%-2s : %s\n", "2", "S_QT")
    fmt.Printf("\n")
    obj.G_STATE = "S_CHOICE"
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme du choix de méthode"><a class="Link9" href="#Système d'administration">Programme du choix de méthode</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">//===============================================
func (obj *GProcessUiO) run_CHOICE() {
    var lLast string = "1"
    fmt.Printf("GO_ADMIN (%s) ? ", lLast)
    lReader := bufio.NewReader(os.Stdin) ; lAnswer, _ := lReader.ReadString('\n')
    lAnswer = lAnswer[:len(lAnswer)-2]
    if lAnswer == "" { lAnswer = lLast }
    if lAnswer == "-q" { obj.G_STATE = "S_END"
    //
    } else if lAnswer == "1" { obj.G_STATE = "S_SQLITE" ; GConfig().SetData("GO_ADMIN_ID", lAnswer);
    } else if lAnswer == "2" { obj.G_STATE = "S_QT" ; GConfig().SetData("GO_ADMIN_ID", lAnswer);
    //
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme de l'interface SQLite"><a class="Link9" href="#Système d'administration">Programme de l'interface SQLite</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">//===============================================
func (obj *GProcessUiO) run_SQLITE() {
    GSQLiteUi().Run();
    obj.G_STATE = "S_SAVE"
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme de l'interface Qt"><a class="Link9" href="#Système d'administration">Programme de l'interface Qt</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">//===============================================
func (obj *GProcessUiO) run_QT() {
    GQtUi().Run();
    obj.G_STATE = "S_SAVE"
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Programme de la sauvegarde des données"><a class="Link9" href="#Système d'administration">Programme de la sauvegarde des données</a></h2><br><h3 class="Title8 GTitle3">GProcessUi.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">//===============================================
func (obj *GProcessUiO) run_SAVE() {
    obj.G_STATE = "S_END"
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Résultat"><a class="Link9" href="#Système d'administration">Résultat</a></h2><br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Interface Homme-Machine avec Qt"><a class="Link3" href="#">Interface Homme-Machine avec Qt</a></h1><div class="Body3"><br><b>Qt </b>est une bibliothèque de composants d'interfaces graphiques (widgets), d'accès aux données, de connexions réseaux, de gestion des fils d'exécution, d'analyse XML, etc, et doté d'un mécanisme de notifications par des signaux et slots.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1618882287344"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1618882287344");</script></div><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Go/img/b_qt.png" alt="/Tutoriels/Software_Development/Go/img/b_qt.png"></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-1- Installation"><a class="Link9" href="#Interface Homme-Machine avec Qt">1- Installation</a></h2><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-1.1 - Installation sous Windows"><a class="Link9" href="#Interface Homme-Machine avec Qt">1.1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-1.1.1 - Choisir un répertoire de projet"><a class="Link9" href="#Interface Homme-Machine avec Qt">1.1.1 - Choisir un répertoire de projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">REPERTOIRE_PROJET   -&gt; ReadyTest\go\qt\
REPERTOIRE_SOURCE   -&gt; ReadyTest\go\qt\code\
PROGRAMME_PRINCIPAL -&gt; ReadyTest\go\qt\code\main.go</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-1.1.2 - Initialiser le répertoire de projet"><a class="Link9" href="#Interface Homme-Machine avec Qt">1.1.2 - Initialiser le répertoire de projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">set "GOPATH=ReadyTest\go\qt"</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-1.1.3 - Télécharger la bibliothèque Qt"><a class="Link9" href="#Interface Homme-Machine avec Qt">1.1.3 - Télécharger la bibliothèque Qt</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">go get github.com/therecipe/qt</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-2 - Tests"><a class="Link9" href="#Interface Homme-Machine avec Qt">2 - Tests</a></h2><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-2.1 - Test sous Windows"><a class="Link9" href="#Interface Homme-Machine avec Qt">2.1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-2.1.1 - Éditer le programme"><a class="Link9" href="#Interface Homme-Machine avec Qt">2.1.1 - Éditer le programme</a></h2><br><h3 class="Title8 GTitle3">main.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">//===============================================
package main
//===============================================
import "os"
import "github.com/therecipe/qt/widgets"
import "github.com/therecipe/qt/core"
//===============================================
func main() {
    // on cree l'application
    lApp := widgets.NewQApplication(len(os.Args), os.Args)
    
    // on cree un label
    lLabel := widgets.NewQLabel(nil, 0)
    // on definit le texte du label
    lLabel.SetText("Bonjour tout le monde")
    // on centre le texte dans le texte
    lLabel.SetAlignment(core.Qt__AlignCenter)
    // on definit les dimensions du label
    lLabel.QWidget_PTR().Resize2(500, 250)
    // on definit le titre du label
    lLabel.QWidget_PTR().SetWindowTitle("ReadyApp")
    // on affiche le titre du label
    lLabel.QWidget_PTR().Show()
    
    // on rentre dans la boucle de controle
    lApp.Exec()
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-2.1.2 - Compiler projet"><a class="Link9" href="#Interface Homme-Machine avec Qt">2.1.2 - Compiler projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">go build -o rdgo.exe main.go</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine avec Qt-2.1.3 - Exécuter le projet"><a class="Link9" href="#Interface Homme-Machine avec Qt">2.1.3 - Exécuter le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">rdgo.exe</xmp></pre></div><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Go/img/i_qt_test.png" alt="/Tutoriels/Software_Development/Go/img/i_qt_test.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Wrapper"><a class="Link3" href="#">Wrapper</a></h1><div class="Body3"><br>Créer un wrapper pour Go.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617389922085"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617389922085");</script></div><br><h2 class="Title7 GTitle2" id="Wrapper-1 - Introduction"><a class="Link9" href="#Wrapper">1 - Introduction</a></h2><br>Une fonction wrapper est un programme dont la fonction principale est d'appeler une autre fonction écrite dans un langage différent du langage appelant. <br><br><h2 class="Title7 GTitle2" id="Wrapper-2 - Exemples"><a class="Link9" href="#Wrapper">2 - Exemples</a></h2><br><h2 class="Title7 GTitle2" id="Wrapper-2.1 - Wrapper C"><a class="Link9" href="#Wrapper">2.1 - Wrapper C</a></h2><br><h2 class="Title7 GTitle2" id="Wrapper-2.1.1 - Créer un wrapper C pour Go"><a class="Link9" href="#Wrapper">2.1.1 - Créer un wrapper C pour Go</a></h2><br><h2 class="Title7 GTitle2" id="Wrapper-2.1.1.1 - Écrire le programme"><a class="Link9" href="#Wrapper">2.1.1.1 - Écrire le programme</a></h2><br><h3 class="Title8 GTitle3">main.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">//===============================================
package main
/*
//===============================================
#include &lt;stdio.h&gt;
//===============================================
void sayHello() {
    printf("[C] Bonjour tout le monde\n");
}
//===============================================
*/
import "C"
//===============================================
import "fmt"
//===============================================
func main() {
    fmt.Printf("[Go] Bonjour tout le monde\n")
    C.sayHello()
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Wrapper-2.1.1.2 - Compiler le projet"><a class="Link9" href="#Wrapper">2.1.1.2 - Compiler le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">go build -o rdgo.exe main.go</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Wrapper-2.1.1.3 - Exécuter le projet"><a class="Link9" href="#Wrapper">2.1.1.3 - Exécuter le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">rdgo.exe</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">[Go] Bonjour tout le monde
[C] Bonjour tout le monde</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Wrapper-2.1.2 - Utiliser une variable dans un wrapper C pour Go"><a class="Link9" href="#Wrapper">2.1.2 - Utiliser une variable dans un wrapper C pour Go</a></h2><br><h2 class="Title7 GTitle2" id="Wrapper-2.1.2.1 - Écrire le programme"><a class="Link9" href="#Wrapper">2.1.2.1 - Écrire le programme</a></h2><br><h3 class="Title8 GTitle3">main.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">//===============================================
package main
/*
//===============================================
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
//===============================================
void sayHello(char* name) {
    printf("[C] Bonjour %s\n", name);
}
//===============================================
*/
import "C"
//===============================================
import "fmt"
import "unsafe"
//===============================================
func main() {
    fmt.Printf("[Go] Bonjour tout le monde\n")
    lName := C.CString("Gerard KESSE")
    C.sayHello(lName)
    C.free(unsafe.Pointer(lName))
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Wrapper-2.1.2.2 - Compiler le projet"><a class="Link9" href="#Wrapper">2.1.2.2 - Compiler le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">go build -o rdgo.exe main.go</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Wrapper-2.1.2.3 - Exécuter le projet"><a class="Link9" href="#Wrapper">2.1.2.3 - Exécuter le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">rdgo.exe</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">[Go] Bonjour tout le monde
[C] Bonjour Gerard KESSE</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Wrapper-2.1.3 - Utiliser une librairie statique dans un wrapper C pour Go"><a class="Link9" href="#Wrapper">2.1.3 - Utiliser une librairie statique dans un wrapper C pour Go</a></h2><br><h2 class="Title7 GTitle2" id="Wrapper-2.1.3.1 - Éditer le programme Go"><a class="Link9" href="#Wrapper">2.1.3.1 - Éditer le programme Go</a></h2><br><h3 class="Title8 GTitle3">main.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">//===============================================
package main
/*
//===============================================
#cgo CFLAGS: -I.
#cgo LDFLAGS: -L. -lhello
//===============================================
#include "hello.h"
//===============================================
*/
import "C"
//===============================================
import "fmt"
//===============================================
func main() {
    fmt.Printf("[Go] Bonjour toutle monde\n")
    C.sayHello()
}
//===============================================</xmp></pre></div><br><div align="left"><h2 class="Title7 GTitle2" id="Wrapper-2.1.3.2 - Créer la librairie statique C"><a class="Link9" href="#Wrapper">2.1.3.2 - Créer la librairie statique C</a></h2></div><br><h2 class="Title7 GTitle2" id="Wrapper-2.1.3.2.1 - Éditer le programme C"><a class="Link9" href="#Wrapper">2.1.3.2.1 - Éditer le programme C</a></h2><br><h2 class="Title7 GTitle2" id="Wrapper-2.1.3.2.1.1 - Fichier header"><a class="Link9" href="#Wrapper">2.1.3.2.1.1 - Fichier header</a></h2><br><h3 class="Title8 GTitle3">hello.h</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _hello_
#define _hello_
//===============================================
void sayHello();
//===============================================
#endif
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Wrapper-2.1.3.2.1.2 - Fichier source"><a class="Link9" href="#Wrapper">2.1.3.2.1.2 - Fichier source</a></h2><br><h3 class="Title8 GTitle3">hello.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "hello.h"
//===============================================
#include &lt;stdio.h&gt;
//===============================================
void sayHello() {
    printf("[C] Bonjour tout le monde\n");
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Wrapper-2.1.3.2.2 - Compiler la librairie statique C"><a class="Link9" href="#Wrapper">2.1.3.2.2 - Compiler la librairie statique C</a></h2><br><h3 class="Title8 GTitle3">Windows</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">set "PATH=C:\TDM-GCC-64\bin;%PATH%"</xmp></pre></div><br><h3 class="Title8 GTitle3">Terminal</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">gcc -std=gnu11 -c hello.c -o hello.o</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Wrapper-2.1.3.2.3 - Construire la librairie statique C"><a class="Link9" href="#Wrapper">2.1.3.2.3 - Construire la librairie statique C</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">ar rcs libhello.a  hello.o</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Wrapper-2.1.3.3 - Compiler le projet"><a class="Link9" href="#Wrapper">2.1.3.3 - Compiler le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">go build -o rdgo.exe main.go</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Wrapper-2.1.3.4 - Exécuter le projet"><a class="Link9" href="#Wrapper">2.1.3.4 - Exécuter le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">rdgo.exe</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">[Go] Bonjour toutle monde
[C] Bonjour tout le monde</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Wrapper-2.1.4 - Utiliser une librairie dynamique dans un wrapper C pour Go"><a class="Link9" href="#Wrapper">2.1.4 - Utiliser une librairie dynamique dans un wrapper C pour Go</a></h2><br><h2 class="Title7 GTitle2" id="Wrapper-2.1.4.1 - Éditer le programme Go"><a class="Link9" href="#Wrapper">2.1.4.1 - Éditer le programme Go</a></h2><br><h3 class="Title8 GTitle3">main.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">//===============================================
package main
/*
//===============================================
#cgo CFLAGS: -I.
#cgo LDFLAGS: -L. -lhello
//===============================================
#include "hello.h"
//===============================================
*/
import "C"
//===============================================
import "fmt"
//===============================================
func main() {
    fmt.Printf("[Go] Bonjour toutle monde\n")
    C.sayHello()
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Wrapper-2.1.4.2 - Créer la librairie dynamique C"><a class="Link9" href="#Wrapper">2.1.4.2 - Créer la librairie dynamique C</a></h2><br><h2 class="Title7 GTitle2" id="Wrapper-2.1.4.2.1 - Éditer le programme C"><a class="Link9" href="#Wrapper">2.1.4.2.1 - Éditer le programme C</a></h2><br><h2 class="Title7 GTitle2" id="Wrapper-2.1.4.2.1.1 - Fichier header"><a class="Link9" href="#Wrapper">2.1.4.2.1.1 - Fichier header</a></h2><br><h3 class="Title8 GTitle3">hello.h</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _hello_
#define _hello_
//===============================================
void sayHello();
//===============================================
#endif
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Wrapper-2.1.4.2.1.2 - Fichier source"><a class="Link9" href="#Wrapper">2.1.4.2.1.2 - Fichier source</a></h2><br><h3 class="Title8 GTitle3">hello.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "hello.h"
//===============================================
#include &lt;stdio.h&gt;
//===============================================
void sayHello() {
    printf("[C] Bonjour tout le monde\n");
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Wrapper-2.1.4.2.2 - Compiler la librairie dynamique C"><a class="Link9" href="#Wrapper">2.1.4.2.2 - Compiler la librairie dynamique C</a></h2><br><h3 class="Title8 GTitle3">Windows</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">set "PATH=C:\TDM-GCC-64\bin;%PATH%"</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">gcc -std=gnu11 -c hello.c -o hello.o</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Wrapper-2.1.4.2.3 - Construire la librairie dynamique C"><a class="Link9" href="#Wrapper">2.1.4.2.3 - Construire la librairie dynamique C</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">gcc -shared -o libhello.dll hello.o</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Wrapper-2.1.4.3 - Compiler le projet"><a class="Link9" href="#Wrapper">2.1.4.3 - Compiler le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">go build -o rdgo.exe main.go</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Wrapper-2.1.4.4 - Exécuter le projet"><a class="Link9" href="#Wrapper">2.1.4.4 - Exécuter le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">rdgo.exe</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">[Go] Bonjour toutle monde
[C] Bonjour tout le monde</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Wrapper-2.2 - Wrapper C++"><a class="Link9" href="#Wrapper">2.2 - Wrapper C++</a></h2><br><h2 class="Title7 GTitle2" id="Wrapper-2.2.1 - Utiliser une librairie statique dans un wrapper C++ pour Go"><a class="Link9" href="#Wrapper">2.2.1 - Utiliser une librairie statique dans un wrapper C++ pour Go</a></h2><br><h2 class="Title7 GTitle2" id="Wrapper-2.2.1.1 - Éditer le programme Go"><a class="Link9" href="#Wrapper">2.2.1.1 - Éditer le programme Go</a></h2><br><h3 class="Title8 GTitle3">main.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">//===============================================
package main
/*
//===============================================
#cgo CFLAGS: -I.
//===============================================
#cgo LDFLAGS: -L. -lhello -lstdc++
//===============================================
#include "hello.h"
//===============================================
*/
import "C"
//===============================================
import "fmt"
//===============================================
func main() {
    fmt.Printf("[Go] Bonjour tout le monde\n")
    C.sayHello()
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Wrapper-2.2.1.2 - Créer la librairie statique C++"><a class="Link9" href="#Wrapper">2.2.1.2 - Créer la librairie statique C++</a></h2><br><h2 class="Title7 GTitle2" id="Wrapper-2.2.1.2.1 - Éditer le programme C++"><a class="Link9" href="#Wrapper">2.2.1.2.1 - Éditer le programme C++</a></h2><br><h2 class="Title7 GTitle2" id="Wrapper-2.2.1.2.1.1 - Fichier header"><a class="Link9" href="#Wrapper">2.2.1.2.1.1 - Fichier header</a></h2><br><h3 class="Title8 GTitle3">hello.h</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _hello_
#define _hello_
//===============================================
#ifdef __cplusplus
extern "C" {
#endif
//===============================================
void sayHello();
//===============================================
#ifdef __cplusplus
}
#endif
//===============================================
#endif
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Wrapper-2.2.1.2.1.2 - Fichier source"><a class="Link9" href="#Wrapper">2.2.1.2.1.2 - Fichier source</a></h2><br><h3 class="Title8 GTitle3">hello.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "hello.h"
//===============================================
#include &lt;iostream&gt;
//===============================================
void sayHello() {
    std::cout &lt;&lt; "[C++] Bonjour tout le monde\n";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Wrapper-2.2.1.2.2 - Compiler la librairie statique C++"><a class="Link9" href="#Wrapper">2.2.1.2.2 - Compiler la librairie statique C++</a></h2><br><h3 class="Title8 GTitle3">Ubuntu</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">g++ -std=gnu++11 -c hello.cpp -o hello.o</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Wrapper-2.2.1.2.3 - Construire la librairie statique C++"><a class="Link9" href="#Wrapper">2.2.1.2.3 - Construire la librairie statique C++</a></h2><br><h3 class="Title8 GTitle3">Ubuntu</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">ar rcs libhello.a hello.o</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Wrapper-2.2.1.3 - Compiler le projet"><a class="Link9" href="#Wrapper">2.2.1.3 - Compiler le projet</a></h2><br><h3 class="Title8 GTitle3">Ubuntu</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">go build -o rdgo main.go</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Wrapper-2.2.1.4 - Exécuter le projet"><a class="Link9" href="#Wrapper">2.2.1.4 - Exécuter le projet</a></h2><br><h3 class="Title8 GTitle3">Ubuntu</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">./rdgo</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">[Go] Bonjour tout le monde
[C++] Bonjour tout le monde</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Wrapper-2.2.2 - Utiliser une librairie dynamique dans un wrapper C++ pour Go"><a class="Link9" href="#Wrapper">2.2.2 - Utiliser une librairie dynamique dans un wrapper C++ pour Go</a></h2><br><h2 class="Title7 GTitle2" id="Wrapper-2.2.2.1 - Éditer le programme Go"><a class="Link9" href="#Wrapper">2.2.2.1 - Éditer le programme Go</a></h2><br><h3 class="Title8 GTitle3">main.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">//===============================================
package main
/*
//===============================================
#cgo CFLAGS: -I.
//===============================================
#cgo LDFLAGS: -L. -lhello
//===============================================
#include "hello.h"
//===============================================
*/
import "C"
//===============================================
import "fmt"
//===============================================
func main() {
    fmt.Printf("[Go] Bonjour tout le monde\n")
    C.sayHello()
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Wrapper-2.2.2.2 - Créer la librairie dynamique C++"><a class="Link9" href="#Wrapper">2.2.2.2 - Créer la librairie dynamique C++</a></h2><br><h2 class="Title7 GTitle2" id="Wrapper-2.2.2.2.1 - Éditer le programme C++"><a class="Link9" href="#Wrapper">2.2.2.2.1 - Éditer le programme C++</a></h2><br><h2 class="Title7 GTitle2" id="Wrapper-2.2.2.2.1.1 - Fichier header"><a class="Link9" href="#Wrapper">2.2.2.2.1.1 - Fichier header</a></h2><br><h3 class="Title8 GTitle3">hello.h</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _hello_
#define _hello_
//===============================================
#ifdef __cplusplus
extern "C" {
#endif
//===============================================
void sayHello();
//===============================================
#ifdef __cplusplus
}
#endif
//===============================================
#endif
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Wrapper-2.2.2.2.1.2 - Fichier source"><a class="Link9" href="#Wrapper">2.2.2.2.1.2 - Fichier source</a></h2><br><h3 class="Title8 GTitle3">hello.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "hello.h"
//===============================================
#include &lt;iostream&gt;
//===============================================
void sayHello() {
    std::cout &lt;&lt; "[C++] Bonjour tout le monde\n";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Wrapper-2.2.2.2.2 - Compiler la librairie dynamique C++"><a class="Link9" href="#Wrapper">2.2.2.2.2 - Compiler la librairie dynamique C++</a></h2><br><h3 class="Title8 GTitle3">Ubuntu</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">g++ -std=gnu++11 -c hello.cpp -o hello.o</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Wrapper-2.2.2.2.3 - Construire la librairie dynamique C++"><a class="Link9" href="#Wrapper">2.2.2.2.3 - Construire la librairie dynamique C++</a></h2><br><h3 class="Title8 GTitle3">Ubuntu</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">g++ -shared -o libhello.so hello.o</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Wrapper-2.2.2.3 - Compiler le projet"><a class="Link9" href="#Wrapper">2.2.2.3 - Compiler le projet</a></h2><br><h3 class="Title8 GTitle3">Ubuntu</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">go build -o rdgo main.go</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Wrapper-2.2.2.4 - Exécuter le projet"><a class="Link9" href="#Wrapper">2.2.2.4 - Exécuter le projet</a></h2><br><h3 class="Title8 GTitle3">Ubuntu</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">./rdgo</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">[Go] Bonjour tout le monde
[C++] Bonjour tout le monde</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Swig"><a class="Link3" href="#">Swig</a></h1><div class="Body3"><br><b>SWIG </b>est un compilateur d'interface qui connecte des programmes écrits en C et C ++ avec des langages de script tels que Go. <br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617565425501"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617565425501");</script></div><br><h2 class="Title7 GTitle2" id="Swig-1 - Installation"><a class="Link9" href="#Swig">1 - Installation</a></h2><br><h2 class="Title7 GTitle2" id="Swig-1.1 - Installation sous Windows"><a class="Link9" href="#Swig">1.1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Swig-1.1.1 - Télécharger Swig"><a class="Link9" href="#Swig">1.1.1 - Télécharger Swig</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="http://www.swig.org/download.html">http://www.swig.org/download.html</a><br><br><b>swigwin-4.0.2.zip</b><br><br><h2 class="Title7 GTitle2" id="Swig-1.1.2 - Installer Swig"><a class="Link9" href="#Swig">1.1.2 - Installer Swig</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Extraire -&gt; swigwin-4.0.2.zip</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Swig-1.2 - Installation sous Ubuntu"><a class="Link9" href="#Swig">1.2 - Installation sous Ubuntu</a></h2><br><h2 class="Title7 GTitle2" id="Swig-1.2.1 - Installer Swig"><a class="Link9" href="#Swig">1.2.1 - Installer Swig</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">sudo apt install swig</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Swig-2 - Tests"><a class="Link9" href="#Swig">2 - Tests</a></h2><br><h2 class="Title7 GTitle2" id="Swig-2.1 - Test sous Ubuntu"><a class="Link9" href="#Swig">2.1 - Test sous Ubuntu</a></h2><br><h2 class="Title7 GTitle2" id="Swig-2.1.1 - Test sous C++"><a class="Link9" href="#Swig">2.1.1 - Test sous C++</a></h2><br><h2 class="Title7 GTitle2" id="Swig-2.1.1.1 - Définir le répertoire projet"><a class="Link9" href="#Swig">2.1.1.1 - Définir le répertoire projet</a></h2><br><h3 class="Title8 GTitle3">Structure</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">├── code
│   ├── main.go
│   └── rdgo
└── src
    └── lib
        ├── hello.cpp
        ├── hello.go
        ├── hello.h
        ├── hello.i
        ├── hello_wrap.cxx
        └── lib.go</xmp></pre></div><br><h3 class="Title8 GTitle3">Définition</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">REPERTOIRE_PROJET    -&gt; ReadyTest/swig/
REPERTOIRE_SOURCE    -&gt; ReadyTest/swig/src/
REPERTOIRE_LIBRAIRIE -&gt; ReadyTest/swig/src/lib/
FICHIER_HEADER       -&gt; ReadyTest/swig/src/lib/hello.h
FICHIER_SOURCE       -&gt; ReadyTest/swig/src/lib/hello.cpp
FICHIER_INTERFACE    -&gt; ReadyTest/swig/src/lib/hello.i
FICHIER_LIBRAIRIE    -&gt; ReadyTest/swig/src/lib/lib.go
REPERTOIRE_CODE      -&gt; ReadyTest/swig/code/
PROGRAMME_PRINCIPAL  -&gt; ReadyTest/swig/code/main.go</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Swig-2.1.1.2 - Editer le programme Go"><a class="Link9" href="#Swig">2.1.1.2 - Editer le programme Go</a></h2><br><h3 class="Title8 GTitle3">main.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">//===============================================
package main
//===============================================
import "lib"
import "fmt"
//===============================================
func main() {
    fmt.Printf("[Go] Bonjour tout le monde\n")
    hello.SayHello()
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Swig-2.1.1.3 - Editer le fichier librairie"><a class="Link9" href="#Swig">2.1.1.3 - Editer le fichier librairie</a></h2><br><h3 class="Title8 GTitle3">lib.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">//===============================================
package hello
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Swig-2.1.1.4 - Editer le programme C++"><a class="Link9" href="#Swig">2.1.1.4 - Editer le programme C++</a></h2><br><h2 class="Title7 GTitle2" id="Swig-2.1.1.4.1 - Fichier header"><a class="Link9" href="#Swig">2.1.1.4.1 - Fichier header</a></h2><br><h3 class="Title8 GTitle3">hello.h</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _hello_
#define _hello_
//===============================================
void sayHello();
//===============================================
#endif
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Swig-2.1.1.4.2 - Fichier source"><a class="Link9" href="#Swig">2.1.1.4.2 - Fichier source</a></h2><br><h3 class="Title8 GTitle3">hello.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "hello.h"
//===============================================
#include &lt;iostream&gt;
//===============================================
void sayHello() {
    std::cout &lt;&lt; "[C++] Bonjour tout le monde\n";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Swig-2.1.1.5 - Editer l'interface Swig"><a class="Link9" href="#Swig">2.1.1.5 - Editer l'interface Swig</a></h2><br><h3 class="Title8 GTitle3">hello.i</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="swig">%module hello 

%inline %{ 
    #include "hello.h" 
%}

void sayHello();</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Swig-2.1.1.6 - Générer l'interface Go"><a class="Link9" href="#Swig">2.1.1.6 - Générer l'interface Go</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">swig -go -cgo -c++ -intgosize 64 hello.i</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Swig-2.1.1.7 - Compiler le programme Go"><a class="Link9" href="#Swig">2.1.1.7 - Compiler le programme Go</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">export "GOPATH=/home/rpi4/Programs/ReadyTest/swig"
go env -w GO111MODULE=auto</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">go build -o rdgo main.go</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Swig-2.1.1.8 - Exécuter le projet"><a class="Link9" href="#Swig">2.1.1.8 - Exécuter le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">./rdgo</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">[Go] Bonjour tout le monde
[C++] Bonjour tout le monde</xmp></pre></div><br></div></div></div></div><br>