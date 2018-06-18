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
void GPersonStudent::toString() const {
    string lData = "";
    lData += "Etudiant: ";
    lData += m_name + " | " + m_email + " | " + to_string(m_average);
    lData += "\n";
    cout << lData.c_str();
}
//===============================================
