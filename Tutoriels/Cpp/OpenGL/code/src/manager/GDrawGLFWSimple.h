//===============================================
#ifndef _GDrawGLFWSimple_
#define _GDrawGLFWSimple_
//================================================
#include "GDrawGLFW.h"
//===============================================
class GDrawGLFWSimple : public GDrawGLFW {
public:
    GDrawGLFWSimple();
    ~GDrawGLFWSimple();

public:
    static GDrawGLFWSimple* Instance();
    void updateDraw();
    void draw();

private:
    static GDrawGLFWSimple* m_instance;
};
//===============================================
#endif
//===============================================
