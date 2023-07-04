<div class="GAccess1 Access1">
<a class="GAccess2 Access2" href="/home">Accueil</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels">Tutoriels</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels#php">PHP</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels/php/cours">Cours</a></div><div class="GParallax1 Parallax1">
<div class="Parallax2" style="background-image: url(&quot;/data/img/defaults/binary.png&quot;);">
<div class="Parallax3">
<a href="#" class="Parallax4">Apprendre à programmer en PHP</a></div>
</div>
<div class="Parallax5" style="background-color: rgb(128, 51, 0);"><br>Le but de ce tutoriel est de vous apprendre à programmer en <b>PHP</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="GSummary1"><div class="GSummary11 Summary1">
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
<a class="Summary3" href="#conditions">Conditions</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#boucle-for">Boucle For</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#boucle-while">Boucle While</a>
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
<div class="Section6"><br><b>PHP</b> est un langage de script à usage général orienté vers le développement web. Le code PHP est généralement traité sur un serveur web par un interpréteur PHP implémenté sous la forme d'un module, d'un démon ou d'un exécutable Common Gateway Interface (CGI). Sur un serveur Web, le résultat du code PHP interprété et exécuté - qui peut être n'importe quel type de données, comme du HTML généré ou des données d'image binaires - formerait tout ou partie d'une réponse HTTP. Divers systèmes de modèles web, systèmes de gestion de contenu web et cadres web existent qui peuvent être employés pour orchestrer ou faciliter la génération de cette réponse. De plus, PHP peut être utilisé pour de nombreuses tâches de programmation en dehors du contexte web, telles que les applications graphiques autonomes et le contrôle de drones robotiques. Le code PHP peut également être exécuté directement depuis la ligne de commande.

L'interpréteur PHP standard, propulsé par Zend Engine, est un logiciel libre publié sous la licence PHP. PHP a été largement porté et peut être déployé sur la plupart des serveurs web sur une variété de systèmes d'exploitation et de plateformes.<br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,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jniZHQPbEliwUPePm30f4eDZMbAtgQULtf79z2pz+7+rx/v8VdcPY/6imxYbGOvh85+WtmNgPo7qr88KAQAI8QQLACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCECSwAgDCBBQAQJrAAAMIEFgBAmMACAAgTWAAAYQILACBMYAEAhAksAIAwgQUAECawAADCBBYAQJjAAgAIE1gAAGECCwAgTGABAIQJLACAMIEFABAmsAAAwgQWAECYwAIACBNYAABhAgsAIExgAQCE/Q8IqJmhhM0b+gAAAABJRU5ErkJggg=="></div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="programme-principal">Programme principal</a>
</h1>
<div class="Section6"><br>Le programme principal d'un serveur web PHP est enregistré dans un fichier (index.php) situé à la racine du serveur.<br><br>Exemple de programme principal (index.php):<br><br><pre class="GCode1 Code1 AceCode" data-mode="php" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">&lt;?php
//===============================================
$lProcess = new GProcess();
$lProcess-&gt;toHeader();
$lProcess-&gt;run("window", "calculator");
$lProcess-&gt;toFooter();
$lProcess-&gt;getLogs()-&gt;showLogs();
//===============================================
?&gt;</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="fonctions">Fonctions</a>
</h1>
<div class="Section6"><br>L'opérateur (function) permet de créer une fonction.<br><br><pre class="GCode1 Code1 AceCode" data-mode="php" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">&lt;?php
//===============================================
function utf8_to_b64($_data) {
    return base64_encode(utf8_decode($_data));
}
//===============================================
?&gt;</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="conditions">Conditions</a>
</h1>
<div class="Section6"><br>L'opérateur (if) permet de réaliser une condition (Si).<br>L'opérateur (else if) permet de réaliser une condition (Sinon Si).<br>L'opérateur (else) permet de réaliser une condition (Sinon).<br><br><pre class="GCode1 Code1 AceCode" data-mode="php" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">&lt;?php
//===============================================
public function run($_module, $_method) {
    if($_module == "") {
        $this-&gt;m_logs-&gt;addError("Le module est obligatoire.");
    }
    else if($_module == "test") {
        $this-&gt;runTest($_module, $_method);
    }
    else if($_module == "test_js") {
        $this-&gt;runTestJs($_module, $_method);
    }
    else if($_module == "window") {
        $this-&gt;runWindow($_module, $_method);
    }
    else {
        $this-&gt;m_logs-&gt;addError("Le module est inconnu.");
    }
}
//===============================================
?&gt;</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="boucle-for">Boucle For</a>
</h1>
<div class="Section6"><br>L'opérateur (for) permet de réaliser une boucle (Pour Tout).&nbsp;&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="php" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">&lt;?php
//===============================================
public function addLogs($_obj) {
    for($i = 0; $i &lt; $_obj-&gt;size(); $i++) {
        $lObj = $_obj-&gt;m_map[$i];
        $lNew = $this-&gt;clone();
        $lNew-&gt;setObj($lObj);
        $this-&gt;m_map[] = $lNew;
    }
}
//===============================================
?&gt;
</pre><br>Ce qu'il faut savoir:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">De manière générale, l'opérateur (break) permet de casser une boucle.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Alors que l'opérateur (continue) permet de continuer la boucle.</div>
</div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="boucle-while">Boucle While</a>
</h1>
<div class="Section6"><br>L'opérateur (while) permet de réaliser une boucle (Tant Que).&nbsp; &nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="php" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">&lt;?php
//===============================================
public function readData() {
    $lLength = 1024;
    $lData = "";
    while(1) {
        $lBuffer = fread ($this-&gt;m_socket, $lLength);
        if($lBuffer == "") break;
        $lData .= $lBuffer;
        $lStatus = socket_get_status($this-&gt;m_socket);
        $lBytes = $lStatus["unread_bytes"];
        if($lBytes &lt;= 0) break;
    }
    return $lData;
}
//===============================================
?&gt;</pre><br>Ce qu'il faut savoir:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">De manière générale, l'opérateur (break) permet de casser une boucle.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">Alors que l'opérateur (continue) permet de continuer la boucle.</div>
</div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="xml">XML</a>
</h1>
<div class="Section6"><br>La classe (DOMDocument) permet de manipuler des documents XML.<br><br>La classe (DOMDocument) fournit la méthode (createElement) qui permet de créer un noeud XML.<br>La classe (DOMDocument) fournit la propriété (preserveWhiteSpace) qui permet de préserver les espaces dans un document XML.<br>La classe (DOMDocument) fournit la propriété (formatOutput) qui permet de formater un document XML.&nbsp;<br>La classe (DOMDocument) fournit la méthode (appendChild) qui permet d'ajouter un noeud à un document XML.<br><br>Création d'un document XML.<br><br><pre class="GCode1 Code1 AceCode" data-mode="php" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">&lt;?php
//===============================================
public function createDoc() {
    $this-&gt;m_doc = new \DOMDocument("1.0", "UTF-8");
    if(!$this-&gt;m_doc) return false;
    $this-&gt;m_doc-&gt;preserveWhiteSpace = false;
    $this-&gt;m_doc-&gt;formatOutput = true;
    $this-&gt;m_node = $this-&gt;m_doc-&gt;createElement("root");
    if(!$this-&gt;m_node) return false;
    $this-&gt;m_doc-&gt;appendChild($this-&gt;m_node);
    return true;
}
//===============================================
?&gt;</pre><br>La classe (DOMDocument) fournit la méthode (loadXml) qui permet de charger des données XML.<br>La classe (DOMDocument) fournit la propriété (documentElement) qui permet de récupérer le noeud racine d'un document XML.<br><br>Chargement de données XML.<br><br><pre class="GCode1 Code1 AceCode" data-mode="php" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">&lt;?php
//===============================================
public function loadXml($_data) {
    $this-&gt;m_doc = new \DOMDocument("1.0", "UTF-8");
    if(!$this-&gt;m_doc) return false;
    $lXml = "&lt;?xml";
    if(!str_starts_with($_data, "&lt;?xml")) {
        $_data = sprintf("&lt;?xml version='1.0' encoding='UTF-8'?&gt;\n%s", $_data);
    }
    $this-&gt;m_doc-&gt;preserveWhiteSpace = false;
    $this-&gt;m_doc-&gt;formatOutput = true;
    if(!$this-&gt;m_doc-&gt;loadXml($_data)) return false;
    $this-&gt;m_node = $this-&gt;m_doc-&gt;documentElement;
    return true;
}
//===============================================
?&gt;</pre><br>La classe (DOMElement) fournit la propriété (firstElementChild) qui permet de récupérer le premier noeud enfant d'un noeud XML.<br>La classe (DOMDocument) fournit la méthode (importNode) qui permet d'importer le noeud d'un document XML vers un noeud d'un autre document XML.<br><br>Chargement d'un noeud à partir de données XML.<br><br><pre class="GCode1 Code1 AceCode" data-mode="php" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">&lt;?php
//===============================================
public function loadNode($_root, $_data) {
    $lDom = new \DOMDocument("1.0", "UTF-8");
    $lDom-&gt;preserveWhiteSpace = false;
    $lDom-&gt;formatOutput = true;
    if(!$lDom-&gt;loadXML($_data)) return false;
    $lChild = $lDom-&gt;documentElement-&gt;firstElementChild;
    while($lChild) {
        $lNode = $_root-&gt;m_doc-&gt;importNode($lChild, true);
        $this-&gt;m_node-&gt;appendChild($lNode);
        $lChild = $lChild-&gt;nextElementSibling;
    }
    return true;
}
//===============================================
?&gt;</pre><br>Ajout d'un nouveau noeud.<br><br><pre class="GCode1 Code1 AceCode" data-mode="php" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">&lt;?php
//===============================================
public function addObj($_root, $_name) {
    $lNode = $_root-&gt;m_doc-&gt;createElement($_name);
    $this-&gt;m_node-&gt;appendChild($lNode);
    return $lNode;
}
//===============================================
?&gt;</pre><br>Ajout d'un nouveau noeud avec un contenu.<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="php" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">&lt;?php
//===============================================
public function addValue($_root, $_name, $_value) {
    $lNode = $_root-&gt;m_doc-&gt;createElement($_name);
    $lNode-&gt;nodeValue = $_value;
    $this-&gt;m_node-&gt;appendChild($lNode);
    return $this-&gt;m_node;
}
//===============================================
?&gt;</pre><br></div>
</div>
</div>
</div><br>