//===============================================
#ifndef _GDrawGLFW_
#define _GDrawGLFW_
//================================================
#include "GDraw.h"
//===============================================
class GDrawGLFW : public GDraw {
public:
    GDrawGLFW();
    ~GDrawGLFW();

public:
    static GDrawGLFW* Instance();

private:
    static GDrawGLFW* m_instance;
};
//===============================================
#endif
//===============================================
