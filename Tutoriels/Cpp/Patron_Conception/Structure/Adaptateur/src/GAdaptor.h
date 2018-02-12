//===============================================
#ifndef _GAdaptor_
#define _GAdaptor_
//===============================================
#include "GDeveloper.h"
#include "GArchitect.h"
//===============================================
class GAdaptor : public GDeveloper {
public:
    GAdaptor();
    ~GAdaptor();

public:
    void writeCode();

private:
    GArchitect* m_architect;
};
//===============================================
#endif
//===============================================
