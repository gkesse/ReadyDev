//===============================================
#include "GProcessInheritance.h"
#include "GAnimal.h"
#include "GAnimalCat.h"
//===============================================
GProcessInheritance* GProcessInheritance::m_instance = 0;
//===============================================
GProcessInheritance::GProcessInheritance() {

}
//===============================================
GProcessInheritance::~GProcessInheritance() {

}
//===============================================
GProcessInheritance* GProcessInheritance::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessInheritance;
    }
    return m_instance;
}
//===============================================
void GProcessInheritance::run(int argc, char **argv) {
    GAnimal* lAnimal = new GAnimal;
    lAnimal->setName("JERRY");
    lAnimal->showName();
    delete lAnimal;

    GAnimalCat* lCat = new GAnimalCat;
    lCat->setName("TOM");
    lCat->setBreed("Siamois");
    lCat->showName();
    lCat->print();
    delete lAnimal;
}
//===============================================
