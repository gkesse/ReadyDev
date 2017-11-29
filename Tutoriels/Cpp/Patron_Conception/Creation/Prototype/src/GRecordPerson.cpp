//===============================================
#include "GRecordPerson.h"
//===============================================
GRecordPerson* GRecordPerson::m_instance = 0;
//===============================================
GRecordPerson::GRecordPerson() {
    m_name = "Pierre DUPONT";
    m_city = "Toulouse";
}
//===============================================
GRecordPerson::~GRecordPerson() {

}
//===============================================
GRecordPerson* GRecordPerson::Instance() {
    if(m_instance == 0) {
        m_instance = new GRecordPerson;
    }
    return m_instance;
}
//===============================================
GRecord* GRecordPerson::clone() {
    return new GRecordPerson;
}
//===============================================
void GRecordPerson::print() const {
    cout << "Record Person : ";
    cout << m_name << " | ";
    cout << m_city << "\n";
}
//===============================================
void GRecordPerson::setName(const string& name) {
    m_name = name;
}
//===============================================
void GRecordPerson::setCity(const string& city) {
    m_city = city;
}
//===============================================
