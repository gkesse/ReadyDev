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
<a class="Summary3" href="#chargement-automatique">Chargement automatique</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#communication-reseau--socket-">Communication réseau (socket)</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#communication-reseau--curl-">Communication réseau (cURL)</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#format-de-donnees-xml--domdocument-">Format de données XML (DOMDocument)</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#classe">Classe</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#wampserver">WampServer</a>
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
<a class="Section5" href="#" id="chargement-automatique">Chargement automatique</a>
</h1>
<div class="Section6"><br>La fonction (spl_autoload_register) permet d'enregistrer plusieurs fonctions de chargement automatique.<br><br>Fonction de chargement automatique.<br><br><pre class="GCode1 Code1 AceCode" data-mode="php" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">&lt;?php
//===============================================
function GAutoloadRegister($_className) {
    $lFilename = $_SERVER["DOCUMENT_ROOT"].DIRECTORY_SEPARATOR.$_className.".php";
    $lFilename = str_replace("\\", "/", $lFilename);

    if (is_readable($lFilename)) {
        require $lFilename;
    }    
}       
//===============================================
?&gt;</pre><br>Enregistrement de la fonction de chargement automatique.<br><br><pre class="GCode1 Code1 AceCode" data-mode="php" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">&lt;?php
//===============================================
if (version_compare(PHP_VERSION, "5.1.2", "&gt;=")) {
    if (version_compare(PHP_VERSION, "5.3.0", "&gt;=")) {
        spl_autoload_register("php\class\GAutoloadRegister", true, true);
    } 
    else {
        spl_autoload_register("GAutoloadRegister");
    }
} 
else {
    function spl_autoload_register($_className) {
        $lFilename = $_SERVER["DOCUMENT_ROOT"].DIRECTORY_SEPARATOR.$_className.".php";
        $lFilename = str_replace("\\", "/", $lFilename);
        require $lFilename;
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
<a class="Section5" href="#" id="communication-reseau--socket-">Communication réseau (socket)</a>
</h1>
<div class="Section6"><br>La fonction (stream_socket_client) permet de créer un point de connexion TCP/IP.<br><br>Création d'un client TCP/IP.<br><br><pre class="GCode1 Code1 AceCode" data-mode="php" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">&lt;?php
//===============================================
public function callServer($_data) {
    $lAddress = sprintf("tcp://%s:%d", $lHostname, $lPort);
    $this-&gt;m_socket = @stream_socket_client($lAddress, $lErrCode, $lErrMsg, 30);
    $this-&gt;sendData($_data);
    $lData = $this-&gt;readData();
    fclose($this-&gt;m_socket);
    return $lData;
}
//===============================================
?&gt;</pre><br>La fonction (fwrite) permet d'envoyer des données sur le réseau.<br><br>Emission de données sur le réseau.<br><br><pre class="GCode1 Code1 AceCode" data-mode="php" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">&lt;?php
//===============================================
public function sendData($_data) {
    fwrite($this-&gt;m_socket, $_data, strlen($_data));
}
//===============================================
?&gt;</pre><br>La fonction (fread) permet de recevoir des données sur le réseau.<br><br>Réception de données sur le réseau.<br><br><pre class="GCode1 Code1 AceCode" data-mode="php" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">&lt;?php
//===============================================
public function readData() {
    $lData = "";
    while(1) {
        $lBuffer = fread($this-&gt;m_socket, self::BUFFER_SIZE);
        $lData .= $lBuffer;
        if(strlen($lData) &gt;= self::BUFFER_MAX) break;
        $lStatus = socket_get_status($this-&gt;m_socket);
        $lBytes = $lStatus["unread_bytes"];
        if($lBytes &lt;= 0) break;
    }
    return $lData;
}
//===============================================
?&gt;</pre><br></div>
</div>
</div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="communication-reseau--curl-">Communication réseau (cURL)</a>
</h1>
<div class="Section6"><br>La bibliothèque (cURL) permet de réaliser des appels HTTP(S).<br><br>La fonction (curl_init) permet d'initialiser le module cURL.<br>La fonction (curl_setopt) permet d'initialiser les paramètres cURL.<br>&nbsp;<br>L'option (CURLOPT_URL) permet d'initialiser l'URL du serveur à joindre.<br>L'option (CURLOPT_TIMEOUT) permet d'initialiser le timeout associé à un appel.<br>L'option (CURLOPT_HTTPHEADER) permet d'initialiser l'entête de la requête HTTP.<br>L'option (CURLOPT_USERPWD) permet d'initialiser le nom d'utilisateur et le mot de passe de connexion.<br>L'option (CURLOPT_HTTPAUTH) permet d'initialiser la méthode d'authentification exigée par le serveur.<br>L'option (CURLOPT_USERAGENT) permet d'initialiser le nom de l'agent utilisateur associé au serveur.<br>L'option (CURLOPT_POST) permet d'initialiser l'appel à a méthode POST.<br>L'option (CURLOPT_RETURNTRANSFER) permet d'initialiser le suivi des liens de redirection.<br>&nbsp;L'option (CURLOPT_POSTFIELDS) permet d'initialiser le corps de la requête.<br><br>Réalisation d'un appel POST HTTP.<br><br><pre class="GCode1 Code1 AceCode" data-mode="php" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">&lt;?php
//===============================================
public function postHttp($_data) {
    $lCurl = curl_init();
    curl_setopt($lCurl, CURLOPT_URL, $lUrl);
    curl_setopt($lCurl, CURLOPT_TIMEOUT, $lTimeout);
    
    $lHeaders = array();
    $lHeaders[] = sprintf("Content-Type: application/xml");
    curl_setopt($lCurl, CURLOPT_HTTPHEADER, $lHeaders);
    
    $lUserPass = sprintf("%s:%s", $lUsername, $lPassword);
    curl_setopt($lCurl, CURLOPT_USERPWD, $lUserPass);
    curl_setopt($lCurl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    
    curl_setopt($lCurl, CURLOPT_USERAGENT, $lUserAgent);
    curl_setopt($lCurl, CURLOPT_POST, true);
    curl_setopt($lCurl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($lCurl, CURLOPT_POSTFIELDS, $_data);
            
    $lData = curl_exec($lCurl);
    $lError = curl_error($lCurl);
    $this-&gt;m_codeHttp = curl_getinfo($lCurl, CURLINFO_HTTP_CODE);
    curl_close($lCurl);
    return $lData;
}
//===============================================
?&gt;</pre><br>Structure d'une requête POST.<br><br><pre class="GCode1 Code1 AceCode" data-mode="text" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">POST / HTTP/1.1\r\n
Host: 127.0.0.1:9999\r\n
Authorization: Basic XXXXXOYYYYYY=\r\n
User-Agent: XXXXXX/Y.Y\r\n
Accept: */*\r\n
Content-Type: application/xml\r\n
Content-Length: 22\r\n
\r\n
Bonjour tout le monde.</pre><br></div>
</div></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="format-de-donnees-xml--domdocument-">Format de données XML (DOMDocument)</a>
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
?&gt;</pre><br>La classe (DOMDocument) fournit la méthode (createCDATASection) qui permet de créer une section CData.<br><br>Ajout d'un nouveau noeud avec un contenu CData.<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="php" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">&lt;?php
//===============================================
public function addValue($_root, $_name, $_value) {
    $lNode = $_root-&gt;m_doc-&gt;createElement($_name);
    $lCData = $_root-&gt;m_doc-&gt;createCDATASection($_value);
    $lNode-&gt;appendChild($lCData);
    $this-&gt;m_node-&gt;appendChild($lNode);
    return $this-&gt;m_node;
}
//===============================================
?&gt;</pre><br>La classe (DOMElement) fournit la propriété (nodeValue) qui permet de récupérer le contenu d'un noeud XML.&nbsp;<br><br>Récupération du contenu d'un noeud.<br><br><pre class="GCode1 Code1 AceCode" data-mode="php" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">&lt;?php
//===============================================
public function getValue() {
    $lData = $this-&gt;m_node-&gt;nodeValue;
    return $lData;
}
//===============================================
?&gt;</pre><br>La classe (DOMElement) fournit la propriété (textContent) qui permet de récupérer le contenu d'un noeud CData.<br><br>Récupération du contenu d'un noeud CData.&nbsp;<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="php" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">&lt;?php
//===============================================
public function getValue() {
    $lData = $this-&gt;m_node-&gt;textContent;
    return $lData;
}
//===============================================
?&gt;</pre><br>La classe (DOMXpath) permet de manipuler des requêtes XPath.<br>La classe (DOMXpath) fournit la méthode (query) qui permet d'évaluer une requête XPath à partir d'un noeud XML.&nbsp;<br><br>Comptage du nombre de noeuds liés à une requête XPath.<br><br><pre class="GCode1 Code1 AceCode" data-mode="php" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">&lt;?php
//===============================================
public function countNode($_root, $_path) {
    $lXPath = new \DOMXpath($_root-&gt;m_doc);
    $lNodes = $lXPath-&gt;query($_path, $this-&gt;m_node);
    return $lNodes-&gt;length;
}
//===============================================
?&gt;</pre><br>La classe (DOMNodeList) fournit la méthode (item) qui permet récupérer un noeud XML en fonction de son index.<br><br>Récupération du noeud lié à une requête XPath.&nbsp;<br>&nbsp;<br><pre class="GCode1 Code1 AceCode" data-mode="php" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">&lt;?php
//===============================================
public function getNode($_root, $_path) {
    $lXPath = new \DOMXpath($_root-&gt;m_doc);
    $lNodes = $lXPath-&gt;query($_path, $$this-&gt;m_node);
    if(!$lNodes-&gt;length) return null;
    return $lNodes-&gt;item(0);
}
//===============================================
?&gt;</pre><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="classe">Classe</a>
</h1>
<div class="Section6"><br>L'opérateur (class) permet de créer une classe en PHP.<br><br>Création d'une classe.<br><br><pre class="GCode1 Code1 AceCode" data-mode="php" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">&lt;?php
//===============================================
class GObject {
    
}
//===============================================
?&gt;</pre><br>La fonction (__construct) permet de créer un constructeur de classe en PHP.<br><br>Création d'un constructeur de classe.<br><br><pre class="GCode1 Code1 AceCode" data-mode="php" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">&lt;?php
//===============================================
class GObject {
    //===============================================
    public function __construct() {
        $this-&gt;m_logs = new GLog();
        $this-&gt;m_dataLogs = new GLog();
        $this-&gt;m_template = new GTemplate();
        $this-&gt;m_resp = new GCode();
    }
    //===============================================
}
//===============================================
?&gt;</pre><br>Une classe peut posséder des attributs ou des propriétés.<br><br>Déclaration des attributs de classe.<br><br><pre class="GCode1 Code1 AceCode" data-mode="php" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">&lt;?php
//===============================================
class GObject {
    //===============================================
    protected $m_logs = null;
    protected $m_dataLogs = null;
    protected $m_template = null;
    protected $m_resp = null;
    //===============================================
    public function __construct() {

    }
    //===============================================
}
//===============================================
?&gt;</pre><br>Une classe peut posséder des méthodes.<br><br>L'opérateur (function) permet de créer une méthode de classe.<br><br>Création d'une méthode de classe.<br><br><pre class="GCode1 Code1 AceCode" data-mode="php" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">&lt;?php
//===============================================
class GObject {
    //===============================================
    public function toDescription() {
        $lData = "";
        $lData .= sprintf("Avec ReadyDev, apprenez en pratiquant grâce à des cours\n");
        $lData .= sprintf("et tutoriels adaptés aux sciences de l'Ingénieur.\n");
        $lData .= sprintf("Plateforme de Développement Continu.\n");
        $lData .= sprintf("Produit par Gérard KESSE.\n");
        return $lData;
    }
    //===============================================
}
//===============================================
?&gt;</pre><br>Ce qu'il faut savoir:<br><br><div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">L'opérateur (private) permet de définir une portée privée.<br>Les attributs associés à cette portée ne sont accessibles qu'au sein de la classe qui les déclare.</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">L'opérateur (protected) permet de définir une portée protégée.<br>Les attributs associés à cette portée ne sont accessibles qu'au sein de la classe qui les déclare (classe mère) et aussi au sein des classes filles (classe dérivées).</div>
</div>
<div class="GBullet1 Bullet1">
<i class="Bullet2 fa fa-check-square-o"></i>
<div class="Bullet3">L'opérateur (public) permet de définir une portée publique.<br>Les attributs associés à cette portée sont accessibles à tous les nivaux.</div>
</div><br></div>
</div>
</div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="wampserver">WampServer</a>
</h1>
<div class="Section6"><br>L'utilitaire (WampServer) permet de créer un serveur web PHP.<br><br>WampServer fournit l'utilitaire (httpd) qui permet d'identifier des erreurs de démarrage de WampServer.<br><br>Identification des erreurs de démarrage (en cas d'erreur).<br><br><pre class="GCode1 Code1 AceCode" data-mode="batchfile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">cd C:\wamp64\bin\apache\apache2.4.54.2\bin

httpd -t

(OS 2)Le fichier spÚcifiÚ est introuvable.  : AH02291:
Cannot access directory 'C:/dev/php/.../logs/'
for error log of vhost defined at C:/wamp64/.../httpd-vhosts.conf:34
AH00014: Configuration check failed</pre><br>Identification des erreurs de démarrage (en cas de succès).&nbsp;<br><br><pre class="GCode1 Code1 AceCode" data-mode="batchfile" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">cd C:\wamp64\bin\apache\apache2.4.54.2\bin

httpd -t

Syntax OK</pre><br></div>
</div>
</div>
</div><br>