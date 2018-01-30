//===============================================
#ifndef _GPrintVisitor_
#define _GPrintVisitor_
//===============================================
#include "GVisitor.h"
//===============================================
class GPrintVisitor : public GVisitor {
public:
    GPrintVisitor();
    ~GPrintVisitor();

public:
    void visit(GWheel* wheel);
    void visit(GBody* body);
    void visit(GEngine* engine);
    void visit(GCar* car);
};
//===============================================
#endif
//===============================================
