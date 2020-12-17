<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer un projet en J2EE</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer un projet en <b>J2EE</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3">Le <b>J2EE </b>est une spécification Java, destinée au développement d'applications web.Il fournit une API de mapping objet-relationnel, des architectures distribuées et multitiers, et des services web3. Il est structuré autour de composants modulaires exécutés sur un serveur d'applications.<br><br><div class="Img3 GImage"><img src="/Tutoriels/J2EE/img/b_cours_project.png" alt="/Tutoriels/J2EE/img/b_cours_project.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un projet en J2EE"><a class="Link3" href="#">Créer un projet en J2EE</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer un projet en J2EE-Introduction"><a class="Link9" href="#Créer un projet en J2EE">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer un projet en J2EE qui affiche un message à l'écran (Bonjour tout le monde).<br><br><h2 class="Title7 GTitle2" id="Créer un projet en J2EE-Programme principal"><a class="Link9" href="#Créer un projet en J2EE">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GHome.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
package com.pkg.readyapp;
//===============================================
import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;
//===============================================
public class GHome extends HttpServlet {
    //===============================================
    public void doGet(HttpServletRequest request, HttpServletResponse response)
    throws ServletException,IOException {
        response.setContentType("text/html");
        PrintWriter lPrintWriter = response.getWriter();
        lPrintWriter.println("&lt;html&gt;");
        lPrintWriter.println("&lt;head&gt;&lt;title&gt;Accueil&lt;/title&gt;&lt;/title&gt;");
        lPrintWriter.println("&lt;body&gt;");
        lPrintWriter.println("&lt;h1&gt;Bonjour tout le monde&lt;/h1&gt;");
        lPrintWriter.println("&lt;/body&gt;&lt;/html&gt;");
    }
    //===============================================
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet en J2EE-Programme de redirection"><a class="Link9" href="#Créer un projet en J2EE">Programme de redirection</a></h2><br><h3 class="Title8 GTitle3">index.html</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="html">&lt;!-- ============================================ --&gt;
&lt;html&gt;
    &lt;!-- ============================================ --&gt;
    &lt;head&gt;
        &lt;title&gt;Redirection&lt;/title&gt;
        &lt;meta http-equiv="refresh" content="0; URL=home"/&gt;
    &lt;/head&gt;
    &lt;!-- ============================================ --&gt;
    &lt;body&gt;
    &lt;/body&gt;
    &lt;!-- ============================================ --&gt;
&lt;/html&gt;
&lt;!-- ============================================ --&gt;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet en J2EE-Configuration du projet"><a class="Link9" href="#Créer un projet en J2EE">Configuration du projet</a></h2><br><h3 class="Title8 GTitle3">web.xml</h3><br><br><br><br><br><br><h2 class="Title7 GTitle2" id="Créer un projet en J2EE-Fichier Makefile"><a class="Link9" href="#Créer un projet en J2EE">Fichier Makefile</a></h2><br><h3 class="Title8 GTitle3">Makefile.jdk.mak</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GSRC = $(GPROJECT_SRC)
GBUILD = $(GPROJECT_CLASS)

GSRCPATH =\
    $(GSRC) \

all: compile

compile:
	@if not exist $(GBUILD) @mkdir $(GBUILD)
	@javac $(GMAIN_JAVA) -d $(GBUILD) -sourcepath $(GSRCPATH)
clean: 
	@if not exist $(GBUILD) @mkdir $(GBUILD)
	@del /s /q $(GBUILD)\*.class</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet en J2EE-Variables d'environnement"><a class="Link9" href="#Créer un projet en J2EE">Variables d'environnement</a></h2><br><h3 class="Title8 GTitle3">env.bat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off
::===============================================
set "PATH=C:\MinGW\bin;%PATH%"
set "PATH=C:\Program Files\Java\jdk-11.0.1\bin;%PATH%"
::===============================================
set "GPROJECT_ROOT=C:\Users\Admin\Downloads\Programs"
set "GPROJECT_PATH=%GPROJECT_ROOT%\ReadyJ2EE"
set "GPROJECT_SRC=%GPROJECT_PATH%\code\webapp\src\WEB-INF\sources"
set "GPROJECT_CLASS=%GPROJECT_PATH%\code\webapp\src\WEB-INF\classes"
set "GMAIN_JAVA=%GPROJECT_SRC%\com\pkg\readyapp\GHome.java"
::===============================================
set "CLASSPATH="
set "CLASSPATH=C:\Users\Admin\Downloads\Compressed\apache-tomcat-7.0.107-windows-x64\apache-tomcat-7.0.107\lib\servlet-api.jar;%CLASSPATH%"
::===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">make_j.bat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off
::===============================================
set "args=%*"             
setlocal enabledelayedexpansion
set "lArgs=%*"             
set "lArgs=!lArgs:*%1 =!"  
endlocal && ( set "args=%lArgs%" )
::===============================================
mingw32-make -f Makefile.jdk.mak %1 argv="%args%"
::===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet en J2EE-Compilation automatique"><a class="Link9" href="#Créer un projet en J2EE">Compilation automatique</a></h2><br><h3 class="Title8 GTitle3">Terminal</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">make_j compile</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet en J2EE-Compilation manuelle"><a class="Link9" href="#Créer un projet en J2EE">Compilation manuelle</a></h2><br><h3 class="Title8 GTitle3">Terminal</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">javac %GPROJECT_SRC%\WEB-INF\sources\com\pkg\readyapp\GHome.java ^
-d %GPROJECT_SRC%\WEB-INF\classes ^
-sourcepath %GPROJECT_SRC%\WEB-INF\sources</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet en J2EE-Configuration du serveur"><a class="Link9" href="#Créer un projet en J2EE">Configuration du serveur</a></h2><br><h3 class="Title8 GTitle3">server.xml</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="xml">&lt;!-- ============================================ --&gt;
&lt;Service name="Catalina_2"&gt;
    &lt;Connector port="8001" protocol="HTTP/1.1" connectionTimeout="20000" redirectPort="8444" /&gt;
    &lt;Engine name="Catalina_2" defaultHost="localhost"&gt;
        &lt;Realm className="org.apache.catalina.realm.LockOutRealm"&gt;
            &lt;Realm className="org.apache.catalina.realm.UserDatabaseRealm" resourceName="UserDatabase"/&gt;
        &lt;/Realm&gt;
        &lt;Host name="localhost"  appBase="C:\Users\Admin\Downloads\Programs\ReadyJ2EE\code" unpackWARs="true" autoDeploy="true"&gt;
            &lt;Valve className="org.apache.catalina.valves.AccessLogValve" directory="logs" prefix="localhost_access_log." suffix=".txt" pattern="%h %l %u %t "%r" %s %b" /&gt;
            &lt;Context docBase="webapp/src" path="" reloadable="true"/&gt;            
        &lt;/Host&gt;
    &lt;/Engine&gt;
&lt;/Service&gt;
&lt;!-- ============================================ --&gt;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet en J2EE-Lancement du serveur"><a class="Link9" href="#Créer un projet en J2EE">Lancement du serveur</a></h2><br><h3 class="Title8 GTitle3">Tomcat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Tomcat7w.exe</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet en J2EE-Accès à la page web"><a class="Link9" href="#Créer un projet en J2EE">Accès à la page web</a></h2><br><h3 class="Title8 GTitle3">Navigateur</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="http://localhost:8001">http://localhost:8001</a><br><br><h2 class="Title7 GTitle2" id="Créer un projet en J2EE-Résultat"><a class="Link9" href="#Créer un projet en J2EE">Résultat</a></h2><br><h3 class="Title8 GTitle3">Structure du projet</h3><br><div class="Img3 GImage"><img src="/Tutoriels/J2EE/img/i_cours_project.png" alt="/Tutoriels/J2EE/img/i_cours_project.png"></div><br><h3 class="Title8 GTitle3">Page web</h3><br><div class="Img3 GImage"><img src="/Tutoriels/J2EE/img/i_cours_project_02.png" alt="/Tutoriels/J2EE/img/i_cours_project_02.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1600429735365"><div class="Row26">List 1 &gt; J2EE &gt; basics</div></div><script>loadList1("Loader_1600429735365","J2EE","basics");</script></div><br></div></div></div></div><br>