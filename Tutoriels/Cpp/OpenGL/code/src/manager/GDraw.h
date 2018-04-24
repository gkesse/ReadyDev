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
    virtual void initDraw();
    virtual void updateCamera();
    virtual void updateDraw();
    virtual void draw();
    virtual void resize(int w, int h);

private:
    static GDraw* m_instance;
};
//===============================================
#endif
//===============================================
