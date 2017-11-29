//===============================================
#include "GPizzaHawaii.h"
//===============================================
GPizzaHawaii* GPizzaHawaii::m_instance = 0;
//===============================================
GPizzaHawaii::GPizzaHawaii() {

}
//===============================================
GPizzaHawaii::~GPizzaHawaii() {

}
//===============================================
GPizzaHawaii* GPizzaHawaii::Instance() {
    if(m_instance == 0) {
        m_instance = new GPizzaHawaii;
    }
    return m_instance;
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
