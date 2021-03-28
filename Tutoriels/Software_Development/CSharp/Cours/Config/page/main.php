<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer un gestionnaire de configuration en C#</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer un gestionnaire de configuration en <b>C#</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>C#</b> est un langage de programmation orientée objet destiné à développer sur la plateforme Microsoft .NET. Il est dérivé du C++ et très proche du Java dont il reprend la syntaxe générale ainsi que les concepts, y ajoutant des notions telles que la surcharge des opérateurs, les indexeurs et les délégués. Il est utilisé notamment pour développer des applications web sur la plateforme ASP.NET.<br><br><div class="Img3 GImage"><img src="/Tutoriels/CSharp/img/b_cours_config.png" alt="/Tutoriels/CSharp/img/b_cours_config.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un gestionnaire de configuration en C#"><a class="Link3" href="#">Créer un gestionnaire de configuration en C#</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer un gestionnaire de configuration en C#-Introduction"><a class="Link9" href="#Créer un gestionnaire de configuration en C#">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer un gestionnaire de configuration en C# (GConfig).<br><br><h2 class="Title7 GTitle2" id="Créer un gestionnaire de configuration en C#-Programme principal"><a class="Link9" href="#Créer un gestionnaire de configuration en C#">Programme principal</a></h2><br><h3 class="Title8 GTitle3">GProcess.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
string lLast = GConfig.Instance().getData("G_CSHARP_ID");
GConfig.Instance().setData("G_CSHARP_ID", lAnswer);
GConfig.Instance().saveData("G_CSHARP_ID");
GConfig.Instance().loadData("G_CSHARP_ID");
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un gestionnaire de configuration en C#-Structure des données"><a class="Link9" href="#Créer un gestionnaire de configuration en C#">Structure des données</a></h2><br><h3 class="Title8 GTitle3">GConfig.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
private Dictionary&lt;string, string&gt; m_dataMap;
m_dataMap = new Dictionary&lt;string, string&gt;();
//===============================================</xmp></pre></div>&nbsp;<br><h2 class="Title7 GTitle2" id="Créer un gestionnaire de configuration en C#-Écriture des données"><a class="Link9" href="#Créer un gestionnaire de configuration en C#">Écriture des données</a></h2><br><h3 class="Title8 GTitle3">GConfig.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
public void setData(string key, string valueId) {
    m_dataMap[key] = valueId;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un gestionnaire de configuration en C#-Lecture des données"><a class="Link9" href="#Créer un gestionnaire de configuration en C#">Lecture des données</a></h2><br><h3 class="Title8 GTitle3">GConfig.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
public string getData(string key) {
    string lValue = "";
    m_dataMap.TryGetValue(key, out lValue);
    return lValue;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un gestionnaire de configuration en C#-Chargement des données"><a class="Link9" href="#Créer un gestionnaire de configuration en C#">Chargement des données</a></h2><br><h3 class="Title8 GTitle3">GConfig.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
public void loadData(string key) {
    string lQuery = String.Format(@"
    select config_value from config_data
    where config_key = '{0}'
    ", key);
    string lValue = GSQLite.Instance().queryValue(lQuery);
    setData(key, lValue);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un gestionnaire de configuration en C#-Sauvegarde des données"><a class="Link9" href="#Créer un gestionnaire de configuration en C#">Sauvegarde des données</a></h2><br><h3 class="Title8 GTitle3">GConfig.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
public void saveData(string key) {
    string lValue = getData(key);
    int lCount = countData(key);
    if(lCount == 0) insertData(key, getData(key));
    else updateData(key, getData(key));
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un gestionnaire de configuration en C#-Comptage des données"><a class="Link9" href="#Créer un gestionnaire de configuration en C#">Comptage des données</a></h2><br><h3 class="Title8 GTitle3">GConfig.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
public int countData(string key) {
    string lQuery = String.Format(@"
    select count(*) from config_data
    where config_key = '{0}'
    ", key);
    int lCount = int.Parse(GSQLite.Instance().queryValue(lQuery));
    return lCount;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un gestionnaire de configuration en C#-Insertion des données"><a class="Link9" href="#Créer un gestionnaire de configuration en C#">Insertion des données</a></h2><br><h3 class="Title8 GTitle3">GConfig.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
public void insertData(string key, string valueId) {
    string lQuery = String.Format(@"
    insert into config_data (config_key, config_value)
    values ('{0}', '{1}')
    ", key, valueId);
    GSQLite.Instance().queryWrite(lQuery);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un gestionnaire de configuration en C#-Mise à jour des données"><a class="Link9" href="#Créer un gestionnaire de configuration en C#">Mise à jour des données</a></h2><br><h3 class="Title8 GTitle3">GConfig.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
public void updateData(string key, string valueId) {
    string lQuery = String.Format(@"
    update config_data 
    set config_value = {1}
    where config_key = '{0}'
    ", key, valueId);
    GSQLite.Instance().queryWrite(lQuery);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un gestionnaire de configuration en C#-Résultat"><a class="Link9" href="#Créer un gestionnaire de configuration en C#">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/CSharp/img/i_cours_config.png" alt="/Tutoriels/CSharp/img/i_cours_config.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1600429735365"><div class="Row26">List 1 &gt; CSharp &gt; basics</div></div><script>loadList1("Loader_1600429735365","CSharp","basics");</script></div><br></div></div></div></div><br>