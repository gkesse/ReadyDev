<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer un système d'administration en PHP</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer un système d'administration en <b>PHP</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>PHP </b>est un langage de programmation orientée objet utilisé pour produire des pages Web dynamiques via un serveur HTTP. Il peut être aussi utilisé comme n'importe quel langage interprété de façon locale. Il a permis de créer un grand nombre de sites web célèbres, comme Facebook et Wikipédia. Il est considéré comme une des bases de la création de sites web dits dynamiques mais également des applications web.<br><br><div class="Img3 GImage"><img src="/Tutoriels/PHP/img/b_cours_admin_system.png" alt="/Tutoriels/PHP/img/b_cours_admin_system.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un système d'administration en PHP"><a class="Link3" href="#">Créer un système d'administration en PHP</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration en PHP-Introduction"><a class="Link9" href="#Créer un système d'administration en PHP">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer un système d'administration en PHP.<br><br><h2 class="Title7 GTitle2" id="Créer un système d'administration en PHP-Programme principal"><a class="Link9" href="#Créer un système d'administration en PHP">Programme principal</a></h2><br><h3 class="Title8 GTitle3">index.php</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="php">&lt;?php   
//===============================================
require $_SERVER["DOCUMENT_ROOT"]."/webroot/php/class/GAutoload.php";
//===============================================
GProcess::Instance()-&gt;run();
//===============================================
?&gt;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration en PHP-Création de la page web"><a class="Link9" href="#Créer un système d'administration en PHP">Création de la page web</a></h2><br><h3 class="Title8 GTitle3">GProcess.php</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="php">&lt;?php
//===============================================
public function run() {
    GManager::Instance()-&gt;loadData();
    GWidget::Create("header")-&gt;run();
    GWidget::Create("body")-&gt;run();
    GWidget::Create("footer")-&gt;run();
}
//===============================================
?&gt;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration en PHP-Création du système d'administration"><a class="Link9" href="#Créer un système d'administration en PHP">Création du système d'administration</a></h2><br><h3 class="Title8 GTitle3">GBody.php</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="php">&lt;?php   
//===============================================
public function run() {
    $lApp = GManager::Instance()-&gt;getData()-&gt;app;
    $lWindow = GWidget::Create("window");
    $lWindow-&gt;load();
    $lWindow-&gt;start();
    GSQLite::Instance();
    // body
    $this-&gt;start();
    GWidget::Create("titlebar")-&gt;run();
    GWidget::Create("spacev")-&gt;space(10);
    GWidget::Create("addresskey")-&gt;run();
    GWidget::Create("spacev")-&gt;space(10);
    $lWindow-&gt;run();
    $this-&gt;end();
}
//===============================================
?&gt;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration en PHP-Ajout d'une page"><a class="Link9" href="#Créer un système d'administration en PHP">Ajout d'une page</a></h2><br><h3 class="Title8 GTitle3">GWindow.php</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="php">&lt;?php   
//===============================================
public function load() {
    $this-&gt;m_widgetMap-&gt;addItem2("home", "home", "Accueil");
    $this-&gt;m_widgetMap-&gt;addItem2("home/login", "login", "Connexion");
    $this-&gt;m_widgetMap-&gt;addItem2("home/sqlite", "sqlite", "SQLite");
    $this-&gt;m_widgetMap-&gt;addItem2("home/opencv", "opencv", "OpenCV");
    $this-&gt;m_widgetMap-&gt;addItem2("home/debug", "debug", "Debug");
}
//===============================================
?&gt;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration en PHP-Affichage d'une page"><a class="Link9" href="#Créer un système d'administration en PHP">Affichage d'une page</a></h2><br><h3 class="Title8 GTitle3">GWindow.php</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="php">&lt;?php   
//===============================================
public function run() {
    $lApp = GManager::Instance()-&gt;getData()-&gt;app;
    $lPage = $this-&gt;m_widgetMap-&gt;getPage($lApp-&gt;page_id);
    echo sprintf("&lt;div class='window_id'&gt;\n");
    GWidget::Create($lPage)-&gt;run();
    echo sprintf("&lt;/div&gt;\n");
}
//===============================================
?&gt;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un système d'administration en PHP-Résultat"><a class="Link9" href="#Créer un système d'administration en PHP">Résultat</a></h2><br><h3 class="Title8 GTitle3">Page d'accueil</h3><br><div class="Img3 GImage"><img src="/Tutoriels/PHP/img/i_cours_admin_system.png" alt="/Tutoriels/PHP/img/i_cours_admin_system.png"></div><br><h3 class="Title8 GTitle3">Page de connexion</h3><br><div class="Img3 GImage"><img src="/Tutoriels/PHP/img/i_cours_admin_system_02.png" alt="/Tutoriels/PHP/img/i_cours_admin_system_02.png"></div><br><h3 class="Title8 GTitle3">Page de débogage</h3><br><div class="Img3 GImage"><img src="/Tutoriels/PHP/img/i_cours_admin_system_03.png" alt="/Tutoriels/PHP/img/i_cours_admin_system_03.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1600429735365"><div class="Row26">List 1 &gt; PHP &gt; basics</div></div><script>loadList1("Loader_1600429735365","PHP","basics");</script></div><br></div></div></div></div><br>