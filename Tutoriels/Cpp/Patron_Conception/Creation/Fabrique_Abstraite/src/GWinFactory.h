//===============================================
#ifndef _GWinFactory_
#define _GWinFactory_
//===============================================
#include "GAbstractFactory.h"
//===============================================
class GWinFactory : public GAbstractFactory {
private:
    GWinFactory();

public:
    ~GWinFactory();
    static GWinFactory* Instance();

public:
    GButton* createButton();

private:
    static GWinFactory* m_instance;
};
//===============================================
#endif
//===============================================
