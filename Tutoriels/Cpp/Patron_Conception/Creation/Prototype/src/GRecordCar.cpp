//===============================================
#include "GRecordCar.h"
//===============================================
GRecordCar* GRecordCar::m_instance = 0;
//===============================================
GRecordCar::GRecordCar() {
    m_brand = "Peugeot";
    m_name = "3008";
}
//===============================================
GRecordCar::~GRecordCar() {

}
//===============================================
GRecordCar* GRecordCar::Instance() {
    if(m_instance == 0) {
        m_instance = new GRecordCar;
    }
    return m_instance;
}
//===============================================
GRecord* GRecordCar::clone() {
    return new GRecordCar;
}
//===============================================
void GRecordCar::print() {
    cout << "Record Car : ";
    cout << m_brand << " | ";
    cout << m_name << "\n";
}
//===============================================
void GRecordCar::setBrand(const string& brand) {
    m_brand = brand;
}
//===============================================
void GRecordCar::setName(const string& name) {
    m_name = name;
}
//===============================================
