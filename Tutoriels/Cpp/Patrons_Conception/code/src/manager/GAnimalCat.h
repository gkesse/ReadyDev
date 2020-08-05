//================================================
#ifndef _GAnimalCat_
#define _GAnimalCat_
//================================================
#include "GAnimal.h"
//================================================
class GAnimalCat : public GAnimal {
public:
    GAnimalCat();
    ~GAnimalCat();

public:
    void setBreed(const string &breed);
    void print() const;

private:
    string m_breed;
};
//================================================
#endif
//================================================
