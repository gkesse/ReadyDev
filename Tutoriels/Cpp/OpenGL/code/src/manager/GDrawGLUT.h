//===============================================
#ifndef _GDrawGLUT_
#define _GDrawGLUT_
//================================================
#include "GInclude.h"
#include "GDraw.h"
//===============================================
#define VERTICES_BUFFER_MAX (256)
//===============================================
class GDrawGLUT : public GDraw {
public:
    GDrawGLUT();
    ~GDrawGLUT();

public:
    static GDrawGLUT* Instance();
    void initDraw();
    void draw();

private:
    static GDrawGLUT* m_instance;
    float m_verticesMap[VERTICES_BUFFER_MAX];
};
//===============================================
#endif
//===============================================
