//===============================================
#ifndef _GDrawGLFWLine_
#define _GDrawGLFWLine_
//================================================
#include "GDrawGLFW.h"
//===============================================
class GDrawGLFWLine : public GDrawGLFW {
public:
    GDrawGLFWLine();
    ~GDrawGLFWLine();

public:
    static GDrawGLFWLine* Instance();
    void initDraw();
    void updateCamera(int width, int height);
    void updateDraw();
    void draw();

private:
    static GDrawGLFWLine* m_instance;
};
//===============================================
#endif
//===============================================
