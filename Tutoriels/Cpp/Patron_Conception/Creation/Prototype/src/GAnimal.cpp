//===============================================
#include "GAnimal.h"
//===============================================
GAnimal::GAnimal() {
    m_family = "_NONE_";
    m_name = "_NONE_";
}
//===============================================
GAnimal::GAnimal(const GAnimal& animal) {
    m_family = animal.m_family;
    m_name = animal.m_name;
}
//===============================================
GAnimal::~GAnimal() {

}
//===============================================
GPrototype* GAnimal::clone() {
    return new GAnimal(*this);
}
//===============================================
void GAnimal::print() {
    cout << "Prototype : Animal" << "\n";
    cout << "Family : " << m_family << "\n";
    cout << "Name : " << m_name << "\n";
}
//===============================================
void GAnimal::setFamily(const string& family) {
    m_family = family;
}
//===============================================
void GAnimal::setName(const string& name) {
    m_name = name;
}
//===============================================
