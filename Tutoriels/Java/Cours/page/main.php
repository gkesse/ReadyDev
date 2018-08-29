<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la programmation avec le Java</div></a></div></div><div class="Body2 Orange">Le <b>Java</b> est un langage de programmation orientée objet.<br>Le but de ce tutoriel est de vous apprendre la programmation avec le <b>Java</b>.<br>Produit par <b>Gérard KESSE</b>.<br>&nbsp;<br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation sous Windows"><a class="Link3" href="#">Installation sous Windows</a></h1><div class="Body3">Le but de cette section est de vous présenter les différents outils nécessaires pour apprendre la programmation avec le <span class="GColor1" style="color:lime;">Java</span>, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>Dans ce tutoriel, nous utiliserons, sous Windows:<br>- Java JDK, comme compilateur.<br>- Apache Ant, comme outil d'automatisation.<br>- Apache Maven, comme outil d'automatisation.<br>- Notepad++, comme éditeur de texte.<br><br><h3 class="Title8 GTitle3">Télécharger Java JDK<br></h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="http://www.oracle.com/technetwork/java/javase/archive-139210.html">http://www.oracle.com/technetwork/java/javase/archive-139210.html</a><br><br><h3 class="Title8 GTitle3">Télécharger Apache Ant</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://ant.apache.org/bindownload.cgi">https://ant.apache.org/bindownload.cgi</a><br><br><h3 class="Title8 GTitle3">Télécharger Apache Maven</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://maven.apache.org/download.cgi">https://maven.apache.org/download.cgi</a><br><br><h3 class="Title8 GTitle3">Télécharger Notepad++</h3><a class="Link7 GLink1" style="color:lime;" href="https://notepad-plus-plus.org/fr/">https://notepad-plus-plus.org/fr/</a></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Utilisation de Java JDK"><a class="Link3" href="#">Utilisation de Java JDK</a></h1><div class="Body3">Le but de cette section est de vous apprendre à utiliser <span class="GColor1" style="color:lime;">Java JDK</span>, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>Java JDK permet de compiler des projets Java.<br><br><h3 class="Title8 GTitle3">Programme principal (GMain.java)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
public class GMain {
   public static void main(String[] args) {
      System.out.println("Bonjour tout le monde");
   }
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Compiler le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin

set GSRC=..\src
set GBUILD=build

javac %GSRC%\GMain.java ^
-d %GBUILD%</xmp></pre></div><br><h3 class="Title8 GTitle3">Exécuter le projet</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off

set PATH=C:\Program Files\Java\jdk-10.0.2\bin

set CLASSPATH=build

echo.
java GMain
echo.

pause</xmp></pre></div><br><h3 class="Title8 GTitle3">Resultat</h3><div class="Img3 GImage"><img src="img/Jdk.png" alt="img/Jdk.png"></div></div></div></div></div><br>