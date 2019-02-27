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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Classe-Résultat"><a class="Link9" href="#Classe">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Classe.png" alt="img/Classe.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Héritage de classe"><a class="Link3" href="#">Héritage de classe</a></h1><div class="Body3">Le but de cette section est de vous apprendre à l'<span class="GColor1" style="color:lime;">Héritage de classe</span> avec le C.<br>Produit par <b>Gérard KESSE</b>.<br><br>L'Héritage de classe permet à une classe fille de bénéficier des méthodes et des attributs de la classe parente.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1551225180102"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1551225180102");</script></div><br><h2 class="Title7 GTitle2" id="Héritage de classe-Classe mère"><a class="Link9" href="#Héritage de classe">Classe mère</a></h2><br><h3 class="Title8 GTitle3">Classe mère (GAnimal.h)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Héritage de classe-Résultat"><a class="Link9" href="#Héritage de classe">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Heritage_Classe.png" alt="img/Heritage_Classe.png"></div></div></div></div></div><br>