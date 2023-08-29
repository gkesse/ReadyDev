<div class="GAccess1 Access1">
<a class="GAccess2 Access2" href="/home">Accueil</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels">Tutoriels</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels#cpp">C++</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels/cpp/algorithms">Algorithmes</a></div><div class="GParallax1 Parallax1">
<div class="Parallax2" style="background-image: url(&quot;/data/img/defaults/binary.png&quot;);">
<div class="Parallax3"><a href="#" class="Parallax4">Algorithmes en C++</a></div>
</div>
<div class="Parallax5" style="background-color: rgb(128, 51, 0);"><br>Le but de ce tutoriel est de vous apprendre à utiliser les&nbsp;<b>Algorithmes</b>&nbsp;en <b>C++</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="GSummary1"><div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#introduction">Introduction</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#operations-sur-les-recherches-de-donnees">Opérations sur les recherches de données</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#operations-sur-les-recherches-de-donnees-conditionnees">Opérations sur les recherches de données conditionnées</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#operations-sur-l-accumulation-de-donnees">Opérations sur l'accumulation de données</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#operations-sur-les-foncteurs">Opérations sur les foncteurs</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#a-suivre---">À suivre...</a>
</div>
</div><br></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="introduction">Introduction</a>
</h1>
<div class="Section6"><br>La STL fournit une collection impressionnante de structures de données génériques. La plupart des bibliothèques s'arrêtent là. Cependant, La STL contient un assortiment supplémentaire d'<b>algorithmes</b> génériques qui peuvent, à quelques exceptions près, être appliqués aux éléments de n'importe quel conteneur. À l'aide de ces algorithmes, de manière optimisée, vous pouvez rechercher des éléments dans des conteneurs, trier des éléments dans des conteneurs, traiter des éléments dans des conteneurs et effectuer toute une série d'autres opérations. La beauté des algorithmes est qu'ils sont indépendants non seulement des types d'éléments sous-jacents, mais aussi des types de conteneurs sur lesquels ils opèrent. Les algorithmes effectuent leur travail en utilisant uniquement les interfaces des itérateurs. De nombreux algorithmes acceptent les fonctions de rappel: un pointeur de fonction ou quelque chose qui se comporte comme un pointeur de fonction, comme un objet avec une surcharge de l'operateur(). Idéalement, la STL fournit un ensemble de classes qui peuvent être utilisées pour créer des objets de rappel pour les algorithmes. Ces objets de rappel sont appelés objets fonction, ou simplement foncteurs.<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,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MGVABmRABmRABmQgOQPJT6hq7dGRy9JLLx0mT54cDj744JZfBx54YNhggw3CXHPNVZen9ddfP3z1q18tdb3dd989DBs2rO55bWjStgvLLbdc2HvvvUvV0z777BOWX375AaunVVZZJXzxi18sVSb4XmKJJQasTHKXljvtqT0HmQErYJAroGsa6/Hjx4dbb701/Otf/2r59eqrr4bDDjsszDfffHXtM2XKlPC3v/2t1PVuv/328MEPfrDueWUibbvw//7f/wv33ntv+Oc//xldVw888EDYeOONB6ye/uM//iM89NBD0eWB6xkzZoSVV155wMokd2m5057ac5AZsAIGuQK6prHedtttwx//+MeQ4vj3v/8dTj755LDQQgvVtc/Xvva18MILL5S65O9+97swatSouueVibTtAkIJMUO9xh6wtMkmmwxYPe2www7h8ccfjy1O9rnf/va3YcyYMQNWJrlLy5321J6DzIAVMMgV0DWN9c477xz+8pe/lOqw6n34uuuuC6uuumpd+yiwhsbzm1JgMXW85ZZbRr8mTpxYVagrsIYGO7bP1tMQZsDKG8KVV1d8tPu+iJl57rnn6mmmUv+77777wkc+8pG696jAGhrPb0qBddVVV4W///3v0S84WmmllWbjSIE1NNhpdzvm9eQiIQMaM6ExZ2vEe+ncBx10UHj99ddLiah6H37qqafCZpttVtemCqyh8fymFFjE0JU5EGPVPKEKrKHBTi+1od5r1zHZdTdUt0MW4IGp7wUWWCAcd9xx4c033yzT99X97IsvvhiI66pXZwqsganPejZv5n+s9mQBBAsSYr1Pt912W1UPpgJraNR5M5z4Heu2yxiwQrusQusKkoG6V5bTX3DBBeHtt9+uK5rK/PPdd98Nu+66a5hzzjlr3pMCa2g8vwsuuGC2chNPUuyLhQh8r8isAmto1Hmx3vzdeutBBqz0Hqz02TqtVm2wxhprhBtuuCEgilIexxxzTFhsscVqlncgBNYcc8wRlllmmfCJT3wiy5P0jW98I8uVxBTovvvuGzbffPOw5JJLBj7Xqt3KfJ9rsqpul112CV/4whcC957nHKOMBxxwQNhzzz0DU19jx44N88wzT1vLl9/Lsssum5WB8qy22mrJy9BJAguxuNNOO4X99tsvVHKyxx57BILr67Gb26vVd3LFkTpi0qRJ4ctf/nJW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dP0N2qEMYocyzzzzhEUXXTTgsSHYeqmllgpLL7109uJn/sb/+AyfHYwGh9ikhRZaKCtHXr68bKROSF0u8lwde+yxWXxUjDjKP/P222+H559/PjDlR2qGMgHxxGORN2u11VYbFBsPRr16Tdt2GZCBQWbAChjkCui6Dg/BssQSS4R111037L333uGss84K1157bbjjjjvC73//+/DQQw9lrwcffDBLmknHf8YZZ4S99torbLTRRpkIi02W+f73vz9ssskmYcstt4x+bbjhhgGRQ73n3z/xxBPD9ddfH+67776sbJTztttuCz//+c/DPvvsE8aOHZtMaCEosQeCKfYg39U111wTtthii7DmmmuGww8/PDz++OMB4RR7PPbYY9k0obzb5smADMhAWxhoy0W6TkQIZ3VuFlhggUzonHzyyVnczz/+8Y/wxhtvZGICj0tRELz77rvZ//jMs88+Gx544IHwwx/+MGy33XZhscUWa8jNxIkTw5133hn+/ve/R78QUiussEJYccUVszio+++/P7z88stZOfLy8U7ZEDbcw5VXXpnd1/zzz9+wTI3YwDt27733zmaLekLpqaeeCnvuuWfAvgjYcePGZdndy+TLevXVVzO7Nipfrf/jeZw8eXI21ch0Y/GFEF1++eVbtk+t6+d/RxyTuf4b3/jGbGWgTPvvv3/mjcw/73v1Z1W7aBcZGHAGBvwCA97gCkln1OEyyywTDj300EwkMYWFQCl7IGwQNeRwOuGEEzIRVK9+8Vw98cQTpS5DMs+NN944nHrqqZmoi5lqe+uttzIht/nmm7fsyfrQhz4U8CaVORCeH/vYx/qC1Jm6PO200wLlij24zx133LHp53H8+PHh1ltvzVY9svKx+KKM2LVefaX4H17HX//614G4smIZ+J0M+KusssqAlyPFvXiOzmi7rAfrYYAY0LADZNieaeDxqCy77LKZICI+KEawNBIFCK1XXnklnHPOOVmW8znnnLOqPZsRWExRMiXJ9jK5x6pRefg/gvHGG2/MOm/uuVludtttt8zbFnPN/DM33HBDJjbz62IPxCyCosxx/PHHR3kGq90bwhBvYa3jj3/8YzZdW+27Kf+GwLrllltqCni8mauuumrT9ZOyrJ7L/kUGepqBnr55G+EEAfAEiB955JGBaawU4qqyA8dLgcgiBqpaXFYzAovUCEz7NeNh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WO8Le+65Z+lNslMJrKL9yzy3Cqzee8bL8OFn5UMGZmNgtj8osAz8j2Jghx12COQ+KnMUO/he9GANpsA67bTTwpJLLhlVv8XGUoFlW1lkwt9lQgbqMlD3n001xBq8N2yqwGou0ej48ePDY489VkaXZtnNU0wREjfXbGJNBVZvPNe239azDCRjINmJFGM95vnadtttA8klyxxFD9bWW28dnnzyyehT3HLLLWGllVbqY62sB4wLDXaiUYTSgw8+GH3PfJBtatZcc80w55xzZvfOOc4+++zw9ttvR5+HzzKt22zjyfWZqmSVXrUXZSSNRrPnj/0emeivuOKKLP6vWjnuu+++fozEntfP2RfIgAwkZkCDJjbogHcwnVLeddZZJ9uyJLqHDyEUBdYee+xRKh7prLPOCksttVSfjYeiwCL3F0Lx3XffjTYdQvaTn/xk3959K6+8crjyyivDO++8E30OAuu32WabPtuV5Wj++ecPK664YpYCgTQIxdeoUaPCggs259UrU5a55porLL/88mGVVVaZrQyUCQHO1jtlzuln7QdkQAYGgAGNOgBG7YnGffHFF888CbU23a3W859//vn9VrF985vfrLuBcOU53nvvvcAKPDr6vM6GosDCbpdffnlgU+LY49VXXw2nn356WHbZZTPx8PnPfz488sgjAZvEHg8//HDYeOON+2yX29B320AZkAEZGBAGBuSkNuI9MF04xxxzhFNPPTX885//jO3jA3vhVU7xTZs2LVpoPP/88+ETn/hEP7aGosBik+MjjzwyWlhiXIQUmxiTaPWSSy4JiKUyAo1zXHTRRWGFFVboZz8bVds/GZABGRgwBgbsxDbkPSCydtppp/DUU09FC6xXXnklHHrooWHs2LEBLwxCIcYDxmduvPHGMG7cuH5cDUWBhTDdaqutshWYMfcebdw6H8QDRt4sxJ2NqW2eDMiADLSFgbZcxEa9S8XWIossEi699NJobwqCgligRx99NIu9io0hwnt14IEH9tuHkAZiKAosyk38EDFUb731Vh1ZlOZfeL9uv/32MGHChED8kg2rbZ4MyIAMtIWBtlzERr1LBRYPKasJH3rooVLxQGWkA8Hgv/zlL/utossbh6EqsIgj23333UutoCxjs8rPPvPMM2GvvfYKiy22mM9hFz+H+TPhu32aDHQMAx1TEBv/Idr4L7zwwuGQ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"></div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="operations-sur-les-recherches-de-donnees">Opérations sur les recherches de données</a>
</h1>
<div class="Section6"><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#operations-sur-les-structures-de-donnees_introduction">Introduction</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#operations-sur-les-recherches_recherche-d-un-element-dans-un-tableau">Recherche d'un élément dans un tableau</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#operations-sur-les-recherches_recherche-d-un-element-dans-un-vecteur">Recherche d'un élément dans un vecteur</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="operations-sur-les-structures-de-donnees_introduction" href="#operations-sur-les-recherches-de-donnees">Introduction</a>
</h2><br>L'algorithme find() recherche un élément spécifique dans une plage d'itérateur. Vous pouvez l'utiliser sur des éléments de n'importe quel type de conteneur. Il renvoie un itérateur faisant référence à l'élément trouvé, ou à l'itérateur de fin de la plage. Notez que la plage spécifiée dans l'appel à find() ne doit pas nécessairement correspondre à la totalité de la plage des éléments d'un conteneur; cela pourrait être un sous-ensemble.<br><br><h2 class="GTitle1 Title1">
<a class="Title2" id="operations-sur-les-recherches_recherche-d-un-element-dans-un-tableau" href="#operations-sur-les-recherches-de-donnees">Recherche d'un élément dans un tableau</a>
</h2><br>Exemple:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GFind::run() {
    int lTab[] = {10, 20, 30, 40};
    int* p;

    p = std::find (lTab, lTab + 4, 30);
    if (p != lTab + 4)
        std::cout &lt;&lt; "Element found: " &lt;&lt; *p &lt;&lt; '\n';
    else
        std::cout &lt;&lt; "Element not found.\n";
}
//===============================================</pre><br>Résultat:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
Element found: 30
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="operations-sur-les-recherches_recherche-d-un-element-dans-un-vecteur" href="#operations-sur-les-recherches-de-donnees">Recherche d'un élément dans un vecteur</a>
</h2><br>Exemple:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GFind::run() {
    std::vector&lt;int&gt; lVector = {10, 20, 30, 40};
    std::vector&lt;int&gt;::iterator it;

    it = std::find (lVector.begin(), lVector.end(), 30);
    if(it != lVector.end())
        std::cout &lt;&lt; "Element found: " &lt;&lt; *it &lt;&lt; '\n';
    else
        std::cout &lt;&lt; "Element not found.\n";
}
//===============================================</pre><br>Résultat:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
Element found: 30
//===============================================</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="operations-sur-les-recherches-de-donnees-conditionnees">Opérations sur les recherches de données conditionnées</a>
</h1>
<div class="Section6"><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#operations-sur-les-structures-de-donnees-contigues_introduction">Introduction</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#operations-sur-les-recherches-conditionnees_recherche-d-un-element-dans-un-vecteur">Recherche d'un élément dans un vecteur</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="operations-sur-les-structures-de-donnees-contigues_introduction" href="#operations-sur-les-recherches-de-donnees-conditionnees">Introduction</a>
</h2><br>L'algorithme find_if() est similaire à l'algorithme find(), sauf qu'il accepte un rappel de fonction de prédicat au lieu d'un simple élément à faire correspondre. Un prédicat renvoie vrai ou faux. L'algorithme find_if() appelle le prédicat sur chaque élément de la plage jusqu'à ce que le prédicat renvoie vrai. L'algorithme find_if() renvoie ensuite un itérateur faisant référence à cet élément.<br><br><h2 class="GTitle1 Title1">
<a class="Title2" id="operations-sur-les-recherches-conditionnees_recherche-d-un-element-dans-un-vecteur" href="#operations-sur-les-recherches-de-donnees-conditionnees">Recherche d'un élément dans un vecteur</a>
</h2><br>Le programme suivant lit les résultats des tests de l'utilisateur, puis vérifie si l'un des scores est « parfait ». Un score parfait est un score de 100 ou plus.<br><br>Exemple:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GFind::run() {
    std::vector&lt;int&gt; lVector = {10, 20, 200, 30, 250, 40};
    std::vector&lt;int&gt;::iterator it;

    it = std::find_if (lVector.begin(), lVector.end(), perfectScore);
    if(it != lVector.end())
        std::cout &lt;&lt; "Element found: " &lt;&lt; *it &lt;&lt; '\n';
    else
        std::cout &lt;&lt; "Element not found.\n";
}
//===============================================</pre><br>Résultat:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
Element found: 200
//===============================================</pre><br>Ce programme a transmis un pointeur vers la fonction perfectScore(), que l'algorithme find_if() a ensuite appelé sur chaque élément jusqu'à ce qu'il renvoie true.
Malheureusement, la STL ne fournit pas d'algorithme find_all() ou d'algorithme équivalent qui renvoie toutes les instances correspondant à un prédicat. Nous vous montrerons dans les sections suivantes comment écrire votre propre algorithme find_all().<br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="operations-sur-l-accumulation-de-donnees">Opérations sur l'accumulation de données</a>
</h1>
<div class="Section6"><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#operations-sur-les-structures-de-donnees-liees_introduction">Introduction</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#operations-sur-la-sommation_calcul-de-la-somme-des-elements-d-un-vecteur">Calcul de la somme des éléments d'un vecteur</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#operations-sur-l-accumulation_calcul-du-produit-des-elements-d-un-vecteur">Calcul du produit des éléments d'un vecteur</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="operations-sur-les-structures-de-donnees-liees_introduction" href="#operations-sur-l-accumulation-de-donnees">Introduction</a>
</h2><br>Il est souvent utile de calculer la somme, ou une autre quantité arithmétique, de tous les éléments d'un conteneur.
C'est exactement ce que fait l'algorithme accumulate(). Dans sa forme la plus élémentaire, il calcule la somme des éléments dans une plage spécifiée.<br><br><h2 class="GTitle1 Title1">
<a class="Title2" id="operations-sur-la-sommation_calcul-de-la-somme-des-elements-d-un-vecteur" href="#operations-sur-l-accumulation-de-donnees">Calcul de la somme des éléments d'un vecteur</a>
</h2><br>La fonction suivante calcule la moyenne arithmétique d'une séquence d'entiers dans un vecteur. La moyenne arithmétique est simplement la somme de tous les éléments divisée par le nombre d'éléments.<br><br>Exemple:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GAccumulate::run() {
    std::vector&lt;int&gt; lVector = {10, 20, 30, 40, 50, 60};
    std::cout &lt;&lt; "arithmeticMean: " &lt;&lt; arithmeticMean(lVector) &lt;&lt; '\n';
}
//===============================================
double GAccumulate::arithmeticMean(const std::vector&lt;int&gt;&amp; nums) {
    double sum = accumulate(nums.begin(), nums.end(), 0);
    return (sum / nums.size());
}
//===============================================</pre><br>Résultat:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
arithmeticMean: 35
//===============================================</pre><br>Notez que l'algorithme accumulate() est déclaré dans <numeric>, pas dans <algorithm>. Notez également que l'algorithme accumulate() prend comme troisième paramètre une valeur initiale pour la somme, qui dans ce cas doit être 0 (l'identité de l'addition) pour démarrer une nouvelle somme.</algorithm></numeric><br><br><h2 class="GTitle1 Title1">
<a class="Title2" id="operations-sur-l-accumulation_calcul-du-produit-des-elements-d-un-vecteur" href="#operations-sur-l-accumulation-de-donnees">Calcul du produit des éléments d'un vecteur</a>
</h2><br>La deuxième forme de l'algorithme accumulate() permet à l'appelant de spécifier une opération à effectuer au lieu d'une addition.
Cette opération prend la forme d'une fonction de rappel binaire. Supposons que vous souhaitiez calculer la moyenne géométrique, qui est le produit de tous les nombres de la séquence à la puissance l'inverse de la taille.
Dans ce cas, vous souhaiterez utiliser l'algorithme accumulate() pour calculer le produit au lieu de la somme. Vous pourriez l'écrire ainsi:<br><br>Exemple:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GAccumulate::run() {
    std::vector&lt;int&gt; lVector = {10, 20, 30, 40, 50, 60};
    std::cout &lt;&lt; "geometricMean: " &lt;&lt; geometricMean(lVector) &lt;&lt; '\n';
}
//===============================================
int GAccumulate::product(int num1, int num2) {
    return (num1 * num2);
}
//===============================================
double GAccumulate::geometricMean(const std::vector&lt;int&gt;&amp; nums) {
    double mult = accumulate(nums.begin(), nums.end(), 1, product);
    return (pow(mult, 1.0 / nums.size()));
}
//===============================================</pre><br>Résultat:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
geometricMean: 29.938
//===============================================</pre><br>Notez que la fonction product() est transmise en tant que fonction de rappel à l'algorithme accumulate() et que la valeur initiale de l'accumulation est 1 (l'identité de la multiplication) au lieu de 0.<br><br>La section suivante vous montre comment utiliser l'algorithme accumulate() dans la fonction géométriqueMean() sans écrire de fonction de rappel.<br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="operations-sur-les-foncteurs">Opérations sur les foncteurs</a>
</h1>
<div class="Section6"><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#operations-sur-les-tableaux_introduction">Introduction</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#operations-sur-les-foncteurs_objets-fonction-arithmetiques">Objets fonction arithmétiques</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#operations-sur-les-foncteurs_utilisation-de-la-classe-plus">Utilisation de la classe plus</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#operations-sur-les-foncteurs_utilisation-d-un-objet-fonction-dans-un-algorithme">Utilisation d'un objet fonction dans un algorithme</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="operations-sur-les-tableaux_introduction" href="#operations-sur-les-foncteurs">Introduction</a>
</h2><br>Vous avez vu quelques algorithmes STL, vous êtes en mesure d'apprécier les objets fonction. Vous pouvez surcharger l'opérateur d'appel de fonction dans une classe de telle sorte que les objets de la classe puissent être utilisés à la place des pointeurs de fonction.<br><br>Ces objets sont appelés objets fonction, ou simplement foncteurs.

De nombreux algorithmes STL, tels que find_if() et la deuxième forme de l'algorithme accumulate(), nécessitent un pointeur de fonction comme l'un des paramètres. Lorsque vous utilisez ces fonctions, vous pouvez transmettre un foncteur au lieu d'un pointeur de fonction.<br><br>Ce fait, en soi, n'est pas nécessairement une raison pour sauter de joie. Bien que vous puissiez certainement écrire vos propres classes de foncteurs, le véritable attrait est que C++ fournit plusieurs classes de foncteurs prédéfinies qui effectuent les opérations de rappel les plus couramment utilisées. Cette section décrit ces classes prédéfinies et vous montre comment les utiliser.<br><br>Toutes les classes d'objets fonction prédéfinies se trouvent dans le fichier d'en-tête &lt;functional&gt;.<br><br><h2 class="GTitle1 Title1">
<a class="Title2" id="operations-sur-les-foncteurs_objets-fonction-arithmetiques" href="#operations-sur-les-foncteurs">Objets fonction arithmétiques</a>
</h2><br>C++ fournit des modèles de classes de foncteurs pour les cinq opérateurs arithmétiques binaires: plus (plus), moins (minus), multiplie (multiplies), divise (divides) et modulo (modulus). De plus, une négation unaire est fournie (negate). Ces classes fournissent un modèle générique sur le type des opérandes et sont des wrappers pour les opérateurs réels. Ils prennent un ou deux paramètres du type de modèle, effectuent l'opération et renvoient le résultat.<br><br>L'avantage des objets fonctions arithmétiques est que vous pouvez les transmettre sous forme de fonctions de rappel aux algorithmes, ce que vous ne pouvez pas faire directement avec les opérateurs arithmétiques.<br><br><h2 class="GTitle1 Title1">
<a class="Title2" id="operations-sur-les-foncteurs_utilisation-de-la-classe-plus" href="#operations-sur-les-foncteurs">Utilisation de la classe plus</a>
</h2><br>Exemple:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
void GPlus::run() {
    std::plus&lt;int&gt; myPlus;
    int res = myPlus(4, 5);
    std::cout &lt;&lt; res &lt;&lt; std::endl;
}
//===============================================</pre><br>Résultat:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
9
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="operations-sur-les-foncteurs_utilisation-d-un-objet-fonction-dans-un-algorithme" href="#operations-sur-les-foncteurs">Utilisation d'un objet fonction dans un algorithme</a>
</h2><br>Par exemple, l'implémentation de la fonction géométriqueMean() utilisait l'algorithme accumulate() avec une fonction de rappel pour multiplier deux entiers. Vous pouvez le réécrire pour utiliser l'objet fonction multiplie (multiplies):<br><br>Exemple:<br><br><br>Résultat:<br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="a-suivre---">À suivre...</a>
</h1>
<div class="Section6"><br>À suivre...<br><br></div>
</div>
</div>
</div><br>