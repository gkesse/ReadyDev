//===============================================
#ifndef _GDrawQtBackground_
#define _GDrawQtBackground_
//================================================
#include "GInclude.h"
#include "GDrawQt.h"
//===============================================
class GDrawQtBackground : public GDrawQt {
public:
    GDrawQtBackground();
    ~GDrawQtBackground();

public:
    static GDrawQtBackground* Instance();

private:
    static GDrawQtBackground* m_instance;
};
//===============================================
#endif
//===============================================
