<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer un singleton en Java</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer un singleton en <b>Java</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>Java </b>est un langage de programmation orienté objet permettant de créer des logiciels vers une représentation binaire qui peut être exécutée dans une machine virtuelle Java (JVM) en faisant abstraction du système d'exploitation.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Java/img/b_cours_singleton.png" alt="/Tutoriels/Java/img/b_cours_singleton.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un singleton en Java"><a class="Link3" href="#">Créer un singleton en Java</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer un singleton en Java-Introduction"><a class="Link9" href="#Créer un singleton en Java">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer un singleton (GProcess).<br><br><h2 class="Title7 GTitle2" id="Créer un singleton en Java-Programme principal"><a class="Link9" href="#Créer un singleton en Java">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GMain.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
package com.pkg.readyapp;
//===============================================
import com.pkg.readyapp.manager.*;
//===============================================
public class GMain {
    public static void main(String[] args){
        GProcess.Instance().run(args);
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un singleton en Java-Structure du singleton"><a class="Link9" href="#Créer un singleton en Java">Structure du singleton</a></h2><br><h3 class="Title8 GTitle3">GProcess.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
package com.pkg.readyapp.manager;
//===============================================
public class GProcess {
    //===============================================
    private static GProcess m_intance = null;
    //===============================================
    private GProcess() {

    }
    //===============================================
    public static synchronized GProcess Instance() {           
        if(m_intance == null) {   
            m_intance = new GProcess(); 
        }
        return m_intance;
    }
    //===============================================
    public void run(String[] args) {
        // code de la methode run
    }        
    //===============================================
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un singleton en Java-Résultat"><a class="Link9" href="#Créer un singleton en Java">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Java/img/i_cours_singleton.png" alt="/Tutoriels/Java/img/i_cours_singleton.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1600429735365"><div class="Row26">List 1 &gt; Java &gt; basics</div></div><script>loadList1("Loader_1600429735365","Java","basics");</script></div><br></div></div></div></div><br>