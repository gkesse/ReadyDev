//===============================================
#include "GPersonMinor.h"
//===============================================
GPersonMinor::GPersonMinor() {

}
//===============================================
GPersonMinor::GPersonMinor(const string& name, const string& email) :
    GPerson(name, email) {

}
//===============================================
GPersonMinor::~GPersonMinor() {

}
//===============================================
void GPersonMinor::print() const {
    string lData = "";
    lData += "Mineur: ";
    lData += "Nom: " + m_name + " | ";
    lData += "Email: " + m_email;
    lData += "\n";
    cout << lData.c_str();
}
//===============================================
