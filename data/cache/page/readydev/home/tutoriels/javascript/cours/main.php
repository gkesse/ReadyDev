<div class="GAccess1 Access1">
<a class="GAccess2 Access2" href="/home">Accueil</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels">Tutoriels</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels#javascript">JavaScript</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels/javascript/cours">Cours</a>
</div><div class="GParallax1 Parallax1">
<div class="Parallax2" style="background-image: url(&quot;/data/img/defaults/binary.png&quot;);">
<div class="Parallax3"><a href="#" class="Parallax4">Apprendre à programmer en JavaScript</a></div>
</div>
<div class="Parallax5" style="background-color: rgb(128, 51, 0);"><br>Le but de ce tutoriel est de vous apprendre à programmer en <b>JavaScript</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="GSummary1"><div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#introduction">Introduction</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#programme-principal">Programme principal</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#fonctions">Fonctions</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#prototypes">Prototypes</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#debogage">Débogage</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#xml">XML</a>
</div>
</div><br></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="introduction">Introduction</a>
</h1>
<div class="Section6"><br><b>JavaScript</b>&nbsp;souvent abrégé en JS, est un langage de programmation qui est l'une des technologies de base du World Wide Web, aux côtés de HTML et CSS. La majorité des sites Web utilisent JavaScript côté client pour le comportement des pages Web, incorporant souvent des bibliothèques tierces. Tous les principaux navigateurs Web ont un moteur JavaScript dédié pour exécuter le code sur les appareils des utilisateurs.

JavaScript est un langage compilé de haut niveau, souvent juste à temps, conforme à la norme ECMAScript . Il a un typage dynamique, une orientation objet basée sur un prototype et des fonctions de première classe. Il est multiparadigme, prenant en charge les styles de programmation événementiels, fonctionnels et impératifs. Il dispose d'interfaces de programmation d'applications (API) pour travailler avec du texte, des dates, des expressions régulières, des structures de données standard et le modèle d'objet de document (DOM).<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,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Z3F1MY5x0kbCTbUqdO+7x9qA56jfnY6brGN51eLke9/8MsYXs34haz2Li/HN+XTcP7TqU4wvrmLZeNK7vL+ruHnX832FREe/jGacw+i6NNHhcnzRfOno13Ms/lpiKMpFt6WERdm+PqPFskXjpZBTnKO8gqQOhd/bRpci9MdztW3k1cU1/T1JXJaspo+Xevsswd27EaAoynpRVZsfq6rqxbTD71nivHe70cQwHo2jH4BxDqPryXPr3Vf7RlEX5bRebK0+ruqqWtTTsth5d+Kvx9j1dVxVVb3YdldVw2Nt9n2fXfsxtDnaFMKruvodyIq6nO56rurn3W2HuNOrwXPvnatnMJIClmE8k3H0AzDOYHTLV4pJDeOkhoBlGI2HGiwSdNv2Yj17F+qDAThHAha9lYsO2164+wqAMyZg0UMR5aKK9rurLOPK3VdwcnZvF7TH5DaqaXl2W//ALkdfpzROaBRFXRRlPZ12vMNM3ZVhnORI7UrvO8B4HuPoB2Ccyuj7DZt2a71hGE86nqz7vWGcz7BESGNF106isY7l7Couxpcxty4IwDPwv2MfAOdsHcvZp/h4M1dvBcCzImDR2Or7t1jH9dYi1/V6HVFV8e2/r/HlyzxWUhWcie9RRXQvcIdn6EX8WCsEACCJGiwAgGQCFgBAMgELACCZgAUAkEzAAgBIJmABACQTsAAAkglYAADJBCwAgGQCFgBAMgELACCZgAUAkEzAAgBIJmABACQTsAAAkglYAADJBCwAgGQCFgBAMgELACCZgAUAkEzAAgBIJmABACQTsAAAkglYAADJBCwAgGQCFgBAMgELACCZgAUAkEzAAgBIJmABACQTsAAAkglYAADJBCwAgGQCFgBAMgELACCZgAUAkEzAAgBIJmABACQTsAAAkglYAADJBCwAgGQCFgBAMgELACCZgAUAkEzAAgBIJmABACQTsAAAkglYAADJBCwAgGQCFgBAMgELACCZgAUAkEzAAgBIJmABACQTsAAAkglYAADJBCwAgGQCFgBAMgELACCZgAUAkEzAAgBIJmABACQTsAAAkglYAADJBCwAgGQCFgBAMgELACCZgAUAkEzAAgBIJmABACQTsAAAkglYAADJBCwAgGQCFgBAMgELACCZgAUAkEzAAgBIJmABACQTsAAAkglYAADJBCwAgGQCFgBAMgELACCZgAUAkEzAAgBIJmABACQTsAAAkglYAADJBCwAgGQCFgBAMgELACCZgAUAkEzAAgBIJmABACQTsAAAkglYAADJBCwAgGQCFgBAMgELACCZgAUAkEzAAgBIJmABACQTsAAAkglYAADJBCwAgGQCFgBAMgELACCZgAUAkEzAAgBIJmABACQTsAAAkglYAADJBCwAgGQCFgBAMgELACCZgAUAkEzAAgBIJmABACQTsAAAkglYAADJBCwAgGQCFgBAMgELACCZgAUAkEzAAgBIJmABACQTsAAAkglYAADJBCwAgGQCFgBAMgELACCZgAUAkEzAAgBIJmABACQTsAAAkglYAADJBCwAgGQCFgBAMgELACCZgAUAkEzAAgBIJmABACQTsAAAkglYAADJBCwAgGQCFgBAMgELACCZgAUAkEzAAgBIJmABACT7fzFYaWpsd+j/AAAAAElFTkSuQmCC"></div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="programme-principal">Programme principal</a>
</h1>
<div class="Section6"><br>La balise (script) permet d'intégrer un fichier JavaScript dans un projet web.<br><br><pre class="GCode1 Code1 AceCode" data-mode="html" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;JavaScript | ReadyDev&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;script src="/js/scripts.js"&gt;&lt;/script&gt;
    &lt;/body&gt;
&lt;/html&gt;</pre><br></div>
</div>
</div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="fonctions">Fonctions</a>
</h1>
<div class="Section6"><br>L'opérateur (function) permet de créer une fonction.<br><br>Une fonction peut ne pas retourner un résultat.<br><br><pre class="GCode1 Code1 AceCode" data-mode="javascript" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
function mainJs() {
    runAceJS();
}
//===============================================</pre><br>Une fonction peut retourner un résultat.<br><br><pre class="GCode1 Code1 AceCode" data-mode="javascript" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
function utf8_to_b64(_data) {
    return encodeURIComponent(btoa(_data));
}
//===============================================</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="prototypes">Prototypes</a>
</h1>
<div class="Section6"><br>L'opérateur (prototype) permet d'ajouter une méthode à un objet.
<br><br><pre class="GCode1 Code1 AceCode" data-mode="javascript" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
String.prototype.removeCharAt = function(i) {
    var tmp = this.split('');
    tmp.splice(i , 1);
    return tmp.join('');
}
//===============================================</pre><br></div>
</div>
</div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="debogage">Débogage</a>
</h1>
<div class="Section6"><br>Le navigateur (Chrome) permet de déboguer un programme JavaScript.<br><br>Ouverture du débogueur.<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Cliquer sur le menu.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Cliquer sur Plus d'outils.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Cliquer sur Outils de développement pour l'outil de débogage.</div>
</div><br>Ouverture d'un fichier source JavaScript.&nbsp;<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Cliquer sur Sources.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Cliquer sur une source (scripts.js) pour le déboguer.</div>
</div><br>Placement d'un point d'arrêt.<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Cliquer sur un numéro pour placer un point d'arrêt.</div>
</div><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Actualiser la page pour le déboguer.</div>
</div><br>Suppression d'un point d'arrêt.<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Cliquer sur le point d'arrêt pour le supprimer.</div>
</div><br></div>
</div>
</div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="xml">XML</a>
</h1>
<div class="Section6"><br>La classe (DOMParser) permet de manipuler des documents XML.<br><br>La classe (DOMParser)&nbsp; fournit la méthode (parseFromString) qui permet de charger des données XML.<br>La classe (Document)  fournit la propriété (documentElement) qui permet de récupérer le noeud racine d'un document XML.&nbsp;<br><br>Création d'un document XML.<br><br><pre class="GCode1 Code1 AceCode" data-mode="javascript" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
createDoc() {
    var lXml = "";
    lXml += sprintf("&lt;?xml version='1.0' encoding='UTF-8'?&gt;\n");
    lXml += sprintf("&lt;root&gt;&lt;/root&gt;\n");
    var lParser = new DOMParser();
    this.m_doc = lParser.parseFromString(lXml, "text/xml");
    if(!this.m_doc) return false;
    this.m_node = this.m_doc.documentElement;
    return true;
}
//===============================================</pre><br>La classe (Document) fournit la méthode (createElement) qui permet de créer un noeud XML.<br>La classe (Element) fournit la propriété (childNodes) qui pointe la liste des noeuds enfant.<br>&nbsp;<br>Chargement d'un noeud à partir de données XML.&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="javascript" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
loadNode(_root, _data) {
    var lDom = _root.m_doc.createElement("template");
    lDom.innerHTML = _data;
    var lNodes = lDom.childNodes;
    while(lNodes[0]) {
        this.m_node.appendChild(lNodes[0]);
    }
    return true;
}
//===============================================</pre><br>La classe (Element) fournit la méthode (appendChild) qui permet d'ajouter un nouveau à un noeud existant.<br><br>Ajout d'un nouveau noeud.<br><br><pre class="GCode1 Code1 AceCode" data-mode="javascript" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
addObj(_root, _name) {
    var lNode = _root.m_doc.createElement(_name);
    this.m_node.appendChild(lNode);
    return lNode;
}    
//===============================================</pre><br>La classe (Element) fournit la propriété (innerHTML) qui permet d'ajouter un contenu à un noeud.<br><br>Ajout d'un nouveau noeud avec un contenu.<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="javascript" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
addValue(_root, _name, _value) {
    lNode = _root.m_doc.createElement(_name);
    lNode.innerHTML = _value;
    this.m_node.appendChild(lNode);
    return this.m_node;
}    
//===============================================</pre><br>La classe (Document) fournit la méthode (createCDATASection) qui permet créer une section CData.<br><br>Ajout d'un contenu CData à un noeud.<br><br><pre class="GCode1 Code1 AceCode" data-mode="javascript" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
setValue(_root, _value) {
    var lCData = _root.m_doc.createCDATASection(_value);
    this.m_node.appendChild(lCData);
}
//===============================================</pre><br>La classe (Element) fournit la propriété (innerHTML) qui permet de récupérer le contenu d'un noeud.<br><br>Récupération du contenu d'un noeud XML.<br><br><pre class="GCode1 Code1 AceCode" data-mode="javascript" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
getValue() {
    lData = this.m_node.innerHTML;
    return lData;
}
//===============================================</pre><br>La classe (Element) fournit la propriété (firstElementChild) qui permet de récupérer le premier noeud enfant d'un noued existant.<br>La classe (Element) fournit la propriété (nodeValue) qui permet de récupérer le contenu d'un noeud XML.
<br><br>Récupération du contenu CData d'un noeud XML.<br><br><pre class="GCode1 Code1 AceCode" data-mode="javascript" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
getValue() {
    lData = this.m_node.firstElementChild.nodeValue;
    return lData;
}
//===============================================</pre><br>La classe (Document) fournit la méthode (evaluate) qui permet récupérer le noeud lié à une requête XPath.<br><br>Récupération du noeud lié à une requête XPath.<br><br><pre class="GCode1 Code1 AceCode" data-mode="javascript" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
getNode(_path) {
    var lNode = this.m_node;
    var lNodes = this.m_doc.evaluate(_path, lNode, null, XPathResult.ANY_TYPE, null);
    lNodeI = lNodes.iterateNext();
    return lNodeI;
}
//===============================================</pre><br>Comptage du nombre de noeuds liés à une requête XPath.<br><br><pre class="GCode1 Code1 AceCode" data-mode="javascript" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
countNode(_path) {
    var lNode = this.m_node;
    var lNodes = this.m_doc.evaluate(_path, lNode, null, XPathResult.ANY_TYPE, null);
    while(1) {
        var lNodeI = lNodes.iterateNext();
        if(!lNodeI) break;
        lCount++;
    }
    return lCount;
}
//===============================================</pre><br>La classe (Element) fournit la propriété (outerHTML) qui permet récupérer le contenu d'un noeud XML.<br><br>Conversion d'un document XML en chaîne de caractères.<br><br><pre class="GCode1 Code1 AceCode" data-mode="javascript" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
toString() {
    var lData = this.m_doc.documentElement.outerHTML;
    lData = sprintf("&lt;?xml version='1.0' encoding='UTF-8'?&gt;\n%s", lData);
    return lData.toXml();
}
//===============================================</pre><br>Conversion d'un noeud XML en chaîne de caractères.<br><br><pre class="GCode1 Code1 AceCode" data-mode="javascript" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">//===============================================
toNode() {
    var lData = this.m_node.outerHTML;
    return lData.toXml();
}
//===============================================</pre><br></div>
</div>
</div>
</div><br>