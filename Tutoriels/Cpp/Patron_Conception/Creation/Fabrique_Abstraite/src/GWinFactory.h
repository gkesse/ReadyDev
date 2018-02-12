//===============================================
#ifndef _GWinFactory_
#define _GWinFactory_
//===============================================
#include "GAbstractFactory.h"
//===============================================
class GWinFactory : public GAbstractFactory {
public:
    GWinFactory();
    ~GWinFactory();

public:
    GButton* createButton();
};
//===============================================
#endif
//===============================================
