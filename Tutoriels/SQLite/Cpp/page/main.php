<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Gérer une base de onnées SQLite en C++</div></a></div></div><div class="Body2 Orange"><b>SQLite</b> est un système de gestion de base données relationnelle.<br>Le but de ce tutoriel est de vous apprendre à gérer une base de données <b>SQLite </b>en <b>C++</b>.<br>Produit par <b>Gérard KESSE</b>.<br>&nbsp;<br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3">Le but de cette section est de vous présenter les outils nécessaires pour apprendre à gérer une base de données SQLite en C++.<br><br>Dans ce tutoriel, nous utiliserons:<br>- SQLite, comme système de gestion de base de données.<br><br><h3 class="Title8 GTitle3">Documentation sur SQLite</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.sqlite.org/cintro.html">https://www.sqlite.org/cintro.html</a><br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Création d'une base données"><a class="Link3" href="#">Création d'une base données</a></h1><div class="Body3">Le but de cette section est de vous apprendre la <span class="GColor1" style="color:lime;">Création d'une base données</span> avec SQLite.<br><br>Dans ce modèle, nous utilisons un fichier qui contient toutes nos requêtes SQL et un fichier qui contient la requête SQL à exécuter. Ensuite, nous chargeons la requête à exécuter et enfin, nous procédons à son exécution.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1589710939725"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1589710939725");</script></div><br><h2 class="Title7 GTitle2" id="Création d'une base données-Résultat de la création de base de données"><a class="Link9" href="#Création d'une base données">Résultat de la création de base de données</a></h2><br><div class="Img3 GImage"><img src="img/query.png" alt="img/query.png"></div><br><h2 class="Title7 GTitle2" id="Création d'une base données-Chargement d'une requête"><a class="Link9" href="#Création d'une base données">Chargement d'une requête</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
std::string GFile::getData(std::string fileId) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    std::ifstream* lFile = m_ifstreamMap[fileId];
    std::string lString((std::istreambuf_iterator&lt;char&gt;(*lFile)), std::istreambuf_iterator&lt;char&gt;());
    return lString;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Création d'une base données-Exécution de la requête"><a class="Link9" href="#Création d'une base données">Exécution de la requête</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GSQLite::execSQLite(std::string sqliteId, std::string sqlQuery, GSQLITE_EXEC callback, void* params) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    sqlite3* lSqlite = m_sqliteMap[sqliteId];
    char* lError;
    int lRes = sqlite3_exec(lSqlite, sqlQuery.c_str(), callback, params, &lError);
    if(lRes != SQLITE_OK){std::cout &lt;&lt; lError &lt;&lt; "\n"; sqlite3_free(lError); exit(0);}
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Création d'une base données-Chargement des résultats de l'exécution"><a class="Link9" href="#Création d'une base données">Chargement des résultats de l'exécution</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
int GSQLite::onCallbackSQLite(void* params, int argc, char** argv, char** cols) {
    GDebug::Instance()-&gt;write("GSQLite", "::", __FUNCTION__, "()", _EOA_);    
    sGParams* lParams = (sGParams*)params;
    if(lParams-&gt;flag == 1) {
        for(int i = 0; i &lt; argc; i++) {
            std::string lUpper = GString::Instance()-&gt;toUpper(cols[i]);
            lParams-&gt;headers.push_back(lUpper);
        }
    }
    lParams-&gt;flag = 0;
    std::vector&lt;std::string&gt; lValueMap;
    for(int i = 0; i &lt; argc; i++) {
        std::string lValue = argv[i] ? argv[i] : "NULL";
        lValueMap.push_back(lValue);
    }
    lParams-&gt;datas.push_back(lValueMap);
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Création d'une base données-Affichage des résultats de l'exécution"><a class="Link9" href="#Création d'une base données">Affichage des résultats de l'exécution</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GSQLite::showSQLite(std::string sqliteId) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    std::string lQueryFile = m_stringMap[sqliteId];
    sGParams* lParams = m_paramsMap[sqliteId];
    int lSize = lParams-&gt;headers.size();
    for(int i = 0; i &lt; lSize; i++) {
        std::string lValue = lParams-&gt;headers.at(i);
        printf("|");
        if(i == 0) {printf("%*s", -lParams-&gt;id, lValue.c_str());}
        else {printf("%*s", -lParams-&gt;col, lValue.c_str());}
    }
    if(lSize != 0) {printf("|\n");}
    for(int i = 0; i &lt; lSize; i++) {
        printf("|");
        if(i == 0) {for(int i = 0; i &lt; lParams-&gt;id; i++) {printf("-");}}
        else {for(int i = 0; i &lt; lParams-&gt;col; i++) {printf("-");}}
    }
    if(lSize != 0) {printf("|\n");}
    int lRows = lParams-&gt;datas.size();
    for(int j = 0; j &lt; lRows; j++) {
        std::vector&lt;std::string&gt; lValueMap = lParams-&gt;datas.at(j);
        for(int i = 0; i &lt; lSize; i++) {
            std::string lValue = lValueMap.at(i);
            printf("|");
            if(i == 0) {printf("%*s", -lParams-&gt;id, lValue.c_str());}
            else {printf("%*s", -lParams-&gt;col, lValue.c_str());}
        }
        printf("|\n");
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Création d'une base données-Requête de création de la table"><a class="Link9" href="#Création d'une base données">Requête de création de la table</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sql">-------------------------------------------------
-- creer la table users
-------------------------------------------------
create table users(
id integer primary key autoincrement not null,
email char(256),
password char(256)
);
-------------------------------------------------</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Création d'une base données-Requête d'insertion de données dans la table"><a class="Link9" href="#Création d'une base données">Requête d'insertion de données dans la table</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sql">-------------------------------------------------
-- inserer des donnees dans la table users
-------------------------------------------------
insert into users(email, password)
values("alice@readydev.com", "alice_pass");
insert into users(email, password)
values("pierre@readydev.com", "pierre_pass");
insert into users(email, password)
values("paul@readydev.com", "paul_pass");
-------------------------------------------------</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Création d'une base données-Requête d'affichage des données de la table"><a class="Link9" href="#Création d'une base données">Requête d'affichage des données de la table</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sql">-------------------------------------------------
-- afficher les donnees de la table users
-------------------------------------------------
select * from users;
-------------------------------------------------</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Création d'une fonction d'agrégation"><a class="Link3" href="#">Création d'une fonction d'agrégation</a></h1><div class="Body3">Le but de cette section est de vous apprendre la <span class="GColor1" style="color:lime;">Création d'une fonction d'agrégation</span> avec SQLite.<br><br>Une fonction d'agrégation est un opérateur qui peut être utilisé dans une requête SQL.<br><br>Dans cette configuration, nous avons besoin d'un opérateur <b>md5 </b>inexistant dans le système SQLite. Dans ce cas, nous sommes conduire à créer une fonction d’agrégation correspondant à cet opérateur que nous utilisons par la suite dans nos requêtes SQL.<br><br>L'opérateur md5 permet de crypter une chaine de caractères. Cela nous permettra par exemple de crypter le mot de passe d'un utilisateur afin qu'il ne soit pas lisible par un usurpateur.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1589718829648"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1589718829648");</script></div><br><h2 class="Title7 GTitle2" id="Création d'une fonction d'agrégation-Résultat de la création d'une fonction d'agrégation"><a class="Link9" href="#Création d'une fonction d'agrégation">Résultat de la création d'une fonction d'agrégation</a></h2><br><div class="Img3 GImage"><img src="img/aggregation.png" alt="img/aggregation.png"></div><br><h2 class="Title7 GTitle2" id="Création d'une fonction d'agrégation-Création d'une fonction d'agrégation"><a class="Link9" href="#Création d'une fonction d'agrégation">Création d'une fonction d'agrégation</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GSQLite::funcSQLite(sqlite3* sqliteDb, std::string funcName, GSQLITE_FUNC funcPtr, int argc) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    sqlite3_create_function(sqliteDb, funcName.c_str(), argc, SQLITE_UTF8, NULL, funcPtr, NULL, NULL);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Création d'une fonction d'agrégation-Définition de la fonction d'agrégation"><a class="Link9" href="#Création d'une fonction d'agrégation">Définition de la fonction d'agrégation</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GSQLite::onMd5(sqlite3_context* context, int argc, sqlite3_value **argv) {
    GDebug::Instance()-&gt;write("GSQLite", "::", __FUNCTION__, "()", _EOA_);    
    if(argc == 1) {
        std::string lText = (char*)sqlite3_value_text(argv[0]);
        char lCommand[256];
        char lOuput[256];
        sprintf(lCommand, "echo %s | md5sum | awk '{print $1}'", lText.c_str());
        GShell::Instance()-&gt;run(lCommand, lOuput, 255, 1);
        sqlite3_result_text(context, lOuput, -1, SQLITE_TRANSIENT);
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Création d'une fonction d'agrégation-Requête de cryptage du mot de passe"><a class="Link9" href="#Création d'une fonction d'agrégation">Requête de cryptage du mot de passe</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sql">-------------------------------------------------
-- cryptage du mot de passe de la table users
-------------------------------------------------
update users set password = md5(email || '-' || password);
-------------------------------------------------</xmp></pre></div><br></div></div></div></div><br>