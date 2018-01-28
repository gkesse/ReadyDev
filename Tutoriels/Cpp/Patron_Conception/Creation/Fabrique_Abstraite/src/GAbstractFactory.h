//===============================================
#ifndef _GAbstractFactory_
#define _GAbstractFactory_
//===============================================
#include "GButton.h"
//===============================================
class GAbstractFactory {
public:
    static GAbstractFactory* Create(const string& factory);

public:
    virtual GButton* createButton() = 0;
};
//===============================================
#endif
//===============================================
