//===============================================
#ifndef _GDrawQtSimple_
#define _GDrawQtSimple_
//================================================
#include "GInclude.h"
#include "GDrawQt.h"
//===============================================
class GDrawQtSimple : public GDrawQt {
public:
    GDrawQtSimple();
    ~GDrawQtSimple();

public:
    static GDrawQtSimple* Instance();
    void initDraw();
    void draw();

private:
    static GDrawQtSimple* m_instance;
    GLuint m_vertexArrays[1];
};
//===============================================
#endif
//===============================================
