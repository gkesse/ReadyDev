<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer un sélecteur d'adresse en PHP</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer un sélecteur d'adresse en <b>PHP</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>PHP </b>est un langage de programmation orientée objet utilisé pour produire des pages Web dynamiques via un serveur HTTP. Il peut être aussi utilisé comme n'importe quel langage interprété de façon locale. Il a permis de créer un grand nombre de sites web célèbres, comme Facebook et Wikipédia. Il est considéré comme une des bases de la création de sites web dits dynamiques mais également des applications web.<br><br><div class="Img3 GImage"><img src="/Tutoriels/PHP/img/b_cours_addresskey.png" alt="/Tutoriels/PHP/img/b_cours_addresskey.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un sélecteur d'adresse en PHP"><a class="Link3" href="#">Créer un sélecteur d'adresse en PHP</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer un sélecteur d'adresse en PHP-Introduction"><a class="Link9" href="#Créer un sélecteur d'adresse en PHP">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer un sélecteur d'adresse en PHP (GAddressKey).<br><br><h2 class="Title7 GTitle2" id="Créer un sélecteur d'adresse en PHP-Création du sélecteur d'adresse"><a class="Link9" href="#Créer un sélecteur d'adresse en PHP">Création du sélecteur d'adresse</a></h2><br><h3 class="Title8 GTitle3">GAddressKey.php</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="php">&lt;?php
//===============================================
public function run() {
    $lApp = GManager::Instance()-&gt;getData()-&gt;app;
    $lMap = explode("/", $lApp-&gt;page_id);
    $lHref = "/";
    
    echo sprintf("&lt;div class='addresskey_id'&gt;\n");
    
    for($i = 0; $i &lt; count($lMap); $i++) {
        if($i != 0) {
            echo sprintf("&lt;i class='fa fa-chevron-right' style='font-size:16px;padding:0px 5px;'&gt;&lt;/i&gt;\n");
        }
        $lKey = $lMap[$i];
        if($i != 0) {$lHref .= "/";}
        $lHref .= $lKey;
        echo sprintf("&lt;a href='%s'&gt;&lt;div style='display: inline-block;'&gt;%s&lt;/div&gt;&lt;/a&gt;\n", $lHref, $lKey);
    }
    
    echo sprintf("&lt;/div&gt;\n");
}
//===============================================
?&gt;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un sélecteur d'adresse en PHP-Résultat"><a class="Link9" href="#Créer un sélecteur d'adresse en PHP">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/PHP/img/i_cours_addresskey.png" alt="/Tutoriels/PHP/img/i_cours_addresskey.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1600429735365"><div class="Row26">List 1 &gt; PHP &gt; basics</div></div><script>loadList1("Loader_1600429735365","PHP","basics");</script></div><br></div></div></div></div><br>