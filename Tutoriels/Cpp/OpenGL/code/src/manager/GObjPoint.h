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
    virtual void initDraw();
    virtual void updateCamera(int width, int height);
    virtual void updateDraw();
    virtual void draw();

private:
    static GDraw* m_instance;
};
//===============================================
#endif
//===============================================
