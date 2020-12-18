<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer un projet web CGI en C++</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer un projet web CGI en <b>C++</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>C++</b> est un langage de programmation compilé permettant la programmation sous de multiples paradigmes (comme la programmation procédurale, orientée objet ou générique). Ses bonnes performances, et sa compatibilité avec le C en font un des langages de programmation les plus utilisés dans les applications où la performance est critique.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Cpp/img/b_cgi_project.png" alt="/Tutoriels/Cpp/img/b_cgi_project.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un projet web CGI en C++"><a class="Link3" href="#">Créer un projet web CGI en C++</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer un projet web CGI en C++-Introduction"><a class="Link9" href="#Créer un projet web CGI en C++">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer un projet web CGI en C++ qui affiche un message à l'écran (Bonjour tout le monde).<br><br><h2 class="Title7 GTitle2" id="Créer un projet web CGI en C++-Programme principal"><a class="Link9" href="#Créer un projet web CGI en C++">Programme principal</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include &lt;iostream&gt;
//===============================================
int main(int argc, char** argv) {
    printf("Content-type: text/html\n\n");
    printf("&lt;h1&gt;Bonjour tout le monde&lt;/h1&gt;\n");
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet web CGI en C++-Fichier Makefile"><a class="Link9" href="#Créer un projet web CGI en C++">Fichier Makefile</a></h2><br><h3 class="Title8 GTitle3">Makefile.cpp.mak</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="makefile">GSRC = $(GPROJECT_SRC)
GBIN = $(GPROJECT_WEB)
GBUILD = build
GTARGET = $(GPROJECT_BIN)

GINCS = \
    -I$(GSRC)\include \
    
GLIBS = \

GOBJS = \
    $(patsubst $(GSRC)/%.cpp, $(GBUILD)/%.o, $(wildcard $(GSRC)/*.cpp)) \
    $(patsubst $(GSRC)/manager/%.cpp, $(GBUILD)/%.o, $(wildcard $(GSRC)/manager/*.cpp)) \

GCFLAGS = \
    -std=gnu++11 \
    
all: compile run

compile: $(GOBJS)
	@if not exist $(GBIN) ( mkdir $(GBIN) )
	@g++ $(GCFLAGS) -o $(GTARGET) $(GOBJS) $(GLIBS) 
$(GBUILD)/%.o: $(GSRC)/%.cpp
	@if not exist $(GBUILD) ( mkdir $(GBUILD) )
	@g++ $(GCFLAGS) -c $&lt; -o $@ $(GINCS)
$(GBUILD)/%.o: $(GSRC)/manager/%.cpp
	@if not exist $(GBUILD) ( mkdir $(GBUILD) )
	@g++ $(GCFLAGS) -c $&lt; -o $@ $(GINCS)
run:
	@$(GTARGET) $(argv)
clean_exe: 
	@if not exist $(GBIN) ( mkdir $(GBIN) )
	@del /s /q $(GTARGET)
clean: 
	@if not exist $(GBIN) ( mkdir $(GBIN) )
	@if not exist $(GBUILD) ( mkdir $(GBUILD) )
	@del /s /q $(GBUILD)\*.o $(GTARGET)</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet web CGI en C++-Variables d'environnement"><a class="Link9" href="#Créer un projet web CGI en C++">Variables d'environnement</a></h2><br><h3 class="Title8 GTitle3">env.bat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off
::===============================================
set "PATH=C:\MinGW\bin;%PATH%" 
::===============================================
set "GPROJECT_ROOT=C:\Users\Admin\Downloads\Programs"
set "GPROJECT_PATH=%GPROJECT_ROOT%\ReadyCpp"
set "GPROJECT_SRC=%GPROJECT_PATH%\cgi\code\web\src"
set "GPROJECT_WEB=%GPROJECT_PATH%\cgi\code\web\root"
set "GPROJECT_BIN=%GPROJECT_WEB%\index.cgi"
::===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">make_c.bat</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">@echo off
::===============================================
set "args=%*"             
setlocal enabledelayedexpansion
set "lArgs=%*"             
set "lArgs=!lArgs:*%1 =!"  
endlocal && ( set "args=%lArgs%" )
::===============================================
mingw32-make -f Makefile.cpp.mak %1 argv=%args%
::===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet web CGI en C++-Compilation automatique"><a class="Link9" href="#Créer un projet web CGI en C++">Compilation automatique</a></h2><br><h3 class="Title8 GTitle3">Terminal</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">make_c all</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet web CGI en C++-Compilation manuelle"><a class="Link9" href="#Créer un projet web CGI en C++">Compilation manuelle</a></h2><br><h3 class="Title8 GTitle3">Terminal</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">del /s /q build\*.o PROJECT_ROOT\root\index.cgi
g++ -std=gnu++11  -c PROJECT_ROOT\src\main.cpp -o build/main.o 
g++ -std=gnu++11  -o PROJECT_ROOT\root\index.cgi  build/main.o</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet web CGI en C++-Autorisation du module CGI"><a class="Link9" href="#Créer un projet web CGI en C++">Autorisation du module CGI</a></h2><br><h3 class="Title8 GTitle3">httpd.conf</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">LoadModule cgi_module modules/mod_cgi.so</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet web CGI en C++-Autorisation du module rewrite"><a class="Link9" href="#Créer un projet web CGI en C++">Autorisation du module rewrite</a></h2><br><h3 class="Title8 GTitle3">httpd.conf</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">LoadModule rewrite_module modules/mod_rewrite.so</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet web CGI en C++-Autorisation des machines virtuelles"><a class="Link9" href="#Créer un projet web CGI en C++">Autorisation des machines virtuelles</a></h2><br><h3 class="Title8 GTitle3">httpd.conf</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">LoadModule vhost_alias_module modules/mod_vhost_alias.so</xmp></pre></div><br><h3 class="Title8 GTitle3">httpd.conf</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Include conf/extra/httpd-vhosts.conf</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet web CGI en C++-Configuration du port du serveur"><a class="Link9" href="#Créer un projet web CGI en C++">Configuration du port du serveur</a></h2><br><h3 class="Title8 GTitle3">httpd.conf</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">Listen 0.0.0.0:8833
Listen [::0]:8833</xmp></pre></div><br><br><h2 class="Title7 GTitle2" id="Créer un projet web CGI en C++-Configuration de la racine du serveur"><a class="Link9" href="#Créer un projet web CGI en C++">Configuration de la racine du serveur</a></h2><br><h3 class="Title8 GTitle3">httpd-vhosts.conf</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">#================================================
&lt;VirtualHost *:8833&gt;
    ServerName readydev.ovh
    ServerAlias readydev.ovh
    ServerAdmin gerard.kesse@outlook.fr
    DocumentRoot "C:\Users\Admin\Downloads\Programs\ReadyCpp\cgi\code\web\root"
    ScriptAlias /cgi-bin/ "C:\Users\Admin\Downloads\Programs\ReadyCpp\cgi\code\web\root"
    &lt;Directory "C:\Users\Admin\Downloads\Programs\ReadyCpp\cgi\code\web\root"&gt;
        DirectoryIndex index.cgi
        AddHandler cgi-script cgi pl
        Options All
        AllowOverride All
        Order allow,deny
        allow from all
        Require all granted
    &lt;/Directory&gt;
&lt;/VirtualHost&gt;
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un projet web CGI en C++-Lancement du serveur"><a class="Link9" href="#Créer un projet web CGI en C++">Lancement du serveur</a></h2><br><h3 class="Title8 GTitle3">Windows</h3><br>WampServer → Redémarrer les services<br><br><h2 class="Title7 GTitle2" id="Créer un projet web CGI en C++-Accès à la page web"><a class="Link9" href="#Créer un projet web CGI en C++">Accès à la page web</a></h2><br><h3 class="Title8 GTitle3">Navigateur</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="http://localhost:8833/">http://localhost:8833/</a><br><br><h2 class="Title7 GTitle2" id="Créer un projet web CGI en C++-Résultat"><a class="Link9" href="#Créer un projet web CGI en C++">Résultat</a></h2><br><h3 class="Title8 GTitle3">Structure du projet web</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Cpp/img/i_cgi_project.png" alt="/Tutoriels/Cpp/img/i_cgi_project.png"></div><br><h3 class="Title8 GTitle3">Message console</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Cpp/img/i_cgi_project_02.png" alt="/Tutoriels/Cpp/img/i_cgi_project_02.png"></div><br><h3 class="Title8 GTitle3">Page web</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Cpp/img/i_cgi_project_03.png" alt="/Tutoriels/Cpp/img/i_cgi_project_03.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Développement Web CGI</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1608332299964"><div class="Row26">List 1 &gt; Cpp &gt; cgi</div></div><script>loadList1("Loader_1608332299964","Cpp","cgi");</script></div><br></div></div></div></div><br>