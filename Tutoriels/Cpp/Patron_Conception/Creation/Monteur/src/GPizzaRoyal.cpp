//===============================================
#include "GPizzaRoyal.h"
//===============================================
GPizzaRoyal::GPizzaRoyal() {

}
//===============================================
GPizzaRoyal::~GPizzaRoyal() {

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
