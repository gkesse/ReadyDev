<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la gestion d'une base de données MySQL en PHP</div></a></div></div><div class="Body2 Orange"><b>MySQL</b> est un système de gestion de base données relationnelle.<br>Le but de ce tutoriel est de vous apprendre la gestion d'une base de données <b>MySQL </b>en <b>PHP</b>.<br>Produit par <b>Gérard KESSE</b>.<br>&nbsp;<br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3">MySQL est un système de gestion de base données relationnelle.<br><br><div class="Img3 GImage"><img src="/data/img/defaults/banner_mysql.png" alt="/data/img/defaults/banner_mysql.png"></div><br>Dans ce tutoriel, nous utiliserons:<br>- MySQL, comme système de gestion de base de données.<br><br><h3 class="Title8 GTitle3">Documentation sur MySQL</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://dev.mysql.com/doc/refman/8.0/en/connecting-disconnecting.html">https://dev.mysql.com/doc/refman/8.0/en/connecting-disconnecting.html</a><br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programme de connexion"><a class="Link3" href="#">Programme de connexion</a></h1><div class="Body3">Le programme de connexion permet de se connecter au serveur MySQL.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1590580369310"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1590580369310");</script></div><br><h2 class="Title7 GTitle2" id="Programme de connexion-Programme de connexion"><a class="Link9" href="#Programme de connexion">Programme de connexion</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="php">&lt;?php
//===============================================
public function connect($server, $user, $pass) {
    GDebug::Instance()-&gt;write(__CLASS__, "::", __FUNCTION__, "()");
    $this-&gt;m_conn = mysqli_connect($server, $user, $pass);
    if(!$this-&gt;m_conn) {die("[GMySQL] erreur connexion : " . mysqli_connect_error());}
}
//===============================================
?&gt;</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programme de sélection de base de données"><a class="Link3" href="#">Programme de sélection de base de données</a></h1><div class="Body3">Le programme de sélection de base de données permet de sélectionner dynamiquement une base de données.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1590582021129"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1590582021129");</script></div><br><h2 class="Title7 GTitle2" id="Programme de sélection de base de données-Programme de sélection d'une base de données"><a class="Link9" href="#Programme de sélection de base de données">Programme de sélection d'une base de données</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="php">&lt;?php
//===============================================
public function selectDb($db) {
    GDebug::Instance()-&gt;write(__CLASS__, "::", __FUNCTION__, "()");
    mysqli_select_db($this-&gt;m_conn, $db);
}
//===============================================
?&gt;</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programme d'exécution de requête"><a class="Link3" href="#">Programme d'exécution de requête</a></h1><div class="Body3">Le Programme d'exécution de requête permet d'exécuter une requête SQL stockée dans une chaine.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1590582416075"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1590582416075");</script></div><br><h2 class="Title7 GTitle2" id="Programme d'exécution de requête-Programme d'exécution de requête"><a class="Link9" href="#Programme d'exécution de requête">Programme d'exécution de requête</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="php">&lt;?php
//===============================================
public function query($sqlQuery) {
    GDebug::Instance()-&gt;write(__CLASS__, "::", __FUNCTION__, "()");
    $this-&gt;m_result = mysqli_query($this-&gt;m_conn, $sqlQuery);
    if(!$this-&gt;m_result) {die("[GMySQL] erreur execution : " . mysqli_error($this-&gt;m_conn));}
}
//===============================================
?&gt;</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programme d'exécution de script"><a class="Link3" href="#">Programme d'exécution de script</a></h1><div class="Body3">Le programme d'exécution de script permet d'exécuter un script SQL stocké dans un fichier.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1590583041582"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1590583041582");</script></div><br><h2 class="Title7 GTitle2" id="Programme d'exécution de script-Programme d'exécution de script"><a class="Link9" href="#Programme d'exécution de script">Programme d'exécution de script</a></h2>&nbsp;<br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="php">&lt;?php
//===============================================
public function script($filename) {
    GDebug::Instance()-&gt;write(__CLASS__, "::", __FUNCTION__, "()");
    $lSqlQuery = GFile::Instance()-&gt;getData($filename);
    $this-&gt;query($lSqlQuery);
}
//===============================================
?&gt;</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programme d'affichage des données"><a class="Link3" href="#">Programme d'affichage des données</a></h1><div class="Body3">Le programme d'affichage des données permet d'afficher les résultats d'une requête SQL.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1590587451642"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1590587451642");</script></div><br><h2 class="Title7 GTitle2" id="Programme d'affichage des données-Programme d'affichage des données"><a class="Link9" href="#Programme d'affichage des données">Programme d'affichage des données</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="php">&lt;?php
//===============================================
public function showData() {
    GDebug::Instance()-&gt;write(__CLASS__, "::", __FUNCTION__, "()");
    if(!is_object($this-&gt;m_result)) return;
    while($lRow = mysqli_fetch_row($this-&gt;m_result)) {
        echo "&lt;div&gt;";
        foreach($lRow as $lKey =&gt; $lValue) {
            echo "&lt;div style='
                border: 1px solid gray;
                display: inline-block;
                min-width: 200px;
                padding: 5px;
            '&gt;" . $lValue . "&lt;/div&gt;";
        }
        echo "&lt;/div&gt;";
    }
}
//===============================================
?&gt;</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Programme de déconnexion"><a class="Link3" href="#">Programme de déconnexion</a></h1><div class="Body3">Le programme de déconnexion permet de se déconnecter du serveur MySQL.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1590580857364"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1590580857364");</script></div><br><h2 class="Title7 GTitle2" id="Programme de déconnexion-Programme de déconnexion"><a class="Link9" href="#Programme de déconnexion">Programme de déconnexion</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="php">&lt;?php
//===============================================
public function close() {
    GDebug::Instance()-&gt;write(__CLASS__, "::", __FUNCTION__, "()");
    mysqli_close($this-&gt;m_conn);
}
//===============================================
?&gt;</xmp></pre></div><br></div></div></div></div><br>