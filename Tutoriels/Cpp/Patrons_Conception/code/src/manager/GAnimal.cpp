//================================================
#include "GAnimal.h"
//================================================
GAnimal::GAnimal() {

}
//================================================
GAnimal::~GAnimal() {
	
}
//================================================
void GAnimal::setName(const string &name) {
    m_name = name;
}
//================================================
void GAnimal::showName() const {
    cout << "Je suis un animal: " << m_name << "\n";
}
//================================================