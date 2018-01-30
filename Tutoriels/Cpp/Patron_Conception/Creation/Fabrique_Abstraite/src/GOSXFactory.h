//===============================================
#ifndef _GOSXFactory_
#define _GOSXFactory_
//===============================================
#include "GAbstractFactory.h"
//===============================================
class GOSXFactory : public GAbstractFactory {
public:
    GOSXFactory();
    ~GOSXFactory();

public:
    GButton* createButton();
};
//===============================================
#endif
//===============================================
