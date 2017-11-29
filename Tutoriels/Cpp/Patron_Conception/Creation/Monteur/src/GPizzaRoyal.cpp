//===============================================
#include "GPizzaRoyal.h"
//===============================================
GPizzaRoyal* GPizzaRoyal::m_instance = 0;
//===============================================
GPizzaRoyal::GPizzaRoyal() {

}
//===============================================
GPizzaRoyal::~GPizzaRoyal() {

}
//===============================================
GPizzaRoyal* GPizzaRoyal::Instance() {
    if(m_instance == 0) {
        m_instance = new GPizzaRoyal;
    }
    return m_instance;
}
//===============================================
void GPizzaRoyal::buildDough() {
    m_pizza->setDough("Royal Dough");
}
//===============================================
void GPizzaRoyal::buildSauce() {
    m_pizza->setSauce("Royal Sauce");
}
//===============================================
void GPizzaRoyal::buildGarnish() {
    m_pizza->setGarnish("Royal Garnish");
}
//===============================================
