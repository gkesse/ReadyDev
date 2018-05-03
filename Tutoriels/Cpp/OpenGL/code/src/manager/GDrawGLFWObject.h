//===============================================
#ifndef _GDrawGLFWObject_
#define _GDrawGLFWObject_
//================================================
#include "GDrawGLFW.h"
//===============================================
class GDrawGLFWObject : public GDrawGLFW {
public:
    GDrawGLFWObject();
    ~GDrawGLFWObject();

public:
    static GDrawGLFWObject* Instance();
    void initDraw();
    void updateCamera(int width, int height);
    void updateDraw();
    void draw();

private:
    static GDrawGLFWObject* m_instance;
};
//===============================================
#endif
//===============================================
