<div class="GAccess1 Access1">
<a class="GAccess2 Access2" href="/home">Accueil</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels">Tutoriels</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels#cpp">C++</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels/cpp/architecture">Architecture Logicielle</a></div><div class="GParallax1 Parallax1">
<div class="Parallax2" style="background-image: url(&quot;/data/img/defaults/binary.png&quot;);">
<div class="Parallax3"><a href="#" class="Parallax4">Architecture logicielle en C++</a></div>
</div>
<div class="Parallax5" style="background-color: rgb(128, 51, 0);"><br>Le but de ce tutoriel est de vous apprendre à l'<b>architecture logicielle</b> en <b>C++</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="GSummary1"><div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#introduction">Introduction</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#recommandations-techniques">Recommandations techniques</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#la-philosophie-du-c--">La philosophie du C++</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#suivre-les-principes-solid-et-dry">Suivre les principes SOLID et DRY</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#le-principe-de-responsabilite-unique-srp">Le principe de responsabilité unique SRP</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#le-principe-ouvert-ferme-ocp">Le principe ouvert-fermé OCP</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#le-principe-de-substitution-de-liskov-lsp">Le principe de substitution de Liskov LSP</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#le-principe-de-segregation-d-interface-isp">Le principe de ségrégation d'interface ISP</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#le-principe-de-l-inversion-de-dependance-dip">Le principe de l'inversion de dépendance DIP</a>
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
<div class="Section6"><br>Lorsque vous créez une application, une bibliothèque ou tout composant logiciel, vous devez réfléchir à l'apparence des éléments que vous écrivez et à la manière dont ils interagiront les uns avec les autres. En d'autres termes, vous les concevez ainsi que leurs relations avec leur environnement. Tout comme avec l'architecture urbaine, il est important de penser à la situation dans son ensemble pour ne pas se retrouver dans un état désordonné. L'<b>architecture logicielle</b> d'un système est l'ensemble des structures nécessaires pour raisonner sur le système, qui comprend les éléments logiciels, les relations entre eux et les propriétés de tous.

Cela signifie que pour bien définir une architecture, nous devons y penser sous plusieurs angles au lieu de simplement nous lancer dans l'écriture de code.<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,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MpCdgewnVLU6c5EBGZABGZABGRh1BhRY00O1zzTTTGGRRRYJq6++enjNa14TNtxww7DRRhuFN7/5zcUPv7/uda8La621Vlh22WXD3HPPHfjO9Cir1/QekQEZkAEZkIFkBpK/4CDfx6zkZS97Wdhkk03CAQccEL7zne+Ea6+9Ntxxxx3hD3/4Q/jTn/4U/vznPxc/Dz74YPjd734XbrzxxvCjH/0onHTSSWGvvfYKq666anjhC19oG/TRBr12EvPNN1/Ycccdw4c//OHwkY98pK+fD37wg2GDDTYIs8wyy0i25WyzzRbe8Y53JNlyt912C4svvniYccYZs9lslVVWCe973/uS2nLnnXcOL33pS7OVoVce/Z5jlwwMPAMDX8Ap0ZE9//nPLzxTp59+evjtb38bnnzyyfCf//wnPPvss+G5554L7Q7e5////e9/w7///e/w8MMPh2uuuSYce+yx4ZWvfKUerUkWWQzGV1xxRXjqqafCv/71r75+aP/Pfe5zIztQ45G97LLLwj/+8Y9oO950003hjW98Y1bu3/3ud4c//vGP0WWg3X/+85+HpZZaakr0Sw7Qjn8y0CgDjZ585Duh5z3veWHOOecMRx55ZCGsEEr9HIiuv//97+EXv/hFYEbPTJpreJM0z/G6664bbrvtto6COKVdEc1nnHFGmGeeeUay7RBYV111VTF5iLXbr3/962KSknOpfI899gh//etfY4tQfO6GG24ISy+99Ei2m/1M8/2MNp5SNp5SlRmoTo+ljOWWWy585StfCY888kjhjUrqySf4MAP0PffcEw499NDA0pU3ZfMcr7/++uGuu+7KIrAQypdcckkRhzeKAnmqCayXv/zlxZJvGUPZ7ZUYy5VWWim84AUv8N5t44nWns33Z44Zk2LjSbnISHYiiy66aDjllFPC3/72tyyDcl1vsXxIrNZhhx02sktNk9VJIII233zzIj6u3g69/v2rX/0qrLPOOlljiibLHv1eZ6oJrB122KHwbpYxlN1eWZb8/Oc/733bRlzBlvZ0XO63jxmQ79uQTTTE7LPPHo466qjwl7/8pRFxVQ7qeEK4xq677hq4ZhN18ZwzFMHoBLc/9thjpen7fr333nvDtttuG2aeeeaRa7epJrCI5XrooYeimXjmmWfCN77xjWJ3sPfX+DFIe463iZwMpU2GstADPyCxnPSb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"></div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="recommandations-techniques">Recommandations techniques</a>
</h1>
<div class="Section6"><br>Pour tester les extraits de code dans ce tutoriel, vous aurez besoin des éléments suivants:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Un compilateur compatible C++20 pour compiler tous les extraits.<br>La plupart d'entre eux sont écrit en C++ 11/14/17.<br>Cependant,&nbsp;la prise en charge du C++20 est nécessaire<br>pour expérimenter quelques concepts qui s'en rapporte.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Lien de la bibliothèque GSL:&nbsp;<a class="GLink3 Link4" href="https://github.com/Microsoft/GSL" target="_blank" style="color: lime;">https://github.com/Microsoft/GSL</a></div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Lien du compilateur WinLibs sous Windows:&nbsp;<a class="GLink3 Link4" href="https://winlibs.com/" target="_blank" style="color: lime;">https://winlibs.com/</a></div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Lien du compilateur TDM-GCC sous Windows:&nbsp;<a class="GLink3 Link4" href="https://jmeubank.github.io/tdm-gcc/" target="_blank" style="color: lime;">https://jmeubank.github.io/tdm-gcc/</a></div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Lien du compilateur MSYS2 sous Windows:&nbsp;<a class="GLink3 Link4" style=" color: lime;" href="https://www.msys2.org/" target="_blank">https://www.msys2.org/</a><br>MSYS2 dispose d'un gestionnaire de packages (pacman).</div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Lien du compilateur Cygwin sous Windows:&nbsp;<a class="GLink3 Link4" style=" color: lime;" href="https://cygwin.com/" target="_blank">https://cygwin.com/</a><br>Cygwin est émulateur de l'environnement Linux sous Windows.</div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Sous Linux: Installer GCC (GNU Compiler Collection) en ligne de commande.</div>
</div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="la-philosophie-du-c--">La philosophie du C++</a>
</h1>
<div class="Section6"><br>C++ est un langage de programmation compilé multi-paradigme. Il permet la programmation procédurale, la programmation orientée objet et la programmation générique. Il existe depuis quelques décennies. Au cours des années qui ont suivi sa création, il a beaucoup changé. Lorsque C++11 est sorti, Bjarne Stroustrup, le créateur du langage, a déclaré que cela ressemblait à un langage complètement nouveau. La sortie de C++20 marque une autre étape importante dans l'évolution de cette bête, apportant une révolution similaire à la façon dont nous écrivons du code. Une chose, cependant, est restée la même pendant toutes ces années : la philosophie du langage.<br><br>La philosophie du C++ peut se résumer en 3 points:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Ne pas avoir de langage sous C++ (sauf l'assembleur).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Ne payez des coûts que pour ce que vous utilisez.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Offrir des abstractions de haut niveau à faible coût (objectif coût zéro).</div>
</div><br>Les abstractions de haut niveau sont ce qui différencie le C++ des langages de niveau inférieur tels que le C ou l'assembleur. Elles permettent d'exprimer des idées et des intentions directement dans le code source, ce qui joue très bien avec la sécurité de type du langage (type safety). <br><br>Considérons l'extrait de code suivant qui manipule des délais en ms.<br><br>Approche 1:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
struct GDuration {
    int m_delayMs;
};
//===============================================
void GTest::runPhilo(int _argc, char** _argv) {
    auto d = GDuration{};
    d.m_delayMs = 1000;
    auto lTimeout = 1000;
    d.m_delayMs = lTimeout;
}
//===============================================</pre><br>Une bien meilleure idée serait de tirer parti des fonctionnalités de sécurité de type offertes par le langage, ce qui conduit à une seconde approche:<br><br>Approche 2:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
struct GDuration2 {
    std::chrono::milliseconds m_delayMs;
};
//===============================================
void GTest::runPhilo(int _argc, char** _argv) {
    using namespace std::literals::chrono_literals;
    auto d = GDuration2{};
    d.m_delayMs = 1000ms;
    auto lTimeout = 1s;
    d.m_delayMs = lTimeout;
}
//===============================================</pre><br>Approche 3:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
struct GDuration2 {
    std::chrono::milliseconds m_delayMs;
};
//===============================================
void GTest::runPhilo(int _argc, char** _argv) {
    using namespace std::literals::chrono_literals;
    auto lDuration = GDuration2{};
    lDuration.m_delayMs = std::chrono::milliseconds(1000);
    auto lTimeout = std::chrono::seconds(1);
    lDuration.m_delayMs = lTimeout;
}
//===============================================</pre><br>Ce faisant, le code assembleur généré serait le même que pour le premier exemple. C'est pourquoi on l'appelle une abstraction à coût nul. Parfois, C++ nous permet d'utiliser des abstractions qui donnent en fait un meilleur code que si elles n'étaient pas utilisées.<br><br>Un exemple de fonctionnalité de langage qui, lorsqu'elle est utilisée, peut souvent entraîner un tel avantage sont les coroutines de C++20.
Un autre grand ensemble d'abstractions, offert par la bibliothèque standard, sont les algorithmes.<br><br>Considérons le code suivant qui tente de compter le nombre de caractère "." dans une chaine.<br><br>Approche 1:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
int GDot::countDot(const char* _str, std::size_t _size) {
    int count = 0;
    for (std::size_t i = 0; i &lt; _size; ++i) {
        if(_str[i] == '.') count++;
    }
    return count;
}
//===============================================
void GTest::runPhilo(int _argc, char** _argv) {
    GDot lDot;
    const char* lMsg = "Bonjour.Tout.Le.Monde.";
    int lCount = lDot.countDot(lMsg, strlen(lMsg));
    std::cout &lt;&lt; lCount &lt;&lt; "\n";
}
//===============================================</pre><br>Approche 2:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
int GDot2::countDot(const std::string_view&amp; _str) {
    return std::count(std::begin(_str), std::end(_str), '.');
}
//===============================================
void GTest::runPhilo(int _argc, char** _argv) {
    GDot2 lDot;
    int lCount = lDot.countDot("Bonjour.Tout.Le.Monde.");
    std::cout &lt;&lt; lCount &lt;&lt; "\n";
}
//===============================================</pre><br>L'utilisation d'abstractions de niveau supérieur conduit à un code plus simple et plus maintenable. Le langage C++ s'est efforcé de fournir des abstractions à coût nul depuis sa création, alors appuyez vous dessus au lieu de repenser la roue en utilisant des niveaux d'abstraction inférieurs.<br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="suivre-les-principes-solid-et-dry">Suivre les principes SOLID et DRY</a>
</h1>
<div class="Section6"><br>Il existe de nombreux principes à garder à l'esprit lors de l'écriture de code. Lors de l'écriture de code orienté objet, vous devez être familiarisé avec le quartet abstraction, encapsulation, héritage et polymorphisme. Indépendamment du fait que vous écriviez du C++ d'une manière principalement orientée objet ou non, vous devez garder à l'esprit les principes basés sur les deux acronymes : SOLID et DRY.<br><br>SOLID est un ensemble de pratiques qui peuvent vous aider à écrire des logiciels plus propres et moins sujets aux bogues. C'est un acronyme composé des premières lettres des cinq concepts qui le caractérise:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Principe de responsabilité unique SRP (Single Responsibility Principle)</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Principe ouvert-fermé OCP (Open-Closed Principle)</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Principe de substitution de Liskov LSP (Liskov Substitution Principle)</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Principe de la ségrégation d'interface ISP (Interface Segregation Principle)</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Principe de l'inversion de dépendance DIP (Dependency Inversion Principle)</div>
</div><br>Si vous écrivez du code orienté performances (et vous l'êtes probablement si vous avez choisi C++), vous devez savoir que l'utilisation du polymorphisme dynamique peut être une mauvaise idée en termes de performances, en particulier sur les séquences d'instructions exécutées très fréquemment (hot path).<br><br>Le&nbsp;patron de modèle curieusement récurrent CRTP (Curiously Recurring Template Pattern) permet d'écrire des classes statiquement polymorphes.<br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="le-principe-de-responsabilite-unique-srp">Le principe de responsabilité unique SRP</a>
</h1>
<div class="Section6"><br>Le principe de responsabilité unique SRP (Single Responsibility Principle) signifie que chaque unité de code doit avoir exactement une responsabilité. Cela signifie écrire des fonctions qui ne font qu'une seule chose, créer des types qui sont responsables d'une seule chose et créer des composants de niveau supérieur qui se concentrent sur un seul aspect.<br><br>Cela signifie que si votre classe gère un certain type de ressources, telles que des descripteurs de fichiers, elle ne devrait faire que cela, laissant leur analyse, par exemple, à un autre type.<br><br>Très souvent, si vous voyez une fonction avec un "Et" ou un "And" dans son nom, elle enfreint le SRP et doit être refactorisée. Un autre signe est lorsqu'une fonction a des commentaires indiquant ce que fait chaque section de la fonction. Chacune de ces sections serait probablement mieux en tant que fonction distincte.<br><br>Un principe similaire est le principe de connaissance minimale LKP (Least Knowledge Principle) qui stipule qu'aucun objet ne devrait en savoir plus que nécessaire sur les autres objets, de sorte qu'il ne dépend d'aucun de leurs éléments internes, par exemple. Son application conduit à un code plus maintenable avec moins d'interdépendances entre les composants.<br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="le-principe-ouvert-ferme-ocp">Le principe ouvert-fermé OCP</a>
</h1>
<div class="Section6"><br>Le principe ouvert-fermé OCP (Open-Closed Principle) signifie que le code doit être ouvert pour extension mais fermé pour modification. Ouvert pour extension signifie que nous pourrions facilement étendre la liste des types pris en charge par le code. Fermé pour modification signifie que le code existant ne doit pas changer, car cela peut souvent provoquer des bogues ailleurs dans le système.<br><br>Une grande fonctionnalité de C++ démontrant ce principe est l'opérateur d'affichage (operator&lt;&lt;) de ostream. Pour l'étendre afin qu'il prenne en charge votre classe personnalisée, il vous suffit d'écrire un code similaire à celui-ci&nbsp;:<br><br>Approche 1:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
std::ostream&amp; operator&lt;&lt;(std::ostream&amp; _stream, const GPerson&amp; _person);
//===============================================
std::ostream&amp; operator&lt;&lt;(std::ostream&amp; _stream, const GPerson&amp; _person) {
    _stream &lt;&lt; "id : " &lt;&lt; _person.getId() &lt;&lt; "\n";
    _stream &lt;&lt; "nom : " &lt;&lt; _person.getName() &lt;&lt; "\n";
    return _stream;
}
//===============================================
void GTest::runOcp(int _argc, char** _argv) {
    GPerson lPerson;
    lPerson.setId(123);
    lPerson.setName("Gerard");
    std::cout &lt;&lt; lPerson;
}
//===============================================</pre><br>Notez que notre implémentation de l'opérateur d'affichage (operator&lt;&lt;) est une fonction libre (non membre). Vous devriez les préférer aux fonctions membres si possible car cela aide réellement l'encapsulation.<br><br>Si vous ne souhaitez pas fournir un accès public à un champ que vous souhaitez imprimer sur ostream, vous pouvez faire de l'opérateur d'affichage (operator&lt;&lt;) une fonction amie, comme ceci&nbsp;:<br><br>Approche 2:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
class GPerson2 {
public:
    GPerson2();
    ~GPerson2();
    void setId(int _id);
    void setName(const GString&amp; _name);

    friend std::ostream&amp; operator&lt;&lt;(std::ostream&amp; _stream, const GPerson2&amp; _person);

private:
    int m_id;
    GString m_name;
};
//===============================================
void GPerson2::setId(int _id) {
    m_id = _id;
}
//===============================================
void GPerson2::setName(const GString&amp; _name) {
    m_name = _name;
}
//===============================================
std::ostream&amp; operator&lt;&lt;(std::ostream&amp; _stream, const GPerson2&amp; _person) {
    _stream &lt;&lt; "id : " &lt;&lt; _person.m_id &lt;&lt; "\n";
    _stream &lt;&lt; "nom : " &lt;&lt; _person.m_name &lt;&lt; "\n";
    return _stream;
}
//===============================================
void GTest::runOcp(int _argc, char** _argv) {
    GPerson2 lPerson;
    lPerson.setId(123);
    lPerson.setName("Gerard");
    std::cout &lt;&lt; lPerson;
}
//===============================================</pre><br>Notez que cette définition de l'OCP est légèrement différente de celle liée au polymorphisme. Ce dernier consiste à créer des classes de base qui ne peuvent pas être modifiées elles-mêmes, mais qui sont ouvertes à d'autres pour en hériter.<br><br></div>
</div>
</div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="le-principe-de-substitution-de-liskov-lsp">Le principe de substitution de Liskov LSP</a>
</h1>
<div class="Section6"><br>Le principe de substitution de Liskov LSP (Liskov Substitution Principle) stipule que si une fonction travaille avec un pointeur ou une référence à un objet de base, elle doit également travailler avec un pointeur ou une référence à l'un de ses objets dérivés.<br><br>Cette règle est parfois enfreinte car les techniques que nous appliquons dans le code source ne fonctionnent pas toujours dans les abstractions du monde réel.<br><br>Un exemple célèbre est un carré et un rectangle. Mathématiquement parlant, le premier est une spécialisation du second, il y a donc une relation de l'un à l'autre. Cela nous donne envie de créer une classe Carré qui hérite de la classe Rectangle. Ainsi, nous pourrions nous retrouver avec un code comme celui-ci&nbsp;:<br><br>Approche 1:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
class GRectangle {
public:
    GRectangle();
    virtual ~GRectangle() = default;
    virtual double getArea() const;
    virtual void setWidth(double _width);
    virtual void setHeight(double _height);

private:
    double m_width;
    double m_height;
};
//===============================================
class GSquare : public GRectangle {
public:
    GSquare();
    double getArea() const override;
    void setWidth(double _width) override;
    void setHeight(double _height) override;
};
//===============================================
double GRectangle::getArea() const {
    return m_width * m_height;
}
//===============================================
void GRectangle::setWidth(double _width) {
    m_width = _width;
}
//===============================================
void GRectangle::setHeight(double _height) {
    m_height = _height;
}
//===============================================
double GSquare::getArea() const {
    return GRectangle::getArea();
}
//===============================================
void GSquare::setWidth(double _width) {
    GRectangle::setWidth(_width);
    GRectangle::setHeight(_width);
}
//===============================================
void GSquare::setHeight(double _height) {
    setWidth(_height);
}
//===============================================
void GTest::runLsp(int _argc, char** _argv) {
    GRectangle lRect;
    lRect.setWidth(4);
    lRect.setHeight(3);
    std::cout &lt;&lt; "aire rectangle : " &lt;&lt; lRect.getArea() &lt;&lt; "\n";

    GSquare lSquare;
    lSquare.setWidth(4);
    std::cout &lt;&lt; "aire carré : " &lt;&lt; lSquare.getArea() &lt;&lt; "\n";
}
//===============================================</pre><br>Comment implémenter les membres de la classe Square ? Si nous voulons suivre le LSP et épargner aux utilisateurs de telles classes des surprises, nous ne pouvons pas: notre carré cesserait d'être un carré si nous appelions setWidth. Nous pouvons soit arrêter d'avoir un carré (non exprimable en utilisant le code précédent), soit modifier également la hauteur, rendant ainsi le carré différent d'un rectangle.<br><br>Si votre code enfreint le LSP, il est probable que vous utilisiez une abstraction incorrecte. Dans notre cas, le carré ne devrait pas hériter du rectangle.<br><br>Une meilleure approche pourrait consister à faire en sorte que les deux implémentent une interface (GShape).<br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="le-principe-de-segregation-d-interface-isp">Le principe de ségrégation d'interface ISP</a>
</h1>
<div class="Section6"><br>Le principe de ségrégation d'interface ISP (Interface Segregation Principle) est un peu comme son nom l'indique.<br><br>Il est formulé comme suit:<br><br>Aucun client ne devrait être contraint de dépendre des méthodes qu'il n'utilise pas.
Cela semble assez évident, mais cela a des connotations qui ne sont pas si évidentes.<br><br>Tout d'abord, vous devez préférer des interfaces plus nombreuses mais plus petites à une seule grande.<br><br>Deuxièmement, lorsque vous ajoutez une classe dérivée ou que vous étendez les fonctionnalités d'une classe existante, vous devez réfléchir avant d'étendre l'interface que la classe implémente.<br><br>Montrons cela sur un exemple qui viole ce principe, en commençant par l'interface suivante:<br><br>Approche 1:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
class GFoodProcessorI {
public:
    virtual ~GFoodProcessorI() = default;
    virtual void blend() = 0;
};
//===============================================
class GBlend : public GFoodProcessorI {
public:
    GBlend();
    void blend() override;
};
//===============================================
void GBlend::blend() {
    printf("%s...\n", __PRETTY_FUNCTION__);
}
//===============================================
void GTest::runIsp(int _argc, char** _argv) {
    GBlend lBlend;
    lBlend.blend();
}
//===============================================</pre><br>Nous pouvons avoir une classe simple (GBlend) qui l'implémente l'interface (GFoodProcessorI).<br><br>Jusqu'ici, tout va bien. Supposons maintenant que nous voulions modéliser un autre robot culinaire plus avancé et que nous essayions imprudemment d'ajouter plus de méthodes à notre interface:<br><br>Approche 2:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
class GFoodProcessorI2 {
public:
    virtual ~GFoodProcessorI2() = default;
    virtual void blend() = 0;
    virtual void slice() = 0;
    virtual void dice() = 0;
};
//===============================================
class GFood : public GFoodProcessorI2 {
public:
    GFood();
    void blend() override;
    void slice() override;
    void dice() override;
};
//===============================================
void GFood::blend() {
    printf("%s...\n", __PRETTY_FUNCTION__);
}
//===============================================
void GFood::slice() {
    printf("%s...\n", __PRETTY_FUNCTION__);
}
//===============================================
void GFood::dice() {
    printf("%s...\n", __PRETTY_FUNCTION__);
}
//===============================================
void GTest::runIsp(int _argc, char** _argv) {
    GFood lFood;
    lFood.blend();
    lFood.slice();
    lFood.dice();
}
//===============================================</pre><br>Maintenant, nous avons un problème avec la classe (GBlender) car elle ne prend pas en charge cette nouvelle interface, il n'y a pas de moyen approprié de l'implémenter. Nous pouvons essayer de bidouiller une solution de contournement ou lancer std::logic_error, mais une bien meilleure solution serait simplement de diviser l'interface en deux, chacune avec une responsabilité distincte.<br><br>Approche 3:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
class GBlendI {
public:
    virtual ~GBlendI() = default;
    virtual void blend() = 0;
};
//===============================================
class GFoodI {
public:
    virtual ~GFoodI() = default;
    virtual void slice() = 0;
    virtual void dice() = 0;
};
//===============================================
class GBlend2 : public GBlendI {
public:
    GBlend2();
    void blend() override;
};
//===============================================
class GFood2 : public GBlendI, public GFoodI {
public:
    GFood2();
    void blend() override;
    void slice() override;
    void dice() override;
};
//===============================================
void GBlend2::blend() {
    printf("%s...\n", __PRETTY_FUNCTION__);
}
//===============================================
void GFood2::blend() {
    printf("%s...\n", __PRETTY_FUNCTION__);
}
//===============================================
void GFood2::slice() {
    printf("%s...\n", __PRETTY_FUNCTION__);
}
//===============================================
void GFood2::dice() {
    printf("%s...\n", __PRETTY_FUNCTION__);
}
//===============================================
void GTest::runIsp(int _argc, char** _argv) {
    GBlend2 lBlend;
    lBlend.blend();

    GFood2 lFood;
    lFood.blend();
    lFood.slice();
    lFood.dice();
}
//===============================================</pre><br>Désormais, notre classe (GFood) peut simplement implémenter les deux interfaces (GBlendI, GFoodI), et nous n'avons pas besoin de modifier l'implémentation de notre robot culinaire existant (GBlend).<br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="le-principe-de-l-inversion-de-dependance-dip">Le principe de l'inversion de dépendance DIP</a>
</h1>
<div class="Section6"><br>Le principe de l'inversion de dépendance DIP (Dependency Inversion Principle) est un principe utile pour le découplage. Essentiellement, cela signifie que les modules de haut niveau ne doivent pas dépendre des modules de niveau inférieur.<br><br>Au lieu de cela, les deux devraient dépendre d'abstractions.<br><br>C++ permet deux manières d'inverser les dépendances entre vos classes. La première est l'approche régulière et polymorphe et la seconde utilise des modèles.<br><br>Supposons que vous modélisez un projet de développement logiciel censé avoir des développeurs frontend et backend.<br><br>Une approche simple serait de l'écrire comme ceci:<br><br>Approche 1:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
class GBackend {
public:
    GBackend();
    void developBackend();
};
//===============================================
class GFrontend {
public:
    GFrontend();
    void developFrontend();
};
//===============================================
class GProject {
public:
    GProject();
    void deliver();

private:
    GBackend m_backend;
    GFrontend m_frontend;
};
//===============================================
void GBackend::developBackend() {
    printf("%s...\n", __PRETTY_FUNCTION__);
}
//===============================================
void GFrontend::developFrontend() {
    printf("%s...\n", __PRETTY_FUNCTION__);
}
//===============================================
void GProject::deliver() {
    printf("%s...\n", __PRETTY_FUNCTION__);
    m_backend.developBackend();
    m_frontend.developFrontend();
}
//===============================================
void GTest::runDip(int _argc, char** _argv) {
    GProject lProject;
    lProject.deliver();
}
//===============================================</pre><br>Chaque développeur (GFontend, GBackend) est construit par la classe projet (GProject). Cette approche n'est cependant pas idéale, car le concept de niveau supérieur (GProject) dépend désormais de ceux de niveau inférieur du processus de développement (GFrontend, GBackend).<br><br>Voyons comment l'application de l'inversion de dépendance à l'aide du polymorphisme change cela.<br><br>Nous pouvons définir nos développeurs  (GFrontend, GBackend) pour qu'ils dépendent d'une interface (GDeveloper) comme suit:<br><br>Approche 2:<br><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
class GDeveloper {
public:
    virtual ~GDeveloper() = default;
    virtual void develop() = 0;
};
//===============================================
class GBackend2 : public GDeveloper {
public:
    GBackend2();
    void develop() override;

private:
    void developBackend();
};
//===============================================
class GFrontend2 : public GDeveloper {
public:
    GFrontend2();
    void develop() override;

private:
    void developFrontend();
};
//===============================================
class GProject2 {
public:
    using GDeveloperPtr = std::unique_ptr&lt;GDeveloper&gt;;
    using GDeveloperMap = std::vector&lt;GDeveloperPtr&gt;;

public:
    GProject2();
    void addDeveloper(GDeveloperPtr _developer);
    void deliver();

private:
    GDeveloperMap m_developers;
};
//===============================================
void GFrontend2::develop() {
    printf("%s...\n", __PRETTY_FUNCTION__);
    developFrontend();
}
//===============================================
void GFrontend2::developFrontend() {
    printf("%s...\n", __PRETTY_FUNCTION__);
}
//===============================================
void GBackend2::develop() {
    printf("%s...\n", __PRETTY_FUNCTION__);
    developBackend();
}
//===============================================
void GBackend2::developBackend() {
    printf("%s...\n", __PRETTY_FUNCTION__);
}
//===============================================
void GProject2::addDeveloper(GDeveloperPtr _developer) {
    m_developers.push_back(std::move(_developer));
}
//===============================================
void GProject2::deliver() {
    printf("%s...\n", __PRETTY_FUNCTION__);
    for (auto&amp; lDeveloper : m_developers) {
        lDeveloper-&gt;develop();
    }
}
//===============================================
void GTest::runDip(int _argc, char** _argv) {
    GProject2 lProject;
    GProject2::GDeveloperPtr lBackend = std::make_unique&lt;GBackend2&gt;();
    GProject2::GDeveloperPtr lFrontend = std::make_unique&lt;GFrontend2&gt;();
    lProject.addDeveloper(std::move(lBackend));
    lProject.addDeveloper(std::move(lFrontend));
    lProject.deliver();
}
//===============================================</pre><br>Dans cette approche, le projet (GProject) est découplé des implémentations concrètes et dépend uniquement de l'interface polymorphe des développeur (GDeveloper). Les classes concrètes "de niveau inférieur" dépendent également de cette interface. Cela peut vous aider à raccourcir votre temps de construction et permet des tests unitaires beaucoup plus faciles. Maintenant vous pouvez facilement passer des mocks comme arguments dans votre code de test.<br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="a-suivre---">À suivre...</a>
</h1>
<div class="Section6">Ajouter un texte ici...</div>
</div>
</div>
</div><br>