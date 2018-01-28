//===============================================
#include "GFactory.h"
#include "GAnimal.h"
//===============================================
int main(int argc, char** argv) {
    GAnimal* m_animal = 0;

    m_animal = GFactory::Create("Cat");
    m_animal->showName();

    m_animal = GFactory::Create("Dog");
    m_animal->showName();

    return 0;
}
//===============================================
