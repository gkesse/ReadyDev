<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre les patrons de conception avec le C++</div></a></div></div><div class="Body2 Orange">Le <b>C++</b> est un langage de programmation orientée objet.<br>Les <b>Patrons de Conception</b> sont des modèles de conception basés sur la programmation orientée objet.<br>Le but de ce tutoriel est de vous apprendre les <b>Patrons de Conception</b> avec le <b>C++</b>.<br>Produit par <b>Gérard KESSE</b>.<br>&nbsp;<br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation sous Windows"><a class="Link3" href="#">Installation sous Windows</a></h1><div class="Body3">Le but de cette section est de vous présenter les différents outils nécessaires pour apprendre les <span class="GColor1" style="color:lime;">Patrons de Conception</span> avec le <span class="GColor1" style="color:lime;">C++</span>, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>Dans ce tutoriel, nous utiliserons, sous Windows:<br>-    MinGW, comme compilateur.<br>-    Notepad++, comme éditeur de texte.<br><br><h3 class="Title8 GTitle3">Télécharger MinGW</h3><a class="Link7 GLink1" style="color:lime;" href="http://mingw.org/">http://mingw.org/</a><br><br><h3 class="Title8 GTitle3">Télécharger Notepad++</h3><a class="Link7 GLink1" style="color:lime;" href="https://notepad-plus-plus.org/fr/">https://notepad-plus-plus.org/fr/</a></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Patron Singleton"><a class="Link3" href="#">Patron Singleton</a></h1><div class="Body3">Le but de cette section est de vous apprendre à implémenter le <span class="GColor1" style="color:lime;">patron singleton</span> avec le C++.<br>Produit par <b>Gérard KESSE</b>.<br><br>Le Patron Singleton permet de restreindre l'instanciation d'une classe à un seul objet.<br><br><h3 class="Title8 GTitle3">Programme principal (main.cpp)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Déclarer le Singleton (GSingleton.h)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Définir le Singleton (GSingleton.cpp)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Singleton.png" alt="img/Singleton.png"></div></div></div></div></div><br><br>