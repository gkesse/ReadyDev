<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre les patrons de conception avec le C++</div></a></div></div><div class="Body2 Orange">Le <b>C++</b> est un langage de programmation orientée objet.<br>Les <b>Patrons de Conception</b> sont des modèles de conception basés sur la programmation orientée objet.<br>Le but de ce tutoriel est de vous apprendre les <b>Patrons de Conception</b> avec le <b>C++</b>.<br>Produit par <b>Gérard KESSE</b>.<br>&nbsp;<br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation sous Windows"><a class="Link3" href="#">Installation sous Windows</a></h1><div class="Body3">Le but de cette section est de vous présenter les différents outils nécessaires pour apprendre les <span class="GColor1" style="color:lime;">Patrons de Conception</span> avec le <span class="GColor1" style="color:lime;">C++</span>, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>Dans ce tutoriel, nous utiliserons, sous Windows:<br>-    MinGW, comme compilateur.<br>-    Notepad++, comme éditeur de texte.<br><br><h3 class="Title8 GTitle3">Installer MinGW</h3><a class="Link7 GLink1" style="color:lime;" href="http://mingw.org/">http://mingw.org/</a><br><br><h3 class="Title8 GTitle3">Installer Notepad++</h3><a class="Link7 GLink1" style="color:lime;" href="https://notepad-plus-plus.org/fr/">https://notepad-plus-plus.org/fr/</a></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Classe"><a class="Link3" href="#">Classe</a></h1><div class="Body3">Le but de cette section est de vous apprendre à créer une <span class="GColor1" style="color:lime;">Classe </span>avec le C++.<br>Produit par <b>Gérard KESSE</b>.<br><br>Une Classe permet de regrouper l'ensemble méthodes et attributs dans une même structure.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1556782902796"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1556782902796");</script></div><br><h2 class="Title7 GTitle2" id="Classe-Classe"><a class="Link9" href="#Classe">Classe</a></h2><br><h3 class="Title8 GTitle3">Classe (GPerson.h)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//================================================
#ifndef _GPerson_
#define _GPerson_
//================================================
#include "GInclude.h"
//================================================
class GPerson {
public:
    GPerson();
    ~GPerson();

public:
    void setName(const string &name);
    void print() const;

private:
    string m_name;
};
//================================================
#endif
//================================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Classe (GPerson.cpp)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//================================================
#include "GPerson.h"
//================================================
GPerson::GPerson() {

}
//================================================
GPerson::~GPerson() {
	
}
//================================================
void GPerson::setName(const string &name) {
    m_name = name;
}
//================================================
void GPerson::print() const {
    cout &lt;&lt; "Je suis une personne: " &lt;&lt; m_name &lt;&lt; "\n";
}
//================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Classe-Programme de Test"><a class="Link9" href="#Classe">Programme de Test</a></h2><br><h3 class="Title8 GTitle3">Programme de Test</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessClass::run(int argc, char **argv) {
    GPerson* lPerson = new GPerson;
    lPerson-&gt;setName("Gerard KESSE");
    lPerson-&gt;print();
    lPerson-&gt;setName("Deborah YOBOUE");
    lPerson-&gt;print();
    delete lPerson;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Classe-Résultat"><a class="Link9" href="#Classe">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Class.png" alt="img/Class.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Héritage de classe"><a class="Link3" href="#">Héritage de classe</a></h1><div class="Body3">Le but de cette section est de vous apprendre l'<span class="GColor1" style="color:lime;">Héritage de classe</span> avec le C++.<br>Produit par <b>Gérard KESSE</b>.<br><br>L'Héritage de classe permet à une classe mère de partager ses méthodes et ses attributs avec une classe fille.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1556785717057"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1556785717057");</script></div><br><h2 class="Title7 GTitle2" id="Héritage de classe-Classe mère"><a class="Link9" href="#Héritage de classe">Classe mère</a></h2><br><h3 class="Title8 GTitle3">Classe mère (GAnimal.h)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//================================================
#ifndef _GAnimal_
#define _GAnimal_
//================================================
#include "GInclude.h"
//================================================
class GAnimal {
public:
    GAnimal();
    ~GAnimal();

public:
    void setName(const string &name);
    void showName() const;

protected:
    string m_name;
};
//================================================
#endif
//================================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Classe mère (GAnimal.cpp)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//================================================
#include "GAnimal.h"
//================================================
GAnimal::GAnimal() {

}
//================================================
GAnimal::~GAnimal() {
	
}
//================================================
void GAnimal::setName(const string &name) {
    m_name = name;
}
//================================================
void GAnimal::showName() const {
    cout &lt;&lt; "Je suis un animal: " &lt;&lt; m_name &lt;&lt; "\n";
}
//================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Héritage de classe-Classe fille"><a class="Link9" href="#Héritage de classe">Classe fille</a></h2><br><h3 class="Title8 GTitle3">Classe fille (GAnimalCat.h)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//================================================
#ifndef _GAnimalCat_
#define _GAnimalCat_
//================================================
#include "GAnimal.h"
//================================================
class GAnimalCat : public GAnimal {
public:
    GAnimalCat();
    ~GAnimalCat();

public:
    void setBreed(const string &breed);
    void print() const;

private:
    string m_breed;
};
//================================================
#endif
//================================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Classe fille (GAnimalCat.cpp)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//================================================
#include "GAnimalCat.h"
//================================================
GAnimalCat::GAnimalCat() {

}
//================================================
GAnimalCat::~GAnimalCat() {
	
}
//================================================
void GAnimalCat::setBreed(const string &breed) {
    m_breed = breed;
}
//================================================
void GAnimalCat::print() const {
    cout &lt;&lt; "Je suis un chat: " &lt;&lt; m_name &lt;&lt; " | " &lt;&lt; m_breed &lt;&lt; "\n";
}
//================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Héritage de classe-Programme de Test"><a class="Link9" href="#Héritage de classe">Programme de Test</a></h2><br><h3 class="Title8 GTitle3">Programme de Test</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessInheritance::run(int argc, char **argv) {
    GAnimal* lAnimal = new GAnimal;
    lAnimal-&gt;setName("JERRY");
    lAnimal-&gt;showName();
    delete lAnimal;

    GAnimalCat* lCat = new GAnimalCat;
    lCat-&gt;setName("TOM");
    lCat-&gt;setBreed("Siamois");
    lCat-&gt;showName();
    lCat-&gt;print();
    delete lAnimal;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Héritage de classe-Résultat"><a class="Link9" href="#Héritage de classe">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Inheritance.png" alt="img/Inheritance.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Polymorphisme"><a class="Link3" href="#">Polymorphisme</a></h1><div class="Body3">Le but de cette section est de vous apprendre le <span class="GColor1" style="color:lime;">Polymorphisme </span>avec le C++.<br>Produit par <b>Gérard KESSE</b>.<br><br>Le Polymorphisme permet à une classe mère de prendre plusieurs formes, selon la classe fille pointée.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1556788696321"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1556788696321");</script></div><br><h2 class="Title7 GTitle2" id="Polymorphisme-Classe mère"><a class="Link9" href="#Polymorphisme">Classe mère</a></h2><br><h3 class="Title8 GTitle3">Classe mère (GAircraft.h)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//================================================
#ifndef _GAircraft_
#define _GAircraft_
//================================================
#include "GInclude.h"
//================================================
class GAircraft {
public:
    GAircraft();
    virtual ~GAircraft();

public:
    void setName(const string &name);
    virtual void print() const;

protected:
    string m_name;
};
//================================================
#endif
//================================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Classe mère (GAircraft.cpp)</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//================================================
#include "GAircraft.h"
//================================================
GAircraft::GAircraft() {

}
//================================================
GAircraft::~GAircraft() {
	
}
//================================================
void GAircraft::setName(const string &name) {
    m_name = name;
}
//================================================
void GAircraft::print() const {
    cout &lt;&lt; "Je suis un avion: " &lt;&lt; m_name &lt;&lt; "\n";
}
//================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Polymorphisme-Classe fille"><a class="Link9" href="#Polymorphisme">Classe fille</a></h2><br><h3 class="Title8 GTitle3">Classe fille (GAircraftAirbus.h)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//================================================
#ifndef _GAircraftAirbus_
#define _GAircraftAirbus_
//================================================
#include "GAircraft.h"
//================================================
class GAircraftAirbus : public GAircraft {
public:
    GAircraftAirbus();
    ~GAircraftAirbus();

public:
    void setName(const string &name);
    void print() const;
};
//================================================
#endif
//================================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Classe fille (GAircraftAirbus.cpp)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//================================================
#include "GAircraftAirbus.h"
//================================================
GAircraftAirbus::GAircraftAirbus() {

}
//================================================
GAircraftAirbus::~GAircraftAirbus() {
	
}
//================================================
void GAircraftAirbus::setName(const string &name) {
    m_name = name;
}
//================================================
void GAircraftAirbus::print() const {
    cout &lt;&lt; "Je suis un Airbus: " &lt;&lt; m_name &lt;&lt; "\n";
}
//================================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Polymorphisme-Programme de Test"><a class="Link9" href="#Polymorphisme">Programme de Test</a></h2><br><h3 class="Title8 GTitle3">Programme de Test</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessPolymorphism::run(int argc, char **argv) {
    GAircraft* lAircraft = 0;

    lAircraft = new GAircraft;
    lAircraft-&gt;setName("BOEING 747");
    lAircraft-&gt;print();
    delete lAircraft;

    lAircraft = new GAircraftAirbus;
    lAircraft-&gt;setName("AIRBUS A380");
    lAircraft-&gt;print();
    delete lAircraft;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Polymorphisme-Résultat"><a class="Link9" href="#Polymorphisme">Résultat</a></h2><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Polymorphism.png" alt="img/Polymorphism.png"></div></div></div></div></div><br>