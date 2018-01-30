//===============================================
#include "GPizzaHawaii.h"
//===============================================
GPizzaHawaii::GPizzaHawaii() {

}
//===============================================
GPizzaHawaii::~GPizzaHawaii() {

}
//===============================================
void GPizzaHawaii::buildDough() {
    m_pizza->setDough("Hawaii Dough");
}
//===============================================
void GPizzaHawaii::buildSauce() {
    m_pizza->setSauce("Hawaii Sauce");
}
//===============================================
void GPizzaHawaii::buildGarnish() {
    m_pizza->setGarnish("Hawaii Garnish");
}
//===============================================
