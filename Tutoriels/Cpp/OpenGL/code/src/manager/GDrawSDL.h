//===============================================
#ifndef _GDrawSDL_
#define _GDrawSDL_
//================================================
#include "GDraw.h"
//===============================================
class GDrawSDL : public GDraw {
public:
    GDrawSDL();
    ~GDrawSDL();

public:
    static GDrawSDL* Instance();

private:
    static GDrawSDL* m_instance;
};
//===============================================
#endif
//===============================================
