<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre les patrons de conception avec le C++</div></a></div></div><div class="Body2 Orange">Le <b>C++</b> est un langage de programmation orientée objet.<br>Les <b>Patrons de Conception</b> sont des modèles de conception basés sur la programmation orientée objet.<br>Le but de ce tutoriel est de vous apprendre les <b>Patrons de Conception</b> avec le <b>C++</b>.<br>Produit par <b>Gérard KESSE</b>.<br>&nbsp;<br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation sous Windows"><a class="Link3" href="#">Installation sous Windows</a></h1><div class="Body3">Le but de cette section est de vous présenter les différents outils nécessaires pour apprendre les <span class="GColor1" style="color:lime;">Patrons de Conception</span> avec le <span class="GColor1" style="color:lime;">C++</span>, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>Dans ce tutoriel, nous utiliserons, sous Windows:<br>-    MinGW, comme compilateur.<br>-    Notepad++, comme éditeur de texte.<br><br><h3 class="Title8 GTitle3">Télécharger MinGW</h3><a class="Link7 GLink1" style="color:lime;" href="http://mingw.org/">http://mingw.org/</a><br><br><h3 class="Title8 GTitle3">Télécharger Notepad++</h3><a class="Link7 GLink1" style="color:lime;" href="https://notepad-plus-plus.org/fr/">https://notepad-plus-plus.org/fr/</a></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Patron Singleton"><a class="Link3" href="#">Patron Singleton</a></h1><div class="Body3">Le but de cette section est de vous apprendre à implémenter le <span class="GColor1" style="color:lime;">Patron Singleton</span> avec le C++.<br>Produit par <b>Gérard KESSE</b>.<br><br>Le Patron Singleton permet de restreindre l'instanciation d'une classe à un seul objet.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1536435524901"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1536435524901");</script></div><br><h2 class="Title7 GTitle2" id="Patron Singleton-Programme principal"><a class="Link9" href="#Patron Singleton">Programme principal</a></h2><br><h3 class="Title8 GTitle3">Programme principal (main.cpp)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GSingleton.h"
//===============================================
int main(int argc, char** argv) {
    cout << "\n### Patron Singleton\n\n";
    string lData;
    GSingleton::Instance()->showData();
    lData = GSingleton::Instance()->getData();
    cout << "Lecture: " << lData << "\n";
    GSingleton::Instance()->setData("Bonjour tout le monde");
    GSingleton::Instance()->showData();
    lData = GSingleton::Instance()->getData();
    cout << "Lecture: " << lData << "\n";
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Patron Singleton-Singleton"><a class="Link9" href="#Patron Singleton">Singleton</a></h2><br><h3 class="Title8 GTitle3">Déclarer le singleton (GSingleton.h)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GSingleton_
#define _GSingleton_
//===============================================
#include <iostream>
#include <string>
//===============================================
using namespace std;
//===============================================
class GSingleton {
private:
    GSingleton();
    
public:
    ~GSingleton();
    
public:
    static GSingleton* Instance();
    void setData(const string& data);
    string getData();
    void showData();
    
private:
    static GSingleton* m_instance;
    string m_data;
};
//===============================================
#endif
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Définir le singleton (GSingleton.cpp)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GSingleton.h"
//===============================================
GSingleton* GSingleton::m_instance = 0;
//===============================================
GSingleton::GSingleton() {
    m_data = "_NONE_";
}
//===============================================
GSingleton::~GSingleton() {
    
}
//===============================================
GSingleton* GSingleton::Instance() {
    if(m_instance == 0) {
        m_instance = new GSingleton;
    }
    return m_instance;
} 
//===============================================
void GSingleton::setData(const string& data) {
    m_data = data;
} 
//===============================================
string GSingleton::getData() {
    return m_data;
} 
//===============================================
void GSingleton::showData() {
    cout << "Donnee: " << m_data << "\n";
} 
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Patron Singleton-Résultat"><a class="Link9" href="#Patron Singleton">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Singleton.png" alt="img/Singleton.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Patron Stratégie"><a class="Link3" href="#">Patron Stratégie</a></h1><div class="Body3">Le but de cette section est de vous apprendre à implémenter le <span class="GColor1" style="color:lime;">Patron Stratégie</span> avec le C++.<br>Produit par <b>Gérard KESSE</b>.<br><br>Le Patron Stratégie permet de sélectionner dynamiquement des algorithmes.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1536435973813"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1536435973813");</script></div><br><h2 class="Title7 GTitle2" id="Patron Stratégie-Programme principal"><a class="Link9" href="#Patron Stratégie">Programme principal</a></h2><br><h3 class="Title8 GTitle3">Programme principal (main.cpp)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GDatabase.h"
#include "GConfig.h"
//===============================================
int main(int argc, char** argv) {
    cout << "\n### Patron Strategie\n\n";
    GConfig::Instance()->setData("DATABASE", "SQLITE");
    GDatabase::Instance()->open();
    GConfig::Instance()->setData("DATABASE", "MYSQL");
    GDatabase::Instance()->open();
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Patron Stratégie-Gestionnaire de configuration"><a class="Link9" href="#Patron Stratégie">Gestionnaire de configuration</a></h2><br><h3 class="Title8 GTitle3">Déclarer le gestionnaire de configuration (GConfig.h)<br></h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GConfig_
#define _GConfig_
//===============================================
#include <iostream>
#include <string>
#include <map>
//===============================================
using namespace std;
//===============================================
class GConfig {
private:
    GConfig();
    
public:
    ~GConfig();
    
public:
    static GConfig* Instance();
    void setData(const string& key, const string& value);
    string getData(const string& key);
    
private:
    static GConfig* m_instance;
    map<string, string> m_dataMap;
};
//===============================================
#endif
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Définir le gestionnaire de configuration (GConfig.cpp)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GConfig.h"
//===============================================
GConfig* GConfig::m_instance = 0;
//===============================================
GConfig::GConfig() {

}
//===============================================
GConfig::~GConfig() {
    
}
//===============================================
GConfig* GConfig::Instance() {
    if(m_instance == 0) {
        m_instance = new GConfig;
    }
    return m_instance;
} 
//===============================================
void GConfig::setData(const string& key, const string& value) {
    m_dataMap[key] = value;
} 
//===============================================
string GConfig::getData(const string& key) {
    return m_dataMap[key];
} 
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Patron Stratégie-Gestionnaire de base de données"><a class="Link9" href="#Patron Stratégie">Gestionnaire de base de données</a></h2><br><h3 class="Title8 GTitle3">Déclarer le gestionnaire de base de données (GDatabase.h)<br></h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GDatabase_
#define _GDatabase_
//===============================================
#include <iostream>
#include <string>
//===============================================
using namespace std;
//===============================================
class GDatabase {
public:
    GDatabase();
    virtual ~GDatabase();
    
public:
    static GDatabase* Instance();
    virtual void open() = 0;
    
private:
    static GDatabase* m_instance;
};
//===============================================
#endif
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Définir le gestionnaire de base de données (GDatabase.cpp)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GDatabase.h"
#include "GDatabaseSQLite.h"
#include "GDatabaseMySQL.h"
#include "GConfig.h"
//===============================================
GDatabase* GDatabase::m_instance = 0;
//===============================================
GDatabase::GDatabase() {

}
//===============================================
GDatabase::~GDatabase() {
    
}
//===============================================
GDatabase* GDatabase::Instance() {
    string lDatabase = GConfig::Instance()->getData("DATABASE");
    if(lDatabase == "SQLITE") return GDatabaseSQLite::Instance();
    if(lDatabase == "MYSQL") return GDatabaseMySQL::Instance();
    return GDatabaseSQLite::Instance();
} 
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Patron Stratégie-Gestionnaire de base de données SQLite"><a class="Link9" href="#Patron Stratégie">Gestionnaire de base de données SQLite</a></h2><br><h3 class="Title8 GTitle3">Déclarer le gestionnaire de base de données SQLite (GDatabaseSQLite.h)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GDatabaseSQLite_
#define _GDatabaseSQLite_
//===============================================
#include "GDatabase.h"
//===============================================
class GDatabaseSQLite : public GDatabase {
public:
    GDatabaseSQLite();
    ~GDatabaseSQLite();
    
public:
    static GDatabaseSQLite* Instance();
    void open();
    
private:
    static GDatabaseSQLite* m_instance;
};
//===============================================
#endif
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Définir le gestionnaire de base de données SQLite (GDatabaseSQLite.cpp)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GDatabaseSQLite.h"
//===============================================
GDatabaseSQLite* GDatabaseSQLite::m_instance = 0;
//===============================================
GDatabaseSQLite::GDatabaseSQLite() {

}
//===============================================
GDatabaseSQLite::~GDatabaseSQLite() {
    
}
//===============================================
GDatabaseSQLite* GDatabaseSQLite::Instance() {
    if(m_instance == 0) {
        m_instance = new GDatabaseSQLite;
    }
    return m_instance;
} 
//===============================================
void GDatabaseSQLite::open() {
    cout << "Ouvrir la base de donnee SQLite\n";
} 
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Patron Stratégie-Gestionnaire de base de données MySQL"><a class="Link9" href="#Patron Stratégie">Gestionnaire de base de données MySQL</a></h2><br><h3 class="Title8 GTitle3">Déclarer le gestionnaire de base de données MySQL (GDatabaseMySQL.h)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GDatabaseMySQL_
#define _GDatabaseMySQL_
//===============================================
#include "GDatabase.h"
//===============================================
class GDatabaseMySQL : public GDatabase {
public:
    GDatabaseMySQL();
    ~GDatabaseMySQL();
    
public:
    static GDatabaseMySQL* Instance();
    void open();
    
private:
    static GDatabaseMySQL* m_instance;
};
//===============================================
#endif
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Définir le gestionnaire de base de données MySQL (GDatabaseMySQL.cpp)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GDatabaseMySQL.h"
//===============================================
GDatabaseMySQL* GDatabaseMySQL::m_instance = 0;
//===============================================
GDatabaseMySQL::GDatabaseMySQL() {

}
//===============================================
GDatabaseMySQL::~GDatabaseMySQL() {
    
}
//===============================================
GDatabaseMySQL* GDatabaseMySQL::Instance() {
    if(m_instance == 0) {
        m_instance = new GDatabaseMySQL;
    }
    return m_instance;
} 
//===============================================
void GDatabaseMySQL::open() {
    cout << "Ouvrir la base de donnee MySQL\n";
} 
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Patron Stratégie-Résultat"><a class="Link9" href="#Patron Stratégie">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Strategie.png" alt="img/Strategie.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Patron Pont"><a class="Link3" href="#">Patron Pont</a></h1><div class="Body3">Le but de cette section est de vous apprendre à implémenter le <span class="GColor1" style="color:lime;">Patron Pont</span> avec le C++.<br>Produit par <b>Gérard KESSE</b>.<br><br>Le Patron Pont permet de découpler l'interface d'une classe et son implémentation.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1537177895470"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1537177895470");</script></div><br><h2 class="Title7 GTitle2" id="Patron Pont-Programme principal"><a class="Link9" href="#Patron Pont">Programme principal</a></h2><br><h3 class="Title8 GTitle3">Programme principal (main.cpp)<br></h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GShape.h"
#include "GDraw.h"
#include "GConfig.h"
//===============================================
int main(int argc, char** argv) {
    cout << "\n### Patron Pont\n\n";
    GConfig::Instance()->setData("SHAPE", "CIRCLE");
    GConfig::Instance()->setData("DRAW", "NO_FILL");
    GShape::Instance()->setDraw(GDraw::Instance());
    GShape::Instance()->draw();
    
    GConfig::Instance()->setData("SHAPE", "CIRCLE");
    GConfig::Instance()->setData("DRAW", "FILL");
    GShape::Instance()->setDraw(GDraw::Instance());
    GShape::Instance()->draw();
    return 0;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Patron Pont-Gestionnaire de dessin"><a class="Link9" href="#Patron Pont">Gestionnaire de dessin</a></h2><br><h3 class="Title8 GTitle3">Déclarer le gestionnaire de dessin (GDraw.h)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GDraw_
#define _GDraw_
//===============================================
#include <iostream>
#include <string>
//===============================================
using namespace std;
//===============================================
class GDraw {
public:
    GDraw();
    virtual ~GDraw();
    
public:
    static GDraw* Instance();
    virtual void drawCircle() = 0;
};
//===============================================
#endif
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Définir le gestionnaire de dessin (GDraw.cpp)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GDraw.h"
#include "GDrawNoFill.h"
#include "GDrawFill.h"
#include "GConfig.h"
//===============================================
GDraw::GDraw() {

}
//===============================================
GDraw::~GDraw() {
    
}
//===============================================
GDraw* GDraw::Instance() {
    string lDraw = GConfig::Instance()->getData("DRAW");
    if(lDraw == "NO_FILL") return GDrawNoFill::Instance();
    if(lDraw == "FILL") return GDrawFill::Instance();
    return GDrawNoFill::Instance();
} 
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Patron Pont-Gestionnaire de dessin sans remplissage"><a class="Link9" href="#Patron Pont">Gestionnaire de dessin sans remplissage</a></h2><br><h3 class="Title8 GTitle3">Déclarer le gestionnaire de dessin sans remplissage (GDrawNoFill.h)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GDrawNoFill_
#define _GDrawNoFill_
//===============================================
#include "GDraw.h"
//===============================================
class GDrawNoFill : public GDraw {
private:
    GDrawNoFill();
    
public:
    ~GDrawNoFill();
    
public:
    static GDrawNoFill* Instance();
    void drawCircle();
    
private:
    static GDrawNoFill* m_instance;
};
//===============================================
#endif
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Définir le gestionnaire de dessin sans remplissage (GDrawNoFill.cpp)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GDrawNoFill.h"
//===============================================
GDrawNoFill* GDrawNoFill::m_instance = 0;
//===============================================
GDrawNoFill::GDrawNoFill() {

}
//===============================================
GDrawNoFill::~GDrawNoFill() {
    
}
//===============================================
GDrawNoFill* GDrawNoFill::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawNoFill;
    }
    return m_instance;
} 
//===============================================
void GDrawNoFill::drawCircle() {
    cout << "Dessiner un cercle sans remplissage\n";
} 
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Patron Pont-Gestionnaire de dessin avec remplissage"><a class="Link9" href="#Patron Pont">Gestionnaire de dessin avec remplissage</a></h2><br><h3 class="Title8 GTitle3">Déclarer le gestionnaire de dessin avec remplissage (GDrawFill.h)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GDrawFill_
#define _GDrawFill_
//===============================================
#include "GDraw.h"
//===============================================
class GDrawFill : public GDraw {
private:
    GDrawFill();
    
public:
    ~GDrawFill();
    
public:
    static GDrawFill* Instance();
    void drawCircle();
    
private:
    static GDrawFill* m_instance;
};
//===============================================
#endif
//===============================================
</xmp></pre></div><br><h3 class="Title8 GTitle3">Définir le gestionnaire de dessin avec remplissage (GDrawFill.cpp)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GDrawFill.h"
//===============================================
GDrawFill* GDrawFill::m_instance = 0;
//===============================================
GDrawFill::GDrawFill() {

}
//===============================================
GDrawFill::~GDrawFill() {
    
}
//===============================================
GDrawFill* GDrawFill::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawFill;
    }
    return m_instance;
} 
//===============================================
void GDrawFill::drawCircle() {
    cout << "Dessiner un cercle avec remplissage\n";
} 
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Patron Pont-Gestionnaire de forme"><a class="Link9" href="#Patron Pont">Gestionnaire de forme</a></h2><br><br><h2 class="Title7 GTitle2" id="Patron Pont-Gestionnaire de forme cercle"><a class="Link9" href="#Patron Pont">Gestionnaire de forme cercle</a></h2><br><br></div></div></div></div><br>