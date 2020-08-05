//===============================================
#include "GPersonProfessor.h"
//===============================================
GPersonProfessor::GPersonProfessor() {
    m_lesson = "";
}
//===============================================
GPersonProfessor::GPersonProfessor(const string& name, const string& email, const string& lesson) :
    GPerson(name, email) {
    m_lesson = lesson;
}
//===============================================
GPersonProfessor::~GPersonProfessor() {

}
//===============================================
void GPersonProfessor::print() const {
    string lData = "";
    lData += "Professeur: Je suis Professeur de ";
    lData += m_lesson;
    lData += "\n";
    cout << lData.c_str();
}
//===============================================
