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
void GPerson::toString() const {
    string lData = "";
    lData += "Description: ";
    lData += m_name + " | " + m_email + "\n";
    cout << lData.c_str();
}
//===============================================
