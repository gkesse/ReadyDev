<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Utiliser une fonction C en Go</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à utiliser une fonction C en <b>Go</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>Go </b>est un langage de programmation compilé et concurrent inspiré de C et Pascal. Il veut faciliter et accélérer la programmation à grande échelle en raison de sa simplicité. Il peut être utilisé aussi bien pour écrire des applications, des scripts ou de grands systèmes. Il permet d'assurer la maintenance et l'évolution des programmes sur plusieurs générations de développeurs.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Go/img/b_wrapper_c_function.png" alt="/Tutoriels/Go/img/b_wrapper_c_function.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Utiliser une fonction C en Go"><a class="Link3" href="#">Utiliser une fonction C en Go</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Utiliser une fonction C en Go-Introduction"><a class="Link9" href="#Utiliser une fonction C en Go">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons d'utiliser une fonction C en Go.<br><br><h2 class="Title7 GTitle2" id="Utiliser une fonction C en Go-Programme principal"><a class="Link9" href="#Utiliser une fonction C en Go">Programme principal</a></h2><br><h3 class="Title8 GTitle3">main.go</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="golang">//===============================================
package main
/*
//===============================================
#include &lt;stdio.h&gt;
//===============================================
void sayHello() {
    printf("[info] integration d'une fonction C dans un code Go\n");
}
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser une fonction C en Go-Résultat"><a class="Link9" href="#Utiliser une fonction C en Go">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Go/img/i_wrapper_c_function.png" alt="/Tutoriels/Go/img/i_wrapper_c_function.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Développement de wrapper</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1604568280960"><div class="Row26">List 1 &gt; Go &gt; wrapper</div></div><script>loadList1("Loader_1604568280960","Go","wrapper");</script></div><br></div></div></div></div><br>