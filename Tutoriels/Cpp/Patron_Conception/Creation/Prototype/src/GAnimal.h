//===============================================
#ifndef _GAnimal_
#define _GAnimal_
//===============================================
#include "GPrototype.h"
//===============================================
class GAnimal : public GPrototype {
public:
    GAnimal();
    GAnimal(const GAnimal& animal);
    ~GAnimal();

public:
    GPrototype* clone();
    void print();
    void setFamily(const string& family);
    void setName(const string& name);

private:
    string m_family;
    string m_name;
};
//===============================================
#endif
//===============================================
