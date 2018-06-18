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
void GPersonProfessor::toString() const {
    string lData = "";
    lData += "Professeur: ";
    lData += m_name + " | " + m_email + " | " + m_lesson;
    lData += "\n";
    cout << lData.c_str();
}
//===============================================
