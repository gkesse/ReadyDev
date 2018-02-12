//===============================================
#include "GCar.h"
//===============================================
GCar::GCar() {
    m_maker = "_NONE_";
    m_name = "_NONE_";
    m_price = "_NONE_";
}
//===============================================
GCar::GCar(const GCar& car) {
    m_maker = car.m_maker;
    m_name = car.m_name;
    m_price = car.m_price;
}
//===============================================
GCar::~GCar() {

}
//===============================================
GPrototype* GCar::clone() {
    return new GCar(*this);
}
//===============================================
void GCar::print() {
    cout << "Prototype : Car" << "\n";
    cout << "Maker : " << m_maker << "\n";
    cout << "Name : " << m_name << "\n";
    cout << "Price : " << m_price << "\n";
}
//===============================================
void GCar::setMaker(const string& maker) {
    m_maker = maker;
}
//===============================================
void GCar::setName(const string& name) {
    m_name = name;
}
//===============================================
void GCar::setPrice(const string& price) {
    m_price = price;
}
//===============================================
