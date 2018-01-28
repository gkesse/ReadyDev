//===============================================
#include "GBuilder.h"
#include "GPizzaRoyal.h"
#include "GPizzaHawaii.h"
//===============================================
void GBuilder::createPizza() {
    m_pizza = new GPizza;
}
//===============================================
GPizza *GBuilder::getPizza() const {
    return m_pizza;
}
//===============================================
void GBuilder::build() {
    createPizza();
    buildDough();
    buildSauce();
    buildGarnish();
}
//===============================================
GBuilder* GBuilder::Create(const string& pizza) {
    if(pizza == "Royal") {return new GPizzaRoyal;}
    else if(pizza == "Hawaii") {return new GPizzaHawaii;}
    return 0;
}
//===============================================
