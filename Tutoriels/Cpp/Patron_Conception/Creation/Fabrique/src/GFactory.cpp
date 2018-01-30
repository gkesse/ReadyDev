//===============================================
#include "GFactory.h"
#include "GCat.h"
#include "GDog.h"
//===============================================
GAnimal* GFactory::Create(const string& animal) {
    if(animal == "Cat") {return new GCat;}
    else if(animal == "Dog") {return new GDog;}
    return 0;
}
//===============================================
