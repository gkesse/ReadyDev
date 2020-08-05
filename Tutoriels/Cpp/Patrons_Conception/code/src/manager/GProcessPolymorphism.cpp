//===============================================
#include "GProcessPolymorphism.h"
#include "GAircraft.h"
#include "GAircraftAirbus.h"
//===============================================
GProcessPolymorphism* GProcessPolymorphism::m_instance = 0;
//===============================================
GProcessPolymorphism::GProcessPolymorphism() {

}
//===============================================
GProcessPolymorphism::~GProcessPolymorphism() {

}
//===============================================
GProcessPolymorphism* GProcessPolymorphism::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessPolymorphism;
    }
    return m_instance;
}
//===============================================
void GProcessPolymorphism::run(int argc, char **argv) {
    GAircraft* lAircraft = 0;

    lAircraft = new GAircraft;
    lAircraft->setName("BOEING 747");
    lAircraft->print();
    delete lAircraft;

    lAircraft = new GAircraftAirbus;
    lAircraft->setName("AIRBUS A380");
    lAircraft->print();
    delete lAircraft;
}
//===============================================
