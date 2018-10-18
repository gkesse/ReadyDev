<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la bibliothèque STL en C++</div></a></div></div><div class="Body2 Orange"><b>STL</b> est une bibliothèque <b>C++</b> basée sur les templates.<br>Le but de ce tutoriel est de vous apprendre la bibliothèque <b>STL</b> en <b>C++</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation sous Windows"><a class="Link3" href="#">Installation sous Windows</a></h1><div class="Body3">Le but de cette section est de vous présenter les différents outils nécessaires pour apprendre la bibliothèque STL en C++, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>Dans ce tutoriel, nous utiliserons, sous Windows:<br>- MinGW, comme compilateur.<br>- Qt, comme environnement de développement intégré.<br>-    Notepad++, comme éditeur de texte.<br><br><h3 class="Title8 GTitle3">Télécharger MinGW</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://sourceforge.net/projects/mingw-w64/files/">https://sourceforge.net/projects/mingw-w64/files/</a><br><br><h3 class="Title8 GTitle3">Télécharger Qt</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://download.qt.io/archive/qt/">https://download.qt.io/archive/qt/</a><br><br><h3 class="Title8 GTitle3">Télécharger Notepad++</h3><a class="Link7 GLink1" style="color:lime;" href="https://notepad-plus-plus.org/fr/">https://notepad-plus-plus.org/fr/</a></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Liaison structurée avec pair"><a class="Link3" href="#">Liaison structurée avec pair</a></h1><div class="Body3">Le but de cette section est de vous apprendre la <span class="GColor1" style="color:lime;">liaison structurée avec pair</span> avec le STL.<br>Produit par <b>Gérard KESSE</b>.<br><br>Une liaison structurée permet de lier une structure de données entre un fournisseur et un consommateur. Pair permet de contenir une paire de données.<br><br><h3 class="Title8 GTitle3">Liaison structurée avec pair</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessStructuredBinding::run() {
    cout << "\n### Liaison structuree avec pair\n\n";
    auto lDivide = divide(16, 3);
    int lFraction = lDivide.first;
    int lRemainder = lDivide.second;
    cout << "Division (16, 3)\n";
    cout << "Quotient: " << lFraction << "\n";
    cout << "Reste: " << lRemainder << "\n";

    cout << "\n### Liaison structuree avec pair C++17\n\n";
    auto [lFraction2, lRemainder2] = divide(16, 3);
    cout << "Division (16, 3)\n";
    cout << "Quotient: " << lFraction2 << "\n";
    cout << "Reste: " << lRemainder2 << "\n";
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Fonction de retour pair</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
pair<int, int> GProcessStructuredBinding::divide(int dividend, int divisor) {
    pair<int, int> lDivide;
    int lFraction = dividend / divisor;
    int lRemainder = dividend % divisor;
    lDivide.first = lFraction;
    lDivide.second = lRemainder;
    return lDivide;
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Structured_Binding_Pair.png" alt="img/Structured_Binding_Pair.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Liaison structurée avec tuple"><a class="Link3" href="#">Liaison structurée avec tuple</a></h1><div class="Body3">Le but de cette section est de vous apprendre la <span class="GColor1" style="color:lime;">liaison structurée avec tuple</span> avec le STL.<br>Produit par <b>Gérard KESSE</b>.<br><br>Une liaison structurée permet de lier une structure de données entre un fournisseur et un consommateur. Tuple permet de contenir une liste de données à taille fixe.<br><br><h3 class="Title8 GTitle3">Liaison structurée avec tuple</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessStructuredBindingTuple::run() {
    cout << "\n### Liaison structuree avec tuple\n\n";
    auto lDivide = divide(16, 3);
    int lFraction = get<0>(lDivide);
    int lRemainder = get<0>(lDivide);
    cout << "Division (16, 3)\n";
    cout << "Quotient: " << lFraction << "\n";
    cout << "Reste: " << lRemainder << "\n";

    cout << "\n### Liaison structuree avec tuple C++17\n\n";
    auto [lFraction2, lRemainder2] = divide(16, 3);
    cout << "Division (16, 3)\n";
    cout << "Quotient: " << lFraction2 << "\n";
    cout << "Reste: " << lRemainder2 << "\n";
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Fonction de retour tuple</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
tuple<int, int> GProcessStructuredBindingTuple::divide(int dividend, int divisor) {
    tuple<int, int> lDivide;
    int lFraction = dividend / divisor;
    int lRemainder = dividend % divisor;
    get<0>(lDivide) = lFraction;
    get<1>(lDivide) = lRemainder;
    return lDivide;
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Structured_Binding_Tuple.png" alt="img/Structured_Binding_Tuple.png"></div></div></div></div></div><br>