//===============================================
#include "GPerson.h"
//===============================================
GPerson::GPerson() {
    m_name = "";
    m_email = "";
}
//===============================================
GPerson::GPerson(const string& name, const string& email) {
    m_name = name;
    m_email = email;
}
//===============================================
GPerson::~GPerson() {

}
//===============================================
void GPerson::print() const {
    string lData = "";
    lData += "Personne: ";
    lData += "Nom: " + m_name + " | ";
    lData += "Email: " + m_email;
    lData += "\n";
    cout << lData.c_str();
}
//===============================================
