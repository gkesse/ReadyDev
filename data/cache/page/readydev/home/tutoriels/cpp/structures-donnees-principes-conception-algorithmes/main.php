<div class="GAccess1 Access1">
<a class="GAccess2 Access2" href="/home">Accueil</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels">Tutoriels</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels#cpp">C++</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels/cpp/structures-donnees-principes-conception-algorithmes-cpp">Structures données principes conception algorithmes</a></div><div class="GParallax1 Parallax1">
<div class="Parallax2" style="background-image: url(&quot;/data/img/defaults/binary.png&quot;);">
<div class="Parallax3"><a href="#" class="Parallax4">Structures de données et principes de<br>conception d'algorithmes en C++</a></div>
</div>
<div class="Parallax5" style="background-color: rgb(128, 51, 0);"><br>Ce tutoriel est un recueil de recettes pratiques pour la mise en oeuvre des <b>structures de données</b> et comprendre les principes de conception d'<b>algorithmes</b> en <b>C++</b>.<br><br><div class="GSummary1"><div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#listes--piles-et-files-d-attente">Listes, piles et files d'attente</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#arbres--tas-et-graphes">Arbres, tas et graphes</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#codes-sources">Codes sources</a>
</div>
</div><br></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="listes--piles-et-files-d-attente">Listes, piles et files d'attente</a>
</h1>
<div class="Section6"><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#listes--piles-et-files-d-attente_tableau-dynamique">Tableau dynamique</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#listes--piles-et-files-d-attente_tableau-polyvalent">Tableau polyvalent</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#listes--piles-et-files-d-attente_suppression-conditionnelle-d-une-liste-d-objets">Suppression conditionnelle d'une liste d'objets</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#listes--piles-et-files-d-attente_iterateurs">Itérateurs</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#listes--piles-et-files-d-attente_liste-chainee">Liste chaînée</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#listes--piles-et-files-d-attente_tableau-de-type--std--list-">Tableau de type (std::list)</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#listes--piles-et-files-d-attente_liste-doublement-chainee">Liste doublement chaînée</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#listes--piles-et-files-d-attente_jeu-de-cartes">Jeu de cartes</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#listes--piles-et-files-d-attente_file-d-attente">File d'attente</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="listes--piles-et-files-d-attente_tableau-dynamique" href="#listes--piles-et-files-d-attente">Tableau dynamique</a>
</h2><br>Nous souhaitons implémenter un tableau dynamique avec les caractéristiques suivantes.<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le tableau dynamique sera construit sur la pile avec une taille fixe.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le tableau dynamique disposera d'itérateur afin de parcourir automatiquement les données du tableau.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#include &lt;iostream&gt;
#include &lt;sstream&gt;
#include &lt;algorithm&gt;

// on peut modéliser un tableau dynamique
// par sa donnée (data) et sa taille (n)
// de la manière suivante
template &lt;typename T&gt;
class dynamic_array
{
public:
    // on peut implémenter le constructeur par taille
    // d'un tableau dynamique de la manière suivante
    dynamic_array(size_t n)
    {
        this-&gt;n = n;
        data = new T[n];
    }

    // on peut implémenter le constructeur par copie
    // d'un tableau dynamique de la manière suivante
    dynamic_array(const dynamic_array&lt;T&gt; &amp;other)
    {
        n = other.n;
        data = new T[n];
        for (int i = 0; i &lt; n; i++)
            data[i] = other[i];
    }

    // on peut implémenter le destructeur
    // d'un tableau dynamique de la manière suivante
    ~dynamic_array()
    {
        delete[] data;
    }

    // on peut récupérer un élément à un indice donné
    // d'un tableau dynamique de la manière suivante
    T &amp;operator[](int index)
    {
        return data[index];
    }

    // on peut récupérer un élément constant à un indice donné
    // d'un tableau dynamique de la manière suivante
    const T &amp;operator[](int index) const
    {
        return data[index];
    }

    // on peut récupérer un élément à un indice donné
    // d'un tableau dynamique de la manière suivante
    T &amp;at(int index)
    {
        if (index &lt; n)
            return data[index];
        throw "Index out of range";
    }

    // on peut récupérer la taille
    // d'un tableau dynamique de la manière suivante
    size_t size() const
    {
        return n;
    }

    // on peut récupérer l'itérateur de début
    // d'un tableau dynamique de la manière suivante
    T *begin()
    {
        return data;
    }

    // on peut récupérer l'itérateur de début constant
    // d'un tableau dynamique de la manière suivante
    const T *begin() const
    {
        return data;
    }

    // on peut récupérer l'itérateur de fin
    // d'un tableau dynamique de la manière suivante
    T *end()
    {
        return data + n;
    }

    // on peut récupérer l'itérateur de fin constant
    // d'un tableau dynamique de la manière suivante
    const T *end() const
    {
        return data + n;
    }

    // on peut fusionner deux tableaux dynamiques
    // de la manière suivante
    friend dynamic_array&lt;T&gt; operator+(
        const dynamic_array&lt;T&gt; &amp;arr1,
        const dynamic_array&lt;T&gt; &amp;arr2)
    {
        dynamic_array&lt;T&gt; result(arr1.size() + arr2.size());
        std::copy(arr1.begin(), arr1.end(), result.begin());
        std::copy(arr2.begin(), arr2.end(), result.begin() + arr1.size());
        return result;
    }

    // on peut afficher un tableau dynamique
    // de la manière suivante
    friend std::ostream &amp;operator&lt;&lt;(std::ostream &amp;_out, const dynamic_array&lt;T&gt; &amp;_arr)
    {
        _out &lt;&lt; "{";
        bool isSep = false;
        for (const auto &amp;item : _arr)
        {
            if (isSep)
            {
                _out &lt;&lt; ", ";
            }
            _out &lt;&lt; item;
            isSep = true;
        }
        _out &lt;&lt; "}";
        return _out;
    }

private:
    T *data;
    size_t n;
};

// on peut modéliser un étudiant
// par son nom (name) et son niveau (standard)
// de la manière suivante
struct student
{
    std::string name;
    int standard;
};

// on peut afficher un étudiant
// de la manière suivante
std::ostream &amp;operator&lt;&lt;(std::ostream &amp;os, const student &amp;s)
{
    return (os &lt;&lt; "{" &lt;&lt; s.name &lt;&lt; ", " &lt;&lt; s.standard &lt;&lt; "}");
}

// on peut mettre en oeuvre un tableau dynamique
// de la manière suivante
int main(int argc, char **argv)
{
    // construction d'un tableau dynamique
    dynamic_array&lt;student&gt; class1(2);
    class1[0] = {"Name1", 1};
    class1[1] = {"Name2", 2};
    std::cout &lt;&lt; "(1): " &lt;&lt; class1 &lt;&lt; std::endl;
    //(1): {{Name1, 1}, {Name2, 2}}

    // construction par copie d'un tableau dynamique
    auto class2 = class1;
    std::cout &lt;&lt; "(2): " &lt;&lt; class2 &lt;&lt; std::endl;
    //(2): {{Name1, 1}, {Name2, 2}}

    // fusion de deux tableaux dynamiques
    auto class3 = class1 + class2;
    std::cout &lt;&lt; "(3): " &lt;&lt; class3 &lt;&lt; std::endl;
    //(3): {{Name1, 1}, {Name2, 2}, {Name1, 1}, {Name2, 2}}

    return 0;
}</pre><br>Résultat des tests.<br><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
(1): {{Name1, 1}, {Name2, 2}}
(2): {{Name1, 1}, {Name2, 2}}
(3): {{Name1, 1}, {Name2, 2}, {Name1, 1}, {Name2, 2}}
...</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="listes--piles-et-files-d-attente_tableau-polyvalent" href="#listes--piles-et-files-d-attente">Tableau polyvalent</a>
</h2><br>Nous souhaitons implémenter un constructeur de tableau polyvalent avec les caractéristiques suivantes.<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Le constructeur permettra de créer un tableau pouvant stocker des données de différents types avec une taille quelconque.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#include &lt;iostream&gt;
#include &lt;array&gt;
#include &lt;type_traits&gt;

// on peut implémenter la construction
// d'un tableau polyvalent de la manière suivante
template &lt;typename... Args&gt;
auto build_array(Args &amp;&amp;...args)
    -&gt; std::array&lt;typename std::common_type&lt;Args...&gt;::type, sizeof...(args)&gt;
{
    using commonType = typename std::common_type&lt;Args...&gt;::type;
    return {std::forward&lt;commonType&gt;((float)args)...};
}

// on peut afficher les éléments
// d'un tableau polyvalent de la manière suivante
template &lt;size_t N&gt;
std::ostream &amp;operator&lt;&lt;(std::ostream &amp;_out, const std::array&lt;float, N&gt; &amp;_list)
{
    bool isSep = false;
    _out &lt;&lt; "{";
    for (const auto &amp;item : _list)
    {
        if (isSep)
        {
            _out &lt;&lt; ", ";
        }
        _out &lt;&lt; item;
        isSep = true;
    }
    _out &lt;&lt; "}";
    return _out;
}

// on peut mettre en oeuvre la construction
// d'un tableau polyvalent de la manière suivante
int main(int argc, char **argv)
{
    // construction et affichage d'un tableau polyvalent
    auto data = build_array(10, 20u, 'a', 30.5f, false);
    std::cout &lt;&lt; "(1): " &lt;&lt; data &lt;&lt; std::endl;
    auto data2 = build_array(11, 21u, 'b', 31.5f, true, 12, 22u, 'c');
    std::cout &lt;&lt; "(2): " &lt;&lt; data2 &lt;&lt; std::endl;
    //(1): {10, 20, 97, 30.5, 0}
    //(2): {11, 21, 98, 31.5, 1, 12, 22, 99}

    // erreur à la compilation
    // lorsque tous les arguments du constructeur de tableau polyvalent
    // ne peuvent pas être convertis en un seul type
    // auto data3 = build_array(1, "String", 2.0);

    return 0;
}</pre><br>Résultat des tests.<br><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
(1): {10, 20, 97, 30.5, 0}
(2): {11, 21, 98, 31.5, 1, 12, 22, 99}
...</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="listes--piles-et-files-d-attente_suppression-conditionnelle-d-une-liste-d-objets" href="#listes--piles-et-files-d-attente">Suppression conditionnelle d'une liste d'objets</a>
</h2><br>Nous souhaitons mettre en oeuvre la suppression conditionnelle d'un ensemble d'objets à partir d'une liste. Pour cela, nous créons une application avec les caractéristiques suivantes.<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">L'application permettant de gérer une liste de citoyens.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">L'application permettant de supprimer des citoyens en fonction de leur âge.</div>
</div><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#include &lt;iostream&gt;
#include &lt;forward_list&gt;

// on peut modéliser un citoyen
// par nom (name) et son âge (age)
// de la manière suivante
struct citizen
{
    std::string name;
    int age;
};

// on peut afficher un citoyen
// de la manière suivante
std::ostream &amp;operator&lt;&lt;(std::ostream &amp;_out, const citizen &amp;_citizen)
{
    return (_out &lt;&lt; "{" &lt;&lt; _citizen.name &lt;&lt; ", " &lt;&lt; _citizen.age &lt;&lt; "}");
}

// on peut afficher une liste de citoyens
// de la manière suivante
template &lt;typename T&gt;
std::ostream &amp;operator&lt;&lt;(std::ostream &amp;_out, const std::forward_list&lt;T&gt; &amp;_list)
{
    bool isSep = false;
    _out &lt;&lt; "{";
    for (const auto &amp;item : _list)
    {
        if (isSep)
        {
            _out &lt;&lt; ", ";
        }
        _out &lt;&lt; item;
        isSep = true;
    }
    _out &lt;&lt; "}";
    return _out;
}

// on peut mettre en oeuvre la suppression des éléments d'une liste
// de la manière suivante
int main(int argc, char **argv)
{
    // création de la liste de citoyens
    std::forward_list&lt;citizen&gt; citizens =
        {
            {"Raj", 22},
            {"Rohit", 25},
            {"Rohan", 17},
            {"Sachin", 16},
        };
    std::cout &lt;&lt; "(1): " &lt;&lt; citizens &lt;&lt; std::endl;
    // (1): {{Raj, 22}, {Rohit, 25}, {Rohan, 17}, {Sachin, 16}}

    // suppression de tous les citoyens tels que (age &lt; 18)
    auto citizens_copy = citizens;
    citizens.remove_if(
        [](const citizen &amp;c)
        {
            return (c.age &lt; 18);
        });
    std::cout &lt;&lt; "(2): " &lt;&lt; citizens &lt;&lt; std::endl;
    // (2): {{Raj, 22}, {Rohit, 25}}

    // suppression de tous les citoyens tels que (age != 17)
    citizens_copy.remove_if(
        [](const citizen &amp;c)
        {
            return (c.age != 17);
        });
    std::cout &lt;&lt; "(3): " &lt;&lt; citizens_copy &lt;&lt; std::endl;
    // (3): {{Rohan, 17}}

    return 0;
}</pre><br>Résultat des tests.<br><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
(1): {{Raj, 22}, {Rohit, 25}, {Rohan, 17}, {Sachin, 16}}
(2): {{Raj, 22}, {Rohit, 25}}
(3): {{Rohan, 17}}
...</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="listes--piles-et-files-d-attente_iterateurs" href="#listes--piles-et-files-d-attente">Itérateurs</a>
</h2><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#include &lt;iostream&gt;
#include &lt;forward_list&gt;
#include &lt;vector&gt;

// on peut afficher une liste (vector)
// de la manière suivante
std::ostream &amp;operator&lt;&lt;(
    std::ostream &amp;_out, const std::vector&lt;std::string&gt; &amp;_list)
{
    bool isSep = false;
    _out &lt;&lt; "{";
    for (const auto &amp;item : _list)
    {
        if (isSep)
        {
            _out &lt;&lt; ", ";
        }
        _out &lt;&lt; item;
        isSep = true;
    }
    _out &lt;&lt; "}";
    return _out;
}

// on peut afficher une liste (forward_list)
// de la manière suivante
std::ostream &amp;operator&lt;&lt;(
    std::ostream &amp;_out, const std::forward_list&lt;std::string&gt; &amp;_list)
{
    bool isSep = false;
    _out &lt;&lt; "{";
    for (const auto &amp;song : _list)
    {
        if (isSep)
        {
            _out &lt;&lt; ", ";
        }
        _out &lt;&lt; song;
        isSep = true;
    }
    _out &lt;&lt; "}";
    return _out;
}

// on peut mettre en oeuvre l'utilisation des itérateurs
// de la manière suivante
int main(int argc, char **argv)
{
    // création d'une liste (vector)
    std::vector&lt;std::string&gt; vec = {
        "Lewis Hamilton",
        "Lewis Hamilton",
        "Nico Roseberg ",
        "Sebastian Vettel",
        "Lewis Hamilton",
        "Sebastian Vettel",
        "Sebastian Vettel",
        "Sebastian Vettel",
        "Fernando Alonso",
    };
    std::cout &lt;&lt; "(1): " &lt;&lt; vec &lt;&lt; std::endl;
    // (1): {Lewis Hamilton, Lewis Hamilton, Nico Roseberg ,
    //       Sebastian Vettel, Lewis Hamilton, Sebastian Vettel,
    //       Sebastian Vettel, Sebastian Vettel, Fernando Alonso}

    // récupération du premier élément d'une liste (vector)
    auto it = vec.begin(); // Temps constant
    std::cout &lt;&lt; "(2): " &lt;&lt; *it &lt;&lt; std::endl;
    // (2): Lewis Hamilton

    // Auto-addion d'un itérateur d'une liste (vector)
    it += 8; // Temps constant
    std::cout &lt;&lt; "(3): " &lt;&lt; *it &lt;&lt; std::endl;
    // (3): Fernando Alonso

    // déplacement en arrière d'un itérateur d'une liste (vector)
    advance(it, -3); // Temps constant
    std::cout &lt;&lt; "(4): " &lt;&lt; *it &lt;&lt; std::endl;
    // (4): Sebastian Vettel

    // copie d'une liste (vector) vers une liste (forward_list)
    std::forward_list&lt;std::string&gt; fwd(vec.begin(), vec.end());
    std::cout &lt;&lt; "(5): " &lt;&lt; fwd &lt;&lt; std::endl;
    // (5): {Lewis Hamilton, Lewis Hamilton, Nico Roseberg ,
    // Sebastian Vettel, Lewis Hamilton, Sebastian Vettel,
    // Sebastian Vettel, Sebastian Vettel, Fernando Alonso}

    // récupération du premier élément d'une liste (forward_list)
    auto it1 = fwd.begin();
    std::cout &lt;&lt; "(6): " &lt;&lt; *it &lt;&lt; std::endl;
    // (6): Sebastian Vettel

    // déplacement en avant d'un itérateur d'une liste (forward_list)
    advance(it1, 5); // Temps proportionnel au nombre d'éléments
    std::cout &lt;&lt; "(7): " &lt;&lt; *it &lt;&lt; std::endl;
    // (7): Sebastian Vettel

    // erreur à l'exécution
    // lors du déplacement en arrière d'un itérateur d'une liste (forward_list)
    // advance(it1, -2); // Runtime error

    // erreur à la compilation
    // lors de l'auto-addition d'un itérateur d'une liste (forward_list)
    // it1 += 2; // Compiler error

    return 0;
}</pre><br>Résultat des tests.<br><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
(1): {Lewis Hamilton, Lewis Hamilton, Nico Roseberg , Sebastian Vettel, 
Lewis Hamilton, Sebastian Vettel, Sebastian Vettel, Sebastian Vettel, 
Fernando Alonso}
(2): Lewis Hamilton
(3): Fernando Alonso
(4): Sebastian Vettel
(5): {Lewis Hamilton, Lewis Hamilton, Nico Roseberg , Sebastian Vettel,
Lewis Hamilton, Sebastian Vettel, Sebastian Vettel, Sebastian Vettel, 
Fernando Alonso}
(6): Sebastian Vettel
(7): Sebastian Vettel
...</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="listes--piles-et-files-d-attente_liste-chainee" href="#listes--piles-et-files-d-attente">Liste chaînée</a>
</h2><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#include &lt;iostream&gt;
#include &lt;algorithm&gt;

// on peut modéliser un noeud d'une liste chaînée
// par sa donnée (data) et son pointeur de noeud suivant (next)
// de la manière suivante
struct singly_ll_node
{
    int data;
    singly_ll_node *next;
};

// on peut modéliser un itérateur d'une liste chaînée
// par son pointeur de noeud (ptr)
// de la manière suivante
class singly_ll_iterator
{
public:
    using node = singly_ll_node;
    using node_ptr = node *;

public:
    // on peut implémenter le constructeur par pointeur d'un itérateur
    // d'une liste chaînée de la manière suivante
    singly_ll_iterator(node_ptr p)
        : ptr(p)
    {
    }

    // on peut récupérer la donnée d'un itérateur
    // d'une liste chaînée de la manière suivante
    int &amp;operator*()
    {
        return ptr-&gt;data;
    }

    // on peut récupérer le pointeur direct d'un itérateur
    // d'une liste chaînée de la manière suivante
    node_ptr get()
    {
        return ptr;
    }

    // on peut pré-incrémenter un itérateur
    // d'une liste chaînée de la manière suivante
    singly_ll_iterator &amp;operator++()
    {
        ptr = ptr-&gt;next;
        return *this;
    }

    // on peut post-incrémenter un itérateur
    // d'une liste chaînée de la manière suivante
    singly_ll_iterator operator++(int)
    {
        singly_ll_iterator result = *this;
        ++(*this);
        return result;
    }

    // on peut comparer l'égalité entre deux itérateurs
    // d'une liste chaînée de la manière suivante
    friend bool operator==(
        const singly_ll_iterator &amp;left,
        const singly_ll_iterator &amp;right)
    {
        return left.ptr == right.ptr;
    }

    // on peut comparer la différence entre deux itérateurs
    // d'une liste chaînée de la manière suivante
    friend bool operator!=(
        const singly_ll_iterator &amp;left,
        const singly_ll_iterator &amp;right)
    {
        return left.ptr != right.ptr;
    }

private:
    node_ptr ptr;
};

// on peut modéliser une liste chaînée
// par son pointeur de noeud de départ (head)
// et son pointeur de noeud de fin (m_end)
// de la manière suivante
class singly_ll
{
public:
    using node = singly_ll_node;
    using node_ptr = node *;
    using iterator = singly_ll_iterator;

public:
    // on peut implémenter le constructeur par défaut
    // d'une liste chaînée de la manière suivante
    singly_ll()
    {
        head = new node{0, nullptr};
        m_end = head;
    }

    // on peut implémenter le constructeur par liste
    // d'une liste chaînée de la manière suivante
    singly_ll(const std::initializer_list&lt;int&gt; &amp;ilist)
        : singly_ll()
    {
        for (auto it = std::rbegin(ilist); it != std::rend(ilist); it++)
            push_front(*it);
    }

    // on peut implémenter le constructeur par copie
    // d'une liste chaînée de la manière suivante
    singly_ll(const singly_ll &amp;other)
        : singly_ll()
    {
        for (auto i : other)
        {
            m_end-&gt;data = i;
            m_end-&gt;next = new node{0, nullptr};
            m_end = m_end-&gt;next;
        }
    }

    // on peut implémenter le destructeur
    // d'une liste chaînée de la manière suivante
    ~singly_ll()
    {
        node_ptr node = head;
        while (node)
        {
            node_ptr cur = node;
            node = node-&gt;next;
            delete cur;
        }
    }

    // on peut ajouter un élément au début
    // d'une liste chaînée de la manière suivante
    void push_front(int val)
    {
        auto new_node = new node{val, nullptr};
        new_node-&gt;next = head;
        head = new_node;
    }

    // on peut supprimer un élément à la fin
    // d'une liste chaînée de la manière suivante
    void pop_front()
    {
        auto first = head;
        if (head-&gt;next)
        {
            head = head-&gt;next;
            delete first;
        }
        else
            throw "Empty list";
    }

    // on peut récupérer l'itérateur de début
    // d'une liste chaînée de la manière suivante
    singly_ll_iterator begin()
    {
        return singly_ll_iterator(head);
    }

    // on peut récupérer l'itérateur de fin
    // d'une liste chaînée de la manière suivante
    singly_ll_iterator end()
    {
        return singly_ll_iterator(m_end);
    }

    // on peut récupérer l'itérateur constant de début
    // d'une liste chaînée de la manière suivante
    singly_ll_iterator begin() const
    {
        return singly_ll_iterator(head);
    }

    // on peut récupérer l'itérateur constant de fin
    // d'une liste chaînée de la manière suivante
    singly_ll_iterator end() const
    {
        return singly_ll_iterator(m_end);
    }

    // on peut afficher les éléments
    // une liste chaînée de la manière suivante
    friend std::ostream &amp;operator&lt;&lt;(std::ostream &amp;_out, const singly_ll &amp;_list)
    {
        bool isSep = false;
        _out &lt;&lt; "{";
        for (const auto &amp;item : _list)
        {
            if (isSep)
            {
                _out &lt;&lt; ", ";
            }
            _out &lt;&lt; item;
            isSep = true;
        }
        _out &lt;&lt; "}";
        return _out;
    }

private:
    node_ptr head;
    node_ptr m_end;
};

// on peut mettre en oeuvre une liste chaînée
// de la manière suivante
int main(int argc, char **argv)
{
    // construction par défaut d'une liste chaînée
    singly_ll sll;

    // ajout de données au début d'une liste chaînée
    sll.push_front(10);
    sll.push_front(20);
    sll.push_front(30);
    sll.push_front(40);
    sll.push_front(50);
    std::cout &lt;&lt; "(1): " &lt;&lt; sll &lt;&lt; std::endl;
    // (1): {50, 40, 30, 20, 10}

    // suppression de données au début d'une liste chaînée
    sll.pop_front();
    sll.pop_front();
    std::cout &lt;&lt; "(2): " &lt;&lt; sll &lt;&lt; std::endl;
    // (2): {30, 20, 10}

    // construction par liste d'une liste chaînée
    singly_ll sll2 = {10, 20, 30, 40, 50};
    sll2.push_front(0);
    sll2.push_front(-10);
    std::cout &lt;&lt; "(3): " &lt;&lt; sll2 &lt;&lt; std::endl;
    // (3): {-10, 0, 10, 20, 30, 40, 50}

    // construction par copie d'une liste chaînée
    auto sll3 = sll2;
    sll3.push_front(-20);
    sll3.push_front(-30);
    std::cout &lt;&lt; "(4): " &lt;&lt; sll3 &lt;&lt; std::endl;
    // (4): {-30, -20, -10, 0, 10, 20, 30, 40, 50}

    // parcours par itération d'une liste chaînée
    std::cout &lt;&lt; "(5): {";
    for (singly_ll::iterator it = sll3.begin(); it != sll3.end(); it++)
    {
        if (it != sll3.begin())
        {
            std::cout &lt;&lt; ", ";
        }
        std::cout &lt;&lt; *it;
    }
    std::cout &lt;&lt; "}" &lt;&lt; std::endl;
    // (5): {-30, -20, -10, 0, 10, 20, 30, 40, 50}

    return 0;
}</pre><br>Résultat des tests.<br><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
(1): {50, 40, 30, 20, 10}
(2): {30, 20, 10}
(3): {-10, 0, 10, 20, 30, 40, 50}
(4): {-30, -20, -10, 0, 10, 20, 30, 40, 50}
(5): {-30, -20, -10, 0, 10, 20, 30, 40, 50}
...</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="listes--piles-et-files-d-attente_tableau-de-type--std--list-" href="#listes--piles-et-files-d-attente">Tableau de type (std::list)</a>
</h2><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#include &lt;iostream&gt;
#include &lt;list&gt;
#include &lt;vector&gt;

// on peut afficher les éléments
// d'une liste (list) de la manière suivante
template &lt;typename T&gt;
std::ostream &amp;operator&lt;&lt;(std::ostream &amp;_out, std::list&lt;T&gt; _list)
{
    _out &lt;&lt; "{";
    bool isSep = false;
    for (const auto &amp;data : _list)
    {
        if (isSep)
        {
            _out &lt;&lt; ", ";
        }
        _out &lt;&lt; data;
        isSep = true;
    }
    _out &lt;&lt; "}";

    return _out;
}

// on peut afficher les éléments
// d'une liste (vector) de la manière suivante
template &lt;typename T&gt;
std::ostream &amp;operator&lt;&lt;(std::ostream &amp;_out, std::vector&lt;T&gt; _list)
{
    _out &lt;&lt; "{";
    bool isSep = false;
    for (const auto &amp;data : _list)
    {
        if (isSep)
        {
            _out &lt;&lt; ", ";
        }
        _out &lt;&lt; data;
        isSep = true;
    }
    _out &lt;&lt; "}";

    return _out;
}

// on peut mettre en oeuvre
// une liste (list) de la manière suivante
int main(int argc, char **argv)
{
    // construction par liste d'une liste (list)
    std::list&lt;int&gt; list1 = {1, 2, 3, 4, 5};
    std::cout &lt;&lt; "(01): " &lt;&lt; list1 &lt;&lt; std::endl;
    // (01): {1, 2, 3, 4, 5}

    // ajout d'un élément à la fin d'une liste (list)
    list1.push_back(6);
    std::cout &lt;&lt; "(02): " &lt;&lt; list1 &lt;&lt; std::endl;
    // (02): {1, 2, 3, 4, 5, 6}

    // insertion d'un élément après le premier élément d'une liste (list)
    list1.insert(next(list1.begin()), 0);
    std::cout &lt;&lt; "(03): " &lt;&lt; list1 &lt;&lt; std::endl;
    // (03): {1, 0, 2, 3, 4, 5, 6}

    // insertion d'un élément à la fin d'une liste (list)
    list1.insert(list1.end(), 7);
    std::cout &lt;&lt; "(04): " &lt;&lt; list1 &lt;&lt; std::endl;
    // (04): {1, 0, 2, 3, 4, 5, 6, 7}

    // suppression d'un élément à la fin d'une liste (list)
    list1.pop_back();
    std::cout &lt;&lt; "(05): " &lt;&lt; list1 &lt;&lt; std::endl;
    // (05): {1, 0, 2, 3, 4, 5, 6}

    // construction par liste d'une liste (vector)
    std::vector&lt;int&gt; vec = {1, 2, 3, 4, 5};
    std::cout &lt;&lt; "(06): " &lt;&lt; vec &lt;&lt; std::endl;
    // (06): {1, 2, 3, 4, 5}

    // accès à un élément à l'indice (4) d'une liste (vector)
    auto it4 = vec.begin() + 4;
    std::cout &lt;&lt; "(07): " &lt;&lt; *it4 &lt;&lt; std::endl;
    // (07): 5

    // insertion d'un élément à l'indice (2) d'une liste (vector)
    vec.insert(vec.begin() + 2, 0);
    std::cout &lt;&lt; "(08): " &lt;&lt; vec &lt;&lt; std::endl;
    // (08): {1, 2, 0, 3, 4, 5}

    // accès à un élément à l'indice (4) d'une liste (list)
    std::list&lt;int&gt; lst = {1, 2, 3, 4, 5};
    std::cout &lt;&lt; "(09): " &lt;&lt; lst &lt;&lt; std::endl;
    auto l_it4 = next(lst.begin(), 4);
    std::cout &lt;&lt; "(10): " &lt;&lt; *l_it4 &lt;&lt; std::endl;
    // (09): {1, 2, 3, 4, 5}
    // (10): 5

    // insertion à un élément à l'indice (2) d'une liste (list)
    lst.insert(next(lst.begin(), 2), 0);
    std::cout &lt;&lt; "(11): " &lt;&lt; lst &lt;&lt; std::endl;
    // (11): {1, 2, 0, 3, 4, 5}

    return 0;
}</pre><br>Résultat des tests.<br><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
(01): {1, 2, 3, 4, 5}
(02): {1, 2, 3, 4, 5, 6}
(03): {1, 0, 2, 3, 4, 5, 6}
(04): {1, 0, 2, 3, 4, 5, 6, 7}
(05): {1, 0, 2, 3, 4, 5, 6}
(06): {1, 2, 3, 4, 5}
(07): 5
(08): {1, 2, 0, 3, 4, 5}
(09): {1, 2, 3, 4, 5}
(10): 5
(11): {1, 2, 0, 3, 4, 5}
...</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="listes--piles-et-files-d-attente_liste-doublement-chainee" href="#listes--piles-et-files-d-attente">Liste doublement chaînée</a>
</h2><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#include &lt;iostream&gt;
#include &lt;vector&gt;
#include &lt;array&gt;
#include &lt;sstream&gt;
#include &lt;algorithm&gt;
#include &lt;random&gt;
#include &lt;chrono&gt;

// on peut modéliser un noeud d'une liste doublement chaînée
// par sa donnée (data), son pointeur de noeud suivant (next)
// et son pointeur de noeud précédent (prev)
// de la manière suivante
template &lt;typename T&gt;
struct cir_list_node
{
    ~cir_list_node()
    {
        delete data;
    }

    T *data;
    cir_list_node *next, *prev;
};

// on peut modéliser un itérateur d'une liste doublement chaînée
// par son pointeur de noeud (ptr)
// de la manière suivante
template &lt;typename T&gt;
struct cir_list_it
{
public:
    using node = cir_list_node&lt;T&gt;;
    using node_ptr = node *;

public:
    // on peut implémenter le constructeur par pointeur d'un itérateur
    // d'une liste doublement chaînée de la manière suivante
    cir_list_it(node_ptr p)
        : ptr(p)
    {
    }

    // on peut récupérer le contenu de la donnée d'un itérateur
    // d'une liste doublement chaînée de la manière suivante
    T &amp;operator*()
    {
        return *(ptr-&gt;data);
    }

    // on peut récupérer le pointeur de noeud d'un itérateur
    // d'une liste doublement chaînée de la manière suivante
    node_ptr get()
    {
        return ptr;
    }

    // on peut pré-incrémenter un itérateur
    // d'une liste doublement chaînée de la manière suivante
    cir_list_it &amp;operator++()
    {
        ptr = ptr-&gt;next;
        return *this;
    }

    // on peut post-incrémenter un itérateur
    // d'une liste doublement chaînée de la manière suivante
    cir_list_it operator++(int)
    {
        cir_list_it it = *this;
        ++(*this);
        return it;
    }

    // on peut pré-décrémenter un itérateur
    // d'une liste doublement chaînée de la manière suivante
    cir_list_it &amp;operator--()
    {
        ptr = ptr-&gt;prev;
        return *this;
    }

    // on peut post-décrémenter un itérateur
    // d'une liste doublement chaînée de la manière suivante
    cir_list_it operator--(int)
    {
        cir_list_it it = *this;
        --(*this);
        return it;
    }

    // on peut comparer l'égalité entre deux itérateurs
    // d'une liste doublement chaînée de la manière suivante
    friend bool operator==(
        const cir_list_it &amp;it1, const cir_list_it &amp;it2)
    {
        return it1.ptr == it2.ptr;
    }

    // on peut comparer la différence entre deux itérateurs
    // d'une liste doublement chaînée de la manière suivante
    friend bool operator!=(
        const cir_list_it &amp;it1, const cir_list_it &amp;it2)
    {
        return it1.ptr != it2.ptr;
    }

private:
    node_ptr ptr;
};

// on peut modéliser une liste doublement chaînée
// par son noeud de départ (head) et sa taille (n)
// de la manière suivante
template &lt;typename T&gt;
class cir_list
{
public:
    using node = cir_list_node&lt;T&gt;;
    using node_ptr = node *;
    using iterator = cir_list_it&lt;T&gt;;

public:
    // on peut implémenter le constructeur par défaut
    // d'une liste doublement chaînée de la manière suivante
    cir_list()
        : n(0)
    {
        head = new node{nullptr, nullptr, nullptr};
        head-&gt;next = head;
        head-&gt;prev = head;
    }

    // on peut implémenter le constructeur par liste
    // d'une liste doublement chaînée de la manière suivante
    cir_list(const std::initializer_list&lt;T&gt; &amp;il)
        : cir_list()
    {
        for (const auto &amp;i : il)
            insert(i);
    }

    // on peut implémenter le constructeur par copie
    // d'une liste doublement chaînée de la manière suivante
    cir_list(const cir_list&lt;T&gt; &amp;other)
        : cir_list()
    {
        for (const auto &amp;i : other)
            insert(i);
    }

    // on peut implémenter le destructeur
    // d'une liste doublement chaînée de la manière suivante
    ~cir_list()
    {
        while (size())
        {
            erase(*(head-&gt;data));
        }
    }

    // on peut récupérer la taille
    // d'une liste doublement chaînée de la manière suivante
    size_t size() const
    {
        return n;
    }

    // on peut insérer un élément au début
    // d'une liste doublement chaînée de la manière suivante
    void insert(const T &amp;value)
    {
        node_ptr newNode = new node{new T(value), nullptr, nullptr};
        n++;

        auto dummy = head-&gt;prev;
        dummy-&gt;next = newNode;
        newNode-&gt;prev = dummy;

        if (head == dummy)
        {
            dummy-&gt;prev = newNode;
            newNode-&gt;next = dummy;
            head = newNode;
            return;
        }

        newNode-&gt;next = head;
        head-&gt;prev = newNode;
        head = newNode;
    }

    // on peut supprimer un élément au début
    // d'une liste doublement chaînée de la manière suivante
    void erase(const T &amp;value)
    {
        auto cur = head, dummy = head-&gt;prev;
        while (cur != dummy)
        {
            if (*(cur-&gt;data) == value)
            {
                cur-&gt;prev-&gt;next = cur-&gt;next;
                cur-&gt;next-&gt;prev = cur-&gt;prev;
                if (cur == head)
                {
                    head = head-&gt;next;
                }
                delete cur;
                n--;
                return;
            }
            cur = cur-&gt;next;
        }
    }

    // on peut récupérer l'itérateur de début
    // d'une liste doublement chaînée de la manière suivante
    cir_list_it&lt;T&gt; begin()
    {
        return cir_list_it&lt;T&gt;{head};
    }

    // on peut récupérer l'itérateur constant de début
    // d'une liste doublement chaînée de la manière suivante
    cir_list_it&lt;T&gt; begin() const
    {
        return cir_list_it&lt;T&gt;{head};
    }

    // on peut récupérer l'itérateur de fin
    // d'une liste doublement chaînée de la manière suivante
    cir_list_it&lt;T&gt; end()
    {
        return cir_list_it&lt;T&gt;{head-&gt;prev};
    }

    // on peut récupérer l'itérateur constant de fin
    // d'une liste doublement chaînée de la manière suivante
    cir_list_it&lt;T&gt; end() const
    {
        return cir_list_it&lt;T&gt;{head-&gt;prev};
    }

    // on peut afficher les éléments
    // une liste doublement chaînée de la manière suivante
    friend std::ostream &amp;operator&lt;&lt;(std::ostream &amp;_out, const cir_list&lt;T&gt; &amp;_list)
    {
        bool isSep = false;
        _out &lt;&lt; "{";
        for (const auto &amp;song : _list)
        {
            if (isSep)
            {
                _out &lt;&lt; ", ";
            }
            _out &lt;&lt; song;
            isSep = true;
        }
        _out &lt;&lt; "}";
        return _out;
    }

private:
    node_ptr head;
    size_t n;
};

// on peut mettre en oeuvre
// une liste doublement châinée de la manière suivante
int main(int argc, char **argv)
{
    // construction par défaut d'une liste doublement châinée
    cir_list&lt;int&gt; pl;

    // insertion des données au début d'une liste doublement châinée
    pl.insert(10);
    pl.insert(20);
    pl.insert(30);
    pl.insert(40);
    pl.insert(50);
    std::cout &lt;&lt; "(1): " &lt;&lt; pl &lt;&lt; std::endl;
    // (1): {50, 40, 30, 20, 10}

    // suppression d'un élément d'une liste doublement châinée
    pl.erase(30);
    std::cout &lt;&lt; "(2): " &lt;&lt; pl &lt;&lt; std::endl;
    // (2): {50, 40, 20, 10}

    // construction par liste d'une liste doublement châinée
    cir_list&lt;int&gt; pl2 = {11, 21, 31, 41, 51};
    std::cout &lt;&lt; "(3): " &lt;&lt; pl2 &lt;&lt; std::endl;
    // (3): {51, 41, 31, 21, 11}

    // construction par copie d'une liste doublement châinée
    auto pl3 = pl2;
    std::cout &lt;&lt; "(4): " &lt;&lt; pl3 &lt;&lt; std::endl;
    // (4): {51, 41, 31, 21, 11}

    // parcours par itération d'une liste doublement châinée
    std::cout &lt;&lt; "(5): {";
    for (cir_list&lt;int&gt;::iterator it = pl3.begin();
         it != pl3.end(); ++it)
    {
        if (it != pl3.begin())
        {
            std::cout &lt;&lt; ", ";
        }
        std::cout &lt;&lt; *it;
    }
    std::cout &lt;&lt; "}" &lt;&lt; std::endl;
    // (5): {11, 21, 31, 41, 51}

    return 0;
}</pre><br>Résultat des tests.<br><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
(1): {50, 40, 30, 20, 10}
(2): {50, 40, 20, 10}
(3): {51, 41, 31, 21, 11}
(4): {11, 21, 31, 41, 51}
(5): {11, 21, 31, 41, 51}
...</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="listes--piles-et-files-d-attente_jeu-de-cartes" href="#listes--piles-et-files-d-attente">Jeu de cartes</a>
</h2><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#include &lt;iostream&gt;
#include &lt;vector&gt;
#include &lt;array&gt;
#include &lt;sstream&gt;
#include &lt;algorithm&gt;
#include &lt;random&gt;
#include &lt;chrono&gt;

// on peut modéliser une carte d'un jeu de cartes
// par son numéro (number) et sa couleur (suit)
// de la manière suivante
struct card
{
    // on peut énumérer les couleurs d'une carte
    // d'un jeu de cartes de la manière suivante
    enum suit
    {
        HEART,  // coeur
        SPADE,  // pique
        CLUB,   // trèfle
        DIAMOND // carreau
    };

    // on peut afficher les informations sur une carte
    // d'un jeu de cartes de la manière suivante
    std::string to_string() const
    {
        std::ostringstream os;
        if (number &gt; 0 &amp;&amp; number &lt;= 10)
            os &lt;&lt; number;
        else
        {
            switch (number)
            {
            case 1:
                os &lt;&lt; "Ace"; // As
                break;
            case 11:
                os &lt;&lt; "Jack"; // Valet
                break;
            case 12:
                os &lt;&lt; "Queen"; // Reine
                break;
            case 13:
                os &lt;&lt; "King"; // Roi
                break;
            default:
                return "Invalid card"; // Carte invalide
            }
        }

        os &lt;&lt; " of ";
        switch (suit)
        {
        case HEART:
            os &lt;&lt; "hearts"; // coeurs
            break;
        case SPADE:
            os &lt;&lt; "spades"; // piques
            break;
        case CLUB:
            os &lt;&lt; "clubs"; // trèfles
            break;
        case DIAMOND:
            os &lt;&lt; "diamonds"; // carreaux
            break;
        }

        return os.str();
    }

    int number;
    suit suit;
};

// on peut modéliser un jeu de cartes
// par des cartes (deck) et des joueurs (player1, player2, player3, player4)
// de la manière suivante
class game
{
public:
    // on peut construire les cartes
    // d'un jeu de cartes de la manière suivante
    void buildDeck()
    {
        for (int i = 0; i &lt; 13; i++)
            deck[i + 0 * 13] = card{i + 1, card::HEART};
        for (int i = 0; i &lt; 13; i++)
            deck[i + 1 * 13] = card{i + 1, card::SPADE};
        for (int i = 0; i &lt; 13; i++)
            deck[i + 2 * 13] = card{i + 1, card::CLUB};
        for (int i = 0; i &lt; 13; i++)
            deck[i + 3 * 13] = card{i + 1, card::DIAMOND};
    }

    // on peut distribuer les cartes aux joueurs
    // d'un jeu de cartes de la manière suivante
    void dealCards()
    {
        // mélange des cartes
        unsigned seed = (unsigned)std::chrono::system_clock::now()
                            .time_since_epoch()
                            .count();
        std::shuffle(deck.begin(), deck.end(), std::default_random_engine(seed));

        // distribution des cartes aux joueurs
        player1 = {deck.begin() + 0 * 13, deck.begin() + 1 * 13};
        player2 = {deck.begin() + 1 * 13, deck.begin() + 2 * 13};
        player3 = {deck.begin() + 2 * 13, deck.begin() + 3 * 13};
        player4 = {deck.begin() + 3 * 13, deck.end()};
    }

    // on peut démarrer un jeu de cartes
    // de la manière suivante
    void playGame()
    {
        while (!isGameComplete())
        {
            playOneRound();
        }
    }

    // on peut déterminer le vainqueur d'une partie
    // d'un jeu de cartes de la manière suivante
    int getWinner() const
    {
        if (player1.empty())
            return 1;
        if (player2.empty())
            return 2;
        if (player3.empty())
            return 3;
        if (player4.empty())
            return 4;
        return 0;
    }

private:
    // on peut déterminer la fin de la partie
    // d'un jeu de cartes de la manière suivante
    bool isGameComplete() const
    {
        return player1.empty() || player2.empty() ||
               player3.empty() || player4.empty();
    }

    // on peut jouer une partie
    // d'un jeu de cartes de la manière suivante
    void playOneRound()
    {
        // comparaison et suppression des cartes entre deux joueurs
        if (compareAndRemove(player1, player2))
        {
            compareAndRemove(player3, player4);
            return;
        }
        else if (compareAndRemove(player1, player3))
        {
            compareAndRemove(player2, player4);
            return;
        }
        else if (compareAndRemove(player1, player4))
        {
            compareAndRemove(player2, player3);
            return;
        }
        else if (compareAndRemove(player2, player3))
        {
            return;
        }
        else if (compareAndRemove(player2, player4))
        {
            return;
        }
        else if (compareAndRemove(player3, player4))
        {
            return;
        }

        // mélange des cartes des joueurs
        unsigned seed = (unsigned)std::chrono::system_clock::now()
                            .time_since_epoch()
                            .count();
        std::shuffle(player1.begin(), player1.end(), std::default_random_engine(seed));
        std::shuffle(player2.begin(), player2.end(), std::default_random_engine(seed));
        std::shuffle(player3.begin(), player3.end(), std::default_random_engine(seed));
        std::shuffle(player4.begin(), player4.end(), std::default_random_engine(seed));
    }

    // on peut comparer et supprimer les cartes de deux joueurs
    // d'un jeu de cartes de la manière suivante
    bool compareAndRemove(std::vector&lt;card&gt; &amp;p1, std::vector&lt;card&gt; &amp;p2)
    {
        // dernière cartes identiques
        if (p1.back().number == p2.back().number)
        {
            // suppression des cartes
            p1.pop_back();
            p2.pop_back();
            return true;
        }
        return false;
    }

private:
    std::array&lt;card, 52&gt; deck;
    std::vector&lt;card&gt; player1, player2, player3, player4;
};

// on peut mettre en oeuvre
// un jeu de cartes de la manière suivante
int main(int argc, char **argv)
{
    // construction du jeu de cartes
    game newGame;

    // construction des cartes
    newGame.buildDeck();
    newGame.dealCards();
    newGame.playGame();

    // affichage du vainqueur
    auto winner = newGame.getWinner();
    std::cout &lt;&lt; "(1): Player " &lt;&lt; winner &lt;&lt; " won the game." &lt;&lt; std::endl;
    // (1): Player N won the game.

    return 0;
}</pre><br>Résultat des tests.<br><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
(1): Player 4 won the game.
...</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="listes--piles-et-files-d-attente_file-d-attente" href="#listes--piles-et-files-d-attente">File d'attente</a>
</h2><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#include &lt;iostream&gt;
#include &lt;queue&gt;

// on peut modéliser une tâche d'une imprimante
// par son identifiant (id), l'auteur de la tâche (user),
// la date de la demande (time) et un compteur de tâches (count)
// de la manière suivante
class Job
{
public:
    // on peut implémenter un constructeur par nom et date
    // d'une tâche d'une imprimante de la manière suivante
    Job(const std::string &amp;u, int t)
        : user(u),
          time(t),
          id(++count)
    {
    }

    // on peut afficher une tâche d'une imprimante
    // de la manière suivante
    friend std::ostream &amp;operator&lt;&lt;(std::ostream &amp;os, const Job &amp;j)
    {
        os &lt;&lt; "{" &lt;&lt; j.id &lt;&lt; ", " &lt;&lt; j.user &lt;&lt; ", " &lt;&lt; j.time &lt;&lt; "}";
        return os;
    }

private:
    int id;
    std::string user;
    int time;
    static int count;
};

int Job::count = 0;

// on peut modéliser une imprimante
// par ses tâches (jobs)
// de la manière suivante
template &lt;size_t N&gt;
class Printer
{
public:
    // on peut ajouter une tâche à la fin
    // de la file d'attente des tâches de l'imprimante
    // de la manière suivante
    bool addNewJob(const Job &amp;job)
    {
        if (jobs.size() == N)
        {
            return false;
        }
        std::cout &lt;&lt; "(1): adding: " &lt;&lt; job &lt;&lt; std::endl;
        jobs.push(job);
        return true;
    }

    // on peut supprimer une tâche au début
    // de la file d'attente des tâches de l'imprimante
    // de la manière suivante
    void startPrinting()
    {
        while (!jobs.empty())
        {
            std::cout &lt;&lt; "(3): processing: " &lt;&lt; jobs.front() &lt;&lt; std::endl;
            jobs.pop();
        }
    }

private:
    std::queue&lt;Job&gt; jobs;
};

// on peut mettre en oeuvre une file d'attente
// d'une imprimante de la manière suivante
int main(int argc, char **argv)
{
    // construction d'une imprimante avec une capacité de cinq tâches
    Printer&lt;5&gt; printer;

    // construction par nom et date des tâches
    Job j1("John", 10);
    Job j2("Jerry", 4);
    Job j3("Jimmy", 5);
    Job j4("George", 7);
    Job j5("Bill", 8);
    Job j6("Kenny", 10);

    // ajout des tâches à la file d'attente des tâches de l'imprimante
    printer.addNewJob(j1);
    printer.addNewJob(j2);
    printer.addNewJob(j3);
    printer.addNewJob(j4);
    printer.addNewJob(j5);

    // message d'erreur lors de l'ajout d'une tâche à l'imprimante
    // au-delà de sa capacité maximale
    if (!printer.addNewJob(j6))
    {
        std::cout &lt;&lt; "(2): Couldn't add 6th job" &lt;&lt; std::endl;
    }

    // exécution des tâches de l'imprimante
    printer.startPrinting();

    // ajout et exécution de la sixième tâche de l'imprimante
    printer.addNewJob(j6);
    printer.startPrinting();
    return 0;
}</pre><br>Résultat des tests.<br><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
(1): adding: {1, John, 10}
(1): adding: {2, Jerry, 4}
(1): adding: {3, Jimmy, 5}
(1): adding: {4, George, 7}
(1): adding: {5, Bill, 8}
(2): Couldn't add 6th job
(3): processing: {1, John, 10}
(3): processing: {2, Jerry, 4}
(3): processing: {3, Jimmy, 5}
(3): processing: {4, George, 7}
(3): processing: {5, Bill, 8}
(1): adding: {6, Kenny, 10}
(3): processing: {6, Kenny, 10}
...</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="arbres--tas-et-graphes">Arbres, tas et graphes</a>
</h1>
<div class="Section6"><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#arbres--tas-et-graphes_arbre-binaire">Arbre binaire</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#arbres--tas-et-graphes_arbre-de-recherche-binaire">Arbre de recherche binaire</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#arbres--tas-et-graphes_tas-de-recherche-de-mediane">Tas de recherche de médiane</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#arbres--tas-et-graphes_graphe-de-reseau-de-villes">Graphe de réseau de villes</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#arbres--tas-et-graphes_arbre-n-aire-de-systeme-de-fichiers">Arbre-n-aire de système de fichiers</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="arbres--tas-et-graphes_arbre-binaire" href="#arbres--tas-et-graphes">Arbre binaire</a>
</h2><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">#include &lt;iostream&gt;
#include &lt;queue&gt;

// on peut modéliser un noeud d'un arbre binaire
// par sa donnée (position),
// son pointeur de premier noeud (first),
// et son pointeur de deuxième noeud (second)
// de la manière suivante
struct node
{
    std::string position;
    node *first, *second;
};

// on peut modéliser un arbre binaire
// par son pointeur de noeud racine (root)
// de la manière suivante
class org_tree
{
public:
    // on peut implémenter un constructeur par donnée
    // d'un arbre binaire de la manière suivante
    org_tree(const std::string &amp;pos)
    {
        root = new node{pos, nullptr, nullptr};
    }

    // on peut ajouter un subordonné
    // dans un arbre binaire de la manière suivante
    bool addSubordinate(const std::string &amp;manager, const std::string &amp;subordinate)
    {
        auto managerNode = org_tree::find(root, manager);
        if (!managerNode)
        {
            std::cout &lt;&lt; "(01): No position named " &lt;&lt; manager &lt;&lt; std::endl;
            return false;
        }
        if (managerNode-&gt;first &amp;&amp; managerNode-&gt;second)
        {
            std::cout &lt;&lt; "(02): " &lt;&lt; manager &lt;&lt; " already has 2 subordinates." &lt;&lt; std::endl;
            return false;
        }
        if (!managerNode-&gt;first)
            managerNode-&gt;first = new node{subordinate, nullptr, nullptr};
        else
            managerNode-&gt;second = new node{subordinate, nullptr, nullptr};
        return true;
    }

    // on peut afficher les éléments
    // d'un arbre binaire de la manière suivante
    friend std::ostream &amp;operator&lt;&lt;(std::ostream &amp;_out, const org_tree &amp;_tree)
    {
        _out &lt;&lt; "{";
        org_tree::levelOrder(_out, _tree.root);
        _out &lt;&lt; "}";
        return _out;
    }

private:
    // on peut rechercher un noeud
    // dans un arbre binaire de la manière suivante
    static node *find(node *root, const std::string &amp;value)
    {
        if (root == nullptr)
            return nullptr;
        if (root-&gt;position == value)
            return root;
        auto firstFound = org_tree::find(root-&gt;first, value);
        if (firstFound != nullptr)
            return firstFound;
        return org_tree::find(root-&gt;second, value);
    }

    // on peut parcourir les éléments
    // d'un arbre binaire de la manière suivante
    static void levelOrder(std::ostream &amp;_out, node *start)
    {
        if (!start)
            return;

        std::queue&lt;node *&gt; q;
        q.push(start);

        while (!q.empty())
        {
            size_t size = q.size();
            for (size_t i = 0; i &lt; size; i++)
            {
                auto current = q.front();
                q.pop();

                if (i != 0)
                {
                    _out &lt;&lt; ", ";
                }

                _out &lt;&lt; current-&gt;position;
                if (current-&gt;first)
                    q.push(current-&gt;first);
                if (current-&gt;second)
                    q.push(current-&gt;second);
            }

            if (!q.empty())
            {
                _out &lt;&lt; ", " &lt;&lt; std::endl;
            }
        }
    }

private:
    node *root;
};

// on peut mettre en oeuvre un arbre binaire
// de la manière suivante
int main(int argc, char **argv)
{
    // construction par nom d'un arbre binaire
    org_tree tree("CEO");

    // ajout des données à un arbre binaire
    if (tree.addSubordinate("CEO", "Deputy Director"))
        std::cout &lt;&lt; "(03): Added Deputy Director in the tree." &lt;&lt; std::endl;
    else
        std::cout &lt;&lt; "(04): Couldn't add Deputy Director in the tree" &lt;&lt; std::endl;
    // (03): Added Deputy Director in the tree.

    if (tree.addSubordinate("Deputy Director", "IT Head"))
        std::cout &lt;&lt; "(05): Added IT Head in the tree." &lt;&lt; std::endl;
    else
        std::cout &lt;&lt; "(06): Couldn't add IT Head in the tree" &lt;&lt; std::endl;
    // (05): Added IT Head in the tree.

    if (tree.addSubordinate("Deputy Director", "Marketing Head"))
        std::cout &lt;&lt; "(07): Added Marketing Head in the tree." &lt;&lt; std::endl;
    else
        std::cout &lt;&lt; "(08): Couldn't add Marketing Head in the tree" &lt;&lt; std::endl;
    // (07): Added Marketing Head in the tree.

    if (tree.addSubordinate("IT Head", "Security Head"))
        std::cout &lt;&lt; "(09): Added Security Head in the tree." &lt;&lt; std::endl;
    else
        std::cout &lt;&lt; "(10): Couldn't add Security Head in the tree" &lt;&lt; std::endl;
    // (09): Added Security Head in the tree.

    if (tree.addSubordinate("IT Head", "App Development Head"))
        std::cout &lt;&lt; "(11): Added App Development Head in the tree." &lt;&lt; std::endl;
    else
        std::cout &lt;&lt; "(12): Couldn't add App Development Head in the tree" &lt;&lt; std::endl;
    //(11): Added App Development Head in the tree.

    if (tree.addSubordinate("Marketing Head", "Logistics Head"))
        std::cout &lt;&lt; "(13): Added Logistics Head in the tree." &lt;&lt; std::endl;
    else
        std::cout &lt;&lt; "(14): Couldn't add Logistics Head in the tree" &lt;&lt; std::endl;
    //(13): Added Logistics Head in the tree.

    if (tree.addSubordinate("Marketing Head", "Public Relations Head"))
        std::cout &lt;&lt; "(15): Added Public Relations Head in the tree." &lt;&lt; std::endl;
    else
        std::cout &lt;&lt; "(16): Couldn't add Public Relations Head in the tree" &lt;&lt; std::endl;
    // (15): Added Public Relations Head in the tree.

    if (tree.addSubordinate("Deputy Director", "Finance Head"))
        std::cout &lt;&lt; "(17): Added Finance Head in the tree." &lt;&lt; std::endl;
    else
        std::cout &lt;&lt; "(18): Couldn't add Finance Head in the tree" &lt;&lt; std::endl;
    // (02): Deputy Director already has 2 subordinates.
    // (18): Couldn't add Finance Head in the tree

    // affichage d'un arbre binaire
    std::cout &lt;&lt; "(19): " &lt;&lt; tree &lt;&lt; std::endl;
    // (19): {CEO,
    // Deputy Director,
    // IT Head, Marketing Head,
    // Security Head, App Development Head, Logistics Head, Public Relations Head}

    return 0;
}</pre><br>Résultat des tests.<br><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
(03): Added Deputy Director in the tree.
(05): Added IT Head in the tree.
(07): Added Marketing Head in the tree.
(09): Added Security Head in the tree.
(11): Added App Development Head in the tree.
(13): Added Logistics Head in the tree.
(15): Added Public Relations Head in the tree.
(02): Deputy Director already has 2 subordinates.
(18): Couldn't add Finance Head in the tree
(19): {CEO, 
Deputy Director, 
IT Head, Marketing Head, 
Security Head, App Development Head, Logistics Head, Public Relations Head}
...</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="arbres--tas-et-graphes_arbre-de-recherche-binaire" href="#arbres--tas-et-graphes">Arbre de recherche binaire</a>
</h2><br>Résultat des tests.<br><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
(1): Inorder: {2, 4, 8, 10, 11, 12, 15, 20, 28}
(2): Inorder after deleting 12: {2, 4, 8, 10, 11, 15, 20, 28}
(4): Going left from 15, (5): Going right from 10, (5): Going right from 11, 
(7): Element 12 is NOT present in the tree
(8): {28, 20, 15, 11, 10, 8, 4, 2}
...</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="arbres--tas-et-graphes_tas-de-recherche-de-mediane" href="#arbres--tas-et-graphes">Tas de recherche de médiane</a>
</h2><br>Résultat des tests.<br><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
(01): Median after insert 1: 1
(02): {{1}, {}}
(03): Median after insert 5: 3
(04): {{1}, {5}}
(05): Median after insert 2: 2
(06): {{2, 1}, {5}}
(07): Median after insert 10: 3.5
(08): {{2, 1}, {5, 10}}
(09): Median after insert 40: 5
(10): {{2, 1}, {5, 10, 40}}
...</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="arbres--tas-et-graphes_graphe-de-reseau-de-villes" href="#arbres--tas-et-graphes">Graphe de réseau de villes</a>
</h2><br>Résultat des tests.<br><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
(1): {{-1, -1, -1, -1, -1, -1, -1}, {-1, -1, -1, -1, -1, -1, -1}, {-1, -1, -
1, -1, -1, -1, -1}, {-1, -1, -1, -1, -1, -1, -1}, {-1, -1, -1, -1, -1, -1, -
1}, {-1, -1, -1, -1, -1, -1, -1}, {-1, -1, -1, -1, -1, -1, -1}}
(2): ADD: LONDON-MOSCOW=900
(2): ADD: LONDON-ISTANBUL=500
(2): ADD: LONDON-DUBAI=1000
(2): ADD: ISTANBUL-MOSCOW=1000
(2): ADD: ISTANBUL-DUBAI=500
(2): ADD: DUBAI-MUMBAI=200
(2): ADD: ISTANBUL-SEATTLE=1500
(2): ADD: DUBAI-SINGAPORE=500
(2): ADD: MOSCOW-SEATTLE=1000
(2): ADD: MUMBAI-SINGAPORE=300
(2): ADD: SEATTLE-SINGAPORE=700
(3): {{-1, 900, 500, 1000, -1, -1, -1}, {900, -1, 1000, -1, -1, 1000, -1}, 
{500, 1000, -1, 500, -1, 1500, -1}, {1000, -1, 500, -1, 200, -1, 500}, {-1, 
-1, -1, 200, -1, -1, 300}, {-1, 1000, 1500, -1, -1, -1, 700}, {-1, -1, -1, 
500, 300, 700, -1}}
(2): ADD: SEATTLE-LONDON=1800
(4): {{-1, 900, 500, 1000, -1, 1800, -1}, {900, -1, 1000, -1, -1, 1000, -1}, 
{500, 1000, -1, 500, -1, 1500, -1}, {1000, -1, 500, -1, 200, -1, 500}, {-1, 
-1, -1, 200, -1, -1, 300}, {1800, 1000, 1500, -1, -1, -1, 700}, {-1, -1, -1, 
500, 300, 700, -1}}
(7): REMOVE: SEATTLE-LONDON
(5): {{-1, 900, 500, 1000, -1, -1, -1}, {900, -1, 1000, -1, -1, 1000, -1}, 
{500, 1000, -1, 500, -1, 1500, -1}, {1000, -1, 500, -1, 200, -1, 500}, {-1, 
-1, -1, 200, -1, -1, 300}, {-1, 1000, 1500, -1, -1, -1, 700}, {-1, -1, -1, 
500, 300, 700, -1}}
...</pre><br><h2 class="GTitle1 Title1">
<a class="Title2" id="arbres--tas-et-graphes_arbre-n-aire-de-systeme-de-fichiers" href="#arbres--tas-et-graphes">Arbre-n-aire de système de fichiers</a>
</h2><br>Résultat des tests.<br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="codes-sources">Codes sources</a>
</h1>
<div class="Section6"><br><a class="GLink3 Link4" style=" color: lime;" href="https://github.com/gkesse/rdv-structures-donnees-principes-conception-algorithmes-cpp" target="_blank">Voir les codes sources sur GitHub</a><br><br></div>
</div>
</div>
</div><br>