<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Afficher les données d'une table SQLite en C++</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à afficher les données d'une table <b>SQLite </b>en <b>C++</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>SQLite </b>est une bibliothèque écrite en langage C qui propose un moteur de base de données relationnelle accessible par le langage SQL. SQLite implémente en grande partie le standard SQL-92 et des propriétés ACID. Sa particularité est de ne pas reproduire le schéma habituel client-serveur mais d'être directement intégrée aux programmes. L'intégralité de la base de données (déclarations, tables, index et données) est stockée dans un fichier indépendant de la plateforme.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Cpp/img/b_sqlite_show.png" alt="/Tutoriels/Cpp/img/b_sqlite_show.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Afficher les données d'une table SQLite C++"><a class="Link3" href="#">Afficher les données d'une table SQLite C++</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Afficher les données d'une table SQLite C++-Introduction"><a class="Link9" href="#Afficher les données d'une table SQLite C++">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons d'afficher les données d'une table SQLite (CONFIG_CPP).<br><br><h2 class="Title7 GTitle2" id="Afficher les données d'une table SQLite C++-Programme principal"><a class="Link9" href="#Afficher les données d'une table SQLite C++">Programme principal</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">GSQLite::Instance()-&gt;queryShow("\
select * from CONFIG_CPP \
order by CONFIG_KEY \
", 1, "20;30", "20");</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Afficher les données d'une table SQLite C++-Résultat"><a class="Link9" href="#Afficher les données d'une table SQLite C++">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Cpp/img/i_sqlite_show.png" alt="/Tutoriels/Cpp/img/i_sqlite_show.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Base de données SQLite</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1600474250946"><div class="Row26">List 1 &gt; Cpp &gt; sqlite</div></div><script>loadList1("Loader_1600474250946","Cpp","sqlite");</script></div><br></div></div></div></div><br>