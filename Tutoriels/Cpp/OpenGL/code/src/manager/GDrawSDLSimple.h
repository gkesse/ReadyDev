//===============================================
#ifndef _GDrawSDLSimple_
#define _GDrawSDLSimple_
//================================================
#include "GInclude.h"
#include "GDrawSDL.h"
//===============================================
class GDrawSDLSimple : public GDrawSDL {
public:
    GDrawSDLSimple();
    ~GDrawSDLSimple();

public:
    static GDrawSDLSimple* Instance();
    void initDraw();
    void draw();

private:
    static GDrawSDLSimple* m_instance;
    float m_vertices[6];
};
//===============================================
#endif
//===============================================
