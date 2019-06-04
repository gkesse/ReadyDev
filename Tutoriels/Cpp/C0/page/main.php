<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la programmation avec le C</div></a></div></div><div class="Body2 Orange">Le <b>C</b> est un langage de programmation structurelle.<br>Le but de ce tutoriel est de vous apprendre la programmation avec le <b>C</b>.<br>Produit par <b>Gérard KESSE</b>.<br>&nbsp;<br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation sous Windows"><a class="Link3" href="#">Installation sous Windows</a></h1><div class="Body3">Le but de cette section est de vous présenter les différents outils nécessaires pour apprendre la programmation avec le <span class="GColor1" style="color:lime;">C</span>, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>Dans ce tutoriel, nous utiliserons, sous Windows:<br>-    MinGW, comme compilateur.<br>-    Notepad++, comme éditeur de texte.<br>- Eclipse, comme environnement de développement intégré.<br>- Java JDK, comme machine virtuelle.<br><br><h3 class="Title8 GTitle3">Installer MinGW</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="http://www.mingw.org/">http://www.mingw.org/</a><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://sourceforge.net/projects/mingw-w64/files/">https://sourceforge.net/projects/mingw-w64/files/</a><br><br><h3 class="Title8 GTitle3">Installer Notepad++</h3><a class="Link7 GLink1" style="color:lime;" href="https://notepad-plus-plus.org/fr/">https://notepad-plus-plus.org/fr/</a><br><br><h3 class="Title8 GTitle3">Installer Eclipse</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.eclipse.org/downloads/packages/release">https://www.eclipse.org/downloads/packages/release</a><br><br><h3 class="Title8 GTitle3">Installer Java JDK</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.oracle.com/technetwork/java/archive-139210.html">https://www.oracle.com/technetwork/java/archive-139210.html</a><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Gestionnaire de console"><a class="Link3" href="#">Gestionnaire de console</a></h1><div class="Body3">Le but de cette section est de vous apprendre à créer un <span class="GColor1" style="color:lime;">Gestionnaire de console </span>avec le C.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1559297750332"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1559297750332");</script></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de console-Initialisation"><a class="Link9" href="#Gestionnaire de console">Initialisation</a></h2><br><h3 class="Title8 GTitle3">Initialisation</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
GConsoleO* GConsole_New() {
    GConsoleO* lObj = (GConsoleO*)malloc(sizeof(GConsoleO));
    lObj-&gt;Delete = GConsole_Delete;
    lObj-&gt;Print = printf;
    return lObj;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de console-Programme de Test"><a class="Link9" href="#Gestionnaire de console">Programme de Test</a></h2><br><h3 class="Title8 GTitle3">Programme de Test</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GProcessConsole_Run(int argc, char** argv) {
	int lInt = 567;
	char* lString = "Bonjour tout le monde";
	GConsole()-&gt;Print("Entier decimal: [ %d ]\n", lInt);
	GConsole()-&gt;Print("Entier octal: [ %o ]\n", lInt);
	GConsole()-&gt;Print("Entier hexadecimal: [ %X ]\n", lInt);
	GConsole()-&gt;Print("Chaine: [ %s ]\n", lString);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de console-Résultat"><a class="Link9" href="#Gestionnaire de console">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Console.png" alt="img/Console.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Gestionnaire de clavier"><a class="Link3" href="#">Gestionnaire de clavier</a></h1><div class="Body3">Le but de cette section est de vous apprendre à créer un <span class="GColor1" style="color:lime;">Gestionnaire de clavier </span>avec le C.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1559297827866"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1559297827866");</script></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de clavier-Initiaisation"><a class="Link9" href="#Gestionnaire de clavier">Initiaisation</a></h2><br><h3 class="Title8 GTitle3">Initialisation</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
GKeyboardO* GKeyboard_New() {
    GKeyboardO* lObj = (GKeyboardO*)malloc(sizeof(GKeyboardO));
    lObj-&gt;Delete = GKeyboard_Delete;
    lObj-&gt;Input = scanf;
    lObj-&gt;Line = fgets;
    lObj-&gt;Clear = fflush;
    return lObj;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de clavier-Programme de Test"><a class="Link9" href="#Gestionnaire de clavier">Programme de Test</a></h2><br><h3 class="Title8 GTitle3">Programme de Test</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GProcessKeyboard_Run(int argc, char** argv) {
	int lInt;
	char lBinary[16];
	int lOctal;
	int lHexadecimal;
	float lFloat;
	char lChar;
	char lString[255];
	int lFromBinary;
	char lToBinary[16];

	GConsole()-&gt;Print("Saisir un entier decimal: ");
	GKeyboard()-&gt;Input("%d", &lInt);
	GConsole()-&gt;Print("Saisir un entier binaire: ");
	GKeyboard()-&gt;Input("%s", &lBinary);
	GConsole()-&gt;Print("Saisir un entier octal: ");
	GKeyboard()-&gt;Input("%o", &lOctal);
	GConsole()-&gt;Print("Saisir un entier hexadecimal: ");
	GKeyboard()-&gt;Input("%x", &lHexadecimal);
	GConsole()-&gt;Print("Saisir un reel: ");
	GKeyboard()-&gt;Input("%f", &lFloat);
	GKeyboard()-&gt;Clear(stdin);
	GConsole()-&gt;Print("Saisir un caractere: ");
	GKeyboard()-&gt;Input("%c", &lChar);
	GConsole()-&gt;Print("Saisir une chaine: ");
	GKeyboard()-&gt;Clear(stdin);
	GKeyboard()-&gt;Line(lString, 254, stdin);

	GConsole()-&gt;Print("\n");
	lFromBinary = GBase()-&gt;FromBinary(lBinary);
	GBase()-&gt;ToBinary(lHexadecimal, lToBinary);

	GConsole()-&gt;Print("Entier decimal: [ %d ]: %d\n", lInt, lInt);
	GConsole()-&gt;Print("Entier binaire [ %s ]: [ %X ]: %d\n", lBinary, lFromBinary, lFromBinary);
	GConsole()-&gt;Print("Entier octal [ %o ]: %d\n", lOctal, lOctal);
	GConsole()-&gt;Print("Entier hexadecimal [ %X ]: [ %s ]: %d\n", lHexadecimal, lToBinary, lHexadecimal);
	GConsole()-&gt;Print("Reel: %f\n", lFloat);
	GConsole()-&gt;Print("Caractere [ %c ]: %d\n", lChar, lChar);
	GConsole()-&gt;Print("Chaine: %s\n", lString);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de clavier-Résultat"><a class="Link9" href="#Gestionnaire de clavier">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Keyboard.png" alt="img/Keyboard.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Gestionnaire de configuration"><a class="Link3" href="#">Gestionnaire de configuration</a></h1><div class="Body3">Le but de cette section est de vous apprendre à créer un <span class="GColor1" style="color:lime;">Gestionnaire de configuration </span>avec le C.<br>Produit par <b>Gérard KESSE</b>.<br><br>Le Gestionnaire de configuration proposé ici est un système de Clé/Valeur basé sur le concept de liste chainée.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1549439957148"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1549439957148");</script></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration-Structure de données"><a class="Link9" href="#Gestionnaire de configuration">Structure de données</a></h2><br><h3 class="Title8 GTitle3">Structures de données</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
typedef struct _GConfigNormalO GConfigNormalO;
typedef struct _GConfigNodeO GConfigNodeO;
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Nœud de données</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
struct _GConfigNodeO {
    int m_index;
    char* m_key;
    char* m_value;
    GConfigNodeO* m_next;
};
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Liste de données</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
struct _GConfigNormalO {
    GConfigO* m_parent;
    GConfigNodeO* m_head;
};
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration-Ajouter une donnée"><a class="Link9" href="#Gestionnaire de configuration">Ajouter une donnée</a></h2><br><h3 class="Title8 GTitle3">Ajouter une donnée</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GConfigNormal_SetData(char* key, char* value) {
    GConfigNormalO* lConfigNormal = m_GConfigNormalO-&gt;m_child;
    GConfigNodeO* lNext = lConfigNormal-&gt;m_head;
    GConfigNodeO* lPrevious = 0;

    while(lNext != 0) {
        int lStrcmp = strcmp(lNext-&gt;m_key, key);
        if(lStrcmp == 0) {
            lNext-&gt;m_value = value;
            return;
        }
        lPrevious = lNext;
        lNext = lNext-&gt;m_next;
    }

    GConfigNodeO* lNode = (GConfigNodeO*)malloc(sizeof(GConfigNodeO));
    lNode-&gt;m_key = key;
    lNode-&gt;m_value = value;
    lNode-&gt;m_next = 0;

    if(lPrevious == 0) lConfigNormal-&gt;m_head = lNode;
    else lPrevious-&gt;m_next = lNode;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration-Lire une donnée"><a class="Link9" href="#Gestionnaire de configuration">Lire une donnée</a></h2><br><h3 class="Title8 GTitle3">Lire une donnée</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static char* GConfigNormal_GetData(char* key) {
    GConfigNormalO* lConfigNormal = m_GConfigNormalO-&gt;m_child;
    GConfigNodeO* lNext = lConfigNormal-&gt;m_head;

    while(lNext != 0) {
        int lStrcmp = strcmp(lNext-&gt;m_key, key);
        if(lStrcmp == 0) {
            return lNext-&gt;m_value;
        }
        lNext = lNext-&gt;m_next;
    }
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration-Afficher les données"><a class="Link9" href="#Gestionnaire de configuration">Afficher les données</a></h2><br><h3 class="Title8 GTitle3">Afficher les données</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GConfigNormal_Show() {
    GConfigNormalO* lConfigNormal = m_GConfigNormalO-&gt;m_child;
    GConfigNodeO* lNext = lConfigNormal-&gt;m_head;

    while(lNext != 0) {
        char* lKey = lNext-&gt;m_key;
        char* lValue = lNext-&gt;m_value;
        printf("%s = %s\n", lKey, lValue);
        lNext = lNext-&gt;m_next;
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration-Compter les données"><a class="Link9" href="#Gestionnaire de configuration">Compter les données</a></h2><br><h3 class="Title8 GTitle3">Compter les données</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static int GConfigNormal_Size() {
    GConfigNormalO* lConfigNormal = m_GConfigNormalO-&gt;m_child;
    GConfigNodeO* lNext = lConfigNormal-&gt;m_head;
    int lSize = 0;

    while(lNext != 0) {
        lSize++;
        lNext = lNext-&gt;m_next;
    }
    printf("Size: %d\n", lSize);
    return lSize;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration-Supprimer un nœud"><a class="Link9" href="#Gestionnaire de configuration">Supprimer un nœud</a></h2><br><h3 class="Title8 GTitle3">Supprimer un nœud</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GConfigNormal_RemoveNode(GConfigNodeO* node) {
    if(node != 0) {
        free(node);
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration-Supprimer une donnée"><a class="Link9" href="#Gestionnaire de configuration">Supprimer une donnée</a></h2><br><h3 class="Title8 GTitle3">Supprimer une donnée</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GConfigNormal_Remove(char* key) {
    GConfigNormalO* lConfigNormal = m_GConfigNormalO-&gt;m_child;
    GConfigNodeO* lNext = lConfigNormal-&gt;m_head;
    GConfigNodeO* lPrevious = 0;

    while(lNext != 0) {
        int lStrcmp = strcmp(lNext-&gt;m_key, key);
        if(lStrcmp == 0) {
            if(lPrevious == 0) lConfigNormal-&gt;m_head = lNext-&gt;m_next;
            else lPrevious-&gt;m_next = lNext-&gt;m_next;
            GConfigNormal_RemoveNode(lNext);
            return;
        }
        lPrevious = lNext;
        lNext = lNext-&gt;m_next;
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration-Supprimer les données"><a class="Link9" href="#Gestionnaire de configuration">Supprimer les données</a></h2><br><h3 class="Title8 GTitle3">Supprimer les données</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GConfigNormal_Clear() {
    GConfigNormalO* lConfigNormal = m_GConfigNormalO->m_child;
    GNodeO* lNode = lConfigNormal->m_start;
    while(lNode != 0) {
        GNodeO* lNext = lNode->m_next;
        GConfigNormal_Remove_Node(lNode);
        lNode = lNext;
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration-Programme de Test"><a class="Link9" href="#Gestionnaire de configuration">Programme de Test</a></h2><br><h3 class="Title8 GTitle3">Programme de Test</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GProcessConfig_Run(int argc, char** argv) {
    GConfig()-&gt;SetData("Nom", "KESSE");
    GConfig()-&gt;SetData("Prenom", "Gerard");
    GConfig()-&gt;SetData("Email", "gerard.kesse@readydev.com");
    GConfig()-&gt;SetData("Diplome", "Ingenieur");
    GConfig()-&gt;SetData("Formation", "Informatique Industrielle");
    GConfig()-&gt;SetData("Ecole", "Polytech'Montpellier");
    GConfig()-&gt;Show();
    GConfig()-&gt;Delete();
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration-Résultat"><a class="Link9" href="#Gestionnaire de configuration">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Config.png" alt="img/Config.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Gestionnaire de configuration template"><a class="Link3" href="#">Gestionnaire de configuration template</a></h1><div class="Body3">Le but de cette section est de vous apprendre à créer un <span class="GColor1" style="color:lime;">Gestionnaire de configuration template </span>avec le C.<br>Produit par <b>Gérard KESSE</b>.<br><br>Le Gestionnaire de configuration template proposé ici est un système de Clé/Valeur basé sur le concept de liste chainée.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1559297449844"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1559297449844");</script></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration template-Structures de données"><a class="Link9" href="#Gestionnaire de configuration template">Structures de données</a></h2><br><h3 class="Title8 GTitle3">Structures de données</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
typedef struct _GConfigTemplateO GConfigTemplateO;
typedef struct _GMapO_GConfigTemplate_GCHAR_PTR_GCHAR_PTR GMapO_GConfigTemplate_GCHAR_PTR_GCHAR_PTR;
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Liste de données</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
struct _GConfigTemplateO {
    GConfigO* m_parent;
    GMapO(GConfigTemplate_GCHAR_PTR_GCHAR_PTR)* m_dataMap;
};
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration template-Ajouter une donnée"><a class="Link9" href="#Gestionnaire de configuration template">Ajouter une donnée</a></h2><br><h3 class="Title8 GTitle3">Ajouter une donnée</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GConfigTemplate_SetData(char* key, char* value) {
    GConfigTemplateO* lConfigTemplate = m_GConfigTemplateO-&gt;m_child;
    GMapO(GConfigTemplate_GCHAR_PTR_GCHAR_PTR)* lDataMap = lConfigTemplate-&gt;m_dataMap;
    lDataMap-&gt;SetData(lDataMap, key, value, GConfigTemplate_MapEqual);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration template-Lire une donnée"><a class="Link9" href="#Gestionnaire de configuration template">Lire une donnée</a></h2><br><h3 class="Title8 GTitle3">Lire une donnée</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static char* GConfigTemplate_GetData(char* key) {
    GConfigTemplateO* lConfigTemplate = m_GConfigTemplateO-&gt;m_child;
    GMapO(GConfigTemplate_GCHAR_PTR_GCHAR_PTR)* lDataMap = lConfigTemplate-&gt;m_dataMap;
    return lDataMap-&gt;GetData(lDataMap, key, GConfigTemplate_MapEqual, 0);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration template-Afficher les données"><a class="Link9" href="#Gestionnaire de configuration template">Afficher les données</a></h2><br><h3 class="Title8 GTitle3">Afficher les données</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GConfigTemplate_Show() {
    GConfigTemplateO* lConfigTemplate = m_GConfigTemplateO-&gt;m_child;
    GMapO(GConfigTemplate_GCHAR_PTR_GCHAR_PTR)* lDataMap = lConfigTemplate-&gt;m_dataMap;
    lDataMap-&gt;Show(lDataMap, GConfigTemplate_MapShow);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration template-Compter les données"><a class="Link9" href="#Gestionnaire de configuration template">Compter les données</a></h2><br><h3 class="Title8 GTitle3">Compter les données</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static int GConfigTemplate_Size() {
    GConfigTemplateO* lConfigTemplate = m_GConfigTemplateO-&gt;m_child;
    GMapO(GConfigTemplate_GCHAR_PTR_GCHAR_PTR)* lDataMap = lConfigTemplate-&gt;m_dataMap;
    return lDataMap-&gt;Size(lDataMap);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration template-Supprimer une donnée"><a class="Link9" href="#Gestionnaire de configuration template">Supprimer une donnée</a></h2><br><h3 class="Title8 GTitle3">Supprimer une donnée</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GConfigTemplate_Remove(char* key) {
    GConfigTemplateO* lConfigTemplate = m_GConfigTemplateO-&gt;m_child;
    GMapO(GConfigTemplate_GCHAR_PTR_GCHAR_PTR)* lDataMap = lConfigTemplate-&gt;m_dataMap;
    lDataMap-&gt;Remove(lDataMap, key, GConfigTemplate_MapEqual);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration template-Supprimer les données"><a class="Link9" href="#Gestionnaire de configuration template">Supprimer les données</a></h2><br><h3 class="Title8 GTitle3">Supprimer les données</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GConfigTemplate_Clear() {
    GConfigTemplateO* lConfigTemplate = m_GConfigTemplateO-&gt;m_child;
    GMapO(GConfigTemplate_GCHAR_PTR_GCHAR_PTR)* lDataMap = lConfigTemplate-&gt;m_dataMap;
    lDataMap-&gt;Clear(lDataMap);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration template-Programme de Test"><a class="Link9" href="#Gestionnaire de configuration template">Programme de Test</a></h2><br><h3 class="Title8 GTitle3">Programme de Test</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GProcessConfig_Run(int argc, char** argv) {
	GConfig()-&gt;SetData("Nom", "KESSE");
	GConfig()-&gt;SetData("Prenom", "Gerard");
	GConfig()-&gt;SetData("Email", "gerard.kesse@readydev.com");
	GConfig()-&gt;SetData("Diplome", "Ingenieur");
	GConfig()-&gt;SetData("Formation", "Informatique Industrielle");
	GConfig()-&gt;SetData("Ecole", "Polytech'Montpellier");
	GConfig()-&gt;Show();
	GConfig()-&gt;Delete();
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration template-Résultat"><a class="Link9" href="#Gestionnaire de configuration template">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/ConfigTemplate.png" alt="img/ConfigTemplate.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Gestionnaire de settings"><a class="Link3" href="#">Gestionnaire de settings</a></h1><div class="Body3">Le but de cette section est de vous apprendre à créer un <span class="GColor1" style="color:lime;">Gestionnaire de settings </span>avec le C.<br>Produit par <b>Gérard KESSE</b>.<br><br>Le Gestionnaire de settings proposé ici est associé à un fichier texte dans lequel sont configurés les settings.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1559297651907"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1559297651907");</script></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de settings-Fichier de settings"><a class="Link9" href="#Gestionnaire de settings">Fichier de settings</a></h2><br><h3 class="Title8 GTitle3">Fichier de settings</h3><span class="GColor1" style="color:lime;">data/config/config.txt</span><br><div class="Img3 GImage"><img src="img/Setting.png" alt="img/Setting.png"></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de settings-Charger les settings"><a class="Link9" href="#Gestionnaire de settings">Charger les settings</a></h2><br><h3 class="Title8 GTitle3">Charger les settings</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GSetting_Load(const char* file) {
    FILE* lFile = fopen(file, "r");
    char lBuffer[100];

    while(fgets(lBuffer, sizeof(lBuffer), lFile) != NULL) {
       char* lTrim = GString()-&gt;Trim(lBuffer);
        if(lTrim == 0) {continue;}
        char lFirst = lTrim[0];
        if(lFirst == '#') {GString()-&gt;Free(lTrim); continue;}
        int lCount;
        char** lSplit = GString()-&gt;Split(lTrim, "=", &lCount);
        char* lKey = GString()-&gt;Trim(lSplit[0]);
        char* lValue = GString()-&gt;Trim(lSplit[1]);
        GConfig()-&gt;SetData(lKey, lValue);
        GString()-&gt;Free(lTrim);
        GString()-&gt;Free2(lSplit, lCount);
    }
    GConfig()-&gt;Show();
    printf("\n");
    fclose(lFile);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de settings-Programme de Test"><a class="Link9" href="#Gestionnaire de settings">Programme de Test</a></h2><br><h3 class="Title8 GTitle3">Programme de Test</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
int main(int argc, char** argv) {
    GSetting()-&gt;Load("data/config/config.txt");
    GProcess()-&gt;Run(argc, argv);
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de settings-Résultat"><a class="Link9" href="#Gestionnaire de settings">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Setting_02.png" alt="img/Setting_02.png"></div></div></div></div></div><br>