<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Programmation web en JavaScript<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la programmation web en <b>JavaScript</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br><b>JavaScript </b>est un langage de programmation de scripts principalement employé dans les pages web interactives et à ce titre est une partie essentielle des applications web. Avec les technologies HTML et CSS, JavaScript est parfois considéré comme l'une des technologies cœur du World Wide Web. Une grande majorité des sites web l'utilisent, et la majorité des navigateurs web disposent d'un moteur JavaScript dédié pour l'interpréter, indépendamment des considérations de sécurité qui peuvent se poser le cas échéant. C'est un langage orienté objet à prototype : les bases du langage et ses principales interfaces sont fournies par des objets. Cependant, à la différence d'un langage orienté objets, les objets de base ne sont pas des instances de classes. <br><br><div class="Img3 GImage"><img src="/Tutoriels/Web/JavaScript/img/b_javascript.png" alt="/Tutoriels/Web/JavaScript/img/b_javascript.png"></div><br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Fondamentaux"><a class="Link3" href="#">Fondamentaux</a></h1><div class="Body3"><br>Les fondamentaux de JavaScript.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1621915613102"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1621915613102");</script></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Installation"><a class="Link9" href="#Fondamentaux">Installation</a></h2><br>Aucune installation n'est nécessaire.<br><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-script-de-test"><a class="Link9" href="#Fondamentaux">Créer un script de test</a></h2><br>Le <b>script </b>est récupéré et exécuté immédiatement, avant que le navigateur ne poursuive l'analyse de la page. C'est pourquoi, dans la pratique, il est communément admis de placer, dans la mesure du possible, les balises &lt;script&gt; à la fin du document juste avant la fermeture de &lt;/body&gt;.<br><br><h3 class="Title8 GTitle3">index.html</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="html">&lt;!DOCTYPE html&gt;
&lt;html lang='fr'&gt;
    &lt;head&gt;
        &lt;title&gt;ReadyApp&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- ============================================ --&gt;
        &lt;button onclick="onClick('red')"&gt;Red&lt;/button&gt;
        &lt;button onclick="onClick('green')"&gt;Green&lt;/button&gt;
        &lt;button onclick="onClick('blue')"&gt;Blue&lt;/button&gt;
        &lt;!-- ============================================ --&gt;
        &lt;p id="msg"&gt;Bonjour tout le monde&lt;/p&gt;
        &lt;!-- ============================================ --&gt;
        &lt;script src='/script.js'&gt;&lt;/script&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/body&gt;
&lt;/html&gt;</pre></div></div><br><h3 class="Title8 GTitle3">script.js</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="javascript">//===============================================
function onClick(color) {
    var lMsg = document.getElementById("msg");
    lMsg.style.color = color;
}
//===============================================
onClick("green");
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Web/JavaScript/img/i_javascript_minimal.gif" class="lazy" data-src="/Tutoriels/Web/JavaScript/img/i_javascript_minimal.gif"></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-script-avec-l-attribut-async"><a class="Link9" href="#Fondamentaux">Créer un script avec l'attribut async</a></h2><br>L'attribut <b>async </b>est un attribut booléen. Lorsqu'il est présent, il spécifie que le script sera exécuté de manière asynchrone avec le reste de la page (le script sera exécuté pendant que la page continue l'analyse). L'ordre d'exécution des scripts n'est pas préservé, il est indépendant de leur apparition dans le code source HTML. Il est uniquement destiné aux scripts externes (et ne doit être utilisé que si l'attribut src est présent). Il permet d'optimiser les performances du site web en augmentant la vitesse de chargement du contenu observable et des ressources.<br><br><h3 class="Title8 GTitle3">index.html</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="html">&lt;!DOCTYPE html&gt;
&lt;html lang='fr'&gt;
    &lt;head&gt;
        &lt;!-- ============================================ --&gt;
        &lt;title&gt;ReadyApp&lt;/title&gt;
        &lt;!-- ============================================ --&gt;
        &lt;script src='/script.js' async&gt;&lt;/script&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- ============================================ --&gt;
        &lt;button onclick="onClick('red')"&gt;Red&lt;/button&gt;
        &lt;button onclick="onClick('green')"&gt;Green&lt;/button&gt;
        &lt;button onclick="onClick('blue')"&gt;Blue&lt;/button&gt;
        &lt;!-- ============================================ --&gt;
        &lt;p id="msg"&gt;Bonjour tout le monde&lt;/p&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/body&gt;
&lt;/html&gt;</pre></div></div><br><h3 class="Title8 GTitle3">script.js</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="javascript">//===============================================
function onClick(color) {
    var lMsg = document.getElementById("msg");
    lMsg.style.color = color;
}
//===============================================
onClick("green");
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Web/JavaScript/img/i_javascript_async.gif" class="lazy" data-src="/Tutoriels/Web/JavaScript/img/i_javascript_async.gif"></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-script-avec-l-attribut-defer"><a class="Link9" href="#Fondamentaux">Créer un script avec l'attribut defer</a></h2><br>L'attribut <b>defer </b>est un attribut booléen. Lorsqu'il est présent, il spécifie que le script est exécuté lorsque la page a terminé l'analyse. L'ordre d'exécution des scripts est préservé, en fonction de leur apparition dans le code source HTML. Il est uniquement destiné aux scripts externes (et ne doit être utilisé que si l'attribut src est présent). Il permet d'optimiser les performances du site web en augmentant la vitesse de chargement du contenu observable.<br><br><h3 class="Title8 GTitle3">index.html</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="html">&lt;!DOCTYPE html&gt;
&lt;html lang='fr'&gt;
    &lt;head&gt;
        &lt;!-- ============================================ --&gt;
        &lt;title&gt;ReadyApp&lt;/title&gt;
        &lt;!-- ============================================ --&gt;
        &lt;script src='/script.js' defer&gt;&lt;/script&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- ============================================ --&gt;
        &lt;button onclick="onClick('red')"&gt;Red&lt;/button&gt;
        &lt;button onclick="onClick('green')"&gt;Green&lt;/button&gt;
        &lt;button onclick="onClick('blue')"&gt;Blue&lt;/button&gt;
        &lt;!-- ============================================ --&gt;
        &lt;p id="msg"&gt;Bonjour tout le monde&lt;/p&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/body&gt;
&lt;/html&gt;</pre></div></div><br><h3 class="Title8 GTitle3">script.js</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="javascript">//===============================================
function onClick(color) {
    var lMsg = document.getElementById("msg");
    lMsg.style.color = color;
}
//===============================================
onClick("green");
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img alt="/Tutoriels/Web/JavaScript/img/i_javascript_defer.gif" class="lazy entered loaded" data-src="/Tutoriels/Web/JavaScript/img/i_javascript_defer.gif" data-ll-status="loaded" src="/Tutoriels/Web/JavaScript/img/i_javascript_defer.gif"></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Formater-une-chaine-de-caractere"><a class="Link9" href="#Fondamentaux">Formater une chaîne de caractère</a></h2><br>Le <b>formatage </b>de chaîne de caractères permet de faire de la concaténation et de l'insertion de données dans une chaîne.<br><br><h3 class="Title8 GTitle3">index.html</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="html">&lt;!DOCTYPE html&gt;
&lt;html lang='fr'&gt;
    &lt;head&gt;
        &lt;title&gt;ReadyApp&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- ============================================ --&gt;
        &lt;div id="msg"&gt;&lt;/div&gt;
        &lt;!-- ============================================ --&gt;
        &lt;script src='/script.js'&gt;&lt;/script&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/body&gt;
&lt;/html&gt;</pre></div></div><br><h3 class="Title8 GTitle3">script.js</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="javascript">//===============================================
function format(fmt, ...args) {
    if (!fmt.match(/^(?:(?:(?:[^{}]|(?:\{\{)|(?:\}\}))+)|(?:\{[0-9]+\}))+$/)) {
        throw new Error('invalid format string.');
    }
    return fmt.replace(/((?:[^{}]|(?:\{\{)|(?:\}\}))+)|(?:\{([0-9]+)\})/g, (m, str, index) =&gt; {
        if (str) {
            return str.replace(/(?:{{)|(?:}})/g, m =&gt; m[0]);
        } else {
            if (index &gt;= args.length) {
                throw new Error('argument index is out of range in format');
            }
            return args[index];
        }
    });
}
//===============================================
var lMsg = document.getElementById("msg");
var lHtml = "";
lHtml += format("Bonjour {0} le {1}&lt;br&gt;", "tout", "monde");
lHtml += format("Année : {0}&lt;br&gt;", 2021);
lHtml += format("PI : {0}&lt;br&gt;", 3.14);
lMsg.innerHTML = lHtml;
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="javascript">Bonjour tout le monde
Année : 2021
PI : 3.14</pre></div></div><br><h2 class="Title7 GTitle2" id="Fondamentaux-Creer-un-systeme-de-console"><a class="Link9" href="#Fondamentaux">Créer un système de console</a></h2><br>Une <b>console </b>permet d'afficher des messages sur une interface permettant de déboguer un projet.<br><br><h3 class="Title8 GTitle3">index.html</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="html">&lt;!DOCTYPE html&gt;
&lt;html lang='fr'&gt;
    &lt;head&gt;
        &lt;title&gt;ReadyApp&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- ============================================ --&gt;
        &lt;div id="msg"&gt;&lt;/div&gt;
        &lt;!-- ============================================ --&gt;
        &lt;script src='/manager.js'&gt;&lt;/script&gt;
        &lt;script src='/script.js'&gt;&lt;/script&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/body&gt;
&lt;/html&gt;</pre></div></div><br><h3 class="Title8 GTitle3">manager.js</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="javascript">//===============================================
function format(fmt, ...args) {
    if (!fmt.match(/^(?:(?:(?:[^{}]|(?:\{\{)|(?:\}\}))+)|(?:\{[0-9]+\}))+$/)) {
        throw new Error('invalid format string.');
    }
    return fmt.replace(/((?:[^{}]|(?:\{\{)|(?:\}\}))+)|(?:\{([0-9]+)\})/g, (m, str, index) =&gt; {
        if (str) {
            return str.replace(/(?:{{)|(?:}})/g, m =&gt; m[0]);
        } else {
            if (index &gt;= args.length) {
                throw new Error('argument index is out of range in format');
            }
            return args[index];
        }
    });
}
//===============================================
function message(fmt, ...args) {
    var lMsg = document.getElementById("msg");
    var lHtml = format(fmt, ...args);
    lMsg.innerHTML += lHtml;
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">script.js</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="javascript">//===============================================
message("Bonjour {0} le {1}&lt;br&gt;", "tout", "monde");
message("Année : {0}&lt;br&gt;", 2021);
message("PI : {0}&lt;br&gt;", 3.14);
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="javascript">Bonjour tout le monde
Année : 2021
PI : 3.14</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programmation-orientee-objet"><a class="Link3" href="#">Programmation orientée objet</a></h1><div class="Body3"><br>La <b>programmation orientée objet</b> (POO), ou programmation par objet, est un paradigme de programmation informatique. Elle consiste en la définition et l'interaction de briques logicielles appelées objets ; un objet représente un concept, une idée ou toute entité du monde physique, comme une voiture, une personne ou encore une page d'un livre. Il possède une structure interne et un comportement, et il sait interagir avec ses pairs. Il s'agit donc de représenter ces objets et leurs relations ; l'interaction entre les objets via leurs relations permet de concevoir et réaliser les fonctionnalités attendues, de mieux résoudre le ou les problèmes. Dès lors, l'étape de modélisation revêt une importance majeure et nécessaire pour la POO. C'est elle qui permet de transcrire les éléments du réel sous forme virtuelle. La programmation par objet consiste à utiliser des techniques de programmation pour mettre en œuvre une conception basée sur les objets. Celle-ci peut être élaborée en utilisant des méthodologies de développement logiciel objet, dont la plus connue est le processus unifié (« Unified Software Development Process » en anglais), et exprimée à l'aide de langages de modélisation tels que le Unified Modeling Language (UML).<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Programmation-orientee-objet-Creer-une-classe"><a class="Link9" href="#Programmation-orientee-objet">Créer une classe</a></h2><br>En programmation orientée objet, la déclaration d'une <b>classe </b>regroupe des membres, méthodes et propriétés (attributs) communs à un ensemble d'objets. La classe déclare, d'une part, des attributs représentant l'état des objets et, d'autre part, des méthodes représentant leur comportement. Une classe représente donc une catégorie d'objets. Elle apparaît aussi comme un moule ou une usine à partir de laquelle il est possible de créer des objets ; c'est en quelque sorte une « boîte à outils » qui permet de fabriquer un objet. On parle alors d'un objet en tant qu'instance d'une classe (création d'un objet ayant les propriétés de la classe).<br><br><h3 class="Title8 GTitle3">index.html</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="html">&lt;!DOCTYPE html&gt;
&lt;html lang='fr'&gt;
    &lt;head&gt;
        &lt;title&gt;ReadyApp&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- ============================================ --&gt;
        &lt;div id="msg"&gt;&lt;/div&gt;
        &lt;!-- ============================================ --&gt;
        &lt;script src='/manager.js'&gt;&lt;/script&gt;
        &lt;script src='/script.js'&gt;&lt;/script&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/body&gt;
&lt;/html&gt;</pre></div></div><br><h3 class="Title8 GTitle3">script.js</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="html">//===============================================
class GPerson {
    constructor(name, code, coef) {
        this.name = name;
        this.code = code;
        this.coef = coef;
    }
    //===============================================
    print() {
        var lMsg = document.getElementById("msg");
        var lHtml = "";
        lHtml += format("Nom : {0}&lt;br&gt;", this.name);
        lHtml += format("Code : {0}&lt;br&gt;", this.code);
        lHtml += format("Coef : {0}&lt;br&gt;", this.coef);
        lMsg.innerHTML = lHtml;
    }
}
//===============================================
var lPerson = new GPerson("Gerard KESSE", 123456, 3.14);
lPerson.print();
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="javascript">Nom : Gerard KESSE
Code : 123456
Coef : 3.14</pre></div></div><br><h2 class="Title7 GTitle2" id="Programmation-orientee-objet-Creer-un-heritage-de-classe"><a class="Link9" href="#Programmation-orientee-objet">Créer un héritage de classe</a></h2><br>En programmation orientée objet, l’<b>héritage </b>est un mécanisme qui permet, lors de la déclaration d’une nouvelle classe, d'y inclure les caractéristiques d’une autre classe. L'héritage établit une relation de généralisation-spécialisation qui permet d'hériter dans la déclaration d’une nouvelle classe (appelée classe dérivée, classe fille, classe enfant ou sous-classe) des caractéristiques (propriétés et méthodes) de la déclaration d'une autre classe (appelée classe de base, classe mère, classe parent ou super-classe).<br><br><h3 class="Title8 GTitle3">index.html</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="html">&lt;!DOCTYPE html&gt;
&lt;html lang="fr"&gt;
    &lt;head&gt;
        &lt;title&gt;ReadyApp&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- ============================================ --&gt;
        &lt;div id="msg"&gt;&lt;/div&gt;
        &lt;!-- ============================================ --&gt;
        &lt;script src="/manager.js"&gt;&lt;/script&gt;
        &lt;script src="/script.js"&gt;&lt;/script&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/body&gt;
&lt;/html&gt;</pre></div></div><br><h3 class="Title8 GTitle3">script.js</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="javascript">//===============================================
class GPerson {
    constructor(name) {
        this.name = name;
    }
    printName() {
        message("[{0}] Mon nom est {0}&lt;br&gt;", this.name);
    }
}
//===============================================
class GStudent extends GPerson {
    constructor(name, average) {
        super(name);
        this.average = average;
    }
    printAverage() {
        message("[{0}] Ma moyenne est {1}&lt;br&gt;", this.name, this.average);
    }
}
//===============================================
var lPerson = new GPerson("Gerard KESSE");
lPerson.printName();
var lStudent = new GStudent("Pierre DUPONT", 15.25);
lStudent.printName();
lStudent.printAverage();
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="html">[Gerard KESSE] Mon nom est Gerard KESSE
[Pierre DUPONT] Mon nom est Pierre DUPONT
[Pierre DUPONT] Ma moyenne est 15.25</pre></div></div><br><h2 class="Title7 GTitle2" id="Programmation-orientee-objet-Creer-un-polymorphisme-de-classe"><a class="Link9" href="#Programmation-orientee-objet">Créer un polymorphisme de classe</a></h2><br>En informatique et en théorie des types, le <b>polymorphisme</b>, est le concept consistant à fournir une interface unique à des entités pouvant avoir différents types. Par exemple, des opérations telles que la multiplication peuvent ainsi être étendues à des scalaires aux vecteurs ou aux matrices, l'addition, des scalaires aux fonctions ou aux chaînes de caractères, etc.<br><br><h3 class="Title8 GTitle3">index.html</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="html">&lt;!DOCTYPE html&gt;
&lt;html lang="fr"&gt;
    &lt;head&gt;
        &lt;title&gt;ReadyApp&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- ============================================ --&gt;
        &lt;div id="msg"&gt;&lt;/div&gt;
        &lt;!-- ============================================ --&gt;
        &lt;script src="/manager.js"&gt;&lt;/script&gt;
        &lt;script src="/script.js"&gt;&lt;/script&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/body&gt;
&lt;/html&gt;</pre></div></div><br><h3 class="Title8 GTitle3">script.js</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="javascript">//===============================================
class GPerson {
    constructor(name) {
        this.name = name;
    }
    print() {
        message("[GPerson] Je suis une personne&lt;br&gt;");
        message("[GPerson] Mon nom est {0}&lt;br&gt;", this.name);
    }
}
//===============================================
class GStudent extends GPerson {
    constructor(name, average) {
        super(name);
        this.average = average;
    }
    print() {
        message("[GStudent] Je suis un étudiant&lt;br&gt;");
        message("[GStudent] Mon nom est {0}&lt;br&gt;", this.name);
        message("[GStudent] Ma moyenne est {0}&lt;br&gt;", this.average);
    }
}
//===============================================
var lPersons = [];
lPersons.push(new GPerson("Gerard KESSE"));
lPersons.push(new GStudent("Pierre DUPONT", 15.25));
for(var i = 0; i &lt; lPersons.length; i++) {
    var lPerson = lPersons[i];
    lPerson.print();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="html">[GPerson] Je suis une personne
[GPerson] Mon nom est Gerard KESSE
[GStudent] Je suis un étudiant
[GStudent] Mon nom est Pierre DUPONT
[GStudent] Ma moyenne est 15.25</pre></div></div><div align="left"><br></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Patrons-de-conception"><a class="Link3" href="#">Patrons de conception</a></h1><div class="Body3"><br>En informatique, et plus particulièrement en développement logiciel, un <b>patron de conception</b> (souvent appelé design pattern) est un arrangement caractéristique de modules, reconnu comme bonne pratique en réponse à un problème de conception d'un logiciel. Il décrit une solution standard, utilisable dans la conception de différents logiciels. Un patron de conception est issu de l'expérience des concepteurs de logiciels. Il décrit un arrangement récurrent de rôles et d'actions joués par des modules d'un logiciel, et le nom du patron sert de vocabulaire commun entre le concepteur et le programmeur. D'une manière analogue à un motif de conception en architecture, le patron de conception décrit les grandes lignes d'une solution, qui peuvent ensuite être modifiées et adaptées en fonction des besoins. Les patrons de conception décrivent des procédés de conception généraux et permettent en conséquence de capitaliser l'expérience appliquée à la conception de logiciel. Ils ont une influence sur l'architecture logicielle d'un système informatique. <br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Patrons-de-conception-Creer-un-patron-singleton"><a class="Link9" href="#Patrons-de-conception">Créer un patron singleton</a></h2><br>En génie logiciel, le <b>singleton </b>est un patron de conception (design pattern) dont l'objectif est de restreindre l'instanciation d'une classe à un seul objet (ou bien à quelques objets seulement). Il est utilisé lorsqu'on a besoin exactement d'un objet pour coordonner des opérations dans un système. Le modèle est parfois utilisé pour son efficacité, lorsque le système est plus rapide ou occupe moins de mémoire avec peu d'objets qu'avec beaucoup d'objets similaires.<br><br><h3 class="Title8 GTitle3">index.html</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="html">&lt;!DOCTYPE html&gt;
&lt;html lang="fr"&gt;
    &lt;head&gt;
        &lt;title&gt;ReadyApp&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- ============================================ --&gt;
        &lt;div id="msg"&gt;&lt;/div&gt;
        &lt;!-- ============================================ --&gt;
        &lt;script src="/manager.js"&gt;&lt;/script&gt;
        &lt;script src="/script.js"&gt;&lt;/script&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/body&gt;
&lt;/html&gt;</pre></div></div><br><h3 class="Title8 GTitle3">script.js</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="javascript">//===============================================
class GDatabase {
    //===============================================
    static instance = null;
    //===============================================
    constructor() {
        message("on crée le singleton&lt;br&gt;");
    }
    //===============================================
    static Instance() {
        if(this.instance == null) {
            this.instance = new GDatabase();
        }
        return this.instance;
    }
    //===============================================
    open() {
        message("on ouvre la base de données&lt;br&gt;");
    }
    //===============================================
    load() {
        message("on charge la base de données&lt;br&gt;");
    }
    //===============================================
    update() {
        message("on modifie la base de données&lt;br&gt;");
    }
    //===============================================
    save() {
        message("on enregistre la base de données&lt;br&gt;");
    }
    //===============================================
    close() {
        message("on ferme la base de données&lt;br&gt;");
    }
    //===============================================
}
//===============================================
GDatabase.Instance().open();
GDatabase.Instance().load();
GDatabase.Instance().update();
GDatabase.Instance().save();
GDatabase.Instance().close();
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="javascript">on crée le singleton
on ouvre la base de données
on charge la base de données
on modifie la base de données
on enregistre la base de données
on ferme la base de données</pre></div></div><br><h2 class="Title7 GTitle2" id="Patrons-de-conception-Creer-un-patron-strategie"><a class="Link9" href="#Patrons-de-conception">Créer un patron stratégie</a></h2><br>En génie logiciel, le patron <b>stratégie </b>est un patron de conception (design pattern) de type comportemental grâce auquel des algorithmes peuvent être sélectionnés à la volée au cours du temps d'exécution selon certaines conditions. Le patron de conception stratégie est utile pour des situations où il est nécessaire de permuter dynamiquement les algorithmes utilisés dans une application. Le patron stratégie est prévu pour fournir le moyen de définir une famille d'algorithmes, encapsuler chacun d'eux en tant qu'objet, et les rendre interchangeables. Ce patron laisse les algorithmes changer indépendamment des clients qui les emploient. <br><br><h3 class="Title8 GTitle3">index.html</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="html">&lt;!DOCTYPE html&gt;
&lt;html lang="fr"&gt;
    &lt;head&gt;
        &lt;title&gt;ReadyApp&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- ============================================ --&gt;
        &lt;div id="msg"&gt;&lt;/div&gt;
        &lt;!-- ============================================ --&gt;
        &lt;script src="/manager.js"&gt;&lt;/script&gt;
        &lt;script src="/script.js"&gt;&lt;/script&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/body&gt;
&lt;/html&gt;</pre></div></div><br><h3 class="Title8 GTitle3">script.js</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="javascript">//===============================================
class GAnimal {
    constructor(name) {
        this.name = name;
    }
    print() {
        message("[GAnimal] Je suis un animal&lt;br&gt;");
        message("[GAnimal] Mon nom est {0}&lt;br&gt;", this.name);
    }
}
//===============================================
class GCat extends GAnimal {
    constructor(name, price) {
        super(name);
        this.price = price;
    }
    print() {
        message("[GCat] Je suis un chat&lt;br&gt;");
        message("[GCat] Mon nom est {0}&lt;br&gt;", this.name);
        message("[GCat] Mon prix est {0} €&lt;br&gt;", this.price);
    }
}
//===============================================
class GDog extends GAnimal {
    constructor(name, weight) {
        super(name);
        this.weight = weight;
    }
    print() {
        message("[GDog] Je suis un chien&lt;br&gt;");
        message("[GDog] Mon nom est {0}&lt;br&gt;", this.name);
        message("[GDog] Mon poids est {0} kg&lt;br&gt;", this.weight);
    }
}
//===============================================
var lAnimals = [];
lAnimals.push(new GAnimal("Jerry"));
lAnimals.push(new GCat("Tom", 100));
lAnimals.push(new GDog("Medor", 25));
for(var i = 0; i &lt; lAnimals.length; i++) {
    var lAnimal = lAnimals[i];
    lAnimal.print();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="html">[GAnimal] Je suis un animal
[GAnimal] Mon nom est Jerry
[GCat] Je suis un chat
[GCat] Mon nom est Tom
[GCat] Mon prix est 100 €
[GDog] Je suis un chien
[GDog] Mon nom est Medor
[GDog] Mon poids est 25 kg</pre></div></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Manager-de-donnees"><a class="Link3" href="#">Manager de données</a></h1><div class="Body3"><br>Le <b>manager de données</b> que nous présentons ici est une architecture logicielle permettant d'accéder à toutes les données d'une application.<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Manager-de-donnees-Creer-un-manager-de-donnees"><a class="Link9" href="#Manager-de-donnees">Créer un manager de données</a></h2><br><h3 class="Title8 GTitle3">index.html</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="html">&lt;!DOCTYPE html&gt;
&lt;html lang="fr"&gt;
    &lt;head&gt;
        &lt;title&gt;ReadyApp&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- ============================================ --&gt;
        &lt;div id="msg"&gt;&lt;/div&gt;
        &lt;!-- ============================================ --&gt;
        &lt;script src="/manager.js"&gt;&lt;/script&gt;
        &lt;script src="/script.js"&gt;&lt;/script&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/body&gt;
&lt;/html&gt;</pre></div></div><br><h3 class="Title8 GTitle3">script.js</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="javascript">//===============================================
class sGManager {}
class sGApp {}
//===============================================
class GManager {
    //===============================================
    static instance = null;
    //===============================================
    constructor() {
        // manager
        this.mgr = new sGManager();
        // app
        this.mgr.app = new sGApp();
        this.mgr.app.app_name = "ReadyApp";
        this.mgr.app.win_width = 640;
        this.mgr.app.win_height = 480;
    }
    //===============================================
    static Instance() {
        if(this.instance == null) {
            this.instance = new GManager();
        }
        return this.instance;
    }
    //===============================================
    getData() {
        return this.mgr;
    }
    //===============================================
}
//===============================================
var lApp = GManager.Instance().getData().app;
message("app_name : {0}&lt;br&gt;", lApp.app_name);
message("win_width : {0}&lt;br&gt;", lApp.win_width);
message("win_height : {0}&lt;br&gt;", lApp.win_height);
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="javascript">app_name : ReadyApp
win_width : 640
win_height : 480</pre></div></div><br><h2 class="Title7 GTitle2" id="Manager-de-donnees-Creer-un-manager-de-donnees--2-"><a class="Link9" href="#Manager-de-donnees">Créer un manager de données (2)</a></h2><br><h3 class="Title8 GTitle3">index.html</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="html">&lt;!DOCTYPE html&gt;
&lt;html lang="fr"&gt;
    &lt;head&gt;
        &lt;title&gt;ReadyApp&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- ============================================ --&gt;
        &lt;div id="msg"&gt;&lt;/div&gt;
        &lt;!-- ============================================ --&gt;
        &lt;script src="/manager.js"&gt;&lt;/script&gt;
        &lt;script src="/script.js"&gt;&lt;/script&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/body&gt;
&lt;/html&gt;</pre></div></div><br><h3 class="Title8 GTitle3">script.js</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="javascript">//===============================================
function sGManager() {}
function sGApp() {}
//===============================================
var GManager = (function() {
    //===============================================
    var m_instance;
    //===============================================
    var mgr;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            init: function() {
                this.construct();
            },
            //===============================================
            construct: function() {
                // manager
                this.mgr = new sGManager();
                // app
                this.mgr.app = new sGApp();
                this.mgr.app.app_name = "ReadyApp";
                this.mgr.app.win_width = 640;
                this.mgr.app.win_height = 480;
            },
            //===============================================
            getData: function() {
                return this.mgr;
            }
            //===============================================
        };
    }
    //===============================================
    return {
        Instance: function() {
            if(!m_instance) {
                m_instance = Container();
            }
            return m_instance;
        }
    };
    //===============================================
})();
//===============================================
GManager.Instance().init();
//===============================================
var lApp = GManager.Instance().getData().app;
message("app_name : {0}&lt;br&gt;", lApp.app_name);
message("win_width : {0}&lt;br&gt;", lApp.win_width);
message("win_height : {0}&lt;br&gt;", lApp.win_height);
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Timers"><a class="Link3" href="#">Timers</a></h1><div class="Body3"><br>L'obje <span class="GCode3"><code style="color:#cccccc;">window</code></span> permet l'exécution de code à des <b>intervalles de temps</b> spécifiés. Ces intervalles de temps sont appelés événements de chronométrage.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1622129349360"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1622129349360");</script></div><br><h2 class="Title7 GTitle2" id="Timers-Creer-un-timer-avec-setInterval"><a class="Link9" href="#Timers">Créer un timer avec setInterval</a></h2><br>La méthode <b>setInterval </b>répète une fonction donnée à chaque intervalle de temps donné.<br><br><h3 class="Title8 GTitle3">index.html</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="html">&lt;!DOCTYPE html&gt;
&lt;html lang='fr'&gt;
    &lt;head&gt;
        &lt;!-- ============================================ --&gt;
        &lt;title&gt;ReadyApp&lt;/title&gt;
        &lt;!-- ============================================ --&gt;
        &lt;script src='/script.js' async&gt;&lt;/script&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- ============================================ --&gt;
        &lt;button onclick="onClick('start')"&gt;Start&lt;/button&gt;
        &lt;button onclick="onClick('stop')"&gt;Stop&lt;/button&gt;
        &lt;!-- ============================================ --&gt;
        &lt;p id="count" class="msg"&gt;0&lt;/p&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/body&gt;
&lt;/html&gt;</pre></div></div><br><h3 class="Title8 GTitle3">script.js</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="javascript">//===============================================
var gTimer = null;
//===============================================
function onTimer() {
    var lCountId = document.getElementById("count");
    var lCount = parseInt(lCountId.innerText);
    lCount += 1;
    lCountId.innerText = lCount;
}
//===============================================
function onClick(key) {
    if(key == "start") {gTimer = setInterval(onTimer, 1000);}
    else if(key == "stop") {clearInterval(gTimer);}
}
//===============================================
function main() {
    onClick("stop");
}
//===============================================
main();
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Web/JavaScript/img/i_javascript_setinterval.gif" alt="/Tutoriels/Web/JavaScript/img/i_javascript_setinterval.gif"></div><br><h2 class="Title7 GTitle2" id="Timers-Creer-un-timer-avec-setTimeout"><a class="Link9" href="#Timers">Créer un timer avec setTimeout</a></h2><br>La méthode <b>setTimeout </b>exécute une seule fois une fonction donnée après avoir attendue un nombre spécifié de millisecondes.<br><br><h3 class="Title8 GTitle3">index.html</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="html">&lt;!DOCTYPE html&gt;
&lt;html lang='fr'&gt;
    &lt;head&gt;
        &lt;!-- ============================================ --&gt;
        &lt;title&gt;ReadyApp&lt;/title&gt;
        &lt;!-- ============================================ --&gt;
        &lt;script src='/script.js' async&gt;&lt;/script&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- ============================================ --&gt;
        &lt;button onclick="onClick('start')"&gt;Start&lt;/button&gt;
        &lt;button onclick="onClick('stop')"&gt;Stop&lt;/button&gt;
        &lt;!-- ============================================ --&gt;
        &lt;p id="count" class="msg"&gt;0&lt;/p&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/body&gt;
&lt;/html&gt;</pre></div></div><br><h3 class="Title8 GTitle3">script.js</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="javascript">//===============================================
var gContinue = true;
//===============================================
function onTimer() {
    var lCountId = document.getElementById("count");
    var lCount = parseInt(lCountId.innerText);
    lCount += 1;
    lCountId.innerText = lCount;
    if(gContinue) {setTimeout(onTimer, 1000);}
}
//===============================================
function onClick(key) {
    if(key == "start") {gContinue = true; setTimeout(onTimer, 1000);}
    else if(key == "stop") {gContinue = false;}
}
//===============================================
function main() {
    onClick("stop");
}
//===============================================
main();
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Web/JavaScript/img/i_javascript_settimeout.gif" alt="/Tutoriels/Web/JavaScript/img/i_javascript_settimeout.gif"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Viewport"><a class="Link3" href="#">Viewport</a></h1><div class="Body3"><br>Le <b>viewport </b>du navigateur est la zone de la fenêtre dans laquelle le contenu web peut être vu. Souvent, cette zone n'a pas la même taille que la page rendue, auquel cas le navigateur fournit des barres de défilement pour que l'utilisateur et l'utilisatrice puissent faire défiler la page et accéder à tout le contenu.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1622246708832"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1622246708832");</script></div><br><h2 class="Title7 GTitle2" id="Viewport-Recuperer-les-positions-d-un-element"><a class="Link9" href="#Viewport">Récupérer les positions d'un élément</a></h2><br><h3 class="Title8 GTitle3">index.html</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="html">&lt;!DOCTYPE html&gt;
&lt;html lang='fr'&gt;
    &lt;head&gt;
        &lt;!-- ============================================ --&gt;
        &lt;title&gt;ReadyApp&lt;/title&gt;
        &lt;!-- ============================================ --&gt;
        &lt;script src='/script.js' async&gt;&lt;/script&gt;
        &lt;link rel="stylesheet" href="/style.css"&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- ============================================ --&gt;
        &lt;button class="run" onclick="onClick('run')"&gt;Run&lt;/button&gt;
        &lt;div class="spot"&gt;&lt;/div&gt;
        &lt;div class="msg"&gt;Bonjour tout le monde&lt;/div&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/body&gt;
&lt;/html&gt;</pre></div></div><br><h3 class="Title8 GTitle3">script.js</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="javascript">//===============================================
function showRect() {
    var lMsg_Node = document.getElementsByClassName("msg")[0];
    var lSpot_Node = document.getElementsByClassName("spot")[0];
    var lMsg_Rect = lMsg_Node.getBoundingClientRect();
    var lViewport_W = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0);
    var lViewport_H = Math.max(document.documentElement.clientHeight || 0, window.innerHeight || 0);
    var lMsg = "";
    lMsg += "left : " + lMsg_Rect.left + "&lt;br&gt;";
    lMsg += "right : " + lMsg_Rect.right + "&lt;br&gt;";
    lMsg += "top : " + lMsg_Rect.top.toFixed(2) + "&lt;br&gt;";
    lMsg += "bottom : " + lMsg_Rect.bottom.toFixed(2) + "&lt;br&gt;";
    lMsg += "width : " + lMsg_Rect.width + "&lt;br&gt;";
    lMsg += "height : " + lMsg_Rect.height + "&lt;br&gt;";
    lMsg += "Viewport_W : " + lViewport_W + "&lt;br&gt;";
    lMsg += "Viewport_H : " + lViewport_H + "&lt;br&gt;";
    lSpot_Node.innerHTML = lMsg;
}
//===============================================
function onClick(key) {
    if(key == "run") {showRect();}
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">style.css</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="css">/*===============================================*/
body {
    margin: 500px 50px 500px 150px;
}
/*===============================================*/
.msg {
    border: 1px solid black;
    margin: auto;
    max-width: 400px;
    line-height: 300px;
    text-align: center;
}
/*===============================================*/
.run {
    position: fixed;
    left: 10px;
    top: 10px;
    min-width: 130px;
}
/*===============================================*/
.spot {
    position: fixed;
    left: 10px;
    top: 40px;
    border: 1px solid black;
    min-width: 120px;
    min-height: 50px;
    text-align: left;
    padding: 5px;
}
/*===============================================*/</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Web/JavaScript/img/i_viewport_positions.gif" alt="/Tutoriels/Web/JavaScript/img/i_viewport_positions.gif"></div><br><h2 class="Title7 GTitle2" id="Viewport-Detecter-la-visibilite-d-un-element"><a class="Link9" href="#Viewport">Détecter la visibilité d'un élément</a></h2><br><h3 class="Title8 GTitle3">index.html</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="html">&lt;!DOCTYPE html&gt;
&lt;html lang='fr'&gt;
    &lt;head&gt;
        &lt;!-- ============================================ --&gt;
        &lt;title&gt;ReadyApp&lt;/title&gt;
        &lt;!-- ============================================ --&gt;
        &lt;script src='/script.js' async&gt;&lt;/script&gt;
        &lt;link rel="stylesheet" href="/style.css"&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/head&gt;
    &lt;body onscroll="onClick('scroll')"&gt;
        &lt;!-- ============================================ --&gt;
        &lt;div class="spot"&gt;&lt;/div&gt;
        &lt;div class="msg"&gt;Bonjour tout le monde&lt;/div&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/body&gt;
&lt;/html&gt;</pre></div></div><br><h3 class="Title8 GTitle3">script.js</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="javascript">//===============================================
function onScroll() {
    var lMsg_Node = document.getElementsByClassName("msg")[0];
    var lSpot_Node = document.getElementsByClassName("spot")[0];
    var lMsg_Rect = lMsg_Node.getBoundingClientRect();
    var lTop = lMsg_Rect.top;
    var lBottom = lMsg_Rect.bottom;
    var lViewport_H = Math.max(document.documentElement.clientHeight || 0, window.innerHeight || 0);
    var lFlag = true;
    var lHtml = "VISIBLE";
    if(lBottom &lt; 0) {lFlag = false;}
    else if(lTop &gt; lViewport_H) {lFlag = false;}
    if(!lFlag) {lHtml = "HIDDEN";}
    lSpot_Node.innerHTML = lHtml;
}
//===============================================
function onClick(key) {
    if(key == "scroll") {onScroll();}
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">style.css</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="css">/*===============================================*/
body {
    margin: 500px 50px 500px 150px;
}
/*===============================================*/
.msg {
    border: 1px solid black;
    margin: auto;
    max-width: 400px;
    line-height: 300px;
    text-align: center;
}
/*===============================================*/
.spot {
    position: fixed;
    left: 10px;
    top: 40px;
    border: 1px solid black;
    min-width: 120px;
    min-height: 50px;
    text-align: left;
    padding: 5px;
}
/*===============================================*/</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Web/JavaScript/img/i_viewport_detect.gif" alt="/Tutoriels/Web/JavaScript/img/i_viewport_detect.gif"></div><br><h2 class="Title7 GTitle2" id="Viewport-Creer-le-chargement-paresseux-d-un-element"><a class="Link9" href="#Viewport">Créer le chargement paresseux d'un élément</a></h2><br>Le <b>chargement paresseux</b> (également connu sous le nom de chargement asynchrone ) est un modèle de conception couramment utilisé dans la programmation informatique et principalement dans la conception et le développement Web pour différer l'initialisation d'un objet jusqu'au point où il est nécessaire. Il peut contribuer à l'efficacité du fonctionnement du programme s'il est utilisé correctement et de manière appropriée. Cela le rend idéal dans les cas d'utilisation où le contenu du réseau est accessible et où les temps d'initialisation doivent être réduits au minimum, comme dans le cas des pages Web . Par exemple, différer le chargement des images sur une page Web jusqu'à ce qu'elles soient nécessaires peut accélérer l'affichage initial de la page Web. Le contraire du chargement paresseux est le chargement impatient .<br><br><h3 class="Title8 GTitle3">index.html</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="html">&lt;!DOCTYPE html&gt;
&lt;html lang='fr'&gt;
    &lt;head&gt;
        &lt;!-- ============================================ --&gt;
        &lt;title&gt;ReadyApp&lt;/title&gt;
        &lt;!-- ============================================ --&gt;
        &lt;script src='/script.js' async&gt;&lt;/script&gt;
        &lt;link rel="stylesheet" href="/style.css"&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/head&gt;
    &lt;body onscroll="onClick('scroll')"&gt;
        &lt;!-- ============================================ --&gt;
        &lt;div class="msg" data-state="off" data-count="1"&gt;Bonjour tout le monde (1)&lt;/div&gt;
        &lt;div class="msg" data-state="off" data-count="2"&gt;Bonjour tout le monde (2)&lt;/div&gt;
        &lt;div class="msg" data-state="off" data-count="3"&gt;Bonjour tout le monde (3)&lt;/div&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/body&gt;
&lt;/html&gt;</pre></div></div><br><h3 class="Title8 GTitle3">script.js</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="javascript">//===============================================
function isInViewport(obj) {
    var lRect = obj.getBoundingClientRect();
    var lTop = lRect.top;
    var lBottom = lRect.bottom;
    var lViewport_H = Math.max(document.documentElement.clientHeight || 0, window.innerHeight || 0);
    var lFlag = true;
    if(lTop &lt; 0) {lFlag = false;}
    else if(lBottom &gt; lViewport_H) {lFlag = false;}
    return lFlag;
}
//===============================================
function onScroll() {
    var lMsg_Map = document.getElementsByClassName("msg");
    for(var i = 0; i &lt; lMsg_Map.length; i++) {
        var lMsg_Node = lMsg_Map[i];
        var lFlag = isInViewport(lMsg_Node);
        if(!lFlag) {continue;}
        var lState = lMsg_Node.getAttribute("data-state");
        if(lState == "on") {continue;}
        var lCount = lMsg_Node.getAttribute("data-count");
        lCount *= 10;
        lMsg_Node.setAttribute("data-count", lCount);
        lMsg_Node.innerHTML = "Bonjour tout le monde ("+lCount+")";
        lMsg_Node.setAttribute("data-state", "on");
    }
}
//===============================================
function onClick(key) {
    if(key == "scroll") {onScroll();}
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">style.css</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="css">/*===============================================*/
body {
    margin: 500px 50px 500px 50px;
}
/*===============================================*/
.msg {
    border: 1px solid black;
    margin: auto;
    margin: 100px 0px;
    max-width: 400px;
    line-height: 300px;
    text-align: center;
}
/*===============================================*/</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Web/JavaScript/img/i_viewport_lazyload.gif" alt="/Tutoriels/Web/JavaScript/img/i_viewport_lazyload.gif"></div><br><h2 class="Title7 GTitle2" id="Viewport-Creer-le-chargement-paresseux-d-un-element-AceJS"><a class="Link9" href="#Viewport">Créer le chargement paresseux d'un élément AceJS</a></h2><br><b>Ace </b>(de Ajax.org Cloud9 Editor ) est un éditeur de code autonome écrit en JavaScript . L'objectif est de créer un éditeur de code Web qui correspond et étend les fonctionnalités, la convivialité et les performances des éditeurs natifs existants tels que TextMate , Vim ou Eclipse . Il peut être facilement intégré dans n'importe quelle page Web et application JavaScript. Ace est développé en tant qu'éditeur principal pour Cloud9 IDE et en tant que successeur du projet Mozilla Skywriter.<br><br><h3 class="Title8 GTitle3">index.html</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="html">&lt;!DOCTYPE html&gt;
&lt;html lang='fr'&gt;
    &lt;head&gt;
        &lt;!-- ============================================ --&gt;
        &lt;title&gt;ReadyApp&lt;/title&gt;
        &lt;!-- ============================================ --&gt;
        &lt;script src='/libs/ace/src-min-noconflict/ace.js' async&gt;&lt;/script&gt;
        &lt;link rel="stylesheet" href="/style.css"&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/head&gt;
    &lt;body onscroll="onClick('scroll')"&gt;
        &lt;!-- ============================================ --&gt;
        &lt;div class="msg" data-state="off"&gt;
&lt;pre&gt;
//===============================================
#include &lt;iostream&gt;
//===============================================
int main(int argc, char** argv) {
    std::cout &lt;&lt; "Bonjour tout le monde (1)\n";
    return 0;
}
//===============================================
&lt;/pre&gt;
        &lt;/div&gt;
        &lt;!-- ============================================ --&gt;
        &lt;div class="msg" data-state="off"&gt;
&lt;pre&gt;
//===============================================
#include &lt;iostream&gt;
//===============================================
int main(int argc, char** argv) {
    std::cout &lt;&lt; "Bonjour tout le monde (2)\n";
    return 0;
}
//===============================================
&lt;/pre&gt;
        &lt;/div&gt;
        &lt;!-- ============================================ --&gt;
        &lt;div class="msg" data-state="off"&gt;
&lt;pre&gt;
//===============================================
#include &lt;iostream&gt;
//===============================================
int main(int argc, char** argv) {
    std::cout &lt;&lt; "Bonjour tout le monde (3)\n";
    return 0;
}
//===============================================
&lt;/pre&gt;
        &lt;/div&gt;
        &lt;!-- ============================================ --&gt;
        &lt;script src='/script.js' async&gt;&lt;/script&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/body&gt;
&lt;/html&gt;</pre></div></div><br><h3 class="Title8 GTitle3">script.js</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="javascript">//===============================================
function isInViewport(obj) {
    var lRect = obj.getBoundingClientRect();
    var lTop = lRect.top;
    var lBottom = lRect.bottom;
    var lViewport_H = Math.max(document.documentElement.clientHeight || 0, window.innerHeight || 0);
    var lFlag = true;
    if(lTop &lt; 0) {lFlag = false;}
    else if(lBottom &gt; lViewport_H) {lFlag = false;}
    return lFlag;
}
//===============================================
function onScroll() {
    var lMsg_Map = document.getElementsByClassName("msg");
    for(var i = 0; i &lt; lMsg_Map.length; i++) {
        var lMsg_Node = lMsg_Map[i];
        var lFlag = isInViewport(lMsg_Node);
        if(!lFlag) {continue;}
        var lState = lMsg_Node.getAttribute("data-state");
        if(lState == "on") {continue;}
        // start lazy loading
        var lEditor = ace.edit(lMsg_Node);
        lEditor.setTheme("ace/theme/monokai");
        lEditor.session.setMode("ace/mode/c_cpp");
        // end lazy loading
        lMsg_Node.setAttribute("data-state", "on");
    }
}
//===============================================
function onClick(key) {
    if(key == "scroll") {onScroll();}
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">style.css</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="css">/*===============================================*/
body {
    margin: 500px 10px 500px 10px;
}
/*===============================================*/
.msg {
    border: 1px solid black;
    margin: auto;
    margin: 100px 0px;
    min-height: 200px;
    padding: 20px;
}
/*===============================================*/</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Web/JavaScript/img/i_viewport_lazyload_ace.gif" alt="/Tutoriels/Web/JavaScript/img/i_viewport_lazyload_ace.gif"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Intersection-Observer"><a class="Link3" href="#">Intersection Observer</a></h1><div class="Body3"><br>L'API <b>Intersection Observer</b> permet d'observer de manière asynchrone l'évolution de l'intersection d'un élément cible avec un élément ancêtre ou avec la zone d'affichage d'un document de niveau supérieur. La donnée de l'intersection est requise pour de nombreuses raisons, telles que: Le chargement paresseux d'images ou d'autres types de contenus au fur et à mesure que la page défile ; L'implantation de « défilement infini », où de plus en plus de contenu est chargé tandis que l'utilisateur défile, afin qu'il n'ait pas à changer de page ; Le signalement de la visibilité pour les publicités afin de calculer les revenus publicitaires ; La décision d'exécuter ou non une tâche ou une animation selon que l'utilisateur va en voir le résultat ou non.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1622394403838"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1622394403838");</script></div><br><h2 class="Title7 GTitle2" id="Intersection-Observer-Detecter-la-visibilite-d-un-element"><a class="Link9" href="#Intersection-Observer">Détecter la visibilité d'un élément</a></h2><br><h3 class="Title8 GTitle3">index.html</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="html">&lt;!DOCTYPE html&gt;
&lt;html lang='fr'&gt;
    &lt;head&gt;
        &lt;!-- ============================================ --&gt;
        &lt;title&gt;ReadyApp&lt;/title&gt;
        &lt;!-- ============================================ --&gt;
        &lt;script src='/script.js' async&gt;&lt;/script&gt;
        &lt;link rel="stylesheet" href="/style.css"&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- ============================================ --&gt;
        &lt;div class="spot"&gt;&lt;/div&gt;
        &lt;div class="msg"&gt;Bonjour tout le monde&lt;/div&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/body&gt;
&lt;/html&gt;</pre></div></div><br><h3 class="Title8 GTitle3">script.js</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="javascript">//===============================================
var lMsg_Map = document.querySelectorAll(".msg");
//===============================================
var lObs_Options = {
    root: null,
    rootMargin: '0px',
    threshold: [0.0, 1.0] 
};
//===============================================
var lObs = new IntersectionObserver(objs =&gt; {
    objs.forEach(obj =&gt; {
        var lSpot_Node = document.getElementsByClassName("spot")[0];
        if (obj.intersectionRatio &gt; 0) {
            lSpot_Node.innerHTML = 'VISIBLE';
        } else {
            lSpot_Node.innerHTML = 'HIDDEN';
        }
    });
}, lObs_Options);
//===============================================
lMsg_Map.forEach(obj =&gt; {
    lObs.observe(obj);
});
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">style.css</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="css">/*===============================================*/
body {
    margin: 500px 10px 500px 150px;
}
/*===============================================*/
.spot {
    position: fixed;
    left: 10px;
    top: 40px;
    border: 1px solid black;
    min-width: 120px;
    min-height: 50px;
    text-align: left;
    padding: 5px;
}
/*===============================================*/
.msg {
    border: 1px solid black;
    margin: auto;
    max-width: 400px;
    line-height: 200px;
    text-align: center;
}
/*===============================================*/</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Web/JavaScript/img/i_intersectionobserver_detect.gif" alt="/Tutoriels/Web/JavaScript/img/i_intersectionobserver_detect.gif"></div><br><h2 class="Title7 GTitle2" id="Intersection-Observer-Creer-le-chargement-paresseux-d-un-element"><a class="Link9" href="#Intersection-Observer">Créer le chargement paresseux d'un élément</a></h2><br>Le <b>chargement paresseux</b> (également connu sous le nom de chargement asynchrone ) est un modèle de conception couramment utilisé dans la programmation informatique et principalement dans la conception et le développement Web pour différer l'initialisation d'un objet jusqu'au point où il est nécessaire. Il peut contribuer à l'efficacité du fonctionnement du programme s'il est utilisé correctement et de manière appropriée. Cela le rend idéal dans les cas d'utilisation où le contenu du réseau est accessible et où les temps d'initialisation doivent être réduits au minimum, comme dans le cas des pages Web . Par exemple, différer le chargement des images sur une page Web jusqu'à ce qu'elles soient nécessaires peut accélérer l'affichage initial de la page Web. Le contraire du chargement paresseux est le chargement impatient .<br><br><h3 class="Title8 GTitle3">index.html</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="html">&lt;!DOCTYPE html&gt;
&lt;html lang='fr'&gt;
    &lt;head&gt;
        &lt;!-- ============================================ --&gt;
        &lt;title&gt;ReadyApp&lt;/title&gt;
        &lt;!-- ============================================ --&gt;
        &lt;script src='/script.js' async&gt;&lt;/script&gt;
        &lt;link rel="stylesheet" href="/style.css"&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- ============================================ --&gt;
        &lt;div class="msg" data-state="off" data-count="1"&gt;Bonjour tout le monde (1)&lt;/div&gt;
        &lt;div class="msg" data-state="off" data-count="2"&gt;Bonjour tout le monde (2)&lt;/div&gt;
        &lt;div class="msg" data-state="off" data-count="3"&gt;Bonjour tout le monde (3)&lt;/div&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/body&gt;
&lt;/html&gt;</pre></div></div><br><h3 class="Title8 GTitle3">script.js</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="javascript">//===============================================
var lMsg_Map = document.querySelectorAll(".msg");
//===============================================
var lObs_Options = {
    root: null,
    rootMargin: '0px',
    threshold: 1.0
};
//===============================================
var lObs = new IntersectionObserver(objs =&gt; {
    objs.forEach(obj =&gt; {
        var lSpot_Node = document.getElementsByClassName("spot")[0];
        if (obj.intersectionRatio &gt; 0) {
            var lTarget = obj.target;
            if(lTarget.dataset.state == "on") {return;}
            var lCount = parseInt(lTarget.dataset.count);
            lCount *= 10;
            lTarget.dataset.count = lCount;
            var lHtml = "Bonjour tout le monde ("+lCount+")";
            lTarget.innerHTML = lHtml;
            lTarget.dataset.state = "on";
        } 
    });
}, lObs_Options);
//===============================================
lMsg_Map.forEach(obj =&gt; {
    lObs.observe(obj);
});
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">style.css</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="css">/*===============================================*/
body {
    margin: 500px 10px 500px 10px;
}
/*===============================================*/
.spot {
    position: fixed;
    left: 10px;
    top: 40px;
    border: 1px solid black;
    min-width: 120px;
    min-height: 50px;
    text-align: left;
    padding: 5px;
}
/*===============================================*/
.msg {
    border: 1px solid black;
    margin: auto;
    margin: 50px 0px;
    line-height: 200px;
    text-align: center;
}
/*===============================================*/</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Web/JavaScript/img/i_intersectionobserver_lazyload.gif" alt="/Tutoriels/Web/JavaScript/img/i_intersectionobserver_lazyload.gif"></div><br><h2 class="Title7 GTitle2" id="Intersection-Observer-Creer-le-chargement-paresseux-d-un-element-AceJS"><a class="Link9" href="#Intersection-Observer">Créer le chargement paresseux d'un élément AceJS</a></h2><br><b>Ace </b>(de Ajax.org Cloud9 Editor ) est un éditeur de code autonome écrit en JavaScript . L'objectif est de créer un éditeur de code Web qui correspond et étend les fonctionnalités, la convivialité et les performances des éditeurs natifs existants tels que TextMate , Vim ou Eclipse . Il peut être facilement intégré dans n'importe quelle page Web et application JavaScript. Ace est développé en tant qu'éditeur principal pour Cloud9 IDE et en tant que successeur du projet Mozilla Skywriter.<br><br><h3 class="Title8 GTitle3">index.html</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="html">&lt;!DOCTYPE html&gt;
&lt;html lang='fr'&gt;
    &lt;head&gt;
        &lt;!-- ============================================ --&gt;
        &lt;title&gt;ReadyApp&lt;/title&gt;
        &lt;!-- ============================================ --&gt;
        &lt;script src='/libs/ace/src-min-noconflict/ace.js' async&gt;&lt;/script&gt;
        &lt;link rel="stylesheet" href="/style.css"&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- ============================================ --&gt;
        &lt;div class="msg" data-state="off"&gt;
&lt;pre&gt;
//===============================================
#include &lt;iostream&gt;
//===============================================
int main(int argc, char** argv) {
    std::cout &lt;&lt; "Bonjour tout le monde (1)\n";
    return 0;
}
//===============================================
&lt;/pre&gt;
        &lt;/div&gt;
        &lt;!-- ============================================ --&gt;
        &lt;div class="msg" data-state="off"&gt;
&lt;pre&gt;
//===============================================
#include &lt;iostream&gt;
//===============================================
int main(int argc, char** argv) {
    std::cout &lt;&lt; "Bonjour tout le monde (2)\n";
    return 0;
}
//===============================================
&lt;/pre&gt;
        &lt;/div&gt;
        &lt;!-- ============================================ --&gt;
        &lt;div class="msg" data-state="off"&gt;
&lt;pre&gt;
//===============================================
#include &lt;iostream&gt;
//===============================================
int main(int argc, char** argv) {
    std::cout &lt;&lt; "Bonjour tout le monde (3)\n";
    return 0;
}
//===============================================
&lt;/pre&gt;
        &lt;/div&gt;
        &lt;!-- ============================================ --&gt;
        &lt;script src='/script.js' async&gt;&lt;/script&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/body&gt;
&lt;/html&gt;</pre></div></div><br><h3 class="Title8 GTitle3">script.js</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="javascript">//===============================================
var lMsg_Map = document.querySelectorAll(".msg");
//===============================================
var lObs_Options = {
    root: null,
    rootMargin: '0px',
    threshold: 1.0
};
//===============================================
var lObs = new IntersectionObserver(objs =&gt; {
    objs.forEach(obj =&gt; {
        var lSpot_Node = document.getElementsByClassName("spot")[0];
        if (obj.intersectionRatio &gt; 0) {
            var lTarget = obj.target;
            if(lTarget.dataset.state == "on") {return;}
            // start lazy loading
            var lEditor = ace.edit(lTarget);
            lEditor.setTheme("ace/theme/monokai");
            lEditor.session.setMode("ace/mode/c_cpp");
            // end lazy loading
            lTarget.dataset.state = "on";
        } 
    });
}, lObs_Options);
//===============================================
lMsg_Map.forEach(obj =&gt; {
    lObs.observe(obj);
});
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">style.css</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-mode="css">/*===============================================*/
body {
    margin: 500px 10px 500px 10px;
}
/*===============================================*/
.spot {
    position: fixed;
    left: 10px;
    top: 40px;
    border: 1px solid black;
    min-width: 120px;
    min-height: 50px;
    text-align: left;
    padding: 5px;
}
/*===============================================*/
.msg {
    border: 1px solid black;
    margin: auto;
    margin: 50px 0px;
    min-height: 200px;
}
/*===============================================*/</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Web/JavaScript/img/i_intersectionobserver_lazyload_ace.gif" alt="/Tutoriels/Web/JavaScript/img/i_intersectionobserver_lazyload_ace.gif"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Chunked-transfer-encoding"><a class="Link3" href="#">Chunked transfer encoding</a></h1><div class="Body3"><br><b>Chunked transfer encoding</b> (ou Encodage de transfert en bloc) est un mécanisme de transfert de données de la version 1.1 du protocole Hypertext Transfer Protocol (HTTP), qui permet à un serveur ou à un client de commencer à transmettre des données par blocs sans avoir à connaître à l'avance la taille totale des données qui seront transmises. Dans le protocole HTTP, l'en-tête "Content-Length: [nombre correspondant au poids en octets du corps de message transmis]" peut remplacer la directive "Chunked transfer encoding". La taille en octets de chaque bloc est envoyée, sous forme de texte en hexadecimal, juste avant le bloc lui-même afin que le serveur puisse dire au client quand il a fini de recevoir les données de ce bloc. Le transfert total d'un fichier encodé par blocs se termine par un bloc final au contenu nul.<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Chunked-transfer-encoding-Creer-un-encodage-de-transfert-par-bloc-avec-MyChunkUploader"><a class="Link9" href="#Chunked-transfer-encoding">Créer un encodage de transfert par bloc avec MyChunkUploader</a></h2><br><b>MyChunkUploader </b>permet d'implémenter une fonctionnalité de téléchargement de fichiers par bloc à l'aide d'une classe JavaScript côté client/navigateur et d'une classe PHP côté serveur. Ce concept est particulièrement utile lorsqu'on souhaite surmonter les paramètres de rectriction <span class="GCode3"><code style="color:#cccccc;">upload_max_filesize</code></span> et <span class="GCode3"><code style="color:#cccccc;">post_max_size </code></span>définis dans le fichier de configuration <span class="GCode3"><code style="color:#cccccc;">php.ini</code></span><br><br><h3 class="Title8 GTitle3">Télécharger MyChunkUploader</h3><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://github.com/eugenmihailescu/my-chunk-uploader">https://github.com/eugenmihailescu/my-chunk-uploader</a><br><br><h3 class="Title8 GTitle3">Comprendre la mise en oeuvre avec MyChunkUploader</h3><br>Un fichier principal <span class="GCode3"><code style="color:#cccccc;">index.html</code></span> initialise un objet JavaScript <span class="GCode3"><code style="color:#cccccc;">MyChunkUploader </code></span>(voir <span class="GCode3"><code style="color:#cccccc;">chunk-uploader.js</code></span>) qu'on utilise pour commencer à envoyer le fichier au serveur distant. Pour ce faire, on appelle la méthode <span class="GCode3"><code style="color:#cccccc;">upload_chunked('/upload.php', FILE)</code></span>. Cet appel divise le fichier en plusieurs morceaux et les envoie via une série de requêtes Ajax POST au script PHP <span class="GCode3"><code style="color:#cccccc;">upload.php</code></span>. Le fichier <span class="GCode3"><code style="color:#cccccc;">upload.php</code></span> est un simple dispatcher ; il reçoit les requêtes POST et les transmet à une instance PHP <span class="GCode3"><code style="color:#cccccc;">MyChunkUploader </code></span>(voir <span class="GCode3"><code style="color:#cccccc;">MyChunkUploader.php</code></span>). L'instance PHP <span class="GCode3"><code style="color:#cccccc;">MyChunkUploader </code></span>enregistre chaque morceau dans un fichier temporaire ; lorsque tous les morceaux sont reçus, les fichiers temporaires/en morceaux sont concaténés, ce qui donne le fichier téléchargé final qui sera stocké dans un dossier prédéfini sur le serveur Web.<br><br><h3 class="Title8 GTitle3">index.html</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="html">&lt;!DOCTYPE html&gt;
&lt;html lang="fr"&gt;
    &lt;head&gt;
        &lt;title&gt;ReadyApp&lt;/title&gt;
    &lt;/head&gt;
    &lt;body onload="onEvent(this, 'on_init')"&gt;
        &lt;!-- ============================================ --&gt;
        &lt;div&gt;&lt;input type="file" onchange="onEvent(this, 'image_load')"/&gt;&lt;/div&gt;
        &lt;!-- ============================================ --&gt;
        &lt;div id="msg"&gt;&lt;/div&gt;
        &lt;!-- ============================================ --&gt;
        &lt;script src="/chunk-uploader.js"&gt;&lt;/script&gt;
        &lt;script src="/manager.js"&gt;&lt;/script&gt;
        &lt;script src="/script.js"&gt;&lt;/script&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/body&gt;
&lt;/html&gt;</pre></div></div><br><h3 class="Title8 GTitle3">script.js</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="javascript">//===============================================
function onEvent(obj, action) {
    message(action + "...&lt;br&gt;");
    //===============================================
    if(action == "on_init") {
        window.chunk_uploader = new MyChunkUploader();
    }
    //===============================================
    else if(action == "image_load") {
        var lFile = obj.files[0];
        message("&lt;div&gt;file_name : {0}&lt;/div&gt;", lFile.name);
        message("&lt;div&gt;file_size : {0} MB&lt;/div&gt;", (lFile.size/(1024*1024)).toFixed(2));

        chunk_uploader.on_ready = function(response) {
            message("&lt;div&gt;on_ready...&lt;/div&gt;");
        };

        chunk_uploader.on_done = function() {
            message("&lt;div&gt;on_done...&lt;/div&gt;");
        };
        
        chunk_uploader.on_error = function(object, err_type) {
            message("&lt;div&gt;on_error...&lt;/div&gt;");
        };

        chunk_uploader.on_abort = function(object) {
            message("&lt;div&gt;on_abort...&lt;/div&gt;");
        };

        chunk_uploader.on_upload_progress = function(progress) {
            message("&lt;div&gt;on_upload_progress...({0} %)&lt;/div&gt;", progress.percentage);
        };

        chunk_uploader.options.max_chunk_size = 1048576; 
        chunk_uploader.options.raw_post = false;
        chunk_uploader.options.max_parallel_chunks = 10;
        chunk_uploader.options.send_interval = 20;

        chunk_uploader.upload_chunked('/upload.php',lFile);
    }
    //===============================================
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Web/JavaScript/img/i_chunk_uploader_one_file.gif" alt="/Tutoriels/Web/JavaScript/img/i_chunk_uploader_one_file.gif"> <br></div><br><h2 class="Title7 GTitle2" id="Chunked-transfer-encoding-Uploader-plusieurs-fichiers-avec-MyChunkUploader"><a class="Link9" href="#Chunked-transfer-encoding">Uploader plusieurs fichiers avec MyChunkUploader</a></h2><br><h3 class="Title8 GTitle3">index.html</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="html">&lt;!DOCTYPE html&gt;
&lt;html lang="fr"&gt;
    &lt;head&gt;
        &lt;title&gt;ReadyApp&lt;/title&gt;
    &lt;/head&gt;
    &lt;body onload="onEvent(this, 'on_init')"&gt;
        &lt;!-- ============================================ --&gt;
        &lt;div&gt;&lt;input type="file" onchange="onEvent(this, 'image_load')" multiple/&gt;&lt;/div&gt;
        &lt;!-- ============================================ --&gt;
        &lt;div id="msg"&gt;&lt;/div&gt;
        &lt;!-- ============================================ --&gt;
        &lt;script src="/chunk-uploader.js"&gt;&lt;/script&gt;
        &lt;script src="/manager.js"&gt;&lt;/script&gt;
        &lt;script src="/script.js"&gt;&lt;/script&gt;
        &lt;!-- ============================================ --&gt;
    &lt;/body&gt;
&lt;/html&gt;</pre></div></div><br><h3 class="Title8 GTitle3">script.js</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="javascript">//===============================================
function onEvent(obj, action) {
    message(action + "...&lt;br&gt;");
    //===============================================
    if(action == "on_init") {
    }
    //===============================================
    else if(action == "image_load") {
        for(var i = 0; i &lt; obj.files.length; i++) {
            (function() {
                var lFile = obj.files[i];
                var chunk_uploader = new MyChunkUploader();
                
                chunk_uploader.on_ready = function(response) {
                };

                chunk_uploader.on_done = function() {
                    message("&lt;div&gt;on_done...&lt;/div&gt;");
                    message("&lt;div&gt;file_name : {0}&lt;/div&gt;", lFile.name);
                    message("&lt;div&gt;file_size : {0} KB&lt;/div&gt;", (lFile.size/(1024)).toFixed(2));
                };
                
                chunk_uploader.on_error = function(object, err_type) {
                    message("&lt;div&gt;on_error...&lt;/div&gt;");
                };

                chunk_uploader.on_abort = function(object) {
                    message("&lt;div&gt;on_abort...&lt;/div&gt;");
                };

                chunk_uploader.on_upload_progress = function(progress) {
                };

                chunk_uploader.upload_chunked('/upload.php',lFile);
            })();
        }
    }
    //===============================================
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Web/JavaScript/img/i_chunk_uploader_multiple_file.gif" alt="/Tutoriels/Web/JavaScript/img/i_chunk_uploader_multiple_file.gif"></div><br></div></div></div></div><br>