<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Exécuter une requête d'affichage de données SQLite en C++</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à exécuter une requête d'affichage de données <b>SQLite </b>en <b>C++</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>SQLite </b>est une bibliothèque écrite en langage C qui propose un moteur de base de données relationnelle accessible par le langage SQL. SQLite implémente en grande partie le standard SQL-92 et des propriétés ACID. Sa particularité est de ne pas reproduire le schéma habituel client-serveur mais d'être directement intégrée aux programmes. L'intégralité de la base de données (déclarations, tables, index et données) est stockée dans un fichier indépendant de la plateforme.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Cpp/img/b_sqlite_show_query.png" alt="/Tutoriels/Cpp/img/b_sqlite_show_query.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Exécuter une requête d'affichage de données SQLite C++"><a class="Link3" href="#">Exécuter une requête d'affichage de données SQLite C++</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Exécuter une requête d'affichage de données SQLite C++-Introduction"><a class="Link9" href="#Exécuter une requête d'affichage de données SQLite C++">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons d'exécuter une requête d'affichage de données SQLite (CONFIG_CPP).<br><br><h2 class="Title7 GTitle2" id="Exécuter une requête d'affichage de données SQLite C++-Programme principal"><a class="Link9" href="#Exécuter une requête d'affichage de données SQLite C++">Programme principal</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">GSQLite::Instance()-&gt;queryShow("\
select * from CONFIG_CPP \
order by CONFIG_KEY \
", 1, "20;30", "20");</xmp></pre></div><br><h3 class="Title8 GTitle3">GSQLite.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
struct _sGSQLiteShow {
    int on_header;
    std::string width_map;
    std::string default_width;
    int on_sep;
    int col_count;
};
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Exécuter une requête d'affichage de données SQLite C++-Affichage d'une requête"><a class="Link9" href="#Exécuter une requête d'affichage de données SQLite C++">Affichage d'une requête</a></h2><br><h3 class="Title8 GTitle3">GSQLite.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GSQLite::queryShow(std::string sql, int onHeader, std::string widthMap, std::string defaultWidth) {
    sGSQLiteShow lParams = {onHeader, widthMap, defaultWidth, 1, 0};
    sqlite3* lDb = connect();
    char* lError;
    int lAns = sqlite3_exec(lDb, sql.c_str(), onShow, &lParams, &lError);
    if(lAns != SQLITE_OK) {
        printf("[GSQLite] erreur queryShow : %s\n", sqlite3_errmsg(lDb));
        sqlite3_free(lError);
        exit(0); 
    }
    sqlite3_close(lDb);
    if(lParams.col_count != 0) {
        printf("+-");
        for(int i = 0; i &lt; lParams.col_count; i++) {
            int lWidth = std::stoi(GManager::Instance()-&gt;splitGet(widthMap, ';', i, defaultWidth));
            if(i != 0 ) {printf("-+-");}
            for(int i = 0; i &lt; lWidth; i++) {printf("-");}
        }
        printf("-+");
        printf("\n");
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Exécuter une requête d'affichage de données SQLite C++-Fonction de rappel"><a class="Link9" href="#Exécuter une requête d'affichage de données SQLite C++">Fonction de rappel</a></h2><br><h3 class="Title8 GTitle3">GSQLite.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
int GSQLite::onShow(void* params, int colCount, char** colValue, char** colName) {
    sGSQLiteShow* lParams = (sGSQLiteShow*)params;
    std::string lWidthMap = lParams-&gt;width_map;
    std::string lWidthDefault = lParams-&gt;default_width;
    if(lParams-&gt;on_header == 1) {
        printf("+-");
        for(int i = 0; i &lt; colCount; i++) {
            int lWidth = std::stoi(GManager::Instance()-&gt;splitGet(lWidthMap, ';', i, lWidthDefault));
            if(i != 0 ) {printf("-+-");}
            for(int i = 0; i &lt; lWidth; i++) {printf("-");}
        }
        printf("-+");
        printf("\n");
        printf("| ");
        for(int i = 0; i &lt; colCount; i++) {
            int lWidth = std::stoi(GManager::Instance()-&gt;splitGet(lWidthMap, ';', i, lWidthDefault));
            char* lColName = colName[i];
            if(i != 0) {printf(" | ");}
            {printf("%-*s", lWidth, lColName);}
        }
        printf(" |");
        printf("\n");
    }
    if(lParams-&gt;on_sep == 1) {
        printf("+-");
        for(int i = 0; i &lt; colCount; i++) {
            int lWidth = std::stoi(GManager::Instance()-&gt;splitGet(lWidthMap, ';', i, lWidthDefault));
            if(i != 0 ) {printf("-+-");}
            for(int i = 0; i &lt; lWidth; i++) {printf("-");}
        }
        printf("-+");
        printf("\n");
        lParams-&gt;col_count = colCount;
    }
    printf("| ");
    for(int i = 0; i &lt; colCount; i++) {
        int lWidth = std::stoi(GManager::Instance()-&gt;splitGet(lWidthMap, ';', i, lWidthDefault));
        const char* lCoValue = colValue[i] ? colValue[i] : "NULL";
        if(i != 0) {printf(" | ");}
        printf("%-*s", lWidth, lCoValue);
    }
    printf(" |");
    printf("\n");
    lParams-&gt;on_header = 0;
    lParams-&gt;on_sep = 0;
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Exécuter une requête d'affichage de données SQLite C++-Résultat"><a class="Link9" href="#Exécuter une requête d'affichage de données SQLite C++">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Cpp/img/i_sqlite_show_query.png" alt="/Tutoriels/Cpp/img/i_sqlite_show_query.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Base de données SQLite</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1600474250946"><div class="Row26">List 1 &gt; Cpp &gt; sqlite</div></div><script>loadList1("Loader_1600474250946","Cpp","sqlite");</script></div><br></div></div></div></div><br>