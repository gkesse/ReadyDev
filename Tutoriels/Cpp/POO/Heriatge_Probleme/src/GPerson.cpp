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
    lData += "Personne: Je suis Mineur sans emploi";
    lData += "\n";
    cout << lData.c_str();
}
//===============================================
void GPerson::printInfo() const {
    string lData = "";
    lData += "Personne: Je m'appelle ";
    lData += m_name + " et mon email est " + m_email;
    lData += "\n";
    cout << lData.c_str();
}
//===============================================
