//===============================================
#ifndef _GPrototype_
#define _GPrototype_
//===============================================
#include <iostream>
#include <string>
//===============================================
using namespace std;
//===============================================
class GPrototype {
public:
    virtual GPrototype* clone() = 0;
    virtual void print() = 0;
};
//===============================================
#endif
//===============================================
