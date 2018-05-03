//===============================================
#ifndef _GDrawQt_
#define _GDrawQt_
//================================================
#include "GDraw.h"
//===============================================
class GDrawQt : public GDraw {
public:
    GDrawQt();
    ~GDrawQt();

public:
    static GDrawQt* Instance();

private:
    static GDrawQt* m_instance;
};
//===============================================
#endif
//===============================================
