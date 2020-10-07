<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Lire une colonne de données SQLite en C++</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à lire une colonne de données <b>SQLite </b>en <b>C++</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>SQLite </b>est une bibliothèque écrite en langage C qui propose un moteur de base de données relationnelle accessible par le langage SQL. SQLite implémente en grande partie le standard SQL-92 et des propriétés ACID. Sa particularité est de ne pas reproduire le schéma habituel client-serveur mais d'être directement intégrée aux programmes. L'intégralité de la base de données (déclarations, tables, index et données) est stockée dans un fichier indépendant de la plateforme.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Cpp/img/b_sqlite_column.png" alt="/Tutoriels/Cpp/img/b_sqlite_column.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Lire une colonne de données SQLite C++"><a class="Link3" href="#">Lire une colonne de données SQLite C++</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Lire une colonne de données SQLite C++-Introduction"><a class="Link9" href="#Lire une colonne de données SQLite C++">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de lire une colonne de données SQLite (lire les clés de la table CONFIG_CPP).<br><br><h2 class="Title7 GTitle2" id="Lire une colonne de données SQLite C++-Programme principal"><a class="Link9" href="#Lire une colonne de données SQLite C++">Programme principal</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">std::vector&lt;std::string&gt; lData = GSQLite::Instance()-&gt;queryCol("\
select CONFIG_KEY from CONFIG_CPP \
");</xmp></pre></div><br><h3 class="Title8 GTitle3">GSQLite.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
struct _sGSQLiteCol {
    std::vector&lt;std::string&gt; data;
    int col;
};
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Lire une colonne de données SQLite C++-Lecture d'une colonne de données"><a class="Link9" href="#Lire une colonne de données SQLite C++">Lecture d'une colonne de données</a></h2><br><h3 class="Title8 GTitle3">GSQLite.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
std::vector&lt;std::string&gt; GSQLite::queryCol(std::string sql) {
    sGSQLiteCol lParams; lParams.col = 0;
    sqlite3* lDb = connect();
    char* lError;
    int lAns = sqlite3_exec(lDb, sql.c_str(), onCol, &lParams, &lError);
    if(lAns != SQLITE_OK) {
        printf("[GSQLite] error queryCol() : %s\n", sqlite3_errmsg(lDb));
        sqlite3_free(lError);
        exit(0); 
    }
    sqlite3_close(lDb);
    return lParams.data;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Lire une colonne de données SQLite C++-Fonction de rappel"><a class="Link9" href="#Lire une colonne de données SQLite C++">Fonction de rappel</a></h2><br><h3 class="Title8 GTitle3">GSQLite.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
int GSQLite::onCol(void* params, int colCount, char** colValue, char** colName) {
    sGSQLiteCol* lParams = (sGSQLiteCol*)params;
    for(int i = 0; i &lt; colCount; i++) {
        if(i == lParams-&gt;col) {
            const char* lCoValue = colValue[i] ? colValue[i] : "NULL";
            lParams-&gt;data.push_back(lCoValue);
            break;
        }
    }
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Lire une colonne de données SQLite C++-Résultat"><a class="Link9" href="#Lire une colonne de données SQLite C++">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Cpp/img/i_sqlite_column.png" alt="/Tutoriels/Cpp/img/i_sqlite_column.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Base de données SQLite</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1600474250946"><div class="Row26">List 1 &gt; Cpp &gt; sqlite</div></div><script>loadList1("Loader_1600474250946","Cpp","sqlite");</script></div><br></div></div></div></div><br>