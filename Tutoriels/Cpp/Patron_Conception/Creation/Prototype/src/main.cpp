//===============================================
#include "GAnimal.h"
#include "GCar.h"
//===============================================
int main(int argc, char** argv) {
    GAnimal* m_animal = 0;
    GAnimal* m_animal2 = 0;
    GAnimal* m_animal3 = 0;

    GCar* m_car = 0;
    GCar* m_car2 = 0;
    GCar* m_car3 = 0;

    m_animal = new GAnimal;
    m_animal->print();
    cout << "\n";

    m_animal2 = (GAnimal*)m_animal->clone();
    m_animal2->setFamily("Chien");
    m_animal2->setName("Berger Allemand");
    m_animal2->print();
    cout << "\n";

    m_animal3 = (GAnimal*)m_animal2->clone();
    m_animal3->setFamily("Chat");
    m_animal3->setName("British Shorthair");
    m_animal3->print();
    cout << "\n";

    m_car = new GCar;
    m_car->print();
    cout << "\n";

    m_car2 = (GCar*)m_car->clone();
    m_car2->setMaker("Peugeot");
    m_car2->setName("Peugeot 308");
    m_car2->setPrice("20.550 Euro");
    m_car2->print();
    cout << "\n";

    m_car3 = (GCar*)m_car2->clone();
    m_car3->setMaker("Renault");
    m_car3->setName("Renault Clio");
    m_car3->setPrice("14.100 Euro");
    m_car3->print();
    cout << "\n";

    return 0;
}
//===============================================
