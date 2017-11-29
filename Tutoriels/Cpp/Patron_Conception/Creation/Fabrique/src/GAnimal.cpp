//===============================================
#include "GAnimal.h"
#include "GCat.h"
#include "GDog.h"
#include "GConfig.h"
//===============================================
GAnimal* GAnimal::Instance() {
    string m_animal = GConfig::Instance()->getData("Animal");
    if(m_animal == "Cat") {return GCat::Instance();}
    else if(m_animal == "Dog") {return GDog::Instance();}
    return 0;
}
//===============================================
