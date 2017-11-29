//===============================================
#ifndef _GOSXFactory_
#define _GOSXFactory_
//===============================================
#include "GAbstractFactory.h"
//===============================================
class GOSXFactory : public GAbstractFactory {
private:
    GOSXFactory();

public:
    ~GOSXFactory();
    static GOSXFactory* Instance();

public:
    GButton* createButton();

private:
    static GOSXFactory* m_instance;
};
//===============================================
#endif
//===============================================
