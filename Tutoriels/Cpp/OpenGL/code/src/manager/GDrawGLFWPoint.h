//===============================================
#ifndef _GDrawGLFWPoint_
#define _GDrawGLFWPoint_
//================================================
#include "GDrawGLFW.h"
//===============================================
class GDrawGLFWPoint : public GDrawGLFW {
public:
    GDrawGLFWPoint();
    ~GDrawGLFWPoint();

public:
    static GDrawGLFWPoint* Instance();
    void initDraw();
    void updateCamera();
    void updateDraw();
    void draw();

private:
    static GDrawGLFWPoint* m_instance;
};
//===============================================
#endif
//===============================================
