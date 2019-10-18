<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la programmation avec le C++</div></a></div></div><div class="Body2 Orange">Le <b>C++</b> est un langage de programmation orientée objet.<br>Le but de ce tutoriel est de vous apprendre la programmation avec le <b>C++</b>.<br>Produit par <b>Gérard KESSE</b>.<br>&nbsp;<br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation sous Windows"><a class="Link3" href="#">Installation sous Windows</a></h1><div class="Body3">Le but de cette section est de vous présenter les différents outils nécessaires pour apprendre la programmation avec le <span class="GColor1" style="color:lime;">C++</span>, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>Dans ce tutoriel, nous utiliserons, sous Windows:<br>-    MinGW, comme compilateur.<br>-    Notepad++, comme éditeur de texte.<br>- Qt Creator, comme environnement de développement intégré.<br><br><h3 class="Title8 GTitle3">Installer MinGW</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="http://www.mingw.org/">http://www.mingw.org/</a><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://sourceforge.net/projects/mingw-w64/files/">https://sourceforge.net/projects/mingw-w64/files/</a><br><br><h3 class="Title8 GTitle3">Installer Notepad++</h3><a class="Link7 GLink1" style="color:lime;" href="https://notepad-plus-plus.org/fr/">https://notepad-plus-plus.org/fr/</a><br><br><h3 class="Title8 GTitle3">Installer Qt Creator</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://download.qt.io/archive/qt/">https://download.qt.io/archive/qt/</a></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Gestionnaire de configuration"><a class="Link3" href="#">Gestionnaire de configuration</a></h1><div class="Body3">Le but de cette section est de vous apprendre à créer un <span class="GColor1" style="color:lime;">Gestionnaire de configuration</span> avec le C++.<br>Produit par <b>Gérard KESSE</b>.<br><br>Le Gestionnaire de configuration proposé ici est un système de Clé/Valeur.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1549526066044"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1549526066044");</script></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration-Structure d'une donnée"><a class="Link9" href="#Gestionnaire de configuration">Structure d'une donnée</a></h2><br><h3 class="Title8 GTitle3">Liste de données</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">map<string, string> m_dataMap;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration-Ajouter une donnée"><a class="Link9" href="#Gestionnaire de configuration">Ajouter une donnée</a></h2><br><h3 class="Title8 GTitle3">Ajouter une donnée</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GConfigNormal::setData(const string& key, const string& value) {
    m_dataMap[key] = value;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration-Lire une donnée"><a class="Link9" href="#Gestionnaire de configuration">Lire une donnée</a></h2><br><h3 class="Title8 GTitle3">Lire une donnée</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
string GConfigNormal::getData(const string& key) {
    return m_dataMap[key];
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration-Lister les données"><a class="Link9" href="#Gestionnaire de configuration">Lister les données</a></h2><br><h3 class="Title8 GTitle3">Lister les données</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GConfigNormal::show() {
    map<string, string>::iterator lItem;
    for(lItem = m_dataMap.begin(); lItem != m_dataMap.end(); lItem++) {
        cout << lItem->first << " = " << lItem->second << "\n";
    }
    cout << "\n";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration-Supprimer une donnée"><a class="Link9" href="#Gestionnaire de configuration">Supprimer une donnée</a></h2><br><h3 class="Title8 GTitle3">Supprimer une donnée</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GConfigNormal::remove(const string& key) {
    map<string, string>::iterator lItem = m_dataMap.find(key) ;
    if(lItem != m_dataMap.end()) {
        m_dataMap.erase(lItem);
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration-Vider la liste de données"><a class="Link9" href="#Gestionnaire de configuration">Vider la liste de données</a></h2><br><h3 class="Title8 GTitle3">Vider la liste de données</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GConfigNormal::clear() {
    m_dataMap.clear();
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration-Programme de Test"><a class="Link9" href="#Gestionnaire de configuration">Programme de Test</a></h2><br><h3 class="Title8 GTitle3">Programme de Test</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessConfig::run(int argc, char **argv) {
    GConfig::Instance()->setData("Nom", "KESSE");
    GConfig::Instance()->setData("Prenom", "Gerard");
    GConfig::Instance()->setData("Email", "gerard.kesse@readydev.com");
    GConfig::Instance()->setData("Diplome", "Ingenieur");
    GConfig::Instance()->setData("Formation", "Informatique Industrielle");
    GConfig::Instance()->setData("Ecole", "Polytech'Montpellier");
    GConfig::Instance()->show();
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration-Résultat"><a class="Link9" href="#Gestionnaire de configuration">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Config.png" alt="img/Config.png"></div></div></div></div></div><br>