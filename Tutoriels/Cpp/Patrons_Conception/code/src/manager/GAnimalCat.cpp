//================================================
#include "GAnimalCat.h"
//================================================
GAnimalCat::GAnimalCat() {

}
//================================================
GAnimalCat::~GAnimalCat() {
	
}
//================================================
void GAnimalCat::setBreed(const string &breed) {
    m_breed = breed;
}
//================================================
void GAnimalCat::print() const {
    cout << "Je suis un chat: " << m_name << " | " << m_breed << "\n";
}
//================================================
