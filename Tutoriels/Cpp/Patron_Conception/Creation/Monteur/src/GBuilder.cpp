//===============================================
#include "GBuilder.h"
#include "GPizzaRoyal.h"
#include "GPizzaHawaii.h"
#include "GConfig.h"
//===============================================
void GBuilder::createPizza() {
    m_pizza = new GPizza;
}
//===============================================
GPizza *GBuilder::getPizza() const {
    return m_pizza;
}
//===============================================
GBuilder* GBuilder::Instance() {
    string m_pizza = GConfig::Instance()->getData("Pizza");
    if(m_pizza == "Royal") {return GPizzaRoyal::Instance();}
    else if(m_pizza == "Hawaii") {return GPizzaHawaii::Instance();}
    return 0;
}
//===============================================
void GBuilder::build() {
    createPizza();
    buildDough();
    buildSauce();
    buildGarnish();
}
//===============================================
