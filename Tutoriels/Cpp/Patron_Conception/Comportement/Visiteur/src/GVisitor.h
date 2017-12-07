//===============================================
#ifndef _GVisitor_
#define _GVisitor_
//===============================================
#include <iostream>
#include <string>
#include <memory>
#include <vector>
//===============================================
using namespace std;
//===============================================
class GWheel;
class GEngine;
class GBody;
class GCar;
//===============================================
class GVisitor {
public:
    virtual void visit(GWheel* wheel) = 0;
    virtual void visit(GBody* body) = 0;
    virtual void visit(GEngine* engine) = 0;
    virtual void visit(GCar* car) = 0;
};
//===============================================
#endif
//===============================================
