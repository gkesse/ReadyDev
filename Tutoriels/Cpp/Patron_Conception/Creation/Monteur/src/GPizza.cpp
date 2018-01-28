//===============================================
#include "GPizza.h"
//===============================================
GPizza::GPizza() {

}
//===============================================
GPizza::~GPizza() {

}
//===============================================
void GPizza::setDough(const string& dough) {
    m_dough = dough;
}
//===============================================
void GPizza::setSauce(const string& sauce) {
    m_sauce = sauce;
}
//===============================================
void GPizza::setGarnish(const string& garnish) {
    m_garnish = garnish;
}
//===============================================
void GPizza::print() const {
    cout << "Pizza : ";
    cout << m_dough << " | ";
    cout << m_sauce << " | ";
    cout << m_garnish << "\n";
}
//===============================================
