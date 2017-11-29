//===============================================
#ifndef _GAnimal_
#define _GAnimal_
//===============================================
#include <iostream>
#include <string>
//===============================================
using namespace std;
//===============================================
class GAnimal {
public:
    static GAnimal* Instance();

public:
    virtual void showName() = 0;
};
//===============================================
#endif
//===============================================
