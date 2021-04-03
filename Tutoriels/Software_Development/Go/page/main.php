<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la programmation en Go<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la programmation en <b>Go</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>Go </b>est un langage de programmation compilé et concurrent inspiré de C et Pascal qui se veut faciliter et accélérer la programmation à grande échelle en raison de sa simplicité. Il peut être utilisé aussi bien pour écrire des applications, des scripts ou de grands systèmes. Il permet d'assurer la maintenance et l'évolution des programmes sur plusieurs générations de développeurs.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Software_Development/Go/img/b_go.png" alt="/Tutoriels/Software_Development/Go/img/b_go.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation"><a class="Link3" href="#">Installation</a></h1><div class="Body3"><br>Installer l'environnement Go.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617370085586"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617370085586");</script></div><br><h2 class="Title7 GTitle2" id="Installation-1 - Installation sous Windows"><a class="Link9" href="#Installation">1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1 - Télécharger Go"><a class="Link9" href="#Installation">1.1 - Télécharger Go</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://dl.google.com/go/go1.16.3.windows-amd64.msi">https://dl.google.com/go/go1.16.3.windows-amd64.msi</a><br><br><h2 class="Title7 GTitle2" id="Installation-1.2 - Installer Go"><a class="Link9" href="#Installation">1.2 - Installer Go</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">go1.16.3.windows-amd64.msi
Next
Cocher -&gt; I accept the terms in the License Agreement
Destination Folder -&gt; C:\Program Files\Go\
Next
Install
Finish</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tests"><a class="Link3" href="#">Tests</a></h1><div class="Body3"><br>Créer un projet Go.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617383655488"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617383655488");</script></div><br><h2 class="Title7 GTitle2" id="Tests-1 - Test sous Windows"><a class="Link9" href="#Tests">1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.1 - Éditer le programme"><a class="Link9" href="#Tests">1.1 - Éditer le programme</a></h2><br><h3 class="Title8 GTitle3">main.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Système d'administration-Résultat"><a class="Link9" href="#Système d'administration">Résultat</a></h2><br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Wrapper"><a class="Link3" href="#">Wrapper</a></h1><div class="Body3"><br>Créer un wrapper pour Go.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617389922085"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617389922085");</script></div><br><h2 class="Title7 GTitle2" id="Wrapper-1 - Introduction"><a class="Link9" href="#Wrapper">1 - Introduction</a></h2><br>Une fonction wrapper est un programme dont la fonction principale est d'appeler une autre fonction écrite dans un langage différent du langage appelant. <br><br><h2 class="Title7 GTitle2" id="Wrapper-2 - Exemples"><a class="Link9" href="#Wrapper">2 - Exemples</a></h2><br><h2 class="Title7 GTitle2" id="Wrapper-2.1 - Wrapper C"><a class="Link9" href="#Wrapper">2.1 - Wrapper C</a></h2><br><h2 class="Title7 GTitle2" id="Wrapper-2.1.1 - Créer un wrapper C pour Go"><a class="Link9" href="#Wrapper">2.1.1 - Créer un wrapper C pour Go</a></h2><br><h2 class="Title7 GTitle2" id="Wrapper-2.1.1.1 - Écrire le programme"><a class="Link9" href="#Wrapper">2.1.1.1 - Écrire le programme</a></h2><br><h3 class="Title8 GTitle3">main.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">//===============================================
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
//===============================================</xmp></pre></div><br><div align="left"><h2 class="Title7 GTitle2" id="Wrapper-2.1.3.2 - Créer la librairie statique"><a class="Link9" href="#Wrapper">2.1.3.2 - Créer la librairie statique</a></h2></div><br><h2 class="Title7 GTitle2" id="Wrapper-2.1.3.2.1 - Structure de la librairie statique"><a class="Link9" href="#Wrapper">2.1.3.2.1 - Structure de la librairie statique</a></h2><br><h3 class="Title8 GTitle3">hello.h</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _hello_
#define _hello_
//===============================================
void sayHello();
//===============================================
#endif
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Wrapper-2.1.3.2.2 - Définition de la librairie statique"><a class="Link9" href="#Wrapper">2.1.3.2.2 - Définition de la librairie statique</a></h2><br><h3 class="Title8 GTitle3">hello.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "hello.h"
//===============================================
#include &lt;stdio.h&gt;
//===============================================
void sayHello() {
    printf("[C] Bonjour tout le monde\n");
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Wrapper-2.2 - Wrapper C++"><a class="Link9" href="#Wrapper">2.2 - Wrapper C++</a></h2><br><h2 class="Title7 GTitle2" id="Wrapper-2.2.1 - Écrire un wrapper en C++ pour Go"><a class="Link9" href="#Wrapper">2.2.1 - Écrire un wrapper en C++ pour Go</a></h2><br><br><br><br><br><br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programmation de base"><a class="Link3" href="#">Programmation de base</a></h1><div class="Body3"><br><h2 class="Title7 GTitle2" id="Programmation de base-Sommaire"><a class="Link9" href="#Programmation de base">Sommaire</a></h2><br><div class="Content0 GList1"><div class="Body0" id="Loader_1600429063037"><div class="Row26">List 1 &gt; Go &gt; basics</div></div><script>loadList1("Loader_1600429063037","Go","basics");</script></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Développement de wrapper"><a class="Link3" href="#">Développement de wrapper</a></h1><div class="Body3"><br><h2 class="Title7 GTitle2" id="Développement de wrapper-Sommaire"><a class="Link9" href="#Développement de wrapper">Sommaire</a></h2><br><div class="Content0 GList1"><div class="Body0" id="Loader_1604523994735"><div class="Row26">List 1 &gt; Go &gt; wrapper</div></div><script>loadList1("Loader_1604523994735","Go","wrapper");</script></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Interface Homme-Machine Qt"><a class="Link3" href="#">Interface Homme-Machine Qt</a></h1><div class="Body3"><br><h2 class="Title7 GTitle2" id="Interface Homme-Machine Qt-Sommaire"><a class="Link9" href="#Interface Homme-Machine Qt">Sommaire</a></h2><br><div class="Content0 GList1"><div class="Body0" id="Loader_1605456108146"><div class="Row26">List 1 &gt; Go &gt; qt</div></div><script>loadList1("Loader_1605456108146","Go","qt");</script></div><br></div></div></div></div><br>