<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre les patrons de conception avec le C</div></a></div></div><div class="Body2 Orange">Le <b>C</b> est un langage de programmation structurelle.<br>Les <b>Patrons de Conception</b> sont des modèles de conception basés sur la programmation orientée objet.<br>Le but de ce tutoriel est de vous apprendre les <b>Patrons de Conception</b> avec le <b>C</b>.<br>Produit par <b>Gérard KESSE</b>.<br>&nbsp;<br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation sous Windows"><a class="Link3" href="#">Installation sous Windows</a></h1><div class="Body3">Le but de cette section est de vous présenter les différents outils nécessaires pour apprendre les <span class="GColor1" style="color:lime;">Patrons de Conception</span> avec le <span class="GColor1" style="color:lime;">C</span>, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>Dans ce tutoriel, nous utiliserons, sous Windows:<br>-    MinGW, comme compilateur.<br>-    Notepad++, comme éditeur de texte.<br>- Eclipse, comme environnement de développement intégré.<br>- Java JDK, comme machine virtuelle.<br><br><h3 class="Title8 GTitle3">Installer MinGW</h3><a class="Link7 GLink1" style="color:lime;" href="http://mingw.org/">http://mingw.org/</a><br><br><h3 class="Title8 GTitle3">Installer Notepad++</h3><a class="Link7 GLink1" style="color:lime;" href="https://notepad-plus-plus.org/fr/">https://notepad-plus-plus.org/fr/</a><br><br><h3 class="Title8 GTitle3">Installer Eclipse</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.eclipse.org/downloads/packages/release">https://www.eclipse.org/downloads/packages/release</a><br><br><h3 class="Title8 GTitle3">Installer Java JDK</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.oracle.com/technetwork/java/javase/archive-139210.html">https://www.oracle.com/technetwork/java/javase/archive-139210.html</a><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Classe"><a class="Link3" href="#">Classe</a></h1><div class="Body3">Le but de cette section est de vous apprendre à créer une <span class="GColor1" style="color:lime;">Classe </span>avec le C.<br>Produit par <b>Gérard KESSE</b>.<br><br>Une Classe permet de regrouper l'ensemble méthodes et attributs dans une même structure.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1551223722502"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1551223722502");</script></div><br><h2 class="Title7 GTitle2" id="Classe-Classe"><a class="Link9" href="#Classe">Classe</a></h2><br><h3 class="Title8 GTitle3">Classe (GPerson.h)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GPerson_
#define _GPerson_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct _GPersonO GPersonO;
//===============================================
struct _GPersonO {
    void (*Delete)(GPersonO* obj);
    void (*Set_Name)(GPersonO* obj, const char* name);
    void (*Print)(GPersonO* obj);
    char* m_name;
};
//===============================================
GPersonO* GPerson_New();
void GPerson_Delete(GPersonO* obj);
//===============================================
#endif
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Classe (GPerson.c)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GPerson.h"
#include "GString.h"
//===============================================
void GPerson_Set_Name(GPersonO* obj, const char* name);
void GPerson_Print(GPersonO* obj);
//===============================================
GPersonO* GPerson_New() {
    GPersonO* lObj = (GPersonO*)malloc(sizeof(GPersonO));
    lObj->Delete = GPerson_Delete;
    lObj->Set_Name = GPerson_Set_Name;
    lObj->Print = GPerson_Print;
    lObj->m_name = 0;
    return lObj;
}
//===============================================
void GPerson_Delete(GPersonO* obj) {
    if(obj != 0) {
        if(obj->m_name != 0) {
            free(obj->m_name);
            obj->m_name = 0;
        }
        free(obj);
        obj = 0;
    }
}
//===============================================
void GPerson_Set_Name(GPersonO* obj, const char* name) {
	GString()->Free(obj->m_name);
	obj->m_name = GString()->Copy(name);
}
//===============================================
void GPerson_Print(GPersonO* obj) {
	printf("Je suis une persone: %s\n", obj->m_name);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Classe-Programme de Test"><a class="Link9" href="#Classe">Programme de Test</a></h2><br><h3 class="Title8 GTitle3">Programme de Test</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessClass_Run(int argc, char** argv) {
	GPersonO* lPerson = GPerson_New();
	lPerson->Set_Name(lPerson, "Gerard KESSE");
	lPerson->Print(lPerson);
	lPerson->Set_Name(lPerson, "Deborah YOBOUE");
	lPerson->Print(lPerson);
	lPerson->Delete(lPerson);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Classe-Résultat"><a class="Link9" href="#Classe">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Classe.png" alt="img/Classe.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Héritage de classe"><a class="Link3" href="#">Héritage de classe</a></h1><div class="Body3">Le but de cette section est de vous apprendre l'<span class="GColor1" style="color:lime;">Héritage de classe</span> avec le C.<br>Produit par <b>Gérard KESSE</b>.<br><br>L'Héritage de classe permet à une classe mère de partager ses méthodes et ses attributs avec une classe fille.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1551225180102"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1551225180102");</script></div><br><h2 class="Title7 GTitle2" id="Héritage de classe-Classe mère"><a class="Link9" href="#Héritage de classe">Classe mère</a></h2><br><h3 class="Title8 GTitle3">Classe mère (GAnimal.h)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GAnimal_
#define _GAnimal_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct _GAnimalO GAnimalO;
//===============================================
struct _GAnimalO {
    void (*Delete)(GAnimalO* obj);
    void (*Set_Name)(GAnimalO* obj, const char* name);
    void (*Show_Name)(GAnimalO* obj);
    char* m_name;
};
//===============================================
GAnimalO* GAnimal_New();
void GAnimal_Delete(GAnimalO* obj);
//===============================================
#endif
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Classe mère (GAnimal.c)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GAnimal.h"
#include "GString.h"
//===============================================
void GAnimal_Set_Name(GAnimalO* obj, const char* name);
void GAnimal_Show_Name(GAnimalO* obj);
//===============================================
GAnimalO* GAnimal_New() {
    GAnimalO* lObj = (GAnimalO*)malloc(sizeof(GAnimalO));
    lObj->Delete = GAnimal_Delete;
    lObj->Set_Name = GAnimal_Set_Name;
    lObj->Show_Name = GAnimal_Show_Name;
    lObj->m_name = 0;
    return lObj;
}
//===============================================
void GAnimal_Delete(GAnimalO* obj) {
    if(obj != 0) {
    	if(obj->m_name != 0) {
            free(obj->m_name);
            obj->m_name = 0;
        }
        free(obj);
        obj = 0;
    }
}
//===============================================
void GAnimal_Set_Name(GAnimalO* obj, const char* name) {
	GString()->Free(obj->m_name);
	obj->m_name = GString()->Copy(name);
}
//===============================================
void GAnimal_Show_Name(GAnimalO* obj) {
	printf("Je suis un animal: %s\n", obj->m_name);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Héritage de classe-Classe fille"><a class="Link9" href="#Héritage de classe">Classe fille</a></h2><br><h3 class="Title8 GTitle3">Classe fille (GAnimalCat.h)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GAnimalCat_
#define _GAnimalCat_
//===============================================
#include "GAnimal.h"
//===============================================
typedef struct _GAnimalCatO GAnimalCatO;
//===============================================
struct _GAnimalCatO {
	void* m_parent;
    void (*Delete)(GAnimalCatO* obj);
    void (*Set_Name)(GAnimalCatO* obj, const char* name);
    void (*Show_Name)(GAnimalCatO* obj);
    void (*Set_Breed)(GAnimalCatO* obj, const char* breed);
    void (*Print)(GAnimalCatO* obj);
    char* m_breed;
};
//===============================================
GAnimalCatO* GAnimalCat_New();
void GAnimalCat_Delete(GAnimalCatO* obj);
//===============================================
#endif
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Classe fille (GAnimalCat.c)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GAnimalCat.h"
#include "GString.h"
//===============================================
void GAnimalCat_Set_Name(GAnimalCatO* obj, const char* name);
void GAnimalCat_Show_Name(GAnimalCatO* obj);
void GAnimalCat_Set_Breed(GAnimalCatO* obj, const char* breed);
void GAnimalCat_Print(GAnimalCatO* obj);
//===============================================
GAnimalCatO* GAnimalCat_New() {
	GAnimalO* lParent = GAnimal_New();
    GAnimalCatO* lChild = (GAnimalCatO*)malloc(sizeof(GAnimalCatO));

    lChild->m_parent = lParent;
    lChild->Delete = GAnimalCat_Delete;
    lChild->Set_Name = GAnimalCat_Set_Name;
    lChild->Show_Name = GAnimalCat_Show_Name;
    lChild->Set_Breed = GAnimalCat_Set_Breed;
    lChild->Print = GAnimalCat_Print;
    return lChild;
}
//===============================================
void GAnimalCat_Delete(GAnimalCatO* obj) {
    if(obj != 0) {
    	GAnimalO* lParent = obj->m_parent;
    	lParent->Delete(lParent);
        free(obj);
        obj = 0;
    }
}
//===============================================
void GAnimalCat_Set_Name(GAnimalCatO* obj, const char* name) {
	GAnimalO* lParent = obj->m_parent;
	lParent->Set_Name(lParent, name);
}
//===============================================
void GAnimalCat_Show_Name(GAnimalCatO* obj) {
	GAnimalO* lParent = obj->m_parent;
	lParent->Show_Name(lParent);
}
//===============================================
void GAnimalCat_Set_Breed(GAnimalCatO* obj, const char* breed) {
	GString()->Free(obj->m_breed);
	obj->m_breed = GString()->Copy(breed);
}
//===============================================
void GAnimalCat_Print(GAnimalCatO* obj) {
	GAnimalO* lParent = obj->m_parent;
	printf("Je suis un chat: %s | %s\n", obj->m_breed, lParent->m_name);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Héritage de classe-Programme de Test"><a class="Link9" href="#Héritage de classe">Programme de Test</a></h2><br><h3 class="Title8 GTitle3">Programme de Test</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessInheritance_Run(int argc, char** argv) {
	GAnimalO* lAnimal = GAnimal_New();
	lAnimal->Set_Name(lAnimal, "JERRY");
	lAnimal->Show_Name(lAnimal);
	lAnimal->Delete(lAnimal);

	GAnimalCatO* lCat = GAnimalCat_New();
	lCat->Set_Name(lCat, "TOM");
	lCat->Set_Breed(lCat, "Siamois");
	lCat->Show_Name(lCat);
	lCat->Print(lCat);
	lCat->Delete(lCat);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Héritage de classe-Résultat"><a class="Link9" href="#Héritage de classe">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Heritage_Classe.png" alt="img/Heritage_Classe.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Polymorphisme"><a class="Link3" href="#">Polymorphisme</a></h1><div class="Body3">Le but de cette section est de vous apprendre le <span class="GColor1" style="color:lime;">Polymorphisme </span>avec le C.<br>Produit par <b>Gérard KESSE</b>.<br><br>Le Polymorphisme permet à une classe mère de prendre plusieurs formes, selon la classe fille pointée.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1551856598097"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1551856598097");</script></div><br><h2 class="Title7 GTitle2" id="Polymorphisme-Classe mère"><a class="Link9" href="#Polymorphisme">Classe mère</a></h2><br><h3 class="Title8 GTitle3">Classe mère (GAircraft.h)<br></h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GAircraft_
#define _GAircraft_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct _GAircraftO GAircraftO;
//===============================================
struct _GAircraftO {
	void* m_child;
    void (*Delete)(GAircraftO* obj);
    void (*Set_Name)(GAircraftO* obj, const char* name);
    void (*Set_Model)(GAircraftO* obj, const char* model);
    void (*Print)(GAircraftO* obj);
    char* m_name;
};
//===============================================
GAircraftO* GAircraft_New();
void GAircraft_Delete(GAircraftO* obj);
//===============================================
#endif
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Classe mère (GAircraft.c)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GAircraft.h"
#include "GString.h"
//===============================================
void GAircraft_Set_Name(GAircraftO* obj, const char* name);
void GAircraft_Print(GAircraftO* obj);
//===============================================
GAircraftO* GAircraft_New() {
    GAircraftO* lObj = (GAircraftO*)malloc(sizeof(GAircraftO));
    lObj->m_child = 0;
    lObj->Delete = GAircraft_Delete;
    lObj->Set_Name = GAircraft_Set_Name;
    lObj->Print = GAircraft_Print;
    lObj->m_name = 0;
    return lObj;
}
//===============================================
void GAircraft_Delete(GAircraftO* obj) {
    if(obj != 0) {
    	if(obj->m_child != 0) {
            free(obj->m_child);
            obj->m_child = 0;
        }
    	if(obj->m_name != 0) {
            free(obj->m_name);
            obj->m_name = 0;
        }
        free(obj);
        obj = 0;
    }
}
//===============================================
void GAircraft_Set_Name(GAircraftO* obj, const char* name) {
	GString()->Free(obj->m_name);
	obj->m_name = GString()->Copy(name);
}
//===============================================
void GAircraft_Print(GAircraftO* obj) {
	printf("Je suis un avion: %s\n", obj->m_name);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Polymorphisme-Classe fille"><a class="Link9" href="#Polymorphisme">Classe fille</a></h2><br><h3 class="Title8 GTitle3">Classe fille (GAircraftAirbus.h)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GAircraftAirbus_
#define _GAircraftAirbus_
//===============================================
#include "GAircraft.h"
//===============================================
typedef struct _GAircraftAirbusO GAircraftAirbusO;
//===============================================
struct _GAircraftAirbusO {
	void* m_parent;
	char* m_model;
};
//===============================================
GAircraftO* GAircraftAirbus_New();
void GAircraftAirbus_Delete(GAircraftO* obj);
//===============================================
#endif
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Classe fille (GAircraftAirbus.c)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GAircraftAirbus.h"
#include "GString.h"
//===============================================
void GAircraftAirbus_Set_Model(GAircraftO* obj, const char* model);
void GAircraftAirbus_Print(GAircraftO* obj);
//===============================================
GAircraftO* GAircraftAirbus_New() {
	GAircraftO* lParent = GAircraft_New();
    GAircraftAirbusO* lChild = (GAircraftAirbusO*)malloc(sizeof(GAircraftAirbusO));

    lChild->m_parent = lParent;
    lChild->m_model = 0;

    lParent->m_child = lChild;
    lParent->Delete = GAircraftAirbus_Delete;
    lParent->Set_Model = GAircraftAirbus_Set_Model;
    lParent->Print = GAircraftAirbus_Print;
    return lParent;
}
//===============================================
void GAircraftAirbus_Delete(GAircraftO* obj) {
	GAircraft_Delete(obj);
}
//===============================================
void GAircraftAirbus_Set_Model(GAircraftO* obj, const char* model) {
	GAircraftAirbusO* lAircraft = obj->m_child;
	GString()->Free(lAircraft->m_model);
	lAircraft->m_model = GString()->Copy(model);
}
//===============================================
void GAircraftAirbus_Print(GAircraftO* obj) {
	GAircraftAirbusO* lAircraft = obj->m_child;
	printf("Je suis un avion Airbus:  %s | %s\n", obj->m_name, lAircraft->m_model);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Polymorphisme-Programme de Test"><a class="Link9" href="#Polymorphisme">Programme de Test</a></h2><br><h3 class="Title8 GTitle3">Programme de Test</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessPolymorphism_Run(int argc, char** argv) {
	GAircraftO* lAircraft = 0;

	lAircraft = GAircraft_New();
	lAircraft->Set_Name(lAircraft, "BOEING");
	lAircraft->Print(lAircraft);
	lAircraft->Delete(lAircraft);

	lAircraft = GAircraftAirbus_New();
	lAircraft->Set_Name(lAircraft, "AIRBUS");
	lAircraft->Set_Model(lAircraft, "AIRBUS 380");
	lAircraft->Print(lAircraft);
	lAircraft->Delete(lAircraft);
}
//===============================================</xmp><br></pre></div><h2 class="Title7 GTitle2" id="Polymorphisme-Résultat"><a class="Link9" href="#Polymorphisme">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Polymorphisme.png" alt="img/Polymorphisme.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Patron Singleton"><a class="Link3" href="#">Patron Singleton</a></h1><div class="Body3">Le but de cette section est de vous apprendre le <span class="GColor1" style="color:lime;">Patron Singleton </span>avec le C.<br>Produit par <b>Gérard KESSE</b>.<br><br>Le Patron Singleton permet de créer une seule instance d'une classe.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1551868174302"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1551868174302");</script></div><br><h2 class="Title7 GTitle2" id="Patron Singleton-Patron Singleton"><a class="Link9" href="#Patron Singleton">Patron Singleton</a></h2><br><h3 class="Title8 GTitle3">Patron Singleton (GSingleton.h)<br></h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GSingleton_
#define _GSingleton_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct _GSingletonO GSingletonO;
//===============================================
struct _GSingletonO {
    void (*Delete)();
    void (*Set_Name)(const char* name);
    void (*Print)();
    char* m_name;
};
//===============================================
GSingletonO* GSingleton_New();
void GSingleton_Delete();
GSingletonO* GSingleton();
//===============================================
#endif
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Patron Singleton (GSingleton.c)<br></h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GSingleton.h"
#include "GString.h"
//===============================================
static GSingletonO* m_GSingletonO = 0;
//===============================================
void GSingleton_Set_Name(const char* name);
void GSingleton_Print();
//===============================================
GSingletonO* GSingleton_New() {
    GSingletonO* lObj = (GSingletonO*)malloc(sizeof(GSingletonO));
    lObj->Delete = GSingleton_Delete;
    lObj->Set_Name = GSingleton_Set_Name;
    lObj->Print = GSingleton_Print;
    lObj->m_name = 0;
    return lObj;
}
//===============================================
void GSingleton_Delete() {
    if(m_GSingletonO != 0) {
    	if(m_GSingletonO->m_name != 0) {
            free(m_GSingletonO->m_name);
            m_GSingletonO->m_name = 0;
        }
        free(m_GSingletonO);
        m_GSingletonO = 0;
    }
}
//===============================================
GSingletonO* GSingleton() {
    if(m_GSingletonO == 0) {
        m_GSingletonO = GSingleton_New();
    }
    return m_GSingletonO;
}
//===============================================
void GSingleton_Set_Name(const char* name) {
	GString()->Free(m_GSingletonO->m_name);
	m_GSingletonO->m_name = GString()->Copy(name);
}
//===============================================
void GSingleton_Print() {
	printf("Je suis un singleton: %s\n", m_GSingletonO->m_name);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Patron Singleton-Programme de Test"><a class="Link9" href="#Patron Singleton">Programme de Test</a></h2><br><h3 class="Title8 GTitle3">Programme de Test</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessSingleton_Run(int argc, char** argv) {
	GSingleton()->Set_Name("JAVA");
	GSingleton()->Print();
	GSingleton()->Set_Name("PYTHON");
	GSingleton()->Print();
	GSingleton()->Delete();
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Patron Singleton-Résultat"><a class="Link9" href="#Patron Singleton">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Singleton.png" alt="img/Singleton.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Patron Stratégie"><a class="Link3" href="#">Patron Stratégie</a></h1><div class="Body3">Le but de cette section est de vous apprendre le <span class="GColor1" style="color:lime;">Patron Stratégie </span>avec le C.<br>Produit par <b>Gérard KESSE</b>.<br><br>Le Patron Stratégie permet de changer dynamiquement d'algorithme.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1551872862538"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1551872862538");</script></div><br><h2 class="Title7 GTitle2" id="Patron Stratégie-Stratégie "><a class="Link9" href="#Patron Stratégie">Stratégie </a></h2><br><h3 class="Title8 GTitle3">Stratégie (GStrategy.h)<br></h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GStrategy_
#define _GStrategy_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct _GStrategyO GStrategyO;
//===============================================
struct _GStrategyO {
	void* m_child;
    void (*Delete)(GStrategyO* obj);
    void (*Set_Name)(GStrategyO* obj, const char* name);
    void (*Print)(GStrategyO* obj);
};
//===============================================
GStrategyO* GStrategy_New();
void GStrategy_Delete(GStrategyO* obj);
GStrategyO* GStrategy(const char* key);
//===============================================
#endif
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Stratégie (GStrategy.c)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GStrategy.h"
#include "GStrategyJava.h"
#include "GStrategyPython.h"
#include "GString.h"
//===============================================
GStrategyO* GStrategy_New() {
    GStrategyO* lObj = (GStrategyO*)malloc(sizeof(GStrategyO));
    lObj->m_child = 0;
    lObj->Delete = GStrategy_Delete;
    return lObj;
}
//===============================================
void GStrategy_Delete(GStrategyO* obj) {
    if(obj != 0) {
    	if(obj->m_child != 0) {
            free(obj->m_child);
            obj->m_child = 0;
        }
        free(obj);
        obj = 0;
    }
}
//===============================================
GStrategyO* GStrategy(const char* key) {
    if(GString()->Is_Equal(key, "JAVA")) return GStrategyJava_New();
    if(GString()->Is_Equal(key, "PYTHON")) return GStrategyPython_New();
    return GStrategyJava_New();
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Patron Stratégie-Stratégie Java "><a class="Link9" href="#Patron Stratégie">Stratégie Java</a></h2><br><h3 class="Title8 GTitle3">Stratégie Java (GStrategyJava.h) </h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GStrategyJava_
#define _GStrategyJava_
//===============================================
#include "GStrategy.h"
//===============================================
typedef struct _GStrategyJavaO GStrategyJavaO;
//===============================================
struct _GStrategyJavaO {
	void* m_parent;
	char* m_name;
};
//===============================================
GStrategyO* GStrategyJava_New();
void GStrategyJava_Delete(GStrategyO* obj);
//===============================================
#endif
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Stratégie Java (GStrategyJava.c)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GStrategyJava.h"
#include "GString.h"
//===============================================
void GStrategyJava_Set_Name(GStrategyO* obj, const char* name);
void GStrategyJava_Print(GStrategyO* obj);
//===============================================
GStrategyO* GStrategyJava_New() {
	GStrategyO* lParent = GStrategy_New();
    GStrategyJavaO* lChild = (GStrategyJavaO*)malloc(sizeof(GStrategyJavaO));

    lChild->m_parent = lParent;
    lChild->m_name = 0;

    lParent->m_child = lChild;
    lParent->Delete = GStrategyJava_Delete;
    lParent->Set_Name = GStrategyJava_Set_Name;
    lParent->Print = GStrategyJava_Print;
    return lParent;
}
//===============================================
void GStrategyJava_Delete(GStrategyO* obj) {
	GStrategyJavaO* lStrategy = obj->m_child;
	GString()->Free(lStrategy->m_name);
	GStrategy_Delete(obj);
}
//===============================================
void GStrategyJava_Set_Name(GStrategyO* obj, const char* name) {
	GStrategyJavaO* lStrategy = obj->m_child;
	GString()->Free(lStrategy->m_name);
	lStrategy->m_name = GString()->Copy(name);
}
//===============================================
void GStrategyJava_Print(GStrategyO* obj) {
	GStrategyJavaO* lStrategy = obj->m_child;
	printf("Je suis une strategie JAVA : %s\n", lStrategy->m_name);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Patron Stratégie-Stratégie Python"><a class="Link9" href="#Patron Stratégie">Stratégie Python</a></h2><br><h3 class="Title8 GTitle3">Stratégie Python (GStrategyPython.h)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GStrategyPython_
#define _GStrategyPython_
//===============================================
#include "GStrategy.h"
//===============================================
typedef struct _GStrategyPythonO GStrategyPythonO;
//===============================================
struct _GStrategyPythonO {
	void* m_parent;
	char* m_name;
};
//===============================================
GStrategyO* GStrategyPython_New();
void GStrategyPython_Delete(GStrategyO* obj);
//===============================================
#endif
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Stratégie Python (GStrategyPython.c)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GStrategyPython.h"
#include "GString.h"
//===============================================
void GStrategyPython_Set_Name(GStrategyO* obj, const char* name);
void GStrategyPython_Print(GStrategyO* obj);
//===============================================
GStrategyO* GStrategyPython_New() {
	GStrategyO* lParent = GStrategy_New();
    GStrategyPythonO* lChild = (GStrategyPythonO*)malloc(sizeof(GStrategyPythonO));

    lChild->m_parent = lParent;
    lChild->m_name = 0;

    lParent->m_child = lChild;
    lParent->Delete = GStrategyPython_Delete;
    lParent->Set_Name = GStrategyPython_Set_Name;
    lParent->Print = GStrategyPython_Print;
    return lParent;
}
//===============================================
void GStrategyPython_Delete(GStrategyO* obj) {
	GStrategyPythonO* lStrategy = obj->m_child;
	GString()->Free(lStrategy->m_name);
	GStrategy_Delete(obj);
}
//===============================================
void GStrategyPython_Set_Name(GStrategyO* obj, const char* name) {
	GStrategyPythonO* lStrategy = obj->m_child;
	GString()->Free(lStrategy->m_name);
	lStrategy->m_name = GString()->Copy(name);
}
//===============================================
void GStrategyPython_Print(GStrategyO* obj) {
	GStrategyPythonO* lStrategy = obj->m_child;
	printf("Je suis une strategie PYTHON : %s\n", lStrategy->m_name);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Patron Stratégie-Programme de Test"><a class="Link9" href="#Patron Stratégie">Programme de Test</a></h2><br><h3 class="Title8 GTitle3">Programme de Test</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessStrategy_Run(int argc, char** argv) {
	GStrategyO* lStrategy = 0;

	lStrategy = GStrategy("JAVA");
	lStrategy->Set_Name(lStrategy, "JavaStrategy");
	lStrategy->Print(lStrategy);

	lStrategy = GStrategy("PYTHON");
	lStrategy->Set_Name(lStrategy, "PythonStrategy");
	lStrategy->Print(lStrategy);

	lStrategy->Delete(lStrategy);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Patron Stratégie-Résultat"><a class="Link9" href="#Patron Stratégie">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Strategie.png" alt="img/Strategie.png"></div></div></div></div></div><br>