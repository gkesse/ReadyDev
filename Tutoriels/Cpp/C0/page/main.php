<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la programmation avec le C</div></a></div></div><div class="Body2 Orange">Le <b>C</b> est un langage de programmation structurelle.<br>Le but de ce tutoriel est de vous apprendre la programmation avec le <b>C</b>.<br>Produit par <b>Gérard KESSE</b>.<br>&nbsp;<br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation sous Windows"><a class="Link3" href="#">Installation sous Windows</a></h1><div class="Body3">Le but de cette section est de vous présenter les différents outils nécessaires pour apprendre la programmation avec le <span class="GColor1" style="color:lime;">C</span>, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>Dans ce tutoriel, nous utiliserons, sous Windows:<br>-    MinGW, comme compilateur.<br>-    Notepad++, comme éditeur de texte.<br>- Eclipse, comme environnement de développement intégré.<br>- Java JDK, comme machine virtuelle.<br><br><h3 class="Title8 GTitle3">Installer MinGW</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="http://www.mingw.org/">http://www.mingw.org/</a><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://sourceforge.net/projects/mingw-w64/files/">https://sourceforge.net/projects/mingw-w64/files/</a><br><br><h3 class="Title8 GTitle3">Installer Notepad++</h3><a class="Link7 GLink1" style="color:lime;" href="https://notepad-plus-plus.org/fr/">https://notepad-plus-plus.org/fr/</a><br><br><h3 class="Title8 GTitle3">Installer Eclipse</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.eclipse.org/downloads/packages/release">https://www.eclipse.org/downloads/packages/release</a><br><br><h3 class="Title8 GTitle3">Installer Java JDK</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.oracle.com/technetwork/java/archive-139210.html">https://www.oracle.com/technetwork/java/archive-139210.html</a><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Gestionnaire de configuration"><a class="Link3" href="#">Gestionnaire de configuration</a></h1><div class="Body3">Le but de cette section est de vous apprendre à créer un <span class="GColor1" style="color:lime;">Gestionnaire de configuration </span>avec le C.<br>Produit par <b>Gérard KESSE</b>.<br><br>Le Gestionnaire de configuration proposé ici est un système de Clé/Valeur.<br>Il est basé sur le concept de liste chainée.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1549439957148"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1549439957148");</script></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration-Structure de données"><a class="Link9" href="#Gestionnaire de configuration">Structure de données</a></h2><br><h3 class="Title8 GTitle3">Structures de données</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
typedef struct _GConfigNormalO GConfigNormalO;
typedef struct _GNodeO GNodeO;
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Nœud de données</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
struct _GNodeO {
    int m_index;
    char* m_key;
    char* m_value;
    GNodeO* m_next;
};
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Liste de données</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
struct _GConfigNormalO {
    GConfigO* m_parent;
    GNodeO* m_start;
    int m_size;
};
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration-Ajouter une donnée"><a class="Link9" href="#Gestionnaire de configuration">Ajouter une donnée</a></h2><br><h3 class="Title8 GTitle3">Ajouter une donnée</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GConfigNormal_Set_Data(const char* key, const char* value) {
    GConfigNormalO* lConfigNormal = m_GConfigNormalO->m_child;
    int lExist = FALSE;
    GNodeO* lNode = lConfigNormal->m_start;
    while(lNode != 0) {
        int lStrcmp = strcmp(lNode->m_key, key);
        if(lStrcmp == 0) {
            sprintf(lNode->m_value, "%s", value);
            lExist = TRUE;
            break;
        }
        lNode = lNode->m_next;
    }

    if(lExist == FALSE) {
        lNode = (GNodeO*)malloc(sizeof(GNodeO));
        int lKey = strlen(key) + 1;
        int lValue = strlen(value) + 1;
        lNode->m_key = (char*)malloc(sizeof(char)*lKey);
        lNode->m_value = (char*)malloc(sizeof(char)*lValue);
        sprintf(lNode->m_key, "%s", key);
        sprintf(lNode->m_value, "%s", value);
        lNode->m_next = 0;
        lNode->m_index = lConfigNormal->m_size;
        if(lConfigNormal->m_start == 0) {
            lConfigNormal->m_start = lNode;
            lConfigNormal->m_size += 1;
            return;
        }

        GNodeO* lNode2 = lConfigNormal->m_start;
        while(lNode2->m_next != 0) {
            lNode2 = lNode2->m_next;
        }
        lNode2->m_next = lNode;
        lConfigNormal->m_size += 1;
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration-Lire une donnée"><a class="Link9" href="#Gestionnaire de configuration">Lire une donnée</a></h2><br><h3 class="Title8 GTitle3">Lire une donnée</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
char* GConfigNormal_Get_Data(const char* key) {
    GConfigNormalO* lConfigNormal = m_GConfigNormalO->m_child;
    GNodeO* lNode = lConfigNormal->m_start;
    while(lNode != 0) {
        int lStrcmp = strcmp(lNode->m_key, key);
        if(lStrcmp == 0) {
            return lNode->m_value;
        }
        lNode = lNode->m_next;
    }
    return "_NONE_";
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration-Lister les données"><a class="Link9" href="#Gestionnaire de configuration">Lister les données</a></h2><br><h3 class="Title8 GTitle3">Lister les données</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GConfigNormal_Show() {
    GConfigNormalO* lConfigNormal = m_GConfigNormalO->m_child;
    GNodeO* lNode = lConfigNormal->m_start;
    while(lNode != 0) {
        char* lKey = lNode->m_key;
        char* lValue = lNode->m_value;
        printf("%s = %s\n", lKey, lValue);
        lNode = lNode->m_next;
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration-Supprimer un nœud"><a class="Link9" href="#Gestionnaire de configuration">Supprimer un nœud</a></h2><br><h3 class="Title8 GTitle3">Supprimer un nœud</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GConfigNormal_Remove_Node(GNodeO* node) {
    GConfigNormalO* lConfigNormal = m_GConfigNormalO->m_child;
    if(node != 0) {
        if(node->m_key != 0) {
            free(node->m_key);
            node->m_key = 0;
        }
        if(node->m_value != 0) {
            free(node->m_value);
            node->m_value = 0;
        }
        free(node);
        node = 0;
        if(lConfigNormal->m_size > 0) lConfigNormal->m_size -= 1;
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration-Supprimer une donnée"><a class="Link9" href="#Gestionnaire de configuration">Supprimer une donnée</a></h2><br><h3 class="Title8 GTitle3">Supprimer une donnée</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GConfigNormal_Remove(const char* key) {
    GConfigNormalO* lConfigNormal = m_GConfigNormalO->m_child;
    GNodeO* lNode = lConfigNormal->m_start;
    GNodeO* lPrevious = 0;
    GNodeO* lNext = 0;
    while(lNode != 0) {
        lNext = lNode->m_next;
        int lStrcmp = strcmp(lNode->m_key, key);
        if(lStrcmp == 0) {
            if(lPrevious == 0) {
                lConfigNormal->m_start = lNext;
            }
            else {
                lPrevious->m_next = lNext;
            }
            GConfigNormal_Remove_Node(lNode);
            break;
        }
        lPrevious = lNode;
        lNode = lNode->m_next;
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration-Vider la liste de données"><a class="Link9" href="#Gestionnaire de configuration">Vider la liste de données</a></h2><br><h3 class="Title8 GTitle3">Vider la liste de données</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
void GProcessConfig_Run(int argc, char** argv) {
	GConfig()->Set_Data("Nom", "KESSE");
	GConfig()->Set_Data("Prenom", "Gerard");
	GConfig()->Set_Data("Email", "gerard.kesse@readydev.com");
	GConfig()->Set_Data("Diplome", "Ingenieur");
	GConfig()->Set_Data("Formation", "Informatique Industrielle");
	GConfig()->Set_Data("Ecole", "Polytech'Montpellier");
	GConfig()->Show();
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Gestionnaire de configuration-Résultat"><a class="Link9" href="#Gestionnaire de configuration">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Config.png" alt="img/Config.png"></div></div></div></div></div><br>