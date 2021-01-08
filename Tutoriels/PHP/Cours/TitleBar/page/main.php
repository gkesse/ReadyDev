<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer une barre de titre en PHP</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer une barre de titre en <b>PHP</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>PHP </b>est un langage de programmation orientée objet utilisé pour produire des pages Web dynamiques via un serveur HTTP. Il peut être aussi utilisé comme n'importe quel langage interprété de façon locale. Il a permis de créer un grand nombre de sites web célèbres, comme Facebook et Wikipédia. Il est considéré comme une des bases de la création de sites web dits dynamiques mais également des applications web.<br><br><div class="Img3 GImage"><img src="/Tutoriels/PHP/img/b_cours_titlebar.png" alt="/Tutoriels/PHP/img/b_cours_titlebar.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer une barre de titre en PHP"><a class="Link3" href="#">Créer une barre de titre en PHP</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer une barre de titre en PHP-Introduction"><a class="Link9" href="#Créer une barre de titre en PHP">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer une barre de titre en PHP (GTitleBar).<br><br><h2 class="Title7 GTitle2" id="Créer une barre de titre en PHP-Création de la barre de titre"><a class="Link9" href="#Créer une barre de titre en PHP">Création de la barre de titre</a></h2><br><h3 class="Title8 GTitle3">GTitleBar.php</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="php">&lt;?php
//===============================================
public function run() {
    $lApp = GManager::Instance()-&gt;getData()-&gt;app;
    echo sprintf("&lt;div class='block_id'&gt;\n");
    echo sprintf("&lt;div class='titlebar_id'&gt;\n");
    echo sprintf("&lt;div class='logo'&gt;&lt;img src='%s'/&gt;&lt;/div&gt;\n", $lApp-&gt;logo_flat);
    echo sprintf("&lt;div class='app_name'&gt;%s&lt;/div&gt;\n", $lApp-&gt;app_name);
    echo sprintf("&lt;div class='title'&gt;%s&lt;/div&gt;\n", $lApp-&gt;title);
    echo sprintf("&lt;a href='/home/login'&gt;&lt;div class='login' title='Connexion'&gt;
    &lt;i class='fa fa-user'&gt;&lt;/i&gt;&lt;/div&gt;&lt;/a&gt;\n");
    echo sprintf("&lt;/div&gt;\n");
    echo sprintf("&lt;/div&gt;\n");
}
//===============================================
?&gt;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une barre de titre en PHP-Mise en forme de la barre de titre"><a class="Link9" href="#Créer une barre de titre en PHP">Mise en forme de la barre de titre</a></h2><br><h3 class="Title8 GTitle3">style.css</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="css">/* ============================================== */
/* titlebar */
.titlebar_id {
    position: relative;
    border-bottom: 5px solid #305030;
    padding-bottom: 5px;
}
.titlebar_id .logo {
    display: inline-block;
    vertical-align: middle;
    text-align: center;
    height: 20px;
}
.titlebar_id .logo img {
    width: auto;
    height: 20px;
}
.titlebar_id .app_name {
    display: inline-block;
    vertical-align: middle;
}
.titlebar_id .title {
    position: absolute;
    left: 95px;
    right: 30px;
    top: 0px;
    bottom: 0px;
    display: inline-block;
    vertical-align: middle;
    text-align: center;
}
.titlebar_id .login {
    position: absolute;
    top: 0px;
    bottom: 0px;
    right: 0px;
    display: inline-block;
    vertical-align: middle;
    border: 2px solid #305030;
    background-color: #305030;
    width: 25px;
    height: 25px;
    border-radius: 50%;
    text-align: center;
    cursor: pointer;
}
/* ============================================== */</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une barre de titre en PHP-Résultat"><a class="Link9" href="#Créer une barre de titre en PHP">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/PHP/img/i_cours_titlebar.png" alt="/Tutoriels/PHP/img/i_cours_titlebar.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1600429735365"><div class="Row26">List 1 &gt; PHP &gt; basics</div></div><script>loadList1("Loader_1600429735365","PHP","basics");</script></div><br></div></div></div></div><br>