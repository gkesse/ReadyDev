<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Programmation web en J2EE<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la programmation web en <b>J2EE</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>J2EE </b>est une spécification Java, destinée au développement d'applications web.Il fournit une API de mapping objet-relationnel, des architectures distribuées et multitiers, et des services web3. Il est structuré autour de composants modulaires exécutés sur un serveur d'applications.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Web/J2EE/img/b_j2ee.png" alt="/Tutoriels/Web/J2EE/img/b_j2ee.png"></div><br><h2 class="Title7 GTitle2" id="Introduction-Prérequis"><a class="Link9" href="#Introduction">Prérequis</a></h2><br>$\checkmark$ <a class="Link7 GLink1" style="color:lime;" href="/Tutoriels/Software_Development/Java/#Installation">Installer l'environnement Java</a><br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation"><a class="Link3" href="#">Installation</a></h1><div class="Body3"><br>Installer l'environnement J2EE.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617649094292"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617649094292");</script></div><br><h2 class="Title7 GTitle2" id="Installation-1 - Installation sous Windows"><a class="Link9" href="#Installation">1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1 - Installation sous Tomcat"><a class="Link9" href="#Installation">1.1 - Installation sous Tomcat</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1.1 - Télécharger Tomcat"><a class="Link9" href="#Installation">1.1.1 - Télécharger Tomcat</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="http://tomcat.apache.org/download-70.cgi">http://tomcat.apache.org/download-70.cgi</a><br><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://pub.tutosfaciles48.fr/mirrors/apache/tomcat/tomcat-7/v7.0.108/bin/apache-tomcat-7.0.108.exe">https://pub.tutosfaciles48.fr/mirrors/apache/tomcat/tomcat-7/v7.0.108/bin/apache-tomcat-7.0.108.exe</a><br><br><h2 class="Title7 GTitle2" id="Installation-1.1.2 - Installer Tomcat"><a class="Link9" href="#Installation">1.1.2 - Installer Tomcat</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">apache-tomcat-7.0.108.exe
Next
I Agree
Cocher -&gt; Tomcat
Cocher -&gt; Start Menu Items
Cocher -&gt; Documentation
Cocher -&gt; Manager
Next
Server Shutdown Port -&gt; -1
HTTP/1.1 Connector Port -&gt; 8080
Windows Service Name -&gt; Tomcat7
Tomcat Administrator Login -&gt; User Name -&gt; gkesse
Tomcat Administrator Login -&gt; Password -&gt; admin
Tomcat Administrator Login -&gt; Roles -&gt; manager-gui
Next
Java Virtual Machine -&gt; C:\Program Files\Java\jdk-15.0.1
Next
Choose Install Location -&gt; C:\Program Files\Apache Software Foundation\Tomcat 7.0
Install
Cocher -&gt; Run Apache Tomcat
Cocher -&gt; Show Readme
Finish</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tests"><a class="Link3" href="#">Tests</a></h1><div class="Body3"><br>Créer un projet J2EE.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617649178149"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617649178149");</script></div><br><h2 class="Title7 GTitle2" id="Tests-1 - Test sous Windows"><a class="Link9" href="#Tests">1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.1 - Test sous Tomcat"><a class="Link9" href="#Tests">1.1 - Test sous Tomcat</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.1.1 - Structure du projet"><a class="Link9" href="#Tests">1.1.1 - Structure du projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">REPERTOIRE_PROJET -&gt; ReadyJ2EE\app\code\
REPERTOIRE_RACINE -&gt; ReadyJ2EE\app\code\readyapp\src\
FICHIER_INDEX     -&gt; ReadyJ2EE\app\code\readyapp\src\index.html</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.2 - Configuration du serveur"><a class="Link9" href="#Tests">1.1.2 - Configuration du serveur</a></h2><br><h3 class="Title8 GTitle3">C:\Program Files\Apache Software Foundation\Tomcat 7.0\conf\server.xml</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="xml">&lt;?xml version='1.0' encoding='utf-8'?&gt;
&lt;Server port="8005" shutdown="SHUTDOWN"&gt;
    &lt;!-- ============================================ --&gt;
    &lt;Listener className="org.apache.catalina.startup.VersionLoggerListener" /&gt;
    &lt;Listener className="org.apache.catalina.core.AprLifecycleListener" SSLEngine="on" /&gt;
    &lt;Listener className="org.apache.catalina.core.JasperListener" /&gt;
    &lt;Listener className="org.apache.catalina.core.JreMemoryLeakPreventionListener" /&gt;
    &lt;Listener className="org.apache.catalina.mbeans.GlobalResourcesLifecycleListener" /&gt;
    &lt;Listener className="org.apache.catalina.core.ThreadLocalLeakPreventionListener" /&gt;
    &lt;GlobalNamingResources&gt;
        &lt;Resource name="UserDatabase" auth="Container"
              type="org.apache.catalina.UserDatabase"
              description="User database that can be updated and saved"
              factory="org.apache.catalina.users.MemoryUserDatabaseFactory"
              pathname="conf/tomcat-users.xml" /&gt;
    &lt;/GlobalNamingResources&gt;
    &lt;!-- ============================================ --&gt;
    &lt;!-- configuration par defaut du serveur Tomcat --&gt;
    &lt;!-- url : http://localhost:8080/ --&gt;
    &lt;!-- ============================================ --&gt;
    &lt;Service name="Catalina"&gt;
        &lt;Connector port="8080" protocol="HTTP/1.1" connectionTimeout="20000" redirectPort="8443" /&gt;
        &lt;Engine name="Catalina" defaultHost="localhost"&gt;
            &lt;Realm className="org.apache.catalina.realm.LockOutRealm"&gt;
                &lt;Realm className="org.apache.catalina.realm.UserDatabaseRealm" resourceName="UserDatabase"/&gt;
            &lt;/Realm&gt;

            &lt;Host name="localhost"  appBase="webapps" unpackWARs="true" autoDeploy="true"&gt;
                &lt;Valve className="org.apache.catalina.valves.AccessLogValve" directory="logs"
               prefix="localhost_access_log." suffix=".txt"
               pattern="%h %l %u %t "%r" %s %b" /&gt;

            &lt;/Host&gt;
        &lt;/Engine&gt;
    &lt;/Service&gt;
    &lt;!-- ============================================ --&gt;
    &lt;!-- configuration du serveur d'application --&gt;
    &lt;!-- url : http://localhost:8585/ --&gt;
    &lt;!-- ============================================ --&gt;
    &lt;!-- on definit le nom du service --&gt;
    &lt;Service name="Catalina_2"&gt;
        &lt;!-- on definit le port du serveur (8585) --&gt;
        &lt;Connector port="8585" protocol="HTTP/1.1" connectionTimeout="20000" redirectPort="8444" /&gt;
        &lt;!-- on definit le nom par defaut du serveur (localhost) --&gt;
        &lt;Engine name="Catalina_2" defaultHost="localhost"&gt;
            &lt;Realm className="org.apache.catalina.realm.LockOutRealm"&gt;
                &lt;Realm className="org.apache.catalina.realm.UserDatabaseRealm" resourceName="UserDatabase"/&gt;
            &lt;/Realm&gt;
            &lt;!-- on definit le nom du serveur (localhost) --&gt;
            &lt;!-- on definit la racine du serveur (ReadyJ2EE\app\code) --&gt;
            &lt;Host name="localhost" appBase="C:\Users\Admin\Downloads\Programs\ReadyJ2EE\app\code" unpackWARs="true" autoDeploy="true"&gt;
                &lt;Valve className="org.apache.catalina.valves.AccessLogValve" directory="logs" prefix="localhost_access_log." 
                suffix=".txt" pattern="%h %l %u %t %r %s %b" /&gt;
                &lt;!-- on definit le repertoire des sources du serveur (readyapp\src) --&gt;
                &lt;!-- c'est le repertoire contenant le fichier (index.html) --&gt;
                &lt;Context docBase="readyapp\src" path="" reloadable="true"/&gt;            
            &lt;/Host&gt; 
        &lt;/Engine&gt;
    &lt;/Service&gt;
    &lt;!-- ============================================ --&gt;
&lt;/Server&gt;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.3 - Éditer le programme HTML"><a class="Link9" href="#Tests">1.1.3 - Éditer le programme HTML</a></h2><br><h3 class="Title8 GTitle3">index.html</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="html">&lt;!-- ============================================ --&gt;
&lt;!DOCTYPE html&gt;
&lt;html lang="fr"&gt;
    &lt;!-- ============================================ --&gt;
    &lt;head&gt;
        &lt;title&gt;ReadyApp&lt;/title&gt;
    &lt;/head&gt;
    &lt;!-- ============================================ --&gt;
    &lt;body&gt;
        &lt;h1&gt;Bonjour tout le monde&lt;/h1&gt;
    &lt;/body&gt;
    &lt;!-- ============================================ --&gt;
&lt;/html&gt;
&lt;!-- ============================================ --&gt;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.4 - Démarrer le serveur"><a class="Link9" href="#Tests">1.1.4 - Démarrer le serveur</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="html">set "PATH=C:\Program Files\Apache Software Foundation\Tomcat 7.0\bin;%PATH%"</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">tomcat7w</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">Start</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.5 - Afficher la page web"><a class="Link9" href="#Tests">1.1.5 - Afficher la page web</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="http://localhost:8585/">http://localhost:8585/</a><br><br><div class="Img3 GImage"><img src="/Tutoriels/Web/J2EE/img/i_j2ee_test.png" alt="/Tutoriels/Web/J2EE/img/i_j2ee_test.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Servlet"><a class="Link3" href="#">Servlet</a></h1><div class="Body3"><br>Créer un servlet en J2EE.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1619190946627"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1619190946627");</script></div><br><h2 class="Title7 GTitle2" id="Servlet-Introduction"><a class="Link9" href="#Servlet">Introduction</a></h2><br>Un servlet est une classe Java qui permet de créer dynamiquement des données au sein d'un serveur HTTP. Ces données sont le plus généralement présentées au format HTML.<br><br><h2 class="Title7 GTitle2" id="Servlet-Structure du projet"><a class="Link9" href="#Servlet">Structure du projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">REPERTOIRE_PROJET -&gt; \code\
REPERTOIRE_RACINE -&gt; \code\readyapp\src\
REPERTOIRE_WEB    -&gt; \code\readyapp\src\WEB-INF\ (obligatoire)
REPERTOIRE_SOURCE -&gt; \code\readyapp\src\WEB-INF\sources\
REPERTOIRE_CLASSE -&gt; \code\readyapp\src\WEB-INF\classes\ (obligatoire)
FICHIER_INDEX     -&gt; \code\readyapp\src\index.html
FICHIER_CONFIG    -&gt; \code\readyapp\src\WEB-INF\web.xml
FICHIER_SERVLET   -&gt; \code\readyapp\src\WEB-INF\sources\GMain.java</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Servlet-Éditer le programme HTML"><a class="Link9" href="#Servlet">Éditer le programme HTML</a></h2><br><h3 class="Title8 GTitle3">index.html</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="html">&lt;!-- ============================================ --&gt;
&lt;html&gt;
    &lt;!-- ============================================ --&gt;
    &lt;head&gt;
        &lt;title&gt;Redirection&lt;/title&gt;
        &lt;!-- on cree une redirection --&gt;
        &lt;!-- de   : http://localhost:8585/ --&gt;
        &lt;!-- vers : http://localhost:8585/home/ --&gt;
        &lt;meta http-equiv="refresh" content="0; URL=home"/&gt;
    &lt;/head&gt;
    &lt;!-- ============================================ --&gt;
    &lt;body&gt;
    &lt;/body&gt;
    &lt;!-- ============================================ --&gt;
&lt;/html&gt;
&lt;!-- ============================================ --&gt;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Servlet-Configurer le servlet"><a class="Link9" href="#Servlet">Configurer le servlet</a></h2><br><h3 class="Title8 GTitle3">web.xml</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="xml">&lt;?xml version="1.0" encoding="UTF-8"?&gt;
&lt;!-- ============================================ --&gt;
&lt;web-app 
    xmlns="http://java.sun.com/xml/ns/javaee"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://java.sun.com/xml/ns/javaee http://java.sun.com/xml/ns/javaee/web-app_3_0.xsd"
    version="3.0"&gt;
    &lt;!-- ============================================ --&gt;
    &lt;!-- definition de la classe du servlet --&gt;
    &lt;!-- Nom    : GMain --&gt;
    &lt;!-- Classe : com.pkg.readyapp.GMain --&gt;
    &lt;!-- ============================================ --&gt;
    &lt;servlet&gt;
        &lt;!-- on definit le nom du servlet --&gt;
        &lt;servlet-name&gt;GMain&lt;/servlet-name&gt;
        &lt;!-- on definit la classe du servlet --&gt;
        &lt;servlet-class&gt;com.pkg.readyapp.GMain&lt;/servlet-class&gt;
    &lt;/servlet&gt;
    &lt;!-- ============================================ --&gt;
    &lt;!-- definition de l'url du servlet --&gt;
    &lt;!-- Nom : GMain --&gt;
    &lt;!-- URL : http://localhost:8585/home/ --&gt;
    &lt;!-- ============================================ --&gt;
    &lt;servlet-mapping&gt;
        &lt;!-- on definit le nom du servlet --&gt;
        &lt;servlet-name&gt;GMain&lt;/servlet-name&gt;
        &lt;!-- on definit l'url du servlet --&gt;
        &lt;url-pattern&gt;/home&lt;/url-pattern&gt;
    &lt;/servlet-mapping&gt;
    &lt;!-- ============================================ --&gt;
&lt;/web-app&gt;
&lt;!-- ============================================ --&gt;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Servlet-Éditer le servlet"><a class="Link9" href="#Servlet">Éditer le servlet</a></h2><br><h3 class="Title8 GTitle3">GMain.java</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
// on definit le package du servlet
package com.pkg.readyapp;
//===============================================
import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;
//===============================================
// on definit le servlet (GMain)
// en etendant la classe (HttpServlet)
public class GMain extends HttpServlet {
    //===============================================
    // on implement la methode (doGet) appelee
    // a chaque fois qu'on a l'url (http://localhost:8585/home/)
    //===============================================
    public void doGet(HttpServletRequest request, HttpServletResponse response)
    throws ServletException,IOException {
        // on definit le type du contenu de le page (text/html)
        response.setContentType("text/html");
        // on recupere le module d'impression (PrintWriter)
        PrintWriter lPrintWriter = response.getWriter();
        // on imprime la page html
        lPrintWriter.println("&lt;!DOCTYPE html&gt;");
        lPrintWriter.println("&lt;html lang='fr'&gt;");
        lPrintWriter.println("&lt;head&gt;");
        lPrintWriter.println("&lt;title&gt;ReadyApp&lt;/title&gt;");
        lPrintWriter.println("&lt;/head&gt;");
        lPrintWriter.println("&lt;body&gt;");
        // on affiche un message a l'ecran
        lPrintWriter.println("&lt;h1&gt;[Servlet] Bonjour tout le monde&lt;/h1&gt;");
        lPrintWriter.println("&lt;/body&gt;");
        lPrintWriter.println("&lt;/html&gt;");
    }
    //===============================================
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Servlet-Compiler le srvlet"><a class="Link9" href="#Servlet">Compiler le srvlet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">set "PATH=C:\Program Files\Java\jdk-15.0.1\bin;%PATH%"
set "PATH=C:\Program Files\Apache Software Foundation\Tomcat 7.0\bin;%PATH%"
set "CLASSPATH=C:\Program Files\Apache Software Foundation\Tomcat 7.0\lib\servlet-api.jar;%CLASSPATH%"
</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">javac sources\com\pkg\readyapp\GMain.java ^
-d classes ^
-sourcepath sources</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Servlet-Contenu du répertoire web"><a class="Link9" href="#Servlet">Contenu du répertoire web</a></h2><br><h3 class="Title8 GTitle3">WEB-INF</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">│   web.xml
│
├───classes
│   └───com
│       └───pkg
│           └───readyapp
│                   GMain.class
│
└───sources
    └───com
        └───pkg
            └───readyapp
                    GMain.java</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Servlet-Afficher la page web"><a class="Link9" href="#Servlet">Afficher la page web</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="http://localhost:8585/">http://localhost:8585/</a><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="http://localhost:8585/home/">http://localhost:8585/home/</a><br><br><div class="Img3 GImage"><img src="/Tutoriels/Web/J2EE/img/i_j2ee_servlet.png" alt="/Tutoriels/Web/J2EE/img/i_j2ee_servlet.png"></div><br></div></div></div></div><br>