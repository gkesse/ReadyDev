<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer un gestionnaire de configurations en C++</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer un gestionnaire de configurations en <b>C++</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>C++</b> est un langage de programmation compilé permettant la programmation sous de multiples paradigmes (comme la programmation procédurale, orientée objet ou générique). Ses bonnes performances, et sa compatibilité avec le C en font un des langages de programmation les plus utilisés dans les applications où la performance est critique.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Cpp/img/b_cours_config.png" alt="/Tutoriels/Cpp/img/b_cours_config.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un gestionnaire de configurations C++"><a class="Link3" href="#">Créer un gestionnaire de configurations C++</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer un gestionnaire de configurations C++-Introduction"><a class="Link9" href="#Créer un gestionnaire de configurations C++">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer un gestionnaire de configurations (GConfig).<br><br><h2 class="Title7 GTitle2" id="Créer un gestionnaire de configurations C++-Programme principal"><a class="Link9" href="#Créer un gestionnaire de configurations C++">Programme principal</a></h2><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">std::string lLast = GConfig::Instance()-&gt;getData("CPP_ADMIN_ID");
GConfig::Instance()-&gt;setData("CPP_ADMIN_ID", lAnswer);
GConfig::Instance()-&gt;saveData("CPP_ADMIN_ID");
GConfig::Instance()-&gt;loadData("CPP_ADMIN_ID");</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un gestionnaire de configurations C++-Dictionnaire de configurations"><a class="Link9" href="#Créer un gestionnaire de configurations C++">Dictionnaire de configurations</a></h2><br><h3 class="Title8 GTitle3">GConfig.h</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">std::map&lt;std::string, std::string&gt; m_dataMap;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un gestionnaire de configurations C++-Ajouter une configuration"><a class="Link9" href="#Créer un gestionnaire de configurations C++">Ajouter une configuration</a></h2><br><h3 class="Title8 GTitle3">GConfig.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GConfig::setData(std::string key, std::string value) {
    m_dataMap[key] = value;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un gestionnaire de configurations C++-Lire une configuration"><a class="Link9" href="#Créer un gestionnaire de configurations C++">Lire une configuration</a></h2><br><h3 class="Title8 GTitle3">GConfig.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
std::string GConfig::getData(std::string key) {
    return m_dataMap[key];
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un gestionnaire de configurations C++-Sauvegarder une configuration"><a class="Link9" href="#Créer un gestionnaire de configurations C++">Sauvegarder une configuration</a></h2><br><h3 class="Title8 GTitle3">GConfig.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GConfig::saveData(std::string key, std::string value) {
    if(value == "") value = m_dataMap[key];
    if(countData(key) == 0) {insertData(key, value);}
    else {updateData(key, value);}
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un gestionnaire de configurations C++-Charger une configuration"><a class="Link9" href="#Créer un gestionnaire de configurations C++">Charger une configuration</a></h2><br><h3 class="Title8 GTitle3">GConfig.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GConfig::loadData(std::string key) {
    char lSql[B_QUERY+1];
    sprintf(lSql, ""
    "select CONFIG_VALUE\n"
    "from CONFIG_DATA\n"
    "where CONFIG_KEY='%s'\n"
    "", key.c_str());
    std::string lData = GSQLiteMgr::Instance()-&gt;queryValue("", lSql);
    m_dataMap[key] = lData;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un gestionnaire de configurations C++-Vérifier l'existance d'une configuration"><a class="Link9" href="#Créer un gestionnaire de configurations C++">Vérifier l'existance d'une configuration</a></h2><br><h3 class="Title8 GTitle3">GConfig.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
int GConfig::countData(std::string key) {
    char lSql[B_QUERY+1];
    sprintf(lSql, ""
    "select count(*)\n"
    "from CONFIG_DATA\n"
    "where CONFIG_KEY='%s'\n"
    "", key.c_str());
    std::string lCount = GSQLiteMgr::Instance()-&gt;queryValue("", lSql);
    return std::stoi(lCount);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un gestionnaire de configurations C++-Insérer une configuration"><a class="Link9" href="#Créer un gestionnaire de configurations C++">Insérer une configuration</a></h2><br><h3 class="Title8 GTitle3">GConfig.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GConfig::insertData(std::string key, std::string value) {
    char lSql[B_QUERY+1];
    sprintf(lSql, ""
    "insert into CONFIG_DATA(CONFIG_KEY, CONFIG_VALUE)\n"
    "values('%s', '%s')\n"
    "", key.c_str(), value.c_str());
    GSQLiteMgr::Instance()-&gt;queryWrite("", lSql);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un gestionnaire de configurations C++-Modifier une configuration"><a class="Link9" href="#Créer un gestionnaire de configurations C++">Modifier une configuration</a></h2><br><h3 class="Title8 GTitle3">GConfig.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GConfig::updateData(std::string key, std::string value) {
    char lSql[B_QUERY+1];
    sprintf(lSql, ""
    "update CONFIG_DATA\n"
    "set CONFIG_VALUE='%s'\n"
    "where CONFIG_KEY='%s'\n"
    "", value.c_str(), key.c_str());
    GSQLiteMgr::Instance()-&gt;queryWrite("", lSql);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un gestionnaire de configurations C++-Résultat"><a class="Link9" href="#Créer un gestionnaire de configurations C++">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Cpp/img/i_cours_config.png" alt="/Tutoriels/Cpp/img/i_cours_config.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1600474250946"><div class="Row26">List 1 &gt; Cpp &gt; basics</div></div><script>loadList1("Loader_1600474250946","Cpp","basics");</script></div><br></div></div></div></div><br>