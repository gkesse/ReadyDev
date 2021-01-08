<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer une pile de vues en PHP</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer une pile de vues en <b>PHP</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>PHP </b>est un langage de programmation orientée objet utilisé pour produire des pages Web dynamiques via un serveur HTTP. Il peut être aussi utilisé comme n'importe quel langage interprété de façon locale. Il a permis de créer un grand nombre de sites web célèbres, comme Facebook et Wikipédia. Il est considéré comme une des bases de la création de sites web dits dynamiques mais également des applications web.<br><br><div class="Img3 GImage"><img src="/Tutoriels/PHP/img/b_cours_stackwidget.png" alt="/Tutoriels/PHP/img/b_cours_stackwidget.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer une pile de vues en PHP"><a class="Link3" href="#">Créer une pile de vues en PHP</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer une pile de vues en PHP-Introduction"><a class="Link9" href="#Créer une pile de vues en PHP">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer une pile de vues en PHP (GStackWidget).<br><br><h2 class="Title7 GTitle2" id="Créer une pile de vues en PHP-Programme principal"><a class="Link9" href="#Créer une pile de vues en PHP">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GWindow.php</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="php">&lt;?php
//===============================================
public function load() {
    $this-&gt;m_widgetMap-&gt;addStack("home", "home", "Accueil");
    $this-&gt;m_widgetMap-&gt;addStack("home/login", "login", "Connexion");
    $this-&gt;m_widgetMap-&gt;addStack("home/sqlite", "sqlite", "SQLite");
    $this-&gt;m_widgetMap-&gt;addStack("home/opencv", "opencv", "OpenCV");
    $this-&gt;m_widgetMap-&gt;addStack("home/debug", "debug", "Debug");
}
//===============================================
?&gt;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une pile de vues en PHP-Création de la pile de vues"><a class="Link9" href="#Créer une pile de vues en PHP">Création de la pile de vues</a></h2><br><h3 class="Title8 GTitle3">GStackWidget.php</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="php">&lt;?php
//===============================================
public function addStack($key, $page, $title) {
    $this-&gt;m_pageMap[$key] = $page;
    $this-&gt;m_titleMap[$key] = $title;
}
//===============================================
public function getPage($key) {
    return GManager::Instance()-&gt;getValue($this-&gt;m_pageMap, $key, "");
}
//===============================================
public function getTitle($key) {
    return GManager::Instance()-&gt;getValue($this-&gt;m_titleMap, $key, "");
}
//===============================================
?&gt;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une pile de vues en PHP-Récupération du titre d'une vue"><a class="Link9" href="#Créer une pile de vues en PHP">Récupération du titre d'une vue</a></h2><br><h3 class="Title8 GTitle3">GWindow.php</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="php">&lt;?php
//===============================================
public function start() {
    $lApp = GManager::Instance()-&gt;getData()-&gt;app;
    $lApp-&gt;title = $this-&gt;m_widgetMap-&gt;getTitle($lApp-&gt;page_id);
}
//===============================================
?&gt;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une pile de vues en PHP-Affichage d'une vue"><a class="Link9" href="#Créer une pile de vues en PHP">Affichage d'une vue</a></h2><br><h3 class="Title8 GTitle3">GWindow.php</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="php">&lt;?php
//===============================================
public function run() {
    $lApp = GManager::Instance()-&gt;getData()-&gt;app;
    $lPage = $this-&gt;m_widgetMap-&gt;getPage($lApp-&gt;page_id);
    echo sprintf("&lt;div class='window_id'&gt;\n");
    GWidget::Create($lPage)-&gt;run();
    echo sprintf("&lt;/div&gt;\n");
}
//===============================================
?&gt;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une pile de vues en PHP-Résultat"><a class="Link9" href="#Créer une pile de vues en PHP">Résultat</a></h2><br><h3 class="Title8 GTitle3">Page d'accueil</h3><br><div class="Img3 GImage"><img src="/Tutoriels/PHP/img/i_cours_stackwidget.png" alt="/Tutoriels/PHP/img/i_cours_stackwidget.png"></div><br><h3 class="Title8 GTitle3">Page de login</h3><br><div class="Img3 GImage"><img src="/Tutoriels/PHP/img/i_cours_stackwidget_02.png" alt="/Tutoriels/PHP/img/i_cours_stackwidget_02.png"></div><br><h3 class="Title8 GTitle3">Page de débogage</h3><br><div class="Img3 GImage"><img src="/Tutoriels/PHP/img/i_cours_stackwidget_03.png" alt="/Tutoriels/PHP/img/i_cours_stackwidget_03.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1600429735365"><div class="Row26">List 1 &gt; PHP &gt; basics</div></div><script>loadList1("Loader_1600429735365","PHP","basics");</script></div><br></div></div></div></div><br>