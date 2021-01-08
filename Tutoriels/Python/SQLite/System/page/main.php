<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer un gestionnaire de module SQLite en Python</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer un gestionnaire de module SQLite en <b>Python</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br>&nbsp;<br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>Python </b>est un langage de programmation interprété orienté objet, multiplateforme et doté d'un typage dynamique fort et d'une gestion automatique de la mémoire par ramasse-miettes.<br><br><div class="Img3 GImage"><img src="/Tutoriels/Python/img/b_sqlite_system.png" alt="/Tutoriels/Python/img/b_sqlite_system.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un gestionnaire de module SQLite en Python"><a class="Link3" href="#">Créer un gestionnaire de module SQLite en Python</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599903147417"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599903147417");</script></div><br><h2 class="Title7 GTitle2" id="Créer un gestionnaire de module SQLite en Python-Introduction"><a class="Link9" href="#Créer un gestionnaire de module SQLite en Python">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons de créer un gestionnaire de module SQLite en Python (GSQLite).<br><br><h2 class="Title7 GTitle2" id="Créer un gestionnaire de module SQLite en Python-Ouverture d'une base de données"><a class="Link9" href="#Créer un gestionnaire de module SQLite en Python">Ouverture d'une base de données</a></h2><br><h3 class="Title8 GTitle3">GSQLite.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def open(self):
    lApp = GManager.Instance().getData().app
    lConnect = sqlite3.connect(lApp.sqlite_db_path)
    return lConnect
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un gestionnaire de module SQLite en Python-Exécution d'une requête d'écriture"><a class="Link9" href="#Créer un gestionnaire de module SQLite en Python">Exécution d'une requête d'écriture</a></h2><br><h3 class="Title8 GTitle3">GSQLite.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def queryWrite(self, sql):
    lConnect = self.open()
    lConnect.execute(sql)
    lConnect.commit()
    lConnect.close()
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un gestionnaire de module SQLite en Python-Affichage d'une requête de lecture"><a class="Link9" href="#Créer un gestionnaire de module SQLite en Python">Affichage d'une requête de lecture</a></h2><br><h3 class="Title8 GTitle3">GSQLite.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def queryShow(self, sql, widthMap, defaultWidth):
    lConnect = self.open()
    lCursor = lConnect.execute(sql)
    lNameMap = lCursor.description
    lColCount = len(lNameMap)
    # sep
    sys.stdout.write("+-")
    for i in range(lColCount) :
        if i != 0 : sys.stdout.write("-+-")
        lWidth = GManager.Instance().getWidth(widthMap, i, defaultWidth)
        for j in range(lWidth) : sys.stdout.write("-")
    sys.stdout.write("-+")
    sys.stdout.write("\n")
    # header
    i = 0
    sys.stdout.write("| ")
    for lNameRow in lNameMap :
        if i != 0 : sys.stdout.write(" | ")
        lName = lNameRow[0]
        lWidth = GManager.Instance().getWidth(widthMap, i, defaultWidth)
        sys.stdout.write("%*s" % (-lWidth, lName))
        i += 1
    sys.stdout.write(" |")
    sys.stdout.write("\n")
    # sep
    sys.stdout.write("+-")
    for i in range(lColCount) :
        if i != 0 : sys.stdout.write("-+-")
        lWidth = GManager.Instance().getWidth(widthMap, i, defaultWidth)
        for j in range(lWidth) : sys.stdout.write("-")
    sys.stdout.write("-+")
    sys.stdout.write("\n")
    # data
    for lDataRow in lCursor :
        sys.stdout.write("| ")
        for i in range(lColCount) :
            if i != 0 : sys.stdout.write(" | ")
            lData = lDataRow[i]
            lWidth = GManager.Instance().getWidth(widthMap, i, defaultWidth)
            sys.stdout.write("%*s" %(-lWidth, lData))
        sys.stdout.write(" |")
        sys.stdout.write("\n")
    # sep
    sys.stdout.write("+-")
    for i in range(lColCount) :
        if i != 0 : sys.stdout.write("-+-")
        lWidth = GManager.Instance().getWidth(widthMap, i, defaultWidth)
        for j in range(lWidth) : sys.stdout.write("-")
    sys.stdout.write("-+")
    sys.stdout.write("\n")
    # close
    lConnect.close()
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un gestionnaire de module SQLite en Python-Lecture d'une valeur de données"><a class="Link9" href="#Créer un gestionnaire de module SQLite en Python">Lecture d'une valeur de données</a></h2><br><h3 class="Title8 GTitle3">GSQLite.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def queryValue(self, sql):
    lConnect = self.open()
    lCursor = lConnect.execute(sql)
    lData = ""
    for lDataRow in lCursor :
        lData = lDataRow[0]
        break
    lConnect.close()
    return lData
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un gestionnaire de module SQLite en Python-Lecture d'une colonne de données"><a class="Link9" href="#Créer un gestionnaire de module SQLite en Python">Lecture d'une colonne de données</a></h2><br><h3 class="Title8 GTitle3">GSQLite.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def queryCol(self, sql):
    lConnect = self.open()
    lCursor = lConnect.execute(sql)
    lDataMap = []
    for lDataRow in lCursor :
        lData = lDataRow[0]
        lDataMap.append(lData)
    lConnect.close()
    return lDataMap
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un gestionnaire de module SQLite en Python-Lecture d'une ligne de données"><a class="Link9" href="#Créer un gestionnaire de module SQLite en Python">Lecture d'une ligne de données</a></h2><br><h3 class="Title8 GTitle3">GSQLite.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def queryRow(self, sql):
    lConnect = self.open()
    lCursor = lConnect.execute(sql)
    lColCount = len(lCursor.description)
    lDataMap = []
    for lDataRow in lCursor :
        for i in range(lColCount) :
            lData = lDataRow[i]
            lDataMap.append(lData)
        break
    lConnect.close()
    return lDataMap
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un gestionnaire de module SQLite en Python-Lecture d'une matrice de données"><a class="Link9" href="#Créer un gestionnaire de module SQLite en Python">Lecture d'une matrice de données</a></h2><br><h3 class="Title8 GTitle3">GSQLite.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def queryMap(self, sql):
    lConnect = self.open()
    lCursor = lConnect.execute(sql)
    lColCount = len(lCursor.description)
    lDataMap = []
    for lDataRow in lCursor :
        lDataCol = []
        for i in range(lColCount) :
            lData = lDataRow[i]
            lDataCol.append(lData)
        lDataMap.append(lDataCol)
    lConnect.close()
    return lDataMap
#================================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Utiliser un gestionnaire de module SQLite en Python"><a class="Link3" href="#">Utiliser un gestionnaire de module SQLite en Python</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1610096395115"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1610096395115");</script></div><br><h2 class="Title7 GTitle2" id="Utiliser un gestionnaire de module SQLite en Python-Introduction"><a class="Link9" href="#Utiliser un gestionnaire de module SQLite en Python">Introduction</a></h2><br>Dans l'exemple qui suit, nous essayons d'utiliser un gestionnaire de module SQLite en Python (GSQLite).<br><br><h2 class="Title7 GTitle2" id="Utiliser un gestionnaire de module SQLite en Python-Création d'une table"><a class="Link9" href="#Utiliser un gestionnaire de module SQLite en Python">Création d'une table</a></h2><br><h3 class="Title8 GTitle3">GSQLiteUi.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def run_CONFIG_DATA_CREATE(self):
    sys.stdout.write("\n")
    GSQLite.Instance().queryWrite("""
    create table if not exists config_data (
    config_key text,
    config_value text
    )""")
    self.G_STATE = "S_SAVE"
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser un gestionnaire de module SQLite en Python-Insertion d'une donnée dans une table"><a class="Link9" href="#Utiliser un gestionnaire de module SQLite en Python">Insertion d'une donnée dans une table</a></h2><br><h3 class="Title8 GTitle3">GConfig.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def insertData(self, key):
    lValue = self.getData(key)
    GSQLite.Instance().queryWrite("""
    insert into config_data (config_key, config_value)
    values ('%s', '%s')
    """ % (key, lValue))
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser un gestionnaire de module SQLite en Python-Mise à jour d'une donnée dans une table"><a class="Link9" href="#Utiliser un gestionnaire de module SQLite en Python">Mise à jour d'une donnée dans une table</a></h2><br><h3 class="Title8 GTitle3">GConfig.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def updateData(self, key):
    lValue = self.getData(key)
    GSQLite.Instance().queryWrite("""
    update config_data 
    set config_value = '%s'
    where config_key = '%s'
    """ % (lValue, key))
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser un gestionnaire de module SQLite en Python-Lecture d'une donnée d'une table"><a class="Link9" href="#Utiliser un gestionnaire de module SQLite en Python">Lecture d'une donnée d'une table</a></h2><br><h3 class="Title8 GTitle3">GConfig.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def loadData(self, key):
    lValue = GSQLite.Instance().queryValue("""
    select config_value from config_data 
    where config_key='%s'
    """ % (key))
    self.setData(key, lValue)
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser un gestionnaire de module SQLite en Python-Compter une donnée d'une table"><a class="Link9" href="#Utiliser un gestionnaire de module SQLite en Python">Compter une donnée d'une table</a></h2><br><h3 class="Title8 GTitle3">GConfig.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def countData(self, key):
    lCount = GSQLite.Instance().queryValue("""
    select count(*) from config_data 
    where config_key='%s'
    """ % (key))
    return lCount
#================================================</xmp></pre></div><br><br><br><h2 class="Title7 GTitle2" id="Utiliser un gestionnaire de module SQLite en Python-Suppression d'une table"><a class="Link9" href="#Utiliser un gestionnaire de module SQLite en Python">Suppression d'une table</a></h2><br><h3 class="Title8 GTitle3">GSQLiteUi.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def run_CONFIG_DATA_DROP(self):
    sys.stdout.write("\n")
    GSQLite.Instance().queryWrite("""
    drop table if exists config_data
    """)
    self.G_STATE = "S_SAVE"
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser un gestionnaire de module SQLite en Python-Suppression d'une donnée d'une table"><a class="Link9" href="#Utiliser un gestionnaire de module SQLite en Python">Suppression d'une donnée d'une table</a></h2><br><h3 class="Title8 GTitle3">GSQLiteUi.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def run_CONFIG_DATA_DELETE(self):
    lKey = GConfig.Instance().getData("G_KEY_NAME");
    GSQLite.Instance().queryWrite("""
    delete from config_data
    where config_key = '%s'
    """ % (lKey))
    self.run_CONFIG_DATA_SHOW()
    self.G_STATE = "S_SAVE"
#================================================</xmp></pre></div><br><br><br><h2 class="Title7 GTitle2" id="Utiliser un gestionnaire de module SQLite en Python-Affichage de la liste des tables"><a class="Link9" href="#Utiliser un gestionnaire de module SQLite en Python">Affichage de la liste des tables</a></h2><br><h3 class="Title8 GTitle3">GSQLiteUi.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def run_TABLES_SHOW(self):
    sys.stdout.write("\n")
    GSQLite.Instance().queryShow("""
    select name from sqlite_master 
    where type='table'
    """, "30", 20)
    self.G_STATE = "S_SAVE"
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser un gestionnaire de module SQLite en Python-Affichage des données d'une table"><a class="Link9" href="#Utiliser un gestionnaire de module SQLite en Python">Affichage des données d'une table</a></h2><br><h3 class="Title8 GTitle3">GSQLiteUi.py</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="python">#================================================
def run_CONFIG_DATA_SHOW(self):
    sys.stdout.write("\n")
    GSQLite.Instance().queryShow("""
    select * from config_data
    order by config_key
    """, "20;50", 20)
    self.G_STATE = "S_SAVE"
#================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Utiliser un gestionnaire de module SQLite en Python-Résultat"><a class="Link9" href="#Utiliser un gestionnaire de module SQLite en Python">Résultat</a></h2><br><h3 class="Title8 GTitle3">Liste des tables</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Python/img/i_sqlite_system.png" alt="/Tutoriels/Python/img/i_sqlite_system.png"></div><br><h3 class="Title8 GTitle3">Affichage des données de la table config_data</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Python/img/i_sqlite_system_02.png" alt="/Tutoriels/Python/img/i_sqlite_system_02.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3"><br>Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1599902988430"><div class="Row26">List 1 &gt; Python &gt; basics</div></div><script>loadList1("Loader_1599902988430","Python","basics");</script></div><br></div></div></div></div><br>