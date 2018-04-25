//===============================================
#ifndef _GDraw_
#define _GDraw_
//================================================
#include "GInclude.h"
//===============================================
class GDraw {
public:
    GDraw();
    ~GDraw();

public:
    static GDraw* Instance();
    void setAntiAliasing();
    void drawLine(GVertexInfo v1, GVertexInfo v2, float width=1.0f);
    virtual void initDraw();
    virtual void initCamera(int width, int height);
    virtual void updateCamera(int width, int height);
    virtual void updateDraw();
    virtual void draw();

private:
    static GDraw* m_instance;
};
//===============================================
#endif
//===============================================
