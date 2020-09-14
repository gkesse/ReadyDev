<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Afficher les tables SQLite en Python</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à afficher les tables d'une base de données SQLite en <b>Python</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br>&nbsp;<br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>SQLite</b> est une bibliothèque écrite en langage C qui propose un moteur de base de données relationnelle accessible par le langage SQL. SQLite implémente en grande partie le standard SQL-92 et des propriétés ACID. Contrairement aux serveurs de bases de données traditionnels, comme MySQL ou PostgreSQL, sa particularité est de ne pas reproduire le schéma habituel client-serveur mais d'être directement intégrée aux programmes. L'intégralité de la base de données (déclarations, tables, index et données) est stockée dans un fichier indépendant de la plateforme. (ref. <a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://fr.wikipedia.org/wiki/SQLite">Wikipédia</a>)<br><br><div class="Img3 GImage"><img src="/Tutoriels/Python/SQLite/img/b_tables.png" alt="/Tutoriels/Python/SQLite/img/b_tables.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Afficher les tables SQLite en Python"><a class="Link3" href="#">Afficher les tables SQLite en Python</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599903147417"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599903147417");</script></div><br><h2 class="Title7 GTitle2" id="Afficher les tables SQLite en Python-Introduction"><a class="Link9" href="#Afficher les tables SQLite en Python">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de réaliser un programme permettant d'afficher les tables d'une base de données SQLite.<br><br><h2 class="Title7 GTitle2" id="Afficher les tables SQLite en Python-Requête d'affichage des tables"><a class="Link9" href="#Afficher les tables SQLite en Python">Requête d'affichage des tables</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def run_CONFIG_SHOW(self):
    print("")
    GSQLite.Instance().queryShow("""
    select * from CONFIG_PYTHON
    order by CONFIG_KEY
    """, 1, [20,50], 20)
    self.G_STATE = "S_SAVE"
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Afficher les tables SQLite en Python-Exécution d'une requête d'affichage"><a class="Link9" href="#Afficher les tables SQLite en Python">Exécution d'une requête d'affichage</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def queryShow(self, sql, onHeader, widthL, widthD):
    lSqliteF = GManager.Instance().getData("sqlite.file")
    lSqlite = sqlite3.connect(lSqliteF)
    lSqlite.row_factory = sqlite3.Row  
    lCursor = lSqlite.cursor()
    lDataMap = lCursor.execute(sql)
    lRows = lDataMap.fetchall()
    lSize = len(widthL)
    lBottomBar = 1
    for lData in lRows :
        lRow = dict(lData)
        # barre haut entete
        if onHeader == 1 :
            iCount = 0
            print("+-", end="")
            for lKey, lValue in lRow.items() :
                if iCount != 0 : print("-+-", end="")
                lWidth = widthD
                if iCount &lt; lSize : lWidth = widthL[iCount]
                for i in range(0, lWidth) :
                    print("-", end="")
                iCount += 1
            print("-+", end="")
            print("")
        # entete
        if onHeader == 1 :
            iCount = 0
            print("| ", end="")
            for lKey, lValue in lRow.items() :
                if iCount != 0 : print(" | ", end="")
                lWidth = widthD
                if iCount &lt; lSize : lWidth = widthL[iCount]
                print("%-*s" % (lWidth, lKey), end="")
                iCount += 1
            print(" |", end="")
            print("")
        # barre bas entete
        if lBottomBar == 1 :
            lBottomBar = 0
            iCount = 0
            print("+-", end="")
            for lKey, lValue in lRow.items() :
                if iCount != 0 : print("-+-", end="")
                lWidth = widthD
                if iCount &lt; lSize : lWidth = widthL[iCount]
                for i in range(0, lWidth) :
                    print("-", end="")
                iCount += 1
            print("-+", end="")
            print("")
        # donnees
        iCount = 0
        print("| ", end="")
        for lKey, lValue in lRow.items() :
            if iCount != 0 : print(" | ", end="")
            lWidth = widthD
            if iCount &lt; lSize : lWidth = widthL[iCount]
            print("%-*s" % (lWidth, lValue), end="")
            iCount += 1
        print(" |", end="")
        print("")
        # fin
        onHeader = 0
    # barre bas entete
    iCount = 0
    print("+-", end="")
    for lKey, lValue in lRow.items() :
        if iCount != 0 : print("-+-", end="")
        lWidth = widthD
        if iCount &lt; lSize : lWidth = widthL[iCount]
        for i in range(0, lWidth) :
            print("-", end="")
        iCount += 1
    print("-+", end="")
    print("")
    # fermeture
    lSqlite.close()
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Afficher les tables SQLite en Python-Résultat"><a class="Link9" href="#Afficher les tables SQLite en Python">Résultat</a></h2><br><div class="Img3 GImage"><img src="/Tutoriels/Python/SQLite/img/i_tables.png" alt="/Tutoriels/Python/SQLite/img/i_tables.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3"><br>Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Base de données SQLite</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1600029231178"><div class="Row26">List 1 &gt; Python &gt; sqlite</div></div><script>loadList1("Loader_1600029231178","Python","sqlite");</script></div><br></div></div></div></div><br>