//===============================================
#include "GPersonStudent.h"
//===============================================
GPersonStudent::GPersonStudent() {
    m_average = 0.0;
}
//===============================================
GPersonStudent::GPersonStudent(const string& name, const string& email, const float& average) :
    GPerson(name, email) {
    m_average = average;
}
//===============================================
GPersonStudent::~GPersonStudent() {

}
//===============================================
void GPersonStudent::print() const {
    string lData = "";
    lData += "Etudiant: ";
    lData += "Nom: " + m_name + " | ";
    lData += "Email: " + m_email + " | ";
    lData += "Moyenne: " + to_string(m_average);
    lData += "\n";
    cout << lData.c_str();
}
//===============================================
void GPersonStudent::printType() const {
    string lData = "";
    lData += "Etudiant: Je suis Etudiant et ma moyenne est de ";
    lData += to_string(m_average);
    lData += "\n";
    cout << lData.c_str();
}
//===============================================
