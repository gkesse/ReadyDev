//===============================================
#ifndef _GAbstractFactory_
#define _GAbstractFactory_
//===============================================
#include "GButton.h"
//===============================================
class GAbstractFactory {
public:
    static GAbstractFactory* Instance();

public:
    virtual GButton* createButton() = 0;
};
//===============================================
#endif
//===============================================
