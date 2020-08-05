//===============================================
#include "GPersonStudent.h"
//===============================================
GPersonStudent::GPersonStudent() {
    m_average = 0.0;
}
//===============================================
GPersonStudent::GPersonStudent(const string& name, const string& email, const string& average) :
    GPerson(name, email) {
    m_average = average;
}
//===============================================
GPersonStudent::~GPersonStudent() {

}
//===============================================
void GPersonStudent::print() const {
    string lData = "";
    lData += "Etudiant: Je suis Etudiant et ma moyenne est de ";
    lData += m_average;
    lData += "\n";
    cout << lData.c_str();
}
//===============================================
