<div class="GAccess1 Access1">
<a class="GAccess2 Access2" href="/home">Accueil</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels">Tutoriels</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels#cpp">C++</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels/cpp/cours_v3">Cours</a></div><div class="GParallax1 Parallax1">
<div class="Parallax2" style="background-image: url(&quot;/data/img/defaults/binary.png&quot;);">
<div class="Parallax3"><a href="#" class="Parallax4">Programmation C++</a></div>
</div>
<div class="Parallax5" style="background-color: rgb(128, 51, 0);"><br>Le but de ce tutoriel est de vous apprendre à programmer en <b>C++</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="GSummary1"><div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#introduction">Introduction</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#recommandations-techniques">Recommandations techniques</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#listes--piles-et-files-d-attente">Listes, piles et files d'attente</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#arbres--tas-et-graphiques">Arbres, tas et graphiques</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#tables-de-hachage-et-filtres-bloom">Tables de hachage et filtres Bloom</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#diviser-et-conquerir">Diviser et conquérir</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#algorithmes-gourmands">Algorithmes gourmands</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#algorithmes-graphiques-i">Algorithmes graphiques I</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#algorithmes-graphiques-ii">Algorithmes graphiques II</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#programmation-dynamique-i">Programmation dynamique I</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#programmation-dynamique-ii">Programmation dynamique II</a>
</div>
</div><br></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="introduction">Introduction</a>
</h1>
<div class="Section6"><br>À suivre...<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,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HgzAgDMDGih+/PHHXm3iI488Yrp16+b8DPofNEAVGcC4VTSucyX/xz/+ETUiJvA1bdo089lnn5n777/fbLnllmbBBRc0rVq1ck5XFmxDGqijMFBMBnr16mUmTJjg1SqOGDHCrLbaarRxCPksMFDMipu1BrtaAsu2TBJar732mvnzn/9s2rdvnwXwSAMNIAzkkIHlllvObLXVVkbiyPW15pprmvnmm28OHhBY9M9Z66s900MBehpsjkYgxPerLbAktGbOnGleeukls+2225p55pmnKvkIYQvuQZ2EgZbLwH777Re5KGjmyfV1xRVXmCWWWGKONgmB1XI5oA5HZUcBZgGEWggsiSzNZN16662mU6dOczRmWbADaaA+wkDLZuDQQw81X3/9tZ08d3pXm9SxY8c52iQEVstmgbqcwynqlliotRJYau3GjRtnevToMUdj1hLtRpppgGEgWwyEFFhqp0aPHu08E6YZs8GDB5suXbrQvtG3Z4GBbFXOojaWtRRYWio8/PDDy/o8FNX+5Jt2AAbCMBBSYGlTzsorr2xWXXVV55d8wMr5c1G+YcoXO3rZ0evDWVCEuUxDLQWWZrHuuOMOs9RSSwW15SKLLGK23357o3hc2223XbRj0aUyamlAfmEHHHBA9N2TTjqpFPfmxBNPjOLg/OlPfzI77rijWWmllYLE9lKDvddee0X3ts87/vjjjZ6z8cYbO6fdJX+hPqPdn+o8dtttN/PXv/7VbL755mb++edvtAzV2ayzzjrR9w4++GBzzDHHlOyruGuyscpMf9tll12iLe617qDatm1rNt1008j+xx13XJQ+lYviuilGnMvGDJXb/vvvb4499tjS9/v162d233334KyXK1P5Na6yyipRWBSVj9Kv11/+8hezxx57REKhUlw6W74qA8V+slweffTRUb422mgjp/Iulzb7O/Gy9tprV2RBz9ZmGNlNu/HatGnTKGP2/noPKbDi963mz8sss0zUBvXt29cceeSRUZ2wMQlt/bBtkNwr5p57bi+bhEi7ykEMqJ1UWxWvuwrFozw0R7pC5C3H90BgZaFw0wis8ePHR8FJzzrrLPPcc895hXnQ5zUytHlXJ3D33Xc7v6677jrTuXPn0vclfm6//Xbz/vvvG8XjuuGGG8ySSy5Z+rt9Tvy9a9eu5rTTTjNDhw417777rvnyyy+j7/7888+luDc//fRTFB/sq6++Mh9++KHRFuzLL788agxdxEX8efpZYk6dn+7z6aefRve2z/vxxx+jpQjttrz22mvN6quvXtoMoBAXAwcOdLbPueeeO0enrnLysfH5559fz/H3wAMPNA888EC0xPvdd9+ZAQMGVIxvJtGixlhloc0NWhqeNGmS+f7770v2Vdw12Vhlpr+NHTvWPPvss+aWW25x3nG64oormnPOOccrb3H7qNO4+uqrzeuvv25Uzj/88EOUPpWL0vTf//7X/POf/zR/+MMfjPKULFOJ5TPOOMO88sorEUPx70+ZMsWonjz44INGzte/+93v5vi+vZ/sq3y7ltGgQYMi8ScxqvtKuIorPU/lo/Tr9e2330axnBSXTuJl8cUXLxsqxZavykAx8SyXupfqhvKnfGr5y7cjVfqU/5tuusm88MILURotC/Y5lgU9W39TPsSCviOOXGPphRRY3bt3N2prXMtEn/v73/9ull122QbL2Za3bLjGGmtEbdCwYcNKbZDyrzphYxLa+mHboMcff9xcdtllZqeddnIeiCkfV155pVc+4vVf37/wwgvNyy+/HLVRlnGlzTKuPEggatbP5pH3Ztc3zZ4AYJhrLpNGYEkISCRpdK/3++67L2oUXLxK9V0JHFsB1TD5XGrwVenVcGvm4+233zYzZswwv/32W3SbhpxWNcrXzNnf/vY38+qrr0Yd0axZs5wfrfurQ5BYuO2228yGG25oFlhggVI+bH7KvUtcSSSpoWzsmWpcX3zxxSgqvux79tlnRx2/a0L/85//zOEHovv5XCojiRd1yBJTn3zySbQT1N5DadKsYTyvmgWRPTQLothnCjo7ffp0+xXndy0jy59FTO2www5lhY197nrrrRd1/s43Nybyk1GUbt171KhRUZladsrdR2yJMc0uLLroolGe1UFq1urhhx+OOKr0/V9//TUS1LKZhH+5WHDqACU+Xa+JEydGz1eIgZtvvjkSJZW4UvpUb/QczXQp/UqHylfpkuCX3Ru69H2JNQ1IJEob2wmse0uQSgjoO1988UVURxu6f0O/l+3FgkSq7rXQQgvVY85ycOONN0Z1RgKxUj7KPUeCTu2B6si//vWvaMZV962Gk7vsJrF46qmnRoJFNq1Ubsn0qhzUBkmASny6zCQrH/q8z6X6LzEtP7Thw4cbDQArMa48KCjrySef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M4BBAxsURV9Z0WMf7AMDMAADMFAEBhBYCCwYgAEYgAEYgAEYCMwABg1s0CKocvLI6BMGYAAGYAAGKjOAwMq6wGrdurVp3769WW655czBBx9sBg4caIYMGWKefPJJ88ILL5gXX3wxej333HNm6NCh5tZbbzWnnXaa6dWrl1l66aXNAgssYFq1akVFqFwRsA/2gQEYgAEYCMkAAiurAmvuuec2nTt3NnvuuWckml5//XUzYcIE8+OPP5pp06aZWbNmmfj122+/mRkzZpiff/7ZTJ061XzyySfmmWeeMWeffbbp0aOHWWSRRRBaNB4hGw/uBU8wAAMw0DADCKysCqwddtjB3H777Wbs2LHmp59+mkNQxcVVQz/PnDnTfPPNN2b06NHmwgsvNBtuuKGZd955qRANVwhsg21gAAZgAAZCMIDAyprAatu2renXr595++23zS+//GI0M9XUS7NdP/zwgxk5cqTZbrvtjJYds5Zv0kNdhAEYgAEYyBEDFGaWCrNdu3bm8MMPN+PHj081Y9WYENOM1quvvmq22WYbRBYjNEQ2DMAADMBA9RhAYGVFYLVp08b07t07Ws779ddfG9NKqf8ukfX888+bTTfd1OiZWck/6aAuwgAMwAAM5IgBCjMrhdmlSxczfPjwyIE9tXpy/KKc4QcNGmQ6duyIwKre6AXbYlsYgAEYKC4DCKysCKzTTz/dTJkyxVEiNf1j2mXYs2dPZrGKW/lp+Cl7GIABGKgeAwisLAisJZdcMopllQy9UElGyflduwsnTZpkJk+ebKZPn+7lEC8H+vPPP98svPDCVLDqVTBsi21hAAZgoJgMILCyILD233//KMZVJUGV/JvCL5x77rlmk002MVtssYW54447op2Cyc819H/5ed11111m8cUXp/IXs/JT7pQ7DMAADFSPAQRWFgSWhJICiPpciuC+2mqrmXnmmSfaESihNW7cOJ9bRIFIu3XrlioAqRzkJeyOPfZY079//zleJ5xwQhTgdP755696Bd5oo43MMcccM0cabLoUU2zBBResejqywBJpoE2DARiAgUwwkIlEFL7ju+6666IlPh91dO+995plllmmZDstM7722mte4R0Ua2vrrbeORJpvhdQRPGeeeWa0RKnlxuTr22+/rdkSpETel19+OUcabJpuvPFGI/v45pHP0z7AAAzAAAykZADDpTRc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"></div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="recommandations-techniques">Recommandations techniques</a>
</h1>
<div class="Section6"><br>Pour tester les extraits de code dans ce tutoriel, vous aurez besoin des éléments suivants:<br><br>À suivre...<br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="listes--piles-et-files-d-attente">Listes, piles et files d'attente</a>
</h1>
<div class="Section6"><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#listes--piles-et-files-d-attente_structures-de-donnees-contigues">Structures de données contiguës</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#listes--piles-et-files-d-attente_tableaux--std--array-">Tableaux (std::array)</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#listes--piles-et-files-d-attente_exercice-1---implementation-d-un-tableau-de-taille-dynamique">Exercice 1&nbsp;: Implémentation d'un tableau de taille dynamique</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="listes--piles-et-files-d-attente_structures-de-donnees-contigues" href="#listes--piles-et-files-d-attente">Structures de données contiguës</a>
</h2><br>Utilisation des tableaux statiques:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#include &lt;iostream&gt;
//===============================================
int main (int _argc, char** _argv) {
    // déclaration et initialisation
    int arr[5] = {1, 2, 3, 4, 5};
    // lecture
    for(int i = 0; i &lt; 5; i++) {
        std::cout &lt;&lt; arr[i] &lt;&lt; ", ";
    }
    std::cout &lt;&lt; std::endl;
    return 0;
}
//===============================================
1, 2, 3, 4, 5,
//===============================================</pre><br>Utilisation des tableaux dynamiques style C:&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#include &lt;iostream&gt;
#include &lt;cstdlib&gt;
//===============================================
int main (int _argc, char** _argv) {
    int size = 5;
    // création
    int* arr = (int*)malloc(size * sizeof(int));
    // modification
    for(int i = 0; i &lt; 5; i++) {
        arr[i] = i + 1;
    }
    // lecture
    for(int i = 0; i &lt; 5; i++) {
        std::cout &lt;&lt; arr[i] &lt;&lt; ", ";
    }
    std::cout &lt;&lt; std::endl;
    // libération
    free(arr);
    return 0;
}
//===============================================
1, 2, 3, 4, 5,
//===============================================</pre><br>Utilisation des tableaux dynamiques en C++:&nbsp;&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#include &lt;iostream&gt;
//===============================================
int main (int _argc, char** _argv) {
    int size = 5;
    // création
    int* arr = new int[size];
    // modification
    for(int i = 0; i &lt; 5; i++) {
        arr[i] = i + 1;
    }
    // lecture
    for(int i = 0; i &lt; 5; i++) {
        std::cout &lt;&lt; arr[i] &lt;&lt; ", ";
    }
    std::cout &lt;&lt; std::endl;
    // libération
    delete[] arr;
    return 0;
}
//===============================================
1, 2, 3, 4, 5,
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="listes--piles-et-files-d-attente_tableaux--std--array-" href="#listes--piles-et-files-d-attente">Tableaux (std::array)</a>
</h2><br>Utilisation des tableaux (array):<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#include &lt;iostream&gt;
#include &lt;array&gt;
//===============================================
int main (int _argc, char** _argv) {
    std::array&lt;int, 10&gt; arr; // array of int of size 10
    arr[0] = 1;              // Sets the first element as 1
    std::cout &lt;&lt; "First element: " &lt;&lt; arr[0] &lt;&lt; std::endl;

    std::array&lt;int, 4&gt; arr2 = {1, 2, 3, 4};
    std::cout &lt;&lt; "Elements in second array: ";
    for(int i = 0; i &lt; arr2.size(); i++) {
        std::cout &lt;&lt; arr2[i] &lt;&lt; " ";
    }
    std::cout &lt;&lt; std::endl;
    return 0;
}
//===============================================
First element: 1
Elements in second array: 1 2 3 4
//===============================================</pre><br>Utilisation du passage par valeur:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#include &lt;iostream&gt;
#include &lt;array&gt;
//===============================================
void print(std::array&lt;int, 5&gt; arr);
//===============================================
int main (int _argc, char** _argv) {
    std::array&lt;int, 5&gt; arr = {1, 2, 3, 4, 5};
    print(arr);
    return 0;
}
//===============================================
void print(std::array&lt;int, 5&gt; arr) {
    for(auto ele: arr) {
        std::cout &lt;&lt; ele &lt;&lt; ", ";
    }
    std::cout &lt;&lt; std::endl;
}
//===============================================
1, 2, 3, 4, 5,
//===============================================</pre><br>Utilisation du passage par référence:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#include &lt;iostream&gt;
#include &lt;array&gt;
//===============================================
void print(std::array&lt;int, 5&gt;&amp; arr);
//===============================================
int main (int _argc, char** _argv) {
    std::array&lt;int, 5&gt; arr = {1, 2, 3, 4, 5};
    print(arr);
    return 0;
}
//===============================================
void print(std::array&lt;int, 5&gt;&amp; arr) {
    for(auto ele: arr) {
        std::cout &lt;&lt; ele &lt;&lt; ", ";
    }
    std::cout &lt;&lt; std::endl;
}
//===============================================
1, 2, 3, 4, 5,
//===============================================</pre><br>Utilisation du passage par référence const:&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#include &lt;iostream&gt;
#include &lt;array&gt;
//===============================================
void print(const std::array&lt;int, 5&gt;&amp; arr);
//===============================================
int main (int _argc, char** _argv) {
    std::array&lt;int, 5&gt; arr = {1, 2, 3, 4, 5};
    print(arr);
    return 0;
}
//===============================================
void print(const std::array&lt;int, 5&gt;&amp; arr) {
    for(auto ele: arr) {
        std::cout &lt;&lt; ele &lt;&lt; ", ";
    }
    std::cout &lt;&lt; std::endl;
}
//===============================================
1, 2, 3, 4, 5,
//===============================================</pre><br>Utilisation des modèles génériques (template):<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#include &lt;iostream&gt;
#include &lt;array&gt;
//===============================================
template &lt;size_t N&gt;
void print(std::array&lt;int, N&gt; arr);
//===============================================
int main (int _argc, char** _argv) {
    std::array&lt;int, 5&gt; arr = {1, 2, 3, 4, 5};
    print&lt;5&gt;(arr);
    std::array&lt;int, 6&gt; arr2 = {1, 2, 3, 4, 5, 6};
    print&lt;6&gt;(arr2);
    return 0;
}
//===============================================
template &lt;size_t N&gt;
void print(std::array&lt;int, N&gt; arr) {
    for(auto ele: arr) {
        std::cout &lt;&lt; ele &lt;&lt; ", ";
    }
    std::cout &lt;&lt; std::endl;
}
//===============================================</pre><br>L'opérateur [] n'effectue aucune vérification de type:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#include &lt;iostream&gt;
#include &lt;array&gt;
//===============================================
int main (int _argc, char** _argv) {
    std::array&lt;int, 5&gt; arr = {1, 2, 3, 4, 5};
    std::cout &lt;&lt; arr[0] &lt;&lt; std::endl;
    std::cout &lt;&lt; arr[7] &lt;&lt; std::endl;
    return 0;
}
//===============================================
1
0
//===============================================</pre><br>La fonction (at) effectue une vérification de type:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#include &lt;iostream&gt;
#include &lt;array&gt;
//===============================================
int main (int _argc, char** _argv) {
    std::array&lt;int, 5&gt; arr = {1, 2, 3, 4, 5};
    std::cout &lt;&lt; arr.at(0) &lt;&lt; std::endl;
    std::cout &lt;&lt; arr.at(7) &lt;&lt; std::endl;
    return 0;
}
//===============================================
1
terminate called after throwing an instance of 'std::out_of_range'
  what():  array::at: __n (which is 7) &gt;= _Nm (which is 5)
//===============================================</pre><br>Utilisation des exceptions:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#include &lt;iostream&gt;
#include &lt;array&gt;
//===============================================
int main (int _argc, char** _argv) {
    std::array&lt;int, 4&gt; arr = {1, 2, 3, 4};

    try {
        std::cout &lt;&lt; arr.at(3) &lt;&lt; std::endl; // No error
        std::cout &lt;&lt; arr.at(4) &lt;&lt; std::endl; // Throws exception std::out_of_range
    }
    catch (const std::out_of_range&amp; ex) {
        std::cerr &lt;&lt; ex.what() &lt;&lt; std::endl;
    }

    return 0;
}
//===============================================
4
array::at: __n (which is 4) &gt;= _Nm (which is 4)
//===============================================</pre><br>Utilisation de la déduction automatique du type (auto):<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#include &lt;iostream&gt;
#include &lt;array&gt;
//===============================================
int main (int _argc, char** _argv) {
    std::array&lt;int, 5&gt; arr = {1, 2, 3, 4, 5};
    for(auto element: arr) {
        std::cout &lt;&lt; element &lt;&lt; ' ';
    }
    std::cout &lt;&lt; std::endl;
    return 0;
}
//===============================================
1 2 3 4 5
//===============================================</pre><br>Utilisation des itérateurs:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#include &lt;iostream&gt;
#include &lt;array&gt;
//===============================================
int main (int _argc, char** _argv) {
    std::array&lt;int, 5&gt; arr = {1, 2, 3, 4, 5};
    for(auto it = arr.begin(); it != arr.end(); it++) {
        auto element = (*it);
        std::cout &lt;&lt; element &lt;&lt; ' ';
    }
    std::cout &lt;&lt; std::endl;
    return 0;
}
//===============================================
1 2 3 4 5
//===============================================</pre><br>Utilisation des itérateurs constants:&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#include &lt;iostream&gt;
#include &lt;array&gt;
//===============================================
int main (int _argc, char** _argv) {
    const std::array&lt;int, 5&gt; arr = {1, 2, 3, 4, 5};
    for(auto it = arr.begin(); it != arr.end(); it++) {
        auto element = (*it);
        std::cout &lt;&lt; element &lt;&lt; ' ';
    }
    std::cout &lt;&lt; std::endl;
    return 0;
}
//===============================================
1 2 3 4 5
//===============================================</pre><br>Utilisation des itérateurs inversés:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#include &lt;iostream&gt;
#include &lt;array&gt;
//===============================================
int main (int _argc, char** _argv) {
    std::array&lt;int, 5&gt; arr = {1, 2, 3, 4, 5};
    for(auto it = arr.rbegin(); it != arr.rend(); it++) {
        auto element = (*it);
        std::cout &lt;&lt; element &lt;&lt; ' ';
    }
    std::cout &lt;&lt; std::endl;
    return 0;
}
//===============================================
5 4 3 2 1
//===============================================</pre><br>Utilisation de l'incrémentation avancée des itérateurs:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#include &lt;iostream&gt;
#include &lt;array&gt;
//===============================================
int main (int _argc, char** _argv) {
    std::array&lt;int, 6&gt; arr = {1, 2, 3, 4, 5, 6};
    std::cout &lt;&lt; arr[0]&lt;&lt; std::endl;

    auto it = arr.begin();
    std::advance(it, 2);
    std::cout &lt;&lt;  (*it) &lt;&lt; std::endl;

    auto it2 = arr.end();
    std::advance(it2, -2);
    std::cout &lt;&lt;  (*it2) &lt;&lt; std::endl;

    return 0;
}
//===============================================
1
3
5
//===============================================</pre><br>Récupération du premier élément (front):<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#include &lt;iostream&gt;
#include &lt;array&gt;
//===============================================
int main (int _argc, char** _argv) {
    std::array&lt;int, 5&gt; arr = {1, 2, 3, 4, 5};
    std::cout &lt;&lt; arr.front() &lt;&lt; std::endl;
    return 0;
}
//===============================================
1
//===============================================</pre><br>Récupération du dernier élément (back):&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#include &lt;iostream&gt;
#include &lt;array&gt;
//===============================================
int main (int _argc, char** _argv) {
    std::array&lt;int, 5&gt; arr = {1, 2, 3, 4, 5};
    std::cout &lt;&lt; arr.back() &lt;&lt; std::endl;
    return 0;
}
//===============================================
5
//===============================================</pre><br>Utilisation du pointeur de données (data):<br>&nbsp;&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#include &lt;iostream&gt;
#include &lt;array&gt;
//===============================================
int main (int _argc, char** _argv) {
    std::array&lt;int, 5&gt; arr = {1, 2, 3, 4, 5};
    std::cout &lt;&lt; *(arr.data() + 2) &lt;&lt; std::endl;
    return 0;
}
//===============================================
3
//===============================================</pre><br>Utilisation des opérateur de comparaisons:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
#include &lt;iostream&gt;
#include &lt;array&gt;
//===============================================
int main (int _argc, char** _argv) {
    std::array&lt;int, 5&gt; arr = {1, 2, 3, 4, 5};
    std::array&lt;int, 5&gt; arr2 = arr;
    std::array&lt;int, 5&gt; arr3 = {0, 4, 3, 2, 1};
    // 1
    if(arr == arr) {
        std::cout &lt;&lt; "1 : Les tableaux sont identiques.\n";
    }
    // 2
    if(arr == arr2) {
        std::cout &lt;&lt; "2 : Les tableaux sont identiques.\n";
    }
    // 3
    if(arr != arr3) {
        std::cout &lt;&lt; "3 : Les tableaux sont differents.\n";
    }
    // 4
    if(arr &gt; arr3) {
        std::cout &lt;&lt; "4 : Le tableau 1 &gt; 3.\n";
    }
    return 0;
}
//===============================================
1 : Les tableaux sont identiques.
2 : Les tableaux sont identiques.
3 : Les tableaux sont differents.
4 : Le tableau 1 &gt; 3.
//===============================================</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="listes--piles-et-files-d-attente_exercice-1---implementation-d-un-tableau-de-taille-dynamique" href="#listes--piles-et-files-d-attente">Exercice 1&nbsp;: Implémentation d'un tableau de taille dynamique</a>
</h2><br>Structure des données:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
template &lt;typename T&gt;
class dynamic_array {
private:
    T* data;
    size_t n;
};
//===============================================</pre><br>Constructeur avec la taille:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
template &lt;typename T&gt;
class dynamic_array {
public:
    //===============================================
    dynamic_array(int n) {
        this-&gt;n = n;
        data = new T[n];
    }
    //===============================================
};
//===============================================</pre><br>Constructeur de copie:&nbsp;<br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="arbres--tas-et-graphiques">Arbres, tas et graphiques</a>
</h1>
<div class="Section6"><br>À suivre...<br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="tables-de-hachage-et-filtres-bloom">Tables de hachage et filtres Bloom</a>
</h1>
<div class="Section6"><br>À suivre...<br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="diviser-et-conquerir">Diviser et conquérir</a>
</h1>
<div class="Section6"><br>À suivre...<br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="algorithmes-gourmands">Algorithmes gourmands</a>
</h1>
<div class="Section6"><br>À suivre...<br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="algorithmes-graphiques-i">Algorithmes graphiques I</a>
</h1>
<div class="Section6"><br>À suivre...<br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="algorithmes-graphiques-ii">Algorithmes graphiques II</a>
</h1>
<div class="Section6"><br>À suivre...<br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="programmation-dynamique-i">Programmation dynamique I</a>
</h1>
<div class="Section6"><br>À suivre...<br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="programmation-dynamique-ii">Programmation dynamique II</a>
</h1>
<div class="Section6"><br>À suivre...<br><br></div>
</div>
</div>
</div><br>