<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Ajouter un style Qt en C++</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à ajouter un style <b>Qt </b>en <b>C++</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>Qt </b>est une API orientée objet et développée en C++. Qt offre des composants d'interface graphique (widgets), d'accès aux données, de connexions réseaux, de gestion des fils d'exécution, d'analyse XML. Elle peut être utiliser pour concevoir l'architecture de son application en utilisant les mécanismes des signaux et slots.Qt prend en charge le système graphique X Window System. Qt intègre des bindings avec plusieurs de langages.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Cpp/img/b_qt_style.png" alt="/Tutoriels/Cpp/img/b_qt_style.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Ajouter un style Qt en C++"><a class="Link3" href="#">Ajouter un style Qt en C++</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Ajouter un style Qt en C++-Introduction"><a class="Link9" href="#Ajouter un style Qt en C++">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons d'ajouter un style défini dans le fichier (styles.qss) à un projet qui affiche un message à l'écran (Bonjour tout le monde).<br><br><h2 class="Title7 GTitle2" id="Ajouter un style Qt en C++-Programme principal"><a class="Link9" href="#Ajouter un style Qt en C++">Programme principal</a></h2><br>Pour la définition du programme principal. Le chargement du style est effectué par la méthode (styleLoad) du manager (GManager).<br><br><h3 class="Title8 GTitle3">main.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GWindow.h"
#include "GManager.h"
//===============================================
int main(int argc, char** argv) {
    QApplication app(argc, argv);
    GManager::Instance()-&gt;styleLoad();
    GWindow* lWindow = new GWindow;
    lWindow-&gt;show();
    return app.exec();
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Ajouter un style Qt en C++-Chargement du style"><a class="Link9" href="#Ajouter un style Qt en C++">Chargement du style</a></h2><br>Pour la définition du chargement du style. Le chemin du fichier de style est défini par la propriété (style_file) de la structure de données associée au module (qt). Le style est appliqué à toutes les composantes de l'application (qApp).<br><br><h3 class="Title8 GTitle3">GManager.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GManager::styleLoad() {
    QFile lFile(m_mgr-&gt;qt-&gt;style_file);
    lFile.open(QFile::ReadOnly);
    QString lStyleSheet = QLatin1String(lFile.readAll());
    qApp-&gt;setStyleSheet(lStyleSheet);
}
//===============================================</xmp></pre></div><br>Pour la définition des données.<br><br><h3 class="Title8 GTitle3">GManager.cpp</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">m_mgr-&gt;qt-&gt;style_file = ":/qss/styles.qss";</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Ajouter un style Qt en C++-Définition du style"><a class="Link9" href="#Ajouter un style Qt en C++">Définition du style</a></h2><br>Pour la définition du style. Le style global appliqué à tous les objets de l'application est défini par la clé (QWidget). Le style restreint appliqué à tous les labels de l'application est défini par la clé (QLabel).<br><br><h3 class="Title8 GTitle3">styles.qss</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="css">/*===============================================*/
/* QWidget */
QWidget {
    background-color: transparent;
    background-color: rgba(20, 20, 20, 100%);
    font-family: arial;
    font-size: 16px;
    color: white;
    border: none;
}
/*===============================================*/
/* QLabel */
QLabel {
    color: teal;
    font-size: 32px;
}
/*===============================================*/</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Ajouter un style Qt en C++-Résultat"><a class="Link9" href="#Ajouter un style Qt en C++">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Cpp/img/i_qt_style.png" alt="/Tutoriels/Cpp/img/i_qt_style.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Interface Homme-Machine Qt</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1601149057068"><div class="Row26">List 1 &gt; Cpp &gt; qt</div></div><script>loadList1("Loader_1601149057068","Cpp","qt");</script></div><br></div></div></div></div><br>