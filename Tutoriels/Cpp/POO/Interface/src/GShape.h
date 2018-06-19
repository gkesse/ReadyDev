//===============================================
#ifndef _GShape_
#define _GShape_
//===============================================
#include <iostream>
#include <string>
//===============================================
using namespace std;
//===============================================
class GShape {
public:
    virtual double area() const = 0;
    virtual double perimeter() const = 0;
};
//===============================================
#endif
//===============================================
